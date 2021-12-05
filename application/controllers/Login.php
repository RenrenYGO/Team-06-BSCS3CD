<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct(){
		parent::__construct();
        $user = $this->session->userdata('user');
        
        var_dump($user);

        if(!isset($user) && $user==null){
            redirect('/posts');
        }
	}
	
    public function index(){

        $data = $this->input->post();

        if(count($data) > 0){
            $this->load->model('login_model');
            $result = $this->login_model->login($data['name'], $data['password']);

            if(!is_bool($result)){
                $session['user'] = $result[0];
                $this->session->set_userdata($session);
                redirect('/posts');
            } 
        }
		$this->sitelayout->loadTemplate('registration/login');
	}
}