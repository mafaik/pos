<?php
/**
 * Created by PhpStorm.
 * User: Awalin Yudhana
 * Date: 17/04/2015
 * Time: 19:42
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelDeliveryOrder extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }
    public function getListSO($status = 0 )
    {
        return $this->db
            ->select("proposal.type, proposal.status_ppn,
                sales_order.*,customer.*, staff.name as staff_name, customer.name as customer_name")
            ->from("sales_order")
            ->join('staff', 'staff.id_staff = sales_order.id_staff')
            ->join('proposal', 'proposal.id_proposal = sales_order.id_proposal')
            ->join('customer', 'customer.id_customer = proposal.id_customer')
            ->where("sales_order.status", $status)
            ->get()
            ->result();
    }

    public function getDataDODetail($id)
    {
        return $this->db->from('sales_order_detail pro')
            ->join('product p', 'p.id_product = pro.id_product', 'left')
            ->join('product_unit pu', 'pu.id_product_unit = p.id_product_unit')
            ->join('product_category pc', 'pc.id_product_category = p.id_product_category')
            ->where(['id_do' => $id])
            ->get()->result_array();
    }

    public function getDataDO($id)
    {
        return $this->db
            ->select("*")
            ->from("delivery_order")
            ->join('staff', 'staff.id_staff = delivery_order.id_staff')
            ->where("id_do", $id)
            ->get()
            ->row();
    }


    public function getDataSODetail($id)
    {
        return $this->db->from('sales_order_detail pro')
            ->join('product p', 'p.id_product = pro.id_product', 'left')
            ->join('product_unit pu', 'pu.id_product_unit = p.id_product_unit')
            ->join('product_category pc', 'pc.id_product_category = p.id_product_category')
            ->where(['id_so' => $id,'id_do'=>null])
            ->get()->result_array();
    }

}