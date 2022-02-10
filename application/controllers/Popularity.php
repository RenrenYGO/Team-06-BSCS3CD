<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Popularity extends CI_Controller{

    public function __construct(){
	    parent::__construct();
	}

    public function posts(){
        $data['title'] = "Top Posts";
        $data['threads'] = $this->threads_model->get_threads();
        $data['users'] = $this->user_model->get_users();
        $data['posts'] = $this->post_model->get_posts_by_popularity();

        $this->sitelayout->loadTemplate('posts/index',$data);
    }
}