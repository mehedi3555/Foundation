-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2019 at 08:54 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roya_foundation`
--

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
(3, '2019_03_20_051059_create_need_helps_table', 1),
(4, '2019_03_20_060713_create_want_helps_table', 1),
(5, '2019_03_20_063304_create_projects_table', 1),
(6, '2019_03_20_095738_create_project_images_table', 1),
(7, '2019_03_21_033922_create_sliders_table', 1),
(8, '2019_03_31_043709_create_teams_table', 1),
(9, '2019_03_31_070413_create_videos_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `need_helps`
--

CREATE TABLE `need_helps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `date`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Provided 130 blankets', '2019-03-31', 'Roya Foundation provided 130 blankets among the Showtals in Kakonhaat, Godagari, Rajshahi.', '2019-03-31 03:20:44', '2019-03-31 03:20:44'),
(2, 'Supporting A Dream', '2019-03-31', 'Ahmed Abdullah comes from Majhira, Shahjahanpur, Bogra. He is a good student and keen to complete his studies and support his family. However, his poor family is unable to support his dream. Roya Foundation is providing some financial assistance to this boy so that he can fulfil his dream and in future support his family. Only receiving assistance, Abdullah commented, “আরশের মালিক আল্লাহ, রয়া ফাউন্ডেশনের প্রধান ও এর সেবাধর্মী কর্মকাণ্ডে সহযোগী সকলকে উত্তম প্রতিদানটাই দিক! কৃতগ্ঞ রইলাম আল্লাহ ও তাদের কাছে|” which means in English, “Praise to Almighty! Grateful to the head of Roya Foundation and all who are supporting Roya Foundation in its charitable works. Let Almighty also bless them and I remain grateful to Almighty and Roya Foundation.”\r\nMaybe noted that the Foundation will monitor his progress and performance in coming years.', '2019-03-31 03:21:10', '2019-03-31 03:21:10');

-- --------------------------------------------------------

--
-- Table structure for table `project_images`
--

CREATE TABLE `project_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `caption` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_id` int(11) NOT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_images`
--

INSERT INTO `project_images` (`id`, `caption`, `p_id`, `filename`, `created_at`, `updated_at`) VALUES
(1, 'Blanket giving ceremony', 1, '218922181.WhatsApp-Image-2019-01-23-at-5.14.29-PM-1.jpeg', '2019-03-31 03:24:26', '2019-03-31 03:24:26'),
(2, 'They are very happy to get the blanket', 1, '703293450.WhatsApp-Image-2019-01-23-at-5.14.30-PM-2.jpeg', '2019-03-31 03:24:59', '2019-03-31 03:24:59'),
(3, 'He reads very attentively', 2, '929534669.WhatsApp-Image-2019-02-15-at-11.20.52-PM-150x150.jpeg', '2019-03-31 03:25:49', '2019-03-31 03:25:49'),
(4, 'He wear his school dress', 2, '648044846.WhatsApp-Image-2019-02-15-at-11.22.30-PM.jpeg', '2019-03-31 03:26:13', '2019-03-31 03:26:13');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `filename`, `created_at`, `updated_at`) VALUES
(1, '408330566.one.jpg', '2019-03-31 03:26:29', '2019-03-31 03:26:29'),
(2, '216957991.three.jpeg', '2019-03-31 03:26:29', '2019-03-31 03:26:29'),
(3, '118381468.two.jpeg', '2019-03-31 03:26:29', '2019-03-31 03:26:29');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `designation`, `created_at`, `updated_at`) VALUES
(1, 'Ambareen Chowdhury', 'President', '2019-03-31 03:34:47', '2019-03-31 12:51:17'),
(2, 'Raisa Chowdhury', 'Vice President', '2019-03-31 03:35:00', '2019-03-31 03:35:00'),
(3, 'Samina Yunus', 'Secretary', '2019-03-31 03:35:15', '2019-03-31 03:35:15'),
(4, 'Moniza Begum', 'Organising Secretary', '2019-03-31 03:35:31', '2019-03-31 03:35:31'),
(5, 'Mahbuba Kakoly', 'Executive Member', '2019-03-31 03:35:47', '2019-03-31 03:35:47'),
(6, 'Muhymin Chowdhury', 'Executive Member', '2019-03-31 03:36:01', '2019-03-31 03:36:01'),
(7, 'Mahmud Hussain', 'Executive Member', '2019-03-31 03:36:10', '2019-03-31 03:36:10'),
(8, 'Ahnaf Adeeb Mahmud', 'Executive Member', '2019-03-31 03:36:25', '2019-03-31 03:36:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Mehedi Hasan', 'mehedi3555@gmail.com', NULL, '$2y$10$gaX6D3KI4It5op9AgabNKOzCj5cMJVr/nmdYtNKemcS8xxUhfqZ06', NULL, '2019-03-31 12:40:24', '2019-03-31 12:40:24');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `url`, `p_id`, `created_at`, `updated_at`) VALUES
(1, 'Demo title for project video', 'https://www.youtube.com/embed/1fr4icCbEaA', 1, '2019-03-31 03:29:18', '2019-03-31 03:29:18'),
(2, 'Demo title for project video', 'https://www.youtube.com/embed/OD6cQ2dh7Mo', 2, '2019-03-31 03:33:13', '2019-03-31 03:33:13');

-- --------------------------------------------------------

--
-- Table structure for table `want_helps`
--

CREATE TABLE `want_helps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `need_helps`
--
ALTER TABLE `need_helps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_images`
--
ALTER TABLE `project_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `want_helps`
--
ALTER TABLE `want_helps`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `need_helps`
--
ALTER TABLE `need_helps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `project_images`
--
ALTER TABLE `project_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `want_helps`
--
ALTER TABLE `want_helps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
