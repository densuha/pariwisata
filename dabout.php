<?php
// Koneksi ke database
include 'koneksi.php';
if (isset($_GET['id'])) {
  $idabout = $_GET['id'];
} else {
  header('Location: index.php');
  exit();
}

$query = "SELECT * FROM about WHERE id = $idabout";
$result = mysqli_query($koneksi, $query);
$about = mysqli_fetch_assoc($result);

if (!$about) {
  header('Location: index.php');
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <br>
  <title>Artikel - <?php echo $about['judul']; ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="assets_front/css/orman.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="assets_front/css/nivo-slider.css" type="text/css" media="screen" />
  <script type="text/javascript" src="assets_front/js/jquery.min.js"></script>
  <link rel="stylesheet" href="assets_front/css/slimbox2.css" type="text/css" media="screen" />
  <script type="text/JavaScript" src="assets_front/js/slimbox2.js"></script>
  <style>
    .article-container {
      border: 1px solid #fff;
      padding: 70px;
      background-color: rgba(255, 255, 255, 0.8);
      display: flex;
      align-items: left;
      padding-top: 0px;
      border-left-width: 0px;
      padding-left: 20px;
      padding-right: 0px;
      padding-bottom: 0px;
    }

    .article-container p {
      flex-grow: 1;
    }

    .article-title {
      text-align: center;
      margin-bottom: 40px;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <?php
    include "./admin/header/header.php";
    ?>
  </nav>
  <br>
  <br>
  <h1 class="article-title"><strong>About Tentang kelompok</strong></h1>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6">
        <img src="./admin/about/gambar/<?php echo $about['gambar']; ?>" alt="<?php echo $about['judul']; ?>" width="470" height="350">
      </div>
      <div class="col-md-6">
        <div class="article-container">
          <p><?php echo $about['judul']; ?></p>
          <p><?php echo $about['isi']; ?></p>

        </div>
        <p>
          <a href="about.php" class="btn btn-primary" style="
    margin-left: 250px; 
    margin-top: 10px; ">kembali ke menu</a>
        </p>
      </div>
    </div>
  </div>
  <?php include './admin/footer.php'; ?>
  <script type="text/javascript" src="assets_front/js/jquery-1.6.1.min.js"></script>
  <script type="text/javascript" src="assets_front/js/jquery.nivo.slider.pack.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>