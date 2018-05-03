-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2017 at 09:07 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvc_supermarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` tinyint(4) NOT NULL,
  `about` varchar(5000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `about`) VALUES
(1, 'CVC Supermarket has been in the industry for a very long time, and with modernization through technology had out grown in managing the records of their sales and assisting the costumer and giving them the needed services. With the help of this study it will minimize the paper works but the most important is to offer ease with supermarket together with the costumer. The study is to uphold an alternative way of buying goods and the popularity will help the supermarket because of its modern capability to assist the needs of the customers.   \r\nTechnologically, the field will continue to develop. The proposed system will possibly have a place in the technology development in the future.\r\nMarketing the product so that the consumers would actually buy it and use it will be a huge difficulty in solving the problem.\r\nThere would be new option for the customer that wants new ideas implemented, preventing the stagnation of the field.\r\nOther fields would hopefully invest into this field to try to integrate their business into the current trend.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_id` int(20) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `user_type` int(11) NOT NULL,
  `datetime_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `contact` bigint(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `emailad` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `lastname`, `password`, `status`, `user_type`, `datetime_reg`, `contact`, `firstname`, `emailad`) VALUES
(3, 'Customer', 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d', 1, 2, '2016-02-01 15:59:04', 9264772028, 'Customer', 'customer@gmail.com'),
(13, 'Aaron', '6adfb183a4a2c94a2f92dab5ade762a47889a5a1', 1, 2, '2016-02-05 05:36:33', 12345678911, 'Cyrus', 'abc@gmail.com'),
(14, 'Binay', 'e090a3b6612bfa096b549273614cbadfd1d98571', 1, 2, '2016-02-05 06:07:09', 9178700123, 'Jejomar', 'jojo@gmail.com'),
(17, 'wood', 'ad7d6cb9fbad3e9e84505a3dc82e0a41025e5081', 0, 2, '2016-02-06 01:44:25', 9063353362, 'Luke', 'woodluke@gmail.com'),
(19, 'Cholo', 'f749f113c51dac4f49cfaffc0f5f6eb830f2a187', 1, 2, '2016-02-05 15:50:57', 9063353362, 'patrick', 'Cholowoo@gmail.com'),
(21, 'Correa', 'ecad9a58403cec71cf8c042d4e4c82374c3bc3b9', 1, 2, '2016-02-06 03:34:02', 9362031314, 'Nikki', 'Nikkicorrea960@gmail.com'),
(22, 'Francisco', '123456', 0, 0, '2016-02-06 07:44:31', 9293313546, 'Emman', 'francisco_emman@ymail.com'),
(23, 'efgh', 'd68c19a0a345b7eab78d5e11e991c026ec60db63', 1, 2, '2016-02-06 07:45:07', 12345678911, 'abcd', 'abc@yahoo.com'),
(24, 'staff', 'f749f113c51dac4f49cfaffc0f5f6eb830f2a187', 1, 3, '2016-02-06 09:32:52', 0, 'staff', 'Staff@yahoo.com'),
(25, 'hello', 'e090a3b6612bfa096b549273614cbadfd1d98571', 1, 2, '2016-02-06 10:15:25', 9264772028, 'hello', 'hello@gmail.com'),
(26, 'Correa', 'ecad9a58403cec71cf8c042d4e4c82374c3bc3b9', 1, 2, '2016-02-06 11:31:56', 9362031314, 'Nikki', 'melvir_2003@yahoo.com'),
(27, 'Francisco', '7c222fb2927d828af22f592134e8932480637c0d', 1, 2, '2016-03-07 03:38:04', 9293313765, 'Emmanuelle', 'efstrike@ymail.com'),
(28, 'Armemi', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 1, 2, '2016-03-09 14:06:50', 9293313765, 'Hanzel', 'hanzel@yahoo.com'),
(29, 'franfran', '7c222fb2927d828af22f592134e8932480637c0d', 1, 2, '2016-03-09 14:13:07', 12345678901, 'Hanzel2', 'hanzel2@yahoo.com'),
(30, 'chane', '7c222fb2927d828af22f592134e8932480637c0d', 1, 2, '2016-03-09 14:15:53', 12345678901, 'channe', 'chan@yahoo.com'),
(31, 'srtikelanf', '7c222fb2927d828af22f592134e8932480637c0d', 1, 2, '2016-03-09 16:58:32', 9293313786, 'agelito', 'agelito@gmail.com'),
(32, 'Staff', '7c222fb2927d828af22f592134e8932480637c0d', 1, 3, '2016-03-20 16:03:29', 0, 'Emma', 'estaff@yahoo.com'),
(33, 'Free', '7c222fb2927d828af22f592134e8932480637c0d', 1, 3, '2016-03-31 10:09:01', 0, 'Jamie', 'jamie@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `user_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `status`, `user_type`) VALUES
('admin', 'admin', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(1, 'Beverages');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` tinyint(4) NOT NULL,
  `contact` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `contact`, `address`) VALUES
(1, ' https://www.facebook.com/pages/CVC-Supermarket/140936125976438', '700 Pioneer II Bldg., Grace Park, Caloocan City\nCaloocan');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `serial` int(11) NOT NULL,
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `address` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `phone` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`serial`, `name`, `email`, `address`, `phone`) VALUES
(1, 'Customer Customer', 'customer@gmail.com', 'Caloocan Manila', '9264772028'),
(2, 'Customer Customer', 'customer@gmail.com', 'Caloocan Manila', '9264772028'),
(3, 'Customer Customer', 'customer@gmail.com', 'Cavite Ternate', '9264772028'),
(4, 'Customer Customer', 'customer@gmail.com', 'Sampaloc Manila', '9264772028'),
(5, 'Customer Customer', 'customer@gmail.com', 'Caloocan', '9264772028'),
(6, 'Customer Customer', 'customer@gmail.com', 'Manila Manila', '9264772028'),
(7, 'Customer Customer', 'customer@gmail.com', 'Cavite', '9264772028'),
(8, 'Customer Customer', 'customer@gmail.com', 'Manila', '9264772028'),
(9, 'Customer Customer', 'customer@gmail.com', 'Manila', '9264772028'),
(10, 'Customer Customer', 'customer@gmail.com', 'Manila', '9264772028'),
(11, 'Customer Customer', 'customer@gmail.com', 'sda', '9264772028'),
(12, 'Customer Customer', 'customer@gmail.com', 'Sampaloc Manila', '9264772028'),
(13, 'Customer Customer', 'customer@gmail.com', 'Manila Manila', '9264772028'),
(14, 'Customer Customer', 'customer@gmail.com', 'SWhaim', '9264772028'),
(15, 'Customer Customer', 'customer@gmail.com', 'mAIsdi', '9264772028'),
(16, 'Customer Customer', 'customer@gmail.com', 'Red', '9264772028'),
(17, 'Customer Customer', 'customer@gmail.com', 'Manila Manila', '9264772028'),
(18, 'Customer Customer', 'customer@gmail.com', 'Manila Manila', '9264772028'),
(19, 'Customer Customer', 'customer@gmail.com', 'Mq', '9264772028'),
(20, 'Customer Customer', 'customer@gmail.com', 'manila', '9264772028'),
(21, 'Customer Customer', 'customer@gmail.com', 'Manila', '9264772028'),
(22, 'Customer Customer', 'customer@gmail.com', 'Caloocan', '9264772028'),
(23, 'Customer Customer', 'customer@gmail.com', 'Caloocan', '9264772028'),
(24, 'Customer Customer', 'customer@gmail.com', 'ihihi', '9264772028'),
(25, 'Customer Customer', 'customer@gmail.com', 'manila', '9264772028'),
(26, 'Customer Customer', 'customer@gmail.com', 'Manila Manila', '9264772028'),
(27, 'Customer Customer', 'customer@gmail.com', 'Caloocan', '9264772028');

-- --------------------------------------------------------

--
-- Table structure for table `featured`
--

CREATE TABLE `featured` (
  `id` tinyint(4) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `featured`
--

INSERT INTO `featured` (`id`, `product_id`, `name`, `picture`, `description`, `category`) VALUES
(11, 31, 'WILKINS DISTILLED WATER 6L', './assets/product/174069801756b5ad0fe0ca4.jpg', 'This product is brought to you by CVC Supermarket. More details about this product will be added here soon', 'Beverage'),
(12, 34, 'C2 Green Tea Apple 500ml 3s', './assets/product/189991970556b5ae9fccf48.jpg', 'This product is brought to you by CVC Supermarket. More details about this product will be added here soon', 'Beverage'),
(13, 48, 'SHIN RAMYUN GOURMET SPICY 117G', './assets/product/183227121656b5b63f4a45c.jpg', 'This product is brought to you by CVC Supermarket. More details about this product will be added here soon', 'CookingandBaking'),
(14, 54, 'PEPERO WHITE CHOCOLATE 32G 6S', './assets/product/82154486956b5b809c6729.jpg', 'This product is brought to you by CVC Supermarket. More details about this product will be added here soon', 'Imported'),
(15, 36, 'Rauch Tomato Juice 1L', './assets/product/39782186556b5af57e0263.jpg', 'This product is brought to you by CVC Supermarket. More details about this product will be added here soon', 'Beverage'),
(16, 55, 'CALBEE POTATO CHIP WASABI 170G', './assets/product/173461671256b5b83d65586.jpg', 'This product is brought to you by CVC Supermarket. More details about this product will be added here soon', 'Imported'),
(17, 31, 'WILKINS DISTILLED WATER 6L', './assets/product/174069801756b5ad0fe0ca4.jpg', 'This product is brought to you by CVC Supermarket. More details about this product will be added here soon', 'Beverage');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` tinyint(4) NOT NULL,
  `content` varchar(5000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `content`) VALUES
(1, 'Download our app here');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `serial` int(11) NOT NULL,
  `date` date NOT NULL,
  `customerid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`serial`, `date`, `customerid`) VALUES
(1, '2016-03-13', 12),
(2, '2016-03-13', 13),
(3, '2016-03-13', 14),
(4, '2016-03-13', 15),
(5, '2016-03-13', 16),
(6, '2016-03-14', 17),
(7, '2016-03-14', 18),
(8, '2016-03-14', 19),
(9, '2016-03-15', 20),
(10, '2016-03-15', 21),
(11, '2016-03-15', 22),
(12, '2016-03-15', 23),
(13, '2016-03-15', 24),
(14, '2016-03-16', 25),
(15, '2016-03-20', 26),
(16, '2016-03-29', 27);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `date` date NOT NULL,
  `date_exp` date NOT NULL,
  `status` tinyint(11) NOT NULL,
  `username` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `productname` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `totalprice` float NOT NULL,
  `orderid` int(11) NOT NULL,
  `start_price` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`productid`, `quantity`, `price`, `date`, `date_exp`, `status`, `username`, `productname`, `totalprice`, `orderid`, `start_price`) VALUES
(54, 4, 305.25, '2016-03-13', '2016-03-16', 3, 'customer@gmail.com', 'PEPERO WHITE CHOCOLATE 32G 6S', 1221, 1, 295),
(54, 4, 305.25, '2016-03-13', '2016-03-16', 3, 'customer@gmail.com', 'PEPERO WHITE CHOCOLATE 32G 6S', 1221, 2, 295),
(54, 4, 305.25, '2016-03-13', '2016-03-16', 3, 'customer@gmail.com', 'PEPERO WHITE CHOCOLATE 32G 6S', 1221, 3, 295),
(54, 4, 305.25, '2016-03-13', '2016-03-16', 2, 'customer@gmail.com', 'PEPERO WHITE CHOCOLATE 32G 6S', 1221, 4, 295),
(54, 4, 305.25, '2016-03-13', '2016-03-16', 2, 'customer@gmail.com', 'PEPERO WHITE CHOCOLATE 32G 6S', 1221, 5, 295),
(54, 4, 305.25, '2016-03-14', '2016-03-17', 4, 'customer@gmail.com', 'PEPERO WHITE CHOCOLATE 32G 6S', 1221, 6, 295),
(54, 3, 305.25, '2016-03-14', '2016-03-17', 3, 'customer@gmail.com', 'PEPERO WHITE CHOCOLATE 32G 6S', 915.75, 7, 295),
(52, 2, 48.5, '2016-03-14', '2016-03-17', 3, 'customer@gmail.com', 'DATU PUTI FISH SAUCE 1L', 97, 7, 45),
(52, 50, 48.5, '2016-03-14', '2016-03-17', 3, 'Customer@gmail.com', 'DATU PUTI FISH SAUCE 1L', 2425, 8, 45),
(53, 10, 282.25, '2016-03-15', '2016-03-18', 3, 'customer@gmail.com', 'PEPERO ORIGINAL 47G 6S', 2822.5, 9, 250),
(54, 4, 305.25, '2016-03-15', '2016-03-18', 3, 'customer@gmail.com', 'PEPERO WHITE CHOCOLATE 32G 6S', 1221, 10, 295),
(54, 4, 305.25, '2016-03-15', '2016-03-18', 3, 'customer@gmail.com', 'PEPERO WHITE CHOCOLATE 32G 6S', 1221, 11, 295),
(54, 4, 305.25, '2016-03-15', '2016-03-18', 1, 'customer@gmail.com', 'PEPERO WHITE CHOCOLATE 32G 6S', 1221, 12, 295),
(54, 4, 305.25, '2016-03-15', '2016-03-18', 2, 'customer@gmail.com', 'PEPERO WHITE CHOCOLATE 32G 6S', 1221, 13, 295),
(53, 1, 282.25, '2016-03-15', '2016-03-18', 2, 'customer@gmail.com', 'PEPERO ORIGINAL 47G 6S', 282.25, 13, 250),
(52, 48, 48.5, '2016-03-16', '2016-03-19', 3, 'customer@gmail.com', 'DATU PUTI FISH SAUCE 1L', 2328, 14, 45),
(53, 20, 282.25, '2016-03-20', '2016-03-23', 2, 'customer@gmail.com', 'PEPERO ORIGINAL 47G 6S', 5645, 15, 250),
(44, 3, 500, '2016-03-29', '2016-04-01', 3, 'customer@gmail.com', 'NIDO 5 POWDERED MILK 1.2KG', 1500, 16, 495);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `serial` int(11) NOT NULL,
  `date` date NOT NULL,
  `customerid` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`serial`, `date`, `customerid`) VALUES
(1, '2016-03-13', 'customer@gmail.com'),
(2, '2016-03-13', 'customer@gmail.com'),
(3, '2016-03-13', 'customer@gmail.com'),
(4, '2016-03-14', 'customer@gmail.com'),
(5, '2016-03-15', 'customer@gmail.com'),
(6, '2016-03-15', 'customer@gmail.com'),
(7, '2016-03-15', 'customer@gmail.com'),
(8, '2016-03-15', 'customer@gmail.com'),
(9, '2016-03-15', 'customer@gmail.com'),
(10, '2016-03-15', 'customer@gmail.com'),
(11, '2016-03-15', 'customer@gmail.com'),
(12, '2016-03-16', 'customer@gmail.com'),
(13, '2016-03-29', '0');

-- --------------------------------------------------------

--
-- Table structure for table `payment_detail`
--

CREATE TABLE `payment_detail` (
  `paymentid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `transactionnum` varchar(11) NOT NULL,
  `typeofpay` varchar(255) NOT NULL,
  `orderid` int(11) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_detail`
--

INSERT INTO `payment_detail` (`paymentid`, `username`, `picture`, `transactionnum`, `typeofpay`, `orderid`, `status`) VALUES
(1, 'customer@gmail.com', './images/payment/750656e58f71df29a.jpg', 'NA', 'Cash on Delivery', 1, 1),
(2, 'customer@gmail.com', './images/payment/156956e58f8fda25d.jpg', 'NA', 'Cash on Delivery', 2, 1),
(3, 'customer@gmail.com', './images/payment/2311056e58fb90faa5.jpg', 'FX29823', 'Metrobank (Annapolis branch)', 3, 1),
(4, 'customer@gmail.com', './images/payment/199675923356e6ee3739fdc.jpg', 'GH29823', 'Metrobank (Annapolis branch)', 7, 1),
(5, 'customer@gmail.com', '', 'FGH2819', 'Metrobank (Annapolis branch)', 9, 1),
(6, 'customer@gmail.com', '', 'FGH2983', 'Bank of the Philippine Islands (BPI) (St. Ignatius branch)', 8, 1),
(7, 'customer@gmail.com', '', '3129381923', 'Metrobank (Annapolis branch)', 10, 1),
(8, 'customer@gmail.com', '', 'FH6778', 'Metrobank (Annapolis branch)', 11, 1),
(9, 'customer@gmail.com', '', 'JG7890', 'Metrobank (Annapolis branch)', 12, 1),
(10, 'customer@gmail.com', '', 'FG908776', 'Metrobank (Annapolis branch)', 14, 3),
(11, '0', '', 'FHGS1923', 'Metrobank (Annapolis branch)', 16, 3);

-- --------------------------------------------------------

--
-- Table structure for table `sales_report`
--

CREATE TABLE `sales_report` (
  `id` int(11) NOT NULL,
  `earned` float NOT NULL,
  `price` float NOT NULL,
  `start_price` float NOT NULL,
  `bought` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_report`
--

INSERT INTO `sales_report` (`id`, `earned`, `price`, `start_price`, `bought`, `product_name`, `date`) VALUES
(1, 41, 305.25, 295, 4, 'PEPERO WHITE CHOCOLATE 32G 6S', '2016-03-13'),
(2, 41, 305.25, 295, 4, 'PEPERO WHITE CHOCOLATE 32G 6S', '2016-03-13'),
(3, 41, 305.25, 295, 4, 'PEPERO WHITE CHOCOLATE 32G 6S', '2016-03-13'),
(4, 30.75, 305.25, 295, 3, 'PEPERO WHITE CHOCOLATE 32G 6S', '2016-03-14'),
(5, 7, 48.5, 45, 2, 'DATU PUTI FISH SAUCE 1L', '2016-03-14'),
(6, 41, 305.25, 295, 4, 'PEPERO WHITE CHOCOLATE 32G 6S', '2016-03-15');

-- --------------------------------------------------------

--
-- Table structure for table `sys_report`
--

CREATE TABLE `sys_report` (
  `sr_id` int(11) NOT NULL,
  `report` varchar(255) NOT NULL,
  `report_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sys_report`
--

INSERT INTO `sys_report` (`sr_id`, `report`, `report_date`) VALUES
(1, 'Admin has upated product PEPERO WHITE CHOCOLATE 32G 6S', '2016-03-13 16:00:54'),
(2, 'customer@gmail.com has logout in', '2016-03-13 16:01:36'),
(3, 'customer@gmail.com has logged in', '2016-03-13 16:01:44'),
(4, 'Admin has logged in ', '2016-03-13 16:02:04'),
(5, 'customer@gmail.com has placed an order', '2016-03-13 16:03:52'),
(6, 'customer@gmail.com has payed for order ID 1', '2016-03-13 16:04:01'),
(7, 'customer@gmail.com has placed an order', '2016-03-13 16:04:18'),
(8, 'customer@gmail.com has payed for order ID 2', '2016-03-13 16:04:32'),
(9, 'customer@gmail.com has placed an order', '2016-03-13 16:04:50'),
(10, 'customer@gmail.com has payed for order ID 3', '2016-03-13 16:05:13'),
(11, 'customer@gmail.com has placed an order', '2016-03-13 16:05:33'),
(12, 'customer@gmail.com cancelled their order', '2016-03-13 16:06:08'),
(13, 'customer@gmail.com has logged in', '2016-03-13 16:11:10'),
(14, 'customer@gmail.com has placed an order', '2016-03-13 16:11:21'),
(15, 'customer@gmail.com cancelled their order', '2016-03-13 16:11:25'),
(16, 'Admin has logged in ', '2016-03-13 16:46:27'),
(17, 'Admin has logged in ', '2016-03-13 18:05:14'),
(18, 'Admin has logout ', '2016-03-13 18:09:04'),
(19, 'customer@gmail.com has logged in', '2016-03-13 18:09:54'),
(20, 'customer@gmail.com has logout in', '2016-03-13 18:10:18'),
(21, 'customer@gmail.com has logged in', '2016-03-14 03:24:49'),
(22, 'customer@gmail.com has logged in', '2016-03-14 03:26:08'),
(23, 'customer@gmail.com has logged in', '2016-03-14 09:04:25'),
(24, 'customer@gmail.com has logged in', '2016-03-14 09:12:38'),
(25, 'customer@gmail.com has placed an order', '2016-03-14 09:16:57'),
(26, 'customer@gmail.com has logged in', '2016-03-14 12:45:47'),
(27, 'Admin has logged in ', '2016-03-14 12:46:18'),
(28, 'Admin has logged in ', '2016-03-14 16:56:58'),
(29, 'customer@gmail.com has logged in', '2016-03-14 16:57:56'),
(30, 'customer@gmail.com has placed an order', '2016-03-14 16:58:45'),
(31, 'customer@gmail.com has placed an order', '2016-03-14 16:58:45'),
(32, 'customer@gmail.com has payed for order ID 7', '2016-03-14 17:00:39'),
(33, 'customer@gmail.com has payed for order ID 7', '2016-03-14 17:00:39'),
(34, 'Admin has logged in ', '2016-03-14 17:11:29'),
(35, 'customer@gmail.com has logged in', '2016-03-14 17:12:16'),
(36, 'admin expired an order', '2016-03-14 17:12:53'),
(37, 'Admin has logout ', '2016-03-14 17:16:54'),
(38, 'Admin has logged in ', '2016-03-14 21:25:13'),
(39, 'Customer@gmail.com has logged in', '2016-03-15 04:10:13'),
(40, 'Customer@gmail.com has placed an order', '2016-03-15 04:12:15'),
(41, 'Customer@gmail.com has logout in', '2016-03-15 04:15:18'),
(42, 'Admin has logged in ', '2016-03-15 04:29:57'),
(43, 'customer@gmail.com has logged in', '2016-03-15 04:33:01'),
(44, 'Admin has logout ', '2016-03-15 04:34:08'),
(45, 'Admin has logged in ', '2016-03-15 05:16:20'),
(46, 'Admin has logout ', '2016-03-15 05:25:42'),
(47, 'customer@gmail.com has logged in', '2016-03-15 07:50:57'),
(48, 'customer@gmail.com has placed an order', '2016-03-15 07:52:26'),
(49, 'customer@gmail.com has logged in', '2016-03-15 08:13:14'),
(50, 'customer@gmail.com has logged in', '2016-03-15 08:23:26'),
(51, 'customer@gmail.com has logged in', '2016-03-15 08:40:35'),
(52, 'Admin has logged in ', '2016-03-15 08:42:13'),
(53, 'customer@gmail.com has logged in', '2016-03-15 08:49:32'),
(54, 'Admin has logged in ', '2016-03-15 08:49:51'),
(55, 'customer@gmail.com has placed an order', '2016-03-15 08:52:26'),
(56, 'customer@gmail.com has payed for order ID 10', '2016-03-15 08:53:32'),
(57, 'Admin has logged in ', '2016-03-15 08:53:55'),
(58, 'customer@gmail.com has logged in', '2016-03-15 08:54:47'),
(59, 'customer@gmail.com has placed an order', '2016-03-15 08:55:06'),
(60, 'customer@gmail.com has placed an order', '2016-03-15 08:55:24'),
(61, 'customer@gmail.com has logged in', '2016-03-15 08:59:59'),
(62, 'Admin has logged in ', '2016-03-15 10:01:00'),
(63, 'Admin has aprroved a payment ', '2016-03-15 10:03:38'),
(64, 'Admin has aprroved a payment ', '2016-03-15 10:04:02'),
(65, 'customer@gmail.com has logged in', '2016-03-15 10:04:26'),
(66, 'customer@gmail.com has placed an order', '2016-03-15 10:05:33'),
(67, 'customer@gmail.com has placed an order', '2016-03-15 10:05:33'),
(68, 'customer@gmail.com has logged in', '2016-03-16 06:37:22'),
(69, 'customer@gmail.com has logged in', '2016-03-16 06:45:00'),
(70, 'customer@gmail.com has logged in', '2016-03-16 06:52:14'),
(71, 'customer@gmail.com has placed an order', '2016-03-16 06:53:54'),
(72, 'customer@gmail.com has logout in', '2016-03-16 06:54:46'),
(73, 'customer@gmail.com has logged in', '2016-03-16 06:55:24'),
(74, 'Admin has logged in ', '2016-03-16 06:57:26'),
(75, 'customer@gmail.com has logged in', '2016-03-16 07:23:05'),
(76, 'Admin has logged in ', '2016-03-16 07:26:59'),
(77, 'customer@gmail.com has logged in', '2016-03-17 07:04:35'),
(78, 'Admin has logged in ', '2016-03-17 07:07:36'),
(79, 'Admin has logout ', '2016-03-17 07:12:10'),
(80, 'customer@gmail.com has logged in', '2016-03-19 04:04:03'),
(81, 'customer@gmail.com has logout in', '2016-03-19 04:05:18'),
(82, 'Admin has logged in ', '2016-03-19 04:05:37'),
(83, 'Customer@gmail.com has logged in', '2016-03-19 11:35:29'),
(84, 'Customer@gmail.com has logged in', '2016-03-19 11:35:30'),
(85, 'customer@gmail.com has logged in', '2016-03-20 13:06:58'),
(86, 'customer@gmail.com cancelled their order', '2016-03-20 13:40:51'),
(87, 'customer@gmail.com has placed an order', '2016-03-20 13:46:04'),
(88, 'customer@gmail.com cancelled their order', '2016-03-20 13:46:33'),
(89, 'Admin has logged in ', '2016-03-20 14:07:38'),
(90, 'Admin has create a new staff estaff@yahoo.com', '2016-03-20 16:03:29'),
(91, 'estaff@yahoo.com has logged in', '2016-03-20 16:04:34'),
(92, 'Admin has logged in ', '2016-03-21 21:33:13'),
(93, 'customer@gmail.com has logged in', '2016-03-21 22:07:37'),
(94, 'Admin has logged in ', '2016-03-21 22:14:13'),
(95, 'customer@gmail.com has logged in', '2016-03-21 22:21:17'),
(96, 'customer@gmail.com has logged in', '2016-03-28 11:27:56'),
(97, 'customer@gmail.com has logged in', '2016-03-28 13:21:38'),
(98, 'customer@gmail.com has logged in', '2016-03-29 12:02:52'),
(99, 'customer@gmail.com has placed an order', '2016-03-29 13:21:29'),
(100, 'Admin has logged in ', '2016-03-30 02:31:05'),
(101, 'Admin has logged in ', '2016-03-30 14:28:05'),
(102, 'Admin has logged in ', '2016-03-30 15:02:11'),
(103, 'Admin has logged in ', '2016-03-31 08:43:48'),
(104, 'Admin has create a new staff jamie@yahoo.com', '2016-03-31 10:09:01'),
(105, 'estaff@yahoo.com has logged in', '2016-03-31 10:09:26'),
(106, 'customer@gmail.com has logged in', '2016-03-31 12:03:30'),
(107, 'Admin has logged in ', '2016-03-31 12:17:24'),
(108, 'customer@gmail.com has logged in', '2016-04-03 10:35:31'),
(109, 'customer@gmail.com has logged in', '2016-04-03 12:30:12'),
(110, 'customer@gmail.com has logged in', '2016-04-03 12:36:07'),
(111, 'customer@gmail.com has logged in', '2016-04-07 07:34:37'),
(112, 'Admin has logged in ', '2016-04-11 12:29:45'),
(113, 'Admin has logged in ', '2016-04-11 12:30:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `Category_ID` int(11) NOT NULL,
  `Category_name` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`Category_ID`, `Category_name`) VALUES
(24, 'Grocery'),
(25, 'Breakfast'),
(31, 'CookingandBaking'),
(27, 'Beverage'),
(28, 'Imported');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `Menu_ID` int(11) NOT NULL,
  `Menu_name` varchar(50) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Price` double NOT NULL,
  `Menu_image` text NOT NULL,
  `Description` text NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Start_Price` double NOT NULL,
  `Category_ID` int(11) DEFAULT NULL,
  `Serve_for` varchar(45) DEFAULT NULL,
  `Bought` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`Menu_ID`, `Menu_name`, `Category`, `Price`, `Menu_image`, `Description`, `Quantity`, `Start_Price`, `Category_ID`, `Serve_for`, `Bought`) VALUES
(53, 'PEPERO ORIGINAL 47G 6S', 'Imported', 282.25, './assets/product/21947233556b5b7c7f0626.jpg', 'This product is brought to you by CVC Supermarket. More details about this product will be added here soon', 89, 250, NULL, NULL, 11),
(52, 'DATU PUTI FISH SAUCE 1L', 'CookingandBaking', 48.5, './assets/product/109793993256b5b784e2cf4.jpg', 'This product is brought to you by CVC Supermarket. More details about this product will be added here soon', 0, 45, NULL, NULL, 100),
(51, 'NISSIN CUP NOODLES SEAFOOD 40G', 'CookingandBaking', 15.5, './assets/product/192350223856b5b737df7c2.jpg', 'This product is brought to you by CVC Supermarket. More details about this product will be added here soon', 50, 10, NULL, NULL, NULL),
(50, 'LUCKY ME PANCIT CANTON CHILIMANSI 60G', 'CookingandBaking', 52.2, './assets/product/26313084656b5b6fcb783a.jpg', 'This product is brought to you by CVC Supermarket. More details about this product will be added here soon', 55, 45, NULL, NULL, NULL),
(49, 'DEL MONTE ELBOW MACARONI PASTA 1KG', 'CookingandBaking', 90, './assets/product/67760514456b5b6b40f939.jpg', 'This product is brought to you by CVC Supermarket. More details about this product will be added here soon', 88, 80, NULL, NULL, NULL),
(48, 'SHIN RAMYUN GOURMET SPICY 117G', 'CookingandBaking', 54, './assets/product/183227121656b5b63f4a45c.jpg', 'This product is brought to you by CVC Supermarket. More details about this product will be added here soon', 199, 50, NULL, NULL, NULL),
(47, 'Cheez Whiz EZ Squeeze 220g', 'Breakfast', 66, './assets/product/190465829956b5b3becfaf8.jpg', 'This product is brought to you by CVC Supermarket. More details about this product will be added here soon', 100, 50, NULL, NULL, NULL),
(46, 'Lilys Peanut Buttler 224g', 'Breakfast', 79, './assets/product/52943363456b5b31523b0b.jpg', 'This product is brought to you by CVC Supermarket. More details about this product will be added here soon', 40, 75, NULL, NULL, NULL),
(45, 'ANLENE GOLD PLAIN 990G', 'Breakfast', 519, './assets/product/91748470356b5b28e72ea7.jpg', 'This product is brought to you by CVC Supermarket. More details about this product will be added here soon', 80, 500, NULL, NULL, NULL),
(44, 'NIDO 5 POWDERED MILK 1.2KG', 'Breakfast', 500, './assets/product/145675516356b5b252c1414.jpg', 'This product is brought to you by CVC Supermarket. More details about this product will be added here soon', 72, 495, NULL, NULL, 3),
(42, 'Purefoods Sizzling Sisig Delight 150g', 'Grocery', 39, './assets/product/89727091656b5b1c372cda.jpg', 'This product is brought to you by CVC Supermarket. More details about this product will be added here soon', 50, 30, NULL, NULL, NULL),
(41, 'RENO LIVERSPREAD 85G', 'Grocery', 15, './assets/product/174340164156b5b17c154f6.jpg', 'This product is brought to you by CVC Supermarket. More details about this product will be added here soon', 50, 10, NULL, NULL, NULL),
(40, 'DAK CHOPPED HAM 454G', 'Grocery', 268, './assets/product/39895103456b5b139b23a6.jpg', 'This product is brought to you by CVC Supermarket. More details about this product will be added here soon', 40, 260, NULL, NULL, NULL),
(39, 'PUREFOODS CORNED BEEF 210G 2S', 'Grocery', 150, './assets/product/134823454756b5b0bec41f6.jpg', 'This product is brought to you by CVC Supermarket. More details about this product will be added here soon', 92, 125, NULL, NULL, NULL),
(38, 'PUREFOODS CORNED BEEF 150G', 'Grocery', 57.5, './assets/product/158543068056b5b06498d6f.jpg', 'This product is brought to you by CVC Supermarket. More details about this product will be added here soon', 100, 50, NULL, NULL, NULL),
(37, 'TANG JUICE 1L PACK Orange', 'Beverage', 54, './assets/product/198683794456b5afdd4ce20.jpg', 'This product is brought to you by CVC Supermarket. More details about this product will be added here soon', 100, 50, NULL, NULL, NULL),
(36, 'Rauch Tomato Juice 1L', 'Beverage', 82.5, './assets/product/39782186556b5af57e0263.jpg', 'This product is brought to you by CVC Supermarket. More details about this product will be added here soon', 100, 75, NULL, NULL, NULL),
(33, 'NESCAFE SMOOVLATTE 190ML', 'Beverage', 35, './assets/product/4412930356b5ae4b89f60.jpg', 'This product is brought to you by CVC Supermarket. More details about this product will be added here soon', 70, 30, NULL, NULL, NULL),
(34, 'C2 Green Tea Apple 500ml 3s', 'Beverage', 58.5, './assets/product/189991970556b5ae9fccf48.jpg', 'This product is brought to you by CVC Supermarket. More details about this product will be added here soon', 50, 50, NULL, NULL, NULL),
(35, 'NESCAFE DECAF COFFEE 80G', 'Beverage', 88, './assets/product/161751562656b5aeef6169a.jpg', 'This product is brought to you by CVC Supermarket. More details about this product will be added here soon', 50, 80, NULL, NULL, NULL),
(31, 'WILKINS DISTILLED WATER 6L', 'Beverage', 81, './assets/product/174069801756b5ad0fe0ca4.jpg', 'This product is brought to you by CVC Supermarket. More details about this product will be added here soon', 100, 50, NULL, NULL, NULL),
(54, 'PEPERO WHITE CHOCOLATE 32G 6S', 'Imported', 305.25, './assets/product/82154486956b5b809c6729.jpg', 'This product is brought to you by CVC Supermarket. More details about this product will be added here soon', 65, 295, NULL, NULL, 35),
(55, 'CALBEE POTATO CHIP WASABI 170G', 'Imported', 92, './assets/product/173461671256b5b83d65586.jpg', 'This product is brought to you by CVC Supermarket. More details about this product will be added here soon', 100, 85, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_setting`
--

CREATE TABLE `tbl_setting` (
  `Variable` varchar(20) NOT NULL,
  `Value` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_setting`
--

INSERT INTO `tbl_setting` (`Variable`, `Value`) VALUES
('Tax', '0'),
('Currency', 'PHP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category` (`category`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `featured`
--
ALTER TABLE `featured`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `payment_detail`
--
ALTER TABLE `payment_detail`
  ADD PRIMARY KEY (`paymentid`);

--
-- Indexes for table `sales_report`
--
ALTER TABLE `sales_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_report`
--
ALTER TABLE `sys_report`
  ADD PRIMARY KEY (`sr_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`Category_ID`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`Menu_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `account_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `featured`
--
ALTER TABLE `featured`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `payment_detail`
--
ALTER TABLE `payment_detail`
  MODIFY `paymentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `sales_report`
--
ALTER TABLE `sales_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sys_report`
--
ALTER TABLE `sys_report`
  MODIFY `sr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `Category_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `Menu_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
