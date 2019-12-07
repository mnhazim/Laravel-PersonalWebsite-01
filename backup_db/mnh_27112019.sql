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

-- Dumping structure for table mnhazim.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mnhazim.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table mnhazim.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mnhazim.migrations: ~4 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(24, '2014_10_12_000000_create_users_table', 1),
	(25, '2014_10_12_100000_create_password_resets_table', 1),
	(26, '2019_08_19_000000_create_failed_jobs_table', 1),
	(27, '2019_11_17_115123_create_mnh_form_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table mnhazim.mnh_form
CREATE TABLE IF NOT EXISTS `mnh_form` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `urgent` int(11) DEFAULT '0',
  `status` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mnhazim.mnh_form: ~0 rows (approximately)
/*!40000 ALTER TABLE `mnh_form` DISABLE KEYS */;
/*!40000 ALTER TABLE `mnh_form` ENABLE KEYS */;

-- Dumping structure for table mnhazim.mnh_lookup_mst
CREATE TABLE IF NOT EXISTS `mnh_lookup_mst` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mnhazim.mnh_lookup_mst: ~4 rows (approximately)
/*!40000 ALTER TABLE `mnh_lookup_mst` DISABLE KEYS */;
REPLACE INTO `mnh_lookup_mst` (`id`, `title`, `created_at`, `updated_at`) VALUES
	(1, 'post-type', '2019-11-10 16:07:45', '2019-11-10 16:07:46'),
	(2, 'tech-link', '2019-11-10 16:07:48', '2019-11-10 16:07:49'),
	(4, 'status', '2019-11-10 09:18:02', '2019-11-11 13:04:15'),
	(5, 'Place', '2019-11-10 12:41:12', '2019-11-11 13:04:59');
/*!40000 ALTER TABLE `mnh_lookup_mst` ENABLE KEYS */;

-- Dumping structure for table mnhazim.mnh_lookup_var
CREATE TABLE IF NOT EXISTS `mnh_lookup_var` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_mst` bigint(20) unsigned NOT NULL,
  `code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mnh_lookup_var_id_mst_foreign` (`id_mst`),
  CONSTRAINT `mnh_lookup_var_id_mst_foreign` FOREIGN KEY (`id_mst`) REFERENCES `mnh_lookup_mst` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mnhazim.mnh_lookup_var: ~25 rows (approximately)
/*!40000 ALTER TABLE `mnh_lookup_var` DISABLE KEYS */;
REPLACE INTO `mnh_lookup_var` (`id`, `id_mst`, `code`, `title`, `second_title`, `desc`, `image`, `link`, `created_at`, `updated_at`) VALUES
	(1, 1, 'activity', 'Activity', 'Program, meeting, talk session, training and more.', NULL, '1573914230.png', NULL, '2019-11-15 22:32:16', '2019-11-15 14:23:50'),
	(2, 1, 'sharing', 'Sharing', 'Any Info, Code Snippet, Knowledge and Anything else.', NULL, '1573914251.png', NULL, NULL, '2019-11-16 14:24:11'),
	(3, 1, NULL, 'Portfolio', NULL, NULL, NULL, NULL, NULL, NULL),
	(4, 1, 'webDevelopment', 'Web Development', NULL, NULL, '1573901399.jpg', NULL, NULL, '2019-11-16 10:49:59'),
	(5, 1, 'InternetOfThings', 'Internet Of Things (IoT)', NULL, NULL, 'bg15.png', NULL, NULL, NULL),
	(6, 1, 'CyberSecurity', 'Cyber Security', NULL, NULL, 'bg17.png', NULL, NULL, NULL),
	(7, 1, 'Design', 'UI/UX Design', NULL, NULL, 'bg18.png', NULL, NULL, NULL),
	(8, 1, 'MobileApplication', 'Mobile Development', NULL, NULL, 'bg16.png', NULL, NULL, NULL),
	(14, 2, NULL, 'Bootstrap', NULL, NULL, '1573399874.png', 'https://getbootstrap.com/', '2019-11-10 15:30:26', '2019-11-10 15:31:14'),
	(15, 2, NULL, 'CSS3', NULL, NULL, '1573400443.png', 'https://en.wikipedia.org/wiki/Cascading_Style_Sheets', '2019-11-10 15:40:43', '2019-11-10 15:42:00'),
	(16, 2, NULL, 'HTML5', NULL, NULL, '1573400501.png', 'https://en.wikipedia.org/wiki/HTML5', '2019-11-10 15:41:41', '2019-11-10 15:41:41'),
	(17, 2, NULL, 'JQuery', NULL, NULL, '1573400572.png', 'https://en.wikipedia.org/wiki/JQuery', '2019-11-10 15:42:52', '2019-11-10 15:42:52'),
	(18, 2, NULL, 'Laravel 6', NULL, NULL, '1573400603.png', 'https://laravel.com/', '2019-11-10 15:43:23', '2019-11-10 15:43:23'),
	(19, 2, NULL, 'MySQL', NULL, NULL, '1573400649.png', 'https://www.mysql.com/', '2019-11-10 15:44:09', '2019-11-10 15:44:09'),
	(20, 2, NULL, 'PHP', NULL, NULL, '1573400675.png', 'https://www.php.net/', '2019-11-10 15:44:35', '2019-11-10 15:44:35'),
	(21, 2, NULL, 'Adobe Photoshop', NULL, NULL, '1573400721.png', 'https://www.photoshop.com/', '2019-11-10 15:45:21', '2019-11-10 15:45:21'),
	(22, 2, NULL, 'Sublime Text 3', NULL, NULL, '1573400752.png', 'https://www.sublimetext.com/', '2019-11-10 15:45:52', '2019-11-10 15:45:52'),
	(23, 2, NULL, 'Wordpress', NULL, NULL, '1573400793.png', 'https://wordpress.org/', '2019-11-10 15:46:33', '2019-11-10 15:46:33'),
	(24, 2, NULL, 'Adobe XD', NULL, NULL, '1573400841.png', 'https://www.adobe.com/sea/products/xd.html', '2019-11-10 15:47:21', '2019-11-10 15:47:21'),
	(25, 2, NULL, 'Adobe Illustrator', NULL, NULL, '1573400905.png', 'https://en.wikipedia.org/wiki/Adobe_Illustrator', '2019-11-10 15:48:25', '2019-11-10 15:48:25'),
	(26, 2, NULL, 'DaFont', NULL, NULL, '1573400936.png', 'https://www.dafont.com/', '2019-11-10 15:48:56', '2019-11-10 15:48:56'),
	(27, 2, NULL, 'FileZilla', NULL, NULL, '1573400957.png', 'https://filezilla-project.org/', '2019-11-10 15:49:17', '2019-11-10 15:49:17'),
	(28, 5, NULL, 'Politeknik Mersing', NULL, NULL, NULL, '#', '2019-11-11 13:05:14', '2019-11-11 13:05:14'),
	(29, 4, '1', 'Publish', NULL, NULL, NULL, '#', '2019-11-11 13:06:56', '2019-11-11 13:48:15'),
	(31, 4, '2', 'Unpublish', NULL, NULL, NULL, '#', '2019-11-11 13:49:15', '2019-11-11 13:49:15'),
	(32, 2, '', 'C', NULL, NULL, '1574443385.png', 'https://en.wikipedia.org/wiki/C_(programming_language)', '2019-11-22 17:23:05', '2019-11-22 17:23:05'),
	(33, 2, '', 'C++', NULL, NULL, '1574443416.png', 'https://en.wikipedia.org/wiki/C%2B%2B', '2019-11-22 17:23:36', '2019-11-22 17:23:36'),
	(34, 2, '', 'JS', NULL, NULL, '1574446547.jpg', 'https://en.wikipedia.org/wiki/JavaScript', '2019-11-22 18:15:47', '2019-11-22 18:15:47'),
	(35, 2, '', 'Genpro', NULL, NULL, '1574514283.png', '#', '2019-11-23 13:04:43', '2019-11-23 13:04:43'),
	(36, 2, '', 'Wow Js', NULL, NULL, '1574573272.jpg', 'https://wowjs.uk/', '2019-11-24 05:27:52', '2019-11-24 05:27:52');
/*!40000 ALTER TABLE `mnh_lookup_var` ENABLE KEYS */;

-- Dumping structure for table mnhazim.mnh_owner
CREATE TABLE IF NOT EXISTS `mnh_owner` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descwebsite` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `positions` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth` date DEFAULT NULL,
  `visitor` int(11) NOT NULL,
  `scndsub` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `remember_token` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mnhazim.mnh_owner: ~0 rows (approximately)
/*!40000 ALTER TABLE `mnh_owner` DISABLE KEYS */;
REPLACE INTO `mnh_owner` (`id`, `name`, `notel`, `email`, `title`, `descwebsite`, `position`, `positions`, `desc`, `address`, `username`, `password`, `birth`, `visitor`, `scndsub`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Muhamad Noor Hazim Mohamed Esa', '(+60) 16 7832 383', 'hazim@gmail.com', 'Hazim Esa', 'I choose Laravel(PHP Framework) to build this website because laravel is an open source and the most popular php framework in all requirement job.', 'Programmer', 'Web Developer,Web Designer,Frontend Developer,Graphic Designer', 'I\'m Hazim(23) from Bandar Penawar, Johor. I build this Customize Website using Laravel Framework, After I learn basic Laravel CRUD from any resources, I challenge my self to create one personal website and design the database structure to implement to this website simple content management system (CMS) using laravel', '', 'hazim@gmail.com', '$2y$10$gyZWGjjllG7rmoH4V/eiYuUKtBbbFyVvWxY4Pn1Ja6yFBsRFgPLY.', '1996-04-27', 1324, 'Hello Dev', '', NULL, NULL);
/*!40000 ALTER TABLE `mnh_owner` ENABLE KEYS */;

-- Dumping structure for table mnhazim.mnh_post
CREATE TABLE IF NOT EXISTS `mnh_post` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_var` bigint(20) unsigned NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `visitor` int(11) DEFAULT '0',
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mnh_post_id_var_foreign` (`id_var`),
  CONSTRAINT `mnh_post_id_var_foreign` FOREIGN KEY (`id_var`) REFERENCES `mnh_lookup_var` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mnhazim.mnh_post: ~0 rows (approximately)
/*!40000 ALTER TABLE `mnh_post` DISABLE KEYS */;
/*!40000 ALTER TABLE `mnh_post` ENABLE KEYS */;

-- Dumping structure for table mnhazim.mnh_quotes
CREATE TABLE IF NOT EXISTS `mnh_quotes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mnhazim.mnh_quotes: ~0 rows (approximately)
/*!40000 ALTER TABLE `mnh_quotes` DISABLE KEYS */;
REPLACE INTO `mnh_quotes` (`id`, `desc`, `from`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Make enough mistakes, any mistake is a wonderful revenue for you.', 'Jack Ma', '1', '2019-11-27 14:29:31', '2019-11-27 14:29:31'),
	(2, 'If you don\'t give up, you still have a chance to win. Giving up is a great failure.', 'Jack Ma', '1', '2019-11-27 14:30:54', '2019-11-27 14:30:54');
/*!40000 ALTER TABLE `mnh_quotes` ENABLE KEYS */;

-- Dumping structure for table mnhazim.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mnhazim.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table mnhazim.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table mnhazim.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
