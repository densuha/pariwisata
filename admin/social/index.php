<!DOCTYPE html>
<html lang="en" <html>

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>data Social Media</title>
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,40
0i,700&display=fallback">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="../../assets/plugins/fontawesomefree/css/all.min.css">
   <!-- Ionicons -->
   <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.cs
s">
   <!-- Tempusdominus Bootstrap 4 -->
   <link rel="stylesheet" href="../../assets/plugins/tempusdominusbootstrap-4/css/tempusdominus-bootstrap-4.min.css">
   <!-- iCheck -->
   <link rel="stylesheet" href="../../assets/plugins/icheckbootstrap/icheck-bootstrap.min.css">
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

      <div class="preloader flex-column justify-content-center alignitems-center">
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
      <div class="content-wrapper">
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6">
                     <h1 class="m-0">Social Media</h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Data
                           Social Media</li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
         <!-- MAIN CONTENT -->
         <section class="content">
            <div class="card">
               <div class="card-header">
                  <h3 class="card-title">Tabel Social Media</h3>
                  <a href="tambah.php?page=social" class="btn btn-primary 
float-right">Tambah Data</a>
               </div>
               <!-- /.card-header -->
               <div class="card-body">
                  <table class="table table-bordered">
                     <thead>
                        <tr>
                           <th style="width: 10px">No</th>
                           <th>Nama Social Media</th>
                           <th>Link Social Media</th>
                           <th>Icon Social Media</th>
                           <th>Aksi</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                        include '../../koneksi.php';
                        $no = 1;
                        $query = mysqli_query($koneksi, "SELECT * FROM social");
                        while ($data =
                           mysqli_fetch_array($query)
                        ) {
                        ?>
                           <tr>
                              <td><?= $no++; ?></td>
                              <td><?= $data['nama_sosmed']; ?></td>
                              <td><?= $data['link']; ?></td>
                              <td class="text-center"><img width="100" src="gambar/<?= $data['gambar']; ?>" width="100px"></td>
                              <td class="text-center">
                                 <a href="edit.php?id=<?=
                                                      $data['id']; ?>&page=social" class="btn btn-warning">Edit</a>
                                 <a href="proses_hapus.php?id=<?=
                                                               $data['id']; ?>&page=social" class="btn btndanger">Hapus</a>
                              </td>
                           </tr>
                        <?php }

                        ?>
                     </tbody>
                  </table>
               </div>
               <!-- /.card-body -->
               <div class="card-footer clearfix">
               </div>
            </div>
         </section>
         <!-- MAIN CONTENT -->
      </div>
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
   <script src="../../assets/plugins/jquery-ui/jqueryui.min.js"></script>
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
   <script src="../../assets/plugins/jqueryknob/jquery.knob.min.js"></script>
   <!-- daterangepicker -->
   <script src="../../assets/plugins/moment/moment.min.js"></script>
   <script src="../../assets/plugins/daterangepicker/daterangepicker.js"></script>
   <!-- Tempusdominus Bootstrap 4 -->
   <script src="../../assets/plugins/tempusdominus-bootstrap4/js/tempusdominus-bootstrap-4.min.js"></script>
   <!-- Summernote -->
   <script src="../../assets/plugins/summernote/summernotebs4.min.js"></script>
   <!-- overlayScrollbars -->
   <script src="../../assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.
min.js"></script>
   <!-- AdminLTE App -->
   <script src="../../assets/dist/js/adminlte.js"></script>
</body>

</html>