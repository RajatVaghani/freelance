-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2017 at 06:49 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `alchemist`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `type`) VALUES
(1, 'superadmin', 'superadmin@gmail.com', 'abcde123', 1),
(2, 'admin', 'admin@gmail.com', 'abcde', 0);

-- --------------------------------------------------------

--
-- Table structure for table `complains_accident`
--

CREATE TABLE IF NOT EXISTS `complains_accident` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `condition` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `long` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `comment` longtext NOT NULL,
  `date` varchar(255) NOT NULL,
  `month` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `complains_fire`
--

CREATE TABLE IF NOT EXISTS `complains_fire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `condition` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `long` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `comment` longtext NOT NULL,
  `date` varchar(255) NOT NULL,
  `month` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `complains_fire`
--

INSERT INTO `complains_fire` (`id`, `user_id`, `type`, `condition`, `lat`, `long`, `photo`, `status`, `comment`, `date`, `month`, `day`) VALUES
(1, '1', 'APP', '', '', '', '', '', '', '', 2, 2),
(2, '1', 'APP', '', '', '', '', '', '', '', 2, 2),
(3, '1', 'APP', '', '', '', '', '', '', '', 2, 2),
(4, '1', 'APP', '', '', '', '', '', '', '', 2, 3),
(5, '1', 'APP', '', '', '', '', '', '', '', 2, 4),
(6, '1', 'APP', '', '', '', '', '', '', '', 2, 5),
(7, '1', 'PHONE', '', '', '', '', '', '', '', 2, 5),
(8, '1', 'PHONE', '', '', '', '', '', '', '', 2, 5),
(9, '1', 'PHONE', '', '', '', '', '', '', '', 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `complains_robbery`
--

CREATE TABLE IF NOT EXISTS `complains_robbery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `condition` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `long` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `comment` longtext NOT NULL,
  `date` varchar(255) NOT NULL,
  `month` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `date` (`date`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `complains_robbery`
--

INSERT INTO `complains_robbery` (`id`, `user_id`, `type`, `condition`, `lat`, `long`, `photo`, `status`, `comment`, `date`, `month`, `day`) VALUES
(1, '1', 'APP', 'Minor', '123', '456', 'na', 'new', '', '03/22/2017 14:54:01', 3, 22),
(2, '2', 'APP', 'Major', '456', '789', 'na', 'new', '', '03/24/2017 12:54:01', 3, 24),
(3, '1', 'PHONE', 'Major', '123', '789', 'na', 'new', '', '03/25/2017 19:54:01', 3, 25),
(4, '1', 'APP', 'minor', '111', '1', 'uploads/3.png', 'NEW', 'none', '03/25/2017 09:54:01', 3, 25),
(7, '1', 'APP', 'minor', '111', '1', 'uploads/3.png', 'NEW', 'none', '03/25/2017 11:54:01', 3, 25);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `username`, `password`, `phone`) VALUES
(1, 'rajat', 'rajat', '12345', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
