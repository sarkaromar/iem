<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class Team_m extends CI_Model {

    function __construct() {
        
        $this->table = 'team';
        parent :: __construct();
        
    }


    public function add($image) {
        
        $value = array(

            'name'=> $this->input->post('name'),
            'posi'=> $this->input->post('posi'),
            'msg'=> $this->input->post('msg'),
            'fb'=> $this->input->post('fb'),
            'twt'=> $this->input->post('twt'),
            'lnkd'=> $this->input->post('lnkd'),
            'image'=> $image

        );
        
        $result = $this->data->save($this->table, $value);

         if($result){
            return TRUE;
         }  else {
            return FALSE; 
         }
        
    }
    
    public function edit($id, $image = NULL) {

        $value = array(

            'name'=> $this->input->post('name'),
            'posi'=> $this->input->post('posi'),
            'msg'=> $this->input->post('msg'),
            'fb'=> $this->input->post('fb'),
            'twt'=> $this->input->post('twt'),
            'lnkd'=> $this->input->post('lnkd'),
            'image'=> $image
        );

        $result = $this->data->update($this->table, $id, $value);

        if($result){
            return TRUE;
        }  else {
            return FALSE; 
        }
    }

    
}