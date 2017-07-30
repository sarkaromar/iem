<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
    
    public function __construct() {

        parent :: __construct();

        $this->load->model('data');

        $this->blog_t = 'blog';
        $this->load->model('blog_m');
        
    }
    
    public function latest() {
        
        // pagination process --------------------------------------------------
        $total = $this->blog_m->get_total_blog();
        
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'blog/latest';
        $config['total_rows'] = $total;
        $config['per_page'] = 3;
        include (APPPATH . "/config/blog_pegi.php");
        $this->pagination->initialize($config);

        // redirecting ---------------------------------------------------------
        $data['title'] = "Blog";
        $data['menu'] = "blog";
        $data['blog_lists'] = $this->blog_m->get_front_blog($config['per_page'], $this->uri->segment(2));
        $data['page'] = "front/pages/blog";
        $this->load->view('front/common/template', $data);
        
    }
    
    public function details($id) {
        
        if(!isset($id)){
            redirect('blog/latest');
        }
        
        $data['title'] = "Details";
        $data['menu'] = "blog";
        $data['blog'] = $this->data->getone($this->blog_t, $id);
        $data['r_blogs'] = $this->blog_m->get_front_recent_blog();

        $data['page'] = "front/pages/blog_details";
        $this->load->view('front/common/template', $data);
        
    }


}