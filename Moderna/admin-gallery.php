<?php session_start(); ?>
<?php
    if(isset($_SESSION['username'])) {
?>
<?php 
include 'admin/admin-header.php';
include 'db_connect.php';
$query = $conn->query("SELECT * FROM images ORDER BY uploaded_on DESC");
?>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="admin-index" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block">FEDBORONG ADMIN</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="admin-assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['username']; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $_SESSION['username']; ?></h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
            <form name="myform" action='admin/admin-logout-inc' method='POST'>  
              <a class="dropdown-item d-flex align-items-center" href="javascript: submitform()">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
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
        <a class="nav-link " href="admin-index">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people"></i><span>Manage Admin</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="admin-register">
              <i class="bi bi-circle"></i><span>Add Admin</span>
            </a>
          </li>
          <li>
            <a href="admin-view">
              <i class="bi bi-circle"></i><span>View all Admin</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="admin-slides">
          <i class="bi bi-file-slides"></i>
          <span>Slides</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-shop"></i>
          <span>Keahlian</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="admin-gallery">
        <i class="bi bi-images"></i>
          <span>Gallery</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-card-heading"></i>
          <span>Jawatan Kosong</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-sort-numeric-down"></i>
          <span>Counter</span>
        </a>
      </li>

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

     <div class="pagetitle">
       <h1>Slides</h1>
     </div><!-- End Page Title -->
    
     <section class="section">
      <div>
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Image</h5>
              <!-- Vertical Form -->
              <form action="admin/admin-upload-gallery.php" method="POST" enctype= "multipart/form-data" class="row g-3">
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Select Image to add</label>
                  <input type="file" name="file" class="form-control" id="inputNanme4">
                </div>
                <div class="text-center">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form><!-- Vertical Form -->
            </div>
          </div>
        </div>
      </div>
      <div class="row align-items-top">
      <?php if(mysqli_num_rows($query) > 0){
        while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["file_name"];
        $date = $row['uploaded_on'] ?>
        <div class="col-lg-3">

          <!-- Special title treatmen -->
          <div class="card text-center">
            <div class="card-header">
            <img src="<?php echo $imageURL; ?>" class="card-img" alt="...">
            </div>
            <div class="card-body">
              <p>Uploaded on : </p><p><?php echo $date ?></p>
                   <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#verticalycentered-<?php echo $row['id'] ?>">
                     Delete
                    </button>
                     <!-- Vertically centered Modal -->
                      <div class="modal fade" id="verticalycentered-<?php echo $row['id'] ?>" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              Are you sure want to delete <?php echo $row['file_name'] ?>?
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                              <a href="admin/admin-delete-gallery?id=<?php echo $row['id'] ?>&name=<?php echo $imageURL ?>" class="btn btn-danger">Confirm</a>
                            </div>
                          </div>
                        </div>
                      </div><!-- End Vertically centered Modal-->
            </div>
          </div><!-- End Special title treatmen -->
        </div>
        <?php }
          }else{ echo "Tiada gambar ditemui"; } ?>
      </div>
    </section>

  </main>



 <!-- ======= Footer ======= -->
 <?php include 'admin/admin-footer.php' ?>
<?php 
    } else {
        header("Location: ../Moderna/admin-login?error=login_first");
        exit();
    }
 ?>  