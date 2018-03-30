-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2018 at 01:46 AM
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
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(10) UNSIGNED NOT NULL,
  `creator_id` int(10) UNSIGNED NOT NULL,
  `event_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_url` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponsor_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sponsor_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sponsor_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sponsor_name1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponsor_logo1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponsor_url1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponsor_name2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponsor_logo2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponsor_url2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_flier` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_flier1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_flier2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `org_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `org_logo` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lga` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_starts` date DEFAULT NULL,
  `event_ends` date DEFAULT NULL,
  `ticket_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ticket_qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sales_start` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sales_end` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `act_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `act_img` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `act_loc` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `act_desc` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `act_date` date NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `sch_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sch_start` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sch_end` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sch_name1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sch_start1` date NOT NULL,
  `sch_end1` date NOT NULL,
  `sch_name2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sch_start2` date NOT NULL,
  `sch_end2` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_creator_id_foreign` (`creator_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_creator_id_foreign` FOREIGN KEY (`creator_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
