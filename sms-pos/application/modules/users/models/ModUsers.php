<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModUsers extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getUserGroup(){
        $query = $this->db->query("SELECT sg.id_group, sg.name_group, COUNT(s.id_staff) AS jml_staff
                                    FROM `staff_group` sg
                                    LEFT JOIN `staff` s ON sg.`id_group` = s.`id_group`
                                    GROUP BY sg.`id_group`
                                    ORDER BY sg.`id_group`");
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }

    public function getUserGroupByID($id_group){
        $this->db->where('id_group', $id_group);
        $query = $this->db->get('staff_group');

        if ($query->num_rows() > 0) {
            return $query->row();
        }
        return false;
    }

    public function updateUserGroup($id_group, $data)
    {
        $this->db->where('id_group', $id_group);
        $this->db->update('staff_group', $data);
    }

    public function deleteUserGroup($id_group)
    {
        $this->db->delete('staff_group', array('id_group' => $id_group));
    }

    public function getUserGroupRole($id_group)
    {
        $this->db->select('roles');
        $this->db->where('id_group', $id_group);
        $query = $this->db->get('staff_group');

        if ($query->num_rows() > 0) {
            return $query->row_array();
        }
        return false;
    }
}