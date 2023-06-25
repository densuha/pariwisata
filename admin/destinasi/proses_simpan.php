<?php
//load koneksi database
include '../../koneksi.php';

$page  = $_GET['page'];

//ambil data dari form
$nama_destinasi_post = $_POST['nama_destinasi_post'];
$deskripsi_post = $_POST['deskripsi_post'];
$kategori_post = $_POST['kategori_post'];
//

//proses upload gambar
$nama_file = $_FILES['gambar_post']['name'];
$source = $_FILES['gambar_post']['tmp_name'];
$folder = './gambar/';

move_uploaded_file($source, $folder . $nama_file);
//
//simpan data ke database
$insert = mysqli_query($koneksi, "INSERT INTO destinasi VALUES (
 NULL,
 '$nama_destinasi_post',
 '$deskripsi_post',
 '$nama_file',
 '$kategori_post'
 )");
//

//cek apakah proses simpan ke database berhasil
if ($insert) {
  //jika berhasil tampilkan pesan berhasil simpan data
  echo "<script>
 alert('Data Berhasil Ditambahkan');
 window.location.href='index.php?page=destinasi';
 </script>";
} else {
  //jika gagal tampilkan pesan gagal simpan data
  echo "<script>
 alert('Data Gagal Ditambahkan');
 window.location.href='index.php?page=destinasi';
 </script>";
}
 //
