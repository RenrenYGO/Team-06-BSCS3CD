<?php
class Users extends CI_Controller {

    private $user = null;

    public function __construct(){

        parent::__construct();
        $this->user = $this->session->userdata('user');  

    }

    public function index(){

        $this->sitelayout->loadTemplate('users/index');

    }

    public function edit_profile(){
        
        $data = $this->input->post();
        $this->user_model->update_profile($data);
        redirect('pages/profile');
        // $this->sitelayout->loadTemplate('users/index', $data);

    }

    public function user(){
        $data['title'] = 'Select user to display the posts of that user';

        $data['users'] = $this->user_model->get_users();

        $this->sitelayout->loadTemplate('profiles/index',$data);
    }

    public function profile_posts($id){
        $data['title'] = $this->user_model->get_user($id)->name;
        $data['threads'] = $this->threads_model->get_threads();
        $data['posts'] = $this->post_model->get_posts_by_user($id);

        $this->sitelayout->loadTemplate('posts/index',$data);
    }
}