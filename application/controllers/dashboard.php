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
class Dashboard extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->load->view('include/header');
        $this->load->view('include/navigation');
        $this->load->view('dashboard/index');
        $this->load->view('include/footer');
    }
    
}

?>
