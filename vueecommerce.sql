-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 03, 2021 at 03:06 AM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

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
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(7, 'Electronics & Home Appliance', '85.png', '2021-01-02 09:02:45', '2021-01-02 09:02:45'),
(9, 'Women\'s Fashion', '34.PNG', '2021-01-02 18:47:42', '2021-01-02 18:47:42'),
(10, 'Gadget Items', '86.PNG', '2021-01-02 18:48:02', '2021-01-02 18:48:02'),
(11, 'Consumer Promotions', '70.PNG', '2021-01-02 18:48:18', '2021-01-02 18:48:18'),
(12, 'Cooking Products', '32.PNG', '2021-01-02 18:48:33', '2021-01-02 18:48:33'),
(13, 'Food Products', '59.PNG', '2021-01-02 18:48:47', '2021-01-02 18:48:47'),
(14, 'Organic Fruits & Vegetables', '58.PNG', '2021-01-02 18:49:26', '2021-01-02 18:49:26'),
(15, 'Health & Beauty', '19.PNG', '2021-01-02 18:49:42', '2021-01-02 18:49:42'),
(16, 'Home & Cleaning', '72.PNG', '2021-01-02 18:49:59', '2021-01-02 18:49:59'),
(17, 'Office & Stationary', '86.PNG', '2021-01-02 18:50:25', '2021-01-02 18:50:25'),
(18, 'Medinice', '22.PNG', '2021-01-02 18:50:40', '2021-01-02 20:06:47');

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

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `regular_price`, `offer_price`, `image`, `created_at`, `updated_at`) VALUES
(5, 10, '6 Blade USB Rechargeable Portable Mini Juicer-Blue', '6 Blade USB Rechargeable Portable Mini Juicer-Blue', 50, NULL, '45.jpg', '2021-01-02 18:53:09', '2021-01-02 18:53:09'),
(6, 10, 'KAKA 40L Travel Sports Men Backpack – Black', 'KAKA 40L Travel Sports Men Backpack – Black', 3500, NULL, '0.jpg', '2021-01-02 18:53:43', '2021-01-02 18:53:43'),
(7, 10, 'Toothbrush Toothpaste Automatic Dispenser Organizer-White', 'Toothbrush Toothpaste Automatic Dispenser Organizer-White', 400, NULL, '7.jpg', '2021-01-02 18:55:46', '2021-01-02 18:55:46'),
(8, 11, 'Tresemme Shampoo Hair Fall Defense (Clutch Bag Free) 580ml', 'Tresemme Shampoo Hair Fall Defense (Clutch Bag Free) 580ml', 630, NULL, '66.jpg', '2021-01-02 18:56:43', '2021-01-02 18:56:43'),
(9, 11, 'Sunsilk Shampoo Hijab Anti Dandruff (1GB Data Free) 375ml', 'Sunsilk Shampoo Hijab Anti Dandruff (1GB Data Free) 375ml', 335, NULL, '79.jpg', '2021-01-02 18:57:05', '2021-01-02 18:57:05'),
(10, 11, 'Sunsilk Shampoo Lusciously Thick & Long (Makeup Bag Free) 650ml', 'Sunsilk Shampoo Lusciously Thick & Long (Makeup Bag Free) 650ml', 550, NULL, '68.jpg', '2021-01-02 18:57:27', '2021-01-02 18:57:27'),
(11, 12, 'Rupchanda Soyabean Oil 5ltr', 'Rupchanda Soyabean Oil 5ltr', 525, NULL, '91.jpg', '2021-01-02 18:59:11', '2021-01-02 18:59:11'),
(12, 12, 'Chashi Aromatic Chinigura Rice 1kg', 'Chashi Aromatic Chinigura Rice 1kg', 125, NULL, '29.jpg', '2021-01-02 18:59:31', '2021-01-02 18:59:31'),
(13, 12, 'Nazirshail Rice Standard (Palki)25 kg', 'Nazirshail Rice Standard (Palki)25 kg', 1470, NULL, '94.jpg', '2021-01-02 18:59:51', '2021-01-02 18:59:51');

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
