-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 15, 2023 lúc 04:22 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `database1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bangtin`
--

CREATE TABLE `bangtin` (
  `idTin` int(255) NOT NULL,
  `idNhom` varchar(255) NOT NULL,
  `tieude` text NOT NULL,
  `trichdan` text NOT NULL,
  `anhtrichdan` text NOT NULL,
  `noidung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bangtin`
--

INSERT INTO `bangtin` (`idTin`, `idNhom`, `tieude`, `trichdan`, `anhtrichdan`, `noidung`) VALUES
(5, '2', 'Loser', 'LoserLoserLoser', '31k948.jpg', 'LoserLoser'),
(6, '1', 'Left and Right', 'Left and RightLeft and RightLeft and RightLeft and RightLeft and Right', '6fc99bbfe71213557a1e829860237427.jpg', 'Left and RightLeft and RightLeft and Right'),
(7, '2', '1341234214s', '1341234214s1341234214s1341234214s', '', '1341234214s1341234214s1341234214s');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangnhap`
--

CREATE TABLE `dangnhap` (
  `userName` varchar(255) NOT NULL,
  `matkhau` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `dangnhap`
--

INSERT INTO `dangnhap` (`userName`, `matkhau`, `role`) VALUES
('123', '123', '1'),
('ab', '1212', '1'),
('admin', '123', '2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhomtin`
--

CREATE TABLE `nhomtin` (
  `idNhom` int(11) NOT NULL,
  `tenNhom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhomtin`
--

INSERT INTO `nhomtin` (`idNhom`, `tenNhom`) VALUES
(1, '        C++'),
(2, 'java');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bangtin`
--
ALTER TABLE `bangtin`
  ADD PRIMARY KEY (`idTin`);

--
-- Chỉ mục cho bảng `dangnhap`
--
ALTER TABLE `dangnhap`
  ADD PRIMARY KEY (`userName`);

--
-- Chỉ mục cho bảng `nhomtin`
--
ALTER TABLE `nhomtin`
  ADD PRIMARY KEY (`idNhom`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bangtin`
--
ALTER TABLE `bangtin`
  MODIFY `idTin` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `nhomtin`
--
ALTER TABLE `nhomtin`
  MODIFY `idNhom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
