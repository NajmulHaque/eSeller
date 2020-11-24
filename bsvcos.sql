-- phpMyAdmin SQL Dump
-- version 4.9.7deb1bionic1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 24, 2020 at 05:20 PM
-- Server version: 8.0.22-0ubuntu0.20.04.2
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bsvcos`
--

-- --------------------------------------------------------

--
-- Table structure for table `acquisition_manager`
--

CREATE TABLE `acquisition_manager` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `position` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `adress` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int NOT NULL,
  `brand_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `business_categories`
--

CREATE TABLE `business_categories` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business_categories`
--

INSERT INTO `business_categories` (`id`, `name`, `slug`) VALUES
(1, 'Fresh Fruits', 'fruit'),
(2, 'Fresh Vegetables', 'vegetable'),
(3, 'Fruits & vegetables', 'fruitsVegetables'),
(4, 'Beverages', 'beverages'),
(5, 'Fresh Meat', 'meat'),
(6, 'Fresh Fish', 'fish'),
(7, 'Local Snacks', 'snacks'),
(8, 'Fresh Dairy', 'dairy'),
(9, 'Bread & Bakery', 'bakery'),
(10, 'All Cooking', 'cooking'),
(11, 'Home & Cleaning', 'homecleaning'),
(12, 'Home Appliances', 'appliances'),
(13, 'Medical Care', 'medical'),
(14, 'Baby Care', 'baby');

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `card_id` int NOT NULL,
  `price` int NOT NULL,
  `sid` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Fresh Fruits', 'fruits', 'images/product-pictures/Fruits/Apple.jpg', '2020-11-05 06:49:02', '2020-11-05 06:49:02'),
(2, 'Fresh Vegetables', 'vegetables', 'images/product-pictures/Vegetables/Gourd.jpg', '2020-11-05 06:49:02', '2020-11-05 06:49:02'),
(3, 'Spinach (shak)', 'spinach', 'images/product-pictures/Spinach/Pui-Shak.jpg', '2020-11-05 06:49:02', '2020-11-05 06:49:02'),
(4, 'Fresh Meat', 'meat', 'images/product-pictures/Meat/Local-Chicken-Deshi-Murgi.jpg', '2020-11-05 06:49:02', '2020-11-05 06:49:02'),
(5, 'Fresh Fish', 'fish', 'images/product-pictures/Fish/Hilsha-Fish.jpg', '2020-11-05 06:49:02', '2020-11-05 06:49:02'),
(6, 'Others', 'others', 'images/product-pictures/others.png', '2020-11-05 06:49:02', '2020-11-05 06:49:02');

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `id` int UNSIGNED NOT NULL,
  `product_id` int UNSIGNED DEFAULT NULL,
  `category_id` int UNSIGNED DEFAULT NULL,
  `vendor_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `compare`
--

CREATE TABLE `compare` (
  `id` int DEFAULT NULL,
  `compare_id` int NOT NULL,
  `price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `user_id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, NULL, 'najmul', 'najmulhoq95@gmail.com', '01754689260', 'testing data', '2020-11-07 11:22:48', '2020-11-07 11:22:48'),
(2, 4, 'najmul', 'najmulhoq95@gmail.com', '01754689260', '2nd test', '2020-11-07 11:40:09', '2020-11-07 11:40:09'),
(3, NULL, 'najmul', 'najmulhoq95@gmail.com', '01754689260', 'test 3', '2020-11-07 11:40:37', '2020-11-07 11:40:37'),
(4, NULL, 'najmul', 'najmulhoq95@gmail.com', '01754689260', 'test 4', '2020-11-07 11:42:13', '2020-11-07 11:42:13'),
(5, NULL, 'najmul', 'najmulhoq95@gmail.com', '01754689260', 'qwg', '2020-11-07 13:31:11', '2020-11-07 13:31:11'),
(6, NULL, 'najmul', 'mnajmulhoq95@yahoo.com', '12345', 'eghfgs', '2020-11-07 13:34:50', '2020-11-07 13:34:50'),
(7, NULL, 'najmul', 'najmulhoq95@gmail.com', '01754689260', 'test5', '2020-11-07 13:56:45', '2020-11-07 13:56:45'),
(8, NULL, 'Najmul Haque', 'najmulhoq95@gmail.com', '01754689260', 'I have a issue regarding your order. Could you please help me.', '2020-11-07 13:59:59', '2020-11-07 13:59:59'),
(9, NULL, 'najmul', 'najmulhoq95@gmail.com', '01754689260', 'qwgh', '2020-11-07 14:06:34', '2020-11-07 14:06:34'),
(10, NULL, 'najmul', 'najmulhoq95@gmail.com', '65464', 'sfgh', '2020-11-07 14:08:24', '2020-11-07 14:08:24'),
(11, NULL, 'najmul', 'najmulhoq95@gmail.com', '01754689260', 'bm', '2020-11-07 14:10:28', '2020-11-07 14:10:28'),
(12, NULL, 'najmul', 'mnajmulhoq95@yahoo.com', '01754689260', 'message', '2020-11-07 23:09:00', '2020-11-07 23:09:00'),
(13, NULL, 'Najmul Haque', 'najmulhoq95@gmail.com', '01754689260', 'xyz', '2020-11-16 11:21:11', '2020-11-16 11:21:11'),
(14, 10, 'Saif', 'saif@gmail.com', '46434565', 'test message', '2020-11-17 12:14:58', '2020-11-17 12:14:58');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(1, '2020_11_07_120524_create_contacts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int UNSIGNED NOT NULL,
  `user_id` int UNSIGNED DEFAULT NULL,
  `billing_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_name_on_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_discount` int DEFAULT NULL,
  `billing_discount_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_subtotal` int NOT NULL,
  `billing_tax` int NOT NULL,
  `billing_total` int NOT NULL,
  `payment_gateway` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipped` tinyint(1) NOT NULL DEFAULT '0',
  `error` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `billing_email`, `billing_name`, `billing_address`, `billing_city`, `billing_phone`, `billing_name_on_card`, `billing_discount`, `billing_discount_code`, `billing_subtotal`, `billing_tax`, `billing_total`, `payment_gateway`, `shipped`, `error`, `created_at`, `updated_at`) VALUES
(1, 2, 'najmul@gmail.com', 'Najmul', 'bashundhhara', 'dhaka', '01754689260', NULL, 50, 'eid50', 10000, 1000, 9000, 'stripe', 1, NULL, '2020-11-05 20:24:13', '2020-11-05 20:24:13'),
(7, 9, 'mitul@gmail.com', 'Mitul Haque', 'Old Dhaka', 'dhaka', '46434565', 'Mitul Haque', NULL, NULL, 1350, 0, 1350, 'cash', 0, NULL, '2020-11-17 04:39:32', '2020-11-17 04:39:32'),
(8, 5, 'riath@gmail.com', 'Riath Khan', 'Bashundhara', 'Dhaka', '65464', 'Riath Khan', NULL, NULL, 1350, 0, 1350, 'cash', 0, NULL, '2020-11-17 05:20:44', '2020-11-17 05:20:44'),
(9, 5, 'riath@gmail.com', 'Riath Khan', 'Bashundhara', 'Dhaka', '65464', 'Riath Khan', NULL, NULL, 360, 0, 360, 'cash', 0, NULL, '2020-11-17 05:53:44', '2020-11-17 05:53:44'),
(10, 10, 'ishrat@gmail.com', 'Ishrat Jahan Badhan', 'Uttara', 'dhaka', '46434565', 'Ishrat Jahan Badhan', NULL, NULL, 3900, 0, 3900, 'cash', 0, NULL, '2020-11-17 11:57:42', '2020-11-17 11:57:42');

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` int UNSIGNED NOT NULL,
  `order_id` int UNSIGNED DEFAULT NULL,
  `product_id` int UNSIGNED DEFAULT NULL,
  `quantity` int UNSIGNED NOT NULL,
  `item_count` int DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`id`, `order_id`, `product_id`, `quantity`, `item_count`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, '2020-11-05 20:30:40', '2020-11-05 20:30:40'),
(5, 7, 8, 1, 1, '2020-11-17 04:39:33', '2020-11-17 04:39:33'),
(6, 7, 1, 1, 1, '2020-11-17 04:39:33', '2020-11-17 04:39:33'),
(7, 8, 8, 1, 1, '2020-11-17 05:20:45', '2020-11-17 05:20:45'),
(8, 8, 1, 1, 1, '2020-11-17 05:20:45', '2020-11-17 05:20:45'),
(9, 9, 13, 2, 1, '2020-11-17 05:53:44', '2020-11-17 05:53:44'),
(10, 10, 8, 7, 1, '2020-11-17 11:57:42', '2020-11-17 11:57:42'),
(11, 10, 12, 5, 1, '2020-11-17 11:57:43', '2020-11-17 11:57:43'),
(12, 10, 11, 1, 1, '2020-11-17 11:57:43', '2020-11-17 11:57:43');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int UNSIGNED NOT NULL,
  `category_id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `quantity` int UNSIGNED NOT NULL DEFAULT '20',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `details`, `price`, `description`, `featured`, `quantity`, `image`, `images`, `created_at`, `updated_at`) VALUES
(1, 5, 'Hilsha ', 'hilsa', '2 kg', 500, 'Ilish or Hilsha is a national fish of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fish in the world. t is an oily fish and rich in essential omega 3 fatty acids. n Bangladesh this fish is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.', 1, 8, 'images/product-pictures/Fish/Hilsha-Fish.jpg', NULL, '2020-11-04 11:17:58', '2020-11-17 05:20:45'),
(2, 5, 'Prawn Big ', 'prawn-big', '1 kg', 550, 'Prawn is a national fish of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fish in the world. t is an oily fish and rich in essential omega 3 fatty acids. n Bangladesh this fish is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.', 0, 10, 'images/product-pictures/Fish/Prawn-Big.jpg', NULL, '2020-11-04 11:17:59', '2020-11-04 11:17:59'),
(3, 5, 'Deshi Pangas', 'pangas', '1 kg', 130, 'Pangas is a national fish of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fish in the world. t is an oily fish and rich in essential omega 3 fatty acids. n Bangladesh this fish is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.', 0, 10, 'images/product-pictures/Fish/Deshi-Pangas.jpg', NULL, '2020-11-04 11:17:59', '2020-11-04 11:17:59'),
(4, 5, 'Kachki', 'kachki', '500 gm', 400, 'kachki is a national fish of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fish in the world. t is an oily fish and rich in essential omega 3 fatty acids. n Bangladesh this fish is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.', 0, 10, 'images/product-pictures/Fish/Kachki.jpg', NULL, '2020-11-04 11:17:59', '2020-11-04 11:17:59'),
(5, 5, 'Koi', 'koi', '1 kg', 160, 'Koi or Hilsha is a national fish of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fish in the world. t is an oily fish and rich in essential omega 3 fatty acids. n Bangladesh this fish is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.', 0, 10, 'images/product-pictures/Fish/Koi-Fish.jpg', NULL, '2020-11-04 11:17:59', '2020-11-04 11:17:59'),
(6, 5, 'Magur', 'magur', '1 kg', 250, 'Magur is a national fish of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fish in the world. t is an oily fish and rich in essential omega 3 fatty acids. n Bangladesh this fish is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.', 0, 10, 'images/product-pictures/Fish/Magur-Fish.jpg', NULL, '2020-11-04 11:17:59', '2020-11-04 11:17:59'),
(7, 5, 'Prawn Small', 'prawn-small', '1 kg', 450, 'Prawn small is a national fish of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fish in the world. t is an oily fish and rich in essential omega 3 fatty acids. n Bangladesh this fish is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.', 0, 10, 'images/product-pictures/Fish/Prawn-Small.jpg', NULL, '2020-11-04 11:17:59', '2020-11-04 11:17:59'),
(8, 5, 'Punti', 'punti', '500 gm', 350, 'Punti is a national fish of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fish in the world. t is an oily fish and rich in essential omega 3 fatty acids. n Bangladesh this fish is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.', 0, 0, 'images/product-pictures/Fish/Punti-Fish.jpg', NULL, '2020-11-04 11:17:59', '2020-11-17 11:57:43'),
(9, 5, 'Rui', 'roi', '1 kg', 480, 'Rui or Hilsha is a national fish of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fish in the world. t is an oily fish and rich in essential omega 3 fatty acids. n Bangladesh this fish is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.', 0, 10, 'images/product-pictures/Fish/Rui-Fish.jpg', NULL, '2020-11-04 11:17:59', '2020-11-04 11:17:59'),
(10, 5, 'Shing', 'shing', '1 kg', 150, 'Shing is a national fish of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fish in the world. t is an oily fish and rich in essential omega 3 fatty acids. n Bangladesh this fish is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.', 0, 10, 'images/product-pictures/Fish/Shing-Fish.jpg', NULL, '2020-11-04 11:17:59', '2020-11-17 04:02:44'),
(11, 5, 'Tengra', 'tengra', '1 kg', 350, 'Tengra small is a national fish of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fish in the world. t is an oily fish and rich in essential omega 3 fatty acids. n Bangladesh this fish is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.', 0, 9, 'images/product-pictures/Fish/Tengra-Fish.jpg', NULL, '2020-11-04 11:17:59', '2020-11-17 11:57:43'),
(12, 5, 'Tilapia', 'tilapia', '1 kg', 220, 'Tilapia is a national fish of Bangladesh. Ilish body is strongly compressed and moderately deep with dorsal and ventral profile equally convex. It is considered to be one of most favorite and delicious fish in the world. t is an oily fish and rich in essential omega 3 fatty acids. n Bangladesh this fish is prepared in varity of way like it can be smoked, fried, steamed, baked, prepared with mustard seed paste, curd, brinjal (eggplant). Some common hilsa menus are Fried hilsa, Khichuri-Ilish, Sorshe Ilish, Panta Ilish,Vapa Ilish etc.It has cultural value in Bangali’s life. It is an obvious food in many cultural festival like Pahela Boishakh, Saraswati Puja.', 1, 5, 'images/product-pictures/Fish/Tilapia-Fish.jpg', NULL, '2020-11-04 11:18:00', '2020-11-17 11:57:43'),
(13, 1, 'Apple', 'apple', '1 kg', 180, 'Apple is a testy fruit.', 0, 8, 'images/product-pictures/Fruits/Apple.jpg', NULL, '2020-11-05 15:19:27', '2020-11-17 05:53:44');

-- --------------------------------------------------------

--
-- Table structure for table `product_reviews`
--

CREATE TABLE `product_reviews` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `rating` int NOT NULL,
  `status` tinyint(1) NOT NULL,
  `comments` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_reviews`
--

INSERT INTO `product_reviews` (`id`, `user_id`, `product_id`, `rating`, `status`, `comments`) VALUES
(1, 3, 7, 5, 1, 'Product is quite good.'),
(2, 3, 9, 3, 1, 'Product is quite good.'),
(3, 3, 3, 4, 1, 'Product is quite good.'),
(4, 3, 1, 4, 1, 'Product is quite good.'),
(5, 3, 2, 5, 1, 'Product is quite good.'),
(6, 3, 4, 3, 1, 'Product is quite good.'),
(7, 3, 5, 5, 1, 'Product is quite good.'),
(8, 3, 6, 5, 1, 'Product is quite good.'),
(9, 3, 11, 4, 1, 'Product is quite good.'),
(10, 3, 10, 5, 1, 'Product is quite good.'),
(11, 3, 8, 4, 1, 'Product is quite good.'),
(12, 3, 12, 1, 1, 'Product is quite good.');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2020-10-26 14:02:41', '2020-10-26 14:02:41'),
(2, 'user', 'Normal User', '2020-10-26 14:02:41', '2020-10-26 14:02:41'),
(3, 'adminweb', 'Admin Web', '2020-10-26 14:02:51', '2020-10-26 14:02:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'images/user/user.jpg',
  `phone` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `phone`, `address`, `city`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'images/user/user.jpg', '', '', NULL, '$2y$10$wOhx80vaeh2m1/hH39LgDuU74lqDoinmvSVtAioZOGXN5CK1uOQV2', 'jn39LA5Ai0XAQEp2S1B8WB7HMUH9DiA0n0ajhHrBt1uakJ0GWMBgguB83Oax', NULL, '2020-10-26 14:02:45', '2020-10-26 14:02:45'),
(2, 2, 'Najmul Haque', 'najmulhoq95@gmail.com', 'images/user/user.jpg', '7643222', 'Bashundhara, Dhaka', 'dhaka', 'e10adc3949ba59abbe56e057f20f883e', '123456', 'setting', '2020-11-05 20:21:17', '2020-11-05 20:21:17'),
(3, 2, 'Sample User', 'user2@gmail.com', 'images/user/user.jpg', '32458', 'banani, dhaka', 'dhaka', 'e10adc3949ba59abbe56e057f20f883e', '123456', 'setting', '2020-11-05 20:21:17', '2020-11-05 20:21:17'),
(4, 2, 'user', 'user@gmail.com', 'images/user/user.jpg', '987543', 'Bashundhara', 'Dhaka', '$2y$10$P8CrbrvTwQWVJGbWqHiRUefZLvmC673PVJP4YqDaal762acG1Chyq', NULL, NULL, '2020-11-07 02:52:01', '2020-11-07 02:52:01'),
(5, NULL, 'Riath Khan', 'riath@gmail.com', 'images/user/user.jpg', '65464', 'Bashundhara', 'Dhaka', '$2y$10$z.nZyIl7hjkhu6pocodVBeEuqqLzoe65ySFO0RHlnfY5NgMEsaq2m', NULL, NULL, '2020-11-12 15:33:42', '2020-11-12 15:33:42'),
(9, 2, 'Mitul Haque', 'mitul@gmail.com', 'images/user/user.jpg', '46434565', 'Old Dhaka', 'dhaka', '$2y$10$key8BPuJA.uRtjQnX4j0oehVDcJioOu5y0Gy5eDOY6.7hkrdYgyXe', NULL, NULL, '2020-11-17 04:39:32', '2020-11-17 04:39:32'),
(10, 2, 'Ishrat Jahan Badhan', 'ishrat@gmail.com', 'images/user/user.jpg', '46434565', 'Uttara', 'dhaka', '$2y$10$7bhjH5uLquJNg/axMAmb4OR.sT8vCInOyie6al71FWMu9gAy4i7HW', NULL, NULL, '2020-11-17 11:57:42', '2020-11-17 11:57:42'),
(11, NULL, 'Roohi', 'roohi@gmail.com', 'images/user/user.jpg', '234567', 'banani', 'dhaka', '$2y$10$D0NMhS5tRpJ3ocPG.ad5d.k5WkiwDRGp7uAt4Shx5H0rt8E999ZBW', NULL, NULL, '2020-11-17 12:16:48', '2020-11-17 12:16:48');

-- --------------------------------------------------------

--
-- Table structure for table `user_message_for_vendor`
--

CREATE TABLE `user_message_for_vendor` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `vendor_id` int NOT NULL,
  `message` varchar(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'images/vendor/vendor.jpg',
  `phone` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_category_id` int NOT NULL,
  `rating` int NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `name`, `avatar`, `phone`, `address`, `city`, `business_category_id`, `rating`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mr. Nurul', 'images/vendor/vendor.jpg', '5644646', 'Bashundhara', 'Dhaka', 1, 5, 'e10adc3949ba59abbe56e057f20f883e', NULL, '2020-11-09 10:30:33', '2020-11-09 10:30:33'),
(2, 'Mr. Issac', 'images/vendor/vendor.jpg', '5434564', 'Baridhara', 'Dhaka', 2, 4, 'e10adc3949ba59abbe56e057f20f883e', 'najmul@localhost', '2020-11-09 11:51:32', '2020-11-09 11:51:32'),
(3, 'Mr. Sahed', 'images/vendor/vendor.jpg', '97851125', 'Dhanmondi', 'Dhaka', 5, 3, '123456', 'najmul@localhost', '2020-11-09 11:54:27', '2020-11-09 11:54:27'),
(4, 'Mr. Alam', 'images/vendor/vendor.jpg', '85768568', 'Uttara', 'Dhaka', 6, 2, '123456', 'najmul@localhost', '2020-11-10 10:56:50', '2020-11-10 10:56:50');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_products`
--

CREATE TABLE `vendor_products` (
  `id` int NOT NULL,
  `vendor_id` int NOT NULL,
  `product_id` int NOT NULL,
  `item_count` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendor_products`
--

INSERT INTO `vendor_products` (`id`, `vendor_id`, `product_id`, `item_count`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2020-11-09 15:53:55', '2020-11-09 15:53:55'),
(2, 2, 1, 1, '2020-11-09 15:54:33', '2020-11-09 15:54:33'),
(3, 1, 5, 1, '2020-11-09 15:55:55', '2020-11-09 15:55:55'),
(4, 2, 2, 1, '2020-11-09 15:56:43', '2020-11-09 15:56:43'),
(5, 2, 4, 1, '2020-11-09 15:58:53', '2020-11-09 15:58:53'),
(6, 3, 1, 1, '2020-11-09 15:58:53', '2020-11-09 15:58:53'),
(7, 3, 7, 1, '2020-11-09 16:00:04', '2020-11-09 16:00:04'),
(8, 3, 8, 1, '2020-11-09 16:00:04', '2020-11-09 16:00:04');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_reviews`
--

CREATE TABLE `vendor_reviews` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `vendor_id` int NOT NULL,
  `rating` int NOT NULL,
  `status` tinyint(1) NOT NULL,
  `comments` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor_reviews`
--

INSERT INTO `vendor_reviews` (`id`, `user_id`, `vendor_id`, `rating`, `status`, `comments`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 5, 1, 'vendor is quite good.', '2020-11-10 15:42:31', '2020-11-10 21:42:31'),
(2, 4, 2, 3, 1, 'vendor is quite good.', '2020-11-10 15:42:31', '2020-11-10 21:42:31'),
(3, 2, 3, 4, 1, 'vendor is quite good.', '2020-11-10 15:42:31', '2020-11-10 21:42:31'),
(4, 3, 1, 4, 1, 'vendor is quite good.', '2020-11-10 17:42:29', '2020-11-10 23:42:29'),
(5, 3, 2, 5, 1, 'vendor is quite good.', '2020-11-10 17:42:43', '2020-11-10 23:42:43'),
(6, 3, 3, 3, 1, 'vendor is quite good.', '2020-11-10 17:43:11', '2020-11-10 23:43:11'),
(7, 4, 1, 5, 1, 'vendor is quite good.', NULL, NULL),
(8, 4, 2, 5, 1, 'vendor is quite good.', NULL, NULL),
(9, 4, 3, 4, 1, 'vendor is quite good.', NULL, NULL),
(10, 2, 1, 5, 1, 'vendor is quite good.', NULL, NULL),
(11, 2, 2, 4, 1, 'vendor is quite good.', NULL, NULL),
(12, 2, 3, 5, 1, 'vendor is quite good.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` int NOT NULL,
  `product_id` int NOT NULL,
  `user_id` int NOT NULL,
  `vendor_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `product_id`, `user_id`, `vendor_id`, `created_at`, `updated_at`) VALUES
(1, 8, 5, NULL, '2020-11-14 07:29:14', '2020-11-14 07:29:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acquisition_manager`
--
ALTER TABLE `acquisition_manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_categories`
--
ALTER TABLE `business_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`card_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_name_unique` (`name`),
  ADD UNIQUE KEY `category_slug_unique` (`slug`);

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_product_product_id_foreign` (`product_id`),
  ADD KEY `category_product_category_id_foreign` (`category_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contacts_user_id_foreign` (`user_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
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
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_product_order_id_foreign` (`order_id`),
  ADD KEY `order_product_product_id_foreign` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`);

--
-- Indexes for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_products`
--
ALTER TABLE `vendor_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_reviews`
--
ALTER TABLE `vendor_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acquisition_manager`
--
ALTER TABLE `acquisition_manager`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `business_categories`
--
ALTER TABLE `business_categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `card_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vendor_products`
--
ALTER TABLE `vendor_products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vendor_reviews`
--
ALTER TABLE `vendor_reviews`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_product`
--
ALTER TABLE `category_product`
  ADD CONSTRAINT `category_product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `category_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `order_products`
--
ALTER TABLE `order_products`
  ADD CONSTRAINT `order_product_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `order_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
