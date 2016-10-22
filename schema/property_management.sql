-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2016 at 02:29 PM
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
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_lname` varchar(255) NOT NULL,
  `client_email` varchar(100) DEFAULT NULL,
  `client_mobile` varchar(20) DEFAULT NULL,
  `client_street` varchar(255) DEFAULT NULL,
  `client_suburb` varchar(100) DEFAULT NULL,
  `client_state` varchar(10) DEFAULT NULL,
  `client_pc` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `feat_id` int(11) NOT NULL,
  `feat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`feat_id`, `feat_name`) VALUES
(10, 'bed'),
(11, 'bath'),
(12, 'carport'),
(13, 'pool'),
(14, 'tennis court'),
(15, 'gym'),
(16, 'study');

-- --------------------------------------------------------

--
-- Table structure for table `propertys`
--

CREATE TABLE `propertys` (
  `prop_id` int(11) NOT NULL,
  `prop_street` varchar(100) NOT NULL,
  `prop_suburb` varchar(50) NOT NULL,
  `prop_state` varchar(5) NOT NULL,
  `prop_pc` varchar(6) NOT NULL,
  `prop_type` int(11) NOT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `prop_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `propertys`
--

INSERT INTO `propertys` (`prop_id`, `prop_street`, `prop_suburb`, `prop_state`, `prop_pc`, `prop_type`, `price`, `prop_desc`) VALUES
(2, '2 korowa street', 'sunshine', 'vic', '3020', 12, '1200000', 'some description'),
(3, '9 flinders', 'melbourne cbd', 'vic', '3000', 13, '1100000', 'blah'),
(6, '3 invermay grove', 'sunshine', 'vic', '3020', 12, '1500000', 'test description'),
(7, '5 elizabeth st', 'melbourne cbd', 'vic', '3000', 13, '3500000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam vel arcu tincidunt luctus. Nullam pellentesque ipsum vitae lectus auctor pulvinar. Proin maximus, odio eget facilisis ullamcorper, purus sapien viverra eros, non fringilla velit lectus consectetur urna. Phasellus eget eleifend eros, in condimentum nibh. Phasellus gravida est id libero tristique tincidunt. Phasellus quis ullamcorper risus, at bibendum odio. Mauris auctor odio nec sodales bibendum.'),
(8, '900 dandenong road', 'malvern east', 'vic', '3145', 11, '120000', ''),
(9, '900 dandenong road', 'hawthorne', 'vic', '3122', 11, '0', '');

--
-- Triggers `propertys`
--
DELIMITER $$
CREATE TRIGGER `prop_del_trigger` BEFORE DELETE ON `propertys` FOR EACH ROW begin
	delete from property_image where prop_id = old.prop_id;
    delete from property_feature where prop_id = old.prop_id;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `property_features`
--

CREATE TABLE `property_features` (
  `prop_id` int(11) NOT NULL,
  `feat_id` int(11) NOT NULL,
  `no_feat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `property_images`
--

CREATE TABLE `property_images` (
  `img_id` int(11) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `prop_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`type_id`, `type_name`) VALUES
(10, 'house'),
(11, 'unit'),
(12, 'apartment'),
(13, 'shared house'),
(14, 'factory');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`feat_id`);

--
-- Indexes for table `propertys`
--
ALTER TABLE `propertys`
  ADD PRIMARY KEY (`prop_id`),
  ADD KEY `prop_type` (`prop_type`);

--
-- Indexes for table `property_features`
--
ALTER TABLE `property_features`
  ADD PRIMARY KEY (`prop_id`,`feat_id`),
  ADD KEY `feat_id` (`feat_id`);

--
-- Indexes for table `property_images`
--
ALTER TABLE `property_images`
  ADD PRIMARY KEY (`img_id`),
  ADD KEY `prop_id` (`prop_id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `feat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `propertys`
--
ALTER TABLE `propertys`
  MODIFY `prop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `property_images`
--
ALTER TABLE `property_images`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `propertys`
--
ALTER TABLE `propertys`
  ADD CONSTRAINT `propertys_ibfk_1` FOREIGN KEY (`prop_type`) REFERENCES `types` (`type_id`);

--
-- Constraints for table `property_features`
--
ALTER TABLE `property_features`
  ADD CONSTRAINT `property_features_ibfk_1` FOREIGN KEY (`prop_id`) REFERENCES `propertys` (`prop_id`),
  ADD CONSTRAINT `property_features_ibfk_2` FOREIGN KEY (`feat_id`) REFERENCES `features` (`feat_id`);

--
-- Constraints for table `property_images`
--
ALTER TABLE `property_images`
  ADD CONSTRAINT `property_images_ibfk_1` FOREIGN KEY (`prop_id`) REFERENCES `propertys` (`prop_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
