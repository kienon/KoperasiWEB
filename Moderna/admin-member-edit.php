<?php session_start(); ?>
<?php
    if(isset($_SESSION['username'])) {
?>
<?php 
include 'admin/admin-header.php';
require('db_connect.php');
$id=$_REQUEST['id'];
$query = "SELECT * from keahlian where Id='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
?>
<body>
<?php include 'admin-nav.php';?>
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
               $kopname =$_REQUEST['Koperasi'];
               $pborong = $_POST['Pemborong'];
               $pruncit = $_POST['Peruncitan'];
               $pmodal =$_REQUEST['ModalSyer'];
               
               if(empty($kopname)) {
                $update="UPDATE `keahlian` SET `Koperasi` = '$kopname', `Pemborong` = '$pborong', `Peruncitan` = '$pruncit', `ModalSyer` = '$pmodal' WHERE `Id` = '$id';";
               } 
                else {
                $update="UPDATE `keahlian` SET `Koperasi` = '$kopname', `Pemborong` = '$pborong', `Peruncitan` = '$pruncit', `ModalSyer` = '$pmodal' WHERE `Id` = '$id';";
               }
               mysqli_query($conn, $update) or die(mysqli_error());
               $status = "Record Updated Successfully. </br></br>
               <a href='admin-membership.php'>View Updated Record</a>";
               echo '<p style="color:#FF0000;">'.$status.'</p>';
               }else {
               ?>
              <!-- Horizontal Form -->
              <form action="" method="POST">
              <input type="hidden" name="new" value="1" />
              <input name="Id" type="hidden" value="<?php echo $row['Id'];?>" />
                <div class="row mb-3">
                  <label for="inputName" class="col-sm-2 col-form-label">Nama Koperasi </label>
                  <div class="col-sm-10">
                    <input type="text" name="Koperasi" class="form-control" id="inputKop" value="<?php echo $row['Koperasi'] ?>">
                  </div>
                </div>
                
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Pemborong</legend>
                  <div class="col-sm-10">
                    <?php if ($row['Pemborong']==1) { ?>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Pemborong" id="gridRadioborong" value="1" checked>
                      <label class="form-check-label" for="gridRadioborong">
                        Ya
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Pemborong" id="gridRadioborong2" value="2">
                      <label class="form-check-label" for="gridRadioborong2">
                        Tidak
                      </label>
                    </div>
                    <?php }else {?>
                        <div class="form-check">
                      <input class="form-check-input" type="radio" name="Pemborong" id="gridRadioborong3" value="1">
                      <label class="form-check-label" for="gridRadioborong3">
                        Ya
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Pemborong" id="gridRadioborong4" value="2" checked>
                      <label class="form-check-label" for="gridRadioborong4">
                        Tidak
                      </label>
                    </div>
                    <?php } ?>   
                  </div>
                </fieldset>

                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Peruncit</legend>
                  <div class="col-sm-10">
                    <?php if ($row['Peruncitan']==1) { ?>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Peruncitan" id="gridRadioruncit" value="1" checked>
                      <label class="form-check-label" for="gridRadioruncit">
                        Ya
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Peruncitan" id="gridRadioruncit2" value="2">
                      <label class="form-check-label" for="gridRadioruncit2">
                        Tidak
                      </label>
                    </div>
                    <?php }else {?>
                        <div class="form-check">
                      <input class="form-check-input" type="radio" name="Peruncitan" id="gridRadioruncit3" value="1">
                      <label class="form-check-label" for="gridRadioruncit3">
                       Ya
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Peruncitan" id="gridRadioruncit4" value="2" checked>
                      <label class="form-check-label" for="gridRadioruncit4">
                        Tidak
                      </label>
                    </div>
                    <?php } ?>   
                  </div>
                </fieldset>
                
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Modal Syer</label>
                  <div class="col-sm-10">
                    <input type="number" name="ModalSyer" class="form-control" id="inputModal" value="<?php echo $row['ModalSyer'] ?>">
                  </div>
                </div>

                <div class="text-center">
                  <a href="admin-membership" class="btn btn-secondary">Back</a>
                  <button type="submit" name="member-submit" class="btn btn-primary">Submit</button>
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