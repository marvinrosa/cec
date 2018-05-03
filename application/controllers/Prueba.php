<?php
/**
 * Created by PhpStorm.
 * User: marvi
 * Date: 3/5/2018
 * Time: 07:40
 */

class Prueba extends CI_Controller
{
    public function index(){
        $data = array();
        $data['contenido'] = 'principal/noticias';
        $data['title'] ="Inicio|CEC-UDB";
        $data['panel_title']="Noticias";
        $this->load->view('homeContent',$data);
    }

}