-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 25, 2022 at 06:43 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(11) NOT NULL,
  `adminName` varchar(255) NOT NULL,
  `adminUser` varchar(255) NOT NULL,
  `adminEmail` varchar(255) NOT NULL,
  `adminPass` varchar(32) NOT NULL,
  `level` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `adminName`, `adminUser`, `adminEmail`, `adminPass`, `level`) VALUES
(1, 'Rubel Hossain', 'admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `bandId` int(11) NOT NULL,
  `brandName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`bandId`, `brandName`) VALUES
(1, 'IPHONE'),
(2, 'ACER'),
(3, 'SAMSUNG'),
(4, 'CANON'),
(5, 'CANON');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `catId` int(11) NOT NULL,
  `catName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`catId`, `catName`) VALUES
(8, 'Clothing'),
(9, 'Mobile Phones'),
(10, 'Sports &amp; Fitness'),
(11, 'Sports &amp; Fitness'),
(12, 'Beauty &amp; Healthcare'),
(13, 'Beauty &amp; Healthcare'),
(14, 'Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `catId` int(11) NOT NULL,
  `bandId` int(11) NOT NULL,
  `body` text NOT NULL,
  `price` float(10,3) NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`productId`, `productName`, `catId`, `bandId`, `body`, `price`, `image`, `type`) VALUES
(1, 'Lorem Ipsum is simply', 14, 2, '<p>just test</p>', 502.200, 'upload/38e0fd06b4.jpeg', 0),
(2, 'Lorem Ipsum is simply', 14, 2, '<p>Just Test</p>', 122.000, 'upload/9fcc5e0998.jpeg', 0),
(3, 'Lorem Ipsum is simply', 14, 1, '<p>Just Test</p>', 502.200, 'upload/f056c7e93a.jpeg', 0),
(4, 'Lorem Ipsum is simply', 12, 4, '<p>Just test&nbsp;</p>', 343.000, 'upload/ae93ab574d.jpeg', 0),
(5, 'Lorem Ipsum is simply', 12, 3, '<p>Just test</p>', 122.000, 'upload/b507e18f1c.jpeg', 0),
(6, 'Lorem Ipsum is simply', 12, 3, '<p>Just test</p>', 122.000, 'upload/c05183c87d.jpeg', 0),
(7, 'Lorem Ipsum is simply', 12, 5, '<p>This is dami text for practice nothing more than that ,&nbsp;This is dami text for practice nothing more than that ,This is dami text for practice nothing more than that</p>\r\n<p>This is dami text for practice nothing more than thatThis is dami text for practice nothing more than thatThis is dami text for practice nothing more than that</p>', 3435.000, 'upload/9491fbc2d9.jpeg', 1),
(8, 'Lorem Ipsum is simply', 14, 5, '<p>nope</p>', 1212.000, 'upload/0cbdd5bbc9.jpeg', 1),
(9, 'Lorem Ipsum is simply', 11, 3, '<p>none&nbsp;</p>', 122.000, 'upload/300e6acbb1.jpeg', 0),
(10, 'Lorem Ipsum is simply', 11, 3, '<p>none&nbsp;</p>', 122.000, 'upload/f2ffbc0638.jpeg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`bandId`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`catId`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`productId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `bandId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `catId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
