<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dramas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('email') == FALSE ) {
         redirect('/', 'refresh');
        } 
        $this->load->model('DramaModel');
        
    }
    
    public function showDrama()
    {
        $data['get_drama_result'] = $this->DramaModel->get_dramas();
        $data['main_content'] = "dashboard/dramas";
        $this->load->view('dashboard/main',$data);
    }
    public function latestDrama()
    {
        $data['get_latest_drama'] = $this->DramaModel->get_latest_drama();
        $data['main_content'] = "dashboard/latestdrama";
        $this->load->view('dashboard/main',$data);
    }
    public function premiumDrama()
    {
        $data['get_premium_drama'] = $this->DramaModel->get_premium_drama();
        $data['main_content'] = "dashboard/premiumdrama";
        $this->load->view('dashboard/main',$data);
    }
    public function comingsoonDrama()
    {
        $data['get_comingsoon_drama'] = $this->DramaModel->get_comingsoon_drama();
        $data['main_content'] = "dashboard/comingsoondrama";
        $this->load->view('dashboard/main',$data);
    }
    public function newDrama()
    {
        $data['main_content'] = "dashboard/addnewdrama";
        $this->load->view('dashboard/main',$data);
    }
        
    public function newaddDrama() // For render in view
        {
            // Upload Drama Image
            $config['upload_path']          = './webservices/drama';
            $config['allowed_types']        = 'gif|jpg|png';
            $this->load->library('upload', $config);
            
            if ( ! $this->upload->do_upload('drama_image')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('upload_form', $error);
            }

            else {
                $upload_data  = $this->upload->data();
            }


            $drama_title = $this->input->post('drama_title');
            $drama_content = $this->input->post('drama_content');
            $latest_drama_status = $this->input->post('latest_status');
            $premium = $this->input->post('premium_status');
            $image_name =  $upload_data['file_name'];



             $this->DramaModel->insert_Drama([
               'drama_title' => $drama_title,
               'drama_image' => $image_name,
               'drama_content' => $drama_content,
               'latest_drama_status' => $latest_drama_status,
               'popular_drama_views' => 0,
               'premium' => $premium
            ]);

           
        }
        
    public function updateDrama()
        {
            $drama_id = 39;
            $this->DramaModel->update_Drama([
                'drama_title' => 'Update drama Ttile'
            ],$drama_id);
        }
        
    public function deleteDrama()
        {
            $drama_id = 39;
            $this->DramaModel->delete_Drama($drama_id);
        }


  


    
}

