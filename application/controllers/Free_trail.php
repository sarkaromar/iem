<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Free_trail extends CI_Controller {

    public function index() {

        $data['title'] = "Free Trail";
        $data['menu'] = "trail";
        $data['page'] = "front/pages/free_trail";
        $this->load->view('front/common/template', $data);
    }

    public function trail() {

        if ($_POST) {
            
            echo "<pre>";
            print_r($_POST);
            echo "<pre>";
            print_r($_FILES);
            exit();
            
            
            
            
            
            if (empty($_FILES['trail_file']['name'])) {

                $this->session->set_flashdata("danger", lang("please! input your file."));

                redirect(site_url('free_trial/trail'));
                
            } else {

                // recv data 
                $trail_info = array();
                $trail_info['name'] = $this->common->nohtml($this->input->post("name", true));
                $trail_info['email'] = $this->common->nohtml($this->input->post("email", true));
                $trail_info['service_type'] = $this->common->nohtml($this->input->post("service_type", true));
                $trail_info['deli_format'] = $this->common->nohtml($this->input->post("deli_format", true));
                $trail_info['back_opt'] = $this->common->nohtml($this->input->post("back_opt", true));
                $trail_info['message'] = $this->common->nohtml($this->input->post("message", true));

                // rendering amil body -------------------------------------
                $email_body = $this->load->view('front/email_body/trail_email.php', $trail_info, TRUE);


                // config --------------------------------------------------
                $config['upload_path'] = './free_trail/';
                $config['allowed_types'] = 'gif|jpg|png|pdf';
                $config['encrypt_name'] = TRUE;
                $config['max_size'] = '25600';
                $config['xss_clean'] = TRUE;

                $this->load->library('upload', $config);

                // uploading -----------------------------------------------
                if (!$this->upload->do_upload('trail_file')) {

                    // redirecting with error message ----------------------
                    $this->session->set_flashdata("trail_err_msg", $this->upload->display_errors());
                    redirect(site_url('free_trail'));
                } else {

                    // pcik attach file ------------------------------------
                    $data = array('upload_data' => $this->upload->data());
                    $path = $data['upload_data']['full_path'];

                    // email sending ---------------------------------------
                    $this->load->library('email');
                    $this->email->set_mailtype('html');
                    $this->email->set_newline("\r\n");
                    $this->email->from('free_trail@imageediting24.com', 'Imageediting24.com');
                    $this->email->to('iediting24@gmail.com'); // owner mail
                    $this->email->subject('Request for free trail');
                    $this->email->message($email_body);
                    $this->email->attach($path);

                    if ($this->email->send()) {

                        // redirecting with succsss message ----------------
                        $this->session->set_flashdata("trail_msg", lang("sucess_5"));
                        redirect(site_url('free_trail'));
                    } else {

                        $this->session->set_flashdata("trail_err_msg", $this->email->print_debugger());
                        redirect(site_url('free_trail'));
                    }
                }
            }
            
        } else {

            redirect(site_url('free_trail'));
            
        }
        
    }
    
    

}