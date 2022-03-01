-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2022 at 01:40 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaccineservicepoint`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) CHARACTER SET tis620 NOT NULL,
  `firstName` varchar(30) CHARACTER SET tis620 NOT NULL,
  `lastName` varchar(30) CHARACTER SET tis620 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `password`, `firstName`, `lastName`) VALUES
(1, 'plai', '123', 'artid', 'yenpram'),
(2, 'plai001', '123', 'yenpram', 'artid'),
(3, 'Eggmorph', 'NoctisAK47', 'thanakorn', 'phothipanyathum'),
(4, 'Facehugger', 'Dominian01', 'Sigourney', 'Weaver'),
(5, 'RoyalFacehugger', 'JaMeSkett69', 'Thomas', 'Skerritt'),
(6, 'Chestburster', 'Promis596', 'Veronica', 'Cartwright'),
(7, 'Warriormorph', '0956548657', 'Harry', 'Stanton'),
(8, 'Queenmorph', '0856369586', 'John', 'Hurt'),
(9, 'Runnermorph', 'John123456', 'Ronald', 'Shusett'),
(10, 'Newbornmorph', 'JameFort47', 'Yaphet', 'Kotto'),
(11, 'Predalien', 'Special123', 'Bolaji', 'Badejo'),
(12, 'Deaconmorph', 'motherLess1285', 'lan', 'holm'),
(13, 'Neomorph', 'zxc0123456789', 'Daniel', 'McBride'),
(14, 'FlyingXenomorph', 'jameS04020540', 'Helen', 'Horton'),
(15, 'Alphamorph', 'anime1234', 'Ian', 'McShane'),
(16, 'Irradiated', 'kimkillall147', 'Keanu', 'Reeves'),
(17, 'Aquatic', 'bombnuclear', 'Kim', 'Jongun'),
(18, 'WallMaria', 'attackUK', 'Vladimir', 'Putin'),
(19, 'Wall Rose', 'defendUK', 'Volodymyr', 'Zelensky'),
(20, 'WallSina', 'Killallenemy', 'eren', 'yeager');

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `id` int(11) NOT NULL,
  `stationName` varchar(30) CHARACTER SET tis620 NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `websiteOfficial` varchar(100) CHARACTER SET tis620 DEFAULT NULL,
  `imgIcon` varchar(500) DEFAULT NULL,
  `filler` int(11) NOT NULL,
  `locationlink` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`id`, `stationName`, `date_start`, `date_end`, `time_start`, `time_end`, `websiteOfficial`, `imgIcon`, `filler`, `locationlink`) VALUES
(1, 'รพ.รามาธิบดี', '2022-02-18', '2022-03-15', '08:30:00', '16:30:00', 'https://www.rama.mahidol.ac.th/rama_hospital/', 'https://www.rama.mahidol.ac.th/sites/default/files/Rama_Logo_Color-192.png', 1, 'https://www.google.com/maps/place/%E0%B9%82%E0%B8%A3%E0%B8%87%E0%B8%9E%E0%B8%A2%E0%B8%B2%E0%B8%9A%E0%B8%B2%E0%B8%A5%E0%B8%A3%E0%B8%B2%E0%B8%A1%E0%B8%B2%E0%B8%98%E0%B8%B4%E0%B8%9A%E0%B8%94%E0%B8%B5/@13.7665105,100.5267221,15z/data=!4m2!3m1!1s0x0:0xc4dd9b398f456bcf?sa=X&ved=2ahUKEwjkn_W4-pz2AhXNzDgGHQh7AMQQ_BJ6BAgtEAU'),
(2, 'อาคารคอนเวนชัน', '2022-02-09', '2022-02-24', '08:30:00', '16:30:00', 'https://th.top10place.com/----1493577537.html', 'https://media.discordapp.net/attachments/653439303543816222/947505479775580160/edu_kasetsart.jpg', 1, 'https://www.google.com/maps/place/%E0%B8%AB%E0%B9%89%E0%B8%AD%E0%B8%87%E0%B8%84%E0%B8%AD%E0%B8%99%E0%B9%80%E0%B8%A7%E0%B8%99%E0%B8%8A%E0%B8%B1%E0%B9%88%E0%B8%99+%E0%B8%A1.%E0%B9%80%E0%B8%81%E0%B8%A9%E0%B8%95%E0%B8%A3(%E0%B8%81%E0%B8%B3%E0%B9%81%E0%B8%9E%E0%B8%87%E0%B9%81%E0%B8%AA%E0%B8%99)/@14.0230671,99.9769596,15z/data=!4m2!3m1!1s0x0:0x7b6a88e07a18f323?sa=X&ved=2ahUKEwjvsOH5-Zz2AhUwzDgGHdadCNoQ_BJ6BAgjEAU'),
(3, 'รพ.จุฬาภรณ์', '2022-02-02', '2022-02-21', '08:30:00', '16:30:00', 'https://www.cra.ac.th/th/news_activities/view/covid_vaccine', 'https://cdn.discordapp.com/attachments/653439303543816222/947502934558638120/logo.png', 1, 'https://www.google.com/maps/place/%E0%B9%82%E0%B8%A3%E0%B8%87%E0%B8%9E%E0%B8%A2%E0%B8%B2%E0%B8%9A%E0%B8%B2%E0%B8%A5%E0%B8%88%E0%B8%B8%E0%B8%AC%E0%B8%B2%E0%B8%A5%E0%B8%87%E0%B8%81%E0%B8%A3%E0%B8%93%E0%B9%8C+%E0%B8%AA%E0%B8%A0%E0%B8%B2%E0%B8%81%E0%B8%B2%E0%B8%8A%E0%B8%B2%E0%B8%94%E0%B9%84%E0%B8%97%E0%B8%A2/@13.7323658,100.5373184,15z/data=!4m2!3m1!1s0x0:0xdb584fa3e3e2f5c0?sa=X&ved=2ahUKEwii48_i-5z2AhU8zTgGHVc5DtEQ_BJ6BAgzEAU'),
(4, 'รพ.จุฬาลงกรณ์', '2022-01-18', '2022-02-01', '08:30:00', '16:30:00', 'https://www.bangkokbiznews.com/news/985332', 'https://cdn.discordapp.com/attachments/653439303543816222/947504165083545720/logo_1.png', 1, 'https://www.google.com/maps/place/%E0%B9%80%E0%B8%8B%E0%B9%87%E0%B8%99%E0%B8%97%E0%B8%A3%E0%B8%B1%E0%B8%A5%E0%B9%80%E0%B8%A7%E0%B8%B4%E0%B8%A5%E0%B8%94%E0%B9%8C/@13.7468613,100.5368355,17z/data=!3m1!4b1!4m5!3m4!1s0x30e29ecfc2f455e1:0xc4ad0280d8906604!8m2!3d13.7468613!4d100.5390242'),
(5, 'รพ.ปากเกร็ด', '2022-01-19', '2022-02-27', '08:30:00', '16:30:00', 'https://www.prachachat.net/marketing/news-845345\r\n\r\n', 'http://gishealth.moph.go.th/healthmap/upload/logo/p_10760_181115_131613.JPG', 1, 'https://www.google.com/maps/dir/14.024704,99.8703104/%E0%B8%A3%E0%B8%9E.%E0%B8%9B%E0%B8%B2%E0%B8%81%E0%B9%80%E0%B8%81%E0%B8%A3%E0%B9%87%E0%B8%94/@13.9047794,99.8861061,10z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x30e285e9f075097b:0xfc74195b06f1760a!2m2!1d100.461269!2d13.949472\r\n\r\n'),
(6, 'ศูนย์บางซื่อ', '2022-01-20', '2022-03-15', '08:30:00', '16:30:00', 'https://www.prachachat.net/marketing/news-846560\r\n\r\n', 'https://img.pptvhd36.com/thumbor/2021/07/29/e677745c38.jpg', 1, 'https://www.google.com/maps/dir/14.024704,99.8703104/%E0%B8%A8%E0%B8%B9%E0%B8%99%E0%B8%A2%E0%B9%8C%E0%B8%9A%E0%B8%A3%E0%B8%B4%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%AA%E0%B8%B2%E0%B8%98%E0%B8%B2%E0%B8%A3%E0%B8%93%E0%B8%AA%E0%B8%B8%E0%B8%82+3+%E0%B8%9A%E0%B8%B2%E0%B8%87%E0%B8%8B%E0%B8%B7%E0%B9%88%E0%B8%AD+596+%E0%B8%96%E0%B8%99%E0%B8%99+%E0%B9%80%E0%B8%95%E0%B8%8A%E0%B8%B0%E0%B8%A7%E0%B8%93%E0%B8%B4%E0%B8%8A+%E0%B9%81%E0%B8%82%E0%B8%A7%E0%B8%87+%E0%B8%9A%E0%B8%B2%E0%B8%87%E0%B8%8B%E0%B8%B7%E0%B9%88%E0%B8%AD+%E0%B9%80%E0%B8%82%E0%B8%95%E0%B8%9A%E0%B8%B2%E0%B8%87%E0%B8%8B%E0%B8%B7%E0%B9%88%E0%B8%AD+%E0%B8%81%E0%B8%A3%E0%B8%B8%E0%B8%87%E0%B9%80%E0%B8%97%E0%B8%9E%E0%B8%A1%E0%B8%AB%E0%B8%B2%E0%B8%99%E0%B8%84%E0%B8%A3+10800/@13.9048993,100.0571222,11z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x30e29c0b4626ec1d:0x971ca7ce1ff2fb3b!2m2!1d100.5339876!2d13.8023201'),
(7, 'รพ.นพรัตนราชธานี', '2022-01-25', '2022-01-31', '08:30:00', '16:30:00', 'https://www.prachachat.net/marketing/news-849701', 'https://cdn.discordapp.com/attachments/653439303543816222/947504892929511464/logo63.png', 1, 'https://www.google.com/maps/dir/14.024704,99.8703104/%E0%B9%82%E0%B8%A3%E0%B8%87%E0%B8%9E%E0%B8%A2%E0%B8%B2%E0%B8%9A%E0%B8%B2%E0%B8%A5+%E0%B8%99%E0%B8%9E%E0%B8%A3%E0%B8%B1%E0%B8%95%E0%B8%99%E0%B8%A3%E0%B8%B2%E0%B8%8A%E0%B8%98%E0%B8%B2%E0%B8%99%E0%B8%B5+679+%E0%B8%96.+%E0%B8%A3%E0%B8%B2%E0%B8%A1%E0%B8%AD%E0%B8%B4%E0%B8%99%E0%B8%97%E0%B8%A3%E0%B8%B2+%E0%B9%81%E0%B8%82%E0%B8%A7%E0%B8%87+%E0%B8%84%E0%B8%B1%E0%B8%99%E0%B8%99%E0%B8%B2%E0%B8%A2%E0%B8%B2%E0%B8%A7+%E0%B9%80%E0%B8%82%E0%B8%95%E0%B8%84%E0%B8%B1%E0%B8%99%E0%B8%99%E0%B8%B2%E0%B8%A2%E0%B8%B2%E0%B8%A7+%E0%B8%81%E0%B8%A3%E0%B8%B8%E0%B8%87%E0%B9%80%E0%B8%97%E0%B8%9E%E0%B8%A1%E0%B8%AB%E0%B8%B2%E0%B8%99%E0%B8%84%E0%B8%A3+10230/@13.929619,99.9895244,10z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x311d639f96c8e659:0xf0100b33d0c44c0!2m2!1d100.6880292!2d13.8174056'),
(8, 'รพ.ธรรมศาสตร์', '2022-01-26', '2022-02-28', '08:30:00', '16:30:00', 'https://www.prachachat.net/marketing/news-850829', 'https://upload.wikimedia.org/wikipedia/th/thumb/b/b5/TUHospital.jpeg/640px-TUHospital.jpeg', 1, 'https://www.google.com/maps/dir/14.024704,99.8703104/%E0%B9%82%E0%B8%A3%E0%B8%87%E0%B8%9E%E0%B8%A2%E0%B8%B2%E0%B8%9A%E0%B8%B2%E0%B8%A5%E0%B8%98%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B8%A8%E0%B8%B2%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B9%8C%E0%B9%80%E0%B8%89%E0%B8%A5%E0%B8%B4%E0%B8%A1%E0%B8%9E%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%81%E0%B8%B5%E0%B8%A2%E0%B8%A3%E0%B8%95%E0%B8%B4+%E0%B8%AB%E0%B8%A1%E0%B8%B9%E0%B9%88%E0%B8%97%E0%B8%B5%E0%B9%88+8+95+%E0%B8%97%E0%B8%B2%E0%B8%87%E0%B8%84%E0%B8%B9%E0%B9%88%E0%B8%82%E0%B8%99%E0%B8%B2%E0%B8%99+%E0%B8%96.+%E0%B8%9E%E0%B8%AB%E0%B8%A5%E0%B9%82%E0%B8%A2%E0%B8%98%E0%B8%B4%E0%B8%99+%E0%B8%95%E0%B8%B3%E0%B8%9A%E0%B8%A5+%E0%B8%84%E0%B8%A5%E0%B8%AD%E0%B8%87%E0%B8%AB%E0%B8%99%E0%B8%B6%E0%B9%88%E0%B8%87+%E0%B8%AD%E0%B8%B3%E0%B9%80%E0%B8%A0%E0%B8%AD%E0%B8%84%E0%B8%A5%E0%B8%AD%E0%B8%87%E0%B8%AB%E0%B8%A5%E0%B8%A7%E0%B8%87+%E0%B8%9B%E0%B8%97%E0%B8%B8%E0%B8%A1%E0%B8%98%E0%B8%B2%E0%B8%99%E0%B8%B5+12120/@13.9235195,99.9542534,10z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x30e27f8b524'),
(9, 'รพ.ศิริราช', '2022-02-08', '2022-02-22', '08:30:00', '16:30:00', 'https://www.prachachat.net/marketing/news-860068', 'https://www2.si.mahidol.ac.th/division/nursing/sins/images/AboutUs/logo/sins_logo.gif', 1, 'https://www.google.com/maps/dir/14.024704,99.8703104/%E0%B9%82%E0%B8%A3%E0%B8%87%E0%B8%9E%E0%B8%A2%E0%B8%B2%E0%B8%9A%E0%B8%B2%E0%B8%A5%E0%B8%A8%E0%B8%B4%E0%B8%A3%E0%B8%B4%E0%B8%A3%E0%B8%B2%E0%B8%8A+2+%E0%B8%96%E0%B8%99%E0%B8%99+%E0%B8%A7%E0%B8%B1%E0%B8%87%E0%B8%AB%E0%B8%A5%E0%B8%B1%E0%B8%87+%E0%B9%81%E0%B8%82%E0%B8%A7%E0%B8%87%E0%B8%A8%E0%B8%B4%E0%B8%A3%E0%B8%B4%E0%B8%A3%E0%B8%B2%E0%B8%8A+%E0%B9%80%E0%B8%82%E0%B8%95%E0%B8%9A%E0%B8%B2%E0%B8%87%E0%B8%81%E0%B8%AD%E0%B8%81%E0%B8%99%E0%B9%89%E0%B8%AD%E0%B8%A2+%E0%B8%81%E0%B8%A3%E0%B8%B8%E0%B8%87%E0%B9%80%E0%B8%97%E0%B8%9E%E0%B8%A1%E0%B8%AB%E0%B8%B2%E0%B8%99%E0%B8%84%E0%B8%A3+10700/@13.9000723,100.0285953,11z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x30e29916e62305c1:0xdf2f8380e0a0e1aa!2m2!1d100.4837898!2d13.7568294'),
(10, 'รพ.ปิยะเวท', '2022-02-08', '2022-02-24', '08:30:00', '16:30:00', 'https://www.prachachat.net/marketing/news-860530\r\n\r\n', 'https://www.isranews.org/article/images/stories/flexicontent/l_piyavet-pr1304.jpg', 1, 'https://www.google.com/maps/dir/14.024704,99.8703104/%E0%B9%82%E0%B8%A3%E0%B8%87%E0%B8%9E%E0%B8%A2%E0%B8%B2%E0%B8%9A%E0%B8%B2%E0%B8%A5%E0%B8%9B%E0%B8%B4%E0%B8%A2%E0%B8%B0%E0%B9%80%E0%B8%A7%E0%B8%97+998+%E0%B8%96%E0%B8%99%E0%B8%99+%E0%B8%A3%E0%B8%B4%E0%B8%A1%E0%B8%84%E0%B8%A5%E0%B8%AD%E0%B8%87%E0%B8%AA%E0%B8%B2%E0%B8%A1%E0%B9%80%E0%B8%AA%E0%B8%99+%E0%B9%81%E0%B8%82%E0%B8%A7%E0%B8%87+%E0%B8%9A%E0%B8%B2%E0%B8%87%E0%B8%81%E0%B8%B0%E0%B8%9B%E0%B8%B4+%E0%B9%80%E0%B8%82%E0%B8%95%E0%B8%AB%E0%B9%89%E0%B8%A7%E0%B8%A2%E0%B8%82%E0%B8%A7%E0%B8%B2%E0%B8%87+%E0%B8%81%E0%B8%A3%E0%B8%B8%E0%B8%87%E0%B9%80%E0%B8%97%E0%B8%9E%E0%B8%A1%E0%B8%AB%E0%B8%B2%E0%B8%99%E0%B8%84%E0%B8%A3+10310/@13.9000723,100.0285953,11z/data=!4m9!4m8!1m1!4e1!1m5!1m1!1s0x30e29e5e7726e455:0x4b1ab49dca7cb646!2m2!1d100.5800847!2d13.7533822'),
(11, 'MBK Center', '2022-02-10', '2022-03-31', '10:30:00', '20:30:00', 'https://mbk-center.co.th/blog_detail.php?b=19', 'https://www.mbkhotels.com/wp-content/uploads/2021/04/cropped-MBKno-slogan.png', 1, 'https://www.google.com/maps/dir/14.024704,99.8703104/%E0%B9%82%E0%B8%A3%E0%B8%87%E0%B8%9E%E0%B8%A2%E0%B8%B2%E0%B8%9A%E0%B8%B2%E0%B8%A5%E0%B8%9B%E0%B8%B4%E0%B8%A2%E0%B8%B0%E0%B9%80%E0%B8%A7%E0%B8%97+998+%E0%B8%96%E0%B8%99%E0%B8%99+%E0%B8%A3%E0%B8%B4%E0%B8%A1%E0%B8%84%E0%B8%A5%E0%B8%AD%E0%B8%87%E0%B8%AA%E0%B8%B2%E0%B8%A1%E0%B9%80%E0%B8%AA%E0%B8%99+%E0%B9%81%E0%B8%82%E0%B8%A7%E0%B8%87+%E0%B8%9A%E0%B8%B2%E0%B8%87%E0%B8%81%E0%B8%B0%E0%B8%9B%E0%B8%B4+%E0%B9%80%E0%B8%82%E0%B8%95%E0%B8%AB%E0%B9%89%E0%B8%A7%E0%B8%A2%E0%B8%82%E0%B8%A7%E0%B8%B2%E0%B8%87+%E0%B8%81%E0%B8%A3%E0%B8%B8%E0%B8%87%E0%B9%80%E0%B8%97%E0%B8%9E%E0%B8%A1%E0%B8%AB%E0%B8%B2%E0%B8%99%E0%B8%84%E0%B8%A3+10310/@13.8980861,99.9355521,10z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x30e29e5e7726e455:0x4b1ab49dca7cb646!2m2!1d100.5800847!2d13.7533822'),
(12, 'สถานเสาวภาฯ', '2022-02-17', '2022-02-25', '08:30:00', '16:30:00', 'https://qsmi-booster.kcmh.or.th/', 'https://saovabha.org/assets/front/images/logo.svg', 1, 'https://www.google.com/maps/dir/14.024704,99.8703104/%E0%B8%AA%E0%B8%96%E0%B8%B2%E0%B8%99%E0%B9%80%E0%B8%AA%E0%B8%B2%E0%B8%A7%E0%B8%A0%E0%B8%B2+%E0%B8%AA%E0%B8%A0%E0%B8%B2%E0%B8%81%E0%B8%B2%E0%B8%8A%E0%B8%B2%E0%B8%94%E0%B9%84%E0%B8%97%E0%B8%A2+1871+%E0%B8%96%E0%B8%99%E0%B8%99%E0%B8%9E%E0%B8%A3%E0%B8%B0%E0%B8%A3%E0%B8%B2%E0%B8%A1%E0%B8%97%E0%B8%B5%E0%B9%88+%E0%B9%94+%E0%B9%81%E0%B8%82%E0%B8%A7%E0%B8%87+%E0%B8%9B%E0%B8%97%E0%B8%B8%E0%B8%A1%E0%B8%A7%E0%B8%B1%E0%B8%99+%E0%B9%80%E0%B8%82%E0%B8%95%E0%B8%9B%E0%B8%97%E0%B8%B8%E0%B8%A1%E0%B8%A7%E0%B8%B1%E0%B8%99+%E0%B8%81%E0%B8%A3%E0%B8%B8%E0%B8%87%E0%B9%80%E0%B8%97%E0%B8%9E%E0%B8%A1%E0%B8%AB%E0%B8%B2%E0%B8%99%E0%B8%84%E0%B8%A3+10330/@13.8877829,100.060797,11z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x30e29f2a5742b231:0xe9e35279efea3ae9!2m2!1d100.532687!2d13.7322856'),
(13, 'รพ.วชิรพยาบาล', '2022-02-18', '2022-02-25', '08:30:00', '16:30:00', 'https://eservice.vajira.ac.th/vjrvaccine/online/index.php/ps/register/check3?fbclid=IwAR3XvFMtC0QY5F', 'https://www.vajira.ac.th/assets/images/logo-566c3f0e.png', 1, 'https://www.google.com/maps/dir/14.024704,99.8703104/%E0%B9%82%E0%B8%A3%E0%B8%87%E0%B8%9E%E0%B8%A2%E0%B8%B2%E0%B8%9A%E0%B8%B2%E0%B8%A5%E0%B8%A7%E0%B8%8A%E0%B8%B4%E0%B8%A3%E0%B8%9E%E0%B8%A2%E0%B8%B2%E0%B8%9A%E0%B8%B2%E0%B8%A5+681+%E0%B8%96%E0%B8%99%E0%B8%99+%E0%B8%AA%E0%B8%B2%E0%B8%A1%E0%B9%80%E0%B8%AA%E0%B8%99+%E0%B9%81%E0%B8%82%E0%B8%A7%E0%B8%87+%E0%B8%A7%E0%B8%8A%E0%B8%B4%E0%B8%A3%E0%B8%9E%E0%B8%A2%E0%B8%B2%E0%B8%9A%E0%B8%B2%E0%B8%A5+%E0%B9%80%E0%B8%82%E0%B8%95%E0%B8%94%E0%B8%B8%E0%B8%AA%E0%B8%B4%E0%B8%95+%E0%B8%81%E0%B8%A3%E0%B8%B8%E0%B8%87%E0%B9%80%E0%B8%97%E0%B8%9E%E0%B8%A1%E0%B8%AB%E0%B8%B2%E0%B8%99%E0%B8%84%E0%B8%A3+10300/@13.9048993,100.0405289,11z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x30e2995ff3547271:0x29fa4e9a551a8175!2m2!1d100.5093968!2d13.7811064'),
(14, 'นนท์พร้อมพลัส', '2022-02-21', '2022-02-27', '09:00:00', '15:30:00', 'https://xn--o3cdavpl4ezlya.com/nontpp/?fbclid=IwAR0qBdUkXlS3Kk83PydI682AenfMd3i3avMx-WBy9fTCSQr-AsBN', 'https://นนท์พร้อม.com/nontpp/img/logo.5e899e67.png', 1, 'https://www.google.com/maps/dir/14.024704,99.8703104/%E0%B8%AA%E0%B8%B3%E0%B8%99%E0%B8%B1%E0%B8%81%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B8%AA%E0%B8%B2%E0%B8%98%E0%B8%B2%E0%B8%A3%E0%B8%93%E0%B8%AA%E0%B8%B8%E0%B8%82%E0%B8%88%E0%B8%B1%E0%B8%87%E0%B8%AB%E0%B8%A7%E0%B8%B1%E0%B8%94%E0%B8%99%E0%B8%99%E0%B8%97%E0%B8%9A%E0%B8%B8%E0%B8%A3%E0%B8%B5+VG77%2B9F7+%E0%B8%9A%E0%B8%B2%E0%B8%87%E0%B8%81%E0%B8%A3%E0%B8%B0%E0%B8%AA%E0%B8%AD+%E0%B8%AD%E0%B8%B3%E0%B9%80%E0%B8%A0%E0%B8%AD%E0%B9%80%E0%B8%A1%E0%B8%B7%E0%B8%AD%E0%B8%87%E0%B8%99%E0%B8%99%E0%B8%97%E0%B8%9A%E0%B8%B8%E0%B8%A3%E0%B8%B5+%E0%B8%99%E0%B8%99%E0%B8%97%E0%B8%9A%E0%B8%B8%E0%B8%A3%E0%B8%B5+11000/@13.9522262,100.0425784,11z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x30e29b4f24e9326b:0xb2502b7e73b1e892!2m2!1d100.5136572!2d13.8634033');

-- --------------------------------------------------------

--
-- Table structure for table `stationdetail`
--

CREATE TABLE `stationdetail` (
  `id` int(11) NOT NULL,
  `stationId` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `totalDosed` int(11) DEFAULT NULL,
  `filler` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

CREATE TABLE `vaccine` (
  `id` int(11) NOT NULL,
  `vaccineName` varchar(30) NOT NULL,
  `imgIcon` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccine`
--

INSERT INTO `vaccine` (`id`, `vaccineName`, `imgIcon`) VALUES
(1, 'Pfizer', 'http://www.efinancethai.com/news/picture/2020/12/4/T/5596774.jpg'),
(2, 'Astra', 'https://www.astrazeneca.com/content/dam/az/homepage/AZ_RGB_H_COL_1200x630.jpg'),
(3, 'Moderna', 'https://www.keionline.org/wp-content/uploads/Moderna-logo.jpg'),
(4, 'Sinopharm', 'https://kmc.exim.go.th/files/article/thumb/5b735481ff48fbe30a0b91b424457a87.png');

-- --------------------------------------------------------

--
-- Table structure for table `vaccinedetail`
--

CREATE TABLE `vaccinedetail` (
  `id` int(5) NOT NULL,
  `stationId` int(11) NOT NULL,
  `vaccineId` int(5) NOT NULL,
  `totalDose` int(5) NOT NULL,
  `walk_in` tinyint(1) NOT NULL,
  `description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccinedetail`
--

INSERT INTO `vaccinedetail` (`id`, `stationId`, `vaccineId`, `totalDose`, `walk_in`, `description`) VALUES
(1, 1, 1, 500, 1, 'วัคซีนสูตรซิโนแวค-ซิโนแวค(เข็ม1และเข็ม2)เว้นช่วง4สัปดาห์ก่อนฉีดเข็ม3ด้วยวัคซีนแอสตร้าเซนเนก้าหรือไฟเซอร์<br>\nวัคซีนสูตรซิโนฟาร์ม-ซิโนฟาร์ม(เข็ม1และเข็ม2)เว้นช่วง4สัปดาห์ก่อนฉีดเข็ม3ด้วยวัคซีนแอสตร้าเซนเนก้าหรือไฟเซอร์<br>\nวัคซีนสูตรซิโนแวค-แอสตร้าเซนเนก้า(เข็ม1และเข็ม2)เว้นช่วง3เดือนก่อนฉีดเข็ม3ด้วยแอสตร้าเซนเนก้าหรือไฟเซอร์<br>\nวัคซีนสูตรซิโนแวค-ไฟเซอร์(เข็ม1และเข็ม2)เว้นช่วง3เดือนก่อนฉีดเข็ม3ด้วยแอสตร้าเซนเนก้าหรือไฟเซอร์<br>\n'),
(2, 2, 1, 1000, 1, 'วัคซีนสูตรซิโนแวค-ซิโนแวค(เข็ม1และเข็ม2)เว้นช่วง4สัปดาห์ก่อนฉีดเข็ม3ด้วยวัคซีนแอสตร้าเซนเนก้าหรือไฟเซอร์<br>\r\nวัคซีนสูตรซิโนฟาร์ม-ซิโนฟาร์ม(เข็ม1และเข็ม2)เว้นช่วง4สัปดาห์ก่อนฉีดเข็ม3ด้วยวัคซีนแอสตร้าเซนเนก้าหรือไฟเซอร์<br>\r\nวัคซีนสูตรซิโนแวค-แอสตร้าเซนเนก้า(เข็ม1และเข็ม2)เว้นช่วง3เดือนก่อนฉีดเข็ม3ด้วยแอสตร้าเซนเนก้าหรือไฟเซอร์<br>\r\nวัคซีนสูตรซิโนแวค-ไฟเซอร์(เข็ม1และเข็ม2)เว้นช่วง3เดือนก่อนฉีดเข็ม3ด้วยแอสตร้าเซนเนก้าหรือไฟเซอร์<br>\r\n'),
(3, 4, 1, 1000, 1, '-เข็มที่ 3<br>\r\n-สำหรับประชาชนทั่วไป<br>\r\n-สามารถลงทะเบียนและอ่านรายละเอียดเพิ่มเติมได้ที่สแกน QR Code หรือ https://ctw-vaccine.kcmh.or.th/<br>\r\n-โดยผู้ที่ผ่านการลงทะเบียนรับสิทธิ สามารถเข้ารับการฉีดวัคซีนตามวันและเวลาที่ได้ลงทะเบียนไว้เท่านั้น ณ จุดบริการวัคซีน โซนเอเทรียม ชั้น 7 ศูนย์การค้าเซ็นทรัลเวิลด์\r\n'),
(4, 5, 2, 1000, 1, '•	เข็มที่ 1 สำหรับผู้ที่ไม่เคยฉีดวัคซีนชนิดใดมาก่อน อายุ 18 ปีขึ้นไป<br>\r\n•	เข็ม 2 สำหรับผู้ที่ฉีดวัคซีนไม่ครบ หรือหลังติดเชื้อโควิด<br>\r\n•	เข็ม 3 สำหรับผู้ที่ฉีด Sinovac 1 + Sinovac 2 หรือ Sinopharm 1 + Sinopharm 2 โดยห่างจากเข็ม 2 เป็นเวลา 1 เดือน<br>\r\n•	สำหรับสูตรไขว้ Sinovac 1+ AstraZeneca 2 หรือ Sinopharm 1+AstraZeneca 2 ห่างจากเข็ม 2 เป็นเวลา 3 เดือน<br>\r\n•	ให้บริการแก่บุคคลทั่วไปทุกพื้นที่และทุกสัญชาติ<br>\r\n'),
(5, 6, 4, 2000, 1, '•	เด็กที่มีสิทธิฉีดไฟเซอร์ของศูนย์บางซื่อ อายุตั้งแต่ 12–18 ปี (เกิดตั้งแต่วันที่ 1 มกราคม 2547-วันที่ 31 ธันวาคม 2553)<br>\r\n•	เคยได้รับวัคซีนซิโนฟาร์ม (Sinopharm) จากทุกศูนย์ฉีดอื่น ๆ ครบแล้ว 2 เข็ม<br>\r\n•	รับเข็มที่ 2 มาแล้วอย่างน้อย 30 วัน และไม่เคยได้รับเข็มที่ 3 มาก่อน<br>\r\n•	ทั้งคนไทย/ต่างชาติ/ต่างด้าว<br>\r\n'),
(6, 7, 4, 1500, 1, 'ผู้ที่ต้องการฉีดวัคซีนเข็ม 3<br>\r\n1.ห่างจากเข็ม 2 ไม่ต่ำกว่า 1 เดือน โดย 2 เข็มแรกเป็นซิโนแวค/ซิโนฟาร์ม<br>\r\n2.ห่างจากเข็ม 2 ไม่ต่ำกว่า 3 เดือน โดย 2 เข็มแรกเป็นแอสตร้าเซนเนก้า หรือเข็มแรกเป็นซิโนแวค/ซิโนฟาร์ม และเข็ม 2 เป็นแอสตร้าเซนเนก้าหรือไฟเซอร์<br>\r\nผู้ที่ต้องการฉีดวัคซีนเข็ม 4<br>\r\n1.ห่างจากเข็ม 3 ไม่ต่ำกว่า 3 เดือน โดย 2 เข็มแรกเป็นซิโนแวคหรือซิโนฟาร์ม และเข็ม 3 เป็นแอสตร้าเซนเนก้าหรือไฟเซอร์<br>\r\nทั้งนี้ ผู้สูงอายุ 70 ปีขึ้นไป หรือผู้ที่มีบัตรผู้พิการ Walk in ได้\r\n'),
(7, 8, 2, 390, 1, '•	วันจันทร์-ศุกร์ (เฉพาะวันราชการ)<br>\r\n•	เวลา 09.00 – 12.00 น.<br>\r\n•	ณ ห้องประชุมสถาพร กวิตานนท์ ชั้น 3 อาคารบริการ<br>\r\n•	วันละ 300 คน<br>\r\n'),
(8, 9, 1, 2500, 1, '1.	กรณีเข็ม 1 (PZ1) ได้แก่ผู้ที่มีอายุระหว่าง 12-17 ปี<br>\r\n2.	กรณีเข็ม 2 (PZ2) ได้แก่ผู้ที่ได้รับวัคซีนเข็ม 1 เป็นไฟเซอร์เกิน 3 สัปดาห์ หรือแอสตร้าเซนเนก้าเกิน 4 สัปดาห์<br>\r\n3.	กรณีเข็ม 3 (PZ3) ได้แก่<br>\r\n•	ผู้ที่ได้รับวัคซีนแอสตร้าเซนเนก้าครบ 2 เข็ม (สูตร AZ1-AZ2) มาแล้วอย่างน้อย 12 สัปดาห์<br>\r\n•	ผู้ที่ได้รับวัคซีนซิโนแวคหรือซิโนฟาร์มเป็นเข็ม 1 และแอสตรhาเซนเนก้า เป็นเข็ม 2 (สูตร SV1/SP1-AZ2) มาแล้วอย่างน้อย 12 สัปดาห์<br>\r\n•	ผู้ที่ได้รับวัคซีน แอสตราเซเนก้า หรือ ไฟเซอร์เป็นเข็ม 1 และ ไฟเซอ'),
(9, 10, 2, 1500, 1, 'สามารถเลือกได้เป็นเข็ม 1, 2, 3 หรือเข็ม 4 จำนวนไม่จำกัด<br>\r\n•	เฉพาะผู้ที่อายุ 18 ปีขึ้นไป<br>\r\n'),
(10, 11, 2, 1500, 1, 'เข็มที่ 3 และ 4 วันละ 1,500 คน<br>\r\n1.เปิดให้แก่ประชาชนทั่วไป ทั้งชาวไทย และชาวต่างชาติ<br>\r\n2.สำหรับผู้จองฉีดเข็ม 3 ที่เคยได้รับวัคซีนสูตรแอสตร้าฯ+แอสตร้าฯ,ซิโนแวค+แอสตร้าฯ<br>\r\n,ซิโนฟาร์ม+แอสตร้าฯ,ซิโนแวค+ไฟเซอร์ และ ซิโนฟาร์ม+ไฟเซอร์ <br>\r\nต้องได้รับวัคซีนมาไม่ต่ำกว่า90วัน ส่วนกลุ่มที่ฉัดวัคซีนสูตรซิโนแวค+ซิโนแวค <br>\r\nและซิโนฟาร์ม+ซิโนฟาร์ม ต้องรับวัคซีนมาแล้วไม่ต่ำกว่า 30 วัน<br>\r\n3.สำหรับผู้จองฉีดเข็ม 4 ต้องเว้นระยะห่างจากเข็ม 3 ตั้งแต่ 3 เดือนขึ้นไป<br>\r\n'),
(11, 12, 1, 1300, 1, 'ไฟเซอร์” (ฉีดแบบเข้ากล้ามเนื้อ ขนาดเต็มโดส 30 mcg ) เข็ม 2 , 3  <br>\r\nเข็ม 2<br>\r\n•	เคยได้รับวัคซีน เเอสตร้าเซนเนก้า หรือ ไฟเซอร์ เป็นเข็มที่ 1 ภายในปี 2564<br>\r\n•	ฉีดวัคซีนในวันที่ 24 กุมภาพันธ์ 2565<br>\r\nเข็ม 3<br>\r\n•	เคยได้รับวัคซีน ซิโนแวค 2 เข็ม / ซิโนฟาร์ม 2 เข็ม โดยได้รับการฉีดเข็ม 2 ภายในปี 2564<br>\r\n\r\n•	เคยได้รับวัคซีน แอสตร้าเซนเนก้า 2 เข็ม ภายใน 20 พ.ย. 2564<br>\r\n\r\n•	เคยได้รับวัคซีนสูตรไขว้ (เข็ม 1 ซิโนแวค และเข็ม 2 แอสตร้าเซนเนก้า) ภายใน 20 พ.ย. 2564<br>\r\n\r\n•	เลือกฉีดวัคซีนในวันที'),
(12, 13, 2, 1400, 1, 'เข็ม 3 หรือ 4(AstraZeneca หรือ Pfizer)\r\n•	เว้นระยะห่างจากเข็ม 2 หรือ 3 ไม่น้อยกว่า 3 เดือน\r\n'),
(13, 14, 1, 1000, 0, 'เข็ม 3 และ 4<br>\r\nสำหรับผู้ที่จะได้รับวัคซีนแอสตร้าเซนเนก้าเป็นเข็มที่ 3<br>\r\n•	SV+SV ครบ 1 เดือนขึ้นไป<br>\r\n•	SP+SP ครบ 1 เดือนขึ้นไป<br>\r\n•	SV+AZ ครบ 3 เดือนขึ้นไป<br>\r\nสำหรับผู้ที่จะได้รับวัคซีนไฟเซอร์เป็นเข็มที่ 3<br>\r\n•	AZ+AZ ครบ 3 เดือนขึ้นไป<br>\r\n•	SV+PZ ครบ 3 เดือนขึ้นไป<br>\r\n•	AZ+PZ ครบ 6 เดือนขึ้นไป<br>\r\n•	PZ+PZ ครบ 6 เดือนขึ้นไป<br>\r\nสำหรับผู้ที่จะได้รับวัคซีนเข็มที่ 4<br>\r\n•	ฉีดเข็มที่ 4 ห่างจากเข็มที่ 3 เป็นเวลา 3 เดือน<br>\r\n•	สูตร 1 SV1+SV2+AZ3 = AZ4<br>\r\n•	สูตร 2 SV1+SV2+PZ3 = PZ4'),
(14, 3, 3, 270, 1, '-ลงทะเบียนเข้ารับการฉีดวัคซีนเข็ม 3 ด้วยวัคซีนโมเดอร์นาและไฟเซอร์สำหรับผู้ป่วยที่มีโรคประจำตัว 3 กลุ่มโรค \r\nที่ได้รับวัคซีนแอสตร้าเซนเนก้า ครบ 2 เข็ม เกิน 3 เดือน <br>\r\n-สำหรับ 3 กลุ่มโรคดังกล่าว ได้แก่ โรคมะเร็ง โรคหัวใจ โรคเบาหวาน รับจำนวนจำกัด 90 คน ต่อโรค รวม 270 คน โดยจะฉีดวัคซีนเข้าผ่านทางกล้ามเนื้อด้วยวัคซีน \r\n\r\n'),
(15, 14, 2, 500, 1, 'เข็มที่ 1-4 จำนวน 500 คน<br>\r\nเงื่อนไข<br>\r\nสำหรับผู้ที่จะได้รับวัคซีนเข็มที่ 3 เป็น AstraZeneca<br>\r\n•	SV+SV ครบ 1 เดือนขึ้นไป<br>\r\n•	SP+SP ครบ 1 เดือนขึ้นไป<br>\r\n•	SV+AZ ครบ 3 เดือนขึ้นไป<br>\r\nสำหรับผู้ที่จะได้รับวัคซีนเข็มที่ 3 เป็น Pfizer<br>\r\n•	AZ+AZ ครบ 3 เดือนขึ้นไป<br>\r\n•	SV+PZ ครบ 3 เดือนขึ้นไป<br>\r\n•	AZ+PZ ครบ 6 เดือนขึ้นไป<br>\r\n•	PZ+PZ ครบ 6 เดือนขึ้นไป<br>\r\nสำหรับผู้ที่จะได้รับวัคซีนเข็มที่ 4<br>\r\n•	ฉีดเข็มที่ 4 ห่างจากเข็ม 3 เป็นเวลา 3 เดือน<br>\r\n•	สูตร 1 SV1+SV2+AZ3=AZ4 จะได้รับ As'),
(16, 2, 2, 1000, 1, 'วัคซีนสูตรแอสตร้าเซนเนก้า-แอสตร้าเซนเนก้า (เข็ม 1 และ เข็ม 2) เว้นช่วง 3 เดือน ก่อนฉีดเข็ม 3 ด้วย ไฟเซอร์'),
(17, 1, 1, 444, 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`id`),
  ADD KEY `filler` (`filler`);

--
-- Indexes for table `stationdetail`
--
ALTER TABLE `stationdetail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `filler` (`filler`),
  ADD KEY `stationdetail_ibfk_1` (`stationId`);

--
-- Indexes for table `vaccine`
--
ALTER TABLE `vaccine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vaccinedetail`
--
ALTER TABLE `vaccinedetail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stationId` (`stationId`),
  ADD KEY `vaccineId` (`vaccineId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `station`
--
ALTER TABLE `station`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `stationdetail`
--
ALTER TABLE `stationdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vaccine`
--
ALTER TABLE `vaccine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vaccinedetail`
--
ALTER TABLE `vaccinedetail`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `station`
--
ALTER TABLE `station`
  ADD CONSTRAINT `station_ibfk_1` FOREIGN KEY (`filler`) REFERENCES `account` (`id`);

--
-- Constraints for table `stationdetail`
--
ALTER TABLE `stationdetail`
  ADD CONSTRAINT `stationdetail_ibfk_1` FOREIGN KEY (`stationId`) REFERENCES `station` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stationdetail_ibfk_2` FOREIGN KEY (`filler`) REFERENCES `account` (`id`);

--
-- Constraints for table `vaccinedetail`
--
ALTER TABLE `vaccinedetail`
  ADD CONSTRAINT `vaccinedetail_ibfk_1` FOREIGN KEY (`stationId`) REFERENCES `station` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vaccinedetail_ibfk_2` FOREIGN KEY (`vaccineId`) REFERENCES `vaccine` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
