-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2025 at 07:30 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citycot`
--

-- --------------------------------------------------------

--
-- Table structure for table `asset_reg`
--

CREATE TABLE `asset_reg` (
  `asset_id` int(20) NOT NULL,
  `asset_name` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `purchased_date` date DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `condition_to` varchar(50) DEFAULT NULL,
  `assigned_to` varchar(59) DEFAULT NULL,
  `notes` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `asset_reg`
--

INSERT INTO `asset_reg` (`asset_id`, `asset_name`, `category`, `purchased_date`, `location`, `condition_to`, `assigned_to`, `notes`) VALUES
(138, 'baashe', 'health', '2025-02-01', 'main-camps', 'scrap', 'apdimalik', 'good'),
(139, 'jaamac', 'midwephorry', '3032-11-22', 'nakhiil-camps', 'working', 'harun', 'bad'),
(143, 'muscab', 'communication skills', '2020-02-02', 'nakhiil-camps', 'working', 'hahaha', 'bababa'),
(145, 'aadam', 'it', '0111-02-21', 'nakhiil-camps', 'working', 'jjjjj', 'ppppppp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asset_reg`
--
ALTER TABLE `asset_reg`
  ADD PRIMARY KEY (`asset_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asset_reg`
--
ALTER TABLE `asset_reg`
  MODIFY `asset_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
