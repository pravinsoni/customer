<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct() {
        parent :: __construct();
        $this->load->library('form_validation');
        $this->load->model('Registration');
    }

     public function index() {
        $data = array(
            'title' => 'Registration Form',
            'action' => base_url('Main/customer_info'),
        );

        
       $this->load->view('home', $data);
     
    }
	
	   
	
	 public function customer_info() {
		 
		 
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
       
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim');
		 $this->form_validation->set_rules('mobile', 'Mobile', 'required|trim');
		 $this->form_validation->set_rules('prefcontact', 'cantact_type', 'required|trim');
       
        $this->form_validation->set_rules('msg', 'message', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            # code...			
            $data = array(
                'title' => 'Registration Form',
                'action' => base_url('Main/customer_info'),
               
            );
            $this->load->view("home", $data, 'refresh');
        } else {
            $name = $this->input->post('name');
            $mobile = $this->input->post('mobile');
            $email = $this->input->post('email');
           $pref_cont = $this->input->post('prefcontact');
            $msg = $this->input->post('msg');

            $result = $this->Registration->register($name, $mobile, $email, $pref_cont, $msg);

            if ($result) {

                $data = array(
                    'title' => 'Registration Form',
                    'action' => base_url('Main/customer_info'),
                   
                    'success' => "Thank you for visiting.",
                );

                $this->load->view("home", $data);
            }
        }
    }
}
?>