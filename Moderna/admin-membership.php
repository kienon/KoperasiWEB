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
      <h1>Senarai Keahlian</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row ">
      <div class="">
            <div class=" ">
              <h5 class=""></h5>

              <!-- Default Table -->
              <table class="table table-bordered table-hover table-striped" id="list">
                <thead>
                  <tr>
                    <th scope="col-1">Bil</th>
                    <th scope="col-3">Nama Koperasi</th>
                    <th scope="col-1">Borong</th>
                    <th scope="col-1">Runcit</th>
                    <th scope="col-1">Modal</th>
                    <th scope="col-1">Aksi</th>
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
                            echo " <i class='bi bi-check-circle-fill'></i>";
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
                        echo " <i class='bi bi-check-circle-fill'></i>";
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
                    <td><a href="admin-member-edit?id=<?php echo $row['Id'] ?>" class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></a>
                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#verticalycentered-<?php echo $row['Id'] ?>"><i class="bi bi-trash3-fill"></i>
                    </button>
                     <!-- Vertically centered Modal -->
                      <div class="modal fade" id="verticalycentered-<?php echo $row['Id'] ?>" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              Adakah anda yakin memadam <b><?php echo $row['Koperasi'] ?></b> ?
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                              <a href="admin/admin-member-delete?id=<?php echo $row['Id'] ?>" class="btn btn-danger">Ya</a>
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