<?php
// Koneksi ke database
include 'koneksi.php';

$query = "SELECT * FROM destinasi";
$result = mysqli_query($koneksi, $query);
$destinasiPerHalaman = 4;
$totalDestinasi = mysqli_num_rows($result);
$totalHalaman = ceil($totalDestinasi / $destinasiPerHalaman);
$halamanAktif = isset($_GET['page']) ? $_GET['page'] : 1;
$awal = ($halamanAktif - 1) * $destinasiPerHalaman;
$query = "SELECT * FROM destinasi LIMIT $awal, $destinasiPerHalaman";
$result = mysqli_query($koneksi, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website Pariwisata</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="assets_front/css/orman.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="assets_front/css/nivo-slider.css" type="text/css" media="screen" />
  <script type="text/javascript" src="assets_front/js/jquery.min.js"></script>
  <link rel="stylesheet" href="assets_front/css/slimbox2.css" type="text/css" media="screen" />
  <script type="text/JavaScript" src="assets_front/js/slimbox2.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <?php
    include "./admin/header/header.php";
    ?>
  </nav>


  <div class="header-section">
    <div id="templatemo_slider" class="slider-wrapper theme-orman style=" margin-top:="" 57px;="" margin-left:="" 370px;"="" style="
    top: 55px;
    right: -;
    left: 30px;
">
      <div id="slider" class="nivoSlider">
        <?php
        include "koneksi.php";
        $query = mysqli_query($koneksi, "SELECT * FROM destinasi");
        while ($data = mysqli_fetch_array($query)) {
        ?>
          <img src="admin/destinasi/gambar/<?= $data['gambar'] ?>" alt="image" />
        <?php } ?>
      </div>
    </div>
  </div>
  <br>
  <section class="destination-section py-5">
    <div class="container">
      <h2 class="mb-4">Destinasi Terpopuler</h2>
      <div class="row">
        <?php
        mysqli_data_seek($result, 0);
        while ($row = mysqli_fetch_assoc($result)) {
          $destinasiNama = $row['nama_destinasi'];
          $destinasigambar = $row['gambar'];
          $idDestinasi = $row['id'];
        ?>
          <div class="col-md-3">
            <div class="card mb-4">
              <img width="100" height="300" src="./admin/destinasi/gambar/<?php echo $destinasigambar; ?>" class="card-img-top" alt="<?php echo $destinasiNama; ?>">
              <div class="card-body">
                <h5 class="card-title"><?php echo $destinasiNama; ?></h5>
                <p class="card-text"></p>
                <a href="artikel.php?id=<?php echo $idDestinasi; ?>" class="btn btn-primary">Lihat Detail</a>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
      </div>

      <!-- Pagination -->
      <nav>
        <ul class="pagination justify-content-center">
          <?php if ($halamanAktif > 1) : ?>
            <li class="page-item">
              <a class="page-link" href="?page=<?php echo ($halamanAktif - 1); ?>" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
          <?php endif; ?>

          <?php for ($i = 1; $i <= $totalHalaman; $i++) : ?>
            <?php if ($i == $halamanAktif) : ?>
              <li class="page-item active"><a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php else : ?>
              <li class="page-item"><a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php endif; ?>
          <?php endfor; ?>

          <?php if ($halamanAktif < $totalHalaman) : ?>
            <li class="page-item">
              <a class="page-link" href="?page=<?php echo ($halamanAktif + 1); ?>" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          <?php endif; ?>
        </ul>
      </nav>
    </div>
  </section>

  <?php include './admin/footer.php'; ?>
  <script type="text/javascript" src="assets_front/js/jquery-1.6.1.min.js"></script>
  <script type="text/javascript" src="assets_front/js/jquery.nivo.slider.pack.js"></script>
  <script type="text/javascript">
    $(window).load(function() {
      $('#slider').nivoSlider({
        controlNav: false,
        directionNavHide: false
      });
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>