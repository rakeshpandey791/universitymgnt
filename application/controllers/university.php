<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dashboard
 *
 * @author developer
 */
class University extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('session_model');
        $this->load->model('university_model');
    }
    
    public function index(){
       
        $data['university']=$this->university_model->AllUniversity();
        
        if ($this->form_validation->run() === FALSE){
                $this->load->view('include/header');
                $this->load->view('include/navigation');
                $this->load->view('university/index',$data);
                $this->load->view('include/footer');
            }else if($_REQUEST['hidden_id']==''){
                
                $this->university_model->AddUniversity();
                redirect('university');
            }else{
               $this->university_model->UpdateUniversity();
                redirect('university'); 
            }
    }
    public function delete(){
        $this->university_model->DeleteUniversity();
        redirect('university/index');
    }
    public function edit(){
        $this->university_model->EditUniversity();
    }
    
}

?>
