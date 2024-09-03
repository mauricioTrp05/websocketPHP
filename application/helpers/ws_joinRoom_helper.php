<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require FCPATH . '/vendor/autoload.php';
use ElephantIO\Client;
use ElephantIO\Engine\SocketIO\Version2X;

function ws_joinRoom() {
    $CI =& get_instance();

    //
    try {
        $client = new Client(new Version2X('http://localhost:3000'));
        $client->initialize();
        $client->emit('joinRoom', ['room' => $_SESSION['user_id'], 'message' => $wsData]);
        // $client->emit('message', ['message' => array('usu_id' =>1, 'action' => 'Citas')]);
        $client->close();

        echo "Mensaje enviado correctamente!";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}