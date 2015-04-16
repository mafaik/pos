<?php

/**
 * Created by PhpStorm.
 * User: Awalin Yudhana
 * Date: 16/04/2015
 * Time: 16:43
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Model
{
    protected $fields = array();

    protected $condition = array();

    protected $order = array();

    protected $limit = array();

    public function __construct()
    {
        parent::__construct();

    }

    /**
     * function : get data of master table.
     * @param $table Master name of selected table
     * @return object
     */
    public function getSimpleMasterData($table)
    {
        !empty($this->fields) ? $this->db->select(implode(',', $this->fields)) : $this->db->select('*');
        if (!empty($this->condition))
            $this->db->where($this->condition);
        if (!empty($this->order))
            $this->db->order_by(implode(',', $this->order));
        if (!empty($this->limit))
            $this->db->limit(implode(',', $this->limit));
        $rows = $this->db->get($table);

        $this->_reset_run();

        return $rows->result();
    }

    /**
     * @param array $fields Master list of selected fields ex: ['a','b','c']
     */
    public function setFields($fields = array())
    {
        $this->fields = $fields;
    }

    /**
     * @param array $condition Master where condition query ex : ['a'=>'john,'b >'=>10]
     */
    public function setCondition($condition = array())
    {
        $this->condition = $condition;
    }

    /**
     * @param array $order Master ordering data by selected field ex : ['a desc'] or ['a desc','b asc']
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }

    /**
     * @param array $limit Master limit ex : limit 10 rows [10], limit 10 start from 20 row [10,20]
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
    }


    /**
     * Resets the query builder values.  Called by the get() function
     *
     * @param    array    An array of fields to reset
     * @return    void
     */
    protected function _reset_run()
    {
        foreach (get_object_vars($this) as $item => $default_value) {
            unset($this->$item);
        }
    }

}