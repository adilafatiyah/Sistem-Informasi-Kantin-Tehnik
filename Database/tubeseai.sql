-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12 Des 2018 pada 15.38
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubeseai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kedaitable`
--

CREATE TABLE `kedaitable` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kedaitable`
--

INSERT INTO `kedaitable` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'ko 1', '2018-12-02 06:21:50', '2018-12-02 06:22:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menutable`
--

CREATE TABLE `menutable` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_menu` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `menutable`
--

INSERT INTO `menutable` (`id`, `nama_menu`, `harga_menu`, `created_at`, `updated_at`) VALUES
(2, 'nasi goreng gila', 12500, '2018-12-09 20:03:54', '2018-12-09 20:10:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(3, '2018_10_11_112206_create_social_accounts_table', 2),
(4, '2018_11_07_143117_create__menu_table_table', 2),
(5, '2018_11_07_143332_create__minuman_table_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `minumantable`
--

CREATE TABLE `minumantable` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_minuman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_minuman` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `social_accounts`
--

CREATE TABLE `social_accounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `provider_user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `social_accounts`
--

INSERT INTO `social_accounts` (`id`, `user_id`, `provider_user_id`, `provider`, `created_at`, `updated_at`) VALUES
(1, 3, '101284696140695369807', 'google', '2018-11-08 07:06:37', '2018-11-08 07:06:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `total` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `nama`, `total`, `created_at`, `updated_at`) VALUES
(1, 'ko 1', 56, '2018-12-10 05:17:44', '2018-12-10 05:17:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksikedai`
--

CREATE TABLE `transaksikedai` (
  `id` int(11) DEFAULT NULL,
  `id_menu` int(255) NOT NULL,
  `id_kedai` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acces` int(255) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `acces`, `password`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Adylla CFatyah', 'baekadelle@gmail.com', 1, NULL, 'https://graph.facebook.com/v3.0/2134856813432520/picture?type=normal', 'y1NiOodhFS43Ac1IY0HGXnUWHBo7mQqRfwsquzkmCLLAZyIRskV8YrJfClFk', '2018-10-11 04:53:37', '2018-10-11 18:27:22'),
(2, 'adila chusnul', 'adilachusnul@gmail.com', 1, NULL, 'https://lh3.googleusercontent.com/-FinL6glLlcQ/AAAAAAAAAAI/AAAAAAAAAAA/AAN31DUv4CDRKdtFvkXRS2SEcRDg4LpCLw/mo/photo.jpg?sz=50', 'LY6hpuKwBwZ1zHJPbysLHyBBgI1Pl60LfjbNhZbbdDc4Q5nR9rXutcJiaSzh', '2018-10-11 18:27:56', '2018-10-11 18:27:56'),
(3, 'adila fatyah', 'adilafatyah@gmail.com', 1, NULL, 'https://lh4.googleusercontent.com/-DP3s9UhJ29Y/AAAAAAAAAAI/AAAAAAAAACI/kRAe-_Dnikw/photo.jpg?sz=50', 'DVVRYyEPB3Z9SCG66rIbFnP41f1TYbFGGKgr3uPbs7usP6HCvwxSMn4GhqTv', '2018-10-11 23:19:57', '2018-10-11 23:19:57'),
(4, 'adila', 'aruanaru3@gmail.com', 0, '$2y$10$Fl6VJKOZWMckoJt3UL8r9O0gWfV4Fag7MVv4mLX5JXX8Q/BWHUauO', NULL, 'sl7FMCjEOAxcV7jL1kAt7VFuw2QPEY6xcZMIyMzGF9MpcsbEQdEbzSrpxssi', '2018-11-08 21:08:31', '2018-11-08 21:08:31'),
(5, 'user', 'user@gmail.com', 1, '$2y$10$sqVkcu65QaX0Va08yZdreeAlvgUOvXCwIwnlLyXyS0qPtf6NrFOLm', NULL, 'lv5Wm4OdQL1RnQBloJZUVfZfdzUhskO8ABSbDl1jjiLM0tdCbNUtct1vxZc8', '2018-12-09 20:37:43', '2018-12-09 20:37:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kedaitable`
--
ALTER TABLE `kedaitable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menutable`
--
ALTER TABLE `menutable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `minumantable`
--
ALTER TABLE `minumantable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_accounts`
--
ALTER TABLE `social_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksikedai`
--
ALTER TABLE `transaksikedai`
  ADD KEY `id_menu` (`id_menu`),
  ADD KEY `id_kedai` (`id_kedai`),
  ADD KEY `id_menu_2` (`id_menu`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kedaitable`
--
ALTER TABLE `kedaitable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `menutable`
--
ALTER TABLE `menutable`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `minumantable`
--
ALTER TABLE `minumantable`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `social_accounts`
--
ALTER TABLE `social_accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksikedai`
--
ALTER TABLE `transaksikedai`
  ADD CONSTRAINT `transaksikedai_ibfk_1` FOREIGN KEY (`id_kedai`) REFERENCES `kedaitable` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
