<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activity extends CI_Controller {
    public function index($limiter){
        $from = 0;
        $to = 0;
        if(isset($limiter)){
            if($limiter == 1){
                $from = 1;
                $to = 10 * $limiter;
            }else{
                $from = (10 * ( $limiter -1 ) ) + 1;
                $to = 10 * $limiter;
            }  
        }
        $data["count"] = $this->db->query("select count(*) as count from activity where user_id = '" . $_SESSION["id"] . "'")->result()[0]->count;
        $result = $this->db->query("select activity.id, activity.user_id, activity.activity_type,activity.time_of_activity,user.username,user.phone from activity INNER JOIN user ON user.id=activity.user_id where activity.user_id = '" . $_SESSION["id"] ."' order by activity.id asc")->result_array();
        $operation = $result;
        for ($i = 0; $i < count($result); $i++) {
            $temp1 = $from-1; // 1-1 = 0
            $temp2 = $to-1; // 
            if(! ( ($i >= $temp1) && ($i <= $temp2) ) ){
                unset($operation[$i]);
            }
        }
        $data["activity_log"] = $operation;
         $this->load->view("activity",$data);
    }
}
?>