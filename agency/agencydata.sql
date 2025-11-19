-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2025 at 09:37 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agencydata`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-omerlatifi6637@gmail.com|127.0.0.1', 'i:4;', 1763539403),
('laravel-cache-omerlatifi6637@gmail.com|127.0.0.1:timer', 'i:1763539403;', 1763539403);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `office` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `exam_status` varchar(255) NOT NULL,
  `funding` varchar(255) NOT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`id`, `first_name`, `last_name`, `email`, `phone`, `office`, `destination`, `exam_status`, `funding`, `message`, `created_at`, `updated_at`) VALUES
(1, 'omer', 'latifi', 'omerlatifi6637@gmail.com', '01628265166', 'Banani', 'UK', 'MOI', 'Parents', 'too much fun', '2025-10-08 10:43:19', '2025-10-08 14:58:13'),
(5, 'rock', 'latifi', 'mdtahim1234@gmail.com', '01628265167', 'Uttara', 'Australia', 'PTE', 'Parents', 'chilling feeling', '2025-10-08 11:22:26', '2025-10-08 11:22:26');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_10_08_103702_create_inquiries_table', 2),
(5, '2025_10_08_175822_add_usertype_to_users_table', 3),
(6, '2025_10_09_083145_create_scholarship_contents_table', 4),
(7, '2025_10_09_084035_create_scholarship_contents_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `scholarship_contents`
--

CREATE TABLE `scholarship_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(255) NOT NULL,
  `heading1` varchar(255) DEFAULT NULL,
  `paragraph1` text DEFAULT NULL,
  `heading2` varchar(255) DEFAULT NULL,
  `paragraph2` text DEFAULT NULL,
  `heading3` varchar(255) DEFAULT NULL,
  `paragraph3` text DEFAULT NULL,
  `heading4` varchar(255) DEFAULT NULL,
  `paragraph4` text DEFAULT NULL,
  `heading5` varchar(255) DEFAULT NULL,
  `paragraph5` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scholarship_contents`
--

INSERT INTO `scholarship_contents` (`id`, `country`, `heading1`, `paragraph1`, `heading2`, `paragraph2`, `heading3`, `paragraph3`, `heading4`, `paragraph4`, `heading5`, `paragraph5`, `created_at`, `updated_at`) VALUES
(1, 'Australia', 'Undergraduate Scholarships', 'Australia has established itself as one of the world’s premier education destinations, offering globally recognized degrees, cutting-edge research opportunities, and a multicultural environment that attracts students from around the globe. With 38 Australian universities featured in the QS World University Rankings 2024, the country provides exceptional educational value. However, with annual tuition fees ranging from AUD 20,000–50,000 and living costs of AUD 21,000–27,000 per year, financial support through scholarships becomes crucial for many Bangladeshi students.\r\n\r\nPFEC Bangladesh specializes in helping students navigate Australia’s comprehensive scholarship landscape, connecting them with funding opportunities that can transform their educational aspirations into reality. With over 1,000 scholarships available annually from government sources, universities, and private foundations, Australia offers extensive financial support for deserving international students pursuing undergraduate, postgraduate, and research programs.', 'Postgraduate Scholarships', 'Australia has established itself as one of the world’s premier education destinations, offering globally recognized degrees, cutting-edge research opportunities, and a multicultural environment that attracts students from around the globe. With 38 Australian universities featured in the QS World University Rankings 2024, the country provides exceptional educational value. However, with annual tuition fees ranging from AUD 20,000–50,000 and living costs of AUD 21,000–27,000 per year, financial support through scholarships becomes crucial for many Bangladeshi students.\r\n\r\nPFEC Bangladesh specializes in helping students navigate Australia’s comprehensive scholarship landscape, connecting them with funding opportunities that can transform their educational aspirations into reality. With over 1,000 scholarships available annually from government sources, universities, and private foundations, Australia offers extensive financial support for deserving international students pursuing undergraduate, postgraduate, and research programs.', 'Government-Funded Programs', 'Australia has established itself as one of the world’s premier education destinations, offering globally recognized degrees, cutting-edge research opportunities, and a multicultural environment that attracts students from around the globe. With 38 Australian universities featured in the QS World University Rankings 2024, the country provides exceptional educational value. However, with annual tuition fees ranging from AUD 20,000–50,000 and living costs of AUD 21,000–27,000 per year, financial support through scholarships becomes crucial for many Bangladeshi students.\r\n\r\nPFEC Bangladesh specializes in helping students navigate Australia’s comprehensive scholarship landscape, connecting them with funding opportunities that can transform their educational aspirations into reality. With over 1,000 scholarships available annually from government sources, universities, and private foundations, Australia offers extensive financial support for deserving international students pursuing undergraduate, postgraduate, and research programs.', 'University-Based Grants', 'Institutions like Monash and UNSW offer unique internal scholarships.', 'How to Apply', 'Students can apply directly via university portals or through recognized education partnersggggg.', '2025-10-09 04:11:31', '2025-10-09 05:21:05'),
(3, 'Uk', 'yyuyh', 'hhh', 'ffffffff', 'wwqerewe', 'wrrww', 'weerdwww', 'wweerw', 'wwww', 'wwerf', 'qwefswe', '2025-10-09 05:40:27', '2025-10-09 05:40:27'),
(4, 'Usa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-10-09 05:41:40', '2025-10-09 05:41:40'),
(5, 'Canada', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-10-09 05:41:43', '2025-10-09 05:41:43'),
(6, 'Ireland', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-10-09 05:41:51', '2025-10-09 05:41:51'),
(7, 'New Zeland', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-10-09 05:42:01', '2025-10-09 05:42:01'),
(8, 'Japan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-10-09 05:42:08', '2025-10-09 05:42:08'),
(9, 'Europe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-10-09 05:42:13', '2025-10-09 05:42:13'),
(10, 'Newzeland', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-10-09 05:42:55', '2025-10-09 05:42:55');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('pfTU7MCn8fEisXlbgHc61p7YKsMYV5D91IGeIfIJ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid2ZlSERnZnM0MjYwU0sySExMMmxXVFVGY2dmaXBEU0U0ejlxT3VzcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jb250YWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1763539193),
('zHDnJu9PFFbBFjHFIwTy8raZtXLtdnnDxlqw2Nd4', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicXlCajFuOW91YVVETkU2QVNFeERMRWtLeFJFNDRJTEZkRGtPMDZEWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9zY2hvbGFyc2hpcC9hdXN0cmFsaWEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1763540201);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `usertype`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@example.com', NULL, '$2y$12$4X8evXxZTMIQlopgePpvY.x4lM2MMtMUSep3y2jKND4lhMPEs6de2', 'admin', NULL, '2025-10-08 03:35:54', '2025-10-08 12:08:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `scholarship_contents`
--
ALTER TABLE `scholarship_contents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `scholarship_contents_country_unique` (`country`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `scholarship_contents`
--
ALTER TABLE `scholarship_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
