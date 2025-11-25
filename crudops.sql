-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2023 at 06:19 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudops`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_information`
--

CREATE TABLE `user_information` (
  `id` int(10) NOT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `phone` bigint(12) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `profileimage` blob DEFAULT NULL,
  `createdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_information`
--

INSERT INTO `user_information` (`id`, `firstname`, `lastname`, `phone`, `email`, `dob`, `gender`, `address`, `password`, `profileimage`, `createdate`) VALUES
(2, 'a', 'b', 9876543210, 'engineer@webdesigner.com', '2016-05-20', 'on', 'tarakeswar', '81dc9bdb52d04dc20036dbd8313ed0', NULL, '2021-12-05 12:52:29'),
(3, 'sumalya', 'banerjee', 9330896242, 'engineer@webdesigner.com', '1998-02-04', 'male', 'tarakeswar', 'e10adc3949ba59abbe56e057f20f88', NULL, '2021-12-05 13:31:20'),
(4, 'sumalya', 'banerjee', 9654124121, 'engineer@webdesigner.com', '2021-12-20', 'male', 'ddd', '202cb962ac59075b964b07152d234b', 0x7070202831292e6a7067, '2021-12-05 13:50:08'),
(5, 'sayan-m', 'mondal-m', 8555550000, 'sayan.mondal@gmail.com', '2012-02-12', 'male', 'sahapur koloney,new alipur, kolkata-700091', '202cb962ac59075b964b07152d234b', 0x7070202831292e6a7067, '2021-12-05 13:54:47'),
(6, 'sumalya', 'banerjee', 956645555, 'engineer@webdesigner.com', '2021-12-08', 'male', 'cccc', '74b87337454200d4d33f80c4663dc5', '', '2021-12-05 14:37:12'),
(7, 'Arnab', 'Mondal', 9330896242, 'am@gmail.com', '0000-00-00', 'male', 'kolkata', '202cb962ac59075b964b07152d234b', '', '2021-12-05 14:39:13'),
(9, 'sayan', 'karmakar', 6523141110, 'sayan@gmail.com', '1994-11-11', 'male', 'testaadd', '202cb962ac59075b964b07152d234b', 0x6d6174746865772d77696562652d7a6b636c785356693146632d756e73706c6173682e6a7067, '2021-12-08 11:13:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_information`
--
ALTER TABLE `user_information`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_information`
--
ALTER TABLE `user_information`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
