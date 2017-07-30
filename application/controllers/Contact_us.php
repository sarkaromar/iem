<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_us extends CI_Controller {
    
    public function index() {
        
        $data['title'] = "Contact Us";
        $data['menu'] = "contact";
        $data['page'] = "front/pages/contact_us";
        $this->load->view('front/common/template', $data);
        
    }
    
    
    public function contact_form() {

        if($_POST){

            // recv data
            $data['name'] = $this->common->nohtml($this->input->post('name'));

            $data['email'] = $this->common->nohtml($this->input->post('email'));

            $data['sub'] = $this->common->nohtml($this->input->post('sub'));

            $data['msg'] = $this->common->nohtml($this->input->post('msg'));
            
            
            // rendering amil body -----------------------------------------
            $email_body = $this->load->view('front/email_body/contact_email.php', $data, TRUE);

            // email sending ------------------------------------------------
            $this->load->library('email');
            
            $this->email->set_mailtype('html');
            
            $this->email->set_newline("\r\n");
            
            $this->email->from('contact@domain.com', 'domain.com'); // web mail address, domain name
            
            $this->email->to('example@gmail.com'); // owner mail
            
            $this->email->subject('Want to contact');
            
            $this->email->message($email_body);
            

            if ($this->email->send()) {

                // redirecting with succsss message ----------------
                $this->session->set_flashdata("success", "Successfully sent!");
                redirect(site_url('contact_us'));

            } else {

                // redirecting with error message ----------------
                $this->session->set_flashdata("danger", $this->email->print_debugger());
                redirect(site_url('contact_us'));

            }
            

        } else {
            
            redirect(site_url('contact_us'));
            
        }
        
    }
    
    

}