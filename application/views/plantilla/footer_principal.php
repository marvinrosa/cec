<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Cierre Wrapper -->
</div>
<!-- JS -->
  <script language="javaScript"  type="text/javascript" src="<?php echo base_url(); ?>js/jquery.min.js">
  </script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
          integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
          crossorigin="anonymous">
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.js"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>


      <script src="<?php echo base_url(); ?>js/tablas.js"></script>
      <script src="<?php echo base_url(); ?>js/jquery.dataTables.min.js"></script>
      <script src="<?php echo base_url(); ?>js/dataTables.bootstrap.min.js"></script>

      <script src="<?php echo base_url(); ?>js/dataTables.buttons.min.js"></script>
      <script src="<?php echo base_url(); ?>js/popper.min.js"></script>
      <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
      <script src="<?php echo base_url(); ?>js/jquery.easing.min.js"></script>
      <script src="<?php echo base_url(); ?>js/owl.carousel.min.js"></script>
      <script src="<?php echo base_url(); ?>js/wow.min.js"></script>
      <script src="<?php echo base_url(); ?>js/app.js"></script>
      <script src="<?php echo base_url(); ?>js/tether.min.js"></script>
      <script src="<?php echo base_url(); ?>js/smooth-scroll.js"></script>
      <script src="<?php echo base_url(); ?>js/script-dropdown.min.js"></script>
      <script src="<?php echo base_url(); ?>js/bootstrap-carousel-swipe.js"></script>
      <script src="<?php echo base_url(); ?>js/jquery.touch-swipe.min.js"></script>
      <script src="<?php echo base_url(); ?>js/script-theme.js"></script>
      <script src="<?php echo base_url(); ?>js/script-slider-video.js"></script>

<script>

    $('#tabla').DataTable({
        "language":{
            "lengthMenu": "Mostrar _MENU_ registros por página.",
            "zeroRecords": "No se encontraron resultados en su búsqueda.",
            "searchPlaceholder": "Buscar registros",
            "info": "Mostrando registros de _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "No existen registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
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
