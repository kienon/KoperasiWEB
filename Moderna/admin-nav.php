  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
  <?php 
  require('db_connect.php'); 
   $id = $_SESSION['username'];
     $user = "SELECT * FROM user WHERE name = '$id'";
     $admins = mysqli_fetch_assoc($conn->query($user) );
  ?>
  <div class="d-flex align-items-center justify-content-between">
      <a href="admin-index" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block">FEDBORONG</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">        

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $admins['name'];  ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $_SESSION['username'];  ?></h6>
              <span>Pentadbir</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
            <form name="myform" action='admin/admin-logout-inc' method='POST'>  
              <a class="dropdown-item d-flex align-items-center" href="javascript: submitform()">
                <i class="bi bi-box-arrow-right"></i>
                <span>Log Keluar</span>
              </a>
            </form>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed " href="admin-index">
          <i class="bi bi-grid"></i>
          <span>Paparan Utama</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <?php if ($admins['status'] == 1) { ?>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people"></i><span>Urus Pentadbir</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="admin-register">
              <i class="bi bi-circle"></i><span>Tambah Pentadbir</span>
            </a>
          </li>
          <li>
            <a href="admin-view">
              <i class="bi bi-circle"></i><span>Senarai Pentadbir</span>
            </a>
          </li>
        </ul>
      </li><!-- End Admin Nav -->
      <?php } else { ?>

      <?php }?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="admin-slides">
          <i class="bi bi-file-slides"></i>
          <span>Gambar Latar</span>
        </a>
      </li><!-- End Slides Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav2" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people"></i><span>Keahlian</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="admin-member-add">
              <i class="bi bi-circle"></i><span>Tambah Keahlian</span>
            </a>
          </li>
          <li>
            <a href="admin-membership">
              <i class="bi bi-circle"></i><span>Senarai Keahlian</span>
            </a>
          </li>
        </ul>
      </li><!-- End Keahlian Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="admin-gallery">
        <i class="bi bi-images"></i>
          <span>Galeri</span>
        </a>
      </li><!-- End Gallery Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav3" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people"></i><span>Jawatan Kosong</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav3" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="admin-job-add">
              <i class="bi bi-circle"></i><span>Tambah Jawatan</span>
            </a>
          </li>
          <li>
            <a href="admin-job">
              <i class="bi bi-circle"></i><span>Senarai Jawatan</span>
            </a>
          </li>
        </ul>
      </li><!-- End Jawatan Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="./admin-counter">
          <i class="bi bi-sort-numeric-down"></i>
          <span>Perkhidmatan</span>
        </a>
      </li>

    </ul>

  </aside><!-- End Sidebar-->