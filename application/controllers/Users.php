<?php
class Users extends CI_Controller {

    private $user = null;

    public function __construct(){

        parent::__construct();
        $this->user = $this->session->userdata('user');  

    }

    public function index(){

        // $data = $this->input->post();
        // $this->user_model->update_bio($data);
        // redirect('pages/profile');
        $this->sitelayout->loadTemplate('users/index');

    }

    public function edit_bio(){

        $data = $this->input->post();
        $this->user_model->update_bio($data);
        redirect('pages/profile');
        // $this->sitelayout->loadTemplate('users/index', $data);

    }
}