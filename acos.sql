-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2017 at 03:05 PM
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
-- Table structure for table `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=169 ;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(148, 144, NULL, NULL, 'edit', 267, 268),
(147, 144, NULL, NULL, 'add', 265, 266),
(146, 144, NULL, NULL, 'view', 263, 264),
(145, 144, NULL, NULL, 'index', 261, 262),
(144, 1, NULL, NULL, 'Eventsubcategories', 260, 271),
(143, 111, NULL, NULL, 'activate', 201, 202),
(142, 111, NULL, NULL, 'viewresult', 199, 200),
(141, 136, NULL, NULL, 'delete', 257, 258),
(140, 136, NULL, NULL, 'edit', 255, 256),
(139, 136, NULL, NULL, 'add', 253, 254),
(138, 136, NULL, NULL, 'view', 251, 252),
(133, 128, NULL, NULL, 'delete', 245, 246),
(132, 128, NULL, NULL, 'edit', 243, 244),
(131, 128, NULL, NULL, 'add', 241, 242),
(130, 128, NULL, NULL, 'view', 239, 240),
(129, 128, NULL, NULL, 'index', 237, 238),
(128, 1, NULL, NULL, 'EventsSubCategories', 236, 247),
(136, 1, NULL, NULL, 'Galaries', 248, 259),
(126, 121, NULL, NULL, 'delete', 233, 234),
(125, 121, NULL, NULL, 'edit', 231, 232),
(124, 121, NULL, NULL, 'add', 229, 230),
(123, 121, NULL, NULL, 'view', 227, 228),
(122, 121, NULL, NULL, 'index', 225, 226),
(121, 1, NULL, NULL, 'Mediapartners', 224, 235),
(120, 99, NULL, NULL, 'getByCategory', 173, 174),
(119, 16, NULL, NULL, 'reset', 51, 52),
(118, 16, NULL, NULL, 'forgetpassword', 49, 50),
(137, 136, NULL, NULL, 'index', 249, 250),
(116, 111, NULL, NULL, 'delete', 197, 198),
(115, 111, NULL, NULL, 'edit', 195, 196),
(114, 111, NULL, NULL, 'add', 193, 194),
(113, 111, NULL, NULL, 'view', 191, 192),
(112, 111, NULL, NULL, 'index', 189, 190),
(111, 1, NULL, NULL, 'Events', 188, 223),
(110, 105, NULL, NULL, 'delete', 185, 186),
(109, 105, NULL, NULL, 'edit', 183, 184),
(108, 105, NULL, NULL, 'add', 181, 182),
(107, 105, NULL, NULL, 'view', 179, 180),
(106, 105, NULL, NULL, 'index', 177, 178),
(105, 1, NULL, NULL, 'UserProfile', 176, 187),
(104, 99, NULL, NULL, 'delete', 171, 172),
(103, 99, NULL, NULL, 'edit', 169, 170),
(102, 99, NULL, NULL, 'add', 167, 168),
(101, 99, NULL, NULL, 'view', 165, 166),
(100, 99, NULL, NULL, 'index', 163, 164),
(99, 1, NULL, NULL, 'SubCategories', 162, 175),
(98, 93, NULL, NULL, 'delete', 159, 160),
(97, 93, NULL, NULL, 'edit', 157, 158),
(96, 93, NULL, NULL, 'add', 155, 156),
(95, 93, NULL, NULL, 'view', 153, 154),
(94, 93, NULL, NULL, 'index', 151, 152),
(93, 1, NULL, NULL, 'Categories', 150, 161),
(86, 16, NULL, NULL, 'activate', 47, 48),
(79, 16, NULL, NULL, 'adminlogin', 45, 46),
(73, 68, NULL, NULL, 'delete', 147, 148),
(72, 68, NULL, NULL, 'edit', 145, 146),
(71, 68, NULL, NULL, 'add', 143, 144),
(70, 68, NULL, NULL, 'view', 141, 142),
(69, 68, NULL, NULL, 'index', 139, 140),
(68, 1, NULL, NULL, 'Aros', 138, 149),
(67, 62, NULL, NULL, 'delete', 135, 136),
(66, 62, NULL, NULL, 'edit', 133, 134),
(65, 62, NULL, NULL, 'add', 131, 132),
(64, 62, NULL, NULL, 'view', 129, 130),
(63, 62, NULL, NULL, 'index', 127, 128),
(62, 1, NULL, NULL, 'ArosAcos', 126, 137),
(61, 42, NULL, NULL, 'delete', 99, 100),
(60, 42, NULL, NULL, 'edit', 97, 98),
(59, 42, NULL, NULL, 'add', 95, 96),
(58, 42, NULL, NULL, 'view', 93, 94),
(57, 52, NULL, NULL, 'delete', 123, 124),
(55, 52, NULL, NULL, 'add', 119, 120),
(56, 52, NULL, NULL, 'edit', 121, 122),
(54, 52, NULL, NULL, 'view', 117, 118),
(53, 52, NULL, NULL, 'index', 115, 116),
(52, 1, NULL, NULL, 'Acos', 114, 125),
(51, 46, NULL, NULL, 'delete', 111, 112),
(50, 46, NULL, NULL, 'edit', 109, 110),
(49, 46, NULL, NULL, 'add', 107, 108),
(48, 46, NULL, NULL, 'view', 105, 106),
(47, 46, NULL, NULL, 'index', 103, 104),
(46, 1, NULL, NULL, 'AclPhinxlog', 102, 113),
(43, 42, NULL, NULL, 'index', 91, 92),
(42, 1, NULL, NULL, 'AdminDashBoard', 90, 101),
(40, 1, NULL, NULL, 'Migrations', 88, 89),
(39, 38, NULL, NULL, 'clearCache', 84, 85),
(38, 32, NULL, NULL, 'Toolbar', 83, 86),
(37, 36, NULL, NULL, 'view', 80, 81),
(36, 32, NULL, NULL, 'Requests', 79, 82),
(35, 33, NULL, NULL, 'view', 76, 77),
(34, 33, NULL, NULL, 'index', 74, 75),
(33, 32, NULL, NULL, 'Panels', 73, 78),
(32, 1, NULL, NULL, 'DebugKit', 72, 87),
(31, 1, NULL, NULL, 'Bake', 70, 71),
(30, 1, NULL, NULL, 'Acl', 68, 69),
(29, 24, NULL, NULL, 'delete', 65, 66),
(28, 24, NULL, NULL, 'edit', 63, 64),
(27, 24, NULL, NULL, 'add', 61, 62),
(26, 24, NULL, NULL, 'view', 59, 60),
(25, 24, NULL, NULL, 'index', 57, 58),
(24, 1, NULL, NULL, 'Widgets', 56, 67),
(23, 16, NULL, NULL, 'logout', 43, 44),
(22, 16, NULL, NULL, 'login', 41, 42),
(21, 16, NULL, NULL, 'delete', 39, 40),
(20, 16, NULL, NULL, 'edit', 37, 38),
(19, 16, NULL, NULL, 'add', 35, 36),
(18, 16, NULL, NULL, 'view', 33, 34),
(17, 16, NULL, NULL, 'index', 31, 32),
(16, 1, NULL, NULL, 'Users', 30, 55),
(15, 10, NULL, NULL, 'delete', 27, 28),
(14, 10, NULL, NULL, 'edit', 25, 26),
(13, 10, NULL, NULL, 'add', 23, 24),
(12, 10, NULL, NULL, 'view', 21, 22),
(11, 10, NULL, NULL, 'index', 19, 20),
(10, 1, NULL, NULL, 'Posts', 18, 29),
(9, 8, NULL, NULL, 'display', 15, 16),
(8, 1, NULL, NULL, 'Pages', 14, 17),
(7, 2, NULL, NULL, 'delete', 11, 12),
(6, 2, NULL, NULL, 'edit', 9, 10),
(5, 2, NULL, NULL, 'add', 7, 8),
(4, 2, NULL, NULL, 'view', 5, 6),
(3, 2, NULL, NULL, 'index', 3, 4),
(2, 1, NULL, NULL, 'Groups', 2, 13),
(1, NULL, NULL, NULL, 'controllers', 1, 284),
(149, 144, NULL, NULL, 'delete', 269, 270),
(150, 1, NULL, NULL, 'Address', 272, 283),
(151, 150, NULL, NULL, 'index', 273, 274),
(152, 150, NULL, NULL, 'view', 275, 276),
(153, 150, NULL, NULL, 'add', 277, 278),
(154, 150, NULL, NULL, 'edit', 279, 280),
(155, 150, NULL, NULL, 'delete', 281, 282),
(156, 111, NULL, NULL, 'search', 203, 204),
(157, 111, NULL, NULL, 'likes', 205, 206),
(160, 111, NULL, NULL, 'myevents', 207, 208),
(161, 111, NULL, NULL, 'likedevents', 209, 210),
(162, 111, NULL, NULL, 'about', 211, 212),
(163, 111, NULL, NULL, 'terms', 213, 214),
(164, 111, NULL, NULL, 'privacy', 215, 216),
(165, 111, NULL, NULL, 'partnerwith', 217, 218),
(166, 111, NULL, NULL, 'career', 219, 220),
(167, 111, NULL, NULL, 'eventlist', 221, 222),
(168, 16, NULL, NULL, 'changepassword', 53, 54);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
