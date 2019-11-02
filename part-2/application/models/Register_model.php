<?php

/**
 * Description of Register_model
 *
 * @author cooters
 */
class Register_model extends CI_Model{
    
    private $full_name = NULL;
    private $first_name = NULL;
    private $last_name = NULL;
    private $__real_name_regex = "/^[a-zA-Z]{2,25}$/";
    
    private $email = NULL;
    
    private $password = NULL;
    private $password_again = NULL;
    private $__crypted_password = NULL;
    private $__password_regex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}/";
    private $__password_hash_options = array('cost' => 8);
    
    private $agree = '';
    
    public function __construct(){
        parent::__construct();
    }
    
    public function validate($object){
        $response = FALSE;
        
        $filter_response = $this->__filter_data($object);
        
        if($filter_response->error){
          $response = $this->__get_response($filter_response, 'register', TRUE);
        }else{
           if($this->check_email()){
               $response = $this->__get_response($filter_response, 'already_register', TRUE);
           }else{
               
            if($this->register_user()){
                $response = $this->__get_response($filter_response, 'success', FALSE);
            }else{
                $response = $this->__get_response($filter_response, 'fail', TRUE);
            }
            
           }
        }
        
        return $response;
    }
    
    private function check_email(){
        $response = FALSE;
        
        if(!empty($this->email)){
          $sql = 'SELECT `email` FROM `Users` WHERE `email` = ?';
          $result = $this->db->query($sql, array($this->email));
          
          if($result->num_rows() == 1){
            $response = TRUE;
          }
        }
        
        return $response;
    }
    
    private function encrypt_password(){
        $response = FALSE;
        
        if($this->password !== NULL && $this->password !== FALSE){
        
            $password_hash = password_hash($this->password, PASSWORD_DEFAULT, $this->__password_hash_options);
            
            $is_encrypted = password_verify($this->password, $password_hash);
            if($is_encrypted){
                $this->__crypted_password = $password_hash;
                $response = TRUE;
            }
            
        }
        
        return $response;
    }
    
    private function register_user(){
        $repsonse = FALSE;
        
        if($this->encrypt_password()){
          $sql = 'INSERT INTO `Users` (`full_name`, `email`, `password`) VALUES (?,?,?)';
          $data = array($this->first_name.' '.$this->last_name, $this->email, $this->__crypted_password);
          $this->db->query($sql, $data);
          
          if($this->db->affected_rows() == 1){
              $response = TRUE;
          }
                  
        }
        
        return $response;
    }
    
    private function __filter_data($object){
        $response = FALSE;
        
        $this->full_name = isset($object->full_name)?$object->full_name:'';
        $this->email = isset($object->email)?$object->email:'';
        $this->password = isset($object->password)?$object->password:'';
        $this->password_again = isset($object->password_again)?$object->password_again:'';
        $this->agree = isset($object->agree)?$object->agree:'';
        
        $first_name_check = FALSE;
        $last_name_check = FALSE;
        
        if($this->filter_name()){
            $first_name_check = $this->filter_first_name();
            $last_name_check = $this->filter_last_name();
        }
        
        $email_check = $this->filter_email();
        $password_check = $this->filter_password();
        $password_again_check = $this->filter_password_again();
        $agree_check = $this->filter_agree();
        
        $response = new stdClass;
        $response->error = FALSE;
        
        if(!$first_name_check){
          $response->first_name_check = 'Invalid First Name';
          $response->first_name_error = TRUE;
          $response->error = TRUE;
        }
        
        if(!$last_name_check){
          $response->last_name_check = 'Invalid Last Name';
          $response->last_name_error = TRUE;
          $response->error = TRUE;
        }

        if(!$email_check){
          $response->email_check = 'Invalid Email';
          $response->email_error = TRUE;
          $response->error = TRUE;
        }

        if(!$password_check){
          $response->password_check = 'Invalid Password';
          $response->password_error = TRUE;
          $response->error = TRUE;
        }

        if(!$password_again_check){
          $response->password_again_check = 'Invalid Password Again';
          $response->password_again_error = TRUE;
          $response->error = TRUE;
        }

        if(!$agree_check){
          $response->agree_check = 'You must agree to the terms and service.';
          $response->agree_error = TRUE;
          $response->error = TRUE;
        }
        
        return $response;
    }
    
    private function filter_name(){
      $response = FALSE;    
      
      $ex = explode(' ', $this->full_name);
      
      if(isset($ex[0])){
        $this->first_name = $ex[0];
        $response = TRUE;
      }
      if(isset($ex[1])){
        $this->last_name = $ex[1];
        $response = TRUE;
      }      
      
      return $response;
    }
    
    private function filter_first_name(){
        $response = FALSE;
        
        if(preg_match($this->__real_name_regex, $this->first_name)){
            $response = TRUE;
        }
        
        return $response;
    }
    private function filter_last_name(){
        $response = FALSE;
        
        if(preg_match($this->__real_name_regex, $this->last_name)){
            $response = TRUE;
        }
        
        return $response;
    }    
    
    private function filter_email(){
        $response = FALSE;
        
        if(NULL !== $this->email && FALSE !== $this->email){
            
            $this->email = filter_var($this->email, FILTER_SANITIZE_EMAIL);
            
            if(filter_var($this->email, FILTER_VALIDATE_EMAIL)){
                // STRIP the first part of the email
                $email_domain = preg_replace('/^.+?@/', '', $this->email).'.';
                if(checkdnsrr($email_domain, 'MX') && checkdnsrr($email_domain, 'A')){
                    $response = TRUE;
                }
            }
        }
        
        return $response;
    }
    
    private function filter_password(){
        $response = FALSE;
        
        if(preg_match($this->__password_regex, $this->password)){
            $response = TRUE;
        }else{
            $this->password = NULL;
        }
        
        return $response;
    }
    
    private function filter_password_again(){
        $response = FALSE;
        
        if(preg_match($this->__password_regex, $this->password_again)){
            if(strcmp($this->password, $this->password_again) == 0){
                $response = TRUE;    
            }           
        }else{
            $this->password_again = NULL;
        }
        
        return $response;
    }    
    
    private function filter_agree(){
        $response = FALSE;
        
        if($this->agree !== ''){
            $response = TRUE;
        }
        
        return $response;
    }
    
    private function __get_response($data, $redirect, $error){
        $response = new stdClass;
        $response->data = $data;
        $response->redirect = $redirect;
        $response->error = $error;
        return $response;
    }
}
