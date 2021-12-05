<?php


		class Post_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_posts($slug = FALSE){
			if($slug === FALSE){
				$query = $this->db->get('posts');
				return $query->result_array();
			}

			$query = $this->db->get_where('posts', array('slug' => $slug));
			return $query->row_array();
		}

		public function create_post($data){
			$slug = url_title($data['title']);

			$data = array(
				
				'title' => $data['title'],
				'slug' => $slug,
				'by' => $data['createdBy'],
				'content' => $data['content']
		
			);
			return $this->db->insert('posts', $data);
		}



	}

		