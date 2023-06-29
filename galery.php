<?php
// Koneksi ke database
include 'koneksi.php';

$query = "SELECT * FROM galery";
$result = mysqli_query($koneksi, $query);

$galeryPerHalaman = 4;
$totalgalery = mysqli_num_rows($result);

$totalHalaman = ceil($totalgalery / $galeryPerHalaman);

$halamanAktif = isset($_GET['page']) ? $_GET['page'] : 1;
$batasAwal = ($halamanAktif - 1) * $galeryPerHalaman;

$query = "SELECT * FROM galery LIMIT $batasAwal, $galeryPerHalaman";
$result = mysqli_query($koneksi, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website Pariwisata</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="assets_front/css/orman.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="assets_front/css/nivo-slider.css" type="text/css" media="screen" />
  <script type="text/javascript" src="assets_front/js/jquery.min.js"></script>
  <link rel="stylesheet" href="assets_front/css/slimbox2.css" type="text/css" media="screen" />
  <script type="text/JavaScript" src="assets_front/js/slimbox2.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <?php
  include "./admin/header/header.php";
  ?>
</nav>

<body>

  <br>

  <section class="destination-section py-5">
    <div class="container">
      <h2 class="mb-4">galery kelompok</h2>
      <div class="row">
        <?php
        mysqli_data_seek($result, 0);
        while ($row = mysqli_fetch_assoc($result)) {
          $galeryNama = $row['nama_gambar'];
          $galerygambar = $row['gambar'];
        ?>
          <div class="col-md-3">
            <div class="card mb-4">
              <img width="100" height="300" src="./admin/galery/gambar/<?php echo $galerygambar; ?>" class="card-img-top" alt="<?php echo $galeryNama; ?>" alt="<?php echo $NIM; ?>">
              <div class="card-body">
                <h5 class="card-title"><?php echo $galeryNama; ?></h5>
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