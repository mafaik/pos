<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->acl->auth('product');
        $this->load->library('grocery_CRUD');
        $this->load->model('ModProduct');
    }

    public function render($output)
    {
        $this->parser->parse('index.tpl',$output);
    }

    public function index($id_product = null)
    {
        $crud = new grocery_CRUD();
        if (!empty($id_product) && is_int($id_product)) {
            $crud->where('product.parent', $id_product);
            $crud->unset_operations();
        } else {
            $crud->add_action('Lihat Sub Produk', '', '', 'read-icon', array($this, 'addSubProductAction'));
        }

        $crud->set_table('product')
                ->columns('barcode', 'name', 'id_product_category', 'id_product_unit', 'value', 'brand', 'sell_price', 'date_expired', 'size', 'license', 'stock', 'minimum_stock')
                ->display_as('id_product_category', 'Product Category')
                ->display_as('id_product_unit', 'Product Satuan')
                ->display_as('date_expired', 'Date Expired')
                ->display_as('minimum_stock', 'Minimum Stock')
                ->display_as('value', 'Nilai Satuan')
                ->callback_column('sell_price', array($this, 'currencyFormat'))
                ->callback_column('value', array($this, 'setUnitValue'))
                ->set_relation('id_product_category', 'product_category', 'category')
                ->set_relation('id_product_unit', 'product_unit', 'unit')
                ->fields('barcode', 'id_product_category', 'parent', 'name', 'brand', 'id_product_unit', 'size', 'date_expired', 'license', 'minimum_stock')
                ->required_fields('barcode', 'id_product_category', 'name', 'brand', 'id_product_unit', 'date_expired', 'minimum_stock')
                ->unset_fields('weight', 'length', 'width', 'height', 'sell_price', 'stock')
                ->unique_fields('barcode')
                ->callback_field('parent', array($this, 'productParentField'))
                ->callback_field('id_product_unit', array($this, 'setUnitField'))
                ->unset_read();

        $output = $crud->render();
        
        $this->render($output);
    }

    public function currencyFormat($value, $row)
    {
        return "Rp " . number_format($value);
    }

    public function setUnitValue($value, $row)
    {
        $value = $this->ModProduct->getUnitValue($row->id_product_unit);
        return $value;
    }

    public function productParentField($value = '', $primary_key = null)
    {
        $products = $this->ModProduct->getProductOnly();
        $text = '<select id="field-parent" name="parent" class="chosen-select chzn-done" data-placeholder="Select Parent" style="width: 300px;"><option value="">Select Parent</option>';
        foreach ($products as $row) {
            if ($value == $row['id_product']) {
                $text .= '<option value="' . $row['id_product'] . '" selected>' . $row['name'] . '</option>';
            } else {
                $text .= '<option value="' . $row['id_product'] . '">' . $row['name'] . '</option>';
            }
        }
        $text .= '</select>';
        return $text;
    }

    public function setUnitField($value = '', $primary_key = null)
    {
        $units = $this->ModProduct->getUnitOnly();
        $text = '<select id="field-unit" name="id_product_unit" class="chosen-select chzn-done" data-placeholder="Select Parent" style="width: 300px;"><option value="">Select Parent</option>';
        foreach ($units as $row) {
            if ($value == $row['id_product_unit']) {
                $text .= '<option value="' . $row['id_product_unit'] . '" selected>' . $row['unit'] . ' / ' . $row['value'] . '</option>';
            } else {
                $text .= '<option value="' . $row['id_product_unit'] . '">' . $row['unit'] . ' / ' . $row['value'] . '</option>';
            }
        }
        $text .= '</select>';
        return $text;
    }

    function addSubProductAction($value, $row)
    {
        return site_url('product/index') . '/' . $row->id_product;
    }

    public function category($action = null, $id_product_category = null)
    {
        $this->session->set_userdata('selected_table', 'product_category');
        $crud = new grocery_CRUD();
        if (!empty($id_product_category) && is_int($id_product_category)) {
            $crud->where('parent', $id_product_category)
                ->unset_operations();
        } else {
            $crud->add_action('Lihat Sub Produk Kategori', '', '', 'read-icon', array($this, 'addSubCategoryAction'));
        }

        $crud->set_table('product_category')
                ->columns('category', 'parent', 'note')
                ->fields('category', 'parent', 'note')
                ->required_fields('category')
                ->display_as('category', 'Nama Kategori')
//                ->callback_add_field('category', array($this, 'setPrefixCode'))
                ->callback_field('note', array($this, 'setTextarea'))
//                ->callback_add_field('prefix_code', array($this, 'disablePrefixCode'))
//                ->callback_edit_field('prefix_code', array($this, 'disablePrefixCode'))
                // ->callback_before_insert(array($this, 'checkPrefixCode'))
                ->callback_field('parent', array($this, 'categoryParentField'))
                ->callback_column('parent', array($this, 'categoryParentName'))
                ->unset_read();
        
        $output = $crud->render();
        $this->render($output);
    }

    public function categoryParentName($value, $row)
    {
        $categoriesName = $this->ModProduct->getcategoryName($row->parent);
        return $categoriesName;
    }

    public function categoryParentField($value = '', $primary_key = null)
    {
        
        $categories = $this->ModProduct->getCategoryOnly();
        $text = '<select id="field-parent" name="parent" class="chosen-select chzn-done" data-placeholder="Select Parent" style="width: 300px;"><option value="">Select Parent</option>';
        foreach ($categories as $row) {
            if (!empty($value) && $value == $row['id_product_category']) {
                $text .= '<option value="' . $row['id_product_category'] . '" selected>' . $row['category'] . '</option>';
            } else {
                $text .= '<option value="' . $row['id_product_category'] . '">' . $row['category'] . '</option>';
            }
            // $text .= '<option value="' . $row['id_product_category'] . '">' . $row['category'] . '-' . $value . '-' . $row['parent'] .'</option>';
        }
        $text .= '</select>';
        return $text;
    }

    function addSubCategoryAction($value, $row)
    {
        return site_url('product/category/parent') . '/' . $row->id_product_category;
    }

    public function unit() 
    {
        $this->session->set_userdata('selected_table', 'product_unit');
        $crud = new grocery_CRUD();
        $crud->set_table('product_unit')
                ->display_as('unit', 'Satuan')
                ->columns('unit', 'value', 'note')
                ->fields('unit', 'value', 'note')
                ->required_fields('unit', 'value', 'prefix_code')
                // ->display_as('prefix_code', 'Prefix Code')
//                ->callback_add_field('unit', array($this, 'setPrefixCode'))
                ->callback_field('note', array($this, 'setTextarea'))
//                ->callback_add_field('prefix_code', array($this, 'disablePrefixCode'))
//                ->callback_edit_field('prefix_code', array($this, 'disablePrefixCode'))
                ->callback_before_insert(array($this, 'checkPrefixCode'))
                ->unset_read();
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