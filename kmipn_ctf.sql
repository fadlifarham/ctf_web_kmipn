-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 20 Okt 2018 pada 02.54
-- Versi server: 5.7.21-log
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kmipn_ctf`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(17, '2018_10_11_034645_create_model_users_table', 1),
(18, '2018_10_14_025545_create_model_soals_table', 1),
(19, '2018_10_14_031439_create_model_pilihans_table', 1),
(20, '2018_10_14_090258_create_model_statuses_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pilihan`
--

CREATE TABLE `pilihan` (
  `id` int(10) UNSIGNED NOT NULL,
  `pilihan1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pilihan2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pilihan3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pilihan4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pilihan5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `pilihan`
--

INSERT INTO `pilihan` (`id`, `pilihan1`, `pilihan2`, `pilihan3`, `pilihan4`, `pilihan5`, `created_at`, `updated_at`) VALUES
(1, 'Workstation', 'Hub', 'Switch', 'Modem', 'USB', NULL, NULL),
(2, 'Antena', 'Modem', 'Switch', 'Hub', 'Workstation', NULL, NULL),
(3, 'Workstation', 'Hub', 'Switch', 'Modem', 'USB', NULL, NULL),
(4, 'Pakcet sniffer', 'Probe', 'Hacking', 'Port scaning', 'Denial of Service', NULL, NULL),
(5, 'Packet sniffer', 'Account Compromize', 'Phising', 'Port scaning', 'Exploitation of Trust', NULL, NULL),
(6, '0', '3', '2', '1', '4', NULL, NULL),
(7, 'Security Management System', 'Network Topology', 'IDS', 'IPS', 'Packet Fingerprinting', NULL, NULL),
(8, 'Network Topology', 'IDS', 'Packet Fingerprinting', 'Security Management System', 'Firewall', NULL, NULL),
(9, 'Bluejacking', 'Adware', 'Cookies', 'Internet Worms', 'Mobile Phone Viruse', NULL, NULL),
(10, 'Virus', 'Spaming', 'Trojan', 'Spam', 'Spyware', NULL, NULL),
(11, 'Application', 'Proxy Firewall', 'Stateful Inspection Firewall', 'Packet Filter Firewall', 'Application Filter Firewall', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal`
--

CREATE TABLE `soal` (
  `id` int(10) UNSIGNED NOT NULL,
  `pertanyaan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pilihan` int(11) NOT NULL,
  `benar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `soal`
--

INSERT INTO `soal` (`id`, `pertanyaan`, `pilihan`, `benar`, `created_at`, `updated_at`) VALUES
(1, 'Alat-alat yang digunakan dalam membangun sebuh jaringan dibawah ini, kecuali …', 1, 'USB', NULL, NULL),
(2, 'Perangkat yang berfungsi untuk mengubah sinyal analog menjadi sinyal digital atau sebaliknya adalah', 2, 'Modem', NULL, NULL),
(3, 'Metode serangan yang bertujuan untuk mengetahui port yang terbuka disebut', 3, 'Port scaning', NULL, NULL),
(4, 'Membuat tampilan login yang mirip atau fake login page merupan Teknik serangan…', 4, 'Exploitation of Trust', NULL, NULL),
(5, 'Informasi Security merupakan keamanan level ke…', 5, '3', NULL, NULL),
(6, 'Metode pengaman jaringan yang membagi jaringan computer menjadi beberapa kelompokjaringan disebut', 6, 'Network Topology', NULL, NULL),
(7, 'Sistem yang membantu pengamanan jaringan dengan menganalisa data dan membuatkan report', 7, 'Security Management System', NULL, NULL),
(8, 'Ancaman yang biasa didapati user ketika menjelajahi internet untuk mencuri data user untuk kepentingan marketing disebut', 8, 'Adware', NULL, NULL),
(9, 'Tindakan penggunaan perangkat elektonik dengan mengirim pesan bertubi-tubi disebut', 9, 'Spaming', NULL, NULL),
(10, 'Tipe firewall sebagai penjebatan antara koneksi LAN, WAN, dan Internet disebut…', 10, 'Proxy Firewall', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id`, `id_user`, `id_soal`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 0, NULL, NULL),
(2, 1, 2, 0, NULL, NULL),
(3, 1, 3, 0, NULL, NULL),
(4, 1, 4, 0, NULL, NULL),
(5, 1, 5, 0, NULL, NULL),
(6, 1, 6, 0, NULL, NULL),
(7, 1, 7, 0, NULL, NULL),
(8, 1, 8, 0, NULL, NULL),
(9, 1, 9, 0, NULL, NULL),
(10, 1, 10, 0, NULL, NULL),
(11, 1, 11, 0, NULL, NULL),
(12, 1, 12, 0, NULL, NULL),
(13, 1, 13, 0, NULL, NULL),
(14, 1, 14, 0, NULL, NULL),
(15, 1, 15, 0, NULL, NULL),
(16, 1, 16, 0, NULL, NULL),
(17, 1, 17, 0, NULL, NULL),
(18, 1, 18, 0, NULL, NULL),
(19, 1, 19, 0, NULL, NULL),
(20, 1, 20, 0, NULL, NULL),
(21, 1, 21, 0, NULL, NULL),
(22, 1, 22, 0, NULL, NULL),
(23, 1, 23, 0, NULL, NULL),
(24, 1, 24, 0, NULL, NULL),
(25, 1, 25, 0, NULL, NULL),
(26, 1, 26, 0, NULL, NULL),
(27, 1, 27, 0, NULL, NULL),
(28, 1, 28, 0, NULL, NULL),
(29, 1, 29, 0, NULL, NULL),
(30, 1, 30, 0, NULL, NULL),
(31, 1, 31, 0, NULL, NULL),
(32, 1, 32, 0, NULL, NULL),
(33, 1, 33, 0, NULL, NULL),
(34, 1, 34, 0, NULL, NULL),
(35, 1, 35, 0, NULL, NULL),
(36, 1, 36, 0, NULL, NULL),
(37, 1, 37, 0, NULL, NULL),
(38, 1, 38, 0, NULL, NULL),
(39, 1, 39, 0, NULL, NULL),
(40, 1, 40, 0, NULL, NULL),
(41, 1, 41, 0, NULL, NULL),
(42, 1, 42, 0, NULL, NULL),
(43, 1, 43, 0, NULL, NULL),
(44, 1, 44, 0, NULL, NULL),
(45, 1, 45, 0, NULL, NULL),
(46, 1, 46, 0, NULL, NULL),
(47, 1, 47, 0, NULL, NULL),
(48, 1, 48, 0, NULL, NULL),
(49, 1, 49, 0, NULL, NULL),
(50, 1, 50, 0, NULL, NULL),
(51, 2, 1, 0, NULL, NULL),
(52, 2, 2, 0, NULL, NULL),
(53, 2, 3, 0, NULL, NULL),
(54, 2, 4, 0, NULL, NULL),
(55, 2, 5, 0, NULL, NULL),
(56, 2, 6, 0, NULL, NULL),
(57, 2, 7, 0, NULL, NULL),
(58, 2, 8, 0, NULL, NULL),
(59, 2, 9, 0, NULL, NULL),
(60, 2, 10, 0, NULL, NULL),
(61, 2, 11, 0, NULL, NULL),
(62, 2, 12, 0, NULL, NULL),
(63, 2, 13, 0, NULL, NULL),
(64, 2, 14, 0, NULL, NULL),
(65, 2, 15, 0, NULL, NULL),
(66, 2, 16, 0, NULL, NULL),
(67, 2, 17, 0, NULL, NULL),
(68, 2, 18, 0, NULL, NULL),
(69, 2, 19, 0, NULL, NULL),
(70, 2, 20, 0, NULL, NULL),
(71, 2, 21, 0, NULL, NULL),
(72, 2, 22, 0, NULL, NULL),
(73, 2, 23, 0, NULL, NULL),
(74, 2, 24, 0, NULL, NULL),
(75, 2, 25, 0, NULL, NULL),
(76, 2, 26, 0, NULL, NULL),
(77, 2, 27, 0, NULL, NULL),
(78, 2, 28, 0, NULL, NULL),
(79, 2, 29, 0, NULL, NULL),
(80, 2, 30, 0, NULL, NULL),
(81, 2, 31, 0, NULL, NULL),
(82, 2, 32, 0, NULL, NULL),
(83, 2, 33, 0, NULL, NULL),
(84, 2, 34, 0, NULL, NULL),
(85, 2, 35, 0, NULL, NULL),
(86, 2, 36, 0, NULL, NULL),
(87, 2, 37, 0, NULL, NULL),
(88, 2, 38, 0, NULL, NULL),
(89, 2, 39, 0, NULL, NULL),
(90, 2, 40, 0, NULL, NULL),
(91, 2, 41, 0, NULL, NULL),
(92, 2, 42, 0, NULL, NULL),
(93, 2, 43, 0, NULL, NULL),
(94, 2, 44, 0, NULL, NULL),
(95, 2, 45, 0, NULL, NULL),
(96, 2, 46, 0, NULL, NULL),
(97, 2, 47, 0, NULL, NULL),
(98, 2, 48, 0, NULL, NULL),
(99, 2, 49, 0, NULL, NULL),
(100, 2, 50, 0, NULL, NULL),
(101, 3, 1, 0, NULL, NULL),
(102, 3, 2, 0, NULL, NULL),
(103, 3, 3, 0, NULL, NULL),
(104, 3, 4, 0, NULL, NULL),
(105, 3, 5, 0, NULL, NULL),
(106, 3, 6, 0, NULL, NULL),
(107, 3, 7, 0, NULL, NULL),
(108, 3, 8, 0, NULL, NULL),
(109, 3, 9, 0, NULL, NULL),
(110, 3, 10, 0, NULL, NULL),
(111, 3, 11, 0, NULL, NULL),
(112, 3, 12, 0, NULL, NULL),
(113, 3, 13, 0, NULL, NULL),
(114, 3, 14, 0, NULL, NULL),
(115, 3, 15, 0, NULL, NULL),
(116, 3, 16, 0, NULL, NULL),
(117, 3, 17, 0, NULL, NULL),
(118, 3, 18, 0, NULL, NULL),
(119, 3, 19, 0, NULL, NULL),
(120, 3, 20, 0, NULL, NULL),
(121, 3, 21, 0, NULL, NULL),
(122, 3, 22, 0, NULL, NULL),
(123, 3, 23, 0, NULL, NULL),
(124, 3, 24, 0, NULL, NULL),
(125, 3, 25, 0, NULL, NULL),
(126, 3, 26, 0, NULL, NULL),
(127, 3, 27, 0, NULL, NULL),
(128, 3, 28, 0, NULL, NULL),
(129, 3, 29, 0, NULL, NULL),
(130, 3, 30, 0, NULL, NULL),
(131, 3, 31, 0, NULL, NULL),
(132, 3, 32, 0, NULL, NULL),
(133, 3, 33, 0, NULL, NULL),
(134, 3, 34, 0, NULL, NULL),
(135, 3, 35, 0, NULL, NULL),
(136, 3, 36, 0, NULL, NULL),
(137, 3, 37, 0, NULL, NULL),
(138, 3, 38, 0, NULL, NULL),
(139, 3, 39, 0, NULL, NULL),
(140, 3, 40, 0, NULL, NULL),
(141, 3, 41, 0, NULL, NULL),
(142, 3, 42, 0, NULL, NULL),
(143, 3, 43, 0, NULL, NULL),
(144, 3, 44, 0, NULL, NULL),
(145, 3, 45, 0, NULL, NULL),
(146, 3, 46, 0, NULL, NULL),
(147, 3, 47, 0, NULL, NULL),
(148, 3, 48, 0, NULL, NULL),
(149, 3, 49, 0, NULL, NULL),
(150, 3, 50, 0, NULL, NULL),
(151, 4, 1, 0, NULL, NULL),
(152, 4, 2, 0, NULL, NULL),
(153, 4, 3, 0, NULL, NULL),
(154, 4, 4, 0, NULL, NULL),
(155, 4, 5, 0, NULL, NULL),
(156, 4, 6, 0, NULL, NULL),
(157, 4, 7, 0, NULL, NULL),
(158, 4, 8, 0, NULL, NULL),
(159, 4, 9, 0, NULL, NULL),
(160, 4, 10, 0, NULL, NULL),
(161, 4, 11, 0, NULL, NULL),
(162, 4, 12, 0, NULL, NULL),
(163, 4, 13, 0, NULL, NULL),
(164, 4, 14, 0, NULL, NULL),
(165, 4, 15, 0, NULL, NULL),
(166, 4, 16, 0, NULL, NULL),
(167, 4, 17, 0, NULL, NULL),
(168, 4, 18, 0, NULL, NULL),
(169, 4, 19, 0, NULL, NULL),
(170, 4, 20, 0, NULL, NULL),
(171, 4, 21, 0, NULL, NULL),
(172, 4, 22, 0, NULL, NULL),
(173, 4, 23, 0, NULL, NULL),
(174, 4, 24, 0, NULL, NULL),
(175, 4, 25, 0, NULL, NULL),
(176, 4, 26, 0, NULL, NULL),
(177, 4, 27, 0, NULL, NULL),
(178, 4, 28, 0, NULL, NULL),
(179, 4, 29, 0, NULL, NULL),
(180, 4, 30, 0, NULL, NULL),
(181, 4, 31, 0, NULL, NULL),
(182, 4, 32, 0, NULL, NULL),
(183, 4, 33, 0, NULL, NULL),
(184, 4, 34, 0, NULL, NULL),
(185, 4, 35, 0, NULL, NULL),
(186, 4, 36, 0, NULL, NULL),
(187, 4, 37, 0, NULL, NULL),
(188, 4, 38, 0, NULL, NULL),
(189, 4, 39, 0, NULL, NULL),
(190, 4, 40, 0, NULL, NULL),
(191, 4, 41, 0, NULL, NULL),
(192, 4, 42, 0, NULL, NULL),
(193, 4, 43, 0, NULL, NULL),
(194, 4, 44, 0, NULL, NULL),
(195, 4, 45, 0, NULL, NULL),
(196, 4, 46, 0, NULL, NULL),
(197, 4, 47, 0, NULL, NULL),
(198, 4, 48, 0, NULL, NULL),
(199, 4, 49, 0, NULL, NULL),
(200, 4, 50, 0, NULL, NULL),
(201, 5, 1, 0, NULL, NULL),
(202, 5, 2, 0, NULL, NULL),
(203, 5, 3, 0, NULL, NULL),
(204, 5, 4, 0, NULL, NULL),
(205, 5, 5, 0, NULL, NULL),
(206, 5, 6, 0, NULL, NULL),
(207, 5, 7, 0, NULL, NULL),
(208, 5, 8, 0, NULL, NULL),
(209, 5, 9, 0, NULL, NULL),
(210, 5, 10, 0, NULL, NULL),
(211, 5, 11, 0, NULL, NULL),
(212, 5, 12, 0, NULL, NULL),
(213, 5, 13, 0, NULL, NULL),
(214, 5, 14, 0, NULL, NULL),
(215, 5, 15, 0, NULL, NULL),
(216, 5, 16, 0, NULL, NULL),
(217, 5, 17, 0, NULL, NULL),
(218, 5, 18, 0, NULL, NULL),
(219, 5, 19, 0, NULL, NULL),
(220, 5, 20, 0, NULL, NULL),
(221, 5, 21, 0, NULL, NULL),
(222, 5, 22, 0, NULL, NULL),
(223, 5, 23, 0, NULL, NULL),
(224, 5, 24, 0, NULL, NULL),
(225, 5, 25, 0, NULL, NULL),
(226, 5, 26, 0, NULL, NULL),
(227, 5, 27, 0, NULL, NULL),
(228, 5, 28, 0, NULL, NULL),
(229, 5, 29, 0, NULL, NULL),
(230, 5, 30, 0, NULL, NULL),
(231, 5, 31, 0, NULL, NULL),
(232, 5, 32, 0, NULL, NULL),
(233, 5, 33, 0, NULL, NULL),
(234, 5, 34, 0, NULL, NULL),
(235, 5, 35, 0, NULL, NULL),
(236, 5, 36, 0, NULL, NULL),
(237, 5, 37, 0, NULL, NULL),
(238, 5, 38, 0, NULL, NULL),
(239, 5, 39, 0, NULL, NULL),
(240, 5, 40, 0, NULL, NULL),
(241, 5, 41, 0, NULL, NULL),
(242, 5, 42, 0, NULL, NULL),
(243, 5, 43, 0, NULL, NULL),
(244, 5, 44, 0, NULL, NULL),
(245, 5, 45, 0, NULL, NULL),
(246, 5, 46, 0, NULL, NULL),
(247, 5, 47, 0, NULL, NULL),
(248, 5, 48, 0, NULL, NULL),
(249, 5, 49, 0, NULL, NULL),
(250, 5, 50, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `score` int(11) NOT NULL,
  `nama_tim` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `score`, `nama_tim`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user@kmipn.com', '$2y$10$tMt2H.EM/c5J/bzvnyrvwO/gyF3UoONXPEUb5vJd3LIJX/d8/wTg6', 0, 'hoho team', NULL, NULL, NULL),
(2, 'user2', 'user2@kmipn.com', '$2y$10$h//StHgZxZ.JAvPFPMCv6e01RXSevYrplb6n86y0tVcay7HfUzx.e', 0, 'Hehe team', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pilihan`
--
ALTER TABLE `pilihan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `pilihan`
--
ALTER TABLE `pilihan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `soal`
--
ALTER TABLE `soal`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `status`
--
ALTER TABLE `status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
