<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pricing extends CI_Controller {
    
     public function __construct() {

        parent :: __construct();

        $this->load->model('data');

        $this->pricing_t = 'pricing';
        $this->load->model('pricing_m');
        
    }
    
    public function index() {
        
        $data['title'] = "Pricing";
        
        $data['menu'] = "pricing";
        
        $data['pricing_lists'] = $this->data->getall($this->pricing_t);
        
        $data['page'] = "front/pages/pricing";
        
        $this->load->view('front/common/template', $data);
        
    }


}