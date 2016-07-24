-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2016 at 10:50 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_data`
--

CREATE TABLE `admin_data` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_role` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_data`
--

INSERT INTO `admin_data` (`id`, `name`, `email`, `username`, `password`, `user_role`) VALUES
(1, 'Shahi Mirza Sokal', 'shahi@yahoo.com', 'admin', 'admin123', 1),
(2, 'Ronok Ara khan', 'ronok@gmail.com', 'admin1234', 'admin1234', 1);

-- --------------------------------------------------------

--
-- Table structure for table `booklist`
--

CREATE TABLE `booklist` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `Author` text NOT NULL,
  `ISBN` varchar(50) NOT NULL,
  `Edition` varchar(20) NOT NULL,
  `dept` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booklist`
--

INSERT INTO `booklist` (`id`, `name`, `Author`, `ISBN`, `Edition`, `dept`) VALUES
(1, 'computer Fundamentals', 'Stifen and Robert', 'sp-1235', '2th', 'CSE'),
(2, 'computer Networking', 'Rose and Kite', 'sp-105', '4th', 'CSE'),
(3, 'Digital Logic Design', 'Lepart and Richard', 'sp-106', '5th', 'EEE'),
(4, 'Mathematics for Modern Science', 'Stifen Fethe and Losen Ruth', 'sm-258', '3rd', 'CSE'),
(7, 'Database management System', 'Korth and Milton', 'CS-1258', '5th', 'CSE'),
(8, '', '', '', '', ''),
(9, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `borrowers`
--

CREATE TABLE `borrowers` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `date_of_taken` date NOT NULL,
  `isbn` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrowers`
--

INSERT INTO `borrowers` (`id`, `username`, `date_of_taken`, `isbn`) VALUES
(1, 'tariqul', '2016-02-10', 'sp-1235'),
(6, 'ariful', '2016-03-24', 'sp-105'),
(7, 'Asif007', '2016-03-24', 'CS-1258');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `notice` text NOT NULL,
  `date_of_publish` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `title`, `notice`, `date_of_publish`) VALUES
(2, 'Collects Your Library Card', 'All new students and teachers please register with online and collect your registration card from library. without library card you can''t borrow any books\r\n', '2016-03-07'),
(3, 'Collects Your Library Card', 'All new students and teachers please register with online and collect your registration card from library. without library card you can''t borrow any books\n', '2016-03-07');

-- --------------------------------------------------------

--
-- Table structure for table `pdfbooks`
--

CREATE TABLE `pdfbooks` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img_path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pdfbooks`
--

INSERT INTO `pdfbooks` (`id`, `name`, `img_path`) VALUES
(1, 'Dot Net professional', 'image/dotnet tutorial for beginners.pdf'),
(2, 'Oracle 10g', 'image/Oracle 10g - SQL PDF.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `st_id` int(11) NOT NULL,
  `dept` varchar(25) NOT NULL,
  `session` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_role` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `st_id`, `dept`, `session`, `email`, `username`, `password`, `user_role`) VALUES
(10, 'Ariful Islam Khan', 123456, 'CSE', 2016, 'ariful@gmail.com', 'ariful', '123456', 2),
(11, 'Shaidur Rahman', 2147483647, 'EEE', 2015, 'shaidur@gmail.com', 'Shaidur', '123456', 2),
(12, 'Tariqul islam', 2147483647, 'English', 2014, 'tariqul@gmail.com', 'tariqul', '123456', 2),
(15, 'Monir Khan', 120345698, 'English', 2014, 'Monir@gmail.com', 'monir', '123456', 2);

-- --------------------------------------------------------

--
-- Table structure for table `st_notices`
--

CREATE TABLE `st_notices` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `date_of_publish` date NOT NULL,
  `notice` text NOT NULL,
  `fine` int(11) NOT NULL,
  `last_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `st_notices`
--

INSERT INTO `st_notices` (`id`, `title`, `date_of_publish`, `notice`, `fine`, `last_date`) VALUES
(10, 'Return data expired', '2016-03-06', 'Your borrowed book return date has over. Please return your book. from today fine will be counted.', 0, '2016-03-07'),
(0, 'Book Borrowing date expired er gwrerrsgfsd', '2016-03-19', 'Your borrowed book return date has over. Please return your book. from today fine will be counted.', 0, '2016-03-06'),
(10, 'Book Borrowing date expired', '2016-03-24', 'Book returns time almost expeirdBook returns time almost expeirdBook returns time almost expeird', 25, '2016-03-25'),
(12, '100 New books has added in our library', '2016-03-24', 'Md. Tariqul, Book returns time almost expeirdBook returns time almost expeirdBook returns time almost expeird', 25, '2016-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `te_notice`
--

CREATE TABLE `te_notice` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `date_of_publish` date NOT NULL,
  `notice` text NOT NULL,
  `fine` int(11) NOT NULL,
  `last_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `te_notice`
--

INSERT INTO `te_notice` (`id`, `title`, `date_of_publish`, `notice`, `fine`, `last_date`) VALUES
(2, 'Return Books', '2016-03-06', 'Your borrowed book return date has over. Please return your book. from today fine will be counted', 250, '2016-03-07'),
(2, '100 New books has added in our library', '2016-03-19', ' New books has added in our library New books has added in our library New books has added in our library New books has added in our library', 0, '2016-03-20'),
(2, '100 New books has added in our library', '2016-03-19', ' New books has added in our library New books has added in our library New books has added in our library New books has added in our library', 0, '2016-03-20'),
(2, '100 New books has added in our library', '2016-03-19', ' New books has added in our library New books has added in our library New books has added in our library New books has added in our library', 0, '2016-03-20'),
(1, 'Return Books', '2016-03-24', 'Md. Asif007 Book returns time almost expeirdBook returns time almost expeirdBook returns time almost expeird', 25, '2016-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `te_registration`
--

CREATE TABLE `te_registration` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_role` int(11) NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `te_registration`
--

INSERT INTO `te_registration` (`id`, `name`, `designation`, `dept`, `email`, `username`, `password`, `user_role`) VALUES
(1, 'Asif Muhammad Yusuf', 'Lecturer', 'CSE', 'Asif@yahoo.com', 'Asif007', '123456', 3),
(2, 'Hasibur Rahamn Hasib', 'Assistant Professor', 'EEE', 'hasib@yahoo.com', 'hasib123', '123456', 3),
(3, 'Asif Muhammad', 'Lecturer', 'EEE', 'Asif@yahoo.com', 'Asif420', '123456', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_data`
--
ALTER TABLE `admin_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booklist`
--
ALTER TABLE `booklist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borrowers`
--
ALTER TABLE `borrowers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdfbooks`
--
ALTER TABLE `pdfbooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `te_registration`
--
ALTER TABLE `te_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_data`
--
ALTER TABLE `admin_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `booklist`
--
ALTER TABLE `booklist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `borrowers`
--
ALTER TABLE `borrowers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pdfbooks`
--
ALTER TABLE `pdfbooks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `te_registration`
--
ALTER TABLE `te_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
