<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nepal extends CI_Controller {
    public function index(){
        $data["covid_timeline_log"] = $this->db->query("select covid_timeline.totalCases,covid_timeline.newCases, covid_timeline.totalRecoveries from covid_timeline ")->result_array();
        $this->load->view("nepal",$data);
    }
}

?>