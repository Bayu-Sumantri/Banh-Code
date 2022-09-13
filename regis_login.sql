-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2022 at 08:53 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `regis_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `gmail` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `no_phone` int(50) NOT NULL,
  `tanggapan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `regis_login`
--

CREATE TABLE `regis_login` (
  `id_client` int(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL,
  `e_mail` varchar(30) NOT NULL,
  `password_usr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regis_login`
--

INSERT INTO `regis_login` (`id_client`, `nama`, `phone`, `e_mail`, `password_usr`) VALUES
(13, 'test', 2147483647, 'icikiwir@gmail.com', 'banhyu'),
(14, 'bambanhhh', 1234567890, 'bambanh@gmail.com', 'BAMBANH'),
(15, 'banbah', 2147483647, 'test@gmail.com', '123321'),
(16, 'banhyu', 2147483647, '12345@gmail.com', '12345'),
(17, 'bambang', 2147483647, 'test@gmail.com', 'fly'),
(18, '1234', 2147483647, '1234@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `regis_login`
--
ALTER TABLE `regis_login`
  ADD PRIMARY KEY (`id_client`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `regis_login`
--
ALTER TABLE `regis_login`
  MODIFY `id_client` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
