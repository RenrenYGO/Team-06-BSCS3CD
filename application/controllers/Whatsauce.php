<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Whatsauce extends CI_Controller{
    
    public function __construct(){
	    parent::__construct();
	}

    public function index(){
        $data['title'] = 'Whatsauce';
        $data['posts'] = $this->post_model->get_posts_by_whatsauce(NULL);
        $data['users'] = $this->user_model->get_users();
        $data['whatsauce'] = $this->whatsauce_model->get_whatsauces();

        $this->sitelayout->loadWhatSauceTemplate('whatsauce/index',$data);
    }

    public function posts($id){
        $data['users'] = $this->user_model->get_users();
        $data['posts'] = $this->post_model->get_posts_by_whatsauce($id);
        $data['whatsauce'] = $this->whatsauce_model->get_whatsauces();
        $data['title'] = $this->whatsauce_model->get_whatsauce($id)->name;

        $this->sitelayout->loadWhatSauceTemplate('whatsauce/index',$data);
    }

    public function skeyword(){
        $key = $this->input->post('title');
        $data['title'] = 'Searched: '.$key;
        $data['posts'] = $this->post_model->get_search($key);
        $data['users'] = $this->user_model->get_users();
        $data['threads'] = $this->threads_model->get_threads();
        
        $this->sitelayout->loadWhatSauceTemplate('whatsauce/index',$data);
    }
}