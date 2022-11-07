-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 07, 2022 at 12:36 PM
-- Server version: 8.0.30-0ubuntu0.20.04.2
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
-- Database: `ceylon_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` varchar(20) NOT NULL,
  `updated_at` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`, `color`) VALUES
(2, 'Item1', '2019-09-13 05:26:18', '2019-09-13 05:26:18', 'red'),
(4, 'Item2', '2019-09-13 05:26:18', '2019-09-13 05:26:18', 'blue'),
(5, 'Item3', '2019-09-13 05:26:18', '2019-09-13 05:26:18', 'orange');

-- --------------------------------------------------------

--
-- Table structure for table `free_issues`
--

CREATE TABLE `free_issues` (
  `id` int UNSIGNED NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `free_qty` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lower_limit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upper_limit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `free_product` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `free_issues`
--

INSERT INTO `free_issues` (`id`, `type`, `product_name`, `qty`, `free_qty`, `lower_limit`, `upper_limit`, `created_at`, `updated_at`, `free_product`) VALUES
(4, 'Poulet', 'Poulet Ailerons IQF 4x2.5kg CH', '3', '4', '123', '43', '2022-11-06 02:51:18', '2022-11-07 00:39:10', 'FreePro1'),
(6, 'Item1', 'Product 4', '4', '1', '2', '3', '2022-11-07 00:15:00', '2022-11-07 00:44:11', 'FreePro1'),
(14, 'Item1', 'Product 4', '434', '1231', '123', '43', '2022-11-07 00:22:28', '2022-11-07 00:22:28', 'hen'),
(17, 'Item1', 'Product 1', '4', '1', '2', '3', '2022-11-07 00:45:59', '2022-11-07 00:45:59', 'FreePro1'),
(18, 'Item1', 'Product 1', '3', '1', '2', '3', '2022-11-07 00:46:36', '2022-11-07 00:46:36', 'FreePro1');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int NOT NULL,
  `item_name` varchar(200) NOT NULL,
  `item_price` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `updated_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `item_price`, `created_at`, `updated_at`) VALUES
(5, 'Poulet Brust 6x2 Code2 BR', '6.5', '2019-10-17 16:38:14', '2019-10-17 16:38:14'),
(6, 'Poulet Brust natur 2.5x4 code1 UA', '6.9', '2019-10-17 16:38:33', '2019-10-17 16:38:33'),
(7, 'Lammgigot o/Bein AUS/NZ/IRCode 1', '15.19', '2019-10-17 16:39:43', '2019-10-17 16:39:43'),
(8, 'Rindsnuss rund o/Bein CH/EU', '18.5', '2019-10-17 16:40:06', '2019-10-17 16:40:06'),
(9, 'BT Crevetten 6/8 HLSO VN', '26.9', '2019-10-17 16:40:24', '2019-10-17 16:40:24'),
(10, 'Silver Pangasiusfilet 20% ASC 120-170 VN', '4.2', '2019-10-17 16:40:47', '2019-10-17 16:40:47'),
(11, 'Entegebraten Thai CP 525gr 16 Beutel  code 1', '16.5', '2019-10-17 16:41:22', '2019-10-17 16:41:22'),
(12, 'Rahmspinat Würfel', '3.5', '2019-10-17 16:41:39', '2019-10-17 16:41:39'),
(13, 'Knoblauch gehackt', '8.5', '2019-10-17 16:42:01', '2019-10-17 16:42:01'),
(14, 'Steinpilz Ganz 1 Qualitäte', '14.19', '2019-10-17 16:42:17', '2019-10-17 16:42:17'),
(15, 'Frühlingsrollen mit Gemüse 20g CN/VN', '8.33', '2019-10-17 16:42:35', '2019-10-17 16:42:35'),
(16, 'Kartofelst?rke 1x25kg NL', '45', '2019-10-17 16:48:01', '2019-10-17 16:48:01'),
(17, 'Test', '1234', '2019-10-17 18:10:39', '2019-10-17 18:10:39');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_name`, `password`) VALUES
('Saeed', 'Ramzan');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_10_23_014012_create_products_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 2),
(3, '2022_11_06_024625_add_column_post', 2),
(4, '2022_11_06_034614_add_column_post', 3),
(5, '2022_11_06_064933_free_issue', 4),
(6, '2022_11_06_071851_create_fee_issues_table', 5),
(7, '2022_11_07_053630_add_col', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int NOT NULL,
  `item_id` varchar(50) DEFAULT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_price` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `updated_at` varchar(50) NOT NULL,
  `user_id` int DEFAULT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `address` varchar(600) NOT NULL,
  `quantity` varchar(20) DEFAULT NULL,
  `category` varchar(50) NOT NULL,
  `user_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `item_id`, `item_name`, `item_price`, `created_at`, `updated_at`, `user_id`, `user_name`, `address`, `quantity`, `category`, `user_type`) VALUES
(152, '11086', 'Product 1', '23', '2022-11-07 03:53:39', '2022-11-07 03:53:39', 32, 'saeed', '455/1 Kegalle', '2', 'Item1', 'ex'),
(153, '11087', 'product 2', '40', '2022-11-07 03:53:39', '2022-11-07 03:53:39', 32, 'saeed', '455/1 Kegalle', '2', 'Item2', 'ex');

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
  `id` int NOT NULL,
  `pname` varchar(255) CHARACTER SET latin1 COLLATE latin1_german2_ci NOT NULL,
  `category` varchar(30) DEFAULT NULL,
  `sellingprice` double NOT NULL,
  `unitquantity` double DEFAULT NULL,
  `profile_image` varchar(50) DEFAULT NULL,
  `description` varchar(20) DEFAULT NULL,
  `updated_at` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `cat_name` varchar(20) DEFAULT NULL,
  `front` varchar(20) DEFAULT NULL,
  `des1` varchar(500) DEFAULT NULL,
  `des2` varchar(500) DEFAULT NULL,
  `product_code` varchar(255) NOT NULL,
  `expire_date` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pname`, `category`, `sellingprice`, `unitquantity`, `profile_image`, `description`, `updated_at`, `created_at`, `cat_name`, `front`, `des1`, `des2`, `product_code`, `expire_date`) VALUES
(11086, 'Product 1', 'Item1', 23, 3, '/imgs/gallery/item-1_1667756433.png', NULL, '2022-11-06 17:40:33', '2022-11-06 17:40:33', NULL, NULL, NULL, NULL, '0003', '06-05-2011'),
(11087, 'product 2', 'Item2', 40, 2, '/imgs/gallery/item-2_1667756524.png', NULL, '2022-11-06 17:42:04', '2022-11-06 17:42:04', NULL, NULL, NULL, NULL, '02', '06-05-2011'),
(11088, 'Product 3', 'Item3', 23, 10, NULL, NULL, '2022-11-07 05:25:12', '2022-11-07 05:25:12', NULL, NULL, NULL, NULL, '0003', '2022-11-08'),
(11089, 'Product 4', 'Item1', 35, 40, NULL, NULL, '2022-11-07 05:26:09', '2022-11-07 05:26:09', NULL, NULL, NULL, NULL, '0004', '2022-11-07');

-- --------------------------------------------------------

--
-- Table structure for table `specials`
--

CREATE TABLE `specials` (
  `sid` int NOT NULL,
  `id` int DEFAULT NULL,
  `pname` varchar(500) NOT NULL,
  `oldprice` double NOT NULL,
  `newprice` double NOT NULL,
  `status` varchar(10) NOT NULL,
  `updated_at` varchar(100) NOT NULL,
  `created_at` varchar(100) NOT NULL,
  `profile_image` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `type`, `address`, `contact_no`) VALUES
(31, 'admin', 'admin@gmail.com', '$2y$10$eJcX6hI5Iz5wx9APJbW.vOWemdUUjOmxoHN8t.mi5g9u66JvRd4se', 'PuVMTF3aw1UOPtSyKA4lFrBqTly621qqJJemUDqSeJgyIIl8nFpfvadCuF7c', '2022-11-06 21:22:29', '2022-11-06 21:54:30', 'admin', '123 Address', '0733423424'),
(32, 'saeed', 'saeed@gmail.com', '$2y$10$QwWn4ukH1yCSWD7M5lxUkuIbTIJgPm6HZz2iB2cVs3U.qyEgUVGtC', 'Jy7tP7WJzfnthDOdLN6PPxxBRYSKmYw8FsRKU2VdBstHfTpgIy8OFKPSOFde', '2022-11-06 22:23:24', '2022-11-06 22:30:51', 'ex', '455/1 Kegalle', '0733423424');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `free_issues`
--
ALTER TABLE `free_issues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

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
  ADD UNIQUE KEY `pname` (`pname`);

--
-- Indexes for table `specials`
--
ALTER TABLE `specials`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `free_issues`
--
ALTER TABLE `free_issues`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11090;

--
-- AUTO_INCREMENT for table `specials`
--
ALTER TABLE `specials`
  MODIFY `sid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
