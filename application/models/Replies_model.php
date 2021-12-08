<?php
	class Replies_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function create_replies($post_id){
			$data = array(
				'post_id' => $post_id,
				'title' => $this->input->post('title'),
				'content' => $this->input->post('content')
			);

			return $this->db->insert('replies', $data);
		}

		public function get_replies($post_id){
			$query = $this->db->get_where('replies', array('post_id' => $post_id));
			return $query->result_array();
		}
	}