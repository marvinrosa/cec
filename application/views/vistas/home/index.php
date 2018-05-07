<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <?php

                //Estudiante
               if($this->session->userdata('idRol')==1){
                    $this->load->view('vistas/home/estudiante');
                }
                //Profesor
               elseif ($this->session->userdata('idRol')==2){
                   $this->load->view('vistas/home/profesor');
               }
                //Gestor
                elseif ($this->session->userdata('idRol')==3){
                    $this->load->view('vistas/home/gestor');
                }
                //Admin
                elseif ($this->session->userdata('idRol')==4){
                    $this->load->view('vistas/home/admin');
                }
                ?>
            </div>
        </div>
    </div>

</div>