-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2020 at 01:34 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customer_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bonus`
--

CREATE TABLE `tbl_bonus` (
  `user_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `bonus` float NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Lưu thông tin lương thưởng';

--
-- Dumping data for table `tbl_bonus`
--

INSERT INTO `tbl_bonus` (`user_id`, `order_id`, `bonus`, `create_at`) VALUES
(2, 3, 2128500, '2020-10-26 19:05:41'),
(2, 4, 264330, '2020-10-26 19:05:41'),
(3, 4, 616770, '2020-10-26 19:07:14'),
(3, 5, 130410, '2020-10-26 19:07:14'),
(4, 5, 304290, '2020-10-26 19:08:41'),
(4, 6, 1009800, '2020-10-26 19:08:41'),
(4, 7, 706860, '2020-10-26 19:09:33'),
(5, 7, 302940, '2020-10-26 19:09:33');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_care`
--

CREATE TABLE `tbl_care` (
  `user_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Lưu thông tin ai chăm sóc người nào';

--
-- Dumping data for table `tbl_care`
--

INSERT INTO `tbl_care` (`user_id`, `customer_id`, `status`, `create_at`) VALUES
(3, 8, 1, '2020-10-26 18:59:23'),
(1, 149, 1, '2020-11-04 17:15:15'),
(1, 151, 1, '2020-11-09 11:09:23'),
(1, 155, 1, '2020-11-09 11:11:00'),
(1, 154, 1, '2020-11-09 11:15:37'),
(2, 7, 1, '2020-11-09 13:23:46'),
(1, 9, 1, '2020-11-09 13:25:27'),
(3, 156, 1, '2020-11-09 13:32:42'),
(3, 153, 1, '2020-11-09 13:34:09'),
(4, 11, 1, '2020-11-09 17:49:04'),
(3, 152, 1, '2020-11-09 17:55:09'),
(3, 150, 1, '2020-11-09 17:55:53'),
(2, 10, 1, '2020-11-09 18:54:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `showroom_id` int(11) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passw` varchar(50) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Lưu thông tin khách hàng';

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `name`, `showroom_id`, `phone`, `email`, `passw`, `create_at`) VALUES
(7, 'Dương Tuấn Anh', 1, '0339928096', 'bimy96@gmail.com', '123456', '2020-10-26 18:46:16'),
(8, 'Nguyễn Hoàng Anh', 2, '0339928095', 'bimy95@gmail.com', '123456', '2020-10-26 18:46:16'),
(9, 'Trần Nguyệt Ánh', 3, '0339928094', 'bimy94@gmail.com', '123456', '2020-10-26 18:47:49'),
(10, 'Nguyễn Đức Cảnh', 2, '0339928093', 'bimy93@gmail.com', '123456', '2020-10-26 18:47:49'),
(11, 'Lê Thùy Chi', 3, '0339928092', 'bimy92@gmail.com', '123456', '2020-10-26 18:47:49'),
(12, 'Giáp Thành Đạt', 1, '0339928091', 'bimy91@gmail.com', '123456', '2020-10-26 18:48:47'),
(149, 'Nguyễn Đình Nam', 1, '0356489744', 'datgaupedo@gmail.com', '', '2020-11-04 17:15:15'),
(150, 'Nam Hải', 2, '0123456789', 'namluu@gmail.com', '', '2020-11-05 20:56:44'),
(151, 'Huy Hoàng Thụ', 2, '0339921234', 'huyhoang@gmail.com', '', '2020-11-05 21:44:18'),
(152, 'Huy Hoàng', 2, '0123456781', 'hoanghuy@gmail.com', '', '2020-11-06 09:46:44'),
(153, 'Nguyễn Tiến Thành', 2, '0324123456', 'thanhnguyen@gmail.com', '', '2020-11-08 09:20:46'),
(154, 'Nguyễn Bình Minh', 2, '0321233455', 'binhminh@gmail.com', '', '2020-11-08 09:23:52'),
(155, 'Trần Trọng Hiếu', 2, '0456781325', 'hieutran@gmail.com', '', '2020-11-08 09:35:23'),
(156, 'Nguyễn Hoàng Hải', 2, '0364567489', 'nhaisoi91@gmail.com', '', '2020-11-08 11:41:31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail`
--

CREATE TABLE `tbl_detail` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Lưu thông tin nội dung chăm sóc khách hàng';

--
-- Dumping data for table `tbl_detail`
--

INSERT INTO `tbl_detail` (`id`, `user_id`, `customer_id`, `content`, `create_at`) VALUES
(6, 2, 7, 'abc', '2020-10-26 19:03:00'),
(7, 3, 8, 'abcd', '2020-10-26 19:03:00'),
(8, 4, 9, 'ab', '2020-10-26 19:03:00'),
(9, 4, 10, 'abcd', '2020-10-26 19:03:00'),
(10, 4, 11, 'abcde', '2020-10-26 19:03:00'),
(11, 2, 7, 'defg', '2020-11-04 19:32:33');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_order`
--

CREATE TABLE `tbl_detail_order` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `quantity` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Lưu thông tin chi tiết đơn hàng';

--
-- Dumping data for table `tbl_detail_order`
--

INSERT INTO `tbl_detail_order` (`order_id`, `product_id`, `price`, `quantity`) VALUES
(3, 1, 24948000, 1),
(3, 2, 17622000, 1),
(4, 2, 17622000, 1),
(5, 3, 8694000, 1),
(6, 4, 20196000, 1),
(7, 4, 20196000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_history`
--

CREATE TABLE `tbl_history` (
  `id` int(11) NOT NULL,
  `user_id_move` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `user_id_get` int(11) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Lưu thông tin lịch sử điều chuyển';

--
-- Dumping data for table `tbl_history`
--

INSERT INTO `tbl_history` (`id`, `user_id_move`, `customer_id`, `user_id_get`, `create_at`) VALUES
(2, 3, 7, 2, '2020-11-06 10:01:03'),
(3, 4, 156, 2, '2020-11-09 11:06:58'),
(4, 1, 151, 2, '2020-11-09 11:09:23'),
(5, 2, 155, 1, '2020-11-09 11:11:00'),
(6, 2, 154, 1, '2020-11-09 11:15:37'),
(7, 2, 153, 4, '2020-11-09 11:23:08'),
(8, 2, 152, 3, '2020-11-09 11:59:44'),
(9, 3, 152, 2, '2020-11-09 12:04:59'),
(10, 2, 152, 4, '2020-11-09 13:19:15'),
(11, 2, 150, 4, '2020-11-09 13:21:56'),
(12, 2, 7, 4, '2020-11-09 13:22:43'),
(13, 4, 7, 2, '2020-11-09 13:23:46'),
(14, 4, 150, 2, '2020-11-09 13:24:07'),
(15, 4, 152, 2, '2020-11-09 13:24:40'),
(16, 4, 9, 1, '2020-11-09 13:25:27'),
(17, 4, 11, 1, '2020-11-09 13:26:19'),
(18, 4, 10, 1, '2020-11-09 13:26:37'),
(19, 4, 153, 2, '2020-11-09 13:31:44'),
(20, 4, 156, 3, '2020-11-09 13:32:42'),
(21, 2, 153, 3, '2020-11-09 13:34:09'),
(22, 1, 11, 4, '2020-11-09 13:40:25'),
(23, 4, 11, 2, '2020-11-09 13:41:09'),
(24, 2, 11, 1, '2020-11-09 13:41:34'),
(25, 1, 11, 2, '2020-11-09 13:41:53'),
(26, 2, 11, 4, '2020-11-09 17:49:04'),
(27, 2, 152, 3, '2020-11-09 17:55:09'),
(28, 2, 150, 3, '2020-11-09 17:55:53'),
(29, 1, 10, 2, '2020-11-09 18:54:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `user_id_buy` int(11) NOT NULL,
  `user_id_care` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `total` float NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Lưu thông tin hóa đơn';

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `user_id_buy`, `user_id_care`, `customer_id`, `total`, `create_at`) VALUES
(3, 2, 2, 7, 42570000, '2020-10-26 18:50:17'),
(4, 2, 3, 8, 17622000, '2020-10-26 18:50:17'),
(5, 3, 4, 9, 8694000, '2020-10-26 18:50:17'),
(6, 4, 4, 10, 20196000, '2020-10-26 18:50:17'),
(7, 5, 4, 11, 20196000, '2020-10-26 18:50:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Lưu thông tin sản phẩm';

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `price`, `description`, `create_at`) VALUES
(1, 'Đồng hồ Citizen AV0077-82E', 24948000, 'Đồng hồ Citizen đẹp.', '2020-10-19 13:02:05'),
(2, 'Đồng hồ Gucci YA126401', 17622000, 'YA126401 Được thiết kế theo phong cách hiện đại, dành cho những người cá tính thuộc dòng Gucci G-Timeless.', '2020-10-19 13:02:05'),
(3, 'Đồng hồ Edox 27017 3P NIN', 8694000, '27017 3P NIN Là chiếc đồng hồ được thiết kế theo hơi hướng cổ điển cùng những đường nét đơn giản của dòng sản phẩm Edox Les Fontaines.', '2020-10-19 13:03:51'),
(4, 'ĐỒNG HỒ LONGINES L4.790.2.32.2', 20196000, 'Đồng hồ Longines L4.790.2.32.2 thuộc dòng sản phẩm Elegane của hãng đồng hồ Thụy Sĩ Longines.', '2020-10-19 13:03:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_showroom`
--

CREATE TABLE `tbl_showroom` (
  `showroom_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `addres` varchar(100) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Lưu thông tin các showroom';

--
-- Dumping data for table `tbl_showroom`
--

INSERT INTO `tbl_showroom` (`showroom_id`, `title`, `addres`, `create_at`) VALUES
(1, 'Showroom 1', 'Số 1 Hoàng Đạo Thúy, Quận Thanh Xuân', '2020-10-19 12:38:38'),
(2, 'Showroom 2', 'Đường Hồ Tùng Mậu, Phường Mai Dịch, Quận Cầu Giấy', '2020-10-19 12:38:38'),
(3, 'Showroom 3', 'Số 51, Đường Lê Đại Hành, Phường Lê Đại Hành, Quận Hai Bà Trưng', '2020-10-19 12:38:56');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `showroom_id` int(11) NOT NULL,
  `avatar` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passw` varchar(50) NOT NULL,
  `addres` varchar(100) NOT NULL,
  `salary` float NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 2,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Lưu thông tin user';

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `showroom_id`, `avatar`, `email`, `passw`, `addres`, `salary`, `role`, `status`, `create_at`) VALUES
(1, 'Nguyễn Đình Đạt', 1, 'dat.png', 'bimy97@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Khương Trung, Thanh Xuân', 10000000, 1, 1, '2020-10-19 12:56:49'),
(2, 'Nguyễn Đình Hoàng', 2, 'hoang.png', 'hoangboo97@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Đền Lừ, Hoàng Moi', 4000000, 2, 1, '2020-10-19 12:59:36'),
(3, 'Lưu Hải Nam', 3, 'nam.png', 'namluu.it@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Lê Trọng Tấn, Hà Đông', 4000000, 2, 1, '2020-10-19 12:59:36'),
(4, 'Trần Hữu Khánh', 1, 'default.png', 'bimy80@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Xiển, Thanh Xuân', 4000000, 2, 1, '2020-10-20 10:19:12'),
(5, 'Hoàng Nam Phong', 2, 'default.png', 'phonghoang.it@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Lê Đại Hành, Hoàn Kiếm', 4000000, 2, 1, '2020-10-20 10:19:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bonus`
--
ALTER TABLE `tbl_bonus`
  ADD KEY `fk_userID_bonus_user` (`user_id`),
  ADD KEY `fk_orderID_bonus_user` (`order_id`);

--
-- Indexes for table `tbl_care`
--
ALTER TABLE `tbl_care`
  ADD KEY `fk_userID_care_user` (`user_id`),
  ADD KEY `fk_customerID_care_customer` (`customer_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_showroomID_customer_showroom` (`showroom_id`);

--
-- Indexes for table `tbl_detail`
--
ALTER TABLE `tbl_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_userID_detail_user` (`user_id`),
  ADD KEY `fk_customerID_detail_customer` (`customer_id`);

--
-- Indexes for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  ADD KEY `fk_orderID_detailord_order` (`order_id`),
  ADD KEY `fk_productID_detailord_product` (`product_id`);

--
-- Indexes for table `tbl_history`
--
ALTER TABLE `tbl_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_userIDget_history_user` (`user_id_get`),
  ADD KEY `fk_userIDmove_history_user` (`user_id_move`),
  ADD KEY `fk_customerID_history_customer` (`customer_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_userIDbuy_order_user` (`user_id_buy`),
  ADD KEY `fk_userIDcare_order_user` (`user_id_care`),
  ADD KEY `fk_customerID_order_customer` (`customer_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_showroom`
--
ALTER TABLE `tbl_showroom`
  ADD PRIMARY KEY (`showroom_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_showroomID_user_showroom` (`showroom_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `tbl_detail`
--
ALTER TABLE `tbl_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_history`
--
ALTER TABLE `tbl_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_showroom`
--
ALTER TABLE `tbl_showroom`
  MODIFY `showroom_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_bonus`
--
ALTER TABLE `tbl_bonus`
  ADD CONSTRAINT `fk_orderID_bonus_user` FOREIGN KEY (`order_id`) REFERENCES `tbl_order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_userID_bonus_user` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_care`
--
ALTER TABLE `tbl_care`
  ADD CONSTRAINT `fk_customerID_care_customer` FOREIGN KEY (`customer_id`) REFERENCES `tbl_customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_userID_care_user` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD CONSTRAINT `fk_showroomID_customer_showroom` FOREIGN KEY (`showroom_id`) REFERENCES `tbl_showroom` (`showroom_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_detail`
--
ALTER TABLE `tbl_detail`
  ADD CONSTRAINT `fk_customerID_detail_customer` FOREIGN KEY (`customer_id`) REFERENCES `tbl_customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_userID_detail_user` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  ADD CONSTRAINT `fk_orderID_detailord_order` FOREIGN KEY (`order_id`) REFERENCES `tbl_order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_productID_detailord_product` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_history`
--
ALTER TABLE `tbl_history`
  ADD CONSTRAINT `fk_customerID_history_customer` FOREIGN KEY (`customer_id`) REFERENCES `tbl_customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_userIDget_history_user` FOREIGN KEY (`user_id_get`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_userIDmove_history_user` FOREIGN KEY (`user_id_move`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `fk_customerID_order_customer` FOREIGN KEY (`customer_id`) REFERENCES `tbl_customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_userIDbuy_order_user` FOREIGN KEY (`user_id_buy`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_userIDcare_order_user` FOREIGN KEY (`user_id_care`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `fk_showroomID_user_showroom` FOREIGN KEY (`showroom_id`) REFERENCES `tbl_showroom` (`showroom_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
