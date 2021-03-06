<?php
/**
 * Created by PhpStorm.
 * User: Awalin Yudhana
 * Date: 20/04/2015
 * Time: 15:58
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Conversion extends MX_Controller
{
    protected $id_staff;

    protected $cache = array();

    public function __construct()
    {
        parent::__construct();
        $this->load->model('product/ModProduct', 'ModProduct');

        $this->id_staff = $this->config->item('id_staff');
    }

    public function index(){
        $data['success'] = $this->session->flashdata('success') != null ? $this->session->flashdata('success') : null;
        $this->load->model('product/ModProduct', 'ModProduct');
        $data['product_storage'] = $this->ModProduct->get();
        $this->parser->parse("conversion.tpl", $data);
    }
    public function addConversion($id_product){
        $data['error'] = $this->session->flashdata('error') != null ? $this->session->flashdata('error') : null;
        $data['product_storage'] = $this->ModProduct->get();
        $data['product'] = $this->ModProduct->getProduct($id_product);
        $this->parser->parse("conversion_add.tpl", $data);
    }

    public function save()
    {
        if ($this->input->post()) {
            if ($this->form_validation->run('conversion') == TRUE) {
                if ($this->ModProduct->checkStock($this->input->post('id_product'), $this->input->post('qty')) == TRUE) {
                    $data_value = array(
                        'id_staff' => $this->id_staff,
                        'id_product' => $this->input->post('id_product'),
                        'qty' => $this->input->post('qty'),
                        'id_product_result' => $this->input->post('id_product_result'),
                        'qty_result' => $this->input->post('qty_result')
                    );

                    $this->db->insert('product_conversion',$data_value);
                    $this->session->set_flashdata('success','Input data berhasil');

                    redirect('product-conversion');
                    return false;
                }
                $this->session->set_flashdata('error','Stock tidak cukup');
                redirect('product-conversion/add'.'/'. $this->input->post('id_product'));
            }
            $this->addConversion($this->input->post('id_product'));
            return false;
        }
        redirect('product-conversion');
    }

}