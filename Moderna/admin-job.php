<?php session_start(); ?>
<?php
    if(isset($_SESSION['username'])) {
?>
<?php

include 'admin/admin-header.php';
require('db_connect.php');

?>
<body>
<?php include 'admin-nav.php';?>

  <main id="main" class="main">
   
  <div class="pagetitle">
      <h1>Senarai Jawatan Kosong</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
      <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>

              <!-- Default Table -->
              <table class="table table-bordered ">
                <thead>
                  <tr>
                    <th scope="col">Bil</th>
                    <th scope="col">Jawatan</th>
                    <th scope="col">Gambaran Keseluruhan Kerja</th>
                    <th scope="col">Tanggungjawab</th>
                    <th scope="col">Syarat Permohonan</th>
                    <th scope="col">Tarikh Luput</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Padam</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $count=1;
                  $sel_query="Select * from jawatan ORDER BY id desc;";
                  $result = mysqli_query($conn,$sel_query);
                  while($row = mysqli_fetch_assoc($result)) { ?> 
                  <tr>
                    <td><?php echo $count; ?></td>
                    <td><?php echo $row['job'] ?></td>
                    <td><?php echo $row['overview'] ?></td>
                    <td><?php echo $row['responsibilities'] ?></td>
                    <td><?php echo $row['requirements'] ?></td>
                    <td><?php echo $row['date'] ?></td>
                    <td><a href="admin-job-edit?id=<?php echo $row['id'] ?>" class="btn btn-primary btn-sm">Edit</a></td>
                    <td>
                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#verticalycentered-<?php echo $row['id'] ?>">
                     Padam
                    </button>
                     <!-- Vertically centered Modal -->
                      <div class="modal fade" id="verticalycentered-<?php echo $row['id'] ?>" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="btn-close" data-bs-dismiss="job" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              Adakah anda yakin memadam <b><?php echo $row['job'] ?></b> ?
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                              <a href="admin/admin-job-delete?id=<?php echo $row['id'] ?>" class="btn btn-danger">Ya</a>
                            </div>
                          </div>
                        </div>
                      </div><!-- End Vertically centered Modal-->
                    </td>
                  </tr>
                  <?php $count++; } ?>
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>
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
 