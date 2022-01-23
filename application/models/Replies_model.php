<?php
	class Replies_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function create_replies($post_id){
			
			$data = array(
				'post_id' => $post_id,
				'by' => $this->session->userdata('user')['id'],
				'content' => $this->input->post('content')
			);
			$this->db->set('reply_count', 'reply_count+1', FALSE);
			$this->db->where('id', $post_id);
			$this->db->update('posts');
			return $this->db->insert('replies', $data);
		}

		public function get_replies($post_id){

			$query = $this->db->get_where('replies', array('post_id' => $post_id));
			$replies = $query->result_array();

			// echo "<pre>";
			// var_dump($replies);
			// echo "</pre>";
			// exit;

			foreach($replies as $key => $reply){
				$id = $reply['by'];
				$query = $this->db->query("SELECT * FROM user WHERE id = '$id'");
				$replies[$key]['name'] = $query->row()->{'name'};
			}
			
			return $replies;
		}

		public function upvote_reply($id){
			$this->db->set('upvote', 'upvote+1', FALSE);
			$this->db->where('id', $id);
			$this->db->update('replies');
		}
	
		public function downvote_reply($id){
			$this->db->set('downvote', 'downvote+1', FALSE);
			$this->db->where('id', $id);
			$this->db->update('replies');
		}
	}