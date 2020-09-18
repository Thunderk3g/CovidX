<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cases extends CI_Controller {

    public function active(){
        $data["cases_log"] = $this->db->query("select cases.district,cases.total_cases, cases.active_cases from cases ")->result_array();
        $this->load->view("active",$data);
    }
    public function closed(){
        $data["cases_log"] = $this->db->query("select cases.district,cases.total_cases, cases.closed_cases from cases ")->result_array();
        $this->load->view("closed",$data);
    }
    public function recover(){
        $data["cases_log"] = $this->db->query("select cases.district,cases.total_cases, cases.recovered_cases from cases ")->result_array();
        $this->load->view("recover",$data);
    }
    public function death(){
        $data["cases_log"] = $this->db->query("select cases.district,cases.total_cases, cases.deaths from cases ")->result_array();
    $this->load->view("death",$data);
}
}
?>
