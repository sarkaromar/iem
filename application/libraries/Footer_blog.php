<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Footer_blog {

    public function __construct() {
        
        $CI = & get_instance();
        
        $r = $CI->db->select('*')->limit('3')->get("blog");
        
        $this->blogs = $r->result();
        
    }

}

?>