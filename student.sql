-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2020 at 07:32 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `tiwariadmin`
--

CREATE TABLE `tiwariadmin` (
  `id` int(225) NOT NULL,
  `user` varchar(225) NOT NULL,
  `pass` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tiwariadmin`
--

INSERT INTO `tiwariadmin` (`id`, `user`, `pass`) VALUES
(1, 'tiwari', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tiwaristudent`
--

CREATE TABLE `tiwaristudent` (
  `1` int(225) NOT NULL,
  `user` varchar(225) NOT NULL,
  `pass` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `roll_no` varchar(225) NOT NULL,
  `mail_id` varchar(225) NOT NULL,
  `dept` varchar(225) NOT NULL,
  `father` varchar(225) NOT NULL,
  `mobile_no` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tiwaristudent`
--

INSERT INTO `tiwaristudent` (`1`, `user`, `pass`, `name`, `roll_no`, `mail_id`, `dept`, `father`, `mobile_no`) VALUES
(1, 'SHIVANGI ', 'TIWARI', 'SHIVANGI TIWARI', '40', 'shiv@gmail.com', 'cs', 'Mukesh Tiwari', 9934),
(2, 'RICHIN', 'TIWARI', 'RICHIN TIWARI', '41', 'ric@gmail.com', 'cs', 'Mukesh Tiwari', 3456),
(3, '', '', '', '', '', '', '', 0),
(4, '', '', '', '', '', '', '', 0),
(5, '', '', '', '', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tiwariadmin`
--
ALTER TABLE `tiwariadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiwaristudent`
--
ALTER TABLE `tiwaristudent`
  ADD PRIMARY KEY (`1`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tiwariadmin`
--
ALTER TABLE `tiwariadmin`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tiwaristudent`
--
ALTER TABLE `tiwaristudent`
  MODIFY `1` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
