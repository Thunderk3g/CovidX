<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot extends CI_Controller {

    public function index(){
        $data = new StdClass();
        $data->view="forgot";
        $this->load->view("forgot",$data);
    }

public function process(){
    // Check if User Exists
    $data = new StdClass();
    $query = $this->db->query("select * from user where `username` = '" . $_POST['username'] . "'");
    if($query->num_rows() != 0){
         $data->type = "success";
         $data->view="newpass";
         $this->load->view("forgot",$data);
    }
}
}
?>