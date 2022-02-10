<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }

    public function register(){
        $data['title'] = 'Sign Up';

        // $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required|callback_check_username_exists');
        $this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

        if($this->form_validation->run() === false){
            $this->sitelayout->loadTemplate('registration/register', $data);
        }else{
            // Encrypt password
            $enc_password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

			$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
                'password' => $enc_password
			);
            
            $this->registration_model->get_reg($data);
            // Set message
            $this->session->set_flashdata('user_registered', 'You are now registered and can log in');
            redirect('login');
        }
	}

    // Check if username exists
    public function check_username_exists($username){
        $this->form_validation->set_message('check_username_exists', 'That username is taken. Please choose a different one');

        if($this->registration_model->check_username_exists($username)){
            return true;
        }else{
            return false;
        }
    }

    // Check if email exists
    public function check_email_exists($email){
        $this->form_validation->set_message('check_email_exists', 'That email is taken. Please choose a different one');

        if($this->registration_model->check_email_exists($email)){
            return true;
        }else{
            return false;
        }
    }
}

