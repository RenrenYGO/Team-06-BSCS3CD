<?php

class User_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function update_profile($data){
        
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

    public function get_users(){
        $this->db->order_by('name');
        $query = $this->db->get('user');
        return $query->result_array();
    }

    public function get_user($id){
        $query = $this->db->get_where('user', array('id' => $id));
        return $query->row();
    }
}