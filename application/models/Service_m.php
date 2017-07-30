<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class Service_m extends CI_Model {

    function __construct() {
        $this->table = 'service';
        parent :: __construct();
    }


    public function add($image) {

        // plain url generate
        $title = $this->input->post('title');
        $x = strtolower($title); 
        $url = str_replace(' ', '_', $x);
        
        $value = array(

            'title'=> $this->input->post('title'),
            'desc'=> $this->input->post('desc'),
            'url'=> $url,
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

        // plain url generate
        $title = $this->input->post('title');
        $x = strtolower($title); 
        $url = str_replace(' ', '_', $x);

        $value = array(

            'title'=> $this->input->post('title'),
            'desc'=> $this->input->post('desc'),
            'url'=> $url,
            'image'=> $image
            
        );

        $result = $this->data->update($this->table, $id, $value);

        if($result){
            return TRUE;
        }  else {
            return FALSE; 
        }
    }


    // front end ---------------------------------------------------------------
    
    public function get_service_url_by_name($name){

        $r = $this->db->select('url')->from($this->table)->where('url', $name)->get();

        return $url = $r->row();

    }
    

    public function get_service_details_by_url($url){

        $r = $this->db->select('*')->from($this->table)->where('url', $url)->get();

        return $url = $r->row();

    }


    
}