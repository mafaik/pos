<?php
/**
 * Created by PhpStorm.
 * User: Awalin Yudhana
 * Date: 20/04/2015
 * Time: 15:58
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Conversion extends MX_Controller
{
    protected $id_staff;

    protected $cache = array();

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Caching');
        $this->id_staff = $this->config->item('id_staff');
    }

    public function index()
    {
        $this->getCacheStatus();
        $data['error'] = '';

        $cache = $this->getCache();

        if ($this->input->post()) {
            if ($this->form_validation->run('conversion') == TRUE) {
                if ($this->checkStock($this->input->post('id_product'), $this->input->post('qty')) == TRUE) {
                    $data_value = array(
                        'id_product' => $this->input->post('id_product'),
                        'qty' => $this->input->post('qty'),
                        'id_product_result' => $this->input->post('id_product_result'),
                        'qty_result' => $this->input->post('qty_result')
                    );
                    $cache['detail']['value'][] = $data_value;
                    $this->caching->cacheQuery('PRODUCT_CONVERSION', $this->id_staff, json_encode($cache));

                    redirect('product-conversion');
                    return false;
                }
                $data['error'] = 'stock tidak cukup';
            }
        }

        $this->load->model('product/ModProduct', 'ModProduct');

        $data['product_storage'] = $this->ModProduct->get();
        $products = array('' => '');
        foreach ($data['product_storage'] as $row) {
            $products[$row['id_product']] = $row['name'] . ' | ' . $row['unit'] . ' ( ' . $row['value'] . ' )';
        }

        $data['products'] = $products;
        $data['cache'] = $cache;

        $list = $this->getArrayIDProduct($cache['detail']['value'], $data['product_storage']);
        $data['list'] = $list;

        $this->parser->parse("conversion.tpl", $data);
    }

    public function save()
    {
        if ($this->getCacheStatus()) {
            $cache = $this->getCache();
            $this->load->model('ModConversion');
            if ($id_conversion = $this->ModConversion->insertBatch($cache)) {
                redirect('product-conversion/invoice' . '/' . $id_conversion);
                return false;
            }
        }
        redirect('product-conversion');
    }

    public function deleteDetail($id_product)
    {
        $this->getCacheStatus();
        $cache = $this->getCache();
        unset($cache['detail']['value'][$this->getArrayKeyDetail($id_product, $cache['detail']['value'])]);
        $this->caching->cacheQuery('PRODUCT_CONVERSION', $this->id_staff, json_encode($cache));
        redirect('product-conversion');
    }

    public function invoice($id_conversion)
    {

        if (!$data_conversion = $this->db->from('product_conversion')
            ->join('staff','staff.id_staff = product_conversion.id_staff')
            ->where(array('id_conversion' => $id_conversion))
            ->get()->row()) {
            redirect('product-conversion');
        }
        $this->getCacheStatus();
        $cache = $this->getCache();
        $this->load->model('product/ModProduct', 'ModProduct');


        $data['product_storage'] = $this->ModProduct->get();
        $data['conversion'] = $data_conversion;
        $list = $this->getArrayIDProduct($cache['detail']['value'], $data['product_storage']);
        $data['list'] = $list;
        $this->parser->parse("invoice.tpl", $data);
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
                }
            }

            foreach ($products as $row) {
                if ($value_array['id_product_result'] == $row['id_product']) {
                    $id_product_result = $row['id_product'];
                    $barcode_result = $row['barcode'];
                    $name_result = $row['name'];
                    $unit_result = $row['unit'];
                    $value_result = $row['value'];
                }
            }
            $result[] = array(
                'id_product' => $id_product,
                'barcode' => $barcode,
                'name' => $name,
                'unit' => $unit,
                'value' => $value,
                'id_product_result' => $id_product_result,
                'barcode_result' => $barcode_result,
                'name_result' => $name_result,
                'unit_result' => $unit_result,
                'value_result' => $value_result,
                'qty' => $value_array['qty'],
                'qty_result' => $value_array['qty_result']

            );
        }
        return $result;
    }

    private function getArrayKeyDetail($id_product, $data = array())
    {
        foreach ($data as $key => $product) {
            if ($product['id_product'] === $id_product)
                return $key;
        }
        return false;
    }

    private function getCacheStatus()
    {
        if ($cache = $this->caching->getQueryCache('PRODUCT_CONVERSION', $this->id_staff, $this->config->item('PRODUCT_CONVERSION'))) {
            $this->setCache(json_decode($cache, TRUE));
            return true;
        } else {
            $data = array(
                'table' => 'product_conversion',
                'value' => array(
                    'id_staff' => $this->id_staff,
                ),
                'detail' => array(
                    'table' => 'product_conversion_detail',
                    'foreign_key' => 'id_conversion'
                )
            );
            $this->caching->cacheQuery('PRODUCT_CONVERSION', $this->id_staff, json_encode($data));
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


    private function checkStock($id_product, $qty)
    {
        $row = $this->db->get_where('product', array('id_product' => $id_product))->row();
        if ($row->stock < $qty) {
            return false;
        } else {
            return true;
        }
    }

}