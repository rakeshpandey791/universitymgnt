-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2014 at 10:45 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `university_mgnt`
--

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE IF NOT EXISTS `program` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `university` varchar(20) NOT NULL,
  `program_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `university`, `program_name`) VALUES
(1, 'KSOU', 'Bachlor Degree'),
(2, 'KSOU', 'Master Degree');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE IF NOT EXISTS `session` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `session_from` varchar(20) NOT NULL,
  `session_to` varchar(20) NOT NULL,
  `year` varchar(4) NOT NULL,
  `session` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `session_from`, `session_to`, `year`, `session`) VALUES
(3, 'January', 'june', '2015', 'January-june-2015'),
(8, 'January', 'june', '2014', 'January-june-2014'),
(9, 'July', 'December', '2015', 'July-December-2015');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE IF NOT EXISTS `university` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `university_name` varchar(200) NOT NULL,
  `university_code` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`id`, `university_name`, `university_code`) VALUES
(4, 'Karnatka State Open University', 'KSOU'),
(5, 'Rajiv ghandhi Technical University', 'RGTU');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
