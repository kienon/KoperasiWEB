<?php
	include 'db_connect.php';
	include 'header.php';
?>
<body>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <!-- Slide  -->
      <?php 
      // display images from directory
      // directory path
      $dir = "./images/";

      $scan_dir = scandir($dir);
      foreach($scan_dir as $img):
        if(in_array($img,array('.','..')))
        continue;
      ?>
      <div class="carousel-item active">
        <div class="carousel-container">
        <img src="<?php echo $dir.$img ?>" alt="<?php echo $img ?>"  style="width:1980px;height:1080px;">
        </div>
      </div>
      <?php endforeach; ?>
      
      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">
    
    <!--Kata aluan Pengerusi-->
    <section>
    <div class="container justify-content-center">

      <div class="section-title">
        <h2>Kata Aluan Pengerusi</h2>
      </div>

      <div class="row">
        <div class="col-lg-5 col-md-2 d-flex">
          <div class="member">
            <img src="assets/img/team/team-1.jpg" alt="" style="width:400px;height:400px">
            <div class="bg-dark rounded">
            <h4 class="text-center text-light">Namanya</h4>
            <h6 class="text-center text-light">Pengerusi</h6>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
          <div class="member">
            <p>
              Assalamu’alaikum Warahmatullahi Wabarakatuh​<br>

              Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
              Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
              Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
              Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
              Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus<br><br>

              Going Digital with …..​<br>

              Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
              Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
              Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
              Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
              Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus<br><br>

              ​

              Brighter prospects ahead​<br>
              Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
              Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
              Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
              Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
              Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus<br><br>

              Terima kasih.​<br>

              Wabillahitaufik Walhidayah, Wassalamualaikum Warahmatullahi Wabarakatuh
            </p>
            </div>
          </div>
        </div>
      </section>
      <!--End Kata Aluan-->

    
        <!-- ======= Facts Section ======= -->
        <section class="facts section-bg justify-content-center align-items-center" data-aos="fade-up">
          <div class="container">
    
            <div class="row counters">
               
              <div class="col-lg-3 col-4 text-center">
                <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="3" class="purecounter"></span>
                <p><b>Pembekal</b></p>
              </div>

              <div class="col-lg-3 col-4 text-center">
                <span data-purecounter-start="0" data-purecounter-end="5000" data-purecounter-duration="3" class="purecounter"></span>
                <p><b>Unit Penyimpanan Stok</b></p>
              </div>
              <div class="col-lg-3 col-4 text-center">
                <span data-purecounter-start="0" data-purecounter-end="28" data-purecounter-duration="3" class="purecounter"></span>
                <p><b>DC & SUB-DC</b></p>
              </div>
              <div class="col-lg-3 col-4 text-center">
                <span data-purecounter-start="0" data-purecounter-end="2577" data-purecounter-duration="3" class="purecounter"></span>
                <p><b>Kedai</b></p>
              </div>
    
            </div>
    
          </div>
        </section><!-- End Facts Section -->


    <!-- ======= Services Section ======= -->
    <section class="services " id="service">
      <div class="container justify-content-center">
      <h2 class="text-center">INFOGRAFIK</h2><br>

        <div class="row">
          <div class=" col-lg-12 d-flex align-items-center justify-content-md-center" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
            <img src="assets/img/infografik/Picture1.png" alt="" style="width:800px;height:500px">
              <h4 class="title"><a href="">MODEL PELAKSANAAN CENTRAL DISRIBUTION CENTRE (CDC) DALAM SEKTOR PEMBORONGAN DAN PERUNCITAN</a></h4>
            </div>
          </div>
         

          <div class="col-md-10 col-lg-6 d-flex align-items-" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
            <img src="assets/img/infografik/Picture2.png" alt="" style="width:500px;height:400px">
              <h4 class="title"><a href="">Taburan Koperasi Pemborongan & Peruncitan</a></h4>
            </div>
          </div>

          <div class="col-md-10 col-lg-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
            <img src="assets/img/infografik/Picture3.png" alt="" style="width:500px;height:400px">
              <h4 class="title"><a href="">Rangkaian DC/SUB-DC Koperasi & Outlet​</a></h4>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->   

       <!-- ======= Contact Section ======= -->
       <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" id="contact">
        <div class="container">
        <h2 class="text-center">Hubungi Kami</h2><br>
        <p class="text-center">Anda boleh menghubungi kami untuk pertanyaan lebih lanjut</p><br>
  
          <div class="row">
  
            <div class="col-lg-6">
  
              <div class="row">
                <div class="col-md-12">
                  <div class="info-box">
                    <i class="bx bx-map"></i>
                    <h3>Alamat</h3>
                    <p>MENARA SURUHANJAYA KOPERASI MALAYSIA (MENARA SKM) TINGKAT 08, CHANGKAT SEMANTAN, OFF JALAN SEMANTAN, BUKIT DAMANSARA 50490 <br> KUALA LUMPUR</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="bx bx-envelope"></i>
                    <h3>Email Us</h3>
                    <p>info@example.com<br>contact@example.com</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="bx bx-phone-call"></i>
                    <h3>Call Us</h3>
                    <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                  </div>
                </div>
              </div>
  
            </div>
  
            <div class="col-lg-6">
              <form class="php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nama Anda" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" data-sb-feedback="email:email" placeholder="Email Anda" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="body" id="body" rows="5" placeholder="Mesej Anda" required></textarea>
                </div>
                <br>
                <div class="text-center"><button type="submit"  onclick="sendEmail()">Hantar Mesej</button></div>
                <h4 class="sent-notification"></h4>
              </form>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Contact Section -->
  
      <!-- ======= Map Section ======= -->
      <section class="map mt-2">
        <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.7759409678583!2d101.66405601428325!3d3.1536964540053005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc497619bb2657%3A0xc3aea2720c208214!2sSuruhanjaya%20Koperasi%20Malaysia%20(SKM)!5e0!3m2!1sms!2smy!4v1665536731360!5m2!1sms!2smy" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        </div>
      </section><!-- End Map Section -->
     <br><br>

  </main><!-- End #main -->

  <?php include 'footer.php' ?>

  <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");
			
            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                      //$('.sent-notification').text("Thank You! Your submission has been received.");
						          $(location).prop('href', './thankyou.php');
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>

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