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
        $this->acl->auth('users');
        $this->load->library('grocery_CRUD');
        $this->menu = "";
        $this->roles = $this->session->userdata('roles');
        $this->load->model('ModUsers');
    }

    public function render($output)
    {
        $this->parser->parse("index.tpl",$output);
    }

    public function index()
    {
        $crud = new grocery_CRUD();

        $crud->set_table('staff')
                ->columns('id_group', 'nip', 'name', 'username', 'email', 'register_date')
                ->display_as('id_group', 'Group Name')
                ->display_as('nip', 'NIP')
                ->display_as('register_date', 'Register Date')
                ->set_relation('id_group', 'staff_group', 'name_group')
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
        if (!empty($post_array['password'])) {
            $post_array['password'] = $this->acl->hash_password($post_array['password']);;
        }
        else {
            unset($post_array['password']);
        }

        return $post_array;
    }

    public function group()
    {
        $data['success'] = $this->session->flashdata('success') != null ? $this->session->flashdata('success') : null;
        $data['userGroup'] = $this->ModUsers->getUserGroup();
        $this->parser->parse("group.tpl", $data);
    }

    public function updateGroup($id_group)
    {
        if ($this->input->post()) {
            if ($this->form_validation->run('users/edit-group') == TRUE) {
                $data = $this->input->post();
                $this->ModUsers->updateUserGroup($id_group, $data);
                redirect('users/group');
            }
        }

        $data['userGroupData'] = $this->ModUsers->getUserGroupByID($id_group);
        $this->parser->parse('update-group.tpl', $data);
    }

    public function deleteGroup($id_group)
    {
        $this->ModUsers->deleteUserGroup($id_group);
        redirect('users/group');
    }

    public function updateRole($id_group)
    {
        if ($this->input->post()) {
            $data['roles'] = json_encode($this->input->post('selected_modules'));
            $this->ModUsers->updateUserGroup($id_group, $data);
            redirect('users/group');
            return false;
        }

        $directory = "application/modules";
        $dirLen = strlen($directory) + 1;
        $modules = glob($directory . "/*", GLOB_ONLYDIR );
        $fixedModules = array();
        foreach ($modules as $value) {
            $valueLen = strlen($value);
            $fixedValue = substr($value, $dirLen, $valueLen);
            $fixedModules[$fixedValue] = $fixedValue;
        }
        unset($fixedModules['login']);
        $userGroupRoles = $this->ModUsers->getUserGroupRole($id_group);
        $fixedUserGroupRoles = json_decode($userGroupRoles['roles']);
        $data['userGroupRoles'] = $fixedUserGroupRoles;
        $data['modulesList'] = $fixedModules;
        $this->parser->parse('update-role.tpl', $data);
    }
}