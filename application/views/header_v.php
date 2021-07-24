<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PPDB</title>

  <link rel="shortcut icon" href="<?php echo base_url("assets/img/") ?>favicon.ico" type="image/x-icon">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/plugins/summernote/summernote-bs4.min.css">
   <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <!-- script -->
  
    <!-- jQuery -->
    <script src="<?php echo base_url('assets') ?>/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url('assets') ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url('assets') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?php echo base_url('assets') ?>/plugins/chart.js/Chart.min.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url('assets') ?>/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url('assets') ?>/plugins/moment/moment.min.js"></script>
    <script src="<?php echo base_url('assets') ?>/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo base_url('assets') ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?php echo base_url('assets') ?>/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo base_url('assets') ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('assets') ?>/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('assets') ?>/js/demo.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?php echo base_url('assets') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('assets') ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url('assets') ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url('assets') ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?php echo base_url('assets') ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url('assets') ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo base_url('assets') ?>/plugins/jszip/jszip.min.js"></script>
    <script src="<?php echo base_url('assets') ?>/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?php echo base_url('assets') ?>/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?php echo base_url('assets') ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url('assets') ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url('assets') ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- <script src="<?php echo base_url('assets') ?>/js/pages/dashboard.js"></script> -->
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?php echo base_url('assets') ?>/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url("log/out") ?>" role="button">
          Logout
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url('assets') ?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PPDB</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('assets') ?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $data_user['firstname']." ".$data_user['lastname'] ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <?php foreach ($menu as $key => $value) { ?>
            <li class="nav-item">
            <a href="<?php echo $value['url'] ?>" class="nav-link <?php echo $value['is_active'] ?>">
              <i class="nav-icon fas <?php echo $value['icon'] ?>"></i>
              <p>
                <?php echo $value['name'] ?>
              </p>
            </a>
          </li>
        <?php } ?>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  