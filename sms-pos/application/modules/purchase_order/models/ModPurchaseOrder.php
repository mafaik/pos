<?php

/**
 * Created by PhpStorm.
 * User: Awalin Yudhana
 * Date: 16/04/2015
 * Time: 16:43
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class grocery_CRUD_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

    }

    public function getSupplierData(){
        $this->db->select('id_principal','name');
        $this->db->get('principal');

    }
}