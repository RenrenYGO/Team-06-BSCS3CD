<?php

class User_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function update_bio($data){

        $data2 = array(

            'bio' => $data['bio']

        );
        
        $this->db->where('id', $this->session->userdata('user')['id']);
        return $this->db->update('user', $data2);
    }

    public function get_bio(){

        $this->db->where('id', $this->session->userdata('user')['id']);
        $query = $this->db->get('user');
        return $query->row_array();

    }
}