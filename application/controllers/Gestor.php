<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Gestor extends CI_Controller
{
    public function __construct()
    {
        //Contructor de la clase
        parent::__construct();
        if ($this->session->userdata('usuarioCorreo')=="") {
            redirect('login');
        }
        if($this->session->userdata('idRol')!=3){
            redirect(logout);
        }
    }

    public function index()
    {
        $data = array();
        $data['contenido'] = 'home/gestor';
        $data['panel_title']="Bienvenido.";
        $this->load->view('homeContent',$data);
    }

}