-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2016 at 02:30 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `iot_bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `rail_fault`
--

CREATE TABLE IF NOT EXISTS `rail_fault` (
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sensorNo` varchar(200) NOT NULL,
  `latitude` varchar(200) NOT NULL,
  `longitude` varchar(200) NOT NULL,
  PRIMARY KEY (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rail_fault`
--

INSERT INTO `rail_fault` (`timestamp`, `sensorNo`, `latitude`, `longitude`) VALUES
('2016-05-29 11:12:45', '1', '23.7957361', '90.3986111'),
('2016-05-29 11:34:45', '2', '23.8521777', '90.4060588'),
('2016-05-29 12:00:52', '3', '22.4600282', '91.9688115'),
('2016-05-29 12:30:05', '4', '22.3341216', '91.8279685');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
