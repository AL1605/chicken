-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 09, 2013 at 05:19 PM
-- Server version: 5.5.25
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chicken_db`
--
CREATE DATABASE `chicken_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `chicken_db`;

-- --------------------------------------------------------

--
-- Table structure for table `chickens`
--

CREATE TABLE `chickens` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `farm_id` int(10) NOT NULL,
  `code` varchar(255) NOT NULL,
  `weight` int(10) NOT NULL,
  `status` enum('baby','big','for_kill','killed') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `chickens`
--

INSERT INTO `chickens` (`id`, `farm_id`, `code`, `weight`, `status`) VALUES
(1, 1, '11d6', 1500, 'killed'),
(2, 1, '1c2d', 1550, 'killed'),
(3, 1, '1093', 1500, 'for_kill'),
(4, 1, '1407', 850, 'big'),
(5, 1, '176a', 900, 'big'),
(6, 1, '1aa7', 1580, 'for_kill'),
(7, 1, '1dc9', 70, 'baby'),
(8, 1, '10eb', 70, 'baby'),
(9, 1, '14e2', 70, 'baby'),
(10, 1, '198f', 70, 'baby'),
(11, 2, '2a71', 70, 'baby'),
(12, 2, '2093', 70, 'baby'),
(13, 2, '2588', 890, 'big'),
(14, 2, '2973', 870, 'big'),
(15, 2, '2d0b', 70, 'baby'),
(16, 2, '20bc', 70, 'baby'),
(17, 2, '2442', 70, 'baby'),
(18, 2, '27af', 1500, 'killed'),
(19, 2, '2b9e', 70, 'baby'),
(20, 2, '2f63', 70, 'baby');

-- --------------------------------------------------------

--
-- Table structure for table `farms`
--

CREATE TABLE `farms` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `farms`
--

INSERT INTO `farms` (`id`, `name`) VALUES
(1, 'ไก่สวรรค์ 1'),
(2, 'ไก่สวรรค์ 2'),
(3, 'ไก่สวรรค์ 3');

-- --------------------------------------------------------

--
-- Table structure for table `feed_foods`
--

CREATE TABLE `feed_foods` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `chicken_id` int(10) NOT NULL,
  `food_id` int(10) NOT NULL,
  `feed` int(10) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `feed_foods`
--

INSERT INTO `feed_foods` (`id`, `chicken_id`, `food_id`, `feed`, `created`) VALUES
(1, 1, 1, 10, '2013-10-02 00:00:00'),
(2, 1, 1, 10, '2013-10-02 00:00:00'),
(3, 1, 1, 10, '2013-10-02 00:00:00'),
(4, 1, 1, 10, '2013-10-02 00:00:00'),
(5, 1, 1, 10, '2013-10-02 00:00:00'),
(6, 1, 1, 10, '0000-00-00 00:00:00'),
(7, 1, 1, 10, '2013-10-02 00:00:00'),
(8, 1, 1, 10, '2013-10-02 00:00:00'),
(9, 1, 1, 10, '2013-10-02 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `amount` int(10) NOT NULL,
  `approved` enum('wait','no','yes') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `name`, `amount`, `approved`) VALUES
(1, 'ปลายข้าว', 2990, 'yes'),
(2, 'ข้าวโพ้ดป่น', 3000, 'yes'),
(3, 'น้ำ', 3000, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `order_babies`
--

CREATE TABLE `order_babies` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `farm_id` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `approved` enum('wait','no','yes') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `order_babies`
--

INSERT INTO `order_babies` (`id`, `farm_id`, `amount`, `approved`) VALUES
(1, 1, 10, 'yes'),
(2, 2, 10, 'yes'),
(3, 3, 10, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`id`, `name`) VALUES
(1, 'ฝ่ายเลี้ยงไก่'),
(2, 'ฝ่ายจัดซื้อ'),
(3, 'ผู้บริหาร'),
(4, 'ผู้ดูแลระบบ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_type_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type_id`, `name`, `username`, `password`) VALUES
(1, 1, 'user1', 'user1', '1234'),
(2, 2, 'user2', 'user2', '1234'),
(3, 3, 'user3', 'user3', '1234'),
(4, 4, 'admin', 'admin', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
