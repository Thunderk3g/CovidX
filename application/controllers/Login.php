<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		if(isset($_SESSION["id"])){
			$data = new stdClass();
			$data->message = "";
			redirect(base_url("dashboard"));
		} else {
			$data = new stdClass();
			$data->message = "";
			$this->load->view('login',$data);
		}
	}
	public function process(){
		if(isset($_SESSION["id"])){
			$data = new stdClass();
			$data->message = "";
			redirect(base_url("dashboard"));
		} else {
			$data = new stdClass();
			$res = $this->db->query("select * from user where `username` = '" . $_POST["username"] . "'");
			$phone = $this->db->query("select * from user where `phone` = '" . $_POST["username"] . "'");
			if($res->num_rows() == 0 && $phone->num_rows() == 0){
				$data->type = "error";
				$data->message = "User Does Not Exist!";
				$this->load->view('login',$data);
			}
			else{
				$user = null;
				if($res->num_rows() != 0){
					$user = $res;
				}
				else{
					$user = $phone;
				}
				if($this->md5($_POST["password"]) == $user->result()[0]->password){
					$_SESSION['username'] = $user->result()[0]->username;
					$_SESSION['phone'] = $user->result()[0]->phone;
					$_SESSION['password'] = $user->result()[0]->password;
					$_SESSION['id'] = $user->result()[0]->id;
					$activity = array(
						'user_id' => $_SESSION["id"],
						'activity_type' => 'Login',
						'time_of_activity' => date('Y-m-d H:i:s')
					);
					$this->db->insert('activity', $activity);
					redirect(base_url());
				}
				else{
					$data->type = "error";
					$data->message = "Incorrect Username or Password!";
					$this->load->view('login',$data);
				}
			}
		}
	}
	public function md5($_STRING){
		return md5($_STRING);
	}
}
