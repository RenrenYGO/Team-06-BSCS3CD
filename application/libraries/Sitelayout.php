<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitelayout {

    private $CI;

    public function __construct() {
        $this->CI =& get_instance();
    }

    public function loadTemplate($content = null, $data = null) {
        $layout = array();
        $layout['header'] = $this->CI->load->view('templates/header', null, true);
        $layout['footer'] = $this->CI->load->view('templates/footer', null, true);

        $layout['content'] = $this->CI->load->view($content, $data, true);

        $this->CI->load->view('templates/content', $layout);
    }

    // public function loadAdminTemplate($content = null, $data = null) {
    //     $layout = array();
    //     $layout['header'] = $this->CI->load->view('admin/header', null, true);
    //     $layout['links'] = $this->CI->load->view('admin/links', null, true);
    //     $layout['footer'] = $this->CI->load->view('admin/footer', null, true);

    //     $layout['content'] = $this->CI->load->view($content, $data, true);

    //     $this->CI->load->view('admin/content', $layout);
    // }
}