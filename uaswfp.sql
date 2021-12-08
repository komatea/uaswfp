-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 07:54 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uaswfp`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `logo_image`, `deleted_at`) VALUES
(1, 'ASUS', 'asus', 'asus.png', NULL),
(2, 'DELL', 'dell', 'dell.jpg', NULL),
(3, 'Lenovo', 'lenovo', 'lenovo.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `deleted_at`) VALUES
(1, 'Gaming', 'gaming', NULL),
(2, 'Business', 'business', NULL),
(3, 'Video Editing', 'video-editing', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `image_products`
--

CREATE TABLE `image_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_products`
--

INSERT INTO `image_products` (`id`, `filename`, `product_id`, `deleted_at`) VALUES
(1, 'rogflowx13_1.jpg', 1, NULL),
(2, 'rogflowx13_2.jpg', 1, NULL),
(3, 'tuffx505_1.jpg', 2, NULL),
(4, 'tuffx505_2.jpg', 2, NULL);

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
(1, '2013_09_12_063352_create_roles_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2021_12_03_062421_create_categories_table', 1),
(6, '2021_12_03_085746_create_brands_table', 1),
(7, '2021_12_03_085813_create_products_table', 1),
(8, '2021_12_04_064232_create_orders_table', 1),
(9, '2021_12_04_073601_create_image_products_table', 1),
(10, '2021_12_04_144640_create_orderdetails_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `qty`, `subtotal`, `product_id`, `order_id`, `deleted_at`) VALUES
(1, 1, 10000000, 8, 1, NULL),
(2, 1, 6000000, 9, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orderdate` datetime NOT NULL,
  `grand_total` int(11) DEFAULT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `orderdate`, `grand_total`, `customer_id`, `employee_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2021-10-07 00:00:00', 16000000, 3, NULL, 'waiting', NULL, NULL, NULL);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `disc` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `interfaces` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `graphics_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `processor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hardisk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyboard` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `camera` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wifi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `speaker` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `disc`, `description`, `interfaces`, `graphics_card`, `processor`, `display`, `ram`, `hardisk`, `ssd`, `keyboard`, `camera`, `wifi`, `speaker`, `weight`, `slug`, `main_image`, `brand_id`, `category_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ROG Flow X13', 25499000, 2, 'Cool', '<ul>\n            <li>1x 3.5mm Combo Audio Jack\n            <li>1x HDMI 2.0b</li>\n            <li>1x USB 3.2 Gen 2 Type-A</li>\n            <li>2x USB 3.2 Gen 2 Type-C support DisplayPort / power delivery</li>\n            <li>1x ROG XG Mobile Interface</li>\n            <ul>', 'NNVIDIA® GeForce® RTX3050 4GB GDDR6', 'AMD Ryzen™ 9 5900HS Processor 3.1 GHz (16M Cache, up to 4.5 GHz)', '13,4\" FHD (1920x1080) 16:10 IPS-Level 100% SRGB, 72% NTSC, 120Hz Touch Screen', '16GB LPDDR4X', NULL, '512GB M.2 2230 NVMe™ PCIe® 3.0 SSD', 'Backlit chicklet keyboard', '720P HD camera', 'Intel Wi-Fi 6(Gig+)(802.11ax)+Bluetooth 5.1 (Dual band) 2*2', '2x 1W speaker with smart AMP technology', '1,6Kg', 'rog-flow-x13', 'ROGFLOWX13.jpg', 1, 1, NULL, NULL, NULL),
(2, 'TUF FX505', 14999000, 1, 'ASUS TUF GAMING F15 FX506LH-I765B6T i7-10750H 8GB 512GB GTX1650 W10', '<ul>\n            <li>1 x COMBO audio jack</li>\n            <li>2 x Type-A USB 3.2 (Gen 1)</li>\n            <li>1 x Type-C USB 3.2 (Gen 2) with display supportDP1.4</li>\n            <li>1 x Type-A USB2.0</li>\n            <li>1 x RJ45 LAN jack for LAN insert</li>\n            <li>1 x HDMI, HDMI support 2.0b</li>\n            <li>1 x AC adapter plug</li>\n            <ul>', 'NNVIDIA® GeForce® RTX3050 4GB GDDR6', 'Intel® Core i7-10750H Processor (12M Cache, up to 5.00 GHz)', '15.6\" (16:9) LED-backlit FHD (1920x1080) 144Hz Anti-Glare IPS-level Panel with 45% NTSC, 63% SRGB', '8 GB DDR4 3200Mhz', NULL, '512GB M.2 NVMeâ¢ PCIe® 3.0 SSD', 'S\\Chiclet keyboard with isolated numpad key', 'HD 720p CMOS module', 'Integrated Wi-Fi 5 (802.11 ac (2x2) + Bluetooth 5.0', 'DTS:X® Ultra', '2,25Kg', 'tuf-fx505', 'TUFFX505.jpg', 1, 2, NULL, NULL, NULL),
(3, 'ASUS V13', 14999000, 1, 'ASUS V13 512GB GTX1650 W10', '<ul>\n            <li>1 x COMBO audio jack</li>\n            <li>2 x Type-A USB 3.2 (Gen 1)</li>\n            <li>1 x Type-C USB 3.2 (Gen 2) with display supportDP1.4</li>\n            <li>1 x Type-A USB2.0</li>\n            <li>1 x RJ45 LAN jack for LAN insert</li>\n            <li>1 x HDMI, HDMI support 2.0b</li>\n            <li>1 x AC adapter plug</li>\n            <ul>', 'NNVIDIA® GeForce® RTX3050 4GB GDDR6', 'Intel® Core i7-10750H Processor (12M Cache, up to 5.00 GHz)', '15.6\" (16:9) LED-backlit FHD (1920x1080) 144Hz Anti-Glare IPS-level Panel with 45% NTSC, 63% SRGB', '8 GB DDR4 3200Mhz', NULL, '512GB M.2 NVMeâ¢ PCIe® 3.0 SSD', 'S\\Chiclet keyboard with isolated numpad key', 'HD 720p CMOS module', 'Integrated Wi-Fi 5 (802.11 ac (2x2) + Bluetooth 5.0', 'DTS:X® Ultra', '2,25Kg', 'asus-v13', 'ASUSV13.jpg', 1, 3, NULL, NULL, NULL),
(4, 'RAD 502', 10499000, 2, 'ZERO ZERO ONE', '<ul>\n            <li>1 x COMBO audio jack</li>\n            <li>2 x Type-A USB 3.2 (Gen 1)</li>\n            <li>1 x Type-C USB 3.2 (Gen 2) with display supportDP1.4</li>\n            <li>1 x Type-A USB2.0</li>\n            <li>1 x RJ45 LAN jack for LAN insert</li>\n            <li>1 x HDMI, HDMI support 2.0b</li>\n            <li>1 x AC adapter plug</li>\n            <ul>', 'NNVIDIA® GeForce® RTX3050 4GB GDDR6', 'Intel® Core i7-10750H Processor (12M Cache, up to 5.00 GHz)', '15.6\" (16:9) LED-backlit FHD (1920x1080) 144Hz Anti-Glare IPS-level Panel with 45% NTSC, 63% SRGB', '8 GB DDR4 3200Mhz', NULL, '512GB M.2 NVMeâ¢ PCIe® 3.0 SSD', 'S\\Chiclet keyboard with isolated numpad key', 'HD 720p CMOS module', 'Integrated Wi-Fi 5 (802.11 ac (2x2) + Bluetooth 5.0', 'DTS:X® Ultra', '2,25Kg', 'rad-502', 'RAD502.jpg', 2, 1, NULL, NULL, NULL),
(5, 'DELL B-Suite', 10200000, 2, 'Business Maximum', '<ul>\n            <li>1 x COMBO audio jack</li>\n            <li>2 x Type-A USB 3.2 (Gen 1)</li>\n            <li>1 x Type-C USB 3.2 (Gen 2) with display supportDP1.4</li>\n            <li>1 x Type-A USB2.0</li>\n            <li>1 x RJ45 LAN jack for LAN insert</li>\n            <li>1 x HDMI, HDMI support 2.0b</li>\n            <li>1 x AC adapter plug</li>\n            <ul>', 'NNVIDIA® GeForce® RTX3050 4GB GDDR6', 'Intel® Core i7-10750H Processor (12M Cache, up to 5.00 GHz)', '15.6\" (16:9) LED-backlit FHD (1920x1080) 144Hz Anti-Glare IPS-level Panel with 45% NTSC, 63% SRGB', '8 GB DDR4 3200Mhz', NULL, '512GB M.2 NVMeâ¢ PCIe® 3.0 SSD', 'S\\Chiclet keyboard with isolated numpad key', 'HD 720p CMOS module', 'Integrated Wi-Fi 5 (802.11 ac (2x2) + Bluetooth 5.0', 'DTS:X® Ultra', '2,25Kg', 'dell-b-suite', 'DELLBSUITE.jpg', 2, 2, NULL, NULL, NULL),
(6, 'DELL V10', 6000000, 1, 'Video With No Limit', '<ul>\n            <li>1 x COMBO audio jack</li>\n            <li>2 x Type-A USB 3.2 (Gen 1)</li>\n            <li>1 x Type-C USB 3.2 (Gen 2) with display supportDP1.4</li>\n            <li>1 x Type-A USB2.0</li>\n            <li>1 x RJ45 LAN jack for LAN insert</li>\n            <li>1 x HDMI, HDMI support 2.0b</li>\n            <li>1 x AC adapter plug</li>\n            <ul>', 'NNVIDIA® GeForce® RTX3050 4GB GDDR6', 'Intel® Core i7-10750H Processor (12M Cache, up to 5.00 GHz)', '15.6\" (16:9) LED-backlit FHD (1920x1080) 144Hz Anti-Glare IPS-level Panel with 45% NTSC, 63% SRGB', '8 GB DDR4 3200Mhz', NULL, '512GB M.2 NVMeâ¢ PCIe® 3.0 SSD', 'S\\Chiclet keyboard with isolated numpad key', 'HD 720p CMOS module', 'Integrated Wi-Fi 5 (802.11 ac (2x2) + Bluetooth 5.0', 'DTS:X® Ultra', '2,25Kg', 'dell-v10', 'DELLV10.jpg', 2, 3, NULL, NULL, NULL),
(7, 'Lenovo Gaming', 6000000, 1, 'Gaming With No Limit', '<ul>\n            <li>1 x COMBO audio jack</li>\n            <li>2 x Type-A USB 3.2 (Gen 1)</li>\n            <li>1 x Type-C USB 3.2 (Gen 2) with display supportDP1.4</li>\n            <li>1 x Type-A USB2.0</li>\n            <li>1 x RJ45 LAN jack for LAN insert</li>\n            <li>1 x HDMI, HDMI support 2.0b</li>\n            <li>1 x AC adapter plug</li>\n            <ul>', 'NNVIDIA® GeForce® RTX3050 4GB GDDR6', 'Intel® Core i7-10750H Processor (12M Cache, up to 5.00 GHz)', '15.6\" (16:9) LED-backlit FHD (1920x1080) 144Hz Anti-Glare IPS-level Panel with 45% NTSC, 63% SRGB', '8 GB DDR4 3200Mhz', NULL, '512GB M.2 NVMeâ¢ PCIe® 3.0 SSD', 'S\\Chiclet keyboard with isolated numpad key', 'HD 720p CMOS module', 'Integrated Wi-Fi 5 (802.11 ac (2x2) + Bluetooth 5.0', 'DTS:X® Ultra', '2,25Kg', 'lenovo-gaming', 'LEVONOGAMING.jpg', 3, 1, NULL, NULL, NULL),
(8, 'Lenovo Business', 10000000, 1, 'Business Limitless', '<ul>\n            <li>1 x COMBO audio jack</li>\n            <li>2 x Type-A USB 3.2 (Gen 1)</li>\n            <li>1 x Type-C USB 3.2 (Gen 2) with display supportDP1.4</li>\n            <li>1 x Type-A USB2.0</li>\n            <li>1 x RJ45 LAN jack for LAN insert</li>\n            <li>1 x HDMI, HDMI support 2.0b</li>\n            <li>1 x AC adapter plug</li>\n            <ul>', 'NNVIDIA® GeForce® RTX3050 4GB GDDR6', 'Intel® Core i7-10750H Processor (12M Cache, up to 5.00 GHz)', '15.6\" (16:9) LED-backlit FHD (1920x1080) 144Hz Anti-Glare IPS-level Panel with 45% NTSC, 63% SRGB', '8 GB DDR4 3200Mhz', NULL, '512GB M.2 NVMeâ¢ PCIe® 3.0 SSD', 'S\\Chiclet keyboard with isolated numpad key', 'HD 720p CMOS module', 'Integrated Wi-Fi 5 (802.11 ac (2x2) + Bluetooth 5.0', 'DTS:X® Ultra', '2,25Kg', 'lenovo-business', 'LENOVOBUSINESS.jpg', 3, 2, NULL, NULL, NULL),
(9, 'Lenovo V99', 6000000, 1, 'Video Limitless', '<ul>\n            <li>1 x COMBO audio jack</li>\n            <li>2 x Type-A USB 3.2 (Gen 1)</li>\n            <li>1 x Type-C USB 3.2 (Gen 2) with display supportDP1.4</li>\n            <li>1 x Type-A USB2.0</li>\n            <li>1 x RJ45 LAN jack for LAN insert</li>\n            <li>1 x HDMI, HDMI support 2.0b</li>\n            <li>1 x AC adapter plug</li>\n            <ul>', 'NNVIDIA® GeForce® RTX3050 4GB GDDR6', 'Intel® Core i7-10750H Processor (12M Cache, up to 5.00 GHz)', '15.6\" (16:9) LED-backlit FHD (1920x1080) 144Hz Anti-Glare IPS-level Panel with 45% NTSC, 63% SRGB', '8 GB DDR4 3200Mhz', NULL, '512GB M.2 NVMeâ¢ PCIe® 3.0 SSD', 'S\\Chiclet keyboard with isolated numpad key', 'HD 720p CMOS module', 'Integrated Wi-Fi 5 (802.11 ac (2x2) + Bluetooth 5.0', 'DTS:X® Ultra', '2,25Kg', 'lenovo-v99', 'LENOVOV99.jpg', 3, 3, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'owner', NULL, NULL, NULL),
(2, 'employee', NULL, NULL, NULL),
(3, 'member', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_num` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `address`, `phone_num`, `role_id`, `status`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Bang Top', 'bangtop', '$2y$10$BvUmP.oFqHx5cmQA5Ap8puMfOPdQMKT5w0ILDslupt/CQOmOb9Roi', 'Jl. Panjer', '081381928592', 1, 'active', NULL, NULL, NULL, NULL),
(2, 'Pegawai', 'pegawai', '$2y$10$PohSP.olFlnajxcUsAokvuKnLdldtYDyhS7AazFOHyRYI.HpfIj3W', 'Jl. Hangtuah', '081748275819', 2, 'active', NULL, NULL, NULL, NULL),
(3, 'Member', 'member', '$2y$10$uzf4MI0yc49wFXUa9pBW6.1CLxIFFWSrC90CvMqvHCT5Is6rVPjAa', 'Jl. Sedap', '081381928592', 3, 'active', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_products`
--
ALTER TABLE `image_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_products_product_id_foreign` (`product_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orderdetails_product_id_foreign` (`product_id`),
  ADD KEY `orderdetails_order_id_foreign` (`order_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_customer_id_foreign` (`customer_id`),
  ADD KEY `orders_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image_products`
--
ALTER TABLE `image_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `image_products`
--
ALTER TABLE `image_products`
  ADD CONSTRAINT `image_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `orderdetails_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `orders_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
