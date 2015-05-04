<?php
/**
 * Created by PhpStorm.
 * User: Awalin Yudhana
 * Date: 27/04/2015
 * Time: 14:22
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Retail extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->id_staff = $this->config->item('id_staff');
        $this->id_store = $this->config->item('id_store');
        $this->load->model('ModRetail');
        $this->load->library('cart',
            array(
                'cache_path' => 'RETAIL',
                'cache_file' => $this->id_staff,
                'primary_table' => 'retail',
                'foreign_table' => 'retail_detail'
            ));
    }

    public function index()
    {
        $data['error'] = $this->session->flashdata('error') != null ? $this->session->flashdata('error') : null;
        $product_storage = $this->ModRetail->getProductRetail($this->id_store);
        $data['product_storage'] = $product_storage;

        if ($this->input->post()) {
            if ($this->form_validation->run('retail') == TRUE) {
                if( $this->ModRetail->checkStock($this->id_store,
                    $this->input->post('id_product'),
                    $this->input->post('qty')
                    )){
                    $this->cart->add_item($this->input->post('id_product'), [
                        'id_product' => $this->input->post('id_product'),
                        'barcode' => $this->input->post('barcode'),
                        'qty' => $this->input->post('qty'),
                        'discount' => $this->input->post('discount') ? $this->input->post('discount') : 0
                    ]);
                    redirect('retail');
                }
                $data['error'] = "stock tidak cukup";
            }
        }
        $data['items'] = $this->cart->list_item($product_storage, 'id_product')->result_array_item();
        $this->parser->parse("retail.tpl", $data);
    }

    public function updateItem($id_product, $qty)
    {
        if( $this->ModRetail->checkStock($this->id_store,
            $id_product,
            $qty
        )){
            if (!$this->cart->update_item($id_product, ['qty' => $qty]))
                $this->session->set_flashdata('error', $this->cart->getError());
        }else{
            $this->session->set_flashdata('error', "stock tidak cukup");
        }
        redirect('retail');
    }

    public function deleteItem($id_product)
    {
        if (!$this->cart->delete_item($id_product))
            $this->session->set_flashdata('error', $this->cart->getError());
        redirect('retail');

    }

    public function save()
    {
        if ($this->input->post()) {
            if ($this->form_validation->run('retail/save') == TRUE) {
                $status_ppn = $this->input->post('status_ppn') == "on" ? 1 : 0;

                if ($id_retail = $this->cart->primary_data(array(
                    'discount' => $this->input->post('discount'),
                    'id_staff' => $this->id_staff,
                    'id_store' => $this->id_store
                ))->save()
                ) {
                    $this->db
                        ->where(['id_retail' => $id_retail])
                        ->update('retail', [
                            'status_ppn' => $status_ppn,
                            'name' => 'customer - ' . $id_retail
                        ]);
                    redirect('retail/checkout/' . $id_retail);
                }
                $this->session->set_flashdata('error', "transaction error");
            }
        }
        redirect('retail');
    }
}