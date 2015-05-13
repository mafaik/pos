<?php

/**
 * Created by PhpStorm.
 * User: Awalin Yudhana
 * Date: 13/05/2015
 * Time: 12:24
 */
class ModelJoin extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getListSO($id_customer)
    {
        return $this->db
            ->select("*, staff.name as staff_name, customer.name as customer_name")
            ->from("sales_order")
            ->join('staff', 'staff.id_staff = sales_order.id_staff')
            ->join('customer', 'customer.id_customer = sales_order.id_customer')
            ->where("sales_order.id_customer", $id_customer)
            ->where("sales_order.status_extract", 1)
            ->get()
            ->result();
    }


    public function getDataSODetail($id)
    {
        return $this->db->from('sales_order_detail pro')
            ->join('product p', 'p.id_product = pro.id_product', 'left')
            ->join('product_unit pu', 'pu.id_product_unit = p.id_product_unit')
            ->join('product_category pc', 'pc.id_product_category = p.id_product_category')
            ->where_in('id_so',$id)
            ->get()->result_array();
    }

    public function getDataSO($id)
    {
        return $this->db
            ->select("*, staff.name as staff_name, customer.name as customer_name")
            ->from("sales_order")
            ->join('staff', 'staff.id_staff = sales_order.id_staff')
            ->join('customer', 'customer.id_customer = sales_order.id_customer')
            ->where("id_so", $id)
            ->get()
            ->row();
    }
}