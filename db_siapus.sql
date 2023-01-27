-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2022 at 08:11 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siapus`
--

-- --------------------------------------------------------

--
-- Table structure for table `antreans`
--

CREATE TABLE `antreans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor_antrean` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomer` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_puskesmas` bigint(20) UNSIGNED NOT NULL,
  `id_poli` bigint(20) UNSIGNED NOT NULL,
  `id_pasien` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `antreans`
--

INSERT INTO `antreans` (`id`, `nomor_antrean`, `nomer`, `status`, `id_puskesmas`, `id_poli`, `id_pasien`, `created_at`, `updated_at`) VALUES
(12, 'A0001', 1, 'Menunggu', 1, 1, 16, '2022-12-18 20:51:52', '2022-12-18 20:51:52'),
(13, 'B0001', 1, 'Menunggu', 1, 2, 17, '2022-12-18 20:56:57', '2022-12-18 20:56:57'),
(14, 'C0001', 1, 'Menunggu', 1, 3, 18, '2022-12-18 20:57:31', '2022-12-18 20:57:31'),
(15, 'A0001', 1, 'Menunggu', 2, 4, 19, '2022-12-18 22:03:59', '2022-12-18 22:03:59');

-- --------------------------------------------------------

--
-- Table structure for table `desas`
--

CREATE TABLE `desas` (
  `id_desa` bigint(20) UNSIGNED NOT NULL,
  `id_kecamatan` bigint(20) UNSIGNED NOT NULL,
  `nama_desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `desas`
--

INSERT INTO `desas` (`id_desa`, `id_kecamatan`, `nama_desa`, `created_at`, `updated_at`) VALUES
(8, 1, 'Kelurahan Sobo', NULL, NULL),
(9, 1, 'Kelurahan Kertosari', NULL, NULL),
(10, 1, 'Kelurahan Singotrunan', NULL, NULL),
(11, 3, 'Desa Blimbingsari', NULL, NULL),
(12, 3, 'Desa Badean', NULL, NULL),
(13, 3, 'Desa Watukebo', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kabupatens`
--

CREATE TABLE `kabupatens` (
  `id_kab` bigint(20) UNSIGNED NOT NULL,
  `id_prov` bigint(20) UNSIGNED NOT NULL,
  `nama_kab` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kabupatens`
--

INSERT INTO `kabupatens` (`id_kab`, `id_prov`, `nama_kab`, `created_at`, `updated_at`) VALUES
(1, 1, 'Kabupaten Banyuwangi', NULL, NULL),
(2, 1, 'Kabupaten Jember', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kecamatans`
--

CREATE TABLE `kecamatans` (
  `id_kec` bigint(20) UNSIGNED NOT NULL,
  `id_kabupaten` bigint(20) UNSIGNED NOT NULL,
  `nama_kec` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kecamatans`
--

INSERT INTO `kecamatans` (`id_kec`, `id_kabupaten`, `nama_kec`, `created_at`, `updated_at`) VALUES
(1, 1, 'Kecamatan Banyuwangi', NULL, NULL),
(3, 1, 'Kecamatan Blimbingsari', NULL, NULL);

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_13_060831_create_puskesmas_table', 1),
(6, '2022_12_13_063623_create_polis_table', 1),
(7, '2022_12_13_065113_create_pasiens_table', 1),
(8, '2022_12_13_065253_create_antreans_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pasiens`
--

CREATE TABLE `pasiens` (
  `id_pasien` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pasien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_puskesmas` bigint(20) UNSIGNED NOT NULL,
  `id_poli` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pasiens`
--

INSERT INTO `pasiens` (`id_pasien`, `nik`, `nama_pasien`, `provinsi`, `kabupaten`, `kecamatan`, `kelurahan`, `alamat`, `id_puskesmas`, `id_poli`, `created_at`, `updated_at`) VALUES
(16, '3512345678902223', 'Jamaludin Rumi', '1', '1', '1', '8', 'Banyuwangi', 1, 1, '2022-12-18 20:51:52', '2022-12-18 20:51:52'),
(17, '3520151432323342', 'Dana', '1', '1', '1', '9', 'Banyuwangi', 1, 2, '2022-12-18 20:56:57', '2022-12-18 20:56:57'),
(18, '3456789065439876', 'Gus Ris', '1', '1', '1', '10', 'Banyuwangi', 1, 3, '2022-12-18 20:57:30', '2022-12-18 20:57:30'),
(19, '3510131409020006', 'Bagus Aris Pradana', '1', '1', '3', '11', 'DSN. TEGAL WERO, RT/RW : 002/001, Desa : BLIMBINGSARI', 2, 4, '2022-12-18 22:03:59', '2022-12-18 22:03:59');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `polis`
--

CREATE TABLE `polis` (
  `id_poli` bigint(20) UNSIGNED NOT NULL,
  `kode_poli` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_puskesmas` bigint(20) UNSIGNED NOT NULL,
  `nama_poli` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_poli` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_poli` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `polis`
--

INSERT INTO `polis` (`id_poli`, `kode_poli`, `id_puskesmas`, `nama_poli`, `deskripsi_poli`, `logo_poli`, `created_at`, `updated_at`) VALUES
(1, 'A', 1, 'POLI UMUM', 'Poli umum merupakan salah satu dari jenis layanan di Puskesmas yang memberikan pelayanan kedokteran berupa pemeriksaan kesehatan, pengobatan dan penyuluhan kepada pasien atau masyarakat, serta meningkatkan pengetahuan dan kesadaran masyarakat dalam bidang kesehatan.', 'UMUM.png', NULL, NULL),
(2, 'B', 1, 'POLI KIA', 'Poli KIA adalah jenis layanan di Puskesmas yang memberikan pelayanan ibu hamil, ibu bersalin, imunisasi, pengobatan bayi dan balita, kesehatan reproduksi remaja termasuk calon pengantin, pelayanan pil KB dan implan.', 'KIA.png', NULL, NULL),
(3, 'C', 1, 'POLI GIGI', 'Poli Gigi adalah jenis layanan di Puskesmas yang memberikan pelayanan seputar kesehatan mulut dan gigi berupa pemeriksaan kesehatan gigi dan mulut, pengobatan dan pemberian tindakan medis dasar kesehatan gigi dan mulut seperti penambalan gigi, pencabutan gigi dan pembersihan karang gigi.', 'GIGI.png', NULL, NULL),
(4, 'A', 2, 'POLI UMUM', 'Poli umum merupakan salah satu dari jenis layanan di Puskesmas yang memberikan pelayanan kedokteran berupa pemeriksaan kesehatan, pengobatan dan penyuluhan kepada pasien atau masyarakat, serta meningkatkan pengetahuan dan kesadaran masyarakat dalam bidang kesehatan.', 'UMUM.png', NULL, NULL),
(5, 'B', 2, 'POLI KIA', 'Poli KIA adalah jenis layanan di Puskesmas yang memberikan pelayanan ibu hamil, ibu bersalin, imunisasi, pengobatan bayi dan balita, kesehatan reproduksi remaja termasuk calon pengantin, pelayanan pil KB dan implan.', 'KIA.png', NULL, NULL),
(6, 'C', 2, 'POLI GIGI', 'Poli Gigi adalah jenis layanan di Puskesmas yang memberikan pelayanan seputar kesehatan mulut dan gigi berupa pemeriksaan kesehatan gigi dan mulut, pengobatan dan pemberian tindakan medis dasar kesehatan gigi dan mulut seperti penambalan gigi, pencabutan gigi dan pembersihan karang gigi.', 'GIGI.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `provinsis`
--

CREATE TABLE `provinsis` (
  `id_prov` bigint(20) UNSIGNED NOT NULL,
  `nama_prov` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provinsis`
--

INSERT INTO `provinsis` (`id_prov`, `nama_prov`, `created_at`, `updated_at`) VALUES
(1, 'Jawa Timur', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `puskesmas`
--

CREATE TABLE `puskesmas` (
  `id_puskesmas` bigint(20) UNSIGNED NOT NULL,
  `nama_puskesmas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_puskesmas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp_puskesmas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_puskesmas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_puskesmas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_kerja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `puskesmas`
--

INSERT INTO `puskesmas` (`id_puskesmas`, `nama_puskesmas`, `email_puskesmas`, `telp_puskesmas`, `alamat_puskesmas`, `foto_puskesmas`, `jam_kerja`, `created_at`, `updated_at`) VALUES
(1, 'PUSKESMAS SOBO', 'sobopkm@gmail.com', '(0333)-421779 / 082337117822', 'Jalan Adi Sucipto no. 137, Banyuwangi, 68418', 'sobo.jpg', 'Senin - Kamis\r\n  07.00 - 15.30 WIB\r\nJum\'at\r\n  07.00 - 15.00 WIB\r\nSabtu & Minggu\r\n  Libur', NULL, NULL),
(2, 'PUSKESMAS BADEAN', 'pkm_badean@gmail.com', '0333-098-0009', 'Jalan Bandara Blimbingsari Nomor 09 Badean Blimbingsari Banyuwangi', 'badean.jpeg', 'Senin - Kamis\r\n  07.00 - 15.30 WIB\r\nJum\'at\r\n  07.00 - 15.00 WIB\r\nSabtu & Minggu\r\n  Libur', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antreans`
--
ALTER TABLE `antreans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `antreans_id_puskesmas_foreign` (`id_puskesmas`),
  ADD KEY `antreans_id_poli_foreign` (`id_poli`),
  ADD KEY `antreans_id_pasien_foreign` (`id_pasien`);

--
-- Indexes for table `desas`
--
ALTER TABLE `desas`
  ADD PRIMARY KEY (`id_desa`),
  ADD KEY `desas_id_kec_foreign` (`id_kecamatan`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kabupatens`
--
ALTER TABLE `kabupatens`
  ADD PRIMARY KEY (`id_kab`),
  ADD KEY `kabupatens_id_prov_foreign` (`id_prov`);

--
-- Indexes for table `kecamatans`
--
ALTER TABLE `kecamatans`
  ADD PRIMARY KEY (`id_kec`),
  ADD KEY `kecamatans_id_kab_foreign` (`id_kabupaten`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasiens`
--
ALTER TABLE `pasiens`
  ADD PRIMARY KEY (`id_pasien`),
  ADD KEY `pasiens_id_puskesmas_foreign` (`id_puskesmas`),
  ADD KEY `pasiens_id_poli_foreign` (`id_poli`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `polis`
--
ALTER TABLE `polis`
  ADD PRIMARY KEY (`id_poli`),
  ADD KEY `polis_id_puskesmas_foreign` (`id_puskesmas`);

--
-- Indexes for table `provinsis`
--
ALTER TABLE `provinsis`
  ADD PRIMARY KEY (`id_prov`);

--
-- Indexes for table `puskesmas`
--
ALTER TABLE `puskesmas`
  ADD PRIMARY KEY (`id_puskesmas`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antreans`
--
ALTER TABLE `antreans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `desas`
--
ALTER TABLE `desas`
  MODIFY `id_desa` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kabupatens`
--
ALTER TABLE `kabupatens`
  MODIFY `id_kab` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kecamatans`
--
ALTER TABLE `kecamatans`
  MODIFY `id_kec` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pasiens`
--
ALTER TABLE `pasiens`
  MODIFY `id_pasien` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `polis`
--
ALTER TABLE `polis`
  MODIFY `id_poli` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `provinsis`
--
ALTER TABLE `provinsis`
  MODIFY `id_prov` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `puskesmas`
--
ALTER TABLE `puskesmas`
  MODIFY `id_puskesmas` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `antreans`
--
ALTER TABLE `antreans`
  ADD CONSTRAINT `antreans_id_pasien_foreign` FOREIGN KEY (`id_pasien`) REFERENCES `pasiens` (`id_pasien`),
  ADD CONSTRAINT `antreans_id_poli_foreign` FOREIGN KEY (`id_poli`) REFERENCES `polis` (`id_poli`),
  ADD CONSTRAINT `antreans_id_puskesmas_foreign` FOREIGN KEY (`id_puskesmas`) REFERENCES `puskesmas` (`id_puskesmas`);

--
-- Constraints for table `pasiens`
--
ALTER TABLE `pasiens`
  ADD CONSTRAINT `pasiens_id_poli_foreign` FOREIGN KEY (`id_poli`) REFERENCES `polis` (`id_poli`),
  ADD CONSTRAINT `pasiens_id_puskesmas_foreign` FOREIGN KEY (`id_puskesmas`) REFERENCES `puskesmas` (`id_puskesmas`);

--
-- Constraints for table `polis`
--
ALTER TABLE `polis`
  ADD CONSTRAINT `polis_id_puskesmas_foreign` FOREIGN KEY (`id_puskesmas`) REFERENCES `puskesmas` (`id_puskesmas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
