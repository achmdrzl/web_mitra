<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Data Pengajuan Wawotobi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../../../assets/img/favicon3.png" rel="icon">
  <link href="../../../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../../../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../../../../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../../../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../../../assets/vendor/simple-datatables/style.css" rel="stylesheet">


  <!-- Datatables -->
  <!-- Css -->
  <link rel="stylesheet" href="../../../../../assets/DataTables/DataTables-1.11.3/css/dataTables.bootstrap5.min.css">
  <link href="../../../../../assets/bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../../../../assets/DataTables/Buttons-2.1.1/css/buttons.bootstrap5.min.css" rel="stylesheet">
  <!-- end Css -->

  <!-- Template Main CSS File -->
  <link href="../../../../assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="../../index.php" class="logo d-flex align-items-center">
        <img src="../../../../assets/img/logo1.png" alt="">
        <span class="d-none d-lg-block">Owner Panel</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../../../../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
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
              <a class="dropdown-item d-flex align-items-center" href="../../logout.php">
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
        <a class="nav-link collapsed" href="../../index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#acc-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Persetujuan Pengajuan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="acc-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="../../acc-kdi.php" >
              <i class="bi bi-circle"></i><span>Kota Kendari</span>
            </a>
          </li>
          <li>
            <a href="../../acc-wua.php">
              <i class="bi bi-circle"></i><span>Wua-Wua</span>
            </a>
          </li>
          <li>
            <a href="../../acc-konda.php">
              <i class="bi bi-circle"></i><span>Konda</span>
            </a>
          </li>
          <li>
            <a href="../../acc-laeya.php">
              <i class="bi bi-circle"></i><span>Laeya</span>
            </a>
          </li>
          <li>
            <a href="../../acc-punggaluku.php">
              <i class="bi bi-circle"></i><span>Punggaluku</span>
            </a>
          </li>
          <li>
            <a href="../../acc-tinanggea.php">
              <i class="bi bi-circle"></i><span>Tinanggea</span>
            </a>
          </li>
          <li>
            <a href="../../acc-unaaha.php">
              <i class="bi bi-circle"></i><span>Unaaha</span>
            </a>
          </li>
          <li>
            <a href="../../acc-wawotobi.php">
              <i class="bi bi-circle"></i><span>Wawotobi</span>
            </a>
          </li>
          <li>
            <a href="../../acc-keraton.php">
              <i class="bi bi-circle"></i><span>Keraton</span>
            </a>
          </li>

        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-heading">Kota Kendari</li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#Kendari-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Kendari</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="Kendari-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../../kendari/kendari/kdi-pengajuan.php">
              <i class="bi bi-circle"></i><span>Data Pengajuan</span>
            </a>
          </li>
          <li>
            <a href="../../kendari/kendari/kdi-tagihan.php">
              <i class="bi bi-circle"></i><span>Data Tagihan</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#wua-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Wua-Wua</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="wua-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../../kendari/wua-wua/wua-pengajuan.php">
              <i class="bi bi-circle"></i><span>Data Pengajuan</span>
            </a>
          </li>
          <li>
            <a href="../../kendari/wua-wua/wua-tagihan.php">
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
            <a href="../../konsel/konda/konda-pengajuan.php">
              <i class="bi bi-circle"></i><span>Data Pengajuan</span>
            </a>
          </li>
          <li>
            <a href="../../konsel/konda/konda-tagihan.php">
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
            <a href="../../konsel/laeya/laeya-pengajuan.php">
              <i class="bi bi-circle"></i><span>Data Pengajuan</span>
            </a>
          </li>
          <li>
            <a href="../../konsel/laeya/laeya-tagihan.php">
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
            <a href="../../konsel/punggaluku/punggaluku-pengajuan.php">
              <i class="bi bi-circle"></i><span>Data Pengajuan</span>
            </a>
          </li>
          <li>
            <a href="../../konsel/punggaluku/punggaluku-tagihan.php">
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
            <a href="../../konsel/tinanggea/tinanggea-pengajuan.php">
              <i class="bi bi-circle"></i><span>Data Pengajuan</span>
            </a>
          </li>
          <li>
            <a href="../../konsel/tinanggea/tinanggea-tagihan.php">
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
            <a href="../unaaha/unaaha-pengajuan.php" >
              <i class="bi bi-circle"></i><span>Data Pengajuan</span>
            </a>
          </li>
          <li>
            <a href="../unaaha/unaaha-tagihan.php">
              <i class="bi bi-circle"></i><span>Data Tagihan</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#Wawotobi-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Wawotobi</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="Wawotobi-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="wawotobi-pengajuan.php" class="active">
              <i class="bi bi-circle"></i><span>Data Pengajuan</span>
            </a>
          </li>
          <li>
            <a href="wawotobi-tagihan.php">
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
            <a href="../../bau-bau/keraton/keraton-pengajuan.php">
              <i class="bi bi-circle"></i><span>Data Pengajuan</span>
            </a>
          </li>
          <li>
            <a href="../../bau-bau/keraton/keraton-tagihan.php">
              <i class="bi bi-circle"></i><span>Data Tagihan</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="../../pages-register.php">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Pengajuan Wawotobi</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
          <li class="breadcrumb-item">Data Pengajuan</li>
          <li class="breadcrumb-item active">Wawotobi</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Tagihan</h5>
              <!-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p> -->

              <!-- Table with stripped rows -->
              <table id="table" class="table table-striped table-bordered datatables" width="100%">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kode Transaksi</th>
                    <th scope="col">Tanggal Cair</th>
                    <th scope="col">Resort</th>
                    <th scope="col">Nama PDL</th>
                    <th scope="col">Nama Anggota</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Agunan</th>
                    <th scope="col">Pinjaman Baru</th>
                    <th scope="col">Pinjaman Lama</th>
                    <th scope="col">Foto Kartu</th>
                    <th scope="col">Foto Nasabah</th>
                    <th scope="col">Persetujuan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Ket</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  include '../../../../../koneksi.php';

                  $sql = "SELECT * FROM transaksi_wawo WHERE status = 'On Progress' OR status = 'Lunas' OR status = 'Di Tolak' ";
                  $data = mysqli_query($conn, $sql);

                  foreach($data as $db) {
                    $id = $db["id"];
                    $code = $db["code"];
                    $tgl = $db["tgl"];
                    $resort = $db["resort"];
                    $nama_pdl = $db["nama_pdl"];
                    $nama_anggota = $db["nama_anggota"];
                    $alamat = $db["alamat"];
                    $agunan = $db["agunan"];
                    $pinjam_baru = $db["pinjam_baru"];
                    $pinjam_lama = $db["pinjam_lama"];
                    
                    $foto_jaminan = $db["foto_jaminan"];
                    $foto_nasabah = $db["foto_nasabah"];

                    $path_kartu = "../../../admin/kendari/kendari/img/jaminan/".$foto_jaminan;
                    $path_nasabah = "../../../admin/kendari/kendari/img/nasabah/".$foto_nasabah;
                    $acc = $db["persetujuan"];
                    $status = $db["status"];
                    $ket = $db["ket"];

                    echo "<tr>";
                    echo "<th scope='row'>$id</th>";
                      echo "<td>$code</td>";
                      echo "<td>$tgl</td>";
                      echo "<td>$resort</td>";
                      echo "<td>$nama_pdl</td>";
                      echo "<td>$nama_anggota</td>";
                      echo "<td>$alamat</td>";
                      echo "<td>$agunan</td>";
                      echo "<td> Rp.".strval(number_format($pinjam_baru,0,"",".")).",-"."</td>";
                      echo "<td> Rp.".strval(number_format($pinjam_lama,0,"",".")).",-"."</td>";

                      echo "<td><a href='$path_kartu' download><img src='$path_kartu' height='75px'></a></td>";
                      echo "<td><a href='$path_nasabah' download><img src='$path_nasabah' height='75px'></a></td>";
                      
                      echo "<td> Rp.".strval(number_format($acc,0,"",".")).",-"."</td>";

                      if($status == 'On Progress'){
                        echo "<td>";
                          echo "<span class='badge bg-warning text-dark'><i class='bi bi-arrow-clockwise'></i> $status</span>";
                        echo "</td>";
                      }else if($status == 'Di Tolak'){
                        echo "<td>";
                          echo "<span class='badge bg-danger'><i class='bi bi-exclamation-octagon me-1'></i> $status</span>";
                        echo "</td>";
                      }else{
                        echo "<td>";
                          echo "<span class='badge bg-success'><i class='bi bi-check-circle me-1'></i> $status</span>";
                        echo "</td>";
                      }

                      if($ket == 'Sudah Cair'){
                        echo "<td>";
                          echo "<span class='badge bg-success'><i class='bi bi-check-circle me-1'></i> $ket</span>";
                        echo "</td>";
                      }else{
                        echo "<td>";
                          echo "<span class='badge bg-danger'><i class='bi bi-exclamation-octagon me-1'></i> $ket</span>";
                        echo "</td>";
                      }
                    echo "</tr>";
                  }
                  ?>
                </tbody>
            </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

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
  <script src="../../../../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <!-- <script src="../../../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
  <script src="../../../../assets/vendor/chart.js/chart.min.js"></script>
  <script src="../../../../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../../../../assets/vendor/quill/quill.min.js"></script>
  <script src="../../../../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../../../../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../../../../assets/vendor/php-email-form/validate.js"></script>

  <!-- Datatables -->
  <!-- JS -->
  <script src="../../../../../assets/js/jquery.min.js"></script>
  <script src="../../../../../assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.js"></script>
  <script src="../../../../../assets/DataTables/DataTables-1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="../../../../../assets/DataTables/DataTables-1.11.3/js/dataTables.bootstrap5.min.js"></script>
  <script src="../../../../../assets/DataTables/Buttons-2.1.1/js/dataTables.buttons.min.js"></script>
  <script src="../../../../../assets/DataTables/Buttons-2.1.1/js/buttons.bootstrap4.min.js"></script>
  <script src="../../../../../assets/DataTables/JSZip-2.5.0/jszip.min.js"></script>
  <script src="../../../../../assets/DataTables/pdfmake-0.1.36/pdfmake.min.js"></script>
  <script src="../../../../../assets/DataTables/pdfmake-0.1.36/vfs_fonts.js"></script>
  <script src="../../../../../assets/DataTables/Buttons-2.1.1/js/buttons.html5.min.js"></script>
  <script src="../../../../../assets/DataTables/Buttons-2.1.1/js/buttons.print.min.js"></script>
  <script src="../../../../../assets/DataTables/Buttons-2.1.1/js/buttons.colVis.min.js"></script>

  <script>
    $(document).ready(function(){
      var table = $('#table').DataTable( {
        "scrollX": true,
        buttons: ['copy','excel', 'colvis', 'print', 
        {
            extend: 'pdfHtml5',
            orientation: 'landscape',
            pageSize: 'A4'
        }
      ],
        dom:
        // "<'row'<'col-md-8'>>" +
        // "<'row'<'col-md-3'>>" +
        // "<'row'<'col-md-3'l><'col-md-6'B><'col-md-3'f>>" +
        // "<'row'<'col-md-3'><'col-md-6'><'col-md-3'>>" +
        // "<'row'<'col-md-12'tr>>" +
        // "<'row'<'col-md-8'>>" +
        // "<'row'<'col-md-8'>>" +
        // "<'row'<'col-md-4'i><'col-md-8'p>>",
        "<'row'<'col-sm-12 col-md-3'l><'col-sm-12 col-md-5'B><'col-sm-12 col-md-4'f>>" +
        "<'row'<'col-sm-12'tr>>" +
        "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
        lengthMenu:[
          [5,10,25,50,100,-1],
          [5,10,25,50,100,"All"]
        ]
      } );
    // $(document).ready(function() {
    //     var table = $('#table').DataTable( {
    //         buttons: ['print', 'excel', 'pdf', 'colvis' ],
    //         dom:
    //         "<'row'<'col-md-3'l><'col-md-5'B><'cold-md-4'f>>" +
    //         "<'row'<'col-md-12'tr>>" +
    //         "<'row'<'col-md5'i><'col-md-7'p>>",
    //         lengthMenu:[
    //           [10,25,50,100,-1],
    //           [10,25,50,100,"All"]
    //         ]
    //     } );
    } );
  </script>

  <!-- Template Main JS File -->
  <script src="../../../../assets/js/main.js"></script>

</body>

</html>