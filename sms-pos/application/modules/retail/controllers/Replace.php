<?php
/**
 * Created by PhpStorm.
 * User: Awalin Yudhana
 * Date: 27/04/2015
 * Time: 14:22
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Replace extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->id_staff = $this->config->item('id_staff');
        $this->id_store = $this->config->item('id_store');
        $this->load->model('ModRetail');
        $this->load->library('cart',
            array(
                'cache_path' => 'RETURNS',
                'cache_file' => $this->id_staff,
                'primary_table' => 'retail_returns',
                'foreign_table' => 'retail_returns_detail'
            ));
    }

    public function index($id_retail)
    {
        if (!$data_retail = $this->ModRetail->getDataRetail($id_retail)
        ) {
            redirect('retail');
        }
        $data['error'] = $this->session->flashdata('error') != null ? $this->session->flashdata('error') : null;
        $product_replaced = $this->ModRetail->getDetailItemReplaced($id_retail);
        $product_storage = $this->ModRetail->getProductRetail($this->id_store);

        $data['master'] = $data_retail;
        $data['product_storage'] = $product_storage;

        if ($this->input->post()) {
            if ($this->form_validation->run('retail') == TRUE) {
                $this->cart->add_item($this->input->post('id_product'), [
                    'id_product' => $this->input->post('id_product'),
                    'barcode' => $this->input->post('barcode'),
                    'qty' => $this->input->post('qty'),
                    'discount' => $this->input->post('discount') ? $this->input->post('discount') : 0
                ]);
                redirect('retail/replace/' . $id_retail);
            }
        }
        $data['items'] = $this->cart->list_item($product_storage, 'id_product')->result_array_item();
        $data['product_replaced'] = $product_replaced;
        $this->parser->parse("replace.tpl", $data);
    }

    public function updateItem($id_retail, $id_product, $qty)
    {
        if (!$this->cart->update_item($id_product, ['qty' => $qty]))
            $this->session->set_flashdata('error', $this->cart->getError());
        redirect('retail/replace/' . $id_retail);
    }

    public function deleteItem($id_retail, $id_product)
    {
        if (!$this->cart->delete_item($id_product))
            $this->session->set_flashdata('error', $this->cart->getError());
        redirect('retail/replace/' . $id_retail);

    }

    public function save($id_retail)
    {
        if ($this->input->post()) {
            if ($this->form_validation->run('retail/replace/save') == TRUE) {
                $data_value = array(
                    'cashback' => $this->input->post('cashback'),
                    'id_staff' => $this->id_staff,
                    'id_retail' => $id_retail
                );
                if ($this->cart->count_item() > 0) {
                    if ($id_retur = $this->cart->primary_data($data_value)->save()
                    ) {
                        redirect('retail/replace/checkout/' . $id_retur);
                    }
                    $this->session->set_flashdata('error', "transaction error");

                } else {
                    $this->db->insert('retail_returns', $data_value);
                    redirect('retail/replace/checkout/' . $this->db->insert_id());
                }
            }
        }
        redirect('retail/replace/' . $id_retail);
    }
}