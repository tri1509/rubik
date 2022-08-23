-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 22, 2022 lúc 10:57 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `rubik`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_baiviet`
--

CREATE TABLE `tbl_baiviet` (
  `baiviet_id` int(11) NOT NULL,
  `tenbaiviet` varchar(100) NOT NULL,
  `tomtat` text NOT NULL,
  `noidung` text NOT NULL,
  `danhmuctin_id` int(11) NOT NULL,
  `baiviet_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_baiviet`
--

INSERT INTO `tbl_baiviet` (`baiviet_id`, `tenbaiviet`, `tomtat`, `noidung`, `danhmuctin_id`, `baiviet_image`) VALUES
(1, 'Bài 1 : Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1, 'a4.jpg'),
(2, 'Bài 2: Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 2, 'm3.jpg'),
(3, 'Bài 3: Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 3, 'k2.jpg'),
(4, 'Bài 4 :Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 4, 'b4.jpg'),
(5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Bài 5 : Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 4, 'm8.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(1, '3x3x3'),
(2, '2x2x2'),
(4, '4x4x4'),
(5, '5x5x5'),
(6, '6x6x6'),
(7, '7x7x7'),
(8, 'biến thể'),
(9, 'sticker'),
(10, 'sticker-less'),
(11, 'nam châm'),
(12, 'color'),
(13, 'carbon');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_donhang`
--

CREATE TABLE `tbl_donhang` (
  `donhang_id` int(11) NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `mahang` varchar(50) NOT NULL,
  `khachhang_id` int(11) NOT NULL,
  `ngaythang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tinhtrang` int(11) NOT NULL,
  `huydon` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giaodich`
--

CREATE TABLE `tbl_giaodich` (
  `giaodich_id` int(11) NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `magiaodich` varchar(50) NOT NULL,
  `ngaythang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `khachhang_id` int(11) NOT NULL,
  `tinhtrangdon` int(11) NOT NULL DEFAULT 0,
  `huydon` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giohang`
--

CREATE TABLE `tbl_giohang` (
  `giohang_id` int(11) NOT NULL,
  `tensanpham` varchar(100) NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `giasanpham` varchar(50) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_header`
--

CREATE TABLE `tbl_header` (
  `logo` varchar(10) NOT NULL,
  `category_img` varchar(10) NOT NULL,
  `giairubik` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_header`
--

INSERT INTO `tbl_header` (`logo`, `category_img`, `giairubik`) VALUES
('logo.png', 'nocart.png', 'giairubik.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khachhang`
--

CREATE TABLE `tbl_khachhang` (
  `khachhang_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `note` text NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `giaohang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_khachhang`
--

INSERT INTO `tbl_khachhang` (`khachhang_id`, `name`, `phone`, `address`, `note`, `email`, `password`, `giaohang`) VALUES
(12, 'Lý Thanh Sơn', '0932023992', '123/123', 'Sơn', 'son@gmail.com', '123', 1),
(13, 'Nguyễn Thanh Sang', '01694494813', '123/123', 'Gymer', 'sang@gmail.com', '123', 1),
(14, 'Mai Bá Triệu', '0932023992', '123/123', 'hacker', 'trieu@gmail.com', '123', 1),
(15, 'Sơn Chiến', '0932023992', '123/123', 'coder', 'chien123@gmail.com', '123', 1),
(16, 'Trần Trường Thịnh', '0932023992', '123/123', 'hacker', 'thinh456@gmail.com', '123', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `sanpham_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sanpham_name` varchar(255) NOT NULL,
  `sanpham_chitiet` text NOT NULL,
  `sanpham_mota` text NOT NULL,
  `sanpham_gia` varchar(100) NOT NULL,
  `sanpham_giakhuyenmai` varchar(100) NOT NULL,
  `sanpham_noibat` int(11) NOT NULL,
  `sanpham_moi` int(11) NOT NULL,
  `sanpham_banchay` int(10) NOT NULL,
  `sanpham_soluong` int(11) NOT NULL,
  `hinh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`sanpham_id`, `category_id`, `sanpham_name`, `sanpham_chitiet`, `sanpham_mota`, `sanpham_gia`, `sanpham_giakhuyenmai`, `sanpham_noibat`, `sanpham_moi`, `sanpham_banchay`, `sanpham_soluong`, `hinh`) VALUES
(1, 1, 'Rubik 3x3x3 Moyu Weilong WR Có Nam Châm Cao Cấp Nhất', '', '', '600000', '550000', 1, 0, 0, 10, 'conten1.jpg'),
(2, 1, 'Rubik 3x3x3 Moyu Weilong GTS 3M Có Nam Châm Cao Cấp', '', '', '950000', '834000', 0, 1, 0, 10, 'conten2.jpg'),
(3, 1, 'Rubik 3x3x3 WRM 2021 Có Nam Châm Điều Chỉnh Cao Cấp Nhất', '', '', '650000', '530000', 0, 1, 0, 10, 'conten3.jpg'),
(4, 1, 'Rubik 3x3x3 Dayan Zhanchi 57mm Color', '', '', '800000', '650000', 0, 0, 1, 10, 'conten4.jpg'),
(5, 1, 'Rubik 3x3x3 Moyu Guoguan Yuexiao Cao Cấp Có Nam Châm Phiên Bản Giới Hạn', '', '', '300000', '150000', 0, 1, 0, 10, 'conten5.jpg'),
(6, 1, 'Rubik 3x3x3 Gan Monster Go AI Có Nam Châm Cao Cấp. Kết Nối Bluetooth Song Đấu Online', '', '', '156900', '150000', 0, 0, 0, 10, 'conten6.jpg'),
(7, 2, 'Biến Thể Hình 2x2x2 Keychain Tiger Yuxin', '', '', '810000', '690000', 0, 0, 0, 10, 'conten7.jpg'),
(8, 2, 'Rubik 2x2x2 Mofang Jiaoshi 50mm Trắng', '', '', '500000', '490000', 0, 0, 0, 10, 'conten8.jpg'),
(9, 2, 'Keychain 2x2x2 Fanxin', '', '', '500000', '490000', 0, 0, 0, 10, 'conten9.jpg'),
(10, 2, 'Keychain 2x2x2 Fanxin', '', '', '900000', '390000', 0, 0, 0, 10, 'conten10.jpg'),
(11, 2, 'Keychain 2x2x2 xịn nhất', '', '', '900000', '690000', 0, 0, 0, 10, 'conten11.jpg'),
(12, 2, '2x2x2 YongJun Yilong Có Nam Châm', '', '', '800000', '790000', 0, 1, 0, 10, 'conten12.jpg'),
(45, 4, 'Rubik 4x4x4 Yuxin Black Kirin V2 Stickerless', '', '', '900000', '490000', 1, 0, 0, 10, '44-Aosu-5-200x200.jpg'),
(46, 4, 'Rubik 4x4x4. Mofang Jiaoshi Meilong Stickerless', '', '', '620000', '390000', 0, 0, 1, 10, '44-Aosu-6-200x200.jpg'),
(47, 4, 'Rubik 4x4x4 Qiyi Sail 65mm Đen', '', '', '600000', '590000', 0, 1, 0, 10, '44-Aosu-GTSM-5-200x200.jpg'),
(48, 4, 'Rubik 4x4x4 Moyu YanCong Deisgn Black Cao Cấp.Rất Tốt. Phiên Bản Giới Hạn', '', '', '600000', '590000', 0, 0, 1, 10, '44-QY-Sail-5-200x200.jpg'),
(49, 4, 'Rubik 4x4x4 Moyu YanCong Deisgn Black Cao Cấp.Rất Tốt. Phiên Bản Giới Hạn', '', '', '600000', '590000', 0, 0, 0, 10, '44-QY-Yuan-2-200x200.jpg'),
(50, 4, 'Rubik 4x4x4 Special Color 1 Very Hard', '', '', '400000', '390000', 1, 1, 0, 10, '44-Wuque-200x200.jpg'),
(51, 5, 'Rubik 5x5x5 Yuxin Black Kirin Stickerless', '', '', '1580000', '1450000', 1, 0, 0, 10, '55-AC-T-3-200x200.jpg'),
(52, 5, 'Rubik 5x5x5 Mofang Jiaoshi Meilong Stickerless', '', '', '2500000', '2369999', 0, 0, 1, 10, '55-Bochuang-2-Copy-200x200.jpg'),
(53, 5, '5x5x5 Yuxin Cloud Cực Tốt', '', '', '1700000', '1350000', 0, 0, 1, 10, '55-Bochuang-4-200x200.jpg'),
(54, 5, 'Rubik 5x5x5 Moyu Weichuang GTS White Cao Cấp', '', '', '5700000', '3250000', 1, 0, 0, 10, '55-Meilong-2-200x200.jpg'),
(55, 4, 'Rubik 4x4x4 Moyu Bochuang GT Pink Cao Cấp Rất Tốt. Phiên Bản Giới Hạn', '', '', '2700000', '1250000', 0, 0, 0, 10, 'CB-2345-P-3-380x380.jpg'),
(56, 5, 'Rubik 5x5x5 Moyu AoChuang Transparent Cao Cấp', '', '', '4200000', '3250000', 0, 0, 1, 10, '55-Weichuang-4-200x200.jpg'),
(57, 5, 'Rubik 5x5x5 YJ Yuchuang V2 M Black Có Nam Châm', '', '', '4200000', '3250000', 0, 0, 0, 10, '55-Wushuang-3-e1631477886179-200x200.jpg'),
(58, 6, 'Rubik 6x6x6 Diansheng Stickerless', '', '', '200000', '150000', 1, 0, 0, 10, '66.jpg'),
(59, 6, 'Rubik 6x6x6 Mofang Jiaoshi Stickerless', '', '', '200000', '150000', 0, 0, 0, 10, '66-QY-S-4-200x200.jpg'),
(60, 6, 'Rubik 6x6x6 Qiyi Wuhua V1 Trắng Cao Cấp', '', '', '200000', '150000', 0, 0, 0, 10, '66-DS-3-200x200.jpg'),
(61, 6, 'Rubik 6x6x6 Qiyi Wuhua V1 Đen Cao Cấp', '', '', '210000', '150000', 0, 0, 0, 10, '66-MF6-3-200x200.jpg'),
(62, 6, 'Rubik 6x6x6 Qiyi Wuhua V2 Stickerless Cao Cấp', '', '', '345000', '256000', 0, 0, 0, 10, '66-Wuhua-T-1-200x200.jpg'),
(63, 6, 'Rubik 6x6x6 Diansheng Stickerless Có Nam Châm', '', '', '200000', '178000', 0, 0, 0, 10, '66-Yushi-1-200x200.jpg'),
(64, 7, 'Rubik 7x7x7 Diansheng Stickerless', '', '', '200000', '150000', 0, 0, 0, 10, '77-DS-5-200x200.jpg'),
(65, 7, 'Rubik 7x7x7 Moyu Aofu Milky Cao Cấp Phiên Bản Giới Hạn', '', '', '300000', '150000', 0, 0, 0, 10, '77-Aofu-4-e1631477966883-200x200.jpg'),
(66, 7, 'Rubik 7x7x7 Qiyi Wuji Cao Cấp Stickerless', '', '', '300000', '50000', 0, 0, 0, 10, 'QY-777-WuJi-06-200x200.jpg'),
(67, 7, 'Rubik 7x7x7 Qiyi Wuji Cao Cấp Đen', '', '', '700000', '350000', 0, 0, 0, 10, 'QY-777-WuJi-04-200x200.jpg'),
(68, 7, 'Rubik 7x7x7 Moyu Aofu TranSparent Phiên Bản Giới Hạn', '', '', '300000', '289000', 0, 0, 0, 10, '77-MY-AF-1-200x200.jpg'),
(69, 7, 'Rubik 7x7x7 Qiyi Wuji Cao Cấp Stickerless Có Nam Châm Rất Tốt', '', '', '900000', '750000', 0, 0, 0, 10, '77-MY-AF-4-200x200.jpg'),
(70, 8, 'Biến Thể Hình Basketball Blue', '', '', '200000', '150000', 0, 0, 0, 10, 'bt1.jpg'),
(71, 8, 'Unequal 3x3x3 YongJun Đỏ', '', '', '555000', '350000', 0, 0, 0, 10, 'bt2.jpg'),
(72, 8, 'Unequal 3x3x3 YongJun Xanh lá', '', '', '200000', '150000', 0, 0, 0, 10, 'bt3.jpg'),
(73, 8, 'Unequal 3x3x3 YongJun Cam', '', '', '800000', '750000', 0, 0, 0, 10, 'bt4.jpg'),
(74, 8, 'Rubik Magic Ball Black', '', '', '200000', '150000', 0, 0, 0, 10, 'bt5.jpg'),
(75, 8, 'Mirror 3x3x3 Sliver dễ chơi, phù hợp mọi lứa tuổi', '', '', '200000', '150000', 0, 0, 0, 10, 'bt6.jpg'),
(77, 9, 'Rubik sticker', '', '', '4200000', '3250000', 0, 0, 0, 10, 'sticker1.jpg'),
(44, 11, 'Rubik nam châm', '', '', '4200000', '3350000', 0, 0, 0, 10, 'namcham1.jpg'),
(43, 10, 'Rubik sticker_less', '', '', '4200000', '3250000', 0, 0, 0, 10, 'stickerless1.jpg'),
(42, 1, '3x3x3 Yuxin Cloud Có Nam Châm Cực Kì Tốt', '', '', '200000', '950000', 0, 0, 0, 10, '33-DY-ZC-1-380x380.jpg'),
(41, 5, 'Rubik 5x5x5 meilong socker mirrow stickerless', '', '', '2900000', '4369999', 0, 0, 0, 10, '55-YX-BL-2-200x200.jpg'),
(40, 6, 'Rubik 6x6x6 Qiyi Wuhua V1 Đen Có Nam Châm Cao Cấp', '', '', '900000', '678000', 0, 0, 0, 10, '666_010144-200x200.jpg'),
(39, 11, 'Magic-3-1-200x200', '', '', '200000', '150000', 0, 0, 0, 10, 'Magic-3-1-200x200.jpg'),
(38, 11, 'Keychain Penrose Fanxin', '', '', '200000', '150000', 0, 0, 0, 10, 'Penrose-KC-FX-2-1-200x200.jpg'),
(37, 12, 'Rubik 3x3x3 Qiyi Warrio S Color White', '', '', '233000', '211000', 0, 0, 0, 0, 'Color1.jpg'),
(36, 12, 'Rubik 4x4 Qiyi Warrio X Color White', '', '', '293000', '111000', 0, 0, 0, 0, 'Color2.jpg'),
(35, 12, 'Rubik 3x3x3 Qiyi Warrio S Color Orange', '', '', '293000', '111000', 0, 0, 0, 0, 'Color3.jpg'),
(34, 12, 'Rubik 3x3x3 YongJun Heart Transparent White', '', '', '793000', '611000', 0, 0, 0, 0, 'Color4.jpg'),
(33, 12, 'Rubik 5x5x5 YongJun Heart Transparent White', '', '', '793000', '411000', 0, 0, 0, 0, 'Color5.jpg'),
(32, 12, 'Rubik 4x4x4 YongJun Heart Transparent White', '', '', '793000', '411000', 0, 0, 0, 0, 'Color6.jpg'),
(31, 13, 'Rubik 3x3x3 Yuxin Carbon', '', '', '793000', '411000', 0, 0, 0, 0, 'Carbon1.jpg'),
(30, 13, 'Rubik 4x4x4 Yuxin Carbon', '', '', '793000', '411000', 0, 0, 0, 0, 'Carbon6.jpg'),
(29, 13, 'Megaminx Carbon Yuxin', '', '', '793000', '411000', 0, 0, 0, 0, 'Carbon3.jpg'),
(28, 13, 'Clover Carbon', '', '', '793000', '411000', 0, 0, 0, 0, 'Carbon2.jpg'),
(27, 13, 'Rubik 5x5x5 Yuxin Carbon', '', '', '793000', '411000', 0, 0, 0, 0, 'Carbon4.jpg'),
(26, 13, 'Devil Carbon', '', '', '793000', '411000', 0, 0, 0, 0, 'Carbon5.jpg'),
(25, 11, 'Rubik 3x3 QiYi Sail W Rubic 3 Tầng Khối Lập Phương 3x3x3 Đồ Chơi Thông Minh (Màu Đen/ Trắng)', 'sang', 'đẹp', '123000', '99000', 0, 0, 0, 50, 'namcham3.jpg'),
(24, 11, 'Rubik nam châm 3 Tầng Khối Lập Phương 3x3x3 Đồ Chơi Thông Minh (Màu Đen/ Trắng)', '', '', '963333', '56000', 0, 0, 0, 50, 'namcham4.jpg'),
(23, 11, 'RuBik 2 Tầng, Rubik 2x2 Khối Lập Phương WiYi Không Viền, Đồ Chơi Trí Tuệ Cao Cấp', '', '', '123456', '36000', 0, 0, 0, 50, 'namcham5.jpg'),
(22, 9, 'RuBik Stiker Khối Lập Phương', '', '', '95000', '90000', 0, 0, 0, 10, 'namcham6.jpg'),
(21, 9, 'RuBik Đường Chéo, Rubik 6 Mặt Biến Thể Skewb WiYi Cube Viền Đen, Phát Triễn IQ Cao Cấp ( Black )', '', '', '56000', '55000', 0, 0, 0, 0, 'sticker3.jpg'),
(20, 9, 'Rubik 3*3 hình quốc kỳ Bằng nhựa rất đẹp', '', '', '69000', '65000', 0, 0, 0, 34, 'sticker4.jpg'),
(19, 9, 'Rubik Spinner Quả Bóng Tròn Siêu Biến Thể Rubik Rainbow Ball Magic Ball YJ YongJun Siêu Xịn Rubik bóng', '', '', '99000', '95000', 0, 0, 0, 12, 'sticker5.jpg'),
(18, 9, ' Ball YJ YongJun Siêu Xịn Rubik bóng', '', '', '95000', '55000', 0, 0, 0, 0, 'sticker6.jpg'),
(17, 10, 'Bộ Sưu Tập Rubik MoYu Macaron 2x2 3x3 4x4 5x5 Pyraminx Rubic Biến Thể Stickerless', '', '', '123456', '85000', 0, 0, 0, 50, 'stickerless2.jpg'),
(16, 10, 'Rubik 3x3 Moyu Meilong 3 MFJS Rubic 3 Tầng Stickerless', '', 'hihi', '980000', '800000', 0, 0, 0, 50, 'stickerless3.jpg'),
(15, 10, 'Đồ Chơi Rubik 3x3 YJ8366E', '', '', '123456', '999999', 0, 0, 0, 12, 'stickerless4.jpg'),
(14, 10, 'rubik không có dán nhãn', '', '', '59650', '55000', 0, 0, 0, 10, 'stickerless5.jpg'),
(13, 10, 'Rubik sticker less giá rẻ', 'rẻ', 'rubik loại tốt', '55550', '49000', 0, 0, 0, 10, 'stickerless6.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  ADD PRIMARY KEY (`baiviet_id`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  ADD PRIMARY KEY (`donhang_id`);

--
-- Chỉ mục cho bảng `tbl_giaodich`
--
ALTER TABLE `tbl_giaodich`
  ADD PRIMARY KEY (`giaodich_id`);

--
-- Chỉ mục cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  ADD PRIMARY KEY (`giohang_id`);

--
-- Chỉ mục cho bảng `tbl_header`
--
ALTER TABLE `tbl_header`
  ADD PRIMARY KEY (`category_img`);

--
-- Chỉ mục cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  ADD PRIMARY KEY (`khachhang_id`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`sanpham_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  MODIFY `baiviet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  MODIFY `donhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `tbl_giaodich`
--
ALTER TABLE `tbl_giaodich`
  MODIFY `giaodich_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  MODIFY `giohang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;

--
-- AUTO_INCREMENT cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  MODIFY `khachhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `sanpham_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
