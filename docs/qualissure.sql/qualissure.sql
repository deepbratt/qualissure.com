-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 29, 2017 at 07:01 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `qualissure`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE IF NOT EXISTS `about_us` (
  `about_us_id` int(255) NOT NULL AUTO_INCREMENT,
  `about_us_details` longtext NOT NULL,
  `about_us_image` varchar(255) NOT NULL,
  PRIMARY KEY (`about_us_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`about_us_id`, `about_us_details`, `about_us_image`) VALUES
(1, '<p style="box-sizing: border-box; margin: 15px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: medium; line-height: inherit; font-family: &quot;Archivo Narrow&quot;, sans-serif; vertical-align: baseline; color: rgb(102, 102, 102);">Qualissure Laboratory Services (QLS) is a professional services company offering value added services throughout pan India. It was formed with the objective to operate as an organization that is truly receptive to client&#39;s needs, in particular, the need to understand a business process and to ensure systems are in place, that too in delivering its services.</p>\r\n\r\n<p style="box-sizing: border-box; margin: 15px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; font-size: medium; line-height: inherit; font-family: &quot;Archivo Narrow&quot;, sans-serif; vertical-align: baseline; color: rgb(102, 102, 102);">The Laboratory is staffed and managed by qualified and experienced Scientists, Chemists and Technicians. Our team also comprises of Food Analyst recognised by FSSAI and environmentalist recognised by NABET.</p>\r\n', '92277image19.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'aaaa');

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE IF NOT EXISTS `certificate` (
  `certificate_id` int(255) NOT NULL AUTO_INCREMENT,
  `certificate_name` varchar(255) NOT NULL,
  `certificate_file_name` varchar(255) NOT NULL,
  PRIMARY KEY (`certificate_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`certificate_id`, `certificate_name`, `certificate_file_name`) VALUES
(1, 'Iso pdf', 'books1.jpg'),
(7, 'wolv cswd', '98063sample-image.jpg'),
(4, 'Orissa pdf', 'books2.jpg'),
(5, 'iso copy', 'books3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `feedback_id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `feedback`
--


-- --------------------------------------------------------

--
-- Table structure for table `galary`
--

CREATE TABLE IF NOT EXISTS `galary` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `file` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `galary`
--

INSERT INTO `galary` (`id`, `file`, `file_name`) VALUES
(1, '75869download.png', 'hello'),
(2, '733222017_11_18_12_44_19_.jpg', 'image file');

-- --------------------------------------------------------

--
-- Table structure for table `home_page_slider`
--

CREATE TABLE IF NOT EXISTS `home_page_slider` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `home_page_slider`
--

INSERT INTO `home_page_slider` (`id`, `image`, `heading`) VALUES
(1, '7727image1.jpg', 'slider 1 heading'),
(3, '21353ee.png', 'slider 2'),
(4, '58445ff.png', 'slider 3'),
(6, '44387wolverine-7460x4200-hugh-jackman-4k-8k-7084.jpg', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(255) NOT NULL AUTO_INCREMENT,
  `news_name` varchar(255) NOT NULL,
  `news_description` varchar(255) NOT NULL,
  `news_image` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_name`, `news_description`, `news_image`, `date`) VALUES
(3, 'indra &  gattar news', '<p>indra amar kache dubar gatta kheyeche</p>\r\n', '91942header-background.jpg', '1511266889'),
(4, 'Demo', '<p>Demo testing</p>\r\n', '29350image2.jpg', '1511597459');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `service_id` int(255) NOT NULL AUTO_INCREMENT,
  `service_cat_id` varchar(255) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `service_image` varchar(255) NOT NULL,
  `service_des` longtext NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_cat_id`, `service_name`, `service_image`, `service_des`) VALUES
(4, '2', 'new service', '68040header-background.jpg', '<p>ws</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `service_cat`
--

CREATE TABLE IF NOT EXISTS `service_cat` (
  `service_cat_id` int(255) NOT NULL AUTO_INCREMENT,
  `service_cat_name` varchar(255) NOT NULL,
  `service_cat_image` varchar(255) NOT NULL,
  PRIMARY KEY (`service_cat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `service_cat`
--

INSERT INTO `service_cat` (`service_cat_id`, `service_cat_name`, `service_cat_image`) VALUES
(1, 'Soil Test', '68944team-1.png'),
(2, 'Air Test', '32320sample-image.jpg'),
(3, 'Water Test', '99069team-3.png');
