-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 12, 2023 lúc 10:08 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `pro1014-websitebangiaypoly-nhom12`
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
  `DiemDanhGia` int(11) NOT NULL,
  `TrangThai` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`IdBinhLuan`, `IdSanPham`, `IdTaiKhoan`, `NoiDung`, `NgayBinhLuan`, `DiemDanhGia`, `TrangThai`) VALUES
(7, 2, 2, 'Sản phẩm xấu gần bằng nyc', '2023-11-05', 3, 0),
(8, 3, 2, 'Sản phẩm xấu gần bằng nyc', '2023-11-04', 4, 0),
(9, 4, 2, 'Sản phẩm xấu gần bằng nyc', '2023-11-03', 5, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `IdChiTietDonHang` int(11) NOT NULL,
  `IdDonHang` int(11) NOT NULL,
  `IdSanPham` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `Gia` double(10,2) NOT NULL DEFAULT 0.00,
  `Trangthai` int(11) NOT NULL DEFAULT 0,
  `IdMauSac` int(11) DEFAULT NULL,
  `IdSizeGiay` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`IdChiTietDonHang`, `IdDonHang`, `IdSanPham`, `SoLuong`, `Gia`, `Trangthai`, `IdMauSac`, `IdSizeGiay`) VALUES
(32, 6779, 4, 1, 2600000.00, 0, 1, 1),
(33, 6780, 3, 1, 2500000.00, 0, 1, 1),
(34, 6781, 3, 1, 2500000.00, 0, 1, 1),
(35, 6783, 5, 1, 1160000.00, 0, 1, 1),
(36, 6784, 5, 1, 1160000.00, 0, 1, 1),
(37, 6785, 3, 1, 2500000.00, 0, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `idDanhMuc` int(11) NOT NULL,
  `tenDanhMuc` varchar(255) NOT NULL,
  `TrangThai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`idDanhMuc`, `tenDanhMuc`, `TrangThai`) VALUES
(1, 'Cao cổ 2', 0),
(2, 'Thấp cổ', 0),
(3, 'Slip-on', 0),
(4, 'Platform', 0),
(24, 'balo', 0),
(25, 'tui', 0),
(26, 'dep', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `IdDonHang` int(11) NOT NULL,
  `NgayDatHang` date NOT NULL,
  `TongTien` float NOT NULL,
  `TrangThai` int(11) NOT NULL DEFAULT 0,
  `IdTaiKhoan` int(11) NOT NULL,
  `SoLuongSp` int(11) NOT NULL DEFAULT 1,
  `DiaChiDat` varchar(200) NOT NULL,
  `HoVaTen` varchar(255) DEFAULT NULL,
  `SoDienThoai` int(10) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`IdDonHang`, `NgayDatHang`, `TongTien`, `TrangThai`, `IdTaiKhoan`, `SoLuongSp`, `DiaChiDat`, `HoVaTen`, `SoDienThoai`, `Email`) VALUES
(6779, '2023-12-12', 2600000, 0, 3, 1, 'Tỉnh Cao Bằng,Huyện Bảo Lâm,Xã Đức Hạnh,2', 'vuvanbao ', 2147483647, 'baovvph36087@fpt.edu.vn'),
(6780, '2023-12-12', 2500000, 0, 3, 1, 'Tỉnh Cao Bằng,Huyện Bảo Lạc,Xã Cốc Pàng,a', 'vuvanbao ', 2147483647, 'baovvph36087@fpt.edu.vn'),
(6781, '2023-12-12', 2500000, 0, 3, 1, 'Tỉnh Cao Bằng,Huyện Bảo Lạc,Xã Cốc Pàng,a', 'vuvanbao ', 2147483647, 'baovvph36087@fpt.edu.vn'),
(6782, '2023-12-12', 0, 0, 3, 0, 'Tỉnh Cao Bằng,Huyện Bảo Lạc,Xã Cốc Pàng,a', 'vuvanbao ', 2147483647, 'baovvph36087@fpt.edu.vn'),
(6783, '2023-12-12', 1160000, 0, 3, 1, 'Tỉnh Cao Bằng,Huyện Bảo Lạc,Xã Thượng Hà,s', 'vuvanbao ', 2147483647, 'baovvph36087@fpt.edu.vn'),
(6784, '2023-12-12', 1160000, 0, 3, 1, 'Tỉnh Hải Dương,Thành phố Chí Linh,Phường An Lạc,a', 'vuvanbao ', 2147483647, 'baovvph36087@fpt.edu.vn'),
(6785, '2023-12-12', 2500000, 0, 3, 1, 'Tỉnh Bắc Ninh,Huyện Tiên Du,Xã Đại Đồng,a', 'vuvanbao ', 2147483647, 'baovvph36087@fpt.edu.vn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giay_bienthe`
--

CREATE TABLE `giay_bienthe` (
  `IdGiayBienThe` int(11) NOT NULL,
  `IdMauSac` int(11) NOT NULL,
  `IdSizeGiay` int(11) NOT NULL,
  `IdSanPham` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `luotmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `giay_bienthe`
--

INSERT INTO `giay_bienthe` (`IdGiayBienThe`, `IdMauSac`, `IdSizeGiay`, `IdSanPham`, `SoLuong`, `luotmua`) VALUES
(1, 1, 1, 1, 10, 13),
(2, 2, 1, 1, 10, 0),
(3, 1, 2, 1, 10, 0),
(4, 1, 3, 1, 10, 0),
(5, 2, 3, 1, 10, 0),
(6, 1, 1, 2, 10, 0),
(7, 2, 1, 2, 10, 0),
(8, 1, 2, 2, 10, 0),
(9, 1, 3, 2, 10, 0),
(10, 2, 3, 2, 10, 0),
(11, 1, 1, 3, 7, 1),
(12, 2, 1, 3, 10, 0),
(13, 1, 2, 3, 10, 0),
(14, 1, 3, 3, 10, 0),
(15, 2, 3, 3, 10, 0),
(16, 1, 1, 4, 34, 0),
(17, 2, 1, 4, 10, 0),
(18, 1, 2, 4, 6, 0),
(19, 1, 3, 4, 10, 0),
(20, 2, 3, 4, 10, 0),
(21, 1, 1, 5, 6, 0),
(22, 2, 1, 5, 10, 0),
(23, 1, 2, 5, 10, 0),
(24, 1, 3, 5, 10, 0),
(25, 2, 3, 5, 10, 0),
(26, 1, 3, 1, 10, 0),
(27, 2, 2, 1, 10, 0),
(29, 1, 3, 1, 10, 0),
(30, 2, 2, 1, 10, 0),
(31, 3, 3, 1, 10, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `IdGioHang` int(11) NOT NULL,
  `IdSanPham` int(11) NOT NULL,
  `IdTaiKhoan` int(11) NOT NULL,
  `IdMauSac` int(11) NOT NULL,
  `IdSizeGiay` int(11) NOT NULL,
  `SoLuongSp` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`IdGioHang`, `IdSanPham`, `IdTaiKhoan`, `IdMauSac`, `IdSizeGiay`, `SoLuongSp`) VALUES
(9, 4, 1, 1, 2, 1),
(10, 3, 1, 3, 1, 1),
(11, 5, 1, 2, 2, 1),
(12, 2, 1, 3, 2, 1),
(13, 3, 1, 1, 3, 1),
(20, 5, 2, 2, 3, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mausac`
--

CREATE TABLE `mausac` (
  `IdMauSac` int(11) NOT NULL,
  `TenMauSac` varchar(255) NOT NULL,
  `TrangThai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `mausac`
--

INSERT INTO `mausac` (`IdMauSac`, `TenMauSac`, `TrangThai`) VALUES
(1, 'Đen', 0),
(2, 'Trắng', 0),
(3, 'Hồng', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `IdSanPham` int(11) NOT NULL,
  `TenSanPham` varchar(255) NOT NULL,
  `Gia` double(10,2) NOT NULL DEFAULT 0.00,
  `img` varchar(255) NOT NULL,
  `MoTa` text DEFAULT NULL,
  `SoLuong` int(11) NOT NULL,
  `luotmua` int(11) DEFAULT 0,
  `iddm` int(11) NOT NULL,
  `trangThai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`IdSanPham`, `TenSanPham`, `Gia`, `img`, `MoTa`, `SoLuong`, `luotmua`, `iddm`, `trangThai`) VALUES
(1, 'Giày Converse One Star Pro Herringbone', 2200000.00, 'giay1.jpg', 'Giày One Star Pro của Converse là một phiên bản nâng cấp của mẫu giày kinh điển One Star, với sự tập trung vào sự tiện ích cho việc trượt ván. Thiết kế của giày kết hợp giữa phong cách đường phố và tính năng chuyên nghiệp, tạo nên một cảm giác vừa thời trang và thể thao. \r\nMặt trên của giày được làm từ chất liệu vải canvas chất lượng cao, mang lại độ bền và sự êm ái. Một điểm nhấn đặc biệt trên mặt trên của giày là logo ngôi sao One Star, tạo nên sự nhận diện thương hiệu và thêm phần phong cách. Bên cạnh đó, đế giày được làm từ cao su chất lượng cao, với độ bám tốt và khả năng chống trượt cao. Thiết kế đế cũng có các khe cắt sâu để tăng độ linh hoạt và kiểm soát tốt hơn trên bề mặt ván trượt. Điều này giúp cho người sử dụng có thể thực hiện các động tác và trick một cách dễ dàng và ổn định.', 100, 16, 1, 1),
(2, 'Giày Converse Chuck Taylor All Star Move Summer Utility', 1900000.00, 'giay2.jpg', 'Với thiết kế trẻ trung và hiện đại, Chuck Taylor All Star Move có một đế giày cao su dày hơn và có rãnh chống trượt, giúp mang lại sự thoải mái và bám dính tốt hơn trên mọi bề mặt, tạo ra một phong cách hiện đại và đầy cá tính. Điểm đặt biệt của sản phẩm là các chi tiết \r\nChuck Taylor All Star Move có nhiều phiên bản với nhiều màu sắc khác nhau, từ những màu trung tính như đen và trắng, đến những màu sắc sặc sỡ và đầy cá tính. Phong cách streetwear thường ưa chuộng các màu sắc táo bạo và sáng tạo, vì vậy giày Chuck Taylor All Star Move là một lựa chọn tuyệt vời để hoàn thiện phong cách của bạn.\r\nCác chi tiết khác trên giày bao gồm dây giày màu sắc đa dạng và bảng hiệu Converse ở mặt bên của giày, tạo nên một phong cách thời trang và đầy cá tính. Giày Chuck Taylor All Star Move là một sự lựa chọn tuyệt vời cho những ai yêu thích phong cách streetwear, với thiết kế độc đáo và tính năng tối ưu cho sự thoải mái và linh hoạt.', 50, 0, 1, 1),
(3, 'Giày Converse Aeon Active Cx Future Comfort', 2500000.00, 'giay3.jpg', 'Thay vì sử dụng những mẫu giày Chuck Taylor hoặc Jack Purcells cổ điển đã làm nên thương hiệu cho Converse như vẫn thường thấy trong các bộ sưu tập trước, Converse chọn một đôi giày thể thao định hướng hiệu suất tương tai để truyền đạt nét thiết kế đặc trưng của mình. Với Converse Aeon Active Cx, đây là một đôi Sneaker được thiết kế không dây, mang tới sự thoải mái và linh động từ thiết kế hướng tới tương lai. Phần upper bao gồm một lớp lưới kết hợp và bootie co giãn đàn hồi với những đường may đè tạo nên sự thoáng khí, vừa vặn thoải mái cùng kết cấu cải tiền từ phần thân đến phần đế giúp tối đa hóa sự hỗ trợ. Bên cạnh đó, một thanh kéo gót phía sau và miếng đệm gót TPU cho phép người dùng mang tháo giày dễ dàng hơn mà không dẫm lên gót giày làm hỏng form dáng, trong khi đế giữa CX -  loại xốp sở hữu khả năng hấp thụ chấn động và đàn hồi năng lượng cực tốt thể hiện một kết cấu tương tự như bê tông thô và một lớp đệm CX thả PU đảm bảo cho những bước đi cực kỳ nhẹ nhàng và thoải mái. Đặc biệt, góp phần tạo dấu ấn cho sản phẩm chính là phần phối hợp màu sắc độc đáo đem tới cái nhìn ấn tượng cho mọi người cùng logo đặc trưng của Converse cũng xuất hiện ở vị trí tiêu chuẩn bên hông thân giày giúp tạo điểm nhấn cho sản phẩm và tăng độ nhận diện cho thương hiệu. Với tinh thần ready to tread đầy cảm hứng, đôi giày sẽ cùng bạn sẵn sàng tiến bước, tự tin hướng đến tương lai mới với phong cách của riêng bạn.', 41, 1, 1, 1),
(4, 'Giày Converse Run Star Motion Canvas Platform Foundational', 2600000.00, 'giay4.jpg', 'Giày Converse Run Star Motion Canvas Platform- một sản phẩm mang tính đột phá đến từ thương hiệu Converse. Nếu dòng classic là “gà cưng” của ông hoàng Converse. Thì “chiến thần” Run Star Motion Canvas Platform là màu áo mới được Converse tung ra để thách thức cho các thương hiệu khác trên đường đua thời trang. Với thiết kế tuyệt đẹp nhờ dải lượn sóng răng cưa ở phần quanh đế giày,  được ví như biển cả rộng lớn nhằm mục đích mang đến sự trẻ trung và hiện đại cho sản phẩm. Bên cạnh đó, đế giày của sản phẩm được làm bằng chất liệu cao su, đảm bảo độ bền và độ bám tốt trên mọi địa hình. \r\nVới Converse Run Star Motion Canvas Platform, vùng lưỡi gà được thiết kế cao, tạo nên điểm nhấn ấn tượng và ôm sát chân người mang. Phần thân giày vẫn giữ nguyên sự đơn giản và cổ điển, tạo nên sự nổi bật cho phần đế và mang lại vẻ trẻ trung và năng động cho người sử dụng. Đặc biệt, phần đế được thiết kế theo kiểu chunky bản to và chia làm hai phần thể hiện phong cách trẻ trung và đầy táo bạo. Các bộ phận có đường răng cưa lớn giúp giữ form và thăng bằng tốt hơn khi di chuyển, tạo nên sự thoải mái và tiện ích cho người sử dụng, đồng thời giúp tăng chiều cao một cách tự nhiên. ', 31, 0, 1, 1),
(5, 'Giày Converse CHUCK TAYLOR ALL STAR', 1160000.00, 'giay5.jpg', 'Thay vì sử dụng những mẫu giày Chuck Taylor hoặc Jack Purcells cổ điển đã làm nên thương hiệu cho Converse như vẫn thường thấy trong các bộ sưu tập trước, Converse chọn một đôi giày thể thao định hướng hiệu suất tương tai để truyền đạt nét thiết kế đặc trưng của mình. Với Converse Aeon Active Cx, đây là một đôi Sneaker được thiết kế không dây, mang tới sự thoải mái và linh động từ thiết kế hướng tới tương lai. Phần upper bao gồm một lớp lưới kết hợp và bootie co giãn đàn hồi với những đường may đè tạo nên sự thoáng khí, vừa vặn thoải mái cùng kết cấu cải tiền từ phần thân đến phần đế giúp tối đa hóa sự hỗ trợ. Bên cạnh đó, một thanh kéo gót phía sau và miếng đệm gót TPU cho phép người dùng mang tháo giày dễ dàng hơn mà không dẫm lên gót giày làm hỏng form dáng, trong khi đế giữa CX -  loại xốp sở hữu khả năng hấp thụ chấn động và đàn hồi năng lượng cực tốt thể hiện một kết cấu tương tự như bê tông thô và một lớp đệm CX thả PU đảm bảo cho những bước đi cực kỳ nhẹ nhàng và thoải mái. Đặc biệt, góp phần tạo dấu ấn cho sản phẩm chính là phần phối hợp màu sắc độc đáo đem tới cái nhìn ấn tượng cho mọi người cùng logo đặc trưng của Converse cũng xuất hiện ở vị trí tiêu chuẩn bên hông thân giày giúp tạo điểm nhấn cho sản phẩm và tăng độ nhận diện cho thương hiệu. Với tinh thần ready to tread đầy cảm hứng, đôi giày sẽ cùng bạn sẵn sàng tiến bước, tự tin hướng đến tương lai mới với phong cách của riêng bạn.', 46, 0, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sizegiay`
--

CREATE TABLE `sizegiay` (
  `IdSizeGiay` int(11) NOT NULL,
  `Size` float NOT NULL,
  `TrangThai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sizegiay`
--

INSERT INTO `sizegiay` (`IdSizeGiay`, `Size`, `TrangThai`) VALUES
(1, 39, 0),
(2, 40, 0),
(3, 38, 0);

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
  `avatarUser` varchar(255) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `TrangThai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`IdTaiKhoan`, `TenTaiKhoan`, `MatKhau`, `HoTen`, `DiaChi`, `Email`, `SoDienThoai`, `avatarUser`, `role`, `TrangThai`) VALUES
(1, 'quytoon', 'quytoonA1@', 'Nguyễn Tôn Quý', 'Việt Nam', 'quyton69@gmail.com', 964236835, 'avata.png', 1, 0),
(2, 'duan1nhom12', 'Duan1nhom12@', 'Dự Án 1 Nhóm 12', 'Trái đất', 'quyntph31502@fpt.edu.vn', 1234567890, 'avata.png', 1, 0),
(3, 'bao', '123', 'vuvanbao', 'hanoi', 'baovvph36087@fpt.edu.vn', 2147483647, 'Screenshot (896).png', 1, 0),
(4, 'bao123', '123', 'vuvanbao', '12321312', 'baovvph36087@fpt.edu.vn', 124121321, 'Screenshot (919).png', 2, 0),
(5, 'khachhang1', '123', 'hungbeti', 'hanoi', 'baovvph36087@fpt.edu.vn', 12312, 'Screenshot (931).png', 0, 0),
(6, 'khachhang2', '123', 'vuvanbao', 'hanoi', 'baovvph36087@fpt.edu.vn', 2131231, 'Screenshot (946).png', 0, 0);

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
  ADD PRIMARY KEY (`IdDonHang`),
  ADD KEY `lk_dh_tk` (`IdTaiKhoan`);

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
  ADD KEY `fk_gh_tk` (`IdTaiKhoan`),
  ADD KEY `fk_gh_ms` (`IdMauSac`),
  ADD KEY `fk_gh_sg` (`IdSizeGiay`);

--
-- Chỉ mục cho bảng `mausac`
--
ALTER TABLE `mausac`
  ADD PRIMARY KEY (`IdMauSac`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`IdSanPham`),
  ADD KEY `fk_sp_dm` (`iddm`);

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
  MODIFY `IdAnh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `IdBinhLuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `IdChiTietDonHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `idDanhMuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `IdDonHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6786;

--
-- AUTO_INCREMENT cho bảng `giay_bienthe`
--
ALTER TABLE `giay_bienthe`
  MODIFY `IdGiayBienThe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `IdGioHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT cho bảng `mausac`
--
ALTER TABLE `mausac`
  MODIFY `IdMauSac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `IdSanPham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `sizegiay`
--
ALTER TABLE `sizegiay`
  MODIFY `IdSizeGiay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `IdTaiKhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`IdTaiKhoan`) REFERENCES `taikhoan` (`IdTaiKhoan`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_taikhoan_binhluan` FOREIGN KEY (`IdTaiKhoan`) REFERENCES `taikhoan` (`IdTaiKhoan`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`IdDonHang`) REFERENCES `donhang` (`IdDonHang`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`IdSanPham`) REFERENCES `sanpham` (`IdSanPham`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `lk_dh_tk` FOREIGN KEY (`IdTaiKhoan`) REFERENCES `taikhoan` (`IdTaiKhoan`);

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
  ADD CONSTRAINT `fk_gh_ms` FOREIGN KEY (`IdMauSac`) REFERENCES `mausac` (`IdMauSac`),
  ADD CONSTRAINT `fk_gh_sg` FOREIGN KEY (`IdSizeGiay`) REFERENCES `sizegiay` (`IdSizeGiay`),
  ADD CONSTRAINT `fk_gh_sp` FOREIGN KEY (`IdSanPham`) REFERENCES `sanpham` (`IdSanPham`),
  ADD CONSTRAINT `fk_gh_tk` FOREIGN KEY (`IdTaiKhoan`) REFERENCES `taikhoan` (`IdTaiKhoan`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_sp_dm` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`idDanhMuc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
