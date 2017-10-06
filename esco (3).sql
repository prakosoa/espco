-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2017 at 06:14 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esco`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkouts`
--

CREATE TABLE `checkouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_schedules_id` int(10) UNSIGNED NOT NULL,
  `invoice` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_fee` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checkouts`
--

INSERT INTO `checkouts` (`id`, `order_schedules_id`, `invoice`, `bank_number`, `bank_name`, `phone`, `total_fee`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, '121212121', 'clinton', '080182121', 700000, 3, NULL, NULL),
(11, 2, NULL, '121212', 'bri', '082220875804', 800000, 2, NULL, NULL),
(12, 3, NULL, '121212', 'asdadwad', '0982028222', 700000, 1, NULL, NULL),
(13, 5, NULL, '1212121', 'Prakoso', '08222222080', 350000, 1, NULL, NULL),
(20, 15, NULL, '009019201', 'SDKASJDLKASDJASLKJ', '0812019201', 350000, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `name`) VALUES
(1, 'Dota2'),
(2, 'CSGO');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_09_24_113827_create_game_table', 1),
(4, '2017_09_24_114149_create_schedules_table', 1),
(5, '2017_09_24_114220_create_order_scedules_table', 1),
(6, '2017_09_24_114243_create_checkout_table', 1),
(7, '2017_09_24_131058_create_relational_reference', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_schedules`
--

CREATE TABLE `order_schedules` (
  `id` int(10) UNSIGNED NOT NULL,
  `users_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_schedules`
--

INSERT INTO `order_schedules` (`id`, `users_id`) VALUES
(2, 2),
(3, 9),
(4, 9),
(5, 9),
(6, 9),
(7, 9),
(8, 9),
(9, 9),
(10, 9),
(11, 9),
(12, 9),
(13, 9),
(14, 9),
(15, 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(10) UNSIGNED NOT NULL,
  `datetime` datetime NOT NULL,
  `coach_id` int(10) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL,
  `order_schedules_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `datetime`, `coach_id`, `status`, `order_schedules_id`) VALUES
(4, '2017-10-05 10:00:00', 3, 2, NULL),
(8, '2017-10-05 07:30:00', 3, 2, 9),
(12, '2017-10-06 07:30:00', 3, 1, NULL),
(13, '2017-10-06 00:00:00', 3, 1, NULL),
(14, '2017-10-05 00:30:00', 3, 2, NULL),
(20, '2017-10-06 05:30:00', 3, 1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `steam` text COLLATE utf8mb4_unicode_ci,
  `rank` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `games_id` int(10) UNSIGNED DEFAULT NULL,
  `fee` int(11) DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `bank` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'storage/photo-profil/photo-default.jpg',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `level`, `password`, `nickname`, `phone`, `steam`, `rank`, `games_id`, `fee`, `about`, `bank`, `photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Esport Coach', 'admin@admin.com', 1, '$2y$10$AAB.FdN187gfJ5uc5/XgfuJ.OO32b/K6Ryqzp3.fgk5UfcYVJaNPG', NULL, NULL, NULL, NULL, 2, NULL, NULL, '', 'storage/photo-profil/photo-default.jpg', 'JvyzWyW4fv98rDVKOJRiaROegSQi1QT9koYIW3lG3q8sAl8eC3NSRIfsA4xR', '2017-09-24 18:49:22', '2017-09-24 18:49:22'),
(2, 'prakoso aji', 'respect.pran@gmail.com', 3, '$2y$10$NGNpt2gyVModhAhZanvSCO3bt4qDzq15qcxnTtmcI1F7oRCwA1L4.', NULL, '822208758040', 'steamcommunity.cm/pran', '7000', NULL, 350000, 'aaaaaaa', '', 'storage/photo-profil/photo-default.jpg', '8v4p1BKdMXkr5zGVxSQhfxeX7Qx4VADFDgYRwrP2LEw0VuErZu8Mfb27tQWZ', '2017-09-24 20:37:40', '2017-09-25 06:51:32'),
(3, 'Clinton Loomis', 'fear@gmail.com', 2, '$2y$10$NGNpt2gyVModhAhZanvSCO3bt4qDzq15qcxnTtmcI1F7oRCwA1L4.', 'Fear', '0182818218281', 'steamcumminyty.com/fear', '7500', NULL, 350000, 'aaaaaaaaaaaaa', '', 'storage/photo-profil/g2TmqMTZp1SVAswhBXpaBHWQta6Wbnz8fVo7aWR9.png', 'YpehuxK3zPeQSQuIRUn7cTmOEr8LiZvTIkNNhx4qj0iVxtKaNPvMcTNui8h6', NULL, '2017-10-04 20:48:28'),
(4, 'Alex Prawira', 'entruv@gmail.com', 2, '$2y$10$NGNpt2gyVModhAhZanvSCO3bt4qDzq15qcxnTtmcI1F7oRCwA1L4.', 'Entruv', '0822222222222222', 'steamcommunity.com/id/entruv', '8000', 1, 350000, 'Hey - my name is Entruv. I\'m a 7863 MMR Dota Streamer and Coach. I started to play Dota 2 at 2014, and bring my years of experience to help make your lessons as interactive as possible.\r\n\r\n', '', 'storage/photo-profil/photo-default.jpg', NULL, NULL, '2017-09-25 00:40:03'),
(8, 'aaaaa', 'sumail@mail.comaaa', 3, '$2y$10$L9jg7DufHbZFuureCNZcHO03C8Nx4jZbmQkJwahfBBrjLaSfRYVLK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'storage/photo-profil/photo-default.jpg', NULL, '2017-09-25 07:41:53', '2017-09-25 07:41:53'),
(9, 'Prakoso', 'prakoso@gmail.com', 3, '$2y$10$Lgd497N/IZBlZII0XCY/KeEldjNVO95D63seCfKIb2nTzEdoPihjK', NULL, '08282828299', 'steamcommunity.cm/pran', NULL, NULL, NULL, NULL, '', 'storage/photo-profil/VLMGjYPeOT1s3UK8iQCiwswM2RPVRHVvcFr4XZRP.jpeg', 'gCz0acesNnbctbes1K2CCbvOEsB37gvp6BRZ9fdrqYanyQ9ZUDnCj1AKOBR0', '2017-09-25 07:43:13', '2017-10-04 05:42:33'),
(12, 'asas', 'admin@cg.com', 3, '$2y$10$KWPJ3MSm3smqstIcmqn6ce8BFHpIUot.VMXed9fWDBm.vg7xJhniK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'storage/photo-profil/photo-default.jpg', NULL, '2017-09-25 07:49:09', '2017-09-25 07:49:09'),
(15, 'Sumail Hassan', 'geeeemail@pran.com', 2, '$2y$10$oXgujEWPtKCvL2M.QXD65.awzuUP5TXCQXM8r7M/AcXy3kWIIbT1O', 'Suma1L', '08812818281', 'steamcommunity.cm/sumaily', '8600', 1, 400000, NULL, '', 'storage/photo-profil/photo-default.jpg', NULL, '2017-09-25 07:50:22', '2017-09-28 05:50:43'),
(16, 'Oleksandr Kostyliev', 'gmarr5til@pran.com', 2, '$2y$10$Pzj82eNSjlbXWewTxCCADe1PaZiQ8VqC68JntwMWU2mBJB8bd82EC', 'S1mple', '082222028208209', 'steamcommunity.com/simple', 'Global Elite', 2, 500000, NULL, '', 'storage/photo-profil/photo-default.jpg', NULL, '2017-09-25 07:51:38', '2017-09-28 05:50:18'),
(18, 'prakoso aji n', 'pppp@gmail.c', 3, '$2y$10$8UdcCrIPM48mGl9BFnoLV.kVAd/9SPPzwi/STxZtfb/Uaf2PkAxMS', NULL, '08208202802', 'aasasa', NULL, NULL, NULL, NULL, '', 'storage/photo-profil/photo-default.jpg', 'OIOeGbp7fT7gBq11JBYenrijnsZqr2Jc1GwqOZoOiutbXqZ59NtVT5wYES87', '2017-09-26 02:16:49', '2017-09-28 07:36:46'),
(19, 'teslvel1', 'tesll@mail.c', 3, '$2y$10$RTddesQIsFn/wQsPxb/Em.o.5WN3DKC9Z7DcgwmldUZJgh4Zrp40u', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'storage/photo-profil/photo-default.jpg', '1EpY5m9GPlPB3jhlZYk441ZIgdw2s5xCAp6Wz9Aijq9w9lWXm4sLhY9SQVUm', '2017-09-26 07:57:26', '2017-09-26 07:57:26'),
(20, 'aasazxzxzxz', 'zxzxzx@zxzx.com', 2, '$2y$10$EBeo9IuKJoxiXdHC/B.T2.J8nKW6vf1l8CFX2ybAP5davy9hK8WvK', 'qwqwasasas', '412121212', 'qwqwqwqwqw1', '12121212', 1, 111111, NULL, NULL, 'storage/photo-profil/photo-default.jpg', NULL, '2017-09-29 06:35:45', '2017-09-29 06:35:45'),
(21, 'Artour Baa', 'artour@m.com', 2, '$2y$10$Q4a1g1yUFx06AvRcEts2rOOsLVFz8.LT02o75xSWFChwim9WWBpXm', 'Arteezy', '08288282828', 'aushauqwuqowiq', '10000', NULL, 500000, NULL, NULL, 'storage/photo-profil/photo-default.jpg', 'UbL0ucN3FjdpsTAv8L9EVjucBDgQC7e2PngIiVTHGT96c32wyXWV4ZTREb34', '2017-09-29 22:32:25', '2017-09-29 23:03:38'),
(22, 'Clement Ivanov', 'Clement@ivanov.cc', 2, '$2y$10$lkpo5OVih/n/0f1/KJaS1uJ/rmNVB20YgpypZIWG9syi1Q.6q0hWW', 'Puppey', '1028182180281', 'asioa9019091', '7000', 1, 500000, NULL, NULL, 'storage/photo-profil/photo-default.jpg', NULL, '2017-09-29 22:34:15', '2017-09-29 22:34:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkouts`
--
ALTER TABLE `checkouts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `checkouts_order_schedules_id_index` (`order_schedules_id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_schedules`
--
ALTER TABLE `order_schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_schedules_users_id_index` (`users_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schedules_coach_id_index` (`coach_id`),
  ADD KEY `schedules_order_schedules_id_index` (`order_schedules_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_games_id_index` (`games_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkouts`
--
ALTER TABLE `checkouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_schedules`
--
ALTER TABLE `order_schedules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `checkouts`
--
ALTER TABLE `checkouts`
  ADD CONSTRAINT `checkouts_order_schedules_id_foreign` FOREIGN KEY (`order_schedules_id`) REFERENCES `order_schedules` (`id`);

--
-- Constraints for table `order_schedules`
--
ALTER TABLE `order_schedules`
  ADD CONSTRAINT `order_schedules_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `schedules_coach_id_foreign` FOREIGN KEY (`coach_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `schedules_order_schedules_id_foreign` FOREIGN KEY (`order_schedules_id`) REFERENCES `order_schedules` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_games_id_foreign` FOREIGN KEY (`games_id`) REFERENCES `games` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
