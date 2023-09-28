-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2023 at 10:06 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emp_employees`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` varchar(5) NOT NULL,
  `emp_name` varchar(30) NOT NULL,
  `emp_mobile` varchar(11) NOT NULL,
  `emp_email` varchar(30) NOT NULL,
  `emp_pass` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `emp_add` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='employee';

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `emp_mobile`, `emp_email`, `emp_pass`, `emp_add`) VALUES
('CS111', 'chanin imjinda', '0943178795', 'chanin551@gmail.com', 'chaninimj11235', 'bongkok'),
('CS112', 'jintana choma', '0875551243', 'jintana544@gmail.com', 'jintana544545', 'bongkok'),
('CS113', 'duyawaut girama', '0984112355', 'duyaw544@gmail.com', 'p014115466115', 'bongkok'),
('CS114', 'kanoksak kamugi', '0875545124', 'kanoksak44@gmail.com', 'kan09411546254', 'bongkok'),
('CS115', 'varakong kittin', '0945177852', 'varaki9551@gmail.com', 'valaki094511234', 'bongkok');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
