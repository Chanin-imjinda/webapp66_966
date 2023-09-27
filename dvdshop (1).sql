-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2023 at 08:11 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dvdshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE `actor` (
  `actor_id` int(3) NOT NULL,
  `actor_name` varchar(30) NOT NULL,
  `actor_lastname` varchar(30) NOT NULL,
  `actor_talaphone` varchar(11) NOT NULL,
  `actor_movie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='actor';

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`actor_id`, `actor_name`, `actor_lastname`, `actor_talaphone`, `actor_movie`) VALUES
(1, 'คีอานู', ' รีฟ', '77654214445', 'จอห์นวิค แรงกว่านรก'),
(2, 'ไมเคิล', 'นีควิสต์', '77675215415', 'จอห์นวิค แรงกว่านรก'),
(3, 'พอล', 'วอล์กเกอร์', '77178659874', 'เร็ว..แรงทะลุนรก'),
(4, 'วิน', 'ดีเซล', '77675278846', 'เร็ว..แรงทะลุนรก'),
(5, 'ทอม', 'ครูซ', '77854214311', 'มิชชั่น:อิมพอสซิเบิ้ล ล่าพิกัดมรณะ '),
(6, 'เฮย์ลีย์', 'แอตเวลล์', '77624213345', 'มิชชั่น:อิมพอสซิเบิ้ล ล่าพิกัดมรณะ ');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `m_id` int(3) NOT NULL,
  `m_name` varchar(30) NOT NULL,
  `m_lastname` varchar(30) NOT NULL,
  `m_email` varchar(100) NOT NULL,
  `m_telephone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='member';

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`m_id`, `m_name`, `m_lastname`, `m_email`, `m_telephone`) VALUES
(0, 'sdzzz', 'faa', 'eanaw91@gmail.com', '0841234760'),
(1, 'Chanin​', 'imjinda', 'Chanin951@gmail.com', '0943178795'),
(2, 'jirayus', 'chompen', 'Jirayus710@gmail.com', '0957314876'),
(3, 'varakornkich', 'namkhem', 'Varakornkich870@gmail.com', '0988424394'),
(4, 'kanoksak', 'klinfung', 'Kanoksak510@gmail.com', '0615845402'),
(5, 'nakarin', 'phichaichuang', 'Nakarin441@gmail.com', '0947941740'),
(6, 'Ranaw', 'Chanatip', 'Ranaw91@gmail.com', '0841234769'),
(7, 'sdff', 'faa', 'eanaw91@gmail.com', '0841234760'),
(8, 'df', 'ffs', 'fanaw91@gmail.com', '08464646841');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(3) NOT NULL,
  `movie_name` varchar(30) NOT NULL,
  `movie_time` time NOT NULL,
  `movie_category` varchar(50) NOT NULL,
  `movie_detail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='movie';

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `movie_name`, `movie_time`, `movie_category`, `movie_detail`) VALUES
(0, 'adaw', '00:00:00', '01:10:50', 'awddawdad'),
(1, 'จอห์นวิค แรงกว่านรก', '01:41:12', 'แอ็คชั่น', 'เป็นเรื่องราวของนักฆ่ามืออาชีพที่กลับมาในวงการนักฆ่า'),
(2, 'เร็ว..แรงทะลุนรก', '01:46:01', 'แอ็คชั่น', 'ไบรอัน โอคอนเนอร์ ตำรวจลอสแอนเจลิส ที่ปลอมตัวเข้าไปในกลุ่มของโดมินิก'),
(3, 'มิชชั่น:อิมพอสซิเบิ้ล ล่าพิกัด', '01:57:00', 'แอ็คชั่น', 'เป็นภาพยนตร์แอ็คชันและสืบสวนที่ตระหนักถึงนักแสดงที่มีประสบการณ์และบทบาทที่น่าสนใจ'),
(5, 'feefsfa', '00:00:00', '01:10:50', 'wadawdawdsadsgasdsga'),
(6, 'fasffadwda', '00:00:00', '01:10:50', 'awddawdad'),
(7, 'aw', '00:00:00', '01:10:50', 'awdawda'),
(8, 'efsf', '00:00:00', '01:10:50', 'fsfefsfefefesfwes'),
(9, 'efsf', '00:00:00', '01:10:50', 'fsfefsfefefesfwes');

-- --------------------------------------------------------

--
-- Table structure for table `shop_member`
--

CREATE TABLE `shop_member` (
  `s_name` varchar(30) NOT NULL,
  `s_lastname` varchar(30) NOT NULL,
  `s_email` varchar(30) NOT NULL,
  `s_movie_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin COMMENT='SHOP';

--
-- Dumping data for table `shop_member`
--

INSERT INTO `shop_member` (`s_name`, `s_lastname`, `s_email`, `s_movie_name`) VALUES
('adawd', 'adwada', 'adawdawd', 'จอห์นวิค แรงกว่านรก');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`actor_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
