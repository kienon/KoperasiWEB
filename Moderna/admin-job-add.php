<?php session_start(); ?>
<?php
    if(isset($_SESSION['username'])) {
?>
<?php include 'admin/admin-header.php' ?>
<body>

<?php include 'admin-nav.php';?>

<main id="main" class="main">

    
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Senarai Jawatan</h5>

              <!-- Horizontal Form -->
              <form action="admin/admin-job-inc" method="POST">
                <div class="row mb-3">
                  <label for="inputTitle" class="col-sm-2 col-form-label">Nama Jawatan</label>
                  <div class="col-sm-10">
                    <input type="text" name="job" class="form-control" id="inputText">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputOview" class="col-sm-2 col-form-label">Gambaran Keseluruhan Kerja</label>
                  <div class="col-sm-10">
                    <input type="text" name="overview" class="form-control" id="inputText">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputResp" class="col-sm-2 col-form-label">Tanggungjawab </label>
                  <div class="col-sm-10">
                    <input type="text" name="responsibilities" class="form-control" id="inputText">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputReqm" class="col-sm-2 col-form-label">Syarat Permohonan </label>
                  <div class="col-sm-10">
                    <input type="text" name="requirements" class="form-control" id="inputText">
                  </div>
                </div>
                
                
                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Tarikh Luput</label>
                  <div class="col-sm-10">
                    <input type="date" name="date" class="form-control" id="inputDate">
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" name="job-submit" class="btn btn-primary">Hantar</button>
                  <!--<button onclick="history.back()" class="btn btn-secondary">Back</button>-->
                </div>
              </form><!-- End Horizontal Form -->

            </div>
          </div>

          <div class="card">
           
          </div>

        </div>

        
      </div>
    </section>

  </main><!-- End #main -->

<?php include 'admin/admin-footer.php' ?>
<?php 
    } else {
        header("Location: ./admin-login?error=login_first");
        exit();
    }
 ?>   