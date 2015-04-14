<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store extends MX_Controller
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
 
        $crud->set_table('store');
        $output = $crud->render();
        $this->render($output);
    }
} 