-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2022 at 03:47 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

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
(2, 'plai001', '123', 'yenpram', 'artid');

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
  `filler` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`id`, `stationName`, `date_start`, `date_end`, `time_start`, `time_end`, `websiteOfficial`, `imgIcon`, `filler`) VALUES
(1, 'บางใหญ่', '2022-02-18', '2022-02-20', '22:31:18', '26:31:18', NULL, NULL, 1),
(2, 'นครปฐม', '2022-02-09', '2022-02-24', '24:31:18', '33:31:18', NULL, NULL, 2);

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
(2, 2, 3, 1000, 0, NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `station`
--
ALTER TABLE `station`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vaccine`
--
ALTER TABLE `vaccine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vaccinedetail`
--
ALTER TABLE `vaccinedetail`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
