<?PHP
require './db_connect.php';
    session_start();

    if (isset($_SESSION['username'])) {

        header ("Location: ./admin-index");
    } else {
      
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Log Masuk</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="https://fedborong.com.my/admin-assets/img/logo1.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="admin-assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="admin-assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="admin-assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="admin-assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Vendor JS Files -->

  <script src="admin-assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="admin-assets/vendor/quill/quill.min.js"></script>

  <!-- Template Main JS File -->
  <script src="admin-assets/js/main.js"></script>

  <!-- Template Main CSS File -->
  <link href="admin-assets/css/style.css" rel="stylesheet">

</head>

<body>

<section class="background-radial-gradient overflow-hidden">
    <style>
      .background-radial-gradient {
        background-color: hsl(218, 41%, 15%);
        background-image: radial-gradient(650px circle at 0% 0%,
            hsl(218, 41%, 35%) 15%,
            hsl(218, 41%, 30%) 35%,
            hsl(218, 41%, 20%) 75%,
            hsl(218, 41%, 19%) 80%,
            transparent 100%),
          radial-gradient(1250px circle at 100% 100%,
            hsl(218, 41%, 45%) 15%,
            hsl(218, 41%, 30%) 35%,
            hsl(218, 41%, 20%) 75%,
            hsl(218, 41%, 19%) 80%,
            transparent 100%);
      }
  
      #radius-shape-1 {
        height: 220px;
        width: 220px;
        top: -60px;
        left: -130px;
        background: radial-gradient(#44006b, #ad1fff);
        overflow: hidden;
      }
  
      #radius-shape-2 {
        border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
        bottom: -60px;
        right: -110px;
        width: 300px;
        height: 300px;
        background: radial-gradient(#44006b, #ad1fff);
        overflow: hidden;
      }
  
      .bg-glass {
        background-color: hsla(0, 0%, 100%, 0.9) !important;
        backdrop-filter: saturate(200%) blur(25px);
      }
    </style>
  
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
      <div class="row gx-lg-5 align-items-center mb-5">
        
      
        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <img src="https://fedborong.com.my/admin-assets/img/logofull.png" alt="" class="" style="width:300px; height:200px;">
        
        </div>
  
        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
          <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
          <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
  
          <div class="card mb-3">

            <div class="card-body">

              <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4">STAF FEDBORONG</h5>
                
              </div>

              <form action="admin/admin-login-inc" method="POST">

                <div class="col-12">
                  <label for="yourUsername" class="form-label">Nama Pengguna</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" name="mailuid" class="form-control" id="yourUsername" required>
                    <div class="invalid-feedback">Sila masukkan nama pengguna anda.</div>
                  </div>
                </div>

                <div class="col-12">
                  <label for="yourPassword" class="form-label">Kata Laluan</label>
					<div class="input-group">
					<button type="button" style="background-color:#cccccc;" class="btn" onclick="myFunction()">
						<i id="mybut" class="bi bi-eye-fill"></i></button>
                  <input type="password" name="pwd" class="form-control" id="yourPassword" required>
				  <!--<input type="checkbox" onclick="myFunction()"> Lihat Kata Laluan-->
                  <div class="invalid-feedback">Sila masukkan kata laluan!</div>
					</div>
                </div>
                
                <div class="col-12">
                  <br><button class="btn btn-primary w-100" type="submit" name="login">Log Masuk</button>
                </div><br>
                <div class="col-12">
                  <p class="small mb-0 text-center">Kembali ke <a href="./"> Laman Utama</a></p>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
	<script>
		function myFunction() {
      var x = document.getElementById("yourPassword");
	  var y = document.getElementById("mybut");
      if (x.type === "password" && y.className == "bi bi-eye-fill") {
         x.type = "text";
		 y.className = "bi bi-eye-slash-fill";
      } else {
         x.type = "password";
		 y.className = "bi bi-eye-fill";
      }
    }
	</script>
</body>

<?php include 'admin-footer.php' ?>
</html>
<?php
    exit();
  }
?> 