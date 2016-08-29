<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        if ($this->session->userdata('email') == FALSE ) {
         redirect('/', 'refresh');
        }
    }

    public function index()
    {
        $data['main_content'] = "dashboard/dashboard";
        $this->load->view('dashboard/main', $data);
    }
    
    
    
}
