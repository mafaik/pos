<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Warehouse extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('grocery_CRUD');
    }

    public function render($output)
    {
 		$this->load->view('index.php',$output);
    }

    public function index()
    {
        $crud = new grocery_CRUD();
 
        $crud->set_table('warehouse');
        $output = $crud->render();
        $this->render($output);
    }

    public function rack()
    {
    	$crud = new grocery_CRUD();
    	$crud->set_table('warehouse_rack');
        $crud->display_as('id_warehouse', 'Warehouse Name');
        $crud->set_relation('id_warehouse', 'warehouse', 'name');
    	$output = $crud->render();
        $this->render($output);
    }
} 