<?php
/**
 * Created by PhpStorm.
 * User: Awalin Yudhana
 * Date: 16/04/2015
 * Time: 16:37
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModRetail');
        $this->id_store = $this->config->item('id_store');
        $this->id_staff = $this->config->item('id_staff');
    }

    public function index($id_retail)
    {
        if (!$data_retail = $this->ModRetail->getDataRetail($id_retail)
        ) {
            redirect('retail');
        }
        $data['master'] = $data_retail;
        $data['items'] = $this->ModRetail->getRetailDetail($id_retail);
        $this->parser->parse("checkout.tpl", $data);

    }

    public function replace($id_retur){

        if (!$data_retur = $this->ModRetail->getDataRetur($id_retur)
        ) {
            redirect('retail-retur');
        }
        $data_retail = $this->ModRetail->getDataRetail($data_retur->id_retail);
        $product_replaced = $this->ModRetail->getDetailItemReplaced($data_retur->id_retail);
        $data['items'] = $this->ModRetail->getReturDetail($id_retur);
        $data['master'] = $data_retail;
        $data['product_replaced'] = $product_replaced;
        $data['retur'] = $data_retur;
        $this->parser->parse("retur_checkout.tpl", $data);
    }
}