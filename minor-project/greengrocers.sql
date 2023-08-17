-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2023 at 06:23 AM
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
-- Database: `greengrocers`
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
('straberry', 'image.jpg', '');

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

INSERT INTO `product` (`pname`, `pimage`, `description`, `price`, `discount`, `netprice`, `stock`) VALUES
('tea', 'card1.jpg', 'this is strawberry', 100, 2, 80, 1),
('cucumber', 'Screenshot (4).png', 'this is strawberry hhhhhhhhhhhh', 100, 2, 80, 1),
('blueberry', 'card3.jpg', '', 0, 0, 0, 0),
('coffee', 'coffee.jpg', '', 0, 0, 0, 0),
('churpi', 'card5.webp', 'It is the famous product of mountain side of nepal', 50, 4, 48, 0),
('spinach', 'card6.jpg', 'It is fresh vegetable from terai', 50, 4, 48, 0),
('tomato', 'card7.jpg', 'It is the popular and most grown product of nepal', 50, 4, 48, 0),
('staberry', 'image2.jpg', '', 0, 0, 0, 0),
('stawberry', 'card10.jpg', 'It is strawberry', 100, 2, 98, 5),
('kiwi', 'card11.jpg', 'It is kiwi', 100, 2, 98, 5),
('orange', 'card12.jpg', 'It is orange', 100, 2, 98, 5),
('apple', 'card13.jpg', 'It is apple', 100, 2, 98, 5),
('chilly', 'card17.jpg', 'It is chilly', 100, 2, 98, 5),
('dragon fruit', 'card18.jpg', 'It is dragon furi', 100, 2, 98, 5),
('banana', 'card20.jpg', 'It is banana', 100, 2, 98, 5),
('mango', 'card21.jpg', 'It is mango', 100, 2, 98, 5),
('litchi', 'card22.jpg', 'It is litchi', 100, 2, 98, 5),
('spinach', 'card6.jpg', 'It is spinach', 100, 2, 98, 5),
('kiwi', 'card11.jpg', 'It is kiwi', 100, 2, 98, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `password`) VALUES
('mahesh', 'mbk36900@gmail.com', '1234'),
('bharat sir', 'bharat@gmail.com', '1234'),
('nawaraj', 'abc@gmail.com', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
