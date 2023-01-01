-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2023 at 04:46 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin', 'admin'),
(4, 'admin2', 'admin2'),
(6, 'tuanhien', 'tuanhien'),
(7, 'admin3', 'admin3');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `item` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`item`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`id`, `user_name`, `item`) VALUES
(1, '1', '{\"11\":{\"name\":\"DKMV Tee Stride-Tru1eafng\",\"price\":\"169000\",\"image\":\"https://bizweb.dktcdn.net/thumb/1024x1024/100/369/522/products/ao-thun-local-brand-dep-gia-re-dkmv-stride-tee-5.jpg\",\"quantity\":\"10\"}}'),
(2, 'demo', '{\"5\":{\"name\":\"Hoodie Degrey Basic - HDB\",\"price\":\"300000\",\"image\":\"https://product.hstatic.net/1000281824/product/z3456796724014_3041ffc48893023ac647d194fc14f83f_5dfa7638264d4172b8a394f6726ae346_master.jpg\",\"quantity\":\"5\"}}'),
(3, 'demo', '{\"5\":{\"name\":\"Hoodie Degrey Basic - HDB\",\"price\":\"300000\",\"image\":\"https://product.hstatic.net/1000281824/product/z3456796724014_3041ffc48893023ac647d194fc14f83f_5dfa7638264d4172b8a394f6726ae346_master.jpg\",\"quantity\":\"5\"}}'),
(4, '', '{\"1\":{\"name\":\"Degrey.Madmonks u00c1o khou00e1c Bomber Lu00f4ng - JBB\",\"price\":\"650000\",\"image\":\"https://product.hstatic.net/1000281824/product/50d2d0da3f8a437cb5c0a20c6239aa7a_1d87a702d3a744ecaed8543126404421_master.jpg\",\"quantity\":3}}'),
(5, 'demo', '{\"2\":{\"name\":\"Degrey Cardigan D - DCD\",\"price\":\"550000\",\"image\":\"https://product.hstatic.net/1000281824/product/6f1ca7f97d944f90bfcec1547ccd4ff1_76bc8c2959994885a3c6b2cf6fa5e726_master.jpeg\",\"quantity\":1}}'),
(6, 'nguyenvana', '{\"9\":{\"name\":\"Degrey Galaxy Backpack - DGB\",\"price\":\"378000\",\"image\":\"https://product.hstatic.net/1000281824/product/5be4f351-7a9a-4b70-971d-ed545ce7212c_16998439b0604aeda9c1927ba1100b6b_master.jpeg\",\"quantity\":1}}');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`, `gender`) VALUES
(1, 'Degrey.Madmonks Áo khoác Bomber Lông - JBB', 650000, 'https://product.hstatic.net/1000281824/product/50d2d0da3f8a437cb5c0a20c6239aa7a_1d87a702d3a744ecaed8543126404421_master.jpg', 'Nam'),
(2, 'Degrey Cardigan D - DCD', 550000, 'https://product.hstatic.net/1000281824/product/6f1ca7f97d944f90bfcec1547ccd4ff1_76bc8c2959994885a3c6b2cf6fa5e726_master.jpeg', 'Nu'),
(3, 'Áo Thun Basic Degrey Đen - ATBD Đen', 190000, 'https://product.hstatic.net/1000281824/product/a48e9de3-37bf-48c6-b715-a41b9500ea4b_64689524861a4d0a99554bfaead02dfb_master.jpeg', 'Nam'),
(4, 'Áo Thun Basic Degrey - ATBD', 190000, 'https://product.hstatic.net/1000281824/product/cda1afb1-cf5f-4cee-9ae5-83413bff1903_91a7357340f94223bdaf35da3258420b_master.jpeg', 'Nam'),
(5, 'Hoodie Degrey Basic - HDB', 300000, 'https://product.hstatic.net/1000281824/product/z3456796724014_3041ffc48893023ac647d194fc14f83f_5dfa7638264d4172b8a394f6726ae346_master.jpg', 'Nam'),
(6, 'Sweater Degrey Basic - SDB', 250000, 'https://product.hstatic.net/1000281824/product/z3441045895403_b477a79de887dbf65d21b77519d6acc2_69692b963bb14d21a5eb5f2ebfa7313f_master.jpg', 'Nam'),
(7, 'Balo Gấu Tiedye - BGTD', 420000, 'https://product.hstatic.net/1000281824/product/fbae2fcc-d769-481c-a5a7-790010157fe7_896444fa114741d68da98093a94135c1_master.jpeg', 'Nu'),
(8, 'Degrey Letter Backpack - DLBP', 420000, 'https://product.hstatic.net/1000281824/product/02545223-210d-42de-87e1-6ab9972d8909_da1f984debd8437e840cb51be29e6aa1_master.jpeg', 'Nu'),
(9, 'Degrey Galaxy Backpack - DGB', 378000, 'https://product.hstatic.net/1000281824/product/5be4f351-7a9a-4b70-971d-ed545ce7212c_16998439b0604aeda9c1927ba1100b6b_master.jpeg', 'Nu'),
(10, 'Degrey Tiedye Backpack - DTDB', 378000, 'https://product.hstatic.net/1000281824/product/e8d300a9-a2cc-4612-9b0a-4404dd8fc561_06b57e02648b4120abf61650a1f9a3e9_master.jpeg', 'Nu'),
(11, 'DKMV Tee Stride-Trắng', 169000, 'https://bizweb.dktcdn.net/thumb/1024x1024/100/369/522/products/ao-thun-local-brand-dep-gia-re-dkmv-stride-tee-5.jpg', 'Nu');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `account` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `dob` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `account`, `password`, `name`, `gender`, `dob`) VALUES
(1, 'admin', 'admin', '', '', ''),
(2, 'demo', 'demo', '', '', ''),
(3, 'Hien.giang14112002', '123123', 'Python', 'Nam', '14/11/2002'),
(5, 'tuanhien', '321321', '123123', '12312', '14/11/2002'),
(7, 'hihihaha', 'hihaha', '123123', '12312', '14/11/2002'),
(8, 'dsgsdfsd', 'fdsdfsfsd', 'fsdfsdfsd', 'fsdfs', '14/11/2002'),
(9, 'nguyenvana', 'hien', 'hien', 'hien', '14/11/2002'),
(10, '34234234', '23423432', '32423423', 'Nam', '4234234234'),
(12, 'fdsfsdfsdf', 'dsfsdfsd', 'fd', 'Nam', '14/11/2002'),
(13, '2432423', '4234234', '432423423', 'Nam', '14/11/2002'),
(14, 'abc', 'bca', 'hihi', 'Nam', '14/11/2002');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
