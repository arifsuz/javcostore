-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2018 at 08:53 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alphaware`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerid` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `mi` varchar(1) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `zipcode` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_size` varchar(50) NOT NULL,
  `product_image` varchar(500) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_size`, `product_image`, `brand`, `category`) VALUES
(3, 'Nike Air Max Neon', '12000', '7', '1141103372nike15.jpg', 'Nike', 'basketball'),
(4, 'Nike Air Max Green', '12000', '8', '832975975nike5.jpg', 'Nike', 'basketball'),
(6, 'Adidas Gent', '13000', '9', '13634363832010-Adidas-Men-Basketball-Shoes-2.jpg', 'Adidas', 'basketball'),
(7, 'Adidas 599 LRG', '15000', '8', '872686791Adidas Basketball Shoes 599_LRG.jpg', 'Adidas', 'basketball'),
(8, 'Lebron 11 Siver', '18000', '8', '124030907nike13.jpg', 'Nike', 'basketball'),
(9, 'Adidas Adizero Black', '18000', '10', '14237873113-adidas-Rose-Dominate-Adizero-shoes.jpg', 'Adidas', 'basketball'),
(10, 'Adidas Adizero Blue', '18000', '10', '1024158586Adidas_Rose_Shoes_009.jpg', 'Adidas', 'basketball'),
(11, 'Lebron 11 Red', '18000', '9', '567507982nike10.jpg', 'Nike', 'basketball'),
(13, 'Nike Hypervenom', '10000', '12', '1312216564nike-hypervenoms-customize-fg-2015-outlet-neymar-colors-soccer-shoes-professional.jpg', 'Nike', 'football'),
(14, 'Nike C Lou Generation', '12000', '11', '533123642013_Discount_Nike_C_Luo_9_Generation_Online_Blue_Green.jpg', 'Nike', 'football'),
(15, 'Nike Mercurial Vapor 7 Superfly II FG Lightning', '12000', '12', '1157463277Nike-Mercurial-Vapor-7-Superfly-III-FG-Lightning-Soccer-Shoes-Fluorescent-Yellow-Black.jpg', 'Nike', 'football'),
(16, 'Nike Magista Obra', '12000', '9', '335092704Cheap-Nike-Magista-Obra-.jpg', 'Nike', 'football'),
(17, 'Adidas Chaussures', '12000', '8', '697721412chaussures001.jpg', 'Adidas', 'football'),
(19, 'Nike Flyknit Lunar Green Blue', '8000', '9', '745184160Nike_Nike_Flyknit_Lunar_2_Mens_Fluorescent_Green_Blue_Running_Shoes_2015_Outlet.jpg', 'Nike', 'Running'),
(20, 'Nike Flyknit Lunar Sea Blue', '8000', '10', '1239262802Nike_Nike_Flyknit_Lunar_2_Mens_Sky_Blue_Sea_Blue_Running_Shoes_2015_Cheap.jpg', 'Nike', 'Running'),
(21, 'Nike Flyknit Green', '8000', '12', '470680173flyknit.jpg', 'Nike', 'Running'),
(26, 'Nike Hypervenom Phantom', '15000', '8', '15416832542014-Nike-Hypervenom-Phantom-FG-Red-Fluorescent-Yellow.jpg', 'Nike', 'football'),
(28, 'Adidas Adizero Red', '18000', '9', '153564340adidas-all-star-basketball-shoes-adizero-shadow.jpg', 'Adidas', 'basketball'),
(29, 'Adidas Gents', '10000', '9', '14124685402-Adidas-gents-shoes-collection-2015-01.jpg', 'Adidas', 'Running'),
(30, 'Nike Flyknit Gray & Pink', '8000', '11', '948731815nw1.jpg', 'Nike', 'Running'),
(31, 'Reebok Zigtech Shake', '10000', '10', '245113227reebok-zigtech-shake-running-shoes-offer-lemonstore-1405-13-lemonstore@1.jpg', 'Reebok', 'Running'),
(157, 'Reebok Blast', '10000', '9', '547866585reebok-blast-profile.jpg', 'Reebok', 'feature'),
(21561, 'Lebron 11 ', '15000', '10', '1125171488heat-lebron-11-17.jpg', 'Nike', 'feature'),
(51292, 'Adidas Adizero F50', '10000', '10', '1272267959adizero-F50-FG.jpg', 'Adidas', 'feature'),
(358159, 'Flyknit 360', '8000', '8', '40329068flyknit.jpg', 'Nike', 'feature'),
(431860, 'Nike Hypervenom Neymar Jr.', '12000', '9', '852236910hypervenom.png', 'Nike', 'feature'),
(961461, 'Adidas Bounce Titan', '9000', '9', '367527167Rabatt_Prezzo_Ridotto_Adidas_Bounce_Titan_Herren_White_Schwarz_Running_Sho_Online.jpg', 'Adidas', 'feature');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stock_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stock_id`, `product_id`, `qty`) VALUES
(1, 71339, 20),
(2, 82631, 30),
(3, 3, 20),
(4, 4, 20),
(5, 6, 20),
(6, 7, 20),
(7, 8, 20),
(8, 9, 20),
(9, 10, 19),
(10, 11, 23),
(11, 13, 20),
(12, 14, 20),
(13, 15, 20),
(14, 16, 20),
(15, 17, 20),
(16, 19, 20),
(17, 20, 20),
(18, 21, 20),
(19, 26, 13),
(20, 28, 21),
(21, 29, 18),
(22, 30, 20),
(23, 31, 22),
(26, 431860, 39),
(27, 21561, 30),
(28, 358159, 30),
(29, 157, 25),
(30, 51292, 20),
(31, 961461, 22);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `order_stat` varchar(100) NOT NULL,
  `order_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_detail`
--

CREATE TABLE `transaction_detail` (
  `transacton_detail_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_qty` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `transaction_detail`
--
ALTER TABLE `transaction_detail`
  ADD PRIMARY KEY (`transacton_detail_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `transaction_detail`
--
ALTER TABLE `transaction_detail`
  MODIFY `transacton_detail_id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
