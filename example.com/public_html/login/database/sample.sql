-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 08, 2017 at 04:14 PM
-- Server version: 5.5.54-0ubuntu0.14.04.1
-- PHP Version: 5.6.30-5+deb.sury.org~trusty+2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `password`) VALUES
(28, 'pankaj', 'pankaj123');

-- --------------------------------------------------------

--
-- Table structure for table `mydata`
--

CREATE TABLE IF NOT EXISTS `mydata` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `mydata`
--

INSERT INTO `mydata` (`id`, `name`, `salary`, `phone`, `email`) VALUES
(14, 'pankaj malhotra', '213', '12345691', 'abc@ttn.com'),
(16, 'p', '215', '12345693', 'abc@ttn.com'),
(17, 'q', '216', '12345694', 'abc@ttn.com'),
(18, 'r', '217', '12345695', 'abc@ttn.com'),
(19, 's', '218', '12345696', 'abc@ttn.com'),
(21, 'u', '220', '12345698', 'abc@ttn.com'),
(22, 'v', '221', '12345699', 'abc@ttn.com'),
(23, 'x', '222', '12345700', 'abc@ttn.com'),
(24, 'y', '223', '12345701', 'abc@ttn.com'),
(25, 'z', '224', '12345702', 'abc@ttn.com'),
(26, 'aa', '225', '12345703', 'abc@ttn.com'),
(27, 'bb', '226', '12345704', 'abc@ttn.com'),
(28, 'cc', '227', '12345705', 'abc@ttn.com'),
(29, 'dd', '228', '12345706', 'abc@ttn.com'),
(30, 'ee', '229', '12345707', 'abc@ttn.com'),
(31, 'ff', '230', '12345708', 'abc@ttn.com'),
(32, 'gg', '231', '12345709', 'abc@ttn.com'),
(33, 'hh', '232', '12345710', 'abc@ttn.com'),
(34, 'ii', '233', '12345711', 'abc@ttn.com'),
(35, 'jj', '234', '12345712', 'abc@ttn.com'),
(36, 'kk', '235', '12345713', 'abc@ttn.com'),
(37, 'll', '236', '12345714', 'abc@ttn.com'),
(38, 'mm', '237', '12345715', 'abc@ttn.com'),
(39, 'nn', '238', '12345716', 'abc@ttn.com'),
(40, 'oo', '239', '12345717', 'abc@ttn.com'),
(41, 'pp', '240', '12345718', 'abc@ttn.com'),
(42, 'qq', '241', '12345719', 'abc@ttn.com'),
(43, 'rr', '242', '12345720', 'abc@ttn.com'),
(44, 'ss', '243', '12345721', 'abc@ttn.com'),
(45, 'tt', '244', '12345722', 'abc@ttn.com'),
(46, 'uu', '245', '12345723', 'abc@ttn.com'),
(47, 'vv', '246', '12345724', 'abc@ttn.com'),
(48, 'xx', '247', '12345725', 'abc@ttn.com'),
(49, 'yy', '248', '12345726', 'abc@ttn.com'),
(50, 'zz', '249', '12345727', 'abc@ttn.com');

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE IF NOT EXISTS `table1` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
