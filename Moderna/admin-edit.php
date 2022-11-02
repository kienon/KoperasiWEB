<?php session_start(); ?>
<?php
    if(isset($_SESSION['username'])) {
?>
<?php 
include 'admin/admin-header.php';
require('db_connect.php');
$id=$_REQUEST['id'];
$query = "SELECT * from user where id='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
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
        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['username'];  ?></span>
      </a><!-- End Profile Iamge Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <h6><?php echo $_SESSION['username'];  ?></h6>
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
    <a class="nav-link collapsed" href="#">
      <i class="bi bi-globe"></i>
      <span>Website Setting</span>
    </a>
  </li>

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
          <i class="bi bi-circle"></i><span>View All Admin</span>
        </a>
      </li>
    </ul>
  </li><!-- End Tables Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="#">
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
        <a class="nav-link collapsed" href="#">
        <i class="bi bi-images"></i>
          <span>Gallery</span>
        </a>
      </li>

  <li class="nav-item">
        <a class="nav-link collapsed" href="#">
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
      <h1>Edit Details</h1>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        
          <div class="card">
            <div class="card-body"><br>
               <?php
               $status = "";
               if(isset($_POST['new']) && $_POST['new']==1)
               {
               $id=$_REQUEST['id'];
               $name =$_REQUEST['uid'];
               $email =$_REQUEST['mail'];
               $pwd =$_REQUEST['pwd'];
               if(empty($pwd)) {
                $update="UPDATE `user` SET `name` = '$name', `email` = '$email' WHERE `id` = '$id';";
               } 
                else {
                $hashpwd = password_hash($pwd, PASSWORD_DEFAULT);
                $update="UPDATE `user` SET `name` = '$name', `email` = '$email', `password` = '$pwd' WHERE `id` = '$id';";
               }
               mysqli_query($conn, $update) or die(mysqli_error());
               $status = "Record Updated Successfully. </br></br>
               <a href='admin-view.php'>View Updated Record</a>";
               echo '<p style="color:#FF0000;">'.$status.'</p>';
               }else {
               ?>
              <!-- Horizontal Form -->
              <form action="" method="POST">
              <input type="hidden" name="new" value="1" />
              <input name="id" type="hidden" value="<?php echo $row['id'];?>" />
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="uid" class="form-control" id="inputText" value="<?php echo $row['name'] ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" name="mail" class="form-control" id="inputEmail" value="<?php echo $row['email'] ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">New Password (leave blank if not change)</label>
                  <div class="col-sm-10">
                    <input type="password" name="pwd" class="form-control">
                  </div>
                </div>
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                  <div class="col-sm-10">
                    <?php if ($row['status']==2) { ?>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="admin" id="gridRadios1" value="2" checked>
                      <label class="form-check-label" for="gridRadios1">
                        ordinary admin
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="admin" id="gridRadios2" value="1">
                      <label class="form-check-label" for="gridRadios2">
                        priviledge admin
                      </label>
                    </div>
                    <?php }else {?>
                        <div class="form-check">
                      <input class="form-check-input" type="radio" name="admin" id="gridRadios1" value="2">
                      <label class="form-check-label" for="gridRadios1">
                        ordinary admin
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="admin" id="gridRadios2" value="1" checked>
                      <label class="form-check-label" for="gridRadios2">
                        priviledge admin
                      </label>
                    </div>
                    <?php } ?>   
                  </div>
                </fieldset>
                
                <div class="text-center">
                  <button type="submit" name="signup-submit" class="btn btn-primary">Submit</button>
                  <!--<button onclick="history.back()" class="btn btn-secondary">Back</button>-->
                </div>
              </form><!-- End Horizontal Form -->
              <?php } ?>
            </div>
          </div>

          <div class="card">
           
          </div>

        

        
      </div>
    </section>

  </main><!-- End #main -->

<?php include 'admin/admin-footer.php' ?>
<?php 
    } else {
        header("Location: ../Moderna/admin-login?error=login_first");
        exit();
    }
 ?>   