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
class Session extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('session_model');
    }
    
    public function index(){
       
        $data['session']=$this->session_model->AllSession();
        
        if ($this->form_validation->run() === FALSE){
                $this->load->view('include/header');
                $this->load->view('include/navigation');
                $this->load->view('session/index',$data);
                $this->load->view('include/footer');
            }else if($_REQUEST['hidden_id']==''){
                $this->session_model->AddSession();
                redirect('session');
            }else{
               $this->session_model->UpdateSession();
                redirect('session'); 
            }
    }
    public function delete(){
        $this->session_model->DeleteSession();
        redirect('session/index');
    }
    public function edit(){
        $this->session_model->EditSession();
    }
    
}

?>
