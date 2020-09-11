<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index(){
           if(isset($_SESSION["id"])){
                $this->load->view("dashboard");
            } else {
                redirect(base_url());
            }
       
    }
    public function getDataOfLogin($id){
        $res = $this->db->query("select * from user where `id` = " . $id);
        var_dump($res->result_array()[0]);
    }
    public function logout(){
        //INSERT IN ACTIVITY LOG
        $activity = array(
            'user_id' => $_SESSION["id"],
            'activity_type' => 'Logout',
            'time_of_activity' => date('Y-m-d H:i:s')
        );
        $this->db->insert('activity', $activity);
        if(isset($_SESSION["id"])){
            unset($_SESSION["id"]);
            unset($_SESSION["username"]);
            unset($_SESSION["phone"]);
            unset($_SESSION["password"]);
            redirect(base_url(""));
        }
    }
}