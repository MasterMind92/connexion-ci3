-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 27, 2023 at 05:22 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `module_bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `traces`
--

CREATE TABLE `traces` (
  `id_trace` int NOT NULL,
  `lib_trace` varchar(255) DEFAULT NULL,
  `url_page` varchar(255) DEFAULT NULL,
  `page_title` varchar(255) DEFAULT NULL,
  `lib_action` varchar(255) NOT NULL,
  `descr_action` varchar(255) NOT NULL,
  `email_user` varchar(255) DEFAULT NULL,
  `etat_log` set('A','I','S') DEFAULT NULL,
  `ip_adress` varchar(32) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `terminal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `traces`
--
ALTER TABLE `traces`
  ADD PRIMARY KEY (`id_trace`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `traces`
--
ALTER TABLE `traces`
  MODIFY `id_trace` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
