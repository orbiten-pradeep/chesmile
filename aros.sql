-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2017 at 08:06 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chesmile`
--

-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(11) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lft` (`lft`,`rght`),
  KEY `alias` (`alias`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Groups', 1, NULL, 1, 76),
(2, 1, 'Users', 1, NULL, 2, 3),
(3, NULL, 'Groups', 2, NULL, 77, 80),
(4, 3, 'Users', 2, NULL, 78, 79),
(6, NULL, 'Groups', 4, NULL, 81, 84),
(7, 6, 'Users', 3, NULL, 82, 83),
(8, 1, 'Users', 4, NULL, 4, 5),
(9, 1, 'Users', 5, NULL, 6, 7),
(10, 1, 'Users', 6, NULL, 8, 9),
(11, 1, 'Users', 7, NULL, 10, 11),
(12, 1, 'Users', 8, NULL, 12, 13),
(13, 1, 'Users', 9, NULL, 14, 15),
(14, 1, 'Users', 10, NULL, 16, 17),
(15, 1, 'Users', 11, NULL, 18, 19),
(16, 1, 'Users', 12, NULL, 20, 21),
(17, 1, 'Users', 13, NULL, 22, 23),
(18, 1, 'Users', 14, NULL, 24, 25),
(19, 1, 'Users', 15, NULL, 26, 27),
(20, 1, 'Users', 16, NULL, 28, 29),
(21, 1, 'Users', 17, NULL, 30, 31),
(22, 1, 'Users', 18, NULL, 32, 33),
(23, 1, 'Users', 19, NULL, 34, 35),
(24, 1, 'Users', 20, NULL, 36, 37),
(25, 1, 'Users', 21, NULL, 38, 39),
(26, 1, 'Users', 22, NULL, 40, 41),
(27, 1, 'Users', 24, NULL, 42, 43),
(28, 1, 'Users', 25, NULL, 44, 45),
(29, 1, 'Users', 26, NULL, 46, 47),
(30, 1, 'Users', 27, NULL, 48, 49),
(31, 1, 'Users', 28, NULL, 50, 51),
(32, 1, 'Users', 29, NULL, 52, 53),
(33, 1, 'Users', 30, NULL, 54, 55),
(34, 1, 'Users', 31, NULL, 56, 57),
(35, 1, 'Users', 32, NULL, 58, 59),
(36, 1, 'Users', 33, NULL, 60, 61),
(37, 1, 'Users', 34, NULL, 62, 63),
(38, 1, 'Users', 35, NULL, 64, 65),
(39, 1, 'Users', 36, NULL, 66, 67),
(40, 1, 'Users', 37, NULL, 68, 69),
(41, 1, 'Users', 38, NULL, 70, 71),
(42, 1, 'Users', 39, NULL, 72, 73),
(43, 1, 'Users', 40, NULL, 74, 75);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
