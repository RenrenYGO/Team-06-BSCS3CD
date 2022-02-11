<?php

class Registration_model extends CI_Model{
	
	public function get_reg($data){
		// Insert user in the DB
		$this->db->insert('user', $data);
		return true;
	}

	// Check if the username exists
	public function check_username_exists($username){
		$query = $this->db->get_where('user', array('name' => $username));
		if(empty($query->row_array())){
			return true;
		}else{
			return false;
		}
	}

	// Check if email exists
	public function check_email_exists($email){
		$query = $this->db->get_where('user', array('email' => $email));
		if(empty($query->row_array())){
			return true;
		}else{
			return false;
		}
	}
}