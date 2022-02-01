<?php

class User_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function update_profile($data, $profile_picture){
        
        $data2 = array(

            'bio' => $data['bio'],
            'name' => $data['name'],
            'profile_picture' => $profile_picture

        );
        
        $this->db->where('id', $this->session->userdata('user')['id']);
        return $this->db->update('user', $data2);
        
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