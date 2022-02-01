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
        
        $config['upload_path'] = APPPATH.'../images/profile_picture';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '50000';
        $config['max_width'] = '50000';
        $config['max_height'] = '50000';
        $config['file_name'] = $this->session->userdata('user')['id']. '_'. $_FILES['profile_picture']['name'];
        $this->load->library('upload',$config);
        // $profile_picture = $config['file_name'];
        
        if(!$this->upload->do_upload('profile_picture')){
            $errors = array('error' => $this->upload->display_errors());
            // var_dump($errors);
            // exit;
            $profile_picture = 'noimage.jpg';
        } else {
            // $data = array('upload_data' => $this->upload->data());
            $profile_picture = $config['file_name'];
        }
        
        $this->user_model->update_profile($data, $profile_picture);
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