<?php
/**
 * Created by PhpStorm.
 * User: Awalin Yudhana
 * Date: 27/04/2015
 * Time: 14:22
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Returns extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->id_staff = $this->config->item('id_staff');
        $this->id_store = $this->config->item('id_store');
        $this->load->model('ModRetail');
    }

    public function index()
    {
        $data['error'] = $this->session->flashdata('error') != null ? $this->session->flashdata('error') : null;
        if ($this->input->post('id_retail')) {
            if ($data_retail = $this->ModRetail->getDataRetail($this->input->post('id_retail'))) {
                redirect('retail/returns/list-item' . '/' . $data_retail->id_retail);
            }
            $data['error'] = 'no nota tidak ditemukan';

        }
        $this->parser->parse("returns.tpl", $data);

    }

    public function listItem($id_retail)
    {

        if (!$retail = $this->ModRetail->getDataRetail($id_retail)) {
            $this->session->set_flashdata('error', 'no nota tidak ditemukan');
            redirect('retail/returns');

        }
        $data['master'] = $retail;
        $data['items'] = $this->ModRetail->getRetailDetail($id_retail);
        $this->parser->parse("returns_list.tpl", $data);
    }

    public function returnsItem($id_detail)
    {

        $data['error'] = $this->session->flashdata('error') != null ? $this->session->flashdata('error') : null;
        if (!$detail = $this->ModRetail->getRetailDetailItem($id_detail)) {
            $this->session->set_flashdata('error', 'no nota tidak ditemukan');
            redirect('retail/returns');
        }

        if ($this->input->post()) {
            if ($this->form_validation->run('returns') == TRUE) {
                if ($this->input->post('returns') <= $detail->qty) {
                    $data_value = array(
                        'returns' => $this->input->post('returns'),
                        'reason' => $this->input->post('reason')
                    );

                    $this->db
                        ->where('id_retail_detail', $this->input->post('id_retail_detail'))
                        ->update('retail_detail', $data_value);
                    $this->session->set_flashdata('success', 'Input data berhasil');

                    redirect('retail/returns/list-item' . '/' . $this->input->post('id_retail'));

                }
                $this->session->set_flashdata('error', 'Jumlah retur tidak sesuai');
            }
        }

        $data['master'] = $detail;
        $this->parser->parse("returns_item.tpl", $data);
    }
}