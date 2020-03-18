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
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `b_id` varchar(5) NOT NULL,
  `id` int(10) NOT NULL,
  `book_title` varchar(100) NOT NULL,
  `published_type` varchar(50) NOT NULL,
  `pub_name` varchar(15) NOT NULL,
  `b_month` varchar(15) NOT NULL,
  `b_year` int(10) NOT NULL,
  `b_edition` varchar(1) NOT NULL,
  `b_isdn` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`b_id`, `id`, `book_title`, `published_type`, `pub_name`, `b_month`, `b_year`, `b_edition`, `b_isdn`) VALUES
('B45', 45, 'rwrestdryftug', 'book', 'wy', 'Jan', 1904, '4', '4554'),
('B46', 46, 'rwrestdryftug', 'book', 'wy', 'Jan', 1904, '4', '4554'),
('B47', 47, 'sdfxcgv', 'book', 'rtyghk', 'Jan', 1900, '4', '456'),
('B48', 48, 'arstdgfhcg', 'Chapter', 'artdghfgj', 'feb', 2015, '4', '464');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`b_id`),
  ADD UNIQUE KEY `chid` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
