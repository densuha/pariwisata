 <!-- Main content -->
 <div class="content">
     <div class="container-fluid">
         <?php
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
                switch ($page) {
                    case 'menu':
                        include "pariwisata/destinasi/index.php";
                        break;
                    case 'destinasi':
                        include "pariwisata/destinasi/index.php";
                        break;
                    case 'kategori':
                        include "pariwisata/kategori/index.php";
                        break;
                    case 'galery':
                        include "pariwisata/galery/index.php";
                        break;
                    case 'social':
                        include "pariwisata/kategori/index.php";
                        break;
                    default:
                        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                        break;
                }
            } else {
                include "/menu/index.php";
            }

            ?>
     </div><!-- /.container-fluid -->
 </div>
 <!-- /.content -->