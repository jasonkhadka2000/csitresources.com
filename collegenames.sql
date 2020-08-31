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
-- Database: `collegenames`
--

-- --------------------------------------------------------

--
-- Table structure for table `collegenames`
--

CREATE TABLE `collegenames` (
  `name` text NOT NULL,
  `address` varchar(30) NOT NULL DEFAULT 'not available yet',
  `contact` text NOT NULL DEFAULT 'not available yet',
  `email` varchar(30) NOT NULL DEFAULT 'not available yet'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collegenames`
--

INSERT INTO `collegenames` (`name`, `address`, `contact`, `email`) VALUES
('orchid', 'baneshwar', '9808326999', 'nepalgrl_raksha@yahoo.com'),
('asd', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
