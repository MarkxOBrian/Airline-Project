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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `fly`
--

CREATE TABLE `fly` (
  `id` int(11) NOT NULL,
  `flight_name` varchar(100) NOT NULL,
  `departure_city` varchar(100) NOT NULL,
  `arrival_city` varchar(100) NOT NULL,
  `departure_date` date NOT NULL,
  `arrival_date` date NOT NULL,
  `departure_time` varchar(20) NOT NULL,
  `price` double NOT NULL,
  `duration` varchar(20) NOT NULL,
  `free_seats` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fly`
--

INSERT INTO `fly` (`id`, `flight_name`, `departure_city`, `arrival_city`, `departure_date`, `arrival_date`, `departure_time`, `price`, `duration`, `free_seats`) VALUES
(1, 'kqzwx', 'Nairobi', 'Dubai', '2017-11-21', '2017-11-22', '9 am', 50, '7 hours', -2),
(2, 'JumboJet', 'Nairobi', 'Dubai', '2017-11-21', '2017-11-22', '1 pm', 50, '7 hours', 68),
(3, 'lets fly', 'kisumu', 'eldoret', '2017-12-20', '2017-12-21', '12:00', 12000, '2 hours', 198),
(5, 'jetlink2', 'Kisumu', 'Homa Bay', '2017-11-29', '2017-11-30', '9 am', 2000, '20 minutes', 200),
(6, 'jetlink2', 'Kisumu', 'Homa Bay', '2017-11-29', '2017-11-30', '9 am', 2000, '20 minutes', 200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fly`
--
ALTER TABLE `fly`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fly`
--
ALTER TABLE `fly`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
