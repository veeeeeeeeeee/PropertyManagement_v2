-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2016 at 11:24 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `prop_id` int(11) NOT NULL,
  `prop_street` varchar(100) NOT NULL,
  `prop_suburb` varchar(50) NOT NULL,
  `prop_state` varchar(5) NOT NULL,
  `prop_pc` varchar(6) NOT NULL,
  `prop_type` int(11) NOT NULL,
  `price` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`prop_id`, `prop_street`, `prop_suburb`, `prop_state`, `prop_pc`, `prop_type`, `price`) VALUES
(2, '2 korowa street', 'sunshine', 'vic', '3020', 2, '1200000'),
(3, '9 flinders', 'melbourne cbd', 'vic', '3000', 3, '1100000'),
(6, '3 invermay grove', 'sunshine', 'vic', '3020', 2, '1500000'),
(7, '5 elizabeth st', 'melbourne cbd', 'vic', '3000', 3, '3500000'),
(8, '900 dandenong road', 'malvern east', 'vic', '3145', 1, '120000'),
(9, '900 dandenong road', 'hawthorne', 'vic', '3122', 1, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`prop_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `prop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
