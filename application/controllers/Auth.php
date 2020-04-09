<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function login()
	{
		$username = $this->input->post('txt_username');
		$password = $this->input->post('txt_password');

		$val = $this->user_model->get_user_data($username);
		// var_dump($username);
		// print($username);
		// print($password);
		// var_dump($val);
		if (!empty($val)) {
			$match = $val->password;
			$role = $val->role; //Get password for user from database
			//  print ($role);
			if ($password == $match) { //Condition if password matched  || $password == "yes.i.am"
				$sess_array = array(
					'member_id' => $val->member_id,
					'username' => $val->username,
					'isLoggedIn' => true,
				);

				$this->session->set_userdata($sess_array);

				if($role == 0){
					echo 'ADMIN PAGE';
					// redirect(base_url('ADMIN'), 'refresh');
				}else{
					redirect(base_url('home'), 'refresh');
				}
				
			} else {
				// $output['status'] = false;
				// $output['message'] = 'รหัสผ่านไม่ถูกต้อง';
				// $this->response($output);
				  redirect(base_url('login'), 'refresh');
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
        redirect(base_url('login'));
	}

	public function registerMember()
	{
		$Username = $this->input->post('Username');
		$Password = $this->input->post('Password');
		$C_Password = $this->input->post('C_Password');
		$Name = $this->input->post('Name');
		$Sername = $this->input->post('Sername');
		$age = $this->input->post('sex');
		$date = $this->input->post('date');
		$Club = $this->input->post('Club');
		$Phone = $this->input->post('Phone');
		$Line = $this->input->post('Line');
		// print($Username);
		// print($Password);
		// print($C_Password);
		// print($Name);
		// print($Sername);
		// print($age);
		// print($date);
		// print($Club);
		// print($Phone);
		// print($Line);
		// $db = new User_model();
		// $result = $db->insert();
		// response(200, $result);
	}
}
