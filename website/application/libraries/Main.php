<?php
defined('BASEPATH') or exit('Not Allowed Direct Access');

class Main{
    var $ci;

    function __construct() {
        $this->ci = & get_instance();
    }

    public function load($body_view=null, $data=null) {
        $body = $this->ci->load->view($body_view, $data, true);
        $data['body'] = $body;

        $tpl_view='home/layout';
        $this->ci->load->view($tpl_view, $data);
    }
}
?>