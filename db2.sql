-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 10, 2019 lúc 04:36 PM
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
(4, 'viettu', '123123', 'quyetnvph06340@fpt.edu.vn', 'Quyết nguyễn', 3, 'uploads/5dee387be25f2-kit1.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `show_menu` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `show_menu`) VALUES
(1, 'Fast food', 1),
(2, 'Kitchen utensils', 1),
(4, 'Drink', 1),
(7, 'Car', 1),
(8, 'Car abc', 0);

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
(5, 1, 1, 'Oishiiii'),
(6, 3, 1, 'Bim bim này ăn cay vãi chưởng'),
(7, 4, 1, ':v T thích ăn bim bim này nhất');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `price` varchar(225) DEFAULT NULL,
  `sale_price` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `description` text NOT NULL,
  `source` text NOT NULL,
  `view` int(11) NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `sale_price`, `image`, `description`, `source`, `view`, `id_category`) VALUES
(1, 'Snack tom', '100', '99', 'snack.jpg', 'Snack tommm cayyy', 'Vietnamese', 0, 1),
(3, 'Xooong noi', '500', '399', 'kit2.jpg', 'Xoong noi', 'Japanese', 0, 2),
(6, 'Bi do', NULL, '44', 'snack2.jpg', 'Bi do thom ngon', 'Vietnamese', 0, 1),
(7, 'Bi do', NULL, '77', 'snack1.jpg', 'fdsfsdfsdf', 'Vietnamese', 0, 1),
(8, 'Bi do', NULL, '77', 'snack.jpg', 'Bi do thom ngon', 'Vietnamese', 0, 1),
(9, 'Bắp', NULL, '77', 'snack1.jpg', 'Bắp', 'Vietnamese', 0, 1),
(10, 'Cocacola', NULL, '45', 'coca.jpg', 'Nước uống giải khát', 'Vietnamese', 0, 4),
(11, 'Pepsi', NULL, '45', 'can-pepsi.png', 'Nước uống giải khát', 'Vietnamese', 0, 4);

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
(1, 'How to Find Us', 'Mauris viverra cursus ante laoreet eleifend. Donec vel fringilla ante. Aenean finibus velit id urna vehicula, nec maximus est sollicitudin.', ' 10 Suffolk st Soho, London, UK', '+12 34 567 8901', 'contact@essence.com');

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
(1, 'logo.png', 'banner.jpg', 'asoss', 'New Collection');

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
  ADD KEY `id_category` (`id_category`);

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
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `accounts_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id`);

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
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`);

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
