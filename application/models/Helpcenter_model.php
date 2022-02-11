<?php

class Helpcenter_model extends CI_Model{

	public function get_help($data){
		// Insert user into the helpcenter DB
		$this->db->insert('helpcenter', $data);
		return true;
	}

	// Check if email exists
	public function check_email_exists($email){
		$query = $this->db->get_where('helpcenter', array('email' => $email));

		if(empty($query->row_array())){
			return true;
		}else{
			return false;
		}
	}
}