-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2022 at 10:23 AM
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
-- Database: `growth`
--

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `supplier_name` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone_number` bigint(250) NOT NULL,
  `bank` varchar(250) NOT NULL,
  `bank_account` varchar(250) NOT NULL,
  `branch` varchar(250) NOT NULL,
  `tin` varchar(250) NOT NULL,
  `stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `supplier_name`, `address`, `city`, `country`, `email`, `phone_number`, `bank`, `bank_account`, `branch`, `tin`, `stamp`) VALUES
(1, 'gssgssgsd', 'gsssg', 'gsgssg', 'Philippines', 'ambL@gmail.com', 0, '', 'sssgsg', 'ssgssd', '425-5224-1212', '0000-00-00 00:00:00'),
(6, 'Bulla Crave', 'Tandang Sora', 'QC', 'Philippines', 'ambL@gmail.com', 0, '', 'RCBC', 'Makati', '4100-5282452-2000', '0000-00-00 00:00:00'),
(7, 'Bulla Crave', 'Tandang Sora', 'QC', 'Philippines', 'ambL@gmail.com', 0, '', 'rcbc', 'makati', '242424-63-33', '0000-00-00 00:00:00'),
(8, 'fsssdff', 'sfsfs', 'QC', 'Philippines', 'ambL@gmail.com', 264161125, '', '452424-24242', 'vsvSvbb', '747442-544', '2022-07-26 01:59:43'),
(9, 'asdasd', 'gsssg', 'asdsad', 'dasdsad', 'amdsaas@gmail.com', 1212121, '', '121212', '121212121', '2121212121', '2022-07-26 02:21:54'),
(10, '123213123', '12312321321', '321321', '3213123213', '21321321@gmail.com', 12312321321, '', '12312312', '312321321', '312321321321', '2022-07-26 02:22:50'),
(11, 'xxxx', 'xxx', 'xxx', 'xxx', 'xxxx@gmail.com', 1212121, 'BDO Unibank Inc.', '121212', '1212121', '2121212121', '2022-07-26 02:23:50'),
(20, 'Lizada\'s Group of Corporations', 'Singapore', 'Singapore', 'Singapore', 'Singapore@gmail.com', 9615089172, 'Security Bank', '000003800078', 'Quezon Avev', '220279220', '2022-07-26 07:09:51'),
(21, 'jff', 'fjj', 'jffgfj', 'jfjffj', 'ambL@gmail.com', 53232123, 'Land Bank of the Philippines', 'jfg', '1dhgddhdh', '2424275201', '2022-07-26 07:43:51'),
(22, 'hdffhf', 'hfghfghfgh', 'hfgfgfgfg', 'hffg', 'ambL@gmail.com', 264161125, 'Bank of the Philippine Islands', 'fghfgfg', 'ghfgfgh', '1101101', '2022-07-26 07:55:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
