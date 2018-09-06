-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 02, 2014 at 10:05 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `uses`
--

CREATE TABLE IF NOT EXISTS `uses` (
  `userName` varchar(30) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `city` varchar(20) NOT NULL,
  UNIQUE KEY `email` (`email`),
  KEY `userName` (`Password`,`email`,`mobile_no`,`city`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uses`
--

INSERT INTO `uses` (`userName`, `Password`, `email`, `mobile_no`, `city`) VALUES
('prashant', 'asdf', 'abc@mfk.com', 2147483647, 'mumbai'),
('abc', 'abc', 'abc@xyz.com', 1234567890, 'qwerty'),
('nishant', '12345', 'xyz@gmail.com', 2147483647, 'mumbai');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
