-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2024 at 05:33 PM
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
-- Database: `ps_hr_imam`
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
(1, 1, 'Inggris', 'baik', 'fasih', 'cukup', '2024-05-09 20:38:18', '2024-05-09 20:38:18'),
(2, 1, 'Arab', 'baik', 'baik', 'baik', '2024-05-09 20:38:18', '2024-05-09 20:38:18'),
(3, 1, 'Inggris', 'cukup', 'cukup', 'cukup', '2024-05-09 20:38:18', '2024-05-09 20:38:18');

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
(2, 3, 100000012, 5, '2024-02-06', '2024-02-15', 'Dinas', 'selesai', '2024-05-09 20:38:18', '2024-05-09 20:38:18'),
(3, 1, 100000012, 3, '2024-02-06', '2024-02-07', 'Liburan', 'Pengajuan', '2024-05-09 20:38:18', '2024-05-09 20:38:18'),
(4, 1, 10000001, 3, '2024-06-05', '2024-06-07', 'acara keluarga', 'Pengajuan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `interview`
--

CREATE TABLE `interview` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kandidat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_soal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_pelatihan`
--

CREATE TABLE `jadwal_pelatihan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kandidat`
--

CREATE TABLE `kandidat` (
  `id_kandidat` bigint(20) UNSIGNED NOT NULL,
  `posisi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `informasi_lowongan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` int(11) NOT NULL,
  `tempat_lahir` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_perkawinan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `tinggi_badan` int(11) NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bahasa_pertama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telah_interview` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kandidat`
--

INSERT INTO `kandidat` (`id_kandidat`, `posisi`, `informasi_lowongan`, `nama`, `umur`, `tempat_lahir`, `tanggal_lahir`, `status_perkawinan`, `jenis_kelamin`, `berat_badan`, `tinggi_badan`, `alamat`, `no_hp`, `email`, `bahasa_pertama`, `telah_interview`, `created_at`, `updated_at`) VALUES
(1, 'Posisi', 'Instagram', 'Tesa', 25, 'Pekanbaru', '2024-02-29', 'Sudah Kawin', 'Laki-Laki', 50, 160, 'Jl. Garuda Sakti', '081261', 'tesa@gmail.com', 'Indonesia', 0, '2024-05-09 20:38:18', '2024-05-09 20:38:18');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_sap` int(11) NOT NULL,
  `id_nik` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_badge` int(11) NOT NULL,
  `join_date` date NOT NULL,
  `status_karyawan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_ktp` char(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suku` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_kawin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jmlh_tanggung` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas_bpjs` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan_pendidikan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_sekolahasal` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_lulus` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_karyawan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departemen` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_pribdi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_kantor` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_wa` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `riwayat_pelatihan` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_sap`, `id_nik`, `nama`, `id_badge`, `join_date`, `status_karyawan`, `foto`, `no_ktp`, `tempat_lahir`, `tanggal_lahir`, `agama`, `jenis_kelamin`, `suku`, `status_kawin`, `jmlh_tanggung`, `kelas_bpjs`, `pendidikan`, `jurusan_pendidikan`, `nama_sekolahasal`, `tahun_lulus`, `level_karyawan`, `departemen`, `posisi`, `email_pribdi`, `email_kantor`, `no_hp`, `no_wa`, `riwayat_pelatihan`, `created_at`, `updated_at`) VALUES
(10011111, '10011111', 'Imam Ahmad Ferdiansyah', 10011111, '2023-01-12', 'Kontrak', 'uploads/foto/1719413369.jpg', '1405021405000002', 'Pangkalan Kerinci', '2000-05-16', 'Islam', 'Laki-Laki', 'Jawa', 'Belum Kawin', 'Belum Menikah', 'Kelas 2', 'Strata 1', 'Sistem Informasi', 'Universitas Sains dan Teknologi Indonesia', '2024', 'Rank n File', 'Food And Beverage Service', 'Waiters', 'ferdiimam14@gmail.com', 'ferdiimam@gmail.com', '081377683339', '081377683339', 'Training Hospitality', NULL, NULL),
(100000012, '14050214', 'Budi Setiawan', 10000001, '2024-01-24', 'Permanen', 'C:\\xampp\\tmp\\php5D8F.tmp', '1405021400000002', 'Pangkalan Kerinci', '2000-05-15', 'Islam', 'Laki-Laki', 'Jawa', 'Belum Kawin', 'Belum Menikah', 'Kelas 2', 'Strata 1', 'Sistem Informasi', 'Universitas Riau', '2024', 'Rank n File', 'Food And Beverage Service', 'Waiter', 'budisetiawan@gmail.com', 'budisetiawan@gmail.com', '081377683339', '081377683339', 'Training Hospitality', '2024-05-09 20:38:18', '2024-05-09 20:38:18'),
(100000013, '1', 'Afif', 10000002, '2024-01-24', 'Permanen', 'uploads/foto/1717603041.jpg', '1', 'Pekanbaru', '2000-05-15', 'islam', 'Laki-Laki', 'Minang', 'Sudah Kawin', '2 Orang', 'Kelas 2', 'SMK', 'Perhotelan', 'SMK Perhotelan', '2017', 'General Manager', 'GMO', 'GM', 'afif@gmail.com', 'afif@gmail.com', '081100000000', '081100000000', 'Training Hospitality', '2024-05-09 20:38:18', '2024-05-09 20:38:18'),
(100000014, '1', 'Achira Puji Lestari', 10000003, '2024-01-24', 'Permanen', '', '1', 'Pekanbaru', '2000-05-15', 'Islam', 'Laki-Laki', 'Jawa', 'Belum Kawin', 'Belum Menikah', 'Kelas 2', 'Strata 1', 'Management', 'Universitas Indonesia', '2024', 'Executive Secretary', 'Main', 'Executive Secretary', 'achira@gmail.com', 'achira@gmail.com', '0811', '0811', '', '2024-05-09 20:38:18', '2024-05-09 20:38:18'),
(128071461, '1', 'Ade Saputra', 15940, '2024-01-24', 'Permanen', '', '1', 'Pekanbaru', '2000-05-15', 'Islam', 'Laki-Laki', 'Jawa', 'Belum Kawin', 'Belum Menikah', 'Kelas 2', 'Strata 1', 'Management', 'Universitas Indonesia', '2024', 'Transport', 'Main', 'Transport', 'ade@gmail.com', 'ade@gmail.com', '0811', '0811', '', '2024-05-09 20:38:19', '2024-05-09 20:38:19'),
(439731380, '1', 'Sandy Lee', 37606, '2024-01-24', 'Permanen', '', '1', 'Pekanbaru', '2000-05-15', 'Islam', 'Laki-Laki', 'Jawa', 'Belum Kawin', 'Belum Menikah', 'Kelas 2', 'Strata 1', 'Management', 'Universitas Indonesia', '2024', 'Front Office', 'Main', 'Front Office', 'sandy@gmail.com', 'sandy@gmail.com', '0811', '0811', '', '2024-05-09 20:38:18', '2024-05-09 20:38:18'),
(483060036, '1', 'Kurnia Prasetyo', 13477, '2024-01-24', 'Permanen', '', '1', 'Pekanbaru', '2000-05-15', 'Islam', 'Laki-Laki', 'Jawa', 'Belum Kawin', 'Belum Menikah', 'Kelas 2', 'Strata 1', 'Management', 'Universitas Indonesia', '2024', 'Engineering', 'Main', 'Engineering', 'kurnia@gmail.com', 'kurnia@gmail.com', '0811', '0811', '', '2024-05-09 20:38:19', '2024-05-09 20:38:19'),
(886516473, '1', 'M. Apriantoro', 77796, '2024-01-24', 'Permanen', '', '1', 'Pekanbaru', '2000-05-15', 'Islam', 'Laki-Laki', 'Jawa', 'Belum Kawin', 'Belum Menikah', 'Kelas 2', 'Strata 1', 'Management', 'Universitas Indonesia', '2024', 'F&B Product', 'Main', 'F&B Product', 'apriantoro@gmail.com', 'apriantoro@gmail.com', '0811', '0811', '', '2024-05-09 20:38:19', '2024-05-09 20:38:19'),
(916576530, '1', 'Antoni', 91374, '2024-01-24', 'Permanen', '', '1', 'Pekanbaru', '2000-05-15', 'Islam', 'Laki-Laki', 'Jawa', 'Belum Kawin', 'Belum Menikah', 'Kelas 2', 'Strata 1', 'Management', 'Universitas Indonesia', '2024', 'Health Club', 'Main', 'Health Club', 'antoni@gmail.com', 'antoni@gmail.com', '0811', '0811', '', '2024-05-09 20:38:19', '2024-05-09 20:38:19'),
(1203092223, '1', 'Suranto', 27227, '2024-01-24', 'Permanen', '', '1', 'Pekanbaru', '2000-05-15', 'Islam', 'Laki-Laki', 'Jawa', 'Belum Kawin', 'Belum Menikah', 'Kelas 2', 'Strata 1', 'Management', 'Universitas Indonesia', '2024', 'Eco Campy', 'Main', 'Eco Campy', 'suranto@gmail.com', 'suranto@gmail.com', '0811', '0811', '', '2024-05-09 20:38:19', '2024-05-09 20:38:19'),
(1328442088, '1', 'Arianda', 17274, '2024-01-24', 'Kontrak', 'uploads/foto/1717603261.jpg', '1', 'Pekanbaru', '2000-05-15', 'islam', 'Laki-Laki', 'Jawa', 'Belum Kawin', 'Belum Menikah', 'Kelas 2', 'SD', 'Management', 'Universitas Indonesia', '2024', 'General Manager', 'GMO', 'Human Resource', 'cliff@gmail.com', 'cliff@gmail.com', '0811', '0811', 'Training Hospitality', '2024-05-09 20:38:19', '2024-05-09 20:38:19'),
(1340114871, '1', 'Abdul Rosyid', 29460, '2024-01-24', 'Permanen', '', '1', 'Pekanbaru', '2000-05-15', 'Islam', 'Laki-Laki', 'Jawa', 'Belum Kawin', 'Belum Menikah', 'Kelas 2', 'Strata 1', 'Management', 'Universitas Indonesia', '2024', 'House Keeping', 'Main', 'House Keeping', 'abdul@gmail.com', 'abdul@gmail.com', '0811', '0811', '', '2024-05-09 20:38:19', '2024-05-09 20:38:19'),
(1854130502, '1', 'Bambang Iswanto', 10000003, '2024-01-24', 'Permanen', '', '1', 'Pekanbaru', '2000-05-15', 'Islam', 'Laki-Laki', 'Jawa', 'Belum Kawin', 'Belum Menikah', 'Kelas 2', 'Strata 1', 'Management', 'Universitas Indonesia', '2024', 'GMO Head', 'Main', 'GMO Head', 'bambang@gmail.com', 'bambang@gmail.com', '0811', '0811', '', '2024-05-09 20:38:18', '2024-05-09 20:38:18'),
(1920289378, '1', 'Zaenal Paijo', 42615, '2024-01-24', 'Permanen', '', '1', 'Pekanbaru', '2000-05-15', 'Islam', 'Laki-Laki', 'Jawa', 'Belum Kawin', 'Belum Menikah', 'Kelas 2', 'Strata 1', 'Management', 'Universitas Indonesia', '2024', 'F&B Service', 'Main', 'F&B Service', 'zaenal@gmail.com', 'zaenal@gmail.com', '0811', '0811', '', '2024-05-09 20:38:19', '2024-05-09 20:38:19');

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
(1, 1, 'aaa', 'vvv', 12, 'aaab', '2024-05-09 20:38:19', '2024-05-09 20:38:19'),
(2, 1, 'Anto', 'Ayah', 25, 'Pekanbaru', '2024-05-09 20:38:19', '2024-05-09 20:38:19');

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
(1, 1, 'Ade', 'Ayah', 23, 'Pekanbaru', '2024-05-09 20:38:19', '2024-05-09 20:38:19');

-- --------------------------------------------------------

--
-- Table structure for table `master_cuti`
--

CREATE TABLE `master_cuti` (
  `id_cuti` bigint(20) UNSIGNED NOT NULL,
  `jenis_cuti` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_cuti`
--

INSERT INTO `master_cuti` (`id_cuti`, `jenis_cuti`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Tahunan', 'Jumlah 12', '2024-05-09 20:38:19', '2024-05-09 20:38:19'),
(2, 'Travelling Day', NULL, '2024-05-09 20:38:19', '2024-05-09 20:38:19'),
(3, 'Cuti Melahirkan', 'Khusus Perempuan', '2024-05-09 20:38:19', '2024-05-09 20:38:19');

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
(1, 'Technical/operational capabilities \"Product and industry knowledge | Domain expertise\"', '2024-05-09 20:41:07', '2024-06-26 08:24:54'),
(2, 'Management capabilities \"Influences, motivates and builds teams | Decision making\"', '2024-05-09 20:41:19', '2024-06-26 08:25:56'),
(3, 'Strategic capabilities (applicable for experienced/senior hires) \"Systematic thinking analytical and conceptual abilities\"', '2024-06-26 08:27:12', '2024-06-26 08:27:12'),
(4, 'Intellectual ability | Quick learner dan ability to understand things fast | Sharp business sense/acumen', '2024-06-26 08:28:31', '2024-06-26 08:28:31'),
(5, 'Loyalty, beyond call of duty | Not giving up when problem arise', '2024-06-26 08:29:30', '2024-06-26 08:29:38'),
(6, 'Ability to overcome obstacles | Navigates through challenging situations | Drive and resillience to succeed', '2024-06-26 08:31:24', '2024-06-26 08:31:24'),
(7, 'Communication and interpersonal skills | Poise | Grooming and confidance', '2024-06-26 08:32:16', '2024-06-26 08:32:16');

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
(18, '2024_05_08_090733_create_interviews_table', 1);

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
(1, 'Asman Santoso', 'Ds. Ciwastra No. 763, Cilegon 64726, Kalteng', '2024-05-09 20:38:19', '2024-05-09 20:38:19'),
(2, 'Dimaz Prayoga', 'Dk. Supono No. 942, Pontianak 44878, Kaltim', '2024-05-09 20:38:19', '2024-05-09 20:38:19'),
(3, 'Ulva Pratiwi S.Farm', 'Jr. Sam Ratulangi No. 766, Jambi 23400, Kalbar', '2024-05-09 20:38:19', '2024-05-09 20:38:19'),
(4, 'Oni Wulan Suryatmi', 'Ki. Kalimalang No. 830, Administrasi Jakarta Utara 43320, NTB', '2024-05-09 20:38:19', '2024-05-09 20:38:19'),
(5, 'Wasis Aswani Januar S.Pd', 'Psr. Banda No. 481, Padang 77018, Bali', '2024-05-09 20:38:19', '2024-05-09 20:38:19'),
(6, 'Nabila Jane Zulaika S.Farm', 'Jr. Hang No. 341, Surabaya 64743, Bali', '2024-05-09 20:38:19', '2024-05-09 20:38:19'),
(7, 'Rahman Lazuardi', 'Kpg. Dipenogoro No. 941, Solok 69081, Papua', '2024-05-09 20:38:19', '2024-05-09 20:38:19'),
(8, 'Amelia Aryani', 'Ds. Gatot Subroto No. 294, Batu 13469, Kaltim', '2024-05-09 20:38:19', '2024-05-09 20:38:19'),
(9, 'Yuni Aurora Purnawati S.Kom', 'Jln. Jaksa No. 320, Mojokerto 92685, Kalsel', '2024-05-09 20:38:19', '2024-05-09 20:38:19'),
(10, 'Pranata Respati Wibowo S.Sos', 'Ds. Cokroaminoto No. 560, Padangsidempuan 55507, Gorontalo', '2024-05-09 20:38:19', '2024-05-09 20:38:19');

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
(1, 1, 'SD 1', 'SD', 2008, 2024, 100, '2024-05-09 20:38:19', '2024-05-09 20:38:19'),
(2, 1, 'SMP N 1', 'SMP', 2010, 2013, 90, '2024-05-09 20:38:19', '2024-05-09 20:38:19');

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
(1, 1, 'Flashsoft', 'PHP', 2010, 2024, 100, '2024-05-09 20:38:19', '2024-05-09 20:38:19'),
(2, 1, 'Fs', 'Laravel', 2023, 2024, 90, '2024-05-09 20:38:19', '2024-05-09 20:38:19');

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
(1, 1, 'Hotel', 'CEO', '2021-2024', '10000000', 'Ngopi', 'Gabut', '2024-05-09 20:38:19', '2024-05-09 20:38:19');

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
(1, NULL, 'Admin', 'admin@gmail.com', '$2y$10$qaYL8/I.lIOEFEMBdXe2hOAYhOKFfqWUB7crQ89./qlulZJFuXtSS', 'admin', NULL, '2024-05-09 20:38:20', '2024-05-09 20:38:20'),
(2, 10000001, 'Ferdi Irawan', 'ferdi@gmail.com', '$2y$10$BrBaN7UPAK9fXGWvhGqKo.SnmIZcgXRfR20Wg9d0vDUMGqqo6P2/2', 'karyawan', NULL, '2024-05-09 20:38:20', '2024-05-09 20:38:20'),
(3, 10011111, 'Imam Ahmad Ferdiansyah', 'ferdiimam@gmail.com', '$2y$10$K.ygnbfEGwmPlVBTMuE7XexHkgBfMyH2HU7Oppnsy835KwCge78zK', 'karyawan', NULL, '2024-06-26 07:49:36', '2024-06-26 07:49:36'),
(4, 100000012, 'Budi Setiawan', 'budisetiawan@gmail.com', '$2y$10$P7Z5ZFVCbiJ6C5aML09pvuSUasFzLKV7h5K4zeQ8fdxdGKuWh6sb2', 'karyawan', NULL, '2024-06-26 07:49:36', '2024-06-26 07:49:36'),
(5, 100000013, 'Afif', 'afif@gmail.com', '$2y$10$tvj.Gs4RlM1/E1zkeyts/ON7un.t9NuJxI0CjYqKcv8ce3iyMfe/6', 'karyawan', NULL, '2024-06-26 07:49:36', '2024-06-26 07:49:36'),
(6, 100000014, 'Achira Puji Lestari', 'achira@gmail.com', '$2y$10$Kn2RchVRbxGradBNQjNCrOpPexAqm9mZvXMX24HIcJ4TzGAd5CjO2', 'karyawan', NULL, '2024-06-26 07:49:36', '2024-06-26 07:49:36'),
(7, 128071461, 'Ade Saputra', 'ade@gmail.com', '$2y$10$vIMZV2Ni1c1Zi1gtfcidk.RPW.XC448KPmla5RgIiAShDI3Wu3Z7G', 'karyawan', NULL, '2024-06-26 07:49:36', '2024-06-26 07:49:36'),
(8, 439731380, 'Sandy Lee', 'sandy@gmail.com', '$2y$10$H3oPzqkwt1Qvu6OcGSWZp.8W4uZwYbCyiiCIGG1mWOA8slWbQ4uau', 'karyawan', NULL, '2024-06-26 07:49:36', '2024-06-26 07:49:36'),
(9, 483060036, 'Kurnia Prasetyo', 'kurnia@gmail.com', '$2y$10$Z3bF5cGL/A25PS4y9uh9pef1SFC9zV7CkwXy/D5cK68CDbDK9qz0q', 'karyawan', NULL, '2024-06-26 07:49:37', '2024-06-26 07:49:37'),
(10, 886516473, 'M. Apriantoro', 'apriantoro@gmail.com', '$2y$10$GdaI/PoZYQHNhopj.8DpcuqLOYVmrnuz5LbPWssNuHtok0AAKlbrO', 'karyawan', NULL, '2024-06-26 07:49:37', '2024-06-26 07:49:37'),
(11, 916576530, 'Antoni', 'antoni@gmail.com', '$2y$10$Bzv0TP9fQmDhKRzbAX6.Ye6bzkozps.wAw8TkmZX25lU0ECMIoE66', 'karyawan', NULL, '2024-06-26 07:49:37', '2024-06-26 07:49:37'),
(12, 1203092223, 'Suranto', 'suranto@gmail.com', '$2y$10$Qao9OE92/4bmEprcMvZlaejzYYaRLYvb5evxFO.eQC5NS.UvIdmVy', 'karyawan', NULL, '2024-06-26 07:49:37', '2024-06-26 07:49:37'),
(13, 1328442088, 'Arianda', 'cliff@gmail.com', '$2y$10$fkNn1yZS9TbfLKbbJwx9ROgmFOdoCjWwHfhqjtfHu82xyaKzBi1sy', 'karyawan', NULL, '2024-06-26 07:49:37', '2024-06-26 07:49:37'),
(14, 1340114871, 'Abdul Rosyid', 'abdul@gmail.com', '$2y$10$8LlAeGA0azF30YLcI79NC.lLX2Nun5BS2kLud35wAw/RkLgAPCKG.', 'karyawan', NULL, '2024-06-26 07:49:38', '2024-06-26 07:49:38'),
(15, 1854130502, 'Bambang Iswanto', 'bambang@gmail.com', '$2y$10$3aCerLYwmUo0AxamF5LyzO.IBZQ2ewk2D0/XUQY/31ZprUW7oj4c2', 'karyawan', NULL, '2024-06-26 07:49:38', '2024-06-26 07:49:38'),
(16, 1920289378, 'Zaenal Paijo', 'zaenal@gmail.com', '$2y$10$uZh.j24yeZ51USPIXgoua.BMz8NqGDzk.uRDzL0h0PP9ycaqZKhJq', 'karyawan', NULL, '2024-06-26 07:49:38', '2024-06-26 07:49:38');

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
  MODIFY `id_cuti` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `interview`
--
ALTER TABLE `interview`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwal_pelatihan`
--
ALTER TABLE `jadwal_pelatihan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `master_cuti`
--
ALTER TABLE `master_cuti`
  MODIFY `id_cuti` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `master_soal`
--
ALTER TABLE `master_soal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;