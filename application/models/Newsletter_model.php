<?php

class Newsletter_model extends CI_Model{
	
		public function get_news($data){
			// Insert user into the newsletter table
			$this->db->insert('newsletter', $data);
			return true;
		}

		// Check if the email exists
		public function check_email_exists($email){
			$query = $this->db->get_where('newsletter', array('email' => $email));
			if(empty($query->row_array())){
				return true;
			}else{
				return false;
			}
		}
	}