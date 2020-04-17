<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model  extends CI_Model {
    

	public function get_user_data($username)
    {
        $this->db->select('member_id, username, password,role');
        $this->db->from('member');
        $this->db->where('username', $username);
        $query = $this->db->get();

        return $query->row(); // ตัวเดียว
        // return $query->result(); //หลายตัว
    }
    public function post_user_data()
    {
        $this->db->insert();
        $this->db->value('member');
        // $this->db->where('username', $username);
        $query = $this->db->get();

        return $query->row(); // ตัวเดียว
        // return $query->result(); //หลายตัว
        // INSERT INTO MyGuests (firstname, lastname, email)VALUES ('John', 'Doe', 'john@example.com')
    }

    
    public function insert_user($data)
    {
        // return $this->db->insert('users', $data);
        $this->db->trans_begin();
        $this->db->insert('member', $data);
        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            redirect(base_url('RegisterMember/index'), 'refresh');
            return false;
        } else {
            $this->db->trans_commit();
            redirect(base_url('login'), 'refresh');
            return true;
        }
    }
}