-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 07, 2022 lúc 03:52 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `du_an1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`, `role`, `email`, `mobile`, `status`) VALUES
(1, 'PREETI', '123', 0, 'preetipradhan097@gmail.com', '12345678910', 1),
(10, 'trungngu', '123', 0, 'trungnhpd06104@fpt.edu.vn', '0903598089', 1),
(11, 'trungnguvkl', '123', 1, 'huutrung096@gmail.com', '0903598089', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idproduct` int(11) NOT NULL,
  `comment` varchar(225) NOT NULL,
  `datecmt` date NOT NULL,
  `nameuser` varchar(225) NOT NULL,
  `namepro` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(75) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `comment` text NOT NULL,
  `added_on` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `mobile`, `comment`, `added_on`, `status`) VALUES
(1, 'PREETI', 'preeti030mca20@igdtuw.ac.in', '123456789', ' I would love if you reached out to me. Even if it is just to say \"Hey!\". Don\'t hesitate! Drop me a message and I\'ll get back to you AS SOON AS POSSIBLE!', '2020-12-16 21:53:39', 1),
(2, 'HIMANSHI', 'himanshi010mca20@igdtuw.ac.in', '987654321', 'Drop me a message and I\'ll get back to you AS SOON AS POSSIBLE!', '2020-12-02 21:55:35', 1),
(3, 'ADITI MOHANTY', 'aditi078mca20@igdtuw.ac.in', '123456789', 'DM ME YOUR QUERY !!', '2020-11-11 21:57:15', 1),
(4, 'SHIVANGI PANDEY', 'shivangi050mca20@igdtuw.ac.in', '987654321', 'I WOULD LOVE TO HELP YOU OUT !!', '2020-12-09 21:58:47', 1),
(5, 'MEGHA RAGHAV', 'megha023mca20@igdtuw.ac.in', '123456789', 'ANY QUERY DM ME !!', '2020-11-11 22:01:40', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coupon_master`
--

CREATE TABLE `coupon_master` (
  `id` int(11) NOT NULL,
  `coupon_code` varchar(50) NOT NULL,
  `coupon_value` int(11) NOT NULL,
  `coupon_type` varchar(10) NOT NULL,
  `cart_min_value` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `coupon_master`
--

INSERT INTO `coupon_master` (`id`, `coupon_code`, `coupon_value`, `coupon_type`, `cart_min_value`, `status`) VALUES
(7, 'FOODGRAINS , OILS AND GHEE', 60, 'Percentage', 567, 0),
(8, 'FLOUR and GRAINS', 25, 'Percentage', 125, 0),
(9, 'PACKAGED FOODS', 30, 'Rupee', 500, 0),
(10, 'FIRST 50', 20, 'Rupee', 1000, 0),
(11, 'SPECIAL OFFER', 50, 'Rupee', 2000, 0),
(12, '1', 1, 'Percentage', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `address` varchar(225) NOT NULL,
  `datepay` date NOT NULL,
  `paystatus` varchar(50) NOT NULL COMMENT 'trạng thái thanh toán',
  `orderstatus` varchar(50) NOT NULL COMMENT 'trạng thái đơn hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `username`, `productname`, `quantity`, `price`, `phonenumber`, `address`, `datepay`, `paystatus`, `orderstatus`) VALUES
(1, 'huu trung', '1', 1, 10222, '0903598089', '137 Nguyen Thi Thap', '2022-11-09', '1', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `productname` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `description` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `categories` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `productname`, `price`, `quantity`, `title`, `description`, `image`, `categories`) VALUES
(1, '1', 1, 1, '1', '1', '1.webp', '1'),
(2, '1', 1, 1, '1', '2', '2.webp', '1.webp'),
(3, '1.webp', 1, 1, '1.webp', '1.webp', '3.webp', '1.webp'),
(4, '1.webp', 1, 1, '1', '1', '4.webp', '1.webp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(11) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `subcategories`
--

INSERT INTO `subcategories` (`id`, `categories`, `status`) VALUES
(14, 'MAN', 1),
(16, 'KID', 1),
(21, 'WOMAN', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_member`
--

CREATE TABLE `tbl_member` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `creat_at` datetime NOT NULL,
  `address` varchar(225) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tbl_member`
--

INSERT INTO `tbl_member` (`id`, `username`, `password`, `email`, `creat_at`, `address`, `status`) VALUES
(1, 'huu trung', '123', 'trungnhpd0610@gmail.com', '2022-11-23 18:01:48', '137 Nguy?n Th? Th?p', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `coupon_master`
--
ALTER TABLE `coupon_master`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `coupon_master`
--
ALTER TABLE `coupon_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT cho bảng `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
