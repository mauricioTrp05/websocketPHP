<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
    // Puedes añadir métodos comunes aquí
    public $requestId = 0;

    public function __construct() {
        parent::__construct();
        // Aquí puedes cargar librerías, modelos, helpers, etc.
    }
}