<?php 
class Login_model extends CI_Model{
    public function __construct(){
		parent::__construct();
	}

    public function login($username, $password){
		$this->db->where('name', $username);
        $this->db->where('password', md5($password));
        $query = $this->db->get('user');
        
        $return = $query->result_array();
        if(count($return) > 0)
        {
         return $return;   
        }
        return false;
	}

}