-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 09:15 PM
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
-- Table structure for table `list_invent`
--

CREATE TABLE `list_invent` (
  `id_barang` int(5) NOT NULL,
  `nama_barang` varchar(63) NOT NULL,
  `lokasi_barang` varchar(63) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `list_invent`
--

INSERT INTO `list_invent` (`id_barang`, `nama_barang`, `lokasi_barang`) VALUES
(1, 'sapu pel', 'km dapur'),
(2, 'handuk', 'jemuran lt2'),
(3, 'kotak p3k', 'lemari tv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_invent`
--
ALTER TABLE `list_invent`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list_invent`
--
ALTER TABLE `list_invent`
  MODIFY `id_barang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
