<?php

class Threads_model extends CI_Model{
    
    public function __construct(){
        $this->load->database();
    }

    public function get_threads(){
        $this->db->order_by('name');
        $query = $this->db->get('threads');
        return $query->result_array();
    }

    public function get_thread($id){
        $query = $this->db->get_where('threads', array('id' => $id));
        return $query->row();
    }
}