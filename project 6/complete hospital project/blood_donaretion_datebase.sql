-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2025 at 05:58 PM
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
-- Database: `blood_donaretion`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `doctor_id` int(11) NOT NULL,
  `doctor_name` varchar(200) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `title` varchar(40) DEFAULT NULL,
  `departement` varchar(100) DEFAULT NULL,
  `expereince` varchar(100) DEFAULT NULL,
  `phone` int(20) DEFAULT NULL,
  `degree` varchar(100) DEFAULT NULL,
  `fees` varchar(100) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doctor_id`, `doctor_name`, `email`, `title`, `departement`, `expereince`, `phone`, `degree`, `fees`, `photo`) VALUES
(1, 'xirsi', 'xirsi@gmail.com', 'prophasor', 'cardiology', '10years', 907654232, '2016', '3000', NULL),
(2, 'saciid', 'saciid@gmail.com', 'parphasor', 'cardiology', '2years', 907324567, '2013', '400', NULL),
(8, 'muuse', 'musse@gmail.com', 'praphasor', 'cardiology', '13years', 908765342, '2013', '2000', NULL),
(10, 'muuse', 'muse@gmail.com', 'parphasor', 'cardiology', '13years', 2147483647, '2013', '250', NULL),
(15, 'fuaad', 'fuaad@gmail.com', 'idk', 'cardiology', '10years', 9076542, '2019', '450', NULL),
(26, 'ciise', 'ciiise@gmail.com', 'pr', 'cardiology', '1years', 90765356, '2013', '1000', NULL),
(29, 'cusmaan ali', 'cusmaan12@gmail.com', 'nursery', 'cardiology', '2month', 22222, 'master', '1000', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `donor_id` int(11) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `contact_number` int(11) DEFAULT NULL,
  `blood_group` varchar(20) DEFAULT NULL,
  `age` varchar(20) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `donation_date` varchar(30) DEFAULT NULL,
  `adress` varchar(40) DEFAULT NULL,
  `medical_history` varchar(50) DEFAULT NULL,
  `additional_details` varchar(59) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`donor_id`, `fullname`, `contact_number`, `blood_group`, `age`, `gender`, `donation_date`, `adress`, `medical_history`, `additional_details`) VALUES
(1, 'maxamed', 0, '+A', '55', 'male', '', 'bosaaso', 'good', 'goood'),
(2, 'sahra', 907630548, 'A-', '40', 'female', '1986-06-01', 'bosaaso', 'good', 'good'),
(3, 'geela', 653627252, 'B+', '23', 'male', '1983-07-02', 'garoowe', 'good', 'good'),
(4, 'ciise', 23435443, 'A+', '23', 'male', '2024-12-05', 'bosaaso', 'good', 'bad'),
(5, 'xaamud', 3746734, 'B-', '36', 'male', '2024-12-03', 'garoowe', 'good', 'good'),
(6, 'maariyo', 905231511, '+A', '18', 'female', '2006-07-03', 'bosaaso', 'good', 'good'),
(7, 'muno', 67642837, 'A+', '15', 'female', '2024-12-04', 'ceergabo', 'good', 'good'),
(39, 'salmo', 9878653, 'B+', '18', 'female', '2024-12-03', 'kenya', 'good', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `f_name` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `l_name` varchar(100) DEFAULT NULL,
  `age` varchar(100) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `heigth` varchar(100) DEFAULT NULL,
  `blood_group` varchar(30) DEFAULT NULL,
  `pulse` varchar(69) DEFAULT NULL,
  `allergy` varchar(69) DEFAULT NULL,
  `weight` varchar(100) DEFAULT NULL,
  `b_pressure` varchar(208) DEFAULT NULL,
  `respiration` varchar(100) DEFAULT NULL,
  `deit` varchar(50) DEFAULT NULL,
  `addition` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `f_name`, `gender`, `email`, `address`, `l_name`, `age`, `phone`, `heigth`, `blood_group`, `pulse`, `allergy`, `weight`, `b_pressure`, `respiration`, `deit`, `addition`) VALUES
(1, 'maxamed', 'male', 'maxamed270@gmail.com', 'xamar', 'abshir', '19', 907092469, '80', 'O+', 'idk', 'fish', '55kg', '78', 'good', 'vitamins', 'idk'),
(4, 'aasiya', 'female', 'aasiya@gmail.com', 'nairopi', 'muuse', '23', 90763527, '57cm', 'AB+', 'idk', 'egg', '70kg', '67', 'good', 'vegetable', 'idk'),
(5, 'faaduma', 'female', 'faaduma@gmail.com', 'xamar', 'daahir', '26', 2147483647, '52cm', 'O-', 'idk', 'no allergy', '78kg', '54', 'good', 'vegetable', 'idk'),
(6, 'mubarik', 'male', 'mubarik@gmail.com', 'boosao', 'c/rashiid', '18', 906538753, '77cm', 'B+', 'idk', 'no allergy', '58kg', '65', 'bad', 'vitamins', 'idk'),
(7, 'mustapha', 'male', 'mustapha@gmail.com', 'nairopi', 'muuse', '19', 976342587, '52cm', 'AB+', 'idk', 'egg', '58kg', '63', 'good', 'vegetable', 'idk'),
(8, 'cabdale', 'male', 'cabdale@gmail.com', 'galkacyo', 'idiris', '19', 907322255, '87cm', 'O+', 'idk', 'no allergy', '68kg', '73', 'good', 'vitamins', 'idk'),
(9, 'jabriil', 'male', 'jibrill@gmail.com', 'qardho', 'geele', '22', 907625363, '97cm', 'O-', 'idk', 'fish', '78kg', '65', 'good', 'vitamins', 'idk'),
(10, 'sakariya', 'male', 'sakariya@gmail.com', 'xamar', 'ciise', '24', 9065432, '97cm', 'B+', 'idk', 'egg', '88kg', '76', 'bad', 'vitamins', 'idk'),
(11, 'caaliya', 'female', 'caliya@gmail.com', 'qardho', 'axmed', '24', 9076543, '52cm', 'AB+', 'idk', 'no allergy', '55kg', '56', 'good', 'vitamins', 'idk'),
(12, 'mubarik', 'male', 'mubarik@gmail.com', 'qardho', 'daahir', '23', 896567456, '', 'A+', '', '', '', '', '', 'vegetable', ''),
(13, 'bashiir', 'male', 'bashiir@gmail.com', 'xamar', 'daahir', '23', 90765672, '57cm', 'O-', 'idk', 'egg', '78kg', '65', 'good', 'vitamins', 'idk'),
(14, 'bashiir', 'male', 'bashiir@gmail.com', 'xamar', 'daahir', '23', 90765672, '57cm', 'O-', 'idk', 'egg', '78kg', '65', 'good', 'vitamins', 'idk');

-- --------------------------------------------------------

--
-- Table structure for table `recievers`
--

CREATE TABLE `recievers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `region` varchar(30) DEFAULT NULL,
  `town` varchar(50) DEFAULT NULL,
  `vilage` varchar(60) DEFAULT NULL,
  `blood_type` varchar(40) DEFAULT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recievers`
--

INSERT INTO `recievers` (`id`, `name`, `email`, `phone`, `region`, `town`, `vilage`, `blood_type`, `status`) VALUES
(1, 'Maxamed Abshir', 'maxamed270@gmail.com', 907092469, 'bari', 'bosaaso', 'xeryaha', 'O+', 'reject'),
(2, 'axmed cuamr', 'ahmed@gmail.com', 9665641, 'nugaal', 'garoowe', 'barxada', 'B+', 'accept'),
(3, 'axmed cuamr', 'ahmed@gmail.com', 9665641, 'nugaal', 'garoowe', 'barxada', 'B+', 'waiting'),
(4, 'maryam ali', 'maryam@gmail.com', 90876576, 'banaadir', 'xamar', 'hodan', 'A-', 'reject'),
(5, 'maryam ali', 'maryam@gmail.com', 90876576, 'banaadir', 'xamar', 'hodan', 'A-', 'waiting'),
(6, 'guleed', 'bashiir@gmail.com', 975656725, 'sanaag', 'hadaftimo', 'dhaarac', 'B-', 'reject');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`donor_id`),
  ADD UNIQUE KEY `contact_number` (`contact_number`),
  ADD UNIQUE KEY `contact_number_2` (`contact_number`),
  ADD UNIQUE KEY `contact_number_3` (`contact_number`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recievers`
--
ALTER TABLE `recievers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `donor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `recievers`
--
ALTER TABLE `recievers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
