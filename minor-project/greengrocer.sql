-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2023 at 01:36 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greengrocer`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `Name` varchar(35) NOT NULL,
  `Image` varchar(300) NOT NULL,
  `Description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`Name`, `Image`, `Description`) VALUES
('cabbage', 'banner1_3.jpg', ''),
('orange', 'banner1_2.jpg', ''),
('blackberry', 'banner1_1.jpg', 'nothing');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `item_no` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`item_no`, `product_id`, `user_id`) VALUES
(7, 3, 9),
(8, 2, 9),
(9, 2, 9),
(10, 1, 9),
(11, 1, 9),
(12, 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(35) NOT NULL,
  `customer_password` varchar(35) NOT NULL,
  `customer_email` varchar(35) NOT NULL,
  `customer_image` varchar(35) NOT NULL,
  `customer_details` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_password`, `customer_email`, `customer_image`, `customer_details`) VALUES
(1, 'mahesh', 'tesla123', 'customer1@gmail.com', 'logo1.jpg', 'I am customer'),
(2, 'Bharat', '1234', 'customer2@gmail.com', 'logo1.jpg', 'I am teacher'),
(3, 'user', 'password', 'customer3@gmail.com', 'logo1.jpg', 'I am user');

-- --------------------------------------------------------

--
-- Table structure for table `dealer`
--

CREATE TABLE `dealer` (
  `dealer_id` int(11) NOT NULL,
  `dealer_name` varchar(30) NOT NULL,
  `dealer_password` varchar(35) NOT NULL,
  `dealer_email` varchar(35) NOT NULL,
  `dealer_image` varchar(35) NOT NULL,
  `dealer_details` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dealer`
--

INSERT INTO `dealer` (`dealer_id`, `dealer_name`, `dealer_password`, `dealer_email`, `dealer_image`, `dealer_details`) VALUES
(4, 'Dinesh', 'dealer1', 'dealer1@gmail.com', 'dealer1.jpeg', 'I am Dinesh'),
(5, 'Manish', 'dealer2', 'dealer2@gmail.com', 'dealer2.jpeg', 'I am Manish'),
(6, 'Mohan', 'dealer3', 'dealer3@gmail.com', 'dealer3.jpeg', 'I am Mohan'),
(7, 'John', 'dealer4', 'dealer4@gmail.com', 'dealer4.jpeg', 'I am John'),
(8, 'Tika', 'dealer5', 'dealer5@gmail.com', 'dealer5.jpeg', 'I am Tika');

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `farmer_id` int(11) NOT NULL,
  `farmer_name` varchar(35) NOT NULL,
  `farmer_password` varchar(35) NOT NULL,
  `farmer_email` varchar(35) NOT NULL,
  `farmer_image` varchar(35) NOT NULL,
  `farmer_details` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`farmer_id`, `farmer_name`, `farmer_password`, `farmer_email`, `farmer_image`, `farmer_details`) VALUES
(9, 'Bikram', 'farmer1', 'farmer1@gmail.com', 'farmer1.jpeg', 'I am Bikram'),
(10, 'Raju', 'farmer2', 'farmer2@gmail.com', 'farmer2.jpeg', 'I am Raju'),
(11, 'Nitesh', 'farmer3', 'farmer3@gmail.com', 'farmer3.jpeg', 'I am Nitesh'),
(12, 'Brijesh', 'farmer4', 'farmer4@gmail.com', 'farmer4.jpeg', 'I am Brijesh'),
(13, 'Mukesh', 'farmer5', 'farmer5@gmail.com', 'farmer5.jpeg', 'I am Mukesh');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `head` mediumtext NOT NULL,
  `date` date NOT NULL,
  `noticepath` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`head`, `date`, `noticepath`) VALUES
('this is head', '2023-07-05', 'image1.jpg'),
('dfgrafdasf', '2078-05-25', 'image1.jpg'),
('dfgrafdasf', '2078-05-25', '358099271_199852546385289_139503229342222203_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `PID` int(11) NOT NULL,
  `pname` varchar(35) NOT NULL,
  `pimage` varchar(300) NOT NULL,
  `description` mediumtext NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `netprice` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`PID`, `pname`, `pimage`, `description`, `price`, `discount`, `netprice`, `stock`) VALUES
(1, 'tea', 'card1.jpg', 'It is tea', 100, 2, 80, 1),
(2, 'tomato1', 'card7.jpg', 'It is tomato', 100, 2, 80, 1),
(3, 'blueberry', 'card3.jpg', '', 0, 0, 0, 0),
(4, 'coffee', 'coffee.jpg', '', 0, 0, 0, 0),
(5, 'churpi', 'card5.webp', 'It is the famous product of mountain side of nepal', 50, 4, 48, 0),
(6, 'carrot', 'card8.jpg', '', 80, 2, 100, 0),
(7, 'tomato2', 'card7.jpg', 'It is the popular and most grown product of nepal', 50, 4, 48, 0),
(8, 'staberry', 'image2.jpg', '', 0, 0, 0, 0),
(9, 'stawberry', 'card10.jpg', 'It is strawberry', 100, 2, 98, 5),
(10, 'coconut', 'card14.jpg', '', 0, 0, 0, 0),
(11, 'orange', 'card12.jpg', 'It is orange', 100, 2, 98, 5),
(12, 'apple', 'card13.jpg', 'It is apple', 100, 2, 98, 5),
(13, 'chilly', 'card17.jpg', 'It is chilly', 100, 2, 98, 5),
(14, 'dragon fruit', 'card18.jpg', 'It is dragon furi', 100, 2, 98, 5),
(15, 'banana', 'card20.jpg', 'It is banana', 100, 2, 98, 5),
(16, 'mango', 'card21.jpg', 'It is mango', 100, 2, 98, 5),
(17, 'litchi', 'card22.jpg', 'It is litchi', 100, 2, 98, 5),
(18, 'banana2', 'card20.jpg', '', 80, 20, 100, 10),
(19, 'cucumber', 'card2.jpg', '', 80, 20, 100, 10),
(20, 'pea', 'card9.jpg', '', 80, 20, 100, 10),
(21, 'mushroom', 'card15.png', '', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vendor_id` int(11) NOT NULL,
  `vendor_name` varchar(35) NOT NULL,
  `vendor_image` varchar(40) NOT NULL,
  `vendor_details` varchar(300) NOT NULL,
  `vendor_password` varchar(35) NOT NULL,
  `vendor_email` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendor_id`, `vendor_name`, `vendor_image`, `vendor_details`, `vendor_password`, `vendor_email`) VALUES
(14, 'ram', 'vendor1.jpeg', 'I am Ram', 'vendor1', 'vendor1@gmail.com'),
(15, 'Shyam', 'vendor2.jpeg', 'I am Shyam', 'vendor2', 'vendor2@gmail.com'),
(16, 'Hari', 'vendor3.jpeg', 'I am Hari', 'vendor3', 'vendor3@gmail.com'),
(17, 'Gopal', 'vendor4.jpeg', 'I am Gopal', 'vendor4', 'vendor4@gmail.com'),
(18, 'Krishna', 'vendor5.jpeg', 'I am Krishna', 'vendor5', 'vendor5@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`item_no`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `dealer`
--
ALTER TABLE `dealer`
  ADD PRIMARY KEY (`dealer_id`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`farmer_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `item_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `dealer`
--
ALTER TABLE `dealer`
  MODIFY `dealer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `farmer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
