<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Threads extends CI_Controller{
    
    public function __construct(){
	    parent::__construct();
	}

    public function index(){
        $data['title'] = 'Tags';
        $data['threads'] = $this->threads_model->get_threads();

        $this->sitelayout->loadTemplate('threads/index',$data);
    }

    public function posts($id){
        $data['title'] = $this->threads_model->get_thread($id)->name;
        $data['threads'] = $this->threads_model->get_threads();
        $data['users'] = $this->user_model->get_users();
        $data['posts'] = $this->post_model->get_posts_by_thread($id);

        $this->sitelayout->loadTemplate('posts/index',$data);
    }
}