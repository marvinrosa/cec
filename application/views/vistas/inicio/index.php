
<div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <?php

                //Estudiante
                if($this->session->userdata('idRol')==1){
                    $this->load->view('vistas/inicio/estudiante');
                }
                //Gestor
                elseif($this->session->userdata('idRol')==2){
                    $this->load->view('vistas/inicio/gestor');
                }
                //Admin
                elseif ($this->session->userdata('idRol')==3){
                    $this->load->view('vistas/inicio/admin');
                }

                ?>
            </div>
        </div>
    </div>

</div>