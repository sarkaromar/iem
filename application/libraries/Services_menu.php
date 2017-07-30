<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Services_menu {

    public function __construct() {
        
        $CI = & get_instance();
        
        $r = $CI->db->select("title")->get("service");
        
        $this->services = $r->result();
        
    }

}

?>