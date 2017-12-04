-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Nov 29, 2017 at 01:52 AM
-- Server version: 5.6.36-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `qualissure_db`
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
(1, '<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><strong>Qualissure Laboratory Services (QLS) is a professional services company </strong><strong>offering value added services throughout pan India. It was formed with the objective to operate as an organization that is truly receptive to client&rsquo;s needs, in particular, the need to understand a business process</strong> <strong>and to ensure systems are in place, that too in delivering its services.</strong></li>\r\n	<li><strong>The Laboratory is staffed and managed by qualified and experienced Scientists and Technicians. Our team also comprises of Food Analyst recognised by FSSAI.</strong></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', '97062carousel-3.jpg');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`certificate_id`, `certificate_name`, `certificate_file_name`) VALUES
(7, 'BSCIC', '65676wolverine-7460x4200-hugh-jackman-4k-8k-7084.jpg'),
(8, 'demo', '88150sample-image.jpg');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `name`, `email`, `message`, `date`) VALUES
(1, 'demo', 'demo@gmail.com', 'demo testing', '1511251241'),
(2, 'Indrajit', 'indrajitghosh707@gmail.com', 'demo testing for email', '1511252332'),
(3, 'SUDIP', 'sudip.mukhuty@gmail.com', 'Test mail', '1511601696'),
(4, 'labanya biswas', 'labanyabiswas.india@gmail.com', 'demo test', '1511679847'),
(5, 'demo name', 'support@portme.co', 'testing purpose only', '1511680074');

-- --------------------------------------------------------

--
-- Table structure for table `home_page_slider`
--

CREATE TABLE IF NOT EXISTS `home_page_slider` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `home_page_slider`
--

INSERT INTO `home_page_slider` (`id`, `image`, `heading`) VALUES
(3, '26379slider-01.jpg', 'Slider1'),
(4, '84866slider-lab.jpg', 'Slider2'),
(5, '73493image1.jpg', 'Slider3');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(255) NOT NULL AUTO_INCREMENT,
  `news_name` varchar(255) NOT NULL,
  `news_description` longtext NOT NULL,
  `news_image` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_name`, `news_description`, `news_image`, `date`) VALUES
(1, 'asdas', '<p>da</p>\r\n', '', '1511354595');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_cat_id`, `service_name`, `service_image`, `service_des`) VALUES
(4, '2', 'new service', '68040header-background.jpg', '<p>ws</p>\r\n'),
(6, '6', 'Air', '26162testo-480-application-multifunction-005674-EN_master.jpg', '<div style="margin-left:.38in;">&bull;Ambient air Quality</div>\r\n\r\n<div style="margin-left:.38in;">&bull;Fugitive emission</div>\r\n\r\n<div style="margin-left:.38in;">&bull;Stack monitoring</div>\r\n\r\n<div style="margin-left:.38in;">&bull;Indoor Air Quality</div>\r\n\r\n<div style="margin-left:.38in;">&bull;Noise Monitoring</div>\r\n\r\n<div style="margin-left:.38in;">&bull;Work Zone Monitoring</div>\r\n'),
(7, '6', 'Water', '17151slider1.jpg', '<div style="margin-left:.38in;">&bull;Surface water</div>\r\n\r\n<div style="margin-left:.38in;">&bull;Ground water</div>\r\n\r\n<div style="margin-left:.38in;">&bull;Waste Water</div>\r\n\r\n<div style="margin-left:.38in;">&bull;Drinking water</div>\r\n'),
(8, '6', 'Soil', '44722soiltesting2.gif', '<div style="margin-left:.38in;">&bull;Sediments</div>\r\n\r\n<div style="margin-left:.38in;">&bull;Sludge</div>\r\n'),
(9, '7', 'Milk and Milk Products', '574466.jpg', ''),
(10, '7', 'Oil', '18618oil-1255.jpg', ''),
(11, '7', 'Bakery and Confectionery', '26382acoustic-testing-2.jpg', ''),
(12, '7', 'Sugar', '62804maxresdefault.jpg', ''),
(13, '7', 'Ready-to-Eat Foods', '6143300_nima_hero-image_20170627-compressed.jpg', ''),
(14, '7', 'Tea', '54514113846_istock-184948797.jpg', ''),
(15, '7', 'Food grains and pulses', '59095f_7ea88acc31f3584c1edd4c8cd4b8a5c9.jpg', ''),
(16, '7', 'Spices and Condiments', '26911medical-slide-2.jpg', ''),
(17, '9', 'Management System Certification', '15061image8.jpg', ''),
(18, '9', 'Laboratory  Setup', '16785ly4ig.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `service_cat`
--

CREATE TABLE IF NOT EXISTS `service_cat` (
  `service_cat_id` int(255) NOT NULL AUTO_INCREMENT,
  `service_cat_name` varchar(255) NOT NULL,
  `service_cat_image` varchar(255) NOT NULL,
  PRIMARY KEY (`service_cat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `service_cat`
--

INSERT INTO `service_cat` (`service_cat_id`, `service_cat_name`, `service_cat_image`) VALUES
(6, 'Environmental Monitoring', '80696environment-1.jpg'),
(7, 'Food Analysis', '46630foodscience.jpg'),
(8, 'Nutrient Content Estimation and Labeling', '4315shutterstock_102363250.jpg'),
(9, 'Consultancy Services', '64232consultancy-services.jpg'),
(10, 'Training and Development', '17185AAEAAQAAAAAAAAdkAAAAJDZlN2M4ZmI1LTQ5MTgtNDk3Ny1iYWJiLWU5M2Q5ZDlkZTBkOA.jpg'),
(11, 'Analytical support to students and research workers for testing of  environment and food parameters', '91478147391-849x565-biomedical-engineer.jpg'),
(12, 'Research and Development', '44282bigstock-science-chemistry-medicine-82219907.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
