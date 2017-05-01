-- phpMyAdmin SQL Dump
-- version 4.6.4deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 02, 2017 at 04:20 AM
-- Server version: 5.7.18-0ubuntu0.16.10.1
-- PHP Version: 7.0.15-0ubuntu0.16.10.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Google`
--

-- --------------------------------------------------------

--
-- Table structure for table `Account`
--

CREATE TABLE `Account` (
  `Name` varchar(48) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `Username` varchar(24) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `Password` varchar(8) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `DOB` varchar(14) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `Gender` varchar(6) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `Phone` varchar(24) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `CEmail` varchar(30) NOT NULL,
  `Location` varchar(30) CHARACTER SET ascii COLLATE ascii_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Account`
--

INSERT INTO `Account` (`Name`, `Username`, `Password`, `DOB`, `Gender`, `Phone`, `CEmail`, `Location`) VALUES
('Muhammad Ali', 'mughalb9291', '12345', '01-01-2015', 'MALE', '1234567', 'mughalb9291@gmail.com', 'PK'),
('Prince Mughal', 'princeb92', '12345', '28-04-2016', 'MALE', '1234567', 'mughalb9291@gmail.com', 'PK');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
