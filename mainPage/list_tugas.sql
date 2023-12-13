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
-- Table structure for table `list_tugas`
--

CREATE TABLE `list_tugas` (
  `id_tugas` int(5) NOT NULL,
  `tugas` varchar(255) NOT NULL,
  `deadline_tugas` date NOT NULL,
  `id_anggota` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `list_tugas`
--

INSERT INTO `list_tugas` (`id_tugas`, `tugas`, `deadline_tugas`, `id_anggota`) VALUES
(1, 'pel lantai 2', '2023-12-14', 2),
(2, 'kuras bak mandi', '2023-12-30', 1),
(3, 'garap FP pweb', '2023-12-13', 3),
(4, 'nyapu', '2023-12-13', 5),
(5, 'garap jarkom modul 5', '2023-12-15', 1),
(6, 'masak sarapan', '2023-12-14', 2),
(7, 'cat rumah', '2023-12-15', 2),
(8, 'asdg', '2023-12-23', 4),
(9, 'ashha', '2023-12-22', 2),
(10, 'cuci mobil', '2023-12-28', 4),
(11, 'garap fp grafkom', '2023-12-17', 2),
(12, 'dsarhsdh', '2023-12-17', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_tugas`
--
ALTER TABLE `list_tugas`
  ADD PRIMARY KEY (`id_tugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list_tugas`
--
ALTER TABLE `list_tugas`
  MODIFY `id_tugas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
