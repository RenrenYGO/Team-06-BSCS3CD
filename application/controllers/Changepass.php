<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Changepass extends CI_Controller{
    
    private $user = null;

    public function __construct(){
        parent::__construct();
        $this->user = $this->session->userdata('user');
    }

    public function index(){
        $this->sitelayout->loadTemplate('templates/changepassword');
    }

    public function edit_password(){
        $data = $this->input->post();
        $this->changepass_model->update_password($data);
        redirect('pages/changepassword');
    }
}