-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 12, 2011 at 11:03 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fbconnect`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(50) NOT NULL,
  `cid` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `about_me` varchar(500) NOT NULL,
  `locaion_name` varchar(50) NOT NULL,
  `school_name` varchar(50) NOT NULL,
  `school_class_of` varchar(4) NOT NULL,
  `college_name` varchar(50) NOT NULL,
  `college_year` varchar(4) NOT NULL,
  `college_branch` varchar(10) NOT NULL,
  `work_employer` varchar(50) NOT NULL,
  PRIMARY KEY (`s_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`s_no`, `uid`, `cid`, `name`, `age`, `gender`, `dob`, `email`, `about_me`, `locaion_name`, `school_name`, `school_class_of`, `college_name`, `college_year`, `college_branch`, `work_employer`) VALUES
(1, 2147483647, 0, 'Anushka Verma', 19, '', '0000-00-00', 'aieeeguru.comments@gmail.com', 'undefined', '', '', '', '', '', '', ''),
(2, 2147483647, 0, 'Anushka Verma', 19, '', '0000-00-00', 'aieeeguru.comments@gmail.com', 'undefined', '', '', '', '', '', '', ''),
(3, 2147483647, 0, 'Anushka Verma', 19, '', '0000-00-00', 'aieeeguru.comments@gmail.com', 'undefined', '', '', '', '', '', '', ''),
(4, 2147483647, 0, 'Anushka Verma', 19, '', '0000-00-00', 'aieeeguru.comments@gmail.com', 'undefined', '', '', '', '', '', '', ''),
(5, 2147483647, 0, 'Anushka Verma', 19, '', '0000-00-00', 'aieeeguru.comments@gmail.com', 'undefined', '', '', '', '', '', '', ''),
(6, 2147483647, 0, 'Anushka Verma', 19, '', '0000-00-00', 'aieeeguru.comments@gmail.com', 'undefined', '', '', '', '', '', '', ''),
(7, 2147483647, 0, 'Anushka Verma', 19, '', '0000-00-00', 'aieeeguru.comments@gmail.com', 'undefined', '', '', '', '', '', '', ''),
(8, 2147483647, 0, 'Anushka Verma', 19, '', '0000-00-00', 'aieeeguru.comments@gmail.com', 'undefined', '', '', '', '', '', '', ''),
(9, 2147483647, 0, 'Anushka Verma', 19, '', '0000-00-00', 'aieeeguru.comments@gmail.com', 'undefined', '', '', '', '', '', '', ''),
(10, 2147483647, 0, 'Anushka Verma', 19, '', '0000-00-00', 'aieeeguru.comments@gmail.com', 'undefined', '', '', '', '', '', '', ''),
(11, 2147483647, 0, 'Anushka Verma', 19, '', '0000-00-00', 'aieeeguru.comments@gmail.com', 'undefined', '', '', '', '', '', '', ''),
(12, 2147483647, 0, 'Anushka Verma', 19, '', '0000-00-00', 'aieeeguru.comments@gmail.com', 'undefined', '', '', '', '', '', '', ''),
(13, 2147483647, 0, 'Anushka Verma', 19, '', '0000-00-00', 'aieeeguru.comments@gmail.com', 'undefined', '', '', '', '', '', '', ''),
(14, 2147483647, 0, 'Anushka Verma', 19, '', '0000-00-00', 'aieeeguru.comments@gmail.com', 'undefined', '', '', '', '', '', '', ''),
(15, 2147483647, 0, 'Anushka Verma', 19, '', '0000-00-00', 'aieeeguru.comments@gmail.com', 'undefined', '', '', '', '', '', '', ''),
(16, 2147483647, 0, 'Anushka Verma', 19, '', '0000-00-00', 'aieeeguru.comments@gmail.com', 'undefined', '', '', '', '', '', '', ''),
(17, 2147483647, 0, 'Anushka Verma', 19, '', '0000-00-00', 'aieeeguru.comments@gmail.com', 'undefined', '', '', '', '', '', '', ''),
(18, 2147483647, 0, 'Anushka Verma', 19, '', '0000-00-00', 'aieeeguru.comments@gmail.com', 'undefined', '', '', '', '', '', '', ''),
(19, 0, 0, 'Anushka Verma', 19, '', '0000-00-00', 'aieeeguru.comments@gmail.com', 'undefinedFacebookToken=100002789874538', '', '', '', '', '', '', ''),
(20, 1206766919, 0, 'Ujjwal Arora', 19, '', '0000-00-00', 'ujjwalarora1992@yahoo.co.in', 'undefined', '', '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
