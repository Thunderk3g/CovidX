<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewPass extends CI_Controller {

    public function index(){
        $data = new StdClass();
        $data->view="newpass";
        $this->load->view("forgot",$data);    }

public function process(){
    // Updates Passowrd
    $data = new StdClass();
    $query = $this->db->query("UPDATE `user` SET `password`= '". md5($_POST['password']) ."' WHERE `phone` = '". $_POST['phone'] ."'");
    $data->type = "success";
     $data->message = "Your Password Has Been Reset";
    $this->load->view("login",$data);
    }
}
?>