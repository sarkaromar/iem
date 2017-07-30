<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Admin_panel Class
 *
 * @author      example
 * @link        http://example.com
 */
class Admin_panel extends CI_Controller {
    
    public function __construct() {

        parent :: __construct();

        $this->load->model('data');

        
        $this->team_t = 'team';
        $this->team_p = './assets/img/team/';
        $this->load->model('team_m');
        
        
        $this->faqs_t = 'faqs';
        $this->load->model('faqs_m');
        

        $this->service_t = 'service';
        $this->service_p = './assets/img/service/';
        $this->load->model('service_m');

 
        $this->portfolio_t = 'portfolio';
        $this->portfolio_p = './assets/img/portfolio/';
        $this->load->model('portfolio_m');
        

        $this->portfolio_cat_t = 'portfolio_cat';
        $this->load->model('portfolio_cat_m');


        $this->pricing_t = 'pricing';
        $this->pricing_p = './assets/img/pricing/';
        $this->load->model('pricing_m');

        
        $this->blog_t = 'blog';
        $this->blog_p = './assets/img/blog/';
        $this->load->model('blog_m');
        

        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        

        if (!$this->back_user->loggedin) {
            redirect(site_url("login"));
        }
        
    }
    
    // *** index for dashboard -------------------------------------------------
    public function index() {

        redirect(site_url("admin_panel/team"));
        
    }

    
    // ##############################################################################################
    //  team section
    // ##############################################################################################
    
    public function team() {
        
        $data['title'] = "Our Team";
        
        $data['page'] = "back/team/team";
        
        $data['lists'] = $this->data->getall($this->team_t);
        
        $this->load->view('back/common/template', $data);
        
    }

    public function add_team() {
        
        if($_POST){

            if ($_FILES['image']['name'] != '') {

                $image_upload = $this->do_upload('image', $this->team_p);

                if ($image_upload == FALSE) {

                    $this->session->set_flashdata('danger', 'Image Upload Failed');
                    redirect(site_url('admin_panel/team'));

                } else {

                    $image = $image_upload["file_name"];

                }

            }

            $id = $this->team_m->add($image);

            if ($id) {
                
                $this->session->set_flashdata('success', 'Added Successfully.');
                redirect(site_url('admin_panel/team'));

            } else {
                
                $this->session->set_flashdata('danger', 'Not Added!');
                redirect(site_url('admin_panel/team'));

            }

        } else {

            redirect(site_url('admin_panel/team'));

        }
        
    }

    public function edit_team($id) {
        
        if(empty($id)){

            redirect(site_url('admin_panel/team'));

        }

        $data['title'] = "Edit Team";
        
        $data['page'] = "back/team/edit_team";
        
        $data['list'] = $this->data->getone($this->team_t, $id);
        
        $this->load->view('back/common/template', $data);
        
    }

    public function do_edit_team() {

        if($_POST){

            $id = $this->input->post('id');

            if ($_FILES['image']['name'] != '') {

                $del_image = $this->input->post('img');

                $filename = $this->team_p . $del_image;
                if (file_exists($filename)) {
                    unlink($filename);
                }

                $image_upload = $this->do_upload('image', $this->team_p);

                if ($image_upload == FALSE) {

                    $this->session->set_flashdata('danger', 'Image Upload Failed!');
                    redirect(site_url('admin_panel/team'));

                } else {

                    $image = $image_upload["file_name"];

                }

            } else {

                $image = $this->input->post('img');

            }

            if ($this->team_m->edit($id, $image)) {

                $this->session->set_flashdata('success', 'Update Successfully.');
                redirect('admin_panel/team');

            }

        } else {
            
            redirect('admin_panel/team', 'refresh');
            
        }

    }

    public function delete_team($id, $image) {

        $result = $this->delete($this->team_t, $id, $image, $this->team_p);

        if($result){

            $this->session->set_flashdata('success', 'Delete Successfully.');
            redirect('admin_panel/team');

        } else{

            $this->session->set_flashdata('danger', 'Not Delete Successfully.');
            redirect('admin_panel/team');

        }

    }


    // ##############################################################################################
    //  faqs section
    // ##############################################################################################

    public function faqs() {

        $data['title'] = "Faqs";
        
        $data['page'] = "back/faqs/faqs";
        
        $data['lists'] = $this->data->getall($this->faqs_t);
        
        $this->load->view('back/common/template', $data);
        
    }

    public function add_faqs() {
        
        if($_POST){

            $id = $this->faqs_m->add();
            if ($id) {
                
                $this->session->set_flashdata('success', 'Added Successfully.');
                redirect(site_url('admin_panel/faqs'));

            } else {
                
                $this->session->set_flashdata('danger', 'Not Added Successfully');
                redirect(site_url('admin_panel/faqs'));

            }

        } else {

            redirect(site_url('admin_panel/faqs'));

        }
    }

    public function edit_faqs($id) {
        
        if(empty($id)){

            redirect(site_url('admin_panel/faqs'));

        }
        
        $data['title'] = "Edit Faq";
        
        $data['page'] = "back/faqs/edit_faqs";
        
        $data['list'] = $this->data->getone($this->faqs_t, $id);
        
        $this->load->view('back/common/template', $data);

    }

    public function do_edit_faqs() {

        if($_POST){

            $id = $this->input->post('id');

            if ($this->faqs_m->edit($id)) {

                $this->session->set_flashdata('success', 'Update Successfully.');
                redirect('admin_panel/faqs');

            }

        } else {
            redirect('admin_panel/faqs', 'refresh');
        }

    }

    public function delete_faqs($id) {

        $result = $this->delete($this->faqs_t, $id);

        if($result){

            $this->session->set_flashdata('success', 'Delete Successfully.');
            redirect('admin_panel/faqs');

        } else{

            $this->session->set_flashdata('danger', 'Not Delete Successfully.');
            redirect('admin_panel/faqs');

        }

    }



    // ##############################################################################################
    //  service section
    // ##############################################################################################
    
    public function service() {
        
        $data['title'] = "Service";
        
        $data['page'] = "back/service/service";
        
        $data['lists'] = $this->data->getall($this->service_t);
        
        $this->load->view('back/common/template', $data);
        
    }

    public function add_service() {
        
        if($_POST){

            if ($_FILES['image']['name'] != '') {

                $image_upload = $this->do_upload('image', $this->service_p);

                if ($image_upload == FALSE) {

                    $this->session->set_flashdata('danger', 'Image Upload Failed');
                    redirect(site_url('admin_panel/service'));

                } else {

                    $image = $image_upload["file_name"];

                }

            }

            $id = $this->service_m->add($image);

            if ($id) {
                
                $this->session->set_flashdata('success', 'Added Successfully.');
                redirect(site_url('admin_panel/service'));

            } else {
                
                $this->session->set_flashdata('danger', 'Not Added!');
                redirect(site_url('admin_panel/service'));

            }

        } else {

            redirect(site_url('admin_panel/service'));

        }
        
    }

    public function edit_service($id) {
        
        if(empty($id)){

            redirect(site_url('admin_panel/service'));

        }

        $data['title'] = "Edit Service";
        
        $data['page'] = "back/service/edit_service";
        
        $data['list'] = $this->data->getone($this->service_t, $id);
        
        $this->load->view('back/common/template', $data);
        
    }

    public function do_edit_service() {

        if($_POST){

            $id = $this->input->post('id');

            if ($_FILES['image']['name'] != '') {

                $del_image = $this->input->post('img');

                $filename = $this->service_p . $del_image;
                if (file_exists($filename)) {
                    unlink($filename);
                }

                $image_upload = $this->do_upload('image', $this->service_p);

                if ($image_upload == FALSE) {

                    $this->session->set_flashdata('danger', 'Image Upload Failed!');
                    redirect(site_url('admin_panel/service'));

                } else {

                    $image = $image_upload["file_name"];

                }

            } else {

                $image = $this->input->post('img');

            }

            if ($this->service_m->edit($id, $image)) {

                $this->session->set_flashdata('success', 'Update Successfully.');
                redirect('admin_panel/service');

            }

        } else {
            
            redirect('admin_panel/service', 'refresh');
            
        }

    }

    public function delete_service($id, $image) {

        $result = $this->delete($this->service_t, $id, $image, $this->service_p);

        if($result){

            $this->session->set_flashdata('success', 'Delete Successfully.');
            redirect('admin_panel/service');

        } else{

            $this->session->set_flashdata('danger', 'Not Delete Successfully.');
            redirect('admin_panel/service');

        }

    }

    // ##############################################################################################
    //  portfolio section
    // ##############################################################################################

    public function portfolio() {

        $data['title'] = "Portfolio";
        
        $data['page'] = "back/portfolio/portfolio";
        
        $data['lists'] = $this->data->getall($this->portfolio_t);
        
        $data['cats'] = $this->data->getall($this->portfolio_cat_t);
        
        $this->load->view('back/common/template', $data);

    }

    public function add_portfolio() {
        if($_POST){

            if ($_FILES['image']['name'] != '') {

                $image_upload = $this->do_upload('image', $this->portfolio_p);

                if ($image_upload == FALSE) {

                    $this->session->set_flashdata('danger', 'Image Upload Failed');
                    redirect(site_url('admin_panel/portfolio'));

                } else {

                    $image = $image_upload["file_name"];

                }

            }

            $id = $this->portfolio_m->add($image);

            if ($id) {
                
                $this->session->set_flashdata('success', 'Added Successfully.');
                redirect(site_url('admin_panel/portfolio'));

            } else {
                
                $this->session->set_flashdata('danger', 'Not Added!');
                redirect(site_url('admin_panel/portfolio'));

            }

        } else {

            redirect(site_url('admin_panel/portfolio'));

        }
    }

    public function edit_portfolio($id) {
        
        if(empty($id)){

            redirect(site_url('admin_panel/portfolio'));

        }

        $data['title'] = "Edit Portfolio";
        
        $data['page'] = "back/portfolio/edit_portfolio";
        
        $data['list'] = $this->data->getone($this->portfolio_t, $id);
        
        $data['cats'] = $this->data->getall($this->portfolio_cat_t);
        
        $this->load->view('back/common/template', $data);
        
    }

    public function do_edit_portfolio() {

        if($_POST){

            $id = $this->input->post('id');

            if ($_FILES['image']['name'] != '') {

                $del_image = $this->input->post('img');

                $filename = $this->portfolio_p . $del_image;
                if (file_exists($filename)) {
                    unlink($filename);
                }

                $image_upload = $this->do_upload('image', $this->portfolio_p);

                if ($image_upload == FALSE) {

                    $this->session->set_flashdata('danger', 'Image Upload Failed!');
                    redirect(site_url('admin_panel/portfolio'));

                } else {

                    $image = $image_upload["file_name"];

                }

            } else {

                $image = $this->input->post('img');

            }

            if ($this->portfolio_m->edit($id, $image)) {

                $this->session->set_flashdata('success', 'Update Successfully.');
                redirect('admin_panel/portfolio');

            }

        } else {
            redirect('admin_panel/portfolio', 'refresh');
        }

    }

    public function delete_portfolio($id, $image) {

        $result = $this->delete($this->portfolio_t, $id, $image, $this->portfolio_p);

        if($result){

            $this->session->set_flashdata('success', 'Delete Successfully.');
            redirect('admin_panel/portfolio');

        } else{

            $this->session->set_flashdata('danger', 'Not Deleted!');
            redirect('admin_panel/portfolio');

        }

    }


    // ##############################################################################################
    //  portfolio cat section
    // ############################################################################################## 

    public function portfolio_cat() {

        $data['title'] = "Portfolio Category";
        
        $data['page'] = "back/portfolio_cat/portfolio_cat";
        
        $data['lists'] = $this->data->getall($this->portfolio_cat_t);
        
        $this->load->view('back/common/template', $data);

    }

    public function add_portfolio_cat() {
        if($_POST){

            $id = $this->portfolio_cat_m->add();
            if ($id) {
                
                $this->session->set_flashdata('success', 'Added Successfully.');
                redirect(site_url('admin_panel/portfolio_cat'));

            } else {
                
                $this->session->set_flashdata('danger', 'Not Added Successfully');
                redirect(site_url('admin_panel/portfolio_cat'));

            }

        } else {

            redirect(site_url('admin_panel/portfolio_cat'));

        }
    }

    public function edit_portfolio_cat($id) {
        
        if(empty($id)){

            redirect(site_url('admin_panel/portfolio_cat'));

        }

        $data['title'] = "Edit Category";
        
        $data['page'] = "back/portfolio_cat/edit_portfolio_cat";
        
        $data['list'] = $this->data->getone($this->portfolio_cat_t, $id);
        
        $this->load->view('back/common/template', $data);

    }

    public function do_edit_portfolio_cat() {

        if($_POST){

            $id = $this->input->post('id');

            if ($this->portfolio_cat_m->edit($id)) {

                $this->session->set_flashdata('success', 'Update Successfully.');
                redirect('admin_panel/portfolio_cat');

            }

        } else {
            redirect('admin_panel/portfolio_cat', 'refresh');
        }

    }

    public function delete_portfolio_cat($id) {

        $result = $this->delete($this->portfolio_cat_t, $id);

        if($result){

            $this->session->set_flashdata('success', 'Delete Successfully.');
            redirect('admin_panel/portfolio_cat');

        } else{

            $this->session->set_flashdata('danger', 'Not Delete Successfully.');
            redirect('admin_panel/portfolio_cat');

        }

    }

    
    
    // ##############################################################################################
    //  pricing section
    // ############################################################################################## 
    
    public function pricing() {

        $data['title'] = "Pricing";
        
        $data['page'] = "back/pricing/pricing";
        
        $data['lists'] = $this->data->getall($this->pricing_t);
        
        $this->load->view('back/common/template', $data);

    }

    public function add_pricing() {
        
        if($_POST){

            $id = $this->pricing_m->add();

            if ($id) {
                
                $this->session->set_flashdata('success', 'Added Successfully.');
                redirect(site_url('admin_panel/pricing'));

            } else {
                
                $this->session->set_flashdata('danger', 'Not Added!');
                redirect(site_url('admin_panel/pricing'));

            }

        } else {

            redirect(site_url('admin_panel/pricing'));

        }
    }

    public function edit_pricing($id) {
        
        if(empty($id)){

            redirect(site_url('admin_panel/pricing'));

        }
        
        $data['title'] = "Edit Price";
        
        $data['page'] = "back/pricing/edit_pricing";
        
        $data['list'] = $this->data->getone($this->pricing_t, $id);
        
        $this->load->view('back/common/template', $data);
        
    }

    public function do_edit_pricing() {

        if($_POST){

            $id = $this->input->post('id');

            if ($_FILES['image']['name'] != '') {

                $del_image = $this->input->post('img');

                $filename = $this->pricing_p . $del_image;
                if (file_exists($filename)) {
                    unlink($filename);
                }

                $image_upload = $this->do_upload('image', $this->pricing_p);

                if ($image_upload == FALSE) {

                    $this->session->set_flashdata('danger', 'Image Upload Failed!');
                    redirect(site_url('admin_panel/pricing'));

                } else {

                    $image = $image_upload["file_name"];

                }

            } else {

                $image = $this->input->post('img');

            }

            if ($this->pricing_m->edit($id, $image)) {

                $this->session->set_flashdata('success', 'Update Successfully.');
                redirect('admin_panel/pricing');

            }

        } else {
            redirect('admin_panel/pricing', 'refresh');
        }

    }

    public function delete_pricing($id) {

        $result = $this->delete($this->pricing_t, $id, $image, $this->pricing_p);

        if($result){

            $this->session->set_flashdata('success', 'Delete Successfully.');
            redirect('admin_panel/pricing');

        } else{

            $this->session->set_flashdata('danger', 'Not Delete Successfully.');
            redirect('admin_panel/pricing');

        }

    }
    

    // ##############################################################################################
    //  Blog section
    // ############################################################################################## 
    
    public function blog() {

        $data['title'] = "Blog";
        
        $data['page'] = "back/blog/blog";
        
        $data['lists'] = $this->data->getall($this->blog_t);
        
        $this->load->view('back/common/template', $data);

    }

    public function add_blog() {
        
        if($_POST){

            if ($_FILES['image']['name'] != '') {

                $image_upload = $this->do_upload('image', $this->blog_p);

                if ($image_upload == FALSE) {

                    $this->session->set_flashdata('danger', 'Image Upload Failed');
                    redirect(site_url('admin_panel/blog'));

                } else {

                    $image = $image_upload["file_name"];

                }

            }

            $id = $this->blog_m->add($image);

            if ($id) {
                
                $this->session->set_flashdata('success', 'Added Successfully.');
                redirect(site_url('admin_panel/blog'));

            } else {
                
                $this->session->set_flashdata('danger', 'Not Added!');
                redirect(site_url('admin_panel/blog'));

            }

        } else {

            redirect(site_url('admin_panel/blog'));

        }
        
    }

    public function edit_blog($id) {
        
        if(empty($id)){

            redirect(site_url('admin_panel/blog'));

        }

        $data['title'] = "Edit Blog";
        
        $data['page'] = "back/blog/edit_blog";
        
        $data['list'] = $this->data->getone($this->blog_t, $id);
        
        $this->load->view('back/common/template', $data);

    }

    public function do_edit_blog() {

        if($_POST){

            $id = $this->input->post('id');

            if ($_FILES['image']['name'] != '') {

                $del_image = $this->input->post('img');

                $filename = $this->blog_p . $del_image;
                if (file_exists($filename)) {
                    unlink($filename);
                }

                $image_upload = $this->do_upload('image', $this->blog_p);

                if ($image_upload == FALSE) {

                    $this->session->set_flashdata('danger', 'Image Upload Failed!');
                    redirect(site_url('admin_panel/blog'));

                } else {

                    $image = $image_upload["file_name"];

                }

            } else {

                $image = $this->input->post('img');

            }

            if ($this->blog_m->edit($id, $image)) {

                $this->session->set_flashdata('success', 'Update Successfully.');
                redirect('admin_panel/blog');

            }

        } else {
            redirect('admin_panel/blog', 'refresh');
        }

    }

    public function delete_blog($id, $image) {

        $result = $this->delete($this->blog_t, $id, $image, $this->blog_p);

        if($result){

            $this->session->set_flashdata('success', 'Delete Successfully.');
            redirect('admin_panel/blog');

        } else{

            $this->session->set_flashdata('danger', 'Not Delete Successfully.');
            redirect('admin_panel/blog');

        }

    }
    
    
    
    
    public function delete($table, $id, $image = NULL, $path = NULL) {

        if($image != NULL){

            $this->data->delete($table, $id);
            $filename = $path . $image;

            if (file_exists($filename)) {
                unlink($filename);
                return TRUE;
            } else {
                return FALSE;
            }

        } else {

            if ($this->data->delete($table, $id)) {
                return TRUE;
            } else {
                return FALSE;
            }

        }
        
    }
    
    public function do_upload($field_name , $path) {

        $config['upload_path'] = $path;
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $config['encrypt_name'] = TRUE;
        $config['max_size'] = '5120';
        $config['xss_clean'] = TRUE;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload($field_name)) {
            return false;
        } else {
            return $this->upload->data();
        }
    }
    
    // *** logout --------------------------------------------------------------
    public function logout($hash) {
        
        $config = $this->config->item("cookieprefix");
        
        $this->load->helper("cookie");
        
        if ($hash != $this->security->get_csrf_hash()) {
            
            $this->session->set_flashdata('danger', 'You are inactive from this site!');
            redirect(site_url('login'));
            
        }
        
        delete_cookie($config . "un");
        
        delete_cookie($config . "tkn");
        
        $this->session->sess_destroy();
        
        redirect('login');
        
    }
    
    
}