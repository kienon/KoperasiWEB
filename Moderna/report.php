<?php
	//include 'db_connect.php';
	include 'headerMedia.php' 
?>
<body>

  <main id="main">

    <!-- ======= Report Portfolio Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Laporan Tahunan</h2>
        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Portfolio Section ======= -->
    <section class="portfolio">
      <div class="container">
      
        
<!-- Temporary closed waiting for the galeri contents
        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div> -->

        <div class="row" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
<!-- KIV MIGHT NEED IT ?php echo "<iframe src=\"dummy.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";?-->
          <div class="col-lg-12">
          <h3>2021</h3>
            <div class="portfolio-report1">          
                <h4 style="color:black">&nbsp;Annual Report</h4>          
                <a class="btn btn-secondary text-center" href="./file/dummy.pdf" download="">Download</a>
              </div> 

            <div class="portfolio-report2 ">
                <h4 style="color:black">&nbsp;Corporate Governance Report</h4>
                <a class="btn btn-secondary" href="./file/dummy.pdf" download="">Download</a>
              </div>
          </div>


          <div class="col-lg-6">
          <h3>2020</h3>
            <div class="portfolio-report1">          
                <h4 style="color:black">&nbsp;Annual Report</h4>          
                <a class="btn btn-secondary text-center" href="./file/dummy.pdf" download="">Download</a>
              </div> 

            <div class="portfolio-report2 ">
                <h4 style="color:black">&nbsp;Corporate Governance Report</h4>
                <a class="btn btn-secondary" href="./file/dummy.pdf" download="">Download</a>
              </div>
          </div>

          <div class="col-lg-6">
          <h3>2019</h3>
            <div class="portfolio-report1">          
                <h4 style="color:black">&nbsp;Annual Report</h4>          
                <a class="btn btn-secondary text-center" href="./file/dummy.pdf" download="">Download</a>
              </div> 

            <div class="portfolio-report2 ">
                <h4 style="color:black">&nbsp;Corporate Governance Report</h4>
                <a class="btn btn-secondary" href="./file/dummy.pdf" download="">Download</a>
              </div>
          </div>
      
        </div>

      </div>
    </section><!-- End Report Portfolio Section -->

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

</body>

</html>