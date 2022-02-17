-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2022 at 08:26 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `php_oop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE IF NOT EXISTS `tblproduct` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `date_added` varchar(40) NOT NULL,
  `date_updated` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `description`, `date_added`, `date_updated`) VALUES
(1, 'Coke', 'Sample Coke small one', '2022-02-17 12:37:17', '2022-02-17 14:12:31'),
(2, '7up', 'sample 7up small one', '2022-02-17 13:11:17', '2022-02-17 14:12:43'),
(3, 'Bigi Soda', 'Sample Bigi Soda soda', '2022-02-17 13:12:17', '2022-02-17 14:12:50'),
(4, 'Fanta', 'sample fanta fanta', '2022-02-17 13:37:17', '2022-02-17 14:13:05'),
(5, 'Smoked Fish', 'Testing smoke fish', '2022-02-17 20:21:51', '2022-02-17 20:23:21');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
