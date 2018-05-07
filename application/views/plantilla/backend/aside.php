<?php

defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php

defined('BASEPATH') OR exit('No direct script access allowed');
?>

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <?php if($this->session->userdata('idRol')==4): ?>
                    <img src="img/admin.png" class="img-circle" alt="User Image">
                <?php elseif($this->session->userdata('idRol')==3): ?>
                    <img src="img/gestor.png" class="img-circle" alt="User Image">
                <?php elseif($this->session->userdata('idRol')==2): ?>
                    <img src="img/profesor.png" class="img-circle" alt="User Image">
                <?php elseif($this->session->userdata('idRol')==1): ?>
                    <img src="img/estudiante.png" weight="128" width="128" class="img-circle" alt="User Image">
                <?php endif?>
            </div>
            <div class="pull-left info">
                <p><?php  echo  $this->session->userdata('usuarioCorreo');?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Conectado </a>

            </div>
        </div>

        <!--Validando el rol del usuario para mostrar los elementos correspondientes a cada uno en la sidebar -->
        <?php if($this->session->userdata('idRol')==4): ?>

            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">Menu Principal</li>
                <li>
                    <a href="<?php echo base_url()?>inicio">
                        <i class="fa fa-home"></i> <span>Inicio</span>
                    </a>

                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-th"></i>
                        <span>Articulos</span>
                        <span class="pull-right-container">

              <i class="fa fa-angle-left pull-right"></i>
            </span>

                    </a>
                    <ul class="treeview-menu">

                        <li><a href="<?php echo base_url()?>nueva"><i class="fa fa-circle-o"></i>Articulo nuevo</a></li>
                        <li><a href="<?php echo base_url()?>articulos"><i class="fa fa-circle-o"></i>Articulos</a></li>
                        <li><a href="<?php echo base_url()?>desestimados"><i class="fa fa-circle-o"></i>Articulos desestimados</a></li>
                        <li><a href="<?php echo base_url()?>promovidos""><i class="fa fa-circle-o"></i>Articulos promovidos</a></li>
                        <li><a href="<?php echo base_url()?>publicados""><i class="fa fa-circle-o"></i>Articulos publicados</a></li>

                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-laptop"></i>
                        <span>Catálogos</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url()?>cursos"><i class="fa fa-circle-o"></i>Cursos</a></li>
                        <li><a href="<?php echo base_url()?>teatro"><i class="fa fa-circle-o"></i>Teatro</a></li>
                        <li><a href="<?php echo base_url()?>asociaciones"><i class="fa fa-circle-o"></i>Asociaciones</a></li>
                    </ul>
                </li>


                <li><a href="<?php echo base_url()?>proyectos"><i class="fa fa-book"></i> <span>Proyectos</span></a></li>

                <li><a href="<?php echo base_url()?>servicios"><i class="fa fa-book"></i> <span>Servicios</span></a></li>
               
            </ul>
        <?php elseif($this->session->userdata('idRol')==3): ?>
              <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">Menu Principal</li>
                <li>
                    <a href="<?php echo base_url()?>inicio">
                        <i class="fa fa-home"></i> <span>Inicio</span>
                    </a>

                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-th"></i>
                        <span>Articulos</span>
                        <span class="pull-right-container">

              <i class="fa fa-angle-left pull-right"></i>
            </span>

                    </a>
                    <ul class="treeview-menu">

                        <li><a href="<?php echo base_url()?>nuevo"><i class="fa fa-circle-o"></i>Articulo nuevo</a></li>
                        <li><a href="<?php echo base_url()?>desestimados"><i class="fa fa-circle-o"></i>Articulos desestimados</a></li>
                        <li><a href="<?php echo base_url()?>promovidos""><i class="fa fa-circle-o"></i>Articulos promovidos</a></li>
                        <li><a href="<?php echo base_url()?>publicados""><i class="fa fa-circle-o"></i>Articulos publicados</a></li>

                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-laptop"></i>
                        <span>Catálogos</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url()?>cursos"><i class="fa fa-circle-o"></i>Cursos</a></li>
                        <li><a href="<?php echo base_url()?>teatro"><i class="fa fa-circle-o"></i>Teatro</a></li>
                        <li><a href="<?php echo base_url()?>asociaciones"><i class="fa fa-circle-o"></i>Asociaciones</a></li>
                    </ul>
                </li>


                <li><a href="<?php echo base_url()?>proyectos"><i class="fa fa-book"></i> <span>Proyectos</span></a></li>

                <li><a href="<?php echo base_url()?>servicios"><i class="fa fa-book"></i> <span>Servicios</span></a></li>
               
            
        <?php elseif($this->session->userdata('idRol')==2): ?>
              <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">Menu Principal</li>
                <li>
                    <a href="<?php echo base_url()?>inicio">
                        <i class="fa fa-home"></i> <span>Inicio</span>
                    </a>

                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-th"></i>
                        <span>Articulos</span>
                        <span class="pull-right-container">

              <i class="fa fa-angle-left pull-right"></i>
            </span>

                    </a>
                    <ul class="treeview-menu">

                        <li><a href="<?php echo base_url()?>nuevo"><i class="fa fa-circle-o"></i>Articulo nuevo</a></li>
                        <li><a href="<?php echo base_url()?>desestimados"><i class="fa fa-circle-o"></i>Articulos desestimados</a></li>
                        <li><a href="<?php echo base_url()?>promovidos""><i class="fa fa-circle-o"></i>Articulos promovidos</a></li>
                        <li><a href="<?php echo base_url()?>publicados""><i class="fa fa-circle-o"></i>Articulos publicados</a></li>

                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-laptop"></i>
                        <span>Catálogos</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url()?>cursos"><i class="fa fa-circle-o"></i>Cursos</a></li>
                        <li><a href="<?php echo base_url()?>teatro"><i class="fa fa-circle-o"></i>Teatro</a></li>
                        <li><a href="<?php echo base_url()?>asociaciones"><i class="fa fa-circle-o"></i>Asociaciones</a></li>
                    </ul>
                </li>
                
                 <li><a href="<?php echo base_url()?>proyectos"><i class="fa fa-book"></i> <span>Cursos</span></a></li>

                <li><a href="<?php echo base_url()?>proyectos"><i class="fa fa-book"></i> <span>Proyectos</span></a></li>

               
           
        <?php elseif($this->session->userdata('idRol')==1): ?>
              <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">Menu Principal</li>
                <li>
                    <a href="<?php echo base_url()?>inicio">
                        <i class="fa fa-home"></i> <span>Inicio</span>
                    </a>

                </li>

            

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-laptop"></i>
                        <span>Catálogos</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url()?>cursos"><i class="fa fa-circle-o"></i>Cursos</a></li>
                        <li><a href="<?php echo base_url()?>teatro"><i class="fa fa-circle-o"></i>Teatro</a></li>
                        <li><a href="<?php echo base_url()?>asociaciones"><i class="fa fa-circle-o"></i>Asociaciones</a></li>
                    </ul>
                </li>


                <li><a href="<?php echo base_url()?>proyectos"><i class="fa fa-book"></i> <span>Proyectos</span></a></li>

               
    
        <?php endif?>
    </section>
    <!-- /.sidebar -->
</aside>
<!-- /.sidebar -->
</aside>
