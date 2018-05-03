<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Admin extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            if ($this->session->userdata('usuarioCorreo')=="") {
                redirect('login');
            }
            if($this->session->userdata('idRol')!=4){
                redirect(logout);
            }
        }

        public function index() {
            $data = array();
            $data['contenido'] = 'home/admin';
            $data['panel_title']="Bienvenido.";
            $this->load->view('homeContent',$data);
      }
    }