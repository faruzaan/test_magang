-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2019 at 11:22 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_arc`
--

CREATE TABLE `tb_arc` (
  `id` int(11) NOT NULL,
  `gambar_logo` varchar(100) NOT NULL,
  `gambar_1` varchar(100) NOT NULL,
  `gambar_2` varchar(100) NOT NULL,
  `gambar_3` varchar(100) NOT NULL,
  `gambar_4` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `judul_file` varchar(100) NOT NULL,
  `desc1` varchar(100) NOT NULL,
  `desc2` varchar(100) NOT NULL,
  `desc_arc` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_arc`
--

INSERT INTO `tb_arc` (`id`, `gambar_logo`, `gambar_1`, `gambar_2`, `gambar_3`, `gambar_4`, `judul`, `judul_file`, `desc1`, `desc2`, `desc_arc`) VALUES
(1, 'vslogo', 'klinik1', 'klinik2', 'klinik4', 'klinik5', 'Visual Studio', 'klinik', 'Projek Klinik Dengan UI Sederhana', '', 'Sebuah projek menggunakan Visual Studio dengan design sederhana, sudah menggunakan database mysql dan global variable'),
(2, 'vslogo\r\n', 'penjualan1', 'penjualan2', 'penjualan3', 'penjualan4', 'Visual Studio', 'penjualan', 'Projek Penjualan Dengan UI Sederhana', '', ''),
(3, 'androidlogo\r\n', 'wisata1', 'wisata2', '', '', 'Android', 'wisata', 'Projek Tempat Wisata Dengan UI Sederhana', '(Sedang Dilakukan)', ''),
(4, 'weblogo', '', '', '', '', 'WEB DINAMIS', 'web', 'Web Dinamis menggunakan php dan database mysql dengan framework Bootstrap', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_arc`
--
ALTER TABLE `tb_arc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_arc`
--
ALTER TABLE `tb_arc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
