<?php

    // session_start();
    // include '../../../koneksi.php';
    // if(!isset ($_SESSION['owner']) ){
    //     header('location: ../../../index.php');
    //     exit;
    // }

	session_start();
  include '../../../koneksi.php';
	$timeout = 1; // setting timeout dalam menit
	$logout = "../../../index.php"; // redirect halaman logout

	$timeout = $timeout * 600; // menit ke detik
	if(!isset($_SESSION['owner'])){
		$elapsed_time = time()-$_SESSION['owner'];
		if($elapsed_time >= $timeout){
			session_destroy();
			echo "<script type='text/javascript'>alert('Sesi telah berakhir');window.location='$logout'</script>";
		}
	}

	$_SESSION['owner']=time();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard Mitra Sekawan</title>
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

  <!-- Template Main CSS File -->
  <link href="../../assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="../../assets/img/logo1.png" alt="">
        <span class="d-none d-lg-block">Owner Panel</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Owner</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Owner</h6>
              <span>Owner</span>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
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
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#acc-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Persetujuan Pengajuan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="acc-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="acc-kdi.php" >
              <i class="bi bi-circle"></i><span>Kota Kendari</span>
            </a>
          </li>
          <li>
            <a href="acc-wua.php">
              <i class="bi bi-circle"></i><span>Wua-Wua</span>
            </a>
          </li>
          <li>
            <a href="acc-konda.php">
              <i class="bi bi-circle"></i><span>Konda</span>
            </a>
          </li>
          <li>
            <a href="acc-laeya.php">
              <i class="bi bi-circle"></i><span>Laeya</span>
            </a>
          </li>
          <li>
            <a href="acc-punggaluku.php">
              <i class="bi bi-circle"></i><span>Punggaluku</span>
            </a>
          </li>
          <li>
            <a href="acc-tinanggea.php">
              <i class="bi bi-circle"></i><span>Tinanggea</span>
            </a>
          </li>
          <li>
            <a href="acc-unaaha.php">
              <i class="bi bi-circle"></i><span>Unaaha</span>
            </a>
          </li>
          <li>
            <a href="acc-wawotobi.php">
              <i class="bi bi-circle"></i><span>Wawotobi</span>
            </a>
          </li>
          <li>
            <a href="acc-keraton.php">
              <i class="bi bi-circle"></i><span>Keraton</span>
            </a>
          </li>

        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-heading">Kota Kendari</li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#Kendari-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Kendari</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="Kendari-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="kendari/kendari/kdi-pengajuan.php">
              <i class="bi bi-circle"></i><span>Data Pengajuan</span>
            </a>
          </li>
          <li>
            <a href="kendari/kendari/kdi-tagihan.php">
              <i class="bi bi-circle"></i><span>Data Tagihan</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#wua-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Wua-Wua</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="wua-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="kendari/wua-wua/wua-pengajuan.php">
              <i class="bi bi-circle"></i><span>Data Pengajuan</span>
            </a>
          </li>
          <li>
            <a href="kendari/wua-wua/wua-tagihan.php">
              <i class="bi bi-circle"></i><span>Data Tagihan</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-heading">Konawe Selatan</li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#Konda-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Konda</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="Konda-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="konsel/konda/konda-pengajuan.php">
              <i class="bi bi-circle"></i><span>Data Pengajuan</span>
            </a>
          </li>
          <li>
            <a href="konsel/konda/konda-tagihan.php">
              <i class="bi bi-circle"></i><span>Data Tagihan</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#Laeya-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Laeya</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="Laeya-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="konsel/laeya/laeya-pengajuan.php">
              <i class="bi bi-circle"></i><span>Data Pengajuan</span>
            </a>
          </li>
          <li>
            <a href="konsel/laeya/laeya-tagihan.php">
              <i class="bi bi-circle"></i><span>Data Tagihan</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#Punggaluku-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Punggaluku</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="Punggaluku-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="konsel/punggaluku/punggaluku-pengajuan.php">
              <i class="bi bi-circle"></i><span>Data Pengajuan</span>
            </a>
          </li>
          <li>
            <a href="konsel/punggaluku/punggaluku-tagihan.php">
              <i class="bi bi-circle"></i><span>Data Tagihan</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#Tinanggea-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Tinanggea</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="Tinanggea-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="konsel/tinanggea/tinanggea-pengajuan.php">
              <i class="bi bi-circle"></i><span>Data Pengajuan</span>
            </a>
          </li>
          <li>
            <a href="konsel/tinanggea/tinanggea-tagihan.php">
              <i class="bi bi-circle"></i><span>Data Tagihan</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-heading">Konawe</li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#Unaaha-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Unaaha</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="Unaaha-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="konawe/unaaha/unaaha-pengajuan.php">
              <i class="bi bi-circle"></i><span>Data Pengajuan</span>
            </a>
          </li>
          <li>
            <a href="konawe/unaaha/unaaha-tagihan.php">
              <i class="bi bi-circle"></i><span>Data Tagihan</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#Wawotobi-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Wawotobi</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="Wawotobi-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="konawe/wawotobi/wawotobi-pengajuan.php">
              <i class="bi bi-circle"></i><span>Data Pengajuan</span>
            </a>
          </li>
          <li>
            <a href="konawe/wawotobi/wawotobi-tagihan.php">
              <i class="bi bi-circle"></i><span>Data Tagihan</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-heading">Bau-Bau</li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#Keraton-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Keraton</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="Keraton-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="bau-bau/keraton/keraton-pengajuan.php">
              <i class="bi bi-circle"></i><span>Data Pengajuan</span>
            </a>
          </li>
          <li>
            <a href="bau-bau/keraton/keraton-tagihan.php">
              <i class="bi bi-circle"></i><span>Data Tagihan</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.php">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <!-- KENDARI -->
      <div class="row">

        <?php
        $sql = "SELECT * FROM transaksi_kdi WHERE status = 'waiting' ";
        $query = mysqli_query($conn, $sql);
        $jml = mysqli_num_rows($query);

        $sql = "SELECT * FROM transaksi_kdi WHERE status = 'On Progress' ";
        $data1 = mysqli_query($conn, $sql);
        $jmlh1 = mysqli_num_rows($data1);

        $sql = "SELECT * FROM transaksi_kdi WHERE status = 'Lunas' ";
        $data = mysqli_query($conn, $sql);
        $jmlh = mysqli_num_rows($data);

        ?>
        <!-- Left side columns -->

        <!-- Perlu Persetujuan -->
        <div class="col-xxl-4 col-md-4">
          <div class="card info-card danger-card">
            <div class="card-body">
              <h5 class="card-title">Perlu Persetujuan ? <span>| Kendari</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6><?php echo strval(number_format($jml,0,"","."))?></h6>
                </div>
              </div>
            </div>

          </div>
        </div><!-- Perlu Persetujuan -->

        <!-- Pengajuan On Progress -->
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card customers-card">
              <div class="card-body">
                  <h5 class="card-title">Pengajuan On Progress <span>| Kendari</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo strval(number_format($jmlh1,0,"","."))?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Pengajuan On Progress -->

            <!-- Pengajuan Lunas -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Jumlah Pengajuan Lunas <span>| Kendari</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo strval(number_format($jmlh,0,"","."))?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Pengajuan Lunas -->

      </div>
      <!-- END KENDARI -->

      <!-- WUA-WUA -->
      <div class="row">

        <?php
        $sql = "SELECT * FROM transaksi_wua WHERE status = 'waiting' ";
        $query = mysqli_query($conn, $sql);
        $jml = mysqli_num_rows($query);

        $sql = "SELECT * FROM transaksi_wua WHERE status = 'On Progress' ";
        $data1 = mysqli_query($conn, $sql);
        $jmlh1 = mysqli_num_rows($data1);

        $sql = "SELECT * FROM transaksi_wua WHERE status = 'Lunas' ";
        $data = mysqli_query($conn, $sql);
        $jmlh = mysqli_num_rows($data);

        ?>
        <!-- Left side columns -->

        <!-- Perlu Persetujuan -->
        <div class="col-xxl-4 col-md-4">
          <div class="card info-card danger-card">
            <div class="card-body">
              <h5 class="card-title">Perlu Persetujuan ? <span>| Wua-Wua</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6><?php echo strval(number_format($jml,0,"","."))?></h6>
                </div>
              </div>
            </div>

          </div>
        </div><!-- Perlu Persetujuan -->

        <!-- Pengajuan On Progress -->
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card customers-card">
              <div class="card-body">
                  <h5 class="card-title">Pengajuan On Progress <span>| Wua-Wua</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo strval(number_format($jmlh1,0,"","."))?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Pengajuan On Progress -->

            <!-- Pengajuan Lunas -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Jumlah Pengajuan Lunas <span>| Wua-Wua</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo strval(number_format($jmlh,0,"","."))?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Pengajuan Lunas -->

        </div>
        <!-- END WUA-WUA -->



      <!-- UNAAHA -->
      <div class="row">

        <?php
        $sql = "SELECT * FROM transaksi_una WHERE status = 'waiting' ";
        $query = mysqli_query($conn, $sql);
        $jml = mysqli_num_rows($query);

        $sql = "SELECT * FROM transaksi_una WHERE status = 'On Progress' ";
        $data1 = mysqli_query($conn, $sql);
        $jmlh1 = mysqli_num_rows($data1);

        $sql = "SELECT * FROM transaksi_una WHERE status = 'Lunas' ";
        $data = mysqli_query($conn, $sql);
        $jmlh = mysqli_num_rows($data);

        ?>
        <!-- Left side columns -->

        <!-- Perlu Persetujuan -->
        <div class="col-xxl-4 col-md-4">
          <div class="card info-card danger-card">
            <div class="card-body">
              <h5 class="card-title">Perlu Persetujuan ? <span>| Unaaha</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6><?php echo strval(number_format($jml,0,"","."))?></h6>
                </div>
              </div>
            </div>

          </div>
        </div><!-- Perlu Persetujuan -->

        <!-- Pengajuan On Progress -->
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card customers-card">
              <div class="card-body">
                  <h5 class="card-title">Pengajuan On Progress <span>| Unaaha</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo strval(number_format($jmlh1,0,"","."))?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Pengajuan On Progress -->

            <!-- Pengajuan Lunas -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Jumlah Pengajuan Lunas <span>| Unaaha</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo strval(number_format($jmlh,0,"","."))?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Pengajuan Lunas -->

        </div>
        <!-- END UNAAHA-->


      <!-- WAWOTOBI -->
      <div class="row">

        <?php
        $sql = "SELECT * FROM transaksi_wawo WHERE status = 'waiting' ";
        $query = mysqli_query($conn, $sql);
        $jml = mysqli_num_rows($query);

        $sql = "SELECT * FROM transaksi_wawo WHERE status = 'On Progress' ";
        $data1 = mysqli_query($conn, $sql);
        $jmlh1 = mysqli_num_rows($data1);

        $sql = "SELECT * FROM transaksi_wawo WHERE status = 'Lunas' ";
        $data = mysqli_query($conn, $sql);
        $jmlh = mysqli_num_rows($data);

        ?>
        <!-- Left side columns -->

        <!-- Perlu Persetujuan -->
        <div class="col-xxl-4 col-md-4">
          <div class="card info-card danger-card">
            <div class="card-body">
              <h5 class="card-title">Perlu Persetujuan ? <span>| Wawotobi</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6><?php echo strval(number_format($jml,0,"","."))?></h6>
                </div>
              </div>
            </div>

          </div>
        </div><!-- Perlu Persetujuan -->

        <!-- Pengajuan On Progress -->
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card customers-card">
              <div class="card-body">
                  <h5 class="card-title">Pengajuan On Progress <span>| Wawotobi</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo strval(number_format($jmlh1,0,"","."))?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Pengajuan On Progress -->

            <!-- Pengajuan Lunas -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Jumlah Pengajuan Lunas <span>| Wawotobi</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo strval(number_format($jmlh,0,"","."))?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Pengajuan Lunas -->

        </div>
        <!-- END WAWOTOBI -->
        

      <!-- KONDA -->
      <div class="row">

        <?php
        $sql = "SELECT * FROM transaksi_kon WHERE status = 'waiting' ";
        $query = mysqli_query($conn, $sql);
        $jml = mysqli_num_rows($query);

        $sql = "SELECT * FROM transaksi_kon WHERE status = 'On Progress' ";
        $data1 = mysqli_query($conn, $sql);
        $jmlh1 = mysqli_num_rows($data1);

        $sql = "SELECT * FROM transaksi_kon WHERE status = 'Lunas' ";
        $data = mysqli_query($conn, $sql);
        $jmlh = mysqli_num_rows($data);

        ?>
        <!-- Left side columns -->

        <!-- Perlu Persetujuan -->
        <div class="col-xxl-4 col-md-4">
          <div class="card info-card danger-card">
            <div class="card-body">
              <h5 class="card-title">Perlu Persetujuan ? <span>| Konda</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6><?php echo strval(number_format($jml,0,"","."))?></h6>
                </div>
              </div>
            </div>

          </div>
        </div><!-- Perlu Persetujuan -->

        <!-- Pengajuan On Progress -->
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card customers-card">
              <div class="card-body">
                  <h5 class="card-title">Pengajuan On Progress <span>| Konda</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo strval(number_format($jmlh1,0,"","."))?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Pengajuan On Progress -->

            <!-- Pengajuan Lunas -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Jumlah Pengajuan Lunas <span>| Konda</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo strval(number_format($jmlh,0,"","."))?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Pengajuan Lunas -->

        </div>
        <!-- KONDA -->

      <!-- Laeya -->
      <div class="row">

        <?php
        $sql = "SELECT * FROM transaksi_lae WHERE status = 'waiting' ";
        $query = mysqli_query($conn, $sql);
        $jml = mysqli_num_rows($query);

        $sql = "SELECT * FROM transaksi_lae WHERE status = 'On Progress' ";
        $data1 = mysqli_query($conn, $sql);
        $jmlh1 = mysqli_num_rows($data1);

        $sql = "SELECT * FROM transaksi_lae WHERE status = 'Lunas' ";
        $data = mysqli_query($conn, $sql);
        $jmlh = mysqli_num_rows($data);

        ?>
        <!-- Left side columns -->

        <!-- Perlu Persetujuan -->
        <div class="col-xxl-4 col-md-4">
          <div class="card info-card danger-card">
            <div class="card-body">
              <h5 class="card-title">Perlu Persetujuan ? <span>| Laeya</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6><?php echo strval(number_format($jml,0,"","."))?></h6>
                </div>
              </div>
            </div>

          </div>
        </div><!-- Perlu Persetujuan -->

        <!-- Pengajuan On Progress -->
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card customers-card">
              <div class="card-body">
                  <h5 class="card-title">Pengajuan On Progress <span>| Laeya</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo strval(number_format($jmlh1,0,"","."))?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Pengajuan On Progress -->

            <!-- Pengajuan Lunas -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Jumlah Pengajuan Lunas <span>| Laeya</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo strval(number_format($jmlh,0,"","."))?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Pengajuan Lunas -->

        </div>
        <!-- END Laeya -->

      <!-- Punggaluku -->
      <div class="row">

        <?php
        $sql = "SELECT * FROM transaksi_pun WHERE status = 'waiting' ";
        $query = mysqli_query($conn, $sql);
        $jml = mysqli_num_rows($query);

        $sql = "SELECT * FROM transaksi_pun WHERE status = 'On Progress' ";
        $data1 = mysqli_query($conn, $sql);
        $jmlh1 = mysqli_num_rows($data1);

        $sql = "SELECT * FROM transaksi_pun WHERE status = 'Lunas' ";
        $data = mysqli_query($conn, $sql);
        $jmlh = mysqli_num_rows($data);

        ?>
        <!-- Left side columns -->

        <!-- Perlu Persetujuan -->
        <div class="col-xxl-4 col-md-4">
          <div class="card info-card danger-card">
            <div class="card-body">
              <h5 class="card-title">Perlu Persetujuan ? <span>| Punggaluku</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6><?php echo strval(number_format($jml,0,"","."))?></h6>
                </div>
              </div>
            </div>

          </div>
        </div><!-- Perlu Persetujuan -->

        <!-- Pengajuan On Progress -->
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card customers-card">
              <div class="card-body">
                  <h5 class="card-title">Pengajuan On Progress <span>| Punggaluku</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo strval(number_format($jmlh1,0,"","."))?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Pengajuan On Progress -->

            <!-- Pengajuan Lunas -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Jumlah Pengajuan Lunas <span>| Punggaluku</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo strval(number_format($jmlh,0,"","."))?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Pengajuan Lunas -->

        </div>
        <!-- END Punggaluku -->


      <!-- Tinanggea -->
      <div class="row">

        <?php
        $sql = "SELECT * FROM transaksi_tin WHERE status = 'waiting' ";
        $query = mysqli_query($conn, $sql);
        $jml = mysqli_num_rows($query);

        $sql = "SELECT * FROM transaksi_tin WHERE status = 'On Progress' ";
        $data1 = mysqli_query($conn, $sql);
        $jmlh1 = mysqli_num_rows($data1);

        $sql = "SELECT * FROM transaksi_tin WHERE status = 'Lunas' ";
        $data = mysqli_query($conn, $sql);
        $jmlh = mysqli_num_rows($data);

        ?>
        <!-- Left side columns -->

        <!-- Perlu Persetujuan -->
        <div class="col-xxl-4 col-md-4">
          <div class="card info-card danger-card">
            <div class="card-body">
              <h5 class="card-title">Perlu Persetujuan ? <span>| Tinanggea</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6><?php echo strval(number_format($jml,0,"","."))?></h6>
                </div>
              </div>
            </div>

          </div>
        </div><!-- Perlu Persetujuan -->

        <!-- Pengajuan On Progress -->
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card customers-card">
              <div class="card-body">
                  <h5 class="card-title">Pengajuan On Progress <span>| Tinanggea</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo strval(number_format($jmlh1,0,"","."))?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Pengajuan On Progress -->

            <!-- Pengajuan Lunas -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Jumlah Pengajuan Lunas <span>| Tinanggea</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo strval(number_format($jmlh,0,"","."))?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Pengajuan Lunas -->

        </div>
        <!-- END Tinanggea -->

      <!-- Keraton -->
      <div class="row">

        <?php
        $sql = "SELECT * FROM transaksi_bau WHERE status = 'waiting' ";
        $query = mysqli_query($conn, $sql);
        $jml = mysqli_num_rows($query);

        $sql = "SELECT * FROM transaksi_bau WHERE status = 'On Progress' ";
        $data1 = mysqli_query($conn, $sql);
        $jmlh1 = mysqli_num_rows($data1);

        $sql = "SELECT * FROM transaksi_bau WHERE status = 'Lunas' ";
        $data = mysqli_query($conn, $sql);
        $jmlh = mysqli_num_rows($data);

        ?>
        <!-- Left side columns -->

        <!-- Perlu Persetujuan -->
        <div class="col-xxl-4 col-md-4">
          <div class="card info-card danger-card">
            <div class="card-body">
              <h5 class="card-title">Perlu Persetujuan ? <span>| Keraton</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6><?php echo strval(number_format($jml,0,"","."))?></h6>
                </div>
              </div>
            </div>

          </div>
        </div><!-- Perlu Persetujuan -->

        <!-- Pengajuan On Progress -->
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card customers-card">
              <div class="card-body">
                  <h5 class="card-title">Pengajuan On Progress <span>| Keraton</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo strval(number_format($jmlh1,0,"","."))?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Pengajuan On Progress -->

            <!-- Pengajuan Lunas -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Jumlah Pengajuan Lunas <span>| Keraton</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo strval(number_format($jmlh,0,"","."))?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Pengajuan Lunas -->

        </div>
        <!-- END Keraton -->

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
  <script src="../../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/chart.js/chart.min.js"></script>
  <script src="../../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../../assets/vendor/quill/quill.min.js"></script>
  <script src="../../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../../assets/js/main.js"></script>

</body>

</html>