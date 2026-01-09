-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Des 2025 pada 04.12
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_daily_jurnal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `gambar` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `article`
--

INSERT INTO `article` (`id`, `judul`, `isi`, `gambar`, `tanggal`, `username`) VALUES
(0, 'Sai Akuto', 'Raja iblis terkuat dalam fiksi jepang', '20251211033751.png', '2025-12-11 03:37:51', 'admin'),
(1, 'Kastil', 'bangunan berbenteng megah yang dibangun pada Abad Pertengahan sebagai tempat tinggal bangsawan atau keluarga kerajaan sekaligus benteng pertahanan militer, dilengkapi dinding tebal, menara, parit, dan benteng pertahanan untuk melindungi pemiliknya dan menunjukkan kekuasaan mereka. Fungsinya utama adalah sebagai pusat kekuasaan, kediaman, dan basis militer untuk mengontrol wilayah sekitarnya, berbeda dengan istana (tidak berbenteng) atau benteng (tidak selalu kediaman bangsawan).', 'castle.jpg', '2025-12-06 14:48:07', ''),
(4, 'Taman', 'area terbuka yang dirancang dan ditata dengan tanaman, elemen alami, dan buatan untuk keindahan, kenyamanan, rekreasi, pendidikan, atau pelestarian, bisa berupa kebun bunga sederhana atau ruang hijau luas seperti taman kota dan taman nasional. Fungsinya beragam, mulai dari tempat bersantai, bermain, olahraga, hingga menjadi area resapan air dan paru-paru kota.', 'taman.jpg', '2025-12-06 14:48:36', ''),
(6, 'Ultraman Ginga', 'Ginga & Dark Lugiel', '20251211034624.png', '2025-12-11 03:46:24', 'admin'),
(22, 'Tokyo', 'Tokyo (東京) artinya \"Ibu Kota Timur\" dalam bahasa Jepang, berasal dari kata \"Tō\" (東) yang berarti \"timur\" dan \"Kyō\" (京) yang berarti \"ibu kota\". Nama ini diberikan saat kota Edo berganti nama menjadi Tokyo pada tahun 1868, menandai pemindahan pusat pemerintahan dan istana kekaisaran dari Kyoto ke wilayah tersebut, yang secara geografis berada di timur. \r\n', 'tokyo.jpg', '2025-12-06 14:48:47', ''),
(28, 'Komi berkumis', 'Komi', '20251211033940.jpg', '2025-12-11 03:39:40', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
