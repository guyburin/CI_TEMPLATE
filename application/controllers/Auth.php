<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}

	public function login()
	{
		$username = $this->input->post('txt_username');
		$password = $this->input->post('txt_password');

		$val = $this->User_model->get_user_data($username);
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
		// $p = password_hash($Password, PASSWORD_BCRYPT);
		$Name = $this->input->post('Name');
		$Sername = $this->input->post('Sername');
		$Nickname = $this->input->post('Nickname');
		// $age = $this->input->post('sex');
		$date = $this->input->post('date');
		$Club = $this->input->post('Club');
		$Phone = $this->input->post('Phone');
		$Line = $this->input->post('Line');
		// print($Nickname);
		$document = [
            "username" => $Username,
            "password" => $Password,
            "name" => $Name,
            "sername" => $Sername,
            "nick_name" => $Nickname,
            "club" => $Club,
            "line_id" => $Line,
            "phone" => $Phone,
            "birthday" => $date,
            "role" => 1
		];
		// var_dump($document);
		$result = $this->User_model->insert_user($document);
		// $db = $this->db;
		// $result = $db->insert($Username,$Password,$Name ,$Sername,$Nickname,$date, $Club,$Phone ,$Line);
	}
}
