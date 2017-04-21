-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2017 at 01:28 PM
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=88 ;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(49, 1, 'Users', 46, NULL, 80, 81),
(48, 1, 'Users', 45, NULL, 78, 79),
(47, 1, 'Users', 44, NULL, 76, 77),
(43, 1, 'Users', 40, NULL, 74, 75),
(42, 1, 'Users', 39, NULL, 72, 73),
(41, 1, 'Users', 38, NULL, 70, 71),
(40, 1, 'Users', 37, NULL, 68, 69),
(39, 1, 'Users', 36, NULL, 66, 67),
(38, 1, 'Users', 35, NULL, 64, 65),
(37, 1, 'Users', 34, NULL, 62, 63),
(36, 1, 'Users', 33, NULL, 60, 61),
(35, 1, 'Users', 32, NULL, 58, 59),
(34, 1, 'Users', 31, NULL, 56, 57),
(33, 1, 'Users', 30, NULL, 54, 55),
(32, 1, 'Users', 29, NULL, 52, 53),
(31, 1, 'Users', 28, NULL, 50, 51),
(30, 1, 'Users', 27, NULL, 48, 49),
(29, 1, 'Users', 26, NULL, 46, 47),
(28, 1, 'Users', 25, NULL, 44, 45),
(27, 1, 'Users', 24, NULL, 42, 43),
(26, 1, 'Users', 22, NULL, 40, 41),
(25, 1, 'Users', 21, NULL, 38, 39),
(24, 1, 'Users', 20, NULL, 36, 37),
(23, 1, 'Users', 19, NULL, 34, 35),
(22, 1, 'Users', 18, NULL, 32, 33),
(21, 1, 'Users', 17, NULL, 30, 31),
(20, 1, 'Users', 16, NULL, 28, 29),
(19, 1, 'Users', 15, NULL, 26, 27),
(18, 1, 'Users', 14, NULL, 24, 25),
(17, 1, 'Users', 13, NULL, 22, 23),
(16, 1, 'Users', 12, NULL, 20, 21),
(15, 1, 'Users', 11, NULL, 18, 19),
(14, 1, 'Users', 10, NULL, 16, 17),
(13, 1, 'Users', 9, NULL, 14, 15),
(12, 1, 'Users', 8, NULL, 12, 13),
(11, 1, 'Users', 7, NULL, 10, 11),
(10, 1, 'Users', 6, NULL, 8, 9),
(9, 1, 'Users', 5, NULL, 6, 7),
(8, 1, 'Users', 4, NULL, 4, 5),
(7, 6, 'Users', 3, NULL, 164, 165),
(6, NULL, 'Groups', 4, NULL, 163, 166),
(4, 3, 'Users', 2, NULL, 160, 161),
(3, NULL, 'Groups', 2, NULL, 159, 162),
(2, 1, 'Users', 1, NULL, 2, 3),
(1, NULL, 'Groups', 1, NULL, 1, 158),
(50, 1, 'Users', 47, NULL, 82, 83),
(51, 1, 'Users', 48, NULL, 84, 85),
(52, 1, 'Users', 49, NULL, 86, 87),
(53, 1, 'Users', 50, NULL, 88, 89),
(54, 1, 'Users', 51, NULL, 90, 91),
(55, 1, 'Users', 52, NULL, 92, 93),
(56, 1, 'Users', 53, NULL, 94, 95),
(57, 1, 'Users', 54, NULL, 96, 97),
(58, 1, 'Users', 55, NULL, 98, 99),
(59, 1, 'Users', 56, NULL, 100, 101),
(60, 1, 'Users', 57, NULL, 102, 103),
(61, 1, 'Users', 58, NULL, 104, 105),
(62, 1, 'Users', 59, NULL, 106, 107),
(63, 1, 'Users', 60, NULL, 108, 109),
(64, 1, 'Users', 61, NULL, 110, 111),
(65, 1, 'Users', 62, NULL, 112, 113),
(66, 1, 'Users', 63, NULL, 114, 115),
(67, 1, 'Users', 64, NULL, 116, 117),
(68, 1, 'Users', 65, NULL, 118, 119),
(69, 1, 'Users', 66, NULL, 120, 121),
(70, 1, 'Users', 67, NULL, 122, 123),
(71, 1, 'Users', 68, NULL, 124, 125),
(72, 1, 'Users', 69, NULL, 126, 127),
(73, 1, 'Users', 70, NULL, 128, 129),
(74, 1, 'Users', 71, NULL, 130, 131),
(75, 1, 'Users', 72, NULL, 132, 133),
(76, 1, 'Users', 73, NULL, 134, 135),
(77, 1, 'Users', 74, NULL, 136, 137),
(78, 1, 'Users', 75, NULL, 138, 139),
(79, 1, 'Users', 76, NULL, 140, 141),
(80, 1, 'Users', 77, NULL, 142, 143),
(81, 1, 'Users', 78, NULL, 144, 145),
(82, 1, 'Users', 79, NULL, 146, 147),
(83, 1, 'Users', 80, NULL, 148, 149),
(84, 1, 'Users', 81, NULL, 150, 151),
(85, 1, 'Users', 82, NULL, 152, 153),
(86, 1, 'Users', 83, NULL, 154, 155),
(87, 1, 'Users', 84, NULL, 156, 157);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
