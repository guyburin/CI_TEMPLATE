<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShowName_model  extends CI_Model {
    

	public function get_Name_on_avtivity($activity,$activity_type,$activity_lv)
    {
        $this->db->select('
                            type.name as type,
                            generation.name as gen,
                            competition.name as competition,
                            register.member_id as id1,
                            register.member_id2 as id2,
                            register.team as team,
                        ');
        $this->db->from('register');
        $this->db->join('member', 'member.member_id = register.member_id');
        // $this->db->join('member', 'member.member_id = register.member_id2');
        $this->db->join('competition', 'competition.compet_id = register.compet_id');
        $this->db->join('type', 'type.type_id = register.type_id');
        $this->db->join('generation', 'generation.gen_id = register.gen_id');
        $array = array('register.compet_id' => $activity, 'register.type_id' => $activity_type, 'register.gen_id' => $activity_lv);
        $this->db->where($array);
        $query = $this->db->get();

        return $query->result(); // ตัวเดียว
        // return $query->result(); //หลายตัว
    }

    public function get_member_by_id($member_id)
    {
        $this->db->select();
        $this->db->from('member');
        $this->db->where('member_id', $member_id);
        $query = $this->db->get();

        return $query->row(); // ตัวเดียว
        // return $query->result(); //หลายตัว
    }

    
}