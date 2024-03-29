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
              <h5 class="card-title">Tambah Pentadbir</h5>

              <!-- Horizontal Form -->
              <form action="admin/admin-signup-inc" method="POST">
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" name="uid" class="form-control" id="inputText">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Emel</label>
                  <div class="col-sm-10">
                    <input type="email" name="mail" class="form-control" id="inputEmail">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Kata Laluan</label>
                  <div class="col-sm-10">
                    <input type="password" name="pwd" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Sahkan Kata Laluan </label>
                  <div class="col-sm-10">
                    <input type="password" name="pwd-repeat" class="form-control">
                  </div>
                </div>
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="admin" id="gridRadios1" value="2" checked>
                      <label class="form-check-label" for="gridRadios1">
                        Pentadbir
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="admin" id="gridRadios2" value="1">
                      <label class="form-check-label" for="gridRadios2">
                        Pentadbir Utama
                      </label>
                    </div>
                    
                  </div>
                </fieldset>
                
                <div class="text-center">
                  <button type="submit" name="signup-submit" class="btn btn-primary">Hantar</button>
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