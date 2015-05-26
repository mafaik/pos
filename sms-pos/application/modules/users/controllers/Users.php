<?php
/**
 * Created by PhpStorm.
 * User: Lin
 * Date: 5/25/2015
 * Time: 3:03 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->acl->auth(__DIR__);
        $this->load->library('grocery_CRUD');
    }

    public function render($output)
    {
        $this->parser->parse("index.tpl",$output);
    }

    public function index()
    {
        $crud = new grocery_CRUD();

        $crud->set_table('staff')
            ->field_type('password', 'password')
            ->set_relation('id_group', 'staff_group', 'name_group')
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
        if (!empty($post_array['password'])) {
            $post_array['password'] = $this->acl->hash_password($post_array['password']);;
        }
        else {
            unset($post_array['password']);
        }

        return $post_array;
    }
}