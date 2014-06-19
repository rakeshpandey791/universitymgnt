<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 *
 * @author developer
 */
class Login extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->load->view('include/header');
        $this->load->view('login/index');
        $this->load->view('include/footer');
    }
}

?>
