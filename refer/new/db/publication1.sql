-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2020 at 05:19 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.0

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
-- Table structure for table `author_details`
--

CREATE TABLE `author_details` (
  `id` int(11) NOT NULL,
  `auth_sno` int(11) NOT NULL,
  `aid` varchar(10) NOT NULL,
  `auth_id` varchar(10) NOT NULL,
  `auth_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author_details`
--

INSERT INTO `author_details` (`id`, `auth_sno`, `aid`, `auth_id`, `auth_name`) VALUES
(1, 1, 'J1', 'KEC1621', 'K.NANTHINI'),
(2, 2, 'J1', 'R_1', 'adithya'),
(3, 3, 'J1', 'EX1', 'mithun'),
(4, 1, 'C10', 'S.SHARMILA', ''),
(5, 2, 'C10', 'mithun,EX1', ''),
(6, 3, 'C10', 'adithya,R_', ''),
(7, 4, 'C10', 'sreee,EX2', ''),
(8, 1, 'C11', 'KEC1836', 'S.SHARMILA'),
(9, 2, 'C11', 'EX1', 'mithun'),
(10, 3, 'C11', 'R_1', 'adithya'),
(11, 4, 'C11', 'EX2', 'sreee'),
(12, 1, 'J2', 'KEC1621', 'K.NANTHINI'),
(13, 2, 'J2', 'EX3', 'krishna'),
(14, 3, 'J2', 'EX5', 'krishnamoorthi'),
(15, 4, 'J2', 'EX6', 'hari'),
(16, 5, 'J2', 'EX7', 'harishankhar'),
(17, 1, 'C12', 'KEC1621', 'K.NANTHINI'),
(18, 2, 'C12', 'EX9', 'krishna'),
(19, 1, 'C13', 'KEC1621', 'K.NANTHINI'),
(20, 2, 'C13', 'KEC1432', 'S.HEMALATHA'),
(21, 3, 'C13', 'R_1', 'adithya'),
(22, 4, 'C13', 'EX10', 'xxx'),
(23, 1, 'C14', 'KEC1546', 'C.JAMUNA DEVI'),
(24, 1, 'C15', 'KEC1448', 'S.DEEPA'),
(25, 2, 'C15', 'EX2', 'sreee'),
(26, 3, 'C15', 'KEC2658', 'P.YUVARANI'),
(27, 1, 'C16', 'KEC2345', 'C.NARMATHA'),
(28, 2, 'C16', 'KEC2450', 'S.MALATHY'),
(29, 1, 'C17', 'KEC1289', 'G.CHITRA'),
(30, 2, 'C17', 'EX11', 'harsha');

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

-- --------------------------------------------------------

--
-- Table structure for table `conference`
--

CREATE TABLE `conference` (
  `id` int(50) NOT NULL,
  `aid` varchar(5) NOT NULL,
  `article_title` varchar(250) DEFAULT NULL,
  `issue_month` varchar(20) DEFAULT NULL,
  `issue_year` int(10) DEFAULT NULL,
  `doi` varchar(25) DEFAULT NULL,
  `volume_no` int(25) NOT NULL,
  `issue_Type` varchar(15) NOT NULL,
  `Article_Type` varchar(15) NOT NULL,
  `pgno_from` int(10) NOT NULL,
  `pgno_to` int(10) NOT NULL,
  `scopus` varchar(1) NOT NULL,
  `Sponsored` varchar(100) NOT NULL,
  `Organised` varchar(150) NOT NULL,
  `Conference_Name` varchar(250) NOT NULL,
  `Conference_Abbrevation` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `conference`
--

INSERT INTO `conference` (`id`, `aid`, `article_title`, `issue_month`, `issue_year`, `doi`, `volume_no`, `issue_Type`, `Article_Type`, `pgno_from`, `pgno_to`, `scopus`, `Sponsored`, `Organised`, `Conference_Name`, `Conference_Abbrevation`) VALUES
(1, 'C4', 'iris detection', 'feb', 1901, '123123', 3, 'spe', 'inr', 12312, 124214, 'y', 'sdmnfjkbsd', 'sgsgsdfs', 'sdffqergreg', 'eqgqergregr'),
(2, 'C12', 'face', 'feb', 1902, '78784', 3, 'reg', 'nat', 78, 78, 'y', 'suidds', 'hasbvh', 'ihsbvb', 'jkashuo'),
(4, 'C4', 'face', 'feb', 1902, '78784', 3, 'reg', 'nat', 78, 78, 'y', 'suidds', 'hasbvh', 'ihsbvb', 'jkashuo'),
(5, 'C5', 'face', 'feb', 1902, '78784', 3, 'reg', 'nat', 78, 78, 'y', 'suidds', 'hasbvh', 'ihsbvb', 'jkashuo'),
(6, 'C6', 'face', 'feb', 1902, '78784', 3, 'reg', 'nat', 78, 78, 'y', 'suidds', 'hasbvh', 'ihsbvb', 'jkashuo'),
(7, 'C7', 'kjfewhfwe', 'mar', 1901, '47', 1, 'spe', 'inr', 4, 6, 'y', 'hgglg', 'fyfuhlkk', 'fylkkuut', 'tyioiupiipo'),
(8, 'C8', 'detect', 'feb', 1981, '45666', 1, 'spe', 'International', 5, 12, 'y', 'hgasdgasud', 'agdiasgfasfh', 'iasgfufhoi', 'iusfgiusfho'),
(9, 'C9', 'sample2222', 'feb', 1923, '7', 3, 'spe', 'International', 6, 10, 'y', 'njguytfyiy', 'yfhcfsrtryugkjvmbnf', 'rtryfhgfreryfhjfgrsyuy', 'fxfstyfhcgxftyf'),
(10, 'C10', 'asfhsk', 'Jan', 2000, '4', 4, 'spe', 'International', 8, 13, 'y', 'szedxfcgbjnkl', 'zsdxfcg hnk', 'zsdxfcbjnm', 'xdfcgvhbmdxfcgv'),
(11, 'C11', 'asfhsk', 'Jan', 2000, '4', 4, 'spe', 'International', 8, 13, 'y', 'szedxfcgbjnkl', 'zsdxfcg hnk', 'zsdxfcbjnm', 'xdfcgvhbmdxfcgv'),
(12, 'C12', 'heart disease prediction', 'feb', 2015, '55677', 4, 'reg', 'National', 11, 28, 'y', 'AICTE', 'MCA', 'richi', 'richi'),
(13, 'C13', 'image processing using DL', 'mar', 2015, '45677', 10, 'reg', 'National', 45, 65, 'y', 'DST', 'MCA', 'XXX', 'XXX'),
(14, 'C14', 'air quality', 'Jan', 1903, '56767', 5, 'reg', 'National', 34, 45, 'y', 'DRDO', 'MCA', 'yyy', 'yyy'),
(15, 'C15', 'study of human health', 'feb', 2017, '6453', 13, 'reg', 'National', 23, 33, 'y', 'DRDO', 'MCA', 'zzz', 'z'),
(16, 'C16', 'vvff', 'jul', 1907, '876', 6, 'reg', 'National', 89, 99, 'y', 'DRDO', 'MCA', 'aaa', 'a'),
(17, 'C17', 'air quality monitoring', 'jun', 1914, '2344565', 3, 'reg', 'National', 55, 66, 'y', 'DRDO', 'MCA', 'bbb', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Code` varchar(6) NOT NULL,
  `Description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Code`, `Description`) VALUES
('AUTO', 'AUTOMOBILE ENGINEERING'),
('CA', 'MASTER OF COMPUTER APPLICATIONS'),
('CHEM', 'CHEMICAL ENGINEERING'),
('CHY', 'CHEMISTRY'),
('CIVIL', 'CIVIL ENGINEERING'),
('COE', 'OFFICE OF THE CONTROLLER OF EXAMINATIONS'),
('CSE', 'COMPUTER SCIENCE AND ENGINEERING'),
('CTPG', 'COMPUTER TECHNOLOGY - PG'),
('CTUG', 'COMPUTER TECHNOLOGY - UG'),
('ECE', 'ELECTRONICS AND COMMUNICATION ENGINEERING'),
('EEE', 'ELECTRICAL AND ELECTRONICS ENGINEERING'),
('EIE', 'ELECTRONICS AND INSTRUMENTATION ENGINEERIN'),
('ENG', 'ENGLISH'),
('FT', 'FOOD TECHNOLOGY'),
('IT', 'INFORMATION TECHNOLOGY'),
('KCRS', 'KONGU CRS'),
('LIB', 'LIBRARY'),
('MATHS', 'MATHEMATICS'),
('MBA', 'MANAGEMENT STUDIES'),
('MECH', 'MECHANICAL ENGINEERING'),
('MTS', 'MECHATRONICS ENGINEERING'),
('PEDU', 'PHYSICAL EDUCATION'),
('PHY', 'PHYSICS'),
('POFFIC', 'PRINCIPAL OFFICE'),
('PTC', 'PLACEMENT & TRAINING CELL');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_first_name` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_first_name`) VALUES
('xx');

-- --------------------------------------------------------

--
-- Table structure for table `external`
--

CREATE TABLE `external` (
  `id` int(11) NOT NULL,
  `ex_id` varchar(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `institution` varchar(50) NOT NULL,
  `ex_phone` int(11) NOT NULL,
  `ex-email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `external`
--

INSERT INTO `external` (`id`, `ex_id`, `name`, `designation`, `department`, `institution`, `ex_phone`, `ex-email`) VALUES
(1, 'EX1', 'mithun', 'student', 'MCA', 'nandha', 0, ''),
(2, 'EX2', 'sreee', 'student', 'mca', 'nandha', 0, ''),
(3, 'EX3', 'krishna', 'Assistant Professor', 'EEE', 'KSR', 0, ''),
(4, 'EX4', 'krishna', 'Assistant Professor', 'EEE', 'KSR', 0, ''),
(5, 'EX5', 'krishnamoorthi', 'Assistant Professor', 'ECE', 'KSR', 0, ''),
(6, 'EX6', 'hari', 'Assistant Professor', 'ECE', 'Nandha', 0, ''),
(7, 'EX7', 'harishankhar', 'Assistant Professor', 'ECE', 'Paavai', 0, ''),
(8, 'EX8', 'hari', 'Assistant Professor', 'civil', 'Paavai', 0, ''),
(9, 'EX9', 'krishna', 'AP', 'S', 'kongu eng', 0, ''),
(10, 'EX10', 'xxx', 'Professor', 'Mech', 'ksr', 0, ''),
(11, 'EX11', 'harsha', 'AP', 'CA', 'krishna', 0, ''),
(12, 'EX12', 'hari', 'AP', 'EEE', 'PSG', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `eid` varchar(10) NOT NULL,
  `sno` int(11) NOT NULL,
  `dept` varchar(7) NOT NULL,
  `ename` varchar(50) NOT NULL,
  `desig` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`eid`, `sno`, `dept`, `ename`, `desig`, `email`, `mobile`) VALUES
('KEC0003', 2, 'ENG', 'Dr.R.GANESAN', 'PROFESSOR', 'ganesan@kongu.ac.in', '9843620586'),
('KEC0027', 2, 'FT', 'Dr.S.KANDASAMY', 'PROFESSOR', 'skandasamy@kongu.ac.in', '9443966566'),
('KEC0031', 1, 'PHY', 'Dr.K.TAMILARASAN', 'PROFESSOR', 'tamilarasan@kongu.ac.in', '9842966128'),
('KEC0067', 6, 'CIVIL', 'Dr.K.ARUMUGAM', 'ASSOCIATE PR', 'sixface@kongu.ac.in', '9442755009'),
('KEC0088', 2, 'CHY', 'Dr.P.MANIKANDAN', 'ASST. PROF(S', 'manipal2k@kongu.ac.in', '9715508383'),
('KEC0107', 2, 'CIVIL', 'Dr.S.KRISHNAMOORTHI', 'PROFESSOR', 'skmoor@kongu.ac.in', '9942966559'),
('KEC0121', 2, 'MATHS', 'Dr.R.VISWANATHAN', 'PROFESSOR', 'visu@kongu.ac.in', '9487151694'),
('KEC0123', 3, 'MATHS', 'Dr.S.VENGATAASALAM', 'ASSOCIATE PR', 'yeswee@kongu.ac.in', '9442275522'),
('KEC0124', 6, 'MECH', 'A.SOMASUNDARAM', 'ASSOCIATE PR', 'rajamech@kongu.ac.in', '9952460698'),
('KEC0125', 1, 'MATHS', 'Dr.C.DURAISAMY', 'DEAN', 'cd@kongu.ac.in', '9718514284'),
('KEC0140', 4, 'CIVIL', 'Dr.P.CHANDRASEKARAN', 'PROFESSOR', 'civilpc1965@kongu.ac.in', '9842786079'),
('KEC0141', 5, 'MECH', 'Dr.P.SATHIAMURTHI', 'PROFESSOR', 'sathiam@kongu.ac.in', '9894157003'),
('KEC0162', 2, 'MECH', 'Dr.R.DEIVASIGAMANI', 'PROFESSOR', 'rdeiva@kongu.ac.in', '9443504573'),
('KEC0182', 6, 'EEE', 'Dr.P.S.RAGHAVENDRAN', 'ASSOCIATE PR', 'raghavendran@kongu.ac.in', '9486905006'),
('KEC0225', 1, 'ECE', 'Dr.G.MURUGESAN', 'PROFESSOR', 'gmece@kongu.ac.in', '9865273774'),
('KEC0231', 5, 'CIVIL', 'Dr.P.S.KOTHAI', 'PROFESSOR', 'pskothai@kongu.ac.in', '9500545775'),
('KEC0291', 3, 'IT', 'Dr.J.PREMALATHA', 'PROFESSOR', 'jprem@kongu.ac.in', '9442274215'),
('KEC0318', 1, 'MTS', 'Dr.K.KRISHNAMURTHY', 'DEAN', 'krishmech@kongu.ac.in', '9842722881'),
('KEC0324', 2, 'EEE', 'Dr.R.MEENAKUMARI', 'PROFESSOR', 'rmkumari@kongu.ac.in', '9443127506'),
('KEC0337', 1, 'IT', 'Dr.S.VARADHAGANAPATHY', 'PROFESSOR', 'svg@kongu.ac.in', '9443034110'),
('KEC0346', 2, 'IT', 'Dr.C.NALINI', 'PROFESSOR', 'nalini@kongu.ac.in', '9865888116'),
('KEC0376', 1, 'CSE', 'Dr.R.R.RAJALAXMI', 'PROFESSOR', 'rrr@kongu.ac.in', '9486561199'),
('KEC0442', 1, 'CA', 'Dr.A.TAMILARASI', 'PROFESSOR', 'drtamil@kongu.ac.in', '9443742212'),
('KEC0449', 3, 'MECH', 'Dr.P.SENTHILVEL MURUGAN', 'PROFESSOR', 'svm@ kongu.ac.in', '9443454572'),
('KEC0468', 1, 'CH', 'Dr.K.SARAVANAN', 'PROFESSOR', 'hod_chem@kongu.ac.in', '9786605656'),
('KEC0477', 1, 'MECH', 'Dr.P.NAVANEETHAKRISHNAN', 'PROFESSOR', 'pnk@kongu.ac.in', '9842950323'),
('KEC0494', 1, 'MBA', 'Dr.R.SOMASUNDARAM', 'PROFESSOR', 'rssundhar@kongu.ac.in', '9443305502'),
('KEC0495', 3, 'EIE', 'Dr.R.SUBASRI', 'PROFESSOR', 'soamisuba@kongu.ac.in', '9965527506'),
('KEC0534', 1, 'CHY', 'Dr.P.N.PALANISAMY', 'PROFESSOR', 'drpnp@kongu.ac.in', '9750264390'),
('KEC0579', 4, 'MECH', 'Dr.V.HARIHARAN', 'PROFESSOR', 'hariharan@kongu.ac.in', '9443504469'),
('KEC0581', 4, 'MATHS', 'Dr.A.MANIMARAN', 'ASST. PROF(S', 'manimaran@kongu.ac.in', '9965398712'),
('KEC0596', 3, 'CSE', 'Dr.K.KOUSALYA', 'PROFESSOR', 'kouse@kongu.ac.in', '9942214795'),
('KEC0610', 1, 'CIVIL', 'Dr.S.ANANDAKUMAR', 'PROFESSOR', 'anandakumar@kongu.ac.in', '9095109090'),
('KEC0618', 5, 'CSE', 'Dr.R.C.SUGANTHE', 'PROFESSOR', 'suganthe_rc@kongu.ac.in', '9842350051'),
('KEC0631', 2, 'CTUG', 'S.KALAISELVI', 'ASST. PROF(S', 'kalai@kongu.ac.in', '9865046699'),
('KEC0667', 1, 'CTPG', 'Dr.P.BALASUBRAMANIE', 'PROFESSOR', 'balu_p@kongu.ac.in', '9443942365'),
('KEC0678', 2, 'ECE', 'Dr.N.KASTHURI', 'PROFESSOR', 'kasthuri@kongu.ac.in', '9677734007'),
('KEC0693', 2, 'MBA', 'M.GNANAJOTHI', 'PROFESSOR', 'gnanaguru@kongu.ac.in', '9443780214'),
('KEC0720', 8, 'CSE', 'Dr.C.S.KANIMOZHI SELVI', 'PROFESSOR', 'kanimozhi@kongu.ac.in', '9842168224'),
('KEC0726', 2, 'CA', 'Dr.S.SHANTHI', 'ASST. PROF(S', 'shanthis@kongu.ac.in', '9942911551'),
('KEC0736', 3, 'EEE', 'Dr.M.SIVACHITRA', 'PROFESSOR', 'sivachitra@kongu.ac.in', '8344402476'),
('KEC0743', 7, 'ECE', 'Dr.V.R.SARASWATHY', 'PROFESSOR', 'vrsaraswathy@kongu.ac.in', '9442623090'),
('KEC0750', 3, 'CTPG', 'Dr.G.R.SREEKANTH', 'ASST. PROF(S', 'grsreekanth@kongu.ac.in', '9952574455'),
('KEC0754', 3, 'CH', 'Dr.K.KANNAN', 'PROFESSOR', 'kannank@kongu.ac.in', '9842823432'),
('KEC0762', 3, 'ECE', 'Dr.T.MEERADEVI', 'PROFESSOR', 'meeradevi@kongu.ac.in', '9842702665'),
('KEC0765', 6, 'IT', 'R.SHANTHAKUMARI', 'ASST. PROF(S', 'rsk_shan@kongu.ac.in', '9443416490'),
('KEC0780', 2, 'MTS', 'Dr.R.PARAMESHWARAN', 'PROFESSOR', 'paramesh_r@kongu.ac.in', '9865919915'),
('KEC0788', 5, 'IT', 'Dr.G.K.KAMALAM', 'ASSOCIATE PR', 'gkk@kongu.ac.in', '9578092100'),
('KEC0791', 3, 'MBA', 'Dr.P.VIDHYA PRIYA', 'ASSOCIATE PR', 'vidyapriya@kongu.ac.in', '9787742193'),
('KEC0805', 1, 'FT', 'Dr.R.BASKAR', 'PROFESSOR', 'erbaskar@kongu.ac.in', '9842294264'),
('KEC0820', 4, 'CSE', 'Dr.S.MALLIGA', 'PROFESSOR', 'mallisenthil@kongu.ac.in', '9842278780'),
('KEC0821', 5, 'ECE', 'Dr.P.NIRMALADEVI', 'PROFESSOR', 'nirmaladevi@kongu.ac.in', '9842561234'),
('KEC0824', 5, 'MATHS', 'Dr.P.VADIVEL', 'ASST. PROF(S', 'ponvadivel@kongu.ac.in', '9842122611'),
('KEC0827', 9, 'CSE', 'Dr.E.GOTHAI', 'ASSOCIATE PR', 'egothai@kongu.ac.in', '9842726627'),
('KEC0834', 7, 'CSE', 'Dr.P.NATESAN', 'PROFESSOR', 'natesanp@kongu.ac.in', '9443840665'),
('KEC0842', 13, 'CSE', 'PCD.KALAIVAANI', 'ASST. PROF(S', 'kalairupa@kongu.ac.in', '9659447988'),
('KEC0849', 9, 'ECE', 'Dr.P.SIVARANJANI', 'PROFESSOR', 'sivaranjani@kongu.ac.in', '9865944633'),
('KEC0850', 11, 'CSE', 'N.P.SARAVANAN', 'ASST. PROF(S', 'npsaravanan@kongu.ac.in', '9976874089'),
('KEC0851', 4, 'IT', 'Dr.R.THAMILSELVAN', 'PROFESSOR', 'r_thamilselvan@kongu.ac.in', '9443916069'),
('KEC0852', 6, 'MATHS', 'Dr.M.DHAVAMANI', 'ASST. PROF(S', 'md@kongu.ac.in', '9842740601'),
('KEC0861', 6, 'ECE', 'Dr.T.C.KALAISELVI', 'ASSOCIATE PR', 'kalaiselvi@kongu.ac.in', '9443846512'),
('KEC0875', 8, 'ECE', 'Dr.D.MALATHI', 'PROFESSOR', 'malathy@kongu.ac.in', '9842780385'),
('KEC0938', 2, 'EIE', 'Dr.S.VIJAYA CHITRA', 'PROFESSOR', 'svijayachitra@kongu.ac.in', '9865780707'),
('KEC0975', 7, 'IT', 'Dr.C.POONGODI', 'ASSOCIATE PR', 'poongs@kongu.ac.in', '9843560116'),
('KEC0991', 9, 'MECH', 'Dr.S.SELVAKUMAR', 'ASSOCIATE PR', 'sskmech@kongu.ac.in', '9842960609'),
('KEC1019', 10, 'MECH', 'T.RAVISANKAR', 'ASST. PROF(S', 'ravimech@kongu.ac.in', '9865882583'),
('KEC1036', 8, 'IT', 'Dr.S.ANANDAMURUGAN', 'ASSOCIATE PR', 'samurugan@kongu.ac.in', '9486153102'),
('KEC1040', 15, 'CSE', 'Dr.N.KRISHNAMOORTHY', 'ASSOCIATE PR', 'nmoorthy@kongu.ac.in', '9486904557'),
('KEC1045', 12, 'IT', 'Dr.T.ABIRAMI', 'ASSOCIATE PR', 'abi@kongu.ac.in', '9788654804'),
('KEC1047', 3, 'CA', 'Dr.P.A.SELVARAJ', 'ASST. PROF(S', 'kpsraj2001@kongu.ac.in', '9965054076'),
('KEC1050', 2, 'CSE', 'Dr.R.THANGARAJAN', 'PROFESSOR', 'thangs_68@kongu.ac.in', '9443014942'),
('KEC1062', 11, 'ECE', 'Dr.S.BALAMBIGAI', 'ASSOCIATE PR', 'sbalambigai@kongu.ac.in', '9443895494'),
('KEC1064', 11, 'MECH', 'Dr.A.SIVAKUMAR', 'ASSOCIATE PR', 'askmech@kongu.ac.in', '9865882583'),
('KEC1068', 12, 'MECH', 'Dr.P.THANGAVEL', 'ASSOCIATE PR', 'ptvel@kongu.ac.in', '9865451854'),
('KEC1071', 3, 'CIVIL', 'Dr.K.NIRMAL KUMAR', 'PROFESSOR', 'nirmalkumar@kongu.ac.in', '9843266570'),
('KEC1077', 5, 'EIE', 'M.SASIREKA', 'ASST. PROF(S', 'sasireka@kongu.ac.in', '9487471117'),
('KEC1080', 4, 'EEE', 'Dr.A.SHEELA', 'ASSOCIATE PR', 'a_sheela@kongu.ac.in', '9842782076'),
('KEC1085', 14, 'CSE', 'Dr.R.S.LATHA', 'ASST. PROF(S', 'latha@kongu.ac.in', '9500459161'),
('KEC1086', 10, 'ECE', 'Dr.S.MAHESWARAN', 'ASSOCIATE PR', 'mmaheswaran_eie@kongu.ac.in', '9842811344'),
('KEC1087', 6, 'EIE', 'Dr.T.KALAVATHI DEVI', 'ASSOCIATE PR', 'kalavathi@kongu.ac.in', '9942155300'),
('KEC1089', 9, 'IT', 'R.RAJADEVI', 'ASST. PROF(S', 'rajdevi@kongu.ac.in', '9865608899'),
('KEC1090', 10, 'CSE', 'Dr.P.JAYANTHI', 'ASSOCIATE PR', 'jayanthime@kongu ac.in', '7373898953'),
('KEC1094', 3, 'ENG', 'I.S.JOHN VIJAYAKUMAR', 'ASST. PROF(S', 'isjvk@kongu.ac.in', '9443019080'),
('KEC1096', 4, 'ENG', 'Dr.A.ROBBY SEBASTIANCLEMENT', 'ASST. PROF(S', 'robby@kongu.ac.in', '9842022433'),
('KEC1130', 5, 'EEE', 'Dr.M.KARTHIK', 'ASSOCIATE PR', 'karthikprm@kongu.ac.in', '9843626288'),
('KEC1142', 7, 'EIE', 'Dr.M.PONNI BALA', 'ASSOCIATE PR', 'ponnibala@kongu.ac.in', '9843999554'),
('KEC1174', 3, 'CHY', 'Dr.A.GEETHA', 'ASSISTANT PR', 'ageetha@kongu.ac.in', '9789498866'),
('KEC1175', 8, 'EIE', 'P.VIDHYALAKSHMI', 'ASST. PROF(S', 'vidhyalakshmi@kongu.ac.in', '9698890777'),
('KEC1182', 10, 'IT', 'D.VIJAY ANAND', 'ASST. PROF(S', 'erovijay@kongu.ac.in', '9942013143'),
('KEC1184', 3, 'PHY', 'Dr.K.PRABU', 'ASST. PROF(S', 'kprabu@kongu.ac.in', '9095171720'),
('KEC1192', 21, 'CSE', 'Dr.R.S.MOHANA', 'ASSOCIATE PR', 'mohanapragash@kongu.ac.in', '8012187005'),
('KEC1195', 4, 'CTUG', 'A.KALYANA SARAVANAN', 'ASSISTANT PR', 'kalyan@kongu.ac.in', '9943830811'),
('KEC1198', 3, 'CTUG', 'Dr.S.KARUNAKARAN', 'ASST. PROF(S', 'karunakarans@kongu.ac.in', '9488341313'),
('KEC1200', 4, 'PHY', 'Dr.M.MALATHI', 'ASST. PROF(S', 'mmalathi@kongu.ac.in', '9629038877'),
('KEC1224', 9, 'EIE', 'Dr.K.PRABHU', 'ASSOCIATE PR', 'prabhu@kongu.ac.in', '9865067310'),
('KEC1228', 4, 'MTS', 'Dr.B.MEENAKSHI PRIYA', 'PROFESSOR', 'bmp@kongu.ac.in', '9842799990'),
('KEC1244', 11, 'IT', 'Dr.P.SURESH', 'ASSOCIATE PR', 'psuresh@kongu.ac.in', '9865850326'),
('KEC1272', 4, 'CHY', 'Dr.K.MANJULA RANI', 'ASSISTANT PR', 'manjula@kongu.ac.in', '9443087977'),
('KEC1276', 5, 'PHY', 'Dr.P.MALARKODI', 'ASSISTANT PR', 'malarkodi@kongu.ac.in', '9095261135'),
('KEC1289', 5, 'ENG', 'G.CHITRA', 'ASST. PROF(S', 'chitrag@kongu.ac.in', '8248009210'),
('KEC1293', 6, 'PHY', 'Dr.T.DEEPA RANI', 'ASSISTANT PR', 'deeparani@kongu.ac.in', '9865470707'),
('KEC1304', 4, 'EIE', 'Dr.J.INDRA', 'ASSOCIATE PR', 'jindu@kongu.ac.in', '9894885987'),
('KEC1316', 29, 'CSE', 'D.DEEPA', 'ASSISTANT PR', 'deepa@kongu.ac.in', '9952784664'),
('KEC1317', 8, 'MATHS', 'Dr.K.V.TAMILSELVI', 'ASSISTANT PR', 'tamilselvi@kongu.ac.in', '9843031886'),
('KEC1318', 13, 'EIE', 'M.MADHAN MOHAN', 'ASST. PROF(S', 'madhanmohan@kongu.ac.in', '6380991423'),
('KEC1327', 13, 'MECH', 'Dr.K.S.K.SASIKUMAR', 'ASSOCIATE PR', 'sasikumar@kongu.ac.in', '9788656090'),
('KEC1329', 10, 'EIE', 'S.JANARTHANAN', 'ASST. PROF(S', 'ksjanarthanan@kongu.ac.in', '9344668801'),
('KEC1355', 9, 'MATHS', 'Dr.AL.NACHAMMAI', 'ASSISTANT PR', 'nachammai@kongu.ac.in', '9095059729'),
('KEC1358', 19, 'CSE', 'Dr.P.KEERTHIKA', 'ASSOCIATE PR', 'pkeerthika@kongu.ac.in', '9942225687'),
('KEC1364', 14, 'MECH', 'Dr.P.SELVAKUMAR', 'ASSOCIATE PR', 'selvakumar@kongu.ac.in', '9566341992'),
('KEC1367', 7, 'EEE', 'Dr.S.ALBERT ALEXANDER', 'ASSOCIATE PR', 'albert@kongu.ac.in', '9865931597'),
('KEC1368', 13, 'IT', 'N.ANITHA', 'ASST. PROF(S', ' anitha@kongu.ac.in', '9597857657'),
('KEC1375', 5, 'MTS', 'Dr.P.RAVICHANDRAN', 'ASSOCIATE PR', 'ravichandran@kongu.ac.in', '9965998989'),
('KEC1380', 20, 'CSE', 'Dr.S.K.NIVETHA', 'ASSOCIATE PR', 'nivetha@kongu.ac.in', '9965038739'),
('KEC1383', 10, 'EEE', 'Dr.T.LOGESWARAN', 'ASST. PROF(S', 'logeswaran@kongu.ac.in', '9787733910'),
('KEC1394', 18, 'CSE', 'Dr.P.VISHNU RAJA', 'ASSOCIATE PR', 'pvishnu@kongu.ac.in', '9865277122'),
('KEC1396', 4, 'CA', 'Dr.T.M.SARAVANAN', 'ASSISTANT PR', 'saravanan@kongu.ac.in', '9600939955'),
('KEC1401', 16, 'CSE', 'Dr.S.V.KOGILAVANI', 'ASSOCIATE PR', 'kogilavani@kongu.ac.in', '9486153223'),
('KEC1419', 12, 'ECE', 'Dr.M.JOSEPH AUXILIUS JUDE', 'ASST. PROF(S', 'jude@kongu.ac.in', '9443994332'),
('KEC1423', 12, 'MTS', 'Dr.K.V. Maheshkumar', 'ASSOCIATE PR', 'maheshkumar@kongu.ac.in', '9842718030'),
('KEC1425', 22, 'CSE', 'M.GEETHA', 'ASST. PROF(S', 'geetha@kongu.ac.in', '9489241573'),
('KEC1432', 5, 'CA', 'S.HEMALATHA', 'ASSISTANT PR', 'hemalatha@kongu.ac.in', '9786266777'),
('KEC1434', 4, 'FT', 'Dr.A.SUDHA', 'ASSOCIATE PR', 'asudha@kongu.ac.in', '9486153011'),
('KEC1435', 5, 'CTUG', 'P.SEETHA SUBHA PRIYA', 'ASSISTANT PR', 'sspriya@kongu.ac.in', '9578632802'),
('KEC1436', 6, 'CA', 'S.KAVITHA BHARATHI', 'ASSISTANT PR', 'kavithabharathi@kongu.ac.in', '9965540601'),
('KEC1440', 7, 'CA', 'A.S.HARISHANKHER', 'ASSISTANT PR', 'hari@kongu.ac.in ', '9092313126'),
('KEC1441', 26, 'CTUG', 'Dr.S.GANDHIMATHI', 'ASSISTANT PR', 'gandhimathi.ctug@kongu.ac.in', '9994851219'),
('KEC1446', 8, 'CA', 'A.RAJA', 'ASSISTANT PR', 'ka_raja2003@kongu.ac.in ', '9942673771'),
('KEC1448', 13, 'CTPG', 'S.DEEPA', 'ASSISTANT PR', 'deepas@kongu.ac.in', '9600421666'),
('KEC1473', 7, 'MTS', 'Dr.C.MAHESWARI', 'ASSOCIATE PR', 'maheswari@kongu.ac.in', '9865210838'),
('KEC1474', 6, 'MBA', 'Dr.S.PADMAVATHY', 'ASSISTANT PR', 'padmavathy@kongu.ac.in', '8675014214'),
('KEC1479', 24, 'CSE', 'N.SASIPRIYAA', 'ASSISTANT PR', 'sasipriya@kongu.ac.in', '9976798392'),
('KEC1482', 36, 'CSE', 'B.KRISHNAKUMAR', 'ASSISTANT PR', 'krishnakumar@kongu.ac.in', '9788642524'),
('KEC1488', 7, 'MBA', 'Dr.M.UMASANKAR', 'ASSISTANT PR', 'umasankar@kongu.ac.in', '8012443543'),
('KEC1489', 31, 'EEE', 'S.ARUNA', 'ASSISTANT PR', 'aruna@kongu.ac.in', '9843554474'),
('KEC1492', 11, 'EIE', 'P.JAYASHREE', 'ASST. PROF(S', 'jayashree@kongu.ac.in', '9843265648'),
('KEC1494', 8, 'CIVIL', 'Dr.S.SUCHITHRA', 'ASSOCIATE PR', 'suchithra@kongu.ac.in', '9715622028'),
('KEC1506', 10, 'MATHS', 'Dr.B.USHA', 'ASSISTANT PR', 'usha_b@kongu.ac.in', '9965013796'),
('KEC1507', 11, 'MTS', 'Dr.K.GOMATHI', 'ASST. PROF.(', 'gomathi@kongu.ac.in', '9965010639'),
('KEC1535', 15, 'MECH', 'Dr.T.P.SATHISHKUMAR', 'ASSOCIATE PR', 'tpsathish@kongu.ac.in', '9943570495'),
('KEC1536', 8, 'MTS', 'Dr.S.SATHIYAVATHI', 'ASSOCIATE PR', 'sathiyavathi@kongu.ac.in', '9843399667'),
('KEC1543', 7, 'PHY', 'S.KIRUTHIKA', 'ASSISTANT PR', 'kiruthika@kongu.ac.in', '8508383652'),
('KEC1544', 16, 'MECH', 'Dr.K.DEEPANDURAI', 'ASST. PROF(S', 'deepan@kongu.ac.in', '9994543214'),
('KEC1545', 9, 'CA', 'K.CHITRA', 'ASSISTANT PR', 'k_chitra@kongu.ac.in', '9486198025'),
('KEC1546', 5, 'CTPG', 'C.JAMUNA DEVI', 'ASSISTANT PR', 'cjamuna@kongu.ac.in', '9952650001'),
('KEC1547', 26, 'IT', 'A.P.PONSELVAKUMAR', 'ASSISTANT PR', 'ponselva@kongu.ac.in', '9942074214'),
('KEC1549', 13, 'CTUG', 'P.GOKILA BRINDHA', 'ASSISTANT PR', 'brindha@kongu.ac.in', '9865805218'),
('KEC1550', 23, 'CSE', 'Dr.R.MANJULA DEVI', 'ASSOCIATE PR', 'manjuladevi@kongu.ac.in', '7373727281'),
('KEC1552', 6, 'CTUG', 'S.POORANI', 'ASSISTANT PR', 'poorani@kongu.ac.in', '9095337052'),
('KEC1553', 6, 'MTS', 'Dr.R.KIRUBASHANKAR', 'ASSOCIATE PR', 'rks@kongu.ac.in', '9443574434'),
('KEC1554', 17, 'MECH', 'K.A.IBRAHIM SHERIFF', 'ASST. PROF(S', 'ibrahim@kongu.ac.in', '9842668702'),
('KEC1555', 13, 'ECE', 'Dr.V.GEETHA', 'ASST. PROF(S', 'vgeetha@kongu.ac.in', '9842180979'),
('KEC1557', 14, 'ECE', 'A.ARULMURUGAN', 'ASST. PROF(S', 'arul@kongu.ac.in', '9659341901'),
('KEC1562', 6, 'CTPG', 'M.ARUMUGAM', 'ASSISTANT PR', 'arumugam@kongu.ac.in', '9842778152'),
('KEC1570', 7, 'CTUG', 'Dr.M.THANGAMANI', 'ASSISTANT PR', 'thangamani@kongu.ac.in', '9715781007'),
('KEC1573', 8, 'MBA', 'Dr.V.KRISHNAMOORTHY', 'ASSISTANT PR', 'krishnamoorthy@kongu.ac.in', '9865136311'),
('KEC1574', 6, 'ENG', 'Dr.J.RAJINI', 'ASSISTANT PR', 'rajini@kongu.ac.in', '9842968146'),
('KEC1580', 11, 'MATHS', 'S.SATHYA', 'ASSISTANT PR', 'sathya@kongu.ac.in', '9688009938'),
('KEC1583', 12, 'MATHS', 'J.REVATHI', 'ASSISTANT PR', 'jr@kongu.ac.in', '9842196268'),
('KEC1584', 8, 'EEE', 'Dr.S.USHA', 'ASSOCIATE PR', 'usha@kongu.ac.in', '9150396839'),
('KEC1585', 13, 'MATHS', 'N.SUGANYA BABY', 'ASSISTANT PR', 'suganyababy@kongu.ac.in', '9894923773'),
('KEC1586', 14, 'MATHS', 'V.S.HEMACHANDIRA', 'ASSISTANT PR', 'hemachandira@kongu.ac.in', '9865619940'),
('KEC1587', 15, 'MATHS', 'Dr.K.ARUN PRAKASH', 'ASSISTANT PR', 'arunfuzzy@kongu.ac.in', '9843889438'),
('KEC1588', 18, 'MECH', 'Dr.C.BASKAR', 'ASST. PROF(S', 'baskar@kongu.ac.in', '9994050745'),
('KEC1589', 9, 'MBA', 'Dr.P.SUNDHARESALINGAM', 'ASSISTANT PR', 'sundaresalingam@kongu.ac.in', '9842912127'),
('KEC1591', 5, 'CHY', 'Dr.P.SRINIVASAN', 'ASSISTANT PR', 'sricsri@kongu.ac.in', '9788632868'),
('KEC1594', 10, 'CA', 'M.PYINGKODI', 'ASSISTANT PR', 'pyingkodi@kongu.ac.in ', '9943114104'),
('KEC1599', 8, 'CTUG', 'Dr.N.T.RENUKADEVI', 'ASSISTANT PR', 'renuka@kongu.ac.in', '9629222052'),
('KEC1601', 11, 'CA', 'Dr.M.JAGADEESAN', 'ASSISTANT PR', 'jagadeesan@kongu.ac.in', '9965079892'),
('KEC1605', 7, 'CTPG', 'P.THANGARAJ', 'ASSISTANT PR', 'thangarajp@kongu.ac.in', '9788292393'),
('KEC1606', 10, 'MBA', 'Dr.M.MOHANASUNDARI', 'ASSISTANT PR', 'mohanasundari@kongu.ac.in', '9486763908'),
('KEC1608', 10, 'CTUG', 'Dr.K.SARASWATHI', 'ASSISTANT PR', 'saraswathi@kongu.ac.in', '9865304338'),
('KEC1613', 9, 'CIVIL', 'Dr.D.AMBIKA', 'ASSISTANT PR', 'ambika@kongu.ac.in', '9842973738'),
('KEC1621', 14, 'CA', 'K.NANTHINI', 'ASSISTANT PR', 'nandhini@kongu.ac.in', '9597445565'),
('KEC1626', 14, 'IT', 'Dr.R.DEVIPRIYA', 'ASSOCIATE PR', 'rdevipriya@kongu.ac.in', '7540087374'),
('KEC1627', 11, 'EEE', 'R.SASIKALA', 'ASSISTANT PR', 'metkala@kongu.ac.in', '9894874226'),
('KEC1646', 9, 'MTS', 'Dr.N.NITHYAVATHY', 'ASSOCIATE PR', 'nithyavathy@kongu.ac.in', '9486939041'),
('KEC1650', 19, 'MECH', 'Dr.R.GUKENDRAN', 'ASSISTANT PR', 'gukendran@kongu.ac.in', '9842468578'),
('KEC1651', 20, 'MECH', 'Dr.M.SAMBATHKUMAR', 'ASSISTANT PR', 'sambathkumar@kongu.ac.in', '9952306585'),
('KEC1654', 16, 'ECE', 'S.GOMATHI', 'ASSISTANT PR', 'sgomathi@kongu.ac.in', '9865270970'),
('KEC1655', 17, 'ECE', 'Dr.S.SASIKALA', 'ASSOCIATE PR', 'sasikalas@kongu.ac.in', '9952514913'),
('KEC1658', 10, 'CIVIL', 'Dr.T.PRADEEP', 'ASSOCIATE PR', 'pradeep@kongu.ac.in', '9944062686'),
('KEC1659', 14, 'EIE', 'K.N.BALUPRITHVIRAJ', 'ASSISTANT PR', 'prithviraj@kongu.ac.in', '9363067473'),
('KEC1666', 15, 'EIE', 'M.RAJA', 'ASSISTANT PR', 'mraja@kongu.ac.in', '9940227092'),
('KEC1667', 21, 'MECH', 'K.V.SATHEESHKUMAR', 'ASSISTANT PR', 'kvs@kongu.ac.in', '9578367576'),
('KEC1670', 8, 'CH', 'S.AKILA', 'ASSISTANT PR', 'akila@kongu.ac.in', '9095171721'),
('KEC1671', 9, 'CH', 'A.S.PERIASAMY MANIKANDAN', 'ASSISTANT PR', 'aspm@kongu.ac.in, ', '9442520334'),
('KEC1673', 15, 'IT', 'B.ANITHA', 'ASSISTANT PR', 'anitha_b@kongu.ac.in', '9952366600'),
('KEC1674', 5, 'CH', 'Dr.C.GOMADURAI', 'ASSOCIATE PR', 'cg@kongu.ac.in', '9443029421'),
('KEC1677', 7, 'ENG', 'C.PARAMASIVAM', 'ASSISTANT PR', 'cp@kongu.ac.in', '9994008323'),
('KEC1681', 8, 'PHY', 'K.V.GUNAVATHY', 'ASSISTANT PR', 'gunavathy@kongu.ac.in', '9894947763'),
('KEC1683', 9, 'PHY', 'K.MALLIKA', 'ASSISTANT PR', 'mallika@kongu.ac.in', '9942003637'),
('KEC1686', 6, 'CHY', 'V.N.KOWSHALYA', 'ASSISTANT PR', 'kowshalya@kongu.ac.in', '9715557900'),
('KEC1687', 16, 'EIE', 'N.MAHESH', 'ASSISTANT PR', 'mahesh@kongu.ac.in', '9944197349'),
('KEC1690', 11, 'MBA', 'P.SIVARAJADHANAVEL', 'ASSISTANT PR', 'psd@kongu.ac.in', '9841673937'),
('KEC1691', 4, 'MBA', 'Dr.S.C.VETRIVEL', 'ASST. PROF(S', 'scv@kongu.ac.in', '9442210999'),
('KEC1714', 5, 'FT', 'Dr.V.SANGEETHA', 'ASSOCIATE PR', 'vsangeetha@kongu.ac.in', '9942399016'),
('KEC1716', 12, 'MBA', 'Dr.T.DHEEPA', 'ASSISTANT PR', 'dheepathangamani@kongu.ac.in', '9486319262'),
('KEC1717', 5, 'MBA', 'Dr.P.KARTHIKEYAN', 'ASST. PROF.(', 'ptp_karthi@kongu.ac.in', '9843641321'),
('KEC1724', 12, 'EEE', 'S.CHANDRASEKAR', 'ASSISTANT PR', 'chakeibk@kongu.ac.in', '9842888846'),
('KEC1725', 16, 'IT', 'Dr.S.MYLSAMY', 'ASSISTANT PR', 'mailtomyl@kongu.ac.in', '9976118634'),
('KEC1726', 11, 'CIVIL', 'Dr.G.S.RAMPRADHEEP', 'ASSOCIATE PR', 'rampradheep@kongu.ac.in', '9750033500'),
('KEC1729', 14, 'MTS', 'S.K.THANGARASU', 'ASSISTANT PR', 'thangarasu@kongu.ac.in', '9942783338'),
('KEC173', 23, 'MECH', 'Dr.M.BHUVANESH KUMAR', 'ASSISTANT PR', 'bhuvanesh@kongu.ac.in', '9894711713'),
('KEC1731', 13, 'EEE', 'V.GOWRI SHANKAR', 'ASSISTANT PR', 'vgseee@kongu.ac.in', '9790683525'),
('KEC1732', 25, 'CSE', 'T.KUMARAVEL', 'ASSISTANT PR', 'tkumar@kongu.ac.in', '9842739296'),
('KEC1733', 22, 'MECH', 'A.MOHANKUMAR', 'ASSISTANT PR', 'mohankumar@kongu.ac.in', '9442710605'),
('KEC1736', 17, 'IT', 'K.R.PRASANNA KUMAR', 'ASSISTANT PR', 'krprasanna@kongu.ac.in', '9715020150'),
('KEC1737', 18, 'ECE', 'V.DINESH', 'ASSISTANT PR', 'dinesh@kongu.ac.in', '9894577815'),
('KEC1738', 19, 'ECE', 'J.VIJAYALAKSHMI', 'ASSISTANT PR', 'vijayalakshmi@kongu.ac.in', '9659343425'),
('KEC1740', 26, 'CSE', 'S.RAMYA', 'ASSISTANT PR', 'ramya@kongu.ac.in', '9787080129'),
('KEC1741', 12, 'CIVIL', 'Dr.M.M.SARAVANAN', 'ASSISTANT PR', 'mmsaravanan@kongu.ac.in', '9843802035'),
('KEC1743', 18, 'IT', 'M.RAMALINGAM', 'ASSISTANT PR', 'mramalingam@kongu.ac.in', '9994668841'),
('KEC1744', 19, 'IT', 'H.MUTHUKRISHNAN', 'ASSISTANT PR', 'muthukrishnan@kongu.ac.in', '7502402307'),
('KEC1747', 15, 'MTS', 'V.ARUNKUMAR', 'ASSISTANT PR', 'arunkumar@kongu.ac.in', '9843437392'),
('KEC1749', 16, 'MTS', 'A.SHANMUGAM', 'ASSISTANT PR', 'shanmugam@kongu.ac.in', '9788645522'),
('KEC1753', 24, 'MECH', 'C.SATHISH RANGANATHAN', 'ASSISTANT PR', 'sathish@kongu.ac.in', '9843862378'),
('KEC1754', 27, 'CSE', 'K.DEVENDRAN', 'ASSISTANT PR', 'skdeva@kongu ac.in', '9942504690'),
('KEC1756', 14, 'EEE', 'P.KARTHIKEYAN', 'ASSISTANT PR', 'karthick@kongu.ac.in', '9976466438'),
('KEC1759', 25, 'MECH', 'P.PRABHAKARAN', 'ASSISTANT PR', 'prabhakar@kongu.ac.in', '9943113999'),
('KEC1760', 15, 'EEE', 'V.SURENDAR', 'ASSISTANT PR', 'surendar136@kongu.ac.in', '9952264648'),
('KEC1764', 17, 'EIE', 'M.LIZZY NESA BAGYAM', 'ASSISTANT PR', 'lizzy@kongu.ac.in', '9943960655'),
('KEC1765', 20, 'ECE', 'G.DEEPA', 'ASSISTANT PR', 'g.deepa@kongu.ac.in', '9965269896'),
('KEC1768', 11, 'CTUG', 'S.PARVATHAVARTHINI', 'ASSISTANT PR', 'varthini@kongu.ac.in', '9789221179'),
('KEC1770', 13, 'MBA', 'N.PRAKASH', 'ASSISTANT PR', 'np@kongu.ac.in', '9842721589'),
('KEC1771', 11, 'CH', 'D.NESAKUMAR', 'ASSISTANT PR', 'nesakumar@kongu.ac.in', '9976584220'),
('KEC1772', 20, 'IT', 'E.M.ROOPA DEVI', 'ASSISTANT PR', 'roopadevi@kongu.ac.in', '6380525789'),
('KEC1773', 26, 'MECH', 'M.VIJAYANAND', 'ASSISTANT PR', 'vijayanand@kongu.ac.in', '9942834224'),
('KEC1776', 3, 'MTS', 'Dr.S.SHANKAR', 'PROFESSOR', 'shankar@kongu.ac.in', '9443696035'),
('KEC1777', 12, 'CTUG', 'D.HEMALATHA', 'ASSISTANT PR', 'dhemalatha@kongu.ac.in', '9500651746'),
('KEC1778', 15, 'CA', 'Dr.D.SIVABALASELVAMANI', 'ASSISTANT PR', 'sivabalan_mca@kongu.ac.in ', '9940049001'),
('KEC1779', 12, 'CA', 'L.RAHUNATHAN', 'ASSISTANT PR', 'rahunathan@kongu.ac.in ', '9095296777'),
('KEC1794', 13, 'CA', 'T.KAVITHA', 'ASSISTANT PR', 'tkavitha@kongu.ac.in ', '9894514402'),
('KEC1808', 13, 'CIVIL', 'S.VENKATACHALAM', 'ASSISTANT PR', 'venkatcivil@kongu.ac.in', '8248781094'),
('KEC1814', 21, 'IT', 'S.ANITHA', 'ASSISTANT PR', 'anithame@kongu.ac.in', '7010461060'),
('KEC1815', 16, 'MATHS', 'Dr.M.SURESH', 'ASSISTANT PR', 'mms@kongu.ac.in', '9943624414'),
('KEC1816', 9, 'EEE', 'Dr.S.MAHESWARI', 'ASSOCIATE PR', 's.maheswari@kongu.ac.in', '9750111244'),
('KEC1817', 18, 'EIE', 'M.KARTHIKEYAN', 'ASSISTANT PR', 'mkarthikeyan@kongu.ac.in', '9488152475'),
('KEC1819', 16, 'EEE', 'Dr.T.GUNASEKAR', 'ASSISTANT PR', 'gunasekar@kongu.ac.in', '9789090057'),
('KEC1821', 12, 'EIE', 'Dr.S.J.SUJI PRASAD', 'ASSOCIATE PR', 'sjsujiprasad@kongu.ac.in', '9965396664'),
('KEC1823', 17, 'EEE', 'R.KARTHIK KUMAR', 'ASSISTANT PR', 'karthikkumar@kongu.ac.in', '9486464624'),
('KEC1831', 14, 'CIVIL', 'A.R.KRISHNA RAJA', 'ASSISTANT PR', 'krajacivil@kongu.ac.in', '9843501835'),
('KEC1832', 15, 'CIVIL', 'M.P.THIYANESWARAN', 'ASSISTANT PR', 'thiyanescivil@kongu.ac.in', '9894616769'),
('KEC1833', 16, 'CIVIL', 'S.VIJAYANAND', 'ASSISTANT PR', 'vijayanands@kongu.ac.in', '9842710959'),
('KEC1834', 22, 'IT', 'K.LOGESWARAN', 'ASSISTANT PR', 'klogeswaran@kongu.ac.in', '9698513850'),
('KEC1836', 17, 'CIVIL', 'S.SHARMILA', 'ASSISTANT PR', 'sharmila@kongu.ac.in', '9944376775'),
('KEC1841', 18, 'EEE', 'M.SURESH', 'ASSISTANT PR', 'sureshped@kongu.ac.in', '9578951073'),
('KEC1843', 28, 'CSE', 'B.BIZU', 'ASSISTANT PR', 'bizu@kongu.ac.in', '9865165228'),
('KEC1845', 23, 'IT', 'K.LALITHA', 'ASSISTANT PR', 'klalitha@kongu.ac.in', '9150778585'),
('KEC1848', 19, 'EEE', 'N.PRIYADHARSHINI', 'ASSISTANT PR', 'priyadharshini@kongu.ac.in', '9095190828'),
('KEC1849', 20, 'EEE', 'K.PRITHIVI', 'ASSISTANT PR', 'k.prthv@kongu.ac.in', '9942033301'),
('KEC1851', 19, 'EIE', 'T.MRUNALINI', 'ASSISTANT PR', 'mrunalinieie@kongu.ac.in', '9865581285'),
('KEC1852', 20, 'EIE', 'R.SURESHKUMAR', 'ASSISTANT PR', 'sureshkec@kongu.ac.in', '9047665542'),
('KEC1858', 21, 'EIE', 'P.REVATHI', 'ASSISTANT PR', 'revathieie@kongu.ac.in', '8344429080'),
('KEC1860', 24, 'IT', 'B.BHUVANESWARI', 'ASSISTANT PR', 'bhuvana@kongu.ac.in', '9578059659'),
('KEC1862', 18, 'MTS', 'N.MURALIDHARAN', 'ASSISTANT PR', 'praveenkumar@kongu.ac.in', '9994065073'),
('KEC1864', 22, 'EIE', 'R.MOULEESHUWARAPPRABU', 'ASSISTANT PR', 'moulieie@kongu.ac.in', '9786664799'),
('KEC1869', 19, 'MTS', 'K.SUGANESWARAN', 'ASSISTANT PR', 'sugan@kongu.ac.in', '9788115198'),
('KEC1872', 7, 'CHY', 'S.NIRMALADEVI', 'ASSISTANT PR', 'snirmaladevi@kongu.ac.in', '9486636176'),
('KEC1876', 8, 'CHY', 'Dr.M.KARTHIKEYAN', 'ASSISTANT PR', 'karthikeyanm@kongu.acin', '9787313302'),
('KEC1879', 1, 'ENG', 'Dr.T.SASISEKARAN', 'PROFESSOR', 'tssekaran@kongu.ac.in', '9443035159'),
('KEC1883', 10, 'PHY', 'T.MAHESHWARI', 'ASSISTANT PR', 'maheshtamil@kongu.ac.in', '9894777372'),
('KEC1884', 27, 'MECH', 'N.SARAVANAN', 'ASSISTANT PR', 'nsaravanan@kongu.ac.in', '9488076564'),
('KEC1886', 9, 'CHY', 'K.GAYATHRI', 'ASSISTANT PR', 'gayathrikumar@kongu.ac.in', '8344030600'),
('KEC1888', 17, 'MATHS', 'Dr.M.HARI KRISHNAN', 'ASSISTANT PR', 'harikrishnan@kongu.ac.in', '9965079897'),
('KEC1889', 18, 'CIVIL', 'K.VISHNUVARDHAN', 'ASSISTANT PR', 'vishnukaruna@kongu.ac.in', '9791674174'),
('KEC1890', 8, 'ENG', 'R.GOMATHY', 'ASSISTANT PR', 'nrgomathy@kongu.ac.in', '9865067847'),
('KEC1891', 9, 'ENG', 'R.RAMYA SRI', 'ASSISTANT PR', 'rrsri_06@kongu.ac.in', '8012617387'),
('KEC1893', 10, 'CHY', 'K.KRISHNAVENI', 'ASSISTANT PR', 'kveniraj@kongu.ac.in', '9994814845'),
('KEC1924', 21, 'EEE', 'S.K.LOGESH', 'ASSISTANT PR', 'sklogesh@kongu.ac.in', '9443350335'),
('KEC1925', 28, 'MECH', 'Dr.R.NAVEEN KUMAR', 'ASSISTANT PR', 'naveenmech@kongu.ac.in', '9790267674'),
('KEC1926', 29, 'MECH', 'B.S.HARI', 'ASSISTANT PR', 'harimech@kongu.ac.in', '9443399590'),
('KEC1927', 30, 'MECH', 'A.TAMILVANAN', 'ASSISTANT PR', 'tamilmech@kongu.ac.in', '9842755668'),
('KEC1928', 19, 'CIVIL', 'T.RAVI PRAKASH', 'ASSISTANT PR', 'ktravi@kongu.ac.in', '9659575758'),
('KEC1929', 20, 'CIVIL', 'P.DINESH KUMAR', 'ASSISTANT PR', 'dinucivil@kongu.ac.in', '9842060648'),
('KEC1930', 21, 'ECE', 'N.S.KAVITHA', 'ASSISTANT PR', 'nskavitha@kongu.ac.in', '9095910888'),
('KEC1931', 22, 'ECE', 'K.SENTHIL KUMAR', 'ASSISTANT PR', 'ksenthilkumar@kongu.ac.in', '9715660492'),
('KEC1932', 23, 'ECE', 'K.MANOJ SENTHIL', 'ASSISTANT PR', 'kmanojsenthil@kongu.ac.in', '9942736276'),
('KEC1933', 30, 'CSE', 'S.SELVARAJ', 'ASSISTANT PR', 'selvarajs@kongu.ac.in', '9994284106'),
('KEC1934', 31, 'MECH', 'M.HARIKRISHNA KUMAR', 'ASSISTANT PR', 'harikrishnamech@kongu.ac.in', '9715808222'),
('KEC1935', 23, 'EIE', 'R.RAJKUMAR', 'ASSISTANT PR', 'rajkumarr@kongu.ac.in', '9865245489'),
('KEC1936', 24, 'EIE', 'M.THANGATAMILAN', 'ASSISTANT PR', 'thangatamilm@kongu.ac.in', '8695263614'),
('KEC1938', 21, 'CIVIL', 'P.RAVICHANDRAN', 'ASSISTANT PR', 'ravicivil@kongu.ac.in', '9994993513'),
('KEC1939', 18, 'MATHS', 'D.GURUKUMARESAN', 'ASSISTANT PR', 'mathsguru@kongu.ac.in', '9751285352'),
('KEC1940', 31, 'CSE', 'M.SANGEETHA', 'ASSISTANT PR', 'sangeetham@kongu.ac.in', '7373727254'),
('KEC1941', 25, 'IT', 'S.VINOTHKUMAR', 'ASSISTANT PR', 'vinoths@kongu.ac.in', '9003683789'),
('KEC1943', 20, 'MTS', 'S.ARUN KUMAR', 'ASSISTANT PR', 'sarunkumar@kongu.ac.in', '9943093444'),
('KEC1944', 21, 'MTS', 'C.NAVEEN', 'ASSISTANT PR', 'cnaveen@kongu.ac.in', '9566310221'),
('KEC1945', 19, 'MATHS', 'K.V.UDAYANATCHI', 'ASSISTANT PR', 'udayamaths@kongu.ac.in', '7502508203'),
('KEC1946', 22, 'EEE', 'S.GOMATHY', 'ASSISTANT PR', 'gomathys@kongu.ac.in', '9715063781'),
('KEC1949', 24, 'ECE', 'K.HEMALATHA', 'ASSISTANT PR', 'khemalatha@kongu.ac.in', '9788960111'),
('KEC1950', 25, 'ECE', 'A.CHANDRASEKARAN', 'ASSISTANT PR', 'chandru@kongu.ac.in', '7373255492'),
('KEC1952', 10, 'ENG', 'R.D.GOMATHI', 'ASSISTANT PR', 'rdgomathi@kongu.ac.in', '9842418219'),
('KEC1953', 26, 'ECE', 'V.SATHYA NARAYANAN', 'ASSISTANT PR', 'sathyanarayanan@kongu.ac.in', '9944861029'),
('KEC1954', 27, 'ECE', 'N.PRABHU RAM', 'ASSISTANT PR', 'prabhuramn4186@kongu.ac.in', '9750677937'),
('KEC1957', 28, 'ECE', 'K.KAVIN KUMAR', 'ASSISTANT PR', 'kavinkumar@kongu.ac.in', '8760080999'),
('KEC1961', 22, 'CIVIL', 'N.NANDHINI', 'ASSISTANT PR', 'nandhinin@kongu.ac.in', '9894777758'),
('KEC1962', 32, 'MECH', 'S.RAMAKRISHNAN', 'ASSISTANT PR', 'srmech@kongu.ac.in', '9715541194'),
('KEC1964', 23, 'EEE', 'R.RANJITHKUMAR', 'ASSISTANT PR', 'ranjithsat@kongu.ac.in', '9677464344'),
('KEC1966', 24, 'EEE', 'K.RANJITHKUMAR', 'ASSISTANT PR', 'ranjithkkr7@kongu.ac.in', '9443788991'),
('KEC1968', 29, 'ECE', 'V.C.DINIESH', 'ASSISTANT PR', 'vcdiniesh@kongu.ac.in', '9976484996'),
('KEC1973', 32, 'CSE', 'O.R.DEEPA', 'ASSISTANT PR', 'ord@kongu.ac.in', '9894296308'),
('KEC1978', 33, 'MECH', 'M.DHARMARAJ', 'ASSISTANT PR', 'mdmech@kongu.ac.in', '9791450466'),
('KEC1979', 25, 'EEE', 'K.KAVIN MULLAI', 'ASSISTANT PR', 'kavinmullai@kongu.ac.in', '9750048615'),
('KEC1980', 11, 'PHY', 'V.PARTHIBARAJ', 'ASSISTANT PR', 'parthiphysics@kongu.ac.in', '9080554215'),
('KEC1981', 28, 'EIE', 'B.VENKATESAN', 'ASSISTANT PR', 'venkatesan.eie@kongu.ac.in', '9487267705'),
('KEC1983', 7, 'MECH', 'Dr.R.RAJASEKAR', 'PROFESSOR', 'somas@kongu.ac.in', '9842879994'),
('KEC1985', 26, 'EEE', 'V.KUMARESAN', 'ASSISTANT PR', 'vkumar@kongu.ac.in', '9047886356'),
('KEC1989', 12, 'PHY', 'D.RAMARAJAN', 'ASSISTANT PR', 'ramarajan@kongu.ac.in', '9489751664'),
('KEC1990', 27, 'IT', 'P.S.PRAKASH', 'ASSISTANT PR', 'psprakash@kongu.ac.in', '9944333811'),
('KEC1991', 23, 'CIVIL', 'K.S.GOWRISHANKAR', 'ASSISTANT PR', 'gowrishankarks@kongu.ac.in', '9994953399'),
('KEC1992', 30, 'ECE', 'VIBIN MAMMEN VINOD', 'ASSISTANT PR', 'vibin@kongu.ac.in', '7845230589'),
('KEC1993', 31, 'ECE', 'M.MANIMEGALAI', 'ASSISTANT PR', 'manimegalai@kongu.ac.in', '9600628105'),
('KEC1995', 32, 'ECE', 'V.MEKALA', 'ASSISTANT PR', 'mekalav@kongu.ac.in', '8220338821'),
('KEC1997', 27, 'EEE', 'M.S.KAMALESH', 'ASSISTANT PR', 'kamaleshms@kongu.ac.in', '9789130506'),
('KEC1998', 11, 'CHY', 'R.TAMILISAI', 'ASSISTANT PR', 'tamilisai@kongu.ac.in', '9751652826'),
('KEC2000', 14, 'MBA', 'Dr.V.ANANDAVEL', 'ASSISTANT PR', 'anandavel@kongu.ac.in', '9842943640'),
('KEC2001', 13, 'PHY', 'Dr.N.SRINIVASAN', 'ASSISTANT PR', 'srinivasan@kongu.ac.in', '9500510937'),
('KEC2002', 34, 'MECH', 'S.M.SENTHIL', 'ASSISTANT PR', 'smsmech@ kongu.ac.in', '9994884614'),
('KEC2005', 12, 'CHY', 'A.REVATHI', 'ASSISTANT PR', 'arevathi@kongu.ac.in', '9942303014'),
('KEC2025', 28, 'EEE', 'M.SABARIMUTHU', 'ASSISTANT PR', 'eeesabari@kongu.ac.in', '9789778748'),
('KEC2029', 29, 'EEE', 'M.SRINIVASAN', 'ASSISTANT PR', 'srinieee@kongu.ac.in', '8056763589'),
('KEC2032', 14, 'PHY', 'Dr.S.SUDHA', 'ASSISTANT PR', 'sudhas@kongu.ac.in', '9442909822'),
('KEC2036', 33, 'ECE', 'K.GAVASKAR', 'ASSISTANT PR', 'gavaskar@kongu.ac.in', '9790004798'),
('KEC2038', 34, 'ECE', 'S.PREETHI', 'ASSISTANT PR', 'preethi.s@kongu.ac.in', '9715206006'),
('KEC2040', 35, 'MECH', 'C.MOGANAPRIYA', 'ASSISTANT PR', 'mogana98@kongu.ac.in', '9976855006'),
('KEC2042', 26, 'EIE', 'C.ARAVIND', 'ASSISTANT PR', 'aravind@kongu.ac.in', '9942203408'),
('KEC2043', 33, 'CSE', 'K.S.KALAIVANI', 'ASSISTANT PR', 'kalaivani@kongu.ac.in', '9443208794'),
('KEC2045', 34, 'CSE', 'S.SANTHOSHKUMAR', 'ASSISTANT PR', 'santhosh@kongu.ac.in', '9788343588'),
('KEC2046', 25, 'EIE', 'K.YUVARAJ', 'ASSISTANT PR', 'yuvaraj.k@kongu.ac.in', '9944882450'),
('KEC2047', 36, 'MECH', 'N.BAASKARAN', 'ASSISTANT PR', 'baaskararcher@kongu.ac.in', '9942026262'),
('KEC2048', 37, 'MECH', 'S.DHAMOTHARAN', 'ASSISTANT PR', 'dhamugr@kongu.ac.in', '9842714344'),
('KEC2049', 30, 'EEE', 'P.TAMILARASU', 'ASSISTANT PR', 'tamilarasu@kongu.ac.in', '9865255912'),
('KEC2050', 13, 'CH', 'N.DEEPA PRIYA', 'ASSISTANT PR', 'priyadpn@kongu.ac.in', '8643816685'),
('KEC2051', 35, 'CSE', 'C.SAGANA', 'ASSISTANT PR', 'sagana.c@kongu.ac.in', '8144163614'),
('KEC2052', 24, 'CIVIL', 'R.K.SANGEETHA', 'ASSISTANT PR', 'sangeetha.rk@kongu.ac.in', '8248785745'),
('KEC2055', 22, 'MTS', 'T.TAMILARASI', 'ASSISTANT PR', 'tamilravi@kongu.ac.in', '9842723255'),
('KEC2057', 20, 'MATHS', 'V.YAMUNA', 'ASSISTANT PR', 'yamunamath@kongu.ac.in', '9698919364'),
('KEC2058', 28, 'IT', 'K.SENTAMILSELVAN', 'ASSISTANT PR', 'ksentamilselvan@kongu.ac.in', '9843706520'),
('KEC2059', 10, 'MTS', 'Dr.V.G.PRATHEEP', 'ASSOCIATE PR', 'vgpratheep@kongu.ac.in', '9443496187'),
('KEC2061', 38, 'MECH', 'S.MANIKANDAN', 'ASSISTANT PR', 'smmech@kongu.ac.in', '9994906912'),
('KEC2062', 39, 'MECH', 'K.KATHIRVEL', 'ASSISTANT PR', 'kkathirmech@kongu.ac.in', '9894232236'),
('KEC2066', 41, 'MECH', 'A.SARAVANAN', 'ASSISTANT PR', 'saro88@kongu.ac.in', '9789467617'),
('KEC2067', 23, 'MTS', 'A.BALAJI', 'ASSISTANT PR', 'balajimts@kongu.ac.in', '9500836303'),
('KEC2068', 12, 'ENG', 'P.SARANYA DEVI', 'ASSISTANT PR', 'saranyadevi@kongu.ac.in', '9976733833'),
('KEC2069', 21, 'MATHS', 'Dr.S.MUTHUVEL', 'ASSISTANT PR', 'muthuvelsen@kongu.ac.in', '7373557502'),
('KEC2070', 42, 'MECH', 'S.KARTHI', 'ASSISTANT PR', 'karthimech@kongu.ac.in', '9894067919'),
('KEC2071', 6, 'FT', 'M.S.SHIVASWAMY', 'ASSISTANT PR', 'msswamy@kongu.ac.in', '9043884899'),
('KEC2072', 35, 'ECE', 'G.RAVIVARMA', 'ASSISTANT PR', 'ravivarmasha@kongu.ac.in', '8760296378'),
('KEC2073', 13, 'ENG', 'D.RAMYA', 'ASSISTANT PR', 'dramya@kongu.ac.in', '9626233699'),
('KEC2074', 13, 'CHY', 'Dr.C.BALRAJ', 'ASSISTANT PR', 'balraj@kongu.ac.in', '9095103500'),
('KEC2075', 22, 'MATHS', 'B.JEEVANANDAN', 'ASSISTANT PR', 'jeevapree@kongu.ac.in', '9865299929'),
('KEC2077', 14, 'CH', 'K.KALAIVANI', 'ASSISTANT PR', 'kalaivanik@kongu.ac.in', '9965675745'),
('KEC2078', 27, 'EIE', 'S.JEGAN', 'ASSISTANT PR', 'vsjegan@kongu.ac.in', '7598279706'),
('KEC2079', 14, 'CHY', 'K.PRABHAKARAN', 'ASSISTANT PR', 'prabhakarank@kongu.ac.in', '9894421568'),
('KEC2091', 15, 'CHY', 'Dr.S.SATHISHKUMAR', 'ASSISTANT PR', 'sathish3@kongu.ac.in', '9942810199'),
('KEC2101', 2, 'PHY', 'Dr.C.RANGASAMI', 'ASSOCIATE PR', 'rangasami@kongu.ac.in', '9976817141'),
('KEC2190', 36, 'ECE', 'B.VIVEK', 'ASSISTANT PR', 'vivek.ece@kongu.ac.in', '9952630543'),
('KEC2194', 25, 'CIVIL', 'T.JEEVETHA', 'ASSISTANT PR', 'jeevethat.civil@kongu.ac.in', '7502173087'),
('KEC2195', 37, 'ECE', 'A.VENNILA', 'ASSISTANT PR', 'vennila.ece@kongu.ac.in', '9710888800'),
('KEC2197', 24, 'MTS', 'S.THANGAVEL', 'ASSISTANT PR', 'thangavel.mts@kongu.ac.in', '9750366570'),
('KEC2198', 43, 'MECH', 'D.SURESH', 'ASSISTANT PR', 'suresh.mech@kongu.ac.in', '9489070995'),
('KEC2199', 32, 'EEE', 'P.SETHUPATHI', 'ASSISTANT PR', 'sethupathi.eee@kongu.ac.in', '9003500326'),
('KEC2201', 26, 'CIVIL', 'M.ARUN KUMAR', 'ASSISTANT PR', 'arunkumarm.civil@kongu.ac.in', '9500501125'),
('KEC2204', 38, 'ECE', 'K.MEENAKSHI', 'ASSISTANT PR', 'meenakshi.ece@kongu.ac.in', '7708100663'),
('KEC2205', 39, 'ECE', 'M.CHITRA', 'ASSISTANT PR', 'chitra.ece@kongu.ac.in', '7299803951'),
('KEC2206', 27, 'CIVIL', 'S.KARTHIKEYAN', 'ASSISTANT PR', 'karthikeyan.civil@kongu.ac.in', '9842598765'),
('KEC2207', 14, 'CTUG', 'B.RAVISANKAR', 'ASSISTANT PR', 'ravisankar.ctug@kongu.ac.in', '9791409475'),
('KEC2209', 40, 'ECE', 'V.ANBUMANI', 'ASSISTANT PR', 'anbumani.ece@kongu.ac.in', '9443560416'),
('KEC2210', 44, 'MECH', 'A.ABUBAKKAR', 'ASSISTANT PR', 'abu.mech@kongu.ac.in', '9442041493'),
('KEC2211', 28, 'CIVIL', 'T.KARTHIKA', 'ASSISTANT PR', 'rtkarthika.civil@kongu.ac.in', '7305831486'),
('KEC2212', 15, 'CTUG', 'M.SANTHIYA', 'ASSISTANT PR', 'sandhiya.ctug@kongu.ac.in', '96885'),
('KEC2213', 39, 'CSE', 'S.MOHANA SARANYA', 'ASSISTANT PR', 'mohanasaranya.cse@kongu.ac.in', '9942974490'),
('KEC2214', 16, 'CTUG', 'M.SAKTHI RADHA', 'ASSISTANT PR', 'sakthiradha.ctug@kongu.ac.in', '9942760186'),
('KEC2215', 37, 'CSE', 'S.MOHANAPRIYA', 'ASSISTANT PR', 'mohanapriyas.cse@kongu.ac.in', '7418825624'),
('KEC2219', 41, 'ECE', 'A.ARUN PRAKASH', 'ASSISTANT PR', 'arunprakash.ece@kongu.ac.in', '8508286674'),
('KEC2220', 38, 'CSE', 'P.S.NANDHINI', 'ASSISTANT PR', 'nandhini.cse@kongu.ac.in', '9962073299'),
('KEC2222', 42, 'ECE', 'P.KEERTHANA', 'ASSISTANT PR', 'keerthana.ece@kongu.ac.in', '9488036355'),
('KEC2223', 29, 'EIE', 'D.SELVAKARTHI', 'ASSISTANT PR', 'selvakarthi.eie@kongu.ac.in', '9789951541'),
('KEC2227', 45, 'MECH', 'K.PARAMASIVAM', 'ASSISTANT PR', 'param.mech@kongu.ac.in', '7418575872'),
('KEC2228', 17, 'CTUG', 'J.DEEPA', 'ASSISTANT PR', 'deepa.ctug@kongu.ac.in', '9965286516'),
('KEC2229', 23, 'MATHS', 'K.RADHIKA', 'ASSISTANT PR', 'radhika.maths@kongu.ac.in', '9150780480'),
('KEC2230', 33, 'EEE', 'M.SURESH', 'ASSISTANT PR', 'sureshrms.eee@kongu.ac.in', '9943790400'),
('KEC2231', 29, 'CIVIL', 'S.K.MANIARASAN', 'ASSISTANT PR', 'maniarasan.civil@kongu.ac.in', '9976774853'),
('KEC2232', 15, 'CH', 'G.MUGAISHUDEEN', 'ASSISTANT PR', 'mugais.chem@kongu.ac.in', '9842040470'),
('KEC2234', 34, 'EEE', 'D.SARATHKUMAR', 'ASSISTANT PR', 'sarath.eee@kongu.ac.in', '9688427208'),
('KEC2237', 7, 'FT', 'J.JONY BLESSING MANOJ', 'ASSISTANT PR', 'manoj.ft@kongu.ac.in', '9597600188'),
('KEC2251', 30, 'CIVIL', 'S.VIJAYASHANTHY', 'ASSISTANT PR', 'vijayashanthi.civil@kongu.ac.i', '8144899699'),
('KEC2254', 31, 'CIVIL', 'K.SAMPATH KUMAR', 'ASSISTANT PR', 'sampathkumar.civil@kongu.ac.in', '9688957296'),
('KEC2276', 29, 'IT', 'A.JEEVANANTHAM', 'ASSISTANT PR', 'jeeva@kongu.ac.in ', '7373222233'),
('KEC2299', 4, 'ECE', 'N.N.PRAGASH', 'ASSOCIATE PR', 'nnp.ece@kongu.ac.in', '9444792358'),
('KEC2300', 32, 'CIVIL', 'M.KOWSALYA', 'ASSISTANT PR', 'kowsalya.civil@kongu.ac.in', '9585761261'),
('KEC2303', 43, 'ECE', 'S.SATHESH', 'ASSISTANT PR', 'sathesh.ece@kongu.ac.in', '9578037123'),
('KEC2304', 46, 'MECH', 'P.PRAVEEN', 'ASSISTANT PR', 'praveen.mech@kongu.ac.in', '9865843555'),
('KEC2305', 33, 'CIVIL', 'K.S.NAVANEETHAN', 'ASSISTANT PR', 'navaneethanks.civil@kongu.ac.i', '8056554879'),
('KEC2306', 40, 'CSE', 'K.TAMIL SELVI', 'ASSISTANT PR', 'tamilselvik.cse@kongu.ac.in', '9944412462'),
('KEC2307', 41, 'CSE', 'M.K.DHARANI', 'ASSISTANT PR', 'dharani.cse@kongu.ac.in', '9865531188'),
('KEC2309', 15, 'ECE', 'Dr.K.S.TAMIL SELVAN', 'ASSOCIATE PR', 'tamilselvan.ece@kongu.ac.in', '9865369964'),
('KEC2310', 34, 'CIVIL', 'A.SIVAKUMAR', 'ASSISTANT PR', 'sivakumar.civil@kongu.ac.in', '8903486090'),
('KEC2312', 35, 'EEE', 'P.GOWRISHANKAR', 'ASSISTANT PR', 'gowrishankar.eee@kongu.ac.in', '9043763908'),
('KEC2314', 8, 'FT', 'R.SORNA PREMA', 'ASSISTANT PR', 'sornaprema.ft@kongu.ac.in', '9486489157'),
('KEC2316', 35, 'CIVIL', 'P.KULANTHAIVEL', 'ASSISTANT PR', 'kulanthaivel.civil@kongu.ac.in', '9524957886'),
('KEC2317', 36, 'CIVIL', 'S.VINODHKUMAR', 'ASSISTANT PR', 'vinodh.civil@kongu.ac.in', '9790025650'),
('KEC2318', 7, 'CIVIL', 'Dr.S.BALAJI', 'ASSOCIATE PR', 'balaji.civil@kongu.ac.in', '9790014868'),
('KEC2324', 47, 'MECH', 'M.MAKESHKUMAR', 'ASSISTANT PR', 'makesh.mech@kongu.ac.in', '9715857958'),
('KEC2325', 48, 'MECH', 'R.KARTHIKEYAN', 'ASSISTANT PR', 'karthi.mech@kongu.ac.in', '7708014591'),
('KEC2329', 25, 'MTS', 'R.NITHYAPRAKASH', 'ASSISTANT PR', 'nithyaprakash.mts@kongu.ac.in', '9944586397'),
('KEC2332', 44, 'ECE', 'L.VIJAYALAKSHMI', 'ASSISTANT PR', 'vijayalakshmi.ece@kongu.ac.in', '9488693601'),
('KEC2333', 49, 'MECH', 'S.JEEVA', 'ASSISTANT PR', 'jeeva.mech@kongu.ac.in', '8056544588'),
('KEC2338', 37, 'CIVIL', 'S.MANOJ', 'ASSISTANT PR', 'manoj.civil@kongu.ac.in', '9566599433'),
('KEC2344', 24, 'MATHS', 'Dr.R.JEETENDRA', 'ASSISTANT PR', 'jeetendra.maths@kongu.ac.in', '9865897004'),
('KEC2345', 18, 'CTUG', 'C.NARMATHA', 'ASSISTANT PR', 'narmatha.ctug@kongu.ac.in', '8344483088'),
('KEC2347', 14, 'ENG', 'K.JEFFERSON', 'ASSISTANT PR', 'jefferson@kongu.ac.in', '9789339638'),
('KEC2348', 15, 'ENG', 'S.SENTHILKUMAR', 'ASSISTANT PR', 'senthilkumars@kongu.ac.in', '9944319025'),
('KEC2349', 19, 'CTUG', 'N.SUDHAVANI', 'ASSISTANT PR', 'sudhavani@kongu.ac.in', '9094081797'),
('KEC2350', 16, 'CHY', 'K.YOGHANANTHAN', 'ASSISTANT PR', 'kyoghananthan@kongu.ac.in', '9944297205'),
('KEC2364', 15, 'PHY', 'Dr.K.MAHESHVARAN', 'ASSISTANT PR', 'maheshvaran@kongu.ac.in', '8973306570'),
('KEC2365', 16, 'PHY', 'C.KARTHIKA', 'ASSISTANT PR', 'karthika@kongu.ac.in', '9791211430'),
('KEC2374', 7, 'MATHS', 'Dr.R.VENNILA', 'ASST. PROF(S', 'vennilar@kongu.ac.in', '9894831135'),
('KEC2428', 38, 'CIVIL', 'G.DHEERAN AMARAPATHI', 'ASSISTANT PR', 'dheeran.civil@kongu.ac.in', '9789776659'),
('KEC2429', 39, 'CIVIL', 'V.SAMPATHKUMAR', 'ASSISTANT PR', 'sampath.civil@kongu.ac.in', '9047151001'),
('KEC2430', 42, 'CSE', 'VANI RAJASEKAR', 'ASSISTANT PR', 'vanikecit.cse@kongu.ac.in', '9659902769'),
('KEC2433', 40, 'CIVIL', 'S.VIJAYALAKSHMI', 'ASSISTANT PR', 'svlakshmi.civil@kongu.ac.in', '9659033389'),
('KEC2434', 8, 'CTPG', 'S.HAMSANANDHINI', 'ASSISTANT PR', 'hamsanandhini@kongu.ac.in', '8508609209'),
('KEC2436', 20, 'CTUG', 'Dr.C.N.VANITHA', 'ASSISTANT PR', 'vanithacn.ctug@kongu.ac.in', '9003962637'),
('KEC2437', 1, 'AUTO', 'Dr.P.SOMASUNDARAM', 'PROFESSOR', 'somasundaram.auto@kongu.ac.in', '9842136616'),
('KEC2438', 43, 'CSE', 'K.VENU', 'ASSISTANT PR', 'venu.cse@kongu.ac.in', '7200004511'),
('KEC2441', 19, 'CH', 'S.PRANAV', 'ASSISTANT PR', 'pranav.chem@kongu.ac.in', '9159192731'),
('KEC2442', 50, 'MECH', 'T.RAJAGOPAL', 'ASSISTANT PR', 'rajagopal.mech@kongu.ac.in', '9788677239'),
('KEC2444', 3, 'AUTO', 'M.GOWRI SHANKAR', 'ASSISTANT PR', 'gowrishankar.auto@kongu.ac.in', '9789798448'),
('KEC2448', 9, 'FT', 'A.SANGEETHA', 'ASSISTANT PR', 'asangeetha.ft@kongu.ac.in', '8903720046'),
('KEC2449', 45, 'ECE', 'R.RAMYEA', 'ASSISTANT PR', 'ramyea.ece@kongu.ac.in', '9566698330'),
('KEC2450', 22, 'CTUG', 'S.MALATHY', 'ASSISTANT PR', 'malathy.ctug@kongu.ac.in', '9488087212'),
('KEC2452', 24, 'CTUG', 'K.SATHYA', 'ASSISTANT PR', 'ksathya.ctug@kongu.ac.in', '9842377267'),
('KEC2454', 20, 'CH', 'J.JAYABHARATHI', 'ASSISTANT PR', 'jaya.chem@kongu.ac.in', '9790670861'),
('KEC2457', 41, 'CIVIL', 'N.JOTHILAKSHMI', 'ASSISTANT PR', 'jothi.civil@kongu.ac.in', '9942930799'),
('KEC2458', 51, 'MECH', 'N.PRASANNA', 'ASSISTANT PR', 'prasanna.mech@kongu.ac.in', '9524090997'),
('KEC2465', 10, 'FT', 'PAYEL DAS GUPTA', 'ASSISTANT PR', 'payel.ft@kongu.ac.in', '9830298698'),
('KEC2468', 8, 'MECH', 'Dr.DINESHKUMARKARUPANNASAMY', 'ASSOCIATE PR', 'dinesh.mech@kongu.ac.in', '9443599356'),
('KEC2469', 42, 'CIVIL', 'V.NAVEEN RAJ', 'ASSISTANT PR', 'naveenraj.civil@kongu.ac.in', '9789243575'),
('KEC2474', 43, 'CIVIL', 'K.RAJA', 'ASSISTANT PR', 'raja.civil@kongu.ac.in', '9790350615'),
('KEC2478', 44, 'CIVIL', 'A.T.MANIKANDAN', 'ASSISTANT PR', 'soilmani.civil@kongu.ac.in', '9942816716'),
('KEC2484', 52, 'MECH', 'S.AJAY', 'ASSISTANT PR', 'ajay.mech@kongu.ac.in', '9790446443'),
('KEC2640', 2, 'AUTO', 'Dr.C.JEGADHEESAN', 'ASSOCIATE PR', 'cjegadheesan.auto@kongu.ac.in', '9003760212'),
('KEC2641', 4, 'CH', 'Dr.K.SENTHILKUMAR', 'ASSOCIATE PR', 'senthilkumar.chem@kongu.ac.in', '9842844880'),
('KEC2642', 4, 'AUTO', 'K.S.KARTHI VINITH', 'ASSISTANT PR', 'karthivinith.auto@kongu.ac.in', '8754254671'),
('KEC2643', 5, 'AUTO', 'S.SATHISHKUMAR', 'ASSISTANT PR', 'sathiskumar.auto@kongu.ac.in', '9042699880'),
('KEC2644', 6, 'AUTO', 'P.SENTHILKUMAR', 'ASSISTANT PR', 'senthilkumar.auto@kongu.ac.in', '8300163539'),
('KEC2645', 46, 'ECE', 'S.B.GOPAL', 'ASSISTANT PR', 'gopal.ece@kongu.ac.in', '9842737494'),
('KEC2646', 47, 'ECE', 'S.SUTHAGAR', 'ASSISTANT PR', 'suthagar.ece@kongu.ac.in', '9677188279'),
('KEC2648', 48, 'ECE', 'P.P.JANARTHANAN', 'ASSISTANT PR', 'ppjanarthanan.ece@kongu.ac.in', '9865882416'),
('KEC2649', 49, 'ECE', 'R.P.KARTHIK', 'ASSISTANT PR', 'rpkarthik.ece@kongu.ac.in', '7667627171'),
('KEC2650', 50, 'ECE', 'G.MAGESHKUMAR', 'ASSISTANT PR', 'mageshkumar.ece@kongu.ac.in', '9994099486'),
('KEC2651', 45, 'CIVIL', 'PRIYANKA PRABHAKARAN', 'ASSISTANT PR', 'priyankap.civil@ kongu.ac.in', '9698629866'),
('KEC2652', 46, 'CIVIL', 'S.JANANI', 'ASSISTANT PR', 'janani.civil@kongu.ac.in', '9688551995'),
('KEC2653', 47, 'CIVIL', 'P.KRITHIGA', 'ASSISTANT PR', 'krithiga.civil@kongu.ac.in', '8825781949'),
('KEC2654', 48, 'CIVIL', 'K.SANTHOSH KUMAAR', 'ASSISTANT PR', 'skumar.civil@kongu.ac.in', '9791494800'),
('KEC2655', 49, 'CIVIL', 'T.S.MUKESH', 'ASSISTANT PR', 'mukesh.civil@kongu.ac.in', '9865110809'),
('KEC2657', 25, 'CTUG', 'D.DEEPA', 'ASSISTANT PR', 'deepad.ctug@kongu.ac.in', '9500828665'),
('KEC2658', 9, 'CTPG', 'P.YUVARANI', 'ASSISTANT PR', 'pyuvarani@kongu.ac.in', '9942383782'),
('KEC2660', 10, 'CTPG', 'T.MARAGATHAM', 'ASSISTANT PR', 'tmaragatham@kongu.ac.in', '9942697597'),
('KEC2661', 11, 'CTPG', 'M.PRADEEPA MEENAKSHI', 'ASSISTANT PR', 'mpradeepa@kongu.ac.in', '9486792631'),
('KEC2663', 53, 'MECH', 'P.C.MURUGAN', 'ASSISTANT PR', 'murugan.mech@kongu.ac.in', '9500968262'),
('KEC2665', 54, 'MECH', 'R.KAMALAKANNAN', 'ASSISTANT PR', 'saji.mech@kongu.ac.in', '9790432974'),
('KEC2667', 11, 'FT', 'K.MANONMANI', 'ASSISTANT PR', 'manonmani.ft@kongu.ac.in', '8754150995'),
('KEC2668', 21, 'CH', 'R.SATHISH RAAM', 'ASSISTANT PR', 'sathishraam.chem@kongu.ac.in', '9786535777'),
('KEC2669', 22, 'CH', 'P.MANJULA', 'ASSISTANT PR', 'manjula.chem@kongu.ac.in', '8508009696'),
('KEC2670', 25, 'MATHS', 'Dr.S.SURESHKUMAR', 'ASSISTANT PR', 'ssuresh.maths@kongu.ac.in', '9976583392'),
('KEC2671', 26, 'MATHS', 'S.INDRAKUMAR', 'ASSISTANT PR', 'indrakumar.maths@kongu.ac.in', '9994844066'),
('KEC2672', 17, 'CHY', 'Dr.P.KRISHNAMOORTHY', 'ASSISTANT PR', 'krishnamoorthy.sh@kongu.ac.in', '9894437560'),
('KEC2673', 16, 'ENG', 'S.KARTHICK', 'ASSISTANT PR', 'karthick.eng@kongu.ac.in', '9942512350'),
('KEC2674', 51, 'ECE', 'G.THIRUNAVUKKARASU', 'ASSISTANT PR', 'gthiru.ece@kongu.ac.in', '9489234282'),
('KEC2677', 56, 'MECH', 'M.MAHESH', 'ASSISTANT PR', 'mmahesh.mech@kongu.ac.in', '7598219212'),
('KEC2680', 6, 'CSE', 'Dr.N.SHANTHI', 'PROFESSOR', 'shanthi.cse@kongu.ac.in', '9842013355'),
('KEC2691', 12, 'FT', 'M.GOKILAM', 'ASSISTANT PR', 'gokilam.ft@kongu.ac.in', '9952791308'),
('KEC2695', 3, 'FT', 'Dr.V.SUDHAKAR', 'ASSOCIATE PR', 'sudhakarv.ft@kongu.ac.in', '9841635111');

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

CREATE TABLE `journal` (
  `journal_id` int(50) NOT NULL,
  `issn_online` varchar(10) NOT NULL,
  `issn_print` varchar(10) NOT NULL,
  `journal_name` varchar(250) NOT NULL,
  `publisher` varchar(250) NOT NULL,
  `journal_type` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `journal`
--

INSERT INTO `journal` (`journal_id`, `issn_online`, `issn_print`, `journal_name`, `publisher`, `journal_type`) VALUES
(1, '1935-0090', '23250399', 'applied science', 'nsp', 'o'),
(2, '456', '369', 'yyyy', 'science', 'm');

-- --------------------------------------------------------

--
-- Table structure for table `patent`
--

CREATE TABLE `patent` (
  `id` int(11) NOT NULL,
  `Application_no` int(20) NOT NULL,
  `DateofFiling` varchar(10) NOT NULL,
  `PatentAwarded` varchar(1) NOT NULL,
  `Status` varchar(7) NOT NULL,
  `InventionTitle` varchar(15) NOT NULL,
  `Commercialization` varchar(1) NOT NULL,
  `CollaborationWith` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patent`
--

INSERT INTO `patent` (`id`, `Application_no`, `DateofFiling`, `PatentAwarded`, `Status`, `InventionTitle`, `Commercialization`, `CollaborationWith`) VALUES
(1, 45565889, '2019-01-01', 'y', 'g', '', 'y', 'goi'),
(3, 2147483647, '2020-01-01', 'y', 'g', '', 'y', 'goi'),
(4, 5678, '2020-01-13', 'y', 'a', '', 'n', 'na');

-- --------------------------------------------------------

--
-- Table structure for table `patentnee_detail`
--

CREATE TABLE `patentnee_detail` (
  `id` int(11) NOT NULL,
  `Application_no` int(20) NOT NULL,
  `patentnee_id` varchar(10) NOT NULL,
  `patentnee_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patentnee_detail`
--

INSERT INTO `patentnee_detail` (`id`, `Application_no`, `patentnee_id`, `patentnee_name`) VALUES
(1, 2147483647, '17mcl053', 'mithun'),
(2, 2147483647, 'KEC1621', 'K.NANTHINI'),
(3, 5678, 'KEC1621', 'K.NANTHINI'),
(4, 5678, 'KEC1440', 'A.S.HARISHANKHER');

-- --------------------------------------------------------

--
-- Table structure for table `pub_journal`
--

CREATE TABLE `pub_journal` (
  `id` int(50) NOT NULL,
  `aid` varchar(5) NOT NULL,
  `journal_id` int(11) NOT NULL,
  `article_title` varchar(100) DEFAULT NULL,
  `issue_month` varchar(20) DEFAULT NULL,
  `issue_year` int(10) DEFAULT NULL,
  `doi` varchar(25) DEFAULT NULL,
  `volume_no` varchar(25) NOT NULL,
  `issue_no` varchar(15) NOT NULL,
  `pgno_from` int(10) NOT NULL,
  `pgno_to` int(10) NOT NULL,
  `issue_type` varchar(15) NOT NULL,
  `scopus` varchar(1) NOT NULL,
  `wos` varchar(1) NOT NULL,
  `ssci` varchar(3) NOT NULL,
  `sci` varchar(3) NOT NULL,
  `scie` varchar(3) NOT NULL,
  `ahci` varchar(3) NOT NULL,
  `esci` varchar(3) NOT NULL,
  `Article_type` varchar(20) NOT NULL,
  `ICI` varchar(1) NOT NULL DEFAULT 'n',
  `PubMed` varchar(1) NOT NULL DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pub_journal`
--

INSERT INTO `pub_journal` (`id`, `aid`, `journal_id`, `article_title`, `issue_month`, `issue_year`, `doi`, `volume_no`, `issue_no`, `pgno_from`, `pgno_to`, `issue_type`, `scopus`, `wos`, `ssci`, `sci`, `scie`, `ahci`, `esci`, `Article_type`, `ICI`, `PubMed`) VALUES
(1, 'J1', 1, 'face', 'feb', 2018, '3', '3', '6', 6, 14, 'reg', 'y', 'n', 'n', 'n', 'n', 'n', 'n', 'National', 'y', 'n'),
(2, 'J2', 2, 'bkjbibi', 'mar', 2018, '466767', '12', '4', 89, 98, 'reg', 'y', 'y', 'n', 'n', 'y', 'n', 'n', 'National', 'y', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `id` int(11) NOT NULL,
  `rf_id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `institution` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `DOB` varchar(10) NOT NULL,
  `university` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `research`
--

INSERT INTO `research` (`id`, `rf_id`, `name`, `designation`, `department`, `institution`, `gender`, `DOB`, `university`) VALUES
(1, 'R_1', 'adithya', 'JRF', 'CA', 'Kongu engineering college', 'male', '1-1-1990', 'Anna university');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` varchar(10) NOT NULL,
  `student_Name` varchar(50) NOT NULL,
  `department` varchar(10) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `mobile` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `student_Name`, `department`, `email_id`, `mobile`) VALUES
('17mcl053', 'mithun', 'CA', 'mithunmi97@outlook.com', 989);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v1`
-- (See below for the actual view)
--
CREATE TABLE `v1` (
`ename` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `v1`
--
DROP TABLE IF EXISTS `v1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v1`  AS  select `faculty`.`ename` AS `ename` from `faculty` union select `external`.`name` AS `name` from `external` union select `research`.`name` AS `name` from `research` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author_details`
--
ALTER TABLE `author_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`b_id`),
  ADD UNIQUE KEY `chid` (`id`);

--
-- Indexes for table `book_chapter`
--
ALTER TABLE `book_chapter`
  ADD KEY `b_id` (`b_id`);

--
-- Indexes for table `conference`
--
ALTER TABLE `conference`
  ADD PRIMARY KEY (`id`,`aid`);

--
-- Indexes for table `external`
--
ALTER TABLE `external`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journal`
--
ALTER TABLE `journal`
  ADD PRIMARY KEY (`journal_id`),
  ADD UNIQUE KEY `issn_online` (`issn_online`,`issn_print`);

--
-- Indexes for table `patent`
--
ALTER TABLE `patent`
  ADD PRIMARY KEY (`id`,`Application_no`);

--
-- Indexes for table `patentnee_detail`
--
ALTER TABLE `patentnee_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pub_journal`
--
ALTER TABLE `pub_journal`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `journal_id` (`journal_id`),
  ADD UNIQUE KEY `journal_id_2` (`journal_id`),
  ADD UNIQUE KEY `article_title` (`article_title`);

--
-- Indexes for table `research`
--
ALTER TABLE `research`
  ADD PRIMARY KEY (`id`,`rf_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author_details`
--
ALTER TABLE `author_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `conference`
--
ALTER TABLE `conference`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `external`
--
ALTER TABLE `external`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `journal`
--
ALTER TABLE `journal`
  MODIFY `journal_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patent`
--
ALTER TABLE `patent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patentnee_detail`
--
ALTER TABLE `patentnee_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pub_journal`
--
ALTER TABLE `pub_journal`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `research`
--
ALTER TABLE `research`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
