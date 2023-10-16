-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2023 at 09:39 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'L QUEENLY'),
(2, 'L MTH AKSESORIS (IM)'),
(3, 'L MTH TABUNG (LK)'),
(4, 'SP MTH SPAREPART (LK)'),
(5, 'CI MTH TINTA LAIN (IM)'),
(6, 'S MTH STEMPEL (IM)'),
(7, 'L MTH AKSESORIS (LK)');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `no` int(5) NOT NULL,
  `id_produk` int(5) NOT NULL,
  `nama_produk` varchar(250) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `kategori_id` enum('1','2','3','4','5','6','7') NOT NULL,
  `status_id` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`no`, `id_produk`, `nama_produk`, `harga`, `kategori_id`, `status_id`) VALUES
(7, 6, 'ALCOHOL GEL POLISH CLEANSER GP-CLN01', '12500', '1', '1'),
(10, 9, 'ALCOHOL GEL POLISH CLEANSER GP-CLN01', '1000', '2', '1'),
(12, 11, 'ALUMUNIUM FOIL ALL IN ONE BULAT 30mm IM', '1000', '2', '1'),
(13, 12, 'ALUMUNIUM FOIL ALL IN ONE SHEET 250mm IM', '12500', '2', '2'),
(16, 15, 'ALUMUNIUM FOIL HDPE/PE BULAT 23mm IM', '12500', '2', '1'),
(18, 17, 'ALUMUNIUM FOIL HDPE/PE BULAT 30mm IM', '1000', '2', '1'),
(19, 18, 'ALUMUNIUM FOIL HDPE/PE SHEET 250mm IM', '13000', '2', '2'),
(20, 19, 'ALUMUNIUM FOIL PET SHEET 250mm IM', '1000', '2', '2'),
(23, 22, 'ARM PENDEK MODEL U', '13000', '2', '1'),
(24, 23, 'ARM SUPPORT KECIL', '13000', '3', '2'),
(25, 24, 'ARM SUPPORT KOTAK PUTIH', '13000', '2', '2'),
(27, 26, 'ARM SUPPORT PENDEK POLOS', '13000', '3', '1'),
(28, 27, 'ARM SUPPORT S IM', '1000', '2', '2'),
(29, 28, 'ARM SUPPORT T (IMPORT)', '13000', '2', '1'),
(30, 29, 'ARM SUPPORT T - MODEL 1 ( LOKAL )', '10000', '3', '1'),
(51, 50, 'BLACK LASER TONER FP-T3 (100gr)', '13000', '2', '2'),
(57, 56, 'BODY PRINTER CANON IP2770', '500', '4', '1'),
(59, 58, 'BODY PRINTER T13X', '15000', '4', '1'),
(60, 59, 'BOTOL 1000ML BLUE KHUSUS UNTUK EPSON R1800/R800 - 4180 IM (T054920)', '10000', '5', '1'),
(61, 60, 'BOTOL 1000ML CYAN KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4120 IM (T054220)', '10000', '5', '2'),
(62, 61, 'BOTOL 1000ML GLOSS OPTIMIZER KHUSUS UNTUK EPSON R1800/R800/R1900/R2000/IX7000/MG6170 - 4100 IM (T054020)', '1500', '5', '1'),
(63, 62, 'BOTOL 1000ML L.LIGHT BLACK KHUSUS UNTUK EPSON 2400 - 0599 IM', '1500', '5', '2'),
(64, 63, 'BOTOL 1000ML LIGHT BLACK KHUSUS UNTUK EPSON 2400 - 0597 IM', '1500', '5', '2'),
(65, 64, 'BOTOL 1000ML MAGENTA KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4140 IM (T054320)', '1000', '5', '1'),
(66, 65, 'BOTOL 1000ML MATTE BLACK KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 3503 IM (T054820)', '1500', '5', '2'),
(67, 66, 'BOTOL 1000ML ORANGE KHUSUS UNTUK EPSON R1900/R2000 IM - 4190 (T087920)', '1500', '5', '1'),
(68, 67, 'BOTOL 1000ML RED KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4170 IM (T054720)', '1000', '5', '2'),
(69, 68, 'BOTOL 1000ML YELLOW KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4160 IM (T054420)', '1500', '5', '2'),
(71, 70, 'BOTOL KOTAK 100ML LK', '1000', '7', '1'),
(73, 72, 'BOTOL 10ML IM', '1000', '6', '2');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(5) NOT NULL,
  `nama_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `nama_status`) VALUES
(1, 'bisa dijual'),
(2, 'tidak bisa dijual');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
