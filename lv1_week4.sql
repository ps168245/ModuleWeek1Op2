-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 26 nov 2021 om 17:06
-- Serverversie: 5.7.31
-- PHP-versie: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lv1_week4`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `albums`
--

DROP TABLE IF EXISTS `albums`;
CREATE TABLE IF NOT EXISTS `albums` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` year(4) DEFAULT NULL,
  `times_sold` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `albums`
--

INSERT INTO `albums` (`id`, `name`, `year`, `times_sold`, `created_at`, `updated_at`) VALUES
(1, 'Naam1', 2021, '1', '2021-11-26 08:38:11', '2021-11-26 08:38:11'),
(2, 'Naam2', 2021, '2', '2021-11-26 08:38:11', '2021-11-26 08:38:11'),
(3, 'Naam3', 2021, '3', '2021-11-26 08:38:11', '2021-11-26 08:38:11'),
(4, 'Naam4', 2021, '4', '2021-11-26 08:38:11', '2021-11-26 08:38:11'),
(5, 'Naam5', 2021, '5', '2021-11-26 08:38:11', '2021-11-26 08:38:11'),
(6, 'test', 2021, '25', '2021-11-26 11:52:44', '2021-11-26 12:01:25');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bands`
--

DROP TABLE IF EXISTS `bands`;
CREATE TABLE IF NOT EXISTS `bands` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `founded` year(4) DEFAULT NULL,
  `active_til` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'heden',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `bands`
--

INSERT INTO `bands` (`id`, `name`, `genre`, `founded`, `active_til`, `created_at`, `updated_at`) VALUES
(1, 'bandnaam1', 'genre1', 2021, '2022', '2021-11-26 08:38:11', '2021-11-26 08:38:11'),
(2, 'bandnaam2', 'genre2', 2021, '2022', '2021-11-26 08:38:11', '2021-11-26 08:38:11'),
(3, 'bandnaam3', 'genre3', 2021, '2022', '2021-11-26 08:38:11', '2021-11-26 08:38:11'),
(4, 'bandnaam12', 'genre1', 2021, '2022', '2021-11-26 10:46:47', '2021-11-26 10:46:47'),
(6, 'bandnaam15', 'genre1', 2021, '2022', '2021-11-26 10:47:31', '2021-11-26 10:47:31'),
(9, 'bandnaam130', 'genre1', 2021, '2022', '2021-11-26 10:49:35', '2021-11-26 11:28:04');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `failed_jobs`
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
-- Tabelstructuur voor tabel `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_06_074241_create_songs_table', 1),
(6, '2021_10_08_104650_create_songiezs_table', 2),
(7, '2021_11_26_081533_bands', 2),
(8, '2021_11_26_081553_albums', 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `password_resets`
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
-- Tabelstructuur voor tabel `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `songiezs`
--

DROP TABLE IF EXISTS `songiezs`;
CREATE TABLE IF NOT EXISTS `songiezs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `songs`
--

DROP TABLE IF EXISTS `songs`;
CREATE TABLE IF NOT EXISTS `songs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `singer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `songs`
--

INSERT INTO `songs` (`id`, `title`, `singer`, `created_at`, `updated_at`) VALUES
(1, 'Lied1', 'Artiest1', '2021-10-06 08:57:26', '2021-10-06 08:57:26'),
(2, 'Lied2', 'Artiest2', '2021-10-06 08:57:26', '2021-10-06 08:57:26'),
(3, 'Lied3', 'Artiest3', '2021-10-06 08:57:26', '2021-10-06 08:57:26'),
(4, 'Lied4', 'Artiest4', '2021-10-06 08:57:26', '2021-10-06 08:57:26'),
(43, 'Lied4', 'Artiest4', '2021-11-26 07:27:20', '2021-11-26 07:27:20'),
(44, 'Lied5', 'Artiest5', '2021-11-26 07:27:20', '2021-11-26 07:27:20'),
(45, 'Lied1', 'Artiest1', '2021-11-26 07:27:48', '2021-11-26 07:27:48'),
(46, 'Lied2', 'Artiest2', '2021-11-26 07:27:48', '2021-11-26 07:27:48'),
(34, 'Lied45', 'Artiest4', '2021-10-20 07:43:51', '2021-10-20 07:43:51'),
(35, 'Lied1', 'Artiest1', '2021-11-26 07:26:03', '2021-11-26 07:26:03'),
(36, 'Lied2', 'Artiest2', '2021-11-26 07:26:03', '2021-11-26 07:26:03'),
(37, 'Lied3', 'Artiest3', '2021-11-26 07:26:03', '2021-11-26 07:26:03'),
(38, 'Lied4', 'Artiest4', '2021-11-26 07:26:03', '2021-11-26 07:26:03'),
(39, 'Lied5', 'Artiest5', '2021-11-26 07:26:03', '2021-11-26 07:26:03'),
(40, 'Lied1', 'Artiest1', '2021-11-26 07:27:20', '2021-11-26 07:27:20'),
(41, 'Lied2', 'Artiest2', '2021-11-26 07:27:20', '2021-11-26 07:27:20'),
(42, 'Lied3', 'Artiest3', '2021-11-26 07:27:20', '2021-11-26 07:27:20'),
(47, 'Lied3', 'Artiest3', '2021-11-26 07:27:48', '2021-11-26 07:27:48'),
(48, 'Lied4', 'Artiest4', '2021-11-26 07:27:48', '2021-11-26 07:27:48'),
(49, 'Lied5', 'Artiest5', '2021-11-26 07:27:48', '2021-11-26 07:27:48'),
(51, 'Lied2', 'Artiest2', '2021-11-26 07:28:35', '2021-11-26 07:28:35'),
(52, 'Lied3', 'Artiest3', '2021-11-26 07:28:35', '2021-11-26 07:28:35'),
(53, 'Lied4', 'Artiest4', '2021-11-26 07:28:35', '2021-11-26 07:28:35'),
(54, 'Lied5', 'Artiest5', '2021-11-26 07:28:35', '2021-11-26 07:28:35'),
(55, 'Lied1', 'Artiest1', '2021-11-26 07:38:11', '2021-11-26 07:38:11'),
(56, 'Lied2', 'Artiest2', '2021-11-26 07:38:11', '2021-11-26 07:38:11'),
(57, 'Lied3', 'Artiest3', '2021-11-26 07:38:11', '2021-11-26 07:38:11'),
(58, 'Lied4', 'Artiest4', '2021-11-26 07:38:11', '2021-11-26 07:38:11'),
(59, 'Lied5', 'Artiest5', '2021-11-26 07:38:11', '2021-11-26 07:38:11');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
