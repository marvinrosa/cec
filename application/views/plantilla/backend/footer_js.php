<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Cierre Wrapper -->
</div>
<!-- JS -->
<script language="javaScript"  type="text/javascript"
        src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
</script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous">
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>


<script src="<?php echo base_url(); ?>js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>js/dataTables.buttons.min.js"></script>
<script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
<script>
    $('#tabla').DataTable({
        "language":{
            "lengthMenu": "Mostrar _MENU_ registros por página.",
            "zeroRecords": "No se encontraron resultados en su búsqueda.",
            "searchPlaceholder": "Buscar en los registros",
            "info": "Mostrando registros de _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "No existen registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "responsive":"true",
            "search": "Buscar",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        }
    });
</script>



</body>
</html>
