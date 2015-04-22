<?php
/**
 * Created by PhpStorm.
 * User: Awalin Yudhana
 * Date: 22/04/2015
 * Time: 12:08
 */if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Insert_Batch {
    var $CI = NULL;

    public function __construct()
    {
        $CI = & get_instance();
        $this->db = $CI->db;
    }

    /**
     * @param array $data
     * @return bool
     */
    public function insertData($data = array())
    {
        $this->db->trans_start();
        $this->insertByField($data['table'], $data['value']);

        $reference_key = $this->db->insert_id();

        $data_detail = $this->parsingReferenceKey(
            $data['detail']['table'],
            $data['detail']['foreign_key'],
            $reference_key,
            $data['detail']['value']
        );

        $this->db->insert_batch($data['detail']['table'], $data_detail);
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return $reference_key;
        }
    }

    private function insertByField($table, $data_array = array())
    {
        if (is_array($data_array)) {
            $fields = $this->db->list_fields($table);
            foreach ($fields as $field) {
                if (array_key_exists($field, $data_array)) {
                    if ($data_array[$field] != null || $data_array[$field] != "")
                        $this->db->set($field, $data_array[$field]);
                }
            }
            $this->db->insert($table);
            if ($this->db->affected_rows() > 0) {
                return true;
            }
        }
    }

    /**
     * @param $reference_key
     * @param array $data
     * @return array
     */

    private function parsingReferenceKey($table, $reference_field, $reference_key, $data = array())
    {
        if (is_array($data)) {
            $result = array();
            $fields = $this->db->list_fields($table);
            foreach ($data as $rows) {
                $data_row = array();
                foreach ($fields as $field_row) {
                    if (array_key_exists($field_row, $rows)) {
                        $data_row[$field_row] = $rows[$field_row];
                    }
                }
                $data_row[$reference_field] = $reference_key;
                $result[] = $data_row;

            }
            return $result;
        }
    }

}