-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: november 11, 2021 at 02:03 PM
-- Server version: 10.4.18-apache
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sahoo bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'Modak', 'Umesh', 200, '2021-11-15 16:43:23'),
(2, 'Om', 'keshav', 200, '2021-04-17 19:00:31'),
(3, 'Shaswat', 'Nimisha', 5000, '2021-04-17 19:01:32'),
(4, 'Modak', 'Om', 5000, '2021-04-17 19:06:15'),
(5, 'Atmajit', 'Modak', 500, '2021-04-17 19:28:24'),
(6, 'Keshav', 'Prahlad', 500, '2021-04-17 19:30:31'),
(7, 'Atmajit', 'Modak', 200, '2021-04-17 19:31:22'),
(8, 'Om', 'Shaswat', 520, '2021-04-18 07:39:58'),
(9, 'Atmajit', 'Shubham', 500, '2021-04-18 09:37:08'),
(10, 'Shubham', 'Arjun', 100, '2021-04-18 11:52:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1087, 'Atmajit', 'jeet@gmail.com', 35000),
(2654, 'Modak', 'modak@gmail.com', 20999),
(3624, 'Shaswat', 'khetrapal@gmail.com', 70400),
(4542, 'Arjun', 'arya@gmail.com', 61900),
(5345, 'Om', 'om@gmail.com', 21000),
(5465, 'Keshav', 'jain@gmail.com', 42300),
(6554, 'nimisha', 'n2002@gmail.com', 56000),
(7875, 'Shubham', 'shubham@gmail.com', 59180),
(8877, 'Prahlad', 'prahlad@gmail.com', 30000),
(9245, 'Umesh', 'umesh@gmail.com', 60000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--f
ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54655;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
