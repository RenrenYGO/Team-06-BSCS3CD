<?php

class User_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function update_profile($data){
        // echo "<pre>";
        // var_dump(md5($data['password']));
        // echo "</pre>";
        
        // echo "<pre>";
        // var_dump($this->session->userdata('user')['password']);
        // echo "</pre>";
        // exit;
        $data2 = array(

            'bio' => $data['bio'],
            'name' => $data['name'],
            'password' => md5($data['password'])
            // 'password' => password_hash($data['password'], PASSWORD_DEFAULT)

        );
        
        if(md5($data['currpass']) == $this->session->userdata('user')['password'] && md5($data['password']) == md5($data['confpass'])){
            $this->db->where('id', $this->session->userdata('user')['id']);
            return $this->db->update('user', $data2); 
        } else {
            echo "password does not match."; //MODAL YELA
            redirect('login');
        }
        
    }

    public function get_profile(){

        $this->db->where('id', $this->session->userdata('user')['id']);
        $query = $this->db->get('user');
        return $query->row_array();

    }
}