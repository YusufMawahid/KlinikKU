-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2017 at 05:01 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinikku`
--

-- --------------------------------------------------------

--
-- Table structure for table `inputkeluhan`
--

CREATE TABLE `inputkeluhan` (
  `id` int(10) UNSIGNED NOT NULL,
  `TD` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `N` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `R` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `S` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BB` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TB` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keluhan_utama` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `anamnesis` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pemeriksaan_fisik` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hasil_penunjang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diagnosis` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tindakan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `saran` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `inputkeluhan`
--

INSERT INTO `inputkeluhan` (`id`, `TD`, `N`, `R`, `S`, `BB`, `TB`, `keluhan_utama`, `anamnesis`, `pemeriksaan_fisik`, `hasil_penunjang`, `diagnosis`, `tindakan`, `saran`, `created_at`, `updated_at`) VALUES
(17, NULL, 'sudah_periksa', NULL, NULL, NULL, NULL, 'alsdk', 'lasd', 'alkdj', 'lasdj', NULL, 'Suntik demam berdarah', 'lkajsd', '2017-02-08 17:57:07', '2017-02-08 17:57:07');

-- --------------------------------------------------------

--
-- Table structure for table `kalenderkb`
--

CREATE TABLE `kalenderkb` (
  `id` int(10) UNSIGNED NOT NULL,
  `pilihan_suntik` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tanggal_suntik` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tanggal_kembali` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kalenderkb`
--

INSERT INTO `kalenderkb` (`id`, `pilihan_suntik`, `tanggal_suntik`, `tanggal_kembali`, `created_at`, `updated_at`) VALUES
(1, '1 Bulan', '02/22/2017', '03/22/2017', '2017-02-08 00:16:36', '2017-02-08 00:16:36');

-- --------------------------------------------------------

--
-- Table structure for table `kasir`
--

CREATE TABLE `kasir` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(99, '2014_10_12_000000_create_users_table', 1),
(100, '2014_10_12_100000_create_password_resets_table', 1),
(101, '2017_01_10_081030_create_inputkeluhan_table', 1),
(102, '2017_01_10_081259_create_kalenderkb_table', 1),
(103, '2017_01_10_093106_create_obat_table', 1),
(104, '2017_01_11_015152_create_persalinan_table', 1),
(105, '2017_01_18_030702_create_kasir_table', 1),
(106, '2017_01_20_071003_create_tarif_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_obat_merk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama_obat_generik` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kandungan_obat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `golongan_obat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tanggal_beli` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tanggal_kadaluarsa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `harga_beli` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `harga_jual` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jumlah` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `nama_obat_merk`, `nama_obat_generik`, `kandungan_obat`, `golongan_obat`, `tanggal_beli`, `tanggal_kadaluarsa`, `harga_beli`, `harga_jual`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 'Obat batuk', 'Comic', NULL, 'Obat', '02/07/2017', '02/25/2017', '3000____', '4000____', '200_____', '2017-02-07 17:19:44', '2017-02-07 17:19:44'),
(2, 'Obat pilek', 'Obat Obatan', NULL, 'Obat', '02/07/2017', '02/17/2017', '10000___', '1000____', '1000____', '2017-02-08 00:32:11', '2017-02-08 00:32:11');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `persalinan`
--

CREATE TABLE `persalinan` (
  `id` int(10) UNSIGNED NOT NULL,
  `tanggal_hpht` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `taksiran_persalinan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `persalinan`
--

INSERT INTO `persalinan` (`id`, `tanggal_hpht`, `taksiran_persalinan`, `created_at`, `updated_at`) VALUES
(1, '02/28/2017', '11/28/2017', '2017-02-08 00:11:36', '2017-02-08 00:11:36'),
(2, '02/23/2017', '11/23/2017', '2017-02-08 00:28:50', '2017-02-08 00:28:50');

-- --------------------------------------------------------

--
-- Table structure for table `tarif`
--

CREATE TABLE `tarif` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_tarif` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `klinik` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dokter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `asisten` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bhp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jumlah_total` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tarif`
--

INSERT INTO `tarif` (`id`, `nama_tarif`, `klinik`, `dokter`, `asisten`, `bhp`, `jumlah_total`, `created_at`, `updated_at`) VALUES
(1, 'Suntik demam berdarah', 'Rp. 1000____', 'Rp. 10000___', 'Rp. 2000____', 'Rp. 3000____', '16000', '2017-02-07 17:20:45', '2017-02-07 17:20:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `roles` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `medrec` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tgl_lahir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pekerjaan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `penanggung_jawab` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jenis_pendaftaran` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dokter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `roles`, `medrec`, `tgl_lahir`, `alamat`, `jenis_kelamin`, `no_hp`, `pekerjaan`, `penanggung_jawab`, `jenis_pendaftaran`, `dokter`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Yusuf Mawahid', 'master', '8273', NULL, 'Jln.SMEA 6', NULL, '(081) 124-9081', NULL, NULL, NULL, NULL, 'master', '$2y$10$EEn.biyo9n.McFMCPsk54OuSIcSjHrH5gGvm77/ILiDdpwfyfW.i.', '80VUjGc1x7NieSqBJxHTElfHIiIi6oPw2UoWbWVU0ejX2cpXPYYfIbEsAiLV', NULL, '2017-02-08 00:37:26'),
(2, 'Yusuf', 'kasir', '9773', NULL, 'Jln Jalan Jalan', NULL, '(089) 983-9081', NULL, NULL, NULL, NULL, 'kasir', '$2y$10$dqRXbMbU1N5pC3soT0XuJ.BccP39sxUkMcdMkaoMxnoJkZJTiSobu', 'QmtYo6QlVk1t9qihoWB2n5iFShHOXJVk7okqD7LKTsZZi1KCaEI6SoPyAsII', NULL, '2017-02-08 18:03:54'),
(3, 'Wahid', 'dokter', '1022', NULL, 'Jln Jalan Jalan', NULL, '(085) 123-8392', NULL, NULL, NULL, NULL, 'dokter', '$2y$10$PLwl/XSGmFYyHO5JcOXndOmHhjEhtTFB1I0xLh2JQ85cbBz37A4q.', 'fYS7mTL98fWbmMKF72y8fnxW4WdxMIx4KXvt5MV0Z3KqHyg9WqkqHQTk9QJq', NULL, '2017-02-08 19:13:32'),
(4, 'Yusuf Mawahid', NULL, '8614', '02/05/1999', 'Jalan SMEA 6', 'Pria', '(021) 380-9138', 'Pelajar', NULL, NULL, NULL, NULL, NULL, NULL, '2017-02-07 07:36:29', '2017-02-07 07:36:29'),
(5, 'Meiranti Andriyani', 'pasien', '5711', '02/01/1999', 'Jalan SMEA 7', 'Wanita', '(087) 813-7828', 'Pelajar', NULL, NULL, '3', NULL, NULL, NULL, '2017-02-07 07:37:44', '2017-02-07 07:38:35'),
(6, 'Muhammad Taufik', 'pasien', '2753', '12/24/2005', 'Jalan SMEA 8', 'Pria', '(021) 838-1378', 'Pelajar', NULL, NULL, '12', NULL, NULL, NULL, '2017-02-07 23:15:30', '2017-02-07 23:51:23'),
(7, 'Budi Luhur', NULL, '1791', '08/25/1999', 'Jalan Jalan', 'Pria', '(081) 271-8721', 'Wiraswasta', NULL, NULL, NULL, NULL, NULL, NULL, '2017-02-07 23:16:14', '2017-02-07 23:16:14'),
(8, 'Raisya', NULL, '9760', '01/31/2010', 'Jalan Jalan', 'Wanita', '(081) 230-8130', 'Pelajar', NULL, NULL, NULL, NULL, NULL, NULL, '2017-02-07 23:42:46', '2017-02-07 23:42:46'),
(9, 'Nur', NULL, '8281', '02/16/1979', 'Jalan SMEA 10', 'Wanita', '(021) 903-8091', 'Ibu rumah tangga', NULL, NULL, NULL, NULL, NULL, NULL, '2017-02-07 23:44:38', '2017-02-07 23:44:38'),
(10, 'Hayati', NULL, '7335', '01/30/1982', 'Jalan SMEA 11', 'Wanita', '(081) 209-3813', 'Kantoran', NULL, NULL, NULL, NULL, NULL, NULL, '2017-02-07 23:45:13', '2017-02-07 23:45:13'),
(11, 'Riski', NULL, '2557', '01/31/1999', 'Jalan SMEA 12', 'Pria', '(085) 103-8028', 'Pelajar', NULL, NULL, NULL, NULL, NULL, NULL, '2017-02-07 23:45:45', '2017-02-07 23:45:45'),
(12, 'Yusuf Mawahid', 'dokter', '9720', '02/16/1999', 'Jalan Sumatra nari', NULL, '(083) 123-9081', NULL, NULL, NULL, NULL, 'dokter_yusuf', '$2y$10$hu5i8LZ5fTwciuG8kyhmn.edVq1Qiy.xsD5KfQI9oTsKm35sNMbOG', 'XR7uNoAlhKjDVUBJ4hAPSFnEpmlEgujAuzTlcE2oSckJxeWHqj7AWa2QbWrb', '2017-02-07 23:46:53', '2017-02-08 00:24:36'),
(13, 'Asep', 'pasien', '1161', '02/02/1999', 'Jalan buah', 'Pria', '(021) 813-0308', 'Pelajar', NULL, NULL, '12', NULL, NULL, NULL, '2017-02-08 00:25:10', '2017-02-08 00:25:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inputkeluhan`
--
ALTER TABLE `inputkeluhan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kalenderkb`
--
ALTER TABLE `kalenderkb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `persalinan`
--
ALTER TABLE `persalinan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inputkeluhan`
--
ALTER TABLE `inputkeluhan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `kalenderkb`
--
ALTER TABLE `kalenderkb`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kasir`
--
ALTER TABLE `kasir`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `persalinan`
--
ALTER TABLE `persalinan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tarif`
--
ALTER TABLE `tarif`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
