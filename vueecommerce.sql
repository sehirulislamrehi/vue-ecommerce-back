-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 03, 2021 at 11:19 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vueecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(7, 'Electronics & Home Appliance', 'electronics-home-appliance', '85.png', '2021-01-02 09:02:45', '2021-01-03 00:08:59'),
(9, 'Women\'s Fashion', 'womens-fashion', '34.PNG', '2021-01-02 18:47:42', '2021-01-03 00:09:33'),
(10, 'Gadget Items', 'gadget-items', '86.PNG', '2021-01-02 18:48:02', '2021-01-03 00:09:06'),
(11, 'Consumer Promotions', 'consumer-promotions', '70.PNG', '2021-01-02 18:48:18', '2021-01-03 00:08:47'),
(12, 'Cooking Products', 'cooking-products', '32.PNG', '2021-01-02 18:48:33', '2021-01-03 00:08:55'),
(13, 'Food Products', 'food-products', '59.PNG', '2021-01-02 18:48:47', '2021-01-03 00:09:02'),
(14, 'Organic Fruits & Vegetables', 'organic-fruits-vegetables', '58.PNG', '2021-01-02 18:49:26', '2021-01-03 00:09:23'),
(15, 'Health & Beauty', 'health-beauty', '19.PNG', '2021-01-02 18:49:42', '2021-01-03 00:09:09'),
(16, 'Home & Cleaning', 'home-cleaning', '72.PNG', '2021-01-02 18:49:59', '2021-01-03 00:09:14'),
(17, 'Office & Stationary', 'office-stationary', '86.PNG', '2021-01-02 18:50:25', '2021-01-03 00:09:20'),
(18, 'Medinice', 'medinice', '22.PNG', '2021-01-02 18:50:40', '2021-01-03 00:09:17');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_02_082612_create_categories_table', 2),
(5, '2021_01_02_152544_create_products_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `regular_price` int(11) NOT NULL,
  `offer_price` int(11) DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `description`, `regular_price`, `offer_price`, `image`, `created_at`, `updated_at`) VALUES
(5, 10, '6 Blade USB Rechargeable Portable Mini Juicer-Blue', '6-blade-usb-rechargeable-portable-mini-juicer-blue', '6 Blade USB Rechargeable Portable Mini Juicer-Blue', 50, NULL, '45.jpg', '2021-01-02 18:53:09', '2021-01-03 01:58:37'),
(6, 10, 'KAKA 40L Travel Sports Men Backpack – Black', 'kaka-40l-travel-sports-men-backpack-black', 'KAKA 40L Travel Sports Men Backpack – Black', 3500, NULL, '0.jpg', '2021-01-02 18:53:43', '2021-01-03 01:58:28'),
(7, 10, 'Toothbrush Toothpaste Automatic Dispenser Organizer-White', 'toothbrush-toothpaste-automatic-dispenser-organizer-white', 'Toothbrush Toothpaste Automatic Dispenser Organizer-White', 400, NULL, '7.jpg', '2021-01-02 18:55:46', '2021-01-03 01:58:31'),
(8, 11, 'Tresemme Shampoo Hair Fall Defense (Clutch Bag Free) 580ml', 'tresemme-shampoo-hair-fall-defense-clutch-bag-free-580ml', 'Tresemme Shampoo Hair Fall Defense (Clutch Bag Free) 580ml', 630, NULL, '66.jpg', '2021-01-02 18:56:43', '2021-01-03 01:58:40'),
(9, 11, 'Sunsilk Shampoo Hijab Anti Dandruff (1GB Data Free) 375ml', 'sunsilk-shampoo-hijab-anti-dandruff-1gb-data-free-375ml', 'Sunsilk Shampoo Hijab Anti Dandruff (1GB Data Free) 375ml', 335, NULL, '79.jpg', '2021-01-02 18:57:05', '2021-01-03 01:58:50'),
(10, 11, 'Sunsilk Shampoo Lusciously Thick & Long (Makeup Bag Free) 650ml', 'sunsilk-shampoo-lusciously-thick-long-makeup-bag-free-650ml', 'Sunsilk Shampoo Lusciously Thick & Long (Makeup Bag Free) 650ml', 550, NULL, '68.jpg', '2021-01-02 18:57:27', '2021-01-03 01:58:46'),
(11, 12, 'Rupchanda Soyabean Oil 5ltr', 'rupchanda-soyabean-oil-5ltr', 'Rupchanda Soyabean Oil 5ltr', 525, NULL, '91.jpg', '2021-01-02 18:59:11', '2021-01-03 01:58:53'),
(12, 12, 'Chashi Aromatic Chinigura Rice 1kg', 'chashi-aromatic-chinigura-rice-1kg', 'Chashi Aromatic Chinigura Rice 1kg', 125, NULL, '29.jpg', '2021-01-02 18:59:31', '2021-01-03 01:58:34'),
(13, 12, 'Nazirshail Rice Standard (Palki)25 kg', 'nazirshail-rice-standard-palki25-kg', 'Nazirshail Rice Standard (Palki)25 kg', 1470, NULL, '94.jpg', '2021-01-02 18:59:51', '2021-01-03 01:58:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin@gmail.com', NULL, '$2y$10$rCLytUkIvMslSjnZ6qIKfeaSFgQDmKPaquzxtduiIJwt/x.Xuz0dK', '5xazKJAsPHIT2NH14Wtm0x29sbnnF9ibt2QMDgKRuclrcqI93kFvFexUdN5Y', '2021-01-01 10:18:49', '2021-01-01 10:18:49');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
