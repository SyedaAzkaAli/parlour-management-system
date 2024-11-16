-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2024 at 06:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12


CREATE database parlour ;
USE parlour;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- Database: `parlour`
-- Table structure for table `appointments`

CREATE TABLE `appointments` (
  `appointment_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table `appointments`

INSERT INTO `appointments` (`appointment_id`, `customer_id`, `service_id`, `date`, `time`) VALUES
(1, 1, 1, '2024-05-27', '19:00:00'),
(2, 2, 2, '2024-05-30', '08:10:00');

-- Table structure for table `customers`

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `name`, `phone_number`, `email`) VALUES
(1, 'Hajra Ahmed', '0332 5391512', 'hajra_47@gmail.com'),
(2, 'Syeda Azka Ali', '0332 5391512', 'syedazka47@gmail.com'),
(3, 'Mehak Ali', '03340000212', 'mehak.ali@gmail.com');


CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `services` (`service_id`, `service_name`, `price`) VALUES
(1, 'Skincare', 15000.00),
(2, 'Haircut', 2000.00),
(3, 'Makeup', 5000.00),
(4, 'Manicure', 10000.00);

-- Indexes for table `appointments`

ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `service_id` (`service_id`);

-- Indexes for table `customers`

ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

-- Indexes for table `services`

ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);
  
-- AUTO_INCREMENT for table `appointments`

ALTER TABLE `appointments`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
  
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
  
-- AUTO_INCREMENT for table `services`

ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

-- Constraints for table `appointments`

ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`),
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `services` (`service_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
