<?php
?>
<div class="row">
    <div class="col-md-12 center-block " style="float: none;" >
        <div class="form-group">
            <a href="<?php echo base_url(); ?>desestimadas" class = "btn btn-danger btn-flat"><span class="fa fa-ban"></span> Mostrar desestimadas</a>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">

                    <div class="box-body">
                        <table class="table table-responsive table-hover" id="tabla">
                            <thead>
                            <tr>
                                <th><center>No.de Árticulo</center> </th>
                                <th><center>Fecha de Creación</center></th>
                                <th><center>Titulo</center></th>
                                <th><center>Extracto</center></th>
                                <th><center>Acciones</center></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            if(isset($noticias)){
                                foreach($noticias as $row)
                                {
                                    echo '<tr name="casos">' ;
                                    echo '<td><center>'.$row->idNoticia.'</center></td>';
                                    echo '<td><center>'.date("d/m/Y", strtotime($row->fcreacion)).'<center></td>';
                                    echo '<td><center>'.$row->titulo.'</center></td>';
                                    echo '<td><center>'.$row->extracto.'</center></td>';

                                    echo '
                          <td>
                       
			              <a class="btn btn-primary" value="" title="Atender" href="caso/editar/'.$row->idNoticia.'">
			              <span class="fa fa-pencil"></span>
			               </a> &nbsp;
			               <a class="btn btn-danger" value="" title="Desestimar" href="caso/delete/'.$row->idNoticia.'/'.$row->idUsuario.'">
			              <span class="fa fa-trash-o"></span>
			              </a> &nbsp;
			              <a class="btn btn-success" value="" title="Publicado" href="caso/delete/'.$row->idNoticia.'/'.$row->idUsuario.'">
			              <span class="fa fa-address-card-o"></span>
			              </a> &nbsp;
			           
			              </td>';
                                    echo '</tr>';
                                }
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
</div>
