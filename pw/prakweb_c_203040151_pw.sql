-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Okt 2022 pada 13.45
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakweb_c_203040151_pw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `tahun_terbit` date NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul`, `pengarang`, `tahun_terbit`, `gambar`) VALUES
(1, 'Bumi', 'Tere Liye', '2020-09-01', '632dbaf7ab414.jpg'),
(2, 'Nebula', 'Tere Liye', '2020-09-02', 'nebula.jpg'),
(3, 'Komet', 'Tere Liye', '2020-09-03', 'komet.jpg'),
(4, 'Selena', 'Tere Liye', '2020-09-04', 'selena.jpg'),
(5, 'Sagaras', 'Tere Liye', '2020-09-05', 'sagaras.jpg'),
(6, 'Bintang', 'Tere Liye', '2020-09-06', 'bintang.jpg'),
(7, 'Bulan', 'Tere Liye', '2020-09-07', 'bulan.jpg'),
(8, 'Komet Minor', 'Tere Liye', '2020-09-08', 'kometMinor.jpg'),
(9, 'Si Putih', 'Tere Liye', '2020-09-09', 'siPutih.jpg'),
(10, 'Bibi Gill', 'Tere Liye', '2020-09-10', 'bibiGill.jpg'),
(17, 'Sesudah Senja', 'eff', '2010-01-06', '../../public/assets/no_photo.png'),
(20, 'Astronout', 'Unkonwn', '2022-10-05', '633a5dd580792.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
