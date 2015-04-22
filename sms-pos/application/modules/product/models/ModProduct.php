<?php
/**
 * Created by PhpStorm.
 * User: Awalin Yudhana
 * Date: 17/04/2015
 * Time: 19:42
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class ModProduct extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get(){
        if ($cache = $this->caching->getQueryCache('MASTER', 'PRODUCT',$this->config->item('PRODUCT'))) {
            return json_decode($cache, TRUE);
        } else {
            return $this->insertCache();
        }
    }
    private function insertCache(){
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('product_unit','product_unit.id_product_unit = product.id_product_unit');
        $this->db->join('product_category','product_category.id_product_category = product.id_product_category');
        $result = $this->db->get();
        $rows = $result->result_array();
        $this->caching->cacheQuery('MASTER', 'PRODUCT', json_encode($rows));
        return $rows;
    }


    public function checkStock($id_product, $qty)
    {
        $row = $this->db->get_where('product', array('id_product' => $id_product))->row();
        if ($row->stock < $qty) {
            return false;
        } else {
            return true;
        }
    }

}