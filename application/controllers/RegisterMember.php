<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterMember extends BD_Controller {

	public function index()
	{
		$this->load->view('layout/head');
		$this->load->view('register_member');
	}
	

}
