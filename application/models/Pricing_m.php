<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class Pricing_m extends CI_Model {

    function __construct() {
        $this->table = 'pricing';
        parent :: __construct();
    }

    public function add() {
        
        $value = array(

            'name'=> $this->input->post('name'),
            'short_des'=> $this->input->post('short_des'),
            'price'=> $this->input->post('price'),
            'opt_01'=> $this->input->post('opt_01'),
            'opt_02'=> $this->input->post('opt_02'),
            'opt_03'=> $this->input->post('opt_03'),
            'opt_04'=> $this->input->post('opt_04'),
            'isPopular'=> $this->input->post('isPopular')
            
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

            'name'=> $this->input->post('name'),
            'short_des'=> $this->input->post('short_des'),
            'price'=> $this->input->post('price'),
            'opt_01'=> $this->input->post('opt_01'),
            'opt_02'=> $this->input->post('opt_02'),
            'opt_03'=> $this->input->post('opt_03'),
            'opt_04'=> $this->input->post('opt_04'),
            'isPopular'=> $this->input->post('isPopular')
            
        );

        $result = $this->data->update($this->table, $id, $value);

        if($result){
            return TRUE;
        }  else {
            return FALSE; 
        }
    }



    
}