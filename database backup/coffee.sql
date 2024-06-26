-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2024 at 12:19 PM
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
-- Table structure for table `cake_details`
--

CREATE TABLE `cake_details` (
  `Cake_ID` int(128) NOT NULL,
  `User_ID` int(128) NOT NULL,
  `Cake_Name` varchar(64) NOT NULL,
  `Img_Link` varchar(128) NOT NULL,
  `Date_Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `menu_details`
--

CREATE TABLE `menu_details` (
  `Item_Name` varchar(128) NOT NULL,
  `Item_Type` varchar(32) NOT NULL,
  `Item_Cost` double NOT NULL,
  `Item_Availability` int(1) NOT NULL,
  `Img_Link` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `menu_details`
--

INSERT INTO `menu_details` (`Item_Name`, `Item_Type`, `Item_Cost`, `Item_Availability`, `Img_Link`) VALUES
('Blackcurrant Tart', 'Dessert', 3.45, 1, 'Blackcurrant_Tart.jpg'),
('Breakfast Burger', 'Main', 6.5, 1, 'Breakfast_Burger.jpg'),
('Brunch Shake Trio', 'Dessert', 15.75, 1, 'Brunch_Shake_Trio.jpg'),
('Burger', 'Main', 6.5, 1, 'Burger.jpg'),
('Cheesy Butter Pasta', 'Main', 6, 0, 'Cheesy_Butter_Pasta.jpg'),
('Coffee', 'Coffee', 5.5, 1, 'Coffee.jpg'),
('Cosmopolitan', 'Drink', 5.5, 1, 'Cosmopolitan.jpg'),
('Espresso Shot', 'Coffee', 5.45, 1, 'Espresso_Shot.jpg'),
('Fruit Tart', 'Dessert', 4.25, 1, 'Fruit_Tart.jpg'),
('Garlic Knots', 'Appetiser', 2.5, 1, 'Garlic_Knots.jpg'),
('Gluten-Free Brownie', 'Dessert', 3.45, 0, 'Gluten_Free_Brownie.jpg'),
('Grilled Salmon', 'Main', 7, 1, 'Grilled_Salmon.jpg'),
('Ice Milk Tea', 'Drink', 5, 1, 'Ice_Milk_Tea.jpg'),
('Irish Red Ale', 'Drink', 3, 1, 'Irish_Red_Ale.jpg'),
('Kids Dessert', 'Dessert', 2.45, 0, 'Kids_Dessert.jpg'),
('King Prawn', 'Appetiser', 2.95, 1, 'King_Prawn.jpg'),
('Large Pancakes', 'Dessert', 7.5, 1, 'Large_Pancakes.jpg'),
('Latte', 'Coffee', 4.25, 1, 'Latte.jpg'),
('Margherita Pizza', 'Main', 5.25, 0, 'Margherita_Pizza.jpg'),
('Mimosa', 'Drink', 3.75, 1, 'Mimosa.jpg'),
('Negroni', 'Drink', 3.85, 1, 'Negroni.jpg'),
('Party For Five', 'Drink', 18.25, 1, 'Party_For_Five.jpg'),
('Pepperoni Pizza', 'Main', 6.25, 1, 'Pepperoni_Pizza.jpg'),
('Rack Of Lamb', 'Main', 13.45, 1, 'Rack_Of_Lamb.jpg'),
('Rose & French Raspberry Cheesecake', 'Dessert', 7, 1, 'Rose_&_French_Raspberry_Cheesecake.jpg'),
('Seasonal Wine', 'Drink', 5.75, 1, 'Seasonal_Wine.jpg'),
('Small Pancakes', 'Dessert', 5.5, 1, 'Small_Pancakes.jpg'),
('Sparkling Metropoliton', 'Drink', 5.5, 1, 'Sparkling_Metropoliton.jpg'),
('Sparkling Mojito', 'Drink', 5.25, 1, 'Sparkling_Mojito.jpg'),
('Spicy Shrimp Rice', 'Main', 6.8, 0, 'Spicy_Shrimp_Rice.jpg'),
('Spicy Shrimp Salad', 'Appetiser', 3.5, 1, 'Spicy_Shrimp_Salad.jpg'),
('Steak & Gravy', 'Main', 8.25, 1, 'Steak_&_Gravy.jpg'),
('Strong Latte', 'Coffee', 4.25, 1, 'Strong_Latte.jpg'),
('Summer Smorgasbord', 'Appetiser', 7.45, 1, 'Summer_Smorgasbord.jpg'),
('T-bone & Wine Sauce', 'Main', 16.25, 1, 'T-bone_&_Wine_Sauce.jpg'),
('Vegan Misota', 'Appetiser', 2, 1, 'Vegan_Misota.jpg'),
('Vegetarian Burger', 'Main', 6, 1, 'Vegetarian_Burger.jpg'),
('Vegetarian Pizza', 'Main', 5.75, 1, 'Vegetarian_Pizza.jpg');

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
  `UserPassword` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`UserID`, `UserEmail`, `UserName`, `UserPassword`) VALUES
(13, 'Faheem@gmail.com', 'Faheem', '$2y$10$/bpkGaQGRI1gzs3/KimLmu12Bai/EFk8OY38Mb/KJu636Q2mAhlHq'),
(14, 'fred@gmail.com', 'fred', '$2y$10$LXGfUvcFaU1Zg1jOKSy2yeYJfZuAxvTvkqEcnWGi/ydDU8hz0dCD6'),
(19, '125843@Shipley.ac.uk', 'Faheem', '$2y$10$2Zt563M.Nq2eHNxrofA9W.5HM3erTLwBY6F0CPkLEXUcAom2yUziu'),
(23, 'test2@gmail.com', 'Faheem', '$2y$10$hGHNiFY/NAGkA4.OXbnMaeiAeZ4ONwhVYXCoqK34rZhEECQqF9NOW'),
(24, 'admin@gmail.com', 'admin', '$2y$10$b58.iNud9vMQ7E5em.L2fe9w6vysb9u9f.XJd4wu1hDdQuMqFCb/.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cake_details`
--
ALTER TABLE `cake_details`
  ADD PRIMARY KEY (`Cake_ID`);

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
-- AUTO_INCREMENT for table `cake_details`
--
ALTER TABLE `cake_details`
  MODIFY `Cake_ID` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `OrderID` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `UserID` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
