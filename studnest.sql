-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 01:30 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studnest`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtasks`
--

CREATE TABLE `addtasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `TaskName` varchar(255) NOT NULL,
  `TaskDescription` varchar(255) NOT NULL,
  `Deadline` date NOT NULL,
  `userid` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addtasks`
--

INSERT INTO `addtasks` (`id`, `TaskName`, `TaskDescription`, `Deadline`, `userid`) VALUES
(1, 'RBPL', 'Finals', '2023-06-20', 2);

-- --------------------------------------------------------

--
-- Table structure for table `donetasks`
--

CREATE TABLE `donetasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `taskname` varchar(255) NOT NULL,
  `taskdescription` varchar(255) NOT NULL,
  `userid` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donetasks`
--

INSERT INTO `donetasks` (`id`, `taskname`, `taskdescription`, `userid`) VALUES
(1, 'MPTI', 'Makar', 2);

-- --------------------------------------------------------

--
-- Table structure for table `event_calendars`
--

CREATE TABLE `event_calendars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ename` varchar(255) NOT NULL,
  `edate` date NOT NULL,
  `edesc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_calendars`
--

INSERT INTO `event_calendars` (`id`, `ename`, `edate`, `edesc`) VALUES
(1, 'Badminton', '2023-06-20', 'Match one'),
(2, 'Basket', '2023-06-22', 'Match one');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_05_27_101722_create_event_calendars_table', 1),
(7, '2023_05_27_141737_create_addtasks_table', 1),
(8, '2023_05_27_152009_create_postforums_table', 1),
(9, '2023_05_30_022916_create_replycomments_table', 1),
(10, '2023_06_05_070206_create_workspaces_table', 1),
(11, '2023_06_05_073105_create_taskworkspaces_table', 1),
(12, '2023_06_08_023356_create_donetasks_table', 1),
(13, '2023_06_14_054028_create_tasktodos_table', 1),
(14, '2023_06_14_061207_add_userid_to_workspaces_table', 1),
(15, '2023_06_14_061510_alter_userid_to_workspaces', 1),
(16, '2023_06_14_061718_add_userid_to_addtasks_table', 1),
(17, '2023_06_14_062331_add_userid_to_donetasks_table', 1),
(18, '2023_06_14_062429_alter_userid_to_donetasks', 1),
(19, '2023_06_14_062548_alter_userid_to_addtasks', 1),
(20, '2023_06_14_062801_add_userid_to_taskworkspaces_table', 1),
(21, '2023_06_14_062928_alter_userid_to_taskworkspaces', 1),
(22, '2023_06_14_081615_add_userid_to_tasktodos_table', 1),
(23, '2023_06_14_081759_alter_userid_to_tasktodos', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `postforums`
--

CREATE TABLE `postforums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `postforums`
--

INSERT INTO `postforums` (`id`, `post`) VALUES
(1, 'Sampai mana FP kalian?');

-- --------------------------------------------------------

--
-- Table structure for table `replycomments`
--

CREATE TABLE `replycomments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reply` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `replycomments`
--

INSERT INTO `replycomments` (`id`, `reply`) VALUES
(1, 'bagus');

-- --------------------------------------------------------

--
-- Table structure for table `tasktodos`
--

CREATE TABLE `tasktodos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nametodo` varchar(255) NOT NULL,
  `descriptiontodo` varchar(255) NOT NULL,
  `deadlinetodo` date NOT NULL,
  `userid` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasktodos`
--

INSERT INTO `tasktodos` (`id`, `nametodo`, `descriptiontodo`, `deadlinetodo`, `userid`) VALUES
(1, 'MPTI', 'Makar', '2023-06-30', 2);

-- --------------------------------------------------------

--
-- Table structure for table `taskworkspaces`
--

CREATE TABLE `taskworkspaces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Deadline` date NOT NULL,
  `Member` varchar(255) NOT NULL,
  `userid` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taskworkspaces`
--

INSERT INTO `taskworkspaces` (`id`, `Name`, `Description`, `Deadline`, `Member`, `userid`) VALUES
(1, 'UI UX', 'Finals', '2023-06-21', 'ribkau', 2),
(2, 'Push GIT', 'Satuin', '2023-06-21', 'anne', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `number`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'naila', 'naila.ramadhani@aiesec.net', '04567845678', NULL, '$2y$10$Y9QglC04C94xzeVUXEw3Ze94KNjytPa3g7idB1.UyPzb89vrNkIly', NULL, '2023-06-17 09:04:53', '2023-06-17 09:04:53'),
(2, 'ICON', 'icon.ise2023@gmail.com', '04567890', NULL, '$2y$10$VFrz0NcUaYIkS.QP9dBrCOnnyiWeFYBm.XG9gOLdEjigSHvVojqVy', 'mczRoWHzCSlDvQSlOJPf5qtFFryzFg2F84JFUarahytq8Ghf4i08rJWW6Vqy', '2023-06-17 09:07:17', '2023-06-17 09:08:52');

-- --------------------------------------------------------

--
-- Table structure for table `workspaces`
--

CREATE TABLE `workspaces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Deadline` date NOT NULL,
  `Member` varchar(255) NOT NULL,
  `userid` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workspaces`
--

INSERT INTO `workspaces` (`id`, `Name`, `Description`, `Deadline`, `Member`, `userid`) VALUES
(1, 'RBPL', 'Finals', '2023-06-21', 'Kesya, Nai, RIbs', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addtasks`
--
ALTER TABLE `addtasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addtasks_userid_foreign` (`userid`);

--
-- Indexes for table `donetasks`
--
ALTER TABLE `donetasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donetasks_userid_foreign` (`userid`);

--
-- Indexes for table `event_calendars`
--
ALTER TABLE `event_calendars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `postforums`
--
ALTER TABLE `postforums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replycomments`
--
ALTER TABLE `replycomments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasktodos`
--
ALTER TABLE `tasktodos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tasktodos_userid_foreign` (`userid`);

--
-- Indexes for table `taskworkspaces`
--
ALTER TABLE `taskworkspaces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `taskworkspaces_userid_foreign` (`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `workspaces`
--
ALTER TABLE `workspaces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `workspaces_userid_foreign` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addtasks`
--
ALTER TABLE `addtasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donetasks`
--
ALTER TABLE `donetasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `event_calendars`
--
ALTER TABLE `event_calendars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `postforums`
--
ALTER TABLE `postforums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `replycomments`
--
ALTER TABLE `replycomments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tasktodos`
--
ALTER TABLE `tasktodos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `taskworkspaces`
--
ALTER TABLE `taskworkspaces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `workspaces`
--
ALTER TABLE `workspaces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addtasks`
--
ALTER TABLE `addtasks`
  ADD CONSTRAINT `addtasks_userid_foreign` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);

--
-- Constraints for table `donetasks`
--
ALTER TABLE `donetasks`
  ADD CONSTRAINT `donetasks_userid_foreign` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);

--
-- Constraints for table `tasktodos`
--
ALTER TABLE `tasktodos`
  ADD CONSTRAINT `tasktodos_userid_foreign` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);

--
-- Constraints for table `taskworkspaces`
--
ALTER TABLE `taskworkspaces`
  ADD CONSTRAINT `taskworkspaces_userid_foreign` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);

--
-- Constraints for table `workspaces`
--
ALTER TABLE `workspaces`
  ADD CONSTRAINT `workspaces_userid_foreign` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
