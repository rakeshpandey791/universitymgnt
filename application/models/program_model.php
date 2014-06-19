<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of session_model
 *
 * @author developer
 */
class Program_model extends CI_Model {
    
    public function __construct() {
        
        $this->load->database();
    }
    
    public function AddProgram(){
        $data=array(
            'university'=>  $this->input->post('University'),
            'program_name'=>  $this->input->post('ProgramName'),
        );
        $result=  $this->db->insert('program',$data);
    }
    public function UpdateProgram(){
        $data=array(
            'university'=>  $this->input->post('University'),
            'program_name'=>  $this->input->post('ProgramName'),
        );
        $this->db->where('id', $_REQUEST['hidden_id']);
        $this->db->update('program',$data); 
    }
    
    public function AllProgram(){
        $query = $this->db->get('program');
        return $query->result_array();
    }
    
    public function DeleteProgram(){
        $this->db->where('id', $_REQUEST['id']);
        $this->db->delete('program'); 
    }
    
    public function EditProgram(){
         $this->db->where('id', $_REQUEST['id']);
        //here we select every clolumn of the table
        $q = $this->db->get('program');
        $data = $q->result_array();
        
        echo 's'.'^'.$data[0]['university'].'^'.$data[0]['program_name'];
    }
   
}

?>
