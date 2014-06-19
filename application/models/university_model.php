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
class University_model extends CI_Model {
    
    public function __construct() {
        
        $this->load->database();
    }
    
    public function AddUniversity(){
        $data=array(
            'university_name'=>  $this->input->post('UniversityName'),
            'university_code'=>  $this->input->post('UniversityCode'),
        );
        $result=  $this->db->insert('university',$data);
    }
    public function UpdateUniversity(){
        $data=array(
            'university_name'=>  $this->input->post('UniversityName'),
            'university_code'=>  $this->input->post('UniversityCode'),
        );
        $this->db->where('id', $_REQUEST['hidden_id']);
        $this->db->update('university',$data); 
    }
    
    public function AllUniversity(){
        $query = $this->db->get('university');
        return $query->result_array();
    }
    
    public function DeleteUniversity(){
        $this->db->where('id', $_REQUEST['id']);
        $this->db->delete('university'); 
    }
    
    public function EditUniversity(){
         $this->db->where('id', $_REQUEST['id']);
        //here we select every clolumn of the table
        $q = $this->db->get('university');
        $data = $q->result_array();
        
        echo 's'.'^'.$data[0]['university_name'].'^'.$data[0]['university_code'];
    }
   
}

?>
