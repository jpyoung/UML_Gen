-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 25, 2013 at 01:59 AM
-- Server version: 5.6.12
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `UML_Gen`
--
CREATE DATABASE IF NOT EXISTS `UML_Gen` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `UML_Gen`;

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE IF NOT EXISTS `file` (
  `f_id` int(32) NOT NULL AUTO_INCREMENT,
  `u_id` int(32) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `f_path` varchar(250) NOT NULL,
  `f_upload_date` date NOT NULL,
  `f_last_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`f_id`, `u_id`, `f_name`, `f_path`, `f_upload_date`, `f_last_modified`) VALUES
(7, 1, 'outer.java', 'http://jacks-imac.local/UML_Gen/uploaded_files/outer.java', '2013-07-20', '2013-08-24 19:08:27'),
(9, 2, 'apple.java', 'http://jacks-imac.local/UML_Gen/uploaded_files/apple.java', '2013-08-24', '2013-08-24 19:08:42'),
(10, 2, 'person.java', 'http://jacks-imac.local/UML_Gen/uploaded_files/person.java', '2013-08-25', '2013-08-24 22:16:16'),
(11, 2, 'address.java', 'http://jacks-imac.local/UML_Gen/uploaded_files/address.java', '2013-08-25', '2013-08-24 22:56:19');

-- --------------------------------------------------------

--
-- Table structure for table `stats_tracker`
--

CREATE TABLE IF NOT EXISTS `stats_tracker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `activity_type` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `stats_tracker`
--

INSERT INTO `stats_tracker` (`id`, `username`, `activity_type`, `date`) VALUES
(1, 'jyoung', 'login', '2013-08-24 15:56:19'),
(2, 'jyoung', 'login', '2013-08-24 15:59:19'),
(3, 'jyoung', 'login', '2013-08-24 18:23:39'),
(4, 'jyoung', 'login', '2013-08-24 20:48:58'),
(5, 'jyoung', 'login', '2013-08-24 20:56:44'),
(6, 'jyoung', 'login', '2013-08-24 21:03:45'),
(7, 'demo', 'login', '2013-08-24 21:04:55'),
(8, 'jyoung', 'login', '2013-08-24 22:03:19'),
(9, 'jyoung', 'login', '2013-08-24 22:31:18'),
(10, 'jyoung', 'login', '2013-08-24 22:33:51'),
(11, 'jyoung', 'login', '2013-08-24 22:49:25'),
(12, 'jyoung', 'file upload', '2013-08-24 22:56:19'),
(13, 'jyoung', 'login', '2013-08-24 23:30:33');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `u_id` int(32) NOT NULL AUTO_INCREMENT,
  `u_username` varchar(32) NOT NULL,
  `u_password` varchar(150) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_address` varchar(100) NOT NULL,
  `u_city` varchar(60) NOT NULL,
  `u_state` varchar(5) NOT NULL,
  `u_zip` varchar(10) NOT NULL,
  `u_email` varchar(60) NOT NULL,
  `user_type` int(11) DEFAULT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_username`, `u_password`, `u_name`, `u_address`, `u_city`, `u_state`, `u_zip`, `u_email`, `user_type`) VALUES
(1, 'demo', 'demo1', 'john doe', 'George Mason drive', 'Fairfax', 'VA', '22030', 'jpyoung17@gmail.com', 1),
(2, 'jyoung', 'jack', 'Jack Young', '14528 South Hills Court', 'Centreville', 'VA', '20120', 'jackp@vayoungs.us', 1),
(3, 'ryan', 'ryan', 'ryan young', '5209', 'Centreville', 'VA', '20120', 'ryan@gmail.com', 1),
(4, 'tommy', 'tommy', 'tom young', '5209 Rosalie', 'Ridge', 'Drive', 'Centrevill', 't@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_site_pref`
--

CREATE TABLE IF NOT EXISTS `user_site_pref` (
  `usp_id` int(12) NOT NULL AUTO_INCREMENT,
  `user_id` int(12) NOT NULL,
  `background_color` varchar(32) NOT NULL,
  `panel_background_color` varchar(32) NOT NULL,
  `container_header_color` varchar(32) NOT NULL,
  PRIMARY KEY (`usp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_site_pref`
--

INSERT INTO `user_site_pref` (`usp_id`, `user_id`, `background_color`, `panel_background_color`, `container_header_color`) VALUES
(1, 1, 'white', 'blue', 'black'),
(3, 3, 'yellow', 'orange', 'blue');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
