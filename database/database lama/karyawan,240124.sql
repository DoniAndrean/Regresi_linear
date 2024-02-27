-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jan 2024 pada 17.26
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ps_hr_imam`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id_sap` int(8) NOT NULL,
  `id_nik` varchar(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_badge` int(11) NOT NULL,
  `join_date` date NOT NULL,
  `status_karyawan` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `no_ktp` char(16) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `suku` varchar(100) NOT NULL,
  `status_kawin` varchar(100) NOT NULL,
  `jmlh_tanggung` varchar(100) NOT NULL,
  `kelas_bpjs` varchar(50) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `jurusan_pendidikan` varchar(100) NOT NULL,
  `nama_sekolahasal` varchar(100) NOT NULL,
  `tahun_lulus` varchar(4) NOT NULL,
  `level_karyawan` varchar(100) NOT NULL,
  `departemen` varchar(100) NOT NULL,
  `posisi` varchar(100) NOT NULL,
  `email_pribdi` varchar(100) NOT NULL,
  `email_kantor` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `no_wa` varchar(13) NOT NULL,
  `riwayat_pelatihan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id_sap`, `id_nik`, `nama`, `id_badge`, `join_date`, `status_karyawan`, `foto`, `no_ktp`, `tempat_lahir`, `tanggal_lahir`, `agama`, `jenis_kelamin`, `suku`, `status_kawin`, `jmlh_tanggung`, `kelas_bpjs`, `pendidikan`, `jurusan_pendidikan`, `nama_sekolahasal`, `tahun_lulus`, `level_karyawan`, `departemen`, `posisi`, `email_pribdi`, `email_kantor`, `no_hp`, `no_wa`, `riwayat_pelatihan`) VALUES
(10000001, '14050214', 'Imam Ahmad Ferdiansyah', 10000001, '2024-01-24', 'Kontrak', 'C:\\xampp\\tmp\\php5D8F.tmp', '1405021400000002', 'Pangkalan Kerinci', '2000-05-15', 'Islam', 'Laki-Laki', 'Jawa', 'Belum Kawin', 'Belum Menikah', 'Kelas 2', 'Strata 1', 'Sistem Informasi', 'Universitas Riau', '2024', 'Rank n File', 'Food And Beverage Service', 'Waiter', 'ferdiimam14@gmail.com', 'ferdiimam14@gmail.com', '081377683339', '081377683339', 'Training Hospitality'),
(100000012, '14050214', 'Imam Ahmad Ferdiansyah', 10000001, '2024-01-24', 'Permanen', 'C:\\xampp\\tmp\\php5D8F.tmp', '1405021400000002', 'Pangkalan Kerinci', '2000-05-15', 'Islam', 'Laki-Laki', 'Jawa', 'Belum Kawin', 'Belum Menikah', 'Kelas 2', 'Strata 1', 'Sistem Informasi', 'Universitas Riau', '2024', 'Rank n File', 'Food And Beverage Service', 'Waiter', 'ferdiimam14@gmail.com', 'ferdiimam14@gmail.com', '081377683339', '081377683339', 'Training Hospitality');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_sap`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
