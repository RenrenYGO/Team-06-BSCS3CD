<?php
class Pages extends CI_Controller {

    public function view($page = 'index') {
        if ( ! file_exists(APPPATH.'views/registration/'.$page.'.php')){
                echo "Whoops, we don't have a page for that!";
                show_404();
        }
        
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->sitelayout->loadTemplate('registration/index', $data);
       // $this->load->view('templates/header', $data);
        //$this->load->view('registration/'.$page, $data);
       // $this->load->view('templates/footer', $data);
    }

public function temp($page = 'whatsauce') {
    if ( ! file_exists(APPPATH.'views/registration/'.$page.'.php')){
            echo "Whoops, we don't have a page for that!";
            show_404();
    }
    
    $data['title'] = ucfirst($page); // Capitalize the first letter
    $this->sitelayout->loadWhatSauceTemplate('registration/whatsauce', $data);
   // $this->load->view('templates/header', $data);
    //$this->load->view('registration/'.$page, $data);
   // $this->load->view('templates/footer', $data);

}
// add this function to controllers/Pages.php

public function about($page = 'about') {
    if ( ! file_exists(APPPATH.'views/templates/'.$page.'.php')){
            echo "Whoops, we don't have a page for that!";
            show_404();
    }

    $data['title'] = ucfirst($page); // Capitalize the first letter
    $this->sitelayout->loadTemplate('templates/about', $data);
   // $this->load->view('templates/header', $data);
    //$this->load->view('registration/'.$page, $data);
   // $this->load->view('templates/footer', $data);
}


public function faqs($page = 'faqs') {
        if ( ! file_exists(APPPATH.'views/templates/'.$page.'.php')){
                echo "Whoops, we don't have a page for that!";
                show_404();
        }
    
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->sitelayout->loadTemplate('templates/faqs', $data);
       // $this->load->view('templates/header', $data);
        //$this->load->view('registration/'.$page, $data);
       // $this->load->view('templates/footer', $data);
}
 
public function help($page = 'help') {
        if ( ! file_exists(APPPATH.'views/templates/'.$page.'.php')){
                echo "Whoops, we don't have a page for that!";
                show_404();
        }
    
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->sitelayout->loadTemplate('templates/help', $data);
       // $this->load->view('templates/header', $data);
        //$this->load->view('registration/'.$page, $data);
       // $this->load->view('templates/footer', $data);
}
public function profile($page = 'profile') {
        if ( ! file_exists(APPPATH.'views/templates/'.$page.'.php')){
                echo "Whoops, we don't have a page for that!";
                show_404();
        }
    
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $data['user'] = $this->user_model->get_profile();
        $this->sitelayout->loadTemplate('templates/profile', $data);
       // $this->load->view('templates/header', $data);
        //$this->load->view('registration/'.$page, $data);
       // $this->load->view('templates/footer', $data);
    }

}
