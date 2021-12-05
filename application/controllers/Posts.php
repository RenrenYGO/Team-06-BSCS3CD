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


    

}