<?php 
include 'koneksi.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon3.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.php"><span>Mitra Sekawan Anawai</span></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="" href="index.php">Home</a></li>
          <li><a class="active" href="login.php">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Login</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Login</li>
          </ol>
        </div>

      </div>
    </section><!-- End Contact Section -->

    <section class="vh-100 ">
          <div class="container">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-md-12 col-lg-6 col-xl-5">
                  <img src="assets/img/login2.svg" class="img-fluid alt="Sample image" >
              </div>
              <div class="col-md-12 col-lg-6 col-xl-5">
                <div class="card mt-lg-auto">
                  <div class="card-body"> 
                    <form action="#" method="POST" >     
                      <!-- Email input -->
                      <div class="form-outline mb-4">
                        <input type="text" id="username" name="username" class="form-control form-control-lg"
                          placeholder="Enter a valid username" autocomplete="off" required />
                        <label class="form-label" for="username">Username</label>
                      </div>
            
                      <!-- Password input -->
                      <div class="form-outline mb-3">
                        <input type="password" id="password" name="password" class="form-control form-control-lg"
                          placeholder="Enter password" autocomplete="off" required/>
                        <label class="form-label" for="password" >Password</label>
                      </div>
            
                      <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="btn btn-primary btn-lg"
                          style="padding-left: 2.5rem; padding-right: 2.5rem; background-color: #1c3745; border: #1c3745" 
                          name="login" 
                          >Login</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </section>

      <?php
            if(isset($_POST['login'])){
                $username = $_POST['username'];
                $password = $_POST['password'];

                $cek_user = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' ");

                $valid = mysqli_num_rows($cek_user);

                if($valid > 0){
                    $cek = mysqli_fetch_assoc($cek_user);
                    $cek_pass = $cek['password'];
                    if($cek_pass <> $password){
                        echo"<script>alert('Password Salah');</script>";
                        echo "<script>document.location.href='login.php'</script>";
                    }
                    if($cek['level'] == "owner"){
                      $_SESSION['username'] = $username;
                      $_SESSION['owner'] = true;

                      echo "<script>document.location.href='pages/pages/owner/index.php'</script>";

                    }else if($cek['level'] == "kdi"){
                      $_SESSION['username'] = $username;
                      $_SESSION['adminkdi'] = true;

                      echo "<script>document.location.href='pages/pages/admin/index-kdi.php'</script>";

                    }else if($cek['level'] == "bau-bau"){
                      $_SESSION['username'] = $username;
                      $_SESSION['adminkeraton'] = true;

                      echo "<script>document.location.href='pages/pages/admin/index-bau.php'</script>";

                    }else if($cek['level'] == "konawe"){
                      $_SESSION['username'] = $username;
                      $_SESSION['adminkonawe'] = true;

                      echo "<script>document.location.href='pages/pages/admin/index-konawe.php'</script>";

                    }else if($cek['level'] == "konsel"){
                      $_SESSION['username'] = $username;
                      $_SESSION['adminkonsel'] = true;

                      echo "<script>document.location.href='pages/pages/admin/index-konsel.php'</script>";

                }else {
                    echo "<script>document.location.href='login.php'</script>";
                }
              }
            }
      ?>
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
  <footer id="footer">
    <div class="container" style="margin-top: 220px;">
      <div class="copyright">
        &copy; Copyright <strong><span>AR.Dev 13</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
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