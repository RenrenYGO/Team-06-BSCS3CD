<?php


		class Post_model extends CI_Model{
			public function __construct(){
				$this->load->database();
			}

			public function get_posts($slug = FALSE){
				if($slug === FALSE){
					$this->db->order_by('id', 'DESC');
					$query = $this->db->get('posts');
					return $query->result_array();
				}
				//$this->db->join('user', 'user.id = '.'posts'.'.by');
				$query = $this->db->get_where('posts', array('slug' => $slug));
				return $query->row_array();
			}

			public function create_post($data, $post_image){
				$slug = url_title($data['title']);

				$data = array(
					'post_image' => $post_image,
					'title' => $data['title'],
					'slug' => $slug,
					'by' => $data['createdBy'],
					'content' => $data['content']
			
				);

				return $this->db->insert('posts',$data);
			}

			public function update_post($data){
				$slug = url_title($data['title']);

				$data = array(
					'title' => $data['title'],
					'slug' => $slug,
					'by' => $data['createdBy'],
					'content' => $data['content']
				);
				$this->db->where('id', $this->input->post('id'));
				return $this->db->update('posts', $data);
			}

			public function delete_post($id){
				$this->db->where('post_id', $id);
				$this->db->delete('replies');

				echo $this->db->last_query();

				$this->db->where('id', $id);
				$this->db->delete('posts');
				return true;
			}

			public function upvote_post($id){
				$this->db->set('upvote', 'upvote+1', FALSE);
				$this->db->where('id', $id);
				$this->db->update('posts');
			}

			public function downvote_post($id){
				$this->db->set('downvote', 'downvote+1', FALSE);
				$this->db->where('id', $id);
				$this->db->update('posts');
			}
	}

		