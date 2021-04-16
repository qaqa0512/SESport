-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 8, 2019 at 09:04 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
CREATE DATABASE SEsport;
USE SEsport;
--


-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `madonhang` int(11) NOT NULL,
  `anhspdat` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tenspdat` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `sizedat` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `soluongdat` int(11) NOT NULL,
  `dongia` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  KEY `madonhang` (`madonhang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`madonhang`, `anhspdat`, `tenspdat`, `sizedat`, `soluongdat`, `dongia`, `thanhtien`) VALUES
(69, 'Ao-barca-san-nha-1-3-300x300.jpg', 'Barcelona 19/20', 'L', 2, 220.000, 440.000),
(70, 'Ao-mexico-san-nha-1-300x300.jpg', 'Áo Mexico', 'XL', 2, 130.000, 260.000),
(71, 'Ao-liverpool-san-nha-1-3-300x300.jpg', 'Liverpool 19/20', 'M', 1, 170.000, 170.000),
(72, 'Ao-psg-san-nha-1-1-300x300.jpg', 'PSG 19/20', '2', 2, 130.000, 260.000);

-- --------------------------------------------------------

--
-- Table structure for table `chucvu`
--

CREATE TABLE `chucvu` (
  `machucvu` int(11) NOT NULL AUTO_INCREMENT,
  `tenchucvu` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`machucvu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3;

--
-- Dumping data for table `chucvu`
--

INSERT INTO `chucvu` (`machucvu`, `tenchucvu`) VALUES
(1, 'Quản trị viên'),
(2, 'Thành viên');

-- --------------------------------------------------------

--
-- Table structure for table `danhmucsanpham`
--

CREATE TABLE `danhmucsanpham` (
  `madanhmuc` int(11) NOT NULL AUTO_INCREMENT,
  `tendanhmuc` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`madanhmuc`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `danhmucsanpham`
--

INSERT INTO `danhmucsanpham` (`madanhmuc`, `tendanhmuc`) VALUES
(2, 'Áo Câu Lạc Bộ'),
(3, 'Áo Đội Tuyển'),
(4, 'Giày Bóng Đá'),
(5, 'Găng Tay'),
(6, 'Mũ Thể Thao'),
(7, 'Băng Bảo Hộ'),
(8, 'Vớ Thể Thao');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `madonhang` int(11) NOT NULL AUTO_INCREMENT,
  `ngaydathang` datetime NOT NULL,
  `makhachhang` int(11) NOT NULL,
  `masanpham` int(11) NOT NULL,
  PRIMARY KEY (`madonhang`),
  KEY `makhachhang` (`makhachhang`),
  KEY `masanpham` (`masanpham`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=75 ;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`madonhang`, `ngaydathang`, `makhachhang`, `masanpham`) VALUES
(69, '2019-8-13 19:37:48', 75, 6),
(70, '2019-6-4 19:38:24', 76, 17),
(71, '2019-1-18 20:19:43', 77, 4),
(72, '2019-10-23 20:23:44', 78, 9);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `makhachhang` int(11) NOT NULL AUTO_INCREMENT,
  `tenkhachhang` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ghichu` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`makhachhang`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=81 ;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`makhachhang`, `tenkhachhang`, `diachi`, `dienthoai`, `ghichu`) VALUES
(75, 'Nguyễn Thanh Hào', 'Vũ Tùng, Quận Bình Thạnh TpHCM', '123456789', 'mua hết shop'),
(76, 'Nguyễn Quốc Anh', '8/15 Quận 7 TpHCM', '1133222111', 'mua 100 cái'),
(77, 'Lê Hoàng Huy Nam', '21 Quảng Châu , Trung Quốc', '0123456789', 'mua thiếu'),
(78, 'Nguyễn Hoàng Công Duy', '82/15 Bắc Kinh , Trung Quốc', '012441212111', 'ship qua bên trung quốc'),
(79, 'Nguyễn Khánh Duy', 'Biên Hòa , Đồng Nai', '523554542', 'ship về Biên Hòa'),
(80, 'Y Long Niê Kdăm', 'Daklak , VietNam', '4256871312', 'mua 200 cái');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` int(11) NOT NULL AUTO_INCREMENT,
  `madanhmuc` int(11) NOT NULL,
  `tensp` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `giacu` float NOT NULL,
  `gia` float NOT NULL,
  `anh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tinhtrang` int(11) NOT NULL COMMENT '1 là con, 0 là hết',
  PRIMARY KEY (`masp`),
  KEY `madanhmuc` (`madanhmuc`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=56 ;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`masp`, `madanhmuc`, `tensp`, `size`, `mota`, `giacu`, `gia`, `anh`, `tinhtrang`) VALUES
(1, 2, 'LA Galaxy 19/20', 'M,L,XL,XXL', 'LA Galaxy 19/20' ,120.000, 90.000, 'Ao-la-galaxy-san-nha-1-300x300 (1).png', 1),
(2, 2, 'Tottenham 19/20', 'M,L,XL,XXL', 'Tottenham 19/20' ,140.000, 120.000, 'Ao-tottenham-san-nha-1-300x300.jpg', 1),
(3, 2, 'Dortmund 19/20', 'M,L,XL,XXL', 'Dortmund 19/20' ,130.000, 110.000, 'Ao-dortmund-mau-ba-1-300x300.jpg', 1),
(4, 2, 'Liverpool 19/20', 'M,L,XL,XXL', 'Liverpool 19/20' ,190.000, 170.000, 'Ao-liverpool-san-nha-1-3-300x300.jpg', 1),
(5, 2, 'Chelsea 19/20', 'M,L,XL,XXL', 'Chelsea 19/20' ,140.000, 120.000, 'Ao-chelsea-san-nha-1-2-300x300.jpg', 1),
(6, 2, 'Barcelona 19/20', 'M,L,XL,XXL', 'Barcelona 19/20' ,250.000, 220.000, 'Ao-barca-san-nha-1-3-300x300.jpg', 1),
(7, 2, 'Juventus 19/20', 'M,L,XL,XXL', 'Juventus 19/20' ,210.000, 190.000, 'ao-juventus-san-nha-1-1-300x300.jpg', 1),
(8, 2, 'Man City 19/20', 'M,L,XL,XXL', 'Man City 19/20' ,190.000, 170.000, 'Ao-man-city-san-nha-1-1-300x300.jpg', 1),
(9, 2, 'PSG 19/20', 'M,L,XL,XXL', 'PSG 19/20' ,150.000, 130.000, 'Ao-psg-san-nha-1-1-300x300.jpg', 1),
(10, 2, 'Man Utd 19/20', 'M,L,XL,XXL', 'Man Utd 19/20' ,220.000, 200.000, 'Ao-mu-san-nha-1-3-300x300.jpg', 1),
(11, 2, 'Real Marid 19/20', 'M,L,XL,XXL', 'Real Marid 19/20' ,230.000, 210.000, 'Ao-real-san-nha-1-4-300x300.jpg', 1),
(12, 2, 'Inter Milan 19/20', 'M,L,XL,XXL', 'Inter Milan 19/20' ,230.000, 210.000, 'Ao-bong-da-inter-san-nha-1-1-300x300.jpg', 1),
(13, 3, 'Áo Bỉ', 'M,L,XL,XXL', 'Áo Bỉ' ,180.000, 150.000, 'Ao-doi-tuyen-bi-san-nha-1-600x600.png', 1),
(14, 3, 'Áo Bồ Đào Nha', 'M,L,XL,XXL', 'Áo Bồ Đào Nha' ,210.000, 190.000, 'Ao-doi-tuyen-bo-dau-nha-san-nha-1-600x600.png', 1),
(15, 3, 'Áo Đức', 'M,L,XL,XXL', 'Áo Đức' ,230.000, 210.000, 'Ao-doi-tuyen-duc-san-khach-1-300x300 (1).png', 1),
(16, 3, 'Áo Mỹ', 'M,L,XL,XXL', 'Áo Mỹ' ,160.000, 140.000, 'Ao-doi-tuyen-my-san-nha-1-300x300.png', 1),
(17, 3, 'Áo Mexico', 'M,L,XL,XXL', 'Áo Mexico' ,150.000, 130.000, 'Ao-mexico-san-nha-1-300x300.jpg', 1),
(18, 3, 'Áo Nga', 'M,L,XL,XXL', 'Áo Nga' ,170.000, 150.000, 'Ao-doi-tuyen-nga-san-nha-1-300x300.png', 1),
(19, 3, 'Áo Brasil', 'M,L,XL,XXL', 'Áo Brasil' ,210.000, 190.000, 'Anh-ao-brazil-san-nha-1-300x300.jpg', 1),
(20, 3, 'Áo Argentina', 'M,L,XL,XXL', 'Áo Argentina' ,240.000, 220.000, 'Ao-argentina-san-nha-1-300x300.jpg', 1),
(21, 3, 'Áo Ý', 'M,L,XL,XXL', 'Áo Ý' ,240.000, 210.000, 'Ao-doi-tuyen-y-san-nha-1-300x300.png', 1),
(22, 3, 'Áo Hà Lan', 'M,L,XL,XXL', 'Áo Hà Lan' ,240.000, 210.000, 'Ao-ha-lan-san-nha-1-300x300.jpg', 1),
(23, 3, 'Áo Nhật Bản', 'M,L,XL,XXL', 'Áo Nhật Bản' ,200.000, 180.000, 'Ao-doi-tuyen-nhat-ban-san-nha-1-300x300.png', 1),
(24, 3, 'Áo Pháp', 'M,L,XL,XXL', 'Áo Pháp' ,250.000, 210.000, 'Ao-doi-tuyen-phap-san-nha-1-300x300.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien`
--

CREATE TABLE `thanhvien` (
  `mathanhvien` int(11) NOT NULL AUTO_INCREMENT,
  `tendangnhap` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `tenthanhvien` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `machucvu` int(11) NOT NULL,
  PRIMARY KEY (`mathanhvien`),
  KEY `machucvu` (`machucvu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=24 ;

--
-- Dumping data for table `thanhvien`
--

INSERT INTO `thanhvien` (`mathanhvien`, `tendangnhap`, `matkhau`, `tenthanhvien`, `machucvu`) VALUES
(13, 'admin', '123456789', 'Nguyễn Thanh Hào', 1),
(10, 'thanhvien01', '123456789', 'Nguyễn Quốc Anh', 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`madonhang`) REFERENCES `donhang` (`madonhang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`makhachhang`) REFERENCES `khachhang` (`makhachhang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`madanhmuc`) REFERENCES `danhmucsanpham` (`madanhmuc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD CONSTRAINT `thanhvien_ibfk_1` FOREIGN KEY (`machucvu`) REFERENCES `chucvu` (`machucvu`) ON DELETE CASCADE ON UPDATE CASCADE;

