<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio_cat_m extends CI_Model {

    function __construct() {
        $this->table = 'portfolio_cat';
        parent :: __construct();
    }


    public function add() {
        
        $value = array(

            'name'=> $this->input->post('name')
            
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

            'name'=> $this->input->post('name')
            
        );

        $result = $this->data->update($this->table, $id, $value);

        if($result){
            return TRUE;
        }  else {
            return FALSE; 
        }
    }


}
