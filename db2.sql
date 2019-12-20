-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 20, 2019 lúc 05:49 AM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `email` varchar(225) DEFAULT NULL,
  `name` varchar(225) NOT NULL,
  `id_role` int(11) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `email`, `name`, `id_role`, `avatar`) VALUES
(1, 'id1399', '123456', 'quyetnvph06340@fpt.edu.vn', 'Quyết nguyễnn', 1, 'uploads/5dee387be25f2-kit1.jpg'),
(3, 'quyetnvph', 'TitRach2', 'quyetnvph06340@fpt.edu.vn', 'Quyết nguyễn', 2, 'uploads/5dee387be25f2-kit1.jpg'),
(4, 'viettu', '123123', 'tupvph00000@fpt.edu.vn', 'Phan Viết Tú', 3, 'uploads/5dee387be25f2-kit1.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `datetime` varchar(255) NOT NULL,
  `cost` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `bill_detail`
--

INSERT INTO `bill_detail` (`id`, `id_order`, `id_product`, `name`, `datetime`, `cost`, `quantity`, `total`) VALUES
(23, 41, 19, 'Tet Gifts #1', '2019-12-19T17:24:15+0100', 161, 2, 322),
(24, 41, 13, 'Tiger Beer (Lon)', '2019-12-19T17:24:15+0100', 77, 1, 77);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_order`
--

CREATE TABLE `bill_order` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(225) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `total` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `bill_order`
--

INSERT INTO `bill_order` (`id`, `id_user`, `name`, `email`, `phone`, `note`, `total`, `status`) VALUES
(41, 1, 'Quyết nguyễnn', 'quyetnvph06340@fpt.edu.vn', '', '', 399, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `show_menu` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `show_menu`) VALUES
(14, 'Tet Gifts', NULL, 1),
(16, 'Beer', NULL, 1),
(17, 'Pie - Candy', NULL, 1),
(18, 'Soft drink', NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `id_user`, `id_product`, `content`) VALUES
(18, 1, 13, 'Tôi đã mua sản phẩm này'),
(19, 1, 13, 'Bia rất ngonn'),
(20, 1, 19, 'Tôi đã mua sản phẩm này 2 lần rồi'),
(21, 1, 18, 'Đây là món không thể thiếu trong ngày tết '),
(22, 1, 22, 'Đây là thứ không thể thiếu cho những bữa ăn nhiều chất béo '),
(23, 4, 19, 'Tôi cũng vậy, mua để làm quà tặng'),
(24, 4, 13, 'Tôi cũng thích vị bia này lắm bạn ạ'),
(25, 4, 18, 'Đúng vậy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `price` varchar(225) DEFAULT NULL,
  `sale_price` varchar(225) NOT NULL,
  `image` varchar(225) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `source` text NOT NULL,
  `view` int(11) NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `sale_price`, `image`, `description`, `source`, `view`, `id_category`) VALUES
(13, 'Tiger Beer (Lon)', NULL, '77', 'bia-tiger-lon.jpg', 'Nước uống giải khát , tiệc vui vẻ hơn với Bia tiger', 'VIETNAM', 16, 16),
(14, 'Ha Noi Beer (lon)', NULL, '77', 'bia-hanoi.jfif', 'Bia Hà Nội , bia của những khát khao . Trúng ngay 1 chiếc ô tô nếu trúng thưởng nắp lon bia Hà nội', 'VIETNAM', 6, 16),
(15, 'Heineken Beer (lon)', NULL, '76', 'bia-heineken-lon.jfif', 'Khẳng định đẳng cấp với bia Heineken', 'VIETNAM', 6, 16),
(16, 'Sai Gon Beer (lon)', '', '80', 'sai-gon-bear.webp', 'Nước uống giải khát bia Sài Gòn', 'VIETNAM', 6, 16),
(17, 'Cosy Pie', NULL, '20', 'banh-cosy.jpg', 'Mang lại hương vị ngày tết', 'VIETNAM', 18, 17),
(18, 'ChoCo - Pie', NULL, '23', 'chocopie.jfif', 'Đón xuân cùng ChoCo - Pie', 'VIETNAM', 11, 17),
(19, 'Tet Gifts #1', '240', '161', 'ruou-tet.jpg', 'Combo quà tặng tết', 'VIETNAM', 39, 14),
(20, 'Tet Gifts #2', '200', '140', 'sung-tuc.jpg', 'Combo quà tặng tết ', 'VIETNAM', 33, 14),
(21, 'Tet Gifts #3', '189', '119', 'qua-tet.jpeg', 'Combo quà tặng tết', 'VIETNAM', 36, 14),
(22, 'CoCaCoLa (lon)', NULL, '59', 'cocacola-lon.jpg', 'Nước uống giải khát - CoCaCoLa ', 'VIETNAM', 8, 18),
(40, 'Tet Gifts #4', '240', '168', 'girf-4.jfif', 'Combo gói quà tặng tết', 'VIETNAM', 0, 14),
(41, 'Tet Gifts #5', '200', '140', 'gif5.jfif', 'Combo gói quà tặng tết', 'VIETNAM', 0, 14),
(42, 'Tet Gifts #6', '169', '118', 'gif6.jpg', 'Combo gói quà tặng tết', 'VIETNAM', 0, 14),
(43, 'Sting-Red', NULL, '230', 'sting-red.jpg', 'Nước uống giải khát - Sting diện mạo mới', 'VIETNAM', 0, 18),
(44, 'Sting-Yellow', '230', '200', 'sting-yel.jpg', 'Nước uống giải khát - Sting diện mạo mới', 'VIETNAM', 0, 18),
(45, 'Pepsi', '', '180', 'pep-si.jfif', 'Nước uống giải khát', 'VIETNAM', 0, 18),
(46, 'Corn Candy', NULL, '23', 'keo-ngo.jfif', 'Kẹo bắp thơm ngon ', 'VIETNAM', 0, 17),
(47, 'Red Bull', '300', '280', 'red-bull.jfif', 'Nước tăng lực bò húc ', 'VIETNAM', 0, 18),
(48, 'Mứt Tet', NULL, '30', 'mut-tet.jpg', 'Mứt cho những ngày tết', 'VIETNAM', 0, 17);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'boss'),
(2, 'thanhvien'),
(3, 'quantri');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `id_index` int(11) NOT NULL,
  `id_contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting_contact`
--

CREATE TABLE `setting_contact` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `content` text NOT NULL,
  `address` varchar(225) NOT NULL,
  `telephone` varchar(225) NOT NULL,
  `mail` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `setting_contact`
--

INSERT INTO `setting_contact` (`id`, `title`, `content`, `address`, `telephone`, `mail`) VALUES
(1, 'How to contact us', 'Mauris viverra cursus ante laoreet eleifend. Donec vel fringilla ante. Aenean finibus velit id urna vehicula, nec maximus est sollicitudin.', 'FPT Polytechnic  , Hà Nội', '+84 857347088', 'quyetnvph06340@fpt.edu.vn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting_index`
--

CREATE TABLE `setting_index` (
  `id` int(11) NOT NULL,
  `logo` varchar(225) DEFAULT NULL,
  `banner` varchar(225) DEFAULT NULL,
  `title_small` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `setting_index`
--

INSERT INTO `setting_index` (`id`, `logo`, `banner`, `title_small`, `title`) VALUES
(1, 'logo-th.png', 'banner-2.jpg', ' GROCERY', 'Sell Everything');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `status`
--

INSERT INTO `status` (`id`, `name`) VALUES
(1, 'Chưa thanh toán'),
(2, 'Đã thanh toán');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_role` (`id_role`);

--
-- Chỉ mục cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `bill_detail_ibfk_1` (`id_order`);

--
-- Chỉ mục cho bảng `bill_order`
--
ALTER TABLE `bill_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `status` (`status`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_product` (`id_product`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_ibfk_1` (`id_category`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_index` (`id_index`),
  ADD KEY `id_contact` (`id_contact`);

--
-- Chỉ mục cho bảng `setting_contact`
--
ALTER TABLE `setting_contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `setting_index`
--
ALTER TABLE `setting_index`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `bill_order`
--
ALTER TABLE `bill_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `setting_contact`
--
ALTER TABLE `setting_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `setting_index`
--
ALTER TABLE `setting_index`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `accounts_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id`);

--
-- Các ràng buộc cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD CONSTRAINT `bill_detail_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `bill_order` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bill_detail_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `bill_order`
--
ALTER TABLE `bill_order`
  ADD CONSTRAINT `bill_order_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `accounts` (`id`),
  ADD CONSTRAINT `bill_order_ibfk_2` FOREIGN KEY (`status`) REFERENCES `status` (`id`);

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `accounts` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `setting`
--
ALTER TABLE `setting`
  ADD CONSTRAINT `setting_ibfk_1` FOREIGN KEY (`id_index`) REFERENCES `setting_index` (`id`),
  ADD CONSTRAINT `setting_ibfk_2` FOREIGN KEY (`id_contact`) REFERENCES `setting_contact` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
