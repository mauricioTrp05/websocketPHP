<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function load_ws_view() {
    $CI =& get_instance();
    $CI->load->view('websocket/websocket');
    $CI->load->view('websocket/websocket_js');
}
