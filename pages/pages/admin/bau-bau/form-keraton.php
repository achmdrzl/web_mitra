<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Form Pengajuan Keraton</title>
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
      <a href="../index-bau.php" class="logo d-flex align-items-center">
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
        <a class="nav-link collapsed" href="../index-bau.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#pengajuan-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Form Pengajuan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="pengajuan-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="form-keraton.php" class="active">
              <i class="bi bi-circle"></i><span>Keraton</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tagihan-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Form Tagihan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tagihan-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tagih-keraton.php">
              <i class="bi bi-circle"></i><span>Keraton</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-heading">Bau-Bau</li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#keraton-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Keraton</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="keraton-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="keraton/keraton-pengajuan.php">
              <i class="bi bi-circle"></i><span>Data Pengajuan</span>
            </a>
          </li>
          <li>
            <a href="keraton/keraton-tagihan.php">
              <i class="bi bi-circle"></i><span>Data Tagihan</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

    </ul>

  </aside><!-- End Sidebar-->
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Pengajuan Keraton</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../index-bau.php">Home</a></li>
          <li class="breadcrumb-item">Form Pengajuan</li>
          <li class="breadcrumb-item active">Keraton</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Input Pengajuan</h5>

              <!-- Multi Columns Form -->
              <form class="row g-3" method="post" enctype="multipart/form-data">
                <div class="col-md-12">
                  <label for="tgl" class="form-label">Tanggal Pengajuan</label>
                  <input type="date" class="form-control" id="tgl" name="tgl_bayar" autocomplete="off" required>
                </div>
                <div class="col-md-6">
                  <label for="resort" class="form-label">Resort</label>
                  <input type="text" class="form-control" id="resort" name="resort" autocomplete="off" required>
                </div>
                <div class="col-md-6">
                  <label for="pdl" class="form-label">Nama PDL</label>
                  <input type="text" class="form-control" id="pdl" name="pdl" autocomplete="off" required>
                </div>
                <div class="col-12">
                  <label for="anggota" class="form-label">Nama Anggota</label>
                  <input type="text" class="form-control" id="anggota" placeholder="Yudi Eka Saputra" name="nama_anggota" autocomplete="off" required>
                </div>
                <div class="col-12">
                  <label for="alamat" class="form-label">Alamat</label>
                  <input type="text" class="form-control" id="alamat" placeholder="Jl. Anawai" name="alamat" autocomplete="off" required>
                </div>
                <div class="col-md-12">
                  <label for="agunan" class="form-label">Agunan</label>
                  <input type="text" class="form-control" id="agunan" name="agunan" autocomplete="off" required>
                </div>
                <div class="col-md-6">
                  <label for="rupiah" class="form-label">Pinjaman Lama</label>
                  <input type="text" class="form-control price" id="rupiah" name="pinjam_lama" autocomplete="off">
                </div>
                <div class="col-md-6">
                  <label for="rupiah2" class="form-label">Pinjaman Baru</label>
                  <input type="text" class="form-control price" id="rupiah2" name="pinjam_baru" autocomplete="off" required>
                </div>
                <div class="col-md-6">
                  <label for="foto_kartu" class="col-sm-4 col-form-label">Foto Kartu</label>
                  <div class="col-sm-12">
                    <input class="form-control" type="file" id="foto_kartu" name="foto_kartu" accept="image/png, image/jpg">
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="foto_nasabah" class="col-sm-4 col-form-label">Foto Nasabah</label>
                  <div class="col-sm-12">
                    <input class="form-control" type="file" id="foto_nasabah" name="foto_nasabah" accept="image/png, image/jpg">
                  </div>
                </div>
                <div class="col-md-12">
                  <label for="rupiah3" class="form-label">Persetujuan</label>
                  <input type="text" class="form-control price" id="rupiah3" name="acc" autocomplete="off" required>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" name="submit">Submit Data</button>
                </div>
              </form><!-- End Multi Columns Form -->

            </div>
          </div>

            <?php 
              include '../../../../koneksi.php';

              if(isset($_POST["submit"]) ){
                $tgl_bayar = $_POST["tgl_bayar"];
                $resort = $_POST["resort"];
                $pdl = $_POST["pdl"];
                $nama_anggota = $_POST["nama_anggota"];
                $alamat = $_POST["alamat"];
                $agunan = $_POST["agunan"];
                $baru = $_POST["pinjam_baru"];
                $lama = $_POST["pinjam_lama"];
                $pinjam_baru = preg_replace("/[^0-9]/", "",$baru);
                $pinjam_lama = preg_replace("/[^0-9]/", "",$lama);

                $jaminan = "Jaminan_".strval(rand(1,10000))."_".$nama_anggota.".jpg";
                $img_file1 = $_FILES["foto_kartu"]["name"];
                $tmp_name1 = $_FILES["foto_kartu"]["tmp_name"];
                $dir1 = 'keraton/img/jaminan/'.$jaminan;
                move_uploaded_file($tmp_name1, $dir1);

                $nasabah = "Nasabah_".strval(rand(1,10000))."_".$nama_anggota.".jpg";
                $img_file = $_FILES["foto_nasabah"]["name"];
                $tmp_name = $_FILES["foto_nasabah"]["tmp_name"];
                $dir = 'keraton/img/nasabah/'.$nasabah;
                move_uploaded_file($tmp_name, $dir);

                $acc = $_POST["acc"];
                $setuju = preg_replace("/[^0-9]/", "",$acc);

                $code = "Mitra".strval(rand(1,10000));
                $status = 'waiting';
                $ket = '-';

                $sql = "INSERT INTO transaksi_bau(tgl, code, resort, nama_pdl, nama_anggota, alamat, agunan, pinjam_baru, pinjam_lama, foto_jaminan, foto_nasabah, persetujuan, status, ket) VALUES 
                ('$tgl_bayar', '$code', '$resort', '$pdl', '$nama_anggota', '$alamat', '$agunan', '$pinjam_baru', '$pinjam_lama', '$jaminan', '$nasabah', '$setuju', '$status', '$ket')";

                mysqli_query($conn, $sql);

                echo"<script>alert('Data Pengajuan Berhasil di Kirim!');</script>";
              }
            ?>

        </div>
      </div>
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

  var rupiah = document.getElementById('rupiah');
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
  </script>

</body>

</html>