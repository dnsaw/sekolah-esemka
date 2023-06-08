-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jun 2023 pada 05.39
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
-- Database: `sekolah_esemka`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nig` int(11) NOT NULL,
  `tempatlahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jeniskelamin` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `nama`, `nig`, `tempatlahir`, `tgl_lahir`, `jeniskelamin`, `agama`, `alamat`) VALUES
(1, 'Widya', 12121, 'Jakarta', '1997-01-08', 'Laki Laki', 'none', 'Jl. Daan Mogot Km. 11 RT: 04 RW50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komen`
--

CREATE TABLE `komen` (
  `id` int(11) NOT NULL,
  `komentar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `komen`
--

INSERT INTO `komen` (`id`, `komentar`) VALUES
(1, 'khfdkf\r\n'),
(2, 'mncbdc');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nis` int(11) NOT NULL,
  `tempatlahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jeniskelamin` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `alamat` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `nis`, `tempatlahir`, `tgl_lahir`, `jeniskelamin`, `agama`, `alamat`) VALUES
(95, 'Joko', 1202390, 'Jakarta', '2023-06-09', 'Laki Laki', 'Islam', 'Jl Jakarta No 6969');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `email`, `nama`, `username`, `pass`) VALUES
(9, 'danis@gmail.com', 'danis', 'dns', 'd41d8cd98f00b204e9800998ecf8427e'),
(10, 'danis1@gmail.com', '123', 'asd', 'd41d8cd98f00b204e9800998ecf8427e'),
(11, 'danis50@gmail.com', 'Danis', 'dnshhy', 'd41d8cd98f00b204e9800998ecf8427e');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komen`
--
ALTER TABLE `komen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `komen`
--
ALTER TABLE `komen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
