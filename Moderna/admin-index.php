<?php session_start(); ?>
<?php
    if(isset($_SESSION['username'])) {
?>
<?php 
include 'admin/admin-header.php';
include 'db_connect.php';
 ?>
<body>
 
<?php include 'admin-nav.php';?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Paparan Utama</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Jumlah Pentadbir</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $conn->query("SELECT * FROM user")->num_rows ?></h6>
                      <span class="text-success small pt-1 fw-bold"></span>

                    </div>
                  </div>
                </div>

              </div>
            </div>
            <!-- End Sales Card -->

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Jumlah Gambar Latar</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-file-earmark-slides"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $conn->query("SELECT * FROM slides")->num_rows ?></h6>
                      <span class="text-success small pt-1 fw-bold"></span>

                    </div>
                  </div>
                </div>

              </div>
            </div>
            <!-- End Sales Card -->

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Jumlah Galeri</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-images"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $conn->query("SELECT * FROM images")->num_rows ?></h6>
                      <span class="text-success small pt-1 fw-bold"></span>

                    </div>
                  </div>
                </div>

              </div>
            </div>
            <!-- End Sales Card -->

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Jumlah Keahlian</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-shop"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $conn->query("SELECT * FROM keahlian")->num_rows ?></h6>
                      <span class="text-success small pt-1 fw-bold"></span>

                    </div>
                  </div>
                </div>

              </div>
            </div>
            <!-- End Sales Card -->

            

            

            

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">
        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<?php include 'admin/admin-footer.php' ?>
<?php 
    } else {
        header("Location: ./admin-login?error=login_first");
        exit();
    }
 ?>   