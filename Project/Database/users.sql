-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2020 at 09:27 AM
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
(16, 'fname', 'lname', 'uname', 'email', 'pswd', 4372137721, NULL, 2),
(17, 'fname', 'lname', 'uname', 'email', 'pswd', 4372137721, NULL, 2),
(18, 'fname', 'lname', 'uname', 'email', 'pswd', 4372137721, NULL, 2),
(20, 'Huzaifa', 'Saboowala', 'huzisaboo007', 'huzisaboo@gmail.com', 'Huzib@bu1', 4379895253, NULL, 2),
(21, 'Huzaifa', 'Saboowala', 'huzisaboo007', 'huzisaboo@gmail.com', 'Huzib@bu1', 4379895253, NULL, 2),
(22, 'Huzaifa', 'Saboowala', 'huzisaboo007', 'huzisaboo@gmail.com', 'Huzib@bu1', 4379895253, NULL, 2),
(23, 'Huzaifa', 'Saboowala', 'huzisaboo007', 'huzisaboo@gmail.com', '', 4379895253, NULL, 2),
(24, 'Huzaifa', 'Saboowala', 'huzisaboo007', 'huzisaboo@gmail.com', '', 4379895253, NULL, 2),
(25, 'Huzaifa', 'Saboowala', 'huzisaboo007', 'huzisaboo@gmail.com', '', 4379895253, NULL, 2),
(26, 'Huzaifa', 'Saboowala', 'huzisaboo007', 'huzisaboo@gmail.com', '', 4379895253, NULL, 2),
(27, 'Huzaifa', 'Saboowala', 'huzisaboo007', 'huzisaboo@gmail.com', '', 4379895253, NULL, 2),
(28, 'Huzaifa', 'Saboowala', 'huzisaboo007', 'huzisaboo@gmail.com', '', 4379895253, NULL, 2),
(29, 'Huzaifa', 'Saboowala', 'huzisaboo007', 'huzisaboo@gmail.com', '', 4379895253, NULL, 2),
(30, 'Huzaifa', 'Saboowala', 'huzisaboo007', 'huzisaboo@gmail.com', '', 4379895253, NULL, 2),
(31, 'Huzaifa', 'Saboowala', 'huzisaboo007', 'huzisaboo@gmail.com', '', 4379895253, NULL, 2),
(32, 'Huzaifa', 'Saboowala', 'huzisaboo007', 'huzisaboo@gmail.com', '', 4379895253, NULL, 2),
(33, 'Huzaifa', 'Saboowala', 'huzisaboo007', 'huzisaboo@gmail.com', '', 4379895253, NULL, 2),
(34, 'Huzaifa', 'Saboowala', 'huzisaboo007', 'huzisaboo@gmail.com', '', 4379895253, NULL, 2),
(35, 'Huzaifa', 'Saboowala', 'huzisaboo007', 'huzisaboo@gmail.com', '', 4379895253, NULL, 2),
(36, 'Huzaifa', 'Saboowala', 'huzisaboo007', 'huzisaboo@gmail.com', '', 4379895253, NULL, 2),
(37, 'Huzaifa', 'Saboowala', 'huzisaboo007', 'huzisaboo@gmail.com', '', 4379895253, NULL, 2),
(38, 'Huzaifa', 'Saboowala', 'huzisaboo007', 'huzisaboo@gmail.com', '', 4379895253, NULL, 2),
(39, 'Huzaifa', 'Saboowala', 'huzisaboo0071', 'huzisaboo@gmail.com', '', 4379895253, NULL, 2),
(40, 'Huzaifa', 'Saboowala', 'huzisaboo0072', 'huzisaboo@gmail.com', 'f697fa813067c587ca96d9f8658eb25402398d98', 4379895253, NULL, 2),
(41, 'Huzaifa', 'Saboowala', 'huzisaboo', 'huzisaboo@gmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 4379895253, NULL, 2),
(42, 'Huzaifa', 'Saboowala', 'huzisaboo01', 'huzisaboo@gmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 4379895253, NULL, 2),
(43, 'Huzaifa', 'Saboowala', 'huzisaboo012', 'huzisaboo@gmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 4379895253, NULL, 2),
(44, 'Huzaifa', 'Saboowala', 'huzisaboo0121', 'huzisaboo@gmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 4379895253, NULL, 2),
(45, 'Huzaifa', 'Saboowala', 'huzisaboo11', 'huzisaboo@gmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 4379895253, NULL, 2),
(46, 'Huzaifa', 'Saboowala', 'huzisaboo0111', 'huzisaboo@gmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 4379895253, NULL, 2),
(47, 'Huzaifa', 'Saboowala', 'huzisaboo0124', 'huzisaboo@gmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 4379895253, NULL, 2),
(48, 'Huzaifa', 'Saboowala', 'huzisaboo0073', 'huzisaboo@gmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 4379895253, NULL, 2),
(49, 'Huzaifa', 'Saboowala', 'huzisaboo0074', 'huzisaboo@gmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 4379895253, NULL, 2),
(50, 'Huzaifa', 'Saboowala', 'huzisaboo0075', 'huzisaboo@gmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 4379895253, NULL, 2),
(51, 'Huzaifa', 'Saboowala', 'huzisaboo0076', 'huzisaboo@gmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 4379895253, NULL, 2),
(52, 'Huzaifa', 'Saboowala', 'huzisaboo0077', 'huzisaboo@gmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 4379895253, NULL, 2),
(53, 'Huzaifa', 'Saboowala', 'huzisaboo007', 'huzisabooq@gmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 4379895253, NULL, 2),
(54, 'Huzaifa', 'Saboowala', 'huzisaboo007', 'huzisaboop@gmail.com', 'f697fa813067c587ca96d9f8658eb25402398d98', 4379895253, NULL, 2),
(56, 'Shreyas', 'Babu', 'shreyasbabu', 'shreyas@gmail.com', '0589da44d30db3df27e0c2ba38f7a1217ab61083', 6479895365, NULL, 2),
(57, 'Shreyas', 'Babu', 'shreyasbabu', 'shreyasbabu@gmail.com', '0589da44d30db3df27e0c2ba38f7a1217ab61083', 6475895632, NULL, 2),
(58, 'Tejasv', 'Goel', 'tejasvgoel', 'tejasvgoel@gmail.com', 'a5810f55a250fd41b2fbbff54b612508ce38fada', 4378521479, NULL, 2);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
