<?php
 //load koneksi database
 include '../../koneksi.php';
 
 //ambil data dari form
 $judul_post = $_POST['judul_post'];
 $isi_post = $_POST['isi_post'];

 //simpan data ke database
 $insert = mysqli_query($koneksi, "INSERT INTO tb_about VALUES (
 NULL,
 '$judul_post',
 '$isi_post'
 )");
 //
 //cek apakah proses simpan ke database berhasil
 if($insert){
 //jika berhasil tampilkan pesan berhasil simpan data
 echo "<script>
 alert('Data Berhasil Ditambahkan');
 window.location.href='index.php?page=about';
 </script>";
 }else{
 //jika gagal tampilkan pesan gagal simpan data
 echo "<script>
 alert('Data Gagal Ditambahkan');
 window.location.href='index.php?page=about';
 </script>";
 }
 //
