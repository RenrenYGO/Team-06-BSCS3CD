<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller{

        public function view($page = 'index'){
                if( ! file_exists(APPPATH.'views/registration/'.$page.'.php')){
                        echo "Whoops, we don't have a page for that!";
                        show_404();
                }

                $data['title'] = ucfirst($page); // Capitalize the first letter
                $this->sitelayout->loadTemplate('registration/index', $data);
        }

        public function about($page = 'about'){
                if( ! file_exists(APPPATH.'views/templates/'.$page.'.php')){
                        echo "Whoops, we don't have a page for that!";
                        show_404();
                }

                $data['title'] = ucfirst($page); // Capitalize the first letter
                $this->sitelayout->loadTemplate('templates/about', $data);
        }

        public function faqs($page = 'faqs'){
                if( ! file_exists(APPPATH.'views/templates/'.$page.'.php')){
                        echo "Whoops, we don't have a page for that!";
                        show_404();
                }
        
                $data['title'] = ucfirst($page); // Capitalize the first letter
                $this->sitelayout->loadTemplate('templates/faqs', $data);
        }
        
        public function help($page = 'help'){
                if( ! file_exists(APPPATH.'views/templates/'.$page.'.php')){
                        echo "Whoops, we don't have a page for that!";
                        show_404();
                }
        
                $data['title'] = ucfirst($page); // Capitalize the first letter
                $this->sitelayout->loadTemplate('templates/help', $data);
        }

        public function profile($page = 'profile'){
                if( ! file_exists(APPPATH.'views/templates/'.$page.'.php')){
                        echo "Whoops, we don't have a page for that!";
                        show_404();
                }
        
                $data['title'] = ucfirst($page); // Capitalize the first letter
                $data['user'] = $this->user_model->get_profile();
                $data['posts'] = $this->post_model->get_posts_by_user($this->session->userdata('user')['id']);
                $this->sitelayout->loadTemplate('templates/profile', $data);
        }

        public function changepassword($page = 'changepassword'){
                if( ! file_exists(APPPATH. 'views/templates/'.$page.'.php')){
                        echo "Whoops, we don't have a page for that!";
                        show_404();
                }

                $data['title'] = ucfirst($page); // Capitalize the first letter
                $this->sitelayout->loadTemplate('templates/changepassword', $data);
        }
}
