-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 22, 2013 at 06:01 PM
-- Server version: 5.1.68-cll
-- PHP Version: 5.3.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quickasi_quick`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `com_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(200) DEFAULT NULL,
  `pid_fk` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  PRIMARY KEY (`com_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`com_id`, `comment`, `pid_fk`, `uid`) VALUES
(1, 'test', 1, 1),
(2, 'wewe', 1, 1),
(3, 'ww', 3, 1),
(4, 'wwwww', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pins`
--

CREATE TABLE IF NOT EXISTS `pins` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pin` varchar(100) DEFAULT NULL,
  `upload_id` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `pins`
--

INSERT INTO `pins` (`pid`, `pin`, `upload_id`, `uid`) VALUES
(1, 'wewe', 1, 1),
(2, 'test', 2, 1),
(3, 'fff', 3, 1),
(4, 'tes', 0, 1),
(5, '....', 0, 1),
(6, 'chvtjeuvyjyjytjvyjvyjvjvjvtyjvtyjvtjvevyjjvtjtjvtjvtjtjejtjtjevtjvtjvtj', 0, 1),
(7, 'waw', 4, 1),
(8, 'qwewrcetrvrtrbt', 0, 1),
(9, 'tes..', 0, 1),
(10, 'dont tell everyone', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE IF NOT EXISTS `uploads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_path` varchar(500) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `image_path`, `uid`) VALUES
(1, '1366945375gniter.png', 1),
(2, '1366946286_perubahan.png', 1),
(3, '1366946305.png', 1),
(4, '1371799644.png', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
