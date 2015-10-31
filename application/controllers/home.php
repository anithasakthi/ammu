<?php

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('include/header_view');
        $this->load->view('home/home_view');
        $this->load->view('include/footer_view');
    }
    
}


