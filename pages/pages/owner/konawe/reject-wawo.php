<?php 

    include "../../../../koneksi.php";

    $id = $_GET["id"];

    $sql = "SELECT * FROM transaksi_wawo WHERE id = $id";
    $data = mysqli_query($conn, $sql);

    foreach($data as $db){
        $id = $db["id"];
        $code = $db["code"];
        date_default_timezone_set('Asia/Jakarta');
        $tgl = date('Y-m-d');
        // $tgl = $db["tgl"];
        $resort = $db["resort"];
        $nama_pdl = $db["nama_pdl"];
        $nama_anggota = $db["nama_anggota"];
        $alamat = $db["alamat"];
        $agunan = $db["agunan"];
        $pinjam_lama = $db["pinjam_lama"];
        $pinjam_baru = $db["pinjam_baru"];

        $foto_kartu = $db["foto_jaminan"];
        $foto_nasabah = $db["foto_nasabah"];

        $acc = $db["persetujuan"];
    }

    // $besar_pinjaman = $pinjam_baru + $pinjam_lama;


    // Update data "status" menjadi "pending" di table transaksi_kdi
    $sql = "UPDATE transaksi_wawo SET status = 'Di Tolak', ket = 'Di Tolak' WHERE id = $id";
    mysqli_query($conn, $sql);

    
    // // insert data ke table pengjuan_kdi
    // $sql = "INSERT INTO pengajuan_kdi(tgl, code, resort, nama_pdl, nama_anggota, alamat, agunan, pinjam_baru, pinjam_lama, foto_jaminan, foto_nasabah, persetujuan, status, ket) 
    //         VALUES ('$tgl', '$code', '$resort', '$nama_pdl', '$nama_anggota', '$alamat', '$agunan', '$pinjam_baru', '$pinjam_lama', '$foto_kartu', '$foto_nasabah', '$acc', 'Di Tolak', 'Di Tolak')";

    // mysqli_query($conn, $sql);

    header("Location: ../acc-wawotobi.php");

?>