<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShowName extends CI_Controller {

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
}
