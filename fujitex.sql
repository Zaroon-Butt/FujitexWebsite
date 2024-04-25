-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 05:48 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fujitex`
--

-- --------------------------------------------------------

--
-- Table structure for table `kid`
--

CREATE TABLE `kid` (
  `KP_id` int(11) NOT NULL,
  `kp_name` varchar(600) NOT NULL,
  `kp_type` varchar(600) NOT NULL,
  `kp_img` varchar(600) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kid`
--

INSERT INTO `kid` (`KP_id`, `kp_name`, `kp_type`, `kp_img`, `price`) VALUES
(2, 'Rollover ', '5-10', 'kidF.jpg', 1800),
(3, 'outfitter', '5-10', 'ki6.jpg', 2500),
(4, 'outfitter', '10', 'kid2.jpg', 1000),
(5, 'Denim', '15', 'kdi3.jpg', 1500);

-- --------------------------------------------------------

--
-- Table structure for table `men`
--

CREATE TABLE `men` (
  `P_id` int(11) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `ptype` varchar(20) NOT NULL,
  `P_img` varchar(600) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `men`
--

INSERT INTO `men` (`P_id`, `pname`, `ptype`, `P_img`, `price`) VALUES
(13, 'Suntex', 'wash and wear', 'men3.jpg', 1800),
(14, 'larson', 'Cotton', 'men2.jpg', 2500),
(15, 'Fujitex', 'wash and wear', 'men1.jpg', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `order_id` int(11) NOT NULL,
  `customer_name` varchar(600) NOT NULL,
  `customer_no` varchar(600) NOT NULL,
  `customer_address` varchar(600) NOT NULL,
  `customer_email` varchar(600) NOT NULL,
  `product_name` varchar(600) NOT NULL,
  `product_price` varchar(600) NOT NULL,
  `totalamount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shoppingcart`
--

INSERT INTO `shoppingcart` (`order_id`, `customer_name`, `customer_no`, `customer_address`, `customer_email`, `product_name`, `product_price`, `totalamount`) VALUES
(1, 'zaroon', '03328401324', 'hkkh1441', 'hkkh1441@gmail.com', 'Men fabric ,ALKARAM', '1600,1600', 0),
(2, 'zaroon butt', '03114497084', '100 ucp', 'zaroonnbutt@gmail', 'maria b ,larson', '3000,2500', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(100) NOT NULL,
  `_Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `_Password`) VALUES
('zara@asdasds', 'dasdasdasd'),
('zaroonbutt80@gmail.com', 'fsdfsdf'),
('zaroonbutt80@gmail.com', 'dasds'),
('zahidbuttt80@gmail.com', 'iambander '),
('', ''),
('asdbasdhba@adsd', 'dasdsda'),
('sfdfdf', 'fsdfsdfsf'),
('sfdfsadfsdfasfadfas', 'fasfasfasfa'),
('dsada@gmail', 'dasdasd'),
('goodboi@gamil', 'cascas'),
('goodboi@gamil', 'cascas'),
('zaroonbutt80@gmail.com', 'helloworld'),
('zaroonbutt80@gmail.com', 'helloworld'),
('zaroonbutt80@gmail.com', 'helloworld'),
('zaroonbutt80@gmail.com', 'afsfasf'),
('zaroonbutt80@gmail.com', 'ykyukyu'),
('zaroonbutt80@gmail.com', '123456789'),
('zaroonbutt80@gmail.com', '123456789'),
('zaroonbutt80@gmail.com', '123456789'),
('zahidbutt@gmail.com', 'dasdasda'),
('azanbutt2311@gmail.com', 'admin'),
('mahnoory43@gmail.com', '12345678'),
('zaroonbutt80@gmail.com', 'gjfjfjfjfj'),
('zahidbuttt80@gmail.com', 'vjvjvjvj'),
('zaroonbutt80@gmail.com', 'sdfdfs'),
('noorbutt@gmail.com', 'afsfasfaf'),
('no@gmail.com', 'lol'),
('zaroonbutt80@gmail.com', 'sadas'),
('azanbutt2311@gmail.com', 'ads'),
('azanbutt2311@gmail.com', 'csdcs'),
('azanbutt2311@gmail.com', 'fdsfsdfs'),
('zaroonbutt80@gmail.com', 'dasdsda'),
('alibutt@gmail.com', 'alibutt'),
('alibutt@gmail.com', 'alibutt'),
('dasdasd@adsda', 'adsdasd'),
('adsdasd@asds', 'dasdasd'),
('zaroonbutt@123', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `women`
--

CREATE TABLE `women` (
  `WP_id` int(11) NOT NULL,
  `WP_name` varchar(11) NOT NULL,
  `WP_type` varchar(11) NOT NULL,
  `WP_img` varchar(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `women`
--

INSERT INTO `women` (`WP_id`, `WP_name`, `WP_type`, `WP_img`, `price`) VALUES
(7, 'maria b ', 'loan', 'zara.jpg', 3000),
(9, 'lime light', 'cotton', 'womenF.jpg', 3500),
(10, 'lime light', 'karandi', 'women3.jpg', 4000),
(11, 'Rang ja', 'loan', 'women4.jpg', 2500),
(12, 'Mariyam khu', 'loan', 'women5.jpg', 3600);

-- --------------------------------------------------------

--
-- Table structure for table `_admin`
--

CREATE TABLE `_admin` (
  `email` varchar(100) NOT NULL,
  `_Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `_admin`
--

INSERT INTO `_admin` (`email`, `_Password`) VALUES
('dasdasd@csdcs', 'dasd'),
('zaroonbutt80@gmail.com', 'heloo'),
('zaroonbutt80@gmail.com', 'heloo'),
('azanbutt2311@gmail.com', 'dasdas'),
('zaroonbutt80@gmail.com', 'zaroon'),
('zaroonbutt80@gmail.com', 'eadasda'),
('daad@cas', 'casc'),
('dasda@ads', 'dasdas'),
('admin@123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kid`
--
ALTER TABLE `kid`
  ADD PRIMARY KEY (`KP_id`);

--
-- Indexes for table `men`
--
ALTER TABLE `men`
  ADD PRIMARY KEY (`P_id`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `women`
--
ALTER TABLE `women`
  ADD PRIMARY KEY (`WP_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kid`
--
ALTER TABLE `kid`
  MODIFY `KP_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `men`
--
ALTER TABLE `men`
  MODIFY `P_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `women`
--
ALTER TABLE `women`
  MODIFY `WP_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
