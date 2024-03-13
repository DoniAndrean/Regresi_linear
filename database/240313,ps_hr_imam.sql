-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Mar 2024 pada 21.32
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

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
-- Struktur dari tabel `bahasa`
--

CREATE TABLE `bahasa` (
  `id_bahasa` int(11) NOT NULL,
  `id_kandidat` int(11) DEFAULT NULL,
  `bahasa_lain` varchar(100) DEFAULT NULL,
  `membaca` varchar(20) DEFAULT NULL,
  `menulis` varchar(20) DEFAULT NULL,
  `berbicara` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `bahasa`
--

INSERT INTO `bahasa` (`id_bahasa`, `id_kandidat`, `bahasa_lain`, `membaca`, `menulis`, `berbicara`) VALUES
(1, 1, 'Inggris', 'baik', 'fasih', 'cukup'),
(2, 1, 'Arab', 'baik', 'baik', 'baik'),
(3, 1, 'Inggris', 'cukup', 'cukup', 'cukup');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cuti`
--

CREATE TABLE `cuti` (
  `id_cuti` int(11) NOT NULL,
  `jenis_cuti` int(11) NOT NULL,
  `id_sap` int(11) NOT NULL,
  `jumlah_cuti` int(11) NOT NULL,
  `start_cuti` date NOT NULL,
  `end_cuti` date NOT NULL,
  `alasan_cuti` text DEFAULT NULL,
  `status_cuti` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `cuti`
--

INSERT INTO `cuti` (`id_cuti`, `jenis_cuti`, `id_sap`, `jumlah_cuti`, `start_cuti`, `end_cuti`, `alasan_cuti`, `status_cuti`) VALUES
(1, 1, 10000001, 12, '2024-01-01', '2024-01-12', 'Liburan Lagi', 'selesai'),
(2, 3, 100000012, 5, '2024-02-06', '2024-02-15', 'Dinas', 'selesai'),
(3, 1, 100000012, 3, '2024-02-06', '2024-02-07', 'Liburan', 'Pengajuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kandidat`
--

CREATE TABLE `kandidat` (
  `id_kandidat` int(11) NOT NULL,
  `posisi` varchar(50) DEFAULT NULL,
  `informasi_lowongan` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `umur` int(11) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `status_perkawinan` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `berat_badan` int(2) DEFAULT NULL,
  `tinggi_badan` int(2) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `bahasa_pertama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kandidat`
--

INSERT INTO `kandidat` (`id_kandidat`, `posisi`, `informasi_lowongan`, `nama`, `umur`, `tempat_lahir`, `tanggal_lahir`, `status_perkawinan`, `jenis_kelamin`, `berat_badan`, `tinggi_badan`, `alamat`, `no_hp`, `email`, `bahasa_pertama`) VALUES
(1, 'Posisi', 'Instagram', 'Tesa', 25, 'Pekanbaru', '2024-02-29', 'Sudah Kawin', 'Laki-Laki', 50, 160, 'Jl. Garuda Sakti', '081261', 'tesa@gmail.com', 'Indonesia');

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluarga`
--

CREATE TABLE `keluarga` (
  `id_keluarga` int(11) NOT NULL,
  `id_kandidat` int(11) NOT NULL,
  `nama_keluarga` varchar(100) NOT NULL,
  `relation` varchar(20) NOT NULL,
  `age` int(2) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `keluarga`
--

INSERT INTO `keluarga` (`id_keluarga`, `id_kandidat`, `nama_keluarga`, `relation`, `age`, `address`) VALUES
(1, 1, 'aaa', 'vvv', 12, 'aaab'),
(2, 1, 'Anto', 'Ayah', 25, 'Pekanbaru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak_darurat`
--

CREATE TABLE `kontak_darurat` (
  `id_kontak_darurat` int(11) NOT NULL,
  `id_kandidat` int(11) NOT NULL,
  `nama_kontak_darurat` varchar(100) NOT NULL,
  `relation` varchar(20) NOT NULL,
  `age` int(2) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kontak_darurat`
--

INSERT INTO `kontak_darurat` (`id_kontak_darurat`, `id_kandidat`, `nama_kontak_darurat`, `relation`, `age`, `address`) VALUES
(1, 1, 'Ade', 'Ayah', 23, 'Pekanbaru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_cuti`
--

CREATE TABLE `master_cuti` (
  `id_cuti` int(11) NOT NULL,
  `jenis_cuti` varchar(100) NOT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `master_cuti`
--

INSERT INTO `master_cuti` (`id_cuti`, `jenis_cuti`, `keterangan`) VALUES
(1, 'Tahunan', 'Jumlah 12'),
(2, 'Travelling Day', NULL),
(3, 'Cuti Melahirkan', 'Khusus Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `alamat`) VALUES
(1, 'Asman Santoso', 'Ds. Ciwastra No. 763, Cilegon 64726, Kalteng'),
(2, 'Dimaz Prayoga', 'Dk. Supono No. 942, Pontianak 44878, Kaltim'),
(3, 'Ulva Pratiwi S.Farm', 'Jr. Sam Ratulangi No. 766, Jambi 23400, Kalbar'),
(4, 'Oni Wulan Suryatmi', 'Ki. Kalimalang No. 830, Administrasi Jakarta Utara 43320, NTB'),
(5, 'Wasis Aswani Januar S.Pd', 'Psr. Banda No. 481, Padang 77018, Bali'),
(6, 'Nabila Jane Zulaika S.Farm', 'Jr. Hang No. 341, Surabaya 64743, Bali'),
(7, 'Rahman Lazuardi', 'Kpg. Dipenogoro No. 941, Solok 69081, Papua'),
(8, 'Amelia Aryani', 'Ds. Gatot Subroto No. 294, Batu 13469, Kaltim'),
(9, 'Yuni Aurora Purnawati S.Kom', 'Jln. Jaksa No. 320, Mojokerto 92685, Kalsel'),
(10, 'Pranata Respati Wibowo S.Sos', 'Ds. Cokroaminoto No. 560, Padangsidempuan 55507, Gorontalo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_pendidikan` int(11) NOT NULL,
  `id_kandidat` int(11) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `jenjang` varchar(50) NOT NULL,
  `tahun_from` int(4) NOT NULL,
  `tahun_to` int(4) NOT NULL,
  `gpa` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`id_pendidikan`, `id_kandidat`, `nama_sekolah`, `jenjang`, `tahun_from`, `tahun_to`, `gpa`) VALUES
(1, 1, 'SD 1', 'SD', 2008, 2024, 100),
(2, 1, 'SMP N 1', 'SMP', 2010, 2013, 90);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan_informal`
--

CREATE TABLE `pendidikan_informal` (
  `id_pendidikan_informal` int(11) NOT NULL,
  `id_kandidat` int(11) NOT NULL,
  `institusi` varchar(100) NOT NULL,
  `major` varchar(100) NOT NULL,
  `tahun_from` int(11) NOT NULL,
  `tahun_to` int(11) NOT NULL,
  `gpa` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pendidikan_informal`
--

INSERT INTO `pendidikan_informal` (`id_pendidikan_informal`, `id_kandidat`, `institusi`, `major`, `tahun_from`, `tahun_to`, `gpa`) VALUES
(1, 1, 'Flashsoft', 'PHP', 2010, 2024, 100),
(2, 1, 'Fs', 'Laravel', 2023, 2024, 90);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id_pengalaman` int(11) NOT NULL,
  `id_kandidat` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `periode` varchar(20) NOT NULL,
  `salary` varchar(20) NOT NULL,
  `main_duties` text NOT NULL,
  `reason_for_leaving` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengalaman`
--

INSERT INTO `pengalaman` (`id_pengalaman`, `id_kandidat`, `company_name`, `position`, `periode`, `salary`, `main_duties`, `reason_for_leaving`) VALUES
(1, 1, 'Hotel', 'CEO', '2021-2024', '10000000', 'Ngopi', 'Gabut');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bahasa`
--
ALTER TABLE `bahasa`
  ADD PRIMARY KEY (`id_bahasa`);

--
-- Indeks untuk tabel `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id_cuti`);

--
-- Indeks untuk tabel `kandidat`
--
ALTER TABLE `kandidat`
  ADD PRIMARY KEY (`id_kandidat`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_sap`);

--
-- Indeks untuk tabel `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`id_keluarga`);

--
-- Indeks untuk tabel `kontak_darurat`
--
ALTER TABLE `kontak_darurat`
  ADD PRIMARY KEY (`id_kontak_darurat`);

--
-- Indeks untuk tabel `master_cuti`
--
ALTER TABLE `master_cuti`
  ADD PRIMARY KEY (`id_cuti`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indeks untuk tabel `pendidikan_informal`
--
ALTER TABLE `pendidikan_informal`
  ADD PRIMARY KEY (`id_pendidikan_informal`);

--
-- Indeks untuk tabel `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`id_pengalaman`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bahasa`
--
ALTER TABLE `bahasa`
  MODIFY `id_bahasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id_cuti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kandidat`
--
ALTER TABLE `kandidat`
  MODIFY `id_kandidat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `keluarga`
--
ALTER TABLE `keluarga`
  MODIFY `id_keluarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kontak_darurat`
--
ALTER TABLE `kontak_darurat`
  MODIFY `id_kontak_darurat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `master_cuti`
--
ALTER TABLE `master_cuti`
  MODIFY `id_cuti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pendidikan_informal`
--
ALTER TABLE `pendidikan_informal`
  MODIFY `id_pendidikan_informal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pengalaman`
--
ALTER TABLE `pengalaman`
  MODIFY `id_pengalaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
