-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2018 at 05:19 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `reg`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg_table`
--

CREATE TABLE IF NOT EXISTS `reg_table` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `skills` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `zip` int(20) NOT NULL,
  `cv` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `reg_table`
--

INSERT INTO `reg_table` (`ID`, `fname`, `lname`, `mail`, `gender`, `dob`, `skills`, `address`, `zip`, `cv`) VALUES
(1, 'Rupali', 'Chaughule', 'roop4894@gmail.com', 'female', '1994-08-04T20:00', 'HTML,CSS,PHP', 'Bhiwandi\r\nThane', 421302, '5steps.pdf'),
(2, 'Rupali', 'Chaughule', 'roop4894@gmail.com', 'female', '1994-08-04T20:00', 'HTML,CSS,PHP', 'Bhiwandi\r\nThane', 421302, '5steps.pdf'),
(3, 'bhargavi', 'Rane', 'bha@gmail.com', 'female', '1997-08-04T16:00', 'html,css', 'Thane', 421302, 'my edit.php'),
(4, 'Harsh', 'Patil', 'harsh@gmail.com', 'male', '2000-11-05T13:00', 'HTML,CSS,PHP', 'Pune', 456333, 'registration.sql'),
(5, 'arya', 'Manas', 'arya@gmail.com', 'female', '1998-05-08T02:03', 'HTML', 'Nagpur', 421302, 'practice.php'),
(6, 'Pooja', 'Verma', 'pooja@gmail.com', 'female', '1994-04-02T16:00', 'HTML,CSS,PHP', 'Airoli', 421302, '3.jpg'),
(7, 'Poonam', 'Konde', 'poonam@gmail.com', 'female', '1994-02-04T15:00', 'HTML,CSS,PHP', 'Nerul', 436455, '4.jpg'),
(8, 'Supreeta', 'Desai', 'sup@gmail.com', 'female', '1994-02-03T04:03', 'HTML', 'Thane', 421302, 'head.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
