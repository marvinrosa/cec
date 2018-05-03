<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{

    //Contructor de la clase
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
    }

    //Función que muestra la vista de Inicio de Sesión
    public function index()
    {
        $data = array();
        $data['contenido'] = 'auth/login';
        $data['title'] ="Iniciar Sesión|CEC-UDB";
        $this->load->view('formContent',$data);

    }

    //Función que procesa el tipo de usuario que ingresa al sistema
    public function signin()
    {
        $correo = $this->input->POST('correo');
        $clave = sha1(md5($this->input->POST('clave')));

        $resultados = $this->auth_model->obtener_usurio($correo,$clave);

        if($resultados->num_rows() == 1 ){
            foreach ($resultados->result() as $sess){
                $sess_data['logged_in'] = 'conectado';
                // Selecionamos de la consulta los datos que estaran almacenados en variables de
                // sesión
                $sess_data['usuarioCorreo'] = $sess->usuarioCorreo;
                $sess_data['idRol'] = $sess->idRol;
                $sess_data['idUsuario'] = $sess->idUsuario;
                $sess_data['usuarioNombre'] =$sess->usuarioNombre;
                $sess_data['usurioExterno'] =$sess->usuarioExterno;
                $sess_data['activo'] = $sess->activo;

                $this->session->set_userdata($sess_data);

                //Estudiante
                if($this->session->userdata('idRol')==1){
                    redirect("inicio");
                }
                //Gestor
                elseif ($this->session->userdata('idRol')==2){
                    redirect('inicio');
                }
                //Gestor
                elseif ($this->session->userdata('idRol')==3){
                    redirect('inicio');
                }
                //Admin
                elseif ($this->session->userdata('idRol')==4){
                    redirect('inicio');
                }
                else{
                    echo "<script>alert('No valido');history.go(-1);</script>";
                }
            }
        }else{
            $this->session->set_flashdata("error","Contraseña y/o correo incorrectos.");
            redirect(base_url());
        }
    }

    public function logout(){
        $this->session->unset_userdata('usuarioCorreo');
        $this->session->unset_userdata('idUsuario');
        session_destroy();
        redirect(base_url());
    }


}