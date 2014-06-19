
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
class Program extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('university_model');
        $this->load->model('program_model');
    }
    
    public function index(){
       
        $data['university']=$this->university_model->AllUniversity();
        $data['program']=$this->program_model->AllProgram();
        if ($this->form_validation->run() === FALSE){
                $this->load->view('include/header');
                $this->load->view('include/navigation');
                $this->load->view('program/index',$data);
                $this->load->view('include/footer');
            }else if($_REQUEST['hidden_id']==''){
                
                $this->program_model->AddProgram();
                redirect('program');
            }else{
               $this->program_model->UpdateProgram();
                redirect('program'); 
            }
    }
    public function delete(){
        $this->program_model->DeleteProgram();
        redirect('program/index');
    }
    public function edit(){
        $this->program_model->EditProgram();
    }
    
}

?>
