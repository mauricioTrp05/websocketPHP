<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function load_js_view() {
    $CI =& get_instance();
    $CI->load->view('partials/js');
}