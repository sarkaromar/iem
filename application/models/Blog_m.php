<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class Blog_m extends CI_Model {

    function __construct() {
        $this->table = 'blog';
        parent :: __construct();
    }


    public function add($image) {
        
        $value = array(

            'title'=> $this->input->post('title'),
            'desc'=> $this->input->post('desc'),
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

            'title'=> $this->input->post('title'),
            'desc'=> $this->input->post('desc'),
            'image'=> $image
        );

        $result = $this->data->update($this->table, $id, $value);

        if($result){
            return TRUE;
        }  else {
            return FALSE; 
        }
    }


    public function get_total_blog() {

        $r = $this->db->select('id')->from($this->table)->get();
        return $result = count($r->result_array());

    }

    public function get_front_blog($per_page, $uri_segment) {

        if ($uri_segment == NULL) {
            $uri_segment = 0;
        }

        $r = $this->db->select('id, title, desc, image, created')
                      ->from($this->table)
                      ->order_by('id, title, desc, image, created', 'desc')
                      ->limit($per_page, $uri_segment)
                      ->get();
        return $list = $r->result();

    }


    public function get_front_recent_blog() {

        $r = $this->db->select('id, title, desc, image, created')
                      ->from($this->table)
                      ->order_by('id, title, desc, image, created', 'desc')
                      ->limit(5)
                      ->get();
        return $list = $r->result();

    }



    
}