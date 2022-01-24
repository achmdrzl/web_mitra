<?php 

    include "../../../../koneksi.php";

    $id = $_GET["id"];

    $sql = "SELECT * FROM transaksi_una WHERE id = $id";
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

    $besar_pinjaman = $pinjam_lama +  $acc;
    $saldo = $pinjam_lama + $acc;


    // Update data "status" menjadi "pending" di table transaksi_kdi
    $sql = "UPDATE transaksi_una SET status = 'On Progress', ket = 'Sudah Cair' WHERE id = $id";
    // if($saldo == 0){
    //     $sql = "UPDATE transaksi_kdi SET status = 'Lunas' WHERE id = $id";
    // }
    mysqli_query($conn, $sql);

    // insert data ke table tagih_kdi
    $sql = "INSERT INTO tagih_una(tgl_cair, tgl_bayar, code, nama_anggota, besar_pinjaman, agunan, besar_angsuran, saldo_awal, saldo_akhir, denda_keterlambatan, ket)
            VALUES ('$tgl', '-', '$code', '$nama_anggota', '$besar_pinjaman','$agunan', '-', '-', '$saldo', '-', '-')";

    mysqli_query($conn, $sql);

    
    // insert data ke table pengjuan_kdi
    // $sql = "INSERT INTO pengajuan_kdi(tgl, code, resort, nama_pdl, nama_anggota, alamat, agunan, pinjam_baru, pinjam_lama, foto_jaminan, foto_nasabah, persetujuan, status, ket) 
    //         VALUES ('$tgl', '$code', '$resort', '$nama_pdl', '$nama_anggota', '$alamat', '$agunan', '$pinjam_baru', '$pinjam_lama', '$foto_kartu', '$foto_nasabah', '$acc', 'On Progress', 'Sudah Cair')";

    // mysqli_query($conn, $sql);
    
    echo"<script>alert('Pengajuan Berhasil di Setujui!');</script>";

    header("Location: ../acc-unaaha.php");

?>