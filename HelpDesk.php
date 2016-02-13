<!DOCTYPE html>
<!--
Project:    Bitcraft Service Desk (An Open Source ITSM Web App)
Lead Devs:  Joshua Nasiatka, Allen Perry, Eugene Duffy
For:        Software Engineering
Dev Date:   Spring 2016
Status:     Staging; Idea Testing; Development
-->
<?php
  if ($_SESSION['user_type'] == 3) {
    echo "<script type='text/javascript'>
      window.location.replace('EndUserPortal.php');
      </script>";
    exit;
  }
?>
<html>
	<!-- head.php contains the stylesheets -->
  	<?php
    include_once 'modules/head.php'; ?>
    <?php echo "<body class='hold-transition skin-$skin sidebar-mini'>"; ?>
    <div class="wrapper">
		<?php
		// build the user interface
		include_once 'modules/header.php';
		include_once 'modules/left_sidebar.php';
		include_once 'modules/page_handling.php';
		include_once 'modules/footer.php';
		include_once 'modules/control_sidebar.php';?>
    </div><!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->
<!-- jQuery -->
<script src="/bower/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/bower/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="/bower/adminlte/dist/js/app.min.js"></script>
<!-- DataTables -->
<script src="/bower/adminlte/plugins/datatables/jquery.dataTables.js"></script>
<script src="/bower/adminlte/plugins/datatables/dataTables.bootstrap.js"></script>
<!-- SlimScroll -->
<script src="/bower/adminlte/plugins/slimScroll/jquery.slimscroll.js"></script>
<!-- FastClick -->
<script src="/bower/adminlte/plugins/fastclick/fastclick.min.js"></script>
<!-- InputMask -->
<script src="/bower/adminlte/plugins/input-mask/jquery.inputmask.js"></script>
<script src="/bower/adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="/bower/adminlte/plugins/input-mask/jquery.inputmask.extensions.js"></script>

<!-- page script -->
<script>
  $(function () {
    $('#active_staff').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
  });

  $(function () {
    $('#recent_activity').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
  });

  $(function () {
    $('#adm_acl').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });

  jQuery(document).ready(function($) {
    $(".clickableRow").click(function() {
        window.document.location = $(this).data("href");
    });
  });
</script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
    <?php
    include_once 'modules/modals.php'; ?>
  </body>
</html>
