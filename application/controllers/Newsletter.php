<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newsletter extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $data['title'] = 'Sign Up for the Newsletter';
        $this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');

        if($this->form_validation->run() === false){
            $this->load->view('registration/newsletter', $data);
        } else {
            
            // Encrypt password
            // $enc_password = md5($this->input->post('password'));

			$data = array(
				'email' => $this->input->post('email'),
                // 'password' => $enc_password
			);

            $this->newsletter_model->get_news($data);
            // Set message
            $this->session->set_flashdata('user_registered', 'You are now registered to the Commhub Newsletter!');
                redirect('pages/view');
        }
	}

    // Check if username exists
    // public function check_username_exists($username){
    //     $this->form_validation->set_message('check_username_exists', 'That username is taken. Please choose a different one');
    //     if($this->registration_model->check_username_exists($username)){
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }

    // Check if email exists
		public function check_email_exists($email){
			$this->form_validation->set_message('check_email_exists', 'That email is already subscribed.');
			if($this->newsletter_model->check_email_exists($email)){
				return true;
			} else {
				return false;
			}
		}
        // redirect('/register');
}
