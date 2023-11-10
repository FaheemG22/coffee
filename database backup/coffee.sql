-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2023 at 12:06 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu_details`
--

CREATE TABLE `menu_details` (
  `Item_Name` varchar(128) NOT NULL,
  `Item_Cost` double NOT NULL,
  `Item_Availability` int(1) NOT NULL,
  `Img_Link` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `menu_details`
--

INSERT INTO `menu_details` (`Item_Name`, `Item_Cost`, `Item_Availability`, `Img_Link`) VALUES
('Espresso Shot', 5.45, 1, 'Espresso_Shot.jpg'),
('Gluten-Free Brownie', 3.45, 0, 'Gluten_Free_Brownie.jpg'),
('Ice Milk Tea', 5, 1, 'Ice_Milk_Tea.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `OrderID` int(32) NOT NULL,
  `UserName` varchar(64) NOT NULL,
  `OrderedItems` varchar(512) NOT NULL,
  `OrderCost` double NOT NULL,
  `OrderTime` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `OrderScheduledTime` varchar(32) DEFAULT NULL,
  `Progress` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`OrderID`, `UserName`, `OrderedItems`, `OrderCost`, `OrderTime`, `OrderScheduledTime`, `Progress`) VALUES
(1, 'Faheem', 'Espresso Shot ', 5, '2023-11-10 17:53:30.926100', '2023-12-1 10:53:00', 0),
(2, 'Faheem', 'Espresso Shot', 5.45, '2023-11-10 17:53:54.683897', '2023-12-1 10:53:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `UserID` int(128) NOT NULL,
  `UserEmail` varchar(64) NOT NULL,
  `UserName` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `UserPassword` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`UserID`, `UserEmail`, `UserName`, `UserPassword`) VALUES
(1, '125843@shipley.ac.uk', 'Faheem', 'Password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu_details`
--
ALTER TABLE `menu_details`
  ADD PRIMARY KEY (`Item_Name`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD UNIQUE KEY `OrderID` (`OrderID`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `UserEmail_2` (`UserEmail`),
  ADD KEY `UserEmail` (`UserEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `OrderID` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `UserID` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
