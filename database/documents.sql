-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Počítač: localhost
-- Vytvořeno: Stř 18. led 2023, 00:13
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
-- Struktura tabulky `documents`
--

CREATE TABLE `documents` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint NOT NULL,
  `accordion_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `accordion_group` int DEFAULT NULL,
  `position` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `processed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authorize` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `examine` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `efficiency` date DEFAULT NULL,
  `revision` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `next_revision_date` date DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revision_date` date DEFAULT NULL,
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `unique_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Rozpracováno','Schváleno') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `documents`
--

INSERT INTO `documents` (`id`, `category_id`, `accordion_name`, `accordion_group`, `position`, `name`, `description`, `processed`, `authorize`, `examine`, `efficiency`, `revision`, `next_revision_date`, `tags`, `revision_date`, `file`, `unique_code`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 'Standard léčebného postupu', NULL, 1, 'Standard léčebného postupu', 'Akutní koronární syndromy', 'MUDr. Pavlína Janková', 'MUDr. Tomáš Canibal', 'MUDr. Peter Kultan', '2007-01-01', '5', '2024-01-10', 'MEZ-JIP, NEU-JIP, INT-ODD, NEU-ODD', '2022-12-01', 'standardy_lecebne-akutni_koronarni_syndromy-revize-5.pdf', 'lec01', 'Schváleno', '2023-01-13 21:02:48', '2023-01-16 23:31:24'),
(2, 3, 'Standard léčebného postupu', NULL, 2, 'Standard léčebného postupu', 'Antibiotiková profylaxe u operovaných pacientů', 'MUDr. Šárka Hurtová', 'MUDr. Tomáš Canibal', 'MUDr. Andrea Adamová', '2014-01-01', '3', '2023-12-01', 'ONP, ORT', '2022-12-01', 'standardy_lecebne-antibiotikova_profylaxe_u_operovanych_pacientu-revize-3.pdf', 'lec02', 'Schváleno', '2023-01-13 21:16:31', '2023-01-16 18:16:27'),
(3, 3, 'Standard léčebného postupu', NULL, 3, 'Standard léčebného postupu', 'Crohnova choroba', 'MUDr. Josef Střída', 'MUDr. Tomáš Canibal', 'MUDr. Peter Kultan', '2007-01-01', '5', '2023-12-01', 'MEZ-JIP, INT-ODD', '2022-12-01', 'standardy_lecebne-crohnova_choroba-revize-5.pdf', 'lec03', 'Schváleno', '2023-01-13 21:17:50', '2023-01-16 20:57:27'),
(4, 3, 'Standard léčebného postupu', NULL, 4, 'Standard léčebného postupu', 'Demence', 'MUDr. Marek Böhm', 'MUDr. Tomáš Canibal', 'MUDr. Barbara Vlachopulu', '2005-07-01', '6', '2023-12-01', 'NEU-ODD', '2022-12-01', 'standardy_lecebne-demence-revize-6.pdf', 'lec04', 'Schváleno', '2023-01-13 21:28:06', '2023-01-16 20:58:46'),
(5, 3, 'Standard léčebného postupu', NULL, 5, 'Standard léčebného postupu', 'Diabetes mellitus', 'MUDr. Martin Blažík', 'MUDr. Tomáš Canibal', 'MUDr. Peter Kultan', '2010-11-01', '4', '2023-12-01', 'KHN', '2022-12-01', 'standardy_lecebne-diabetes_mellitus-revize-4.pdf', 'lec05', 'Schváleno', '2023-01-13 21:33:31', '2023-01-16 21:00:57'),
(6, 3, 'Standard léčebného postupu', NULL, 6, 'Standard léčebného postupu', 'Epilepsie', 'MUDr. Henryk Brzeżański', 'MUDr. Tomáš Canibal', 'MUDr. Michaela Holubová', '2005-07-01', '6', '2023-12-01', 'NEU-ODD', '2022-12-01', 'standardy_lecebne-epilepsie-revize-6.pdf', 'lec06', 'Schváleno', '2023-01-13 21:34:48', '2023-01-16 21:02:01'),
(7, 3, 'Standard léčebného postupu', NULL, 7, 'Standard léčebného postupu', 'Febrilie nejasné etiologie', 'MUDr. Petr Materna', 'MUDr. Tomáš Canibal', NULL, '2007-01-01', '4', '2023-12-01', 'MEZ-JIP, NEU-JIP, INT-ODD', '2022-12-01', 'standardy_lecebne-febrilie_nejasne_etiologie-revize-4.pdf', 'lec07', 'Schváleno', '2023-01-13 21:36:13', '2023-01-16 21:03:11'),
(8, 3, 'Standard léčebného postupu', NULL, 8, 'Standard léčebného postupu', 'Chronická bolest u degenerativních onemocnění páteře', 'MUDr. Henryk Brzeżański', 'MUDr. Tomáš Canibal', 'MUDr. Kamila Zarzycká', '2005-07-01', '5', '2023-12-01', 'NEU-ODD', '2019-02-01', 'standardy_lecebne-chronicka_bolest_u_degenerativnich_onemocneni_patere-revize-5.pdf', 'lec08', 'Schváleno', '2023-01-13 21:38:25', '2023-01-16 21:05:05'),
(9, 3, 'Standard léčebného postupu', NULL, 9, 'Standard léčebného postupu', 'Soubor indikačních kritérií a postupů oddělení chirurgie páteře', 'MUDr. David Buzek, MUDr. Dušan Sýkora', 'MUDr. Tomáš Canibal', 'MUDr. David Buzek', '2005-07-01', '6', '2023-12-01', 'ONP', '2022-12-01', 'standardy_lecebne-soubor_indikacnich_kriterii_a_postupu_oddeleni_chirurgie_patere-revize-6.pdf', 'lec09', 'Schváleno', '2023-01-13 21:39:52', '2023-01-16 21:07:29'),
(10, 3, 'Standard léčebného postupu', NULL, 10, 'Standard léčebného postupu', 'Indikace zátěžových vyšetření', 'MUDr. Pavlína Janková', 'MUDr. Tomáš Canibal', 'MUDr. Peter Kultan', '2007-01-01', '5', '2023-12-01', 'MEZ-JIP, NEU-JIP, INT-ODD, NEU-ODD', '2022-12-01', 'standardy_lecebne-indikace_zatezovych_vysetreni-revize-5.pdf', 'lec10', 'Schváleno', '2023-01-13 21:40:42', '2023-01-16 21:09:36'),
(11, 3, 'Standard léčebného postupu', NULL, 11, 'Standard léčebného postupu', 'Ischemická cévní mozková příhoda', 'MUDr. Henryk Brzeżański', 'MUDr. Tomáš Canibal', 'MUDr. Hana Paloušková', '2005-07-01', '6', '2023-12-01', 'MEZ-JIP, NEU-JIP, INT-ODD, NEU-ODD', '2022-12-01', 'standardy_lecebne-ischemicka_cevni_mozkova_prihoda-revize-6.pdf', 'lec11', 'Schváleno', '2023-01-13 21:41:31', '2023-01-16 21:10:54'),
(12, 3, 'Standard léčebného postupu', NULL, 12, 'Standard léčebného postupu', 'Myokarditida', 'MUDr. Pavlína Janková', 'MUDr. Tomáš Canibal', 'MUDr. Peter Kultan', '2006-12-01', '5', '2023-12-01', 'MEZ-JIP, INT-ODD', '2022-12-01', 'standardy_lecebne-myokarditida-revize-5.pdf', 'lec12', 'Schváleno', '2023-01-13 21:42:52', '2023-01-16 21:16:41'),
(13, 3, 'Standard léčebného postupu', NULL, 13, 'Standard léčebného postupu', 'Myopatie', 'MUDr. Marek Böhm', 'MUDr. Tomáš Canibal', 'MUDr. Roman Sukop', '2007-12-01', '5', '2023-12-01', 'NEU-ODD', '2022-12-01', 'standardy_lecebne-myopatie-revize-5.pdf', 'lec13', 'Schváleno', '2023-01-13 21:49:16', '2023-01-16 21:16:51'),
(14, 3, 'Standard léčebného postupu', NULL, 14, 'Standard léčebného postupu', 'Parkinsonova choroba', NULL, NULL, NULL, NULL, '6', NULL, NULL, NULL, 'standardy_lecebne-parkinsonova_choroba-revize-6.pdf', 'lec14', 'Schváleno', '2023-01-13 21:49:58', '2023-01-15 23:09:09'),
(15, 3, 'Standard léčebného postupu', NULL, 15, 'Standard léčebného postupu', 'Polyneuropathie', 'MUDr. Henryk Brzeżański', 'MUDr. Tomáš Canibal', 'MUDr. Roman Sukop', '2005-07-01', '6', '2023-12-01', 'NEU-ODD', '2022-12-01', 'standardy_lecebne-polyneuropathie-revize-6.pdf', 'lec15', 'Schváleno', '2023-01-13 21:51:20', '2023-01-16 21:18:04'),
(16, 3, 'Standard léčebného postupu', NULL, 16, 'Standard léčebného postupu', 'Předoperační vyšetření kardiaka před nekardiochirurgickými výkony', 'MUDr. Aleš Barnet', 'MUDr. Andrea Janíková', 'MUDr. Andrea Adamová', '2006-10-01', '5', '2023-12-01', 'MEZ-JIP, INT-JIP, INT-AMB', '2022-12-01', 'standardy_lecebne-predoperacni_vysetreni_kardiaka_pred_nekardiochirurgickymi_vykony-revize-5.pdf', 'lec16', 'Schváleno', '2023-01-13 21:52:04', '2023-01-16 21:20:33'),
(17, 3, 'Standard léčebného postupu', NULL, 17, 'Standard léčebného postupu', 'Roztroušená skleróza', 'MUDr. Henryk Brzeżański', 'MUDr. Tomáš Canibal', 'MUDr. Michaela Holubová', '2005-07-01', '6', '2023-12-01', 'NEU-ODD', '2022-12-01', 'standardy_lecebne-roztrousena_skleroza-revize-6.pdf', 'lec17', 'Schváleno', '2023-01-13 21:53:04', '2023-01-16 21:22:03'),
(18, 3, 'Standard léčebného postupu', NULL, 18, 'Standard léčebného postupu', 'Soubor indikačních kritérií a postupů oddělení ortopedie', 'MUDr. Jiří Pešek', 'MUDr. Tomáš Canibal', 'MUDr. Radek Pavličný', '2011-01-01', '2', NULL, 'ORT-ODD', '2019-02-01', 'standardy_lecebne-soubor_indikacnich_kriterii_a_postupu_oddeleni_ortopedie-revize-2.pdf', 'lec18', 'Schváleno', '2023-01-13 21:54:14', '2023-01-16 21:23:32'),
(19, 3, 'Standard léčebného postupu', NULL, 19, 'Standard léčebného postupu', 'Soubor postupů při ošetření infikované nebo potenciálně infikované TEP', 'MUDr. Dalibor Mráček', 'MUDr. Tomáš Canibal', 'MUDr. Radek Pavličný', '2012-07-01', '2', '2023-12-01', 'ORT-ODD', '2016-12-29', 'standardy_lecebne-soubor_postupu_pri_osetreni_infikovane_nebo_potencialne_infikovane_tep-revize-2.pdf', 'lec19', 'Schváleno', '2023-01-13 21:55:05', '2023-01-16 21:26:48'),
(20, 3, 'Standard léčebného postupu', NULL, 20, 'Standard léčebného postupu', 'Vředová choroba gastroduodena', 'MUDr. Josef Střída', 'MUDr. Tomáš Canibal', 'MUDr. Peter Kultan', '2007-01-01', '5', '2023-12-01', 'MEZ-JIP, INT-ODD', '2022-12-01', 'standardy_lecebne-vredova_choroba_gastroduodena-revize-5.pdf', 'lec20', 'Schváleno', '2023-01-13 21:56:19', '2023-01-16 21:28:10');

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
