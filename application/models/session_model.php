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
class Session_model extends CI_Model {
    
    public function __construct() {
        
        $this->load->database();
    }
    
    public function AddSession(){
        $data=array(
            'session_from'=>  $this->input->post('SessionFrom'),
            'session_to'=>  $this->input->post('SessionTo'),
            'year'=>  $this->input->post('Year'),
            'session'=>  $this->input->post('SessionFrom').'-'.$this->input->post('SessionTo').'-'.$this->input->post('Year'),
        );
        $result=  $this->db->insert('session',$data);
    }
    public function UpdateSession(){
        $data=array(
            'session_from'=>  $this->input->post('SessionFrom'),
            'session_to'=>  $this->input->post('SessionTo'),
            'year'=>  $this->input->post('Year'),
            'session'=>  $this->input->post('SessionFrom').'-'.$this->input->post('SessionTo').'-'.$this->input->post('Year'),
        );
        $this->db->where('id', $_REQUEST['hidden_id']);
        $this->db->update('session',$data); 
        //print_r($this->db);die;
    }
    
    public function AllSession(){
        $query = $this->db->get('session');
        return $query->result_array();
    }
    
    public function DeleteSession(){
        $this->db->where('id', $_REQUEST['id']);
        $this->db->delete('session'); 
    }
    
    public function EditSession(){
         $this->db->where('id', $_REQUEST['id']);
        //here we select every clolumn of the table
        $q = $this->db->get('session');
        $data = $q->result_array();
        
        echo 's'.'^'.$data[0]['session_from'].'^'.$data[0]['session_to'].'^'.$data[0]['year'];
    }
   
}

?>
