-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2023 at 03:58 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `name`, `email`, `password`) VALUES
(1, 'Dev Joshipura', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ID` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`ID`, `productid`, `userid`, `quantity`) VALUES
(5, 19, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ID` int(5) NOT NULL,
  `categoryname` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID`, `categoryname`, `image`) VALUES
(1, 'BOWED-STRINGS', '1691588622-WhatsApp Image 2023-08-09 at 4.54.40 PM.jpeg'),
(2, 'WOODWIND', '1691588634-WhatsApp Image 2023-08-09 at 4.54.40 PM.jpeg'),
(3, 'KEYBOARD ', '1691588643-WhatsApp Image 2023-08-09 at 4.54.40 PM.jpeg'),
(4, 'GUITAR-FAMILY', '1691588650-WhatsApp Image 2023-08-09 at 4.54.40 PM.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `name`, `email`, `subject`, `message`) VALUES
(4, 'Milan', 'milanbharadva1@gmail.com', 'ffffff', 'mmmmmmmmmmm');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` int(20) NOT NULL,
  `cartid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `address` varchar(500) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID`, `cartid`, `userid`, `productid`, `quantity`, `date`, `address`, `status`) VALUES
(1, 2, 1, 22, 1, '2023-09-14 13:57:51', 'home', 'delivered'),
(2, 5, 1, 19, 1, '2023-09-14 01:28:40', 'home', 'active'),
(3, 5, 1, 19, 1, '2023-09-14 01:33:04', 'jasraj nagar', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(5) NOT NULL,
  `productname` varchar(200) NOT NULL,
  `productimage` varchar(200) NOT NULL,
  `productprice` int(5) NOT NULL,
  `productdesc` varchar(500) NOT NULL,
  `categoryid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `productname`, `productimage`, `productprice`, `productdesc`, `categoryid`) VALUES
(18, 'Violin', '1691674679-WhatsApp Image 2023-08-05 at 4.01.36 PM (1).jpeg', 6000, 'this is violin', 1),
(19, 'Kamancha', '1691674803-WhatsApp Image 2023-08-05 at 4.02.29 PM.jpeg', 4000, 'this is kamancha', 1),
(20, 'Banjo', '1691674865-WhatsApp Image 2023-08-10 at 6.11.33 PM.jpeg', 5000, 'this is banjo', 1),
(21, 'Gambusi ndogo', '1691675211-STL-X2BW-4.jpg', 4500, 'this is gambusi ndogo', 1),
(22, 'Kinubi', '1691675270-WhatsApp Image 2023-08-10 at 6.17.09 PM.jpeg', 8000, 'this is kinubi', 1),
(23, 'Clarinet', '1691675355-WhatsApp Image 2023-08-05 at 4.27.39 PM.jpeg', 3000, 'this is clarinet', 2),
(24, 'Saxophone', '1691675410-WhatsApp Image 2023-08-05 at 4.28.49 PM.jpeg', 2500, 'this is saxophone', 2),
(25, 'Basson', '1691675451-WhatsApp Image 2023-08-05 at 4.30.35 PM.jpeg', 3500, 'this is Basson', 2),
(26, 'Shawm', '1691675524-WhatsApp Image 2023-08-05 at 4.33.32 PM.jpeg', 1999, 'this is shawm', 2),
(27, 'flute', '1691675573-WhatsApp Image 2023-08-05 at 4.34.53 PM.jpeg', 2500, 'this is flute', 2),
(28, 'Piano', '1691675624-WhatsApp Image 2023-08-10 at 6.19.28 PM.jpeg', 10000, 'this is Piano', 3),
(29, 'Accordion', '1691675661-WhatsApp Image 2023-08-10 at 6.22.43 PM (1).jpeg', 5600, 'this is Accordion', 3),
(30, 'Hurdy-gurdy', '1691675704-WhatsApp Image 2023-08-10 at 6.22.43 PM.jpeg', 6300, 'this is Hurdy-gurdy', 3),
(31, 'Melodica', '1691675740-Suzuki-Melodion-Alto-Study-32---Black-a-p.w695.h523.backdrop.webp', 7000, 'this is Melodica', 3),
(32, 'Concertina', '1691675792-WhatsApp Image 2023-08-10 at 6.25.01 PM.jpeg', 5499, 'this is Concertina', 3),
(33, 'Base Guitar', '1691675855-WhatsApp Image 2023-08-10 at 6.26.32 PM.jpeg', 7699, 'this is Base Guitar', 4),
(34, 'Electric guitar', '1691675900-WhatsApp Image 2023-08-10 at 6.28.05 PM.jpeg', 4999, 'this is Electric guitar', 4),
(35, 'Classical guitar', '1691675939-WhatsApp Image 2023-08-10 at 6.30.29 PM.jpeg', 8999, 'this is Classical guitar', 4),
(36, '12 level string Guitar', '1691675994-2a19a7a1b06d4eca8ec2739825798d97.jpeg', 9999, 'this is 12 level string Guitar', 4),
(37, 'Harp guitar', '1691676020-WhatsApp Image 2023-08-10 at 6.34.30 PM.jpeg', 11000, 'this is Harp guitar', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(110) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `name`, `email`, `password`, `phone`, `address`) VALUES
(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '79908922778', 'jasraj nagar'),
(4, 'dev', 'dev@gmail.com', 'e77989ed21758e78331b20e477fc5582', '0', ''),
(5, 'Furniture Arena', 'aditi@gmail.com', '2b197829d548512d1d4b8bd5c773d6c3', '0', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
