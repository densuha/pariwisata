<?php
// Koneksi ke database
include 'koneksi.php';


$query = "SELECT * FROM destinasi";
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
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <?php
    include "./admin/header/header.php";
    ?>
  </nav>

  <header class="header-section">
    <div id="carouselExampleIndicators" class="carousel slide slide-center" data-bs-ride="carousel">
      <ol class="carousel-indicators">
        <?php

        $active = "active";
        $destinasiCount = mysqli_num_rows($result);
        for ($i = 0; $i < $destinasiCount; $i++) {
        ?>
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $i; ?>" class="<?php echo $active; ?>"></li>
        <?php
          $active = "";
        }
        ?>
      </ol>
      <div class="carousel-inner">
        <?php

        mysqli_data_seek($result, 0);


        $active = "active";
        while ($row = mysqli_fetch_assoc($result)) {
          $destinasiId = $row['id'];
          $destinasigambar = $row['gambar'];
        ?>
          <div class="carousel-item <?php echo $active; ?>">
            <img src="./admin/destinasi/gambar/<?php echo $destinasigambar; ?>" class="d-block w-1" alt="Destinasi <?php echo $destinasiId; ?>">
          </div>
      </div>
    <?php
          $active = "";
        }
    ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
    </div>
  </header>

  <section class="hero-section text-center py-5">
    <div class="container">
      <form class="form-inline justify-content-center mb-4">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Cari destinasi...">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit">Cari</button>
          </div>
        </div>
      </form>
    </div>
  </section>

  <section class="destination-section py-5">
    <div class="container">
      <h2 class="mb-4">Destinasi Terpopuler</h2>
      <div class="row">
        <?php
        mysqli_data_seek($result, 0);
        while ($row = mysqli_fetch_assoc($result)) {
          $destinasiNama = $row['nama_destinasi'];
          $destinasigambar = $row['gambar'];
        ?>
          <div class="col-md-4">
            <div class="card mb-4">
              <img src="./admin/destinasi/gambar/<?php echo $destinasigambar; ?>" class="card-img-top" alt="<?php echo $destinasiNama; ?>">
              <div class="card-body">
                <h5 class="card-title"><?php echo $destinasiNama; ?></h5>
                <p class="card-text">Deskripsi destinasi</p>
                <a href="#" class="btn btn-primary">Lihat Detail</a>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>