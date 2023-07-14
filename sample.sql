-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 07:10 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `cam`
--

CREATE TABLE `cam` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sem` int(11) DEFAULT NULL,
  `staff_name` varchar(35) DEFAULT NULL,
  `course_code` varchar(10) DEFAULT NULL,
  `course_name` varchar(30) DEFAULT NULL,
  `subject_code` varchar(15) DEFAULT NULL,
  `course` varchar(10) NOT NULL,
  `statements` varchar(100) NOT NULL,
  `po1` int(11) NOT NULL,
  `po2` int(11) NOT NULL,
  `po3` int(11) NOT NULL,
  `po4` int(11) NOT NULL,
  `po5` int(11) NOT NULL,
  `po6` int(11) NOT NULL,
  `po7` int(11) NOT NULL,
  `po8` int(11) NOT NULL,
  `po9` int(11) NOT NULL,
  `po10` int(11) NOT NULL,
  `po11` int(11) NOT NULL,
  `po12` int(11) NOT NULL,
  `pso1` int(11) NOT NULL,
  `pso2` int(11) NOT NULL,
  `pso3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `coa`
--

CREATE TABLE `coa` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_code` varchar(20) NOT NULL,
  `course_name` varchar(20) NOT NULL,
  `sem` int(11) NOT NULL,
  `course_instructor` varchar(20) NOT NULL,
  `con` varchar(20) NOT NULL,
  `co1` float NOT NULL,
  `co2` float NOT NULL,
  `co3` float NOT NULL,
  `co4` float NOT NULL,
  `co5` float NOT NULL,
  `co6` float NOT NULL,
  `co7` float NOT NULL,
  `co8` float NOT NULL,
  `co9` float NOT NULL,
  `co10` float NOT NULL,
  `co11` float NOT NULL,
  `co12` float NOT NULL,
  `actions` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_code` varchar(20) NOT NULL,
  `s` int(11) NOT NULL,
  `a` int(11) NOT NULL,
  `b` int(11) NOT NULL,
  `c` int(11) NOT NULL,
  `d` int(11) NOT NULL,
  `e` int(11) NOT NULL,
  `f` int(11) NOT NULL,
  `appeared` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pamaverage`
--

CREATE TABLE `pamaverage` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_code` varchar(30) DEFAULT NULL,
  `po1` float NOT NULL,
  `po2` float NOT NULL,
  `po3` float NOT NULL,
  `po4` float NOT NULL,
  `po5` float NOT NULL,
  `po6` float NOT NULL,
  `po7` float NOT NULL,
  `po8` float NOT NULL,
  `po9` float NOT NULL,
  `po10` float NOT NULL,
  `po11` float NOT NULL,
  `po12` float NOT NULL,
  `pso1` float NOT NULL,
  `pso2` float NOT NULL,
  `pso3` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `poa`
--

CREATE TABLE `poa` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `staff_name` varchar(20) NOT NULL,
  `subject_code` varchar(20) NOT NULL,
  `course_code` varchar(20) NOT NULL,
  `course_name` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `statements` varchar(50) NOT NULL,
  `po1` float NOT NULL,
  `po2` float NOT NULL,
  `po3` float NOT NULL,
  `po4` float NOT NULL,
  `po5` float NOT NULL,
  `po6` float NOT NULL,
  `po7` float NOT NULL,
  `po8` float NOT NULL,
  `po9` float NOT NULL,
  `po10` float NOT NULL,
  `po11` float NOT NULL,
  `po12` float NOT NULL,
  `total` float NOT NULL,
  `pso1` float NOT NULL,
  `pso2` float NOT NULL,
  `pso3` float NOT NULL,
  `total1` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cam`
--
ALTER TABLE `cam`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `coa`
--
ALTER TABLE `coa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `pamaverage`
--
ALTER TABLE `pamaverage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `poa`
--
ALTER TABLE `poa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cam`
--
ALTER TABLE `cam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coa`
--
ALTER TABLE `coa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pamaverage`
--
ALTER TABLE `pamaverage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `poa`
--
ALTER TABLE `poa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cam`
--
ALTER TABLE `cam`
  ADD CONSTRAINT `cam_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `coa`
--
ALTER TABLE `coa`
  ADD CONSTRAINT `coa_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `grades`
--
ALTER TABLE `grades`
  ADD CONSTRAINT `grades_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pamaverage`
--
ALTER TABLE `pamaverage`
  ADD CONSTRAINT `pamaverage_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `poa`
--
ALTER TABLE `poa`
  ADD CONSTRAINT `poa_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
