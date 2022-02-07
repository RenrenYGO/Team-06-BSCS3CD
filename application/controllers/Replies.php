<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Replies extends CI_Controller{

		public function create($post_id){
			$id = $this->input->post('id');
			$data['reply'] = $this->post_model->get_posts($id);

			$this->form_validation->set_rules('content', 'Content', 'required');


			if($this->form_validation->run() === FALSE){
				// $this->load->view('templates/header');
				// $this->load->view('posts/view', $data);
				// $this->load->view('templates/footer');
                $this->sitelayout->loadTemplate('posts/view', $data);
			} else {
				$this->replies_model->create_replies($post_id);
				// $this->view($this->input->post('reply_count'));
				redirect('posts/'.$id);
			}
		}

		public function upvoteR($id,$post_id){
			$this->replies_model->upvote_reply($id);
			$data['users'] = $this->user_model->get_users();
			$data['post'] = $this->post_model->get_posts($post_id);
			$data['replies'] = $this->replies_model->get_replies($post_id);
			$this->sitelayout->loadTemplate('posts/view', $data);
		}
		
		public function downvoteR($id,$post_id){
			$this->replies_model->downvote_reply($id);
			$data['users'] = $this->user_model->get_users();
			$data['post'] = $this->post_model->get_posts($post_id);
			$data['replies'] = $this->replies_model->get_replies($post_id);
			$this->sitelayout->loadTemplate('posts/view', $data);
		}

	}