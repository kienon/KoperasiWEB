<?php session_start(); ?>
<?php
    if(isset($_SESSION['username'])) {
?>
<?php 
include 'admin/admin-header.php';
require('db_connect.php');
$id=$_REQUEST['id'];
$query = "SELECT * from counter where id='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
?>
<body>

<?php include 'admin-nav.php'?>

</header><!-- End Header -->

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
               $name =$_REQUEST['name'];
               $count =$_REQUEST['count'];
               if(empty($count)) {
                $update="UPDATE `counter` SET `name` = '$name', `count` = '$count' WHERE `id` = '$id';";
               } 
                else {
                $update="UPDATE `counter` SET `name` = '$name', `count` = '$count' WHERE `id` = '$id';";
               }
               mysqli_query($conn, $update) or die(mysqli_error());
               $status = "Record Updated Successfully. </br></br>
               <a href='admin-counter.php'>View Updated Record</a>";
               echo '<p style="color:#FF0000;">'.$status.'</p>';
               }else {
               ?>
              <!-- Horizontal Form -->
              <form action="" method="POST">
              <input type="hidden" name="new" value="1" />
              <input name="id" type="hidden" value="<?php echo $row['id'];?>" />
                <div class="row mb-3">
                  <label for="inputname" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="inputText" value="<?php echo $row['name'] ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inpuCount" class="col-sm-2 col-form-label">Count</label>
                  <div class="col-sm-10">
                    <input type="count" name="count" class="form-control" id="inputCount" value="<?php echo $row['count'] ?>">
                  </div>
                </div>      
                
                <div class="text-center">
                  <a href="admin-view" class="btn btn-secondary">Back</a>
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