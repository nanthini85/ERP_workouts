-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2020 at 12:49 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

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
-- Table structure for table `book_referredby`
--

CREATE TABLE `book_referredby` (
  `book_referred` varchar(30) NOT NULL,
  `b_id` varchar(5) CHARACTER SET utf8mb4 NOT NULL,
  `referred_by` varchar(100) NOT NULL,
  `ref_from` date NOT NULL,
  `ref_to` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_referredby`
--

INSERT INTO `book_referredby` (`book_referred`, `b_id`, `referred_by`, `ref_from`, `ref_to`) VALUES
('B45', 'B49', 'deed', '2020-01-01', '2020-01-30'),
('B45', 'B50', 'deed', '2020-01-01', '2020-01-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_referredby`
--
ALTER TABLE `book_referredby`
  ADD KEY `b_id` (`b_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_referredby`
--
ALTER TABLE `book_referredby`
  ADD CONSTRAINT `book_referredby_ibfk_1` FOREIGN KEY (`b_id`) REFERENCES `books` (`b_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
