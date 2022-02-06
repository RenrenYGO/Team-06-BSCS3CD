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

			foreach($replies as $key => $reply){
				$id = $reply['by'];
				$query = $this->db->query("SELECT * FROM user WHERE id = '$id'");
				$replies[$key]['name'] = $query->row()->{'name'};
			}
			
			return $replies;
		}

		public function upvote_reply($id){
			
			$json=$this->get_reacts($id);
			if($json==false){
				$json = file_get_contents(FCPATH."schema/react.json");
			}
			
			$json = json_decode($json['react_ids'],TRUE);

			if(in_array($this->session->userdata('user')['id'],$json['react_ids'])) {

				$index = array_search($this->session->userdata('user')['id'],$json['react_ids']);

				unset($json['react_ids'][$index]);
				$this->db->set('upvote', 'upvote-1', FALSE);
				$this->db->where('id', $id);
			
				$json2 = array(
					'react_ids' => json_encode($json)
				);

				$this->db->update('replies',$json2);
			}else{

				array_push($json['react_ids'],$this->session->userdata('user')['id']);
			
				$json2 = array(
					'react_ids' => json_encode($json)
				);

				$this->db->set('upvote', 'upvote+1', FALSE);
				$this->db->where('id', $id);
				$this->db->update('replies',$json2);
			}
		}
	
		public function downvote_reply($id){
			
			$json=$this->get_reacts($id);
			if($json==false){
				$json = file_get_contents(FCPATH."schema/react.json");
			}
			
			$json = json_decode($json['react_ids'],TRUE);
			
			if(in_array($this->session->userdata('user')['id'],$json['react_ids'])) {

				$index = array_search($this->session->userdata('user')['id'],$json['react_ids']);

				unset($json['react_ids'][$index]);
				$this->db->set('downvote', 'downvote-1', FALSE);
				$this->db->where('id', $id);
			
				$json2 = array(
					'react_ids' => json_encode($json)
				);

				$this->db->update('replies',$json2);
			}else{

				array_push($json['react_ids'],$this->session->userdata('user')['id']);
			
				$json2 = array(
					'react_ids' => json_encode($json)
				);

				$this->db->set('downvote', 'downvote+1', FALSE);
				$this->db->where('id', $id);
				$this->db->update('replies',$json2);
			}
		}

		public function get_reacts($id){
			$this->db->where('id',$id);
			$query = $this->db->get('replies');
			
			if($query->num_rows()>0){
				return $query->row_array();
			}else{
				return false;
			}
		}
	}