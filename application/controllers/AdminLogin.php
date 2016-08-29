<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminLogin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminLoginModel');
        
    }

    public function index()
    {
        $this->load->view('adminlogin');
    }
    
    public function adminLogin()
    {

       // Form Validation
       $this->form_validation->set_rules('email','Please Enter Email','trim|required|min_length[3]');
       $this->form_validation->set_rules('password','Please Enter Password','trim|required|min_length[3]');
       if($this->form_validation->run() == FALSE)
           {
                $data = array(
                    'email_error' => form_error('email'),
                    'password_error' => form_error('password')
                );
                $this->session->set_flashdata($data);
                redirect('');
               
           }else
               {
                    $email = $this->input->post('email');
                    $password = $this->input->post('password');
                    $password=md5($password);
                    $user_id = $this->AdminLoginModel->login($email,$password);
                    
                    if($user_id)
                        {
                            $user_data = array(
                                'user_id' => $user_id,
                                'email' => $email
                            );
                            
                            $this->session->set_userdata($user_data);
                            redirect('Dashboard');
                        }else
                            {
                                $data = array(
                                    'password_error' => 'Username And Password Does Not Match'
                                );
                                $this->session->set_flashdata($data);
                                redirect('');
                                
                            }
                    
                   
               }
       
       
    }
}
