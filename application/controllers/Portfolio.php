<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {
    
    public function __construct() {

        parent :: __construct();

        $this->load->model('data');

        $this->portfolio_t = 'portfolio';
        $this->load->model('portfolio_m');
        
        $this->portfolio_cat_t = 'portfolio_cat';
        $this->load->model('portfolio_cat_m');
        
    }
    
    public function index() {
        
        $data['title'] = "Portfolio";
        $data['menu'] = "portfolio";
        
        $data['lists'] = $this->data->getall($this->portfolio_t);
        $data['cats'] = $this->data->getall($this->portfolio_cat_t);
        
        $data['page'] = "front/pages/portfolio";
        $this->load->view('front/common/template', $data);
  
    }
    
    public function details($id) {
        
        if(!isset($id)){
            redirect('portfolio/latest');
        }
        
        redirect('portfolio');
        
    }
    

}