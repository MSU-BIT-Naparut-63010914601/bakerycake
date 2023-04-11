-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 21, 2023 at 01:36 PM
-- Server version: 5.7.15-log
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(7) NOT NULL,
  `a_name` varchar(100) NOT NULL,
  `a_user` varchar(100) NOT NULL,
  `a_pwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_user`, `a_pwd`) VALUES
(1, 'Taksin', 'tak', '123'),
(1312, 'root', 'root', '12345678'),
(3003, 'เบญจมาส', 'cream', '14141');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cus_id` int(7) NOT NULL,
  `cus_name` varchar(100) NOT NULL,
  `cus_user` varchar(100) NOT NULL,
  `cpwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cus_id`, `cus_name`, `cus_user`, `cpwd`) VALUES
(1312, 'guitar', 'guitar', '1312'),
(1401, 'bek', 'bek', '1234'),
(3003, 'cream', 'cream', '3003'),
(4321, 'jumjim', 'jumjim', '1234'),
(4325, 'Taksin', 'tak', '123'),
(4326, 'jan', '', '1402'),
(4328, 'doyoung', '', '0201'),
(4329, 'keam', '', '0213'),
(4330, 'jj', '', '1234'),
(4333, 'dan', '', '1234'),
(4334, 'takssss', 'root', '12345678'),
(4335, 'asd', '', '12345678'),
(4336, 'asd', 'root', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `disney`
--

CREATE TABLE `disney` (
  `d_id` int(7) NOT NULL,
  `d_name` varchar(200) NOT NULL,
  `d_price` float NOT NULL,
  `d_views` int(7) NOT NULL,
  `d_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `disney`
--

INSERT INTO `disney` (`d_id`, `d_name`, `d_price`, `d_views`, `d_details`) VALUES
(14, 'Coco', 299, 365, 'มิเกล เด็กน้อยผู้ใฝ่ฝันจะเป็นนักดนตรีแต่ถูกครอบครัวสั่งห้าม วันหนึ่ง เขาก้าวเข้าสู่โลกแห่งความตายเพื่อตามหาปู่ทวดตัวจริงของเขาที่เป็นนักร้องในตำนาน นี่คือการ์ตูนที่จะทำให้คุณต้องเสียน้ำตา'),
(15, 'The Little Mermaid', 399, 654, 'แอเรียล เงือกสาวตกหลุมรักเจ้าชายหนุ่มรูปงามจนต้องไปขอความช่วยเหลือจากเออร์ซูลา แม่มดทะเล แต่มีบางอย่างที่เธอต้องแลกไป โชคดีที่เธอยังมีเพื่อนอย่างฟลาวน์เดอร์และเซบาสเตียนคอยช่วยเหลือ'),
(16, 'Turning Red', 259, 94, 'ดิสนีย์และพิกซาร์ขอเสนอ เมยหลิน ลี สาวน้อยวัย 13 ปีจอมเปิ่นสุดมั่นใจ ผู้ต้องเลือกระหว่างการเป็นลูกสาวผู้แสนดีของแม่หรือความวุ่นวายสุดป่วนของชีวิตวัยรุ่น'),
(17, 'Luca', 299, 267, 'เรื่องราวการก้าวผ่านช่วงวัยของสองหนุ่ม ลูก้าและอัลแบร์โต้ ในฤดูร้อน ที่จะตราตรึงในความทรงจำ ท่ามกลางบรรยากาศของเมืองริมทะเลในอิตาลี'),
(18, 'Snow White And The Seven Dwarfs', 209, 421, 'เจ้าหญิงสโนว์ไวท์ถูกคุกคามโดยราชินีผู้ชั่วร้ายที่ต้องการสังหารเธอเพราะเธอคือ "ผู้งามเลิศในปฐพี" เธอจึงหนีเข้าไปในป่า คนแคระทั้งเจ็ดช่วยเธอไว้และปกป้องเธอจากแม่มดที่ยังตามราวี'),
(19, 'Finding Dory', 419, 365, 'ดอรี่ ปลาบลูแทงค์ที่สูญเสียความทรงจำระยะสั้นออกตามหาพ่อแม่ของเธอ ด้วยความช่วยเหลือจากนีโม่และมาร์ลินเพื่อนของเธอ เธอจึงออกเดินทางผจญภัยเพื่อช่วยชีวิตพ่อแม่จากการถูกกักขัง'),
(20, 'Pinocchio', 299, 334, 'พิน็อคคิโอ หุ่นไม้มีชีวิตออกเดินทางไปกับเจมินี คริกเก็ต จิ้งหรีดเพื่อนรัก ในการผจญภัยที่จะทดสอบความกล้า ความภักดี และความซื่อสัตย์ จนกว่าเขาจะได้เป็นมนุษย์จริงๆ'),
(21, 'Encanto', 309, 450, 'เรื่องราวของครอบครัวมาดรีกาล ครอบครัวมหัศจรรย์ที่ซ่อนตัวตนบนหุบเขาในประเทศโคลอมเบีย'),
(22, 'Frozen II\r\n', 309, 265, 'ทำไมเอลซ่าถึงเกิดมาพร้อมพลังวิเศษ คำตอบของคำถามนี้กำลังส่งเสียงเรียกหา เอลซ่ากับอันนาและผองเพื่อนจึงต้องออกเดินทางสู่ดินแดนที่ไม่รู้เพื่อไขปริศนาและช่วยอาณาจักรอีกครั้ง');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `od_id` int(7) NOT NULL,
  `ototal` int(7) NOT NULL,
  `odate` datetime NOT NULL,
  `cus_id` int(7) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`od_id`, `ototal`, `odate`, `cus_id`) VALUES
(1, 379, '2023-03-21 13:08:07', 0),
(2, 0, '2023-03-21 14:22:06', 0),
(3, 0, '2023-03-21 14:45:06', 0),
(4, 1137, '2023-03-21 14:59:21', 0),
(5, 429, '2023-03-21 15:32:00', 0),
(6, 0, '2023-03-21 18:21:44', 0),
(7, 0, '2023-03-21 18:21:50', 0),
(8, 6442, '2023-03-21 19:21:43', 0),
(9, 0, '2023-03-21 19:25:13', 0),
(10, 0, '2023-03-21 19:49:05', 0),
(11, 0, '2023-03-21 19:49:13', 0),
(12, 0, '2023-03-21 19:56:14', 0),
(13, 0, '2023-03-21 19:56:49', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
--

CREATE TABLE `orders_detail` (
  `od_id` int(6) NOT NULL,
  `oid` int(7) UNSIGNED ZEROFILL NOT NULL,
  `pid` int(7) NOT NULL,
  `item` int(7) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `orders_detail`
--

INSERT INTO `orders_detail` (`od_id`, `oid`, `pid`, `item`) VALUES
(16, 0000000, 2, 1),
(17, 0000004, 2, 3),
(18, 0000005, 3, 1),
(19, 0000008, 18, 2),
(20, 0000009, 19, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(7) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_price` float NOT NULL,
  `p_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `p_price`, `p_details`) VALUES
(21, 'adidas Originals รองเท้าผู้ชาย ZX 750', 4000, 'รองเท้าประจำวันที่ได้รับแรงบันดาลใจจากนักวิ่งคลาสสิก'),
(22, 'Jordan รองเท้าผู้ชาย Air 3 Retro', 7500, 'ย้อนกลับไปในปี 1988 ด้วยหนึ่งในสีสันของรองเท้าผ้าใบที่เป็นที่ต้องการมากที่สุดตลอดกาล AJ3 "White Cement Reimagined" ฉลองครบรอบ 35 ปีด้วยสุนทรียะแห่งวัยที่นิยามใหม่เหนือกาลเวลา นำกลิ่นอายวินเทจมาใช้ด้วยสีเหลืองที่พื้นรองเท้าชั้นกลาง ตาไก่ และแถบด้านหลัง บวกกับแบรนด์ Nike Air สุดคลาสสิกที่ส้น พิมพ์ลายช้าง (อัปเดตเพื่อเลียนแบบรุ่นดั้งเดิมปี 88) และสาดสีแดงของ Sail และ Fire Red ทำให้ดีไซน์ดั้งเดิมมีชีวิตชีวาและสวยงาม'),
(23, 'Crocs รองเท้าแตะผู้ชาย Echo Marbled Slide', 2790, 'ข้อมูลผลิตภัณฑ์รีวิวการจัดส่งการคืนสินค้า\r\nEcho Collection เหมาะสำหรับผู้ที่ต้องการความสบายโดยไม่ประนีประนอมกับรูปลักษณ์ของพวกเขา Slide ที่หล่อขึ้นรูปอย่างสมบูรณ์ ด้วยการแกะสลักที่โดดเด่นและแรงบันดาลใจแบบสปอร์ตที่ยึดแนวสตรีทเป็นแกนหลัก ด้วยโครงสร้าง Croslite™ ลายหินอ่อนและแผ่นรองฝ่าเท้า LiteRide™'),
(24, 'On Running รองเท้าผู้ชาย Cloudmonster', 7000, 'นำเสนอ CloudTec® ที่ใหญ่ที่สุดของเราเพื่อการรองรับแรงกระแทกและพลังงานสูงสุด เหมือนการก้าวเดินของสัตว์ประหลาดบนท้องถนน'),
(25, 'adidas Originals รองเท้าผู้ชาย NMD_R1', 5500, ''),
(26, 'Nike รองเท้าผู้หญิง Dunk High', 4300, 'สร้างสรรค์ขึ้นสำหรับเดินบนไม้เนื้อแข็งแต่สามารถสวมใส่ได้บนท้องถนน ไอคอนบีบอลยุค 80 นี้กลับมาเพื่อให้คุณดูสูงเสียดฟ้าด้วยหนังที่เฉียบคมและสีสันแบบเรโทร รายละเอียดแบบคลาสสิกและสไตล์ห่วงย้อนยุคให้เกียรติ Dunk รุ่นออริจินัล ขณะที่ส่วนหุ้มข้อสูงบุนวมเพิ่มลุคแบบย้อนยุคที่ฝังรากอยู่ในความสบาย'),
(27, 'Nike รองเท้าผู้ชาย Air Force 1 07', 4300, 'สร้างสรรค์ขึ้นสำหรับเดินบนไม้เนื้อแข็งแต่สามารถสวมใส่ได้บนท้องถนน ไอคอนบีบอลยุค 80 นี้กลับมาเพื่อให้คุณดูสูงเสียดฟ้าด้วยหนังที่เฉียบคมและสีสันแบบเรโทร รายละเอียดแบบคลาสสิกและสไตล์ห่วงย้อนยุคให้เกียรติ Dunk รุ่นออริจินัล ขณะที่ส่วนหุ้มข้อสูงบุนวมเพิ่มลุคแบบย้อนยุคที่ฝังรากอยู่ในความสบาย'),
(28, 'New Balance รองเท้าผู้ชาย 725', 3490, 'แฟน ๆ ของรองเท้าผ้าใบสไตล์เรโทรจะต้องหลงรักรุ่น 725 อย่างแน่นอน รองเท้าผ้าใบสไตล์คุณพ่อรุ่นนี้ใช้สีที่เป็นสีกลาง ซึ่งจับคู่แต่งตัวได้ง่าย รุ่น 725 มีรูปลักษณ์สไตล์สปอร์ต และมาพร้อมกับระบบลดแรงกระแทก ABZORB ของแบรนด์เพื่อความสบายเท้าตลอดวัน ด้านบนทำจากหนังสังเคราะห์และตาข่ายมารวมกัน และประดับด้วยโลโก้ N อันเป็นเอกลักษณ์ของ New Balance มีสัญลักษณ์เพิ่มเติมที่ลิ้นรองเท้า ส้นรองเท้า และพื้นรองเท้าชั้นใน'),
(29, 'Nike รองเท้าผู้หญิง Air Max 270', 6000, 'Air Max ไลฟ์สไตล์รุ่นแรกของ Nike นำเสนอสไตล์ ความสบาย และทัศนคติที่หลากหลายด้วยหน้าต่าง Air ขนาดใหญ่พิเศษที่นำเสนอหนึ่งในนวัตกรรมที่ยิ่งใหญ่ที่สุดของเรา เพิ่มส่วนหุ้มข้อด้านบนและส่วนหุ้มข้อน้ำหนักเบา');

-- --------------------------------------------------------

--
-- Table structure for table `studio`
--

CREATE TABLE `studio` (
  `s_id` int(3) NOT NULL,
  `s_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `studio`
--

INSERT INTO `studio` (`s_id`, `s_name`) VALUES
(9876, 'ghibli'),
(9877, 'disney'),
(9878, 'dreamworks');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `disney`
--
ALTER TABLE `disney`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`od_id`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`od_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `studio`
--
ALTER TABLE `studio`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3004;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cus_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4337;
--
-- AUTO_INCREMENT for table `disney`
--
ALTER TABLE `disney`
  MODIFY `d_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `od_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `od_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
