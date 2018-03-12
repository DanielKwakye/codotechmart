-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 12, 2018 at 06:50 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codotechmart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `image`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'couriers/img/upload/ijbbBi7sIVF2wrr2SsDerIc96study-in-usa.jpeg', 'shopwithvim@gmail.com', '$2y$10$xQPcXXq5owTQiX6ZYvUc1OGtO6qOWA2JHmQjPQeSu7hSKbdFu7Lpa', 'janooS8Upv6yTMEjk6PwhQ87w2JnJAHjou5Go0VbKUqr2wRZPQWDcfxxCuR0', '2018-02-17 18:30:17', '2018-02-17 18:30:17');

-- --------------------------------------------------------

--
-- Table structure for table `admin_options`
--

CREATE TABLE `admin_options` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(11) NOT NULL,
  `header` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sidebar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_options`
--

INSERT INTO `admin_options` (`id`, `admin_id`, `header`, `sidebar`, `created_at`, `updated_at`) VALUES
(1, 1, 'bg-gradient-9', NULL, '2018-02-17 18:30:17', '2018-02-17 18:30:17');

-- --------------------------------------------------------

--
-- Table structure for table `admin_password_resets`
--

CREATE TABLE `admin_password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `image` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `latitude` varchar(30) DEFAULT NULL,
  `longitude` varchar(30) DEFAULT NULL,
  `landmark` varchar(255) DEFAULT NULL,
  `type` varchar(5) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `shop_id`, `name`, `description`, `image`, `active`, `latitude`, `longitude`, `landmark`, `type`, `created_at`, `updated_at`) VALUES
(3, 709034, 'My Store', '', '', 1, '5.621714', '-0.1736879999999701', '', 'main', '2018-02-17 20:13:31', '2018-02-17 20:13:31'),
(4, 709041, 'My Store', '', '', 1, '5.673127299999999', '-0.16638510000007045', '', 'main', '2018-02-17 20:31:37', '2018-02-17 20:31:37'),
(5, 709040, 'Zigzag', '', '', 1, '5.6103684', '-0.1824987999999621', '', 'main', '2018-02-17 21:14:21', '2018-02-17 21:14:21'),
(6, 709042, 'My Store', '', '', 1, '5.673127299999999', '-0.16638510000007045', '', 'main', '2018-03-10 21:42:16', '2018-03-10 21:42:16'),
(7, 709043, 'Major Clothing', '', '', 1, '5.548897099999999', '-0.20190219999994952', '', 'main', '2018-03-10 21:56:43', '2018-03-10 21:56:43');

-- --------------------------------------------------------

--
-- Table structure for table `branch_product`
--

CREATE TABLE `branch_product` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch_product`
--

INSERT INTO `branch_product` (`id`, `product_id`, `branch_id`) VALUES
(1, 69, 6);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` double(10,2) DEFAULT NULL,
  `download_link` varchar(255) DEFAULT NULL COMMENT 'This is the link for downloading virtual items',
  `no_of_downloads` int(11) DEFAULT NULL COMMENT 'restrict a user to a particular number of downloads',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `order_id`, `product_id`, `qty`, `price`, `download_link`, `no_of_downloads`, `created_at`, `updated_at`) VALUES
(6, 5, 67, 1, 1500.00, NULL, NULL, '2018-03-11 09:43:10', '2018-03-11 09:43:10'),
(7, 5, 65, 2, 200.00, NULL, NULL, '2018-03-11 09:43:10', '2018-03-11 09:43:10');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shop_id` int(15) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `parent_id`, `description`, `image`, `shop_id`, `created_at`, `updated_at`) VALUES
(10, 'Black friday', NULL, 0, 'description here', 'http://197.255.125.79/ugmobile/assets/img/icon.png', NULL, '2018-01-12 13:02:44', '2018-01-12 13:02:44'),
(11, 'Black friday2', NULL, 10, 'another one', 'http://197.255.125.79/ugmobile/assets/img/icon.png', NULL, '2018-01-12 13:03:01', '2018-01-12 13:03:01');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `couriers`
--

CREATE TABLE `couriers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verified_at` datetime DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `couriers`
--

INSERT INTO `couriers` (`id`, `name`, `email`, `image`, `password`, `verified_at`, `active`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(4, 'courier2', 'shopwithvim@gmail.com', 'couriers/img/upload/ijbbBi7sIVF2wrr2SsDerIc96study-in-usa.jpeg', '$2y$10$4ChMcoLaNc9tnk/HGhB3Hut3oTqNfDpqp7SAbbCqb1EmVMX/Y6jHi', NULL, 1, '6bgMCauCkBVnnsQrWNAmC1oTzmf7jKxE4kmdZkw3F8qm3exBje85bNIbDGdl', NULL, '2018-02-17 23:03:44', '2018-03-11 02:13:09'),
(5, 'Erranda', 'kryptn88@yahoo.com', 'couriers/img/upload/3orllgEWfdq4dXdCxEjx4RGl6w-brand.png', '$2y$10$IMdvOeBpw.gckMExTFfYGu17tFViNmUt1aDxGbB3x3b1mHO22DCRC', '2018-03-11 12:19:14', 1, NULL, NULL, '2018-03-11 12:14:38', '2018-03-11 12:44:51');

-- --------------------------------------------------------

--
-- Table structure for table `courier_day`
--

CREATE TABLE `courier_day` (
  `id` int(10) UNSIGNED NOT NULL,
  `courier_id` int(11) NOT NULL,
  `day_id` int(11) NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courier_day`
--

INSERT INTO `courier_day` (`id`, `courier_id`, `day_id`, `time`, `created_at`, `updated_at`) VALUES
(3, 1, 1, '[\"3:00 AM\",\"4:00 AM\"]', NULL, NULL),
(4, 2, 1, '[\"2:00 AM\",\"1:00 AM\"]', '2018-02-17 18:36:44', '2018-02-17 18:36:44'),
(5, 3, 1, NULL, '2018-02-17 22:50:18', '2018-02-17 22:50:18'),
(6, 3, 6, NULL, '2018-02-17 22:50:18', '2018-02-17 22:50:18'),
(7, 4, 1, '[\"1:00 AM\",\"1:00 AM\"]', '2018-02-17 23:03:44', '2018-02-17 23:03:44'),
(8, 4, 6, '[\"1:00 AM\",\"1:00 AM\"]', '2018-02-17 23:03:44', '2018-02-17 23:03:44'),
(9, 5, 1, NULL, '2018-03-11 12:14:38', '2018-03-11 12:14:38'),
(10, 5, 5, NULL, '2018-03-11 12:14:38', '2018-03-11 12:14:38');

-- --------------------------------------------------------

--
-- Table structure for table `courier_monthly_plans`
--

CREATE TABLE `courier_monthly_plans` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courier_monthly_plans`
--

INSERT INTO `courier_monthly_plans` (`id`, `name`, `value`, `amount`, `created_at`, `updated_at`) VALUES
(1, '1 Month', 1, 12, NULL, '2018-02-17 18:35:53'),
(2, '3 Months', 3, NULL, NULL, NULL),
(3, '6 Months', 6, NULL, NULL, NULL),
(4, '9 Months', 9, NULL, NULL, NULL),
(5, '1 Year', 12, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courier_password_resets`
--

CREATE TABLE `courier_password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courier_payments`
--

CREATE TABLE `courier_payments` (
  `id` int(11) NOT NULL,
  `paid_on` datetime NOT NULL,
  `expired_at` datetime NOT NULL,
  `courier_id` int(11) NOT NULL,
  `amount` double DEFAULT NULL,
  `months` tinyint(4) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courier_payments`
--

INSERT INTO `courier_payments` (`id`, `paid_on`, `expired_at`, `courier_id`, `amount`, `months`, `type`, `created_at`, `updated_at`) VALUES
(2, '2018-02-17 23:03:44', '2018-04-10 23:39:00', 4, 0, 1, NULL, '2018-02-17 23:03:44', '2018-02-17 23:55:56'),
(3, '2018-03-11 12:14:38', '2018-05-11 12:14:38', 5, 0, 2, NULL, '2018-03-11 12:14:38', '2018-03-11 12:14:38');

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Monday', NULL, NULL),
(2, 'Tuesday', NULL, NULL),
(3, 'Wednesday', NULL, NULL),
(4, 'Thursday', NULL, NULL),
(5, 'Friday', NULL, NULL),
(6, 'Saturday', NULL, NULL),
(7, 'Sunday', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `emailsettings`
--

CREATE TABLE `emailsettings` (
  `id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `type` tinyint(1) NOT NULL,
  `server` varchar(50) DEFAULT NULL,
  `port` varchar(10) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `encryption` varchar(10) DEFAULT NULL,
  `delivery` text,
  `cancelled` text,
  `order_successful` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emailsettings`
--

INSERT INTO `emailsettings` (`id`, `shop_id`, `type`, `server`, `port`, `username`, `password`, `encryption`, `delivery`, `cancelled`, `order_successful`, `created_at`, `updated_at`) VALUES
(1, 709031, 1, 'mail.server.com', '443', 'user@mail.com', 'password', 'TLS', '{\"subject\":\"cdcd\",\"message\":\"cd\"}', '{\"subject\":\"cd\",\"message\":\"cd\"}', '{\"subject\":\"1cd\",\"message\":\"cd\"}', '2018-02-04 00:02:41', '2018-02-04 04:02:57');

-- --------------------------------------------------------

--
-- Table structure for table `hubteldetails`
--

CREATE TABLE `hubteldetails` (
  `id` int(11) NOT NULL,
  `shop_id` int(11) DEFAULT NULL,
  `client_id` varchar(60) DEFAULT NULL,
  `client_secret` varchar(60) DEFAULT NULL,
  `merchant_key` varchar(60) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mazumadetails`
--

CREATE TABLE `mazumadetails` (
  `id` int(11) NOT NULL,
  `shop_id` int(11) DEFAULT NULL,
  `api_key` varchar(60) DEFAULT NULL,
  `recipient_number` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(3, '2018_01_19_232525_create_shop_requests_table', 1),
(4, '2018_01_21_232134_create_orders_table', 1),
(5, '2018_01_24_003800_create_options_table', 1),
(6, '2018_01_24_194916_create_days_table', 1),
(7, '2018_01_24_195141_create_day_users_table', 1),
(8, '2018_01_27_000459_create_shop_table', 1),
(9, '2018_01_27_005210_create_admins_table', 1),
(10, '2018_01_27_005211_create_admin_password_resets_table', 1),
(11, '2018_01_27_005241_create_couriers_table', 1),
(12, '2018_01_27_005242_create_courier_password_resets_table', 1),
(13, '2018_01_27_014331_create_shopadmins_table', 1),
(14, '2018_01_27_014332_create_shopadmin_password_resets_table', 1),
(15, '2018_01_27_021440_create_wishlists_table', 1),
(16, '2018_01_28_173239_add_shop_id', 1),
(17, '2018_02_02_235103_create_admin_options_table', 1),
(18, '2018_02_03_190423_create_shop_categories_table', 1),
(19, '2018_02_03_202029_add_votes_to_users_table', 1),
(20, '2018_02_03_222021_add_shopid_to__shop_category_table', 1),
(21, '2018_02_04_023615_add_deleted_at_to__shop_table', 1),
(22, '2018_02_04_031445_create_courier_monthly_plans_table', 1),
(23, '2018_02_04_031506_create_shop_monthly_plans_table', 1),
(24, '2018_02_04_042906_add_value_at_to__courier_monthly_plan_table', 1),
(25, '2018_02_04_042929_add_value_at_to__shop_monthly_plan_table', 1),
(26, '2018_02_04_043824_add_deleted_at_to__courier_table', 1),
(27, '2018_02_10_030631_create_complaints_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(10) UNSIGNED NOT NULL,
  `courier_id` int(11) NOT NULL,
  `header` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sidebar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `courier_id`, `header`, `sidebar`, `created_at`, `updated_at`) VALUES
(1, 1, 'bg-gradient-7 font-inverse', 'bg-gradient-7 font-inverse', '2018-02-15 00:20:33', '2018-02-15 00:27:13'),
(2, 2, 'bg-gradient-9', NULL, '2018-02-17 18:36:44', '2018-02-17 18:36:44'),
(3, 3, 'bg-gradient-9', NULL, '2018-02-17 22:50:18', '2018-02-17 22:50:18'),
(4, 4, 'bg-gradient-9', NULL, '2018-02-17 23:03:44', '2018-02-17 23:03:44'),
(5, 5, 'bg-gradient-9', NULL, '2018-03-11 12:14:38', '2018-03-11 12:14:38');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_number` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `full_address` varchar(150) NOT NULL,
  `reciever_phone` varchar(50) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `delivery_option` tinyint(1) NOT NULL DEFAULT '1',
  `delivery_fee` double(6,2) DEFAULT NULL,
  `delivery_to` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `payment` varchar(100) DEFAULT NULL,
  `payment_option` tinyint(1) NOT NULL,
  `amount` decimal(9,2) NOT NULL,
  `transaction_id` int(11) DEFAULT NULL,
  `courier_id` int(11) DEFAULT NULL,
  `courier_status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_number`, `user_id`, `branch_id`, `full_address`, `reciever_phone`, `notes`, `delivery_option`, `delivery_fee`, `delivery_to`, `latitude`, `longitude`, `status`, `payment`, `payment_option`, `amount`, `transaction_id`, `courier_id`, `courier_status`, `created_at`, `updated_at`) VALUES
(5, '1000002', 5, 6, 'Teksol, Accra, Ghana', '0541243508', 'I need it as soon as possible', 1, NULL, 'Teksol, Accra, Ghana', '5.628332700000001', '-0.17278139999996256', 0, NULL, 0, '1700.00', NULL, NULL, NULL, '2018-03-11 09:43:10', '2018-03-11 09:43:10');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paymentmethod`
--

CREATE TABLE `paymentmethod` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(60) NOT NULL,
  `params` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paymentmethod`
--

INSERT INTO `paymentmethod` (`id`, `name`, `description`, `image`, `params`, `url`) VALUES
(1, 'Hubtel', 'Accept payments from all mobile money wallets and bank cards in your store, online or on-the-go.', 'hubtel.jpg', 'client_id,client_secret,merchant_number', NULL),
(2, 'Slydepay', 'Your customers can pay you from their mobile app anywhere in your store. You do not need to set up a complex integration, we’ll provide a POS. Your customers only have to scan or enter a code to pay.', 'slydepay.png', 'merchant_email,merchant_key', NULL),
(3, 'Mazuma', '', 'mazuma.png', 'apikey,network_number', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `condition` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `size` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity` mediumint(9) NOT NULL,
  `brand` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `barcode` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `availability` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `visibility` tinyint(1) NOT NULL DEFAULT '1',
  `mainimage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` decimal(10,0) NOT NULL,
  `minimum` mediumint(9) DEFAULT NULL,
  `old_price` decimal(10,0) DEFAULT NULL,
  `discount` int(11) DEFAULT '0',
  `promoted` tinyint(1) DEFAULT NULL,
  `promotion_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `type`, `condition`, `size`, `quantity`, `brand`, `barcode`, `category_id`, `description`, `availability`, `visibility`, `mainimage`, `price`, `minimum`, `old_price`, `discount`, `promoted`, `promotion_id`, `created_at`, `updated_at`) VALUES
(69, 'Computer', 'simple', 'new', NULL, 23, NULL, NULL, 10, 'one on one', NULL, 1, '', '100', NULL, NULL, 0, NULL, NULL, '2018-03-11 13:23:04', '2018-03-11 13:23:04');

-- --------------------------------------------------------

--
-- Table structure for table `product_attributes`
--

CREATE TABLE `product_attributes` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text,
  `type` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_attributes`
--

INSERT INTO `product_attributes` (`id`, `name`, `description`, `type`, `created_at`, `updated_at`) VALUES
(6, 'Size', NULL, 'attribute', '2018-01-21 09:07:27', '2018-01-21 09:07:27');

-- --------------------------------------------------------

--
-- Table structure for table `product_attributes_values`
--

CREATE TABLE `product_attributes_values` (
  `id` int(11) NOT NULL,
  `attribute_id` int(11) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_attributes_values`
--

INSERT INTO `product_attributes_values` (`id`, `attribute_id`, `value`) VALUES
(5, 6, 'Medium'),
(7, 6, 'Large');

-- --------------------------------------------------------

--
-- Table structure for table `product_brand`
--

CREATE TABLE `product_brand` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_tag`
--

CREATE TABLE `product_tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_tag`
--

INSERT INTO `product_tag` (`id`, `product_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(170, 62, 2, NULL, NULL),
(171, 63, 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `referrals`
--

CREATE TABLE `referrals` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `number_of_people` int(11) NOT NULL DEFAULT '0',
  `amount_earned` double(10,2) NOT NULL DEFAULT '0.00',
  `paid` int(11) NOT NULL DEFAULT '0' COMMENT 'paid= 0 means user has not requested, 1 is user has requested and 2 is user is paid ',
  `date_requested` datetime DEFAULT NULL,
  `date_paid` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `referrals`
--

INSERT INTO `referrals` (`id`, `user_id`, `number_of_people`, `amount_earned`, `paid`, `date_requested`, `date_paid`, `created_at`, `updated_at`) VALUES
(3, 2, 1, 10.00, 0, NULL, NULL, '2018-03-11 09:13:01', '2018-03-11 09:13:01');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `review` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `product_id`, `user_id`, `review`, `created_at`, `updated_at`) VALUES
(2, 8, 5, 'another quality', '2016-12-21 00:57:34', '2016-12-21 00:57:34'),
(3, 8, 5, 'another one', '2016-12-21 01:03:17', '2016-12-21 01:03:17'),
(4, 18, 13, 'good product', '2017-01-10 15:55:35', '2017-01-10 15:55:35');

-- --------------------------------------------------------

--
-- Table structure for table `shopadmins`
--

CREATE TABLE `shopadmins` (
  `id` int(11) NOT NULL,
  `username` varchar(40) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `remember_token` varchar(60) DEFAULT NULL,
  `shop_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopadmins`
--

INSERT INTO `shopadmins` (`id`, `username`, `email`, `password`, `remember_token`, `shop_id`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'shopwithvim@gmail.com', '$2y$10$IuuKxtgR07twQ3DZ2fwwIejc7xBCrZngYgNhWOLy2hFAEiao.At7G', '6KFZWofjk5EX0A9E44INYhN9WUYPvbF8q7WzDzDSCbPKN9CXvhwGObG0UO7A', 709031, '2018-01-27 02:44:56', '2018-03-11 00:22:12'),
(8, 'mail@mail.com', 'mail@mail.com', '$2y$10$anVWkRYxs7DtpvwMUVa5quy44rR0FGg6oiEwPOUts7lmDfqfCe5bO', NULL, 709039, '2018-02-17 21:09:02', '2018-02-17 21:09:02'),
(9, 'mail@mail.com', 'mail@mail.com', '$2y$10$rGLHqBaXEr3i7QM02DXRouC5AoXG.28jvCGdIRjrG3NNuFaNmAVt6', NULL, 709040, '2018-02-17 21:14:21', '2018-02-17 21:14:21'),
(10, NULL, 'ernestowusu80@gmail.com', '$2y$10$ZHB/Qc7G1iUZRSo35XwQWOBOWomBQXgb3.2LAy939tIo4e5aCzBj6', 'po6uTuRuShU9G7CvdRR5ur8K9hPQivadnmf4dQj5H1oZpti3tfOkvpGzfNBi', 709042, '2018-03-10 21:42:16', '2018-03-11 00:11:43'),
(11, NULL, 'kryptn88@yahoo.com', '$2y$10$SycZ4jTt/fRjT6jx3WXamentddjFaMQ41A9jl09sxGFcVmZDSeOR.', 'hDxxhdaB4ETS1LjBg9HZ5vDb9KPoDS8EVCMdPiiqSo51WeK9meRpLEa7bkdl', 709043, '2018-03-10 21:56:43', '2018-03-10 21:56:43');

-- --------------------------------------------------------

--
-- Table structure for table `shopadmin_password_resets`
--

CREATE TABLE `shopadmin_password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `tag_line` varchar(20) DEFAULT NULL,
  `phone` varchar(20) NOT NULL,
  `type` smallint(11) NOT NULL,
  `latitude` varchar(50) DEFAULT NULL,
  `longitude` varchar(50) DEFAULT NULL,
  `creator_surname` varchar(50) DEFAULT NULL,
  `creator_firstname` varchar(50) DEFAULT NULL,
  `shopcategory_id` int(11) DEFAULT NULL,
  `creator_email` varchar(50) DEFAULT NULL,
  `payment_method` char(2) DEFAULT NULL,
  `active` tinyint(1) NOT NULL,
  `logo` varchar(60) DEFAULT NULL,
  `region` varchar(30) DEFAULT NULL,
  `promoted` tinyint(1) NOT NULL DEFAULT '0',
  `promoted_expires_at` date DEFAULT NULL,
  `documents` varchar(60) DEFAULT NULL,
  `docs_verified` tinyint(1) DEFAULT NULL,
  `terms_and_condition` varchar(255) DEFAULT NULL,
  `pay_online` tinyint(1) DEFAULT '0',
  `pay_on_delivery` tinyint(1) NOT NULL DEFAULT '1',
  `product_limit` int(11) NOT NULL DEFAULT '500',
  `chat_type` varchar(50) DEFAULT NULL,
  `script` text,
  `status` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `name`, `tag_line`, `phone`, `type`, `latitude`, `longitude`, `creator_surname`, `creator_firstname`, `shopcategory_id`, `creator_email`, `payment_method`, `active`, `logo`, `region`, `promoted`, `promoted_expires_at`, `documents`, `docs_verified`, `terms_and_condition`, `pay_online`, `pay_on_delivery`, `product_limit`, `chat_type`, `script`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(709034, 'My Store', 'Shop more here', '(024) 136-1156', 0, '5.673127299999999', '-0.16638510000007045', 'Ernest', 'Appiah', 1, 'shopwithvim.com', 's', 1, NULL, NULL, 0, '0000-00-00', NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, '2018-02-04 04:33:16', '2018-02-28 21:47:30'),
(709040, 'Zigzag', NULL, '(024) 136-1156', 1, '5.6103684', '-0.1824987999999621', 'John', 'Doe', 1, 'mail@mail.com', NULL, 1, NULL, 'Greater Accra', 0, NULL, NULL, NULL, NULL, 0, 1, 500, NULL, NULL, NULL, NULL, '2018-02-17 21:14:21', '2018-02-17 21:14:21'),
(709041, 'My Store', NULL, '(024) 136-1156', 1, '5.673127299999999', '-0.16638510000007045', 'Ernest', 'Doe', 2, 'ernestowusu80@gmail.com', NULL, 1, NULL, 'Greater Accra', 0, NULL, NULL, NULL, NULL, 0, 1, 500, NULL, NULL, NULL, NULL, '2018-03-10 21:38:28', '2018-03-10 21:38:28'),
(709042, 'My Store', NULL, '(024) 136-1156', 1, '5.673127299999999', '-0.16638510000007045', 'Ernest', 'Doe', 3, 'ernestowusu80@gmail.com', NULL, 1, NULL, 'Greater Accra', 0, NULL, NULL, NULL, NULL, 0, 1, 500, NULL, NULL, NULL, NULL, '2018-03-10 21:42:15', '2018-03-10 21:42:15'),
(709043, 'Major Clothing', NULL, '(054) 124-3508', 1, '5.548897099999999', '-0.20190219999994952', 'Acquah', 'Felix', 3, 'kryptn88@yahoo.com', NULL, 1, NULL, 'Greater Accra', 0, NULL, NULL, NULL, NULL, 0, 1, 500, NULL, NULL, NULL, NULL, '2018-03-10 21:56:43', '2018-03-10 21:56:43');

-- --------------------------------------------------------

--
-- Table structure for table `shop_categories`
--

CREATE TABLE `shop_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_categories`
--

INSERT INTO `shop_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Automobiles', '2018-02-17 18:46:58', '2018-02-17 18:46:58'),
(2, 'Computers and Accesories', '2018-02-17 18:46:58', '2018-02-17 18:46:58'),
(3, 'Restaurant', '2018-03-10 19:15:09', '2018-03-10 19:15:09'),
(4, 'Clothing', '2018-03-11 01:24:56', '2018-03-11 01:24:56');

-- --------------------------------------------------------

--
-- Table structure for table `shop_monthly_plans`
--

CREATE TABLE `shop_monthly_plans` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shop_monthly_plans`
--

INSERT INTO `shop_monthly_plans` (`id`, `name`, `value`, `amount`, `created_at`, `updated_at`) VALUES
(1, '1 Month', 1, 12, NULL, '2018-02-17 18:34:21'),
(2, '2 Months', 3, 23, NULL, '2018-02-17 18:34:27'),
(3, '3 Months', 6, NULL, NULL, NULL),
(4, '9 Months', 9, NULL, NULL, NULL),
(5, '1 Year', 12, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shop_paymets`
--

CREATE TABLE `shop_paymets` (
  `id` int(11) NOT NULL,
  `paid_on` date NOT NULL,
  `expired_at` date NOT NULL,
  `shop_id` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `months` tinyint(4) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shop_requests`
--

CREATE TABLE `shop_requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `courier_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shop_requests`
--

INSERT INTO `shop_requests` (`id`, `courier_id`, `shop_id`, `status`, `created_at`, `updated_at`) VALUES
(5, 4, 709040, 1, '2018-03-11 02:13:16', '2018-03-11 02:13:16');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT '#',
  `position` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `heading`, `description`, `url`, `position`, `created_at`, `updated_at`) VALUES
(6, '6LMiDMUFriadMIpNdiRGFlEt0icon.jpg', 'Main heading1', 'Here is the best1', 'http://google.com1', 'center', NULL, NULL),
(7, 'rLaiSjYvN2n8GCUXt7oFaC10gbanner1.png', '', '', '', 'top', NULL, NULL),
(8, 'neaG2IRkDKvtFMxXmWfK16ihrbanner2.png', '', '', '', 'top', NULL, NULL),
(9, 'dOojAlUrjkCIMSEO2k9R5iSy6slide01.png', '', '', '', 'slider', NULL, NULL),
(10, 'GHgMBUMNLUUYgBmRTE8hoi798slide02.png', '', '', '', 'slider', NULL, NULL),
(11, 'TLxY8BVHkwbSrud5l9QrCIrxuslide03.png', '', '', '', 'slider', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slydepaydetails`
--

CREATE TABLE `slydepaydetails` (
  `id` int(11) NOT NULL,
  `shop_id` int(11) DEFAULT NULL,
  `merchant_email` varchar(60) DEFAULT NULL,
  `merchant_key` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slydepaydetails`
--

INSERT INTO `slydepaydetails` (`id`, `shop_id`, `merchant_email`, `merchant_key`, `created_at`, `updated_at`) VALUES
(1, 709031, 'werwerw', 'asdaadd', '2018-02-28 21:47:30', '2018-02-28 21:47:30');

-- --------------------------------------------------------

--
-- Table structure for table `smssettings`
--

CREATE TABLE `smssettings` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `quantity_left` int(11) NOT NULL,
  `delivery` text,
  `order_successful` text,
  `cancelled` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referred_by` int(11) DEFAULT NULL,
  `referrer_paid` tinyint(4) DEFAULT NULL COMMENT 'determines if the person who referred this user is paid',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `password`, `remember_token`, `referral_link`, `referred_by`, `referrer_paid`, `created_at`, `updated_at`) VALUES
(2, 'Danny Kay', 'shopwithvim@gmail.com', NULL, NULL, '$2y$10$MaGk46kkwjRnRHe8QMq0luGgwS3gpEdGayF054vdQg43jNuYWhZAe', 'rOpTYog1xC8uvk6eY3TfG5KKToN2LEXI4KnDPtHtUCzqVV8BNJq6Qu1cl8ze', 'bWFpbEBtYWlsLmNvbQ--', NULL, NULL, '2018-02-18 02:25:44', '2018-03-11 06:09:42'),
(3, 'Tuga', 'tuga@mail.com', NULL, NULL, '$2y$10$Mgw8q1yUeOzLjl6T/9tCpOlAhXgrjjClUx5mM3cz8Fdyu8AdRJIIG', NULL, 'dHVnYUBtYWlsLmNvbQ--', 2, NULL, '2018-02-18 02:31:25', '2018-02-18 02:31:25'),
(5, 'Referred User', 'mail@mail.com', '0541243508', 'Teksol, Accra, Ghana', '$2y$10$tL9OkOGhGwE8WMipkvxgcOPbginU9uQC9Zc7Z24xElYbP9xhQzUOq', NULL, 'bWFpbEBtYWlsLmNvbQ--', 2, 1, '2018-03-11 09:00:23', '2018-03-11 09:43:10');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 2, 66, '2018-03-10 21:11:19', '2018-03-10 21:11:19');

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
-- Indexes for table `admin_options`
--
ALTER TABLE `admin_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_password_resets`
--
ALTER TABLE `admin_password_resets`
  ADD KEY `admin_password_resets_email_index` (`email`),
  ADD KEY `admin_password_resets_token_index` (`token`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch_product`
--
ALTER TABLE `branch_product`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `couriers`
--
ALTER TABLE `couriers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `couriers_email_unique` (`email`);

--
-- Indexes for table `courier_day`
--
ALTER TABLE `courier_day`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courier_monthly_plans`
--
ALTER TABLE `courier_monthly_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courier_password_resets`
--
ALTER TABLE `courier_password_resets`
  ADD KEY `courier_password_resets_email_index` (`email`),
  ADD KEY `courier_password_resets_token_index` (`token`);

--
-- Indexes for table `courier_payments`
--
ALTER TABLE `courier_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emailsettings`
--
ALTER TABLE `emailsettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hubteldetails`
--
ALTER TABLE `hubteldetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mazumadetails`
--
ALTER TABLE `mazumadetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `paymentmethod`
--
ALTER TABLE `paymentmethod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_attributes_values`
--
ALTER TABLE `product_attributes_values`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_brand`
--
ALTER TABLE `product_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_tag`
--
ALTER TABLE `product_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referrals`
--
ALTER TABLE `referrals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopadmins`
--
ALTER TABLE `shopadmins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopadmin_password_resets`
--
ALTER TABLE `shopadmin_password_resets`
  ADD KEY `shopadmin_password_resets_email_index` (`email`),
  ADD KEY `shopadmin_password_resets_token_index` (`token`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_categories`
--
ALTER TABLE `shop_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_monthly_plans`
--
ALTER TABLE `shop_monthly_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_paymets`
--
ALTER TABLE `shop_paymets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_requests`
--
ALTER TABLE `shop_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slydepaydetails`
--
ALTER TABLE `slydepaydetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smssettings`
--
ALTER TABLE `smssettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_options`
--
ALTER TABLE `admin_options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `branch_product`
--
ALTER TABLE `branch_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `couriers`
--
ALTER TABLE `couriers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courier_day`
--
ALTER TABLE `courier_day`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `courier_monthly_plans`
--
ALTER TABLE `courier_monthly_plans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courier_payments`
--
ALTER TABLE `courier_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `emailsettings`
--
ALTER TABLE `emailsettings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hubteldetails`
--
ALTER TABLE `hubteldetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mazumadetails`
--
ALTER TABLE `mazumadetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `paymentmethod`
--
ALTER TABLE `paymentmethod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `product_attributes`
--
ALTER TABLE `product_attributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_attributes_values`
--
ALTER TABLE `product_attributes_values`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_brand`
--
ALTER TABLE `product_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_tag`
--
ALTER TABLE `product_tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `referrals`
--
ALTER TABLE `referrals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shopadmins`
--
ALTER TABLE `shopadmins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=709044;

--
-- AUTO_INCREMENT for table `shop_categories`
--
ALTER TABLE `shop_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shop_monthly_plans`
--
ALTER TABLE `shop_monthly_plans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shop_paymets`
--
ALTER TABLE `shop_paymets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shop_requests`
--
ALTER TABLE `shop_requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `slydepaydetails`
--
ALTER TABLE `slydepaydetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `smssettings`
--
ALTER TABLE `smssettings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
