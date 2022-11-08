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
      <h1>Keahlian Lists</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
      <div class="card card-outline card-primary">
            <div class="card-body">
              <h5 class="card-title"></h5>

              <!-- Default Table -->
              <table class="table tabe-hover table-bordered" id="list">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Koperasi Name</th>
                    <th scope="col">Pemborong</th>
                    <th scope="col">Peruncit</th>
                    <th scope="col">ModalSyer</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $count=1;
                  $sel_query="Select * from keahlian ORDER BY id desc;";
                  $result = mysqli_query($conn,$sel_query);
                  while($row = mysqli_fetch_assoc($result)) { ?> 
                  <tr>
                    <td><?php echo $count; ?></td>
                    <td><?php echo $row['Koperasi'] ?></td>
                    <td class="text-center">
                    <?php 
                    switch ($row['Pemborong']) {
                        case '1':
                            echo "<span> <i class='bi bi-check-circle-fill'></i></span>";
                            break;
                        case '2':
                            echo "<span> </span>";
                            break;               
                        default:
                            echo "<span class=''>Undefined</span>";
                            break;
                    }
                    ?>
                </td>
                <td class="text-center">
                <?php 
                switch ($row['Peruncitan']) {
                    case '1':
                        echo "<span> <i class='bi bi-check-circle-fill'></i></span>";
                        break;
                    case '2':
                        echo "<span></span>";
                        break;               
                    default:
                        echo "<span class=''>Undefined</span>";
                        break;
                }
                ?>
                   </td>
                    <td><?php echo $row['ModalSyer'] ?></td>
                    <td><a href="admin-member-edit?id=<?php echo $row['Id'] ?>" class="btn btn-primary btn-sm">Edit</a></td>
                    <td>
                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#verticalycentered-<?php echo $row['Id'] ?>">
                     Delete
                    </button>
                     <!-- Vertically centered Modal -->
                      <div class="modal fade" id="verticalycentered-<?php echo $row['Id'] ?>" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              Are you sure want to delete <?php echo $row['Koperasi'] ?> ?
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                              <a href="admin/admin-member-delete?id=<?php echo $row['Id'] ?>" class="btn btn-danger">Confirm</a>
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


<script>
	$(document).ready(function () {
    $('#list').DataTable();
});

</script>