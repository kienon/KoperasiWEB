<?php session_start(); ?>
<?php
    if(isset($_SESSION['username'])) {
?>
<?php 
include 'admin/admin-header.php';
require('db_connect.php');
$id=$_REQUEST['id'];
$query = "SELECT * from jawatan where id='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
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
               $oview =$_REQUEST['overview'];
               $rbili =$_REQUEST['responsibilities'];
               $rment =$_REQUEST['requirements'];
               $dates =$_REQUEST['date'];
               $jobs =$_REQUEST['job'];
               if(empty($jobs)) {
                $update="UPDATE `jawatan` SET `job` = '$jobs', `overview` = '$oview', `responsibilities` = '$rbili', `requirements` = '$rment', `date` = '$dates'  WHERE `id` = '$id';";
               } 
                else {
                $update="UPDATE `jawatan` SET `job` = '$jobs', `overview` = '$oview', `responsibilities` = '$rbili', `requirements` = '$rment', `date` = '$dates'  WHERE `id` = '$id';";
               }
               mysqli_query($conn, $update) or die(mysqli_error());
               $status = "Record Updated Successfully. </br></br>
               <a href='admin-job'>View Updated Record</a>";
               echo '<p style="color:#FF0000;">'.$status.'</p>';
               }else {
               ?>
              <!-- Horizontal Form -->
              <form action="" method="POST">
              <input type="hidden" name="new" value="1" />
              <input name="id" type="hidden" value="<?php echo $row['id'];?>" />
                <div class="row mb-3">
                  <label for="inputTitle3" class="col-sm-2 col-form-label">Job Title</label>
                  <div class="col-sm-10">
                    <input type="text" name="job" class="form-control" id="inputText" value="<?php echo $row['job'] ?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputOview" class="col-sm-2 col-form-label">Job Overview</label>
                  <div class="col-sm-10">
                    <input type="text" name="overview" class="form-control" id="inputText2" value="<?php echo $row['overview'] ?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputResp" class="col-sm-2 col-form-label">Responsibilities</label>
                  <div class="col-sm-10">
                    <input type="text" name="responsibilities" class="form-control" id="inputText3" value="<?php echo $row['responsibilities'] ?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputRequire" class="col-sm-2 col-form-label">Requirements</label>
                  <div class="col-sm-10">
                    <input type="text" name="requirements" class="form-control" id="inputText4" value="<?php echo $row['requirements'] ?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Deadline</label>
                  <div class="col-sm-10">
                    <input type="date" name="date" class="form-control" id="inputDate" value="<?php echo $row['date'] ?>">
                  </div>
                </div>
    
                
                <div class="text-center">
                  <a href="admin-job" class="btn btn-secondary">Back</a>
                  <button type="submit" name="job-submit" class="btn btn-primary">Submit</button>
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
        header("Location: ./admin-login?error=login_first");
        exit();
    }
 ?>   