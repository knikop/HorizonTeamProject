-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2022 at 01:51 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `horizon`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` enum('cart','checkout') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `product_id`, `profile_id`, `qty`, `status`) VALUES
(157, 1, 5, 2, 'checkout'),
(158, 1, 4, 2, 'cart'),
(159, 2, 4, 2, 'cart'),
(160, 2, 5, 1, 'checkout'),
(162, 6, 5, 1, 'checkout'),
(163, 1, 6, 1, 'checkout'),
(164, 2, 6, 1, 'checkout');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `cost_price` decimal(6,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `cost_price`, `quantity`, `description`, `image`) VALUES
(1, 'Gaming Chair', '500.99', 50, 'A gaming chair', 'https://multimedia.bbycastatic.ca/multimedia/products/250x250/158/15833/15833808.jpeg'),
(2, 'Alienware Gaming mouse', '169.00', 200, 'A gaming mouse', 'https://5.imimg.com/data5/SELLER/Default/2021/2/CP/RF/OY/15867386/71w88xegvkl-sl1500--250x250.jpg'),
(3, 'Doom', '89.99', 500, 'RIP AND TEAR', 'https://static.wikia.nocookie.net/doom/images/6/65/DoomEternal_Cover.png/revision/latest/smart/width'),
(4, 'Among US', '5.00', 300, 'Find the Imposter!', 'https://www.freegamesland.net/wp-content/uploads/2021/01/Among-Us-s.jpg'),
(5, 'Call of Duty: MW2 Vault Edition', '120.00', 800, 'The newest and highly anticipated call of duty game', 'https://i.ytimg.com/vi/y1XPSvIb9OI/mqdefault.jpg'),
(6, 'Call of Duty: MW2', '89.99', 900, 'The newest and highly anticipated call of duty game', 'https://www.videogameschronicle.com/files/2022/05/modern-warfare-2-artwork-c-320x200.jpg'),
(7, 'Assassin\'s Creed Unity', '69.99', 150, 'Vive La Revolution!!!', 'https://www.mercurynews.com/wp-content/uploads/2016/08/20141112__CCT-VIDGAME-11141.jpg?w=247'),
(8, 'Assassins Creed ', '79.99', 100, 'The Assassin\'s Creed ever released', 'https://assets-prd.ignimgs.com/2021/12/30/assassins-creed-1-button-1640894408253.jpg?width=250&crop='),
(9, 'Halo: The Master Chief Collection', '49.99', 25, 'A Collection of all the best Halo games', 'https://upload.wikimedia.org/wikipedia/en/a/a3/Halo_TMCC_KeyArt_Vert_2019.png'),
(10, 'The Witcher 3: The Wild hunt', '56.99', 69, 'The lattest game in the Witcher game series', 'https://www.soundtrack.net/img/album/30588.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `profile_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zipcode` varchar(6) NOT NULL,
  `state` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`profile_id`, `user_id`, `fullname`, `address`, `city`, `zipcode`, `state`, `image`) VALUES
(4, 4, 'Ahmad', '10113 avenue de cobourg', 'Montreal', 'H1H4W7', 'QC', '63810a00793f2.jpg'),
(5, 5, 'Saqib', 'mangler', 'nigmar', 'y123wa', 'manglerland', '638112afb7023.jpg'),
(6, 6, 'Konstantinos Nikopoulos', 'y11tr66', 'Montreal', 'H7W 2A', 'Quebec', '6383f7ec0d19e.png'),
(7, 7, 'darkOne993', 'tiger', 'Laval', 'H8T 4B', 'Quebec', '6384143fe9e1d.jpg'),
(8, 8, 'abdul', '10113 avenue de cobourg', 'Montreal', 'H1H4W7', 'QC', '63844685715cf.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password_hash` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `password_hash`) VALUES
(4, 'admin@email.com', '$2y$10$EwmeAmMLnIQCHr.5LdfE.e9t4WKdJ5KfCL41IohuJe8MYACGwZ3Ke'),
(5, 'saqib@email.com', '$2y$10$B2ikISf37xJK57FqBHGCLetMaSUlV5yI2W5XyodQM2fKSSyLAv3Ei'),
(6, '2003knikop@gmail.com', '$2y$10$vwJdsIXtaGg4YOCc/wjiF.rQr.V5PBqwSsFbKJDBA4F2G39Dxcvki'),
(7, 'darthkn@gmail.com', '$2y$10$qN9acKWnFFXk2P4.kzwmI.5M6iUczW1n3MzwEPG9sBrTtAwiqyiha'),
(8, 'saqib@hotmail.com', '$2y$10$gCV20OIDKwcJWyEPzra8ieebe7F1q5rpa4SAXh4qCijn8uxnnGl6W');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlist_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wishlist_id`, `product_id`, `profile_id`) VALUES
(11, 2, 4),
(12, 6, 5),
(13, 1, 6),
(14, 2, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `cart_to_profile` (`profile_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profile_id`),
  ADD KEY `profile_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlist_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `wishlist_to_profile` (`profile_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishlist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_to_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `user_to_profile` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_to_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `wishlist_to_profile` FOREIGN KEY (`profile_id`) REFERENCES `profile` (`profile_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
