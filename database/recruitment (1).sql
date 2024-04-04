-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 04, 2024 at 08:35 AM
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
-- Database: `recruitment`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_16_170610_php_artisan_migrate', 1),
(6, '2024_04_01_174911_create_tbl_biodata', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `tbl_biodata`
--

CREATE TABLE `tbl_biodata` (
  `id` bigint UNSIGNED NOT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_ktp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_pernikahan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_akun_sosmed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username_akun` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pengalaman_kerja` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sertifikat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_ktp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_skck` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_sertifikat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_biodata`
--

INSERT INTO `tbl_biodata` (`id`, `google_id`, `no_ktp`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `status_pernikahan`, `agama`, `jenis_akun_sosmed`, `username_akun`, `pendidikan`, `pengalaman_kerja`, `sertifikat`, `foto_ktp`, `foto_skck`, `foto_sertifikat`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '113671320457535195689', '1215125', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N', NULL, '2024-04-01 22:22:28', '2024-04-01 22:22:28'),
(2, '111957024666754650623', '032423945', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N', NULL, '2024-04-01 23:05:20', '2024-04-01 23:05:20'),
(4, '102830888482575021146', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N', NULL, '2024-04-04 01:33:40', '2024-04-04 01:33:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_refresh_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noTelepon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `google_id`, `google_token`, `google_refresh_token`, `name`, `noTelepon`, `email`, `email_verified_at`, `password`, `role`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, '111957024666754650623', 'ya29.a0Ad52N38XUKAeIsmYI3tXuXokzTUcImTBJQYW3yX9LGJIK0JB7sqWyElifb5LUsuJKOC2XYewflqQ1jkcgN3dcFxhZgVuMWtmDNHqZEfhKOjxX4x1NITEozLM2k5K0gi5V_TKffELCpNeu7eaq-j7DUig8aqORCrONawaCgYKATwSARASFQHGX2MiqkZf3B5_4NlpPLbt_SwnMw0170', NULL, 'Twins Dexs', '085624934055', 'twinsdexs@gmail.com', NULL, '$2y$12$gp0NvsPhUFevQki2NXHMU.ajy/2TylvYUSeTkwwr1.9EFJVLyYZnW', 'person', 'https://lh3.googleusercontent.com/a/ACg8ocJofnj-PXtHb5d6P5lwFDjxClahyzbv689qmX7MziN7=s96-c', NULL, '2024-04-01 23:05:20', '2024-04-01 23:05:20'),
(5, '113671320457535195689', 'ya29.a0Ad52N39DcVpzgN-N6CDv9rM3oQETPK7KSJYMgplNs-ZJR4qcM7x8XwCr6qIkz22ZvBut4rJCM3rfZdlqidz_XY3_BvLJtXQqWhMYnFtNcwY48gXKm5UFt-qQyui72OmzJ194Pm8FNvnAvGsJGvR9mLNG6NjmVVDt-V0aCgYKAfgSARASFQHGX2MiVS3eZByfufX81zGlC5cINA0170', NULL, 'Casmad Casmadi', NULL, 'casmadcasmadi604@gmail.com', NULL, '$2y$12$4vfDVKI6wswdrawZlek4aewFnl9LHFdGx5Kf01ZRpZ6qwIxDiaCv2', 'admin', 'https://lh3.googleusercontent.com/a/ACg8ocKx_FzDEtq5XVcfwG8v-N4wx_5syvrXOHrhauYkOcm4=s96-c', NULL, '2024-04-01 23:19:17', '2024-04-01 23:19:17'),
(6, '102830888482575021146', 'ya29.a0Ad52N39xqGSdALTVBu-vWT6qiHnbmm2OSnTmU7PXdbc46zsKjbuI0bP5lq_mVJi31JNr0jUN8FzHTlYWDWEHLrSskbtlW7iQOhbzE33VgHSu3HitXt6I8c6RLdMbyk_NoSKOZP-w1YnFZsAKsawnUBdsDJV4dRBNmRIaCgYKAScSARESFQHGX2Mi75Y0lhXwdCozrZ2EkcK3uQ0170', NULL, 'Adly Dhy', NULL, 'adlydhy92@gmail.com', NULL, '$2y$12$nbAxP5UUrEYwuqwxlQ2VeeySIFcPVTBR2GMezVj746eSWcU.nT4n.', 'person', 'https://lh3.googleusercontent.com/a/ACg8ocLIK5hcJhCs_IDuYJPc3SVV9XNp9Hgb-LfS3JhFdX7sjvPfpkw=s96-c', NULL, '2024-04-04 01:33:40', '2024-04-04 01:33:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tbl_biodata`
--
ALTER TABLE `tbl_biodata`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tbl_biodata_google_id_unique` (`google_id`),
  ADD UNIQUE KEY `tbl_biodata_no_ktp_unique` (`no_ktp`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_notelepon_unique` (`noTelepon`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_biodata`
--
ALTER TABLE `tbl_biodata`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
