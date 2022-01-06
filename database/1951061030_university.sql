-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 06, 2022 lúc 07:24 AM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `1951061030_university`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
--

CREATE TABLE `giangvien` (
  `MAGV` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `HOVATEN` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NGAYSINH` date DEFAULT NULL,
  `GIOITINH` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TRINHDO` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CHUYENMON` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HOCHAM` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HOCVI` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `COQUAN` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giangvien`
--

INSERT INTO `giangvien` (`MAGV`, `HOVATEN`, `NGAYSINH`, `GIOITINH`, `TRINHDO`, `CHUYENMON`, `HOCHAM`, `HOCVI`, `COQUAN`) VALUES
('GV01', 'NGUYỄN VĂN A', '1980-02-15', 'NAM', 'TIẾN SĨ', 'CÔNG NGHỆ THÔNG TIN', 'TIỄN SĨ', 'TIỄN SĨ', 'ĐH THỦY LỢI');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`MAGV`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
