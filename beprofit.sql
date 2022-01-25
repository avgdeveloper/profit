-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 28, 2021 at 01:54 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beprofit`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` varchar(30) NOT NULL,
  `shop_id` varchar(30) NOT NULL,
  `closed_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `total_price` decimal(11,2) NOT NULL,
  `subtotal_price` decimal(11,2) NOT NULL,
  `total_weight` decimal(11,2) NOT NULL DEFAULT 0.00,
  `total_tax` decimal(11,2) NOT NULL DEFAULT 0.00,
  `currency` varchar(3) NOT NULL,
  `financial_status` varchar(30) NOT NULL,
  `total_discounts` decimal(11,2) NOT NULL DEFAULT 0.00,
  `name` varchar(255) NOT NULL,
  `processed_at` datetime NOT NULL,
  `fulfillment_status` varchar(30) NOT NULL,
  `country` varchar(2) NOT NULL,
  `province` varchar(255) NOT NULL,
  `total_production_cost` decimal(11,2) NOT NULL,
  `total_items` int(11) NOT NULL,
  `total_order_shipping_cost` decimal(11,2) NOT NULL,
  `total_order_handling_cost` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD UNIQUE KEY `order_id` (`order_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
