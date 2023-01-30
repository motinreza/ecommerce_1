-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2023 at 02:57 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommercepro`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(2, 'Shirt', '2022-10-25 08:38:14', '2022-10-25 08:38:14'),
(7, 'Skart', '2022-10-26 04:52:58', '2022-10-26 04:52:58'),
(8, 'Half Shirt', '2022-10-26 04:53:21', '2022-10-26 04:53:21'),
(9, 'Frock', '2022-10-26 04:56:51', '2022-10-26 04:56:51');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `comment`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'user', 'This is my first comment in laravel.', '1', '2022-11-17 11:34:46', '2022-11-17 11:34:46'),
(2, 'user', 'Second comment', '1', '2022-11-17 11:47:33', '2022-11-17 11:47:33'),
(3, 'user', 'Third comment', '1', '2022-11-17 11:47:44', '2022-11-17 11:47:44'),
(4, 'user', 'Testing comment!', '1', '2022-11-18 00:28:46', '2022-11-18 00:28:46'),
(5, 'user', 'Testing comments', '1', '2023-01-03 11:14:48', '2023-01-03 11:14:48');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_10_23_151841_create_sessions_table', 1),
(7, '2022_10_25_142634_create_categories_table', 2),
(8, '2022_10_26_053937_create_products_table', 3),
(9, '2022_10_30_054225_create_carts_table', 4),
(10, '2022_10_31_054646_create_orders_table', 5),
(11, '2022_11_12_042306_create_notifications_table', 6),
(12, '2022_11_17_170014_create_comments_table', 7),
(13, '2022_11_17_170028_create_replies_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `user_id`, `product_title`, `quantity`, `price`, `image`, `product_id`, `payment_status`, `delivery_status`, `created_at`, `updated_at`) VALUES
(9, 'user', 'motinreza2000@gmail.com', '01872585542', 'Jhenaigati, Sherpur-2100', '1', 'Shirt', '1', '400', '1666793374.png', '3', 'Paid!', 'You cancel the order', '2022-11-05 09:11:14', '2022-11-16 08:35:15'),
(10, 'user', 'motinreza2000@gmail.com', '01872585542', 'Jhenaigati, Sherpur-2100', '1', 'Half Shirt', '3', '972', '1666782021.png', '4', 'Paid!', 'Delivered!', '2022-11-05 09:11:14', '2022-11-09 05:16:20'),
(11, 'user', 'motinreza2000@gmail.com', '01872585542', 'Jhenaigati, Sherpur-2100', '1', 'Shirt', '1', '400', '1666793374.png', '3', 'Paid!', 'Processing!', '2022-11-05 09:11:15', '2022-11-05 09:11:15'),
(12, 'user', 'motinreza2000@gmail.com', '01872585542', 'Jhenaigati, Sherpur-2100', '1', 'Shirt', '1', '400', '1666793374.png', '3', 'Paid!', 'Delivered!', '2022-11-05 09:57:45', '2022-11-09 05:18:00'),
(13, 'user', 'motinreza2000@gmail.com', '01872585542', 'Jhenaigati, Sherpur-2100', '1', 'Skart', '3', '1500', '1666806761.png', '6', 'Paid!', 'Processing!', '2022-11-05 09:57:45', '2022-11-05 09:57:45'),
(14, 'user', 'motinreza2000@gmail.com', '01872585542', 'Jhenaigati, Sherpur-2100', '1', 'Shirt', '1', '400', '1666793374.png', '3', 'Paid!', 'You cancel the order', '2022-11-05 10:26:45', '2022-11-16 08:38:00'),
(15, 'user', 'motinreza2000@gmail.com', '01872585542', 'Jhenaigati, Sherpur-2100', '1', 'Half Shirt', '1', '324', '1666782021.png', '4', 'Paid!', 'Processing!', '2022-11-05 10:26:46', '2022-11-05 10:26:46'),
(16, 'user', 'motinreza2000@gmail.com', '01872585542', 'Jhenaigati, Sherpur-2100', '1', 'Shirt', '3', '1200', '1666793374.png', '3', 'Cash on delivery!', 'Processing!', '2022-11-07 10:35:31', '2022-11-07 10:35:31'),
(17, 'user', 'motinreza2000@gmail.com', '01872585542', 'Jhenaigati, Sherpur-2100', '1', 'Half Shirt', '1', '324', '1666782021.png', '4', 'Paid!', 'Processing!', '2022-11-07 10:36:21', '2022-11-07 10:36:21'),
(18, 'customer', 'customer@gmail.com', '01921272842', 'Sherpur-2100', '3', 'Shirt', '1', '400', '1666793374.png', '3', 'Paid!', 'Delivered!', '2022-11-16 08:13:04', '2022-11-16 08:20:44'),
(19, 'customer', 'customer@gmail.com', '01921272842', 'Sherpur-2100', '3', 'Skart', '3', '1500', '1666806761.png', '6', 'Paid!', 'Delivered!', '2022-11-16 08:13:04', '2022-11-16 08:20:38'),
(20, 'customer', 'customer@gmail.com', '01921272842', 'Sherpur-2100', '3', 'Shirt', '4', '1600', '1666793374.png', '3', 'Cash on delivery!', 'Processing!', '2022-11-16 08:13:04', '2022-11-16 08:13:04'),
(21, 'customer', 'customer@gmail.com', '01921272842', 'Sherpur-2100', '3', 'Shirt', '7', '2800', '1666793374.png', '3', 'Cash on delivery!', 'Processing!', '2022-12-19 07:31:37', '2022-12-19 07:31:37'),
(22, 'test', 'motinreza3000@gmail.com', '01872585542', 'Jhenaigati, Sherpur-2100', '5', 'Shirt', '10', '4000', '1666793374.png', '3', 'Cash on delivery!', 'Processing!', '2022-12-19 08:26:59', '2022-12-19 08:26:59'),
(23, 'user', 'motinreza2000@gmail.com', '01872585542', 'Jhenaigati, Sherpur-2100', '1', 'Shirt', '7', '2800', '1666793374.png', '3', 'Cash on delivery!', 'Processing!', '2023-01-30 07:45:35', '2023-01-30 07:45:35'),
(24, 'user', 'motinreza2000@gmail.com', '01872585542', 'Jhenaigati, Sherpur-2100', '1', 'Women beautiful frock', '9', '3870', '1666806799.png', '2', 'Cash on delivery!', 'Processing!', '2023-01-30 07:45:35', '2023-01-30 07:45:35'),
(25, 'user', 'motinreza2000@gmail.com', '01872585542', 'Jhenaigati, Sherpur-2100', '1', 'Half Shirt', '2', '648', '1666782021.png', '4', 'Cash on delivery!', 'Processing!', '2023-01-30 07:45:35', '2023-01-30 07:45:35');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `image`, `category`, `quantity`, `price`, `discount_price`, `created_at`, `updated_at`) VALUES
(2, 'Women beautiful frock', 'Quality best', '1666806799.png', 'Frock', '1', '450', '430', '2022-10-26 04:58:51', '2022-10-26 11:53:19'),
(3, 'Shirt', 'Color and cloth awesome', '1666793374.png', 'Shirt', '5', '470', '400', '2022-10-26 04:59:54', '2022-10-26 08:09:34'),
(4, 'Half Shirt', 'Good', '1666782021.png', 'Half Shirt', '3', '324', NULL, '2022-10-26 05:00:21', '2022-12-15 04:09:28'),
(6, 'Skart', 'Good quality', '1666806761.png', 'Skart', '2', '500', NULL, '2022-10-26 11:52:41', '2022-10-26 11:52:41');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reply` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `name`, `comment_id`, `reply`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'user', '1', 'Reply to the first comment.', '1', '2022-11-17 12:32:21', '2022-11-17 12:32:21'),
(2, 'user', '1', 'Again reply', '1', '2022-11-18 00:23:06', '2022-11-18 00:23:06'),
(3, 'user', '3', 'Wow!', '1', '2022-11-18 00:26:27', '2022-11-18 00:26:27'),
(4, 'user', '3', 'wow2!', '1', '2022-11-18 00:27:11', '2022-11-18 00:27:11'),
(5, 'user', '4', 'Testing reply!', '1', '2022-11-18 00:28:58', '2022-11-18 00:28:58');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('hcAErIf18fgZ9C2CfYRLj4Gg7Ki03ZMEfhzKH8Ni', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSUlEY1YwUGt0dG9yMlVSd1FIN3RBR0k1cW1FN09lTEdha2FqVndFYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1675086917),
('LS3yv4PTVW7c497dn5ZgnXmfoJy2b1zARw5alNZC', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQ1hyTFNNMHp1TlRpMDBKSVhseklyN3FkaGVsZHN1RzU1clVMSkFZWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1675086345),
('ujFFISRIrczvDmvzGR5knzIWIMM8uAMaXbpcAILk', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiT2x6NEhpYjFzamRISTI1WjY5RmJDUkdjVmxNQW1kZzFuam10TzJ5TSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9kdWN0cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1675086689);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `phone`, `address`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'user', 'motinreza2000@gmail.com', '0', '01872585542', 'Jhenaigati, Sherpur-2100', '2022-11-11 09:01:31', '$2y$10$odHxaAAWKuOigPAVoPvPBe0iro98QFzmkyN4XwtAOrAj6sTHEPlra', NULL, NULL, NULL, '3MXrBNc6M9TquZkdeHTcfrUK36CHtAS7wwl8pXnij17SolcvVqMKhqPsGISS', NULL, NULL, '2022-10-23 09:42:22', '2022-11-11 09:01:31'),
(2, 'admin', 'motinreza5000@gmail.com', '1', '01921272842', 'Sherpur-2100', '2022-11-16 15:02:17', '$2y$10$w.r.qSIgkQ2neBexUl42aOIYzYpy4mV/Lt0RrYgmC6f1UQhf.8TlO', NULL, NULL, NULL, 'R9O9Uay3gj6aH8lvPkj2cH3PDL6867THX0oMTrgGAJwY02wCXJnToerN0bhk', NULL, NULL, '2022-10-23 09:42:56', '2022-10-23 09:42:56'),
(3, 'customer', 'customer@gmail.com', '0', '01921272842', 'Sherpur-2100', '2022-11-15 15:02:30', '$2y$10$.QiNbn1vplTtYKhEXSWthefmxoDxe9MPuZkSHJiFZEc5XgA7E6CqK', NULL, NULL, NULL, 'cNrq2ERyMZKeqm8uhTydpmGZfEBLEO1Es0H6XaL5Wz2Bipyeqt9XkxkTSXoj', NULL, NULL, '2022-10-30 06:04:37', '2022-10-30 06:04:37'),
(5, 'test', 'motinreza3000@gmail.com', '0', '01872585542', 'Jhenaigati, Sherpur-2100', '2022-12-19 08:26:17', '$2y$10$jCwV.Te8UrMB7ciysYTIh.eaGAVl.0siRB/6ypU1auo8pTidlqItS', NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-19 07:32:55', '2022-12-19 08:26:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
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
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
