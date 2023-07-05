-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 05, 2023 at 08:10 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'senan@mail.ru', '$2y$10$5TR8hcf2Mb3THgevREapu.VV8.sWDJm9xdWEa.ToD.eJbgygWbHc.');

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'color', '2023-05-25 07:34:50', '2023-05-25 07:34:50'),
(2, 'size', '2023-05-25 07:35:02', '2023-05-25 07:35:02'),
(3, 'marka', '2023-05-25 07:35:11', '2023-06-05 08:41:19');

-- --------------------------------------------------------

--
-- Table structure for table `attribute_category`
--

CREATE TABLE `attribute_category` (
  `id` bigint UNSIGNED NOT NULL,
  `attribute_id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attribute_category`
--

INSERT INTO `attribute_category` (`id`, `attribute_id`, `category_id`) VALUES
(12, 1, 4),
(13, 2, 4),
(14, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `attribute_values`
--

CREATE TABLE `attribute_values` (
  `id` bigint UNSIGNED NOT NULL,
  `attribute_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attribute_values`
--

INSERT INTO `attribute_values` (`id`, `attribute_id`, `title`, `value`, `created_at`, `updated_at`) VALUES
(1, 2, 'XL', 'XL', '2023-05-29 11:55:44', '2023-06-05 08:37:57'),
(3, 1, 'green', 'green', '2023-05-29 11:58:22', '2023-05-29 11:58:22'),
(4, 3, 'LC WAIKIKI', 'LC', '2023-05-29 12:07:32', '2023-06-05 08:39:46'),
(6, 2, 'XXL', 'XXL', '2023-06-05 08:38:20', '2023-06-05 08:38:20'),
(7, 2, 'L1', 'L1', '2023-06-05 08:38:37', '2023-06-05 08:38:37'),
(8, 2, 'M1', 'M1', '2023-06-05 08:38:48', '2023-06-05 08:38:48'),
(9, 3, 'NEW YORKER', 'NY', '2023-06-05 08:40:15', '2023-06-05 08:40:15'),
(10, 3, 'KOTON', 'KT', '2023-06-05 08:40:29', '2023-06-05 08:40:29'),
(11, 3, 'MAVI', 'MV', '2023-06-05 08:40:41', '2023-06-05 08:40:41'),
(12, 3, 'DE FACTO', 'DF', '2023-06-05 08:40:57', '2023-06-05 08:40:57'),
(13, 1, 'Blue', 'blue', '2023-06-12 04:31:16', '2023-06-12 04:31:16'),
(14, 1, 'White', 'white', '2023-06-12 04:31:32', '2023-06-12 04:31:32'),
(15, 1, 'Black', 'black', '2023-06-12 04:31:46', '2023-06-12 04:31:46');

-- --------------------------------------------------------

--
-- Table structure for table `attribute_value_product`
--

CREATE TABLE `attribute_value_product` (
  `id` bigint UNSIGNED NOT NULL,
  `attribute_value_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attribute_value_product`
--

INSERT INTO `attribute_value_product` (`id`, `attribute_value_id`, `product_id`) VALUES
(1, 13, 4),
(2, 14, 4),
(3, 6, 4),
(4, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `text`, `image`, `created_at`, `updated_at`) VALUES
(43, 'The Best Street Style From London Fashion Week', 'Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat', '5c8684ef-7bd0-486d-b5b5-c8bbbbcdce52.jpg', '2023-06-13 08:40:10', '2023-06-20 13:15:34'),
(44, 'Vogue\'s Ultimate Guide To Autumn/Winter 2019 Shoes', 'Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat', 'd9da4e42-2f83-4c55-827b-a613b3df2a60.jpg', '2023-06-13 08:49:02', '2023-06-20 13:16:11'),
(45, 'How To Brighten Your Wardrobe With A Dash Of Lime', 'Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat', 'd0421e81-b7a4-4054-839c-bf5619309623.jpg', '2023-06-13 08:49:35', '2023-06-20 13:16:53'),
(47, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishin', 'ec57b702-495c-42a2-ba77-9a6f0c84fa35.jpg', '2023-06-20 13:18:19', '2023-06-20 13:18:19'),
(48, 'LIt was popularisedsages, and more recently with desktop publishin', 'Mmaking it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text', 'cd5bfd0d-3fd2-4bad-95f6-dd06836a6fd7.jpg', '2023-06-20 13:19:23', '2023-06-20 13:19:57');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `parent_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `image`, `active`, `parent_id`, `created_at`, `updated_at`) VALUES
(4, 'categories/94f9d4ed-4bf6-41b9-bd64-490ad3214079.jpg', 1, NULL, '2023-05-18 11:42:47', '2023-06-05 08:35:21'),
(5, 'categories/4d8f5d81-4514-46d5-8b84-f4cfac8318a5.jpg', 0, NULL, '2023-05-22 07:31:00', '2023-06-05 08:36:26'),
(6, 'categories/2171b9b6-e5f0-416b-a7b9-658e99ba000f.jpg', 0, NULL, '2023-05-28 03:50:07', '2023-06-05 08:37:08');

-- --------------------------------------------------------

--
-- Table structure for table `category_translations`
--

CREATE TABLE `category_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_translations`
--

INSERT INTO `category_translations` (`id`, `category_id`, `title`, `slug`, `locale`) VALUES
(7, 4, 'Men\'s', 'mens', 'az'),
(8, 4, 'Men\'s', 'mens', 'en'),
(9, 4, 'Men\'s', 'mens', 'ru'),
(10, 5, 'Women\'s', 'womens', 'az'),
(11, 5, 'Women\'s', 'womens', 'en'),
(12, 5, 'Women\'s', 'womens', 'ru'),
(13, 6, 'Kid\'s', 'kids', 'az'),
(14, 6, 'Kid\'s', 'kids', 'en'),
(15, 6, 'Kid\'s', 'kids', 'ru');

-- --------------------------------------------------------

--
-- Table structure for table `main_hero`
--

CREATE TABLE `main_hero` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_hero`
--

INSERT INTO `main_hero` (`id`, `title`, `text`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Black Friday', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots', 'e955381a-d511-4329-aa37-e74a84476395.jpg', '2023-06-14 05:26:18', '2023-06-20 13:14:09');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `title`, `url`, `created_at`, `updated_at`) VALUES
(3, 'Home', 'http://127.0.0.1:8000/', '2023-06-14 06:37:17', '2023-06-14 06:37:17'),
(4, 'Shop', 'http://127.0.0.1:8000/shop', '2023-06-14 06:37:43', '2023-06-14 06:58:22'),
(5, 'Blog', 'http://127.0.0.1:8000/blog', '2023-06-14 06:37:59', '2023-06-14 06:37:59'),
(6, 'Contact', 'http://127.0.0.1:8000/contact', '2023-06-14 06:57:58', '2023-06-14 06:58:42'),
(7, 'Card', 'http://127.0.0.1:8000/basket', '2023-06-20 06:28:57', '2023-06-20 06:29:23');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_05_16_105259_create_admin_table', 1),
(3, '2023_05_16_140401_create_translations_table', 2),
(5, '2023_05_17_143550_create_categories_table', 3),
(6, '2023_05_17_150358_create_category_translations_table', 3),
(8, '2023_05_22_171526_create_products_table', 4),
(9, '2023_05_22_201534_create_product_images_table', 5),
(10, '2023_05_24_154125_create_attributes_table', 6),
(11, '2023_05_25_125928_create_attribute_category_table', 7),
(13, '2023_05_29_145127_create_attribute_value_table', 8),
(15, '2023_05_31_110944_create_attribute_value_product_table', 9),
(16, '2023_06_13_090150_create_blog_table', 10),
(17, '2023_06_13_141728_create_main_hero_table', 11),
(18, '2023_06_14_100709_create_menu_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
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
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `qty` int NOT NULL DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `qty`, `image`, `price`, `created_at`, `updated_at`) VALUES
(4, 4, 33, 'products/81035350-32ad-4346-b407-276e51a55d99.jpg', 140.00, '2023-05-31 09:14:07', '2023-06-20 12:25:20'),
(5, 4, 5, 'products/42aeadf3-00c0-4297-97fa-ca401da632ce.jpg', 70.00, '2023-05-31 09:32:26', '2023-06-20 12:57:26'),
(6, 4, 4, 'products/e7ff1a29-6228-41c3-bb32-95eb2fcb597a.jpg', 55.00, '2023-06-07 07:23:46', '2023-06-20 12:58:28'),
(8, 5, 4, 'products/37f92c94-5439-40c1-b5c8-0f4a44b1db55.jpg', 230.00, '2023-06-07 12:17:07', '2023-06-20 12:33:21'),
(9, 4, 4, 'products/c8734828-c1ce-4f49-b4f5-57f7b8cc07e5.jpg', 233.00, '2023-06-12 02:57:41', '2023-06-20 12:56:11'),
(10, 4, 3, 'products/4a81e179-90b4-49d4-ae84-0a839394f2c3.jpg', 45.00, '2023-06-20 12:53:31', '2023-06-20 12:53:31'),
(11, 5, 4, 'products/611db77e-d801-406d-9ca1-89e7397f25f7.jpg', 29.00, '2023-06-20 13:00:14', '2023-06-20 13:00:14'),
(12, 5, 4, 'products/b7279cbd-2158-4d72-9ee2-0fbfbce758f8.jpg', 340.00, '2023-06-20 13:05:52', '2023-06-20 13:05:52'),
(13, 5, 2, 'products/0e32cc31-dad9-467d-9052-2d2ed8fce73c.jpg', 110.00, '2023-06-20 13:07:30', '2023-06-20 13:07:30');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `sort_order`, `created_at`, `updated_at`) VALUES
(7, 4, 'product_images/f73aa800-b290-4343-b2d6-641ffd697ec1.jpg', 0, '2023-06-07 13:23:46', '2023-06-07 13:24:08'),
(8, 4, 'product_images/52183341-72d0-4171-b6db-c981d7fbee7a.jpg', 1, '2023-06-07 13:23:58', '2023-06-07 13:24:08');

-- --------------------------------------------------------

--
-- Table structure for table `product_translations`
--

CREATE TABLE `product_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specs` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_translations`
--

INSERT INTO `product_translations` (`id`, `product_id`, `title`, `slug`, `description`, `specs`, `locale`) VALUES
(10, 4, 'Erkek ceket', 'djfknvdj', 'but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release', 'ekjrnf jenr', 'az'),
(11, 4, 'Erkek ceket', 'dnb43i', 'but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release', 'neifr kejrnf', 'en'),
(12, 4, 'Erkek ceket', 'if3if', 'but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release', 'ekjr kej fkjer', 'ru'),
(13, 5, 'Hırka', 'sd-ksje-d-sej', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over', 'sflen', 'az'),
(14, 5, 'Hırka', 'fksjen-skjen-skejfn', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over', 'fnksje feksj', 'en'),
(15, 5, 'Hırka', 'sje-skejn-skjen', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over', 'sjenf', 'ru'),
(16, 6, 'Hırka(gri)', 'lorem', 'It is a long established fact that a reader will be distracted by the readable', 'loremlorem', 'az'),
(17, 6, 'Hırka(gri)', 'lorem', 'It is a long established fact that a reader will be distracted by the readable', 'loremlorem', 'en'),
(18, 6, 'Hırka(gri)', 'lorem', 'It is a long established fact that a reader will be distracted by the readable', 'loremloremlorem', 'ru'),
(22, 8, 'Kadın kışlık', 'movzu', 'There are many variations of passages of Lorem Ipsum available, but the m', 'movzu', 'az'),
(23, 8, 'Kadın kışlık', 'movzu', 'There are many variations of passages of Lorem Ipsum available, but the m', 'movzu', 'en'),
(24, 8, 'Kadın kışlık', 'movzu', 'There are many variations of passages of Lorem Ipsum available, but the m', 'movzu', 'ru'),
(25, 9, 'Atkı', 'palto', '\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of', 'Palto', 'az'),
(26, 9, 'Atkı', 'palto', '\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of', 'Palto', 'en'),
(27, 9, 'Atkı', 'palto', '\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of', 'Palto', 'ru'),
(28, 10, 'Sırt çantası', 'sirt-cantasi', 'Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but', 'fsd', 'az'),
(29, 10, 'Sırt çantası', 'sirt-cantasi', 'Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but', 'sfe', 'en'),
(30, 10, 'Sırt çantası', 'sirt-cantasi', 'Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but', 'sf', 'ru'),
(31, 11, 'Çanta(kadın)', 'cantakadin', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et', 'sd', 'az'),
(32, 11, 'Çanta(kadın)', 'cantakadin', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et', 'sdc', 'en'),
(33, 11, 'Çanta(kadın)', 'cantakadin', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et', 'scd', 'ru'),
(34, 12, 'Ayakkabı', 'ayakkabi', 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis', 'as', 'az'),
(35, 12, 'Ayakkabı', 'ayakkabi', 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis', 'asas', 'en'),
(36, 12, 'Ayakkabı', 'ayakkabi', 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis', 'scc', 'ru'),
(37, 13, 'Elbise', 'elbise', 'Section 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC', 'cdsc', 'az'),
(38, 13, 'Elbise', 'elbise', 'Section 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC', 'sdcs', 'en'),
(39, 13, 'Elbise', 'elbise', 'Section 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC', 'sdcs', 'ru');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` bigint UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` json NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(3, 'site_login', '{\"az\": \"daxil ol\", \"en\": \"login\", \"ru\": \"registrasiya\"}', '2023-05-17 07:47:19', '2023-05-17 07:47:19'),
(6, 'welcome', '{\"az\": \"salam\", \"en\": \"weellcommee\", \"ru\": \"dobro pojalovat\"}', '2023-05-17 10:22:34', '2023-05-17 10:22:34'),
(9, 'site_document', '{\"az\": \"dokumentasiya\", \"en\": \"documents\", \"ru\": \"registrasiya\"}', '2023-05-18 11:03:45', '2023-05-18 11:03:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_email_unique` (`email`);

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attribute_category`
--
ALTER TABLE `attribute_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attribute_category_attribute_id_foreign` (`attribute_id`),
  ADD KEY `attribute_category_category_id_foreign` (`category_id`);

--
-- Indexes for table `attribute_values`
--
ALTER TABLE `attribute_values`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attribute_values_attribute_id_foreign` (`attribute_id`);

--
-- Indexes for table `attribute_value_product`
--
ALTER TABLE `attribute_value_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attribute_value_product_attribute_value_id_foreign` (`attribute_value_id`),
  ADD KEY `attribute_value_product_product_id_foreign` (`product_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `category_translations`
--
ALTER TABLE `category_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_translations_category_id_locale_unique` (`category_id`,`locale`),
  ADD KEY `category_translations_locale_index` (`locale`);

--
-- Indexes for table `main_hero`
--
ALTER TABLE `main_hero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_image_product` (`product_id`);

--
-- Indexes for table `product_translations`
--
ALTER TABLE `product_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_translations_product_id_locale_unique` (`product_id`,`locale`),
  ADD KEY `product_translations_locale_index` (`locale`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `attribute_category`
--
ALTER TABLE `attribute_category`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `attribute_values`
--
ALTER TABLE `attribute_values`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `attribute_value_product`
--
ALTER TABLE `attribute_value_product`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category_translations`
--
ALTER TABLE `category_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `main_hero`
--
ALTER TABLE `main_hero`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_translations`
--
ALTER TABLE `product_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attribute_category`
--
ALTER TABLE `attribute_category`
  ADD CONSTRAINT `attribute_category_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `attribute_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `attribute_values`
--
ALTER TABLE `attribute_values`
  ADD CONSTRAINT `attribute_values_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `attribute_value_product`
--
ALTER TABLE `attribute_value_product`
  ADD CONSTRAINT `attribute_value_product_attribute_value_id_foreign` FOREIGN KEY (`attribute_value_id`) REFERENCES `attribute_values` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `attribute_value_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `category_translations`
--
ALTER TABLE `category_translations`
  ADD CONSTRAINT `category_translations_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_image_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Constraints for table `product_translations`
--
ALTER TABLE `product_translations`
  ADD CONSTRAINT `product_translations_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
