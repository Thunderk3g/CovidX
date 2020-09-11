<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function index(){
        $this->load->view("register");
    }
    public function process(){
       // Check for user
       $data = new StdClass();
       $query = $this->db->query("select * from user where `username` = '" . $_POST['username'] . "'");
       if($query->num_rows() != 0){
            $data->type = "error";
            $data->message = "Email already exists!";
            $this->load->view("register",$data);
       }
       else{
        $phonequery = $this->db->query("select * from user where `phone` = '" . $_POST['phone'] . "'");
            if($phonequery->num_rows() != 0){
                $data->type = "error";
                $data->message = "Phone already exists!";
                $this->load->view("register",$data);
            }
            else if(strlen($_POST["phone"]) != 10){
                $data->type = "error";
                $data->message = "Phone number invalid!";
                $this->load->view("register",$data);
            }
            else{
                if($_POST["password"] != $_POST["confirmpassword"] ){
                    $data->type = "error";
                    $data->message = "Passwords don't match!";
                    $this->load->view("register",$data);
                }
                else{
                    $res = $this->db->query("INSERT INTO `user`( `username`, `phone`, `password`, `date_created`) VALUES ('" . $_POST["username"] . "' , '" . $_POST["phone"] . "' , '" . md5($_POST["password"]) . "' , '" . date("Y-m-d h:i:s") . "')");
                    $data->type = "success";
                    $data->message = "User created successully.";
                    $this->load->view("register",$data);
                }
            }
       }
    }
}
?>