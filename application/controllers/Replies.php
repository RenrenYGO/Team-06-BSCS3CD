<?php
	class Replies extends CI_Controller{
		public function create($post_id){
			$slug = $this->input->post('slug');
			$data['post'] = $this->post_model->get_posts($slug);

			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('content', 'Content', 'required');


			if($this->form_validation->run() === FALSE){
				// $this->load->view('templates/header');
				// $this->load->view('posts/view', $data);
				// $this->load->view('templates/footer');
                $this->sitelayout->loadTemplate('posts/view', $data);
			} else {
				$this->replies_model->create_replies($post_id);
				redirect('posts/'.$slug);
			}
		}
	}