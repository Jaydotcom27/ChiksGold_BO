-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2022 at 03:42 AM
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
-- Database: `chiksgold_bo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `ID` int(11) NOT NULL,
  `Category` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `Title` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `Price` float NOT NULL,
  `Description` text COLLATE utf8_unicode_ci NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`ID`, `Category`, `Title`, `Price`, `Description`, `Status`) VALUES
(1, 'League of Legends', 'Lvl 209 Las ACC', 209, 'LoL | Level 374 | Region LAS | Champions: 150 | Skins: 144 | Plat 4 \r\n', 0),
(16, 'Diablo III', 'Max Level ACC', 200, 'PC Level 91 Sorceress | Tal Rashas Set | Fake Email | Full', 0),
(18, 'Runescape 3', 'Maxed', 655, 'RS3 Max Cape Main | 2857 Total | 110 QP | 101 Herb | 120 Invent |', 0),
(21, 'WOW Classic', 'Tauren Warrior', 500, 'US | Bigglesworth| Horde | Level 30 Tauren Warrior | Transferable', 1),
(22, 'League of Legends', 'Lvl 267 Diamond', 599, 'League of Legends | Level 267 | Region EUW | Solo Rank Diamond', 1),
(23, 'Runescape 2', '110 QP Main', 499, 'RS3 Max Cape Main | 2857 Total | 110 QP | 101 Herb | 120 Invent |', 1),
(24, 'Runescape 3', 'Max Cape', 854, 'RS3 Max Cape Main | 3010 Total | 258 QP | 120 Slayer | 120', 0),
(25, 'World of Warcraft', 'Troll & Shaman', 179, 'US | Herod | Horde | Level 60 Troll Shaman | Transferable | Sub', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` int(11) NOT NULL,
  `Total` float NOT NULL,
  `PaymentMethod` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `OrderAccount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID`, `Total`, `PaymentMethod`, `OrderAccount`) VALUES
(1, 50, 'Credit Card', 1),
(2, 50, 'Paypal', 1),
(3, 50, 'Credit Card', 1),
(4, 5034, 'Credit Card', 1),
(5, 312, 'PayPal', 12),
(6, 50, 'Credit Card', 1),
(7, 350, 'Crypto', 17),
(8, 40, 'Crypto', 18),
(9, 350, 'Crypto', 17),
(10, 30, 'Crypto', 1),
(11, 2332, 'Credit Card', 25),
(12, 209, 'Crypto', 1),
(13, 655, 'Crypto', 18),
(14, 854, 'PayPal', 24);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
