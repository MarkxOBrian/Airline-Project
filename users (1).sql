-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2017 at 06:16 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

CREATE TABLE `booked` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `card_no` varchar(50) NOT NULL,
  `contact_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booked`
--

INSERT INTO `booked` (`id`, `name`, `address`, `city`, `state`, `card_no`, `contact_no`) VALUES
(0, 'dan', '46edk', 'Kitale', 'Tanzania', '93u4riedkx', '5994939');

-- --------------------------------------------------------

--
-- Table structure for table `booked_flights`
--

CREATE TABLE `booked_flights` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `credit_card_no` varchar(50) NOT NULL,
  `contact_no` int(50) NOT NULL,
  `flight_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booked_flights`
--

INSERT INTO `booked_flights` (`id`, `name`, `address`, `city`, `state`, `credit_card_no`, `contact_no`, `flight_name`) VALUES
(1, '', '', '', '', '', 0, '<br /><b>Notice</b>:  Undefined variable: y in <b>'),
(2, 'jenny', '48736w', 'Bondo', 'Kenya', '47884373', 34838, 'jumbojet'),
(3, 'brian', '8473', 'Mombasa', 'Kenya', '4738', 388989, 'jetlink'),
(4, '', '', '', '', '', 0, '<br /><b>Notice</b>:  Undefined variable: y in <b>'),
(5, '', '', '', '', '', 0, '<br /><b>Notice</b>:  Undefined variable: y in <b>'),
(6, '', '', '', '', '', 0, '<br /><b>Notice</b>:  Undefined variable: y in <b>'),
(7, '', '', '', '', '', 0, ''),
(8, '', '', '', '', '', 0, ''),
(9, 'othina', '373743', 'Kisumu', 'Kenya', '374784', 943874, 'jumbojet'),
(10, 'othina', '373743', 'Kisumu', 'Kenya', '374784', 943874, 'jumbojet'),
(11, 'othina', '373743', 'Kisumu', 'Kenya', '374784', 943874, 'jumbojet'),
(12, 'othina', '373743', 'Kisumu', 'Kenya', '374784', 943874, 'jumbojet'),
(13, 'dan', '3839', 'Kisumu', 'Kenya', '374784', 7989859, 'jumbojet'),
(14, 'dan', '3839', 'Kisumu', 'Kenya', '374784', 7989859, 'jumbojet'),
(27, 'njuguna', '3839', 'Mombasa', 'Kenya', '3773', 93898, 'jumbojet'),
(28, 'njuguna', '3839', 'Mombasa', 'Kenya', '3773', 93898, 'jumbojet'),
(29, 'njuguna', '3839', 'Mombasa', 'Kenya', '3773', 93898, 'jumbojet'),
(30, 'njuguna', '3839', 'Mombasa', 'Kenya', '3773', 93898, 'jumbojet'),
(31, 'njuguna', '3839', 'Mombasa', 'Kenya', '3773', 93898, 'jumbojet'),
(32, 'njuguna', '3839', 'Mombasa', 'Kenya', '3773', 93898, 'jumbojet'),
(33, 'njuguna', '3839', 'Mombasa', 'Kenya', '3773', 93898, 'jumbojet'),
(34, 'njuguna', '3839', 'Mombasa', 'Kenya', '3773', 93898, 'jumbojet'),
(35, 'njuguna', '3839', 'Mombasa', 'Kenya', '3773', 93898, 'jumbojet'),
(36, 'manu', '38743', 'Kirinyaga', 'Kenya', '37899', 883487, 'jumbojet'),
(37, 'manu', '38743', 'Kirinyaga', 'Kenya', '37899', 883487, 'jumbojet');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `sit` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `sit`) VALUES
(1, 199);

-- --------------------------------------------------------

--
-- Table structure for table `cancelled_flights`
--

CREATE TABLE `cancelled_flights` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `credit_card_no` varchar(50) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `flight_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cancelled_flights`
--

INSERT INTO `cancelled_flights` (`id`, `name`, `address`, `city`, `state`, `credit_card_no`, `contact_no`, `flight_name`) VALUES
(1, 'felix', '58784e', 'nairobi', 'Uganda', '493478', '82782882', 'jumbojet'),
(2, 'jenny', '3783', 'Bondo', 'Kenya', '439438', '3487447', 'kq32x'),
(15, 'Ouma', '39473', 'Mombasa', 'Kenya', '954', '713671888', 'jumbojet'),
(16, 'Ouma', '39473', 'Mombasa', 'Kenya', '954', '713671888', 'jumbojet'),
(17, 'Ouma', '39473', 'Mombasa', 'Kenya', '954', '713671888', 'jumbojet'),
(18, 'Ouma', '39473', 'Mombasa', 'Kenya', '954', '713671888', 'jumbojet'),
(19, 'Ouma', '39473', 'Mombasa', 'Kenya', '954', '713671888', 'jumbojet'),
(20, 'Ouma', '39473', 'Mombasa', 'Kenya', '954', '713671888', 'jumbojet'),
(21, 'Ouma', '39473', 'Mombasa', 'Kenya', '954', '713671888', 'jumbojet'),
(22, 'Ouma', '39473', 'Mombasa', 'Kenya', '954', '713671888', 'jumbojet'),
(23, 'Ouma', '39473', 'Mombasa', 'Kenya', '954', '713671888', 'jumbojet'),
(24, 'Ouma', '39473', 'Mombasa', 'Kenya', '954', '713671888', 'jumbojet'),
(25, 'Ouma', '39473', 'Mombasa', 'Kenya', '954', '713671888', 'jumbojet'),
(26, 'Ouma', '39473', 'Mombasa', 'Kenya', '954', '713671888', 'jumbojet'),
(38, 'Ouma', '373743', 'Kirinyaga', 'Kenya', '3773', '7989859', 'jumbojet'),
(39, 'walubengu daniel', '3342', 'Bungoma', 'Kenya', '8094', '47778', 'jumbojet');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `username`, `password`, `email`) VALUES
(1, 'felix', '23', 'fixo@yahoo.com'),
(2, 'fixo', '24', 'fixo@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `username`, `email`, `password`) VALUES
(0, 'Felix', 'fixo@yahoo.com', '23');

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `id` int(11) NOT NULL,
  `seats` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`id`, `seats`) VALUES
(1, 200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booked`
--
ALTER TABLE `booked`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booked_flights`
--
ALTER TABLE `booked_flights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cancelled_flights`
--
ALTER TABLE `cancelled_flights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booked_flights`
--
ALTER TABLE `booked_flights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
