-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2017 at 12:31 PM
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=168 ;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 282),
(2, 1, NULL, NULL, 'Groups', 2, 13),
(3, 2, NULL, NULL, 'index', 3, 4),
(4, 2, NULL, NULL, 'view', 5, 6),
(5, 2, NULL, NULL, 'add', 7, 8),
(6, 2, NULL, NULL, 'edit', 9, 10),
(7, 2, NULL, NULL, 'delete', 11, 12),
(8, 1, NULL, NULL, 'Pages', 14, 17),
(9, 8, NULL, NULL, 'display', 15, 16),
(10, 1, NULL, NULL, 'Posts', 18, 29),
(11, 10, NULL, NULL, 'index', 19, 20),
(12, 10, NULL, NULL, 'view', 21, 22),
(13, 10, NULL, NULL, 'add', 23, 24),
(14, 10, NULL, NULL, 'edit', 25, 26),
(15, 10, NULL, NULL, 'delete', 27, 28),
(16, 1, NULL, NULL, 'Users', 30, 53),
(17, 16, NULL, NULL, 'index', 31, 32),
(18, 16, NULL, NULL, 'view', 33, 34),
(19, 16, NULL, NULL, 'add', 35, 36),
(20, 16, NULL, NULL, 'edit', 37, 38),
(21, 16, NULL, NULL, 'delete', 39, 40),
(22, 16, NULL, NULL, 'login', 41, 42),
(23, 16, NULL, NULL, 'logout', 43, 44),
(24, 1, NULL, NULL, 'Widgets', 54, 65),
(25, 24, NULL, NULL, 'index', 55, 56),
(26, 24, NULL, NULL, 'view', 57, 58),
(27, 24, NULL, NULL, 'add', 59, 60),
(28, 24, NULL, NULL, 'edit', 61, 62),
(29, 24, NULL, NULL, 'delete', 63, 64),
(30, 1, NULL, NULL, 'Acl', 66, 67),
(31, 1, NULL, NULL, 'Bake', 68, 69),
(32, 1, NULL, NULL, 'DebugKit', 70, 85),
(33, 32, NULL, NULL, 'Panels', 71, 76),
(34, 33, NULL, NULL, 'index', 72, 73),
(35, 33, NULL, NULL, 'view', 74, 75),
(36, 32, NULL, NULL, 'Requests', 77, 80),
(37, 36, NULL, NULL, 'view', 78, 79),
(38, 32, NULL, NULL, 'Toolbar', 81, 84),
(39, 38, NULL, NULL, 'clearCache', 82, 83),
(40, 1, NULL, NULL, 'Migrations', 86, 87),
(42, 1, NULL, NULL, 'AdminDashBoard', 88, 99),
(43, 42, NULL, NULL, 'index', 89, 90),
(46, 1, NULL, NULL, 'AclPhinxlog', 100, 111),
(47, 46, NULL, NULL, 'index', 101, 102),
(48, 46, NULL, NULL, 'view', 103, 104),
(49, 46, NULL, NULL, 'add', 105, 106),
(50, 46, NULL, NULL, 'edit', 107, 108),
(51, 46, NULL, NULL, 'delete', 109, 110),
(52, 1, NULL, NULL, 'Acos', 112, 123),
(53, 52, NULL, NULL, 'index', 113, 114),
(54, 52, NULL, NULL, 'view', 115, 116),
(55, 52, NULL, NULL, 'add', 117, 118),
(56, 52, NULL, NULL, 'edit', 119, 120),
(57, 52, NULL, NULL, 'delete', 121, 122),
(58, 42, NULL, NULL, 'view', 91, 92),
(59, 42, NULL, NULL, 'add', 93, 94),
(60, 42, NULL, NULL, 'edit', 95, 96),
(61, 42, NULL, NULL, 'delete', 97, 98),
(62, 1, NULL, NULL, 'ArosAcos', 124, 135),
(63, 62, NULL, NULL, 'index', 125, 126),
(64, 62, NULL, NULL, 'view', 127, 128),
(65, 62, NULL, NULL, 'add', 129, 130),
(66, 62, NULL, NULL, 'edit', 131, 132),
(67, 62, NULL, NULL, 'delete', 133, 134),
(68, 1, NULL, NULL, 'Aros', 136, 147),
(69, 68, NULL, NULL, 'index', 137, 138),
(70, 68, NULL, NULL, 'view', 139, 140),
(71, 68, NULL, NULL, 'add', 141, 142),
(72, 68, NULL, NULL, 'edit', 143, 144),
(73, 68, NULL, NULL, 'delete', 145, 146),
(79, 16, NULL, NULL, 'adminlogin', 45, 46),
(86, 16, NULL, NULL, 'activate', 47, 48),
(93, 1, NULL, NULL, 'Categories', 148, 159),
(94, 93, NULL, NULL, 'index', 149, 150),
(95, 93, NULL, NULL, 'view', 151, 152),
(96, 93, NULL, NULL, 'add', 153, 154),
(97, 93, NULL, NULL, 'edit', 155, 156),
(98, 93, NULL, NULL, 'delete', 157, 158),
(99, 1, NULL, NULL, 'SubCategories', 160, 173),
(100, 99, NULL, NULL, 'index', 161, 162),
(101, 99, NULL, NULL, 'view', 163, 164),
(102, 99, NULL, NULL, 'add', 165, 166),
(103, 99, NULL, NULL, 'edit', 167, 168),
(104, 99, NULL, NULL, 'delete', 169, 170),
(105, 1, NULL, NULL, 'UserProfile', 174, 185),
(106, 105, NULL, NULL, 'index', 175, 176),
(107, 105, NULL, NULL, 'view', 177, 178),
(108, 105, NULL, NULL, 'add', 179, 180),
(109, 105, NULL, NULL, 'edit', 181, 182),
(110, 105, NULL, NULL, 'delete', 183, 184),
(111, 1, NULL, NULL, 'Events', 186, 221),
(112, 111, NULL, NULL, 'index', 187, 188),
(113, 111, NULL, NULL, 'view', 189, 190),
(114, 111, NULL, NULL, 'add', 191, 192),
(115, 111, NULL, NULL, 'edit', 193, 194),
(116, 111, NULL, NULL, 'delete', 195, 196),
(137, 136, NULL, NULL, 'index', 247, 248),
(118, 16, NULL, NULL, 'forgetpassword', 49, 50),
(119, 16, NULL, NULL, 'reset', 51, 52),
(120, 99, NULL, NULL, 'getByCategory', 171, 172),
(121, 1, NULL, NULL, 'Mediapartners', 222, 233),
(122, 121, NULL, NULL, 'index', 223, 224),
(123, 121, NULL, NULL, 'view', 225, 226),
(124, 121, NULL, NULL, 'add', 227, 228),
(125, 121, NULL, NULL, 'edit', 229, 230),
(126, 121, NULL, NULL, 'delete', 231, 232),
(136, 1, NULL, NULL, 'Galaries', 246, 257),
(128, 1, NULL, NULL, 'EventsSubCategories', 234, 245),
(129, 128, NULL, NULL, 'index', 235, 236),
(130, 128, NULL, NULL, 'view', 237, 238),
(131, 128, NULL, NULL, 'add', 239, 240),
(132, 128, NULL, NULL, 'edit', 241, 242),
(133, 128, NULL, NULL, 'delete', 243, 244),
(138, 136, NULL, NULL, 'view', 249, 250),
(139, 136, NULL, NULL, 'add', 251, 252),
(140, 136, NULL, NULL, 'edit', 253, 254),
(141, 136, NULL, NULL, 'delete', 255, 256),
(142, 111, NULL, NULL, 'viewresult', 197, 198),
(143, 111, NULL, NULL, 'activate', 199, 200),
(144, 1, NULL, NULL, 'Eventsubcategories', 258, 269),
(145, 144, NULL, NULL, 'index', 259, 260),
(146, 144, NULL, NULL, 'view', 261, 262),
(147, 144, NULL, NULL, 'add', 263, 264),
(148, 144, NULL, NULL, 'edit', 265, 266),
(149, 144, NULL, NULL, 'delete', 267, 268),
(150, 1, NULL, NULL, 'Address', 270, 281),
(151, 150, NULL, NULL, 'index', 271, 272),
(152, 150, NULL, NULL, 'view', 273, 274),
(153, 150, NULL, NULL, 'add', 275, 276),
(154, 150, NULL, NULL, 'edit', 277, 278),
(155, 150, NULL, NULL, 'delete', 279, 280),
(156, 111, NULL, NULL, 'search', 201, 202),
(157, 111, NULL, NULL, 'likes', 203, 204),
(160, 111, NULL, NULL, 'myevents', 205, 206),
(161, 111, NULL, NULL, 'likedevents', 207, 208),
(162, 111, NULL, NULL, 'about', 209, 210),
(163, 111, NULL, NULL, 'terms', 211, 212),
(164, 111, NULL, NULL, 'privacy', 213, 214),
(165, 111, NULL, NULL, 'partnerwith', 215, 216),
(166, 111, NULL, NULL, 'career', 217, 218),
(167, 111, NULL, NULL, 'eventlist', 219, 220);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
