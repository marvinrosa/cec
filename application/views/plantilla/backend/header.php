<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<header class="main-header">
    <!-- Logo -->
    <a href="home" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">
           <label for="" style="font-size: 15px;">CEC</label>
        </span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>CEC-</b>UDB</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Notifications: style can be found in dropdown
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php if($this->session->userdata('idRol')==4): ?>
                            <img src="img/admin.png" class="user-image" alt="User Image">
                        <?php elseif($this->session->userdata('idRol')==3): ?>
                            <img src="img/gestor.png" class="user-image" alt="User Image">
                        <?php elseif($this->session->userdata('idRol')==2): ?>
                            <img src="img/profesor.png" class="user-image" alt="User Image">
                        <?php elseif($this->session->userdata('idRol')==1): ?>
                            <img src="img/estudiante.png" class="user-image" alt="User Image">
                        <?php endif?>
                        <span class="hidden-xs"><?php  echo  $this->session->userdata('usuarioCorreo');?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <?php if($this->session->userdata('idRol')==4): ?>
                                <img src="img/admin.png" class="img-circle" alt="User Image">
                            <?php elseif($this->session->userdata('idRol')==3): ?>
                                <img src="img/gestor.png" class="img-circle" alt="User Image">
                            <?php elseif($this->session->userdata('idRol')==2): ?>
                                <img src="img/profesor.png" class="img-circle" alt="User Image">
                            <?php elseif($this->session->userdata('idRol')==1): ?>
                                <img src="img/estudiante.png" class="img-circle" alt="User Image">

                            <?php endif?>
                            <p>
                                <?php  echo  $this->session->userdata('usuarioCorreo');?>

                                <small><?php

                                    //Externo
                                    if($this->session->userdata('idRol')==1){
                                        echo "Estudiante";
                                    }
                                    //Estudiante
                                    elseif($this->session->userdata('idRol')==2){
                                        echo "Profesor";
                                    }
                                    //Gestor
                                    elseif ($this->session->userdata('idRol')==3){
                                        echo "Gestor de Contenido";
                                    }
                                    //Admin
                                    elseif ($this->session->userdata('idRol')==4){
                                        echo "Administrador";
                                    }


                                    ?></small>
                            </p>
                        </li>

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="<?php echo base_url(); ?>cuenta/index/<?php echo $this->session->userdata('idUsuario') ?>" class="btn btn-default btn-flat">Mi cuenta</a>
                            </div>
                            <div class="pull-right">
                                <a href="<?php echo base_url(); ?>logout" class="btn btn-default btn-flat">Cerrar sesión</a>
                            </div>
                        </li>


                    </ul>
                </li>
            </ul>
        </div>
    </nav><!--->
</header>
