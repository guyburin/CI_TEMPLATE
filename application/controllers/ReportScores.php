<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportScores extends BD_Controller {

	public function index()
	{
		$this->load->view('layout/head');
		$this->load->view('layout/head');
		$this->load->view('layout/header');
		$this->load->view('layout/left-menu');
		$this->load->view('report_score/reportscore1');
		// $this->load->view('layout/footer');
		$this->load->view('layout/foot');

	}
	

}
