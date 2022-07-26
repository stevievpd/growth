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
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `id` int(11) NOT NULL,
  `purchase_date` date NOT NULL,
  `expected_date` date NOT NULL,
  `item` varchar(250) NOT NULL,
  `quantity` bigint(250) NOT NULL,
  `price` bigint(250) NOT NULL,
  `amount_total` bigint(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_order`
--

INSERT INTO `purchase_order` (`id`, `purchase_date`, `expected_date`, `item`, `quantity`, `price`, `amount_total`) VALUES
(1, '2022-07-13', '2022-07-05', 'ddgdggdfdf', 4111121, 1212121, 11121112),
(2, '0000-00-00', '0000-00-00', '', 213123123, 123123123, 0),
(3, '0242-04-24', '0424-02-24', '', 122, 22221, 0),
(4, '0022-03-12', '1313-03-31', '', 20, 202, 0),
(5, '0002-02-22', '0202-02-20', '', 1222, 1212, 0),
(6, '0012-02-21', '0121-12-22', '', 1222, 2212, 0),
(7, '0212-02-22', '0222-11-12', '', 222, 212, 0),
(8, '0000-00-00', '0012-02-21', '', 2122, 21210, 45007620),
(9, '0222-02-22', '0022-02-22', '', 410, 101, 41410),
(10, '0000-00-00', '0000-00-00', '', 5, 500, 2500),
(11, '2222-02-22', '0000-00-00', '', 5, 500, 2500),
(12, '2222-01-31', '2220-02-02', 'Keyboard', 200, 1000, 200000),
(13, '0022-02-20', '0002-02-02', 'sgsgsss', 52522, 25552, 1342042144),
(14, '2222-02-20', '0011-11-10', 'Simcard', 401011, 4244, 1701890684),
(15, '0202-02-20', '0202-02-20', 'Simcard', 2222, 222, 493284),
(16, '0000-00-00', '0000-00-00', '[value-4]', 0, 0, 0),
(17, '2222-02-22', '2222-02-22', 'Laptop Huawei', 5202020, 202020, 1050912080400),
(18, '0000-00-00', '0000-00-00', 'Laptop Huawei', 5552, 5252, 29159104),
(19, '0011-01-12', '0000-00-00', 'Simcard', 1011, 111, 112221);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `purchase_order`
--
ALTER TABLE `purchase_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
