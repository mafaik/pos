<?php

/**
 * Created by PhpStorm.
 * User: Awalin Yudhana
 * Date: 27/04/2015
 * Time: 11:20
 */
class ModRetail extends CI_Model
{
    public function __construct(){
        parent::__construct();
    }

    public function getProductRetail($id_store)
    {
        $this->db->select('*, ps.stock as stock_retail');
        $this->db->from('product_store ps');
        $this->db->join('product p', 'p.id_product = ps.id_product', 'left');
        $this->db->join('product_unit pu', 'pu.id_product_unit = p.id_product_unit');
        $this->db->join('product_category pc', 'pc.id_product_category = p.id_product_category');
        $this->db->where(['id_store'=>$id_store]);
        return $this->db->get()->result_array();
    }

    public function getProductRetailSingle($id_store,$id_product)
    {
        $this->db->select('*, ps.stock as stock_retail');
        $this->db->from('product_store ps');
        $this->db->join('product p', 'p.id_product = ps.id_product', 'left');
        $this->db->join('product_unit pu', 'pu.id_product_unit = p.id_product_unit');
        $this->db->join('product_category pc', 'pc.id_product_category = p.id_product_category');
        $this->db->where(['ps.id_store'=>$id_store,'ps.id_product'=>$id_product]);
        return $this->db->get()->row();
    }

    public function getRetailDetail($id_retail)
    {
        $this->db->from('retail_detail ed');
        $this->db->join('product p', 'p.id_product = ed.id_product', 'left');
        $this->db->join('product_unit pu', 'pu.id_product_unit = p.id_product_unit');
        $this->db->join('product_category pc', 'pc.id_product_category = p.id_product_category');
        $this->db->where(['id_retail'=>$id_retail]);
        return $this->db->get()->result_array();
    }
}