<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activity extends CI_Controller {

    public function index(){
        $data["activity_log"] = $this->db->query("select activity.user_id, activity.activity_type,activity.time_of_activity,user.username,user.phone from activity INNER JOIN user ON user.id=activity.user_id where activity.user_id = '" . $_SESSION["id"] ."'")->result();
        $this->load->view("activity",$data);
    }
}
?>