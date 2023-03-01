-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2022 at 02:07 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `genhr`
--

-- --------------------------------------------------------

--
-- Table structure for table `logistic_assign`
--

CREATE TABLE `logistic_assign` (
  `ass_id` int(14) NOT NULL,
  `asset_id` int(14) NOT NULL,
  `assign_id` varchar(64) DEFAULT NULL,
  `project_id` int(14) NOT NULL,
  `task_id` int(14) NOT NULL,
  `log_qty` varchar(64) DEFAULT NULL,
  `start_date` varchar(64) DEFAULT NULL,
  `end_date` varchar(64) DEFAULT NULL,
  `back_date` varchar(64) DEFAULT NULL,
  `back_qty` varchar(64) DEFAULT NULL,
  `remarks` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logistic_assign`
--

INSERT INTO `logistic_assign` (`ass_id`, `asset_id`, `assign_id`, `project_id`, `task_id`, `log_qty`, `start_date`, `end_date`, `back_date`, `back_qty`, `remarks`) VALUES
(17, 53, 'ROW1143', 0, 0, '59', '10-08-14', '2022-01-01', NULL, NULL, 'NA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logistic_assign`
--
ALTER TABLE `logistic_assign`
  ADD PRIMARY KEY (`ass_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logistic_assign`
--
ALTER TABLE `logistic_assign`
  MODIFY `ass_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
