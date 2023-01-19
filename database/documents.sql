-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Počítač: localhost
-- Vytvořeno: Čtv 19. led 2023, 13:14
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
(1, 3, 'Standard léčebného postupu', NULL, 1, 'Standard léčebného postupu', 'Akutní koronární syndromy', 'MUDr. Janková Pavlína', 'MUDr. Canibal Tomáš', 'MUDr. Kultan Peter', '2007-01-01', '5', '2024-01-10', 'MEZ-JIP, NEU-JIP, INT-ODD, NEU-ODD', '2022-12-01', 'standardy_lecebne-akutni_koronarni_syndromy-revize-5.pdf', 'STD3#1', 'Schváleno', '2023-01-18 21:02:48', '2023-01-19 12:34:20'),
(2, 3, 'Standard léčebného postupu', NULL, 2, 'Standard léčebného postupu', 'Antibiotiková profylaxe u operovaných pacientů', 'MUDr. Hurtová Šárka', 'MUDr. Canibal Tomáš', 'MUDr. Adamová Andrea', '2014-01-01', '3', '2023-12-01', 'ONP, ORT', '2022-12-01', 'standardy_lecebne-antibiotikova_profylaxe_u_operovanych_pacientu-revize-3.pdf', 'STD3#2', 'Schváleno', '2023-01-13 21:16:31', '2023-01-19 12:36:40'),
(3, 3, 'Standard léčebného postupu', NULL, 3, 'Standard léčebného postupu', 'Crohnova choroba', 'MUDr. Střída Josef', 'MUDr. Canibal Tomáš', 'MUDr. Kultan Peter', '2007-01-01', '5', '2023-12-01', 'MEZ-JIP, INT-ODD', '2022-12-01', 'standardy_lecebne-crohnova_choroba-revize-5.pdf', 'STD3#3', 'Schváleno', '2023-01-13 21:17:50', '2023-01-19 12:37:11'),
(4, 3, 'Standard léčebného postupu', NULL, 4, 'Standard léčebného postupu', 'Demence', 'MUDr. Böhm Marek', 'MUDr. Canibal Tomáš', 'MUDr. Vlachopulu Barbara', '2005-07-01', '6', '2023-12-01', 'NEU-ODD', '2022-12-01', 'standardy_lecebne-demence-revize-6.pdf', 'STD3#4', 'Schváleno', '2023-01-13 21:28:06', '2023-01-19 12:37:58'),
(5, 3, 'Standard léčebného postupu', NULL, 5, 'Standard léčebného postupu', 'Diabetes mellitus', 'MUDr. Blažík Martin', 'MUDr. Canibal Tomáš', 'MUDr. Kultan Peter', '2010-11-01', '4', '2023-12-01', 'KHN', '2022-12-01', 'standardy_lecebne-diabetes_mellitus-revize-4.pdf', 'STD3#5', 'Schváleno', '2023-01-13 21:33:31', '2023-01-19 12:36:09'),
(6, 3, 'Standard léčebného postupu', NULL, 6, 'Standard léčebného postupu', 'Epilepsie', 'MUDr. Brzeżański Henryk', 'MUDr. Canibal Tomáš', 'MUDr. Sukop Roman', '2005-07-01', '6', '2023-12-01', 'NEU-ODD', '2022-12-01', 'standardy_lecebne-epilepsie-revize-6.pdf', 'STD3#6', 'Schváleno', '2023-01-13 21:34:48', '2023-01-19 12:38:36'),
(7, 3, 'Standard léčebného postupu', NULL, 7, 'Standard léčebného postupu', 'Febrilie nejasné etiologie', 'MUDr. Materna Petr', 'MUDr. Canibal Tomáš', 'MUDr. Kultan Peter', '2007-01-01', '4', '2023-12-01', 'MEZ-JIP, NEU-JIP, INT-ODD', '2022-12-01', 'standardy_lecebne-febrilie_nejasne_etiologie-revize-4.pdf', 'STD3#7', 'Schváleno', '2023-01-13 21:36:13', '2023-01-19 12:39:22'),
(8, 3, 'Standard léčebného postupu', NULL, 8, 'Standard léčebného postupu', 'Chronická bolest u degenerativních onemocnění páteře', 'MUDr. Brzeżański Henryk', 'MUDr. Canibal Tomáš', 'MUDr. Kocurová Kamila', '2005-07-01', '5', '2023-12-01', 'NEU-ODD', '2019-02-01', 'standardy_lecebne-chronicka_bolest_u_degenerativnich_onemocneni_patere-revize-5.pdf', 'STD3#8', 'Schváleno', '2023-01-13 21:38:25', '2023-01-19 12:40:48'),
(9, 3, 'Standard léčebného postupu', NULL, 9, 'Standard léčebného postupu', 'Soubor indikačních kritérií a postupů oddělení chirurgie páteře', 'MUDr. Sýkora Dušan', 'MUDr. Canibal Tomáš', 'MUDr. Buzek David', '2005-07-01', '6', '2023-12-01', 'ONP', '2022-12-01', 'standardy_lecebne-soubor_indikacnich_kriterii_a_postupu_oddeleni_chirurgie_patere-revize-6.pdf', 'STD3#9', 'Schváleno', '2023-01-13 21:39:52', '2023-01-19 12:41:58'),
(10, 3, 'Standard léčebného postupu', NULL, 10, 'Standard léčebného postupu', 'Indikace zátěžových vyšetření', 'MUDr. Janková Pavlína', 'MUDr. Canibal Tomáš', 'MUDr. Kultan Peter', '2007-01-01', '5', '2023-12-01', 'MEZ-JIP, NEU-JIP, INT-ODD, NEU-ODD', '2022-12-01', 'standardy_lecebne-indikace_zatezovych_vysetreni-revize-5.pdf', 'STD3#10', 'Schváleno', '2023-01-13 21:40:42', '2023-01-19 12:43:14'),
(11, 3, 'Standard léčebného postupu', NULL, 11, 'Standard léčebného postupu', 'Ischemická cévní mozková příhoda', 'MUDr. Brzeżański Henryk', 'MUDr. Canibal Tomáš', 'MUDr. Ing. Paloušková Hana', '2005-07-01', '6', '2023-12-01', 'MEZ-JIP, NEU-JIP, INT-ODD, NEU-ODD', '2022-12-01', 'standardy_lecebne-ischemicka_cevni_mozkova_prihoda-revize-6.pdf', 'STD3#11', 'Schváleno', '2023-01-13 21:41:31', '2023-01-19 12:43:47'),
(12, 3, 'Standard léčebného postupu', NULL, 12, 'Standard léčebného postupu', 'Myokarditida', 'MUDr. Janková Pavlína', 'MUDr. Canibal Tomáš', 'MUDr. Kultan Peter', '2006-12-01', '5', '2023-12-01', 'MEZ-JIP, INT-ODD', '2022-12-01', 'standardy_lecebne-myokarditida-revize-5.pdf', 'STD3#12', 'Schváleno', '2023-01-13 21:42:52', '2023-01-19 12:44:23'),
(13, 3, 'Standard léčebného postupu', NULL, 13, 'Standard léčebného postupu', 'Myopatie', 'MUDr. Böhm Marek', 'MUDr. Canibal Tomáš', 'MUDr. Sukop Roman', '2007-12-01', '5', '2023-12-01', 'NEU-ODD', '2022-12-01', 'standardy_lecebne-myopatie-revize-5.pdf', 'STD3#13', 'Schváleno', '2023-01-13 21:49:16', '2023-01-19 12:45:08'),
(14, 3, 'Standard léčebného postupu', NULL, 14, 'Standard léčebného postupu', 'Parkinsonova choroba', 'MUDr. Brzeżański Henryk', 'MUDr. Canibal Tomáš', 'MUDr. Sukop Roman', '2005-07-01', '6', '2023-12-01', 'NEU-ODD', '2022-12-01', 'standardy_lecebne-parkinsonova_choroba-revize-6.pdf', 'STD3#14', 'Schváleno', '2023-01-13 21:49:58', '2023-01-19 13:06:30'),
(15, 3, 'Standard léčebného postupu', NULL, 15, 'Standard léčebného postupu', 'Polyneuropathie', 'MUDr. Böhm Marek', 'MUDr. Canibal Tomáš', 'MUDr. Sukop Roman', '2005-07-01', '6', '2023-12-01', 'NEU-ODD', '2022-12-01', 'standardy_lecebne-polyneuropathie-revize-6.pdf', 'STD3#15', 'Schváleno', '2023-01-13 21:51:20', '2023-01-19 13:13:19'),
(16, 3, 'Standard léčebného postupu', NULL, 16, 'Standard léčebného postupu', 'Předoperační vyšetření kardiaka před nekardiochirurgickými výkony', 'MUDr. Beran Daniel', 'MUDr. Janiková Andrea', 'MUDr. Adamová Andrea', '2006-10-01', '5', '2023-12-01', 'MEZ-JIP, INT-JIP, INT-AMB', '2022-12-01', 'standardy_lecebne-predoperacni_vysetreni_kardiaka_pred_nekardiochirurgickymi_vykony-revize-5.pdf', 'STD3#16', 'Schváleno', '2023-01-13 21:52:04', '2023-01-19 13:08:09'),
(17, 3, 'Standard léčebného postupu', NULL, 17, 'Standard léčebného postupu', 'Roztroušená skleróza', 'MUDr. Brzeżański Henryk', 'MUDr. Canibal Tomáš', 'MUDr. Holubová Michaela', '2005-07-01', '6', '2023-12-01', 'NEU-ODD', '2022-12-01', 'standardy_lecebne-roztrousena_skleroza-revize-6.pdf', 'STD3#17', 'Schváleno', '2023-01-13 21:53:04', '2023-01-19 13:08:56'),
(18, 3, 'Standard léčebného postupu', NULL, 18, 'Standard léčebného postupu', 'Soubor indikačních kritérií a postupů oddělení ortopedie', 'MUDr. Pešek Jiří', 'MUDr. Canibal Tomáš', 'MUDr. Pavličný Radek', '2011-01-01', '2', '2020-02-01', 'ORT-ODD', '2019-02-01', 'standardy_lecebne-soubor_indikacnich_kriterii_a_postupu_oddeleni_ortopedie-revize-2.pdf', 'STD3#18', 'Schváleno', '2023-01-13 21:54:14', '2023-01-19 13:09:42'),
(19, 3, 'Standard léčebného postupu', NULL, 19, 'Standard léčebného postupu', 'Soubor postupů při ošetření infikované nebo potenciálně infikované TEP', 'MUDr. Mráček Dalibor', 'MUDr. Canibal Tomáš', 'MUDr. Pavličný Radek', '2012-07-01', '2', '2017-12-29', 'ORT-ODD', '2016-12-29', 'standardy_lecebne-soubor_postupu_pri_osetreni_infikovane_nebo_potencialne_infikovane_tep-revize-2.pdf', 'STD3#19', 'Schváleno', '2023-01-13 21:55:05', '2023-01-19 13:10:25'),
(20, 3, 'Standard léčebného postupu', NULL, 20, 'Standard léčebného postupu', 'Vředová choroba gastroduodena', 'MUDr. Střída Josef', 'MUDr. Canibal Tomáš', 'MUDr. Kultan Peter', '2007-01-01', '5', '2023-12-01', 'MEZ-JIP, INT-ODD', '2022-12-01', 'standardy_lecebne-vredova_choroba_gastroduodena-revize-5.pdf', 'STD3#20', 'Schváleno', '2023-01-13 21:56:19', '2023-01-19 13:10:58');

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
