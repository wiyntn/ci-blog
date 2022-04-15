<?php

class ModUser extends CI_Model
{
    public function chkRegister($data)
    {
        $this->db->select('id');
        $this->db->from('tbl_guide');
        $this->db->or_where('user_name', $data['user_name']);
        $this->db->or_where('mobailenumber', $data['mobailenumber']);
        $query = $this->db->get();
        return $num = $query->num_rows();
    }


    public function addGuide($data)
    {
        return $this->db->insert('tbl_guide', $data);
    }

    public function chkUserRegister($data)
    {
        $this->db->select('id');
        $this->db->from('tbl_user');
        $this->db->or_where('user_name', $data['user_name']);
        $this->db->or_where('mobaile_number', $data['mobaile_number']);
        $query = $this->db->get();
        return $num = $query->num_rows();
    }
    public function addUser($data)
    {

        return $this->db->insert('tbl_user', $data);
    }

    public function permitUserlogin($data)
    {
        $this->load->database();
        $this->db;
        return $this->db->get_where('tbl_user', $data)->result_array();
    }
}
