-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 18, 2026 at 05:06 PM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `location` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `fullname`, `email`, `phone`, `location`, `message`, `created_at`) VALUES
(1, 'Alice Wonder', 'alice@example.com', '+250 788901234', 'Kigali', 'I love your hotel service!', '2026-04-10 08:34:23'),
(2, 'Bob Builder', 'bob@example.com', '+250 788567890', 'Huye', 'When will you open a branch here?', '2026-04-10 08:34:23'),
(3, 'Niyonizeye Eriksen', 'niyonizeyeeriksen36@gmail.com', '0723527171', 'Rubavu', 'I appreciate for your good services', '2026-04-15 08:13:40'),
(4, 'Aphrodis NIYONSENGA', 'niyonsengaaphrodis36@gmail.com', '66778', 'hhjdh', 'hjjhhhhhhhhhhhhhhhdsiiwqioooo', '2026-04-15 08:15:31');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `menu` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `fullname`, `email`, `phone`, `menu`, `address`, `date`, `created_at`) VALUES
(7, 'Habarurema Jean Damascene', 'habaruremaJeandamascene2@gmail.com', '0783 355 366', 'Passion Juice', 'Gisagara District, Mugera Village', '2026-04-25', '2026-04-15 08:21:45'),
(8, 'Bimenyimana Epiphanie', 'bimenyimanaepiphanie@gmail.com', '0723 564 879', 'Fried Fish', 'Huye District, Rubengera cell, A122House', '2026-05-01', '2026-04-15 08:24:34'),
(4, 'Aphrodis NIYONSENGA', 'niyonsengaaphrodis36@gmail.com', '0790389067', 'Drink', 'District; Huye \r\nSector; Ngoma\r\nHouse; A223', '2026-04-11', '2026-04-10 08:40:04'),
(5, 'NIYONSHIMA Christina', 'niyochris2002@gmail.com', '0784245873', 'Mango Juice', 'District;Huye, Cell;Agateme', '2026-04-11', '2026-04-10 15:13:17'),
(6, 'Irasubiza Kevine', 'irasubizakevine22@gmail.com', '0727478877', 'Coca Cola', 'huye district, Agasengasenga cell', '2026-04-24', '2026-04-10 15:17:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', '2026-04-10 08:33:40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
