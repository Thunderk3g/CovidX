<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index(){
           if(isset($_SESSION["id"])){    
                $data['rss'] = $this->parseRss();
                 $data['summary'] = $this->summary();    
                 $data["cases_log"] = $this->db->query("select cases.district,cases.total_cases from cases ")->result_array();
                
                 $this->load->view("dashboard",$data);
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
    public function summary(){
        return $this->APImodel->getSummary();
    }
     
    public function parseRss(){
        $this->benchmark->mark('code_start');

        $rss = $this->APImodel->WHORSSFEED();
        $parse = simplexml_load_string($rss);
        $version = $parse['version'];
        $channel = $parse->channel;
        $title = $channel->title;
        $link = $channel->link;
        $description = $channel->description;
        $newsItems = $channel->item;
        
        $this->benchmark->mark('code_end');
        $elapsed_time = $this->benchmark->elapsed_time('code_start', 'code_end');
        return array(
            'version'=>$version,
            'channel'=>$channel,
            'title'=>$title,
            'link'=>$link,
            'description',$description,
            'items'=>$newsItems,
            'elapsed_time'=>$elapsed_time
        );
    }
    public function request($key){
        $result = $this->db->query('select * from cases where District like "%' . $key . '%"');
        if($result->num_rows() != 0){
        echo json_encode($result->result_array());
        }
        else{
            echo json_encode(array());
        }
    }
    public function request2(){
        echo json_encode($_POST);
    }
}