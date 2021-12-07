<?php
class Posts extends CI_Controller {

    private $user = null;

    public function __construct(){
		parent::__construct();
        
        $this->user = $this->session->userdata('user');
        
        // ETO YON NAHANAP KO NA
      }

    public function index(){
            $data['title'] = 'Latest Posts';

            $data['posts'] = $this -> post_model -> get_posts();
            

            $this->sitelayout->loadTemplate('posts/index', $data);
    }

    public function view($slug = NULL){
        $data['post'] = $this -> post_model -> get_posts($slug);

        if(empty($data['post'])){
            show_404();
        }
        $data['title'] = $data['post']['title'];

        $this->sitelayout->loadTemplate('posts/view', $data);
    }

    public function create(){
        if(!isset($this->user) && $this->user==null){
            redirect('/login');
       }

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');
        
        if($this->form_validation->run() === TRUE){
            $data = $this->input->post();
            $this->post_model->create_post($data);
            redirect('posts');
        }

        $data['title'] = "Create Thread";
        $data['user'] = $this->user;
        
        $this->sitelayout->loadTemplate('posts/create', $data);
    }

    public function edit($slug){
        $data['post'] = $this -> post_model -> get_posts($slug);
        
        if(empty($data['post'])){
            show_404();
        }
    
        if(!isset($this->user) && $this->user==null){
            redirect('/login');
        } 
        

        $data['title'] = 'Edit Post';
        $data['user'] = $this->user;

        $this->sitelayout->loadTemplate('posts/edit', $data);
    }
    
    public function update(){

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');
        
        if($this->form_validation->run() === TRUE){
            $data = $this->input->post();
            $this->post_model->update_post($data);
            redirect('posts');
        }
    }

}