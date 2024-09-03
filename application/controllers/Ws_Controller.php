<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require FCPATH . '/vendor/autoload.php';
use ElephantIO\Client;
// use ElephantIO\Engine\SocketIO\Version4X;

class Ws_Controller extends MY_Controller {
    public function __construct()
    {
            parent::__construct();
            load_css_view();
            load_js_view();
            // load_ws_view();
            // Iniciar sesión si no está iniciada
            // if (session_status() === PHP_SESSION_NONE) {
            //     session_start();
            // }
            // $this->session->set_userdata('user_id', 123);
        }
    public function index(){
        $this->load->view('mainWs');
        $this->load->view('mainWs_js');
        // load_ws_view();
    }
    public function sendWsMessage(){
        $this->load->view('formWs');
        $this->load->view('formWs_js');
    }
    public function emitWs() {
        //
        $wsData = $this->input->post('data');
        $room = $wsData['room'];
        $message = $wsData['message'];
        //
        $options = ['client' => Client::CLIENT_4X];
        $client = Client::create(URL_WS, $options);
        $client->connect();
        $client->of('/'); // can be omitted if connecting to default namespace
        // emit an event to the server
        $client->emit('message', ['room' => $room, 'data' => $message]);
        // end session
        $client->disconnect();
    }
    //
    public function joinRoom() {   
        $roomId = $this->input->post('roomId');
        $options = ['client' => Client::CLIENT_4X];
        $client = Client::create(URL_WS, $options);
        $client->connect();
        $client->of('/'); // can be omitted if connecting to default namespace
        // emit an event to the server
        $client->emit('joinRoom', ['room' => $roomId]);
        // end session
        $client->disconnect();
    }
    //
    public function wsConnect(){
        $this->load->view('mainWs');
        $this->load->view('mainWs_js');
    }
}
