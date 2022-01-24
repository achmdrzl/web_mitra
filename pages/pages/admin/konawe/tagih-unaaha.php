<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Form Pengajuan Unaaha</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../../assets/img/favicon3.png" rel="icon">
  <link href="../../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../../../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../../assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="../index-konawe.php" class="logo d-flex align-items-center">
        <img src="../../../assets/img/logo1.png" alt="">
        <span class="d-none d-lg-block">Admin Panel</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../../../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Admin</h6>
              <span>Admin</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="../index-konawe.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#pengajuan-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Form Pengajuan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="pengajuan-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="form-unaaha.php" >
              <i class="bi bi-circle"></i><span>Unaaha</span>
            </a>
          </li>
          <li>
            <a href="form-wawotobi.php" >
              <i class="bi bi-circle"></i><span>Wawotobi</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#tagihan-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Form Tagihan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tagihan-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="tagih-unaaha.php" class="active">
              <i class="bi bi-circle"></i><span>Unaaha</span>
            </a>
          </li>
          <li>
            <a href="tagih-wawotobi.php">
              <i class="bi bi-circle"></i><span>Wawotobi</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-heading">Konawe</li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#keraton-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Unaaha</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="keraton-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="unaaha/unaaha-pengajuan.php">
              <i class="bi bi-circle"></i><span>Data Pengajuan</span>
            </a>
          </li>
          <li>
            <a href="unaaha/unaaha-tagihan.php">
              <i class="bi bi-circle"></i><span>Data Tagihan</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#wawotobi-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Wawotobi</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="wawotobi-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="wawotobi/wawotobi-pengajuan.php">
              <i class="bi bi-circle"></i><span>Data Pengajuan</span>
            </a>
          </li>
          <li>
            <a href="wawotobi/wawotobi-tagihan.php">
              <i class="bi bi-circle"></i><span>Data Tagihan</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Tagihan Unaaha</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../index-konawe.php">Home</a></li>
          <li class="breadcrumb-item">Form Input Tagihan</li>
          <li class="breadcrumb-item active">Unaaha</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Input Tagihan</h5>

              <!-- Multi Columns Form -->
              <form class="row g-3" method="post" action="#">
                <div class="col-md-12">
                  <label for="tgl_bayar" class="form-label">Tanggal Bayar</label>
                  <input type="date" class="form-control" id="tgl_bayar" name="tgl_bayar" required>
                </div>
                <div class="col-md-12">
                  <label for="code" class="form-label">Kode Transaksi</label>
                  <input type="text" class="form-control" id="code" name="code" autocomplete="off" >
                </div>
                <div class="col-md-12">
                  <label for="nama_anggota" class="form-label">Nama Anggota</label>
                  <input type="text" class="form-control" id="nama_anggota" name="nama_anggota" autocomplete="off" required>
                </div>
                <div class="col-md-6">
                  <label for="rupiah" class="form-label">Besar Angsuran</label>
                  <input type="text" class="form-control" id="rupiah" name="angsuran" autocomplete="off" required>
                </div>
                <div class="col-md-6">
                  <label for="rupiah2" class="form-label">Denda Keterlambatan</label>
                  <input type="text" class="form-control" id="rupiah2" name="denda" autocomplete="off" >
                </div>
                <div class="col-md-12">
                </div>
                <fieldset class="row mb-6">
                  <legend class="col-form-label col-md-4 pt-0">Metode Pembayaran : </legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="method" id="method" value="Tunai" checked>
                      <label class="form-check-label" for="method">
                        Tunai
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="method" id="method" value="Transfer">
                      <label class="form-check-label" for="method">
                        Transfer
                      </label>
                    </div>
                  </div>
                </fieldset>
                <div class="col-md-12">
                </div>
                <div class="text-center">
                  <button type="submit" name="submit" class="btn btn-primary">Submit Data</button>
                </div>
              </form><!-- End Multi Columns Form -->
            </div>
          </div>
        </div>
      </div>
      <?php 
          include '../../../../koneksi.php';

          if(isset($_POST["submit"]) ){
            $tgl_bayar = $_POST["tgl_bayar"];
            $code = $_POST["code"];
            $nama_anggota = $_POST["nama_anggota"];

            $angsuran = $_POST["angsuran"];
            $besar_angsuran = preg_replace("/[^0-9]/", "",$angsuran);

            $denda = $_POST["denda"];
            $dk = preg_replace("/[^0-9]/", "",$denda);
            $method = $_POST["method"];

            $sql = "SELECT * FROM tagih_una WHERE code = '$code' AND nama_anggota = '$nama_anggota' ";
            $data = mysqli_query($conn, $sql);

            foreach($data as $db){
              $saldo_akhir = $db["saldo_akhir"];
              $saldo_awal = $db["saldo_awal"];
            }

            $s_akhir = $saldo_akhir - $besar_angsuran;

            if($s_akhir == 0){
              $sql = "UPDATE transaksi_una SET status = 'Lunas' WHERE code = '$code' AND nama_anggota = '$nama_anggota'";
              mysqli_query($conn, $sql);
            }

            if($saldo_awal == 0){
              $s_awal = $saldo_awal + $besar_angsuran;
            }else{
              $s_awal = $saldo_awal + $besar_angsuran;
            }

            $sql = "UPDATE tagih_una SET tgl_bayar = '$tgl_bayar', besar_angsuran = '$besar_angsuran', saldo_awal = '$s_awal', saldo_akhir = '$s_akhir', denda_keterlambatan = '$dk', ket = '$method'
                    WHERE code = '$code' AND nama_anggota = '$nama_anggota' ";
            
            mysqli_query($conn, $sql);

            echo"<script>alert('Data Tagihan Berhasil di Kirim!');</script>";
          }
      ?>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>ARDEV 13</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://www.instagram.com/ardev13/">ARDEV 13</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../../../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../../assets/vendor/chart.js/chart.min.js"></script>
  <script src="../../../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../../../assets/vendor/quill/quill.min.js"></script>
  <script src="../../../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../../../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../../../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../../../assets/js/main.js">

  var rupiah = document.getElementById('rupiah','rupiah2','rupiah4','rupiah5');
      rupiah.addEventListener('keyup', function(e){
        // tambahkan 'Rp.' pada saat form di ketik
        // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
        rupiah.value = formatRupiah(this.value, 'Rp. ');
      });
  
      /* Fungsi formatRupiah */
      function formatRupiah(angka, prefix){
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split   		= number_string.split(','),
        sisa     		= split[0].length % 3,
        rupiah     		= split[0].substr(0, sisa),
        ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
  
        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if(ribuan){
          separator = sisa ? '.' : '';
          rupiah += separator + ribuan.join('.');
        }
  
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
      }

      var rupiah4 = document.getElementById('rupiah4');
      rupiah4.addEventListener('keyup', function(e){
        // tambahkan 'Rp.' pada saat form di ketik
        // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
        rupiah4.value = formatRupiah(this.value, 'Rp. ');
      });
  
      /* Fungsi formatRupiah */
      function formatRupiah(angka, prefix){
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split   		= number_string.split(','),
        sisa     		= split[0].length % 3,
        rupiah4     		= split[0].substr(0, sisa),
        ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
  
        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if(ribuan){
          separator = sisa ? '.' : '';
          rupiah4 += separator + ribuan.join('.');
        }
  
        rupiah4 = split[1] != undefined ? rupiah4 + ',' + split[1] : rupiah4;
        return prefix == undefined ? rupiah4 : (rupiah4 ? 'Rp. ' + rupiah4 : '');
      }
      
  var rupiah5 = document.getElementById('rupiah5');
      rupiah5.addEventListener('keyup', function(e){
        // tambahkan 'Rp.' pada saat form di ketik
        // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
        rupiah5.value = formatRupiah(this.value, 'Rp. ');
      });
  
      /* Fungsi formatRupiah */
      function formatRupiah(angka, prefix){
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split   		= number_string.split(','),
        sisa     		= split[0].length % 3,
        rupiah5     		= split[0].substr(0, sisa),
        ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
  
        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if(ribuan){
          separator = sisa ? '.' : '';
          rupiah5 += separator + ribuan.join('.');
        }
  
        rupiah5 = split[1] != undefined ? rupiah5 + ',' + split[1] : rupiah5;
        return prefix == undefined ? rupiah5 : (rupiah5 ? 'Rp. ' + rupiah5 : '');
      }
  </script>

</body>

</html>