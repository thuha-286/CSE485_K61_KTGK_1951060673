-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2021 lúc 09:10 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hethongquanlyduocpham`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `drugs`
--

CREATE TABLE `drugs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `barcode` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `dose` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cost_price` float NOT NULL,
  `selling_price` float NOT NULL,
  `expiry` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `company_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `production_date` date NOT NULL,
  `expiration_date` date NOT NULL,
  `place` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `drugs`
--

INSERT INTO `drugs` (`id`, `name`, `type`, `barcode`, `dose`, `code`, `cost_price`, `selling_price`, `expiry`, `company_name`, `production_date`, `expiration_date`, `place`, `quantity`) VALUES
(1, 'Levothyroxine', 'thường', '123456', '2 viên/ngày', 'Synthroid', 300, 400, 'cònhạn', 'ABC', '2020-05-09', '2022-05-09', 'Nam Định', 400),
(2, 'Tylenol', 'cao cấp', '889457', '1 viên/ngày', 'Ibuprofen', 300, 350, 'còn hạn', 'ABC', '2020-09-04', '2022-09-04', 'Hà Nội', 500),
(3, 'Donepezil', 'thường', '723556', '2 viên/ngày', 'Ibuprofen', 100, 150, 'còn hạn', 'ABC', '2019-03-09', '2022-03-09', 'HCM', 500);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
