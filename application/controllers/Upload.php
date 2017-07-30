<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {
    
    public function index() {
        
        $data['title'] = "Upload";
        
        $data['menu'] = "upload";
        
        $data['page'] = "front/pages/upload";
        
        $this->load->view('front/common/template', $data);
        
    }


}