<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery - Website Pariwisata</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
</head>

<body>
  <!--p include '/admin/header/header.php'; ?>  File navbar.php -->

  <section class="gallery-section py-5">
    <div class="container">
      <h2 class="mb-4">Galeri Destinasi</h2>
      <div class="row">
        <?php
        // Koneksi ke database
        include 'koneksi.php';

        // Query untuk mengambil data foto destinasi
        $query = "SELECT * FROM destinasi";
        $result = mysqli_query($koneksi, $query);

        // Menampilkan foto destinasi
        while ($row = mysqli_fetch_assoc($result)) {
          $foto = $row['foto'];
          $namaDestinasi = $row['nama_destinasi'];

          echo '<div class="col-md-4">
                  <div class="card mb-4">
                    <img src="foto/' . $foto . '" class="card-img-top" alt="' . $namaDestinasi . '">
                    <div class="card-body">
                      <h5 class="card-title">' . $namaDestinasi . '</h5>
                      <a href="#" class="btn btn-primary">Lihat Detail</a>
                    </div>
                  </div>
                </div>';
        }

        // Membebaskan hasil query
        mysqli_free_result($result);

        // Menutup koneksi database
        mysqli_close($koneksi);
        ?>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>