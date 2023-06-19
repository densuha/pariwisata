<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website Pariwisata - Slide</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
</head>

<body>
  <?php include 'navbar.php'; ?> <!-- File navbar.php -->

  <?php
  include 'koneksi.php'; // Import file koneksi.php

  $query = "SELECT * FROM slides";
  $result = $conn->query($query);
  ?>

  <header class="header-section">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <ol class="carousel-indicators">
        <?php
        $i = 0;
        while ($row = $result->fetch_assoc()) {
          $active = ($i == 0) ? 'class="active"' : '';
          echo '<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="' . $i . '" ' . $active . '></li>';
          $i++;
        }
        ?>
      </ol>
      <div class="carousel-inner">
        <?php
        $i = 0;
        $result->data_seek(0); // Kembali ke posisi awal hasil query
        while ($row = $result->fetch_assoc()) {
          $active = ($i == 0) ? 'active' : '';
          echo '<div class="carousel-item ' . $active . '">';
          echo '<img src="' . $row['image_path'] . '" class="d-block w-100" alt="' . $row['image_alt'] . '">';
          echo '</div>';
          $i++;
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

  <!-- ... -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>