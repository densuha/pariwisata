<?php
$base_url = "http://localhost/pariwisata/admin";
$page  = $_GET['page'];
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="index3.php" class="brand-link">
    <img src="../../assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Admin Panel
      pariwisata</span>
  </a>
  <div class="sidebar">
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- MENU SIDEBAR / ASIDE -->

        <li class="nav-item">
          <a href="../menu/index.php?page=home" class="nav-link  <?php if ($page == 'home') { ?>active<?php } ?>">
            <i class="nav-icon far fa-image"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="../data_barang/index.php?page=barang" class="nav-link  <?php if ($page == 'barang') { ?>active<?php } ?>">
            <i class="nav-icon far fa-image"></i>
            <p>
              Data Barang
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="../kategori/index.php?page=kategori" class="nav-link  <?php if ($page == 'kategori') { ?>active<?php } ?>">
            <i class="nav-icon far fa-image"></i>
            <p>
              Kategori
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="../social/index.php?page=social" class="nav-link  <?php if ($page == 'social') { ?>active<?php } ?>">
            <i class="nav-icon far fa-image"></i>
            <p>
              Social Media
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="../twitter/index.php?page=twitter" class="nav-link  <?php if ($page == 'twitter') { ?>active<?php } ?>">
            <i class="nav-icon far fa-image"></i>
            <p>
              Twitter
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="../about/index.php?page=about" class="nav-link  <?php if ($page == 'about') { ?>active<?php } ?>">
            <i class="nav-icon far fa-image"></i>
            <p>
              About
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="../slider/index.php?page=slider" class="nav-link  <?php if ($page == 'slider') { ?>active<?php } ?>">
            <i class="nav-icon far fa-image"></i>
            <p>
              Slider
            </p>
          </a>
        </li>
        <!-- SIDEBAR / ASIDE -->
      </ul>
    </nav>
  </div>
</aside>