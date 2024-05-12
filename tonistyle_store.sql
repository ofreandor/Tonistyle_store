-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2024 at 09:47 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tonistyle_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `passport` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `first_name`, `last_name`, `phone`, `email`, `passport`, `password`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'User', '07047475522', 'admin@tonistyle.com', 'logo.png', '$2y$12$yEgo5DU6pa2Ou6WicN6yWeaYGlFH6nX9CSvNECU4AhZ3Y3J4iyK8e', '2024-05-07 07:46:57', 'FfhPAGiINq', '2024-05-07 07:46:57', '2024-05-07 07:46:57');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_status` varchar(255) NOT NULL DEFAULT 'active',
  `delete_status` varchar(255) NOT NULL DEFAULT 'available',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_status`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, 'HP (Hewlett-Packard)', 'active', 'available', '2024-05-07 07:46:56', '2024-05-07 07:46:56'),
(2, 'Dell', 'active', 'available', '2024-05-07 07:46:56', '2024-05-07 07:46:56'),
(3, 'Nike', 'active', 'available', '2024-05-07 07:46:56', '2024-05-07 07:46:56'),
(4, 'Adidas', 'active', 'available', '2024-05-07 07:46:56', '2024-05-07 07:46:56'),
(5, 'Samsung', 'active', 'available', '2024-05-07 07:46:56', '2024-05-07 07:46:56'),
(6, 'Apple', 'active', 'available', '2024-05-07 07:46:56', '2024-05-07 07:46:56'),
(7, 'Lenovo', 'active', 'available', '2024-05-07 07:46:56', '2024-05-07 07:46:56'),
(8, 'Gucci', 'active', 'available', '2024-05-07 07:46:56', '2024-05-07 07:46:56'),
(9, 'Microsoft', 'active', 'available', '2024-05-07 07:46:56', '2024-05-07 07:46:56'),
(10, 'Louis Vuitton', 'active', 'available', '2024-05-07 07:46:56', '2024-05-07 07:46:56'),
(11, 'JBL', 'active', 'available', '2024-05-07 07:46:56', '2024-05-07 07:46:56'),
(12, 'LG', 'active', 'available', '2024-05-07 07:46:56', '2024-05-07 07:46:56'),
(13, 'Huawei', 'active', 'available', '2024-05-07 07:46:56', '2024-05-07 07:46:56'),
(14, 'Xiaomi', 'active', 'available', '2024-05-07 07:46:56', '2024-05-07 07:46:56'),
(15, 'OnePlus', 'active', 'available', '2024-05-07 07:46:56', '2024-05-07 07:46:56'),
(16, 'Google (Pixel)', 'active', 'available', '2024-05-07 07:46:56', '2024-05-07 07:46:56'),
(17, 'Oppo', 'active', 'available', '2024-05-07 07:46:56', '2024-05-07 07:46:56'),
(18, 'Nokia', 'active', 'available', '2024-05-07 07:46:56', '2024-05-07 07:46:56'),
(19, 'infinix', 'active', 'available', '2024-05-07 07:46:56', '2024-05-07 07:46:56'),
(20, 'Hisense', 'active', 'available', '2024-05-07 07:46:56', '2024-05-07 07:46:56'),
(21, 'Timberland', 'active', 'available', '2024-05-07 07:46:56', '2024-05-07 07:46:56'),
(22, 'High Fashion', 'active', 'available', '2024-05-07 07:46:57', '2024-05-07 07:46:57'),
(23, 'Oraimo', 'active', 'available', '2024-05-07 07:46:57', '2024-05-07 07:46:57'),
(24, 'Nexus', 'active', 'available', '2024-05-07 07:46:57', '2024-05-07 07:46:57'),
(25, 'General Products', 'active', 'available', '2024-05-07 07:46:57', '2024-05-07 07:46:57');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `size` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `quantity`, `size`, `color`, `created_at`, `updated_at`) VALUES
(1, 2, 3, 2, NULL, NULL, '2024-05-07 08:17:54', '2024-05-10 09:38:17'),
(4, 2, 5, 1, NULL, NULL, '2024-05-07 12:15:40', '2024-05-07 12:15:40');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `deleted_status` varchar(255) NOT NULL DEFAULT 'available',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `status`, `deleted_status`, `created_at`, `updated_at`) VALUES
(1, 'Shoes', 'active', 'available', '2024-05-07 07:46:57', '2024-05-07 07:46:57'),
(2, 'Clothing', 'active', 'available', '2024-05-07 07:46:57', '2024-05-07 07:46:57'),
(3, 'Electronics', 'active', 'available', '2024-05-07 07:46:57', '2024-05-07 07:46:57'),
(4, 'Food & Groceries', 'active', 'available', '2024-05-07 07:46:57', '2024-05-07 07:46:57'),
(5, 'Jewelry & Watches', 'active', 'available', '2024-05-07 07:46:57', '2024-05-07 07:46:57'),
(6, 'Men', 'active', 'available', '2024-05-07 07:46:57', '2024-05-07 07:46:57'),
(7, 'Women', 'active', 'available', '2024-05-07 07:46:57', '2024-05-07 07:46:57'),
(8, 'Unisex', 'active', 'available', '2024-05-07 07:46:57', '2024-05-07 07:46:57'),
(9, 'Kids or Children', 'active', 'available', '2024-05-07 07:46:57', '2024-05-07 07:46:57'),
(10, 'Phone & Accessories', 'active', 'available', '2024-05-07 07:46:57', '2024-05-07 07:46:57'),
(11, 'Charger', 'active', 'available', '2024-05-07 07:46:57', '2024-05-07 07:46:57'),
(12, 'Ear phones', 'active', 'available', '2024-05-07 07:46:57', '2024-05-07 07:46:57'),
(13, 'Footwear', 'active', 'available', '2024-05-07 07:46:57', '2024-05-07 07:46:57');

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
(4, '2024_04_04_112540_create_brands_table', 1),
(5, '2024_04_04_115750_create_categories_table', 1),
(6, '2024_04_11_165811_create_admins_table', 1),
(7, '2024_04_12_085524_create_products_table', 1),
(8, '2024_04_12_092150_create_product_images_table', 1),
(9, '2024_04_22_135540_create_carts_table', 1),
(16, '2024_05_06_162312_create_orders_table', 2),
(17, '2024_05_10_133354_create_order_items_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `local_government` varchar(255) NOT NULL,
  `address_one` varchar(255) NOT NULL,
  `address_two` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `message` varchar(255) DEFAULT NULL,
  `tracking_no` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_code` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `selling_price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `color` varchar(255) DEFAULT NULL,
  `discount` decimal(5,2) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `features` text DEFAULT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `categories_product` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `price`, `selling_price`, `quantity`, `description`, `category_id`, `brand_id`, `status`, `color`, `discount`, `size`, `features`, `tag`, `categories_product`, `created_at`, `updated_at`) VALUES
(1, 'PRT74244790', 'Lenovo ThinkPad X1 Carbon G9 Touchscreen 11th Gen Intel Core I7-16GB Ram-512GB SSD-WIN 10 PRO', 1780000.00, 1658000.00, 4, 'Lenovo ThinkPad X1 Carbon G9 Touchscreen 11th Gen Intel Core I7-16GB Ram-512GB SSD-WIN 10 PRO\r\nLenovo ThinkPad Carbon X1 Gen 9 Touchscreen• 2.8 GHz Intel Core i7 4-Core (11th Gen)• 16GB of DDR4 RAM - 512GB M.2 SSD• 14\" 3840 x 2400 IPS Display• Integrated Intel Iris Xe Graphics• USB 3.2 Gen 1 - Thunderbolt 4 - HDMI• Wi-Fi 6 (802.11ax) - Bluetooth 5.2• IR HD Webcam with Privacy Shutter• Quad-Mic Array• Windows 10 Pro (64-Bit)', 3, 7, 'active', 'white', 0.00, NULL, 'Lenovo ThinkPad Carbon X1 Gen 9 Touchscreen• 2.8 GHz Intel Core i7 4-Core (11th Gen)• 16GB of DDR4 RAM - 512GB M.2 SSD• 14\" 3840 x 2400 IPS Display• Integrated Intel Iris Xe Graphics• USB 3.2 Gen 1 - Thunderbolt 4 - HDMI• Wi-Fi 6 (802.11ax) - Bluetooth 5.2• IR HD Webcam with Privacy Shutter• Quad-Mic Array• Windows 10 Pro (64-Bit)', NULL, NULL, '2024-05-07 07:57:53', '2024-05-07 07:57:53'),
(3, 'PRT47898418', 'VEJARO D02 Female Casual Short Sleeve Dress Multicolor Printing', 15000.00, 7683.00, 4, 'Made of Milk Protein Fabric Super soft and comfortable Breathable Absorbent Fashionable High quality High flexibility', 7, 25, 'active', 'Multicolor', 0.00, NULL, 'Quality: First-grade quality\r\nFeature: Made of Milk Protein Fabric, Super soft and comfortable, breathable, absorbent, fashionable, high quality, high flexibility\r\nColor: Multicolor\r\nMaterial: Milk Protein Fabric\r\nWhat\'s in the box: one piece of dress and one pair of earrings\r\nWeight: 0.2kg/piece\r\nSize: M, L, XL\r\nGender: Female', NULL, NULL, '2024-05-07 08:15:40', '2024-05-07 08:15:40'),
(4, 'PRT12058489', 'Apple IPhone 15 Pro Max 256gb - Nano Sim - Blue Titanium', 1450000.00, 1350000.00, 1, 'The iPhone 15 Pro Max uses Titanium for its frame, which is lighter and stronger than before. \r\nThe iPhone 15 Pro Max is powered by the A17 Pro chip, a 3nm processor that promises improved performance.', 10, 6, 'active', 'Black, purple', 0.00, NULL, 'Manufacturer - Apple Screen Size -  6.7-Inch  Display Sim Type - Single Sim Ram - 6GB RAM Internal Memory - 128GB ROM Operating System - IOS 16 Rear Camera - 48MP + 12MP + 12MP Front Camera: - 12MP  5G Network - Yes  Battery Capacity - Li-Ion 4323 mAh, non-removable', NULL, NULL, '2024-05-07 08:39:45', '2024-05-07 08:39:45'),
(5, 'PRT30259705', '2024 Womens Casual Socks Shoes Running Sneakers - Black', 15900.00, 9900.00, 1, 'This pair of \"air cushion sock shoes\" has swept the Internet this year.\r\nFashionistas on ins are wearing these American \"sock shoes\", how good are they?\r\nFashionable socks and shoes are easy to wear and breathable. At the same time, with air cushion soles, they are not only comfortable but also shock-resistant.', 1, 3, 'active', 'Black', 0.00, NULL, 'Product Score: ⭐⭐⭐⭐⭐\r\nStore: Fashion\r\nStyle: Casual、Sports\r\nDesign: Classic Design\r\nExterior Material: High-Quality Textile\r\nInterior Material: Comfortable Inside\r\nOutsole Material: Air Cushion Sole', NULL, NULL, '2024-05-07 12:15:14', '2024-05-07 12:15:14'),
(6, 'PRT55610050', 'VEJARO D04 Office Lady Classy Casual Long Sleeve Polka Dot Dress-Black&White', 16000.00, 6699.00, 4, 'Quality: First-grade quality\r\nFeature: Made of Milk Protein Fabric, Super soft and comfortable, breathable, absorbent, fashionable, high quality, high flexibility\r\nColor: Classy Black&White\r\nMaterial: Milk Protein Fabric\r\nWhat\'s in the box: One piece of dress and one pair of earrings \r\nWeight: 0.4kg/piece\r\nSize: M, L, XL\r\nGender: Female', 7, 25, 'active', 'Black, White', 0.00, NULL, 'Made of Milk Protein Fabric\r\nSuper soft and comfortable\r\nBreathable\r\nAbsorbent\r\nFashionable\r\nHigh quality\r\nHigh flexibility', NULL, NULL, '2024-05-09 12:02:14', '2024-05-09 12:02:14');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `product_image`, `created_at`, `updated_at`) VALUES
(1, 1, 'storage/product_image/b7545572-8020-479a-8fff-921d60aa06f7.jpg', '2024-05-07 07:57:55', '2024-05-07 07:57:55'),
(2, 1, 'storage/product_image/205173fc-5847-4828-b041-0696a61dd9cd.jpg', '2024-05-07 07:57:55', '2024-05-07 07:57:55'),
(3, 1, 'storage/product_image/2810aa4c-623f-48ea-a556-fb227b5a4c03.jpg', '2024-05-07 07:57:55', '2024-05-07 07:57:55'),
(4, 3, 'storage/product_image/428db04f-72be-4d6e-919b-9c70e881bf6f.jpg', '2024-05-07 08:15:41', '2024-05-07 08:15:41'),
(5, 3, 'storage/product_image/be5318a3-0963-4227-b764-7fd3c46af23f.jpg', '2024-05-07 08:15:41', '2024-05-07 08:15:41'),
(6, 3, 'storage/product_image/85592cca-6cdc-460f-86b5-85ff7d1aa06b.jpg', '2024-05-07 08:15:41', '2024-05-07 08:15:41'),
(7, 4, 'storage/product_image/a2c60277-e0b8-4c09-8779-66bbdd76b370.jpg', '2024-05-07 08:39:45', '2024-05-07 08:39:45'),
(8, 4, 'storage/product_image/79bb8f7a-847b-46ad-b68d-5f0e2ab70273.jpg', '2024-05-07 08:39:45', '2024-05-07 08:39:45'),
(9, 5, 'storage/product_image/292254f1-b90f-4615-9d5e-ca1dcfb9f078.jpg', '2024-05-07 12:15:14', '2024-05-07 12:15:14'),
(10, 5, 'storage/product_image/6450d64c-7c83-45d8-85b7-f901fe946b36.jpg', '2024-05-07 12:15:14', '2024-05-07 12:15:14'),
(11, 5, 'storage/product_image/fd699ed1-ee39-4b5b-a545-d397134623c6.jpg', '2024-05-07 12:15:14', '2024-05-07 12:15:14'),
(12, 6, 'storage/product_image/7b68fb8e-6df7-4b46-96c4-0496b498fa1a.jpg', '2024-05-09 12:02:17', '2024-05-09 12:02:17'),
(13, 6, 'storage/product_image/55d0e470-d4e2-4e89-ad31-f365b8b714a1.jpg', '2024-05-09 12:02:17', '2024-05-09 12:02:17'),
(14, 6, 'storage/product_image/7bb2dc95-3b18-4f0d-8cf3-6f2b986521bc.jpg', '2024-05-09 12:02:17', '2024-05-09 12:02:17');

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
('aqhXILvoxCbD8Sre6jzAfAyhY2rB5Fssu8BR9PX9', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiQ2FRY1dLRXNTcG1PM1kzc1kzb0R0cEZnVFNDUWlpUjd5MEx3SWdyTiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6OTAwMC9jYXJ0Ijt9czo1MjoibG9naW5fYWRtaW5fNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6NDoiY2FydCI7YToyOntpOjY7YTo0OntzOjEwOiJwcm9kdWN0X2lkIjtzOjE6IjYiO3M6ODoicXVhbnRpdHkiO3M6MToiMSI7czo1OiJjb2xvciI7TjtzOjQ6InNpemUiO047fWk6NTthOjQ6e3M6MTA6InByb2R1Y3RfaWQiO3M6MToiNSI7czo4OiJxdWFudGl0eSI7czoxOiIxIjtzOjU6ImNvbG9yIjtOO3M6NDoic2l6ZSI7Tjt9fX0=', 1715259839),
('EA6cThydWvoFHju5g6lum3l9HrFjcJeN47JARzPb', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidjFrbllhdW9sVzZBVjdOMTBLbmRFS1RWMm56NVJMSHJyQWdCOTM5bCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6OTAwMC9jYXJ0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mjt9', 1715337501),
('N3pxluVfNmehOBc3bxRErNBPz1E1n840cuIglbih', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoic2ZNZWczN0VkUmJzOU11YjI0TjFsek1OWXJJUkc1ZjBmREVacU9kMiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI3OiJodHRwOi8vMTI3LjAuMC4xOjkwMDAvb3JkZXIiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1715496041),
('nVeyV7IA8yfd7GWwDLGO47TTM6AeLQYiW9DvmSfF', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZFdDRVdzMlJOTEVMb3J3RlY3TU94SG1Wa3RFZ2VmQUhrcUdHc1pNRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6OTAwMC9vcmRlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1715443798),
('swd8q4Vb4LJGrIBcwvRmcaEK3IFuZ4cT4M1vnBIn', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoibUkzaER6UXNsaE16cGk3bmZBS1o1ak5SUW9hWnliVXN5TFF1cVhxRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6OTAwMC9jYXJ0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozODoiaHR0cDovLzEyNy4wLjAuMTo5MDAwL2N1c3RvbWVyL2FjY291bnQiO31zOjQ6ImNhcnQiO2E6Mjp7aTo2O2E6NDp7czoxMDoicHJvZHVjdF9pZCI7czoxOiI2IjtzOjg6InF1YW50aXR5IjtzOjE6IjIiO3M6NToiY29sb3IiO047czo0OiJzaXplIjtOO31pOjQ7YTo0OntzOjEwOiJwcm9kdWN0X2lkIjtzOjE6IjQiO3M6ODoicXVhbnRpdHkiO3M6MToiMSI7czo1OiJjb2xvciI7TjtzOjQ6InNpemUiO047fX19', 1715411141),
('vBLpxoBZdods8r98UeRoh0rfIInPkQKrb7qnRxKk', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiMTAwNTJwWktYRmF3ZEI5S2FzOHg5ak1GSmtNZkN4UkVkVEZvMFVBbCI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI3OiJodHRwOi8vMTI3LjAuMC4xOjkwMDAvb3JkZXIiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=', 1715463636),
('ZQeQ6F7Io2nXT46f9TgDwWU2wyw6wZI1GcmPC5Q5', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMjJFdm12bEZTNVlIWUUwWlNNeFprNnFpNlU2RG1oWHE0TmowMjdXTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6OTAwMC9zaG9wIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1715334503);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `passport` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `phone`, `email`, `passport`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jon', 'Doe', '07047474422', 'jondoe@tonistyle.com', 'logo.png', '2024-05-07 07:46:56', '$2y$12$yOpXyjIS6RKqMGR1AiBkduPzSlRLXgmIU1DlzaIscJwx02LjRva3q', '10wIqqmOyA6qr4lPInScz6UXku5YqdCyXVuuYf2ZG4zE2n234JhJ6EXMcuu8', '2024-05-07 07:46:56', '2024-05-07 07:46:56'),
(2, 'Alex', 'Smith', '07047474433', 'alex@tonistyle.com', 'logo.png', '2024-05-07 07:46:56', '$2y$12$yYuNhMGGzjbFC/.6oi20yuziYH2LjTJmuwqEUjdlEmfwRMiC3QKHC', 'XT36f3YrRz', '2024-05-07 07:46:56', '2024-05-07 07:46:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_brand_name_unique` (`brand_name`);

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
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_product_code_unique` (`product_code`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
