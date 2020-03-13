<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model  extends CI_Model {

	public function get_user_data($username)
    {
        $this->db->select('member_id, username, password');
        $this->db->from('member');
        $this->db->where('username', $username);
        $query = $this->db->get();

        return $query->row(); // ตัวเดียว
        // return $query->result(); //หลายตัว
    }
}