-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2017 at 10:31 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parking`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `phno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fname`, `lname`, `email`, `phno`) VALUES
('md', 'nbjk', 'bfwb ', 0),
('md', 'nbjk', 'bfwb ', 0),
('md', 'nbjk', 'bfwb ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `park`
--

CREATE TABLE `park` (
  `pid` int(11) NOT NULL,
  `oname` varchar(50) NOT NULL,
  `vehno` int(4) NOT NULL,
  `place` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `timein` time NOT NULL,
  `timeout` time NOT NULL,
  `date` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `park`
--

INSERT INTO `park` (`pid`, `oname`, `vehno`, `place`, `type`, `timein`, `timeout`, `date`) VALUES
(1, 'jjglnv', 2548, 'jugik', 'kgkbk', '00:00:05', '00:00:09', '0004-12-10'),
(2, 'Yadnesh Sapkale', 4524, 'Udaipur Palace', 'Two-Wheeler', '12:30:00', '02:39:00', '0000-00-00'),
(3, 'Abhay', 3212, 'Jaipur', 'FourWhelr', '12:30:00', '00:00:06', '0000-00-00'),
(8, 'dnvkesl', 1354, 'ankfn', 'avdkln', '12:30:00', '00:00:09', '4/12/10'),
(12, 'Akshata', 2584, 'City Palace', 'Four Wheeler', '00:00:12', '00:00:03', '3/12/2017');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `username` varchar(15) NOT NULL,
  `passwd` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`username`, `passwd`) VALUES
('shbchf', 'c77da771ed'),
('Abhay ', 'c711a0b810'),
('Rajat', '827ccb0eea'),
('', 'd41d8cd98f'),
('', 'd41d8cd98f'),
('Abhay ', 'e164c34485');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `park`
--
ALTER TABLE `park`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `park`
--
ALTER TABLE `park`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
