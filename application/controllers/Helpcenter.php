<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Helpcenter extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'Enter your Query';
        $this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/help', $data);
        } else {
			$data = array(
				'email' => $this->input->post('email'),
                'message'=>$this->input->post('editor1'),
			);

            $this->helpcenter_model->get_help($data);
            // Set message
             $this->session->set_flashdata('user_registered', 'You are now registered to the Commhub Newsletter!');
                redirect('pages/view');
        }
	}
    // Check if email exists
		public function check_email_exists($email){
			$this->form_validation->set_message('check_email_exists', 'That email is already subscribed.');
			if($this->newsletter_model->check_email_exists($email)){
				return true;
			} else {
				return false;
			}
		}
}
