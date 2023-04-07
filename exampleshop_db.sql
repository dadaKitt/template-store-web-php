-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2023 at 01:18 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exampleshop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `stocktb`
--

CREATE TABLE `stocktb` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(255) DEFAULT NULL,
  `s_type` varchar(255) DEFAULT NULL,
  `s_cate` varchar(255) DEFAULT NULL,
  `s_description` varchar(255) DEFAULT NULL,
  `s_price` int(11) DEFAULT NULL,
  `s_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stocktb`
--

INSERT INTO `stocktb` (`s_id`, `s_name`, `s_type`, `s_cate`, `s_description`, `s_price`, `s_img`) VALUES
(1, 'test', 'id', 'id', 'test', 9999, ''),
(2, 'test2', 'game', 'gamepass', 'test2', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `usertb`
--

CREATE TABLE `usertb` (
  `user_id` int(11) NOT NULL,
  `email` varchar(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `pwd` varchar(16) DEFAULT NULL,
  `permission` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usertb`
--

INSERT INTO `usertb` (`user_id`, `email`, `username`, `pwd`, `permission`) VALUES
(1, '0', 'admin.front', 'admin.front', 0),
(2, '0', 'admin.end', 'admin.end', 1),
(3, 'user@gmail.', 'user.test', '1234', 0),
(4, 'user2@gmail', 'user.test.2', '1234566', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stocktb`
--
ALTER TABLE `stocktb`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `usertb`
--
ALTER TABLE `usertb`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stocktb`
--
ALTER TABLE `stocktb`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usertb`
--
ALTER TABLE `usertb`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
