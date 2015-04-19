<?php
/**
 * Created by PhpStorm.
 * User: Awalin Yudhana
 * Date: 16/04/2015
 * Time: 16:37
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class PurchaseOrder extends MX_Controller
{
    protected $id_staff;

    protected $cache = array();

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Caching');
        $this->load->model('ModPurchaseOrder');
        $this->id_staff = $this->config->item('id_staff');
    }

    public function index()
    {
        if ($this->getCacheStatus()) {
            $this->insertPOD();
            return false;
        }
        $principal = array('' => '');
        foreach ($this->db->get('principal')->result() as $object) {
            $principal[$object->id_principal] = $object->name;
        }
        $data['principals'] = $principal;

        if ($this->input->post()) {
            if ($this->form_validation->run('po') == TRUE) {
                $data = array(
                    'table' => 'purchase_order',
                    'value' => array(
                        'invoice_number' => $this->input->post('invoice_number'),
                        'id_principal' => $this->input->post('id_principal'),
                        'id_staff' => $this->id_staff,
                        'date' => $this->input->post('date'),
                        'due_date' => $this->input->post('due_date')
                    ),
                    'detail' => array(
                        'table' => 'purchase_order_detail',
                        'foreign_key' => 'id_po',
                        'value' => null
                    )
                );
                $this->caching->cacheQuery('PO', $this->id_staff, json_encode($data));
                redirect('purchase-order/detail');
            }
        }
        $this->parser->parse("po.tpl", $data);
    }

    public function insertPOD()
    {
        if (!$this->getCacheStatus()) {
            redirect('purchase-order');
            return false;
        }
        $data['error'] = $this->session->flashdata('error') != null ? $this->session->flashdata('error') : null;
        $cache = $this->getCache();
        if ($this->input->post()) {
            if ($this->form_validation->run('po_detail') == TRUE) {
                $data_value = array(
                    'id_product' => $this->input->post('id_product'),
                    'barcode' => $this->input->post('barcode'),
                    'name_unit' => $this->input->post('unit'),
                    'qty' => $this->input->post('qty'),
                    'price' => $this->input->post('price'),
                    'discount_total' => $this->input->post('discount_total') != null ? $this->input->post('discount_total') : 0 ,
                    'status' => 0
                );
                if ($cache['detail']['value'] == null || !$this->cekDetailAvailable($data_value['id_product'], $cache['detail']['value'])) {
                    $cache['detail']['value'][] = $data_value;
                    $this->caching->cacheQuery('PO', $this->id_staff, json_encode($cache));
                    redirect('purchase-order/detail');
                }
                $data['error'] = "Product sudah diinputkan sebelumnya, silahkan ubah qty di frame product list";
            }
        }
        $this->load->model('product/ModProduct', 'ModProduct');

        $data['product_storage'] = $this->ModProduct->get();
        $products = array('' => '');
        foreach ($data['product_storage'] as $row) {
            $products[$row['id_product']] = $row['name'] . ' | ' . $row['unit'] . ' ( ' . $row['value'] . ' )';
        }

        $data['products'] = $products;
        $data['principal'] = $this->db->get_where('principal', array('id_principal' => $cache['value']['id_principal']))->row();
        $data['cache'] = $cache;

        $this->parser->parse("po_detail.tpl", $data);
    }

    public function deletePOD($id_product)
    {
        if (!$this->getCacheStatus()) {
            redirect('purchase-order');
            return false;
        }
        $cache = $this->getCache();
        unset($cache['detail']['value'][$this->getArrayKeyDetail($id_product, $cache['detail']['value'])]);
        $this->caching->cacheQuery('PO', $this->id_staff, json_encode($cache));
        redirect('purchase-order/detail');
    }

    public function updatePOD($id_product, $qty)
    {
        if (!$this->getCacheStatus()) {
            redirect('purchase-order');
            return false;
        }
        $cache = $this->getCache();
        $cache['detail']['value'][$this->getArrayKeyDetail($id_product, $cache['detail']['value'])]['qty'] = $qty;
        $this->caching->cacheQuery('PO', $this->id_staff, json_encode($cache));
        redirect('purchase-order/detail');

    }

    public function resetPO()
    {
        $this->caching->deleteCache('PO', $this->id_staff);
        redirect('purchase-order');
    }

    public function savePO(){
        if (!$this->getCacheStatus()) {
            redirect('purchase-order');
            return false;
        }

        if ($this->input->post()) {
            if ($this->form_validation->run('po_save') == TRUE) {
                $cache = $this->getCache();
                $scan = "default.jpg";

                if (isset($_FILES['file']['size']) && ($_FILES['file']['size'] > 0)) {
                    $config['upload_path'] = './upload/po';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size'] = '2048';
                    $config['max_width'] = '1024';
                    $config['max_height'] = '768';
                    $config['encrypt_name'] = true;

                    $this->load->library('upload', $config);

                    if (!$this->upload->do_upload('file')) {

                        $this->session->set_flashdata('error', $this->upload->display_errors('<small class="error" > ', '</small>'));
                        redirect('purchase-order/detail');
                        return false;
                    }
                    $file = $this->upload->data();
                    $scan = base_url() . "/upload/po" . $file['file_name'];
                }

                $cache['value']['total'] = $this->input->post('total');
                $cache['value']['discount_price'] = $this->input->post('discount_price');
                $cache['value']['dpp'] = $this->input->post('dpp');
                $cache['value']['ppn'] = $this->input->post('ppn');
                $cache['value']['grand_total'] = $this->input->post('grand_total');
                $cache['value']['file'] = $scan;

                $this->caching->cacheQuery('PO', $this->id_staff, json_encode($cache));
                if($id_po = $this->ModPurchaseOrder->insertBatch($cache)){
                    $this->caching->deleteCache('PO', $this->id_staff);
                    redirect('purchase-order/invoice/'.$id_po);
                    return false;
                }
            }
        }
        $this->insertPOD();
    }

    /**
     * @return array
     */
    public function getCache()
    {
        return $this->cache;
    }

    /**
     * @param array $cache
     */
    public function setCache($cache)
    {
        $this->cache = $cache;
    }

    private function getCacheStatus()
    {
        if ($cache = $this->caching->getQueryCache('PO', $this->id_staff, $this->config->item('PO'))) {
            $this->setCache(json_decode($cache, TRUE));
            return true;
        } else {
            return false;
        }
    }

    private function cekDetailAvailable($id_product, $data = array())
    {
        foreach ($data as $row) {
            if ($row['id_product'] == $id_product)
                return true;
        }
        return false;
    }

    private function getArrayKeyDetail($id_product, $data = array())
    {
        foreach ($data as $key => $product) {
            if ($product['id_product'] === $id_product)
                return $key;
        }
        return false;
    }

}