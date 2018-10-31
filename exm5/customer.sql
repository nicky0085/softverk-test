-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2018 at 07:44 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customer`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(50) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `name`) VALUES
(1, 'Obama'),
(2, 'Thumb'),
(3, 'Prayuth'),
(4, 'Kim jong un');

-- --------------------------------------------------------

--
-- Table structure for table `sale_order`
--

CREATE TABLE `sale_order` (
  `order_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `customer_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sale_order`
--

INSERT INTO `sale_order` (`order_id`, `customer_id`, `created_at`) VALUES
('10001', '1', '2017-01-26 17:00:00'),
('10002', '1', '2017-02-09 17:00:00'),
('10003', '3', '2017-02-19 17:00:00'),
('10004', '4', '2017-03-30 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sale_order_item`
--

CREATE TABLE `sale_order_item` (
  `item_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `total_amout` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sale_order_item`
--

INSERT INTO `sale_order_item` (`item_id`, `order_id`, `name`, `total_amout`) VALUES
('1201', '10001', 'flyers', '2410.00'),
('1202', '10001', 'flyers', '2410.00'),
('1207', '10003', 'flyers', '2565.00'),
('1204', '10003', 'sticker', '1175.00'),
('1205', '10003', 'leafets', '2306.00'),
('1206', '10003', 'flyers', '1056.00'),
('1203', '10001', 'leafets', '5100.00'),
('1208', '10004', 'sticker', '4100.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sale_order`
--
ALTER TABLE `sale_order`
  ADD PRIMARY KEY (`order_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
