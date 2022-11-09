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
<?php include 'admin-nav.php';?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Pentadbir</h1>
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
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" name="uid" class="form-control" id="inputText" value="<?php echo $row['name'] ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Emel</label>
                  <div class="col-sm-10">
                    <input type="email" name="mail" class="form-control" id="inputEmail" value="<?php echo $row['email'] ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Kata Laluan Baharu (Silah kosongkan kalau tiada perubahan)</label>
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
                        Pentadbir
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="admin" id="gridRadios2" value="1">
                      <label class="form-check-label" for="gridRadios2">
                        Pentadbir Utama
                      </label>
                    </div>
                    <?php }else {?>
                        <div class="form-check">
                      <input class="form-check-input" type="radio" name="admin" id="gridRadios1" value="2">
                      <label class="form-check-label" for="gridRadios1">
                        Pentadbir
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="admin" id="gridRadios2" value="1" checked>
                      <label class="form-check-label" for="gridRadios2">
                        Pentadbir Utama
                      </label>
                    </div>
                    <?php } ?>   
                  </div>
                </fieldset>
                
                <div class="text-center">
                  <a href="admin-view" class="btn btn-secondary">Kembali</a>
                  <button type="submit" name="signup-submit" class="btn btn-primary">Hantar</button>
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