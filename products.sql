-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2020 at 01:04 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pretty`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_image`) VALUES
(51, 'earring', 'earring.jpg'),
(52, 'bracelet', 'golden.jpg'),
(53, 'necklace', 'necklace.jpg'),
(57, 'glasses', 'charles-deluvio-1-nx1QR5dTE-unsplash.jpg'),
(59, 'Wrist watch', 'craig-mclachlan-nOhRrpADKXk-unsplash.jpg'),
(60, 'pink socks', 'sandy-millar-sYgzIZKxqyA-unsplash.jpg'),
(61, 'scarfs', 'scarfs.jpg'),
(63, 'hand bag', 'handbag.jpg'),
(64, 'hat', 'hat.jpg'),
(65, 'silver bracelet', 'pexels-pixabay-265906.jpg'),
(66, 'leather handbag', 'creative-headline-se3GNrXjtdQ-unsplash.jpg'),
(67, 'sweatpant', 'siarhei-plashchynski-3bd0Z5l1hS8-unsplash.jpg'),
(69, 'hoodie', 'maxim-mushnikov-tv7XS44HPPc-unsplash.jpg'),
(70, 'sweatshirt', 'elia-pellegrini--lUDTmj1VUM-unsplash.jpg'),
(71, 'cap', 'mediamodifier-t8HiP3e5abg-unsplash.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
