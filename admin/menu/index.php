<?php
$page  = $_GET['page'];
?>
<!DOCTYPE html>
<html lang="en" <html>

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Dashboard</title>
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,40
0i,700&display=fallback">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="../../assets/plugins/fontawesomefree/css/all.min.css">
   <!-- Ionicons -->
   <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.cs
s">
   <!-- Tempusdominus Bootstrap 4 -->
   <link rel="stylesheet" href="../../assets/plugins/tempusdominusbootstrap-4/css/tempusdominus-bootstrap-4.min.css">
   <!-- iCheck -->
   <link rel="stylesheet" href="../../assets/plugins/icheckbootstrap/icheck-bootstrap.min.css">
   <!-- JQVMap -->
   <link rel="stylesheet" href="../../assets/plugins/jqvmap/jqvmap.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="../../assets/dist/css/adminlte.min.css">
   <!-- overlayScrollbars -->
   <link rel="stylesheet" href="../../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.c
ss">
   <!-- Daterange picker -->
   <link rel="stylesheet" href="../../assets/plugins/daterangepicker/daterangepicker.css">
   <!-- summernote -->
   <link rel="stylesheet" href="../../assets/plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
   <div class="wrapper">

      <div class="preloader flex-column justify-content-center alignitems-center">
         <img class="animation__shake" src="../../assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
      </div>

      <nav class="main-header navbar navbar-expand navbar-white 
navbar-light">
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
         </ul>
         <ul class="navbar-nav ml-auto">
         </ul>
      </nav>
      <?php include '../sidebar.php'; ?>
      <!-- /.col -->

      <!-- MAIN CONTENT -->
      <div class="content">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-5 col-3">

                  <div class="small-box bg-info">
                     <div class="inner">
                        <h3></h3>
                        <p>destinasi</p>
                     </div>
                     <div class="icon">
                        <i class="ion ion-boxes"></i>
                     </div>
                     <a href="<?= $base_url ?>/destinasi/index.php?page=destinasi" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
               </div>
            </div>
            <!-- /.card-header -->

            <!-- /.card-body -->
            <div class="card-footer clearfix">
            </div>
         </div>
         </section>
         <!-- MAIN CONTENT -->


         <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
               <b>Version</b> 3.2.0
            </div>
         </footer>
         <aside class="control-sidebar control-sidebar-dark">
         </aside>
      </div>
      <!-- jQuery -->
      <script src="../../assets/plugins/jquery/jquery.min.js"></script>
      <!-- jQuery UI 1.11.4 -->
      <script src="../../assets/plugins/jquery-ui/jqueryui.min.js"></script>
      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip --
>
 <script>
 $.widget.bridge('uibutton', $.ui.button)
 </script>
<!-- Bootstrap 4 -->
      <script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- ChartJS -->
      <script src="../../assets/plugins/chart.js/Chart.min.js"></script>
      <!-- Sparkline -->
      <script src="../../assets/plugins/sparklines/sparkline.js"></script>
      <!-- JQVMap -->
      <script src="../../assets/plugins/jqvmap/jquery.vmap.min.js"></script>
      <script src="../../assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
      <!-- jQuery Knob Chart -->
      <script src="../../assets/plugins/jqueryknob/jquery.knob.min.js"></script>
      <!-- daterangepicker -->
      <script src="../../assets/plugins/moment/moment.min.js"></script>
      <script src="../../assets/plugins/daterangepicker/daterangepicker.js"></script>
      <!-- Tempusdominus Bootstrap 4 -->
      <script src="../../assets/plugins/tempusdominus-bootstrap4/js/tempusdominus-bootstrap-4.min.js"></script>
      <!-- Summernote -->
      <script src="../../assets/plugins/summernote/summernotebs4.min.js"></script>
      <!-- overlayScrollbars -->
      <script src="../../assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.
min.js"></script>
      <!-- AdminLTE App -->
      <script src="../../assets/dist/js/adminlte.js"></script>
</body>

</html>