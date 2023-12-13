-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 09:13 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `home_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `list_info`
--

CREATE TABLE `list_info` (
  `id_info` int(11) NOT NULL,
  `nama` varchar(63) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `list_info`
--

INSERT INTO `list_info` (`id_info`, `nama`, `foto`, `isi`) VALUES
(1, 'bapak gajian', 'gajian.jpg', 'kalo gajian, ya jelas malem makan bakso'),
(2, 'mba ei belajar masak', 'eiMasak.jpg', 'siapkan obat sakit perut'),
(3, 'adek bikin lukisan', 'ttamber.jpg', 'tampan dan berani tentunya'),
(4, '2024 pilpres', 'mmbb.jpg', 'bingung pilih siapa? pilih mereka aja');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_info`
--
ALTER TABLE `list_info`
  ADD PRIMARY KEY (`id_info`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list_info`
--
ALTER TABLE `list_info`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
