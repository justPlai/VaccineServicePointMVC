-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2022 at 05:56 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

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
  `filler` int(5) NOT NULL,
  `locationlink` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`id`, `stationName`, `date_start`, `date_end`, `time_start`, `time_end`, `websiteOfficial`, `imgIcon`, `filler`, `locationlink`) VALUES
(1, 'ศูนย์บางใหญ่', '2022-02-18', '2022-02-20', '22:31:18', '23:31:18', NULL, NULL, 1, NULL),
(2, 'อาคารคอนเวนชัน', '2022-02-09', '2022-02-24', '24:31:18', '33:31:18', NULL, NULL, 2, NULL),
(3, 'รพ.จุฬาภรณ์', '2022-02-02', '2022-02-02', '23:11:46', '23:18:46', ' www.chulabhornhospital.com', '', 1, ' https://goo.gl/maps/JWEzM4RYPVCaR1op8'),
(4, 'รพ.จุฬาลงกรณ์', '2022-02-16', '2022-02-01', '22:21:08', '23:21:08', 'CTW - Vaccine (kcmh.or.th)', '', 1, 'https://www.google.com/maps/place/%E0%B9%80%E0%B8%8B%E0%B9%87%E0%B8%99%E0%B8%97%E0%B8%A3%E0%B8%B1%E0%B8%A5%E0%B9%80%E0%B8%A7%E0%B8%B4%E0%B8%A5%E0%B8%94%E0%B9%8C/@13.7468613,100.5368355,17z/data=!3m1!4b1!4m5!3m4!1s0x30e29ecfc2f455e1:0xc4ad0280d8906604!8m2!3d13.7468613!4d100.5390242'),
(5, 'รพ.ปากเกร็ด', '2022-02-15', '2022-02-19', '32:21:08', '22:26:08', 'https://www.prachachat.net/marketing/news-845345\r\n\r\n', NULL, 2, 'https://www.google.com/maps/dir/14.024704,99.8703104/%E0%B8%A3%E0%B8%9E.%E0%B8%9B%E0%B8%B2%E0%B8%81%E0%B9%80%E0%B8%81%E0%B8%A3%E0%B9%87%E0%B8%94/@13.9047794,99.8861061,10z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x30e285e9f075097b:0xfc74195b06f1760a!2m2!1d100.461269!2d13.949472\r\n\r\n'),
(6, 'ศูนย์บางซื่อ', '2022-02-01', '2022-02-28', '42:29:57', '54:29:57', 'https://www.prachachat.net/marketing/news-846560\r\n\r\n', NULL, 1, 'https://www.google.com/maps/dir/14.024704,99.8703104/%E0%B8%A8%E0%B8%B9%E0%B8%99%E0%B8%A2%E0%B9%8C%E0%B8%9A%E0%B8%A3%E0%B8%B4%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%AA%E0%B8%B2%E0%B8%98%E0%B8%B2%E0%B8%A3%E0%B8%93%E0%B8%AA%E0%B8%B8%E0%B8%82+3+%E0%B8%9A%E0%B8%B2%E0%B8%87%E0%B8%8B%E0%B8%B7%E0%B9%88%E0%B8%AD+596+%E0%B8%96%E0%B8%99%E0%B8%99+%E0%B9%80%E0%B8%95%E0%B8%8A%E0%B8%B0%E0%B8%A7%E0%B8%93%E0%B8%B4%E0%B8%8A+%E0%B9%81%E0%B8%82%E0%B8%A7%E0%B8%87+%E0%B8%9A%E0%B8%B2%E0%B8%87%E0%B8%8B%E0%B8%B7%E0%B9%88%E0%B8%AD+%E0%B9%80%E0%B8%82%E0%B8%95%E0%B8%9A%E0%B8%B2%E0%B8%87%E0%B8%8B%E0%B8%B7%E0%B9%88%E0%B8%AD+%E0%B8%81%E0%B8%A3%E0%B8%B8%E0%B8%87%E0%B9%80%E0%B8%97%E0%B8%9E%E0%B8%A1%E0%B8%AB%E0%B8%B2%E0%B8%99%E0%B8%84%E0%B8%A3+10800/@13.9048993,100.0571222,11z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x30e29c0b4626ec1d:0x971ca7ce1ff2fb3b!2m2!1d100.5339876!2d13.8023201'),
(7, 'รพ.นพรัตนราชธานี', '2022-01-01', '2022-01-31', '38:30:58', '53:30:58', 'https://www.prachachat.net/marketing/news-849701', NULL, 1, 'https://www.google.com/maps/dir/14.024704,99.8703104/%E0%B9%82%E0%B8%A3%E0%B8%87%E0%B8%9E%E0%B8%A2%E0%B8%B2%E0%B8%9A%E0%B8%B2%E0%B8%A5+%E0%B8%99%E0%B8%9E%E0%B8%A3%E0%B8%B1%E0%B8%95%E0%B8%99%E0%B8%A3%E0%B8%B2%E0%B8%8A%E0%B8%98%E0%B8%B2%E0%B8%99%E0%B8%B5+679+%E0%B8%96.+%E0%B8%A3%E0%B8%B2%E0%B8%A1%E0%B8%AD%E0%B8%B4%E0%B8%99%E0%B8%97%E0%B8%A3%E0%B8%B2+%E0%B9%81%E0%B8%82%E0%B8%A7%E0%B8%87+%E0%B8%84%E0%B8%B1%E0%B8%99%E0%B8%99%E0%B8%B2%E0%B8%A2%E0%B8%B2%E0%B8%A7+%E0%B9%80%E0%B8%82%E0%B8%95%E0%B8%84%E0%B8%B1%E0%B8%99%E0%B8%99%E0%B8%B2%E0%B8%A2%E0%B8%B2%E0%B8%A7+%E0%B8%81%E0%B8%A3%E0%B8%B8%E0%B8%87%E0%B9%80%E0%B8%97%E0%B8%9E%E0%B8%A1%E0%B8%AB%E0%B8%B2%E0%B8%99%E0%B8%84%E0%B8%A3+10230/@13.929619,99.9895244,10z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x311d639f96c8e659:0xf0100b33d0c44c0!2m2!1d100.6880292!2d13.8174056'),
(8, 'รพ.ธรรมศาสตร์', '2022-02-15', '2022-02-28', '31:32:34', '41:32:34', 'https://www.prachachat.net/marketing/news-850829', NULL, 1, 'https://www.google.com/maps/dir/14.024704,99.8703104/%E0%B9%82%E0%B8%A3%E0%B8%87%E0%B8%9E%E0%B8%A2%E0%B8%B2%E0%B8%9A%E0%B8%B2%E0%B8%A5%E0%B8%98%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B8%A8%E0%B8%B2%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B9%8C%E0%B9%80%E0%B8%89%E0%B8%A5%E0%B8%B4%E0%B8%A1%E0%B8%9E%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%81%E0%B8%B5%E0%B8%A2%E0%B8%A3%E0%B8%95%E0%B8%B4+%E0%B8%AB%E0%B8%A1%E0%B8%B9%E0%B9%88%E0%B8%97%E0%B8%B5%E0%B9%88+8+95+%E0%B8%97%E0%B8%B2%E0%B8%87%E0%B8%84%E0%B8%B9%E0%B9%88%E0%B8%82%E0%B8%99%E0%B8%B2%E0%B8%99+%E0%B8%96.+%E0%B8%9E%E0%B8%AB%E0%B8%A5%E0%B9%82%E0%B8%A2%E0%B8%98%E0%B8%B4%E0%B8%99+%E0%B8%95%E0%B8%B3%E0%B8%9A%E0%B8%A5+%E0%B8%84%E0%B8%A5%E0%B8%AD%E0%B8%87%E0%B8%AB%E0%B8%99%E0%B8%B6%E0%B9%88%E0%B8%87+%E0%B8%AD%E0%B8%B3%E0%B9%80%E0%B8%A0%E0%B8%AD%E0%B8%84%E0%B8%A5%E0%B8%AD%E0%B8%87%E0%B8%AB%E0%B8%A5%E0%B8%A7%E0%B8%87+%E0%B8%9B%E0%B8%97%E0%B8%B8%E0%B8%A1%E0%B8%98%E0%B8%B2%E0%B8%99%E0%B8%B5+12120/@13.9235195,99.9542534,10z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x30e27f8b524'),
(9, 'รพ.ศิริราช', '2022-02-01', '2022-02-28', '25:32:34', '37:32:34', 'https://www.prachachat.net/marketing/news-860068', NULL, 1, 'https://www.google.com/maps/dir/14.024704,99.8703104/%E0%B9%82%E0%B8%A3%E0%B8%87%E0%B8%9E%E0%B8%A2%E0%B8%B2%E0%B8%9A%E0%B8%B2%E0%B8%A5%E0%B8%A8%E0%B8%B4%E0%B8%A3%E0%B8%B4%E0%B8%A3%E0%B8%B2%E0%B8%8A+2+%E0%B8%96%E0%B8%99%E0%B8%99+%E0%B8%A7%E0%B8%B1%E0%B8%87%E0%B8%AB%E0%B8%A5%E0%B8%B1%E0%B8%87+%E0%B9%81%E0%B8%82%E0%B8%A7%E0%B8%87%E0%B8%A8%E0%B8%B4%E0%B8%A3%E0%B8%B4%E0%B8%A3%E0%B8%B2%E0%B8%8A+%E0%B9%80%E0%B8%82%E0%B8%95%E0%B8%9A%E0%B8%B2%E0%B8%87%E0%B8%81%E0%B8%AD%E0%B8%81%E0%B8%99%E0%B9%89%E0%B8%AD%E0%B8%A2+%E0%B8%81%E0%B8%A3%E0%B8%B8%E0%B8%87%E0%B9%80%E0%B8%97%E0%B8%9E%E0%B8%A1%E0%B8%AB%E0%B8%B2%E0%B8%99%E0%B8%84%E0%B8%A3+10700/@13.9000723,100.0285953,11z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x30e29916e62305c1:0xdf2f8380e0a0e1aa!2m2!1d100.4837898!2d13.7568294'),
(10, 'รพ.ปิยะเวท', '2021-12-01', '2021-12-31', '24:34:36', '37:34:36', 'https://www.prachachat.net/marketing/news-860530\r\n\r\n', NULL, 1, 'https://www.google.com/maps/dir/14.024704,99.8703104/%E0%B9%82%E0%B8%A3%E0%B8%87%E0%B8%9E%E0%B8%A2%E0%B8%B2%E0%B8%9A%E0%B8%B2%E0%B8%A5%E0%B8%9B%E0%B8%B4%E0%B8%A2%E0%B8%B0%E0%B9%80%E0%B8%A7%E0%B8%97+998+%E0%B8%96%E0%B8%99%E0%B8%99+%E0%B8%A3%E0%B8%B4%E0%B8%A1%E0%B8%84%E0%B8%A5%E0%B8%AD%E0%B8%87%E0%B8%AA%E0%B8%B2%E0%B8%A1%E0%B9%80%E0%B8%AA%E0%B8%99+%E0%B9%81%E0%B8%82%E0%B8%A7%E0%B8%87+%E0%B8%9A%E0%B8%B2%E0%B8%87%E0%B8%81%E0%B8%B0%E0%B8%9B%E0%B8%B4+%E0%B9%80%E0%B8%82%E0%B8%95%E0%B8%AB%E0%B9%89%E0%B8%A7%E0%B8%A2%E0%B8%82%E0%B8%A7%E0%B8%B2%E0%B8%87+%E0%B8%81%E0%B8%A3%E0%B8%B8%E0%B8%87%E0%B9%80%E0%B8%97%E0%B8%9E%E0%B8%A1%E0%B8%AB%E0%B8%B2%E0%B8%99%E0%B8%84%E0%B8%A3+10310/@13.9000723,100.0285953,11z/data=!4m9!4m8!1m1!4e1!1m5!1m1!1s0x30e29e5e7726e455:0x4b1ab49dca7cb646!2m2!1d100.5800847!2d13.7533822'),
(11, 'MBK Center', '2022-02-01', '2022-02-28', '28:35:25', '36:35:25', '', NULL, 1, 'https://www.google.com/maps/dir/14.024704,99.8703104/%E0%B9%82%E0%B8%A3%E0%B8%87%E0%B8%9E%E0%B8%A2%E0%B8%B2%E0%B8%9A%E0%B8%B2%E0%B8%A5%E0%B8%9B%E0%B8%B4%E0%B8%A2%E0%B8%B0%E0%B9%80%E0%B8%A7%E0%B8%97+998+%E0%B8%96%E0%B8%99%E0%B8%99+%E0%B8%A3%E0%B8%B4%E0%B8%A1%E0%B8%84%E0%B8%A5%E0%B8%AD%E0%B8%87%E0%B8%AA%E0%B8%B2%E0%B8%A1%E0%B9%80%E0%B8%AA%E0%B8%99+%E0%B9%81%E0%B8%82%E0%B8%A7%E0%B8%87+%E0%B8%9A%E0%B8%B2%E0%B8%87%E0%B8%81%E0%B8%B0%E0%B8%9B%E0%B8%B4+%E0%B9%80%E0%B8%82%E0%B8%95%E0%B8%AB%E0%B9%89%E0%B8%A7%E0%B8%A2%E0%B8%82%E0%B8%A7%E0%B8%B2%E0%B8%87+%E0%B8%81%E0%B8%A3%E0%B8%B8%E0%B8%87%E0%B9%80%E0%B8%97%E0%B8%9E%E0%B8%A1%E0%B8%AB%E0%B8%B2%E0%B8%99%E0%B8%84%E0%B8%A3+10310/@13.8980861,99.9355521,10z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x30e29e5e7726e455:0x4b1ab49dca7cb646!2m2!1d100.5800847!2d13.7533822'),
(12, 'สถานเสาวภาฯ', '2022-02-01', '2022-02-01', '38:30:58', '54:29:57', 'https://qsmi-booster.kcmh.or.th/', NULL, 1, 'https://www.google.com/maps/dir/14.024704,99.8703104/%E0%B8%AA%E0%B8%96%E0%B8%B2%E0%B8%99%E0%B9%80%E0%B8%AA%E0%B8%B2%E0%B8%A7%E0%B8%A0%E0%B8%B2+%E0%B8%AA%E0%B8%A0%E0%B8%B2%E0%B8%81%E0%B8%B2%E0%B8%8A%E0%B8%B2%E0%B8%94%E0%B9%84%E0%B8%97%E0%B8%A2+1871+%E0%B8%96%E0%B8%99%E0%B8%99%E0%B8%9E%E0%B8%A3%E0%B8%B0%E0%B8%A3%E0%B8%B2%E0%B8%A1%E0%B8%97%E0%B8%B5%E0%B9%88+%E0%B9%94+%E0%B9%81%E0%B8%82%E0%B8%A7%E0%B8%87+%E0%B8%9B%E0%B8%97%E0%B8%B8%E0%B8%A1%E0%B8%A7%E0%B8%B1%E0%B8%99+%E0%B9%80%E0%B8%82%E0%B8%95%E0%B8%9B%E0%B8%97%E0%B8%B8%E0%B8%A1%E0%B8%A7%E0%B8%B1%E0%B8%99+%E0%B8%81%E0%B8%A3%E0%B8%B8%E0%B8%87%E0%B9%80%E0%B8%97%E0%B8%9E%E0%B8%A1%E0%B8%AB%E0%B8%B2%E0%B8%99%E0%B8%84%E0%B8%A3+10330/@13.8877829,100.060797,11z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x30e29f2a5742b231:0xe9e35279efea3ae9!2m2!1d100.532687!2d13.7322856'),
(13, 'รพ.วชิรพยาบาล', '2022-02-01', '2022-02-19', '32:21:08', '37:32:34', 'https://eservice.vajira.ac.th/vjrvaccine/online/index.php/ps/register/check3?fbclid=IwAR3XvFMtC0QY5F', NULL, 1, 'https://www.google.com/maps/dir/14.024704,99.8703104/%E0%B9%82%E0%B8%A3%E0%B8%87%E0%B8%9E%E0%B8%A2%E0%B8%B2%E0%B8%9A%E0%B8%B2%E0%B8%A5%E0%B8%A7%E0%B8%8A%E0%B8%B4%E0%B8%A3%E0%B8%9E%E0%B8%A2%E0%B8%B2%E0%B8%9A%E0%B8%B2%E0%B8%A5+681+%E0%B8%96%E0%B8%99%E0%B8%99+%E0%B8%AA%E0%B8%B2%E0%B8%A1%E0%B9%80%E0%B8%AA%E0%B8%99+%E0%B9%81%E0%B8%82%E0%B8%A7%E0%B8%87+%E0%B8%A7%E0%B8%8A%E0%B8%B4%E0%B8%A3%E0%B8%9E%E0%B8%A2%E0%B8%B2%E0%B8%9A%E0%B8%B2%E0%B8%A5+%E0%B9%80%E0%B8%82%E0%B8%95%E0%B8%94%E0%B8%B8%E0%B8%AA%E0%B8%B4%E0%B8%95+%E0%B8%81%E0%B8%A3%E0%B8%B8%E0%B8%87%E0%B9%80%E0%B8%97%E0%B8%9E%E0%B8%A1%E0%B8%AB%E0%B8%B2%E0%B8%99%E0%B8%84%E0%B8%A3+10300/@13.9048993,100.0405289,11z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x30e2995ff3547271:0x29fa4e9a551a8175!2m2!1d100.5093968!2d13.7811064'),
(14, 'นนท์พร้อมพลัส', '2022-02-15', '2022-02-19', '27:41:58', '30:41:58', 'https://xn--o3cdavpl4ezlya.com/nontpp/?fbclid=IwAR0qBdUkXlS3Kk83PydI682AenfMd3i3avMx-WBy9fTCSQr-AsBN', NULL, 1, 'https://www.google.com/maps/dir/14.024704,99.8703104/%E0%B8%AA%E0%B8%B3%E0%B8%99%E0%B8%B1%E0%B8%81%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B8%AA%E0%B8%B2%E0%B8%98%E0%B8%B2%E0%B8%A3%E0%B8%93%E0%B8%AA%E0%B8%B8%E0%B8%82%E0%B8%88%E0%B8%B1%E0%B8%87%E0%B8%AB%E0%B8%A7%E0%B8%B1%E0%B8%94%E0%B8%99%E0%B8%99%E0%B8%97%E0%B8%9A%E0%B8%B8%E0%B8%A3%E0%B8%B5+VG77%2B9F7+%E0%B8%9A%E0%B8%B2%E0%B8%87%E0%B8%81%E0%B8%A3%E0%B8%B0%E0%B8%AA%E0%B8%AD+%E0%B8%AD%E0%B8%B3%E0%B9%80%E0%B8%A0%E0%B8%AD%E0%B9%80%E0%B8%A1%E0%B8%B7%E0%B8%AD%E0%B8%87%E0%B8%99%E0%B8%99%E0%B8%97%E0%B8%9A%E0%B8%B8%E0%B8%A3%E0%B8%B5+%E0%B8%99%E0%B8%99%E0%B8%97%E0%B8%9A%E0%B8%B8%E0%B8%A3%E0%B8%B5+11000/@13.9522262,100.0425784,11z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x30e29b4f24e9326b:0xb2502b7e73b1e892!2m2!1d100.5136572!2d13.8634033');

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
(1, 1, 1, 500, 1, NULL),
(2, 2, 3, 1000, 0, NULL),
(3, 4, 1, 1000, 1, NULL),
(4, 5, 2, 1000, 1, NULL),
(5, 6, 4, 2000, 1, NULL),
(6, 7, 4, 1500, 1, NULL),
(7, 8, 2, 500, 1, NULL),
(8, 9, 1, 2500, 1, NULL),
(9, 10, 2, 1500, 1, NULL),
(10, 11, 2, 1000, 1, NULL),
(11, 12, 1, 1300, 1, NULL),
(12, 13, 2, 1400, 1, NULL),
(13, 14, 1, 3000, 1, NULL),
(14, 3, 1, 1500, 1, NULL);

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
-- AUTO_INCREMENT for table `vaccine`
--
ALTER TABLE `vaccine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vaccinedetail`
--
ALTER TABLE `vaccinedetail`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `station`
--
ALTER TABLE `station`
  ADD CONSTRAINT `station_ibfk_1` FOREIGN KEY (`filler`) REFERENCES `account` (`id`);

--
-- Constraints for table `vaccinedetail`
--
ALTER TABLE `vaccinedetail`
  ADD CONSTRAINT `vaccinedetail_ibfk_1` FOREIGN KEY (`stationId`) REFERENCES `station` (`id`),
  ADD CONSTRAINT `vaccinedetail_ibfk_2` FOREIGN KEY (`vaccineId`) REFERENCES `vaccine` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
