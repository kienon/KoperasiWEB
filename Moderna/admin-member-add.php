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
        <div class="col-lg-8">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Senarai Keahlian</h5>

              <!-- Horizontal Form -->
              <form action="admin/admin-member-inc" method="POST">
                <div class="row mb-3">
                  <label for="inputName" class="col-sm-2 col-form-label">Nama Koperasi</label>
                  <div class="col-sm-10">
                    <input type="text" name="Koperasi" class="form-control" id="inputText">
                  </div>
                </div>
                
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Pemborong</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Pemborong" id="gridRadioborong" value="1" checked>
                      <label class="form-check-label" for="gridRadioborong2">
                        Ya
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Pemborong" id="gridRadioborong2" value="2">
                      <label class="form-check-label" for="gridRadioborong2">
                        Tidak
                      </label>
                    </div>
                    
                  </div>
                </fieldset>

                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Peruncit</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Peruncitan" id="gridRadioruncit" value="1" checked>
                      <label class="form-check-label" for="gridRadioruncit">
                        Ya
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Peruncitan" id="gridRadioruncit2" value="2">
                      <label class="form-check-label" for="gridRadioruncit">
                        Tidak
                      </label>
                    </div>
                    
                  </div>
                </fieldset>
                
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Modal Syer</label>
                  <div class="col-sm-10">
                    <input type="number" name="ModalSyer" class="form-control" id="inputModal">
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" name="member-submit" class="btn btn-primary">Submit</button>
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
        header("Location: ../Moderna/admin-login?error=login_first");
        exit();
    }
 ?>   