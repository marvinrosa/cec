<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller
{

    public function index(){
        $data = array();
        $data['contenido'] = 'principal/index';
        $data['title'] ="Inicio|CEC-UDB";
        $this->load->view('initialContent',$data);
    }

    public function acerca(){
         $data = array();
        $data['contenido'] = 'principal/acerca';
        $data['title'] ="Acerca|CEC-UDB";
        $data['encabezado']="Acerca";
        $this->load->view('bannerContent',$data);
      
    }

    public function servicios(){
          $data = array();
        $data['contenido'] = 'principal/servicios';
        $data['title'] ="Acerca|CEC-UDB";
        $data['encabezado']="Servicios";
        $this->load->view('bannerContent',$data);
    }

    public function equipo(){

        echo "Equipo";
    }

    public function testimonios(){

        echo "Testimonios";
    }

    public function blog(){

        echo "Blog";
    }

    public function contactenos(){
        $data = array();
        $data['contenido'] = 'principal/contactenos';
        $data['title'] ="Contactenos|CEC-UDB";
        $data['encabezado']="Contáctenos";
        $this->load->view('bannerContent',$data);
    }

    
}