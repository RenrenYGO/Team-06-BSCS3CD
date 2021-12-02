<?php
class Posts extends CI_Controller {

    public function index(){
            $data['title'] = 'Latest Posts';

            $data['posts'] = $this -> post_model -> get_posts();
            

            $this->load->view('templates/header', $data);
            $this->load->view('posts/index', $data);
            $this->load->view('templates/footer', $data);
    }

    public function view($slug = NULL){
        $data['post'] = $this -> post_model -> get_posts($slug);

        if(empty($data['post'])){
            show_404();
        }
        $data['title'] = $data['post']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('posts/view', $data);
        $this->load->view('templates/footer', $data);

    }

}