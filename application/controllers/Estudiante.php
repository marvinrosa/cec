<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Estudiante extends CI_Controller
{
    public function __construct()
    {
        //Contructor de la clase
        parent::__construct();

        if ($this->session->userdata('usuarioCorreo')=="") {
            redirect('login');
        }

    }

    public function index()
    {
        $data = array();
        $data['contenido'] = 'home/admin';
        $data['panel_title']="Bienvenido.";
        $this->load->view('homeContent',$data);
    }

}
