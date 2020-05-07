<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShowName extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ShowName_model');
	}

	public function index()
	{
		$this->load->view('layout/head');
		$this->load->view('layout/header');
		$this->load->view('layout/left-menu');
		$this->load->view('Showname/show_name');
		$this->load->view('Showname/script');
		//$this->load->view('layout/footer');
		$this->load->view('layout/foot');
	}
	
	function getname (){
		$activity = $this->input->get('activity');
		$activity_type = $this->input->get('slct1');
		$activity_lv = $this->input->get('slct2');
		print($activity);
		print($activity_type);
		print($activity_lv);
		$data = $this->ShowName_model->get_Name_on_avtivity($activity,$activity_type,$activity_lv);
		$OUTPUT = [];
		foreach($data as $values){
			$mem1 = $this->ShowName_model->get_member_by_id($values->id1);
			$mem2 = $this->ShowName_model->get_member_by_id($values->id2);
			$old1 = date('Y') - $mem1->birthday;
			if($values->type =="ประชาชน"){
				$old2 = date('Y') - $mem2->birthday;
				if($mem2->sex =="M"){
					$sex2 = "ชาย";
				}else{
					$sex2 = "หญิง";
				}
				$club = $mem2->club;
				$name2 =$mem2->name.' '.$mem2->sername;
			}else{
				$club = "ไม่มี";
				$sex2 = "ชาย";
				$old2 = 0;
				$name2 = "ไม่มี";
			}
			
			if($mem1->sex =="M"){
				$sex1 = "ชาย";
			}else{
				$sex1 = "หญิง";
			}
			
			$OUTPUT[] = array(
				'name1' => $mem1->name.' '.$mem1->sername,
				'name2' => $name2,
				'team' => $values->team,
				'old1' => $old1,
				'old2' => $old2,
				'sex1' => $sex1,
				'sex2' => $sex2,
				'club1' => $mem1->club,
				'club2' => $club,
				'type' => $values->type,
				'generation' => $values->gen,
				'competition' => $values->competition,
			);
			
		}
		
		// print_r($OUTPUT);
		$data['data'] = $OUTPUT;
		$this->load->view('layout/head',$data);
		$this->load->view('layout/header');
		$this->load->view('layout/left-menu');
		$this->load->view('Showname/show_name');
		$this->load->view('Showname/script');
		$this->load->view('layout/foot');
	}


}
