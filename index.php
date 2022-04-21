<?php session_start();
if(empty($_SESSION['sidebar'])) {
$_SESSION['sidebar'] = array('url' => 'modules/dashboard/dashboard.php','menu' => 'dash'); } ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>
  <link rel="shortcut icon" href="img/sys/logo.png" />
  <!-- Font Awesome -->
  <link href="assets/plugins/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <!-- spinner -->
  <link rel="stylesheet" href="assets/css/spinkit.min.css">
  <!-- overlayscroller -->
  <link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/css/adminlte.min.css">
  <!-- DATA TABLES -->
  <link href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
  <link href="assets/plugins/datatables/jquery.dataTables.yadcf.css" rel="stylesheet" type="text/css" />
  <!-- DATA TABLES -->
  <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
  <!-- sweet alerts -->
  <link rel="stylesheet" href="assets/plugins/sweetalert2/sweetalert2.min.css">
  <link rel="stylesheet" type="text/css" href="assets/plugins/selectize/css/selectize.css" />
  <link rel="stylesheet" type="text/css" href="assets/plugins/selectize/css/selectize.bootstrap4.css" />
  <!-- toastr -->
  <link rel="stylesheet" href="assets/plugins/toastr/toastr.min.css">
  <!-- Animate -->
  <link href="assets/css/animate.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/plugins/fancybox/jquery.fancybox.min.css">
  <style>.linker{cursor:pointer;}.modal-backdrop {opacity:0 !important;}</style>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="assets/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
<div id="div_topbar"></div>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    <div id="div_sidebar"></div>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" id="div_content">

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<div id="div_footer"></div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<div id="main_modal1" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" id="class_modal1" role="document">
    <div class="modal-content">
      <div id="div_modal_content1"></div>
    </div>
  </div>
</div>
<div id="main_modal2" class="modal fade" tabindex="-1" role="dialog" style="margin-top: 25px">
  <div class="modal-dialog" id="class_modal2" role="document">
    <div class="modal-content">
      <div id="div_modal_content2"></div>
    </div>
  </div>
</div>

<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap Switch -->
<script src="assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/js/adminlte.js"></script>
<script src="assets/plugins/inputmask/jquery.inputmask.bundle.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- DATA TABES SCRIPT -->
<script src="assets/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js" type="text/javascript"></script>
<script src="assets/plugins/datatables/jquery.dataTables.yadcf.js" type="text/javascript"></script>
<script src="assets/plugins/tabledit/tabledit.js"></script>
<!-- sweetalerts -->
<script src="assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Page script -->
<script src="assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- toastr -->
<script src="assets/plugins/toastr/toastr.min.js"></script>
<script src="assets/plugins/jqueryprint/printpage.js"></script>
<!-- scrollbars -->
<script src="assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="assets/plugins/fancybox/jquery.fancybox.min.js"></script>
<script src="assets/plugins/tippy/popper.min.js"></script>
<script src="assets/plugins/tippy/tippy.min.js"></script>
<script src="assets/plugins/countup/countUp.min.js"></script>
<script src="assets/plugins/selectize/js/selectize.js"></script>
<!-- ChartJS -->
<!-- dashboard -->
<script src="assets/js/app.js" type="text/javascript"></script>
<script>
    setTimeout(() => loadModule('<?php echo $_SESSION['sidebar']['url'] ?>','<?php echo $_SESSION['sidebar']['menu'] ?>'),200)
</script>
</body>
</html>
