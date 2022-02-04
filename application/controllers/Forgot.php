<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot extends CI_Controller {
    public function __construct(){
	    parent::__construct();
	}

    public function index(){
        $this->sitelayout->loadTemplate('registration/forgot');
        if ($_SERVER['REQUEST_METHOD']=='POST'){
            $email = $this->input->post('email');      
            $findemail = $this->forgot_model->forgotpassword($email);  
            
            if($findemail){
                $this->forgot_model->sendpassword($findemail);      
            }else{ 
                $this->session->set_flashdata('msg',' Email not found!');
                redirect('login');     
            }
           
        }
        
       
    }
    
}
