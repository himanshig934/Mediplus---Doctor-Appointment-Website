-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2025 at 06:55 AM
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
-- Database: `mediplus`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointmentform`
--

CREATE TABLE `appointmentform` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneno` varchar(15) NOT NULL,
  `appointmentdate` date NOT NULL,
  `dapartment` enum('cardiologist','neurologist','gynology','dentist','Orthopedics','Pediatrics','Dentist') NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointmentform`
--

INSERT INTO `appointmentform` (`id`, `name`, `email`, `phoneno`, `appointmentdate`, `dapartment`, `message`) VALUES
(1, 'himanshi gupta', 'himanshig934@gmail.com', '08595844425', '2025-12-31', 'cardiologist', 'hi'),
(2, 'himanshi gupta', 'himanshig934@gmail.com', '08595844425', '2025-12-31', 'neurologist', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

CREATE TABLE `contactform` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneno` int(10) NOT NULL,
  `specialist` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactform`
--

INSERT INTO `contactform` (`id`, `name`, `email`, `phoneno`, `specialist`, `message`) VALUES
(1, 'himanshi gupta', 'himanshig934@gmail.com', 2147483647, 'Cardiology', 'hi'),
(2, 'Advika', 'advika@gmail.com', 2147483647, 'neurology', 'I  need to consult'),
(3, 'Advika', 'advika@gmail.com', 1236547899, 'Cardiologist', 'hi'),
(4, 'himani', 'himanisharma@gmail.com', 2147483647, 'Neurology', 'Hello Mediplus'),
(5, 'hardik', 'hardiksadnani@gmail.com', 1236547899, 'Dentist', 'Test mail'),
(6, 'poonam', 'poonam21@gmail.com', 2147483647, 'Gynalogist', 'hi'),
(7, 'yash', 'yash@gmail.com', 1234569878, 'Cardiologist', 'Test mail'),
(8, 'ajay', 'ajay@gmail.com', 2147483647, 'surgeon', 'Need a appointment'),
(9, 'Tanmay', 'tanmay@gmail.com', 1236547899, 'Cardiologist', 'hi'),
(10, 'Nisha', 'nisha@gmail.com', 2147483647, 'Gynalogist', 'hi'),
(11, 'Anil', 'anil@gmail.com', 2147483647, 'Dentist', 'hi'),
(12, 'radhika', 'radhika@gmail.com', 2147483647, 'Cardiology', 'hi'),
(13, 'deepika', 'deepika21@gmail.com', 2147483647, 'Cardiologist', 'hi'),
(14, 'sourabh', 'sourabh12@Gmail.com', 2147483647, 'Gynalogist', 'hi'),
(15, 'kashu', 'kashu@Gmail.com', 1236544589, 'Cardiologist', 'ji'),
(16, 'himanshi gupta', 'himanshig934@gmail.com', 2147483647, 'Cardiology', 'wqqs2w'),
(17, 'himanshi gupta', 'himanshig934@gmail.com', 2147483647, 'Cardiology', 'wqqs2w'),
(18, 'lovely', 'lovely@gmail.com', 21354684, 'Dentist', 'hi'),
(19, 'simmi', 'simmi21@gmail.com', 1236547899, 'Gynalogist', 'hi'),
(20, 'love', 'love21@gmail.com', 2147483647, 'Gynalogist', 'hi'),
(21, 'deepa', 'love2@gmail.com', 2147483647, 'Cardiology', 'hi'),
(22, 'kashish', 'kashish21@gmail.com', 1236547896, 'Gynalogist', 'hi'),
(23, 'himanshi gupta', 'himanshig934@gmail.com', 2147483647, 'Cardiologist', 'hi'),
(24, 'himanshi gupta', 'himanshig934@gmail.com', 2147483647, 'Cardiologist', 'hi'),
(25, 'sunita', 'sunita@gmail.com', 2147483647, 'Cardiology', 'need consultancy'),
(26, 'sunita', 'sunita@gmail.com', 2147483647, 'Cardiology', 'need consultancy'),
(27, 'aditi', 'aditi@gmail.com', 2147483647, 'Gynalogist', 'hi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointmentform`
--
ALTER TABLE `appointmentform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactform`
--
ALTER TABLE `contactform`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointmentform`
--
ALTER TABLE `appointmentform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contactform`
--
ALTER TABLE `contactform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
