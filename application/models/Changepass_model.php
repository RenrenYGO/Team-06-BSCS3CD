<?php

class Changepass_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function update_password($data){

        $data2 = array(

            'password'=> md5($data['password'])

        );

        if(md5($data['currpass']) == $this->session->userdata('user')['password'] && md5($data['password']) == md5($data['confpass'])){
            $this->db->where('id', $this->session->userdata('user')['id']);
            return $this->db->update('user', $data2); 
        } else {
            echo "password does not match."; //MODAL YELA
            redirect('login');
        }
    }
}