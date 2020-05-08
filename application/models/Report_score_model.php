<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report_score_model  extends CI_Model
{

    public function get_member_by_id($member_id)
    {
        $this->db->select('member_id, name');
        $this->db->from('member');
        $this->db->where('member_id', $member_id);
        $query = $this->db->get();

        return $query->row(); // ตัวเดียว
        // return $query->result(); //หลายตัว
    }
}
