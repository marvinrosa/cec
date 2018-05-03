<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('usuarioCorreo')=="") {
            redirect('login');
        }
    }

    public function index()
    {
        $data = array();
        $data['contenido'] = 'home/index';
        $data['title'] ="Inicio | PQRS";
        $data['panel_title']="Bienvenido.";
        $this->load->view('homeContent',$data);
    }

}