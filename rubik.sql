-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 27, 2022 lúc 07:05 AM
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
  `hinh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_baiviet`
--

INSERT INTO `tbl_baiviet` (`baiviet_id`, `tenbaiviet`, `tomtat`, `noidung`, `danhmuctin_id`, `hinh`) VALUES
(1, 'Hướng dẫn xoay rubik 3x3x3 theo cách đơn giản nhất', '1 tháng trước', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1, 'bv1.jpg'),
(2, 'Hướng dẫn giải Rubik 2x2x2 chỉ trong 2 phút', '1 năm trước', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 2, 'bv2.jpg'),
(3, 'Các giai đoạn để trở thành 1 PRO rubik', '3 tháng trước', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 3, 'bv3.jpg'),
(4, 'Tổng hợp các mẫu Rubik rẻ nhất ngon nhất hiện nay', '1 tuần trước', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 4, 'bv4.jpg'),
(5, 'Các thương hiệu rubik nổi tiếng trên thế giới', '2 ngày trước', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 4, 'bn4.jpg');

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
(8, '8x8x8'),
(9, '9x9x9'),
(10, 'biến thể thường'),
(11, 'biến thể khó'),
(12, 'sticker-less'),
(13, 'carbon'),
(14, 'pyraminx'),
(15, 'megaminx');

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
(1, 1, 'Rubik 3x3x3 Moyu Weilong WR Có Nam Châm Cao Cấp Nhất', '', '', '600000', '550000', 1, 0, 0, 10, '33.jpg'),
(2, 1, 'Rubik 3x3x3 Mofang Jiaoshi Meilong Kết Nối Bluetooth Song Đấu Online', '', '', '156900', '150000', 0, 0, 0, 10, '4.png'),
(3, 1, 'Rubik 3x3x3 YJ Yuchuang V2 M Black Có Nam Châm Kết Nối Bluetooth Song Đấu Online', '', '', '156900', '150000', 0, 0, 0, 10, '6.png'),
(4, 1, 'Rubik 3x3x3 Moyu Weilong GTS 3M Có Nam Châm Cao Cấp', '', '', '950000', '834000', 0, 1, 0, 10, '33-1.jpg'),
(5, 1, 'Rubik 3x3x3 Dayan Zhanchi 57mm Color', '', '', '800000', '650000', 0, 0, 1, 10, '33-3.jpg'),
(6, 1, 'Rubik 3x3x3 Moyu Guoguan Yuexiao Cao Cấp Có Nam Châm Phiên Bản Giới Hạn', '', '', '300000', '150000', 0, 1, 0, 10, '33-4.jpg'),
(7, 1, 'Rubik 3x3x3 Gan Monster Go AI Có Nam Châm Cao Cấp. Kết Nối Bluetooth Song Đấu Online', '', '', '156900', '150000', 0, 0, 0, 10, '33-5.jpg'),
(8, 2, 'Rubik 2x2x2 Mofang Jiaoshi 50mm Trắng', '', '', '500000', '490000', 0, 0, 0, 10, '22-2.jpg'),
(9, 2, 'Keychain 2x2x2 Fanxin', '', '', '500000', '490000', 0, 0, 0, 10, '22-3.jpg'),
(10, 2, 'Keychain 2x2x2 Fanxin', '', '', '900000', '390000', 0, 0, 0, 10, '22-4.jpg'),
(11, 2, 'Keychain 2x2x2 xịn nhất', '', '', '900000', '690000', 0, 0, 0, 10, '22-5.jpg'),
(12, 2, '2x2x2 YongJun Yilong Có Nam Châm', '', '', '800000', '790000', 0, 1, 0, 10, '22-6.jpg'),
(13, 2, 'Biến Thể Hình 2x2x2 Keychain Tiger Yuxin', '', '', '810000', '690000', 0, 0, 0, 10, '22-1.jpg'),
(14, 2, '2x2x2 Yuxin Black Kirin V2 Stickerless', '', '', '800000', '790000', 0, 1, 0, 10, '22-7.jpg'),
(15, 4, 'Rubik 4x4x4 Yuxin Black Kirin V2 Stickerless', '', '', '900000', '490000', 1, 0, 0, 10, '44-Aosu-5-200x200.jpg'),
(16, 4, 'Rubik 4x4x4 Moyu Bochuang GT Pink Cao Cấp Rất Tốt. Phiên Bản Giới Hạn', '', '', '2700000', '1250000', 0, 0, 0, 10, 'CB-2345-P-3-380x380.jpg'),
(17, 4, 'Rubik 4x4x4 Mofang Jiaoshi Meilong Stickerless', '', '', '620000', '390000', 0, 0, 1, 10, '44-Aosu-6-200x200.jpg'),
(18, 4, 'Rubik 4x4x4 Qiyi Sail 65mm Đen', '', '', '600000', '590000', 0, 1, 0, 10, '44-Aosu-GTSM-5-200x200.jpg'),
(19, 4, 'Rubik 4x4x4 Moyu YanCong Deisgn Black Cao Cấp.Rất Tốt. Phiên Bản Giới Hạn', '', '', '600000', '590000', 0, 0, 1, 10, '44-QY-Sail-5-200x200.jpg'),
(20, 4, 'Rubik 4x4x4 Moyu YanCong Deisgn Black Cao Cấp.Rất Tốt. Phiên Bản Giới Hạn', '', '', '600000', '590000', 0, 0, 0, 10, '44-QY-Yuan-2-200x200.jpg'),
(21, 4, 'Rubik 4x4x4 Special Color 1 Very Hard', '', '', '400000', '390000', 1, 1, 0, 10, '44-Wuque-200x200.jpg'),
(22, 5, 'Rubik 5x5x5 meilong socker mirrow stickerless', '', '', '2900000', '4369999', 0, 0, 0, 10, '55-YX-BL-2-200x200.jpg'),
(23, 5, 'Rubik 5x5x5 Yuxin Black Kirin Stickerless', '', '', '1580000', '1450000', 1, 0, 0, 10, '55-AC-T-3-200x200.jpg'),
(24, 5, 'Rubik 5x5x5 Mofang Jiaoshi Meilong Stickerless', '', '', '2500000', '2369999', 0, 0, 1, 10, '55-Bochuang-2-Copy-200x200.jpg'),
(25, 5, '5x5x5 Yuxin Cloud Cực Tốt', '', '', '1700000', '1350000', 0, 0, 1, 10, '55-Bochuang-4-200x200.jpg'),
(26, 5, 'Rubik 5x5x5 Moyu Weichuang GTS White Cao Cấp', '', '', '5700000', '3250000', 1, 0, 0, 10, '55-Meilong-2-200x200.jpg'),
(27, 5, 'Rubik 5x5x5 Moyu AoChuang Transparent Cao Cấp', '', '', '4200000', '3250000', 0, 0, 1, 10, '55-Weichuang-4-200x200.jpg'),
(28, 5, 'Rubik 5x5x5 YJ Yuchuang V2 M Black Có Nam Châm', '', '', '4200000', '3250000', 0, 0, 0, 10, '55-Wushuang-3-e1631477886179-200x200.jpg'),
(29, 6, 'Rubik 6x6x6 Qiyi Wuhua V1 Đen Có Nam Châm Cao Cấp', '', '', '900000', '678000', 0, 0, 0, 10, '66-2.jpg'),
(30, 6, 'Rubik 6x6x6 Diansheng Stickerless', '', '', '200000', '150000', 1, 0, 0, 10, '66.jpg'),
(31, 6, 'Rubik 6x6x6 Mofang Jiaoshi Stickerless', '', '', '200000', '150000', 0, 0, 0, 10, '66-QY-S-4-200x200.jpg'),
(32, 6, 'Rubik 6x6x6 Qiyi Wuhua V1 Trắng Cao Cấp', '', '', '200000', '150000', 0, 0, 0, 10, '66-DS-3-200x200.jpg'),
(33, 6, 'Rubik 6x6x6 Qiyi Wuhua V1 Đen Cao Cấp', '', '', '210000', '150000', 0, 0, 0, 10, 'Carbon4.jpg'),
(34, 6, 'Rubik 6x6x6 Qiyi Wuhua V2 Stickerless Cao Cấp', '', '', '345000', '256000', 0, 0, 0, 10, '66-Wuhua-T-1-200x200.jpg'),
(35, 6, 'Rubik 6x6x6 Diansheng Stickerless Có Nam Châm', '', '', '200000', '178000', 0, 0, 0, 10, '66-1.jpg'),
(36, 7, 'Rubik 7x7x7 Diansheng Stickerless', '', '', '200000', '150000', 0, 0, 0, 10, '77-DS-5-200x200.jpg'),
(37, 7, 'Rubik 7x7x7 Moyu Aofu Milky Cao Cấp Phiên Bản Giới Hạn', '', '', '300000', '150000', 0, 0, 0, 10, '77-Aofu-4-e1631477966883-200x200.jpg'),
(38, 7, 'Rubik 7x7x7 Qiyi Wuji Cao Cấp Stickerless', '', '', '300000', '50000', 0, 0, 0, 10, 'QY-777-WuJi-06-200x200.jpg'),
(39, 7, 'Rubik 7x7x7 Qiyi Wuji Cao Cấp Đen', '', '', '700000', '350000', 0, 0, 0, 10, 'QY-777-WuJi-04-200x200.jpg'),
(40, 7, 'Rubik 7x7x7 Moyu Aofu TranSparent Phiên Bản Giới Hạn', '', '', '300000', '289000', 0, 0, 0, 10, '77-MY-AF-1-200x200.jpg'),
(41, 7, 'Rubik 7x7x7 Qiyi Wuji Cao Cấp Stickerless Có Nam Châm Rất Tốt', '', '', '900000', '750000', 0, 0, 0, 10, '77-MY-AF-4-200x200.jpg'),
(42, 8, 'Rubik MofangJiaoshi Meilong 8x8x8 Stickerless - SP003911', '', '', '200000', '150000', 0, 0, 0, 10, '88-1.jpg'),
(43, 8, 'Rubik YuXin Little Magic 8x8x8 stickerless - SP005178', '', '', '555000', '350000', 0, 0, 0, 10, '88-2.jpg'),
(44, 8, 'Rubik 8x8 QiYi 8x8x8 Stickerless', '', '', '200000', '150000', 0, 0, 0, 10, '88-3.jpg'),
(45, 8, 'Rubik MofangJiaoshi MF8 8x8x8 - SP003910', '', '', '800000', '750000', 0, 0, 0, 10, '88-4.jpg'),
(46, 8, 'Rubik YuXin Huanglong 8x8x8(SP000358)', '', '', '200000', '150000', 0, 0, 0, 10, '88-5.jpg'),
(47, 8, 'Rubik 8x8x8 Sliver dễ chơi, phù hợp mọi lứa tuổi', '', '', '200000', '150000', 0, 0, 0, 10, '88-6.jpg'),
(48, 9, ' Rubik Mofangjiaoshi Meilong 9x9 stickerless - SP005325', '', '', '95000', '55000', 0, 0, 0, 0, '99-2.jpg'),
(49, 9, 'Rubik 9x9x9 Spinner Quả Bóng Tròn Siêu Biến Thể Rubik Rainbow Ball Magic Ball YJ YongJun Siêu Xịn Rubik bóng', '', '', '99000', '95000', 0, 0, 0, 12, '99-3.jpg'),
(50, 9, 'Rubik 9x9x9 hình quốc kỳ Bằng nhựa rất đẹp', '', '', '69000', '65000', 0, 0, 0, 34, '99-4.jpg'),
(51, 9, 'Rubik YuXin Huanglong 9x9x9(SP000358)', '', '', '4200000', '3250000', 0, 0, 0, 10, '99-1.jpg'),
(52, 9, 'RuBik 9x9x9 YuXin Huanglong ', '', '', '56000', '55000', 0, 0, 0, 0, '99-5.jpg'),
(53, 9, 'Rubik YuXin Huanglong 9x9x9 Stickerless (YX9901)', '', '', '95000', '90000', 0, 0, 0, 10, '99-6.jpg'),
(54, 10, 'Biến thể Rubik GAN Skewb M Stickerless -SP006339', 'rẻ', 'rubik loại tốt', '55550', '49000', 0, 0, 0, 10, 'bt-13.jpg'),
(55, 10, 'Rubik sticker_less', '', '', '4200000', '3250000', 0, 0, 0, 10, 'stickerless1.jpg'),
(56, 10, 'Biến thể Rubik MoFangJiaoShi 3x3 ', '', '', '59650', '55000', 0, 0, 0, 10, 'bt-12.jpg'),
(57, 10, 'Biến thể 3x3x3 màu xanh', '', '', '123456', '999999', 0, 0, 0, 12, 'bt-6.jpg'),
(58, 10, 'Biến thể 3x3x3 màu đỏ', '', 'hihi', '980000', '800000', 0, 0, 0, 50, 'bt-7.jpg'),
(59, 10, 'Rubik QiYi X Cube Stickerless - SP004490 Rubic Biến Thể Stickerless', '', '', '123456', '85000', 0, 0, 0, 50, 'bt4.jpg'),
(60, 11, 'Đồ chơi Rubik Mirror Vietcube VC6M01 Biến thể Khối Lập Phương WiYi Không Viền, Đồ Chơi Trí Tuệ Cao Cấp', '', '', '123456', '36000', 0, 0, 0, 50, 'bt-1.jpg'),
(61, 11, 'Rubik biến thể Khối Lập Phương 3x3x3 Đồ Chơi Thông Minh (Màu Đen/ Trắng)', '', '', '963333', '56000', 0, 0, 0, 50, 'bt-2.jpg'),
(62, 11, 'Rubik 3x3 QiYi Sail W Rubic 3 Tầng Biến thể Khối Lập Phương 3x3x3 Đồ Chơi Thông Minh (Màu Đen/ Trắng)', 'sang', 'đẹp', '123000', '99000', 0, 0, 0, 50, 'bt-3.jpg'),
(63, 11, 'Biến thể Đồ chơi Rubik Mirror Vietcube VC6M01', '', '', '200000', '150000', 0, 0, 0, 10, 'bt-4.jpg'),
(64, 11, 'Biến thể Rubik ZCube Helicopter (P0000252)', '', '', '200000', '150000', 0, 0, 0, 10, 'bt-9.jpg'),
(65, 11, 'Rubik biến thể YongJun Heart Transparent White', '', '', '4200000', '3350000', 0, 0, 0, 10, 'bt-11.jpg'),
(66, 12, 'Rubik  stickerless 4x4x4 YongJun Heart Transparent White', '', '', '793000', '411000', 0, 0, 0, 0, 'stickerless1.jpg'),
(67, 12, 'Rubik stickerless 5x5x5  YongJun Heart Transparent White', '', '', '793000', '411000', 0, 0, 0, 0, 'stickerless2.jpg'),
(68, 12, 'Rubik stickerless 3x3x3 YongJun Heart Transparent White', '', '', '793000', '611000', 0, 0, 0, 0, 'stickerless3.jpg'),
(69, 12, 'Rubik stickerless 3x3x3  Qiyi Warrio S stickerless1 Orange', '', '', '293000', '111000', 0, 0, 0, 0, 'stickerless4.jpg'),
(70, 12, 'Rubik stickerless 4x4  Qiyi Warrio X stickerless1 White', '', '', '293000', '111000', 0, 0, 0, 0, 'stickerless5.jpg'),
(71, 12, 'Rubik stickerless 3x3x3  Qiyi Warrio S stickerless1 White', '', '', '233000', '211000', 0, 0, 0, 0, 'stickerless6.jpg'),
(72, 13, 'Devil Carbon', '', '', '690000', '411000', 0, 0, 0, 0, 'Color4.jpg'),
(73, 13, 'Rubik 5x5x5 Yuxin Carbon', '', '', '1120000', '950000', 0, 0, 0, 0, 'Carbon4.jpg'),
(74, 13, 'Clover Carbon', '', '', '550000', '411000', 0, 0, 0, 0, 'Color3.jpg'),
(75, 13, 'Megaminx Carbon Yuxin', '', '', '950000', '367000', 0, 0, 0, 0, 'Color2.jpg'),
(76, 13, 'Rubik 4x4x4 Yuxin Carbon', '', '', '793000', '750000', 0, 0, 0, 0, 'Carbon6.jpg'),
(77, 13, 'Rubik 3x3x3 Yuxin Carbon', '', '', '852000', '411000', 0, 0, 0, 0, 'Color1.jpg'),
(78, 14, 'Rubik pyraminx Qiyi Warrio S stickerless1 White', '', '', '233000', '211000', 0, 0, 0, 0, 'pyraminx1.jpg'),
(79, 14, 'Rubik pyraminx  Qiyi Warrio X stickerless1 White', '', '', '233000', '211000', 0, 0, 0, 0, 'pyraminx2.jpg'),
(80, 14, 'Rubik pyraminx Đồ Chơi Thông Minh (Màu Đen/ Trắng)', '', '', '233000', '211000', 0, 0, 0, 0, 'pyraminx3.jpg'),
(81, 14, 'Rubik pyraminx  W Rubic 3 Tầng Biến thể Khối Lập Phương 3x3x3 Đồ Chơi Thông Minh', '', '', '233000', '211000', 0, 0, 0, 0, 'pyraminx4.jpg'),
(82, 14, 'Rubik pyraminx ZCube Helicopter (P0000252)', '', '', '233000', '211000', 0, 0, 0, 0, 'pyraminx5.jpg'),
(83, 14, 'Rubik pyraminx  SQ1 stickerless (SP002943)', '', '', '233000', '211000', 0, 0, 0, 0, 'pyraminx6.jpg'),
(84, 14, 'Rubik pyraminx  X Cube Stickerless - SP004490 Rubic Biến Thể Stickerless', '', '', '233000', '211000', 0, 0, 0, 0, 'megaminx-1.jpg'),
(85, 15, 'Rubik megaminx YongJun Heart Transparent White', '', '', '233000', '211000', 0, 0, 0, 0, 'megaminx-2.jpg'),
(86, 15, 'Rubik megaminx Qiyi Warrio X stickerless1 White', '', '', '233000', '211000', 0, 0, 0, 0, '2.png'),
(87, 15, 'Rubik megaminx SQ1 stickerless (SP002943)', '', '', '233000', '211000', 0, 0, 0, 0, 'megaminx-3.jpg'),
(88, 15, 'Rubik megaminx ZCube Helicopter (P0000252)', '', '', '233000', '211000', 0, 0, 0, 0, '8.png'),
(89, 15, 'Rubik megaminx Rubik ZCube Helicopter (P0000252)', '', '', '233000', '211000', 0, 0, 0, 0, 'stickerless4.jpg'),
(90, 15, 'Rubik megaminx Qiyi Warrio S stickerless1 White', '', '', '233000', '211000', 0, 0, 0, 0, 'special-Color-4-200x200.jpg'),
(91, 15, 'Rubik Megaminx Carbon Yuxin', '', '', '233000', '211000', 0, 0, 0, 0, 'megaminx-4.jpg');

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
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `giohang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=236;

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
