-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Počítač: localhost
-- Vytvořeno: Pát 13. led 2023, 23:23
-- Verze serveru: 8.0.31
-- Verze PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `intranet`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `addons`
--

CREATE TABLE `addons` (
  `id` bigint UNSIGNED NOT NULL,
  `document_id` bigint NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revision` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Rozpracováno','Schváleno') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `addons`
--

INSERT INTO `addons` (`id`, `document_id`, `name`, `description`, `revision`, `file`, `status`, `created_at`, `updated_at`) VALUES
(1, 23, '1', 'Příloha standardu', 'únor 2022', 'akreditacni_standard_akr-31.pdf', 'Schváleno', '2023-01-13 22:08:35', '2023-01-13 22:08:35');

-- --------------------------------------------------------

--
-- Struktura tabulky `adversevents`
--

CREATE TABLE `adversevents` (
  `id` bigint UNSIGNED NOT NULL,
  `department_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `misto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datum_cas` date NOT NULL,
  `cas` time NOT NULL,
  `spec_druh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jinydoplnek` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pracovnik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `svedek` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pacient` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datumnaroz` date DEFAULT NULL,
  `chorobopis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `udalost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reseni` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `opatreni` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `informovan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pricina` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jina_pricina` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stav_pacienta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lokalizace` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `druh_zraneni` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preventivni_opatreni` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zhodnoceni_stavu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datum` date DEFAULT NULL,
  `jmeno_lekare` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vyvoj` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upresneni` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Rozpracováno','Odesláno','Dokončeno') COLLATE utf8mb4_unicode_ci NOT NULL,
  `resitel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vyjadreni` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resitel1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vyjadreni1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resitel2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vyjadreni2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint UNSIGNED NOT NULL,
  `training_id` int NOT NULL,
  `personal_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `folder_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_icon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `folder_name`, `category_icon`, `color`) VALUES
(1, 'Akreditační', 'akreditacni', 'akreditacni.png', 'blue'),
(2, 'Ošetřovatelské', 'osetrovatelske', 'osetrovatelske.png', 'pink'),
(3, 'Léčebné', 'lecebne', 'lecebne.png', 'red'),
(4, 'Speciální', 'specialni', 'specialni.png', 'muted'),
(5, 'Operační', 'operacni', 'operacni.png', 'lime'),
(6, 'Anesteziologické', 'anesteziologicke', 'anesteziologicke.png', 'purple'),
(7, 'RDG', 'rdg', 'rdg.png', 'yellow'),
(8, 'Rehabilitační', 'rehabilitacni', 'rehabilitacni.png', 'green'),
(9, 'OPL', 'opl', 'opl.png', 'teal'),
(10, 'OKB', 'okb', 'okb.png', 'puple'),
(11, 'Logopedické', 'logopedicke', 'logopedicke.png', 'cyan'),
(12, 'Legislativní', 'legislativni', 'legislativni.png', 'orange');

-- --------------------------------------------------------

--
-- Struktura tabulky `departments`
--

CREATE TABLE `departments` (
  `id` bigint UNSIGNED NOT NULL,
  `department_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `center_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `departments`
--

INSERT INTO `departments` (`id`, `department_code`, `center_code`, `color_id`, `department_name`) VALUES
(1, '401', '4501', 'blue', 'Interní oddělení'),
(2, '402', '4502', 'azure', 'Endokrinologická ambulance'),
(3, '403', '4503', 'azure', 'Příjmová interní ambulance'),
(4, '404', '4507', 'azure', 'Gastroenterologická ambulance'),
(5, '405', '4507', 'azure', 'Interní odborné ambulance'),
(6, '407', '4512', 'purple', 'Neurologické oddělení'),
(7, '408', '4513', 'purple', 'Neurologická ambulance'),
(8, '410', '4501', 'lime', 'Odělení chirurgie páteře'),
(9, '411', '4521', 'lime', 'JIP oddělení chirurgie páteře a ortopedie'),
(10, '412', '4524', 'lime', 'Ambulance chirurgie páteře'),
(11, '413', '4551', 'green', 'Rehabilitační oddělení'),
(12, '414', '4552', 'green', 'Rehabilitační ambulance'),
(13, '415', '4558', 'cyan', 'Oddělení pracovního lékařství'),
(14, '417', '4547', 'pink', 'OKB'),
(15, '418', '4549', 'red', 'RDG'),
(16, '419', '4522', 'lime', 'Operační sály'),
(17, '420', '4110', 'yellow', 'Ředitelství'),
(18, '421', '4120', 'orange', 'Stravovací provoz - kantýna'),
(19, '422', '4130', 'muted', 'Úklid'),
(20, '424', '4528', 'lime', 'Anesteziologická ambulance'),
(21, '425', '4504', 'azure', 'Diabetologická ambulance'),
(22, '426', '4141', 'teal', 'Lékárna KHN'),
(23, '427', '4510', 'indigo', 'Mezioborová JIP'),
(24, '428', '4524', 'muted', 'Provozní úsek'),
(25, '429', '4150', 'muted', 'Údržba'),
(26, '432', '4507', 'azure', 'Ambulance infuzní terapie'),
(27, '433', '4524', 'lime', 'Mamologická poradna'),
(28, '434', '4525', 'orange', 'Ortopedické oddělení'),
(29, '436', '4143', 'teal', 'Lékárna KHN v Ráji'),
(30, '437', '4560', 'orange', 'Oddělení následné péče'),
(31, '999', '9999', 'muted', 'Externí pracovník');

-- --------------------------------------------------------

--
-- Struktura tabulky `documents`
--

CREATE TABLE `documents` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint NOT NULL,
  `accordion_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accordion_group` int DEFAULT NULL,
  `position` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revision` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unique_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Rozpracováno','Schváleno') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `documents`
--

INSERT INTO `documents` (`id`, `category_id`, `accordion_name`, `accordion_group`, `position`, `name`, `description`, `revision`, `file`, `unique_code`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 'Standard léčebného postupu', NULL, 1, 'Standard léčebného postupu', 'Akutní koronární syndromy', '5', 'lecebne_standard_lec-01.pdf', 'lec-01', 'Schváleno', '2023-01-13 21:02:48', '2023-01-13 21:02:48'),
(2, 3, 'Standard léčebného postupu', NULL, 2, 'Standard léčebného postupu', 'ATB profylaxe u operovaných pacientů', '3', 'lecebne_standard_lec-02.pdf', 'lec-02', 'Schváleno', '2023-01-13 21:16:31', '2023-01-13 21:16:31'),
(3, 3, 'Standard léčebného postupu', NULL, 3, 'Standard léčebného postupu', 'Crohnova choroba', '5', 'lecebne_standard_lec-03.pdf', 'lec-03', 'Schváleno', '2023-01-13 21:17:50', '2023-01-13 21:17:50'),
(4, 3, 'Standard léčebného postupu', NULL, 4, 'Standard léčebného postupu', 'Demence', '6', 'lecebne_standard_lec-04.pdf', 'lec-04', 'Schváleno', '2023-01-13 21:28:06', '2023-01-13 21:28:06'),
(5, 3, 'Standard léčebného postupu', NULL, 5, 'Standard léčebného postupu', 'Diabetes mellitus', '4', 'lecebne_standard_lec-05.pdf', 'lec-05', 'Schváleno', '2023-01-13 21:33:31', '2023-01-13 21:33:31'),
(6, 3, 'Standard léčebného postupu', NULL, 6, 'Standard léčebného postupu', 'u pacientů s diagnózou Epilepsie', '6', 'lecebne_standard_lec-06.pdf', 'lec-06', 'Schváleno', '2023-01-13 21:34:48', '2023-01-13 21:34:48'),
(7, 3, 'Standard léčebného postupu', NULL, 7, 'Standard léčebného postupu', 'Febrilie nejasné etiologie', '4', 'lecebne_standard_lec-07.pdf', 'lec-07', 'Schváleno', '2023-01-13 21:36:13', '2023-01-13 21:36:13'),
(8, 3, 'Standard léčebného postupu', NULL, 8, 'Standard léčebného postupu', 'Chronická bolest u degenerativních onemocnění páteře', '5', 'lecebne_standard_lec-08.pdf', 'lec-08', 'Schváleno', '2023-01-13 21:38:25', '2023-01-13 21:38:25'),
(9, 3, 'Standard léčebného postupu', NULL, 9, 'Standard léčebného postupu', 'Soubor indikačních kritérií a postupů oddělení chirurgie páteře', '6', 'lecebne_standard_lec-09.pdf', 'lec-09', 'Schváleno', '2023-01-13 21:39:52', '2023-01-13 21:39:52'),
(10, 3, 'Standard léčebného postupu', NULL, 10, 'Standard léčebného postupu', 'Indikace zátěžových vyšetření', '5', 'lecebne_standard_lec-10.pdf', 'lec-10', 'Schváleno', '2023-01-13 21:40:42', '2023-01-13 21:40:42'),
(11, 3, 'Standard léčebného postupu', NULL, 11, 'Standard léčebného postupu', 'Ischemická cévní mozková příhoda', '6', 'lecebne_standard_lec-11.pdf', 'lec-11', 'Schváleno', '2023-01-13 21:41:31', '2023-01-13 21:41:31'),
(12, 3, 'Standard léčebného postupu', NULL, 12, 'Standard léčebného postupu', 'Myokarditida', '5', 'lecebne_standard_lec-12.pdf', 'lec-12', 'Schváleno', '2023-01-13 21:42:52', '2023-01-13 21:42:52'),
(13, 3, 'Standard léčebného postupu', NULL, 13, 'Standard léčebného postupu', 'Myopatie', '5', 'lecebne_standard_lec-13.pdf', 'lec-13', 'Schváleno', '2023-01-13 21:49:16', '2023-01-13 21:49:16'),
(14, 3, 'Standard léčebného postupu', NULL, 14, 'Standard léčebného postupu', 'Parkinsonova choroba', '6', 'lecebne_standard_lec-14.pdf', 'lec-14', 'Schváleno', '2023-01-13 21:49:58', '2023-01-13 21:49:58'),
(15, 3, 'Standard léčebného postupu', NULL, 15, 'Standard léčebného postupu', 'Polyneuropathie', '6', 'lecebne_standard_lec-15.pdf', 'lec-15', 'Schváleno', '2023-01-13 21:51:20', '2023-01-13 21:51:20'),
(16, 3, 'Standard léčebného postupu', NULL, 16, 'Standard léčebného postupu', 'Předoperační vyšetření kardiaka před nekardiochirurgickými výkony', '5', 'lecebne_standard_lec-16.pdf', 'lec-16', 'Schváleno', '2023-01-13 21:52:04', '2023-01-13 21:52:04'),
(17, 3, 'Standard léčebného postupu', NULL, 17, 'Standard léčebného postupu', 'Roztroušená skleróza', '6', 'lecebne_standard_lec-17.pdf', 'lec-17', 'Schváleno', '2023-01-13 21:53:04', '2023-01-13 21:53:04'),
(18, 3, 'Standard léčebného postupu', NULL, 18, 'Standard léčebného postupu', 'Soubor indikačních kritérií a postupů oddělení ortopedie', '2', 'lecebne_standard_lec-18.pdf', 'lec-18', 'Schváleno', '2023-01-13 21:54:14', '2023-01-13 21:54:14'),
(19, 3, 'Standard léčebného postupu', NULL, 19, 'Standard léčebného postupu', 'Standard léčebného postupu Soubor postupů při ošetření infikované nebo potenciálně infikované TEP', '2', 'lecebne_standard_lec-19.pdf', 'lec-19', 'Schváleno', '2023-01-13 21:55:05', '2023-01-13 21:55:05'),
(20, 3, 'Standard léčebného postupu', NULL, 20, 'Standard léčebného postupu', 'Vředová choroba gastroduodena', '5', 'lecebne_standard_lec-20.pdf', 'lec-20', 'Schváleno', '2023-01-13 21:56:19', '2023-01-13 21:56:19'),
(21, 1, '1. Správná identifikace pacientů', 1, 1, '1. Správná identifikace pacientů', 'Bezpečnostní cíle - Správná identifikace pacientů', '3', 'akreditacni_standard_akr-01.pdf', 'akr-01', 'Schváleno', '2023-01-13 22:00:10', '2023-01-13 22:00:10'),
(22, 1, '2. Efektivní komunikace', 1, 1, '2. Efektivní komunikace', 'Bezpečnostní cíle - Efektivní komunikace', '7', 'akreditacni_standard_akr-02.pdf', 'akr-02', 'Schváleno', '2023-01-13 22:02:08', '2023-01-13 22:02:08'),
(23, 1, '2. Zvýšení bezpečí u rizikových léků', 1, 1, '3. Zvýšení bezpečí u rizikových léků', 'Bezpečnostní cíle - Zvýšení bezpečí u rizikových léků', '3', 'akreditacni_standard_akr-03.pdf', 'akr-03', 'Schváleno', '2023-01-13 22:03:22', '2023-01-13 22:03:22');

-- --------------------------------------------------------

--
-- Struktura tabulky `employees`
--

CREATE TABLE `employees` (
  `id` bigint UNSIGNED NOT NULL,
  `personal_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_preffix` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `married_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_suffix` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coffee` enum('A','N') COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `employment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int DEFAULT NULL,
  `status` enum('Aktivní','Neaktivní','Mateřská') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Neaktivní',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `employees`
--

INSERT INTO `employees` (`id`, `personal_number`, `image`, `title_preffix`, `last_name`, `middle_name`, `married_name`, `first_name`, `title_suffix`, `department_id`, `job_id`, `email`, `start_date`, `end_date`, `comment`, `phone`, `mobile`, `id_card`, `coffee`, `employment`, `position`, `status`, `created_at`, `updated_at`) VALUES
(1, '64150', '64150.jpg', 'Ing.', 'Macháček', NULL, NULL, 'Emil', 'Dr.', '30', '7', 'radka08@example.net', '2023-01-06', '2023-01-17', 'Quam eligendi fugiat possimus soluta aspernatur vitae iste. Quidem qui aliquid aut in nostrum animi facere. Error quam quia quae ex et autem. Ad ipsa omnis eos officiis repudiandae.', '360', '+22208409662', 'Předat nálepku', 'N', 'EVP', NULL, 'Aktivní', '2023-01-11 16:48:16', '2023-01-11 16:48:16'),
(2, '64011', '64011.jpg', 'MVDr.', 'Farkaš', NULL, NULL, 'Zdeňka', 'Mgr.', '21', '30', 'hsimackova@example.com', '2023-01-10', '2023-01-18', 'Vitae dolores ea quasi impedit aliquid temporibus. Veniam voluptatem non consequatur aut aliquam quis.', '432', '+9715750864090', 'Vytvořit kartu', 'A', 'DPP', NULL, 'Neaktivní', '2023-01-11 16:48:16', '2023-01-11 16:48:16'),
(3, '62224', '62224.jpg', 'RNDr.', 'Duda', NULL, NULL, 'Renata', 'doc.', '1', '40', 'volny.lukas@example.org', '2023-01-18', '2023-01-04', 'Ut itaque a expedita adipisci veritatis. Quo non iusto aperiam. Architecto architecto quis fugiat sequi dolor facilis. Ullam officiis saepe tempore vel aperiam voluptas beatae autem.', '400', '+377236921469', 'Vytvořit kartu', 'N', 'DPP', NULL, 'Mateřská', '2023-01-11 16:48:16', '2023-01-11 16:48:16'),
(4, '61216', '61216.jpg', 'PhDr.', 'Junek', NULL, NULL, 'Karolína', 'JUDr.', '3', '59', 'uhartmanova@example.com', '2023-01-17', '2023-01-08', 'Aperiam minima natus et id et aut aut. Voluptatem voluptates consequatur rerum quis quis expedita similique. Ullam ut aut dolorum quo saepe eius et nobis.', '380', '+6906405907', 'Vytvořit kartu', 'N', 'EVP', NULL, 'Mateřská', '2023-01-11 16:48:16', '2023-01-11 16:48:16'),
(5, '61446', '61446.jpg', 'PhDr.', 'Sommer', NULL, NULL, 'Aneta', 'MUDr.', '14', '59', 'kuchtova.vladislav@example.org', '2023-01-08', '2023-01-17', 'Ea labore fuga beatae consequatur error ut beatae. Excepturi fugiat nihil sapiente ducimus ad.', '405', '+24105690575', 'Vytvořit kartu', 'N', 'HPP', NULL, 'Aktivní', '2023-01-11 16:48:16', '2023-01-11 16:48:16'),
(6, '62698', '62698.jpg', 'PhDr.', 'Nedvědová', NULL, NULL, 'Vojtěch', 'JUDr.', '5', '5', 'eholcova@example.net', '2023-01-14', '2023-01-08', 'Repellat occaecati totam ea ut. Quod voluptas nostrum nihil. Reiciendis qui facilis ad itaque aut aperiam enim. Explicabo ut fugiat corporis explicabo amet incidunt.', '442', '+987702297653', 'Předat nálepku', 'N', 'EVP', NULL, 'Mateřská', '2023-01-11 16:48:16', '2023-01-11 16:48:16'),
(7, '61267', '61267.jpg', 'MUDr.', 'Odehnal', NULL, NULL, 'Matyáš', 'MUDr.', '28', '49', 'vladimira.fuksova@example.org', '2023-01-11', '2023-01-04', 'Quae ea minima reprehenderit omnis magnam. Esse nihil dolor aliquid facilis. Eligendi aliquid iusto et totam. Et rerum aperiam in aliquid provident ipsam.', '483', '+33226996819', 'Předat nálepku', 'A', 'DPP', NULL, 'Mateřská', '2023-01-11 16:48:16', '2023-01-11 16:48:16'),
(8, '63487', '63487.jpg', 'PhDr.', 'Machala', NULL, NULL, 'Vladimír', 'JUDr.', '2', '34', 'libuse.binova@example.com', '2023-01-09', '2023-01-16', 'Et maiores eligendi perspiciatis hic repellat sed. Aut delectus et sint commodi voluptatem nam voluptas. Voluptas amet et id totam.', '400', '+6746097281', 'Nový nástup', 'N', 'ČSO', NULL, 'Aktivní', '2023-01-11 16:48:16', '2023-01-11 16:48:16'),
(9, '64092', '64092.jpg', 'MVDr.', 'Kopalová', NULL, NULL, 'Filip', 'MUDr.', '15', '5', 'jmuller@example.com', '2023-01-18', '2023-01-11', 'Architecto esse non rerum ut qui quo et. Eum inventore et est dicta ut voluptate. Tenetur voluptatem omnis ut assumenda inventore nobis dolorem in. Ut temporibus eos et nostrum excepturi.', '395', '+94132364053', 'Předat nálepku', 'N', 'HPP', NULL, 'Mateřská', '2023-01-11 16:48:16', '2023-01-11 16:48:16'),
(10, '62083', '62083.jpg', 'Ing.', 'Vančurová', NULL, NULL, 'Růžena', 'JUDr.', '29', '44', 'buriankova.kamil@example.com', '2023-01-09', '2023-01-15', 'Eaque aut eaque expedita pariatur. Animi reiciendis quia harum incidunt. Rerum consectetur reprehenderit consequuntur quos vitae ullam quia. Velit nam id quae illum distinctio sit dignissimos omnis.', '532', '+8557739562339', 'Předat nálepku', 'N', 'EVP', NULL, 'Neaktivní', '2023-01-11 16:48:16', '2023-01-11 16:48:16'),
(11, '63334', '63334.jpg', 'Mgr.', 'Janíček', NULL, NULL, 'Antonín', 'Bc.', '44', '57', 'kamila44@example.net', '2023-01-19', '2023-01-19', 'Hic sint incidunt et. In numquam debitis hic quo. Et praesentium quisquam voluptas commodi. Dolor repellat amet explicabo perferendis nisi dolores. Ad ut repellat provident nihil dolorum.', '432', '+3806473175890', 'Aktualizovat nálepku', 'N', 'DPP', NULL, 'Aktivní', '2023-01-13 16:56:56', '2023-01-13 16:56:56'),
(12, '64352', '64352.jpg', 'PhDr.', 'Vítek', NULL, NULL, 'Blanka', 'Dr.', '39', '55', 'antonin28@example.org', '2023-01-09', '2023-01-12', 'Non quo enim aut culpa omnis atque. Inventore et reprehenderit quia rem non recusandae.', '356', '+25747589260', 'Aktualizovat nálepku', 'N', 'EVP', NULL, 'Aktivní', '2023-01-13 16:56:56', '2023-01-13 16:56:56'),
(13, '62300', '62300.jpg', 'JUDr.', 'Kurková', NULL, NULL, 'Lubomír', 'Ing.', '59', '29', 'vmlejnkova@example.net', '2023-01-15', '2023-01-19', 'Voluptates repellendus sequi numquam architecto quisquam minus quia. Ea laborum enim ea.', '346', '+2483760491', 'Předat nálepku', 'A', 'HPP', NULL, 'Aktivní', '2023-01-13 16:56:56', '2023-01-13 16:56:56'),
(14, '62722', '62722.jpg', 'Dr.', 'Plšková', NULL, NULL, 'Aneta', 'Bc.', '17', '10', 'votrubova.josef@example.com', '2023-01-12', '2023-01-10', 'Harum fuga tempora vitae repellat itaque dicta beatae. Eos praesentium occaecati repellendus dicta perferendis in dolor provident. Ea numquam ea fuga voluptatem. Rerum eius et voluptates modi ut et.', '437', '+35779507636', 'Aktualizovat nálepku', 'A', 'DPP', NULL, 'Neaktivní', '2023-01-13 16:56:56', '2023-01-13 16:56:56'),
(15, '62765', '62765.jpg', 'Ing.', 'Kocmanová', NULL, NULL, 'Vlasta', 'doc.', '56', '134', 'zmirga@example.com', '2023-01-20', '2023-01-18', 'Consectetur sunt mollitia et. Ducimus dicta facilis ipsam id nesciunt. Itaque odit libero reiciendis autem alias non qui. Eum odit aliquam suscipit nesciunt quam.', '510', '+6764965753', 'Ok', 'N', 'DPP', NULL, 'Aktivní', '2023-01-13 16:56:56', '2023-01-13 16:56:56'),
(16, '64718', '64718.jpg', 'RNDr.', 'Motlová', NULL, NULL, 'Markéta', 'MVDr.', '31', '134', 'jitka72@example.com', '2023-01-20', '2023-01-10', 'Nostrum est eos eius vero sint minima. Quia expedita quisquam inventore voluptas numquam voluptas dolores labore. Et fuga est id sit atque est.', '538', '+445083006148', 'Nový nástup', 'N', 'DPČ', NULL, 'Neaktivní', '2023-01-13 16:56:56', '2023-01-13 16:56:56'),
(17, '62372', '62372.jpg', 'JUDr.', 'Hošková', NULL, NULL, 'Klára', 'MVDr.', '21', '20', 'anezka64@example.net', '2023-01-07', '2023-01-18', 'Iure magni qui doloremque dolorem earum. Voluptatem aut modi aut aliquam voluptas. In iusto ut similique nihil ducimus repellat maiores cum.', '487', '+668146143231', 'Nový nástup', 'A', 'ČSO', NULL, 'Mateřská', '2023-01-13 16:56:57', '2023-01-13 16:56:57'),
(18, '62383', '62383.jpg', 'Dr.', 'Mlejnková', NULL, NULL, 'Kristýna', 'Mgr.', '25', '44', 'novackova.ivana@example.com', '2023-01-20', '2023-01-07', 'Neque eum occaecati enim sunt. Qui consequatur vel earum fugit. Itaque mollitia omnis labore ipsa. Voluptate laboriosam itaque suscipit eos officiis enim.', '474', '+240498339741', 'Vytvořit kartu', 'A', 'DPČ', NULL, 'Neaktivní', '2023-01-13 16:56:57', '2023-01-13 16:56:57'),
(19, '61021', '61021.jpg', 'Bc.', 'Křenková', NULL, NULL, 'Miloslav', 'Dr.', '45', '18', 'sona.zelenkova@example.net', '2023-01-11', '2023-01-13', 'Exercitationem libero est neque eum. Itaque odio vero blanditiis illo libero nisi. Similique iure ea sed quibusdam ratione deleniti doloremque.', '420', '+420213426647', 'Předat nálepku', 'A', 'HPP', NULL, 'Mateřská', '2023-01-13 16:56:57', '2023-01-13 16:56:57'),
(20, '64887', '64887.jpg', 'doc.', 'Červeňáková', NULL, NULL, 'Olga', 'Bc.', '22', '107', 'miloslav83@example.com', '2023-01-19', '2023-01-20', 'Enim et accusantium beatae repudiandae et. Sed nostrum vero dolor accusamus. Est atque cum ex voluptas totam qui. Quia accusantium odit beatae hic vitae et.', '536', '+6839927306', 'Vrácena', 'A', 'DPP', NULL, 'Aktivní', '2023-01-13 16:56:57', '2023-01-13 16:56:57');

-- --------------------------------------------------------

--
-- Struktura tabulky `evidence`
--

CREATE TABLE `evidence` (
  `id` bigint UNSIGNED NOT NULL,
  `evidence_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `evidence_pieces` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `failed_jobs`
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
-- Struktura tabulky `instructions`
--

CREATE TABLE `instructions` (
  `id` bigint UNSIGNED NOT NULL,
  `standard_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `standard_category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revision` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Rozpracováno','Schváleno') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `jobs`
--

INSERT INTO `jobs` (`id`, `job_title`) VALUES
(1, 'asistentka ředitele'),
(2, 'dohlížející osoba pro radiační činnost'),
(3, 'dokumentační pracovnice'),
(4, 'ekonomický náměstek'),
(5, 'ergoterapeut'),
(6, 'farmaceut'),
(7, 'farmaceutický asistent'),
(8, 'finanční účetní'),
(9, 'fyzioterapeut'),
(10, 'klinický logoped'),
(11, 'kuchař'),
(12, 'lékař'),
(13, 'manažer kvality, ústavní hygienik'),
(14, 'manažer léčby ran'),
(15, 'manažer vztahů s veřejností'),
(16, 'mzdová účetní'),
(17, 'náměstek pro ošetřovatelskou péči'),
(18, 'nezadáno'),
(19, 'nutriční terapeut'),
(20, 'ošetřovatel'),
(21, 'ošetřovatelka'),
(22, 'pokladní'),
(23, 'pomocnice na úklid'),
(24, 'pomocný pracovník'),
(25, 'pracovnice podatelny'),
(26, 'pracovnice spisovny/archivu'),
(27, 'pracovník rozvozu stravy'),
(28, 'pracovník údržby'),
(29, 'praktická sestra'),
(30, 'předseda dozorčí rady'),
(31, 'primář'),
(32, 'prodavačka'),
(33, 'provozně-technický náměstek'),
(34, 'provozní pracovník, vedoucí recepce'),
(35, 'radiologický asistent'),
(36, 'radiologický asistent, technik BOZP'),
(37, 'recepční'),
(38, 'ředitel, předseda představenstva'),
(39, 'revizní technik, energetik'),
(40, 'řidič'),
(41, 'sanitář'),
(42, 'sanitářka'),
(43, 'šéfkuchař'),
(44, 'skladnice'),
(45, 'správce počítačové sítě'),
(46, 'správce zdravotnických prostředků, metrolog'),
(47, 'staniční sestra'),
(48, 'technik IT'),
(49, 'tisková mluvčí'),
(50, 'učitel'),
(51, 'učitelka'),
(52, 'vedoucí CPM'),
(53, 'vedoucí farmaceut'),
(54, 'vedoucí finanční účtárny'),
(55, 'vedoucí fyzioterapeut'),
(56, 'vedoucí IT'),
(57, 'vedoucí kantýny'),
(58, 'vedoucí lékař'),
(59, 'vedoucí personálního a mzdového oddělení'),
(60, 'vedoucí radiologický asistent'),
(61, 'vedoucí stravovacího provozu'),
(62, 'vedoucí údržby'),
(63, 'vedoucí úklidu'),
(64, 'všeobecná sestra'),
(65, 'výkonová účetní'),
(66, 'vývojář, webmaster'),
(67, 'zástupce primáře'),
(68, 'zástupce stan. sestry'),
(69, 'zástupce vedoucího farmaceuta'),
(70, 'zdravotně sociální pracovnice'),
(71, 'zdravotní laborant'),
(72, 'nezařazeno');

-- --------------------------------------------------------

--
-- Struktura tabulky `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(106, '2014_10_12_000000_create_users_table', 1),
(107, '2014_10_12_100000_create_password_resets_table', 1),
(108, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(109, '2019_08_19_000000_create_failed_jobs_table', 1),
(110, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(111, '2022_10_31_054214_create_employees_table', 1),
(112, '2022_10_31_080147_create_departments_table', 1),
(113, '2022_11_02_121758_create_jobs_table', 1),
(114, '2022_11_14_070835_create_toners_table', 1),
(115, '2022_11_14_075215_create_evidence_table', 1),
(116, '2022_11_14_080256_create_printers_table', 1),
(117, '2022_11_22_184739_create_trainings_table', 1),
(118, '2022_11_22_185011_create_slides_table', 1),
(119, '2022_11_23_070339_create_attendances_table', 1),
(121, '2022_12_15_052046_create_adversevents_table', 1),
(130, '2023_01_07_200629_create_documents_table', 3),
(131, '2023_01_07_203151_create_addons_table', 3),
(132, '2022_12_14_084811_create_categories_table', 4);

-- --------------------------------------------------------

--
-- Struktura tabulky `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `printers`
--

CREATE TABLE `printers` (
  `id` bigint UNSIGNED NOT NULL,
  `printer_vendor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `printer_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `printer_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `toner_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `slides`
--

CREATE TABLE `slides` (
  `id` bigint UNSIGNED NOT NULL,
  `training_id` int NOT NULL,
  `slide_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `directory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `toners`
--

CREATE TABLE `toners` (
  `id` bigint UNSIGNED NOT NULL,
  `toner_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `toner_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `toner_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `toner_price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `trainings`
--

CREATE TABLE `trainings` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `personal_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `users`
--

INSERT INTO `users` (`id`, `personal_number`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '61624', 'doc. Ladislav Šrámek', 'pechova.vojtech@example.com', '2023-01-11 16:48:16', '$2y$10$BAdJ9fLW3fmK.nnCZkzdSetDf1X1ZSFqVQPTvNwEga4sPszaV0zEO', NULL, NULL, 'bic2csQ9rBpTaQaJnDajKrvWVxUQiRU0WpATjBvYa71ORYktviBXViPdZnor', '2023-01-11 16:48:17', '2023-01-11 16:48:17'),
(2, '63890', 'Robert Mareš', 'wkorinkova@example.org', '2023-01-11 16:48:16', '$2y$10$nXUF3X/w8st1QSu4XhSdeukcq21YIxTK8TXd3wB/KmV.Hnb/aRyVO', NULL, NULL, 'OdDnHZjYSGyNupqKad5NDDwUXmathCf5tLqymPvUrerB5uF5NsfGNV5seQnD', '2023-01-11 16:48:17', '2023-01-11 16:48:17'),
(3, '62392', 'MVDr. Iva Smejkalová', 'kamil.pech@example.net', '2023-01-11 16:48:16', '$2y$10$G0JkMwqpMzY9PW07AMUA.e9do4e1Y2lzs59rUmCZ.voM6UjfUUHXa', NULL, NULL, 'uxE8zutIs6OAmj0l7oMs4yqEZTFe7XIsqr1reeOxIsErmAxMTJdL0xS3FDwh', '2023-01-11 16:48:17', '2023-01-11 16:48:17'),
(4, '61387', 'Lubomír Kuba', 'miloslav.janeckova@example.net', '2023-01-11 16:48:16', '$2y$10$xeDlaon1Bzc4tZx6H1OdN.2t38s8eVH.rwo5uL4FRIU1MEO0q8a2m', NULL, NULL, 'CbSinaSckMYa4O37awStAaP46pN36h2Nkr6ZQbciQ5j09aB8WKvjiWP7VDMK', '2023-01-11 16:48:17', '2023-01-11 16:48:17'),
(5, '62646', 'Mgr. Miroslav Špaček', 'hfantova@example.net', '2023-01-11 16:48:16', '$2y$10$3eTuNvBlVbsBcn6xbvNVYuA2JeUfONMF2EO7nsg2Ly0/CH2GYACNu', NULL, NULL, 'wuIAQHB7zd6RtCrNoMYypMZw9kLkDuqzxwrYL4mVqd5QYObmZiXEbJR8FXPj', '2023-01-11 16:48:17', '2023-01-11 16:48:17'),
(6, '62041', 'Denisa Brožková', 'mheger@example.org', '2023-01-11 16:48:16', '$2y$10$bZ4NvOkPfmQuZBQQyBXBj.sdeUUP1KBPBn9qCjD3hjOSG8EmJemFa', NULL, NULL, 'srrW0W8wQBPeNehMCMmhP4ImPkhUqX4choqs5QDzmmPILL3AwxoXrrcJERKt', '2023-01-11 16:48:17', '2023-01-11 16:48:17'),
(7, '64589', 'Vlastimil Seidl', 'pavlicova.barbora@example.net', '2023-01-11 16:48:16', '$2y$10$cIZn342f6.J4d/Y9bhbtc.frykPcye7UMi4va5TtNgoetDfI0EWAi', NULL, NULL, 'jbBnNTde9PICs64lW7CFb92fns1iT5LULg4iEGV8hvap8wtElP0KGkDo5voG', '2023-01-11 16:48:17', '2023-01-11 16:48:17'),
(8, '61199', 'PhDr. Ilona Kopečný', 'jakoubek.ivana@example.com', '2023-01-11 16:48:16', '$2y$10$LHGzVLpy/G9kAezVWgAyH.w4kZJM4sDCnTWicSCsVJwhueLR/EXkC', NULL, NULL, 'QBVSNpIZATAjovUq9Ud63FpDOisVK4B0qQINS2C3ZGzYoGDbnElIAIuFtxNL', '2023-01-11 16:48:17', '2023-01-11 16:48:17'),
(9, '64220', 'Vítězslav Studený', 'aprokop@example.net', '2023-01-11 16:48:16', '$2y$10$TXAjVT9k./.H4KjXoNAcn.ljLPiSjKS0B.vlGoGjEiJXFvNWX3CJG', NULL, NULL, 'Q84bE3b76njnJpTH1hee9690itatngELvYKuDNtYqpfuwZ72Y4EhZd2C0J3e', '2023-01-11 16:48:17', '2023-01-11 16:48:17'),
(10, '62457', 'PhDr. Jan Kuča', 'milena93@example.net', '2023-01-11 16:48:16', '$2y$10$y.1Fr4LcccsAuc2CCAp9seh5PonzrjwBcBDlKqaIaO4r0eYvvow3W', NULL, NULL, 'uKtD3jRcmQagjEDZs2oF9PpRq14SsqwMna9HjdAGFR5U2lai6N50iFFPsfDC', '2023-01-11 16:48:17', '2023-01-11 16:48:17'),
(11, '61625', 'Karleigh Becker', 'klika@khn.cz', NULL, '$2y$10$HZ53JhT7D0sw7B7igovwbe9/KCAZQK4I7KrHKz6pZcgGFLWzHg2MO', NULL, NULL, '3xVq6ENEC2dFbORL0QDjjrNTgGFDh9CB1OaN64hWVcfe2S0mOEG6ByNpL16R', '2023-01-11 18:53:36', '2023-01-11 18:53:36'),
(12, '63882', 'Anna Seidlová', 'mbalogova@example.org', '2023-01-13 16:56:57', '$2y$10$ihu2uS/uhaS01vFcu8M.6eN5ElPL//0lTNnPybHJWDbVuNOGbWvfe', NULL, NULL, 'jSCn8DxL6F6HZFbc37QMtjBOtiWFUr5RuuHEw0DVZUbCS6s2vqM58fO2ZjXy', '2023-01-13 16:56:57', '2023-01-13 16:56:57'),
(13, '64832', 'Marta Jílková', 'cibulkova.tomas@example.net', '2023-01-13 16:56:57', '$2y$10$43kzxF1NKZ/bu2BgUlG5D.I0JYRdvKu6v2ZyF83TkJBKh5nqeUCLW', NULL, NULL, 'rhlXHVt9qY9OsQA9Q8q4CRdFYxXxmbc5kliamjZKwMG5crFPZwTB1b2AE3XH', '2023-01-13 16:56:57', '2023-01-13 16:56:57'),
(14, '62297', 'Vladimíra Bradová', 'ncahova@example.org', '2023-01-13 16:56:57', '$2y$10$lU2Pubr/W60AJ.rFRlM0l.8DHV1vBszqcNyoGqHjbIdGEvPIEWUZS', NULL, NULL, 'CuPFejVxGLKnbWf4cNf5kauzdYDdEMtGwTQ4eXfcRokoZG38HmYA45ePlZLa', '2023-01-13 16:56:57', '2023-01-13 16:56:57'),
(15, '62572', 'Luděk Vinš', 'kralova.petra@example.org', '2023-01-13 16:56:57', '$2y$10$y26B2S4dnvMyc9fvmWTI8e.Cwh5EXoEbBtT6FgPjqhAaKaQaWmLby', NULL, NULL, 'PrKbCRRBez2zlQzHgYCohzw6Rxty3ZQy618N8V3fZyZTDetpigImZE0MvFFl', '2023-01-13 16:56:57', '2023-01-13 16:56:57'),
(16, '61272', 'Ing. Jaroslava Lacinová', 'vasyl85@example.org', '2023-01-13 16:56:57', '$2y$10$s6.M2gdec4c.l8U8Ay0bWuM6Rkdy6KukFJXINbVZRnXu0AdM2Ubtu', NULL, NULL, 'DoX12JZua6or0HqRo5JaZICQMbnSKusa8rgEBVsCTyQEaO44KxuyACfKVzhh', '2023-01-13 16:56:57', '2023-01-13 16:56:57'),
(17, '61958', 'Vlastimil Coufal', 'dominik71@example.org', '2023-01-13 16:56:57', '$2y$10$QmirZntDQuNtYHBkdXgxGOoyWeSlYKTsBCFDkqAQYyQEVbMck7D8a', NULL, NULL, 'hZotkV7WQQEHfadFXpQ0HgUcxErzy6LUmWjeVYZgsQ5D3wCqavaqKdhwSgiz', '2023-01-13 16:56:57', '2023-01-13 16:56:57'),
(18, '64455', 'Mgr. Marcela Horáková', 'ugruber@example.org', '2023-01-13 16:56:57', '$2y$10$hd9l6gk0xz37bppf6bzgzecQcu5w8rQqTW9jl1Bl5DkA3lZ6AL87S', NULL, NULL, 'gmCKB1bEEvkOVJItygVdJQ3urhnModAsjRrkmvdXpZfVpI90cYgvCrYEoP3D', '2023-01-13 16:56:57', '2023-01-13 16:56:57'),
(19, '63190', 'Vlasta Sedláková', 'olga09@example.org', '2023-01-13 16:56:57', '$2y$10$lFyN4DHGQMpcxDYyWQn1y.W6.7acTDL6p3GImSaEMGkt7utY7iADC', NULL, NULL, 'hYoBpCzzd0aYF4oQPXAWfqrQbFNuaExzqNW9VvhUQxxi6xfZBj0TEuP9xbys', '2023-01-13 16:56:57', '2023-01-13 16:56:57'),
(20, '61735', 'Ing. Miroslava Kochová', 'jirina.grundzova@example.org', '2023-01-13 16:56:57', '$2y$10$Su3jTkLHPa2PflBPChbTSuIgoZbClBiIrtHbnYGz50lAujcWSAC4m', NULL, NULL, '63EfP8YWpO3yZYw0OBPvFWDOMixZgVjGF5k6qIsUT3UmbIkNj5WfMx7LIS0Z', '2023-01-13 16:56:57', '2023-01-13 16:56:57'),
(21, '63881', 'Anežka Melicharová', 'ipsenickova@example.com', '2023-01-13 16:56:57', '$2y$10$Y4KDV1Sll4YhalKynVpxNu0nQBIs92cYY6xV0Z96HK4TSt5N9X5kS', NULL, NULL, 'aaU0aket8hncus2N0G8VFRP7EmgQPdShm1XwQv9dROWkA9r79FTE2T1aZrez', '2023-01-13 16:56:57', '2023-01-13 16:56:57');

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `addons`
--
ALTER TABLE `addons`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `adversevents`
--
ALTER TABLE `adversevents`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `evidence`
--
ALTER TABLE `evidence`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexy pro tabulku `instructions`
--
ALTER TABLE `instructions`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexy pro tabulku `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexy pro tabulku `printers`
--
ALTER TABLE `printers`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `toners`
--
ALTER TABLE `toners`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `trainings`
--
ALTER TABLE `trainings`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_personal_number_unique` (`personal_number`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `addons`
--
ALTER TABLE `addons`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pro tabulku `adversevents`
--
ALTER TABLE `adversevents`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pro tabulku `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT pro tabulku `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pro tabulku `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pro tabulku `evidence`
--
ALTER TABLE `evidence`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `instructions`
--
ALTER TABLE `instructions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT pro tabulku `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT pro tabulku `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `printers`
--
ALTER TABLE `printers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `toners`
--
ALTER TABLE `toners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
