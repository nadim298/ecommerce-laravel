-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 19, 2019 at 04:04 PM
-- Server version: 5.7.24
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
-- Database: `ecommerce1`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `user_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `product_name`, `product_code`, `product_color`, `size`, `price`, `quantity`, `user_email`, `session_id`, `created_at`, `updated_at`) VALUES
(2, 7, 'Full sleeve shirt', 'FSS002', 'Red', 'Small', 700.00, 1, '', 'tvsrT3BpjK2Py21D90ay6j8BtaP4HalsLbGDIqog', '2019-09-27 06:24:41', '2019-09-27 06:24:41'),
(3, 7, 'Full sleeve shirt', 'FSS002', 'Red', 'Medium', 800.00, 2, '', 'tvsrT3BpjK2Py21D90ay6j8BtaP4HalsLbGDIqog', '2019-09-27 06:28:25', '2019-09-28 08:57:09'),
(4, 10, 'Black Shirt', 'BS001', 'Black', 'Small', 700.00, 1, '404nadim@gmail.com', 'tvsrT3BpjK2Py21D90ay6j8BtaP4HalsLbGDIqog', '2019-09-27 06:50:15', '2019-09-27 06:50:15'),
(6, 10, 'Black Shirt', 'BS001', 'Black', 'Medium', 1000.00, 3, '', 'qncg7zTHaz70OsUy6hlnJQ5WjuUHMm8hBKnyZavm', '2019-09-28 08:32:12', '2019-09-28 09:07:57'),
(7, 7, 'Full sleeve shirt', 'FSS002', 'Red', 'Small', 800.00, 2, '', 'qncg7zTHaz70OsUy6hlnJQ5WjuUHMm8hBKnyZavm', '2019-09-28 09:05:55', '2019-09-28 09:07:35'),
(8, 7, 'Full sleeve shirt', 'FSS002', 'Red', 'Small', 800.00, 2, '', 'BRM2lGJrWUZo2rfnpbCzkWKrgHcB2idd6lNNV7Sw', '2019-09-28 09:09:19', '2019-09-28 09:09:23'),
(16, 10, 'Black Shirt', 'BS001-L', 'Black', 'Large', 1100.00, 2, '', 'Gx3H5Mwr0483h623d9xzJQDRi1DFQRgxb4WvdQ7W', '2019-09-29 15:33:51', '2019-09-29 16:43:20'),
(17, 7, 'Full sleeve shirt', 'FSS002-M', 'Red', 'Medium', 800.00, 1, '', 'Gx3H5Mwr0483h623d9xzJQDRi1DFQRgxb4WvdQ7W', '2019-09-29 16:19:48', '2019-09-29 16:41:18'),
(18, 10, 'Black Shirt', 'BS001-L', 'Black', 'Large', 1100.00, 2, '', 'zV00MIb49h4IFE7WDZ2vlc8mo97GHq9ICsZhlWmo', '2019-09-30 14:51:24', '2019-09-30 14:51:24'),
(19, 7, 'Full sleeve shirt', 'FSS002-S', 'Red', 'Small', 700.00, 2, '', 'zV00MIb49h4IFE7WDZ2vlc8mo97GHq9ICsZhlWmo', '2019-09-30 14:51:36', '2019-09-30 15:02:57'),
(20, 7, 'Full sleeve shirt', 'FSS002-S', 'Red', 'Small', 700.00, 1, '', 'iCsA8c1L6Dx4govicAgy8QyZjqIhUcoqtcYTk7zD', '2019-10-04 10:07:47', '2019-10-04 10:07:54'),
(21, 7, 'Full sleeve shirt', 'FSS002-S', 'Red', 'Small', 700.00, 1, '404nadim@gmail.com', 'O97QSEHX4aQ9MeouZNb4o1NKGNapQg9MV1YOKmn8', '2019-10-08 15:20:25', '2019-10-08 15:20:25'),
(22, 7, 'Full sleeve shirt', 'FSS002-S', 'Red', 'Small', 700.00, 2, '', 'nYDuAUlQLGQRu16Orf0U3Gb7i6arp0GqsxJN0IKj', '2019-10-08 15:23:51', '2019-10-08 15:41:35');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) DEFAULT '0',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `description`, `url`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 0, 'Child', 'All product for Child', 'child', 0, NULL, '2019-09-11 17:53:20', '2019-09-18 17:32:19'),
(3, 0, 'Men', 'All products for men', 'men', 1, NULL, '2019-09-12 13:36:18', '2019-09-12 13:36:18'),
(4, 3, 'Jeans', 'All men\'s jeans', 'jeans', 1, NULL, '2019-09-12 14:25:50', '2019-09-12 15:11:33'),
(5, 2, 'Toys', 'Toys for childrens', 'toys', 1, NULL, '2019-09-12 17:21:04', '2019-09-13 07:49:16'),
(6, 3, 'Shirt', 'Shirts for men', 'shirt', 1, NULL, '2019-09-12 17:33:11', '2019-09-12 17:33:11'),
(7, 3, 'Panjabi', 'Men\'s panjabi', 'panjabi', 1, NULL, '2019-09-15 19:37:19', '2019-09-15 19:37:19'),
(8, 0, 'Women', 'For women', 'women', 1, NULL, '2019-09-15 19:44:02', '2019-09-15 19:44:02');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email_address`, `message`, `read_status`, `created_at`, `updated_at`) VALUES
(56, 'Nadim', '298nadim@gmail.com', 'hello..', 1, NULL, NULL),
(57, 'Sourov', '298nadim@gmail.com', 'test', 1, NULL, NULL),
(58, 'Sourov', '298nadim@gmail.com', 'test again', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(10) UNSIGNED NOT NULL,
  `coupon_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `amount_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiry_date` date NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon_code`, `amount`, `amount_type`, `expiry_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'code1', 10, 'Percentage', '2019-10-12', 1, '2019-09-30 22:53:32', '2019-10-08 14:17:40'),
(3, 'off150', 150, 'Fixed', '2019-10-10', 1, '2019-10-08 19:51:10', '2019-10-08 15:20:42');

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
(6, '2019_07_13_162644_create_products_table', 2),
(7, '2019_07_31_081601_create_categories_table', 3),
(9, '2019_08_19_112313_create_carts_table', 4),
(10, '2019_08_20_193505_contact', 4),
(11, '2019_08_20_194110_create_contacts_table', 5),
(13, '2019_09_15_200010_create_products_attributes_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('n@n.com', '$2y$10$TU0YcoSY8bVemBzsmQfnpenCQd6uVsqKOVdwCCJxXlaXFurzo8BsW', '2019-08-20 12:29:06'),
('404nadim@gmail.com', '$2y$10$NTtNdzZX04nZqzMxO.X0puD30QZw1cNJqcGu1kWmDHNKY37OrJbjS', '2019-08-20 12:30:14');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `product_name`, `product_code`, `product_color`, `description`, `price`, `image`, `status`, `created_at`, `updated_at`) VALUES
(7, 6, 'Full sleeve shirt', 'FSS002', 'Red', 'Shirt for men', 800.00, '7.jpg', 1, '2019-09-13 07:10:25', '2019-09-27 05:55:10'),
(9, 6, 'Full Sleeve Shirt', 'FSS01', 'Blue', 'Men\'s blue full sleeve shirt', 700.00, '9.jpg', 0, '2019-09-20 16:27:57', '2019-09-21 15:55:13'),
(10, 6, 'Black Shirt', 'BS001', 'Black', 'sdsadsda', 700.00, '10.jpg', 1, '2019-09-21 15:28:31', '2019-09-21 15:28:32'),
(11, 6, 'White shirt', 'WS001', 'White', 'daasdsadsadsad', 1000.00, '11.jpeg', 1, '2019-09-21 15:29:37', '2019-09-21 15:29:37'),
(12, 6, 'Yellow shirt', 'YS001', 'Yellow', 'dsffdsfdfdsfsdfsf', 600.00, '12.jpg', 1, '2019-09-21 15:30:23', '2019-09-21 15:30:23'),
(13, 6, 'Grey Shirt', 'GS001', 'Grey', 'gfdgfgfddgfdg', 1250.00, '13.jpg', 1, '2019-09-21 15:30:50', '2019-09-21 15:30:50'),
(14, 6, 'Nice Full Sleeve shirt', 'FSS004', 'Light Blue', 'fdsfsfsdfdsfsdfsd', 2000.00, 'defaultproductphoto.jpg', 0, '2019-09-21 15:58:05', '2019-09-21 15:58:05');

-- --------------------------------------------------------

--
-- Table structure for table `products_attributes`
--

CREATE TABLE `products_attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `sku` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_attributes`
--

INSERT INTO `products_attributes` (`id`, `product_id`, `sku`, `size`, `price`, `stock`, `created_at`, `updated_at`) VALUES
(1, 2, 'BJ002-L', 'Large', 1234.00, 2, '2019-09-15 16:32:40', '2019-09-15 16:32:40'),
(2, 2, 'BJ002-M', 'Medium', 3433.00, 4, '2019-09-15 16:32:40', '2019-09-15 16:32:40'),
(5, 7, 'FSS002-S', 'Small', 700.00, 2, '2019-09-19 06:13:51', '2019-09-21 11:57:13'),
(6, 7, 'FSS002-M', 'Medium', 800.00, 1, '2019-09-19 06:13:51', '2019-09-27 05:55:30'),
(7, 7, 'FSS002-L', 'Large', 1000.00, 0, '2019-09-19 06:13:51', '2019-09-21 07:18:36'),
(8, 10, 'BS001-L', 'Large', 1100.00, 2, '2019-09-27 06:49:57', '2019-09-27 06:49:57'),
(9, 10, 'BS001-M', 'Medium', 1000.00, 4, '2019-09-27 06:49:58', '2019-09-27 06:49:58'),
(10, 10, 'BS001-S', 'Small', 700.00, 3, '2019-09-27 06:49:58', '2019-09-27 06:49:58');

-- --------------------------------------------------------

--
-- Table structure for table `products_images`
--

CREATE TABLE `products_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_images`
--

INSERT INTO `products_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(7, 7, '7-1.jpg', '2019-09-20 22:29:53', '2019-09-20 16:29:53'),
(8, 9, '9-1.jpg', '2019-09-20 22:32:26', '2019-09-20 16:32:26'),
(9, 9, '9-2.jpg', '2019-09-20 22:32:26', '2019-09-20 16:32:26'),
(10, 9, '9-3.jpg', '2019-09-20 23:07:11', '2019-09-20 17:07:11');

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
  `admin_status` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `admin_status`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Nasrullah Al Nadim', '404nadim@gmail.com', NULL, '$2y$10$FwW7DIAnKvuvyE.KCfSqV.oHBjEfu379VSyDkSEi4HDlmeJmGptzi', 1, NULL, '2019-09-08 13:36:06', '2019-09-09 08:37:25'),
(5, 'user1', 'n@n.com', NULL, '$2y$10$xY5rUJyWQ6dX2moJpuuFLucRzsgiabIxB/xqjp7iqXAly73Ne.Pra', NULL, NULL, '2019-09-08 14:18:44', '2019-09-08 14:18:44');

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
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_attributes`
--
ALTER TABLE `products_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_images`
--
ALTER TABLE `products_images`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products_attributes`
--
ALTER TABLE `products_attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products_images`
--
ALTER TABLE `products_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
