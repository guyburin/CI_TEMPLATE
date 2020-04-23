<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scoresheet extends BD_Controller {

	public function index()
	{
		$this->load->view('layout/head');
		$this->load->view('layout/header');
		$this->load->view('layout/left-menu');
		$this->load->view('Scoresheet/content');
		$this->load->view('layout/foot');
	}	
}
