<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->acl->auth('product');
        $this->load->library('grocery_CRUD');
    }

    public function render($output)
    {
        $this->parser->parse('index.tpl',$output);
    }

    public function index()
    {
        $crud = new grocery_CRUD();

        $crud->set_table('product')
                ->columns('barcode', 'name', 'id_product_category', 'parent', 'id_product_unit', 'brand', 'sell_price', 'date_expired', 'size', 'license', 'stock', 'minimum_stock')
                ->display_as('id_product_category', 'Product Category')
                ->display_as('id_product_unit', 'Product Unit')
                ->display_as('date_expired', 'Date Expired')
                ->display_as('minimum_stock', 'Minimum Stock')
                ->set_relation('id_product_category', 'product_category', 'category')
                ->set_relation('id_product_unit', 'product_unit', 'unit')
                ->set_relation('parent', 'product', '{name}')
                ->add_fields('barcode', 'id_product_category', 'parent', 'name', 'brand', 'id_product_unit', 'size', 'date_expired', 'license', 'minimum_stock')
                ->edit_fields('barcode', 'id_product_category', 'parent', 'name', 'brand', 'id_product_unit', 'size', 'date_expired', 'license', 'minimum_stock')
                ->unset_fields('weight', 'length', 'width', 'height', 'sell_price', 'stock');

        $output = $crud->render();
        
        $this->render($output);
    }

    public function category($action = null, $id_product_category = null)
    {
        $this->session->set_userdata('selected_table', 'product_category');
        $crud = new grocery_CRUD();
        $crud->set_table('product_category')
                ->columns('category', 'parent', 'prefix_code', 'note')
                ->set_relation('parent', 'product_category', '{category}')
                ->add_fields('category', 'prefix_code', 'parent', 'note')
                ->edit_fields('category', 'prefix_code', 'parent', 'note')
                ->display_as('category', 'Nama Kategori')
                ->callback_add_field('category', array($this, 'setPrefixCode'))
                ->callback_add_field('note', array($this, 'setTextarea'))
                ->callback_add_field('prefix_code', array($this, 'disablePrefixCode'))
                ->callback_edit_field('prefix_code', array($this, 'disablePrefixCode'))
                ->callback_before_insert(array($this, 'checkPrefixCode'));
        
        $output = $crud->render();
        $this->render($output);
    }

    public function unit() 
    {
        $this->session->set_userdata('selected_table', 'product_unit');
        $crud = new grocery_CRUD();
        $crud->set_table('product_unit')
                ->columns('unit', 'prefix_code', 'value', 'note')
                ->add_fields('unit', 'prefix_code', 'value', 'note')
                ->edit_fields('unit', 'prefix_code', 'value', 'note')
                ->display_as('prefix_code', 'Prefix Code')
                ->callback_add_field('unit', array($this, 'setPrefixCode'))
                ->callback_add_field('note', array($this, 'setTextarea'))
                ->callback_add_field('prefix_code', array($this, 'disablePrefixCode'))
                ->callback_edit_field('prefix_code', array($this, 'disablePrefixCode'))
                ->callback_before_insert(array($this, 'checkPrefixCode'));
        $output = $crud->render();
        $this->render($output);
    }

    public function setPrefixCode($value = '', $primary_key = null)
    {
        if ($this->session->userdata('selected_table') == 'product_category') {
            return "<input type='text' name='category' class='insertCategoryPrefixCode' />";
        } else if ($this->session->userdata('selected_table') == 'product_unit') {
            return "<input type='text' name='unit' class='insertUnitPrefixCode' />";
        }
        
    }

    public function disablePrefixCode($value = '', $primary_key = null)
    {
        return "<input type='text' disabled name='disabled_prefix_code' value='$value' /><input type='hidden' name='prefix_code' value='$value' />";
    }

    public function setTextarea()
    {
        return "<textarea name='note' rows='2' cols='40'></textarea>";
    }

    public function checkPrefixCode($post_array, $table_name)
    {
        $this->load->model('ModProduct');
        $selected_table = $this->session->userdata('selected_table');

        if ($selected_table == 'product_category') {
            $field_name = strtoupper(preg_replace('/\s+/', '', $post_array['category']));
            $length = 2;
        } else if ($selected_table == 'product_unit') {
            $field_name = strtolower(preg_replace('/\s+/', '', $post_array['unit']));
            $length = 3;
        }

        $prefix_code = substr($field_name, 0, $length);
        $post_array['prefix_code'] = $prefix_code;

        $prefix_code_status = $this->ModProduct->checkPrefixCode($prefix_code, $selected_table);

        while ($prefix_code_status) {
            $new_prefix_code = $this->generatePrefixCode($field_name, $length);
            $post_array['prefix_code'] = $new_prefix_code;
            $prefix_code_status = $this->ModProduct->checkPrefixCode($new_prefix_code, $selected_table);
        }

        return $post_array;
    }

    public function generatePrefixCode($field_name, $length)
    {
        $first_character = substr($field_name, 0, 1);
        $rest_character = substr($field_name, 1, strlen($field_name));

        $randomString = substr(str_shuffle($rest_character), 0, ($length - 1));

        return $first_character.$randomString;
    }
} 