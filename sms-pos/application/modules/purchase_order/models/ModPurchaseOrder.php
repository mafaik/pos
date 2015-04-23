<?php

/**
 * Created by PhpStorm.
 * User: Awalin Yudhana
 * Date: 16/04/2015
 * Time: 16:43
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class ModPurchaseOrder extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param array $data
     * @return bool
     */
    public function getDataPOD($id_po)
    {
        $this->db->select('*, pod.status as stocking_status');
        $this->db->from('purchase_order_detail pod');
        $this->db->join('product p', 'p.id_product = pod.id_product', 'left');
        $this->db->join('product_unit pu', 'pu.id_product_unit = p.id_product_unit');
        $this->db->join('product_category pc', 'pc.id_product_category = p.id_product_category');
        $this->db->where('pod.id_po', $id_po);
        return $this->db->get()->result_array();
    }

}