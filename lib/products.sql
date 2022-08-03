-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 20, 2022 at 04:55 AM
-- Server version: 5.6.51-cll-lve
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aduvall_backend_class`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'Vase', '10.00', 'vase', '2022-07-20 05:25:28', '2022-07-20 05:25:37', 'Dark vase for living room.', 'vase1_thumb.png', 'vase1.png, vase1b.png, vase1c.png'),
(2, 'frame', '11.00', 'frame', '2022-07-20 05:27:50', '2022-07-20 05:27:54', 'Rose gold frame.', 'frame1_thumb.png', 'frame1.png, frame1b.png, frame1c.png'),
(3, 'vase2', '11.00', 'vase', '2022-07-20 05:40:58', '2022-07-20 05:40:58', 'This is a tall vase 2.', 'vase2_thumb.png', 'vase2.png, vase2b.png, vase2c.png'),
(4, 'vase3', '11.00', 'vase', '2022-07-20 05:40:58', '2022-07-20 05:40:58', 'This is a tall vase 3.', 'vase3_thumb.png', 'vase3.png, vase3b.png, vase3c.png'),
(5, 'vase4', '11.00', 'vase', '2022-07-20 05:40:58', '2022-07-20 05:40:58', 'This is a tall vase 4.', 'vase4_thumb.png', 'vase4.png, vase4b.png, vase4c.png'),
(6, 'vase5', '11.00', 'vase', '2022-07-20 05:40:58', '2022-07-20 05:40:58', 'This is a tall vase 5.', 'vase5_thumb.png', 'vase5.png, vase5b.png, vase5c.png'),
(7, 'vase6', '11.00', 'vase', '2022-07-20 05:40:58', '2022-07-20 05:40:58', 'This is a tall vase 6.', 'vase6_thumb.png', 'vase6.png, vase6b.png, vase6c.png'),
(8, 'frame2', '11.00', 'frame', '2022-07-20 05:27:50', '2022-07-20 05:27:54', 'Rose gold frame 2.', 'frame2_thumb.png', 'frame2.png, frame2b.png, frame2c.png'),
(9, 'frame3', '11.00', 'frame', '2022-07-20 05:27:50', '2022-07-20 05:27:54', 'Rose gold frame 3.', 'frame3_thumb.png', 'frame3.png, frame3b.png, frame3c.png'),
(10, 'frame4', '11.00', 'frame', '2022-07-20 05:27:50', '2022-07-20 05:27:54', 'Rose gold frame 4.', 'frame4_thumb.png', 'frame4.png, frame4b.png, frame4c.png'),
(11, 'frame5', '11.00', 'frame', '2022-07-20 05:27:50', '2022-07-20 05:27:54', 'Rose gold frame 5.', 'frame5_thumb.png', 'frame5.png, frame5b.png, frame5c.png'),
(12, 'frame6', '11.00', 'frame', '2022-07-20 05:27:50', '2022-07-20 05:27:54', 'Rose gold frame 6.', 'frame6_thumb.png', 'frame6.png, frame6b.png, frame6c.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
