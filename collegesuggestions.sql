-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2020 at 03:23 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collegesuggestions`
--

-- --------------------------------------------------------

--
-- Table structure for table `collegesuggestions`
--

CREATE TABLE `collegesuggestions` (
  `name` text NOT NULL,
  `address` varchar(30) NOT NULL DEFAULT 'not available yet',
  `contact` text NOT NULL DEFAULT 'not available yet',
  `email` varchar(30) NOT NULL DEFAULT 'not available yet'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collegesuggestions`
--

INSERT INTO `collegesuggestions` (`name`, `address`, `contact`, `email`) VALUES
('orchid', 'jsaon', '9808326999', 'siwikhadka@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
