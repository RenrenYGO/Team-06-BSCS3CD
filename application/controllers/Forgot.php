<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot extends CI_Controller {
    public function __construct(){
	    parent::__construct();
	}

    public function index(){
        $this->sitelayout->loadTemplate('registration/forgot');
        
        if ($this->input->post()){
            $email = $this->input->post('email');      
            $findemail = $this->forgot_model->forgotpassword($email);
            
            if($findemail){
                $this->forgot_model->sendpin($findemail);
            }else{ 
                $this->session->set_flashdata('msg',' Email not found!');
                redirect('login');     
            }
        }
    }

    public function pin(){

        $email = $this->session->flashdata('email');
        $TPIN = $this->input->post('TPIN');
        $newpass = $this->input->post('newpass');
        $confpass = $this->input->post('confpass');

        $this->sitelayout->loadTemplate('registration/pin',$email);

        $result = $this->forgot_model->forgotpassword($email);

        if (!empty($result) && $newpass == $confpass && password_verify($TPIN,$result['TPIN'])) {
            
            $this->forgot_model->forgotchangepassword($email,$newpass);//NEEDS DISPLAY
            redirect('login'); 
        }
    }
    
}
