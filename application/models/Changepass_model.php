<?php

class Changepass_model extends CI_Model{
    
    public function __construct(){
        $this->load->database();
    }

    public function update_password($data){
        $data2 = array(
            'password'=> $data['password']
        );

        if(password_verify($data['currpass'], $this->session->userdata('user')['password']) && $data['password'] == $data['confpass']){
            $this->db->where('id', $this->session->userdata('user')['id']);

            $data3 = array(
                'password'=> password_hash($data['password'], PASSWORD_DEFAULT)
            );
            
            $_SESSION['change'] = 1;// echo password changed
            return $this->db->update('user', $data3);
        }else{
            $_SESSION['mismatch'] = 1; // echo passwords do not match
        }
    }
}