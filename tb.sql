-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2015 at 02:14 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myuser`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb`
--

CREATE TABLE IF NOT EXISTS `tb` (
  `seats` varchar(3) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb`
--

INSERT INTO `tb` (`seats`, `status`) VALUES
('A1', 1),
('A1', 1),
('A2', 1),
('A3', 1),
('B2', 1),
('C2', 1),
('C3', 1),
('C4', 1),
('A4', 1),
('A5', 0),
('B1', 1),
('B3', 1),
('B4', 0),
('B5', 0),
('B6', 0),
('C1', 0),
('C5', 0),
('C6', 0),
('D1', 0),
('D2', 0),
('D3', 0),
('D4', 1),
('D5', 1),
('D6', 1),
('E1', 0),
('E2', 0),
('E3', 0),
('E4', 0),
('E5', 0),
('E6', 0),
('', 0),
('', 0),
('', 0),
('', 0),
('', 0),
('', 0),
('', 0),
('', 0),
('', 0),
('', 0),
('', 0),
('', 0),
('', 0),
('', 0),
('', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
