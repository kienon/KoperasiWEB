<?php session_start(); ?>
<?php
    if(isset($_SESSION['username'])) {
?>
<?php 
include 'admin/admin-header.php';
include 'db_connect.php';
$query = $conn->query("SELECT * FROM images ORDER BY uploaded_on DESC");
?>

<body>

<?php include 'admin-nav.php';?>

  <main id="main" class="main">

     <div class="pagetitle">
       <h1>Slides</h1>
     </div><!-- End Page Title -->
    
     <section class="section">
      <div>
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Image</h5>
              <!-- Vertical Form -->
              <form action="admin/admin-upload-gallery.php" method="POST" enctype= "multipart/form-data" class="row g-3">
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Select Image to add</label>
                  <input type="file" name="file" class="form-control" id="inputNanme4">
                </div>
                <div class="text-center">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form><!-- Vertical Form -->
            </div>
          </div>
        </div>
      </div>
      <div class="row align-items-top">
      <?php if(mysqli_num_rows($query) > 0){
        while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["file_name"];
        $date = $row['uploaded_on'] ?>
        <div class="col-lg-3">

          <!-- Special title treatmen -->
          <div class="card text-center">
            <div class="card-header">
            <img src="<?php echo $imageURL; ?>" class="card-img" alt="...">
            </div>
            <div class="card-body">
              <p>Uploaded on : </p><p><?php echo $date ?></p>
                   <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#verticalycentered-<?php echo $row['id'] ?>">
                     Delete
                    </button>
                     <!-- Vertically centered Modal -->
                      <div class="modal fade" id="verticalycentered-<?php echo $row['id'] ?>" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              Are you sure want to delete <?php echo $row['file_name'] ?>?
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                              <a href="admin/admin-delete-gallery?id=<?php echo $row['id'] ?>&name=<?php echo $imageURL ?>" class="btn btn-danger">Confirm</a>
                            </div>
                          </div>
                        </div>
                      </div><!-- End Vertically centered Modal-->
            </div>
          </div><!-- End Special title treatmen -->
        </div>
        <?php }
          }else{ echo "Tiada gambar ditemui"; } ?>
      </div>
    </section>

  </main>



 <!-- ======= Footer ======= -->
 <?php include 'admin/admin-footer.php' ?>
<?php 
    } else {
        header("Location: ./admin-login?error=login_first");
        exit();
    }
 ?>  