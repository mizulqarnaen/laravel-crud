-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for laravel-crud
CREATE DATABASE IF NOT EXISTS `laravel-crud` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `laravel-crud`;

-- Dumping structure for table laravel-crud.customers
CREATE TABLE IF NOT EXISTS `customers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel-crud.customers: ~10 rows (approximately)
DELETE FROM `customers`;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` (`id`, `name`, `phone`, `email`, `address`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'Bartholome McGlynn', '1-248-752-8233', 'radams@example.com', '65447 Breitenberg Ferry\nCormierfurt, TN 68073-4806', 'Repellendus culpa culpa ut expedita. Minima doloremque voluptates itaque eos molestiae. Dicta quia exercitationem labore ipsum. Iure qui sit sunt provident. Eaque non ut nemo laboriosam quisquam mollitia minus est.', '2023-05-27 03:01:04', '2023-05-27 03:01:04'),
	(2, 'Prof. Shad Casper', '(360) 896-9469', 'kemmer.robin@example.org', '86290 Elody Junction\nWest Dorcasmouth, MA 02422', 'Alias ea aut dolorum rerum reiciendis velit. Ea aperiam aspernatur sint quae. Possimus qui rerum veritatis sed delectus perspiciatis. Laborum enim minus ut sequi voluptas repellendus velit et.', '2023-05-27 03:01:04', '2023-05-27 03:01:04'),
	(3, 'Marlen Leannon', '501-549-0504', 'prenner@example.com', '1109 Blick Trafficway\nNorth Beatrice, NM 55476-5824', 'Perspiciatis sed doloremque iure nihil ut repudiandae quas. Cupiditate corrupti veritatis optio sed repudiandae. Sunt eaque sunt quaerat vel debitis. Numquam aut tenetur ea sit qui et voluptatem.', '2023-05-27 03:01:04', '2023-05-27 03:01:04'),
	(4, 'Norbert Langworth', '1-848-593-6347', 'eldred60@example.com', '46069 Laney Dam Suite 721\nLake Keshaun, SD 45940', 'Dolor at totam doloremque dolor modi facere. Perspiciatis ducimus sint est neque hic fuga explicabo eum. Asperiores autem sit incidunt ad. Consequatur labore nisi eius deleniti.', '2023-05-27 03:01:04', '2023-05-27 03:01:04'),
	(5, 'Camila Schmeler', '517-754-4250', 'newton.corwin@example.com', '6540 Dickinson Station Suite 609\nPort Dorcasmouth, ME 70349-7300', 'Est dolor sunt in. Aliquam alias dolor ut. Id necessitatibus et ipsam est nesciunt.', '2023-05-27 03:01:04', '2023-05-27 03:01:04'),
	(6, 'Dr. Marcel Welch II', '708.253.8382', 'dina.okuneva@example.net', '242 Wiegand Field\nNew Robertstad, IA 73354-0908', 'Omnis ea asperiores magni voluptatibus modi exercitationem molestiae. Voluptatibus explicabo non ratione aut perferendis minus nesciunt. Placeat expedita sequi expedita.', '2023-05-27 03:01:04', '2023-05-27 03:01:04'),
	(7, 'Mr. Thurman Simonis V', '530.700.5511', 'abigale.wolf@example.com', '908 Jovan Key Suite 201\nClementineville, MT 33142', 'Est vel et molestias dolorem dolore. Deserunt ad ut dolores expedita possimus ut. Quos vel voluptas a ut temporibus nihil. Hic earum vel est recusandae et est excepturi. Ipsa odio ipsum voluptas dolorum qui.', '2023-05-27 03:01:04', '2023-05-27 03:01:04'),
	(8, 'Mr. Sammie Krajcik', '1-848-702-7451', 'windler.karson@example.com', '325 Hickle Overpass\nLake Destineefort, WY 10920', 'Et accusamus est omnis quia nihil non. Aut molestiae harum et quos consequuntur omnis. Et et doloremque quo et sed.', '2023-05-27 03:01:04', '2023-05-27 03:01:04'),
	(9, 'Travis Berge', '430-472-4179', 'marta91@example.net', '8876 O\'Kon Expressway\nNew Julia, ME 35062', 'Ad quo maiores natus qui. Excepturi rerum asperiores eveniet. Assumenda rem fuga enim velit.', '2023-05-27 03:01:04', '2023-05-27 03:01:04'),
	(10, 'Retha Kertzmann', '(661) 465-7112', 'christelle.littel@example.org', '51382 Tremblay Divide Suite 641\nCeasarmouth, IN 75334-9115', 'Voluptas assumenda molestiae nam reprehenderit molestias. Autem eos dolores ullam a quo. Quos sed saepe laboriosam ipsam sed dolor perferendis est.', '2023-05-27 03:01:04', '2023-05-27 03:01:04'),
	(11, 'Iqbal', NULL, NULL, NULL, NULL, '2023-05-27 03:21:56', '2023-05-27 03:21:56'),
	(12, '12312312', NULL, NULL, NULL, NULL, '2023-05-27 04:13:44', '2023-05-27 04:13:44'),
	(13, 'Mr Iqbal', NULL, NULL, NULL, NULL, '2023-05-27 04:20:55', '2023-05-27 04:20:55');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;

-- Dumping structure for table laravel-crud.failed_jobs
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

-- Dumping data for table laravel-crud.failed_jobs: ~0 rows (approximately)
DELETE FROM `failed_jobs`;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table laravel-crud.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel-crud.migrations: ~6 rows (approximately)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(13, '2014_10_12_000000_create_users_table', 1),
	(14, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(15, '2019_08_19_000000_create_failed_jobs_table', 1),
	(16, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(17, '2023_05_27_010444_create_customers_table', 1),
	(18, '2023_05_27_010503_create_transactions_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table laravel-crud.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel-crud.password_reset_tokens: ~0 rows (approximately)
DELETE FROM `password_reset_tokens`;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;

-- Dumping structure for table laravel-crud.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel-crud.personal_access_tokens: ~0 rows (approximately)
DELETE FROM `personal_access_tokens`;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table laravel-crud.transactions
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` bigint(20) unsigned NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_cost` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `source` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transactions_customer_id_foreign` (`customer_id`),
  CONSTRAINT `transactions_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel-crud.transactions: ~20 rows (approximately)
DELETE FROM `transactions`;
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
INSERT INTO `transactions` (`id`, `customer_id`, `payment_type`, `shipping_cost`, `total_amount`, `description`, `source`, `created_at`, `updated_at`) VALUES
	(1, 2, 'cash', 94781, 579027, 'Omnis et id quo sint labore aut. Id porro corporis velit non tempore doloremque at sed. Quas est aut id quia quo dolores omnis totam. Voluptatem nam provident ut.', 'marketplace', '2023-05-27 03:01:04', '2023-05-27 03:05:28'),
	(2, 4, 'cash', 98636, 946158, 'Commodi et quia quia enim. Officiis ea qui voluptatum accusamus nostrum blanditiis laborum. Voluptatem facilis necessitatibus maiores sit illo libero distinctio odio.', 'direct', '2023-05-27 03:01:04', '2023-05-27 03:01:04'),
	(3, 10, 'cash', 10211, 709576, 'Sunt quia veritatis nobis rem error. Cupiditate fugit non accusantium exercitationem.', 'website', '2023-05-27 03:01:04', '2023-05-27 03:01:04'),
	(4, 8, 'cash', 34084, 937633, 'Quasi earum temporibus maxime expedita dolor. Sit tempore sapiente natus ut omnis est. Fugit et aliquid natus corporis aut odio quam.', 'website', '2023-05-27 03:01:04', '2023-05-27 03:01:04'),
	(5, 5, 'transfer', 76841, 654601, 'Cum facere dolorem omnis quia. Dolores eum enim distinctio veniam eos.', 'direct', '2023-05-27 03:01:04', '2023-05-27 03:01:04'),
	(6, 2, 'cash', 59613, 118827, 'Illo sit qui expedita non. Eaque perferendis tempora quia dolore. Voluptas perspiciatis sint dolorem est deleniti dolor itaque soluta. Qui voluptate eum qui totam id consequatur.', 'direct', '2023-05-27 03:01:04', '2023-05-27 03:01:04'),
	(7, 8, 'cash', 11302, 494631, 'Ut qui id et repellat excepturi dolores. Qui soluta eius itaque iure. Molestiae rem enim sed tempora vitae consequatur saepe. Dolorem qui corrupti ut vel.', 'website', '2023-05-27 03:01:04', '2023-05-27 03:01:04'),
	(8, 1, 'cash', 41709, 354587, 'Voluptatem quo totam tempore ipsam vitae reprehenderit. Libero assumenda aut qui tempore quam illum dolorem. Quo et quia ut deserunt amet qui impedit.', 'website', '2023-05-27 03:01:04', '2023-05-27 03:01:04'),
	(9, 8, 'transfer', 42445, 915498, 'Ullam corrupti eos in et aut. Earum atque ut occaecati nulla totam odit. Ut tempora blanditiis earum sed.', 'marketplace', '2023-05-27 03:01:04', '2023-05-27 03:01:04'),
	(10, 3, 'cash', 70820, 652076, 'Molestiae totam voluptate doloribus quaerat nulla provident perferendis. Animi ullam perspiciatis et quis. Quia tenetur tempora enim sequi cupiditate commodi. Quo provident magni dignissimos minus dolorem eos temporibus.', 'marketplace', '2023-05-27 03:01:04', '2023-05-27 03:01:04'),
	(11, 8, 'cash', 66738, 977525, 'Quo odit ipsum animi est voluptatem. Laudantium inventore similique possimus rerum expedita. Sequi voluptas aut non ut quo.', 'direct', '2023-05-27 03:01:04', '2023-05-27 03:01:04'),
	(12, 10, 'transfer', 80696, 995710, 'Numquam beatae nihil quia. Vitae aut id est non autem et eos. Et quam amet dolore velit velit voluptatum dolor.', 'website', '2023-05-27 03:01:04', '2023-05-27 03:01:04'),
	(13, 3, 'cash', 99410, 279149, 'Quisquam numquam necessitatibus nam magnam temporibus voluptatem. Id eos impedit quasi nemo quo ipsa. Molestiae consectetur est est non ipsa doloribus. Labore odio cum ut hic maiores.', 'marketplace', '2023-05-27 03:01:04', '2023-05-27 03:01:04'),
	(14, 3, 'transfer', 55116, 428991, 'Qui atque sint deserunt voluptatem eius. Voluptatem et quae eos veritatis non corporis ipsa sed. Quod molestiae ea assumenda architecto repudiandae. Est quo consequatur aut id.', 'direct', '2023-05-27 03:01:04', '2023-05-27 03:01:04'),
	(15, 3, 'transfer', 92016, 842947, 'Reiciendis sit nesciunt sit qui aliquid dolorem autem. Qui cumque error et enim cumque quo. Pariatur sit quo voluptas quae et qui.', 'direct', '2023-05-27 03:01:04', '2023-05-27 03:01:04'),
	(16, 10, 'cash', 28636, 486025, 'Quia expedita odit eos inventore iusto. Et illum consectetur a quo est. Nihil et non delectus delectus placeat deleniti non doloremque.', 'website', '2023-05-27 03:01:04', '2023-05-27 03:01:04'),
	(17, 4, 'cash', 37913, 690359, 'Temporibus assumenda veritatis quam dignissimos nisi quas autem. Et inventore nostrum distinctio soluta non quae maiores consequatur. Doloribus quia est quia tempora voluptates.', 'marketplace', '2023-05-27 03:01:04', '2023-05-27 03:01:04'),
	(18, 1, 'transfer', 72706, 606960, 'Ab voluptates ea iste et iste rerum est corporis. Est a qui iusto. Quaerat eveniet maxime quibusdam nemo sit molestiae.', 'marketplace', '2023-05-27 03:01:04', '2023-05-27 03:01:04'),
	(19, 8, 'transfer', 77194, 338624, 'Qui omnis dolores praesentium ex. A delectus ut sunt consequatur et. Libero amet voluptate inventore occaecati omnis facere.', 'direct', '2023-05-27 03:01:04', '2023-05-27 03:01:04'),
	(20, 9, 'cash', 33643, 992174, 'Occaecati recusandae qui consequuntur non velit officia. Atque dolores beatae placeat nobis quae iste iste. Blanditiis cupiditate et omnis nulla esse nam dolorum.', 'marketplace', '2023-05-27 03:01:04', '2023-05-27 03:01:04'),
	(23, 13, 'cash', 15000, 350000, 'test update transaction', 'marketplace', '2023-05-27 04:20:55', '2023-05-27 04:22:55');
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;

-- Dumping structure for table laravel-crud.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel-crud.users: ~1 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$yYcalAy23DSA1tR6hKxw4OheqEYlKHs/HFoAM6wERwB72z9XTCqGC', NULL, '2023-05-27 03:01:04', '2023-05-27 03:01:04');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
