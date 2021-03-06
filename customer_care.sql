-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 04:24 PM
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
(2, 1, 3563000, '2020-11-26 10:22:46'),
(2, 2, 2043000, '2020-11-26 11:43:30'),
(2, 3, 2519000, '2020-11-26 11:43:42'),
(2, 4, 7308000, '2020-11-26 12:09:07'),
(1, 5, 5678000, '2020-11-26 12:10:26'),
(2, 26, 9029000, '2020-11-27 10:29:32'),
(1, 27, 1014000, '2020-11-27 10:52:20'),
(2, 27, 507000, '2020-11-27 10:52:20'),
(2, 28, 999000, '2020-11-27 11:50:51'),
(2, 29, 1212000, '2020-11-27 11:51:10'),
(2, 30, 522000, '2020-11-27 11:53:40'),
(1, 31, 999000, '2020-11-27 17:32:35');

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
(2, 7, 3, '2020-11-09 13:23:46'),
(1, 10, 2, '2020-11-09 18:54:13'),
(1, 11, 2, '2020-11-13 19:37:50'),
(4, 151, 1, '2020-11-13 20:01:11'),
(2, 156, 3, '2020-11-24 11:33:35'),
(2, 152, 3, '2020-11-24 11:34:17'),
(3, 8, 1, '2020-11-24 19:26:42'),
(3, 150, 1, '2020-11-24 19:26:43'),
(2, 174, 3, '2020-11-26 11:44:31'),
(2, 153, 3, '2020-11-26 11:44:31'),
(2, 155, 1, '2020-11-26 11:44:32'),
(1, 176, 1, '2020-11-27 20:11:15');

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
  `sex` varchar(5) NOT NULL,
  `birth` date NOT NULL DEFAULT '1970-01-01',
  `passw` varchar(50) NOT NULL DEFAULT 'e10adc3949ba59abbe56e057f20f883e',
  `avatar` varchar(50) NOT NULL DEFAULT 'guest.jpg',
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Lưu thông tin khách hàng';

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `name`, `showroom_id`, `phone`, `email`, `sex`, `birth`, `passw`, `avatar`, `create_at`) VALUES
(7, 'Dương Tuấn Anh', 1, '0339928096', 'bimy96@gmail.com', 'Nam', '1970-01-01', '005f47cddf568dacb8d03e20ba682cf9', '1606839705dat.jpg', '2020-10-26 18:46:16'),
(8, 'Nguyễn Hoàng Anh', 2, '0339928095', 'bimy95@gmail.com', 'Nam', '1970-01-01', 'e10adc3949ba59abbe56e057f20f883e', 'guest.jpg', '2020-10-26 18:46:16'),
(10, 'Nguyễn Đức Cảnh', 2, '0339928093', 'bimy93@gmail.com', 'Nam', '1970-01-01', 'e10adc3949ba59abbe56e057f20f883e', 'guest.jpg', '2020-10-26 18:47:49'),
(11, 'Lê Thùy Chi', 3, '0339928092', 'bimy92@gmail.com', 'Nữ', '1970-01-01', 'e10adc3949ba59abbe56e057f20f883e', 'guest.jpg', '2020-10-26 18:47:49'),
(12, 'Giáp Thành Đạt', 1, '0339928091', 'bimy91@gmail.com', 'Nam', '1970-01-01', 'e10adc3949ba59abbe56e057f20f883e', 'guest.jpg', '2020-10-26 18:48:47'),
(150, 'Nam Hải', 2, '0123456789', 'namluu@gmail.com', 'Nam', '1970-01-01', '', 'guest.jpg', '2020-11-05 20:56:44'),
(151, 'Huy Hoàng Thụ', 2, '0339921234', 'huyhoang@gmail.com', 'Nam', '1970-01-01', '', 'guest.jpg', '2020-11-05 21:44:18'),
(152, 'Huy Hoàng', 2, '0123456781', 'hoanghuy@gmail.com', 'Nam', '1970-01-01', '', 'guest.jpg', '2020-11-06 09:46:44'),
(153, 'Nguyễn Tiến Thành', 2, '0324123456', 'tkodhunter@gmail.com', 'Nam', '1970-01-01', '', 'guest.jpg', '2020-11-08 09:20:46'),
(154, 'Nguyễn Bình Minh', 2, '0321233455', 'binhminh@gmail.com', 'Nam', '1970-01-01', '', 'guest.jpg', '2020-11-08 09:23:52'),
(155, 'Trần Trọng Hiếu', 2, '0456781325', 'tkodhunter1@gmail.com', 'Nam', '1970-01-01', '', 'guest.jpg', '2020-11-08 09:35:23'),
(156, 'Nguyễn Hoàng Hải', 2, '0364567489', 'nhaisoi91@gmail.com', 'Nam', '1970-01-01', '', 'guest.jpg', '2020-11-08 11:41:31'),
(174, 'A Thành', 2, '0339924321', 'tkodhunter2@gmail.com', 'Nam', '1970-01-01', 'e10adc3949ba59abbe56e057f20f883e', '1606922443dat.jpg', '2020-11-25 19:56:03'),
(176, 'A Minh', 1, '0364567487', 'minhnguyen92@gmail.com', '', '1970-01-01', '', 'guest.jpg', '2020-11-27 20:11:15');

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
(107, 1, 155, '<p>bc</p>\n', '2020-11-13 20:03:03'),
(109, 1, 155, '<p>abc</p>\n', '2020-11-23 18:44:58'),
(110, 1, 155, '<p>dfg</p>\n', '2020-11-23 18:46:06'),
(111, 1, 155, '<p>alo</p>\n', '2020-11-23 18:47:28'),
(112, 2, 155, '<p>dfc</p>\n', '2020-11-23 19:09:15'),
(114, 1, 156, '<p>abc</p>\n', '2020-11-24 19:16:58'),
(115, 2, 150, '<p>alo</p>\n', '2020-11-24 19:25:50'),
(116, 1, 155, '<p>&aacute;df</p>\n', '2020-11-25 19:50:10'),
(117, 1, 10, '<p>abc</p>\n', '2020-11-26 19:29:47'),
(118, 1, 152, '<p>abc</p>\n', '2020-11-27 18:24:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_order`
--

CREATE TABLE `tbl_detail_order` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `sale` int(2) NOT NULL,
  `quantity` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Lưu thông tin chi tiết đơn hàng';

--
-- Dumping data for table `tbl_detail_order`
--

INSERT INTO `tbl_detail_order` (`id`, `order_id`, `product_id`, `price`, `sale`, `quantity`) VALUES
(3, 1, 3, 9666000, 10, 3),
(4, 1, 2, 19580000, 15, 2),
(5, 2, 2, 19580000, 15, 1),
(6, 2, 3, 9666000, 10, 2),
(7, 3, 3, 9666000, 10, 1),
(8, 3, 2, 19580000, 15, 2),
(9, 4, 5, 32538000, 15, 2),
(10, 4, 4, 22440000, 10, 2),
(11, 4, 3, 9666000, 10, 3),
(12, 5, 2, 19580000, 15, 1),
(13, 5, 3, 9666000, 10, 2),
(14, 5, 4, 22440000, 10, 3),
(71, 26, 3, 9666000, 10, 2),
(72, 26, 4, 22440000, 10, 2),
(73, 26, 2, 19580000, 15, 1),
(74, 26, 5, 32538000, 15, 1),
(75, 26, 6, 53775000, 10, 1),
(76, 27, 2, 19580000, 15, 1),
(77, 27, 3, 9666000, 10, 1),
(78, 28, 2, 19580000, 15, 1),
(79, 29, 4, 22440000, 10, 1),
(80, 30, 3, 9666000, 10, 1),
(81, 31, 2, 19580000, 15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `rate` text NOT NULL,
  `feedback` varchar(50) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Lưu thông tin phản hồi của khách hàng';

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`id`, `order_id`, `user_id`, `customer_id`, `rate`, `feedback`, `create_at`) VALUES
(18, 26, 2, 174, '5', 'Chăm sóc khách ân cần, nhiệt tình, chu đáo', '2020-12-02 21:23:11'),
(19, 28, 2, 152, '4.5', 'Tư vấn hợp lý, hiệu quả', '2020-12-02 21:24:14'),
(20, 29, 2, 156, '1.5', 'đánh khách', '2020-12-02 21:24:54'),
(21, 30, 2, 10, '4', 'nhân viên tư vấn tốt', '2020-12-02 21:25:44');

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
(39, 1, 150, 2, '2020-11-13 17:52:26'),
(40, 4, 11, 2, '2020-11-13 19:37:50'),
(41, 1, 151, 4, '2020-11-13 20:01:11'),
(45, 3, 156, 2, '2020-11-24 11:33:35'),
(46, 3, 152, 2, '2020-11-24 11:34:17'),
(47, 3, 8, 2, '2020-11-24 11:34:56'),
(48, 1, 154, 2, '2020-11-24 11:53:58'),
(49, 1, 155, 2, '2020-11-24 12:02:44'),
(50, 3, 153, 2, '2020-11-24 19:23:17'),
(52, 2, 155, 3, '2020-11-24 19:26:40'),
(53, 2, 8, 3, '2020-11-24 19:26:42'),
(54, 2, 150, 3, '2020-11-24 19:26:43'),
(55, 1, 155, 2, '2020-11-25 19:51:21'),
(56, 2, 153, 1, '2020-11-25 19:53:19'),
(57, 1, 174, 2, '2020-11-26 11:44:31'),
(58, 1, 153, 2, '2020-11-26 11:44:31'),
(59, 1, 155, 2, '2020-11-26 11:44:32');

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
(1, 2, 2, 7, 59384200, '2020-11-26 10:22:46'),
(2, 2, 2, 7, 34041800, '2020-11-26 11:43:30'),
(3, 2, 2, 7, 41985400, '2020-11-26 11:43:42'),
(4, 2, 2, 7, 121805000, '2020-11-26 12:09:07'),
(5, 1, 1, 153, 94629800, '2020-11-26 12:10:26'),
(26, 2, 2, 174, 150489000, '2020-11-27 10:29:28'),
(27, 2, 1, 153, 25342400, '2020-11-27 10:52:16'),
(28, 2, 2, 152, 16643000, '2020-11-27 11:50:47'),
(29, 2, 2, 156, 20196000, '2020-11-27 11:51:07'),
(30, 2, 2, 10, 8699400, '2020-11-27 11:53:36'),
(31, 1, 1, 11, 16643000, '2020-11-27 17:32:31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `role` int(5) NOT NULL,
  `origin` varchar(50) NOT NULL,
  `sale` int(2) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Lưu thông tin sản phẩm';

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`, `description`, `status`, `role`, `origin`, `sale`, `create_at`) VALUES
(2, 'Đồng hồ Gucci YA126401', 'gucci_ya126401.jpg', 19580000, 'YA126401 Được thiết kế theo phong cách hiện đại, dành cho những người cá tính thuộc dòng Gucci G-Timeless.', 1, 0, 'Thụy Sĩ', 15, '2020-10-19 13:02:05'),
(3, 'Đồng hồ Edox 27017 3P NIN', 'edox_270173pnin.jpg', 9666000, '27017 3P NIN Là chiếc đồng hồ được thiết kế theo hơi hướng cổ điển cùng những đường nét đơn giản của dòng sản phẩm Edox Les Fontaines.', 1, 0, 'Thụy Sĩ', 10, '2020-10-19 13:03:51'),
(4, 'ĐỒNG HỒ LONGINES L4.790.2.32.2', 'longines_l47902322.webp', 22440000, 'Đồng hồ Longines L4.790.2.32.2 thuộc dòng sản phẩm Elegane của hãng đồng hồ Thụy Sĩ Longines.', 1, 0, 'Thụy Sĩ', 10, '2020-10-19 13:03:51'),
(5, 'ĐỒNG HỒ CITIZEN CC3006-58A\r\n', 'citizen-cc3006-58a.jpg', 32538000, 'CC3006-58A Là chiếc đồng hồ sở hữu tinh hoa của công nghệ và kiểu dáng thuộc bộ sưu tập Citizen Satellite Wave. Bộ sưu tập là những tinh túy hàng đầu với chất liệu và chất lượng tốt nhất đến từ đất nước Nhật Bản. Điều này khiến mỗi sản phẩm đều trở thành một ‘vật báu’ mà ai cũng muốn sử dụng với rất nhiều chức năng tuyệt vời. Đồng thời, thiết kế ấn tượng cũng giúp Citizen Satellite Wave tạo được nguồn cảm hứng vô tận cho người dùng.', 1, 0, 'Nhật Bản', 15, '2020-11-19 11:40:29'),
(6, 'ĐỒNG HỒ CITIZEN EG7000-01A\r\n', 'citizen-eg7000-01a.jpg', 53775000, 'EG7000-01A Sở hữu vẻ đẹp huyền diệu khiến bất kỳ ai cũng phải ngỡ ngàng và thán phục khi chiêm ngưỡng thuộc bộ sưu tập Citizen Ambiluna. Bộ sưu tập thực sự khiến ngường dùng cảm thấy choáng ngợp bởi vẻ đẹp được tạo nên từ những chi tiết tinh tế đến lạ kỳ, kiểu dáng đẹp đến mê lòng và đặc biệt. Cùng với đó, Citizen Ambiluna còn được tran bị công nghệ và những chất liệu tối tân nhất thế giới hiện nay.', 1, 1, 'Nhật Bản', 10, '2020-11-19 11:44:06'),
(7, 'ĐỒNG HỒ CITIZEN EM0659-17E\r\n', 'citizen-em0659-17e.jpg', 21560000, 'ĐỒNG HỒ CITIZEN EM0659-17E đẹp', 1, 1, 'Nhật Bản', 15, '2020-11-19 11:46:39'),
(8, 'ĐỒNG HỒ CITIZEN EE4058-19E\r\n', 'citizen-ee4058-19e.jpg', 16720000, 'ĐỒNG HỒ CITIZEN EE4058-19E đẹp', 1, 1, 'Nhật Bản', 15, '2020-11-19 11:47:57'),
(9, 'ĐỒNG HỒ CITIZEN EW5528-82E\r\n', 'citizen-ew5528-82e-1.jpg', 29260000, 'Đồng hồ Citizen EW5528-82E EW5528-82E Thuộc bộ sưu tập Citizen Eco – Drive L Ladies với những nét dịu dàng, thanh lịch dành riêng cho nữ giới. Bộ sưu tập sở hữu thiết kế nữ tính với từng chi tiết quyến rũ, đầy đẳng cấp. Tuy vậy, sự tài tình của các nghệ nhân giúp chiếc đồng hồ vẫn sở hữu được vẻ lịch lãm, đẳng cấp. Đặc biệt Citizen Eco Gents chỉ chạy bộ máy Eco – Drive không dùng pin, chạy bằng ánh sáng siêu bền bỉ và tiện lợi.', 1, 1, 'Xách tay Nhật', 10, '2020-11-19 11:50:42'),
(10, 'ĐỒNG HỒ CITIZEN EM0386-51N\r\n', 'citizen-em0386-51n.jpg', 21340000, 'EM0386-51N Là chiếc đồng hồ đặc biệt thời trang, phong cách mới mẻ của bộ sưu tập Citizen Eco Ladies. Bộ sưu tập là những sản phẩm sở hữu vẻ ngoài cách điệu dành riêng cho nữ giới cùng thiết kế với những chi tiết hấp dẫn, mềm mại tạo nên tổng hòa thời trang và đẹp ‘huyền diệu’. Cùng với đó, bộ máy đẳng cấp hàng đầu theo công nghệ Nhật Bản giúp Citizen Eco Ladies gây ấn tượng mạnh mẽ đối với mọi người dùng.', 1, 1, 'Xách tay Nhật', 10, '2020-11-19 11:52:21'),
(11, 'ĐỒNG HỒ RAYMOND WEIL 7260-SC5-00208\r\n', 'raymond-weil-7260-sc5-00208.jpg', 125180000, '7260-SC5-00208 Là chiếc đồng hồ đầy mạnh mẽ và mang đầy đủ tinh hoa của thế giới đến từ dòng sản phẩm Raymond Weil Pasifal Chronograph Automatic. Dòng sản phẩm được thiết kế dành riêng cho nam giới với vẻ ngoài đơn giản, cổ điển nhưng đầy sang trọng, đẳng cấp. Không những vậy, Raymond Weil Pasifal Chronograph Automatic còn sở hữu chức năng Chronograph – bấm giờ thể thao cùng bộ máy Automatic chất lượng Thụy Sĩ đầy mạnh mẽ, bền bỉ, chính xác và tiện dụng.', 1, 0, 'Thụy Sĩ', 10, '2020-11-19 11:56:41'),
(12, 'ĐỒNG HỒ CITIZEN AT9035-51A\r\n', 'citizen-at9035-51a.jpg', 22000000, 'Bạn mong đợi gì ở một chiếc đồng hồ? Đầy đủ tất cả những tính năng ưu việt nhất, kiểu dáng ‘chất’ nhất, độ chính xác cao nhất. Tất cả những điều này đều có ở Citizen AT9035-51A.', 1, 0, 'Xách tay Nhật', 15, '2020-11-19 11:59:24'),
(13, 'ĐỒNG HỒ CITIZEN AT8113-12H\r\n', 'citizen-at8113-12h.jpg', 17820000, 'AT8113-12H Là chiếc đồng hồ sở hữu vẻ cổ điển, truyền thống và tinh tế của bộ sưu tập Citizen RC. Đây là bộ sưu tập dành cho nam giới với kiểu dáng mạnh mẽ, từng đường nét đều thể hiện được sự lịch lãm, sang trọng của người dùng. Cùng với đó, bộ máy mạnh mẽ và những tính năng thực sự ưu việt từ những chất liệu hàng đầu thế giới giúp Citizen RC là bộ sưu tập của những chiếc đồng hồ thực sự bền bỉ, chắc chắn.', 1, 0, 'Xách tay Nhật', 10, '2020-11-19 12:04:37'),
(14, 'ĐỒNG HỒ CITIZEN CA4254-53L\r\n', 'citizen-ca4254-53l.jpg', 15750000, 'CA4254-53L Thuộc bộ sưu tập Citizen Eco Gents với những nét khỏe khoắn, mạnh mẽ dành riêng cho nam giới. Bộ sưu tập sở hữu thiết kế nam tính với từng chi tiết, hình khối chắc chắn, cứng cáp. Tuy vậy, sự tài tình của các nghệ nhân giúp chiếc đồng hồ vẫn sở hữu được vẻ lịch lãm, đẳng cấp. Đặc biệt Citizen Eco Gents chỉ chạy bộ máy Eco – Drive không dùng pin, chạy bằng ánh sáng siêu bền bỉ và tiện lợi.', 1, 0, 'Xách tay Nhật', 10, '2020-11-19 12:06:15'),
(15, 'ĐỒNG HỒ MICHEL HERBELIN 1666/15\r\n', 'michel-herbelin-1666-15.jpg', 26730000, '1666/15 Được Michael Herbelin trang bị bộ máy Automatic, không cần dùng pin. Đây là loại máy đồng hồ chạy bằng năng lượng từ dây cót. Sự chuyển động của cổ tay người chính là thứ giúp lên dây cót cho đồng hồ. Máy Automatic được Michael Herbelin sử dụng cho sản phẩm của mình có xuất xứ từ Thụy Sĩ với độ chính xác lên tới từng phần trăm giây và cũng rất bền bỉ. Việc sử dụng bộ máy Automatic giúp khách hàng không bao giờ phải lo ngại về sự chính xác hay việc thay pin cho đồng hồ.', 1, 1, 'Pháp', 10, '2020-11-19 12:09:51'),
(16, 'ĐỒNG HỒ MICHEL HERBELIN 1045/B84\r\n', 'michel-herbelin-1045-b84.jpg', 24030000, 'Michel Herbelin 1045/B84 Là chiếc đồng hồ thuộc dòng sản phẩm Epsilon của thương hiệu Michel Herbelin. Mang trong mình dòng máu thương hiệu Pháp, trái tim bộ máy Thụy Sĩ, Michel Herbelin Epsilon mê hoặc người dùng với độ dày chỉ khoảng 4 mm tuyệt đẹp tạo nên phong cách thời trang rất đặc biệt. Cùng với đó, dòng sản phẩm này còn thực sự nổi bật với những chất liệu tuyệt vời, bộ máy đẳng cấp, tiêu chuẩn chất lượng rất cao và những đường nét thiết kế chau chuốt, tinh tế tạo nên sự sang trọng đặc biệt.', 1, 1, 'Pháp', 10, '2020-11-19 12:10:32'),
(17, 'ĐỒNG HỒ MICHEL HERBELIN 12886/BT35\r\n', 'michel-herbelin-12886-bt35.jpg', 21230000, 'Michel Herbelin 12886/BT35 Sở hữu nét đẹp mạnh mẽ, ấn tượng của dòng sản phẩm Michel Herbelin Newport. Dòng đồng hồ này có sự rắn chắc nhưng không kém phần lịch lãm ở ngay thiết kế tạo nên ấn tượng không thể phai mờ cho những người yêu thể thao. Cùng với đó, bộ máy chất lượng Thụy Sĩ tuyệt vời là điểm nhấn của Michel Herbelin Newport với độ chống nước cao, vỏ thép không gỉ 316L siêu bền chắc tạo nên sự cuốn hút không thể cưỡng lại đối với bất kỳ ai.', 1, 1, 'Pháp', 15, '2020-11-19 12:11:47');

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
-- Table structure for table `tbl_transfer_noti`
--

CREATE TABLE `tbl_transfer_noti` (
  `user_id_move` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `user_id_get` int(11) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `showroom_id` int(11) NOT NULL,
  `avatar` varchar(50) NOT NULL DEFAULT 'default.png',
  `email` varchar(50) NOT NULL,
  `passw` varchar(50) NOT NULL DEFAULT '123456',
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
(2, 'Nguyễn Đình Hoàng', 2, 'hoang.png', 'tkodhunter@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Đường Hồ Tùng Mậu, Phường Mai Dịch, Quận Cầu Giấy', 4000000, 2, 1, '2020-10-19 12:59:36'),
(3, 'Lưu Hải Nam', 3, 'nam.png', 'namluu.it@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Lê Trọng Tấn, Hà Đông', 4000000, 2, 1, '2020-10-19 12:59:36'),
(4, 'Trần Hữu Khánh', 1, 'default.png', 'bimy80@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Xiển, Thanh Xuân', 4000000, 2, 1, '2020-10-20 10:19:12');

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_orderID_detailorder_order` (`order_id`),
  ADD KEY `fk_productID_detailorder_product` (`product_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_userid_feedback_user` (`user_id`),
  ADD KEY `fk_customerid_feedback_customer` (`customer_id`),
  ADD KEY `fk_orderid_feedback_order` (`order_id`);

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
-- Indexes for table `tbl_transfer_noti`
--
ALTER TABLE `tbl_transfer_noti`
  ADD KEY `fk_user_id_move_noti_user` (`user_id_move`),
  ADD KEY `fk_user_id_get_noti_user` (`user_id_get`),
  ADD KEY `fk_customer_id_noti_customer` (`customer_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT for table `tbl_detail`
--
ALTER TABLE `tbl_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_history`
--
ALTER TABLE `tbl_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  ADD CONSTRAINT `fk_orderID_detailorder_order` FOREIGN KEY (`order_id`) REFERENCES `tbl_order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_productID_detailorder_product` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD CONSTRAINT `fk_customerid_feedback_customer` FOREIGN KEY (`customer_id`) REFERENCES `tbl_customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_orderid_feedback_order` FOREIGN KEY (`order_id`) REFERENCES `tbl_order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_userid_feedback_user` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `tbl_transfer_noti`
--
ALTER TABLE `tbl_transfer_noti`
  ADD CONSTRAINT `fk_customer_id_noti_customer` FOREIGN KEY (`customer_id`) REFERENCES `tbl_customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_id_get_noti_user` FOREIGN KEY (`user_id_get`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_id_move_noti_user` FOREIGN KEY (`user_id_move`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `fk_showroomID_user_showroom` FOREIGN KEY (`showroom_id`) REFERENCES `tbl_showroom` (`showroom_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
