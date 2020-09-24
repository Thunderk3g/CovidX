<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

    public function index(){
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('dis', 'District', 'required');
        $this->form_validation->set_rules('state', 'State', 'required');
        $this->form_validation->set_rules('zipcode', 'Zipcode', 'required');
        $this->form_validation->set_rules('cnum', 'Cnum', 'required','trim|required|min_length[10]|max_length[10]');
        $this->form_validation->set_rules('naminf', 'Name Of Infected', 'required');
                if ($this->form_validation->run() == FALSE)
        {
                // var_dump($_POST);
                $this->load->view('report');
        }
                else{
                        $res = $this->db->query("INSERT INTO `report`(`username`, `email`, `naminf`, `state`, `district`, `zipcode`, `contactnum`, `gender`) VALUES ('" . $_POST["username"] . "','" . $_POST["email"] . "','" . $_POST["naminf"] . "','" . $_POST["state"] . "','" . $_POST["dis"] . "','" . $_POST["zipcode"] . "','" . $_POST["cnum"] . "','" . $_POST["gender"] . "')");
                        $this->load->view("dashboard");
                }
    }
   
}

?>