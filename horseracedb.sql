-- phpMyAdmin SQL Dump
-- version 4.4.15.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 24, 2016 at 07:29 PM
-- Server version: 5.7.10-log
-- PHP Version: 5.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `horseracedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `horse`
--

CREATE TABLE IF NOT EXISTS `horse` (
  `hor_id` int(10) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(32) NOT NULL,
  `rating` varchar(10) NOT NULL,
  `speed` int(10) NOT NULL,
  `age` int(5) NOT NULL,
  `weight` int(10) NOT NULL,
  `jockey` varchar(32) NOT NULL,
  `trainer` varchar(32) NOT NULL,
  `odds` varchar(128) NOT NULL,
  `colour` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `horse`
--

INSERT INTO `horse` (`hor_id`, `timestamp`, `name`, `rating`, `speed`, `age`, `weight`, `jockey`, `trainer`, `odds`, `colour`) VALUES
(101, '2016-01-23 18:46:33', 'sridhar', '09', 89, 34, 93, 'krishnan', 'kritha', '', ''),
(109, '2016-01-24 17:43:53', '45', '65', 89, 75, 89, '56', '89', '56', '#CFB53B'),
(111, '2016-01-24 17:49:33', '456', '788', 78, 45, 89, '78', '89', '56', '#8C7853'),
(112, '2016-01-24 17:53:18', '4455', '666', 788, 666, 778, '999', '788', '9999', '#d5a500'),
(114, '2016-01-24 19:04:22', 'sridhar', '45', 669, 78, 45, '98', '69', '25', 'gold'),
(115, '2016-01-24 19:05:11', '78', '58', 69, 78, 58, '69', '36', '58', 'silver'),
(116, '2016-01-24 19:05:57', '4556', '69', 89, 78, 58, '69', '78', '58', '#FF0000');

-- --------------------------------------------------------

--
-- Table structure for table `racecard`
--

CREATE TABLE IF NOT EXISTS `racecard` (
  `rc_id` int(10) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `rc_name` varchar(512) NOT NULL,
  `rc_time` time NOT NULL,
  `rc_date` date NOT NULL,
  `c_name` varchar(64) NOT NULL,
  `rc_distance` varchar(10) NOT NULL,
  `rc_racetype` varchar(32) NOT NULL,
  `rc_age` int(10) NOT NULL,
  `rc_runners` int(10) NOT NULL,
  `rc_totalprizemoney` int(10) NOT NULL,
  `hor_name` varchar(32) NOT NULL,
  `rc_hor_no` int(10) NOT NULL,
  `rc_hor_draw_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `racecourse`
--

CREATE TABLE IF NOT EXISTS `racecourse` (
  `c_id` int(10) NOT NULL,
  `c_name` varchar(64) NOT NULL,
  `c_going` varchar(64) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `horse`
--
ALTER TABLE `horse`
  ADD PRIMARY KEY (`hor_id`);

--
-- Indexes for table `racecard`
--
ALTER TABLE `racecard`
  ADD PRIMARY KEY (`rc_id`);

--
-- Indexes for table `racecourse`
--
ALTER TABLE `racecourse`
  ADD PRIMARY KEY (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `horse`
--
ALTER TABLE `horse`
  MODIFY `hor_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=117;
--
-- AUTO_INCREMENT for table `racecard`
--
ALTER TABLE `racecard`
  MODIFY `rc_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `racecourse`
--
ALTER TABLE `racecourse`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
