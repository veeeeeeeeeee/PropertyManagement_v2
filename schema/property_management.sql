-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2016 at 11:59 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `property_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(255) NOT NULL,
  `client_lname` varchar(255) NOT NULL,
  `client_email` varchar(100) DEFAULT NULL,
  `client_mobile` varchar(20) DEFAULT NULL,
  `client_street` varchar(255) DEFAULT NULL,
  `client_suburb` varchar(100) DEFAULT NULL,
  `client_state` varchar(10) DEFAULT NULL,
  `client_pc` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `client`:
--

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

DROP TABLE IF EXISTS `feature`;
CREATE TABLE IF NOT EXISTS `feature` (
  `feat_id` int(11) NOT NULL AUTO_INCREMENT,
  `feat_name` varchar(255) NOT NULL,
  PRIMARY KEY (`feat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `feature`:
--

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`feat_id`, `feat_name`) VALUES
(10, 'bed'),
(11, 'bath'),
(12, 'carport'),
(13, 'pool'),
(14, 'tennis court'),
(15, 'gym'),
(16, 'study');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

DROP TABLE IF EXISTS `property`;
CREATE TABLE IF NOT EXISTS `property` (
  `prop_id` int(11) NOT NULL AUTO_INCREMENT,
  `prop_street` varchar(100) NOT NULL,
  `prop_suburb` varchar(50) NOT NULL,
  `prop_state` varchar(5) NOT NULL,
  `prop_pc` varchar(6) NOT NULL,
  `prop_type` int(11) NOT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `prop_desc` text NOT NULL,
  PRIMARY KEY (`prop_id`),
  KEY `prop_type` (`prop_type`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `property`:
--   `prop_type`
--       `type` -> `type_id`
--

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`prop_id`, `prop_street`, `prop_suburb`, `prop_state`, `prop_pc`, `prop_type`, `price`, `prop_desc`) VALUES
(2, '2 korowa street', 'sunshine', 'vic', '3020', 12, '1200000', 'some description'),
(3, '9 flinders', 'melbourne cbd', 'vic', '3000', 13, '1100000', 'blah'),
(6, '3 invermay grove', 'sunshine', 'vic', '3020', 12, '1500000', 'test description'),
(7, '5 elizabeth st', 'melbourne cbd', 'vic', '3000', 13, '3500000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam vel arcu tincidunt luctus. Nullam pellentesque ipsum vitae lectus auctor pulvinar. Proin maximus, odio eget facilisis ullamcorper, purus sapien viverra eros, non fringilla velit lectus consectetur urna. Phasellus eget eleifend eros, in condimentum nibh. Phasellus gravida est id libero tristique tincidunt. Phasellus quis ullamcorper risus, at bibendum odio. Mauris auctor odio nec sodales bibendum.'),
(8, '900 dandenong road', 'malvern east', 'vic', '3145', 11, '120000', ''),
(9, '900 dandenong road', 'hawthorne', 'vic', '3122', 11, '0', '');

--
-- Triggers `property`
--
DROP TRIGGER IF EXISTS `prop_del_trigger`;
DELIMITER $$
CREATE TRIGGER `prop_del_trigger` BEFORE DELETE ON `property` FOR EACH ROW begin
	delete from property_image where prop_id = old.prop_id;
    delete from property_feature where prop_id = old.prop_id;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `property_feature`
--

DROP TABLE IF EXISTS `property_feature`;
CREATE TABLE IF NOT EXISTS `property_feature` (
  `prop_id` int(11) NOT NULL,
  `feat_id` int(11) NOT NULL,
  `no_feat` int(11) NOT NULL,
  PRIMARY KEY (`prop_id`,`feat_id`),
  KEY `feat_id` (`feat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `property_feature`:
--   `prop_id`
--       `property` -> `prop_id`
--   `feat_id`
--       `feature` -> `feat_id`
--

-- --------------------------------------------------------

--
-- Table structure for table `property_image`
--

DROP TABLE IF EXISTS `property_image`;
CREATE TABLE IF NOT EXISTS `property_image` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `img_path` varchar(255) NOT NULL,
  `prop_id` int(11) NOT NULL,
  PRIMARY KEY (`img_id`),
  KEY `prop_id` (`prop_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `property_image`:
--   `prop_id`
--       `property` -> `prop_id`
--

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(30) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `type`:
--

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_name`) VALUES
(10, 'house'),
(11, 'unit'),
(12, 'apartment'),
(13, 'shared house'),
(14, 'factory');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `property`
--
ALTER TABLE `property`
  ADD CONSTRAINT `property_ibfk_1` FOREIGN KEY (`prop_type`) REFERENCES `type` (`type_id`);

--
-- Constraints for table `property_feature`
--
ALTER TABLE `property_feature`
  ADD CONSTRAINT `property_feature_ibfk_1` FOREIGN KEY (`prop_id`) REFERENCES `property` (`prop_id`),
  ADD CONSTRAINT `property_feature_ibfk_2` FOREIGN KEY (`feat_id`) REFERENCES `feature` (`feat_id`);

--
-- Constraints for table `property_image`
--
ALTER TABLE `property_image`
  ADD CONSTRAINT `property_image_ibfk_1` FOREIGN KEY (`prop_id`) REFERENCES `property` (`prop_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
