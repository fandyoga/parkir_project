-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2019 at 04:34 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parkir`
--

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` int(8) NOT NULL,
  `plat_nomer` char(10) NOT NULL,
  `jam_masuk` datetime NOT NULL,
  `jam_keluar` datetime DEFAULT NULL,
  `tgl` date NOT NULL,
  `status` int(1) NOT NULL,
  `bayar` double DEFAULT NULL,
  `lama_parkir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `plat_nomer`, `jam_masuk`, `jam_keluar`, `tgl`, `status`, `bayar`, `lama_parkir`) VALUES
(1, 'ABC', '2019-01-22 00:00:00', '0000-00-00 00:00:00', '2019-01-22', 0, 5000, '4 jam, 0 menit'),
(2, 'ABC', '2019-01-22 02:40:00', '2019-01-22 04:01:11', '2019-01-22', 0, 2000, '1 jam, 0 menit'),
(3, 'AVS', '2019-01-22 02:41:05', '2019-01-22 04:01:32', '2019-01-22', 0, 2000, '1 jam, 48 menit'),
(4, 'AA 1234 FF', '2019-01-22 04:30:48', '2019-01-22 04:01:58', '2019-01-22', 0, 2000, '0 jam, 0 menit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
