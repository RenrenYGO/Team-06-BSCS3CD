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


}
