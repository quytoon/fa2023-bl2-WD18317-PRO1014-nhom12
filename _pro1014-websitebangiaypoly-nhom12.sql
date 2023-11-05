-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 05, 2023 lúc 12:26 PM
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
-- Cơ sở dữ liệu: `	pro1014-websitebangiaypoly-nhom12`
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
  `NgayBinhLuan` date NOT NULL
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
-- Cấu trúc bảng cho bảng `danhgia`
--

CREATE TABLE `danhgia` (
  `IdDanhGia` int(11) NOT NULL,
  `IdSanPham` int(11) DEFAULT NULL,
  `IdTaiKhoan` int(11) DEFAULT NULL,
  `DiemDanhGia` int(11) NOT NULL,
  `NoiDung` varchar(255) NOT NULL,
  `NgayDanhGia` date NOT NULL
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
  `TongTien` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giay_danhmuc`
--

CREATE TABLE `giay_danhmuc` (
  `IdSanPham` int(11) NOT NULL,
  `idDanhMuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giay_mausac`
--

CREATE TABLE `giay_mausac` (
  `IdSanPham` int(11) NOT NULL,
  `IdMauSac` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giay_size`
--

CREATE TABLE `giay_size` (
  `IdSanPham` int(11) NOT NULL,
  `IdSizeGiay` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giay_thuonghieu`
--

CREATE TABLE `giay_thuonghieu` (
  `IdSanPham` int(11) NOT NULL,
  `IdThuongHieu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mausac`
--

CREATE TABLE `mausac` (
  `IdMauSac` int(11) NOT NULL,
  `TenMauSac` varchar(255) NOT NULL
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
  `Size` float NOT NULL
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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuonghieu`
--

CREATE TABLE `thuonghieu` (
  `IdThuongHieu` int(11) NOT NULL,
  `TenThuongHieu` varchar(255) NOT NULL
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
-- Chỉ mục cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`IdDanhGia`),
  ADD KEY `IdSanPham` (`IdSanPham`),
  ADD KEY `IdTaiKhoan` (`IdTaiKhoan`);

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
-- Chỉ mục cho bảng `giay_danhmuc`
--
ALTER TABLE `giay_danhmuc`
  ADD PRIMARY KEY (`IdSanPham`,`idDanhMuc`),
  ADD KEY `idDanhMuc` (`idDanhMuc`);

--
-- Chỉ mục cho bảng `giay_mausac`
--
ALTER TABLE `giay_mausac`
  ADD PRIMARY KEY (`IdSanPham`,`IdMauSac`),
  ADD KEY `IdMauSac` (`IdMauSac`);

--
-- Chỉ mục cho bảng `giay_size`
--
ALTER TABLE `giay_size`
  ADD PRIMARY KEY (`IdSanPham`,`IdSizeGiay`),
  ADD KEY `IdSizeGiay` (`IdSizeGiay`);

--
-- Chỉ mục cho bảng `giay_thuonghieu`
--
ALTER TABLE `giay_thuonghieu`
  ADD PRIMARY KEY (`IdSanPham`,`IdThuongHieu`),
  ADD KEY `IdThuongHieu` (`IdThuongHieu`);

--
-- Chỉ mục cho bảng `mausac`
--
ALTER TABLE `mausac`
  ADD PRIMARY KEY (`IdMauSac`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`IdSanPham`);

--
-- Chỉ mục cho bảng `sizegiay`
--
ALTER TABLE `sizegiay`
  ADD PRIMARY KEY (`IdSizeGiay`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`IdTaiKhoan`);

--
-- Chỉ mục cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  ADD PRIMARY KEY (`IdThuongHieu`);

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
-- AUTO_INCREMENT cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `IdDanhGia` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  MODIFY `IdThuongHieu` int(11) NOT NULL AUTO_INCREMENT;

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
-- Các ràng buộc cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `danhgia_ibfk_1` FOREIGN KEY (`IdSanPham`) REFERENCES `sanpham` (`IdSanPham`),
  ADD CONSTRAINT `danhgia_ibfk_2` FOREIGN KEY (`IdTaiKhoan`) REFERENCES `taikhoan` (`IdTaiKhoan`);

--
-- Các ràng buộc cho bảng `giay_danhmuc`
--
ALTER TABLE `giay_danhmuc`
  ADD CONSTRAINT `giay_danhmuc_ibfk_1` FOREIGN KEY (`IdSanPham`) REFERENCES `sanpham` (`IdSanPham`),
  ADD CONSTRAINT `giay_danhmuc_ibfk_2` FOREIGN KEY (`idDanhMuc`) REFERENCES `danhmuc` (`idDanhMuc`);

--
-- Các ràng buộc cho bảng `giay_mausac`
--
ALTER TABLE `giay_mausac`
  ADD CONSTRAINT `giay_mausac_ibfk_1` FOREIGN KEY (`IdSanPham`) REFERENCES `sanpham` (`IdSanPham`),
  ADD CONSTRAINT `giay_mausac_ibfk_2` FOREIGN KEY (`IdMauSac`) REFERENCES `mausac` (`IdMauSac`);

--
-- Các ràng buộc cho bảng `giay_size`
--
ALTER TABLE `giay_size`
  ADD CONSTRAINT `giay_size_ibfk_1` FOREIGN KEY (`IdSanPham`) REFERENCES `sanpham` (`IdSanPham`),
  ADD CONSTRAINT `giay_size_ibfk_2` FOREIGN KEY (`IdSizeGiay`) REFERENCES `sizegiay` (`IdSizeGiay`);

--
-- Các ràng buộc cho bảng `giay_thuonghieu`
--
ALTER TABLE `giay_thuonghieu`
  ADD CONSTRAINT `giay_thuonghieu_ibfk_1` FOREIGN KEY (`IdSanPham`) REFERENCES `sanpham` (`IdSanPham`),
  ADD CONSTRAINT `giay_thuonghieu_ibfk_2` FOREIGN KEY (`IdThuongHieu`) REFERENCES `thuonghieu` (`IdThuongHieu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
