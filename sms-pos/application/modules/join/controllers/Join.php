<?php
/**
 * Created by PhpStorm.
 * User: Awalin Yudhana
 * Date: 12/05/2015
 * Time: 14:29
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Join extends MX_Controller
{
    protected $id_staff;

    public function __construct()
    {
        parent::__construct();
        $this->id_staff = $this->config->item('id_staff');

        $this->load->library('cart',
            array(
                'cache_path' => 'JOIN',
                'cache_file' => $this->id_staff,
                'primary_table' => 'sales_order',
                'foreign_table' => 'sales_order_detail'
            ));

        $this->load->model('ModelJoin', 'model_join');
        $this->cache = $this->cart->array_cache();
    }


    public function index()
    {
        if ($this->cart->primary_data_exists()) {
            redirect('join/do');
        }
        $data['items'] = null;
        if ($this->input->post('id_customer')) {
            $data['items'] = $this->model_join->getListSO($this->input->post('id_customer'));
            $data['id_customer'] = $this->input->post('id_customer');
        }
        $customer = array('' => '');
        foreach ($this->db->get('customer')->result() as $object) {
            $customer[$object->id_customer] = $object->name;
        }
        $data['customers'] = $customer;
        $this->parser->parse("join.tpl", $data);
    }

    public function select($id_customer)
    {
        if ($this->input->post('id_so')) {
            $detail = $this->model_join->getDataSODetail($this->input->post('id_so'));
            $data_primary = [
                'id_customer' => $id_customer,
                'id_staff' => $this->id_staff,
                'selected' => $this->input->post('id_so'),
                'id_proposal' => null,
                'status_ppn' => 1
            ];
            $this->cart->primary_data($data_primary);
            foreach ($detail as $key) {
                unset($key['id_so_detail']);
                $this->cart->add_item($key['id_product'], $key);
            }
        }
        redirect('join/do');
    }

    public function listing()
    {
        if (!$this->cart->primary_data_exists()) {
            redirect('join');
        }
        $data['error'] = $this->session->flashdata('error') != null ? $this->session->flashdata('error') : null;

        $data['master'] = $this->db->get_where('customer', ['id_customer' => $this->cache['value']['id_customer']])->row();

        $data['cache'] = $this->cache;
        $data['items'] = $this->cache['detail']['value'];
        $this->parser->parse("join_list.tpl", $data);
    }

    public function reset()
    {
        $this->cart->delete_record();
        redirect('join');
    }


    public function save()
    {
        if ($this->input->post()) {
            if ($this->form_validation->run('sales_order/save') == TRUE) {

                $this->db
                    ->where_in('id_so', $this->cache['value']['selected'])
                    ->update('sales_order', [
                        'active' => 0
                    ]);
                if ($id_so = $this->cart->primary_data(array(
                    'due_date' => $this->input->post('due_date')
                ))->save()
                ) {
                    $this->db
                        ->where(['id_so' => $id_so])
                        ->update('sales_order', [
                            'status' => 0
                        ]);
                    redirect('join/checkout/' . $id_so);
                }
                $this->session->set_flashdata('error', "transaction error");
            }
        }
        $this->listing();
    }


    public function checkout($id)
    {

        if (!$master = $this->model_join->getDataSO($id)
        ) {
//            redirect('join');
        }
        $data['master'] = $master;
        $data['items'] = $this->model_join->getDataSODetail($id);
        $this->parser->parse("join_checkout.tpl", $data);
    }
}