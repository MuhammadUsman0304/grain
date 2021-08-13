-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2021 at 01:57 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kruzg497_kgp`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyers`
--

CREATE TABLE `buyers` (
  `buyer_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `surename` varchar(50) NOT NULL,
  `companyName` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyers`
--

INSERT INTO `buyers` (`buyer_id`, `fullname`, `surename`, `companyName`, `email`, `password`, `cpassword`) VALUES
(3, 'test updated', 'test', 'test compny', 'test@test.com', '111', '111');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `BuyerOrsupplier` varchar(10) NOT NULL,
  `contactName` varchar(100) NOT NULL,
  `companyName` varchar(100) NOT NULL,
  `headquater` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fax` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `website` varchar(100) NOT NULL,
  `Bog` varchar(100) NOT NULL,
  `Bnog` varchar(100) NOT NULL,
  `Bcn` varchar(100) NOT NULL,
  `Log` varchar(100) NOT NULL,
  `Lnog` varchar(100) NOT NULL,
  `Lcn` varchar(100) NOT NULL,
  `Gog` varchar(100) NOT NULL,
  `Gnog` varchar(100) NOT NULL,
  `Gcn` varchar(100) NOT NULL,
  `Oog` varchar(100) NOT NULL,
  `Onog` varchar(100) NOT NULL,
  `Ocn` varchar(100) NOT NULL,
  `Pog` varchar(100) NOT NULL,
  `Pnog` varchar(100) NOT NULL,
  `Pcn` varchar(100) NOT NULL,
  `Cog` varchar(100) NOT NULL,
  `Cnog` varchar(100) NOT NULL,
  `Ccns` varchar(100) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `addedBy` varchar(100) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `BuyerOrsupplier`, `contactName`, `companyName`, `headquater`, `email`, `fax`, `phone`, `website`, `Bog`, `Bnog`, `Bcn`, `Log`, `Lnog`, `Lcn`, `Gog`, `Gnog`, `Gcn`, `Oog`, `Onog`, `Ocn`, `Pog`, `Pnog`, `Pcn`, `Cog`, `Cnog`, `Ccns`, `notes`, `addedBy`, `Time`) VALUES
(8, 'supplier', '', 'W.A Grain & Pulse Solutions', 'P O Box 6345, 4923 â€“ 50 Street Innisfail, Alberta, T4G 1T1', 'info@wagrain.ca', '14032272774', '14032272766', 'http://www.wagrain.ca/', 'no', 'no', 'Beans CN', 'no', 'no', 'no', 'no', 'no', 'Grains CN', 'no', 'no', 'Oilseed CN', 'no', 'no', 'Peas CN', 'no', 'no', 'Corn CN', '', 'Mahmudul', '2021-07-16 16:25:46'),
(9, 'supplier', '', 'ADASCAN Grain', '9555 Yonge St. #203 Richmound Hill, Ontario L4C 9M', 'sales@adascan.ca', '12047452965', '12047453662', 'http://www.adascan.ca/', 'no', 'no', 'Beans CN', 'no', 'no', 'no', 'no', 'no', 'Grains CN', 'no', 'no', 'Oilseed CN', 'no', 'no', 'Peas CN', 'no', 'no', 'Corn CN', '', 'Mahmudul', '2021-07-16 16:25:27'),
(10, 'supplier', '', 'Broadgrain Commodities Inc. ', '61 Lorne Ave. East, Unit 5,Stratford, Ontario, N5A 6S4', 'broadgrain@broadgrain.com', '15192752026', '15192752020', 'https://www.broadgrain.com', 'no', 'no', 'Beans CN', 'no', 'no', 'no', 'no', 'no', 'Grains CN', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'Corn CN', '', 'Mahmudul', '2021-07-16 16:25:06'),
(11, 'supplier', '', 'Agricom International Inc.', 'Suite 12, 109-3711 Delbrook Avenue North Vancouver, BC, Canada V7N 3Z4 ', 'info@agricom.com', '', '16049836922', 'https://www.agricom.com/', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'yes', 'yes', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'Also sells Bird Seed', 'robin', '2021-07-13 23:30:34'),
(12, 'supplier', '', 'Agrocorp Processing Ltd.', '203-1107 Munroe Avenue Winnipeg, MB, R2K 3Z5', 'export@agrocorp.ca', '1-866-337-4559', '1-204-594-1848', 'https://agrocorp.com.sg', 'no', 'no', 'Beans CN', 'no', 'no', 'no', 'no', 'no', 'Grains CN', 'no', 'no', 'Oilseed CN', 'no', 'no', 'Peas CN', 'no', 'no', 'no', '', 'robin', '2021-07-22 16:38:05'),
(14, 'supplier', 'Jason Getty', 'Alberta Pulse Traders Ltd. ', 'RR 8, Site 10, Box 23, Lethbridge, AB, T1J 4P4 ', 'jasongetty@lagrain.ca', '1-403-327-8727 ', 'Â 1-866-284-7011 ', 'http://www.lagrain.ca/', 'no', 'no', 'Beans CN', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'Peas CN', 'no', 'no', 'no', '', 'Mahmudul', '2021-07-16 16:23:33'),
(16, 'supplier', '', 'All Commodities (AC) Trading Ltd. ', '1600 Two Mile Rd Winnipeg, MB R2N 4K1 ', 'info@allcommodities.ca', '12043398002', '12043398001', 'https://www.allcommodities.ca', 'no', 'no', 'Beans CN', 'no', 'no', 'Lentils CN', 'no', 'no', 'Grains CN', 'no', 'no', 'Oilseed CN', 'no', 'no', 'Peas CN', 'no', 'no', 'no', '', 'Mahmudul', '2021-07-16 16:23:12'),
(18, 'supplier', '', 'Wisconsin Spice Inc.', '478 Industrial Park Road, PO Box 190, Berlin, WI 54923', 'info@wisconsinspice.com', '920-361-0818', '920-361-3555 ', 'www.wisconsinspice.com', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'Oilseed CN', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '2021-07-22 23:57:57'),
(19, 'supplier', '', 'Broadgrain Commodities Inc. ', '61 Lorne Ave. East, Unit 5,Stratford, Ontario, N5A 6S4', 'broadgrain@broadgrain.com', '15192752026', '15192752020', 'https://www.broadgrain.com', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '', 'Mahmudul', '2021-07-16 16:22:14'),
(20, 'supplier', '', 'Bunge Canada ', '2190 South Service Road West Oakville, ON L6L 5N1 ', '', '', '19058257900', 'https://www.bungenorthamerica.com', 'no', 'no', 'Beans CN', 'no', 'no', 'no', 'no', 'no', 'Grains CN', 'no', 'no', 'Oilseed CN', 'no', 'no', 'no', 'no', 'no', 'Corn CN', '', 'Mahmudul', '2021-07-16 16:21:57'),
(21, 'supplier', '', 'C.B. Constantini Ltd. ', 'Suite 910-980 Howe StreetVancouver, BC, Canada, V6Z 0C8 ', '', '16046894145', '16046691212', 'http://www.cbconstantini.com', 'Beans OG', 'no', 'Beans CN', 'Lentils OG', 'no', 'Lentils CN', 'Grains OG', 'no', 'Grains CN', 'Oilseed OG', 'no', 'Oilseed CN', 'Peas OG', 'no', 'Peas CN', 'Corn OG', 'no', 'Corn CN', '', 'Mahmudul', '2021-07-16 16:21:46'),
(22, 'supplier', '', 'Canadian Grain Inc. ', '231 Oak Park Blvd #208 Oakville, ON L6H 7S8 ', '', '', '19052576200', 'https://www.canadiangraininc.com', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'Has flours, Dry fruit, Salt & Sugar', 'Mahmudul', '2021-07-16 16:24:53'),
(23, 'supplier', '', 'CMI Terminal Joint Venture', '', 'ranholt@cmiterminal.com', '', '13068722777', 'https://cmiterminal.com', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '', 'Mahmudul', '2021-07-16 16:21:06'),
(24, 'supplier', '', 'Columbia Seed Co. Limited ', 'PO Box 80 Vauxhall, AB, T0K 2K0, Canada', 'joerg@columbiassed.ca', '', '14036542158', 'https://www.columbiaseed.ca', 'no', 'no', 'Beans CN', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'Peas CN', 'no', 'no', 'no', '', 'Mahmudul', '2021-07-16 16:20:47'),
(25, 'supplier', '', 'Commodious Trading Incorporated ', '1205 Maple Road North Saanich, BC V8L 5P7', 'info@commodious.ca', '12504836499', '12505801355', 'https://commodious.ca', 'no', 'no', 'Beans CN', 'no', 'no', 'Lentils CN', 'no', 'no', 'no', 'no', 'no', 'Oilseed CN', 'no', 'no', 'Peas CN', 'no', 'no', 'no', '', 'Mahmudul', '2021-07-16 16:20:34'),
(26, 'supplier', '', 'Cor Nine Commodities Ltd. ', '4836 â€“ 45A Lacombe Alberta, Canada T4L - 2C9 ', 'info@cornine.ca', '14037824985', '14037823000', 'https://www.yourgrain.ca', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'Grains CN', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '', 'Mahmudul', '2021-07-16 16:20:19'),
(27, 'supplier', '', 'Delmar Commodities Ltd. ', '2-915 Navigator RoadWinkler, MB R6W 0L7 ', '', '', '18889747246', 'https://delmarcommodities.com', 'no', 'no', 'Beans CN', 'no', 'no', 'no', 'no', 'no', 'Grains CN', 'no', 'no', 'Oilseed CN', 'no', 'no', 'no', 'no', 'no', 'no', 'Soybean Meal', 'Mahmudul', '2021-07-16 16:20:08'),
(28, 'supplier', '', 'DG Global West Inc.', '970 Lawrence Ave W. Suite 900 Toronto, ON, Canada M6A 3B6 ', 'info@dgglobal.ca', '', '14167821942', 'https://www.dgglobal.ca', 'no', 'no', 'Beans CN', 'no', 'no', 'Lentils CN', 'no', 'no', 'Grains CN', 'no', 'no', 'Oilseed CN', 'no', 'no', 'Peas CN', 'no', 'no', 'no', 'Soybean Meal, Geed Barley & other feeds', 'Mahmudul', '2021-07-16 16:19:56'),
(29, 'supplier', '', 'Diefenbaker Seed Processors Ltd. o/a Diefenbaker Spice and Pulse ', 'P.O. Box 69 Elbow, Saskatchewan Â  S0H IJ0 ', 'admin@dspdirect.ca', '1-306-644-4706', '13066444704', 'http://www.dspdirect.ca', 'no', 'no', 'Beans CN', 'no', 'no', 'Lentils CN', 'no', 'no', 'Grains CN', 'no', 'no', 'Oilseed CN', 'no', 'no', 'no', 'no', 'no', 'no', 'Soybean Meal', '', '2021-07-19 13:40:36'),
(30, 'supplier', '', 'ETG Commodities Inc. ', '', 'info@etgworld.com', '', '', 'https://www.etgworld.com', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'Grains CN', 'no', 'no', 'Oilseed CN', 'no', 'no', 'no', 'no', 'no', 'no', 'Coffe', 'Mahmudul', '2021-07-16 16:18:50'),
(31, 'supplier', '', 'ETG Commodities Manitoba Inc.', '', '', '', '', 'https://etgworld.com/northamerica/', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '', 'robin', '2021-07-19 22:53:11'),
(32, 'supplier', '', 'Etter Seed & Processing Ltd. ', '', 'info@etterseed.com', '1-306-522-1669', '1-306-522-1668', 'http://www.etterseed.com', 'no', 'no', 'no', 'no', 'no', 'Lentils CN', 'no', 'no', 'Grains CN', 'no', 'no', 'Oilseed CN', 'no', 'no', 'Peas CN', 'no', 'no', 'no', '', 'robin', '2021-07-20 12:04:54'),
(33, 'supplier', '', 'Fibreco Export Inc. ', '1209 McKeen Avenue North Vancouver, B.C. V7P 3H9', 'feedback@fibreco.com', '604-984-2593', '604-980-6543', 'http://fibreco.com', 'no', 'no', 'Beans CN', 'no', 'no', 'Lentils CN', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'Peas CN', 'no', 'no', 'no', '', 'robin', '2021-07-20 12:03:59');

-- --------------------------------------------------------

--
-- Table structure for table `newslatter_info`
--

CREATE TABLE `newslatter_info` (
  `newsl_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newslatter_info`
--

INSERT INTO `newslatter_info` (`newsl_id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'test', 'test@test.com', 'test subject', 'test message');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `proName` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `des` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category`, `proName`, `img`, `des`, `time`) VALUES
(4, 'peas', 'Yellow Corns', 'corn.jpg', 'mk', '2021-07-06 15:53:21'),
(5, 'peas', 'Yellow Corns', 'baner3.jpg', 'lorem', '2021-07-06 16:27:57'),
(0, 'peas', 'Yellow Corns', 'content.jpg', 'mk', '2021-07-11 15:16:03');

-- --------------------------------------------------------

--
-- Table structure for table `subproduct`
--

CREATE TABLE `subproduct` (
  `id` int(11) NOT NULL,
  `contactName` varchar(255) NOT NULL,
  `companyName` varchar(255) NOT NULL,
  `buyerORsuppliyer` varchar(10) NOT NULL,
  `data` varchar(5000) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subproduct`
--

INSERT INTO `subproduct` (`id`, `contactName`, `companyName`, `buyerORsuppliyer`, `data`, `time`) VALUES
(9, '', 'ADASCAN Grain	', 'supplier', 'White Kidney CN/Dark red candy CN/Great Northren CN/Small Red CN/Black CN/Navey CN/Chick Peas Kabuli 8mm CN/Cranberry CN/Barley CN/Wheat CN/Laird No 1 CN/Laird No 2 CN/Eston CN/Crimson CN/Red CN/Split Red CN/Canola CN/Green CN/Split Green CN/Split Yellow CN/Marrowfat CN/Yellow Corn CN', '2021-07-22 19:54:05'),
(10, '', 'Broadgrain Commodities Inc.', 'supplier', 'Soybean CN/Barley CN/Wheat CN/Yellow Corn CN', '2021-07-22 19:55:00'),
(11, '', ' Adroit Overseas Enterprises Ltd.', 'supplier', 'White Kidney CN/Dark red candy CN/Light Red Kidney CN/Great Northren CN/Small Red CN/Black CN/Navey CN/Pinto CN/Split Pinto CN/Chick Peas CN/Chick Peas Kabuli 8mm CN/Cranberry CN/Durum Wheat CN/Laird No 1 CN/Eston CN/Red CN/Split Red CN/French CN/Richlea CN/Canola CN/Brown Flax CN/Yellow Flax CN/Yellow Mustard CN/Brown Mustard CN/Hemp Seed CN/Sunflower Seed CN/Coriander Seed CN/Canary Seed CN/Split Green CN/Yellow CN/Split Yellow CN/Yellow Corn CN', '2021-07-22 20:21:54'),
(12, '', 'Agricom International Inc.', 'supplier', 'Chick Peas Kabuli 8mm CN/Oats CN/Red Millet CN/White Millet CN/Red CN/Split Red CN/French CN/Green CN/Split Green CN/Canola CN/Brown Flax CN/Yellow Flax CN/Golden Flax CN/Coriander Seed CN/Canary Seed CN/Green CN/Yellow Corn CN', '2021-07-22 20:25:27'),
(13, '', ' Agro Source Ltd.', 'supplier', 'Barley CN/Wheat CN/Canola CN/Yellow Corn CN', '2021-07-22 20:26:47'),
(14, '', 'Agrocorp Processing Ltd.', 'supplier', 'Split Pinto CN/Chick Peas CN/Oat Groat CN/Golden Flax CN/Oriental Mustard CN/Maple CN', '2021-07-22 21:12:31'),
(15, 'Kevin Dick (President)', 'All Commodities (AC) Trading Ltd.', 'supplier', 'Chick Peas Kabuli 8mm CN/Oat Groat CN/Laird No 1 CN/Eston CN/Red CN/French CN/Brown Flax CN/Yellow Mustard CN/Canary Seed CN/Oriental Mustard CN/Green CN/Maple CN/Yellow Corn CN', '2021-07-22 20:32:20'),
(16, '', 'Alberta Pulse Traders Ltd. ', 'supplier', 'Chick Peas Kabuli 10mm CN/Chick Peas Kabuli 9mm CN/Chick Peas Kabuli 8mm CN/Laird No 1 CN/Laird No 2 CN/Eston CN/Red CN/Green CN/Richlea CN/Yellow CN/Split Yellow CN', '2021-07-22 21:19:57'),
(17, '', 'Alliance Pulse Processors Inc. ', 'supplier', 'Dark red candy CN/Light Red Kidney CN/Great Northren CN/Small Red CN/Faba CN/Split Faba CN/Black CN/Split Black CN/Navey CN/Split Navey CN/Pinto CN/Split Pinto CN/Chick Peas CN/Chick Peas Kabuli 8mm CN/Chana Del CN/Cranberry CN/Red Millet CN/Laird No 1 CN/Eston CN/Red CN/Split Red CN/French CN/Richlea CN/Canola CN/Brown Flax CN/Sunflower Seed CN/Coriander Seed CN/Canary Seed CN/Green CN/Split Green CN/Yellow CN/Split Yellow CN/Yellow Corn CN', '2021-07-22 21:35:37'),
(18, '', 'Belle Pulses Ltd. ', 'supplier', 'Chick Peas Kabuli 8mm CN/Chana Del CN/Green CN/Split Green CN/Yellow CN/Split Yellow CN', '2021-07-22 23:48:48'),
(20, '', 'Wisconsin Spice Inc.', 'supplier', 'Yellow Mustard CN/Brown Mustard CN/Oriental Mustard CN', '2021-07-23 00:03:35'),
(21, '', 'Bunge Canada ', 'supplier', 'Soybean CN/Wheat CN/Canola CN/Yellow Corn CN', '2021-07-23 00:14:20'),
(22, '', 'C.B. Constantini Ltd. ', 'supplier', 'Faba OG/Faba CN/Chick Peas Kabuli 8mm OG/Chick Peas Kabuli 8mm CN/Oats OG/Oats CN/Barley OG/Barley CN/Rye OG/Rye CN/Durum Wheat OG/Durum Wheat CN/Wheat OG/Wheat CN/Canola OG/Canola CN/Brown Flax OG/Golden Flax CN/Yellow Mustard OG/Green OG/Green CN/Yellow Corn CN', '2021-07-23 16:34:43'),
(23, '', 'Canadian Grain Inc. ', 'supplier', 'Dark red candy CN/Light Red Kidney CN/Great Northren CN/Faba CN/Black CN/Navey CN/Pinto CN/Mung bean CN/Chick Peas Kabuli 8mm CN/Cranberry CN/Red Millet CN/White Millet CN/Laird No 1 CN/Eston CN/Red CN/Split Red CN/Richlea CN/Brown Flax CN/Golden Flax CN/Brown Mustard CN/Hemp Seed CN/Canary Seed CN/Oriental Mustard CN/Green CN/Split Green CN/Yellow CN/Split Yellow CN/Marrowfat CN/Maple CN', '2021-07-23 16:46:58'),
(24, '', 'CMI Terminal Joint Venture', 'supplier', 'Wheat CN', '2021-07-31 18:22:01'),
(25, '', 'Columbia Seed Co. Limited ', 'supplier', 'Split Faba CN/Green CN/Marrowfat CN', '2021-07-31 18:50:34'),
(26, '', 'Commodious Trading Incorporated ', 'supplier', 'Chick Peas Kabuli 8mm CN/Brown Flax CN/Canary Seed CN/Green CN', '2021-07-31 19:05:07'),
(27, '', 'Commodious Trading Incorporated ', 'supplier', 'Oats CN/Barley CN/Wheat CN/Canola CN/Yellow Corn CN', '2021-07-31 19:19:27');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `FName` varchar(100) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `proImg` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Pass` varchar(100) NOT NULL,
  `ActionRole` int(11) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `FName`, `Lname`, `proImg`, `Email`, `Pass`, `ActionRole`, `Time`) VALUES
(1, 'Mahmudul', 'Hasan MK', 'road.jpg', 'mahmudulhasanmk434@gmail.com', 'b714337aa8007c433329ef43c7b8252c', 0, '2021-07-07 16:29:45'),
(3, 'robin', 'brunet', 'we care grains.jpg', 'robinsden@protonmail.com', 'b714337aa8007c433329ef43c7b8252c', 0, '2021-07-12 23:00:49'),
(5, 'test', 'test', 'road.jpg', 'test@test.com', '12345', 0, '2021-08-11 09:46:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyers`
--
ALTER TABLE `buyers`
  ADD PRIMARY KEY (`buyer_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newslatter_info`
--
ALTER TABLE `newslatter_info`
  ADD PRIMARY KEY (`newsl_id`);

--
-- Indexes for table `subproduct`
--
ALTER TABLE `subproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyers`
--
ALTER TABLE `buyers`
  MODIFY `buyer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `newslatter_info`
--
ALTER TABLE `newslatter_info`
  MODIFY `newsl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subproduct`
--
ALTER TABLE `subproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
