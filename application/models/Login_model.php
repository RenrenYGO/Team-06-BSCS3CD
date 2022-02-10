<?php 
class Login_model extends CI_Model{
  public function __construct(){
    parent::__construct();
  }

  public function login($username, $password){
 
    $this->db->where('name', $username);
    $query = $this->db->get('user');
    $result = $query->row_array();

    if (!empty($result) && password_verify($password, $result['password'])) {
        // if this username exists, and the input password is verified using password_verify
        return $result;
    } else {
        echo "Hotdog ni Mark";
        return false;
    }
  }
}