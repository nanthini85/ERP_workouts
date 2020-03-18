-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2020 at 04:50 AM
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
-- Table structure for table `book_chapter`
--

CREATE TABLE `book_chapter` (
  `b_id` varchar(5) CHARACTER SET utf8mb4 NOT NULL,
  `ch_title` varchar(150) NOT NULL,
  `ch_number` int(10) NOT NULL,
  `ch_pgno_from` int(10) NOT NULL,
  `ch_pgno_to` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_chapter`
--

INSERT INTO `book_chapter` (`b_id`, `ch_title`, `ch_number`, `ch_pgno_from`, `ch_pgno_to`) VALUES
('B45', '', 0, 0, 0),
('B46', '', 0, 0, 0),
('B47', '', 0, 0, 0),
('B48', 'ersdtfyg', 4, 45, 54);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_chapter`
--
ALTER TABLE `book_chapter`
  ADD KEY `b_id` (`b_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_chapter`
--
ALTER TABLE `book_chapter`
  ADD CONSTRAINT `book_chapter_ibfk_1` FOREIGN KEY (`b_id`) REFERENCES `books` (`b_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
