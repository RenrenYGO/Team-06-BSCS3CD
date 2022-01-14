<?php


		class Post_model extends CI_Model{
			public function __construct(){
				$this->load->database();
			}

			public function get_posts($id = FALSE){
				if($id === FALSE){
					$this->db->order_by('id', 'DESC');
					$query = $this->db->get('posts');
					return $query->result_array();
				}
				//$this->db->join('user', 'user.id = '.'posts'.'.by');
				$query = $this->db->get_where('posts', array('id' => $id));
				return $query->row_array();
			}

			public function create_post($data, $post_image){
				$slug = url_title($data['title']);

				$data = array(
					'post_image' => $post_image,
					'title' => $data['title'],
					'slug' => $slug,
					'by' => $data['createdBy'],
					'content' => $data['content'],
					'thread_id' => $data['thread_id']
				);

				return $this->db->insert('posts',$data);
			}

			public function update_post($data){
				$slug = url_title($data['title']);

				$data = array(
					'title' => $data['title'],
					'slug' => $slug,
					'by' => $data['createdBy'],
					'content' => $data['content'],
					//'thread_id' => $data['thread_id']
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

			public function get_threads(){
				$this->db->order_by('name');
				$query = $this->db->get('threads');
				return $query->result_array();
			}
	
			public function get_posts_by_thread($thread_id){
				$this->db->order_by('posts.id', 'DESC');
				$this->db->join('threads', 'threads.id = posts.thread_id');
					$query = $this->db->get_where('posts', array('thread_id' => $thread_id));
				return $query->result_array();
			}
	}

		