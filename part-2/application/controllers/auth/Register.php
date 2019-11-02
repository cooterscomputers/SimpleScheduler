<?php

class Register extends CI_Controller{
    
    private $is_logged_in = FALSE;
    
    public function __construct(){
        parent::__construct();
        
        $this->is_logged_in = isset($_SESSION['is_logged_in']) ? $_SESSION['is_logged_in'] : FALSE;
        
        if($this->is_logged_in){
            redirect(base_url().'scheduler');
        }else{
            $this->load->model('register_model');
        }
        
    }
    
    public function index(){
        $this->load->view('auth/register');
    }
    
    public function success(){
        $this->load->view('auth/success');
    }

    public function error(){
        $this->load->view('auth/error');
    }    

    public function validate(){
        
        $full_name = $this->input->post('full_name');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $password_again = $this->input->post('password_again');
        $agree = $this->input->post('agree');
        
        $data = new stdClass;
        $data->full_name = $full_name;
        $data->email = $email;
        $data->password = $password;
        $data->password_again = $password_again;
        $data->agree = $agree;
        
        $model_response = $this->register_model->validate($data);
        
        $model_response->data->full_name = !empty($data->full_name)?$data->full_name:'';
        $model_response->data->email = !empty($data->email)?$data->email:'';
        
        $this->__validate_redirect($model_response);
        
    }
    
    private function __validate_redirect($where_to){
        
        $this->session->set_flashdata('response', $where_to);
        
        if(is_object($where_to) && isset($where_to->redirect)){            
            switch ($where_to->redirect){
                case 'register';
                    redirect(base_url().'register');
                    break;
                case 'success';
                    $this->session->set_flashdata('success', TRUE);
                    redirect(base_url().'register/success');
                    break;                
                case 'already_register':
                    $this->session->set_flashdata('error', true);
                    $this->session->set_flashdata('already_register', true);
                    redirect(base_url().'register/error');
                    break;
                case 'fail':
                    $this->session->set_flashdata('error', true);
                    $this->session->set_flashdata('user_create_fail', true);
                    redirect(base_url().'register/error');
                    break;
                default:
                    redirect(base_url().'register');
                    break;
            }
        }else{
            redirect(base_url().'register');
        }
    }
    
    
}