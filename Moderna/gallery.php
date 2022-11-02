<?php
	include 'db_connect.php';
	include 'headerMedia.php';

  $query = $conn->query("SELECT * FROM images ORDER BY uploaded_on DESC");
?>
<body>

  <main id="main">

    <!-- ======= Our Portfolio Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Galeri FedBorong</h2>
        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Portfolio Section ======= -->
    <section class="portfolio">
      <div class="container">
        
        <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
          <?php if(mysqli_num_rows($query) > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["file_name"]; ?>
          <div class="col-lg-4 col-md-6 portfolio-wrap filter-app">
            <div class="portfolio-item">
              <img src="<?php echo $imageURL; ?>" class="img-fluid" alt="" style="width:auto, height:auto;">
            </div>
          </div>
          <?php }
          }else{ echo "Tiada gambar ditemui"; } ?>
        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <?php include 'footer.php' ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>function onClick(element) {
document.getElementById("$imageURL").src = element.src;
document.getElementById("$imageURL").style.display = "block";
}</script>
</body>

</html>