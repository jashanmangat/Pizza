-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2015 at 06:39 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pizzeria`
--
CREATE DATABASE IF NOT EXISTS `pizzeria` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pizzeria`;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `customerId` int(200) NOT NULL AUTO_INCREMENT,
  `forename` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `postalcode` varchar(20) NOT NULL,
  `telephonenumber` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`customerId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerId`, `forename`, `surname`, `address`, `city`, `province`, `postalcode`, `telephonenumber`, `email`) VALUES
(1, 'a', 'a', 'a', 'a', 'Ontario', 'a1a1a1', '1111111111', 'a@a.com'),
(2, 'a', 'a', 'a', 'a', 'Ontario', 'a1a1a1', '1111111111', 'a@a.com'),
(3, 'a', 'a', 'a', 'a', 'Ontario', 'a1a1a1', '1111111111', 'a@a.com');

-- --------------------------------------------------------

--
-- Table structure for table `pizza`
--

CREATE TABLE IF NOT EXISTS `pizza` (
  `pizzaId` int(200) NOT NULL AUTO_INCREMENT,
  `status` int(10) NOT NULL DEFAULT '0',
  `numberofpizzas` varchar(50) NOT NULL,
  `radiosize` varchar(50) NOT NULL,
  `crusttype` varchar(50) NOT NULL,
  `toppings` varchar(50) NOT NULL,
  `totalcost` int(200) NOT NULL,
  `customerId` int(200) NOT NULL,
  PRIMARY KEY (`pizzaId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pizza`
--

INSERT INTO `pizza` (`pizzaId`, `status`, `numberofpizzas`, `radiosize`, `crusttype`, `toppings`, `totalcost`, `customerId`) VALUES
(1, 0, '1', 'small', 'Pan Pizza', 'Pepperoni,Peppers', 0, 2),
(2, 0, '1', 'small', 'Pan Pizza', 'Pepperoni,Peppers', 6, 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
