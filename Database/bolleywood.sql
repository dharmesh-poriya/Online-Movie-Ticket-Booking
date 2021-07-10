-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2021 at 11:31 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movieticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `bolleywood`
--

CREATE TABLE `bolleywood` (
  `u_sno` int(200) NOT NULL,
  `is_member` int(2) NOT NULL,
  `m_sno` int(200) NOT NULL,
  `total_member` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bolleywood`
--

INSERT INTO `bolleywood` (`u_sno`, `is_member`, `m_sno`, `total_member`) VALUES
(2, 0, 1, 3),
(16, 0, 1, 5),
(16, 0, 1, 7),
(20, 0, 1, 10),
(16, 0, 2, 50),
(2, 0, 3, 7),
(2, 0, 32, 13),
(2, 0, 95, 14),
(2, 0, 33, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
