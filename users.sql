-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2020 at 08:50 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hstworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `first_name` varchar(55) NOT NULL,
  `last_name` varchar(55) DEFAULT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(125) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `status` int(1) DEFAULT 2 COMMENT '1:Active, 2: Registered Verification Pending, 0: Disabled'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `phone`, `last_login`, `status`) VALUES
(7, '$firstname', '$lastname', '$uusername', '$email', '$phone', 0, NULL, 2),
(8, 'fname', 'lname', '', 'email', 'phone', 0, NULL, 2),
(9, 'fname', 'lname', 'uname', 'email', 'pswd', 2147483647, NULL, 2),
(10, 'fname', 'lname', 'uname', 'email', 'pswd', 2147483647, NULL, 2),
(11, 'fname', 'lname', 'uname', 'email', 'pswd', 11111111, NULL, 2),
(12, 'fname', 'lname', 'uname', 'email', 'pswd', 1111111111, NULL, 2),
(13, 'fname', 'lname', 'uname', 'email', 'pswd', 1234567890, NULL, 2),
(14, 'fname', 'lname', 'uname', 'email', 'pswd', 2147483647, NULL, 2),
(15, 'fname', 'lname', 'uname', 'email', 'pswd', 4372137721, NULL, 2),
(16, 'fname', 'lname', 'uname', 'email', 'pswd', 4372137721, NULL, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
