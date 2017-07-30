<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Faqs_m extends CI_Model {

    function __construct() {
        $this->table = 'faqs';
        parent :: __construct();
    }

    public function add() {
        
        $value = array(

            'ques'=> $this->input->post('ques'),
            'ansr'=> $this->input->post('ansr')
            
        );
        
        $result = $this->data->save($this->table, $value);

         if($result){
            return TRUE;
         }  else {
            return FALSE; 
         }
        
    }
    
    public function edit($id) {

        $value = array(

            'ques'=> $this->input->post('ques'),
            'ansr'=> $this->input->post('ansr')
            
        );

        $result = $this->data->update($this->table, $id, $value);

        if($result){
            return TRUE;
        }  else {
            return FALSE; 
        }
    }


}
