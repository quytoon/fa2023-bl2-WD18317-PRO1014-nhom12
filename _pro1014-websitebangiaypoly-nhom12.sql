-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 06, 2023 lúc 06:59 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `IdBinhLuan` int(11) NOT NULL,
  `IdSanPham` int(11) DEFAULT NULL,
  `IdTaiKhoan` int(11) DEFAULT NULL,
  `NoiDung` varchar(255) NOT NULL,
  `NgayBinhLuan` date NOT NULL,
  `DiemDanhGia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `IdChiTietDonHang` int(11) NOT NULL,
  `IdDonHang` int(11) DEFAULT NULL,
  `IdSanPham` int(11) DEFAULT NULL,
  `SoLuong` int(11) NOT NULL,
  `Gia` double(10,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `idDanhMuc` int(11) NOT NULL,
  `tenDanhMuc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `IdDonHang` int(11) NOT NULL,
  `NgayDatHang` date NOT NULL,
  `TongTien` float NOT NULL,
  `TrangThai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giay_bienthe`
--

CREATE TABLE `giay_bienthe` (
  `IdGiayBienThe` int(11) NOT NULL,
  `IdMauSac` int(11) NOT NULL,
  `IdSizeGiay` int(11) NOT NULL,
  `IdSanPham` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mausac`
--

CREATE TABLE `mausac` (
  `IdMauSac` int(11) NOT NULL,
  `TenMauSac` varchar(255) NOT NULL,
  `IdSanPham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `IdSanPham` int(11) NOT NULL,
  `TenSanPham` varchar(255) NOT NULL,
  `Gia` double(10,2) DEFAULT 0.00,
  `MoTa` text DEFAULT NULL,
  `SoLuong` int(11) NOT NULL,
  `hinh` varchar(255) DEFAULT NULL,
  `luotxem` int(11) DEFAULT 0,
  `iddm` int(11) NOT NULL,
  `trangThai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sizegiay`
--

CREATE TABLE `sizegiay` (
  `IdSizeGiay` int(11) NOT NULL,
  `Size` float NOT NULL,
  `IdSanPham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `IdTaiKhoan` int(11) NOT NULL,
  `TenTaiKhoan` varchar(255) NOT NULL,
  `MatKhau` varchar(255) NOT NULL,
  `HoTen` varchar(255) NOT NULL,
  `DiaChi` varchar(255) DEFAULT NULL,
  `Email` varchar(255) NOT NULL,
  `SoDienThoai` varchar(20) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`IdBinhLuan`),
  ADD KEY `IdSanPham` (`IdSanPham`),
  ADD KEY `IdTaiKhoan` (`IdTaiKhoan`);

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`IdChiTietDonHang`),
  ADD KEY `IdDonHang` (`IdDonHang`),
  ADD KEY `IdSanPham` (`IdSanPham`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`idDanhMuc`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`IdDonHang`);

--
-- Chỉ mục cho bảng `giay_bienthe`
--
ALTER TABLE `giay_bienthe`
  ADD PRIMARY KEY (`IdGiayBienThe`),
  ADD KEY `fk_gbt_sp` (`IdSanPham`),
  ADD KEY `fk_gbt_gms` (`IdMauSac`),
  ADD KEY `fk_gbt_gs` (`IdSizeGiay`);

--
-- Chỉ mục cho bảng `mausac`
--
ALTER TABLE `mausac`
  ADD PRIMARY KEY (`IdMauSac`),
  ADD KEY `giay_mausac_ibfk_1` (`IdSanPham`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`IdSanPham`);

--
-- Chỉ mục cho bảng `sizegiay`
--
ALTER TABLE `sizegiay`
  ADD PRIMARY KEY (`IdSizeGiay`),
  ADD KEY `giay_size_ibfk_1` (`IdSanPham`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`IdTaiKhoan`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `IdBinhLuan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `IdChiTietDonHang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `idDanhMuc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `IdDonHang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `giay_bienthe`
--
ALTER TABLE `giay_bienthe`
  MODIFY `IdGiayBienThe` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `mausac`
--
ALTER TABLE `mausac`
  MODIFY `IdMauSac` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `IdSanPham` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sizegiay`
--
ALTER TABLE `sizegiay`
  MODIFY `IdSizeGiay` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`IdSanPham`) REFERENCES `sanpham` (`IdSanPham`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`IdTaiKhoan`) REFERENCES `taikhoan` (`IdTaiKhoan`);

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`IdDonHang`) REFERENCES `donhang` (`IdDonHang`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`IdSanPham`) REFERENCES `sanpham` (`IdSanPham`);

--
-- Các ràng buộc cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD CONSTRAINT `fk_dm_sp` FOREIGN KEY (`idDanhMuc`) REFERENCES `sanpham` (`IdSanPham`);

--
-- Các ràng buộc cho bảng `giay_bienthe`
--
ALTER TABLE `giay_bienthe`
  ADD CONSTRAINT `fk_gbt_gms` FOREIGN KEY (`IdMauSac`) REFERENCES `mausac` (`IdMauSac`),
  ADD CONSTRAINT `fk_gbt_gs` FOREIGN KEY (`IdSizeGiay`) REFERENCES `sizegiay` (`IdSizeGiay`),
  ADD CONSTRAINT `fk_gbt_sp` FOREIGN KEY (`IdSanPham`) REFERENCES `sanpham` (`IdSanPham`);

--
-- Các ràng buộc cho bảng `mausac`
--
ALTER TABLE `mausac`
  ADD CONSTRAINT `giay_mausac_ibfk_1` FOREIGN KEY (`IdSanPham`) REFERENCES `sanpham` (`IdSanPham`);

--
-- Các ràng buộc cho bảng `sizegiay`
--
ALTER TABLE `sizegiay`
  ADD CONSTRAINT `giay_size_ibfk_1` FOREIGN KEY (`IdSanPham`) REFERENCES `sanpham` (`IdSanPham`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
