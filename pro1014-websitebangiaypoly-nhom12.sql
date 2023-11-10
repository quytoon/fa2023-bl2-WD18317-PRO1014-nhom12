-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 10, 2023 lúc 04:38 AM
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
-- Cơ sở dữ liệu: `4`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `anh_sp`
--

CREATE TABLE `anh_sp` (
  `IdAnh` int(11) NOT NULL,
  `IdSanPham` int(11) NOT NULL,
  `urlAnh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `anh_sp`
--

INSERT INTO `anh_sp` (`IdAnh`, `IdSanPham`, `urlAnh`) VALUES
(1, 1, 'giay1.jpg'),
(2, 1, 'giay1-1.jpg'),
(3, 1, 'giay1-2.jpg'),
(4, 1, 'giay1-3.jpg'),
(5, 1, 'giay1-4.jpg'),
(6, 1, 'giay1-5.jpg'),
(29, 2, 'giay2.jpg'),
(30, 2, 'giay2-1.jpg'),
(31, 2, 'giay2-2.jpg'),
(32, 2, 'giay2-3.jpg'),
(33, 2, 'giay2-4.jpg'),
(34, 2, 'giay2-5.jpg'),
(35, 3, 'giay3-1.jpg'),
(36, 3, 'giay3-2.jpg'),
(37, 3, 'giay3-3.jpg'),
(38, 3, 'giay3-4.jpg'),
(39, 3, 'giay3.jpg'),
(40, 4, 'giay4.jpg'),
(41, 4, 'giay4-1.jpg'),
(42, 4, 'giay4-2.jpg'),
(43, 4, 'giay4-3.jpg'),
(44, 4, 'giay4-4.jpg'),
(45, 5, 'giay5.jpg'),
(46, 5, 'giay5-1.jpg'),
(47, 5, 'giay5-2.jpg'),
(48, 5, 'giay5-3.jpg'),
(49, 5, 'giay5-4.jpg'),
(50, 5, 'giay5-5.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `IdBinhLuan` int(11) NOT NULL,
  `IdSanPham` int(11) NOT NULL,
  `IdTaiKhoan` int(11) NOT NULL,
  `NoiDung` varchar(255) DEFAULT NULL,
  `NgayBinhLuan` date NOT NULL,
  `DiemDanhGia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`IdBinhLuan`, `IdSanPham`, `IdTaiKhoan`, `NoiDung`, `NgayBinhLuan`, `DiemDanhGia`) VALUES
(1, 1, 1, 'Sản phẩm đẹp gần bằng nyc', '2023-11-11', 5),
(2, 2, 1, 'Sản phẩm đẹp gần bằng nyc', '2023-11-10', 4),
(3, 3, 1, 'Sản phẩm đẹp gần bằng nyc', '2023-11-09', 3),
(4, 4, 1, 'Sản phẩm đẹp gần bằng nyc', '2023-11-08', 2),
(5, 5, 1, 'Sản phẩm đẹp gần bằng nyc', '2023-11-07', 1),
(6, 1, 2, 'Sản phẩm xấu gần bằng nyc', '2023-11-06', 2),
(7, 2, 2, 'Sản phẩm xấu gần bằng nyc', '2023-11-05', 3),
(8, 3, 2, 'Sản phẩm xấu gần bằng nyc', '2023-11-04', 4),
(9, 4, 2, 'Sản phẩm xấu gần bằng nyc', '2023-11-03', 5),
(10, 5, 2, 'Sản phẩm xấu gần bằng nyc', '2023-11-02', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `IdChiTietDonHang` int(11) NOT NULL,
  `IdDonHang` int(11) NOT NULL,
  `IdSanPham` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `Gia` double(10,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`IdChiTietDonHang`, `IdDonHang`, `IdSanPham`, `SoLuong`, `Gia`) VALUES
(1, 1, 1, 1, 2200000.00),
(2, 1, 2, 1, 1900000.00),
(3, 1, 3, 1, 2500000.00),
(4, 1, 4, 1, 2600000.00),
(5, 2, 1, 2, 3800000.00),
(6, 2, 2, 4, 10000000.00);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `idDanhMuc` int(11) NOT NULL,
  `tenDanhMuc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`idDanhMuc`, `tenDanhMuc`) VALUES
(1, 'Cao cổ'),
(2, 'Thấp cổ'),
(3, 'Slip-on'),
(4, 'Platform');

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

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`IdDonHang`, `NgayDatHang`, `TongTien`, `TrangThai`) VALUES
(1, '2023-11-11', 9200000, 1),
(2, '2023-10-11', 13800000, 1);

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

--
-- Đang đổ dữ liệu cho bảng `giay_bienthe`
--

INSERT INTO `giay_bienthe` (`IdGiayBienThe`, `IdMauSac`, `IdSizeGiay`, `IdSanPham`, `SoLuong`) VALUES
(1, 1, 1, 1, 10),
(2, 2, 1, 1, 10),
(3, 1, 2, 1, 10),
(4, 1, 3, 1, 10),
(5, 2, 3, 1, 10),
(6, 1, 1, 2, 10),
(7, 2, 1, 2, 10),
(8, 1, 2, 2, 10),
(9, 1, 3, 2, 10),
(10, 2, 3, 2, 10),
(11, 1, 1, 3, 10),
(12, 2, 1, 3, 10),
(13, 1, 2, 3, 10),
(14, 1, 3, 3, 10),
(15, 2, 3, 3, 10),
(16, 1, 1, 4, 10),
(17, 2, 1, 4, 10),
(18, 1, 2, 4, 10),
(19, 1, 3, 4, 10),
(20, 2, 3, 4, 10),
(21, 1, 1, 5, 10),
(22, 2, 1, 5, 10),
(23, 1, 2, 5, 10),
(24, 1, 3, 5, 10),
(25, 2, 3, 5, 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `IdGioHang` int(11) NOT NULL,
  `IdSanPham` int(11) NOT NULL,
  `IdTaiKhoan` int(11) NOT NULL,
  `SoLuongSp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mausac`
--

CREATE TABLE `mausac` (
  `IdMauSac` int(11) NOT NULL,
  `TenMauSac` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `mausac`
--

INSERT INTO `mausac` (`IdMauSac`, `TenMauSac`) VALUES
(1, 'Đen'),
(2, 'Trắng'),
(3, 'Hồng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `IdSanPham` int(11) NOT NULL,
  `TenSanPham` varchar(255) NOT NULL,
  `Gia` double(10,2) NOT NULL DEFAULT 0.00,
  `MoTa` text DEFAULT NULL,
  `SoLuong` int(11) NOT NULL,
  `luotxem` int(11) DEFAULT 0,
  `iddm` int(11) NOT NULL,
  `trangThai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`IdSanPham`, `TenSanPham`, `Gia`, `MoTa`, `SoLuong`, `luotxem`, `iddm`, `trangThai`) VALUES
(1, 'Giày Converse One Star Pro Herringbone', 2200000.00, 'Giày One Star Pro của Converse là một phiên bản nâng cấp của mẫu giày kinh điển One Star, với sự tập trung vào sự tiện ích cho việc trượt ván. Thiết kế của giày kết hợp giữa phong cách đường phố và tính năng chuyên nghiệp, tạo nên một cảm giác vừa thời trang và thể thao. \r\nMặt trên của giày được làm từ chất liệu vải canvas chất lượng cao, mang lại độ bền và sự êm ái. Một điểm nhấn đặc biệt trên mặt trên của giày là logo ngôi sao One Star, tạo nên sự nhận diện thương hiệu và thêm phần phong cách. Bên cạnh đó, đế giày được làm từ cao su chất lượng cao, với độ bám tốt và khả năng chống trượt cao. Thiết kế đế cũng có các khe cắt sâu để tăng độ linh hoạt và kiểm soát tốt hơn trên bề mặt ván trượt. Điều này giúp cho người sử dụng có thể thực hiện các động tác và trick một cách dễ dàng và ổn định.', 100, 0, 1, 1),
(2, 'Giày Converse Chuck Taylor All Star Move Summer Utility', 1900000.00, 'Với thiết kế trẻ trung và hiện đại, Chuck Taylor All Star Move có một đế giày cao su dày hơn và có rãnh chống trượt, giúp mang lại sự thoải mái và bám dính tốt hơn trên mọi bề mặt, tạo ra một phong cách hiện đại và đầy cá tính. Điểm đặt biệt của sản phẩm là các chi tiết \r\nChuck Taylor All Star Move có nhiều phiên bản với nhiều màu sắc khác nhau, từ những màu trung tính như đen và trắng, đến những màu sắc sặc sỡ và đầy cá tính. Phong cách streetwear thường ưa chuộng các màu sắc táo bạo và sáng tạo, vì vậy giày Chuck Taylor All Star Move là một lựa chọn tuyệt vời để hoàn thiện phong cách của bạn.\r\nCác chi tiết khác trên giày bao gồm dây giày màu sắc đa dạng và bảng hiệu Converse ở mặt bên của giày, tạo nên một phong cách thời trang và đầy cá tính. Giày Chuck Taylor All Star Move là một sự lựa chọn tuyệt vời cho những ai yêu thích phong cách streetwear, với thiết kế độc đáo và tính năng tối ưu cho sự thoải mái và linh hoạt.', 50, 0, 1, 1),
(3, 'Giày Converse Aeon Active Cx Future Comfort', 2500000.00, 'Thay vì sử dụng những mẫu giày Chuck Taylor hoặc Jack Purcells cổ điển đã làm nên thương hiệu cho Converse như vẫn thường thấy trong các bộ sưu tập trước, Converse chọn một đôi giày thể thao định hướng hiệu suất tương tai để truyền đạt nét thiết kế đặc trưng của mình. Với Converse Aeon Active Cx, đây là một đôi Sneaker được thiết kế không dây, mang tới sự thoải mái và linh động từ thiết kế hướng tới tương lai. Phần upper bao gồm một lớp lưới kết hợp và bootie co giãn đàn hồi với những đường may đè tạo nên sự thoáng khí, vừa vặn thoải mái cùng kết cấu cải tiền từ phần thân đến phần đế giúp tối đa hóa sự hỗ trợ. Bên cạnh đó, một thanh kéo gót phía sau và miếng đệm gót TPU cho phép người dùng mang tháo giày dễ dàng hơn mà không dẫm lên gót giày làm hỏng form dáng, trong khi đế giữa CX -  loại xốp sở hữu khả năng hấp thụ chấn động và đàn hồi năng lượng cực tốt thể hiện một kết cấu tương tự như bê tông thô và một lớp đệm CX thả PU đảm bảo cho những bước đi cực kỳ nhẹ nhàng và thoải mái. Đặc biệt, góp phần tạo dấu ấn cho sản phẩm chính là phần phối hợp màu sắc độc đáo đem tới cái nhìn ấn tượng cho mọi người cùng logo đặc trưng của Converse cũng xuất hiện ở vị trí tiêu chuẩn bên hông thân giày giúp tạo điểm nhấn cho sản phẩm và tăng độ nhận diện cho thương hiệu. Với tinh thần ready to tread đầy cảm hứng, đôi giày sẽ cùng bạn sẵn sàng tiến bước, tự tin hướng đến tương lai mới với phong cách của riêng bạn.', 50, 0, 1, 1),
(4, 'Giày Converse Run Star Motion Canvas Platform Foundational', 2600000.00, 'Giày Converse Run Star Motion Canvas Platform- một sản phẩm mang tính đột phá đến từ thương hiệu Converse. Nếu dòng classic là “gà cưng” của ông hoàng Converse. Thì “chiến thần” Run Star Motion Canvas Platform là màu áo mới được Converse tung ra để thách thức cho các thương hiệu khác trên đường đua thời trang. Với thiết kế tuyệt đẹp nhờ dải lượn sóng răng cưa ở phần quanh đế giày,  được ví như biển cả rộng lớn nhằm mục đích mang đến sự trẻ trung và hiện đại cho sản phẩm. Bên cạnh đó, đế giày của sản phẩm được làm bằng chất liệu cao su, đảm bảo độ bền và độ bám tốt trên mọi địa hình. \r\nVới Converse Run Star Motion Canvas Platform, vùng lưỡi gà được thiết kế cao, tạo nên điểm nhấn ấn tượng và ôm sát chân người mang. Phần thân giày vẫn giữ nguyên sự đơn giản và cổ điển, tạo nên sự nổi bật cho phần đế và mang lại vẻ trẻ trung và năng động cho người sử dụng. Đặc biệt, phần đế được thiết kế theo kiểu chunky bản to và chia làm hai phần thể hiện phong cách trẻ trung và đầy táo bạo. Các bộ phận có đường răng cưa lớn giúp giữ form và thăng bằng tốt hơn khi di chuyển, tạo nên sự thoải mái và tiện ích cho người sử dụng, đồng thời giúp tăng chiều cao một cách tự nhiên. ', 50, 0, 1, 1),
(5, 'Giày Converse CHUCK TAYLOR ALL STAR', 1160000.00, 'Thay vì sử dụng những mẫu giày Chuck Taylor hoặc Jack Purcells cổ điển đã làm nên thương hiệu cho Converse như vẫn thường thấy trong các bộ sưu tập trước, Converse chọn một đôi giày thể thao định hướng hiệu suất tương tai để truyền đạt nét thiết kế đặc trưng của mình. Với Converse Aeon Active Cx, đây là một đôi Sneaker được thiết kế không dây, mang tới sự thoải mái và linh động từ thiết kế hướng tới tương lai. Phần upper bao gồm một lớp lưới kết hợp và bootie co giãn đàn hồi với những đường may đè tạo nên sự thoáng khí, vừa vặn thoải mái cùng kết cấu cải tiền từ phần thân đến phần đế giúp tối đa hóa sự hỗ trợ. Bên cạnh đó, một thanh kéo gót phía sau và miếng đệm gót TPU cho phép người dùng mang tháo giày dễ dàng hơn mà không dẫm lên gót giày làm hỏng form dáng, trong khi đế giữa CX -  loại xốp sở hữu khả năng hấp thụ chấn động và đàn hồi năng lượng cực tốt thể hiện một kết cấu tương tự như bê tông thô và một lớp đệm CX thả PU đảm bảo cho những bước đi cực kỳ nhẹ nhàng và thoải mái. Đặc biệt, góp phần tạo dấu ấn cho sản phẩm chính là phần phối hợp màu sắc độc đáo đem tới cái nhìn ấn tượng cho mọi người cùng logo đặc trưng của Converse cũng xuất hiện ở vị trí tiêu chuẩn bên hông thân giày giúp tạo điểm nhấn cho sản phẩm và tăng độ nhận diện cho thương hiệu. Với tinh thần ready to tread đầy cảm hứng, đôi giày sẽ cùng bạn sẵn sàng tiến bước, tự tin hướng đến tương lai mới với phong cách của riêng bạn.', 50, 0, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sizegiay`
--

CREATE TABLE `sizegiay` (
  `IdSizeGiay` int(11) NOT NULL,
  `Size` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sizegiay`
--

INSERT INTO `sizegiay` (`IdSizeGiay`, `Size`) VALUES
(1, 39),
(2, 40),
(3, 38);

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
  `SoDienThoai` int(10) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`IdTaiKhoan`, `TenTaiKhoan`, `MatKhau`, `HoTen`, `DiaChi`, `Email`, `SoDienThoai`, `role`) VALUES
(1, 'quytoon', 'quytoonA1@', 'Nguyễn Tôn Quý', 'Việt Nam', 'quyton69@gmail.com', 964236835, 1),
(2, 'duan1nhom12', 'Duan1nhom12@', 'Dự Án 1 Nhóm 12', 'Trái đất', 'quyntph31502@fpt.edu.vn', 1234567890, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `anh_sp`
--
ALTER TABLE `anh_sp`
  ADD PRIMARY KEY (`IdAnh`),
  ADD KEY `IdSanPham` (`IdSanPham`);

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
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`IdGioHang`),
  ADD KEY `fk_gh_sp` (`IdSanPham`),
  ADD KEY `fk_gh_tk` (`IdTaiKhoan`);

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
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `anh_sp`
--
ALTER TABLE `anh_sp`
  MODIFY `IdAnh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `IdBinhLuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `IdChiTietDonHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `idDanhMuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `IdDonHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `giay_bienthe`
--
ALTER TABLE `giay_bienthe`
  MODIFY `IdGiayBienThe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `IdGioHang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `mausac`
--
ALTER TABLE `mausac`
  MODIFY `IdMauSac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `IdSanPham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `sizegiay`
--
ALTER TABLE `sizegiay`
  MODIFY `IdSizeGiay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `IdTaiKhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `anh_sp`
--
ALTER TABLE `anh_sp`
  ADD CONSTRAINT `anh_sp_ibfk_1` FOREIGN KEY (`IdSanPham`) REFERENCES `sanpham` (`IdSanPham`);

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
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `fk_gh_sp` FOREIGN KEY (`IdSanPham`) REFERENCES `sanpham` (`IdSanPham`),
  ADD CONSTRAINT `fk_gh_tk` FOREIGN KEY (`IdTaiKhoan`) REFERENCES `taikhoan` (`IdTaiKhoan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
