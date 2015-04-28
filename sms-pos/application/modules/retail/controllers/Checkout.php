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
        if (!$data_retail = $this->db
            ->select('*, staff.name as staff_name, staff.name as store_name')
            ->from('retail')
            ->join('staff', 'staff.id_staff = retail.id_staff')
            ->join('store', 'store.id_store = retail.id_store')
            ->where('retail.id_retail', $id_retail)
            ->get()
            ->row()
        ) {
            redirect('retail');
        }
        $data['master'] = $data_retail;
        $data['items'] = $this->ModRetail->getRetailDetail($id_retail);
        $this->parser->parse("checkout.tpl", $data);

    }
}