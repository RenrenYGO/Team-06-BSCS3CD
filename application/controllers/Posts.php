<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller{

    private $user = null;

    public function __construct(){
        parent::__construct();
        $this->user = $this->session->userdata('user');  
    }

    public function index(){
        $data['title'] = 'Latest Posts';
        $data['posts'] = $this -> post_model -> get_posts();
        $data['users'] = $this->user_model->get_users();
        $data['threads'] = $this->threads_model->get_threads();
        
        $this->sitelayout->loadTemplate('posts/index',$data);
    }

    public function skeyword(){
        $key = $this->input->post('title');
        $data['title'] = 'Searched: '.$key;
        $data['posts'] = $this->post_model->get_search($key);
        $data['users'] = $this->user_model->get_users();
        $data['threads'] = $this->threads_model->get_threads();

        $this->sitelayout->loadTemplate('posts/index',$data);
    }

    public function view($id = NULL){
        $data['users'] = $this->user_model->get_users();
        $data['post'] = $this -> post_model -> get_posts($id);
        $post_id = $data['post']['id'];
        $data['replies'] = $this->replies_model->get_replies($post_id);

        if(empty($data['post'])){
            show_404();
        }

        $data['title'] = $data['post']['title'];

        $this->sitelayout->loadTemplate('posts/view', $data);
    }

    public function view_post_by_profile($id = NULL){
        $data['post'] = $this -> post_model -> get_posts($id);
        $post_id = $data['post']['id'];
        $data['replies'] = $this->replies_model->get_replies($post_id);

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
        $data = $this->input->post();
        
        if($this->form_validation->run() === TRUE){
            $config['upload_path'] = APPPATH.'../images/posts';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '50000';
            $config['file_name'] = $this->session->userdata('user')['id']. '_'. $_FILES['post_image']['name'];
            $this->load->library('upload', $config);
            
            if(!$this->upload->do_upload('post_image')){
                $errors = array('error' => $this->upload->display_errors());
                $post_image = 'noimage.jpg';
            }else{
                // $data = array('upload_data' => $this->upload->data());
                $post_image = $config['file_name'];
            }

            $this->post_model->create_post($data,$post_image);
            redirect('posts');
        }

        $data['title'] = "Create Post";
        $data['threads'] = $this->post_model->get_threads();
        $data['user'] = $this->user;
        
        $this->sitelayout->loadTemplate('posts/create', $data);
    }

    public function edit($id){
        $data['post'] = $this -> post_model -> get_posts($id);
        
        if(empty($data['post'])){
            show_404();
        }
    
        if(!isset($this->user) && $this->user==null){
            redirect('/login');
        }
        
        $data['threads'] = $this->post_model->get_threads();
        $data['title'] = 'Edit Post';
        $data['user'] = $this->user;

        $this->sitelayout->loadTemplate('posts/edit', $data);
    }
    
    public function update(){
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');
        $data = $this->input->post();

        if($this->form_validation->run() === TRUE){
            $config['upload_path'] = APPPATH.'../images/posts';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '50000';
            $config['file_name'] = $this->session->userdata('user')['id']. '_'. $_FILES['post_image']['name'];
            $this->load->library('upload', $config);
            
            if(!$this->upload->do_upload('post_image')){
                $errors = array('error' => $this->upload->display_errors());
                if($post_image=='noimage.jpg'){
                    $post_image = 'noimage.jpg';
                }else{
                    $post_image = $data['post_image'];
                }
            }else{
                // $data = array('upload_data' => $this->upload->data());
                $post_image = $config['file_name'];
            }  
            $this->post_model->update_post($data,$post_image);
            redirect('posts');
        }
    }

    public function delete($id){
        $this->post_model->delete_post($id);
        redirect('posts');
    }       

    public function upvote($id){
        $this->post_model->upvote_post($id);
        $this->view($this->input->post('upvote'));
    }
    
    public function downvote($id){
        $this->post_model->downvote_post($id);
        $this->view($this->input->post('downvote'));
    }
}