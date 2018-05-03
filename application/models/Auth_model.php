<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function obtener_usurio($email,$clave)
    {
        $query = $this->db->query("
        call obtener_usuario('" . $email . "','".$clave."')");

        $query->result();
        return $query;

    }

}