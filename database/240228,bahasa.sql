-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Feb 2024 pada 20.05
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
(2, 1, 'Arab', 'baik', 'baik', 'baik');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bahasa`
--
ALTER TABLE `bahasa`
  ADD PRIMARY KEY (`id_bahasa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bahasa`
--
ALTER TABLE `bahasa`
  MODIFY `id_bahasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
