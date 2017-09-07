-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2014 at 10:14 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ecell_db`
--
CREATE DATABASE IF NOT EXISTS `ecell_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ecell_db`;

-- --------------------------------------------------------

--
-- Table structure for table `announce`
--

CREATE TABLE IF NOT EXISTS `announce` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `content` varchar(500) NOT NULL,
  `date` varchar(20) NOT NULL,
  `display` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `announce`
--

INSERT INTO `announce` (`id`, `name`, `content`, `date`, `display`) VALUES
(1, 'akshay', 'hiFill content here.', 'ewncf', 'yes'),
(2, 'akshay', 'hiFill content here.', 'ewncf', 'yes'),
(3, 'iurhfrej1', 'Fill content here.kjrvnrekjvnerv\r\nreej ne ekl e\r\nverver erver', 'oer', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(25) NOT NULL,
  `description` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `file` varchar(20) NOT NULL,
  `display` varchar(3) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `description`, `year`, `file`, `display`) VALUES
(9, 'Halla Bol', 'Akshay Jain works hard now!', 2012, '010.jpg', 'yes'),
(10, 'What a bad idea sirjee', 'Tune jo na kaha mai woh sunta raha..\r\nKhamaka bevajah khwaab bunta raha', 2014, '007.jpg', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE IF NOT EXISTS `stories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `story` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`id`, `name`, `story`) VALUES
(1, 'Akshay Jain from nowhere', 'Hello ecell is good this year\r\n   Some of them work really hard. I''m not one of them though. i wish i could be. but m lazy. this is a fact~');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
