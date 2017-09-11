-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2017 at 09:19 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE `sms` (
  `idno` varchar(10) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `course` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms`
--

INSERT INTO `sms` (`idno`, `lname`, `fname`, `mname`, `sex`, `course`) VALUES
('15-037-075', 'Ancheta', 'Christian', 'Pogi', 'male', 'BSIT'),
('12-342-534', 'Cruz', 'Marie', 'Santos', 'female', 'BSIS'),
('1010101', 'new', 'student', 'name', 'male', 'BSIT'),
('12-98', 'ito', 'yung', 'nabago', 'Female', 'BSIT'),
('bes', 'asas', 'bes', 'bes', 'Male', 'BSIT');

-- --------------------------------------------------------

--
-- Table structure for table `sms_courses`
--

CREATE TABLE `sms_courses` (
  `crs_code` varchar(3) NOT NULL,
  `crs_desc` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_courses`
--

INSERT INTO `sms_courses` (`crs_code`, `crs_desc`) VALUES
('074', 'BSIS'),
('075', 'BSIT'),
('076', 'BSCS'),
('098', 'BAM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sms`
--
ALTER TABLE `sms`
  ADD PRIMARY KEY (`idno`);

--
-- Indexes for table `sms_courses`
--
ALTER TABLE `sms_courses`
  ADD PRIMARY KEY (`crs_code`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
