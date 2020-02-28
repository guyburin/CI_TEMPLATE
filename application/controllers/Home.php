<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends BD_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->isLoggedIn();
	}

	public function index()
	{
		$this->load->view('home/home');
	}

}
