-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 21, 2019 at 12:18 PM
-- Server version: 10.0.35-MariaDB
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpdesk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `name`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Rotten Row', 'Rotten Row Oppopsite Mugabe', '2019-08-14 21:29:47', '2019-08-14 21:29:47'),
(2, 'First Street Branch', '1234 First Street Branch', '2019-08-14 21:31:55', '2019-08-14 21:31:55'),
(3, 'Mkoba', 'Mkoba stadium', '2019-08-14 21:47:57', '2019-08-14 21:47:57');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Development', 'This is the department of the giants', '2019-08-20 05:34:47', '2019-08-20 05:34:47'),
(2, 'Networks', 'This is the department that is responsible for mantaining the network', '2019-08-20 05:43:43', '2019-08-20 05:43:43'),
(3, 'Hardware', 'To takecare of all harware related issues', '2019-08-20 06:14:19', '2019-08-20 06:14:19');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desk_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `surname`, `email`, `employee_id`, `department_id`, `desk_phone`, `role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Gerald', 'Muzondiwa', 'muzo@gmail.com', '3030', '1', '2213', 'EMPLOYEE', 'ACTIVE', '2019-08-20 10:21:20', '2019-08-20 10:21:20'),
(2, 'Washington', 'Chigokwe', 'chigokwe@gmail.com', '202020', '3', '3030', 'EMPLOYEE', 'ACTIVE', '2019-08-20 10:34:24', '2019-08-20 10:34:24'),
(3, 'Ronald', 'Changara', 'chichi@gmail.com', '5499', '1', '2109', 'EMPLOYEE', 'ACTIVE', '2019-08-21 08:02:47', '2019-08-21 08:02:47');

-- --------------------------------------------------------

--
-- Table structure for table `issues`
--

CREATE TABLE `issues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `requester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actioned_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assigned_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `issues`
--

INSERT INTO `issues` (`id`, `requester`, `category`, `description`, `priority`, `actioned_date`, `assigned_to`, `status`, `created_at`, `updated_at`) VALUES
(4, '1', 'Hardware', 'My emails are not receiving', 'High', NULL, '2', 'PENDING', '2019-08-21 07:26:21', '2019-08-21 10:11:39'),
(5, '1', 'Other', 'My emails are not receiving', 'High', NULL, NULL, 'PENDING', '2019-08-21 07:34:28', '2019-08-21 07:34:28'),
(6, '1', 'Emails', 'mmm maEmails angu ma1', 'High', NULL, NULL, 'PENDING', '2019-08-21 07:35:54', '2019-08-21 07:35:54'),
(7, '1', 'Emails', 'maEmails angu akunetsa', 'High', NULL, NULL, 'NOT ASSIGNED USER', '2019-08-21 07:40:05', '2019-08-21 07:40:05'),
(8, '1', 'System Failure', 'System ririkunyarara', 'High', NULL, NULL, 'PENDING', '2019-08-21 08:04:20', '2019-08-21 08:04:20'),
(9, '1', 'System Failure', 'System ririkunyarara', 'High', NULL, NULL, 'PENDING', '2019-08-21 08:05:01', '2019-08-21 08:05:01'),
(10, '1', 'System Failure', 'ma1 kani', 'High', NULL, '3', 'PENDING', '2019-08-21 08:08:36', '2019-08-21 08:08:36'),
(11, '1', 'Hardware', 'Computer yafa', 'High', NULL, '1', 'Closed', '2019-08-21 08:14:33', '2019-08-21 08:52:39'),
(12, '1', 'Emails', 'iii ma1', 'High', NULL, NULL, 'NOT ASSIGNED USER', '2019-08-21 08:14:53', '2019-08-21 08:14:53'),
(13, '1', 'System Failure', 'Moswa baba vavo', 'High', NULL, '3', 'PENDING', '2019-08-21 09:23:53', '2019-08-21 09:23:53'),
(14, '1', 'Hardware', 'my machine is not functioning', 'High', NULL, '2', 'PENDING', '2019-08-21 09:41:22', '2019-08-21 09:41:22');

-- --------------------------------------------------------

--
-- Table structure for table `issue_categories`
--

CREATE TABLE `issue_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resp_department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `issue_categories`
--

INSERT INTO `issue_categories` (`id`, `category`, `priority`, `resp_department`, `department_id`, `created_at`, `updated_at`) VALUES
(1, 'Emails', 'High', 'Networks', '2', '2019-08-20 06:03:46', '2019-08-20 06:03:46'),
(2, 'Hardware', 'High', 'Hardware', '3', '2019-08-20 06:14:43', '2019-08-20 06:14:43'),
(3, 'System Failure', 'High', 'Development', '1', '2019-08-21 08:03:52', '2019-08-21 08:03:52');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_14_064917_create_admins_table', 1),
(4, '2019_08_14_064928_create_employees_table', 1),
(5, '2019_08_14_064941_create_departments_table', 1),
(6, '2019_08_14_064959_create_branches_table', 1),
(7, '2019_08_14_065008_create_issues_table', 1),
(8, '2019_08_14_070229_create_issue_categories_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `employee_id` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_id` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `employee_id`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Fadzai Mumbure', '12345', 'admin', NULL, '$2y$10$3pC.xwsj44nsmoj4iTAKh.M32gQh60xay6HXKaRn4L.R8/A0V363K', NULL, '2019-08-14 20:34:12', '2019-08-14 20:34:12'),
(2, 'Gerald Muzondiwa', '3030', '', NULL, '$2y$10$sNGVTKWuFVvlduuY.UHk3OXfTL6SaqHunIm1Ctnz46MBtZQ9ehLpm', NULL, '2019-08-20 10:21:21', '2019-08-20 10:21:21'),
(3, 'Washington Chigokwe', '202020', '', NULL, '$2y$10$scDt5RgEJFECEHka7XK4N.BiKxkvFmdzdS99SdmHEhtFfDs6r2Vt2', NULL, '2019-08-20 10:34:24', '2019-08-20 10:34:24'),
(4, 'Ronald Changara', '5499', '', NULL, '$2y$10$nhJRh//o7FYXG6O9ZuvhPOsCMxCkK6GU.17e8MR0SEikY.AAfMVXS', NULL, '2019-08-21 08:02:47', '2019-08-21 08:02:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issues`
--
ALTER TABLE `issues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue_categories`
--
ALTER TABLE `issue_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_employee_id_index` (`employee_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_employee_id_unique` (`employee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `issues`
--
ALTER TABLE `issues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `issue_categories`
--
ALTER TABLE `issue_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
