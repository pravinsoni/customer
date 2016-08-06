<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Model {

    public function __construct() {
        parent :: __construct();
    }

    public function register($name, $mobile, $email, $pref_cont, $msg) {
        $data = array(
            'Name' => $name,
            'Mobile' => $mobile,
            'Email' => $email,
			'Prefered_Contct'= $pref_cont,
            'Message' => $msg,
        );

        
        

//print_r('hello'); exit;
        $result = $this->db->insert('registration', $data);

        if ($result == 1) {
            

            return $result;
        } else {
            return FALSE;
        }
    }
	
	?>