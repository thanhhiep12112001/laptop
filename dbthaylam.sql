-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2022 at 12:21 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbthaylam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `hoten` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`, `hoten`) VALUES
('admin', '202cb962ac59075b964b07152d234b70', 'hao'),
('admin@gmail.com', 'admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `idcat` int(10) NOT NULL,
  `name` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`idcat`, `name`) VALUES
(1, 'Acer'),
(2, 'Dell'),
(3, 'Asus'),
(4, 'MSI'),
(5, 'HP'),
(6, 'HUAWEI'),
(7, 'GIGABYTE'),
(8, 'LG'),
(9, 'Lenovo');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `idorder` int(10) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `ngaydat` text DEFAULT NULL,
  `trangthai` int(1) DEFAULT NULL,
  `ngaygiao` text DEFAULT NULL,
  `tennguoinhan` varchar(45) DEFAULT NULL,
  `sdt` varchar(11) DEFAULT NULL,
  `diachinguoinhan` text DEFAULT NULL,
  `thanhtoan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`idorder`, `email`, `ngaydat`, `trangthai`, `ngaygiao`, `tennguoinhan`, `sdt`, `diachinguoinhan`, `thanhtoan`) VALUES
(419775, 'nnguyenthanh73@gmail.com', '2022-12-18', 0, '2022-12-23', 'aaaaaa23', '0776680028', 'B?n vï¿½n ??n', 92121116),
(576439, 'nnguyenthanh73@gmail.com', '2022-12-13', 1, '2022-12-18', 'aaaaaa', '776680028', 'B?n vï¿½n ??n', 42121112),
(612020, 'nnguyenthanh73@gmail.com', '2022-12-14', 0, '2022-12-19', 'asdzxc', '77123456', 'qweasd', 10),
(725395, 'nnguyenthanh73@gmail.com', '2022-12-13', 0, '2022-12-18', 'aaaaaa', '776680028', 'B?n vï¿½n ??n', 8),
(1668340483, NULL, '2022-11-13', 0, NULL, 'phanchihao', '23123', '32131', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `idorder` int(10) NOT NULL,
  `soluong` int(10) NOT NULL,
  `gia` double NOT NULL,
  `idproduct` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`idorder`, `soluong`, `gia`, `idproduct`) VALUES
(419775, 1, 2121112, '1122'),
(419775, 2, 2, '1211'),
(419775, 4, 20000000, 'AC2'),
(419775, 1, 10000000, 'AC3'),
(576439, 1, 2121112, '1122'),
(576439, 2, 20000000, 'AC2'),
(612020, 5, 2, '1211'),
(725395, 4, 2, '1211'),
(1668340483, 1, 10000000, 'AC3');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `idproduct` varchar(50) NOT NULL,
  `ten` varchar(225) DEFAULT NULL,
  `mota` text DEFAULT NULL,
  `gia` double DEFAULT NULL,
  `img` varchar(60) DEFAULT NULL,
  `idcat` int(10) NOT NULL,
  `gia_km` double DEFAULT NULL,
  `new` int(11) DEFAULT NULL,
  `bestsell` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`idproduct`, `ten`, `mota`, `gia`, `img`, `idcat`, `gia_km`, `new`, `bestsell`) VALUES
('1122', 'aaaaaaaaadsadadsa', '', 2323233, '1669461560-product03.png', 4, 2121112, 1, 1),
('1211', 'aaaaaaaaadsadadsa', '2', 12222, '1671359218-giay-thuong-dinh.jpg', 3, 2, 1, 1),
('AC2', 'Laptop Acer Swift 3 SF314 44 R2U3', '', 23990000, '1669355262-product08.png', 1, 20000000, 1, 1),
('AC3', 'Laptop Acer Aspire 3 A315 59 381E', '', 12790000, '1669355268-product06.png', 1, 10000000, 1, 1),
('GAM1', 'Laptop GIGABYTE U4 UD 50S1823SO', NULL, 26000000, NULL, 7, 16000000, NULL, NULL),
('GAM2', 'Laptop GIGABYTE U4 UD 70S1823SO', NULL, 26000000, NULL, 7, 20000000, NULL, NULL),
('HP1', 'Laptop HP Pavilion 15 EG2063TU 6K791PA', NULL, 15000000, NULL, 5, 13000000, NULL, NULL),
('HP2', 'Laptop HP Spectre x360 14 ef0030TU 6K773PA', NULL, 52000000, NULL, 5, 50000000, NULL, NULL),
('HW1', 'Laptop Huawei Matebook 14 KLVD WDH9', NULL, 22000000, NULL, 6, 20000000, NULL, NULL),
('HW2', 'Laptop Huawei Matebook 14 KLVF W5651T', NULL, 26000000, NULL, 6, 24400000, NULL, NULL),
('LG1', 'Laptop LG Gram 2021 14ZD90P G.AX56A5', NULL, 40000000, NULL, 8, 34000000, NULL, NULL),
('LG2', 'Laptop LG Gram 16Z90P-G.AH73A5', NULL, 50000000, NULL, 8, 48000000, NULL, NULL),
('LNV1', 'Laptop Lenovo ThinkBook 14 G2 ITL 20VD00Y5VN', NULL, 20000000, NULL, 9, 16500000, NULL, NULL),
('LNV2', 'Laptop Lenovo IdeaPad 5 Pro 16ACH6 82L500WKVN', NULL, 23000000, NULL, 9, 20000000, NULL, NULL),
('MSI1', 'Laptop MSI Modern 14 B11MOU 1028VN', NULL, 11290000, NULL, 4, 10000000, NULL, NULL),
('MSI2', 'Laptop MSI Modern 14 C5M 030VN', NULL, 15000000, NULL, 4, 14900000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(45) NOT NULL,
  `password` varchar(80) DEFAULT NULL,
  `hoten` varchar(45) DEFAULT NULL,
  `sdt` varchar(11) DEFAULT NULL,
  `diachi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`, `hoten`, `sdt`, `diachi`) VALUES
('', '', '', '', ''),
('hao@gmail.com', '202cb962ac59075b964b07152d234b70', 'hao123', '2313', '32131'),
('haophan577@gmail.com', '202cb962ac59075b964b07152d234b70', 'phanchihao', '23123', '32131'),
('nnguyenthanh72233@gmail.com', '123', 'aaaaaa2222', '0776680008', '277/71/13/4 PhÆ°á»ng 02 Quáº­n 4 TP Há»“ ChÃ­ Minh'),
('nnguyenthanh73@gmail.com', '123', 'aaaaaa', '0776680028', 'Bến vân đồn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idcat`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`idorder`),
  ADD KEY `fk_or_us_idx` (`email`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`idorder`,`idproduct`),
  ADD KEY `fk_detail_product_idx` (`idproduct`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`idproduct`),
  ADD KEY `fk_p_cat_idx` (`idcat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk_or_us` FOREIGN KEY (`email`) REFERENCES `user` (`email`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `fk_detail_order` FOREIGN KEY (`idorder`) REFERENCES `order` (`idorder`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detail_product` FOREIGN KEY (`idproduct`) REFERENCES `product` (`idproduct`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_p_cat` FOREIGN KEY (`idcat`) REFERENCES `category` (`idcat`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
