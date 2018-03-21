-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2018 at 03:40 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbshoponline`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `billdetail`
--

CREATE TABLE `billdetail` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `bill_id` int(10) UNSIGNED NOT NULL,
  `price` double(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` int(11) NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `priority`, `menu_id`, `created_at`, `updated_at`) VALUES
(1, 'điều dưỡng khoa nội 123', 1, 1, '2018-03-19 17:00:00', '2018-03-20 09:46:59'),
(2, 'sinh san 2', 2, 8, '2018-03-19 17:00:00', '2018-03-20 09:46:26'),
(4, 'điều dưỡng khoa nội 1', 2, 6, '2018-03-20 09:44:46', '2018-03-20 09:44:46');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, '1234', '1234', '2018-03-20 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `instruction`
--

CREATE TABLE `instruction` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instruction`
--

INSERT INTO `instruction` (`id`, `title`, `link`, `created_at`, `updated_at`) VALUES
(3, 'title  12121', 'link 121212', '2018-03-21 08:40:21', '2018-03-21 09:12:46');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `priority`, `created_at`, `updated_at`) VALUES
(1, 'điều dưỡng', 1, '2018-03-19 17:00:00', NULL),
(3, 'Hỗ trợ', 1, '2018-03-20 07:11:54', '2018-03-20 07:11:54'),
(5, 'Cham soc', 2, '2018-03-20 07:19:14', '2018-03-20 07:19:14'),
(6, 'Phục hồi 1', 1, '2018-03-20 07:21:32', '2018-03-20 07:22:45'),
(7, 'khach hang', 0, '2018-03-20 07:24:23', '2018-03-20 07:24:23'),
(8, 'chan thuong', 2, '2018-03-20 07:24:51', '2018-03-20 07:24:51'),
(9, 'aaaaaaaaaaa', 0, '2018-03-20 07:25:00', '2018-03-20 07:25:00'),
(10, 'aaaaaaaaaaaaaaaaaaaaaaaaaa', 0, '2018-03-20 07:25:04', '2018-03-20 07:25:04'),
(11, 'aaaaa', 0, '2018-03-20 07:25:19', '2018-03-20 07:25:19');

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
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2018_03_20_002737_create_vendors_table', 1),
(7, '2018_03_20_083330__create_menus_table', 2),
(8, '2018_03_20_083723__create_categorys_table', 3),
(9, '2018_03_20_084257__create_posts_table', 4),
(10, '2018_03_20_084619__create_products_table', 5),
(11, '2018_03_20_085756__create_bill_table', 6),
(12, '2018_03_20_090125__create_billdetails_table', 7),
(13, '2018_03_21_143542___create_instruction_table', 8),
(14, '2018_03_21_143857___create_config_table', 9),
(15, '2018_03_21_144146___create_privacy_table', 10),
(16, '2018_03_21_144318___create_slide_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Những điều lưu ý khi vào bệnh viện', 'Không được làm ồn, vứt rác nơi công cộng', '2018-03-19 17:00:00', NULL),
(2, 'xin chao cac ban', '<p><strong>minh la ai day</strong></p>', '2018-03-20 08:06:19', '2018-03-20 08:20:50'),
(4, 'minh la', '<p>anh khong x</p>', '2018-03-20 08:09:04', '2018-03-20 08:09:04');

-- --------------------------------------------------------

--
-- Table structure for table `privacy`
--

CREATE TABLE `privacy` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacy`
--

INSERT INTO `privacy` (`id`, `title`, `link`, `created_at`, `updated_at`) VALUES
(2, 'Privacy1', 'linkPrivacy', '2018-03-21 09:09:28', '2018-03-21 09:09:28');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_price` double(8,2) NOT NULL,
  `new_price` double(8,2) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hot` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vendor_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `number_of_view` int(11) NOT NULL,
  `number_of_sell` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `old_price`, `new_price`, `image`, `hot`, `description`, `vendor_id`, `category_id`, `number_of_view`, `number_of_sell`, `created_at`, `updated_at`) VALUES
(2, 'Giường', 100.00, 10000.00, 'BnjaPG2XTpUH8WYUy0IZ_maytinhkhoe025.jpg', 1, '<p>L&agrave; sản phẩm cao cấp nhất được ch&uacute;ng ta c&ocirc;ng nhận</p>', 4, 1, 0, 0, '2018-03-19 17:00:00', '2018-03-20 13:52:22'),
(3, 'nhiệt kế', 50.00, 100.00, 'BZb65aadYjl3xEyamCfI_maytinhkhoe026.jpg', 1, '<p>D&ugrave;ng để đo nhiệt độ cơ thể với độ ch&iacute;nh x&aacute;c cao</p>', 5, 2, 0, 0, '2018-03-20 13:27:14', '2018-03-20 13:27:14');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `title`, `image`, `link`, `created_at`, `updated_at`) VALUES
(2, 'Ảnh hoa hậu', 'xq73cEOS0tNe9eye6fp5_maytinhkhoe026.jpg', 'https://www.youtube.com/watch?v=IqjN82YZKSo11', '2018-03-21 08:06:02', '2018-03-21 08:15:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `name`, `date_of_birth`, `image`, `address`, `phone`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'nguyenanh', '$2y$10$t/X/Oc00uhzfUgA7.coMiO6bH1ckh8nDMZ1iOovncFLy7/hN2e6I2', 'anh1@gmail.com', 'nguyen nguyen anh', '2018-03-03', 'Q6VroDCtlCSFOLLmsOhw_maytinhkhoe032.jpg', 'thai binh', '12345678912', '1', NULL, '2018-03-21 06:38:16', '2018-03-21 07:31:59'),
(3, 'hoanganh', '$2y$10$iVbV71vmkkUxGXtNUlQRKeGlru/Yxo/jU5HbqsMaoklYquTKNbO5e', 'hoanganh@gmail.com', 'Trần Hoàng Anh', '2018-03-02', 'iWn7wEplYOYGd0tPbrgE_maytinhkhoe028.jpg', 'sài gòn 1', '1234567891', '1', NULL, '2018-03-21 06:42:52', '2018-03-21 07:30:55'),
(4, 'thuyngan', '$2y$10$Ib6HGsSGokL.droicktICu4gQzlSFOii8V/SuxR5tjEXOYBsGFrSK', 'ngan@gmail.com', 'thùy ngân', '2018-03-01', 'yZygHISZtuQgKQhJhdPg_maytinhkhoe026.jpg', 'thanh hóa', '12345678912', '1', NULL, '2018-03-21 07:05:38', '2018-03-21 07:05:38'),
(5, 'minhvuong', '$2y$10$.OoORP5MnnP3NvLInv8Pd./Z.xGpjDSw9ZJZtMhNrLJqSRO/U.CVq', 'hoahong@gmail.com', 'Nguyễn Minh Vương', '2018-03-02', 'UA8ziDnyOEF9gyRQcIEC_maytinhkhoe034.jpg', 'nam định', '12345678912', '1', NULL, '2018-03-21 07:21:06', '2018-03-21 07:21:06');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Công ty FPT 1', '2018-03-19 17:00:00', '2018-03-20 04:57:55'),
(3, 'Công ty bánh kẹo hải hà', '2018-03-20 17:00:00', NULL),
(4, 'Công ty phát triển ASM', '2018-03-20 04:12:04', '2018-03-20 04:12:04'),
(5, 'Công ty thiết bị sông hồng 1', '2018-03-20 04:12:47', '2018-03-20 04:49:30'),
(6, 'Công ty vinaconec', '2018-03-20 04:20:27', '2018-03-20 04:50:34'),
(9, 'Công ty dotnet', '2018-03-20 04:23:13', '2018-03-20 04:51:25'),
(10, 'Tìm', '2018-03-20 04:26:35', '2018-03-20 04:26:35'),
(11, 'Công ty VND', '2018-03-20 06:35:52', '2018-03-20 06:35:52'),
(12, 'sdsdsd', '2018-03-20 07:08:31', '2018-03-20 07:08:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billdetail`
--
ALTER TABLE `billdetail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `billdetail_product_id_foreign` (`product_id`),
  ADD KEY `billdetail_bill_id_foreign` (`bill_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instruction`
--
ALTER TABLE `instruction`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacy`
--
ALTER TABLE `privacy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_vendor_id_foreign` (`vendor_id`),
  ADD KEY `product_category_id_foreign` (`category_id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `billdetail`
--
ALTER TABLE `billdetail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `instruction`
--
ALTER TABLE `instruction`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `privacy`
--
ALTER TABLE `privacy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `billdetail`
--
ALTER TABLE `billdetail`
  ADD CONSTRAINT `billdetail_bill_id_foreign` FOREIGN KEY (`bill_id`) REFERENCES `bill` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `billdetail_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_vendor_id_foreign` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
