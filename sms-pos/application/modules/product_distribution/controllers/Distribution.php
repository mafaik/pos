<?php
/**
 * Created by PhpStorm.
 * User: Awalin Yudhana
 * Date: 22/04/2015
 * Time: 11:39
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Distribution extends MX_Controller
{
    protected $id_staff;

    protected $cache = array();

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Caching');
        $this->id_staff = $this->config->item('id_staff');
        $this->id_store = $this->config->item('id_store');
    }

    public function index()
    {
        $this->getCacheStatus();

        $data['error'] = '';
        $cache = $this->getCache();
        $this->load->model('product/ModProduct', 'ModProduct');

        if ($this->input->post()) {
            if ($this->form_validation->run('distribution') == TRUE) {
                if ($this->ModProduct->checkStock($this->input->post('id_product'), $this->input->post('qty')) == TRUE) {
                    $data_value = array(
                        'id_product' => $this->input->post('id_product'),
                        'qty' => $this->input->post('qty')
                    );
                    $cache['detail']['value'][] = $data_value;
                    $this->caching->cacheQuery('PRODUCT_DISTRIBUTION', $this->id_staff, json_encode($cache));

                    redirect('product-distribution');
                    return false;
                }
                $data['error'] = 'stock tidak cukup';
            }
        }

        $data['product_storage'] = $this->ModProduct->get();
        $products = array('' => '');
        foreach ($data['product_storage'] as $row) {
            $products[$row['id_product']] = $row['name'] . ' | ' . $row['unit'] . ' ( ' . $row['value'] . ' )';
        }

        $data['products'] = $products;
        $data['cache'] = $cache;
        $list = empty($cache['detail']['value']) ? null :
            $this->getArrayIDProduct($cache['detail']['value'], $data['product_storage']);
        $data['list'] = $list;

        $this->parser->parse("distribution.tpl", $data);
    }

    public function save()
    {
        if ($this->getCacheStatus()) {
            $this->load->library('Insert_Batch');
            $cache = $this->getCache();

            if ($id_distribution = $this->insert_batch->insertData($cache)) {
                $this->caching->deleteCache('PRODUCT_DISTRIBUTION', $this->id_staff);
                redirect('product-distribution/invoice' . '/' . $id_distribution);
                return false;
            }
        }
        redirect('product-distribution');
    }

    public function deleteDetail($id_product)
    {
        $this->getCacheStatus();
        $cache = $this->getCache();
        unset($cache['detail']['value'][$this->getArrayKeyDetail($id_product, $cache['detail']['value'])]);
        $this->caching->cacheQuery('PRODUCT_DISTRIBUTION', $this->id_staff, json_encode($cache));
        redirect('product-distribution');
    }

    public function invoice($id_distribution)
    {

        if (!$data_distribution = $this->db->from('product_distribution')
            ->join('staff', 'staff.id_staff = product_distribution.id_staff')
            ->where(array('id_product_distribution' => $id_distribution))
            ->get()->row()
        ) {
            redirect('product-distribution');
        }
        $this->getCacheStatus();
        $cache = $this->getCache();
        $this->load->model('product/ModProduct', 'ModProduct');

        $data['product_storage'] = $this->ModProduct->get();
        $data['distribution'] = $data_distribution;
        $list = $this->getArrayIDProduct($cache['detail']['value'], $data['product_storage']);
        $data['list'] = $list;
        $this->parser->parse("invoice.tpl", $data);
    }

    private function getArrayKeyDetail($id_product, $data = array())
    {
        foreach ($data as $key => $product) {
            if ($product['id_product'] === $id_product)
                return $key;
        }
        return false;
    }

    private function getArrayIDProduct($array = array(), $products = array())
    {
        foreach ($array as $key => $value_array) {
            foreach ($products as $row) {
                if ($value_array['id_product'] == $row['id_product']) {
                    $id_product = $row['id_product'];
                    $barcode = $row['barcode'];
                    $name = $row['name'];
                    $unit = $row['unit'];
                    $value = $row['value'];
                    $price = $row['sell_price'];
                }
            }

            $result[] = array(
                'id_product' => $id_product,
                'barcode' => $barcode,
                'name' => $name,
                'unit' => $unit,
                'value' => $value,
                'qty' => $value_array['qty'],
                'price' => $price

            );
        }
        return $result;
    }

    private function getCacheStatus()
    {
        if ($cache = $this->caching->getQueryCache('PRODUCT_DISTRIBUTION',
            $this->id_staff,
            $this->config->item('PRODUCT_DISTRIBUTION'))
        ) {
            $this->setCache(json_decode($cache, TRUE));
            return true;
        } else {
            $data = array(
                'table' => 'product_distribution',
                'value' => array(
                    'id_staff' => $this->id_staff,
                    'id_store' => $this->id_store,
                ),
                'detail' => array(
                    'table' => 'product_distribution_detail',
                    'foreign_key' => 'id_product_distribution'
                )
            );
            $this->caching->cacheQuery('PRODUCT_DISTRIBUTION', $this->id_staff, json_encode($data));
            return false;
        }
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


}