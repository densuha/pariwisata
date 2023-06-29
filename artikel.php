<?php
// Koneksi ke database
include 'koneksi.php';

// Mendapatkan ID destinasi dari parameter URL
if (isset($_GET['id'])) {
  $idDestinasi = $_GET['id'];
} else {
  // Jika ID destinasi tidak ada, redirect atau berikan pesan kesalahan
  header('Location: index.php');
  exit();
}

// Query untuk mendapatkan data destinasi berdasarkan ID
$query = "SELECT * FROM destinasi WHERE id = $idDestinasi";
$result = mysqli_query($koneksi, $query);
$destinasi = mysqli_fetch_assoc($result);

// Jika data destinasi tidak ditemukan, redirect atau berikan pesan kesalahan
if (!$destinasi) {
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
  <title>Artikel - <?php echo $destinasi['nama_destinasi']; ?></title>
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
  <h1 class="article-title"><strong>Artikel</strong></h1>
  <h2 style="text-align: center;"><?php echo $destinasi['nama_destinasi']; ?></h2>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6">
        <img src="./admin/destinasi/gambar/<?php echo $destinasi['gambar']; ?>" alt="<?php echo $destinasi['nama_destinasi']; ?>" width="660" height="350">
      </div>
      <div class="col-md-6">
        <div class="article-container">
          <p><?php echo $destinasi['deskripsi']; ?></p>
        </div>
      </div>
    </div>
  </div>
  <?php include './admin/footer.php'; ?>
  <script type="text/javascript" src="assets_front/js/jquery-1.6.1.min.js"></script>
  <script type="text/javascript" src="assets_front/js/jquery.nivo.slider.pack.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>