-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 04:25 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hna_tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `dates` date NOT NULL,
  `no_tourist` int(20) NOT NULL,
  `package` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `city`, `destination`, `dates`, `no_tourist`, `package`) VALUES
(1, 'Lahore', 'Kaghan', '2022-06-11', 6, 'economy'),
(2, 'Lahore', 'Kaghan', '2022-06-11', 6, 'economy'),
(3, 'karachi', 'Naran', '2022-06-23', 7, 'business'),
(4, 'Islamabad', 'KPK', '2022-06-14', 2, 'business'),
(5, 'Multan', 'Swat', '2022-06-23', 5, 'business'),
(6, 'Quetta', 'Kashmir', '2022-07-01', 2, 'economy'),
(7, 'Lahore', 'Kaghan', '2022-06-29', 5, 'economy'),
(8, 'Lahore', 'Skardu', '2022-07-07', 10, 'business'),
(9, 'Lahore', 'Skardu', '2022-07-07', 10, 'business'),
(10, 'Lahore', 'Skardu', '2022-07-07', 10, 'business');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `msg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `subject`, `msg`) VALUES
(1, 'huzaifa', 'huzaifa@gmail.com', 'test', 'sajkhdlahlkda'),
(2, 'ali', 'ali@gmail.com', 'test2', 'i want to book tour'),
(3, 'Ahmad', 'Ahmad@gmail.com', 'test3', 'I want to more details'),
(4, 'ali', 'ali@gmail.com', 'test3', 'test message'),
(5, 'ali', 'ali@gmail.com', 'test3', 'test message'),
(6, 'huzaifa', 'huzaifa@gmail.com', 'test3', 'test message');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Huzaifa ', 'huzaifa@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'Ali', 'ali@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'Ahmad', 'Ahmad@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'Sir', 'sir@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
