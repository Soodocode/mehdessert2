-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for praktis
CREATE DATABASE IF NOT EXISTS `praktis` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `praktis`;

-- Dumping structure for table praktis.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table praktis.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table praktis.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table praktis.migrations: ~4 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2021_06_16_082724_create_products_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table praktis.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table praktis.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table praktis.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,0) DEFAULT '0',
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table praktis.products: ~29 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `name`, `description`, `price`, `file_path`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Jhojie Jhojie', 'test', 0, 'KJK7SwPnKXKAnF7dtvPbMCzGCV1IYHgU3On6J7Ni.jpg', 'N', '2021-06-16 09:55:07', '2021-06-16 09:55:07'),
	(2, 'Gulay', 'gulay', 0, '4NqpybI96K8d6KRyV4PbwE7pSRyclnJw2OsSuqQO.jpg', 'N', '2021-06-17 08:29:27', '2021-06-18 06:16:42'),
	(3, 'TestCat', 'test', 0, 'HPfwsidAZLNIte65t0yG3dwAL7Xda6UWaVLAwbAw.jpg', 'N', '2021-06-17 09:58:39', '2021-06-18 06:40:55'),
	(4, 'tet', 'test', 0, 'WzMepm7J2InzWiKTycIVPFUjGp23weaHMxVrrK29.gif', 'N', '2021-06-18 03:17:48', '2021-06-18 06:40:57'),
	(5, 'Car Repair', 'trestest', 0, 'N6p5Bk9szSJAJVTObh9biWGfBIr0xm1cfbp34I8M.jpg', 'N', '2021-06-18 03:18:13', '2021-06-18 03:47:04'),
	(6, 'Car Repair', 'trestest', 0, 'N96WeT0qVeza8qUh0iKqoGb6E0qAOxxa4bxLC8RU.jpg', 'N', '2021-06-18 03:18:28', '2021-06-18 06:40:29'),
	(7, 'Car Repair', 'trestest', 0, 'Nz8kA69Vjp1LBqUdSrPdkSqLhZPjBT0lOvQbzp3H.jpg', 'N', '2021-06-18 03:18:30', '2021-06-18 06:12:47'),
	(8, 'Car Repair', 'trestest', 0, 'vE8FoR035Yv91GCQBZFtbeYlqrp9401uD8boMbvv.jpg', 'N', '2021-06-18 03:18:43', '2021-06-18 06:15:47'),
	(9, 'Car Repair', 'trestest', 0, 'C44Jt2hPWXm16ECvsHaHTh9eh3ZzDhUaB129SPrR.jpg', 'N', '2021-06-18 03:19:03', '2021-06-18 06:14:14'),
	(10, 'TestCat', 'testata', 0, 'gOVDtiSnk3ppGPtiegqYZeQg3K1GpcEiRDWSfl1T.jpg', 'N', '2021-06-18 03:19:15', '2021-06-18 06:15:56'),
	(11, 'TestCat', 'testata', 0, '4rqCM5ynQhPwgU1Q3UBcV1gZ8Vn4K7sCXmbcuAau.jpg', 'N', '2021-06-18 03:19:58', '2021-06-18 03:47:20'),
	(12, 'TestCat', 'testata', 0, 'rFvZIBTNUd98a3mmoDEpIQvF6IcfhA6YX1F2rmz4.jpg', 'N', '2021-06-18 03:20:06', '2021-06-18 06:16:00'),
	(13, 'atest', 'teataew', 0, 'eehKFSYUbvaz0ynJ6RA4YiJDnCNZxD2KmuKlLe8W.png', 'N', '2021-06-18 05:55:40', '2021-06-18 06:40:36'),
	(14, 'atest', 'teataew', 0, 'LUPaA0Db5i1VonLheMqJ27t3pYsNSrQbHc5zZiJV.png', 'N', '2021-06-18 05:55:54', '2021-06-18 06:41:01'),
	(15, 'atest', 'teataew', 0, 'SwTruY4g8778FvDQlGK3aDZEFJXZcnGKvJrWmarE.png', 'N', '2021-06-18 05:56:02', '2021-06-18 06:40:33'),
	(16, 'ateat', 'etaawt', 0, 'HfottlCHei1bRIevxTQXJppJ31YrRJVfl65fKlGe.jpg', 'N', '2021-06-18 05:56:54', '2021-06-18 06:40:59'),
	(17, 'ateat', 'etaawt', 0, 'knXndLbGMXOiU6SwxhaqO7TQwv3MLJtizBC2NnpF.jpg', 'N', '2021-06-18 05:57:13', '2021-06-18 06:40:54'),
	(18, 'adsf', 'adsfadsf', 0, '5BVRbqJvSwEzoA69b2Tg3HhBrsbFrwfunSty4Dyq.png', 'N', '2021-06-18 05:57:37', '2021-06-18 06:40:42'),
	(19, 'adsf', 'adsfadsf', 0, '5mVLHScxub4ESgYjQk7Jr659DR6zkNymDk2CZJff.png', 'N', '2021-06-18 05:57:37', '2021-06-18 06:40:46'),
	(20, 'adsf', 'adsfadsf', 0, 'Qa8a6uST2Dvb1oUqk7aKfjtyiHx16tznS6KNa33A.png', 'N', '2021-06-18 05:57:37', '2021-06-18 06:40:49'),
	(21, 'Jhojie', 'The Greatest warrior', 0, '3Dkr0kaklmevDX0gt5dXadKs8qUgLfFNULKDVwPN.gif', 'N', '2021-06-18 06:42:14', '2021-06-21 05:51:50'),
	(22, 'No No No', 'What the wow', 0, 'B53DfcySPhrtLTpZ1oCGd6cTAAq07mtLVL8wDNhE.gif', 'N', '2021-06-18 07:40:45', '2021-06-21 05:51:52'),
	(23, 'Essential All Veggie Box', 'printer took a galley of type and scrambled it to make a type specimen book.', 60, '3EPHSNPfhUDgilk07Nxd6yrE3pqVUWPNRXOTRjh6.png', 'Y', '2021-06-21 05:48:00', '2021-06-21 05:48:00'),
	(24, 'Essential Mixed Box', 'printer took a galley of type and scrambled it to make a type specimen book.', 45, 'mXlBPOE7nI0K3I0FzRmgJeZS0QJqQlCMDMmufdkF.png', 'Y', '2021-06-21 05:50:54', '2021-06-21 05:50:54'),
	(25, 'Essential All Fruit Box', 'printer took a galley of type and scrambled it to make a type specimen book.', 30, 'NfKTCC6rsKhJ17BjhRWcKk3ydjqLZPGK6Flo0HJA.png', 'Y', '2021-06-21 05:52:20', '2021-06-21 05:52:20'),
	(26, 'Standard Mixed Box', 'printer took a galley of type and scrambled it to make a type specimen book.', 29, 'W4koIN1IoLgNgOsDOcbQvMylydvZxDsF0ODMdyyC.png', 'Y', '2021-06-21 05:59:11', '2021-06-21 05:59:11'),
	(27, 'Medium Mixed Box', 'printer took a galley of type and scrambled it to make a type specimen book.', 30, 'QN68aBWBzBukBOQFmmqByuCsTnvgxZAfz1Olivlv.png', 'Y', '2021-06-21 05:59:53', '2021-06-21 05:59:53'),
	(28, 'Large Mixed Box', 'printer took a galley of type and scrambled it to make a type specimen book.', 30, 'ntPHIZpRXg0ThJNJDH2Pjv1QP09bQwWQgtoE7ffA.png', 'Y', '2021-06-21 06:00:13', '2021-06-21 06:00:13'),
	(29, 'jojie', 'test test test test', 23, 'oTDMHXh43cVEqKxXGRv6XgUEhJcMrzv0PbW7unIy.png', 'Y', '2021-07-03 09:39:18', '2021-07-03 09:39:18');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Dumping structure for table praktis.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `roles` enum('2','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table praktis.users: ~6 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `roles`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(5, 'Jhojie Jhojie', 'jhojie156@gmail.com', NULL, '1', '$2y$10$NuTn/zqt0CsJGog9YpFnwu3XeBUcDUHHWko9Gye6H4hIYX7zVW3/6', '5cfZM7uSsPt9l9SkDH7lAyOgfi3VcPyrl5irL9svHzAZpqGghSen5SC4OG8l', '2021-06-18 05:17:02', '2021-06-18 06:28:35'),
	(6, 'Kurt Test444', 'kurtdoe444@gmail.com', NULL, '2', '$2y$10$XynjlJOEJED1UL7E0yT5EuGNv/e.4wt9Z4ns9JASgLWsJv40YyQ16', NULL, '2021-06-24 05:35:27', '2021-06-24 05:35:27'),
	(7, 'James', 'ideahubtester252020@gmail.com', NULL, '2', '$2y$10$P6R6opXRpX4QWitsV7qrj.tHU0AgiB4VLZ70adxxcD1p9LMd3BhxG', NULL, '2021-06-24 08:12:43', '2021-06-24 08:12:43'),
	(8, 'Jojie Subcriber', 'ideahub.testing7@gmail.com', NULL, '2', '$2y$10$IxTsTcxdL/rzGWErdRMvYOEJ8eUE8eUzOgadxUCkGpk/pgjwy9GVi', NULL, '2021-06-24 08:14:43', '2021-06-24 08:14:43'),
	(9, 'Marian Samanta', 'ideahubtester32020@gmail.com', NULL, '2', '$2y$10$mZx8C2GX4L9En7xFImt/aOgSknKCdLx0G//2YlINisJbGxuMcio6e', NULL, '2021-06-24 08:15:28', '2021-06-24 08:15:28'),
	(10, 'User name', 'use@gmail.com', NULL, '2', '$2y$10$hQs1n0Y1vVoXi3bPIoalnO2M3MupVPxL7X7SUdM9DxUfatlg7cuAy', NULL, '2021-07-03 02:43:48', '2021-07-03 02:43:48');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
