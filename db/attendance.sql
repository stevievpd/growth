-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2022 at 08:03 AM
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
-- Database: `apsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time_in` time NOT NULL,
  `status` int(1) NOT NULL,
  `time_out` time NOT NULL,
  `num_hr` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `employee_id`, `date`, `time_in`, `status`, `time_out`, `num_hr`) VALUES
(13, 1, '2018-04-27', '08:00:00', 1, '17:00:00', 8),
(14, 1, '2018-04-28', '08:00:00', 1, '17:00:00', 8),
(15, 1, '2018-05-04', '08:00:00', 1, '17:00:00', 8),
(16, 1, '2018-05-02', '08:00:00', 1, '17:00:00', 8),
(17, 1, '2018-05-01', '08:00:00', 1, '17:00:00', 8),
(18, 1, '2018-05-03', '08:00:00', 1, '17:00:00', 8),
(74, 1, '2018-04-30', '08:00:00', 1, '16:44:23', 7.7333333333333),
(75, 3, '2018-04-18', '08:00:00', 1, '17:00:00', 8),
(76, 4, '2018-04-19', '08:00:00', 1, '17:00:00', 8),
(77, 4, '2018-04-27', '08:00:00', 1, '17:00:00', 7),
(78, 4, '2018-04-28', '08:00:00', 1, '17:00:00', 8),
(79, 4, '2018-05-01', '08:30:00', 1, '17:00:00', 8),
(80, 4, '2018-05-03', '08:00:00', 1, '17:00:00', 0),
(81, 4, '2018-05-05', '08:00:00', 1, '17:00:00', 9),
(83, 4, '2018-05-31', '12:00:00', 0, '18:00:00', 5),
(84, 4, '2018-05-18', '08:00:00', 1, '17:00:00', 7),
(85, 4, '2018-05-09', '09:00:00', 1, '18:00:00', 8),
(86, 5, '2018-07-11', '07:41:00', 1, '16:00:00', 7),
(87, 1, '2018-07-11', '06:27:00', 1, '15:00:00', 6),
(88, 6, '2018-07-11', '07:45:00', 1, '14:48:00', 3.8),
(89, 7, '2018-07-11', '07:56:00', 1, '17:00:00', 8),
(90, 8, '2018-07-11', '06:05:12', 1, '16:00:00', 7),
(91, 9, '2018-07-11', '18:12:06', 0, '00:00:00', 0),
(92, 10, '2018-07-11', '18:13:01', 0, '00:00:00', 0),
(93, 11, '2018-07-11', '18:14:30', 0, '00:00:00', 0),
(94, 12, '2018-07-11', '18:16:14', 0, '00:00:00', 0),
(95, 13, '2018-07-11', '18:17:32', 0, '00:00:00', 0),
(96, 14, '2018-07-11', '18:18:33', 0, '00:00:00', 0),
(97, 15, '2018-07-11', '18:19:26', 0, '00:00:00', 0),
(98, 16, '2018-07-11', '18:20:26', 0, '00:00:00', 0),
(99, 17, '2018-07-11', '18:21:41', 0, '00:00:00', 0),
(100, 18, '2018-07-12', '23:46:31', 1, '00:00:00', 0),
(101, 19, '2018-07-12', '23:50:28', 1, '00:00:00', 0),
(102, 20, '2018-07-12', '23:52:48', 1, '00:00:00', 0),
(103, 21, '2018-07-12', '23:54:50', 1, '00:00:00', 0),
(104, 22, '2018-07-12', '23:56:02', 1, '00:00:00', 0),
(105, 23, '2018-07-12', '13:57:00', 0, '00:00:00', 12.95);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
