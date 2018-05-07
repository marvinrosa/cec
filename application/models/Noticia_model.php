<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Noticia_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function conteo_noticias(){
        $query=$this->db->query("call conteo_noticias()");
        foreach($query->result() as $row)
        {
            return $row->total;
        }
    }

    public function obtener_noticias(){
        $query=$this->db->query("call obtener_noticias()");
        return $query->result();
    }

}