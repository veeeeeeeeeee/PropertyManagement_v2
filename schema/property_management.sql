-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2016 at 03:49 PM
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

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `client_name`, `client_lname`, `client_email`, `client_mobile`, `client_street`, `client_suburb`, `client_state`, `client_pc`) VALUES
(1, 'Viet', 'Nguyen', 'vietthang.0705@gmail.com', '0434676356', '1/15 Malvern Grove', 'Caulfield North', 'VIC', '3161');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `feature_id` int(11) NOT NULL,
  `feature_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`feature_id`, `feature_name`) VALUES
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
  `property_id` int(11) NOT NULL,
  `property_street` varchar(100) NOT NULL,
  `property_suburb` varchar(50) NOT NULL,
  `property_state` varchar(5) NOT NULL,
  `property_pc` varchar(6) NOT NULL,
  `property_type` int(11) NOT NULL,
  `property_price` decimal(10,0) DEFAULT NULL,
  `property_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `propertys`
--

INSERT INTO `propertys` (`property_id`, `property_street`, `property_suburb`, `property_state`, `property_pc`, `property_type`, `property_price`, `property_desc`) VALUES
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
  `property_id` int(11) NOT NULL,
  `feature_id` int(11) NOT NULL,
  `property_feature_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `property_images`
--

CREATE TABLE `property_images` (
  `property_image_id` int(11) NOT NULL,
  `property_image_path` varchar(255) NOT NULL,
  `property_id` int(11) NOT NULL
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
  ADD PRIMARY KEY (`feature_id`);

--
-- Indexes for table `propertys`
--
ALTER TABLE `propertys`
  ADD PRIMARY KEY (`property_id`),
  ADD KEY `prop_type` (`property_type`);

--
-- Indexes for table `property_features`
--
ALTER TABLE `property_features`
  ADD PRIMARY KEY (`property_id`,`feature_id`),
  ADD KEY `feat_id` (`feature_id`);

--
-- Indexes for table `property_images`
--
ALTER TABLE `property_images`
  ADD PRIMARY KEY (`property_image_id`),
  ADD KEY `prop_id` (`property_id`);

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
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `feature_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `propertys`
--
ALTER TABLE `propertys`
  MODIFY `property_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `property_images`
--
ALTER TABLE `property_images`
  MODIFY `property_image_id` int(11) NOT NULL AUTO_INCREMENT;
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
  ADD CONSTRAINT `propertys_ibfk_1` FOREIGN KEY (`property_type`) REFERENCES `types` (`type_id`);

--
-- Constraints for table `property_features`
--
ALTER TABLE `property_features`
  ADD CONSTRAINT `property_features_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `propertys` (`property_id`),
  ADD CONSTRAINT `property_features_ibfk_2` FOREIGN KEY (`feature_id`) REFERENCES `features` (`feature_id`);

--
-- Constraints for table `property_images`
--
ALTER TABLE `property_images`
  ADD CONSTRAINT `property_images_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `propertys` (`property_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
