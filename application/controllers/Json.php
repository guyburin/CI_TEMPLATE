<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Json extends BD_Controller {

	public function index()
	{
		$data['test']='hello world';
		// echo json_encode($data);
		$this->response($data);
		// $this->output->set_content_type('application/json')
		// ->set_output(json_encode($data));
	}
}
