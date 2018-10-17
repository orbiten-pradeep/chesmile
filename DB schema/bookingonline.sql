-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2018 at 02:53 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chesmile`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingonline`
--

CREATE TABLE `bookingonline` (
  `id` int(11) NOT NULL,
  `events_id` varchar(200) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `tickettype` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL,
  `noofseats` varchar(100) NOT NULL,
  `commission_per` varchar(100) NOT NULL,
  `commission_amt` varchar(100) NOT NULL,
  `startdate` varchar(100) NOT NULL,
  `enddate` varchar(100) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookingonline`
--

INSERT INTO `bookingonline` (`id`, `events_id`, `name`, `tickettype`, `price`, `noofseats`, `commission_per`, `commission_amt`, `startdate`, `enddate`, `status`, `created`) VALUES
(1, '1198', '', '', '', '', 'Select percentage', 'NaN', '', '', '0', '2018-10-17 12:52:15'),
(2, '1198', 'jihugwydf', 'ewhgdywkegdu', '8976', '988778', '25', 'NaN', '2018/09/11', '2018/09/11', '0', '2018-10-17 12:52:15'),
(3, '1198', 'lejdiwehueh', 'kl;wdj;whdwhu', '2292', 'hiuhuid', '45', 'NaN', '2018/09/11', '2018/09/11', '0', '2018-10-17 12:52:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingonline`
--
ALTER TABLE `bookingonline`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookingonline`
--
ALTER TABLE `bookingonline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
