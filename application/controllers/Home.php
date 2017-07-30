<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct() {

        parent :: __construct();

        $this->load->model('data');

        $this->team_t = 'team';
        $this->load->model('team_m');
        
    }
    
    public function index() {
        
        $data['title'] = "Home";
        $data['menu'] = "home";
        $data['team_lists'] = $this->data->getall($this->team_t);
        
        $this->load->view('front/common/header', $data);
        $this->load->view('front/common/slider');
        $this->load->view('front/pages/home');
        $this->load->view('front/common/footer');
  
    }


}