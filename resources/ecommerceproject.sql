-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2022 at 06:56 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `company_owner` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `company_email` varchar(50) NOT NULL,
  `company_address` varchar(255) NOT NULL,
  `company_suite` varchar(50) DEFAULT NULL,
  `company_postalCode` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_owner`, `company_name`, `company_email`, `company_address`, `company_suite`, `company_postalCode`) VALUES
(32, 'User Guide', 'User Guide', 'user_guide@mycompany.com', '123 main street', '5', '1x1 x1');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `page_id` int(11) NOT NULL,
  `page_creator` int(11) NOT NULL,
  `date_created` date NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `company_address` varchar(255) NOT NULL,
  `company_suite` varchar(50) DEFAULT NULL,
  `company_logo` varchar(100) NOT NULL,
  `company_banner` varchar(100) NOT NULL,
  `deliveryDetails` varchar(50) NOT NULL,
  `filter` enum('pizza','fast food','chinese','japanese','bakery','italian','general','cafe') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`page_id`, `page_creator`, `date_created`, `company_name`, `company_address`, `company_suite`, `company_logo`, `company_banner`, `deliveryDetails`, `filter`) VALUES
(1, 1, '2022-10-30', 'La Fee Des Gateries', '', '', 'bakerylogo.webp', 'cakeFairyBanner.png', '$4.49 Delivery Fee | 10-25min Delivery Time', 'bakery'),
(9, 1, '2022-11-28', 'McDonald\'s', '26 Boulevard D\'Anjou', NULL, 'mcdonalds.webp', 'mcdonaldsbanner.jpeg', '$4.49 Delivery Fee | 10-25min Delivery Time', 'fast food'),
(11, 1, '2022-11-28', 'Tim Hortons', '5191 Boulevard D\'Agenais', '2', 'timhortonslogo.png', 'timHortonsBanner.png', '$3.39 Delivery Fee | 10-15min Delivery Time', 'cafe'),
(13, 1, '2022-11-28', 'Pizza Pizza', '26 Random Street', NULL, 'pizzapizzalogo.png', '', '$3.39 Delivery Fee | 10-15min Delivery Time', 'pizza'),
(14, 1, '2022-11-28', 'Starbucks', '270 Veale Street, Pretoria, GP, 0181, South Africa', '1', 'starbuckslogo.webp', '', '$6.69 Delivery Fee | 8-15min Delivery Time', 'cafe');

-- --------------------------------------------------------

--
-- Table structure for table `page_administrator`
--

CREATE TABLE `page_administrator` (
  `page_administrator_id` int(11) NOT NULL,
  `administrator_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `administrator_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `product_price` decimal(5,2) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_store_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_image`, `product_store_id`) VALUES
(1, 'Chocolate Milk', '3.99', 'chocolate_milk.webp', 9),
(2, 'Egg McMuffin', '3.89', 'egg_mcmuffin.jpeg', 9),
(9, 'bart cake', '119.99', 'bartCake.jpg', 1),
(10, 'tinkerbell cake', '149.99', 'tinkerbellCake.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `receipt_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `receipt_total` decimal(5,2) NOT NULL,
  `delivery_address` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `purchase_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`receipt_id`, `user_id`, `receipt_total`, `delivery_address`, `email_address`, `full_name`, `purchase_datetime`) VALUES
(14, 8, '0.00', '123 main street Suite 9', 'fewfwe@wgeg.com', 'Eris Degani', '2022-12-16 10:11:17'),
(15, 8, '0.00', '123 main street Suite 9', 'fewfwe@wgeg.com', 'Eris Degani', '2022-12-16 12:26:08'),
(16, 8, '0.00', '123 main street Suite 9', 'fewfwe@wgeg.com', 'Eris Degani', '2022-12-16 12:27:00'),
(17, NULL, '0.00', '123 main street', 'kaolin.stacey@gmail.com', 'Kaolin Stacey', '2022-12-19 11:25:40'),
(18, 1, '0.00', '264 boul saint-francis Suite 8', 'kaolin.stacey@gmail.com', 'Kaolin Stacey', '2022-12-20 16:39:03'),
(19, 1, '0.00', '264 boul saint-francis Suite 8', 'kaolin.stacey@gmail.com', 'Kaolin Stacey', '2022-12-20 16:39:55'),
(20, 1, '0.00', '264 boul saint-francis Suite 8', 'kaolin.stacey@gmail.com', 'Kaolin Stacey', '2022-12-20 16:39:57'),
(21, 1, '0.00', '264 boul saint-francis Suite 8', 'kaolin.stacey@gmail.com', 'Kaolin Stacey', '2022-12-20 16:40:55'),
(22, 1, '4.00', '264 boul saint-francis Suite 8', 'kaolin.stacey@gmail.com', 'Kaolin Stacey', '2022-12-20 16:44:25'),
(23, 1, '4.00', '264 boul saint-francis Suite 8', 'kaolin.stacey@gmail.com', 'Kaolin Stacey', '2022-12-20 16:46:37'),
(24, 1, '3.00', '264 boul saint-francis Suite 8', 'kaolin.stacey@gmail.com', 'Kaolin Stacey', '2022-12-20 16:59:41'),
(25, 9, '3.00', '123 main street Suite 5', 'user_guide@email.com', 'User Guide', '2022-12-22 12:48:01');

-- --------------------------------------------------------

--
-- Table structure for table `receipt_item`
--

CREATE TABLE `receipt_item` (
  `receipt_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `profile_pic` varchar(50) DEFAULT NULL,
  `user_address` varchar(255) DEFAULT NULL,
  `user_suite` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `first_name`, `last_name`, `profile_pic`, `user_address`, `user_suite`) VALUES
(1, 'kaolin.stacey@gmail.com', '$2y$10$UhS4VgZyEGdKLoTeANp1hecRO3haErGoA7e5AbLcDqvw43elKxPvW', 'Kaolin', 'Stacey', 'kitty.jpg', '264 boul saint-francis', '8'),
(2, 'feistyethan@gmail.com', '$2y$10$HNbwXap2xNapB.4uv97ZOu7huC/JOx76KzNO8lOtSGjuQ1wQksGzy', 'Eris', 'Degani', NULL, '264 Boulevard Saint Francis', '8'),
(6, 'feistyethan123@gmail.com', '$2y$10$7tpDKxVXJ30k0rYYcDWQPefElGaUJlCdU0sbGmeYLAEqMDKMQyxYa', '1', 'Thompson', NULL, '264 Boulevard Saint Francis', '8'),
(7, 'ilantest@gmail.com', '$2y$10$aTFEiRPGcF2.ufqztSeLX./Pn7M8JrM2XBBOWy11rsaOCSMVYBI9K', 'Ilan', 'Trutner', NULL, '264 Boulevard Saint Francis', '8'),
(8, 'fewfwe@wgeg.com', '$2y$10$We76QBPg05t4MnSlEbajL.9izPPwHqy7UnxArhk0ENdgF8ac1d3j6', 'Eris', 'Degani', NULL, '123 main street', '9'),
(9, 'user_guide@email.com', '$2y$10$xSZ73/l3C0Y0Sd2cTbttTeWKY/Kcfa4kcAyRF10MUS9cZpNVoadLu', 'User', 'Guide', NULL, '123 main street', '5');

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
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `page_administrator`
--
ALTER TABLE `page_administrator`
  MODIFY `page_administrator_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `receipt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  ADD CONSTRAINT `receipt_user_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `receipt_item`
--
ALTER TABLE `receipt_item`
  ADD CONSTRAINT `product_id_fk` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `receipt_id_fk` FOREIGN KEY (`receipt_id`) REFERENCES `receipt` (`receipt_id`) ON UPDATE CASCADE;

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
