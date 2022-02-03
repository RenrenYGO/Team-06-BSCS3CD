<?php 
class Login_model extends CI_Model{
  public function __construct(){
    parent::__construct();
  }

  public function login($username, $password){
    // $this->db->where('name', $username);
    // // $this->db->where('password', md5($password));
    // $this->db->where('password', $password);
    // $query = $this->db->get('user');
    // $return = $query->result_array();

    // if(count($return) > 0){
    //   return $return;   
    // }
    // return false;

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