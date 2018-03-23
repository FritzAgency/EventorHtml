-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2018 at 05:52 PM
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
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `org_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `org_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `org_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `org_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `event_flier` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_flier1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_flier2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `org_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `org_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `creator_id`, `event_title`, `event_url`, `event_description`, `sponsor_name`, `sponsor_logo`, `sponsor_url`, `event_flier`, `event_flier1`, `event_flier2`, `org_name`, `org_logo`, `Address`, `state`, `city`, `lga`, `status`, `event_starts`, `event_ends`, `ticket_price`, `ticket_qty`, `sales_start`, `sales_end`, `act_name`, `act_img`, `act_loc`, `act_desc`, `act_date`, `twitter`, `facebook`, `instagram`, `created_at`, `updated_at`) VALUES
(99, 19, 'Dettol show', 'Dettol-show', 'Our Nite show. ', '', '', '', 'adolf.jpg', '', '', '', '', 'VI, Lagos', 'IN', 'Ibadan', '', 'paid', '0000-00-00', '0000-00-00', '', '', NULL, NULL, '', '', '', '', '0000-00-00', '', '', '', '2018-03-22', '0000-00-00'),
(100, 19, 'SHINA PETERS ', 'SHINA-PETERS-', 'SHINA LIVE IN ABUJA', 'Anything', '', '', 'adolf.jpg', '', '', '', '', 'VI, Lagos', 'ID', 'Anywhere', '', 'paid', '0000-00-00', '0000-00-00', '100', '100', NULL, NULL, '', '', '', '', '0000-00-00', '1221', '1221', '1221', '2018-03-22', '0000-00-00'),
(101, 19, 'dbfdhgfdhgdh', 'dbfdhgfdhgdh', 'dfbdhgdfhdfbgdh', '', '', '', 'adolf.jpg', 'art.jpg', 'apple.png', '', '', 'VI, Lagos', 'IL', 'dfvdhfdsh', '', 'paid', '0000-00-00', '0000-00-00', '', '', NULL, NULL, '', '', '', '', '0000-00-00', '', '', '', '2018-03-22', '0000-00-00'),
(102, 19, 'Ajayi the carpenter', 'Ajayi-the-carpenter', 'Anything for the boys. ', '', '', '', 'apple.png', 'art.jpg', 'adolf.jpg', '', '', 'VI, Lagos', 'ID', 'Anything', '', 'paid', '0000-00-00', '0000-00-00', '100', '100', NULL, NULL, 'Hiking', 'apple.png', 'OBJ stadium. ', 'Hey!!!!!!', '0000-00-00', 'Ni Saudi', 'adeola', 'Alhaji Abass', '2018-03-22', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_03_13_101117_create_sandbox_table', 1),
(2, '2018_03_13_133546_create_accounts_table', 1),
(3, '2018_03_13_134442_update_accounts_table', 1),
(4, '2018_03_13_150713_update_account_table', 1),
(5, '2018_03_14_075316_users_table', 1),
(6, '2018_03_14_182328_update_event_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `regId` int(11) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `middleName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `imageName` varchar(500) NOT NULL DEFAULT 'defaultPic.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sandbox`
--

CREATE TABLE `sandbox` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(16, 'Abiodun', 'Adetona', NULL, 'adetonaabiodun12@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'c0a85a4a1c790de7a60e6cee8f957393', '2018-03-18', '08161829520', 'adetona', 'adetona', 'Abiodun Adetona', NULL, '2, odo eja, soka', '2018-03-17 23:00:00', NULL),
(17, 'xkbd', 'xkbd', NULL, 'xkbd@gmail.com', 'ffac2a74f3321439c3c91cb9dad517b6', '', '2018-03-19', '08161829520', 'adetona', 'adetona', 'Abiodun Adetona', NULL, 'VI, Lagos', '2018-03-18 23:00:00', NULL),
(18, 'Safiya', 'Sule', NULL, 'safiyajsule@gmail.com', 'e6a765fdb780f7dcb9780ebbeed15d5f', '', '1981-11-20', '08164449969', 'Safffyy', '', 'saffysu', NULL, 'No 2, Adeyemo Alakija Street, GRA, Ikeja', '2018-03-18 23:00:00', NULL),
(19, 'Abiodun', 'Adetona', NULL, 'abiodun@fritzng.com', 'aec5b37707e546960001825cf1eacb45', '', '2018-03-21', '', '', '', 'Abiodun Adetona', NULL, '2, odo eja, soka', '2018-03-20 23:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_creator_id_foreign` (`creator_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`regId`);

--
-- Indexes for table `sandbox`
--
ALTER TABLE `sandbox`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `regId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sandbox`
--
ALTER TABLE `sandbox`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
