<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function load_css_view() {
    $CI =& get_instance();
    $CI->load->view('partials/css');
}