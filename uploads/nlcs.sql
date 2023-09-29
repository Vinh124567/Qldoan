-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2022 at 04:29 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nlcs`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(6) NOT NULL,
  `time` datetime NOT NULL,
  `empaccount` varchar(20) NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `time`, `empaccount`, `total`) VALUES
(0, '2019-10-30 07:10:47', 'admin', 156000),
(1, '2019-10-30 07:10:01', 'admin', 457000),
(2, '2019-10-30 07:10:13', 'admin', 952000),
(3, '2019-10-31 10:10:16', 'admin', 58000),
(4, '2022-12-01 09:12:46', 'admin', 148000);

-- --------------------------------------------------------

--
-- Table structure for table `detail_bill`
--

CREATE TABLE `detail_bill` (
  `id` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_bill`
--

INSERT INTO `detail_bill` (`id`, `bill_id`, `id_product`, `quantity`, `total`) VALUES
(1, 1, 2, 3, 30000),
(2, 1, 3, 3, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(4) UNSIGNED NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `account` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `id_num` varchar(13) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `job` varchar(20) NOT NULL,
  `start` varchar(15) DEFAULT NULL,
  `user_group` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `fullname`, `account`, `password`, `id_num`, `address`, `phone`, `job`, `start`, `user_group`) VALUES
(1, 'Phan Thanh Giáº£ng', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '331800117', 'Tam BÃ¬nh, VÄ©nh Long', '0868442808', 'Quáº£n lÃ½', '2018', 'admin'),
(2, 'LÃ¢m VÄƒn Di', 'dilam', 'f502e82c25bba5a06cf68ffa87ecd02371c1a975', '123456789', 'ChÃ¢u ThÃ nh, KiÃªn Giang', '0859711330', 'Cháº¿ biáº¿n', '2018', ''),
(3, 'Nguyá»…n PhÃºc Báº£o Khang', 'khangnguyen', 'c863bacbc71869fc68a88d11b1f8c6d3b2f42ca9', '987654321', 'Mang ThÃ­t, VÄ©nh Long', '0939964344', 'Phá»¥c vá»¥', '2018', NULL),
(4, 'Tráº§n VÄƒn Khá»Ÿi', 'khoitran', 'cae1b52d0ab8b788a944a94be70dedffa876bd61', '123654987', 'Giá»“ng Riá»ng, KiÃªn Giang', '0392959702', 'Phá»¥c vá»¥', '2018', NULL),
(5, 'Nguyá»…n ÄÃ¬nh KhÃ¢m', 'khamnguyen', '5f79460e4f906c045759e7bb5580b62aceb2cc85', '123456987', 'Long Má»¹, Háº­u Giang', '0356879141', 'Cháº¿ biáº¿n', '2018', NULL),
(6, 'Nguyá»…n Minh Thuáº­t', 'thuatnguyen', '4aa49a57b3c11757e7e391f52347572bb837597f', '321456987', 'VÅ©ng LiÃªm, VÄ©nh Long', '0929090507', 'Phá»¥c vá»¥', '2018', NULL),
(7, 'Há»“ KhÃ¡nh Duy', 'duyho', '00fb8183479aed9947aebded28b36c57de7eb16b', '321546789', 'Long Má»¹, Háº­u Giang', '0929262646', 'Phá»¥c vá»¥', '2018', NULL),
(8, 'Tráº§n VÄ©nh TÆ°á»ng', 'tuongtran', 'e03a3b0df7ef2aa513131811010f32f66cfa8e06', '312645978', 'Ã” MÃ´n, Cáº§n ThÆ¡', '0907047617', 'Order', '2018', 'order'),
(11, 'LÃª Thanh LÆ°Æ¡ng', 'luongle', 'aa93e733a85dcd3e134fca45d926427e19a05afb', '121345648', 'Káº¿ SÃ¡ch, SÃ³c TrÄƒng', '0824521572', 'Order', '2018', 'order'),
(14, 'Tráº§n SÄ© Äáº¡t', 'dattran', 'fbd0b9c3677241899bad77be49dcbb69471a7ef5', '226444232', 'BÃ¬nh Minh, VÄ©nh Long', '0254545444', 'Cháº¿ biáº¿n', '2018', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `species` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `thumb_img` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `species`, `price`, `thumb_img`) VALUES
(1, 'Americano', 'Cafe', 39000, 'https://product.hstatic.net/1000075078/product/americano_large.jpg'),
(2, 'Báº¡c sá»‰u', 'Cafe', 29000, 'https://product.hstatic.net/1000075078/product/white_vnese_coffee_9968c1184d7f4634a9bb9fce7b5ff313_large.jpg'),
(3, 'Cafe Ä‘en', 'Cafe', 29000, 'https://product.hstatic.net/1000075078/product/vnese_coffee_large.jpg'),
(4, 'Cafe Sá»¯a', 'Cafe', 29000, 'https://product.hstatic.net/1000075078/product/cfs_large.jpg'),
(5, 'Cappucinno', 'Cafe', 45000, 'https://product.hstatic.net/1000075078/product/cappuccino_large.jpg'),
(6, 'Caramel Macchiato', 'Cafe', 55000, 'https://product.hstatic.net/1000075078/product/caramel_macchiato_b6f694f469794e12b04a91845f5fce2d_large.jpg'),
(7, 'Cold brew cam sáº£', 'Cafe', 45000, 'https://product.hstatic.net/1000075078/product/colbrewcamsa_c2a45ec3fea94e248fd1b4f71abebe09_large.jpg'),
(8, 'Cold brew phÃºc bá»“n tá»­', 'Cafe', 50000, 'https://product.hstatic.net/1000075078/product/coldbrew_raspberry_ac577fc483484f0cb4e35efe6bf14426_large.png'),
(9, 'Cold brew sá»¯a tÆ°Æ¡i', 'Cafe', 50000, 'https://product.hstatic.net/1000075078/product/coldbrewmilk_09db086189ce43d5bb78172613af57dc_large.jpg'),
(10, 'Cold brew sá»¯a tÆ°Æ¡i macchiatio', 'Cafe', 50000, 'https://product.hstatic.net/1000075078/product/coldbrewmacchiato_af7dc44ed71b4856bfe48a756ed939e6_large.jpg'),
(11, 'Cold brew truyá»n thá»‘ng', 'Cafe', 45000, 'https://product.hstatic.net/1000075078/product/classic_47aa187278184a4ea36a59cf279350c0_large.jpg'),
(12, 'Espresso', 'Cafe', 35000, 'https://product.hstatic.net/1000075078/product/espresso_large.jpg'),
(13, 'Latte', 'Cafe', 45000, 'https://product.hstatic.net/1000075078/product/latte__1__large.jpg'),
(16, 'Mocha', 'Cafe', 49000, 'https://product.hstatic.net/1000075078/product/mocha_large.jpg'),
(17, 'Chocolate Ä‘Ã¡', 'Cafe', 55000, 'https://product.hstatic.net/1000075078/product/iced_chocolate_large.jpg'),
(18, 'TrÃ  cherry macchiato', 'TrÃ  & Macchiato', 55000, 'https://product.hstatic.net/1000075078/product/cherry_mac_6a3403fdb832464da88de8c6e6ddf662_large.jpg'),
(19, 'TrÃ  Ä‘Ã o cam sáº£', 'TrÃ  & Macchiato', 45000, 'https://product.hstatic.net/1000075078/product/tra_dao_cam_sa_on_bg_large.jpg'),
(20, 'TrÃ  Ä‘en macchiato', 'TrÃ  & Macchiato', 42000, 'https://product.hstatic.net/1000075078/product/blacktea_macchiat_large.jpg'),
(21, 'TrÃ  gáº¡o rang macchiato', 'TrÃ  & Macchiato', 48000, 'https://product.hstatic.net/1000075078/product/genmaicha_macchiatov_large.jpg'),
(22, 'TrÃ  matcha latte', 'TrÃ  & Macchiato', 59000, 'https://product.hstatic.net/1000075078/product/matcha_latte_large.jpg'),
(23, 'TrÃ  matcha macchiato', 'TrÃ  & Macchiato', 45000, 'https://product.hstatic.net/1000075078/product/matcha_macchiato_large.jpg'),
(24, 'TrÃ  oolong sen An nhiÃªn', 'TrÃ  & Macchiato', 45000, 'https://product.hstatic.net/1000075078/product/trasen_29e9b22739f941ff84671361ae53f3dd_large.jpg'),
(25, 'TrÃ  oolong váº£i NhÆ° Ã½', 'TrÃ  & Macchiato', 45000, 'https://product.hstatic.net/1000075078/product/travai_large.jpg'),
(26, 'TrÃ  phÃºc bá»“n tá»­', 'TrÃ  & Macchiato', 49000, 'https://product.hstatic.net/1000075078/product/tea_raspberry_fda1ba90f506483eb6568f433690173a_large.png'),
(27, 'TrÃ  xoÃ i macchiatio', 'TrÃ  & Macchiato', 55000, 'https://product.hstatic.net/1000075078/product/xoai_nong_mac_7f000cdac75e458e9ea5cdc3cb990419_large.jpg'),
(28, 'TrÃ  xoÃ i macchiatio', 'TrÃ  & Macchiato', 55000, 'https://product.hstatic.net/1000075078/product/xoai_mac_c4534cc7607f4d58addf470a162e8359_large.jpg'),
(29, 'Chanh sáº£ Ä‘Ã¡ xay', 'Thá»©c uá»‘ng Ä‘Ã¡ xay', 49000, 'https://product.hstatic.net/1000075078/product/chanhday_1x1_66281943c16b49d480a30860638fdc5e_large.jpg'),
(30, 'Chocolate Ä‘Ã¡ xay', 'Thá»©c uá»‘ng Ä‘Ã¡ xay', 59000, 'https://product.hstatic.net/1000075078/product/chocolate_ice_blended_large.jpg'),
(31, 'Cookies Ä‘Ã¡ xay', 'Thá»©c uá»‘ng Ä‘Ã¡ xay', 59000, 'https://product.hstatic.net/1000075078/product/cookies_ice_blended_large.jpg'),
(32, 'ÄÃ o viá»‡t quáº¥t Ä‘Ã¡ xay', 'Thá»©c uá»‘ng Ä‘Ã¡ xay', 59000, 'https://product.hstatic.net/1000075078/product/dao_a0adb67ef806443298524236a4cc7e3c_large.jpg'),
(33, 'Matcha Ä‘Ã¡ xay', 'Thá»©c uá»‘ng Ä‘Ã¡ xay', 59000, 'https://product.hstatic.net/1000075078/product/matcha_ice_blended_large.jpg'),
(34, 'á»”i há»“ng viá»‡t quáº¥t Ä‘Ã¡ xay', 'Thá»©c uá»‘ng Ä‘Ã¡ xay', 59000, 'https://product.hstatic.net/1000075078/product/oihong_eba1ad20923841f6830e40e2dfd3e42a_large.jpg'),
(35, 'PhÃºc bá»“n tá»­ cam Ä‘Ã¡ xay', 'Thá»©c uá»‘ng Ä‘Ã¡ xay', 59000, 'https://product.hstatic.net/1000075078/product/daxay_raspberry_01685c63649740678352a348f8b281a1_large.png'),
(36, 'Sinh tá»‘ cam xoÃ i', 'Thá»©c uá»‘ng trÃ¡i cÃ¢y', 59000, 'https://product.hstatic.net/1000075078/product/mango_smoothie_large.jpg'),
(37, 'Sinh tá»‘ viá»‡t quáº¥t', 'Thá»©c uá»‘ng trÃ¡i cÃ¢y', 59000, 'https://product.hstatic.net/1000075078/product/blueberry_smoothie_large.jpg'),
(38, 'BÃ¡nh bÃ´ng lan trá»©ng muá»‘i', 'BÃ¡nh & snack', 29000, 'https://product.hstatic.net/1000075078/product/trungmui1_9abf7c43946b44e9948dbac1eff95e40_large.jpg'),
(39, 'BÃ¡nh chocolate', 'BÃ¡nh & snack', 29000, 'https://product.hstatic.net/1000075078/product/choco_1x1_4faf8c80e6604cad88ce30528e2bd409_large.jpg'),
(40, 'BÃ¡nh Croissant bÆ¡ tá»i', 'BÃ¡nh & snack', 29000, 'https://product.hstatic.net/1000075078/product/sungtrau_1x1_0e9a3e2590794cb9a6ff7ad9d9562c25_large.jpg'),
(41, 'BÃ¡nh gáº¥u chocolate', 'BÃ¡nh & snack', 39000, 'https://product.hstatic.net/1000075078/product/gau_1x1_8b308db3a67a47688ff0d69a8c5615bf_large.jpg'),
(42, 'BÃ¡nh matcha', 'BÃ¡nh & snack', 29000, 'https://product.hstatic.net/1000075078/product/matcha_178bdeeb1f9b47ea9f782048eb145f49_large.jpg'),
(43, 'BÃ¡nh mÃ¬ chÃ  bÃ´ng phÃ´ mai', 'BÃ¡nh & snack', 32000, 'https://product.hstatic.net/1000075078/product/phomaichabong_1x1_e86c140c8a084458afcace64a93d2fd1_large.jpg'),
(44, 'BÃ¡nh passion cheese', 'BÃ¡nh & snack', 29000, 'https://product.hstatic.net/1000075078/product/chanhday_1x1_da85397059a149e1b886237434f7ce48_large.jpg'),
(45, 'BÃ¡nh tiramisu', 'BÃ¡nh & snack', 29000, 'https://product.hstatic.net/1000075078/product/tira_1x1_eb865751a24e4520be32a56129dd7a2d_large.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shifts`
--

CREATE TABLE `shifts` (
  `id` int(6) UNSIGNED NOT NULL,
  `shiftName` varchar(10) DEFAULT NULL,
  `dayOfShift` varchar(10) DEFAULT NULL,
  `empAccount` varchar(20) NOT NULL,
  `salaryOfShift` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `shifts`
--

INSERT INTO `shifts` (`id`, `shiftName`, `dayOfShift`, `empAccount`, `salaryOfShift`) VALUES
(97, '1', '2', 'dilam', 100000),
(98, '2', '2', 'dilam', 100000),
(99, '1', '3', 'dilam', 100000),
(100, '2', '3', 'dilam', 100000),
(101, '1', '4', 'dilam', 100000),
(102, '2', '4', 'dilam', 100000),
(103, '3', '5', 'dilam', 100000),
(104, '4', '5', 'dilam', 100000),
(105, '3', '6', 'dilam', 100000),
(106, '4', '6', 'dilam', 100000),
(107, '3', '7', 'dilam', 100000),
(108, '4', '7', 'dilam', 100000),
(109, '1', '2', 'tuongtran', 100000),
(110, '2', '2', 'tuongtran', 100000),
(111, '1', '3', 'tuongtran', 100000),
(112, '2', '3', 'tuongtran', 100000),
(113, '1', '4', 'tuongtran', 100000),
(114, '2', '4', 'tuongtran', 100000),
(115, '1', '5', 'tuongtran', 100000),
(116, '2', '5', 'tuongtran', 100000),
(117, '1', '6', 'tuongtran', 100000),
(118, '2', '6', 'tuongtran', 100000),
(119, '1', '7', 'tuongtran', 100000),
(120, '2', '7', 'tuongtran', 100000),
(121, '1', '8', 'tuongtran', 100000),
(122, '2', '8', 'tuongtran', 100000),
(123, '3', '2', 'luongle', 100000),
(124, '4', '2', 'luongle', 100000),
(125, '3', '3', 'luongle', 100000),
(126, '4', '3', 'luongle', 100000),
(127, '3', '4', 'luongle', 100000),
(128, '4', '4', 'luongle', 100000),
(129, '3', '5', 'luongle', 100000),
(130, '4', '5', 'luongle', 100000),
(131, '3', '6', 'luongle', 100000),
(132, '4', '6', 'luongle', 100000),
(133, '3', '7', 'luongle', 100000),
(134, '4', '7', 'luongle', 100000),
(135, '3', '8', 'luongle', 100000),
(136, '4', '8', 'luongle', 100000),
(137, '1', '5', 'khamnguyen', 100000),
(138, '2', '5', 'khamnguyen', 100000),
(139, '1', '6', 'khamnguyen', 100000),
(140, '2', '6', 'khamnguyen', 100000),
(141, '1', '7', 'khamnguyen', 100000),
(142, '2', '7', 'khamnguyen', 100000),
(143, '3', '2', 'khamnguyen', 100000),
(144, '4', '2', 'khamnguyen', 100000),
(145, '3', '3', 'khamnguyen', 100000),
(146, '4', '3', 'khamnguyen', 100000),
(147, '3', '4', 'khamnguyen', 100000),
(148, '4', '4', 'khamnguyen', 100000),
(149, '1', '8', 'dattran', 100000),
(150, '2', '8', 'dattran', 100000),
(151, '3', '8', 'dattran', 100000),
(152, '4', '8', 'dattran', 100000),
(153, '1', '2', 'khangnguyen', 100000),
(154, '2', '2', 'khangnguyen', 100000),
(155, '3', '2', 'khangnguyen', 100000),
(156, '4', '2', 'khangnguyen', 100000),
(157, '1', '4', 'khangnguyen', 100000),
(158, '2', '4', 'khangnguyen', 100000),
(159, '3', '4', 'khangnguyen', 100000),
(160, '4', '4', 'khangnguyen', 100000),
(161, '1', '6', 'khangnguyen', 100000),
(162, '2', '6', 'khangnguyen', 100000),
(163, '3', '6', 'khangnguyen', 100000),
(164, '4', '6', 'khangnguyen', 100000),
(165, '1', '8', 'khangnguyen', 100000),
(166, '2', '8', 'khangnguyen', 100000),
(167, '3', '8', 'khangnguyen', 100000),
(168, '4', '8', 'khangnguyen', 100000),
(169, '1', '3', 'khoitran', 100000),
(170, '2', '3', 'khoitran', 100000),
(171, '3', '3', 'khoitran', 100000),
(172, '4', '3', 'khoitran', 100000),
(173, '1', '5', 'khoitran', 100000),
(174, '2', '5', 'khoitran', 100000),
(175, '3', '5', 'khoitran', 100000),
(176, '4', '5', 'khoitran', 100000),
(177, '1', '7', 'khoitran', 100000),
(178, '2', '7', 'khoitran', 100000),
(179, '3', '7', 'khoitran', 100000),
(180, '4', '7', 'khoitran', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(4) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `name`, `phone`, `address`) VALUES
(0, 'CÃ´ng ty ly nhá»±a BÃ¬nh Minh', '0934524014', 'Sá»‘ 68 Nguyá»…n Huá»‡, PhÆ°á»ng Báº¿n NghÃ©, Quáº­n 1, TP. HCM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empaccount` (`empaccount`);

--
-- Indexes for table `detail_bill`
--
ALTER TABLE `detail_bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `account` (`account`),
  ADD KEY `account_2` (`account`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shifts`
--
ALTER TABLE `shifts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empAccount` (`empAccount`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_bill`
--
ALTER TABLE `detail_bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `shifts`
--
ALTER TABLE `shifts`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`empaccount`) REFERENCES `employees` (`account`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `shifts`
--
ALTER TABLE `shifts`
  ADD CONSTRAINT `shifts_ibfk_1` FOREIGN KEY (`empAccount`) REFERENCES `employees` (`account`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
