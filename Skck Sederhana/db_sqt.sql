-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26 Des 2018 pada 14.20
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sqt`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaju`
--

CREATE TABLE `pengaju` (
  `id` varchar(20) NOT NULL,
  `nik` int(100) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `temlahir` varchar(60) NOT NULL,
  `tgllahir` date NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `kelamin` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `sd` varchar(60) NOT NULL,
  `sdtahun` date NOT NULL,
  `smp` varchar(60) NOT NULL,
  `smptahun` date NOT NULL,
  `sma` varchar(60) NOT NULL,
  `smatahun` date NOT NULL,
  `kuliah` varchar(60) NOT NULL,
  `kuliahtahun` date NOT NULL,
  `ket1` varchar(225) NOT NULL,
  `ket2` varchar(225) NOT NULL,
  `ket3` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengaju`
--

INSERT INTO `pengaju` (`id`, `nik`, `nama`, `temlahir`, `tgllahir`, `alamat`, `kelamin`, `status`, `agama`, `sd`, `sdtahun`, `smp`, `smptahun`, `sma`, `smatahun`, `kuliah`, `kuliahtahun`, `ket1`, `ket2`, `ket3`) VALUES
('1212201800001', 1, 'dgag', 'dfasddas', '2018-12-05', 'dagaga', 'Wanita', 'Menikah', 'Kristen', 'adsgasg', '2018-11-26', 'dfaa', '2018-11-27', 'asdgagkj', '2019-01-02', 'nvjjjf', '2018-12-18', 'fgsdghfs', 'hfsdhf', 'uyuujfd'),
('1212201800002', 6, 'hshsdgdfg', 'daga', '2018-12-19', 'asgasa', 'Pria', 'Lajang', 'Islam', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran`
--

CREATE TABLE `saran` (
  `id` int(11) NOT NULL,
  `pengaju` varchar(200) NOT NULL,
  `pesan` varchar(1000) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `saran`
--

INSERT INTO `saran` (`id`, `pengaju`, `pesan`, `tanggal`) VALUES
(1, '', 'hsgfhssgf', '0000-00-00'),
(2, 'Joko', 'lololololol', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengaju`
--
ALTER TABLE `pengaju`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
