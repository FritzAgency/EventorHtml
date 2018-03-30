-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2018 at 01:36 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventor`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reset_token` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `org_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `gender`, `email`, `password`, `reset_token`, `dob`, `phoneNumber`, `twitter`, `facebook`, `instagram`, `org_name`, `Address`, `created_at`, `updated_at`) VALUES
(16, 'Abiodun', 'Adetona', NULL, 'adetonaabiodun12@gmail.com', 'aec5b37707e546960001825cf1eacb45', '', '2018-03-18', '08161829520', 'adetona', 'adetona', 'Abiodun Adetona', NULL, '2, odo eja, soka', '2018-03-17 23:00:00', NULL),
(17, 'xkbd', 'xkbd', NULL, 'xkbd@gmail.com', 'ffac2a74f3321439c3c91cb9dad517b6', '', '2018-03-19', '08161829520', 'adetona', 'adetona', 'Abiodun Adetona', NULL, 'VI, Lagos', '2018-03-18 23:00:00', NULL),
(18, 'Safiya', 'Sule', NULL, 'safiyajsule@gmail.com', 'e6a765fdb780f7dcb9780ebbeed15d5f', '', '1981-11-20', '08164449969', 'Safffyy', '', 'saffysu', NULL, 'No 2, Adeyemo Alakija Street, GRA, Ikeja', '2018-03-18 23:00:00', NULL),
(19, 'Abiodun', 'Adetona', NULL, 'abiodun@fritzng.com', 'aec5b37707e546960001825cf1eacb45', '', '2018-03-21', '', '', '', 'Abiodun Adetona', NULL, '2, odo eja, soka', '2018-03-20 23:00:00', NULL),
(20, 'Leo', 'Messi', NULL, 'Leo@gmail.com', 'aec5b37707e546960001825cf1eacb45', '', '2018-03-24', '08161829520', '', '', '', NULL, '', '2018-03-23 23:00:00', NULL),
(30, '', '', NULL, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', '', NULL, '', '2018-03-28 23:00:00', NULL),
(31, '', '', NULL, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', '', NULL, '', '2018-03-28 23:00:00', NULL),
(32, 'carlos', 'Robert', NULL, 'carlos@gmail.com', 'aec5b37707e546960001825cf1eacb45', '', '', '', '', '', '', NULL, '', '2018-03-28 23:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
