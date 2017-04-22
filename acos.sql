-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2017 at 01:47 PM
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=179 ;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(148, 144, NULL, NULL, 'edit', 275, 276),
(147, 144, NULL, NULL, 'add', 273, 274),
(146, 144, NULL, NULL, 'view', 271, 272),
(145, 144, NULL, NULL, 'index', 269, 270),
(144, 1, NULL, NULL, 'Eventsubcategories', 268, 279),
(143, 111, NULL, NULL, 'activate', 203, 204),
(142, 111, NULL, NULL, 'viewresult', 201, 202),
(141, 136, NULL, NULL, 'delete', 265, 266),
(140, 136, NULL, NULL, 'edit', 263, 264),
(139, 136, NULL, NULL, 'add', 261, 262),
(138, 136, NULL, NULL, 'view', 259, 260),
(133, 128, NULL, NULL, 'delete', 253, 254),
(132, 128, NULL, NULL, 'edit', 251, 252),
(131, 128, NULL, NULL, 'add', 249, 250),
(130, 128, NULL, NULL, 'view', 247, 248),
(129, 128, NULL, NULL, 'index', 245, 246),
(128, 1, NULL, NULL, 'EventsSubCategories', 244, 255),
(136, 1, NULL, NULL, 'Galaries', 256, 267),
(126, 121, NULL, NULL, 'delete', 241, 242),
(125, 121, NULL, NULL, 'edit', 239, 240),
(124, 121, NULL, NULL, 'add', 237, 238),
(123, 121, NULL, NULL, 'view', 235, 236),
(122, 121, NULL, NULL, 'index', 233, 234),
(121, 1, NULL, NULL, 'Mediapartners', 232, 243),
(120, 99, NULL, NULL, 'getByCategory', 175, 176),
(119, 16, NULL, NULL, 'reset', 51, 52),
(118, 16, NULL, NULL, 'forgetpassword', 49, 50),
(137, 136, NULL, NULL, 'index', 257, 258),
(116, 111, NULL, NULL, 'delete', 199, 200),
(115, 111, NULL, NULL, 'edit', 197, 198),
(114, 111, NULL, NULL, 'add', 195, 196),
(113, 111, NULL, NULL, 'view', 193, 194),
(112, 111, NULL, NULL, 'index', 191, 192),
(111, 1, NULL, NULL, 'Events', 190, 231),
(110, 105, NULL, NULL, 'delete', 187, 188),
(109, 105, NULL, NULL, 'edit', 185, 186),
(108, 105, NULL, NULL, 'add', 183, 184),
(107, 105, NULL, NULL, 'view', 181, 182),
(106, 105, NULL, NULL, 'index', 179, 180),
(105, 1, NULL, NULL, 'UserProfile', 178, 189),
(104, 99, NULL, NULL, 'delete', 173, 174),
(103, 99, NULL, NULL, 'edit', 171, 172),
(102, 99, NULL, NULL, 'add', 169, 170),
(101, 99, NULL, NULL, 'view', 167, 168),
(100, 99, NULL, NULL, 'index', 165, 166),
(99, 1, NULL, NULL, 'SubCategories', 164, 177),
(98, 93, NULL, NULL, 'delete', 161, 162),
(97, 93, NULL, NULL, 'edit', 159, 160),
(96, 93, NULL, NULL, 'add', 157, 158),
(95, 93, NULL, NULL, 'view', 155, 156),
(94, 93, NULL, NULL, 'index', 153, 154),
(93, 1, NULL, NULL, 'Categories', 152, 163),
(86, 16, NULL, NULL, 'activate', 47, 48),
(79, 16, NULL, NULL, 'adminlogin', 45, 46),
(73, 68, NULL, NULL, 'delete', 149, 150),
(72, 68, NULL, NULL, 'edit', 147, 148),
(71, 68, NULL, NULL, 'add', 145, 146),
(70, 68, NULL, NULL, 'view', 143, 144),
(69, 68, NULL, NULL, 'index', 141, 142),
(68, 1, NULL, NULL, 'Aros', 140, 151),
(67, 62, NULL, NULL, 'delete', 137, 138),
(66, 62, NULL, NULL, 'edit', 135, 136),
(65, 62, NULL, NULL, 'add', 133, 134),
(64, 62, NULL, NULL, 'view', 131, 132),
(63, 62, NULL, NULL, 'index', 129, 130),
(62, 1, NULL, NULL, 'ArosAcos', 128, 139),
(61, 42, NULL, NULL, 'delete', 101, 102),
(60, 42, NULL, NULL, 'edit', 99, 100),
(59, 42, NULL, NULL, 'add', 97, 98),
(58, 42, NULL, NULL, 'view', 95, 96),
(57, 52, NULL, NULL, 'delete', 125, 126),
(55, 52, NULL, NULL, 'add', 121, 122),
(56, 52, NULL, NULL, 'edit', 123, 124),
(54, 52, NULL, NULL, 'view', 119, 120),
(53, 52, NULL, NULL, 'index', 117, 118),
(52, 1, NULL, NULL, 'Acos', 116, 127),
(51, 46, NULL, NULL, 'delete', 113, 114),
(50, 46, NULL, NULL, 'edit', 111, 112),
(49, 46, NULL, NULL, 'add', 109, 110),
(48, 46, NULL, NULL, 'view', 107, 108),
(47, 46, NULL, NULL, 'index', 105, 106),
(46, 1, NULL, NULL, 'AclPhinxlog', 104, 115),
(43, 42, NULL, NULL, 'index', 93, 94),
(42, 1, NULL, NULL, 'AdminDashBoard', 92, 103),
(40, 1, NULL, NULL, 'Migrations', 90, 91),
(39, 38, NULL, NULL, 'clearCache', 86, 87),
(38, 32, NULL, NULL, 'Toolbar', 85, 88),
(37, 36, NULL, NULL, 'view', 82, 83),
(36, 32, NULL, NULL, 'Requests', 81, 84),
(35, 33, NULL, NULL, 'view', 78, 79),
(34, 33, NULL, NULL, 'index', 76, 77),
(33, 32, NULL, NULL, 'Panels', 75, 80),
(32, 1, NULL, NULL, 'DebugKit', 74, 89),
(31, 1, NULL, NULL, 'Bake', 72, 73),
(30, 1, NULL, NULL, 'Acl', 70, 71),
(29, 24, NULL, NULL, 'delete', 67, 68),
(28, 24, NULL, NULL, 'edit', 65, 66),
(27, 24, NULL, NULL, 'add', 63, 64),
(26, 24, NULL, NULL, 'view', 61, 62),
(25, 24, NULL, NULL, 'index', 59, 60),
(24, 1, NULL, NULL, 'Widgets', 58, 69),
(23, 16, NULL, NULL, 'logout', 43, 44),
(22, 16, NULL, NULL, 'login', 41, 42),
(21, 16, NULL, NULL, 'delete', 39, 40),
(20, 16, NULL, NULL, 'edit', 37, 38),
(19, 16, NULL, NULL, 'add', 35, 36),
(18, 16, NULL, NULL, 'view', 33, 34),
(17, 16, NULL, NULL, 'index', 31, 32),
(16, 1, NULL, NULL, 'Users', 30, 57),
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
(1, NULL, NULL, NULL, 'controllers', 1, 304),
(149, 144, NULL, NULL, 'delete', 277, 278),
(150, 1, NULL, NULL, 'Address', 280, 291),
(151, 150, NULL, NULL, 'index', 281, 282),
(152, 150, NULL, NULL, 'view', 283, 284),
(153, 150, NULL, NULL, 'add', 285, 286),
(154, 150, NULL, NULL, 'edit', 287, 288),
(155, 150, NULL, NULL, 'delete', 289, 290),
(156, 111, NULL, NULL, 'search', 205, 206),
(157, 111, NULL, NULL, 'likes', 207, 208),
(160, 111, NULL, NULL, 'myevents', 209, 210),
(161, 111, NULL, NULL, 'likedevents', 211, 212),
(162, 111, NULL, NULL, 'about', 213, 214),
(163, 111, NULL, NULL, 'terms', 215, 216),
(164, 111, NULL, NULL, 'privacy', 217, 218),
(165, 111, NULL, NULL, 'partnerwith', 219, 220),
(166, 111, NULL, NULL, 'career', 221, 222),
(167, 111, NULL, NULL, 'eventlist', 223, 224),
(168, 16, NULL, NULL, 'changepassword', 53, 54),
(169, 111, NULL, NULL, 'sendemail', 225, 226),
(170, 1, NULL, NULL, 'Invitefriends', 292, 303),
(171, 170, NULL, NULL, 'index', 293, 294),
(172, 170, NULL, NULL, 'view', 295, 296),
(173, 170, NULL, NULL, 'add', 297, 298),
(174, 170, NULL, NULL, 'edit', 299, 300),
(175, 170, NULL, NULL, 'delete', 301, 302),
(176, 111, NULL, NULL, 'invitation', 227, 228),
(177, 111, NULL, NULL, 'isEmailExist', 229, 230),
(178, 16, NULL, NULL, 'isEmailExist', 55, 56);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
