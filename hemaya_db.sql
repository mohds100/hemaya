-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14 يناير 2023 الساعة 11:29
-- إصدار الخادم: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hemaya_db`
--

-- --------------------------------------------------------

--
-- بنية الجدول `customers`
--

CREATE TABLE `customers` (
  `Custome_id` int(20) NOT NULL,
  `C_Name` varchar(50) DEFAULT NULL,
  `C_PhoneNember` int(50) DEFAULT NULL,
  `C_Address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `product`
--

CREATE TABLE `product` (
  `Product_Number` varchar(50) DEFAULT NULL,
  `Product_Type` varchar(50) NOT NULL,
  `Product_Name` varchar(50) NOT NULL,
  `P_manufacture` varchar(50) NOT NULL,
  `Product_Price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `sales`
--

CREATE TABLE `sales` (
  `User_id` int(20) NOT NULL,
  `Product_Number` varchar(50) NOT NULL,
  `Product_Price` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Store_Price` varchar(10) NOT NULL,
  `Total_Price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `shop`
--

CREATE TABLE `shop` (
  `Shop_Number` int(50) NOT NULL,
  `Shop_Name` varchar(50) NOT NULL,
  `Shop_Address` varchar(50) NOT NULL,
  `Shop_Telephone` int(50) NOT NULL,
  `Shop_Category` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `User_id` int(20) NOT NULL,
  `User_Name` varchar(50) DEFAULT NULL,
  `User_Email` varchar(50) DEFAULT NULL,
  `Phone_number` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`Custome_id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`Shop_Number`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_id`),
  ADD UNIQUE KEY `User_Email` (`User_Email`),
  ADD UNIQUE KEY `Phone_number` (`Phone_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
