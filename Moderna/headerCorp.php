<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Team - Moderna Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna - v4.10.1
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  * Redesigned: TFP Solution Sdn Bhd
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="./"><span>Federasi</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
    <ul id="menu" class="menu">
        <li class="nav-item">
            <a href="http://fedskm.ddns.net" class=" <?php if(basename($_SERVER['PHP_SELF'])=="http://fedskm.ddns.net"){
                echo "active";}
                else{
                    echo "";
                    }?>">Halaman Utama</a>

            <li class="dropdown"><a href="#" class="active"><span>Info Korporat</span> <i class="bi bi-chevron-down active"></i></a>
            <ul>
              <li>
              <a href="companyprofile" class="nav-link <?php if(basename($_SERVER['PHP_SELF'])=="corporateprofile"){
                echo "active";
            }else{
                echo "";
            }?>">Profil Syarikat</a>
              </li>
              <li>
              <a href="vm" class="nav-link <?php if(basename($_SERVER['PHP_SELF'])=="vm"){
                echo "active";
            }else{
                echo "";
            }?>">Visi & Misi</a>
              </li>
              <li>
              <a href="boardmember" class="nav-link <?php if(basename($_SERVER['PHP_SELF'])=="boardmember"){
                echo "active";
            }else{
                echo "";
            }?>">Ahli Lembaga</a>
              </li>
              <li>
              <a href="penghargaan" class="nav-link <?php if(basename($_SERVER['PHP_SELF'])=="penghargaan"){
                echo "active";
            }else{
                echo "";
            }?>">Penghargaan</a>
              </li>
            </ul>
          </li>


          <li class="dropdown"><a href="#"><span>Media</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li>
              <a href="buletin" class="nav-link <?php if(basename($_SERVER['PHP_SELF'])=="buletin"){
                echo "active";
            }else{
                echo "";
            }?>">Buletin & Acara</a>
              </li>
              <li>
              <a href="report" class="nav-link <?php if(basename($_SERVER['PHP_SELF'])=="report"){
                echo "active";
            }else{
                echo "";
            }?>">Laopran Tahunan</a>
              </li>
              <li>
              <a href="gallery" class="nav-link <?php if(basename($_SERVER['PHP_SELF'])=="gallery"){
                echo "active";
            }else{
                echo "";
            }?>">Galeri</a>
              </li>
            </ul>
          </li>

          <a href="membership" class="nav-link <?php if(basename($_SERVER['PHP_SELF'])=="membership"){
                echo "active";
            }else{
                echo "";
            }?>">Keahlian</a>

            <a href="career" class="nav-link <?php if(basename($_SERVER['PHP_SELF'])=="career"){
                echo "active";
            }else{
                echo "";
            }?>">Kerjaya</a>

            <a href="./#contact" class="nav-link <?php if(basename($_SERVER['PHP_SELF'])=="./#contact"){
                echo "active";
            }else{
                echo "";
            }?>">Hubungi Kami</a>

          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
  </header><!-- End Header -->