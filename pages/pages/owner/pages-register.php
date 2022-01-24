<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register New Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../assets/img/favicon3.png" rel="icon">
  <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <link rel="stylesheet" href="../../../assets/dist/sweetalert2.min.css">

  <!-- Template Main CSS File -->
  <link href="../../assets/css/style.css" rel="stylesheet">

</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.php" class="logo d-flex align-items-center w-auto">
                  <img src="../../assets/img/logo1.png" alt="">
                  <span class="d-none d-lg-block">Mitra Sekawan</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate action="#" method="POST">

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please choose a username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <label class="col-sm-6 col-form-label">Status</label>
                      <div class="col-sm-12">
                        <select class="form-select" name="status" aria-label="Default select example" required>
                          <option >Pilih Status</option>
                          <option value="kdi">Kendari</option>
                          <option value="konawe">Konawe</option>
                          <option value="konsel">Konawe Selatan</option>
                          <option value="bau-bau">Bau-Bau</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-12"></div>

                    <div class="col-12">
                      <button type="submit" class="btn btn-primary w-100" name="submit">Create Account</button>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                  Designed by <a href="https://www.instagram.com/ardev13/">ARDEV 13</a>
              </div>

            </div>
          </div>
        </div>

        
        
        <?php 
          include '../../../koneksi.php';
          if(isset($_POST["submit"]) ){
            $username = $_POST["username"];
            $cek_user = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' ") );
            if($cek_user > 0){
              echo"<script>alert('Username Sudah di Gunakan');</script>";
              
              echo "<script>document.location.href='pages-register.php'</script>";

            }else{
              $email = $_POST["email"];
              $password = $_POST["password"];
              $status = $_POST["status"];

              $sql = "INSERT INTO user(username, email, password, level) 
                      VALUES ('$username', '$email', '$password', '$status')";
              
              mysqli_query($conn, $sql);

              echo"<script>alert('Pendaftaran Berhasil!');</script>";
              
              // echo "<script type='text/javascript'>
              //         Swal.fire({
              //           position: 'top-end',
              //           icon: 'success',
              //           title: 'Your work has been saved',
              //           showConfirmButton: false,
              //           timer: 1500
              //         })
              //     </script>";
              // echo "<script type='text/javascript'>swal('Good job!', 'You clicked the button!', 'success');</script>";

              echo "<script>document.location.href='index.php'</script>";
            }
          }
        ?>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/chart.js/chart.min.js"></script>
  <script src="../../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../../assets/vendor/quill/quill.min.js"></script>
  <script src="../../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../../assets/vendor/php-email-form/validate.js"></script>
  <script src="../../../assets/dist/sweetalert2.all.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../../assets/js/main.js"></script>

</body>

</html>