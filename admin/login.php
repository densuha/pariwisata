<?php
session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

if (isset($_SESSION['username'])) {
  header('location: menu/index.php');
}

if (isset($_POST['submit'])) {
  include("koneksi.php");

  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($koneksi, $sql);

  if ($result->num_rows > 0) {
    $row = mysqli_fetch_array($result);
    $_SESSION['username'] = $row['username'];
    $_SESSION['id'] = $row['id'];

    header('location: menu/index.php');
    exit();
  } else {
    echo "<script>alert('Username salah')</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css" />
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css" />
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="index2.html"><b>Dendi_</b><b>Suhada</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Silahkan Sign Terlebih Dahulu</p>

        <form action="login.php" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" name="username" />
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password" />
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember" />
                <label for="remember"> Remember Me </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block" name="submit">
                Masuk
              </button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.social-auth-links -->
      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="assets/dist/js/adminlte.min.js"></script>
</body>

</html>