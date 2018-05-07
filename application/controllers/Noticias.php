<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticias extends CI_Controller
{
    public function __construct()
    {
        //Contructor de la clase
        parent::__construct();

        if ($this->session->userdata('usuarioCorreo')=="") {
            redirect('login');
        }
        $this->load->model('noticia_model');
    }

    public function index(){
        $data = array();
        $data['contenido'] = 'noticias/ver_noticias';
        $data['title'] ="Inicio | CEC-UDB";
        $data['panel_title']="Árticulos";
        $data['noticias']=$this->noticia_model->obtener_noticias();
        $this->load->view('homeContent',$data);
    }

    public function nueva(){
        $data = array();
        $data['contenido'] = 'noticias/nueva';
        $data['title'] ="Inicio | PQRS";
        $data['panel_title']="Árticulos";
        $this->load->view('homeContent',$data);
    }
}