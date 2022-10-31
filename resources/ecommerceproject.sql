-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2022 at 08:20 PM
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
-- Database: `ecommerceproject`
--


DROP DATABASE IF EXISTS `ecommerceproject`;
CREATE DATABASE `ecommerceproject`;
USE `ecommerceproject`;

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `administrator_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `password_hash` varchar(72) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`administrator_id`, `email`, `phone_number`, `password_hash`, `first_name`, `last_name`) VALUES
(1, 'kaolin.stacey@gmail.com', '5147971313', '$2y$10$UhS4VgZyEGdKLoTeANp1hecRO3haErGoA7e5AbLcDqvw43elKxPvW', 'Kaolin', 'Stacey');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `company_logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `page_id` int(11) NOT NULL,
  `page_name` varchar(30) NOT NULL,
  `page_creator` int(11) NOT NULL,
  `date_created` date NOT NULL,
  `page_header` varchar(50) NOT NULL,
  `page_rating` decimal(3,1) DEFAULT NULL,
  `number_of_ratings` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`page_id`, `page_name`, `page_creator`, `date_created`, `page_header`, `page_rating`, `number_of_ratings`) VALUES
(1, 'La Fee Des Gateries', 1, '2022-10-30', 'lafeedesgateriesheader.jpg', NULL, 0),
(2, 'TrollTunga', 1, '2022-10-30', 'trolltunga.jpg', NULL, 0),
(3, 'Pizza', 1, '2022-10-30', 'pizza.jpg', NULL, 0),
(4, 'Restaurant', 1, '2022-10-30', 'restaurant-header.jpg', NULL, 0),
(5, 'McDonalds', 1, '2022-10-30', 'mcdonalds.jpg', NULL, 0),
(6, 'Pizza Hut', 1, '2022-10-30', 'pp_pizzahut_header.png', NULL, 0),
(7, 'Pizza Pizza', 1, '2022-10-30', 'pizzapizza.png', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `page_administrator`
--

CREATE TABLE `page_administrator` (
  `page_administrator_id` int(11) NOT NULL,
  `administrator_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `administrator_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page_administrator`
--

INSERT INTO `page_administrator` (`page_administrator_id`, `administrator_id`, `page_id`, `administrator_level`) VALUES
(1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` decimal(4,2) NOT NULL,
  `product_store_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `receipt_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `receipt_total` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `receipt_item`
--

CREATE TABLE `receipt_item` (
  `receipt_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `review_rating` tinyint(4) NOT NULL,
  `review_date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `special`
--

CREATE TABLE `special` (
  `special_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `special_description` varchar(50) NOT NULL,
  `special_start_date` date NOT NULL,
  `special_end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(72) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `profile_pic` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `first_name`, `last_name`, `profile_pic`) VALUES
(1, 'kaolin.stacey@gmail.com', '$2y$10$UhS4VgZyEGdKLoTeANp1hecRO3haErGoA7e5AbLcDqvw43elKxPvW', 'Kaolin', 'Stacey', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`administrator_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`page_id`),
  ADD KEY `page_creator_fk` (`page_creator`);

--
-- Indexes for table `page_administrator`
--
ALTER TABLE `page_administrator`
  ADD PRIMARY KEY (`page_administrator_id`),
  ADD KEY `page_id` (`page_id`),
  ADD KEY `administrator_id` (`administrator_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_store_fk` (`product_store_id`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`receipt_id`),
  ADD KEY `receipt_user_fk` (`user_id`);

--
-- Indexes for table `receipt_item`
--
ALTER TABLE `receipt_item`
  ADD KEY `receipt_id_fk` (`receipt_id`),
  ADD KEY `product_id_fk` (`product_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `review_user_fk` (`user_id`),
  ADD KEY `review_page_fk` (`page_id`);

--
-- Indexes for table `special`
--
ALTER TABLE `special`
  ADD PRIMARY KEY (`special_id`),
  ADD KEY `special_page_fk` (`page_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `administrator_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `page_administrator`
--
ALTER TABLE `page_administrator`
  MODIFY `page_administrator_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `receipt_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `special`
--
ALTER TABLE `special`
  MODIFY `special_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `page`
--
ALTER TABLE `page`
  ADD CONSTRAINT `page_creator_fk` FOREIGN KEY (`page_creator`) REFERENCES `administrator` (`administrator_id`);

--
-- Constraints for table `page_administrator`
--
ALTER TABLE `page_administrator`
  ADD CONSTRAINT `page_administrator_ibfk_1` FOREIGN KEY (`administrator_id`) REFERENCES `administrator` (`administrator_id`),
  ADD CONSTRAINT `page_administrator_ibfk_2` FOREIGN KEY (`page_id`) REFERENCES `page` (`page_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_store_fk` FOREIGN KEY (`product_store_id`) REFERENCES `page` (`page_id`);

--
-- Constraints for table `receipt`
--
ALTER TABLE `receipt`
  ADD CONSTRAINT `receipt_user_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `receipt_item`
--
ALTER TABLE `receipt_item`
  ADD CONSTRAINT `product_id_fk` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `receipt_id_fk` FOREIGN KEY (`receipt_id`) REFERENCES `receipt` (`receipt_id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_page_fk` FOREIGN KEY (`page_id`) REFERENCES `page` (`page_id`),
  ADD CONSTRAINT `review_user_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `special`
--
ALTER TABLE `special`
  ADD CONSTRAINT `special_page_fk` FOREIGN KEY (`page_id`) REFERENCES `page` (`page_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
