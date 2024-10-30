-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2024 at 08:14 AM
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
-- Database: `hris_unigraha`
--

-- --------------------------------------------------------

--
-- Table structure for table `bahasa`
--

CREATE TABLE `bahasa` (
  `id_bahasa` bigint(20) UNSIGNED NOT NULL,
  `id_kandidat` int(11) DEFAULT NULL,
  `bahasa_lain` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `membaca` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menulis` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `berbicara` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bahasa`
--

INSERT INTO `bahasa` (`id_bahasa`, `id_kandidat`, `bahasa_lain`, `membaca`, `menulis`, `berbicara`, `created_at`, `updated_at`) VALUES
(1, 1, 'Inggris', 'baik', 'fasih', 'cukup', '2024-07-12 08:48:20', '2024-07-12 08:48:20'),
(2, 1, 'Arab', 'baik', 'baik', 'baik', '2024-07-12 08:48:20', '2024-07-12 08:48:20'),
(3, 1, 'Inggris', 'cukup', 'cukup', 'cukup', '2024-07-12 08:48:20', '2024-07-12 08:48:20');

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `id_cuti` bigint(20) UNSIGNED NOT NULL,
  `jenis_cuti` int(11) NOT NULL,
  `id_sap` int(11) NOT NULL,
  `jumlah_cuti` int(11) NOT NULL,
  `start_cuti` date NOT NULL,
  `end_cuti` date NOT NULL,
  `alasan_cuti` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_cuti` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`id_cuti`, `jenis_cuti`, `id_sap`, `jumlah_cuti`, `start_cuti`, `end_cuti`, `alasan_cuti`, `status_cuti`, `created_at`, `updated_at`) VALUES
(2, 2, 10075036, 2, '2024-07-12', '2024-07-13', 'pulang lagi', 'selesai', NULL, '2024-07-12 09:45:50'),
(3, 1, 10075036, 5, '2024-07-16', '2024-07-12', 'holiday', 'selesai', NULL, '2024-07-12 09:45:41');

-- --------------------------------------------------------

--
-- Table structure for table `interview`
--

CREATE TABLE `interview` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kandidat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_soal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `interview`
--

INSERT INTO `interview` (`id`, `id_kandidat`, `id_soal`, `jawaban`, `detail`, `created_at`, `updated_at`) VALUES
(1, '2', '1', '2', 'kurang tertarik bekerja', '2024-07-12 08:48:26', '2024-07-12 08:48:26'),
(2, '2', '2', '2', 'kurang tertarik bekerja', '2024-07-12 08:48:26', '2024-07-12 08:48:26'),
(3, '2', '3', '2', 'kurang tertarik bekerja', '2024-07-12 08:48:26', '2024-07-12 08:48:26'),
(4, '1', '1', '2', 'test', '2024-07-12 08:48:48', '2024-07-12 08:48:48'),
(5, '1', '2', '2', 'test', '2024-07-12 08:48:48', '2024-07-12 08:48:48'),
(6, '1', '1', '2', 'test', '2024-07-12 08:49:00', '2024-07-12 08:49:00'),
(7, '1', '2', '2', 'test', '2024-07-12 08:49:00', '2024-07-12 08:49:00'),
(8, '1', '3', '2', 'test', '2024-07-12 08:49:00', '2024-07-12 08:49:00');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_pelatihan`
--

CREATE TABLE `jadwal_pelatihan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pelatihan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_done` tinyint(1) NOT NULL DEFAULT 0,
  `waktu` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwal_pelatihan`
--

INSERT INTO `jadwal_pelatihan` (`id`, `nama_pelatihan`, `is_done`, `waktu`, `created_at`, `updated_at`) VALUES
(1, 'hospitality', 1, '2024-07-12 15:51:00', '2024-07-12 08:51:15', '2024-07-12 08:52:13'),
(2, 'complimentary', 0, '2024-07-15 15:51:00', '2024-07-12 08:51:54', '2024-07-12 08:51:54');

-- --------------------------------------------------------

--
-- Table structure for table `kandidat`
--

CREATE TABLE `kandidat` (
  `id_kandidat` bigint(20) UNSIGNED NOT NULL,
  `posisi` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `informasi_lowongan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `umur` int(11) DEFAULT NULL,
  `tempat_lahir` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_perkawinan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `berat_badan` int(11) DEFAULT NULL,
  `tinggi_badan` int(11) DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bahasa_pertama` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telah_interview` tinyint(1) NOT NULL DEFAULT 0,
  `expected_basic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expected_allowence` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `your_wishes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kandidat`
--

INSERT INTO `kandidat` (`id_kandidat`, `posisi`, `informasi_lowongan`, `nama`, `umur`, `tempat_lahir`, `tanggal_lahir`, `status_perkawinan`, `jenis_kelamin`, `berat_badan`, `tinggi_badan`, `alamat`, `no_hp`, `email`, `bahasa_pertama`, `telah_interview`, `expected_basic`, `expected_allowence`, `total_salary`, `your_wishes`, `created_at`, `updated_at`) VALUES
(1, 'Posisi', 'Instagram', 'Tesa', 25, 'Pekanbaru', '2024-02-29', 'Sudah Kawin', 'Laki-Laki', 50, 160, 'Jl. Garuda Sakti', '081261', 'tesa@gmail.com', 'Indonesia', 1, NULL, NULL, NULL, NULL, '2024-07-12 08:48:20', '2024-07-12 08:49:00');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_sap` int(11) NOT NULL,
  `id_nik` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_badge` int(11) NOT NULL,
  `join_date` date DEFAULT NULL,
  `status_karyawan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_ktp` char(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `agama` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suku` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_kawin` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jmlh_tanggung` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelas_bpjs` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendidikan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jurusan_pendidikan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_sekolahasal` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_lulus` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level_karyawan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `departemen` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `posisi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_pribdi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_kantor` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_wa` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `riwayat_pelatihan` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ktp` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kuota_cuti` int(11) NOT NULL DEFAULT 12,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_sap`, `id_nik`, `nama`, `id_badge`, `join_date`, `status_karyawan`, `foto`, `no_ktp`, `tempat_lahir`, `tanggal_lahir`, `agama`, `jenis_kelamin`, `suku`, `status_kawin`, `jmlh_tanggung`, `kelas_bpjs`, `pendidikan`, `jurusan_pendidikan`, `nama_sekolahasal`, `tahun_lulus`, `level_karyawan`, `departemen`, `posisi`, `email_pribdi`, `email_kantor`, `no_hp`, `no_wa`, `riwayat_pelatihan`, `ktp`, `kuota_cuti`, `created_at`, `updated_at`) VALUES
(10012345, '10012345', 'Admin HRD', 10012345, '2024-02-01', 'Kontrak', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 12, '2024-07-12 08:48:20', '2024-07-12 08:48:20'),
(10014145, '10014145', 'Imam Ahmad Ferdiansyah', 10014145, '2024-07-01', 'Kontrak', 'uploads/foto/1720851193.jpg', '1405021405000002', 'Pangkalan Kerinci', '2024-07-13', 'Islam', 'Laki-Laki', 'Jawa', 'Belum Kawin', 'Belum Menikah', NULL, 'SMA', 'IPS', 'SMAN Pangkalan Kerinci', '2018', 'Rank n File', 'Food And Beverage Service', 'Waiters', 'ferdiimam14@gmail.com', 'ferdiimam14@gmail.com', '081377683339', '081377683339', 'Training Hospitality', 'uploads/ktp/1720851193.jpg', 12, NULL, NULL),
(10075036, '10075036', 'Afif Khairi', 10075036, '2023-07-01', 'Kontrak', 'uploads/foto/1720775815.jpg', '147108260181002', 'Pekanbaru', '1981-01-26', 'Islam', 'Laki-Laki', 'Minang', 'Sudah Kawin', '1 Orang', 'Kelas 2', 'SMK', 'Perhotelan', 'SMKN 3 Pekanbaru / Universitas Terbuka', '1999', 'GM', 'GMO', 'GM', 'afifkhairi@yahoo.com', 'afif_khairi@unigraha.com', '081293995600', '081293995600', 'Training Complimentary', '', 12, NULL, NULL),
(100000014, '1', 'Achira Puji Lestari', 10000003, '2024-01-24', 'Permanen', '', '1', 'Pekanbaru', '2000-05-15', 'Islam', 'Laki-Laki', 'Jawa', 'Belum Kawin', 'Belum Menikah', 'Kelas 2', 'Strata 1', 'Management', 'Universitas Indonesia', '2024', 'Executive Secretary', 'Main', 'Executive Secretary', 'achira@gmail.com', 'achira@gmail.com', '0811', '0811', '', '', 12, '2024-07-12 08:48:20', '2024-07-12 08:48:20'),
(143184228, '1', 'Abdul Rosyid', 10046, '2024-01-24', 'Permanen', '', '1', 'Pekanbaru', '2000-05-15', 'Islam', 'Laki-Laki', 'Jawa', 'Belum Kawin', 'Belum Menikah', 'Kelas 2', 'Strata 1', 'Management', 'Universitas Indonesia', '2024', 'House Keeping', 'Main', 'House Keeping', 'abdul@gmail.com', 'abdul@gmail.com', '0811', '0811', '', '', 12, '2024-07-12 08:48:20', '2024-07-12 08:48:20'),
(447503673, '1', 'Ade Saputra', 84228, '2024-01-24', 'Permanen', '', '1', 'Pekanbaru', '2000-05-15', 'Islam', 'Laki-Laki', 'Jawa', 'Belum Kawin', 'Belum Menikah', 'Kelas 2', 'Strata 1', 'Management', 'Universitas Indonesia', '2024', 'Transport', 'Main', 'Transport', 'ade@gmail.com', 'ade@gmail.com', '0811', '0811', '', '', 12, '2024-07-12 08:48:20', '2024-07-12 08:48:20'),
(527602680, '1', 'Bambang Iswanto', 10000003, '2024-01-24', 'Permanen', '', '1', 'Pekanbaru', '2000-05-15', 'Islam', 'Laki-Laki', 'Jawa', 'Belum Kawin', 'Belum Menikah', 'Kelas 2', 'Strata 1', 'Management', 'Universitas Indonesia', '2024', 'GMO Head', 'Main', 'GMO Head', 'bambang@gmail.com', 'bambang@gmail.com', '0811', '0811', '', '', 12, '2024-07-12 08:48:20', '2024-07-12 08:48:20'),
(752871875, '1', 'Sandy Lee', 70873, '2024-01-24', 'Permanen', '', '1', 'Pekanbaru', '2000-05-15', 'Islam', 'Laki-Laki', 'Jawa', 'Belum Kawin', 'Belum Menikah', 'Kelas 2', 'Strata 1', 'Management', 'Universitas Indonesia', '2024', 'Front Office', 'Main', 'Front Office', 'sandy@gmail.com', 'sandy@gmail.com', '0811', '0811', '', '', 12, '2024-07-12 08:48:20', '2024-07-12 08:48:20'),
(814393189, '1', 'Kurnia Prasetyo', 90836, '2024-01-24', 'Permanen', '', '1', 'Pekanbaru', '2000-05-15', 'Islam', 'Laki-Laki', 'Jawa', 'Belum Kawin', 'Belum Menikah', 'Kelas 2', 'Strata 1', 'Management', 'Universitas Indonesia', '2024', 'Engineering', 'Main', 'Engineering', 'kurnia@gmail.com', 'kurnia@gmail.com', '0811', '0811', '', '', 12, '2024-07-12 08:48:20', '2024-07-12 08:48:20'),
(1480260351, '1', 'Cliff Malonda', 79873, '2024-01-24', 'Permanen', '', '1', 'Pekanbaru', '2000-05-15', 'Islam', 'Laki-Laki', 'Jawa', 'Belum Kawin', 'Belum Menikah', 'Kelas 2', 'Strata 1', 'Management', 'Universitas Indonesia', '2024', 'Human Resource', 'Main', 'Human Resource', 'cliff@gmail.com', 'cliff@gmail.com', '0811', '0811', '', '', 12, '2024-07-12 08:48:20', '2024-07-12 08:48:20'),
(1888158181, '1', 'M. Apriantoro', 44371, '2024-01-24', 'Permanen', '', '1', 'Pekanbaru', '2000-05-15', 'Islam', 'Laki-Laki', 'Jawa', 'Belum Kawin', 'Belum Menikah', 'Kelas 2', 'Strata 1', 'Management', 'Universitas Indonesia', '2024', 'F&B Product', 'Main', 'F&B Product', 'apriantoro@gmail.com', 'apriantoro@gmail.com', '0811', '0811', '', '', 12, '2024-07-12 08:48:20', '2024-07-12 08:48:20'),
(2098676861, '1', 'Suranto', 80936, '2024-01-24', 'Permanen', '', '1', 'Pekanbaru', '2000-05-15', 'Islam', 'Laki-Laki', 'Jawa', 'Belum Kawin', 'Belum Menikah', 'Kelas 2', 'Strata 1', 'Management', 'Universitas Indonesia', '2024', 'Eco Campy', 'Main', 'Eco Campy', 'suranto@gmail.com', 'suranto@gmail.com', '0811', '0811', '', '', 12, '2024-07-12 08:48:20', '2024-07-12 08:48:20');

-- --------------------------------------------------------

--
-- Table structure for table `keluarga`
--

CREATE TABLE `keluarga` (
  `id_keluarga` bigint(20) UNSIGNED NOT NULL,
  `id_kandidat` int(11) NOT NULL,
  `nama_keluarga` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relation` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keluarga`
--

INSERT INTO `keluarga` (`id_keluarga`, `id_kandidat`, `nama_keluarga`, `relation`, `age`, `address`, `created_at`, `updated_at`) VALUES
(1, 1, 'aaa', 'vvv', 12, 'aaab', '2024-07-12 08:48:20', '2024-07-12 08:48:20'),
(2, 1, 'Anto', 'Ayah', 25, 'Pekanbaru', '2024-07-12 08:48:20', '2024-07-12 08:48:20');

-- --------------------------------------------------------

--
-- Table structure for table `kontak_darurat`
--

CREATE TABLE `kontak_darurat` (
  `id_kontak_darurat` bigint(20) UNSIGNED NOT NULL,
  `id_kandidat` int(11) NOT NULL,
  `nama_kontak_darurat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relation` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kontak_darurat`
--

INSERT INTO `kontak_darurat` (`id_kontak_darurat`, `id_kandidat`, `nama_kontak_darurat`, `relation`, `age`, `address`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ade', 'Ayah', 23, 'Pekanbaru', '2024-07-12 08:48:20', '2024-07-12 08:48:20');

-- --------------------------------------------------------

--
-- Table structure for table `kuota_cuti`
--

CREATE TABLE `kuota_cuti` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_cuti` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `karyawan_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kuota_cuti`
--

INSERT INTO `kuota_cuti` (`id`, `jenis_cuti`, `karyawan_id`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, '2', '10075036', 10, '2024-07-12 09:18:46', '2024-07-12 09:45:50'),
(2, '1', '10075036', 7, '2024-07-12 09:44:58', '2024-07-12 09:45:41');

-- --------------------------------------------------------

--
-- Table structure for table `master_cuti`
--

CREATE TABLE `master_cuti` (
  `id_cuti` bigint(20) UNSIGNED NOT NULL,
  `jenis_cuti` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL DEFAULT 12,
  `keterangan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_cuti`
--

INSERT INTO `master_cuti` (`id_cuti`, `jenis_cuti`, `jumlah`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Tahunan', 12, 'Jumlah 12', '2024-07-12 08:48:20', '2024-07-12 08:48:20'),
(2, 'Travelling Day', 12, NULL, '2024-07-12 08:48:20', '2024-07-12 08:48:20'),
(3, 'Cuti Melahirkan', 12, 'Khusus Perempuan', '2024-07-12 08:48:20', '2024-07-12 08:48:20');

-- --------------------------------------------------------

--
-- Table structure for table `master_soal`
--

CREATE TABLE `master_soal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `soal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_soal`
--

INSERT INTO `master_soal` (`id`, `soal`, `created_at`, `updated_at`) VALUES
(1, 'Perkenalan Diri', '2024-07-12 08:48:20', '2024-07-12 08:48:20'),
(2, 'Minat Bakat', '2024-07-12 08:48:20', '2024-07-12 08:48:20'),
(3, 'Aktivitas Diluar Pekerjaan', '2024-07-12 08:48:20', '2024-07-12 08:48:20');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_04_04_070932_create_jadwal_pelatihans_table', 1),
(6, '2024_05_01_104330_create_kandidats_table', 1),
(7, '2024_05_01_105505_create_karyawans_table', 1),
(8, '2024_05_01_105820_create_bahasas_table', 1),
(9, '2024_05_01_105834_create_cutis_table', 1),
(10, '2024_05_01_105900_create_keluargas_table', 1),
(11, '2024_05_01_105920_create_kontak_darurats_table', 1),
(12, '2024_05_01_105938_create_master_cutis_table', 1),
(13, '2024_05_01_105958_create_pegawais_table', 1),
(14, '2024_05_01_110013_create_pendidikans_table', 1),
(15, '2024_05_01_110028_create_pendidikan_informals_table', 1),
(16, '2024_05_01_110051_create_pengalamen_table', 1),
(17, '2024_05_02_150022_create_master_soals_table', 1),
(18, '2024_05_08_090733_create_interviews_table', 1),
(19, '2024_06_30_124447_create_kuota_cutis_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` bigint(20) UNSIGNED NOT NULL,
  `nama_pegawai` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Asman Santoso', 'Ds. Ciwastra No. 763, Cilegon 64726, Kalteng', '2024-07-12 08:48:20', '2024-07-12 08:48:20'),
(2, 'Dimaz Prayoga', 'Dk. Supono No. 942, Pontianak 44878, Kaltim', '2024-07-12 08:48:20', '2024-07-12 08:48:20'),
(3, 'Ulva Pratiwi S.Farm', 'Jr. Sam Ratulangi No. 766, Jambi 23400, Kalbar', '2024-07-12 08:48:20', '2024-07-12 08:48:20'),
(4, 'Oni Wulan Suryatmi', 'Ki. Kalimalang No. 830, Administrasi Jakarta Utara 43320, NTB', '2024-07-12 08:48:20', '2024-07-12 08:48:20'),
(5, 'Wasis Aswani Januar S.Pd', 'Psr. Banda No. 481, Padang 77018, Bali', '2024-07-12 08:48:20', '2024-07-12 08:48:20'),
(6, 'Nabila Jane Zulaika S.Farm', 'Jr. Hang No. 341, Surabaya 64743, Bali', '2024-07-12 08:48:20', '2024-07-12 08:48:20'),
(7, 'Rahman Lazuardi', 'Kpg. Dipenogoro No. 941, Solok 69081, Papua', '2024-07-12 08:48:20', '2024-07-12 08:48:20'),
(8, 'Amelia Aryani', 'Ds. Gatot Subroto No. 294, Batu 13469, Kaltim', '2024-07-12 08:48:20', '2024-07-12 08:48:20'),
(9, 'Yuni Aurora Purnawati S.Kom', 'Jln. Jaksa No. 320, Mojokerto 92685, Kalsel', '2024-07-12 08:48:20', '2024-07-12 08:48:20'),
(10, 'Pranata Respati Wibowo S.Sos', 'Ds. Cokroaminoto No. 560, Padangsidempuan 55507, Gorontalo', '2024-07-12 08:48:20', '2024-07-12 08:48:20');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_pendidikan` bigint(20) UNSIGNED NOT NULL,
  `id_kandidat` int(11) NOT NULL,
  `nama_sekolah` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenjang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_from` int(11) NOT NULL,
  `tahun_to` int(11) NOT NULL,
  `gpa` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id_pendidikan`, `id_kandidat`, `nama_sekolah`, `jenjang`, `tahun_from`, `tahun_to`, `gpa`, `created_at`, `updated_at`) VALUES
(1, 1, 'SD 1', 'SD', 2008, 2024, 100, '2024-07-12 08:48:20', '2024-07-12 08:48:20'),
(2, 1, 'SMP N 1', 'SMP', 2010, 2013, 90, '2024-07-12 08:48:20', '2024-07-12 08:48:20');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan_informal`
--

CREATE TABLE `pendidikan_informal` (
  `id_pendidikan_informal` bigint(20) UNSIGNED NOT NULL,
  `id_kandidat` int(11) NOT NULL,
  `institusi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `major` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_from` int(11) NOT NULL,
  `tahun_to` int(11) NOT NULL,
  `gpa` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendidikan_informal`
--

INSERT INTO `pendidikan_informal` (`id_pendidikan_informal`, `id_kandidat`, `institusi`, `major`, `tahun_from`, `tahun_to`, `gpa`, `created_at`, `updated_at`) VALUES
(1, 1, 'Flashsoft', 'PHP', 2010, 2024, 100, '2024-07-12 08:48:20', '2024-07-12 08:48:20'),
(2, 1, 'Fs', 'Laravel', 2023, 2024, 90, '2024-07-12 08:48:20', '2024-07-12 08:48:20');

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id_pengalaman` bigint(20) UNSIGNED NOT NULL,
  `id_kandidat` int(11) NOT NULL,
  `company_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `periode` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_duties` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason_for_leaving` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengalaman`
--

INSERT INTO `pengalaman` (`id_pengalaman`, `id_kandidat`, `company_name`, `position`, `periode`, `salary`, `main_duties`, `reason_for_leaving`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hotel', 'CEO', '2021-2024', '10000000', 'Ngopi', 'Gabut', '2024-07-12 08:48:20', '2024-07-12 08:48:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `karyawan_id` int(11) DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','karyawan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `karyawan_id`, `nama`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 10012345, 'Admin HRD', 'admin@gmail.com', '$2y$10$Mqma0xB/G2Qja8lJo28Kf.iIbSfEThKV77tvx6VgsmesxJiUdEzCe', 'admin', NULL, '2024-07-12 08:48:20', '2024-07-12 08:48:20'),
(3, 100000012, 'Budi Setiawan', 'budisetiawan@gmail.com', '$2y$10$MqRjmVqEm4AhJ1JE4.8ohuU0nM7YSrdQr2IR3avUNhIxBNaWUu4NS', 'karyawan', NULL, '2024-07-12 09:05:42', '2024-07-12 09:05:42'),
(5, 100000014, 'Achira Puji Lestari', 'achira@gmail.com', '$2y$10$6HObCLY0e.1AzG/N4kIML.rwaYv2YmtFfuKoXg8lb9RRPybtPhIwa', 'karyawan', NULL, '2024-07-12 09:05:42', '2024-07-12 09:05:42'),
(6, 143184228, 'Abdul Rosyid', 'abdul@gmail.com', '$2y$10$8sA9caIV/qQhbAtaoreHIOaqOUGAXdDzpuQ9kkpxHz8VKnesai9EC', 'karyawan', NULL, '2024-07-12 09:05:42', '2024-07-12 09:05:42'),
(7, 447503673, 'Ade Saputra', 'ade@gmail.com', '$2y$10$2cJpsX4AqioEaByuRwZed.R97ucOJ1F6bPPmCJfUf4bhQj1EKscnS', 'karyawan', NULL, '2024-07-12 09:05:42', '2024-07-12 09:05:42'),
(8, 527602680, 'Bambang Iswanto', 'bambang@gmail.com', '$2y$10$RUjAG1u1Ym4L.ggxC51gCeOLiku8.uTxE0ayETIPCpOBwsge/bG5W', 'karyawan', NULL, '2024-07-12 09:05:43', '2024-07-12 09:05:43'),
(9, 735867901, 'Zaenal Paijo', 'zaenal@gmail.com', '$2y$10$frnzv48gueGM3yUF1gTMpummb6Es2ZN2zzh6G7BqMU9Rc237d2JMO', 'karyawan', NULL, '2024-07-12 09:05:43', '2024-07-12 09:05:43'),
(10, 752871875, 'Sandy Lee', 'sandy@gmail.com', '$2y$10$x2u4G1./QeaNYVJzIpqo1.9Xz6yoaTHI2IYUHbNqfaL9qdbzAUIKq', 'karyawan', NULL, '2024-07-12 09:05:43', '2024-07-12 09:05:43'),
(11, 814393189, 'Kurnia Prasetyo', 'kurnia@gmail.com', '$2y$10$pjeX704Wz4qSXBlpKShanOvr5OhmGRdQWEbe8m8WHKidd4J.BzTBS', 'karyawan', NULL, '2024-07-12 09:05:43', '2024-07-12 09:05:43'),
(12, 1480260351, 'Cliff Malonda', 'cliff@gmail.com', '$2y$10$241zFj.EF5nfUy33lBzaRe4s91VfHyVxF3g0a7VqQ3qGDG1kS3svW', 'karyawan', NULL, '2024-07-12 09:05:43', '2024-07-12 09:05:43'),
(13, 1888158181, 'M. Apriantoro', 'apriantoro@gmail.com', '$2y$10$5RCJpHaxaYaZ75q73eTUVOJ.aXASYmw70PXF0/iMwuSwG68Ka2OQW', 'karyawan', NULL, '2024-07-12 09:05:43', '2024-07-12 09:05:43'),
(14, 1929834115, 'Antoni', 'antoni@gmail.com', '$2y$10$PA7XNeUGby2SR1LwPkWQBuGIicJI5XXVpH221X7recYENkSDCRqKu', 'karyawan', NULL, '2024-07-12 09:05:43', '2024-07-12 09:05:43'),
(15, 2098676861, 'Suranto', 'suranto@gmail.com', '$2y$10$197p5qj3Y9DC3j4rfW93r.Q5NWgAISCyunReGpABCMl3hqrlFh9dm', 'karyawan', NULL, '2024-07-12 09:05:44', '2024-07-12 09:05:44'),
(17, 10075036, 'Afif Khairi', 'afif_khairi@unigraha.com', '$2y$10$RPh5dXg/u.Wkr6kOt1nhHufx21z74UaA3KrKoKFYIxtqxlc41/jXW', 'karyawan', NULL, '2024-07-12 09:17:47', '2024-07-12 09:17:47'),
(18, 10014145, 'Imam Ahmad Ferdiansyah', 'ferdiimam14@gmail.com', '$2y$10$uHFnDHZC3GWY4RYKbhAts..9iovJY0QxksMvZaQQgUPc4RiD5RFve', 'karyawan', NULL, '2024-07-13 06:13:15', '2024-07-13 06:13:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahasa`
--
ALTER TABLE `bahasa`
  ADD PRIMARY KEY (`id_bahasa`);

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id_cuti`);

--
-- Indexes for table `interview`
--
ALTER TABLE `interview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_pelatihan`
--
ALTER TABLE `jadwal_pelatihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kandidat`
--
ALTER TABLE `kandidat`
  ADD PRIMARY KEY (`id_kandidat`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_sap`);

--
-- Indexes for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`id_keluarga`);

--
-- Indexes for table `kontak_darurat`
--
ALTER TABLE `kontak_darurat`
  ADD PRIMARY KEY (`id_kontak_darurat`);

--
-- Indexes for table `kuota_cuti`
--
ALTER TABLE `kuota_cuti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_cuti`
--
ALTER TABLE `master_cuti`
  ADD PRIMARY KEY (`id_cuti`);

--
-- Indexes for table `master_soal`
--
ALTER TABLE `master_soal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `pendidikan_informal`
--
ALTER TABLE `pendidikan_informal`
  ADD PRIMARY KEY (`id_pendidikan_informal`);

--
-- Indexes for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`id_pengalaman`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bahasa`
--
ALTER TABLE `bahasa`
  MODIFY `id_bahasa` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id_cuti` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `interview`
--
ALTER TABLE `interview`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jadwal_pelatihan`
--
ALTER TABLE `jadwal_pelatihan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kandidat`
--
ALTER TABLE `kandidat`
  MODIFY `id_kandidat` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `keluarga`
--
ALTER TABLE `keluarga`
  MODIFY `id_keluarga` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kontak_darurat`
--
ALTER TABLE `kontak_darurat`
  MODIFY `id_kontak_darurat` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kuota_cuti`
--
ALTER TABLE `kuota_cuti`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_cuti`
--
ALTER TABLE `master_cuti`
  MODIFY `id_cuti` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `master_soal`
--
ALTER TABLE `master_soal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id_pendidikan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pendidikan_informal`
--
ALTER TABLE `pendidikan_informal`
  MODIFY `id_pendidikan_informal` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengalaman`
--
ALTER TABLE `pengalaman`
  MODIFY `id_pengalaman` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
