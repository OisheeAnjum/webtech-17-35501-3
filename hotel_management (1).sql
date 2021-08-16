-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2021 at 12:35 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `nid/pass` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `gender` enum('m','f','o') NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`id`, `user_id`, `user_name`, `name`, `nationality`, `nid/pass`, `email`, `phone`, `gender`, `pass`) VALUES
(7, 548, 'o', 'o', '', 0, 'oishee42@gmail.com', 0, 'f', 'o'),
(8, 454, 'a', 'a', '', 0, 'oishee42@gmail.com', 0, 'f', 'a'),
(9, 794, 'Ifty', 'Sarowar Ifty', '', 0, 'tyudeohs@gmail.com', 0, 'm', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `roomid` bigint(20) NOT NULL,
  `id` bigint(20) NOT NULL,
  `room` enum('deluxe','luxary','private','beach') NOT NULL,
  `num` varchar(100) NOT NULL,
  `bed` varchar(100) NOT NULL,
  `gym` enum('yes','no') NOT NULL,
  `spa` enum('yes','no') NOT NULL,
  `pool` enum('yes','no') NOT NULL,
  `movie` enum('yes','no') NOT NULL,
  `meal` varchar(100) NOT NULL,
  `cin` datetime NOT NULL,
  `cout` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`roomid`, `id`, `room`, `num`, `bed`, `gym`, `spa`, `pool`, `movie`, `meal`, `cin`, `cout`) VALUES
(2, 7, 'deluxe', '2', 'single', 'no', 'no', 'no', 'no', 'lunch', '2021-08-25 01:43:00', '2021-08-20 01:43:00'),
(3, 7, 'private', '1', 'single', 'no', 'no', 'no', 'no', 'lunch', '2021-08-12 01:46:00', '2021-08-05 01:46:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`roomid`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_info`
--
ALTER TABLE `customer_info`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `roomid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`id`) REFERENCES `customer_info` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
