-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2020 at 02:22 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_base`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `bus_id` int(20) NOT NULL,
  `route_id` int(20) NOT NULL,
  `driver_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`bus_id`, `route_id`, `driver_id`) VALUES
(1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(15) NOT NULL,
  `name` varchar(15) NOT NULL,
  `route` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `name`, `route`, `type`) VALUES
(1, 'saad', 'sahiwal', 'Student'),
(2, 'Hamza', 'Faisalabad', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `cust_contact_no`
--

CREATE TABLE `cust_contact_no` (
  `c_id` int(15) NOT NULL,
  `phone_number` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cust_contact_no`
--

INSERT INTO `cust_contact_no` (`c_id`, `phone_number`) VALUES
(1, 4558211),
(2, 4558411),
(4, 4558311);

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `driver_id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driver_id`, `name`) VALUES
(1, 'ali');

-- --------------------------------------------------------

--
-- Table structure for table `driver_contact_no`
--

CREATE TABLE `driver_contact_no` (
  `driver_id` int(20) NOT NULL,
  `contact_no` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver_contact_no`
--

INSERT INTO `driver_contact_no` (`driver_id`, `contact_no`) VALUES
(1, 4550729),
(2, 4553711),
(3, 4558311);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `res_id` int(20) NOT NULL,
  `c_id` int(20) NOT NULL,
  `route_id` int(20) NOT NULL,
  `seat_no` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`res_id`, `c_id`, `route_id`, `seat_no`) VALUES
(1, 2, 24, 44);

-- --------------------------------------------------------

--
-- Table structure for table `res_paid`
--

CREATE TABLE `res_paid` (
  `res_id` int(20) NOT NULL,
  `paid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `res_paid`
--

INSERT INTO `res_paid` (`res_id`, `paid`) VALUES
(1, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `res_pending`
--

CREATE TABLE `res_pending` (
  `res_id` int(20) NOT NULL,
  `pending` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `res_pending`
--

INSERT INTO `res_pending` (`res_id`, `pending`) VALUES
(1, 'no'),
(2, 'yes'),
(4, 'nopes');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `route_id` int(20) NOT NULL,
  `departure_time` int(20) NOT NULL,
  `arrival_time` int(20) NOT NULL,
  `day` varchar(20) NOT NULL,
  `departure_place` varchar(20) NOT NULL,
  `arrival_place` varchar(20) NOT NULL,
  `ticket_price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`route_id`, `departure_time`, `arrival_time`, `day`, `departure_place`, `arrival_place`, `ticket_price`) VALUES
(2, 1400, 1500, 'sunday', 'sahiwal', 'multan', 1500),
(3, 1200, 1600, 'monday', 'sahiwal', 'multan', 1500),
(4, 1400, 1800, 'monday', 'lahore', 'pindi', 1600);

-- --------------------------------------------------------

--
-- Table structure for table `type_1`
--

CREATE TABLE `type_1` (
  `c_id` int(15) NOT NULL,
  `faculty` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type_1`
--

INSERT INTO `type_1` (`c_id`, `faculty`) VALUES
(1, 'Ce'),
(3, 'EE'),
(4, 'CE'),
(5, 'ME');

-- --------------------------------------------------------

--
-- Table structure for table `type_2`
--

CREATE TABLE `type_2` (
  `c_id` int(15) NOT NULL,
  `designation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type_2`
--

INSERT INTO `type_2` (`c_id`, `designation`) VALUES
(1, 'instructor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`bus_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `cust_contact_no`
--
ALTER TABLE `cust_contact_no`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`driver_id`);

--
-- Indexes for table `driver_contact_no`
--
ALTER TABLE `driver_contact_no`
  ADD PRIMARY KEY (`driver_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`res_id`);

--
-- Indexes for table `res_paid`
--
ALTER TABLE `res_paid`
  ADD PRIMARY KEY (`res_id`);

--
-- Indexes for table `res_pending`
--
ALTER TABLE `res_pending`
  ADD PRIMARY KEY (`res_id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`route_id`);

--
-- Indexes for table `type_1`
--
ALTER TABLE `type_1`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `type_2`
--
ALTER TABLE `type_2`
  ADD PRIMARY KEY (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `bus_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cust_contact_no`
--
ALTER TABLE `cust_contact_no`
  MODIFY `c_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `driver_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `driver_contact_no`
--
ALTER TABLE `driver_contact_no`
  MODIFY `driver_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `res_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `res_paid`
--
ALTER TABLE `res_paid`
  MODIFY `res_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `res_pending`
--
ALTER TABLE `res_pending`
  MODIFY `res_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `route_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `type_1`
--
ALTER TABLE `type_1`
  MODIFY `c_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `type_2`
--
ALTER TABLE `type_2`
  MODIFY `c_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
