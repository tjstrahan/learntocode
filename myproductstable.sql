-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 17, 2019 at 04:23 PM
-- Server version: 5.6.13
-- PHP Version: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myproducts`
--
CREATE DATABASE IF NOT EXISTS `myproducts` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `myproducts`;

-- --------------------------------------------------------

--
-- Table structure for table `myproductstable`
--

CREATE TABLE IF NOT EXISTS `myproductstable` (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `productType` text NOT NULL,
  `productName` text NOT NULL,
  `Quantity` int(11) NOT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `myproductstable`
--

INSERT INTO `myproductstable` (`orderid`, `productType`, `productName`, `Quantity`) VALUES
(1, 'Fanta', 'drink', 5),
(2, 'rtjh', 'eth', 2),
(3, 'dth', 'aethya', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
