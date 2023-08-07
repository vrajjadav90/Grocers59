-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2022 at 05:20 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product22`
--

-- --------------------------------------------------------

--
-- Table structure for table `product22`
--

CREATE TABLE `product22` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product22`
--

INSERT INTO `product22` (`id`, `name`, `price`, `image`) VALUES
(36, 'Coffee', '14', 'nescafe-classic-soluble-coffee-powder-24-g-product-images-o490004154-p490004154-0-202211021811.jpg'),
(37, 'Noodles', '8', 'product-jpeg-500x500.webp'),
(38, 'Tomato Ketchup', '20', '80088_S1-8901030653407_480x.webp'),
(39, 'Agarbatti', '12', '61Mrsk9mNAL._SL1348_.jpg'),
(40, 'Mosquito Repellent Refill', '3', '71NZeHxvDgL._SX466_.jpg'),
(42, 'Pistachio', '10', '71r6jqrkIkL._SX466_.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product22`
--
ALTER TABLE `product22`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product22`
--
ALTER TABLE `product22`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
