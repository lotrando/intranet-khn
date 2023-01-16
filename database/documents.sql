-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Počítač: localhost
-- Vytvořeno: Ned 15. led 2023, 23:51
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
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revision_date` date DEFAULT NULL,
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `unique_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Rozpracováno','Schváleno') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `documents`
--

INSERT INTO `documents` (`id`, `category_id`, `accordion_name`, `accordion_group`, `position`, `name`, `description`, `processed`, `authorize`, `examine`, `efficiency`, `revision`, `tags`, `revision_date`, `file`, `unique_code`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 'Standard léčebného postupu', NULL, 1, 'Standard léčebného postupu', 'Akutní koronární syndromy', NULL, NULL, NULL, NULL, '5', NULL, NULL, 'standardy_lecebne-akutni_koronarni_syndromy-revize-5.pdf', 'lec-01', 'Schváleno', '2023-01-13 21:02:48', '2023-01-15 23:05:20'),
(2, 3, 'Standard léčebného postupu', NULL, 2, 'Standard léčebného postupu', 'Antibiotiková profylaxe u operovaných pacientů', NULL, NULL, NULL, NULL, '3', NULL, NULL, 'standardy_lecebne-antibiotikova_profylaxe_u_operovanych_pacientu-revize-3.pdf', 'lec-02', 'Schváleno', '2023-01-13 21:16:31', '2023-01-15 23:07:05'),
(3, 3, 'Standard léčebného postupu', NULL, 3, 'Standard léčebného postupu', 'Crohnova choroba', NULL, NULL, NULL, NULL, '5', NULL, NULL, 'standardy_lecebne-crohnova_choroba-revize-5.pdf', 'lec-03', 'Schváleno', '2023-01-13 21:17:50', '2023-01-15 23:05:47'),
(4, 3, 'Standard léčebného postupu', NULL, 4, 'Standard léčebného postupu', 'Demence', NULL, NULL, NULL, NULL, '6', NULL, NULL, 'standardy_lecebne-demence-revize-6.pdf', 'lec-04', 'Schváleno', '2023-01-13 21:28:06', '2023-01-15 23:05:57'),
(5, 3, 'Standard léčebného postupu', NULL, 5, 'Standard léčebného postupu', 'Diabetes mellitus', NULL, NULL, NULL, NULL, '4', NULL, NULL, 'standardy_lecebne-diabetes_mellitus-revize-4.pdf', 'lec-05', 'Schváleno', '2023-01-13 21:33:31', '2023-01-15 23:06:05'),
(6, 3, 'Standard léčebného postupu', NULL, 6, 'Standard léčebného postupu', 'Epilepsie', NULL, NULL, NULL, NULL, '6', NULL, NULL, 'standardy_lecebne-epilepsie-revize-6.pdf', 'lec-06', 'Schváleno', '2023-01-13 21:34:48', '2023-01-15 23:06:18'),
(7, 3, 'Standard léčebného postupu', NULL, 7, 'Standard léčebného postupu', 'Febrilie nejasné etiologie', NULL, NULL, NULL, NULL, '4', NULL, NULL, 'standardy_lecebne-febrilie_nejasne_etiologie-revize-4.pdf', 'lec-07', 'Schváleno', '2023-01-13 21:36:13', '2023-01-15 23:06:29'),
(8, 3, 'Standard léčebného postupu', NULL, 8, 'Standard léčebného postupu', 'Chronická bolest u degenerativních onemocnění páteře', NULL, NULL, NULL, NULL, '5', NULL, NULL, 'standardy_lecebne-chronicka_bolest_u_degenerativnich_onemocneni_patere-revize-5.pdf', 'lec-08', 'Schváleno', '2023-01-13 21:38:25', '2023-01-15 23:07:54'),
(9, 3, 'Standard léčebného postupu', NULL, 9, 'Standard léčebného postupu', 'Soubor indikačních kritérií a postupů oddělení chirurgie páteře', NULL, NULL, NULL, NULL, '6', NULL, NULL, 'standardy_lecebne-soubor_indikacnich_kriterii_a_postupu_oddeleni_chirurgie_patere-revize-6.pdf', 'lec-09', 'Schváleno', '2023-01-13 21:39:52', '2023-01-15 23:08:04'),
(10, 3, 'Standard léčebného postupu', NULL, 10, 'Standard léčebného postupu', 'Indikace zátěžových vyšetření', NULL, NULL, NULL, NULL, '5', NULL, NULL, 'standardy_lecebne-indikace_zatezovych_vysetreni-revize-5.pdf', 'lec-10', 'Schváleno', '2023-01-13 21:40:42', '2023-01-15 23:08:18'),
(11, 3, 'Standard léčebného postupu', NULL, 11, 'Standard léčebného postupu', 'Ischemická cévní mozková příhoda', NULL, NULL, NULL, NULL, '6', NULL, NULL, 'standardy_lecebne-ischemicka_cevni_mozkova_prihoda-revize-6.pdf', 'lec-11', 'Schváleno', '2023-01-13 21:41:31', '2023-01-15 23:08:36'),
(12, 3, 'Standard léčebného postupu', NULL, 12, 'Standard léčebného postupu', 'Myokarditida', NULL, NULL, NULL, NULL, '5', NULL, NULL, 'standardy_lecebne-myokarditida-revize-5.pdf', 'lec-12', 'Schváleno', '2023-01-13 21:42:52', '2023-01-15 23:08:48'),
(13, 3, 'Standard léčebného postupu', NULL, 13, 'Standard léčebného postupu', 'Myopatie', NULL, NULL, NULL, NULL, '5', NULL, NULL, 'standardy_lecebne-myopatie-revize-5.pdf', 'lec-13', 'Schváleno', '2023-01-13 21:49:16', '2023-01-15 23:09:00'),
(14, 3, 'Standard léčebného postupu', NULL, 14, 'Standard léčebného postupu', 'Parkinsonova choroba', NULL, NULL, NULL, NULL, '6', NULL, NULL, 'standardy_lecebne-parkinsonova_choroba-revize-6.pdf', 'lec-14', 'Schváleno', '2023-01-13 21:49:58', '2023-01-15 23:09:09'),
(15, 3, 'Standard léčebného postupu', NULL, 15, 'Standard léčebného postupu', 'Polyneuropathie', NULL, NULL, NULL, NULL, '6', NULL, NULL, 'standardy_lecebne-polyneuropathie-revize-6.pdf', 'lec-15', 'Schváleno', '2023-01-13 21:51:20', '2023-01-15 23:09:18'),
(16, 3, 'Standard léčebného postupu', NULL, 16, 'Standard léčebného postupu', 'Předoperační vyšetření kardiaka před nekardiochirurgickými výkony', NULL, NULL, NULL, NULL, '5', NULL, NULL, 'standardy_lecebne-predoperacni_vysetreni_kardiaka_pred_nekardiochirurgickymi_vykony-revize-5.pdf', 'lec-16', 'Schváleno', '2023-01-13 21:52:04', '2023-01-15 23:09:30'),
(17, 3, 'Standard léčebného postupu', NULL, 17, 'Standard léčebného postupu', 'Roztroušená skleróza', NULL, NULL, NULL, NULL, '6', NULL, NULL, 'standardy_lecebne-roztrousena_skleroza-revize-6.pdf', 'lec-17', 'Schváleno', '2023-01-13 21:53:04', '2023-01-15 23:09:40'),
(18, 3, 'Standard léčebného postupu', NULL, 18, 'Standard léčebného postupu', 'Soubor indikačních kritérií a postupů oddělení ortopedie', NULL, NULL, NULL, NULL, '2', NULL, NULL, 'standardy_lecebne-soubor_indikacnich_kriterii_a_postupu_oddeleni_ortopedie-revize-2.pdf', 'lec-18', 'Schváleno', '2023-01-13 21:54:14', '2023-01-15 23:09:54'),
(19, 3, 'Standard léčebného postupu', NULL, 19, 'Standard léčebného postupu', 'Standard léčebného postupu Soubor postupů při ošetření infikované nebo potenciálně infikované TEP', NULL, NULL, NULL, NULL, '2', NULL, NULL, 'standardy_lecebne-standard_lecebneho_postupu_soubor_postupu_pri_osetreni_infikovane_nebo_potencialne_infikovane_tep-revize-2.pdf', 'lec-19', 'Schváleno', '2023-01-13 21:55:05', '2023-01-15 23:10:03'),
(20, 3, 'Standard léčebného postupu', NULL, 20, 'Standard léčebného postupu', 'Vředová choroba gastroduodena', NULL, NULL, NULL, NULL, '5', NULL, NULL, 'standardy_lecebne-vredova_choroba_gastroduodena-revize-5.pdf', 'lec-20', 'Schváleno', '2023-01-13 21:56:19', '2023-01-15 23:10:16'),
(21, 1, '1. Správná identifikace pacientů', 1, 1, '1 Správná identifikace pacientů', 'Správná identifikace pacientů', NULL, NULL, NULL, NULL, '3', NULL, NULL, 'standardy_operacni-spravna_identifikace_pacientu-revize-3.pdf', 'akr-01', 'Schváleno', '2023-01-13 22:00:10', '2023-01-15 23:16:08'),
(22, 1, '2. Efektivní komunikace', 1, 2, '2 Efektivní komunikace', 'Efektivní komunikace', NULL, NULL, NULL, NULL, '7', NULL, NULL, 'standardy_operacni-efektivni_komunikace-revize-7.pdf', 'akr-02', 'Schváleno', '2023-01-13 22:02:08', '2023-01-15 23:16:30'),
(23, 1, '3. Zvýšení bezpečí u rizikových léků', 1, 3, '3 Zvýšení bezpečí u rizikových léků', 'Zvýšení bezpečí u rizikových léků', NULL, NULL, NULL, NULL, '3', NULL, NULL, 'standardy_operacni-zvyseni_bezpeci_u_rizikovych_leku-revize-3.pdf', 'akr-03', 'Schváleno', '2023-01-13 22:03:22', '2023-01-15 23:16:42');

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
