<?php
/**
 * Created by PhpStorm.
 * User: Awalin Yudhana
 * Date: 16/04/2015
 * Time: 16:37
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends MX_Controller
{
    protected $id_staff;


    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModPurchaseOrder');
        $this->id_staff = $this->config->item('id_staff');
    }

    public function index($id_po){
        if(!$data_po = $this->db->get_where('purchase_order', array('id_po' => $id_po))->row()){
            redirect('purchase-order');
        }
        $data['po'] = $data_po;
        $data['principal'] = $this->db->get_where('principal', array('id_principal' => $data_po->id_principal))->row();
        $data['staff'] = $this->db->get_where('staff', array('id_staff' => $data_po->id_staff))->row();
        $data['pod'] = $this->ModPurchaseOrder->getDataPOD($id_po);
        $this->parser->parse("invoice.tpl",$data);

    }
}