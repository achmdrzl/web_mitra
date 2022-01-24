-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jan 2022 pada 09.07
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mitra`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan_kdi`
--

CREATE TABLE `pengajuan_kdi` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `resort` varchar(255) NOT NULL,
  `nama_pdl` varchar(255) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `agunan` varchar(255) NOT NULL,
  `pinjam_baru` int(11) NOT NULL,
  `pinjam_lama` int(11) NOT NULL,
  `foto_jaminan` varchar(255) NOT NULL,
  `foto_nasabah` varchar(255) NOT NULL,
  `persetujuan` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengajuan_kdi`
--

INSERT INTO `pengajuan_kdi` (`id`, `code`, `tgl`, `resort`, `nama_pdl`, `nama_anggota`, `alamat`, `agunan`, `pinjam_baru`, `pinjam_lama`, `foto_jaminan`, `foto_nasabah`, `persetujuan`, `status`, `ket`) VALUES
(11, 'Mitra2612', '2022-01-16', 'Kendari', 'Wicak', 'Mane', 'Tupai', 'Rumah', 350000, 250000, 'Jaminan_1395_Mane.jpg', 'Nasabah_2532_Mane.jpg', 320000, 'Di Tolak', 'Di Tolak'),
(12, 'Mitra903_Putra', '2022-01-16', 'Kendari', 'Yudi', 'Putra', 'tunggala', 'SK rumah', 450000, 250000, 'Jaminan_8529_Putra.jpg', 'Nasabah_1551_Putra.jpg', 400000, 'On Progress', 'Sudah Cair'),
(13, 'Mitra6189', '2022-01-16', 'Kendari', 'Rizal', 'Yudi', 'Batu Marupa', 'Sk Rumah', 500000, 250000, 'Jaminan_2507_Yudi.jpg', 'Nasabah_5972_Yudi.jpg', 450000, 'On Progress', 'Sudah Cair'),
(14, 'Mitra3701', '2022-01-16', 'Kendari', 'Mane', 'Mane', 'Tupaii', 'Sk tanah', 250000, 0, 'Jaminan_3422_Mane.jpg', 'Nasabah_7272_Mane.jpg', 150000, 'On Progress', 'Sudah Cair'),
(15, 'Mitra7197', '2022-01-16', 'Kendari', 'Mane', 'Yudi', 'Anawai', 'SK Tanah', 4500000, 0, 'Jaminan_3214_Yudi.jpg', 'Nasabah_8649_Yudi.jpg', 4000000, 'Di Tolak', 'Di Tolak'),
(16, 'Mitra7623', '2022-01-16', 'awdawd', 'awdawd', 'awdawd', 'awdadwa', 'dawd', 123123, 21312, 'Jaminan_9213_awdawd.jpg', 'Nasabah_8506_awdawd.jpg', 1231231, 'Di Tolak', 'Di Tolak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tagih_bau`
--

CREATE TABLE `tagih_bau` (
  `id` int(11) NOT NULL,
  `tgl_cair` date NOT NULL,
  `tgl_bayar` date NOT NULL,
  `code` varchar(255) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `besar_pinjaman` int(11) NOT NULL,
  `agunan` varchar(255) NOT NULL,
  `besar_angsuran` int(11) NOT NULL,
  `saldo_awal` int(11) NOT NULL,
  `saldo_akhir` int(11) NOT NULL,
  `denda_keterlambatan` int(11) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tagih_bau`
--

INSERT INTO `tagih_bau` (`id`, `tgl_cair`, `tgl_bayar`, `code`, `nama_anggota`, `besar_pinjaman`, `agunan`, `besar_angsuran`, `saldo_awal`, `saldo_akhir`, `denda_keterlambatan`, `ket`) VALUES
(1, '2022-01-21', '2022-01-22', 'Mitra9803', 'Suprapto', 550000, 'Sk Tanah', 50000, 550000, 0, 0, 'Tunai'),
(2, '2022-01-21', '0000-00-00', 'Mitra7022', 'Mane', 4750000, 'Sk Tanah', 0, 0, 4750000, 0, '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tagih_kdi`
--

CREATE TABLE `tagih_kdi` (
  `id` int(11) NOT NULL,
  `tgl_cair` date NOT NULL,
  `tgl_bayar` date NOT NULL,
  `code` varchar(255) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `besar_pinjaman` int(11) NOT NULL,
  `agunan` varchar(255) NOT NULL,
  `besar_angsuran` int(11) NOT NULL,
  `saldo_awal` int(11) NOT NULL,
  `saldo_akhir` int(11) NOT NULL,
  `denda_keterlambatan` int(11) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tagih_kdi`
--

INSERT INTO `tagih_kdi` (`id`, `tgl_cair`, `tgl_bayar`, `code`, `nama_anggota`, `besar_pinjaman`, `agunan`, `besar_angsuran`, `saldo_awal`, `saldo_akhir`, `denda_keterlambatan`, `ket`) VALUES
(1, '2022-01-16', '0000-00-00', 'Mitra8905', 'Yudi', 3500000, 'Sk. Rumah', 0, 0, 3500000, 0, '-'),
(3, '2022-01-16', '2022-03-16', 'Mitra6977', 'Yuda', 2000000, 'Sk. Tanah', 750000, 2000000, 0, 25000, 'Tunai'),
(4, '2022-01-16', '0000-00-00', 'Mitra2155', 'Idul', 3750000, 'Sk. Tanah', 0, 0, 3750000, 0, '-'),
(5, '0000-00-00', '0000-00-00', '', '', 0, '', 0, 0, 0, 0, '-'),
(6, '2022-01-17', '2022-02-09', 'Mitra7474', 'Eko', 3500000, 'Sk Tanah', 750000, 750000, 2750000, 0, 'Transfer'),
(7, '2022-01-19', '0000-00-00', 'Mitra9263', 'Yudi', 5500000, 'Sk. Tanah', 0, 0, 5500000, 0, '-'),
(8, '2022-01-19', '0000-00-00', 'Mitra3164', 'Eko', 3750000, 'Sk Rumah', 0, 0, 3750000, 0, '-'),
(9, '2022-01-19', '0000-00-00', 'Mitra2323', 'Ekos', 3500000, 'SK rumah', 0, 0, 3500000, 0, '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tagih_kon`
--

CREATE TABLE `tagih_kon` (
  `id` int(11) NOT NULL,
  `tgl_cair` date NOT NULL,
  `tgl_bayar` date NOT NULL,
  `code` varchar(255) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `besar_pinjaman` int(11) NOT NULL,
  `agunan` varchar(255) NOT NULL,
  `besar_angsuran` int(11) NOT NULL,
  `saldo_awal` int(11) NOT NULL,
  `saldo_akhir` int(11) NOT NULL,
  `denda_keterlambatan` int(11) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tagih_kon`
--

INSERT INTO `tagih_kon` (`id`, `tgl_cair`, `tgl_bayar`, `code`, `nama_anggota`, `besar_pinjaman`, `agunan`, `besar_angsuran`, `saldo_awal`, `saldo_akhir`, `denda_keterlambatan`, `ket`) VALUES
(1, '2022-01-21', '2022-01-22', 'Mitra6328', 'Yuda', 3000000, 'Sk tanah', 500000, 500000, 2500000, 0, 'Tunai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tagih_lae`
--

CREATE TABLE `tagih_lae` (
  `id` int(11) NOT NULL,
  `tgl_cair` date NOT NULL,
  `tgl_bayar` date NOT NULL,
  `code` varchar(255) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `besar_pinjaman` int(11) NOT NULL,
  `agunan` varchar(255) NOT NULL,
  `besar_angsuran` int(11) NOT NULL,
  `saldo_awal` int(11) NOT NULL,
  `saldo_akhir` int(11) NOT NULL,
  `denda_keterlambatan` int(11) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tagih_pun`
--

CREATE TABLE `tagih_pun` (
  `id` int(11) NOT NULL,
  `tgl_cair` date NOT NULL,
  `tgl_bayar` date NOT NULL,
  `code` varchar(255) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `besar_pinjaman` int(11) NOT NULL,
  `agunan` varchar(255) NOT NULL,
  `besar_angsuran` int(11) NOT NULL,
  `saldo_awal` int(11) NOT NULL,
  `saldo_akhir` int(11) NOT NULL,
  `denda_keterlambatan` int(11) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tagih_tin`
--

CREATE TABLE `tagih_tin` (
  `id` int(11) NOT NULL,
  `tgl_cair` date NOT NULL,
  `tgl_bayar` date NOT NULL,
  `code` varchar(255) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `besar_pinjaman` int(11) NOT NULL,
  `agunan` varchar(255) NOT NULL,
  `besar_angsuran` int(11) NOT NULL,
  `saldo_awal` int(11) NOT NULL,
  `saldo_akhir` int(11) NOT NULL,
  `denda_keterlambatan` int(11) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tagih_una`
--

CREATE TABLE `tagih_una` (
  `id` int(11) NOT NULL,
  `tgl_cair` date NOT NULL,
  `tgl_bayar` date NOT NULL,
  `code` varchar(255) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `besar_pinjaman` int(11) NOT NULL,
  `agunan` varchar(255) NOT NULL,
  `besar_angsuran` int(11) NOT NULL,
  `saldo_awal` int(11) NOT NULL,
  `saldo_akhir` int(11) NOT NULL,
  `denda_keterlambatan` int(11) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tagih_una`
--

INSERT INTO `tagih_una` (`id`, `tgl_cair`, `tgl_bayar`, `code`, `nama_anggota`, `besar_pinjaman`, `agunan`, `besar_angsuran`, `saldo_awal`, `saldo_akhir`, `denda_keterlambatan`, `ket`) VALUES
(1, '2022-01-21', '2022-01-30', 'Mitra2522', 'Mane', 22000000, 'sk tanah', 22000000, 22000000, 0, 0, 'Transfer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tagih_wawo`
--

CREATE TABLE `tagih_wawo` (
  `id` int(11) NOT NULL,
  `tgl_cair` date NOT NULL,
  `tgl_bayar` date NOT NULL,
  `code` varchar(255) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `besar_pinjaman` int(11) NOT NULL,
  `agunan` varchar(255) NOT NULL,
  `besar_angsuran` int(11) NOT NULL,
  `saldo_awal` int(11) NOT NULL,
  `saldo_akhir` int(11) NOT NULL,
  `denda_keterlambatan` int(11) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tagih_wawo`
--

INSERT INTO `tagih_wawo` (`id`, `tgl_cair`, `tgl_bayar`, `code`, `nama_anggota`, `besar_pinjaman`, `agunan`, `besar_angsuran`, `saldo_awal`, `saldo_akhir`, `denda_keterlambatan`, `ket`) VALUES
(1, '2022-01-21', '2022-02-11', 'Mitra6833', 'Mane', 2500000, 'sk tanah', 1500000, 2500000, 0, 25000, 'Tunai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tagih_wua`
--

CREATE TABLE `tagih_wua` (
  `id` int(11) NOT NULL,
  `tgl_cair` date NOT NULL,
  `tgl_bayar` date NOT NULL,
  `code` varchar(255) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `besar_pinjaman` int(11) NOT NULL,
  `agunan` varchar(255) NOT NULL,
  `besar_angsuran` int(11) NOT NULL,
  `saldo_awal` int(11) NOT NULL,
  `saldo_akhir` int(11) NOT NULL,
  `denda_keterlambatan` int(11) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tagih_wua`
--

INSERT INTO `tagih_wua` (`id`, `tgl_cair`, `tgl_bayar`, `code`, `nama_anggota`, `besar_pinjaman`, `agunan`, `besar_angsuran`, `saldo_awal`, `saldo_akhir`, `denda_keterlambatan`, `ket`) VALUES
(1, '2022-01-16', '2022-01-23', 'Mitra4988', 'putra', 3000000, 'sk rumah', 2000000, 3000000, 0, 25000, 'Transfer'),
(2, '2022-01-17', '2022-02-10', 'Mitra2924', 'Wicak', 3500000, 'Sk Rumah', 750000, 750000, 2750000, 0, 'Transfer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_bau`
--

CREATE TABLE `transaksi_bau` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `resort` varchar(255) NOT NULL,
  `nama_pdl` varchar(255) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `agunan` varchar(255) NOT NULL,
  `pinjam_baru` int(11) NOT NULL,
  `pinjam_lama` int(11) NOT NULL,
  `foto_jaminan` varchar(255) NOT NULL,
  `foto_nasabah` varchar(255) NOT NULL,
  `persetujuan` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi_bau`
--

INSERT INTO `transaksi_bau` (`id`, `code`, `tgl`, `resort`, `nama_pdl`, `nama_anggota`, `alamat`, `agunan`, `pinjam_baru`, `pinjam_lama`, `foto_jaminan`, `foto_nasabah`, `persetujuan`, `status`, `ket`) VALUES
(1, 'Mitra9803', '2022-01-22', 'Keraton', 'Lala', 'Suprapto', 'Jl. Binongko', 'Sk Tanah', 350000, 250000, 'Jaminan_4433_Suprapto.jpg', 'Nasabah_5636_Suprapto.jpg', 300000, 'Lunas', 'Sudah Cair'),
(2, 'Mitra7022', '2022-01-21', 'Keraton', 'Wicak', 'Mane', 'Jl. Betoambari', 'Sk Tanah', 5000000, 0, 'Jaminan_1352_Mane.jpg', 'Nasabah_7629_Mane.jpg', 4750000, 'On Progress', 'Sudah Cair'),
(3, 'Mitra2831', '2022-01-21', 'Keraton', 'Wicak', 'Mane', 'Jl. Bau bau', 'Sk tanah', 2500000, 500000, 'Jaminan_5889_Mane.jpg', 'Nasabah_867_Mane.jpg', 2000000, 'Di Tolak', 'Di Tolak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_kdi`
--

CREATE TABLE `transaksi_kdi` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `resort` varchar(255) NOT NULL,
  `nama_pdl` varchar(255) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `agunan` varchar(255) NOT NULL,
  `pinjam_baru` int(11) NOT NULL,
  `pinjam_lama` int(11) NOT NULL,
  `foto_jaminan` varchar(255) NOT NULL,
  `foto_nasabah` varchar(255) NOT NULL,
  `persetujuan` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi_kdi`
--

INSERT INTO `transaksi_kdi` (`id`, `code`, `tgl`, `resort`, `nama_pdl`, `nama_anggota`, `alamat`, `agunan`, `pinjam_baru`, `pinjam_lama`, `foto_jaminan`, `foto_nasabah`, `persetujuan`, `status`, `ket`) VALUES
(1, 'Mitra8905', '2022-01-16', 'Kendari', 'Putra', 'Yudi', 'Jl. Anawai', 'Sk. Rumah', 1500000, 2500000, 'Jaminan_5392_Yudi.jpg', 'Nasabah_4458_Yudi.jpg', 1000000, 'On Progress', 'Sudah Cair'),
(2, 'Mitra6977', '2022-01-16', 'anggoeya', 'Putra', 'Yuda', 'Jl. Anawai', 'Sk. Tanah', 2500000, 0, 'Jaminan_1473_Yuda.jpg', 'Nasabah_6381_Yuda.jpg', 2000000, 'Lunas', 'Sudah Cair'),
(3, 'Mitra6466', '2022-01-16', 'awdad', 'awdawd', 'awdaw', 'awdad', 'awdwad', 222, 222, 'Jaminan_4837_awdaw.jpg', 'Nasabah_3016_awdaw.jpg', 2222, 'Di Tolak', 'Di Tolak'),
(5, 'Mitra2155', '2022-01-13', 'Kendari', 'Idul', 'Idul', 'Jl. Anawai', 'Sk. Tanah', 1500000, 2500000, 'Jaminan_9236_Idul.jpg', 'Nasabah_2232_Idul.jpg', 1250000, 'On Progress', 'Sudah Cair'),
(6, 'Mitra9263', '2022-01-16', 'Kendari', 'Wicak', 'Yudi', 'Jl. Anawai', 'Sk. Tanah', 3500000, 2500000, 'Jaminan_1469_Yudi.jpg', 'Nasabah_1149_Yudi.jpg', 3000000, 'On Progress', 'Sudah Cair'),
(7, 'Mitra7474', '2022-01-18', 'Kendari', 'Riki', 'Eko', 'Jl. Lakidende', 'Sk Tanah', 4000000, 0, 'Jaminan_3819_Eko.jpg', 'Nasabah_5350_Eko.jpg', 3500000, 'On Progress', 'Sudah Cair'),
(8, 'Mitra3164', '2022-01-28', 'Kendari', 'Wicak', 'Eko', 'Jl. Anawai', 'Sk Rumah', 1500000, 2500000, 'Jaminan_2790_Eko.jpg', 'Nasabah_1872_Eko.jpg', 1250000, 'On Progress', 'Sudah Cair'),
(9, 'Mitra2323', '2022-01-20', 'Kendari', 'Wicak', 'Ekos', 'JL anawai', 'SK rumah', 2500000, 1500000, 'Jaminan_7368_Ekos.jpg', 'Nasabah_5179_Ekos.jpg', 2000000, 'On Progress', 'Sudah Cair');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_kon`
--

CREATE TABLE `transaksi_kon` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `resort` varchar(255) NOT NULL,
  `nama_pdl` varchar(255) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `agunan` varchar(255) NOT NULL,
  `pinjam_baru` int(11) NOT NULL,
  `pinjam_lama` int(11) NOT NULL,
  `foto_jaminan` varchar(255) NOT NULL,
  `foto_nasabah` varchar(255) NOT NULL,
  `persetujuan` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi_kon`
--

INSERT INTO `transaksi_kon` (`id`, `code`, `tgl`, `resort`, `nama_pdl`, `nama_anggota`, `alamat`, `agunan`, `pinjam_baru`, `pinjam_lama`, `foto_jaminan`, `foto_nasabah`, `persetujuan`, `status`, `ket`) VALUES
(1, 'Mitra6328', '2022-01-21', 'Kendari', 'Kuku', 'Yuda', 'Jl. Anawai', 'Sk tanah', 2500000, 500000, 'Jaminan_645_Yuda.jpg', 'Nasabah_439_Yuda.jpg', 2500000, 'On Progress', 'Sudah Cair');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_lae`
--

CREATE TABLE `transaksi_lae` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `resort` varchar(255) NOT NULL,
  `nama_pdl` varchar(255) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `agunan` varchar(255) NOT NULL,
  `pinjam_baru` int(11) NOT NULL,
  `pinjam_lama` int(11) NOT NULL,
  `foto_jaminan` varchar(255) NOT NULL,
  `foto_nasabah` varchar(255) NOT NULL,
  `persetujuan` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_pun`
--

CREATE TABLE `transaksi_pun` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `resort` varchar(255) NOT NULL,
  `nama_pdl` varchar(255) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `agunan` varchar(255) NOT NULL,
  `pinjam_baru` int(11) NOT NULL,
  `pinjam_lama` int(11) NOT NULL,
  `foto_jaminan` varchar(255) NOT NULL,
  `foto_nasabah` varchar(255) NOT NULL,
  `persetujuan` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_tin`
--

CREATE TABLE `transaksi_tin` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `resort` varchar(255) NOT NULL,
  `nama_pdl` varchar(255) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `agunan` varchar(255) NOT NULL,
  `pinjam_baru` int(11) NOT NULL,
  `pinjam_lama` int(11) NOT NULL,
  `foto_jaminan` varchar(255) NOT NULL,
  `foto_nasabah` varchar(255) NOT NULL,
  `persetujuan` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_una`
--

CREATE TABLE `transaksi_una` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `resort` varchar(255) NOT NULL,
  `nama_pdl` varchar(255) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `agunan` varchar(255) NOT NULL,
  `pinjam_baru` int(11) NOT NULL,
  `pinjam_lama` int(11) NOT NULL,
  `foto_jaminan` varchar(255) NOT NULL,
  `foto_nasabah` varchar(255) NOT NULL,
  `persetujuan` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi_una`
--

INSERT INTO `transaksi_una` (`id`, `code`, `tgl`, `resort`, `nama_pdl`, `nama_anggota`, `alamat`, `agunan`, `pinjam_baru`, `pinjam_lama`, `foto_jaminan`, `foto_nasabah`, `persetujuan`, `status`, `ket`) VALUES
(1, 'Mitra8313', '2022-01-21', 'Keraton', 'Wicak', 'Mane', 'Jl. kendari', 'Sk rumah', 2500000, 500000, 'Jaminan_5324_Mane.jpg', 'Nasabah_1849_Mane.jpg', 2000000, 'Di Tolak', 'Di Tolak'),
(2, 'Mitra2522', '2022-01-22', 'Keraton', 'Wicak', 'Mane', 'Jl. konawe', 'sk tanah', 20000000, 2000000, 'Jaminan_3162_Mane.jpg', 'Nasabah_4634_Mane.jpg', 20000000, 'Lunas', 'Sudah Cair');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_wawo`
--

CREATE TABLE `transaksi_wawo` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `resort` varchar(255) NOT NULL,
  `nama_pdl` varchar(255) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `agunan` varchar(255) NOT NULL,
  `pinjam_baru` int(11) NOT NULL,
  `pinjam_lama` int(11) NOT NULL,
  `foto_jaminan` varchar(255) NOT NULL,
  `foto_nasabah` varchar(255) NOT NULL,
  `persetujuan` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi_wawo`
--

INSERT INTO `transaksi_wawo` (`id`, `code`, `tgl`, `resort`, `nama_pdl`, `nama_anggota`, `alamat`, `agunan`, `pinjam_baru`, `pinjam_lama`, `foto_jaminan`, `foto_nasabah`, `persetujuan`, `status`, `ket`) VALUES
(1, 'Mitra6833', '2022-01-21', 'Keraton', 'Wicak', 'Mane', 'awadawd', 'sk tanah', 2500000, 500000, 'Jaminan_4741_Mane.jpg', 'Nasabah_2985_Mane.jpg', 2000000, 'Lunas', 'Sudah Cair'),
(2, 'Mitra5558', '2022-01-21', 'Keraton', 'Wicak', 'Mane', 'awdada', 'sk tanah', 2500000, 0, 'Jaminan_2059_Mane.jpg', 'Nasabah_3849_Mane.jpg', 2000000, 'Di Tolak', 'Di Tolak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_wua`
--

CREATE TABLE `transaksi_wua` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `resort` varchar(255) NOT NULL,
  `nama_pdl` varchar(255) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `agunan` varchar(255) NOT NULL,
  `pinjam_baru` int(11) NOT NULL,
  `pinjam_lama` int(11) NOT NULL,
  `foto_jaminan` varchar(255) NOT NULL,
  `foto_nasabah` varchar(255) NOT NULL,
  `persetujuan` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi_wua`
--

INSERT INTO `transaksi_wua` (`id`, `code`, `tgl`, `resort`, `nama_pdl`, `nama_anggota`, `alamat`, `agunan`, `pinjam_baru`, `pinjam_lama`, `foto_jaminan`, `foto_nasabah`, `persetujuan`, `status`, `ket`) VALUES
(1, 'Mitra4988', '2021-12-30', 'Kendari', 'putra', 'putra', 'anggoeya', 'sk rumah', 2000000, 1500000, 'Jaminan_5494_putra.jpg', 'Nasabah_736_putra.jpg', 1500000, 'Lunas', 'Sudah Cair'),
(2, 'Mitra2924', '2022-01-17', 'Kendari', 'Putra', 'Wicak', 'Tupai', 'Sk Rumah', 2500000, 1500000, 'Jaminan_6429_Wicak.jpg', 'Nasabah_1537_Wicak.jpg', 2000000, 'On Progress', 'Sudah Cair');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `email`, `password`, `level`) VALUES
('123', 'achmd.rzl13@gmail.com', '123', 'kdi'),
('adminkdi', 'adminkdi@gmail.com', 'adminkdi123', 'kdi'),
('adminkeraton', 'adminkeraton@gmail.com', 'adminkeraton123', 'bau-bau'),
('adminkonawe', 'adminkonawe@gmail.com', 'adminkonawe123', 'konawe'),
('adminkonsel', 'adminkonsel@gmail.com', 'adminkonsel123', 'konsel'),
('adw444', 'achmd.rzl13@gmail.com', 'dawdawd', 'konawe'),
('awdadawd', 'hasminaanisi69@gmail.com', '23131', 'kdi'),
('awdawd22', 'achmd.rzl13@gmail.com', '213', 'kdi'),
('dwa222', 'achmd.rzl13@gmail.com', '2134', 'konawe'),
('owner', 'owner@gmail.com', 'owner123', 'owner');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pengajuan_kdi`
--
ALTER TABLE `pengajuan_kdi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tagih_bau`
--
ALTER TABLE `tagih_bau`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tagih_kdi`
--
ALTER TABLE `tagih_kdi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tagih_kon`
--
ALTER TABLE `tagih_kon`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tagih_lae`
--
ALTER TABLE `tagih_lae`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tagih_pun`
--
ALTER TABLE `tagih_pun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tagih_tin`
--
ALTER TABLE `tagih_tin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tagih_una`
--
ALTER TABLE `tagih_una`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tagih_wawo`
--
ALTER TABLE `tagih_wawo`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tagih_wua`
--
ALTER TABLE `tagih_wua`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi_bau`
--
ALTER TABLE `transaksi_bau`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi_kdi`
--
ALTER TABLE `transaksi_kdi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi_kon`
--
ALTER TABLE `transaksi_kon`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi_lae`
--
ALTER TABLE `transaksi_lae`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi_pun`
--
ALTER TABLE `transaksi_pun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi_tin`
--
ALTER TABLE `transaksi_tin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi_una`
--
ALTER TABLE `transaksi_una`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi_wawo`
--
ALTER TABLE `transaksi_wawo`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi_wua`
--
ALTER TABLE `transaksi_wua`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengajuan_kdi`
--
ALTER TABLE `pengajuan_kdi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tagih_bau`
--
ALTER TABLE `tagih_bau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tagih_kdi`
--
ALTER TABLE `tagih_kdi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tagih_kon`
--
ALTER TABLE `tagih_kon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tagih_lae`
--
ALTER TABLE `tagih_lae`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tagih_pun`
--
ALTER TABLE `tagih_pun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tagih_tin`
--
ALTER TABLE `tagih_tin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tagih_una`
--
ALTER TABLE `tagih_una`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tagih_wawo`
--
ALTER TABLE `tagih_wawo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tagih_wua`
--
ALTER TABLE `tagih_wua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `transaksi_bau`
--
ALTER TABLE `transaksi_bau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `transaksi_kdi`
--
ALTER TABLE `transaksi_kdi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `transaksi_kon`
--
ALTER TABLE `transaksi_kon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `transaksi_lae`
--
ALTER TABLE `transaksi_lae`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi_pun`
--
ALTER TABLE `transaksi_pun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi_tin`
--
ALTER TABLE `transaksi_tin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi_una`
--
ALTER TABLE `transaksi_una`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `transaksi_wawo`
--
ALTER TABLE `transaksi_wawo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `transaksi_wua`
--
ALTER TABLE `transaksi_wua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
