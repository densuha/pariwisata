<?php
// Koneksi ke database
include 'koneksi.php';

$query = "SELECT * FROM destinasi";
$result = mysqli_query($koneksi, $query);
$queryKategori = "SELECT * FROM kategori";
$resultKategori = mysqli_query($koneksi, $queryKategori);
$kategoriOptions = '';
while ($rowKategori = mysqli_fetch_assoc($resultKategori)) {
  $kategoriId = $rowKategori['id'];
  $kategoriNama = $rowKategori['nama_kategori'];
  $kategoriOptions .= '<option value="' . $kategoriId . '">' . $kategoriNama . '</option>';
}
if (isset($_GET['kategori'])) {
  $kategoriId = $_GET['kategori'];
  $queryDestinasi = "SELECT * FROM destinasi WHERE id_kategori = $kategoriId";
  $resultDestinasi = mysqli_query($koneksi, $queryDestinasi);
} else {
  $resultDestinasi = $result;
}
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
  <?php include './admin/header/header.php'; ?> <!-- File navbar.php -->

  <section class="search-section py-5">
    <div class="container">
      <h2 class="mb-4">Cari Destinasi Berdasarkan Kategori</h2>
      <form action="" method="GET">
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <select name="kategori" class="form-control">
                <option value="">Pilih Kategori</option>
                <?php echo $kategoriOptions; ?>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <button type="submit" class="btn btn-primary">Cari</button>
          </div>
        </div>
      </form>
    </div>
  </section>

  <section class="destination-section py-5">
    <div class="container">
      <h2 class="mb-4">Hasil Pencarian</h2>
      <div class="row">
        <?php
        while ($rowDestinasi = mysqli_fetch_assoc($resultDestinasi)) {
          $destinasiNama = $rowDestinasi['nama_destinasi'];
          $destinasigambar = $rowDestinasi['gambar'];
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