<?php
	include 'db_connect.php';
	include 'headerMember.php' 
?>
<body>

  <main id="main">

    <section class="">
    <h2 class="text-center">SENARAI AHLI FEDERASI YANG AKTIF PEMBORONGAN DAN PERUNCITAN</h2><br>
        <div class="">
          <div class="d-flex justify-content-md-center " data-aos="fade-up">
            <div class="table-responsive">
            <?php include 'ahlidisplay.php';?>
            </div>
          </div>
        </div>
    </section> <!-- end more info -->

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