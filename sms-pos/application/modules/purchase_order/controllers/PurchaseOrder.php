<?php
/**
 * Created by PhpStorm.
 * User: Awalin Yudhana
 * Date: 16/04/2015
 * Time: 16:37
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class PurchaseOrder extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Master');
        $this->id_staff = $this->config->item('id_staff');
    }

    public function index()
    {
        $this->Master->setFields(['id_principal', 'name']);
        $this->Master->setCondition(['id_principal' => 1]);
        $data['principal'] = $this->Master->getSimpleMasterData('principal');
    }
}