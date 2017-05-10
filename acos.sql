-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2017 at 08:01 PM
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=190 ;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(148, 144, NULL, NULL, 'edit', 279, 280),
(147, 144, NULL, NULL, 'add', 277, 278),
(146, 144, NULL, NULL, 'view', 275, 276),
(145, 144, NULL, NULL, 'index', 273, 274),
(144, 1, NULL, NULL, 'Eventsubcategories', 272, 283),
(143, 111, NULL, NULL, 'activate', 205, 206),
(142, 111, NULL, NULL, 'viewresult', 203, 204),
(141, 136, NULL, NULL, 'delete', 269, 270),
(140, 136, NULL, NULL, 'edit', 267, 268),
(139, 136, NULL, NULL, 'add', 265, 266),
(138, 136, NULL, NULL, 'view', 263, 264),
(133, 128, NULL, NULL, 'delete', 257, 258),
(132, 128, NULL, NULL, 'edit', 255, 256),
(131, 128, NULL, NULL, 'add', 253, 254),
(130, 128, NULL, NULL, 'view', 251, 252),
(129, 128, NULL, NULL, 'index', 249, 250),
(128, 1, NULL, NULL, 'EventsSubCategories', 248, 259),
(136, 1, NULL, NULL, 'Galaries', 260, 271),
(126, 121, NULL, NULL, 'delete', 245, 246),
(125, 121, NULL, NULL, 'edit', 243, 244),
(124, 121, NULL, NULL, 'add', 241, 242),
(123, 121, NULL, NULL, 'view', 239, 240),
(122, 121, NULL, NULL, 'index', 237, 238),
(121, 1, NULL, NULL, 'Mediapartners', 236, 247),
(120, 99, NULL, NULL, 'getByCategory', 177, 178),
(119, 16, NULL, NULL, 'reset', 51, 52),
(118, 16, NULL, NULL, 'forgetpassword', 49, 50),
(137, 136, NULL, NULL, 'index', 261, 262),
(116, 111, NULL, NULL, 'delete', 201, 202),
(115, 111, NULL, NULL, 'edit', 199, 200),
(114, 111, NULL, NULL, 'add', 197, 198),
(113, 111, NULL, NULL, 'view', 195, 196),
(112, 111, NULL, NULL, 'index', 193, 194),
(111, 1, NULL, NULL, 'Events', 192, 235),
(110, 105, NULL, NULL, 'delete', 189, 190),
(109, 105, NULL, NULL, 'edit', 187, 188),
(108, 105, NULL, NULL, 'add', 185, 186),
(107, 105, NULL, NULL, 'view', 183, 184),
(106, 105, NULL, NULL, 'index', 181, 182),
(105, 1, NULL, NULL, 'UserProfile', 180, 191),
(104, 99, NULL, NULL, 'delete', 175, 176),
(103, 99, NULL, NULL, 'edit', 173, 174),
(102, 99, NULL, NULL, 'add', 171, 172),
(101, 99, NULL, NULL, 'view', 169, 170),
(100, 99, NULL, NULL, 'index', 167, 168),
(99, 1, NULL, NULL, 'SubCategories', 166, 179),
(98, 93, NULL, NULL, 'delete', 163, 164),
(97, 93, NULL, NULL, 'edit', 161, 162),
(96, 93, NULL, NULL, 'add', 159, 160),
(95, 93, NULL, NULL, 'view', 157, 158),
(94, 93, NULL, NULL, 'index', 155, 156),
(93, 1, NULL, NULL, 'Categories', 154, 165),
(86, 16, NULL, NULL, 'activate', 47, 48),
(79, 16, NULL, NULL, 'adminlogin', 45, 46),
(73, 68, NULL, NULL, 'delete', 151, 152),
(72, 68, NULL, NULL, 'edit', 149, 150),
(71, 68, NULL, NULL, 'add', 147, 148),
(70, 68, NULL, NULL, 'view', 145, 146),
(69, 68, NULL, NULL, 'index', 143, 144),
(68, 1, NULL, NULL, 'Aros', 142, 153),
(67, 62, NULL, NULL, 'delete', 139, 140),
(66, 62, NULL, NULL, 'edit', 137, 138),
(65, 62, NULL, NULL, 'add', 135, 136),
(64, 62, NULL, NULL, 'view', 133, 134),
(63, 62, NULL, NULL, 'index', 131, 132),
(62, 1, NULL, NULL, 'ArosAcos', 130, 141),
(61, 42, NULL, NULL, 'delete', 103, 104),
(60, 42, NULL, NULL, 'edit', 101, 102),
(59, 42, NULL, NULL, 'add', 99, 100),
(58, 42, NULL, NULL, 'view', 97, 98),
(57, 52, NULL, NULL, 'delete', 127, 128),
(55, 52, NULL, NULL, 'add', 123, 124),
(56, 52, NULL, NULL, 'edit', 125, 126),
(54, 52, NULL, NULL, 'view', 121, 122),
(53, 52, NULL, NULL, 'index', 119, 120),
(52, 1, NULL, NULL, 'Acos', 118, 129),
(51, 46, NULL, NULL, 'delete', 115, 116),
(50, 46, NULL, NULL, 'edit', 113, 114),
(49, 46, NULL, NULL, 'add', 111, 112),
(48, 46, NULL, NULL, 'view', 109, 110),
(47, 46, NULL, NULL, 'index', 107, 108),
(46, 1, NULL, NULL, 'AclPhinxlog', 106, 117),
(43, 42, NULL, NULL, 'index', 95, 96),
(42, 1, NULL, NULL, 'AdminDashBoard', 94, 105),
(40, 1, NULL, NULL, 'Migrations', 92, 93),
(39, 38, NULL, NULL, 'clearCache', 88, 89),
(38, 32, NULL, NULL, 'Toolbar', 87, 90),
(37, 36, NULL, NULL, 'view', 84, 85),
(36, 32, NULL, NULL, 'Requests', 83, 86),
(35, 33, NULL, NULL, 'view', 80, 81),
(34, 33, NULL, NULL, 'index', 78, 79),
(33, 32, NULL, NULL, 'Panels', 77, 82),
(32, 1, NULL, NULL, 'DebugKit', 76, 91),
(31, 1, NULL, NULL, 'Bake', 74, 75),
(30, 1, NULL, NULL, 'Acl', 72, 73),
(29, 24, NULL, NULL, 'delete', 69, 70),
(28, 24, NULL, NULL, 'edit', 67, 68),
(27, 24, NULL, NULL, 'add', 65, 66),
(26, 24, NULL, NULL, 'view', 63, 64),
(25, 24, NULL, NULL, 'index', 61, 62),
(24, 1, NULL, NULL, 'Widgets', 60, 71),
(23, 16, NULL, NULL, 'logout', 43, 44),
(22, 16, NULL, NULL, 'login', 41, 42),
(21, 16, NULL, NULL, 'delete', 39, 40),
(20, 16, NULL, NULL, 'edit', 37, 38),
(19, 16, NULL, NULL, 'add', 35, 36),
(18, 16, NULL, NULL, 'view', 33, 34),
(17, 16, NULL, NULL, 'index', 31, 32),
(16, 1, NULL, NULL, 'Users', 30, 59),
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
(1, NULL, NULL, NULL, 'controllers', 1, 320),
(149, 144, NULL, NULL, 'delete', 281, 282),
(150, 1, NULL, NULL, 'Address', 284, 295),
(151, 150, NULL, NULL, 'index', 285, 286),
(152, 150, NULL, NULL, 'view', 287, 288),
(153, 150, NULL, NULL, 'add', 289, 290),
(154, 150, NULL, NULL, 'edit', 291, 292),
(155, 150, NULL, NULL, 'delete', 293, 294),
(156, 111, NULL, NULL, 'search', 207, 208),
(157, 111, NULL, NULL, 'likes', 209, 210),
(160, 111, NULL, NULL, 'myevents', 211, 212),
(161, 111, NULL, NULL, 'likedevents', 213, 214),
(162, 111, NULL, NULL, 'about', 215, 216),
(163, 111, NULL, NULL, 'terms', 217, 218),
(164, 111, NULL, NULL, 'privacy', 219, 220),
(165, 111, NULL, NULL, 'partnerwith', 221, 222),
(166, 111, NULL, NULL, 'career', 223, 224),
(167, 111, NULL, NULL, 'eventlist', 225, 226),
(168, 16, NULL, NULL, 'changepassword', 53, 54),
(169, 111, NULL, NULL, 'sendemail', 227, 228),
(170, 1, NULL, NULL, 'Invitefriends', 296, 307),
(171, 170, NULL, NULL, 'index', 297, 298),
(172, 170, NULL, NULL, 'view', 299, 300),
(173, 170, NULL, NULL, 'add', 301, 302),
(174, 170, NULL, NULL, 'edit', 303, 304),
(175, 170, NULL, NULL, 'delete', 305, 306),
(176, 111, NULL, NULL, 'invitation', 229, 230),
(180, 16, NULL, NULL, 'isemailexist', 55, 56),
(181, 16, NULL, NULL, 'adminadd', 57, 58),
(184, 1, NULL, NULL, 'Marathon', 308, 319),
(182, 111, NULL, NULL, 'adminindex', 231, 232),
(183, 111, NULL, NULL, 'searchbyeventtitle', 233, 234),
(185, 184, NULL, NULL, 'index', 309, 310),
(186, 184, NULL, NULL, 'view', 311, 312),
(187, 184, NULL, NULL, 'add', 313, 314),
(188, 184, NULL, NULL, 'edit', 315, 316),
(189, 184, NULL, NULL, 'delete', 317, 318);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
