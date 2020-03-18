-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2020 at 01:45 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `publication`
--

-- --------------------------------------------------------

--
-- Table structure for table `programme`
--

CREATE TABLE `programme` (
  `pgm_id` int(11) NOT NULL,
  `pgm_title` varchar(25) NOT NULL,
  `pgm_type` varchar(10) NOT NULL,
  `pgm_from` date NOT NULL,
  `pgm_to` date NOT NULL,
  `pgm_level` varchar(12) NOT NULL,
  `pgm_Sponsoredby` varchar(25) NOT NULL,
  `pgm_organisedat` varchar(25) NOT NULL,
  `pgm_organisedby` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programme`
--

INSERT INTO `programme` (`pgm_id`, `pgm_title`, `pgm_type`, `pgm_from`, `pgm_to`, `pgm_level`, `pgm_Sponsoredby`, `pgm_organisedat`, `pgm_organisedby`) VALUES
(1, 'WEWWY', 'Seminar', '0000-00-00', '0000-00-00', '', '', '', ''),
(2, 'WEWWY', 'Seminar', '0000-00-00', '2020-02-07', 'National', 'etreyery', 'dhrhrse', 'dththhdfb'),
(3, 'WEWWYKVFBS', 'Workshop', '2020-02-13', '2020-02-06', 'National', 'isvwbv', 'uubvwrbq', 'ujvuworhwoh'),
(4, 'YCTVFBNBDF', 'Seminar', '2020-02-06', '2020-02-21', 'National', 'zxtcvbjk', 'fg jk', 'dxfghj k'),
(5, 'YCTVFBNBDF', 'Seminar', '2020-02-06', '2020-02-21', 'National', 'zxtcvbjk', 'fg jk', 'dxfghj k'),
(6, 'YCTVFBNBDF', 'Seminar', '2020-02-06', '2020-02-21', 'National', 'zxtcvbjk', 'fg jk', 'dxfghj k');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `programme`
--
ALTER TABLE `programme`
  ADD PRIMARY KEY (`pgm_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `programme`
--
ALTER TABLE `programme`
  MODIFY `pgm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
