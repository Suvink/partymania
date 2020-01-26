-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 26, 2020 at 03:35 PM
-- Server version: 5.7.18
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `partymania`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `Password`) VALUES
(2, 'suvin@noi.lk', 'bunny'),
(3, 'admin@ucsc.lk', 'admin@ucsc');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `name` text NOT NULL,
  `date` text NOT NULL,
  `venue` text NOT NULL,
  `participants` int(11) NOT NULL,
  `package` text NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `customerid`, `name`, `date`, `venue`, `participants`, `package`, `remarks`) VALUES
(18, 13, 'UCSC Default', '2020-02-09', 'UCSC Complex', 300, 'Aniversary Package', 'Nothing'),
(19, 7, 'Dilhani Gamhatha', '2020-03-07', 'Gampola, Kandy', 20, 'Birthday Package', 'Make a chocolate cake'),
(20, 6, 'Suvin Nimnaka', '2020-03-07', '55/21, Swarna Rd', 70, 'Birthday Package', ''),
(24, 20, 'Amasha Gamage', '2020-06-28', '112/4,Padukka Road', 150, 'Birthday Package', ''),
(25, 21, 'Tharindi ', '2020-04-03', '1491 -1/5, Kottawa North, Pannipitiya.', 60, 'Birthday Package', ''),
(26, 22, 'Isurika Perera', '2020-04-03', 'Park Rd, Horana', 30, 'Wedding Package', 'Need a groom!'),
(27, 23, 'Bawanthi Imasha', '2020-03-16', 'Honiton Place, Awissawella', 250, 'Aniversary Package', ''),
(28, 24, 'Hasini ', '2020-07-31', 'Grand Hotel', 1000, 'Wedding Package', ''),
(29, 25, 'Thilini Kulathunge', '2020-05-03', 'Gampaha, Sri Lanka', 150, 'Aniversary Package', ''),
(30, 26, 'Hiruni', '2020-04-03', 'Galle', 1250, 'Wedding Package', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`) VALUES
(6, 'Suvin Nimnaka', 'tikirimaarie@gmail.com', '0771655198', '123'),
(7, 'Dilhani Gamhatha', 'dgamhatha@gmail.com', '0776333451', 'bunny'),
(13, 'Default User', 'ucsc@ucsc.lk', '0112121212', 'ucsc'),
(19, 'Sandani', 'sw@gmail.com', '1234567', '123'),
(20, 'Amasha Gamage', 'amashag98@gmail.com', '0710624567', 'is@ucsc123'),
(21, 'Tharindi Danuththara', 'tharindijayalath@gmail.com', '0711873456', '12345678'),
(22, 'Isurika Perera', 'isurika@gmail.com', '0771239871', 'iskra'),
(23, 'Bawanthi Imasha', 'bawanthiimasha@gmail.com', '0712342345', 'abcdefg'),
(24, 'Hasini Hatharasinghe', 'hasini@gmail.com', '0719973456', 'hasini@123'),
(25, 'Thilini Kulathunge', 'thilini@gmail.com', '0714915092', 'thilini@123'),
(26, 'Hiruni Wasana', 'hiruni123@gmail.com', '0773456789', 'hiruni@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
