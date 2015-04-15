<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends MX_Controller
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
 
        $crud->set_table('staff')
                ->field_type('password', 'password')
                ->callback_edit_field('password',array($this,'setPasswordInputToEmpty'))
                ->callback_add_field('password',array($this,'setPasswordInputToEmpty'))
                ->callback_before_update(array($this,'encryptPasswordCallback'));
        $output = $crud->render();
        $this->render($output);
    }

    function setPasswordInputToEmpty()
    {
        return "<input type='password' name='password' value='' />";
    }

    function encryptPasswordCallback($post_array, $primary_key)
    {
        $this->load->library('encrypt');

        if (!empty($post_array['password'])) {
            $key = 'm@L4GnmBois';
            $post_array['password'] = $this->encrypt->encode($post_array['password'], $key);
        }
        else {
            unset($post_array['password']);
        }
     
        return $post_array;
    }
} 