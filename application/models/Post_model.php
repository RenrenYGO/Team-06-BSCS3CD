<?php

class Post_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	public function get_view_data($id){

		$query = $this->db->get_where('posts', array('id' => $id));
		$post = $query->row_array();

		$id = $post['by'];
		$query = $this->db->query("SELECT * FROM user WHERE id = '$id'");
		$post['name'] = $query->row()->{'name'};

		$thread_id = $post['thread_id'];
		$query = $this->db->query("SELECT * FROM threads WHERE id = '$thread_id'");
		$post['at'] = $query->row()->{'name'};

		return $post;
		
	}

	public function get_index_data($posts){
		
		foreach($posts as $key => $post){
			$id = $post['by'];
			$query = $this->db->query("SELECT * FROM user WHERE id = '$id'");
			$posts[$key]['name'] = $query->row()->{'name'};
		}

		foreach($posts as $key => $post){
			$id = $post['thread_id'];
			$query = $this->db->query("SELECT * FROM threads WHERE id = '$id'");
			$posts[$key]['at'] = $query->row()->{'name'};
		}

		return $posts;

	}

	public function get_posts($id = FALSE){
		if($id === FALSE){

			$this->db->order_by('id', 'DESC');
			$query = $this->db->get('posts');
			$posts = $query->result_array();

			return $this->get_index_data($posts);

		}
		
		// $this->db->join('user', 'user.id = '.'posts'.'.by');
		return $this->get_view_data($id);
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
			'thread_id' => $data['thread_id']
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
		
		$this->db->select('posts.*,threads.name');//get the name only in the threads table
		$this->db->order_by('posts.id', 'DESC');
		$this->db->join('threads', 'threads.id = posts.thread_id');
		$query = $this->db->get_where('posts', array('thread_id' => $thread_id));

		return $this->get_index_data($query->result_array());

	}

	public function get_search($key){

		$this->db->like('title',$key);
		$query = $this->db->get('posts');
		return $this->get_index_data($query->result_array());
	}

}