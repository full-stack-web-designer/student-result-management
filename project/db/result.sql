-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2019 at 07:47 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `result`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `fid` varchar(15) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `dept` varchar(3) NOT NULL,
  `mob` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fid`, `fname`, `dept`, `mob`, `email`) VALUES
('fdgfdg', 'fdgfgsgfd', 'CSE', 'sfgdf', 'dsfgdfg'),
('fdgfdg', 'fdgfgsgfd', 'CSE', 'sfgdf', 'dsfgdfg'),
('gsdfgfd', 'sdfgsdfgdf', 'CSE', '23423', 'dsgfdhgfh'),
('0187cs171133', 'sandeep patel', 'CSE', '9516161756', 'sandeeppatel245570@gmail.com'),
('0187cs171133', 'sandeep patel', 'CSE', '9516161756', 'sandeeppatel245570@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `enroll` varchar(12) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `branch` varchar(3) NOT NULL,
  `sem` varchar(1) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `fnames` varchar(50) NOT NULL,
  `addr` varchar(200) NOT NULL,
  `mobs` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`enroll`, `sname`, `branch`, `sem`, `gender`, `dob`, `fnames`, `addr`, `mobs`, `email`, `pass`) VALUES
('0187cs171133', 'sandeep patel', 'CSE', '5', 'm', '09/07/1998', 'kamalchand patel', 'rampura m.p', '9752925776', 'sandeeppatel245570@gmail.com', '1234'),
('0187cs171133', 'raj sahu', 'CSE', '5', 'm', '12/11/1997', 'premchand sahu', 'prayagraj u.p', '9752925776', 'sandeeppatel245570@gmail.com', 'rajaji'),
('0187cs171133', 'durgesh patel', 'CSE', '5', 'm', '20/03/1998', 'amarjit patel', 'prayagraj u.p', '9752925776', 'sandeeppatel245570@gmail.com', 'durgesh');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
