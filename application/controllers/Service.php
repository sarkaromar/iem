<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {
    
    public function __construct() {

        parent :: __construct();

        $this->load->model('data');

        $this->service_t = 'service';
        $this->load->model('service_m');
        
    }
    
    
    // name 
    public function name($name) {

        if (empty($name)){
            redirect(site_url());
        }

        $url = $this->service_m->get_service_url_by_name($name);

        if(!empty($url)){

            $data['service'] = $this->service_m->get_service_details_by_url($url->url);
            
            $data['title'] = $data['service']->title;
            
            $data['menu'] = "service";
           
            $data['page'] = "front/pages/service";

            $this->load->view('front/common/template', $data);
        
        } else {

            redirect('not_found');

        }
        
    }
    
   
}