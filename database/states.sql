-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 05, 2017 at 02:54 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipcofip`
--

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(10) UNSIGNED NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `state`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'DTTO. CAPITAL', 1, NULL, NULL),
(2, 'ANZOATEGUI', 1, NULL, NULL),
(3, 'APURE', 1, NULL, NULL),
(4, 'ARAGUA', 1, NULL, NULL),
(5, 'BARINAS', 1, NULL, NULL),
(6, 'BOLIVAR', 1, NULL, NULL),
(7, 'CARABOBO', 1, NULL, NULL),
(8, 'COJEDES', 1, NULL, NULL),
(9, 'FALCON', 1, NULL, NULL),
(10, 'GUARICO', 1, NULL, NULL),
(11, 'LARA', 1, NULL, NULL),
(12, 'MERIDA', 1, NULL, NULL),
(13, 'MIRANDA', 1, NULL, NULL),
(14, 'MONAGAS', 1, NULL, NULL),
(15, 'NUEVA ESPARTA', 1, NULL, NULL),
(16, 'PORTUGUESA', 1, NULL, NULL),
(17, 'SUCRE', 1, NULL, NULL),
(18, 'TACHIRA', 1, NULL, NULL),
(19, 'TRUJILLO', 1, NULL, NULL),
(20, 'YARACUY', 1, NULL, NULL),
(21, 'ZULIA', 1, NULL, NULL),
(22, 'AMAZONAS', 1, NULL, NULL),
(23, 'DELTA AMACURO', 1, NULL, NULL),
(24, 'VARGAS', 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `states_country_id_foreign` (`country_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `states`
--
ALTER TABLE `states`
  ADD CONSTRAINT `states_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
