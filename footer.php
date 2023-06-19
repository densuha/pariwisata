<div id="templatemo_bottom"><span class="bf bft"></span><span class="bf bfb"></span>

  <div class="col col_4">
    <h4>Social</h4>
    <?php 
      include "koneksi.php";
      $query = mysqli_query($koneksi, "SELECT * FROM  tb_social");
      while ($data = mysqli_fetch_array($query)) {
      ?>
    <p><a class="text-left" href="<?=$data['link'] ?>"><?=$data['nama_sosmed'] ?> <p></p> <img width="35"
          src="admin/social/gambar/<?= $data['icon']; ?>"></a></p>
    <?php } ?>

  </div>

  <?php 

include "koneksi.php";
                  $query = mysqli_query($koneksi, "SELECT * FROM  tb_twitter");
                  while ($data = mysqli_fetch_array($query)) {

                  ?>
  <div class="col col_3">
    <h4>Twitter</h4>
    <h5><?=$data['judul'] ?></h5>
    <p><?= $data['isi'] ?></p>
  </div>
  <?php } ?>

  <?php
 
include "koneksi.php";
                  $query = mysqli_query($koneksi, "SELECT * FROM  tb_about");
                  while ($data = mysqli_fetch_array($query)) {

                  ?>
  <div class="col col_3">
    <h4>About</h4>
    <h4><?= $data['judul'] ?></h4>
    <p><?= $data['isi'] ?></p>
  </div>
  <?php } ?>
  <div class="clear"></div>
</div>