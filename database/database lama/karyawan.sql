-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2024 at 07:15 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hris`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_sap` int(8) NOT NULL,
  `id_nik` varchar(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_badge` int(11) NOT NULL,
  `join_date` date NOT NULL,
  `no_ktp` char(16) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(100) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `jurusan_pendidikan` varchar(100) NOT NULL,
  `nama_sekolahasal` varchar(100) NOT NULL,
  `tahun_lulus` varchar(4) NOT NULL,
  `level_karyawan` varchar(100) NOT NULL,
  `departemen` varchar(100) NOT NULL,
  `posisi` varchar(100) NOT NULL,
  `status_karyawan` varchar(100) NOT NULL,
  `email_pribdi` varchar(100) NOT NULL,
  `email_kantor` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `suku` varchar(100) NOT NULL,
  `status_kawin` varchar(100) NOT NULL,
  `jmlh_tanggung` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `no_wa` varchar(13) NOT NULL,
  `riwayat_pelatihan` varchar(500) NOT NULL,
  `kelas_bpjs` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_sap`, `id_nik`, `nama`, `id_badge`, `join_date`, `no_ktp`, `tempat_lahir`, `tanggal_lahir`, `agama`, `pendidikan`, `jurusan_pendidikan`, `nama_sekolahasal`, `tahun_lulus`, `level_karyawan`, `departemen`, `posisi`, `status_karyawan`, `email_pribdi`, `email_kantor`, `jenis_kelamin`, `suku`, `status_kawin`, `jmlh_tanggung`, `no_hp`, `no_wa`, `riwayat_pelatihan`, `kelas_bpjs`, `foto`) VALUES
(10000001, '14050214', 'Imam Ahmad Ferdiansyah', 10000001, '2024-01-24', '1405021400000002', 'Pangkalan Kerinci', '2000-05-15', 'Islam', 'Strata 1', 'Sistem Informasi', 'Universitas Riau', '2024', 'Rank n File', 'Food And Beverage Service', 'Waiter', 'Kontrakk', 'ferdiimam14@gmail.com', 'ferdiimam14@gmail.com', 'Laki-Laki', 'Jawa', 'Belum Kawin', 'Belum Menikah', '081377683339', '081377683339', 'Training Hospitality', 'Kelas 2', 'C:\\xampp\\tmp\\php5D8F.tmp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_sap`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
