-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Úte 14. bře 2023, 13:31
-- Verze serveru: 10.4.24-MariaDB
-- Verze PHP: 7.4.29

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `document_id` bigint(20) NOT NULL,
  `category_id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revision` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Schváleno','Rozpracováno') COLLATE utf8mb4_unicode_ci NOT NULL,
  `onscreen` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `addons`
--

INSERT INTO `addons` (`id`, `document_id`, `category_id`, `position`, `description`, `revision`, `file`, `status`, `onscreen`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 0, 0, 172, 'Aktivizační plán', '172', 'none', 'Schváleno', 14, 0, '2023-01-30 10:47:56', '2023-01-30 10:47:56'),
(2, 0, 0, 47, 'Bilanční list', '047', 'none', 'Schváleno', 14, 0, '2023-01-30 10:47:56', '2023-01-30 10:47:56'),
(3, 0, 0, 114, 'Evidence cenností uschovaných v pokladně KHN při překladu pacienta do jiného ZZ', '114', 'none', 'Schváleno', 14, 0, '2023-01-30 10:47:56', '2023-01-30 10:47:56'),
(4, 0, 0, 68, 'Evidence osobních potřeb a cenností při přeložení pacienta', '068', 'none', 'Schváleno', 14, 0, '2023-01-30 10:47:56', '2023-01-30 10:47:56'),
(5, 0, 0, 46, 'Glykemická karta', '046', 'none', 'Schváleno', 14, 0, '2023-01-30 10:47:56', '2023-01-30 10:47:56'),
(6, 0, 0, 9, 'Chorobopis', '009', 'none', 'Schváleno', 14, 0, '2023-01-30 10:47:56', '2023-01-30 10:47:56'),
(7, 0, 0, 0, 'Krátkodobá ošetřovatelská dokumentace - ortopedie', '???', 'none', 'Schváleno', 14, 0, '2023-01-30 10:47:56', '2023-01-30 10:47:56'),
(8, 0, 0, 37, 'NIHSS', '037', 'none', 'Schváleno', 14, 0, '2023-01-30 10:47:56', '2023-01-30 10:47:56'),
(9, 0, 0, 173, 'Ošetřovatelská anamnéza - následná péče', '173', 'none', 'Schváleno', 14, 0, '2023-01-30 10:47:56', '2023-01-30 10:47:56'),
(10, 0, 0, 176, 'Ošetřovatelská překladová zpráva', '176', 'none', 'Schváleno', 14, 0, '2023-01-30 10:47:56', '2023-01-30 10:47:56'),
(11, 0, 0, 66, 'Ošetřovatelský záznam CNP JIP', '066', 'none', 'Schváleno', 14, 0, '2023-01-30 10:47:56', '2023-01-30 10:47:56'),
(12, 0, 0, 52, 'Ošetřovatelský záznam MEZ JIP', '052', 'none', 'Schváleno', 14, 0, '2023-01-30 10:47:56', '2023-01-30 10:47:56'),
(13, 0, 0, 96, 'Péče o rány a defekty', '096', 'none', 'Schváleno', 14, 0, '2023-01-30 10:47:56', '2023-01-30 10:47:56'),
(14, 0, 0, 175, 'Plán ošetřovatelské péče', '175', 'none', 'Schváleno', 14, 0, '2023-01-30 10:47:56', '2023-01-30 10:47:56'),
(15, 0, 0, 12, 'Pokyny k předoperační přípravě pacienta', '012', 'none', 'Schváleno', 14, 0, '2023-01-30 10:47:56', '2023-01-30 10:47:56'),
(16, 0, 0, 146, 'Pokyny k předoperační přípravě pacienta - nástup v den operace', '146', 'none', 'Schváleno', 14, 0, '2023-01-30 10:47:56', '2023-01-30 10:47:56'),
(17, 0, 0, 125, 'Protokol o aplikaci návykových látek', '125', 'none', 'Schváleno', 14, 0, '2023-01-30 10:47:56', '2023-01-30 10:47:56'),
(18, 0, 0, 103, 'RES CNP-JIP', '103', 'none', 'Schváleno', 14, 0, '2023-01-30 10:47:56', '2023-01-30 10:47:56'),
(19, 0, 0, 81, 'RES MEZ-JIP', '81', 'none', 'Schváleno', 14, 0, '2023-01-30 10:47:56', '2023-01-30 10:47:56'),
(20, 0, 0, 21, 'Sesterská překladová zpráva', '21', 'none', 'Schváleno', 14, 0, '2023-01-30 10:47:56', '2023-01-30 10:47:56'),
(21, 0, 0, 109, 'Sesterský denní záznam', '109', 'none', 'Schváleno', 14, 0, '2023-01-30 10:47:56', '2023-01-30 10:47:56'),
(22, 0, 0, 171, 'Sesterský denní záznam - následná péče', '171', 'none', 'Schváleno', 14, 0, '2023-01-30 10:47:56', '2023-01-30 10:47:56'),
(23, 0, 0, 111, 'Sesterský denní záznam chirurgické obory', '111', 'none', 'Schváleno', 14, 0, '2023-01-30 10:47:56', '2023-01-30 10:47:56'),
(24, 0, 0, 110, 'Sesterský denní záznam interní obory', '110', 'none', 'Schváleno', 14, 0, '2023-01-30 10:47:56', '2023-01-30 10:47:56'),
(25, 0, 0, 112, 'Sesterský denní záznam rehabilitace', '112', 'none', 'Schváleno', 14, 0, '2023-01-30 10:47:56', '2023-01-30 10:47:56'),
(26, 0, 0, 44, 'Sledování bolesti', '044', 'none', 'Schváleno', 14, 0, '2023-01-30 10:47:56', '2023-01-30 10:47:56'),
(27, 0, 0, 116, 'Soupis cenných věcí pacienta pro všechny oddělení', '116', 'none', 'Schváleno', 14, 0, '2023-01-30 10:47:56', '2023-01-30 10:47:56'),
(28, 0, 0, 0, 'Ošetřovatelská anamnéza pro jednodenní chirurgii', '???', 'none', 'Schváleno', 14, 0, '2023-01-30 10:47:56', '2023-01-30 10:47:56'),
(29, 0, 0, 0, 'Telemetrie', '???', 'none', 'Schváleno', 14, 0, '2023-01-30 10:47:56', '2023-01-30 10:47:56'),
(30, 0, 0, 122, 'Verifikační protokol', '122', 'none', 'Schváleno', 14, 0, '2023-01-30 10:47:56', '2023-01-30 10:47:56'),
(50, 121, 25, 1, 'Evidenční list evakuovaných osob z místa vzniku nežádoucí události', 'květen 2022', 'bozp_bezpecnostni-plany-evidencni_list_evakuovanych_osob_z_mista_vzniku_nezadouci_udalosti-priloha-1-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-11 07:11:27', '2023-03-11 07:11:27'),
(51, 121, 25, 2, 'Evidenční list evakuovaných osob na místě shromáždění', 'květen 2022', 'bozp_bezpecnostni-plany-evidencni_list_evakuovanych_osob_na_miste_shromazdeni-priloha-2-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-11 07:12:41', '2023-03-11 07:12:41'),
(52, 121, 25, 4, 'Karta pokynů pro řídícího evakuace', 'květen 2022', 'bozp_bezpecnostni-plany-karta_pokynu_pro_ridiciho_evakuace-priloha-4-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-11 11:22:57', '2023-03-11 11:22:57'),
(53, 121, 25, 5, 'Karta pokynů pro zaměstnance pověřeného dozorem příslušných vstupních dveří', 'květen 2022', 'bozp_bezpecnostni-plany-karta_pokynu_pro_zamestnance_povereneho_dozorem_prislusnych_vstupnich__dveri-priloha-5-revize-kveten_2022.pdf', 'Schváleno', NULL, 11, '2023-03-11 11:37:27', '2023-03-11 11:37:27'),
(54, 122, 25, 1, 'Operační karta - recepční', 'červen 2021', 'bozp_bezpecnostni-plany-operacni_karta_-_recepcni-priloha-1-revize-cerven_2021.pdf', 'Schváleno', NULL, 11, '2023-03-11 11:38:55', '2023-03-11 11:38:55'),
(55, 121, 25, 6, 'Osnova pokynů pro recepci při nežádoucích událostech', 'květen 2022', 'bozp_bezpecnostni-plany-osnova_pokynu_pro_recepci_pri_nezadoucich_udalostech-priloha-6-revize-kveten_2022.pdf', 'Schváleno', NULL, 11, '2023-03-11 12:30:54', '2023-03-11 12:30:54'),
(56, 121, 25, 7, 'Důležité kontaktní údaje', 'květen 2022', 'bozp_bezpecnostni-plany-osnova_pokynu_pro_recepci_pri_nezadoucich_udalostech-priloha-7-revize-kveten_2022.pdf', 'Schváleno', NULL, 11, '2023-03-11 12:31:41', '2023-03-11 12:31:41'),
(57, 122, 25, 2, 'Operační karta - ředitel nemocnice', 'červen 2021', 'bozp_bezpecnostni-plany-operacni_karta_-_reditel_nemocnice-priloha-2-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-11 12:34:14', '2023-03-11 12:34:14'),
(58, 122, 25, 3, 'Operační karta - žurnální lékař', 'červen 2021', 'bozp_bezpecnostni-plany-operacni_karta_-_zurnalni_lekar-priloha-3-revize-cerven_2021.pdf', 'Schváleno', NULL, 11, '2023-03-11 12:34:47', '2023-03-11 12:34:47'),
(59, 122, 25, 4, 'Operační karta - náměstek pro ošetřovatelkou péči', 'červen 2021', 'bozp_bezpecnostni-plany-operacni_karta_-_namestek_pro_osetrovatelkou_peci-priloha-4-revize-cerven_2021.pdf', 'Schváleno', NULL, 11, '2023-03-11 12:37:03', '2023-03-11 12:37:03'),
(60, 122, 25, 5, 'Operační karta - provozně technický náměstek', 'červen 2021', 'bozp_bezpecnostni-plany-operacni_karta_-_provozne_technicky_namestek-priloha-5-revize-cerven_2021.pdf', 'Schváleno', NULL, 11, '2023-03-11 12:37:50', '2023-03-11 12:37:50'),
(61, 122, 25, 6, 'Operační karta - lůžkové oddělení', 'červen 2021', 'bozp_bezpecnostni-plany-operacni_karta_-_luzkove_oddeleni-priloha-6-revize-cerven_2021.pdf', 'Schváleno', NULL, 11, '2023-03-11 12:38:30', '2023-03-11 12:38:30'),
(62, 122, 25, 7, 'Trauma balík', 'červen 2021', 'bozp_bezpecnostni-plany-trauma_balik-priloha-7-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-11 12:40:00', '2023-03-11 12:40:00'),
(63, 122, 25, 8, 'Organizační set', 'červen 2021', 'bozp_bezpecnostni-plany-organizacni_set-priloha-8-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-11 12:40:22', '2023-03-11 12:40:22'),
(64, 122, 25, 9, 'Pokyny pro přidělování fiktivních rodných při aktivaci traumatologického plánu v KHN a.s.', 'červen 2021', 'bozp_bezpecnostni-plany-pokyny_pro_pridelovani_fiktivnich_rodnych_cisel-priloha-9-revize-cerven_2021.pdf', 'Schváleno', NULL, 11, '2023-03-11 12:41:57', '2023-03-11 12:41:57'),
(65, 121, 25, 3, 'Evidenční list evakuovaných osob z KHN do jiného ZZ nebo domácího léčení', 'květen 2022', 'bozp_bezpecnostni-plany-evidencni_list_evakuovanych_osob_do_jineho_zz_nebo_domaciho_leceni-priloha-3-revize-kveten_2022.pdf', 'Schváleno', NULL, 11, '2023-03-11 12:31:41', '2023-03-11 12:31:41'),
(76, 275, 33, 1, 'Ambulance interní - lékaři', '1', 'bozp_rizika-ambulance_interni_-_lekari-priloha-1-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 07:07:43', '2023-03-14 07:07:43'),
(77, 275, 33, 2, 'Ambulance interní - sestra', '1', 'bozp_rizika-ambulance_interni_-_sestra-priloha-2-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 07:08:10', '2023-03-14 07:08:10'),
(78, 275, 33, 3, 'Ambulance interní - sanitář', '1', 'bozp_rizika-ambulance_interni_-_sanitar-priloha-3-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 07:11:06', '2023-03-14 07:11:06'),
(79, 276, 33, 1, 'Ambulance neurologická - lékaři', '1', 'bozp_rizika-ambulance_neurologicka_-_lekari-priloha-1-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 07:12:44', '2023-03-14 07:12:44'),
(80, 276, 33, 2, 'Ambulance neurologická - sestra', '1', 'bozp_rizika-ambulance_neurologicka_-_sestra-priloha-2-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 07:13:07', '2023-03-14 07:13:07'),
(81, 276, 33, 3, 'Ambulance neurologická - sanitář', '1', 'bozp_rizika-ambulance_neurologicka_-_sanitar-priloha-3-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 07:13:44', '2023-03-14 07:13:44'),
(82, 277, 33, 1, 'Ambulance ONP a ortopedická - lékaři', '1', 'bozp_rizika-ambulance_onp_a_ortopedicka_-_lekari-priloha-1-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 07:15:37', '2023-03-14 07:15:37'),
(83, 277, 33, 2, 'Ambulance ONP a ortopedická - sestra', '1', 'bozp_rizika-ambulance_onp_a_ortopedicka_-_sestra-priloha-2-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 07:16:13', '2023-03-14 07:16:13'),
(84, 277, 33, 3, 'Ambulance ONP a ortopedická - sanitář', '1', 'bozp_rizika-ambulance_onp_a_ortopedicka_-_sanitar-priloha-3-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 07:16:39', '2023-03-14 07:16:39'),
(85, 279, 33, 1, 'Interní oddělení - lékaři', '1', 'bozp_rizika-interni_oddeleni_-_lekari-priloha-1-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 07:18:38', '2023-03-14 07:18:38'),
(86, 279, 33, 2, 'Interní oddělení - sestra', '1', 'bozp_rizika-interni_oddeleni_-_sestra-priloha-2-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 07:19:02', '2023-03-14 07:19:02'),
(87, 279, 33, 3, 'Interní oddělení - sanitář', '1', 'bozp_rizika-interni_oddeleni_-_sanitar-priloha-3-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 07:19:35', '2023-03-14 07:19:35'),
(88, 279, 33, 4, 'Interní oddělení - dokumentační pracovník', '1', 'bozp_rizika-interni_oddeleni_-_dokumentacni_pracovnik-priloha-4-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 07:20:05', '2023-03-14 07:20:05'),
(89, 280, 33, 1, 'JIP Mezioborová - lékaři', '1', 'bozp_rizika-jip_mezioborova_-_lekari-priloha-1-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 07:21:07', '2023-03-14 07:21:07'),
(90, 280, 33, 2, 'JIP Mezioborová - sestra', '1', 'bozp_rizika-jip_mezioborova_-_sestra-priloha-2-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 07:21:24', '2023-03-14 07:21:24'),
(91, 280, 33, 3, 'JIP Mezioborová - sanitář', '1', 'bozp_rizika-jip_mezioborova_-_sanitar-priloha-3-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 07:21:45', '2023-03-14 07:21:45'),
(92, 281, 33, 1, 'JIP chirurgie páteře - lékaři', '1', 'bozp_rizika-jip_chirurgie_patere_-_lekari-priloha-1-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 07:22:37', '2023-03-14 07:22:37'),
(93, 281, 33, 3, 'JIP chirurgie páteře - sanitář', '1', 'bozp_rizika-jip_chirurgie_patere_-_sanitar-priloha-3-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 07:24:08', '2023-03-14 07:24:08'),
(94, 282, 33, 1, 'Lékárna - farmaceut, laborant', '1', 'bozp_rizika-lekarna_-_farmaceut,_laborant-priloha-1-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 07:25:06', '2023-03-14 07:25:06'),
(95, 282, 33, 2, 'Lékárna - sanitář', '1', 'bozp_rizika-lekarna_-_sanitar-priloha-2-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 07:26:20', '2023-03-14 07:26:20'),
(96, 283, 33, 1, 'Neurologické oddělení - lékaři', '1', 'bozp_rizika-neurologicke_oddeleni_-_lekari-priloha-1-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 07:27:56', '2023-03-14 07:27:56'),
(97, 283, 33, 2, 'Neurologické oddělení - sestra', '1', 'bozp_rizika-neurologicke_oddeleni_-_sestra-priloha-2-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 07:28:30', '2023-03-14 07:28:30'),
(98, 283, 33, 3, 'Neurologické oddělení - sanitář', '1', 'bozp_rizika-neurologicke_oddeleni_-_sanitar-priloha-3-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 07:28:48', '2023-03-14 07:28:48'),
(99, 283, 33, 4, 'Neurologické oddělení - dokumentační pracovník', '1', 'bozp_rizika-neurologicke_oddeleni_-_dokumentacni_pracovnik-priloha-4-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 07:29:16', '2023-03-14 07:29:16'),
(100, 284, 33, 1, 'Oddělení chirurgie páteře - lékaři', '1', 'bozp_rizika-oddeleni_chirurgie_patere_-_lekari-priloha-1-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 07:30:40', '2023-03-14 07:30:40'),
(101, 284, 33, 2, 'Oddělení chirurgie páteře - sestra', '1', 'bozp_rizika-oddeleni_chirurgie_patere_-_sestra-priloha-2-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 07:30:57', '2023-03-14 07:30:57'),
(102, 284, 33, 3, 'Oddělení chirurgie páteře - sanitář', '1', 'bozp_rizika-oddeleni_chirurgie_patere_-_sanitar-priloha-3-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 07:31:20', '2023-03-14 07:31:20'),
(103, 284, 33, 4, 'Oddělení chirurgie páteře - dokumentační pracovník', '1', 'bozp_rizika-oddeleni_chirurgie_patere_-_dokumentacni_pracovnik-priloha-4-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 07:52:36', '2023-03-14 07:52:36'),
(104, 285, 33, 1, 'OCHP - lékaři', '1', 'bozp_rizika-ochp_-_lekari-priloha-1-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 07:53:37', '2023-03-14 07:53:37'),
(105, 285, 33, 2, 'OCHP - sestra', '1', 'bozp_rizika-ochp_-_sestra-priloha-2-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 07:54:07', '2023-03-14 07:54:07'),
(106, 285, 33, 3, 'OCHP - sanitář', '1', 'bozp_rizika-ochp_-_sanitar-priloha-3-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 07:55:04', '2023-03-14 07:55:04'),
(107, 286, 33, 1, 'OKB - lékaři', '1', 'bozp_rizika-okb_-_lekari-priloha-1-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 07:55:25', '2023-03-14 07:55:25'),
(108, 286, 33, 2, 'OKB - laborant', '1', 'bozp_rizika-okb_-_laborant-priloha-2-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 07:55:48', '2023-03-14 07:55:48'),
(109, 286, 33, 3, 'OKB - sanitář', '1', 'bozp_rizika-okb_-_sanitar-priloha-3-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 07:56:12', '2023-03-14 07:56:12'),
(110, 287, 33, 1, 'Operační sál - lékaři', '1', 'bozp_rizika-operacni_sal_-_lekari-priloha-1-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 07:56:55', '2023-03-14 07:56:55'),
(111, 287, 33, 2, 'Operační sál - sestra', '1', 'bozp_rizika-operacni_sal_-_sestra-priloha-2-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 07:57:17', '2023-03-14 07:57:17'),
(112, 287, 33, 3, 'Operační sál - sanitář', '1', 'bozp_rizika-operacni_sal_-_sanitar-priloha-3-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 07:57:34', '2023-03-14 07:57:34'),
(113, 288, 33, 1, 'OPLS - lékaři', '1', 'bozp_rizika-opls_-_lekari-priloha-1-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 07:59:48', '2023-03-14 07:59:48'),
(114, 288, 33, 2, 'OPLS - sestra', '1', 'bozp_rizika-opls_-_sestra-priloha-2-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 08:00:24', '2023-03-14 08:00:24'),
(115, 288, 33, 3, 'OPLS - sanitář', '1', 'bozp_rizika-opls_-_sanitar-priloha-3-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 08:00:49', '2023-03-14 08:00:49'),
(116, 289, 33, 1, 'Ortopedické oddělení - lékaři', '1', 'bozp_rizika-ortopedicke_oddeleni_-_lekari-priloha-1-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 08:02:11', '2023-03-14 08:02:11'),
(117, 289, 33, 2, 'Ortopedické oddělení - sestra', '1', 'bozp_rizika-ortopedicke_oddeleni_-_sestra-priloha-2-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 08:02:51', '2023-03-14 08:02:51'),
(118, 289, 33, 3, 'Ortopedické oddělení - sanitář', '1', 'bozp_rizika-ortopedicke_oddeleni_-_sanitar-priloha-3-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 08:03:16', '2023-03-14 08:03:16'),
(119, 289, 33, 4, 'Ortopedické oddělení - dokumentační pracovník', '1', 'bozp_rizika-ortopedicke_oddeleni_-_dokumentacni_pracovnik-priloha-4-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 08:04:12', '2023-03-14 08:04:12'),
(120, 290, 33, 1, 'Provozní oddělení - mtz, skladní', '1', 'bozp_rizika-provozni_oddeleni_-_mtz,_skladni-priloha-1-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 08:05:02', '2023-03-14 08:05:02'),
(121, 290, 33, 2, 'Provozní oddělení - podatelna', '1', 'bozp_rizika-provozni_oddeleni_-_podatelna-priloha-2-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 08:05:17', '2023-03-14 08:05:17'),
(122, 290, 33, 3, 'Provozní oddělení - recepční', '1', 'bozp_rizika-provozni_oddeleni_-_recepcni-priloha-3-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 08:06:10', '2023-03-14 08:06:10'),
(123, 290, 33, 4, 'Provozní oddělení - spisovna', '1', 'bozp_rizika-provozni_oddeleni_-_spisovna-priloha-4-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 08:06:48', '2023-03-14 08:06:48'),
(124, 290, 33, 5, 'Provozní oddělení - řidič', '1', 'bozp_rizika-provozni_oddeleni_-_ridic-priloha-5-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 08:07:04', '2023-03-14 08:07:04'),
(125, 290, 33, 6, 'Provozní oddělení - údržbař', '1', 'bozp_rizika-provozni_oddeleni_-_udrzbar-priloha-6-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 08:07:26', '2023-03-14 08:07:26'),
(126, 291, 33, 1, 'RDG - lékaři', '1', 'bozp_rizika-rdg_-_lekari-priloha-1-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 08:08:01', '2023-03-14 08:08:01'),
(127, 291, 33, 2, 'RDG - laboranti', '1', 'bozp_rizika-rdg_-_laboranti-priloha-2-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 08:08:22', '2023-03-14 08:08:22'),
(128, 291, 33, 3, 'RDG - dokumentační pracovník', '1', 'bozp_rizika-rdg_-_dokumentacni_pracovnik-priloha-3-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 08:08:44', '2023-03-14 08:08:44'),
(129, 278, 33, 1, 'Ambulance rehabilitační - lékaři, fyzioterapeuti', '1', 'bozp_rizika-ambulance_rehabilitacni_-_lekari,_fyzioterapeuti-priloha-1-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 08:10:18', '2023-03-14 08:10:18'),
(130, 278, 33, 2, 'Ambulance rehabilitační - sanitář', '1', 'bozp_rizika-ambulance_rehabilitacni_-_sanitar-priloha-2-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 08:10:43', '2023-03-14 08:10:43'),
(131, 292, 33, 1, 'Rehabilitační oddělení - lékaři', '1', 'bozp_rizika-rehabilitacni_oddeleni_-_lekari-priloha-1-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 08:12:10', '2023-03-14 08:12:10'),
(132, 292, 33, 2, 'Rehabilitační oddělení - sestra', '1', 'bozp_rizika-rehabilitacni_oddeleni_-_sestra-priloha-2-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 08:12:29', '2023-03-14 08:12:29'),
(133, 292, 33, 3, 'Rehabilitační oddělení - sanitář', '1', 'bozp_rizika-rehabilitacni_oddeleni_-_sanitar-priloha-3-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 08:12:46', '2023-03-14 08:12:46'),
(134, 292, 33, 4, 'Rehabilitační oddělení - dokumentační pracovník', '1', 'bozp_rizika-rehabilitacni_oddeleni_-_dokumentacni_pracovnik-priloha-4-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 08:13:16', '2023-03-14 08:13:16'),
(135, 293, 33, 1, 'Ředitelství - náměstek pro ošetřovatelskou péči, manažer kvality', '1', 'bozp_rizika-reditelstvi_-_namestek_pro_osetrovatelskou_peci,_manazer_kvality-priloha-1-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 08:14:02', '2023-03-14 08:14:02'),
(136, 293, 33, 2, 'Ředitelství - metrolog', '1', 'bozp_rizika-reditelstvi_-_metrolog-priloha-2-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 08:14:19', '2023-03-14 08:14:19'),
(137, 293, 33, 3, 'Ředitelství - pokladna', '1', 'bozp_rizika-reditelstvi_-_pokladna-priloha-3-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 08:14:43', '2023-03-14 08:14:43'),
(138, 293, 33, 4, 'Ředitelství - sociální pracovník', '1', 'bozp_rizika-reditelstvi_-_socialni_pracovnik-priloha-4-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 08:15:15', '2023-03-14 08:15:15'),
(139, 295, 33, 1, 'Stravovací provoz - vedoucí', '1', 'bozp_rizika-stravovaci_provoz_-_vedouci-priloha-1-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 08:17:03', '2023-03-14 08:17:03'),
(140, 295, 33, 2, 'Stravovací provoz - nutriční terapeut', '1', 'bozp_rizika-stravovaci_provoz_-_nutricni_terapeut-priloha-2-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 08:17:23', '2023-03-14 08:17:23'),
(141, 295, 33, 3, 'Stravovací provoz - šéfkuchař, odborný kuchař', '1', 'bozp_rizika-stravovaci_provoz_-_sefkuchar,_odborny_kuchar-priloha-3-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 08:17:48', '2023-03-14 08:17:48'),
(142, 295, 33, 4, 'Stravovací provoz - skladní, pomocný kuchař', '1', 'bozp_rizika-stravovaci_provoz_-_skladni,_pomocny_kuchar-priloha-4-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 08:18:20', '2023-03-14 08:18:20'),
(143, 295, 33, 5, 'Stravovací provoz - pracovník rozvozu, kuchařka', '1', 'bozp_rizika-stravovaci_provoz_-_pracovnik_rozvozu,_kucharka-priloha-5-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 08:18:52', '2023-03-14 08:18:52'),
(144, 295, 33, 6, 'Stravovací provoz - prodavačka kantýna', '1', 'bozp_rizika-stravovaci_provoz_-_prodavacka_kantyna-priloha-6-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 08:19:14', '2023-03-14 08:19:14'),
(145, 296, 33, 1, 'Úklid - vedoucí úklidu, uklízečky', '1', 'bozp_rizika-uklid_-_vedouci_uklidu,_uklizecky-priloha-1-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 08:19:46', '2023-03-14 08:19:46'),
(146, 296, 33, 2, 'Úklid - okenář', '1', 'bozp_rizika-uklid_-_okenar-priloha-2-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 08:20:05', '2023-03-14 08:20:05'),
(147, 274, 33, 1, 'Ambulance anesteziologická - lékaři', '1', 'bozp_rizika-ambulance_anesteziologicka_-_lekari-priloha-1-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 08:28:46', '2023-03-14 08:28:46'),
(148, 274, 33, 2, 'Ambulance anesteziologická - sestra', '1', 'bozp_rizika-ambulance_anesteziologicka_-_sestra-priloha-2-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 08:29:07', '2023-03-14 08:29:07'),
(149, 274, 33, 3, 'Ambulance anesteziologická - sanitář', '1', 'bozp_rizika-ambulance_anesteziologicka_-_sanitar-priloha-3-revize-1.pdf', 'Schváleno', NULL, 11, '2023-03-14 08:29:45', '2023-03-14 08:29:45');

-- --------------------------------------------------------

--
-- Struktura tabulky `adversevents`
--

CREATE TABLE `adversevents` (
  `id` bigint(20) UNSIGNED NOT NULL,
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

--
-- Vypisuji data pro tabulku `adversevents`
--

INSERT INTO `adversevents` (`id`, `department_id`, `misto`, `datum_cas`, `cas`, `spec_druh`, `jinydoplnek`, `pracovnik`, `svedek`, `pacient`, `datumnaroz`, `chorobopis`, `udalost`, `reseni`, `opatreni`, `informovan`, `pricina`, `jina_pricina`, `stav_pacienta`, `lokalizace`, `druh_zraneni`, `preventivni_opatreni`, `zhodnoceni_stavu`, `datum`, `jmeno_lekare`, `vyvoj`, `upresneni`, `status`, `resitel`, `vyjadreni`, `resitel1`, `vyjadreni1`, `resitel2`, `vyjadreni2`, `created_at`, `updated_at`) VALUES
(1, '29', 'Rerum in molestiae i', '2023-01-15', '20:03:00', 'Pád', NULL, 'Sit deserunt obcaeca', 'Nesciunt exercitati', 'Dolores recusandae', '1994-07-26', 'Ducimus a dolor sit', 'Consectetur dolore p', 'Impedit aut incidun', 'Aut consequat Exerc', 'Fuga Velit autem in', 'pád z lůžka bez postranic', NULL, 'zmatený/á', 'horní končetiny', 'Tržná rána', 'dsfdsf', 'sdfdsfdsf', '2023-01-15', 'sdfdsfdsf', 'jiný', 'sdfdsfsdf', 'Dokončeno', NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-15 19:03:20', '2023-01-15 19:03:20'),
(2, '12', 'Aliqua Magnam id si', '1993-10-13', '15:45:00', 'Klinický výkon', NULL, 'Occaecat velit eiusm', 'In ducimus veniam', 'Dolorem maxime atque', '1970-08-07', 'Aut pariatur Conseq', 'Minima eius dolorem', 'Amet fuga Ut conse', 'Doloribus odio quos', 'Non aliquid delectus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'žádný', NULL, 'Rozpracováno', NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-16 07:22:05', '2023-01-16 19:42:42'),
(3, '31', 'Et eum ea ex possimu', '1982-03-24', '04:26:00', 'Transfuze, krevní deriváty', NULL, 'Tempor facilis nesci', 'In modi et rem cupid', 'Enim perferendis cor', '2009-07-24', 'Fuga Laudantium qu', 'In quibusdam volupta', 'Qui veniam id adipi', 'Dolorem dolor est c', 'Consequat Sed magna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'žádný', NULL, 'Rozpracováno', NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-16 07:22:12', '2023-01-16 07:22:12'),
(4, '28', 'Unde consectetur as', '2015-09-09', '16:15:00', 'Svévolný odchod pacienta', NULL, 'Vel irure iste quide', 'Quo sint quas ad ne', 'Labore asperiores di', '2007-07-07', 'Ut autem illum expe', 'Ut dolor exercitatio', 'Dolor qui voluptates', 'Soluta ut illum nul', 'Et cupidatat labore', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'žádný', NULL, 'Odesláno', NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-16 07:22:19', '2023-01-16 07:22:19'),
(5, '22', 'Dignissimos quae vel', '2017-08-14', '00:47:00', 'Nežádoucí účinek léčiva', NULL, 'Quaerat assumenda nu', 'Praesentium fugiat o', 'Sint animi eos qua', '1998-10-07', 'Ullamco quia modi do', 'Saepe deserunt excep', 'Illo adipisicing asp', 'Consequatur anim aut', 'Pariatur In vitae i', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'žádný', NULL, 'Dokončeno', NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-16 07:22:23', '2023-01-16 07:22:23'),
(7, '26', 'Enim nisi dolorem mo', '1977-04-10', '13:32:00', 'Pád', NULL, 'Architecto sed exped', 'Est aliquam molestia', 'Hic amet omnis et p', '2004-11-28', 'Aspernatur libero vo', 'Repudiandae voluptat', 'Odio tempore et lab', 'Incidunt eos ab exp', 'Perferendis sit volu', 'jiný důvod pádu', NULL, 'orientovaný/á', 'pánev', 'Hematom (lehké zranění)', NULL, NULL, NULL, NULL, 'jiný', 'sdfdsfsdf', 'Dokončeno', NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-16 07:22:44', '2023-01-16 07:22:44'),
(8, '10', 'Voluptatem providen', '1988-11-15', '03:21:00', 'Pád', NULL, 'Ea autem sunt magna', 'Adipisicing esse fac', 'Elit quis esse aliq', '1987-11-28', 'Ad placeat consequa', 'Repellendus Nobis l', 'Error quis soluta re', 'Repudiandae dolores', 'Quaerat explicabo H', 'pád z lůžka s postranicemi', NULL, 'bezvědomí', 'ruka', 'Jiné SZ (střední zranění)', NULL, NULL, NULL, NULL, 'překlad', NULL, 'Dokončeno', NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-16 07:23:14', '2023-01-16 07:23:14'),
(9, '24', 'Cillum sapiente elig', '1986-12-14', '19:20:00', 'Pád', NULL, 'Fugit facilis sunt', 'Ducimus sunt fugiat', 'Quidem laboris conse', '1985-08-09', 'Anim voluptatum numq', 'Quasi culpa quos la', 'Modi ipsum quo duis', 'Soluta irure dolore', 'Nisi sed cumque volu', 'vstávání z lůžka', NULL, 'orientovaný/á', 'dolní končetiny', 'Komoce mozku (těžké zranění)', NULL, NULL, NULL, 'MUDr. Dianovská Anna', 'překlad', NULL, 'Odesláno', NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-16 07:23:22', '2023-01-18 14:03:09'),
(10, '3', 'Illum labore magna', '1989-09-16', '16:41:00', 'Nehody a neočekávaná zranění', NULL, 'Quis quo quasi nisi', 'Voluptates ipsum dol', 'Qui animi dolores l', '2013-01-22', 'Est sequi quia nece', 'Consequatur quam co', 'Doloribus corrupti', 'Nihil in assumenda a', 'Doloremque aspernatu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'žádný', NULL, 'Dokončeno', NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-16 07:23:27', '2023-01-16 07:23:27'),
(12, '10', 'Ullam sint voluptate', '2000-08-26', '12:30:00', 'Medikace', NULL, 'Voluptates ut amet', 'Qui ut iusto vero bl', 'Totam quasi libero o', '1996-11-22', 'Adipisci consectetur', 'Velit dolor ex dolo', 'Necessitatibus error', 'Aut odit duis aut mo', 'Non fugiat tempor eu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'žádný', NULL, 'Odesláno', NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-16 07:23:41', '2023-01-16 07:23:41'),
(13, '11', 'Molestiae qui verita', '1993-12-22', '09:49:00', 'Problém s technikou nebo vybavením', NULL, 'Ipsa in laborum Ve', 'Lorem vel ex facilis', 'Mollitia exercitatio', '1991-06-26', 'Ea sunt omnis velit', 'Commodi corporis dol', 'Dolorem eum dolor to', 'Commodo fuga Quam r', 'Et impedit ea rerum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'žádný', NULL, 'Rozpracováno', NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-16 07:23:46', '2023-01-16 07:23:46'),
(14, '6', 'Esse quas aliquip se', '1995-08-24', '15:05:00', 'Nehody a neočekávaná zranění', NULL, 'Itaque aliquam fugia', 'Ullam obcaecati in c', 'Nostrum veniam exer', '2015-05-13', 'Occaecat sit cumque', 'Amet corporis moles', 'Aliquid sequi dignis', 'Sit eveniet hic mo', 'Incididunt aut assum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'žádný', NULL, 'Odesláno', NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-16 07:23:54', '2023-01-16 07:23:54'),
(15, '17', 'Ducimus adipisicing', '1972-07-10', '06:56:00', 'Krádež', NULL, 'Quibusdam numquam ea', 'Aperiam perferendis', 'Ducimus eius maiore', '1985-06-07', 'Non eum sed eligendi', 'Tenetur illum earum', 'Ad est perferendis', 'Quia officiis tempor', 'Consequatur et adip', 'zakopnutí, uklouznutí', NULL, 'bezvědomí', 'pánev', 'Komoce mozku (těžké zranění)', NULL, NULL, NULL, 'MUDr. Kryvoruchko Stanislav', 'umrtí', NULL, 'Dokončeno', NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-20 23:39:35', '2023-01-20 23:39:35'),
(16, '21', 'Ducimus adipisicing', '2023-01-21', '00:39:00', 'Pád', NULL, 'Klika Miroslav', 'ertert', 'retretret', '2023-01-02', 'retretret', 'tretret', 'ertrete', 'ertert', 'retretret', 'vstávání z lůžka', NULL, 'bezvědomí', 'horní končetiny', 'Zlomenina (těžké zranění)', 'retretert', 'retretertre', '2023-01-22', 'MUDr. Blažík Martin', 'žádný', NULL, 'Dokončeno', NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-20 23:41:02', '2023-01-20 23:41:02');

-- --------------------------------------------------------

--
-- Struktura tabulky `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `training_id` int(11) NOT NULL,
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
-- Struktura tabulky `bozps`
--

CREATE TABLE `bozps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `accordion_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accordion_group` int(11) DEFAULT NULL,
  `position` int(11) NOT NULL,
  `document_position` int(11) NOT NULL,
  `document_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `processed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authorize` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `examine` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `efficiency` date DEFAULT NULL,
  `revision` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revision_date` date DEFAULT NULL,
  `next_revision_date` date DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unique_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Rozpracováno','Schváleno') COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `onscreen` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `bulletins`
--

CREATE TABLE `bulletins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `edition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_edition` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `bulletins`
--

INSERT INTO `bulletins` (`id`, `edition`, `date_edition`, `created_at`, `updated_at`) VALUES
(1, 'Bulletin č.1', '2023-03-12', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabulky `calendar`
--

CREATE TABLE `calendar` (
  `id` bigint(20) NOT NULL,
  `date` date DEFAULT NULL,
  `interni` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `calendar`
--

INSERT INTO `calendar` (`id`, `date`, `interni`) VALUES
(1, '2023-01-01', NULL),
(2, '2023-01-02', NULL),
(3, '2023-01-03', NULL),
(4, '2023-01-04', NULL),
(5, '2023-01-05', NULL),
(6, '2023-01-06', NULL),
(7, '2023-01-07', NULL),
(8, '2023-01-08', NULL),
(9, '2023-01-09', NULL),
(10, '2023-01-10', NULL),
(11, '2023-01-11', NULL),
(12, '2023-01-12', NULL),
(13, '2023-01-13', NULL),
(14, '2023-01-14', NULL),
(15, '2023-01-15', NULL),
(16, '2023-01-16', NULL),
(17, '2023-01-17', NULL),
(18, '2023-01-18', NULL),
(19, '2023-01-19', NULL),
(20, '2023-01-20', NULL),
(21, '2023-01-21', NULL),
(22, '2023-01-22', NULL),
(23, '2023-01-23', NULL),
(24, '2023-01-24', NULL),
(25, '2023-01-25', NULL),
(26, '2023-01-26', NULL),
(27, '2023-01-27', NULL),
(28, '2023-01-28', NULL),
(29, '2023-01-29', NULL),
(30, '2023-01-30', NULL),
(31, '2023-01-31', NULL),
(32, '2023-02-01', NULL),
(33, '2023-02-02', NULL),
(34, '2023-02-03', NULL),
(35, '2023-02-04', NULL),
(36, '2023-02-05', NULL),
(37, '2023-02-06', NULL),
(38, '2023-02-07', NULL),
(39, '2023-02-08', NULL),
(40, '2023-02-09', NULL),
(41, '2023-02-10', NULL),
(42, '2023-02-11', NULL),
(43, '2023-02-12', NULL),
(44, '2023-02-13', NULL),
(45, '2023-02-14', NULL),
(46, '2023-02-15', NULL),
(47, '2023-02-16', NULL),
(48, '2023-02-17', NULL),
(49, '2023-02-18', NULL),
(50, '2023-02-19', NULL),
(51, '2023-02-20', NULL),
(52, '2023-02-21', NULL),
(53, '2023-02-22', NULL),
(54, '2023-02-23', NULL),
(55, '2023-02-24', NULL),
(56, '2023-02-25', NULL),
(57, '2023-02-26', NULL),
(58, '2023-02-27', NULL),
(59, '2023-02-28', NULL),
(60, '2023-03-01', NULL),
(61, '2023-03-02', NULL),
(62, '2023-03-03', NULL),
(63, '2023-03-04', NULL),
(64, '2023-03-05', NULL),
(65, '2023-03-06', NULL),
(66, '2023-03-07', NULL),
(67, '2023-03-08', NULL),
(68, '2023-03-09', NULL),
(69, '2023-03-10', NULL),
(70, '2023-03-11', NULL),
(71, '2023-03-12', NULL),
(72, '2023-03-13', NULL),
(73, '2023-03-14', NULL),
(74, '2023-03-15', NULL),
(75, '2023-03-16', NULL),
(76, '2023-03-17', NULL),
(77, '2023-03-18', NULL),
(78, '2023-03-19', NULL),
(79, '2023-03-20', NULL),
(80, '2023-03-21', NULL),
(81, '2023-03-22', NULL),
(82, '2023-03-23', NULL),
(83, '2023-03-24', NULL),
(84, '2023-03-25', NULL),
(85, '2023-03-26', NULL),
(86, '2023-03-27', NULL),
(87, '2023-03-28', NULL),
(88, '2023-03-29', NULL),
(89, '2023-03-30', NULL),
(90, '2023-03-31', NULL),
(91, '2023-04-01', NULL),
(92, '2023-04-02', NULL),
(93, '2023-04-03', NULL),
(94, '2023-04-04', NULL),
(95, '2023-04-05', NULL),
(96, '2023-04-06', NULL),
(97, '2023-04-07', NULL),
(98, '2023-04-08', NULL),
(99, '2023-04-09', NULL),
(100, '2023-04-10', NULL),
(101, '2023-04-11', NULL),
(102, '2023-04-12', NULL),
(103, '2023-04-13', NULL),
(104, '2023-04-14', NULL),
(105, '2023-04-15', NULL),
(106, '2023-04-16', NULL),
(107, '2023-04-17', NULL),
(108, '2023-04-18', NULL),
(109, '2023-04-19', NULL),
(110, '2023-04-20', NULL),
(111, '2023-04-21', NULL),
(112, '2023-04-22', NULL),
(113, '2023-04-23', NULL),
(114, '2023-04-24', NULL),
(115, '2023-04-25', NULL),
(116, '2023-04-26', NULL),
(117, '2023-04-27', NULL),
(118, '2023-04-28', NULL),
(119, '2023-04-29', NULL),
(120, '2023-04-30', NULL),
(121, '2023-05-01', NULL),
(122, '2023-05-02', NULL),
(123, '2023-05-03', NULL),
(124, '2023-05-04', NULL),
(125, '2023-05-05', NULL),
(126, '2023-05-06', NULL),
(127, '2023-05-07', NULL),
(128, '2023-05-08', NULL),
(129, '2023-05-09', NULL),
(130, '2023-05-10', NULL),
(131, '2023-05-11', NULL),
(132, '2023-05-12', NULL),
(133, '2023-05-13', NULL),
(134, '2023-05-14', NULL),
(135, '2023-05-15', NULL),
(136, '2023-05-16', NULL),
(137, '2023-05-17', NULL),
(138, '2023-05-18', NULL),
(139, '2023-05-19', NULL),
(140, '2023-05-20', NULL),
(141, '2023-05-21', NULL),
(142, '2023-05-22', NULL),
(143, '2023-05-23', NULL),
(144, '2023-05-24', NULL),
(145, '2023-05-25', NULL),
(146, '2023-05-26', NULL),
(147, '2023-05-27', NULL),
(148, '2023-05-28', NULL),
(149, '2023-05-29', NULL),
(150, '2023-05-30', NULL),
(151, '2023-05-31', NULL),
(152, '2023-06-01', NULL),
(153, '2023-06-02', NULL),
(154, '2023-06-03', NULL),
(155, '2023-06-04', NULL),
(156, '2023-06-05', NULL),
(157, '2023-06-06', NULL),
(158, '2023-06-07', NULL),
(159, '2023-06-08', NULL),
(160, '2023-06-09', NULL),
(161, '2023-06-10', NULL),
(162, '2023-06-11', NULL),
(163, '2023-06-12', NULL),
(164, '2023-06-13', NULL),
(165, '2023-06-14', NULL),
(166, '2023-06-15', NULL),
(167, '2023-06-16', NULL),
(168, '2023-06-17', NULL),
(169, '2023-06-18', NULL),
(170, '2023-06-19', NULL),
(171, '2023-06-20', NULL),
(172, '2023-06-21', NULL),
(173, '2023-06-22', NULL),
(174, '2023-06-23', NULL),
(175, '2023-06-24', NULL),
(176, '2023-06-25', NULL),
(177, '2023-06-26', NULL),
(178, '2023-06-27', NULL),
(179, '2023-06-28', NULL),
(180, '2023-06-29', NULL),
(181, '2023-06-30', NULL),
(182, '2023-07-01', NULL),
(183, '2023-07-02', NULL),
(184, '2023-07-03', NULL),
(185, '2023-07-04', NULL),
(186, '2023-07-05', NULL),
(187, '2023-07-06', NULL),
(188, '2023-07-07', NULL),
(189, '2023-07-08', NULL),
(190, '2023-07-09', NULL),
(191, '2023-07-10', NULL),
(192, '2023-07-11', NULL),
(193, '2023-07-12', NULL),
(194, '2023-07-13', NULL),
(195, '2023-07-14', NULL),
(196, '2023-07-15', NULL),
(197, '2023-07-16', NULL),
(198, '2023-07-17', NULL),
(199, '2023-07-18', NULL),
(200, '2023-07-19', NULL),
(201, '2023-07-20', NULL),
(202, '2023-07-21', NULL),
(203, '2023-07-22', NULL),
(204, '2023-07-23', NULL),
(205, '2023-07-24', NULL),
(206, '2023-07-25', NULL),
(207, '2023-07-26', NULL),
(208, '2023-07-27', NULL),
(209, '2023-07-28', NULL),
(210, '2023-07-29', NULL),
(211, '2023-07-30', NULL),
(212, '2023-07-31', NULL),
(213, '2023-08-01', NULL),
(214, '2023-08-02', NULL),
(215, '2023-08-03', NULL),
(216, '2023-08-04', NULL),
(217, '2023-08-05', NULL),
(218, '2023-08-06', NULL),
(219, '2023-08-07', NULL),
(220, '2023-08-08', NULL),
(221, '2023-08-09', NULL),
(222, '2023-08-10', NULL),
(223, '2023-08-11', NULL),
(224, '2023-08-12', NULL),
(225, '2023-08-13', NULL),
(226, '2023-08-14', NULL),
(227, '2023-08-15', NULL),
(228, '2023-08-16', NULL),
(229, '2023-08-17', NULL),
(230, '2023-08-18', NULL),
(231, '2023-08-19', NULL),
(232, '2023-08-20', NULL),
(233, '2023-08-21', NULL),
(234, '2023-08-22', NULL),
(235, '2023-08-23', NULL),
(236, '2023-08-24', NULL),
(237, '2023-08-25', NULL),
(238, '2023-08-26', NULL),
(239, '2023-08-27', NULL),
(240, '2023-08-28', NULL),
(241, '2023-08-29', NULL),
(242, '2023-08-30', NULL),
(243, '2023-08-31', NULL),
(244, '2023-09-01', NULL),
(245, '2023-09-02', NULL),
(246, '2023-09-03', NULL),
(247, '2023-09-04', NULL),
(248, '2023-09-05', NULL),
(249, '2023-09-06', NULL),
(250, '2023-09-07', NULL),
(251, '2023-09-08', NULL),
(252, '2023-09-09', NULL),
(253, '2023-09-10', NULL),
(254, '2023-09-11', NULL),
(255, '2023-09-12', NULL),
(256, '2023-09-13', NULL),
(257, '2023-09-14', NULL),
(258, '2023-09-15', NULL),
(259, '2023-09-16', NULL),
(260, '2023-09-17', NULL),
(261, '2023-09-18', NULL),
(262, '2023-09-19', NULL),
(263, '2023-09-20', NULL),
(264, '2023-09-21', NULL),
(265, '2023-09-22', NULL),
(266, '2023-09-23', NULL),
(267, '2023-09-24', NULL),
(268, '2023-09-25', NULL),
(269, '2023-09-26', NULL),
(270, '2023-09-27', NULL),
(271, '2023-09-28', NULL),
(272, '2023-09-29', NULL),
(273, '2023-09-30', NULL),
(274, '2023-10-01', NULL),
(275, '2023-10-02', NULL),
(276, '2023-10-03', NULL),
(277, '2023-10-04', NULL),
(278, '2023-10-05', NULL),
(279, '2023-10-06', NULL),
(280, '2023-10-07', NULL),
(281, '2023-10-08', NULL),
(282, '2023-10-09', NULL),
(283, '2023-10-10', NULL),
(284, '2023-10-11', NULL),
(285, '2023-10-12', NULL),
(286, '2023-10-13', NULL),
(287, '2023-10-14', NULL),
(288, '2023-10-15', NULL),
(289, '2023-10-16', NULL),
(290, '2023-10-17', NULL),
(291, '2023-10-18', NULL),
(292, '2023-10-19', NULL),
(293, '2023-10-20', NULL),
(294, '2023-10-21', NULL),
(295, '2023-10-22', NULL),
(296, '2023-10-23', NULL),
(297, '2023-10-24', NULL),
(298, '2023-10-25', NULL),
(299, '2023-10-26', NULL),
(300, '2023-10-27', NULL),
(301, '2023-10-28', NULL),
(302, '2023-10-29', NULL),
(303, '2023-10-30', NULL),
(304, '2023-10-31', NULL),
(305, '2023-11-01', NULL),
(306, '2023-11-02', NULL),
(307, '2023-11-03', NULL),
(308, '2023-11-04', NULL),
(309, '2023-11-05', NULL),
(310, '2023-11-06', NULL),
(311, '2023-11-07', NULL),
(312, '2023-11-08', NULL),
(313, '2023-11-09', NULL),
(314, '2023-11-10', NULL),
(315, '2023-11-11', NULL),
(316, '2023-11-12', NULL),
(317, '2023-11-13', NULL),
(318, '2023-11-14', NULL),
(319, '2023-11-15', NULL),
(320, '2023-11-16', NULL),
(321, '2023-11-17', NULL),
(322, '2023-11-18', NULL),
(323, '2023-11-19', NULL),
(324, '2023-11-20', NULL),
(325, '2023-11-21', NULL),
(326, '2023-11-22', NULL),
(327, '2023-11-23', NULL),
(328, '2023-11-24', NULL),
(329, '2023-11-25', NULL),
(330, '2023-11-26', NULL),
(331, '2023-11-27', NULL),
(332, '2023-11-28', NULL),
(333, '2023-11-29', NULL),
(334, '2023-11-30', NULL),
(335, '2023-12-01', NULL),
(336, '2023-12-02', NULL),
(337, '2023-12-03', NULL),
(338, '2023-12-04', NULL),
(339, '2023-12-05', NULL),
(340, '2023-12-06', NULL),
(341, '2023-12-07', NULL),
(342, '2023-12-08', NULL),
(343, '2023-12-09', NULL),
(344, '2023-12-10', NULL),
(345, '2023-12-11', NULL),
(346, '2023-12-12', NULL),
(347, '2023-12-13', NULL),
(348, '2023-12-14', NULL),
(349, '2023-12-15', NULL),
(350, '2023-12-16', NULL),
(351, '2023-12-17', NULL),
(352, '2023-12-18', NULL),
(353, '2023-12-19', NULL),
(354, '2023-12-20', NULL),
(355, '2023-12-21', NULL),
(356, '2023-12-22', NULL),
(357, '2023-12-23', NULL),
(358, '2023-12-24', NULL),
(359, '2023-12-25', NULL),
(360, '2023-12-26', NULL),
(361, '2023-12-27', NULL),
(362, '2023-12-28', NULL),
(363, '2023-12-29', NULL),
(364, '2023-12-30', NULL),
(365, '2023-12-31', NULL);

-- --------------------------------------------------------

--
-- Struktura tabulky `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_file` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `folder_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_icon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `svg_icon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fa_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `categories`
--

INSERT INTO `categories` (`id`, `category_file`, `category_type`, `category_name`, `folder_name`, `category_icon`, `svg_icon`, `fa_icon`, `button`, `color`) VALUES
(1, 'standardy', 'standard', 'Akreditační', 'akreditacni', 'akreditacni.png', '<svg class=\"icon icon-tabler icon-tabler-file-certificate text-indigo\" xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M14 3v4a1 1 0 0 0 1 1h4\"></path><path d=\"M5 8v-3a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-5\"></path><circle cx=\"6\" cy=\"14\" r=\"3\"></circle><path d=\"M4.5 17l-1.5 5l3 -1.5l3 1.5l-1.5 -5\"></path></svg>', 'certificate', 'akreditační', 'blue'),
(2, 'standardy', 'standard', 'Ošetřovatelské', 'osetrovatelske', 'osetrovatelske.png', '<svg class=\"icon icon-tabler icon-tabler-stethoscope text-pink\" xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M6 4h-1a2 2 0 0 0 -2 2v3.5h0a5.5 5.5 0 0 0 11 0v-3.5a2 2 0 0 0 -2 -2h-1\"></path><path d=\"M8 15a6 6 0 1 0 12 0v-3\"></path><path d=\"M11 3v2\"></path><path d=\"M6 3v2\"></path><circle cx=\"20\" cy=\"10\" r=\"2\"></circle></svg>', 'stethoscope', 'ošetřovatelský', 'pink'),
(3, 'standardy', 'standard', 'Léčebné', 'lecebne', 'lecebne.png', '<svg class=\"icon icon-tabler icon-tabler-hearts text-red\" xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M14.017 18.001l-2.017 1.999l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 0 1 8.153 5.784\"></path><path d=\"M15.99 20l4.197 -4.223a2.81 2.81 0 0 0 .006 -3.948a2.747 2.747 0 0 0 -3.91 -.007l-.28 .282l-.279 -.283a2.747 2.747 0 0 0 -3.91 -.007a2.81 2.81 0 0 0 -.007 3.948l4.182 4.238z\"></path></svg>', 'heart', 'léčebný', 'red'),
(4, 'standardy', 'standard', 'Speciální', 'specialni', 'specialni.png', '<svg class=\"icon icon-tabler icon-tabler-report-medical text-indigo\" xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2\"></path><rect x=\"9\" y=\"3\" width=\"6\" height=\"4\" rx=\"2\"></rect><line x1=\"10\" y1=\"14\" x2=\"14\" y2=\"14\"></line><line x1=\"12\" y1=\"12\" x2=\"12\" y2=\"16\"></line></svg>', 'notes-medical', 'speciální', 'indigo'),
(5, 'standardy', 'standard', 'Operační', 'operacni', 'operacni.png', '<svg class=\"icon icon-tabler icon-tabler-slice text-lime\" xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\" stroke-width=\"1\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M3 19l15 -15l3 3l-6 6l2 2a14 14 0 0 1 -14 4\"></path></svg>', 'notes-medical', 'operační', 'lime'),
(6, 'standardy', 'standard', 'Anesteziologické', 'anesteziologicke', 'anesteziologicke.png', '<svg class=\"icon icon-tabler icon-tabler-heart-rate-monitor text-purple\" xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><rect x=\"3\" y=\"4\" width=\"18\" height=\"12\" rx=\"1\"></rect><path d=\"M7 20h10\"></path><path d=\"M9 16v4\"></path><path d=\"M15 16v4\"></path><path d=\"M7 10h2l2 3l2 -6l1 3h3\"></path></svg>', 'heartbeat', 'anesteziologický', 'purple'),
(7, 'standardy', 'standard', 'RDG', 'rdg', 'rdg.png', '<svg class=\"icon icon-tabler icon-tabler-radioactive text-yellow\" xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M13.5 14.6l3 5.19a9 9 0 0 0 4.5 -7.79h-6a3 3 0 0 1 -1.5 2.6\"></path><path d=\"M13.5 9.4l3 -5.19a9 9 0 0 0 -9 0l3 5.19a3 3 0 0 1 3 0\"></path><path d=\"M10.5 14.6l-3 5.19a9 9 0 0 1 -4.5 -7.79h6a3 3 0 0 0 1.5 2.6\"></path></svg>', 'radiation-alt', 'radiologický', 'yellow'),
(8, 'standardy', 'standard', 'Rehabilitační', 'rehabilitacni', 'rehabilitacni.png', '<svg class=\"icon icon-tabler icon-tabler-physotherapist text-green\" xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M9 15l-1 -3l4 -2l4 1h3.5\"></path><circle cx=\"4\" cy=\"19\" r=\"1\"></circle><circle cx=\"12\" cy=\"6\" r=\"1\"></circle><path d=\"M12 17v-7\"></path><path d=\"M8 20h7l1 -4l4 -2\"></path><path d=\"M18 20h3\"></path></svg>', 'crutch', 'rehabilitační', 'reha'),
(9, 'standardy', 'standard', 'OPL', 'opl', 'opl.png', '<svg class=\"icon icon-tabler icon-tabler-bandage text-cyan\" xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><line x1=\"14\" y1=\"12\" x2=\"14\" y2=\"12.01\"></line><line x1=\"10\" y1=\"12\" x2=\"10\" y2=\"12.01\"></line><line x1=\"12\" y1=\"10\" x2=\"12\" y2=\"10.01\"></line><line x1=\"12\" y1=\"14\" x2=\"12\" y2=\"14.01\"></line><path d=\"M4.5 12.5l8 -8a4.94 4.94 0 0 1 7 7l-8 8a4.94 4.94 0 0 1 -7 -7\"></path></svg>', 'briefcase-medical', 'pracovní', 'cyan'),
(10, 'standardy', 'standard', 'OKB', 'okb', 'okb.png', '<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-test-pipe text-purple\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M20 8.04l-12.122 12.124a2.857 2.857 0 1 1 -4.041 -4.04l12.122 -12.124\"></path><path d=\"M7 13h8\"></path><path d=\"M19 15l1.5 1.6a2 2 0 1 1 -3 0l1.5 -1.6z\"></path><path d=\"M15 3l6 6\"></path></svg>', 'flask', 'laboratorní', 'purple'),
(11, 'standardy', 'standard', 'Logopedické', 'logopedicke', 'logopedicke.png', '<svg class=\"icon icon-tabler icon-tabler-messages text-teal\" xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M21 14l-3 -3h-7a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1h9a1 1 0 0 1 1 1v10\"></path><path d=\"M14 15v2a1 1 0 0 1 -1 1h-7l-3 3v-10a1 1 0 0 1 1 -1h2\"></path></svg>', 'comments', 'logopedický', 'cyan'),
(12, 'standardy', 'standard', 'Legislativní', 'legislativni', 'legislativni.png', '<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-rubber-stamp text-orange\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M21 17.85h-18c0 -4.05 1.421 -4.05 3.79 -4.05c5.21 0 1.21 -4.59 1.21 -6.8a4 4 0 1 1 8 0c0 2.21 -4 6.8 1.21 6.8c2.369 0 3.79 0 3.79 4.05z\"></path><path d=\"M5 21h14\"></path></svg>', 'stamp', 'legislativní', 'orange'),
(13, 'dokumenty', 'dokument', 'Personální', 'personalni', 'personalni.png', '<svg class=\"icon text-green\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M12 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0\"></path><path d=\"M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2\"></path></svg>', NULL, 'personální', 'green'),
(14, 'dokumenty', 'dokument', 'Sesterská', 'sesterska', 'sesterska.png', '<svg class=\"icon text-red\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M12 6c2.941 0 5.685 .847 8 2.31l-2 9.69h-12l-2 -9.691a14.93 14.93 0 0 1 8 -2.309z\"></path><path d=\"M10 12h4\"></path><path d=\"M12 10v4\"></path></svg>', 'nurse', 'sesterský', 'red'),
(15, 'dokumenty', 'dokument', 'Hygienická', 'hygiena', 'hygiena.png', '<svg class=\"icon text-azure\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M7 21h10v-10a3 3 0 0 0 -3 -3h-4a3 3 0 0 0 -3 3v10z\"></path><path d=\"M15 3h-6a2 2 0 0 0 -2 2\"></path><path d=\"M12 3v5\"></path><path d=\"M12 11v4\"></path><path d=\"M10 13h4\"></path></svg>', NULL, 'hygienický', 'azure'),
(16, 'dokumenty', 'dokument', 'Pacient', 'pacient', 'pacient.png', '<svg class=\"icon text-yellow\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\" stroke-width=\"21\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M11 21l-1 -4l-2 -3v-6\"></path><path d=\"M5 14l-1 -3l4 -3l3 2l3 .5\"></path><circle cx=\"8\" cy=\"4\" r=\"1\"></circle><path d=\"M7 17l-2 4\"></path><path d=\"M16 21v-8.5a1.5 1.5 0 0 1 3 0v.5\"></path></svg>', NULL, 'pacientský', 'yellow'),
(17, 'dokumenty', 'dokument', 'OKB', 'okb', 'okb.png', '<svg class=\"icon text-purple\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M20 8.04l-12.122 12.124a2.857 2.857 0 1 1 -4.041 -4.04l12.122 -12.124\"></path><path d=\"M7 13h8\"></path><path d=\"M19 15l1.5 1.6a2 2 0 1 1 -3 0l1.5 -1.6z\"></path><path d=\"M15 3l6 6\"></path></svg>', NULL, 'laboratorní', 'purple'),
(18, 'dokumenty', 'dokument', 'RDG', 'rdg', 'rdg.png', '<svg class=\"icon text-orange\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M13.5 14.6l3 5.19a9 9 0 0 0 4.5 -7.79h-6a3 3 0 0 1 -1.5 2.6\"></path><path d=\"M13.5 9.4l3 -5.19a9 9 0 0 0 -9 0l3 5.19a3 3 0 0 1 3 0\"></path><path d=\"M10.5 14.6l-3 5.19a9 9 0 0 1 -4.5 -7.79h6a3 3 0 0 0 1.5 2.6\"></path></svg>', NULL, 'radiologický', 'orange'),
(19, 'dokumenty', 'dokument', 'IT', 'it', 'it.png', '<svg class=\"icon text-blue\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M10 15h-6a1 1 0 0 1 -1 -1v-8a1 1 0 0 1 1 -1h6\"></path><rect x=\"13\" y=\"4\" width=\"8\" height=\"16\" rx=\"1\"></rect><line x1=\"7\" y1=\"19\" x2=\"10\" y2=\"19\"></line><line x1=\"17\" y1=\"8\" x2=\"17\" y2=\"8.01\"></line><circle cx=\"17\" cy=\"16\" r=\"1\"></circle><line x1=\"9\" y1=\"15\" x2=\"9\" y2=\"19\"></line></svg>', NULL, 'IT', 'blue'),
(20, 'dokumenty', 'dokument', 'KPR', 'kpr', 'kpr.png', '<svg class=\"icon text-pink\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M19.5 13.572l-7.5 7.428l-2.896 -2.868m-6.117 -8.104a5 5 0 0 1 9.013 -3.022a5 5 0 1 1 7.5 6.572\"></path><path d=\"M3 13h2l2 3l2 -6l1 3h3\"></path></svg>', NULL, 'KPR', 'pink'),
(21, 'dokumenty', 'dokument', 'Komunikační karty', 'komunikacni-karty', 'komunikacni-karty.png', '<svg class=\"icon text-purple\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M3.604 7.197l7.138 -3.109a0.96 .96 0 0 1 1.27 .527l4.924 11.902a1.004 1.004 0 0 1 -.514 1.304l-7.137 3.109a0.96 .96 0 0 1 -1.271 -.527l-4.924 -11.903a1.005 1.005 0 0 1 .514 -1.304z\"></path><path d=\"M15 4h1a1 1 0 0 1 1 1v3.5\"></path><path d=\"M20 6c.264 .112 .52 .217 .768 .315a1 1 0 0 1 .53 1.311l-2.298 5.374\"></path></svg>', NULL, 'komunikační', 'purple'),
(22, 'dokumenty', 'dokument', 'Vyhodnocovací', 'vyhodnoceni-dotazniku', 'vyhodnoceni-dotazniku.png', '<svg class=\"icon text-lime\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\" stroke-width=\"21\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2\"></path><rect x=\"9\" y=\"3\" width=\"6\" height=\"4\" rx=\"2\"></rect><path d=\"M9 14h.01\"></path><path d=\"M9 17h.01\"></path><path d=\"M12 16l1 1l3 -3\"></path></svg>', NULL, 'vyhodnocovací', 'lime'),
(23, 'dokumenty', 'dokument', 'Postupová', 'navody', 'navody.png', '<svg class=\"icon text-teal\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><circle cx=\"12\" cy=\"12\" r=\"9\"></circle><line x1=\"12\" y1=\"17\" x2=\"12\" y2=\"17.01\"></line><path d=\"M12 13.5a1.5 1.5 0 0 1 1 -1.5a2.6 2.6 0 1 0 -3 -4\"></path></svg>', NULL, 'postupový', 'teal'),
(24, 'dokumenty', 'dokument', 'Ukrajinská', 'ukrajinske-dokumenty', 'ukrajinske-dokumenty.png', '<svg class=\"icon text-yellow\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0\"></path><path d=\"M3.6 9l16.8 0\"></path><path d=\"M3.6 15l16.8 0\"></path><path d=\"M11.5 3a17 17 0 0 0 0 18\"></path><path d=\"M12.5 3a17 17 0 0 1 0 18\"></path></svg>', NULL, 'ukrajinský', 'yellow'),
(25, 'bozp', 'bozp', 'Bezpečnostní plány', 'bezpecnostni-plany', 'bezpecnostni-plany.png', '<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon text-red\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M9 12l2 2l4 -4\"></path><path d=\"M12 3a12 12 0 0 0 8.5 3a12 12 0 0 1 -8.5 15a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3\"></path></svg>', NULL, 'bezpečnostní plány', 'red'),
(26, 'bozp', 'bozp', 'Organizační směrnice', 'organizacni-smernice', 'organizacni-smernice.png', '<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon text-purple\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M9 21v-6a2 2 0 0 1 2 -2h1.341\"></path><path d=\"M19.682 10.682l-7.682 -7.682l-9 9h2v7a2 2 0 0 0 2 2h5\"></path><path d=\"M22 16c0 4 -2.5 6 -3.5 6s-3.5 -2 -3.5 -6c1 0 2.5 -.5 3.5 -1.5c1 1 2.5 1.5 3.5 1.5z\"></path></svg>', NULL, 'Organizační směrnice', 'purple'),
(27, 'bozp', 'bozp', 'Metodiky školení', 'metodiky-skoleni', 'metodiky-skoleni.png', '<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon text-orange\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M5 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z\"></path><path d=\"M9 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z\"></path><path d=\"M5 8h4\"></path><path d=\"M9 16h4\"></path><path d=\"M13.803 4.56l2.184 -.53c.562 -.135 1.133 .19 1.282 .732l3.695 13.418a1.02 1.02 0 0 1 -.634 1.219l-.133 .041l-2.184 .53c-.562 .135 -1.133 -.19 -1.282 -.732l-3.695 -13.418a1.02 1.02 0 0 1 .634 -1.219l.133 -.041z\"></path><path d=\"M14 9l4 -1\"></path><path d=\"M16 16l3.923 -.98\"></path></svg>', NULL, 'metodiky školení', 'orange'),
(28, 'bozp', 'bozp', 'Prezenční listiny', 'prezencni-listiny', 'prezencni-listiny.png', '<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon text-lime\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M9.615 20h-2.615a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8\"></path><path d=\"M14 19l2 2l4 -4\"></path><path d=\"M9 8h4\"></path><path d=\"M9 12h2\"></path></svg>', NULL, 'prezenční listiny', 'lime'),
(29, 'bozp', 'bozp', 'Pracovní úrazy', 'pracovni-urazy', 'pracovni-urazy.png', '<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon text-pink\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M14 12l0 .01\"></path><path d=\"M10 12l0 .01\"></path><path d=\"M12 10l0 .01\"></path><path d=\"M12 14l0 .01\"></path><path d=\"M4.5 12.5l8 -8a4.94 4.94 0 0 1 7 7l-8 8a4.94 4.94 0 0 1 -7 -7\"></path></svg>', NULL, 'pracovní úrazy', 'pink'),
(30, 'bozp', 'bozp', 'Bezpečnostní značení', 'bezpecnostni-znaceni', 'bezpecnostni-znaceni.png', '<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon text-yellow\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><circle cx=\"8.5\" cy=\"8.5\" r=\"1\" fill=\"currentColor\"></circle><path d=\"M4 7v3.859c0 .537 .213 1.052 .593 1.432l8.116 8.116a2.025 2.025 0 0 0 2.864 0l4.834 -4.834a2.025 2.025 0 0 0 0 -2.864l-8.117 -8.116a2.025 2.025 0 0 0 -1.431 -.593h-3.859a3 3 0 0 0 -3 3z\"></path></svg>', NULL, 'bezpečnostní značení', 'yellow'),
(31, 'bozp', 'bozp', 'Prověrky a kontroly', 'proverky-kontroly', 'proverky-kontroly.png', '<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon text-azure\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0\"></path><path d=\"M12 10.5v1.5\"></path><path d=\"M12 16v1.5\"></path><path d=\"M15.031 12.25l-1.299 .75\"></path><path d=\"M10.268 15l-1.3 .75\"></path><path d=\"M15 15.803l-1.285 -.773\"></path><path d=\"M10.285 12.97l-1.285 -.773\"></path><path d=\"M14 3v4a1 1 0 0 0 1 1h4\"></path><path d=\"M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z\"></path></svg>', NULL, 'prověrky a kontroly', 'azure'),
(32, 'bozp', 'bozp', 'Provozně bezp. předpisy', 'provozne-bezpecnostni-predpisy', 'provozne-bezpecnostni-predpisy.png', '<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon text-cyan\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M3 5a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-14z\"></path><path d=\"M12 8v4\"></path><path d=\"M12 16h.01\"></path></svg>', NULL, 'provozně bezp. předpisy', 'cyan'),
(33, 'bozp', 'bozp', 'Rizika', 'rizika', 'rizika.png', '<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon text-green\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M4 20l16 0\"></path><path d=\"M9.4 10l5.2 0\"></path><path d=\"M7.8 15l8.4 0\"></path><path d=\"M6 20l5 -15h2l5 15\"></path></svg>', NULL, 'rizika', 'green'),
(34, 'bozp', 'bozp', 'Požární ochrana', 'pozarni-ochrana', 'pozarni-ochrana.png', '<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon text-red\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M5 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0\"></path><path d=\"M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0\"></path><path d=\"M7 18h8m4 0h2v-6a5 5 0 0 0 -5 -5h-1l1.5 5h4.5\"></path><path d=\"M12 18v-11h3\"></path><path d=\"M3 17l0 -5l9 0\"></path><path d=\"M3 9l18 -6\"></path><path d=\"M6 12l0 -4\"></path></svg>', NULL, 'požární ochrana', 'red'),
(35, 'bozp', 'bozp', 'Požární operativní karty', 'pozarni-operativni-karty', 'pozarni-operativni-karty.png', '<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon text-teal\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M3.604 7.197l7.138 -3.109a.96 .96 0 0 1 1.27 .527l4.924 11.902a1 1 0 0 1 -.514 1.304l-7.137 3.109a.96 .96 0 0 1 -1.271 -.527l-4.924 -11.903a1 1 0 0 1 .514 -1.304z\"></path><path d=\"M15 4h1a1 1 0 0 1 1 1v3.5\"></path><path d=\"M20 6c.264 .112 .52 .217 .768 .315a1 1 0 0 1 .53 1.311l-2.298 5.374\"></path></svg>', NULL, 'požární operativní karty', 'teal'),
(36, 'bozp', 'bozp', 'Bezpečnostní listy', 'bezpecnostni-listy', 'bezpecnostni-listy.png', '<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon text-orange\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M14 3v4a1 1 0 0 0 1 1h4\"></path><path d=\"M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z\"></path><path d=\"M9 17h6l-3 -6z\"></path></svg>', NULL, 'bezpečnostní listy', 'orange');

-- --------------------------------------------------------

--
-- Struktura tabulky `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `accordion_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accordion_group` int(11) DEFAULT NULL,
  `position` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `processed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authorize` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `examine` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `efficiency` date DEFAULT NULL,
  `revision` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `next_revision_date` date DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revision_date` date DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unique_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Schváleno','Rozpracováno') COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `onscreen` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `documents`
--

INSERT INTO `documents` (`id`, `category_id`, `accordion_name`, `accordion_group`, `position`, `name`, `description`, `processed`, `authorize`, `examine`, `efficiency`, `revision`, `next_revision_date`, `tags`, `revision_date`, `file`, `unique_code`, `status`, `user_id`, `onscreen`, `created_at`, `updated_at`) VALUES
(1, 3, 'Akutní koronární syndromy', NULL, 1, 'Akutní koronární syndromy', 'Soubor minimálních diagnostických a terapeutických standardů u pacientů s akutními koronárními syndromy', 'MUDr. Janková Pavlína', 'MUDr. Canibal Tomáš', 'MUDr. Kultan Peter', '2007-01-01', '5', '2023-12-01', 'MEZ-JIP, NEU-JIP, INT-ODD, NEU-ODD', '2022-12-01', 'standardy_lecebne-akutni_koronarni_syndromy-revize-5.pdf', 'STD3#1', 'Schváleno', 11, NULL, '2023-01-17 21:02:48', '2023-03-11 17:35:09'),
(2, 3, 'ATB profylaxe', NULL, 2, 'ATB profylaxe', 'Antibiotiková profylaxe u operovaných pacientů', 'MUDr. Hurtová Šárka', 'MUDr. Canibal Tomáš', 'MUDr. Adamová Andrea', '2014-01-01', '3', '2023-12-01', 'ONP, ORT', '2022-12-01', 'standardy_lecebne-antibiotikova_profylaxe_u_operovanych_pacientu-revize-3.pdf', 'STD3#2', 'Schváleno', 11, NULL, '2023-01-13 21:16:31', '2023-01-30 10:20:23'),
(3, 3, 'Crohnova choroba', NULL, 3, 'Crohnova choroba', 'Soubor minimálních diagnostických a terapeutických standardů u pacientů s crohnovou chorobou', 'MUDr. Střída Josef', 'MUDr. Canibal Tomáš', 'MUDr. Kultan Peter', '2007-01-01', '5', '2023-12-01', 'MEZ-JIP, INT-ODD', '2022-12-01', 'standardy_lecebne-crohnova_choroba-revize-5.pdf', 'STD3#3', 'Schváleno', 11, NULL, '2023-01-13 21:17:50', '2023-01-21 18:42:01'),
(4, 3, 'Demence', NULL, 4, 'Demence', 'Soubor minimálních diagnostických a terapeutických standardů u pacientů s demencí', 'MUDr. Böhm Marek', 'MUDr. Canibal Tomáš', 'MUDr. Vlachopulu Barbara', '2005-07-01', '6', '2023-12-01', 'NEU-ODD', '2022-12-01', 'standardy_lecebne-demence-revize-6.pdf', 'STD3#4', 'Schváleno', 11, 14, '2023-01-13 21:28:06', '2023-03-12 20:44:17'),
(5, 3, 'Diabetes mellitus', NULL, 5, 'Diabetes mellitus', 'Soubor minimálních diagnostických a terapeutických standardů u pacientů s diabetes mellitus', 'MUDr. Blažík Martin', 'MUDr. Canibal Tomáš', 'MUDr. Kultan Peter', '2010-11-01', '4', '2023-12-01', 'KHN', '2022-12-01', 'standardy_lecebne-diabetes_mellitus-revize-4.pdf', 'STD3#5', 'Schváleno', 11, NULL, '2023-01-13 21:33:31', '2023-01-21 18:41:23'),
(6, 3, 'Epilepsie', NULL, 6, 'Epilepsie', 'Soubor minimálních diagnostických a terapeutických standardů u pacientů s epilepsií', 'MUDr. Brzeżański Henryk', 'MUDr. Canibal Tomáš', 'MUDr. Sukop Roman', '2005-07-01', '6', '2023-12-01', 'NEU-ODD', '2022-12-01', 'standardy_lecebne-epilepsie-revize-6.pdf', 'STD3#6', 'Schváleno', 11, NULL, '2023-01-13 21:34:48', '2023-01-21 18:40:27'),
(7, 3, 'Febrilie nejasné etiologie', NULL, 7, 'Febrilie nejasné etiologie', 'Soubor minimálních diagnostických a terapeutických standardů u pacientů s touto diagnózou', 'MUDr. Materna Petr', 'MUDr. Canibal Tomáš', 'MUDr. Kultan Peter', '2007-01-01', '4', '2023-12-01', 'MEZ-JIP, NEU-JIP, INT-ODD', '2022-12-01', 'standardy_lecebne-febrilie_nejasne_etiologie-revize-4.pdf', 'STD3#7', 'Schváleno', 11, NULL, '2023-01-13 21:36:13', '2023-01-21 16:45:56'),
(8, 3, 'Chronická bolest u degenerativních onemocnění páteře', NULL, 8, 'Chronická bolest u degenerativních onemocnění páteře', 'Soubor minimálních diagnostických a terapeutických standardů u pacientů s touto diagnózou', 'MUDr. Brzeżański Henryk', 'MUDr. Canibal Tomáš', 'MUDr. Kocurová Kamila', '2014-12-01', '6', '2023-12-01', 'NEU-ODD', '2022-12-01', 'standardy_lecebne-soubor_minimalnich_diagnostickych_a_terapeutickych_standardu_u_pacientu_s_touto_diagnozou-revize-6.pdf', 'STD3#8', 'Schváleno', 11, NULL, '2023-01-13 21:38:25', '2023-01-24 07:31:51'),
(9, 3, 'Standard léčebného postupu', NULL, 9, 'Standard léčebného postupu', 'Soubor indikačních kritérií a postupů oddělení chirurgie páteře', 'MUDr. Sýkora Dušan', 'MUDr. Canibal Tomáš', 'MUDr. Buzek David', '2005-07-01', '6', '2023-12-01', 'ONP', '2022-12-01', 'standardy_lecebne-soubor_indikacnich_kriterii_a_postupu_oddeleni_chirurgie_patere-revize-6.pdf', 'STD3#9', 'Schváleno', 11, NULL, '2023-01-13 21:39:52', '2023-01-21 18:39:12'),
(10, 3, 'Standard léčebného postupu', NULL, 10, 'Standard léčebného postupu', 'Indikace zátěžových vyšetření', 'MUDr. Janková Pavlína', 'MUDr. Canibal Tomáš', 'MUDr. Kultan Peter', '2007-01-01', '5', '2023-12-01', 'MEZ-JIP, NEU-JIP, INT-ODD, NEU-ODD', '2022-12-01', 'standardy_lecebne-indikace_zatezovych_vysetreni-revize-5.pdf', 'STD3#10', 'Schváleno', 11, NULL, '2023-01-13 21:40:42', '2023-01-19 12:43:14'),
(11, 3, 'Standard léčebného postupu', NULL, 11, 'Standard léčebného postupu', 'Ischemická cévní mozková příhoda', 'MUDr. Brzeżański Henryk', 'MUDr. Canibal Tomáš', 'MUDr. Ing. Paloušková Hana', '2005-07-01', '6', '2023-12-01', 'MEZ-JIP, NEU-JIP, INT-ODD, NEU-ODD', '2022-12-01', 'standardy_lecebne-ischemicka_cevni_mozkova_prihoda-revize-6.pdf', 'STD3#11', 'Schváleno', 11, NULL, '2023-01-13 21:41:31', '2023-01-19 12:43:47'),
(12, 3, 'Standard léčebného postupu', NULL, 12, 'Standard léčebného postupu', 'Myokarditida', 'MUDr. Janková Pavlína', 'MUDr. Canibal Tomáš', 'MUDr. Kultan Peter', '2006-12-01', '5', '2023-12-01', 'MEZ-JIP, INT-ODD', '2022-12-01', 'standardy_lecebne-myokarditida-revize-5.pdf', 'STD3#12', 'Schváleno', 11, NULL, '2023-01-13 21:42:52', '2023-01-19 12:44:23'),
(13, 3, 'Myopatie', NULL, 13, 'Myopatie', 'Soubor minimálních diagnostických a terapeutických standardů u pacientů s myopatií', 'MUDr. Böhm Marek', 'MUDr. Canibal Tomáš', 'MUDr. Sukop Roman', '2007-12-01', '5', '2023-12-01', 'NEU-ODD', '2022-12-01', 'standardy_lecebne-myopatie-revize-5.pdf', 'STD3#13', 'Schváleno', 11, NULL, '2023-01-13 21:49:16', '2023-01-21 18:44:15'),
(14, 3, 'Parkinsonova choroba', NULL, 14, 'Parkinsonova choroba', 'Soubor minimálních diagnostických a terapeutických standardů u pacientů s parkinsonovou chorobou', 'MUDr. Brzeżański Henryk', 'MUDr. Canibal Tomáš', 'MUDr. Sukop Roman', '2005-07-01', '6', '2023-12-01', 'NEU-ODD', '2022-12-01', 'standardy_lecebne-parkinsonova_choroba-revize-6.pdf', 'STD3#14', 'Schváleno', 11, NULL, '2023-01-13 21:49:58', '2023-01-21 18:45:32'),
(15, 3, 'Polyneuropathie', NULL, 15, 'Polyneuropathie', 'Soubor minimálních diagnostických a terapeutických standardů u pacientů s polyneuropathií', 'MUDr. Böhm Marek', 'MUDr. Canibal Tomáš', 'MUDr. Sukop Roman', '2005-07-01', '6', '2023-12-01', 'NEU-ODD', '2022-12-01', 'standardy_lecebne-polyneuropathie-revize-6.pdf', 'STD3#15', 'Schváleno', 11, NULL, '2023-01-13 21:51:20', '2023-01-21 18:46:08'),
(16, 3, 'Standard léčebného postupu', NULL, 16, 'Standard léčebného postupu', 'Předoperační vyšetření kardiaka před nekardiochirurgickými výkony', 'MUDr. Beran Daniel', 'MUDr. Janiková Andrea', 'MUDr. Adamová Andrea', '2006-10-01', '5', '2023-12-01', 'MEZ-JIP, INT-JIP, INT-AMB', '2022-12-01', 'standardy_lecebne-predoperacni_vysetreni_kardiaka_pred_nekardiochirurgickymi_vykony-revize-5.pdf', 'STD3#16', 'Schváleno', 11, NULL, '2023-01-13 21:52:04', '2023-01-19 13:08:09'),
(17, 3, 'Roztroušená skleróza', NULL, 17, 'Roztroušená skleróza', 'Soubor minimálních diagnostických a terapeutických standardů u pacientů s roztroušenou sklerózou', 'MUDr. Brzeżański Henryk', 'MUDr. Canibal Tomáš', 'MUDr. Holubová Michaela', '2005-07-01', '6', '2023-12-01', 'NEU-ODD', '2022-12-01', 'standardy_lecebne-roztrousena_skleroza-revize-6.pdf', 'STD3#17', 'Schváleno', 11, NULL, '2023-01-13 21:53:04', '2023-01-21 18:46:33'),
(18, 3, 'Standard léčebného postupu', NULL, 18, 'Standard léčebného postupu', 'Soubor indikačních kritérií a postupů oddělení ortopedie', 'MUDr. Pešek Jiří', 'MUDr. Canibal Tomáš', 'MUDr. Pavličný Radek', '2014-12-01', '3', '2023-12-01', 'ORT-ODD', '2022-12-01', 'standardy_lecebne-soubor_indikacnich_kriterii_a_postupu_oddeleni_ortopedie-revize-3.pdf', 'STD3#18', 'Schváleno', 11, NULL, '2023-01-13 21:54:14', '2023-01-24 12:43:45'),
(19, 3, 'Standard léčebného postupu', NULL, 19, 'Standard léčebného postupu', 'Soubor postupů při ošetření infikované nebo potenciálně infikované TEP', 'MUDr. Mráček Dalibor', 'MUDr. Canibal Tomáš', 'MUDr. Pavličný Radek', '2012-07-01', '3', '2023-12-01', 'ORT-ODD', '2022-12-01', 'standardy_lecebne-soubor_postupu_pri_osetreni_infikovane_nebo_potencialne_infikovane_tep-revize-3.pdf', 'STD3#19', 'Schváleno', 11, NULL, '2023-01-13 21:55:05', '2023-01-24 07:13:27'),
(20, 3, 'Vředová choroba gastroduodena', NULL, 20, 'Vředová choroba gastroduodena', 'Soubor minimálních diagnostických a terapeutických standardů u pacientů s vředovou chorobou gastroduodena', 'MUDr. Střída Josef', 'MUDr. Canibal Tomáš', 'MUDr. Kultan Peter', '2007-01-01', '5', '2023-12-01', 'MEZ-JIP, INT-ODD', '2022-12-01', 'standardy_lecebne-vredova_choroba_gastroduodena-revize-5.pdf', 'STD3#20', 'Schváleno', 11, NULL, '2023-01-13 21:56:19', '2023-01-21 18:47:08'),
(21, 1, 'Bezpečnostní cíle', 1, 1, 'Bezpečnostní cíle', 'Správná identifikace pacientů', 'MUDr. Krajnová Pavla', 'MUDr. Kryvoruchko Stanislav', 'MUDr. Urbančíková Kamila', '2014-02-12', '3', '2021-02-12', NULL, '2020-02-12', 'standardy_akreditacni-spravna_identifikace_pacientu-revize-3.pdf', 'Vitae unde eiusmod p', 'Schváleno', 11, NULL, '2023-01-23 15:16:39', '2023-01-23 15:41:21'),
(22, 1, 'Bezpečnostní cíle', 1, 2, 'Bezpečnostní cíle', 'Efektivní komunikace', NULL, 'Rada kvality', 'Vajglová Pavlína, Mgr.', '2017-04-01', '7', '2023-10-10', NULL, '2022-10-10', 'standardy_akreditacni-efektivni_komunikace-revize-7.pdf', 'STD1#2', 'Schváleno', 11, NULL, '2023-01-23 15:39:16', '2023-01-23 15:40:49'),
(23, 1, 'Bezpečnostní cíle', 1, 3, 'Bezpečnostní cíle', 'Zvýšení bezpečí u rizikových léků', 'Bc. Bělicová Taťána', 'Rada kvality', 'Bc. Bělicová Taťána', '2018-01-01', '2', '2023-02-01', NULL, '2022-02-01', 'standardy_akreditacni-zvyseni_bezpeci_u_rizikovych_leku-revize-2.pdf', 'STD1#3', 'Schváleno', 11, NULL, '2023-01-23 15:53:59', '2023-01-23 15:53:59'),
(24, 1, 'Bezpečnostní cíle', 1, 4, 'Bezpečnostní cíle', 'Prevence záměny pacienta, výkonu a lokalizace provedení', 'MUDr. Miškej Marek', 'Rada kvality', 'Kašingová Miroslava', '2017-04-01', '3', '2023-02-23', NULL, '2022-02-23', 'standardy_akreditacni-prevence_zameny_pacienta,_vykonu_a_lokalizace_provedeni-revize-3.pdf', 'STD1#4', 'Schváleno', 11, NULL, '2023-01-23 15:58:04', '2023-01-23 15:58:04'),
(25, 1, 'Bezpečnostní cíle', 1, 5, 'Bezpečnostní cíle', 'Hygiena rukou při poskytování zdravotní péče', 'Vajglová Pavlína, Mgr.', 'Rada kvality', 'Vajglová Pavlína, Mgr.', '2017-04-01', '3', '2023-02-01', NULL, '2022-02-01', 'standardy_akreditacni-hygiena_rukou_pri_poskytovani_zdravotni_pece-revize-3.pdf', 'STD1#5', 'Schváleno', 11, NULL, '2023-01-23 16:01:52', '2023-01-23 16:01:52'),
(26, 1, 'Bezpečnostní cíle', 1, 6, 'Bezpečnostní cíle', 'Postupy ke snížení rizika poškození pacientů v důsledku pádu', 'Cyroňová Irena', 'Rada kvality', 'Bc. Bělicová Taťána', '2017-04-01', '3', '2023-02-01', NULL, '2022-02-01', 'standardy_akreditacni-postupy_ke_snizeni_rizika_poskozeni_pacientu_v_dusledku_padu-revize-3.pdf', 'STD1#6', 'Schváleno', 11, NULL, '2023-01-23 16:03:24', '2023-01-23 16:03:24'),
(28, 11, 'Standard logopedické péče', NULL, 1, 'Standard logopedické péče', 'Příjem klienta a diagnostika narušené komunikační schopnosti', 'Mgr. Mlýnková Ruth', 'Rada kvality', 'Mgr. Bogocz Danuta', '2011-08-01', '3', '2022-11-01', 'LOG', '2021-11-01', 'standardy_logopedicke-prijem_klienta_a_diagnostika_narusene_komunikacni_schopnosti-revize-3.pdf', 'STD11#1', 'Schváleno', 11, NULL, '2023-01-24 13:29:07', '2023-01-29 18:41:23'),
(29, 11, 'Standard logopedické péče', NULL, 2, 'Standard logopedické péče', 'Vedení dokumentace u klientů s narušenou komunikační schopností', 'Mlýnková Ruth', 'Rada kvality', NULL, '2011-08-01', '3', '2022-11-01', 'LOG', '2021-11-01', 'standardy_logopedicke-vedeni_dokumentace_u_klientu_s_narusenou_komunikacni_schopnosti-revize-3.pdf', 'STD11#2', 'Schváleno', 11, NULL, '2023-01-24 13:34:13', '2023-01-24 13:34:13'),
(30, 11, 'Standard logopedické péče', NULL, 3, 'Standard logopedické péče', 'Logopedická intervence u osob s narušenou komunikační schopností', NULL, 'Rada kvality', NULL, '2011-08-01', '3', '2022-11-01', 'LOG', '2021-11-01', 'standardy_logopedicke-logopedicka_intervence_u_osob_s_narusenou_komunikacni_schopnosti-revize-3.pdf', 'STD11#3', 'Schváleno', 11, NULL, '2023-01-24 13:37:10', '2023-03-11 17:06:25'),
(31, 9, 'Standard ošetřovatelské péče - OCHP', NULL, 1, 'Standard ošetřovatelské péče - OCHP', 'Spirometr', 'Kuzníková Jaroslava,', 'Rada kvality', 'Kurusová Alexandra,', '2008-04-01', '6', '2022-10-01', 'OPL', '2021-10-01', 'standardy_opl-spirometr-revize-6.pdf', 'STD9#1', 'Schváleno', 11, NULL, '2023-01-25 06:53:18', '2023-01-25 07:01:06'),
(32, 9, 'Standard ošetřovatelské péče - OCHP', NULL, 2, 'Standard ošetřovatelské péče - OCHP', 'Pletyzmigrafie', 'Kuzníková Jaroslava', 'Rada kvality', 'Kusová Zdeňka', '2008-04-01', '6', '2022-10-01', 'OPL', '2021-10-01', 'standardy_opl-pletyzmigrafie-revize-6.pdf', 'STD9#2', 'Schváleno', 11, NULL, '2023-01-25 07:06:22', '2023-01-25 07:06:46'),
(33, 9, 'Standard ošetřovatelské péče - OCHP', NULL, 3, 'Standard ošetřovatelské péče - OCHP', 'Chladový test', 'Kuzníková Jaroslava', 'Rada kvality', 'Kusová Zdeňka', '2008-04-01', '6', '2023-10-01', 'OPL', '2021-10-01', 'standardy_opl-chladovy_test-revize-6.pdf', 'STD9#3', 'Schváleno', 11, NULL, '2023-01-25 07:08:30', '2023-01-25 07:08:30'),
(34, 9, 'Standard ošetřovatelské péče - OCHP', NULL, 4, 'Standard ošetřovatelské péče - OCHP', 'Dvoustupňová dezinfekce spirometru', 'Kuzníková Jaroslava', 'Rada kvality', 'Kusová Zdeňka', '2021-10-01', '2', '2023-10-01', 'OPL', '2021-10-01', 'standardy_opl-dvoustupnova_dezinfekce_spirometru-revize-2.pdf', 'STD9#4', 'Schváleno', 11, NULL, '2023-01-25 07:09:26', '2023-01-25 07:09:26'),
(35, 8, 'Pracovní standard pro rehabilitační oddělení', NULL, 1, 'Pracovní standard pro rehabilitační oddělení', 'Příjem pacienta na rehabilitační ambulanci', 'Kolektiv fyzioterapeutů', 'Rada kvality', 'Němcová Andrea', '2004-04-01', '8', '2022-10-01', 'REH-AMB', '2021-10-01', 'standardy_rehabilitacni-prijem_pacienta_na_rehabilitacni_ambulanci-revize-8.pdf', 'STD8#1', 'Schváleno', 11, NULL, '2023-01-25 07:19:32', '2023-03-11 17:22:44'),
(36, 8, 'Pracovní standard pro rehabilitační oddělení', NULL, 2, 'Pracovní standard pro rehabilitační oddělení', 'Individální kinezioterapie', 'Kolektiv fyzioterapeutů', 'Rada kvality', 'Němcová Andrea', '2004-04-01', '8', '2022-10-01', 'REH-AMB, REH-ODD', '2021-10-01', 'standardy_rehabilitacni-individalni_kinezioterapie-revize-8.pdf', 'STD8#2', 'Schváleno', 11, NULL, '2023-01-25 07:32:31', '2023-03-11 17:22:56'),
(37, 8, 'Pracovní standard pro rehabilitační oddělení', NULL, 3, 'Pracovní standard pro rehabilitační oddělení', 'Vodoléčba - cvičení v bazénu', 'Kolektiv fyzioterapeutů', 'Rada kvality', 'Bc. Bělicová Taťána', '2004-04-01', '8', '2022-10-01', 'REH-AMB, REH-ODD', '2021-10-01', 'standardy_rehabilitacni-vodolecba_-_cviceni_v_bazenu-revize-8.pdf', 'STD8#3', 'Schváleno', 11, NULL, '2023-01-25 07:34:58', '2023-01-27 08:38:03'),
(38, 8, 'Pracovní standard pro rehabilitační oddělení', NULL, 4, 'Pracovní standard pro rehabilitační oddělení', 'Aplikace vířivé koupele', 'Kolektiv fyzioterapeutů', 'Rada kvality', 'Bc. Bělicová Taťána', '2004-04-01', '8', '2022-10-01', 'REH-AMB, REH-ODD', '2021-10-01', 'standardy_rehabilitacni-aplikace_virive_koupele-revize-8.pdf', 'STD8#4', 'Schváleno', 11, NULL, '2023-01-25 07:37:08', '2023-01-26 19:00:25'),
(39, 8, 'Pracovní standard pro rehabilitační oddělení', NULL, 5, 'Pracovní standard pro rehabilitační oddělení', 'Aplikace podvodní masaže', 'Kolektiv fyzioterapeutů', 'Rada kvality', 'Bc. Bělicová Taťána', '2004-04-01', '8', '2022-10-01', 'REH-AMB, REH-ODD', '2021-10-01', 'standardy_rehabilitacni-aplikace_podvodni_masaze-revize-8.pdf', 'STD8#5', 'Schváleno', 11, NULL, '2023-01-25 07:43:30', '2023-01-26 19:00:32'),
(40, 8, 'Pracovní standard pro rehabilitační oddělení', NULL, 6, 'Pracovní standard pro rehabilitační oddělení', 'Thermo terapie', 'Kolektiv fyzioterapeutů', 'Rada kvality', 'Bc. Bělicová Taťána', '2004-04-01', '8', '2023-10-01', 'REH-AMB, REH-ODD', '2021-10-01', 'standardy_rehabilitacni-thermo_terapie-revize-8.pdf', 'STD8#6', 'Schváleno', 11, NULL, '2023-01-25 07:45:21', '2023-01-25 07:45:21'),
(41, 8, 'Pracovní standard pro rehabilitační oddělení', NULL, 7, 'Pracovní standard pro rehabilitační oddělení', 'Aplikace fototerapie', 'Kolektiv fyzioterapeutů', 'Rada kvality', 'Bc. Bělicová Taťána', '2004-04-01', '8', '2022-10-01', 'REH-AMB, REH-ODD', '2021-10-01', 'standardy_rehabilitacni-aplikace_fototerapie-revize-8.pdf', 'STD8#7', 'Schváleno', 11, NULL, '2023-01-25 07:47:12', '2023-03-11 17:15:40'),
(42, 14, 'Zápis o zneškodnění návykové látky', NULL, 2, 'Zápis o zneškodnění návykové látky', 'Zápis o zneškodnění návykové látky', NULL, NULL, NULL, '2014-06-01', 'červen 2022', '2023-06-01', NULL, '2022-06-01', 'dokumenty_sesterska-zapis_o_zneskodneni_navykove_latky-revize-cerven_2022.pdf', 'STD8#7', 'Schváleno', 11, NULL, '2023-01-25 07:47:12', '2023-02-01 06:42:42'),
(43, 14, 'Zápis o předání návykové látky', NULL, 1, 'Zápis o předání návykové látky', 'Zápis o předání návykové látky', NULL, NULL, NULL, '2014-06-01', 'červen 2022', '2023-06-01', NULL, '2022-06-01', 'dokumenty_sesterska-zapis_o_predani_navykove_latky-revize-cerven_2022.pdf', 'STD8#7', 'Schváleno', 11, NULL, '2023-01-25 07:47:12', '2023-03-04 15:29:40'),
(44, 10, 'Standardní operační postup – OKB úsek krevní banka', NULL, 1, 'Standardní operační postup – OKB úsek krevní banka', 'Vyšetření krevní skupiny AB0/Rh D na jednorázové fólii hx seroplates 10', NULL, 'Rada kvality', 'Ing. Kolatková Marina', '2013-11-01', '4', '2022-12-01', 'OKB', '2021-12-01', 'standardy_okb-vysetreni_krevni_skupiny_ab0-rh_d_na_jednorazove_folii_hx_seroplates_10-revize-4.pdf', 'STD10#1', 'Schváleno', 11, NULL, '2023-01-26 08:59:54', '2023-01-29 20:41:09'),
(45, 10, 'Standardní operační postup – OKB úsek krevní banka', NULL, 2, 'Standardní operační postup – OKB úsek krevní banka', 'Vvyšetření zkoušky kompatibility a vyšetření protilátek u příjemce bio-rad id–micro typing system', NULL, NULL, NULL, '2006-11-07', '9', '2023-12-01', 'OKB', '2021-12-01', 'standardy_okb-vvysetreni_zkousky_kompatibility_a_vysetreni_protilatek_u_prijemce_bio-rad_id–micro_typing_system-revize-9.pdf', 'STD10#2', 'Schváleno', 11, NULL, '2023-01-26 09:06:06', '2023-01-26 09:06:06'),
(46, 10, 'Standardní operační postup – OKB úsek krevní banka', NULL, 3, 'Standardní operační postup – OKB úsek krevní banka', 'Příjem požadavků na předtransfúzní vyšetření', NULL, NULL, NULL, '2021-12-01', '9', '2023-12-01', NULL, '2021-12-01', 'standardy_okb-prijem_pozadavku_na_predtransfuzni_vysetreni-revize-9.pdf', 'STD10#3', 'Schváleno', 11, NULL, '2023-01-26 09:12:57', '2023-01-26 09:12:57'),
(47, 10, 'Standardní operační postup – OKB úsek krevní banka', NULL, 4, 'Standardní operační postup – OKB úsek krevní banka', 'Výdej trasfůzních prostředků', NULL, NULL, NULL, '2006-11-15', '10', '2023-12-01', 'OKB', '2021-12-01', 'standardy_okb-vydej_trasfuznich_prostredku-revize-10.pdf', 'STD10#4', 'Schváleno', 11, NULL, '2023-01-26 09:16:00', '2023-01-26 09:16:00'),
(48, 10, 'Standardní operační postup – OKB úsek krevní banka', NULL, 5, 'Standardní operační postup – OKB úsek krevní banka', 'Příjem, kontrola a skladování diagnostik', NULL, NULL, NULL, '2006-11-15', '10', '2023-12-01', NULL, '2021-12-01', 'standardy_okb-prijem,_kontrola_a_skladovani_diagnostik-revize-10.pdf', 'STD10#5', 'Schváleno', 11, NULL, '2023-01-26 09:18:45', '2023-01-26 09:18:45'),
(49, 10, 'Standardní operační postup – OKB úsek krevní banka', NULL, 6, 'Standardní operační postup – OKB úsek krevní banka', 'Dezinfekční režim', NULL, NULL, NULL, '2006-11-15', '10', '2023-12-01', NULL, '2021-12-01', 'standardy_okb-dezinfekcni_rezim-revize-10.pdf', 'STD10#6', 'Schváleno', 11, NULL, '2023-01-26 09:20:06', '2023-01-26 09:20:06'),
(50, 10, 'Standardní operační postup – OKB úsek krevní banka', NULL, 7, 'Standardní operační postup – OKB úsek krevní banka', 'Objednávání trombocytárního přípravku', NULL, NULL, NULL, '2006-11-15', '11', '2022-12-01', NULL, '2021-12-01', 'standardy_okb-objednavani_trombocytarniho_pripravku-revize-11.pdf', 'STD10#7', 'Schváleno', 11, NULL, '2023-01-26 09:30:46', '2023-01-26 18:59:51'),
(51, 10, 'Standardní operační postup – OKB úsek krevní banka', NULL, 8, 'Standardní operační postup – OKB úsek krevní banka', 'Identifikace protilátek', NULL, NULL, NULL, '2006-11-15', '10', '2023-12-01', NULL, '2021-12-01', 'standardy_okb-identifikace_protilatek-revize-10.pdf', 'STD10#8', 'Schváleno', 11, NULL, '2023-01-26 09:32:33', '2023-01-26 09:32:33'),
(52, 10, 'Standardní operační postup – OKB úsek krevní banka', NULL, 9, 'Standardní operační postup – OKB úsek krevní banka', 'Objednávání transfuzních přípravků z transfuzních', NULL, NULL, NULL, '2008-01-21', '8', '2023-12-01', NULL, '2021-12-01', 'standardy_okb-objednavani_transfuznich_pripravku_z_transfuznich-revize-8.pdf', 'STD10#9', 'Schváleno', 11, NULL, '2023-01-26 09:34:04', '2023-01-26 09:34:04'),
(53, 10, 'Standardní operační postup – OKB úsek krevní banka', NULL, 10, 'Standardní operační postup – OKB úsek krevní banka', 'Dovoz autologní krve', NULL, NULL, NULL, '2007-08-20', '9', '2023-12-01', 'OKB', '2021-12-01', 'standardy_okb-dovoz_autologni_krve-revize-9.pdf', 'STD10#10', 'Schváleno', 11, NULL, '2023-01-26 09:35:21', '2023-01-26 09:35:21'),
(54, 10, 'Standardní operační postup – OKB úsek krevní banka', NULL, 11, 'Standardní operační postup – OKB úsek krevní banka', 'Doporučený postup při vyšetřování a hlášení potransfuzních reakcí', NULL, NULL, NULL, '2007-08-20', '8', '2023-12-01', 'OKB', '2021-12-01', 'standardy_okb-doporuceny_postup_pri_vysetrovani_a_hlaseni_potransfuznich_reakci-revize-8.pdf', 'STD10#11', 'Schváleno', 11, NULL, '2023-01-26 09:36:48', '2023-01-26 09:36:48'),
(55, 10, 'Standardní operační postup – OKB úsek krevní banka', NULL, 12, 'Standardní operační postup – OKB úsek krevní banka', 'STANDARD - Zrušen', NULL, NULL, NULL, '2022-12-01', '0', '2023-12-01', 'OKB', '2022-12-01', 'standardy_okb-standard_-_zrusen-revize-0.pdf', 'STD10#12', 'Schváleno', 11, NULL, '2023-01-26 09:42:52', '2023-01-26 09:43:22'),
(56, 10, 'Standardní operační postup – OKB úsek krevní banka', NULL, 13, 'Standardní operační postup – OKB úsek krevní banka', 'Dokumentace a hlášení potransfuzních reakcí', NULL, NULL, NULL, '2006-11-20', '8', '2023-12-01', NULL, '2021-12-01', 'standardy_okb-dokumentace_a_hlaseni_potransfuznich_reakci-revize-8.pdf', 'STD10#13', 'Schváleno', 11, NULL, '2023-01-26 09:45:27', '2023-01-26 09:45:27'),
(57, 10, 'Standardní operační postup – OKB úsek krevní banka', NULL, 14, 'Standardní operační postup – OKB úsek krevní banka', 'STANDARD - Zrušen', NULL, NULL, NULL, '2022-12-01', '0', '2023-12-01', NULL, '2022-12-01', 'standardy_okb-standard_-_zrusen-revize-0.pdf', 'STD10#12', 'Schváleno', 11, NULL, '2023-01-26 09:42:52', '2023-01-26 19:24:13'),
(58, 10, 'Standardní operační postup – OKB úsek krevní banka', NULL, 15, 'Standardní operační postup – OKB úsek krevní banka', 'Sledování teplot chladicích a mrazicích zařízení kontrola funkčnosti alarmu', NULL, NULL, NULL, '2008-01-24', '9', '2023-12-01', 'OKB', '2021-12-01', 'standardy_okb-sledovani_teplot_chladicich_a_mrazicich_zarizeni_kontrola_funkcnosti_alarmu-revize-9.pdf', 'STD10#15', 'Schváleno', 11, NULL, '2023-01-26 09:53:59', '2023-01-26 09:53:59'),
(59, 10, 'Standardní operační postup – OKB úsek krevní banka', NULL, 16, 'Standardní operační postup – OKB úsek krevní banka', 'Manipulace s transfuzními přípravky při poruše chladicího a mrazicího zařízení', NULL, NULL, NULL, '2006-11-20', '9', '2023-12-01', 'OKB', '2021-12-01', 'standardy_okb-manipulace_s_transfuznimi_pripravky_pri_poruse_chladiciho_a_mraziciho_zarizeni-revize-9.pdf', 'STD10#16', 'Schváleno', 11, NULL, '2023-01-26 09:56:42', '2023-01-26 09:56:42'),
(60, 10, 'Standardní operační postup – OKB úsek krevní banka', NULL, 17, 'Standardní operační postup – OKB úsek krevní banka', 'Skladování transfuzních přípravků', NULL, NULL, NULL, '2006-11-20', '9', '2023-12-01', 'OKB', '2021-12-01', 'standardy_okb-skladovani_transfuznich_pripravku-revize-9.pdf', 'STD10#17', 'Schváleno', 11, NULL, '2023-01-26 09:58:34', '2023-01-26 09:58:34'),
(61, 10, 'Standardní operační postup – OKB úsek krevní banka', NULL, 18, 'Standardní operační postup – OKB úsek krevní banka', 'Návod na použití a údržbu ID – Inkubátoru', NULL, NULL, NULL, '2006-11-20', '10', '2023-12-01', 'OKB', '2021-12-01', 'standardy_okb-navod_na_pouziti_a_udrzbu_id_–_inkubatoru-revize-10.pdf', 'STD10#18', 'Schváleno', 11, NULL, '2023-01-26 10:00:18', '2023-01-26 10:00:18'),
(62, 10, 'Standardní operační postup – OKB úsek krevní banka', NULL, 19, 'Standardní operační postup – OKB úsek krevní banka', 'Návod na použití a údržbu ID – Centrifugy', NULL, NULL, NULL, '2006-11-20', '10', '2023-12-01', 'OKB', '2021-12-01', 'standardy_okb-navod_na_pouziti_a_udrzbu_id_–_centrifugy-revize-10.pdf', 'STD10#19', 'Schváleno', 11, NULL, '2023-01-26 10:01:39', '2023-01-26 10:01:39'),
(63, 10, 'Standardní operační postup – OKB úsek krevní banka', NULL, 20, 'Standardní operační postup – OKB úsek krevní banka', 'Zajištění transfuzní přípravků pro oddělení nemocí páteře a ortopedii', NULL, NULL, NULL, '2008-01-29', '8', '2023-12-01', 'OKB', '2021-12-01', 'standardy_okb-zajisteni_transfuzni_pripravku_pro_oddeleni_nemoci_patere_a_ortopedii-revize-8.pdf', 'STD10#20', 'Schváleno', 11, NULL, '2023-01-26 10:18:26', '2023-01-26 10:18:26'),
(64, 10, 'Standardní operační postup – OKB úsek krevní banka', NULL, 21, 'Standardní operační postup – OKB úsek krevní banka', 'Kontrola jakosti v imunohematologii', NULL, NULL, NULL, '2014-01-21', '4', '2023-12-01', 'OKB', '2021-12-01', 'standardy_okb-kontrola_jakosti_v_imunohematologii-revize-4.pdf', 'STD10#21', 'Schváleno', 11, NULL, '2023-01-26 10:29:06', '2023-01-26 10:29:06'),
(65, 10, 'Standardní operační postup – OKB úsek krevní banka', NULL, 22, 'Standardní operační postup – OKB úsek krevní banka', 'Vnitřní vstupní kontrola kvality diagnostik', NULL, NULL, NULL, '2006-11-20', '8', '2023-12-01', NULL, '2021-12-01', 'standardy_okb-vnitrni_vstupni_kontrola_kvality_diagnostik-revize-8.pdf', 'STD10#22', 'Schváleno', 11, NULL, '2023-01-26 10:30:40', '2023-01-26 10:30:40'),
(66, 10, 'Standardní operační postup – OKB úsek krevní banka', NULL, 23, 'Standardní operační postup – OKB úsek krevní banka', 'Likvidace nepoužitých exspirovaných transfuzních přípravků', NULL, NULL, NULL, '2006-11-20', '9', '2022-12-01', 'OKB', '2021-12-01', 'standardy_okb-likvidace_nepouzitych_exspirovanych_transfuznich_pripravku-revize-9.pdf', 'STD10#23', 'Schváleno', 11, NULL, '2023-01-26 10:32:41', '2023-01-26 20:50:05'),
(67, 10, 'Standardní operační postup – OKB úsek krevní banka', NULL, 24, 'Standardní operační postup – OKB úsek krevní banka', 'Postup při poruše id-inkubátoru (centrifugy)', NULL, NULL, NULL, '2006-11-20', '7', '2023-12-01', 'OKB', '2021-12-01', 'standardy_okb-postup_pri_poruse_id-inkubatoru_(centrifugy)-revize-7.pdf', 'STD10#24', 'Schváleno', 11, NULL, '2023-01-26 10:34:52', '2023-01-26 10:34:52'),
(68, 10, 'Standardní operační postup – OKB úsek krevní banka', NULL, 25, 'Standardní operační postup – OKB úsek krevní banka', 'Reklamace a stahování léčiv (transfuzních přípravků)', NULL, NULL, NULL, '2007-01-05', '8', '2023-12-01', 'OKB', '2021-12-01', 'standardy_okb-reklamace_a_stahovani_leciv_(transfuznich_pripravku)-revize-8.pdf', 'STD10#25', 'Schváleno', 11, NULL, '2023-01-26 10:37:01', '2023-01-26 10:37:01'),
(69, 10, 'Standardní operační postup – OKB úsek krevní banka', NULL, 26, 'Standardní operační postup – OKB úsek krevní banka', 'Manipulace s čerstvě mraženou plazmou skmp', NULL, NULL, NULL, '2007-01-28', '8', '2023-12-01', 'OKB', '2021-12-01', 'standardy_okb-manipulace_s_cerstve_mrazenou_plazmou_skmp-revize-8.pdf', 'STD10#26', 'Schváleno', 11, NULL, '2023-01-26 10:39:08', '2023-01-26 10:39:08'),
(70, 10, 'Standardní operační postup – OKB úsek krevní banka', NULL, 27, 'Standardní operační postup – OKB úsek krevní banka', 'Reklamace diagnostik', NULL, NULL, NULL, '2008-01-29', '8', '2023-12-01', 'OKB', '2021-12-01', 'standardy_okb-reklamace_diagnostik-revize-8.pdf', 'STD10#27', 'Schváleno', 11, NULL, '2023-01-26 10:40:27', '2023-01-26 10:40:27'),
(71, 10, 'Standardní operační postup – OKB úsek krevní banka', NULL, 28, 'Standardní operační postup – OKB úsek krevní banka', 'STANDARD - Zrušen', NULL, NULL, NULL, '2021-12-01', '0', '2022-12-01', 'OKB', '2021-12-01', 'standardy_okb-standard_-_zrusen-revize-0.pdf', 'STD10#28', 'Schváleno', 11, NULL, '2023-01-26 10:41:36', '2023-02-01 10:25:43'),
(72, 10, 'Standardní operační postup – OKB úsek krevní banka', NULL, 29, 'Standardní operační postup – OKB úsek krevní banka', 'Revize dokumentů (sop) na krevní bance', NULL, NULL, NULL, '2011-11-01', '4', '2023-12-01', 'OKB', '2021-12-01', 'standardy_okb-revize_dokumentu_(sop)_na_krevni_bance-revize-4.pdf', 'STD10#29', 'Schváleno', 11, NULL, '2023-01-26 10:43:14', '2023-01-26 10:43:14'),
(73, 10, 'Standardní operační postup – OKB úsek krevní banka', NULL, 30, 'Standardní operační postup – OKB úsek krevní banka', 'Rozmrazování skmp a ohřev erytrocytárních transfuzních přípravků', NULL, NULL, NULL, '2018-01-01', '2', '2023-12-01', NULL, '2021-12-01', 'standardy_okb-rozmrazovani_skmp_a_ohrev_erytrocytarnich_transfuznich_pripravku-revize-2.pdf', 'STD10#30', 'Schváleno', 11, 1, '2023-01-26 10:44:36', '2023-01-26 10:44:36'),
(74, 6, 'Standard ošetřovatelské péče - anesteziologický', NULL, 1, 'Standard ošetřovatelské péče - anesteziologický', 'Příprava a asistence u celkové anestezie u TEP kyčle', NULL, NULL, NULL, '2004-04-01', '7', '2022-10-01', 'ANEST', '2021-10-01', 'standardy_anesteziologicke-priprava_a_asistence_u_celkove_anestezie_u_tep_kycle-revize-7.pdf', 'STD6#1', 'Schváleno', 11, 14, '2023-01-26 11:04:19', '2023-03-12 21:40:53'),
(75, 6, 'Standard ošetřovatelské péče - anesteziologický', NULL, 2, 'Standard ošetřovatelské péče - anesteziologický', 'Příprava a asistence u celkové anestezie u operace páteře', NULL, NULL, NULL, '2004-04-01', '7', '2022-10-01', NULL, '2021-10-01', 'standardy_anesteziologicke-priprava_a_asistence_u_celkove_anestezie_u_operace_patere-revize-7.pdf', 'STD6#2', 'Schváleno', 11, NULL, '2023-01-26 11:06:58', '2023-01-26 11:23:54'),
(76, 6, 'Standard ošetřovatelské péče - anesteziologický', NULL, 3, 'Standard ošetřovatelské péče - anesteziologický', 'Příprava a asistence u celkové anestezie u periferní nervové blokád', NULL, NULL, NULL, '2005-09-20', '7', '2022-10-01', 'ANEST', '2021-10-01', 'standardy_anesteziologicke-priprava_a_asistence_u_celkove_anestezie_u_periferni_nervove_blokad-revize-7.pdf', 'STD6#3', 'Schváleno', 11, NULL, '2023-01-26 11:09:12', '2023-01-26 11:24:07'),
(77, 6, 'Standard ošetřovatelské péče - anesteziologický', NULL, 4, 'Standard ošetřovatelské péče - anesteziologický', 'Příprava a asistence u epidurální a subarachnoidální anestezie', NULL, NULL, NULL, '2005-09-22', '7', '2022-10-01', 'ANEST', '2021-10-01', 'standardy_anesteziologicke-priprava_a_asistence_u_epiduralni_a_subarachnoidalni_anestezie-revize-7.pdf', 'STD6#4', 'Schváleno', 11, NULL, '2023-01-26 11:10:19', '2023-01-26 11:24:17'),
(81, 14, 'Identifikační údaje k opiátové knize', NULL, 3, 'Identifikační údaje k opiátové knize', 'Identifikační údaje k opiátové knize', NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, 'dokumenty_sesterska-identifikacni_udaje_k_opiatove_knize-revize-1.pdf', 'DOC14#2', 'Schváleno', 11, NULL, '2023-01-27 07:31:00', '2023-03-04 15:19:21'),
(82, 14, 'Akutní karta pro standardní oddělení', NULL, 4, 'Akutní karta pro standardní oddělení', 'Akutní karta pro standardní oddělení', NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, 'dokumenty-sesterska-akutni_karta_pro_standardni_oddeleni-revize-1.pdf', 'DOC14#4', 'Schváleno', 11, NULL, '2023-01-27 07:31:37', '2023-01-27 08:19:28'),
(83, 14, 'Protokol analytické kontroly glykémie', NULL, 5, 'Protokol analytické kontroly glykémie', 'Protokol analytické kontroly glykémie', NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, 'dokumenty-sesterska-protokol_analyticke_kontroly_glykemie-revize-1.pdf', 'DOC14#5', 'Schváleno', 11, NULL, '2023-01-27 07:32:08', '2023-01-27 08:19:45'),
(84, 14, 'Transfuzní záznam', NULL, 6, 'Transfuzní záznam', 'Transfuzní záznam', NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, 'dokumenty-sesterska-transfuzni_zaznam-revize-1.pdf', 'DOC14#6', 'Schváleno', 11, NULL, '2023-01-27 07:32:33', '2023-01-27 08:19:59'),
(85, 14, 'Hlášení o nepodaných transfuzních přípravcích', NULL, 7, 'Hlášení o nepodaných transfuzních přípravcích', 'Hlášení o nepodaných transfuzních přípravcích', NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, 'dokumenty-sesterska-hlaseni_o_nepodanych_transfuznich_pripravcich-revize-1.pdf', 'DOC14#7', 'Schváleno', 11, NULL, '2023-01-27 07:33:50', '2023-01-27 08:20:18'),
(86, 14, 'Protokol o likvidaci transfuzního přípravku', NULL, 8, 'Protokol o likvidaci transfuzního přípravku', 'Protokol o likvidaci transfuzního přípravku', NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, 'dokumenty-sesterska-protokol_o_likvidaci_transfuzniho_pripravku-revize-1.pdf', 'DOC14#8', 'Schváleno', 11, NULL, '2023-01-27 07:34:16', '2023-01-27 08:20:34'),
(87, 14, 'Hlášení reakcí po transfuzích', NULL, 9, 'Hlášení reakcí po transfuzích', 'Hlášení reakcí po transfuzích', NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, 'dokumenty-sesterska-hlaseni_reakci_po_transfuzich-revize-1.pdf', 'DOC14#9', 'Schváleno', 11, NULL, '2023-01-27 07:34:46', '2023-01-27 08:21:26'),
(88, 14, 'Proškolení obsluhy zdravotnického prostředku', NULL, 10, 'Proškolení obsluhy zdravotnického prostředku', 'Proškolení obsluhy zdravotnického prostředku', NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, 'dokumenty-sesterska-proskoleni_obsluhy_zdravotnickeho_prostredku-revize-1.pdf', 'DOC14#10', 'Schváleno', 11, NULL, '2023-01-27 07:35:05', '2023-01-27 08:21:42'),
(89, 2, 'Standard ošetřovatelské péče', NULL, 1, 'Standard ošetřovatelské péče', 'Příjem nemocného na standardní oddělení', 'Sekaninová Anna', 'Rada kvality', 'Bc. Bělicová Taťána', '2022-03-01', '13', '2023-03-01', NULL, '2022-03-01', 'standardy_osetrovatelske-prijem_nemocneho_na_standardni_oddeleni-revize-13.pdf', 'STD2#1', 'Schváleno', 11, NULL, '2023-01-27 08:45:43', '2023-03-11 17:31:30'),
(90, 2, 'Standard ošetřovatelské péče', NULL, 2, 'Standard ošetřovatelské péče', 'Propuštění nebo překlad nemocného', 'Sekaninová Anna', 'Rada kvality', 'Bc. Bělicová Taťána', '2002-09-01', '13', '2023-06-01', NULL, '2021-06-01', 'standardy_osetrovatelske-propusteni_nebo_preklad_nemocneho-revize-13.pdf', 'STD2#2', 'Schváleno', 11, NULL, '2023-01-27 08:51:19', '2023-01-27 08:51:19'),
(91, 2, 'Hygienická péče o nemocné', NULL, 3, 'Hygienická péče o nemocné', 'Hygienická péče o nemocné', 'Rada kvality', 'Rada kvality', 'Bc. Bělicová Taťána', '2002-09-01', '9', '2022-06-01', NULL, '2021-06-01', 'standardy_osetrovatelske-hygienicka_pece_o_nemocne-revize-9.pdf', 'STD2#3', 'Schváleno', 11, NULL, '2023-01-27 08:56:21', '2023-01-27 09:37:38'),
(92, 2, 'Standard ošetřovatelské péče', NULL, 4, 'Standard ošetřovatelské péče', 'Měření vitálních funkcí', 'Sekaninová Anna', 'Rada kvality', 'MUDr. Kalina František', '2002-09-01', '8', '2023-06-01', NULL, '2021-06-01', 'standardy_osetrovatelske-mereni_vitalnich_funkci-revize-8.pdf', 'STD2#4', 'Schváleno', 11, NULL, '2023-01-27 08:58:23', '2023-01-27 08:58:23'),
(93, 2, 'Standard ošetřovatelské péče', NULL, 5, 'Standard ošetřovatelské péče', 'Bezpečný odběr biologického materiálu', 'Sekaninová Anna', 'Rada kvality', 'Przybylová Gabriela', '2002-09-01', '9', '2022-06-01', NULL, '2021-06-01', 'standardy_osetrovatelske-bezpecny_odber_biologickeho_materialu-revize-9.pdf', 'STD2#5', 'Schváleno', 11, NULL, '2023-01-27 09:01:50', '2023-03-11 17:33:52'),
(94, 2, 'Standard ošetřovatelské péče', NULL, 7, 'Standard ošetřovatelské péče', 'Příprava a podávání léků injekční formou aplikace infuzí', NULL, NULL, NULL, '2002-09-01', '9', '2022-06-01', NULL, '2021-06-01', 'standardy_osetrovatelske-priprava_a_podavani_leku_injekcni_formou_aplikace_infuzi-revize-9.pdf', 'STD2#6', 'Schváleno', 11, NULL, '2023-01-27 09:08:58', '2023-01-29 20:13:02'),
(96, 1, 'Skladování, předepisování a podávání léčiv', 7, 1, 'Skladování, předepisování a podávání léčiv', 'Skladování, předepisování a podávání léčiv', 'Bc. Bělicová Taťána', 'Rada kvality', 'Bc. Bělicová Taťána', '2022-11-08', '4', '2023-11-01', NULL, '2022-11-01', 'standardy_akreditacni-skladovani,_predepisovani_a_podavani_leciv-revize-4.pdf', 'STD1#7', 'Schváleno', 11, NULL, '2023-01-30 05:52:19', '2023-01-30 05:52:19'),
(97, 2, 'Standard ošetřovatelské péče', NULL, 8, 'Standard ošetřovatelské péče', 'Příprava a asistence u aplikace transfúzních přípravků', 'Sekaninová Anna', 'Rada kvality', 'Bc. Bělicová Taťána', '2002-09-01', '11', '2022-06-01', NULL, '2021-06-01', 'standardy_osetrovatelske-priprava_a_asistence_u_aplikace_transfuznich_pripravku-revize-11.pdf', 'STD2#8', 'Schváleno', 11, NULL, '2023-02-01 07:27:40', '2023-02-01 07:27:40'),
(98, 2, 'Standard ošetřovatelské péče', NULL, 9, 'Standard ošetřovatelské péče', 'Péče o žilní vstupy - ( periferní žilní katétr )', 'Rada kvality', NULL, NULL, '2002-09-01', '9', '2022-06-01', NULL, '2021-06-01', 'standardy_osetrovatelske-pece_o_zilni_vstupy-revize-9.pdf', 'STD2#9', 'Schváleno', 11, NULL, '2023-02-01 07:42:23', '2023-02-01 07:44:17'),
(99, 2, 'Standard ošetřovatelské péče', NULL, 10, 'Standard ošetřovatelské péče', 'Péče o horní cesty dýchací', NULL, NULL, NULL, '2002-09-02', '9', '2023-06-01', NULL, '2021-06-01', 'standardy_osetrovatelske-pece_o_horni_cesty_dychaci-revize-9.pdf', 'STD2#10', 'Schváleno', 11, NULL, '2023-02-01 07:53:11', '2023-02-01 07:53:11'),
(100, 2, 'Standard ošetřovatelské péče', NULL, 11, 'Standard ošetřovatelské péče', 'Kyslíková teparie', NULL, NULL, NULL, '2002-09-02', '1', '2023-06-01', NULL, '2021-06-01', 'standardy_osetrovatelske-kyslikova_teparie-revize-1.pdf', 'STD2#11', 'Schváleno', 11, NULL, '2023-02-01 07:54:04', '2023-02-01 07:54:04'),
(101, 2, 'Standard ošetřovatelské péče', NULL, 12, 'Standard ošetřovatelské péče', 'Zavádění naso-gastrické sondy', NULL, NULL, NULL, '2002-02-01', '9', '2023-06-01', NULL, '2021-06-01', 'standardy_osetrovatelske-zavadeni_naso-gastricke_sondy-revize-9.pdf', 'STD2#12', 'Schváleno', 11, NULL, '2023-02-01 08:02:29', '2023-02-01 08:02:29'),
(102, 2, 'Standard ošetřovatelské péče', NULL, 13, 'Standard ošetřovatelské péče', 'Cévkování nemocných', 'Sekaninová Anna', 'Rada kvality', 'Bc. Bělicová Taťána', '2021-06-01', '10', '2023-06-01', NULL, '2021-06-01', 'standardy_osetrovatelske-cevkovani_nemocnych-revize-10.pdf', 'STD2#13', 'Schváleno', 11, NULL, '2023-02-01 08:04:39', '2023-02-01 08:04:39'),
(103, 2, 'Standard ošetřovatelské péče', NULL, 14, 'Standard ošetřovatelské péče', 'Očistné klyzma', 'Sekaninová Anna', 'Rada kvality', 'Bc. Bělicová Taťána', '2002-09-02', '9', '2023-06-01', NULL, '2021-06-01', 'standardy_osetrovatelske-ocistne_klyzma-revize-9.pdf', 'STD2#14', 'Schváleno', 11, NULL, '2023-02-01 08:06:44', '2023-02-01 08:06:44'),
(104, 2, 'Standard ošetřovatelské péče', NULL, 15, 'Standard ošetřovatelské péče', 'Předoperační příprava pacientů', NULL, NULL, NULL, '2002-09-02', '10', '2022-06-01', NULL, '2021-06-01', 'standardy_osetrovatelske-predoperacni_priprava_pacientu-revize-10.pdf', 'STD2#15', 'Schváleno', 11, NULL, '2023-02-01 08:08:05', '2023-02-01 08:58:57'),
(105, 2, 'Standard ošetřovatelské péče', NULL, 19, 'Standard ošetřovatelské péče', 'Stravování nemocných', NULL, NULL, NULL, '2004-04-13', '12', '2024-02-01', 'strava, ošetřovatel', '2023-02-01', 'standardy_osetrovatelske-stravovani_nemocnych-revize-12.pdf', 'STD2#16', 'Schváleno', 11, NULL, '2023-02-07 07:20:06', '2023-02-07 07:21:38'),
(121, 25, 'Evakuační plán', NULL, 1, 'Evakuační plán', 'Plán evakuace v případě požáru', 'Pribula Marek, Bc.', NULL, NULL, '2023-03-10', '10', '2024-03-10', NULL, '2023-03-10', 'bozp_bezpecnostni-plany-plan_evakuace_v_pripade_pozaru-revize-10.pdf', 'BOZP25#1', 'Schváleno', 11, NULL, '2023-03-11 07:10:15', '2023-03-11 16:33:46'),
(122, 25, 'Traumatologický plán', NULL, 2, 'Traumatologický plán', 'Traumatologický plán KHN a.s.', 'Pribula Marek, Bc.', NULL, NULL, '2023-03-08', '9', '2024-03-08', NULL, '2023-03-08', 'bozp_bezpecnostni-plany-traumatologicky_plan_khn_a.s.-revize-9.pdf', 'BOZP25#2', 'Schváleno', 11, NULL, '2023-03-11 07:15:44', '2023-03-11 09:23:46'),
(124, 26, 'Osobní ochranné pracovní pomůcky OOPP', NULL, 1, 'Osobní ochranné pracovní pomůcky OOPP', 'Osobní ochranné pracovní prostředky (OOPP), mycí, čisticí a dezinfekční prostředky', 'Pribula Marek, Bc.', NULL, NULL, '2020-09-01', '4', '2021-06-01', NULL, '2020-06-01', 'bozp_organizacni-smernice-osobni_ochranne_pracovni_prostredky_(oopp),_myci,_cistici_a_dezinfekcni_prostredky-revize-4.pdf', 'BOZP26#1', 'Schváleno', 11, NULL, '2023-03-11 12:56:45', '2023-03-11 13:13:17'),
(125, 26, 'Systém školení BOZP a PO', NULL, 2, 'Systém školení BOZP a PO', 'Systém školení bezpečnost a ochrana zdraví při práci a požární ochrany', 'Pribula Marek, Bc.', NULL, NULL, '2020-09-01', '5', '2023-11-01', NULL, '2022-11-01', 'bozp_organizacni-smernice-system_skoleni_bezpecnost_a_ochrana_zdravi_pri_praci_a_pozarni_ochrany-revize-5.pdf', 'BOZP26#2', 'Schváleno', 11, NULL, '2023-03-11 12:58:34', '2023-03-11 13:14:42'),
(126, 26, 'Organizace BOZP a PO', NULL, 3, 'Organizace BOZP a PO', 'Organizace bezpečnosti a ochrany zdraví při práci a požární ochrany v KHN a.s.', 'Pribula Marek, Bc.', NULL, NULL, '2020-09-01', '4', '2021-06-01', NULL, '2020-06-01', 'bozp_organizacni-smernice-organizace_bezpecnosti_a_ochrany_zdravi_pri_praci_a_pozarni_ochrany_v_khn_a.s.-revize-4.pdf', 'BOZP26#3', 'Schváleno', 11, NULL, '2023-03-11 13:00:16', '2023-03-11 13:15:06'),
(127, 26, 'Seznam prací a pracovišť zakázaných těhotným ženám a mladistvým', NULL, 4, 'Seznam prací a pracovišť zakázaných těhotným ženám a mladistvým', 'Seznam prací a pracovišť zakázaných těhotným zaměstnankyním, zaměstnankyním, které kojí a zaměstnankyním, matkám do devátého měsíce po porodu a mladistvým', 'Pribula Marek, Bc.', NULL, NULL, '2020-09-01', '4', '2021-06-01', NULL, '2020-06-01', 'bozp_organizacni-smernice-seznam_praci_a_pracovisť_zakazanych_tehotnym_zamestnankynim,_zamestnankynim,_ktere_koji_a_zamestnankynim,_matkam_do_devateho_mesice_po_porodu_a_mladistvym-revize-4.pdf', 'BOZP26#4', 'Schváleno', 11, NULL, '2023-03-11 13:11:12', '2023-03-11 13:15:22'),
(128, 26, 'Systém řízení a prevence rizik', NULL, 5, 'Systém řízení a prevence rizik', 'Systém řízení a prevence rizik', 'Pribula Marek, Bc.', NULL, NULL, '2020-09-01', '4', '2021-06-01', NULL, '2020-06-01', 'bozp_organizacni-smernice-system_rizeni_a_prevence_rizik-revize-4.pdf', 'BOZP26#5', 'Schváleno', 11, NULL, '2023-03-11 13:18:59', '2023-03-11 13:18:59'),
(129, 26, 'Zdravotní rizika a opatření k ochraně zdraví při ruční manipulaci s břemeny', NULL, 6, 'Zdravotní rizika a opatření k ochraně zdraví při ruční manipulaci s břemeny', 'Zdravotní rizika a opatření k ochraně zdraví při ruční manipulaci s břemeny', 'Pribula Marek, Bc.', NULL, NULL, '2020-09-01', '4', '2021-06-01', NULL, '2020-06-01', 'bozp_organizacni-smernice-zdravotni_rizika_a_opatreni_k_ochrane_zdravi_pri_rucni_manipulaci_s_bremeny-revize-4.pdf', 'BOZP26#6', 'Schváleno', 11, NULL, '2023-03-11 13:20:11', '2023-03-11 13:20:11'),
(130, 26, 'Pravidla pro používání zdravotnických prostředků při poskytování zdravotní péče', NULL, 7, 'Pravidla pro používání zdravotnických prostředků při poskytování zdravotní péče', 'Pravidla pro používání zdravotnických prostředků při poskytování zdravotní péče', 'Pribula Marek, Bc.', NULL, NULL, '2020-09-01', '4', '2021-06-01', NULL, '2020-06-01', 'bozp_organizacni-smernice-pravidla_pro_pouzivani_zdravotnickych_prostredku_pri_poskytovani_zdravotni_pece-revize-4.pdf', 'BOZP26#7', 'Schváleno', 11, NULL, '2023-03-11 13:20:54', '2023-03-11 13:20:54'),
(131, 27, 'Metodika vstupního školení BPZP - PO - zaměstnanci KHN a.s.', NULL, 1, 'Metodika vstupního školení BPZP - PO - zaměstnanci KHN a.s.', 'Metodika k provádění vstupního školení BOZP a PO při přijetí zaměstnance do pracovního poměru v KHN a.s.', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_metodiky-skoleni-metodika_k_provadeni_vstupniho_skoleni_bozp_a_po_pri_prijeti_zamestnance_do_pracovniho_pomeru_v_khn_a.s.-revize-1.pdf', 'BOZP27#1', 'Schváleno', 11, NULL, '2023-03-11 13:24:16', '2023-03-11 13:24:16'),
(132, 27, 'Metodika vstupního školení BPZP - PO - exkurze, studenti', NULL, 2, 'Metodika vstupního školení BPZP - PO - exkurze, studenti', 'Metodika k provádění vstupního školení BOZP a PO osob v rámci přípravy na výkon povolání a zdržujících se s vědomím vedoucích pracovníků v prostorách KHN a.s.', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_metodiky-skoleni-metodika_k_provadeni_vstupniho_skoleni_bozp_a_po_osob_v_ramci_pripravy_na_vykon_povolani_a_zdrzujicich_se_s_vedomim_vedoucich_pracovniku_v_prostorach_khn_a.s.-revize-1.pdf', 'BOZP27#2', 'Schváleno', 11, NULL, '2023-03-11 13:25:32', '2023-03-11 13:25:32'),
(133, 27, 'Metodika vstupního školení BPZP - PO - cizí zaměstnanci', NULL, 3, 'Metodika vstupního školení BPZP - PO - cizí zaměstnanci', 'Metodika k provádění vstupního školení BOZP a PO pro aplikacní a servisní techniky a zaměstnance jiných stran, zdržujících se s vědomím vedení nemocnice na pracovištích KHN a.s.', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_metodiky-skoleni-metodika_k_provadeni_vstupniho_skoleni_bozp_a_po_pro_aplikacni_a_servisni_techniky_a_zamestnance_jinych_stran,_zdrzujicich_se_s_vedomim_vedeni_nemocnice_na_pracovistich_khn_a.s.-revize-1.pdf', 'BOZP27#3', 'Schváleno', 11, NULL, '2023-03-11 13:27:29', '2023-03-11 13:27:29'),
(134, 28, 'Seznameni s dokumentem BOZP vydanym zaměstnavatelem', NULL, 1, 'Seznameni s dokumentem BOZP vydanym zaměstnavatelem', 'Seznameni s dokumentem BOZP vydanym zaměstnavatelem, zaměstnanci KHN a.s.', 'Pribula Marek, Bc.', NULL, NULL, '2022-08-01', 'srpen 2022', '2023-08-01', NULL, '2022-08-01', 'bozp_prezencni-listiny-seznameni_s_dokumentem_bozp_vydanym_zamestnavatelem,_zamestnanci_khn_a.s.-revize-srpen_2022.pdf', 'BOZP28#1', 'Schváleno', 11, NULL, '2023-03-11 13:30:25', '2023-03-11 13:30:25'),
(135, 28, 'Vstupní školení BPZP - PO - cizí zaměstnanci', NULL, 2, 'Vstupní školení BPZP - PO - cizí zaměstnanci', 'Školení BOZP - PO - zaměstnanci jiných zaměstnavatelů', 'Pribula Marek, Bc.', NULL, NULL, '2022-08-01', 'srpen 2022', '2023-08-01', NULL, '2022-08-01', 'bozp_prezencni-listiny-skoleni_bozp_-_po_-_zamestnanci_jinych_zamestnavatelu-revize-srpen_2022.pdf', 'BOZP28#2', 'Schváleno', 11, NULL, '2023-03-11 13:33:08', '2023-03-11 13:33:08'),
(136, 28, 'Vstupní školení BPZP - PO - exkurze, studenti', NULL, 3, 'Vstupní školení BPZP - PO - exkurze, studenti', 'Vstupní školení BPZP - PO - pro osoby připravující se na výkon povolání', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_prezencni-listiny-vstupni_skoleni_bpzp_-_po_-_pro_osoby_pripravujici_se_na_vykon_povolani-revize-1.pdf', 'BOZP28#3', 'Schváleno', 11, NULL, '2023-03-11 13:35:15', '2023-03-11 13:35:15'),
(137, 28, 'Vstupní školení BPZP - PO - zaměstnanci KHN a.s.', NULL, 4, 'Vstupní školení BPZP - PO - zaměstnanci KHN a.s.', 'Vstupní školení BPZP - PO - při přijetí do pracovního poměru v KHN a.s.', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_prezencni-listiny-vstupni_skoleni_bpzp_-_po_-_pri_prijeti_do_pracovniho_pomeru_v_khn_a.s.-revize-1.pdf', 'BOZP28#4', 'Schváleno', 11, NULL, '2023-03-11 13:37:15', '2023-03-11 13:37:15'),
(138, 28, 'Školení BOZP - medicínské plyny (C&C s.r.o.)', NULL, 5, 'Školení BOZP - medicínské plyny (C&C s.r.o.)', 'Školení a instruktáž obsluhy plynového zařízení pro rozvod a distribuci medicínských plynů', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_prezencni-listiny-skoleni_a_instruktaz_obsluhy_plynoveho_zarizeni_pro_rozvod_a_distribuci_medicinskych_plynu-revize-1.pdf', 'BOZP28#5', 'Schváleno', 11, NULL, '2023-03-11 13:39:47', '2023-03-11 13:39:47'),
(139, 28, 'Seznámení s riziky na pracovišti - zaměstnanci KHN a.s.', NULL, 6, 'Seznámení s riziky na pracovišti - zaměstnanci KHN a.s.', 'Seznaámení pracovníků s aktualizací rizik', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_prezencni-listiny-seznaameni_pracovniku_s_aktualizaci_rizik-revize-1.pdf', 'BOZP28#6', 'Schváleno', 11, NULL, '2023-03-11 13:41:12', '2023-03-11 13:41:12'),
(140, 31, 'Záznam o kontrole - Alkohol', NULL, 1, 'Záznam o kontrole - Alkohol', 'Záznam o provedené orientační dechové zkoušce na zjištění přítomnosti alkoholu', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_proverky-kontroly-zaznam_o_provedene_orientacni_dechove_zkousce_na_zjisteni_pritomnosti_alkoholu-revize-1.pdf', 'BOZP31#1', 'Schváleno', 11, NULL, '2023-03-11 13:43:44', '2023-03-11 13:43:44'),
(141, 31, 'Záznam o kontrole - Drogy', NULL, 2, 'Záznam o kontrole - Drogy', 'Záznam o provedení orientačního testu na drogy', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_proverky-kontroly-zaznam_o_provedeni_orientacniho_testu_na_drogy-revize-1.pdf', 'BOZP31#2', 'Schváleno', 11, NULL, '2023-03-11 13:44:50', '2023-03-14 10:41:31'),
(142, 29, 'Kniha úrazů a drobných poranění', NULL, 1, 'Kniha úrazů a drobných poranění', 'Kniha úrazů a drobných poranění', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_pracovni-urazy-kniha_urazu_a_drobnych_poraneni-revize-1.pdf', 'BOZP29#1', 'Schváleno', 11, NULL, '2023-03-11 13:48:54', '2023-03-11 13:48:54');
INSERT INTO `documents` (`id`, `category_id`, `accordion_name`, `accordion_group`, `position`, `name`, `description`, `processed`, `authorize`, `examine`, `efficiency`, `revision`, `next_revision_date`, `tags`, `revision_date`, `file`, `unique_code`, `status`, `user_id`, `onscreen`, `created_at`, `updated_at`) VALUES
(143, 36, 'Aceton', NULL, 1, 'Aceton', 'Bezpečnostní list - Aceton', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_aceton-revize-1.pdf', 'BOZP36#1', 'Schváleno', 11, NULL, '2023-03-11 13:51:40', '2023-03-12 20:35:51'),
(144, 36, 'Alcosan', NULL, 2, 'Alcosan', 'Bezpečnostní list - Alcosan VT10', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_alcosan_vt10-revize-1.pdf', 'BOZP36#2', 'Schváleno', 11, NULL, '2023-03-11 13:52:45', '2023-03-11 13:52:45'),
(145, 36, 'Aniosept Activ', NULL, 3, 'Aniosept Activ', 'Bezpečnostní list - Aniosept Activ', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_aniosept_activ-revize-1.pdf', 'BOZP36#3', 'Schváleno', 11, NULL, '2023-03-11 13:55:15', '2023-03-11 13:55:15'),
(146, 36, 'Baccalin', NULL, 4, 'Baccalin', 'Bezpečnostní list - Baccalin', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_baccalin-revize-1.pdf', 'BOZP36#4', 'Schváleno', 11, NULL, '2023-03-11 13:57:15', '2023-03-11 13:57:15'),
(147, 36, 'Bacillol AF', NULL, 5, 'Bacillol AF', 'Bezpečnostní list - Bacillol AF', 'Pribula Marek, Bc.', NULL, NULL, NULL, '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_bacillol_af-revize-1.pdf', 'BOZP36#5', 'Schváleno', 11, NULL, '2023-03-11 13:58:19', '2023-03-11 13:58:19'),
(148, 36, 'Bacillol Tissues', NULL, 6, 'Bacillol Tissues', 'Bezpečnostní list - Bacillol Tissues', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_bacillol_tissues-revize-1.pdf', 'BOZP36#6', 'Schváleno', 11, NULL, '2023-03-11 14:05:28', '2023-03-11 14:05:28'),
(149, 36, 'Baktolan protect+ pure', NULL, 7, 'Baktolan protect+ pure', 'Bezpečnostní list - Baktolan protect+ pure', 'Pribula Marek, Bc.', NULL, NULL, '2020-03-01', '1', '2021-03-01', NULL, '2020-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_baktolan_protect__pure-revize-1.pdf', 'BOZP36#7', 'Schváleno', 11, NULL, '2023-03-11 14:06:38', '2023-03-11 14:06:38'),
(150, 36, 'Baktolin pure', NULL, 8, 'Baktolin pure', 'Bezpečnostní list - Baktolin pure', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_baktolin_pure-revize-1.pdf', 'BOZP36#8', 'Schváleno', 11, NULL, '2023-03-11 14:07:37', '2023-03-11 14:07:37'),
(151, 36, 'Benzín - technický', NULL, 9, 'Benzín - technický', 'Bezpečnostní list - Benzín - technický', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_benzin_-_technicky-revize-1.pdf', 'BOZP36#9', 'Schváleno', 11, NULL, '2023-03-11 14:16:04', '2023-03-11 14:16:04'),
(152, 36, 'Benzín - bezolovnatý automobilový', NULL, 10, 'Benzín - bezolovnatý automobilový', 'Bezpečnostní list - Benzín - bezolovnatý automobilový', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_benzin_-_bezolovnaty_automobilovy-revize-1.pdf', 'BOZP36#10', 'Schváleno', 11, NULL, '2023-03-11 14:17:01', '2023-03-11 14:17:01'),
(153, 36, 'Bomix plus', NULL, 11, 'Bomix plus', 'Bezpečnostní list - Bomix plus', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_bomix_plus-revize-1.pdf', 'BOZP36#11', 'Schváleno', 11, NULL, '2023-03-11 14:19:04', '2023-03-11 14:19:04'),
(154, 36, 'Braunol', NULL, 12, 'Braunol', 'Bezpečnostní list - Braunol', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_braunol-revize-1.pdf', 'BOZP36#12', 'Schváleno', 11, NULL, '2023-03-11 14:20:38', '2023-03-11 14:20:38'),
(155, 36, 'Chemopren univerzal', NULL, 13, 'Chemopren univerzal', 'Bezpečnostní list -  Chemopren univerzal', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_chemopren_univerzal-revize-1.pdf', 'BOZP36#13', 'Schváleno', 11, NULL, '2023-03-11 14:23:46', '2023-03-11 14:23:46'),
(156, 36, 'Chirosan Plus', NULL, 14, 'Chirosan Plus', 'Bezpečnostní list -  Chirosan Plus', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_chirosan_plus-revize-1.pdf', 'BOZP36#14', 'Schváleno', 11, NULL, '2023-03-11 14:25:11', '2023-03-11 14:25:11'),
(157, 36, 'Chirox', NULL, 15, 'Chirox', 'Bezpečnostní list -  Chirox', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_chirox-revize-1.pdf', 'BOZP36#15', 'Schváleno', 11, NULL, '2023-03-11 14:25:58', '2023-03-11 14:25:58'),
(158, 36, 'Chloramin T', NULL, 16, 'Chloramin T', 'Bezpečnostní list -  Chloramin T', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_chloramin_t-revize-1.pdf', 'BOZP36#16', 'Schváleno', 11, NULL, '2023-03-11 14:27:27', '2023-03-11 14:27:27'),
(159, 36, 'Chloramix DT', NULL, 17, 'Chloramix DT', 'Bezpečnostní list -  Chloramix DT', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_chloramix_dt-revize-1.pdf', 'BOZP36#17', 'Schváleno', 11, NULL, '2023-03-11 14:28:07', '2023-03-11 14:31:52'),
(160, 36, 'Chlornan sodný', NULL, 18, 'Chlornan sodný', 'Bezpečnostní list - Chlornan sodný', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_chlornan_sodny-revize-1.pdf', 'BOZP36#18', 'Schváleno', 11, NULL, '2023-03-11 14:29:35', '2023-03-11 14:33:06'),
(161, 36, 'Cidex Opa Solution', NULL, 19, 'Cidex Opa Solution', 'Bezpečnostní list -  Cidex Opa Solution', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_cidex_opa_solution-revize-1.pdf', 'BOZP36#19', 'Schváleno', 11, NULL, '2023-03-11 14:30:28', '2023-03-11 14:30:28'),
(162, 36, 'Citroclorex 2%', NULL, 20, 'Citroclorex 2%', 'Bezpečnostní list - Citroclorex 2%', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_citroclorex_2%-revize-1.pdf', 'BOZP36#20', 'Schváleno', 11, NULL, '2023-03-11 14:39:08', '2023-03-11 14:39:08'),
(163, 36, 'Citroclorex 2% MD', NULL, 21, 'Citroclorex 2% MD', 'Bezpečnostní list - Citroclorex 2% MD', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_citroclorex_2%_md-revize-1.pdf', 'BOZP36#21', 'Schváleno', 11, NULL, '2023-03-11 14:40:14', '2023-03-11 14:40:14'),
(164, 36, 'Citroclorex 2% RED', NULL, 22, 'Citroclorex 2% RED', 'Bezpečnostní list - Citroclorex 2% RED', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_citroclorex_2%_red-revize-1.pdf', 'BOZP36#22', 'Schváleno', 11, NULL, '2023-03-11 14:40:40', '2023-03-11 14:40:40'),
(165, 36, 'Cutasept F', NULL, 23, 'Cutasept F', 'Bezpečnostní list - Cutasept F', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_cutasept_f-revize-1.pdf', 'BOZP36#23', 'Schváleno', 11, NULL, '2023-03-11 14:42:44', '2023-03-11 14:42:44'),
(166, 36, 'Dequat', NULL, 24, 'Dequat', 'Bezpečnostní list - Dequat', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_dequat-revize-1.pdf', 'BOZP36#24', 'Schváleno', 11, NULL, '2023-03-11 14:44:17', '2023-03-11 14:47:01'),
(167, 36, 'Desam Effect', NULL, 25, 'Desam Effect', 'Bezpečnostní list - Desam Effect', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_desam_effect-revize-1.pdf', 'BOZP36#25', 'Schváleno', 11, NULL, '2023-03-11 14:48:28', '2023-03-11 14:48:28'),
(168, 36, 'Desam Extra', NULL, 26, 'Desam Extra', 'Bezpečnostní list - Desam Extra', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_desam_extra-revize-1.pdf', 'BOZP36#26', 'Schváleno', 11, NULL, '2023-03-11 14:49:06', '2023-03-11 14:49:06'),
(169, 36, 'Desam Ox', NULL, 27, 'Desam Ox', 'Bezpečnostní list - Desam Ox', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_desam_ox-revize-1.pdf', 'BOZP36#27', 'Schváleno', 11, NULL, '2023-03-11 14:49:35', '2023-03-11 14:49:35'),
(170, 36, 'Desam Prim', NULL, 28, 'Desam Prim', 'Bezpečnostní list - Desam Prim', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_desam_prim-revize-1.pdf', 'BOZP36#28', 'Schváleno', 11, NULL, '2023-03-11 14:50:13', '2023-03-11 14:50:13'),
(171, 36, 'Desam wipes', NULL, 29, 'Desam wipes', 'Bezpečnostní list - Desam wipes', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_desam_wipes-revize-1.pdf', 'BOZP36#29', 'Schváleno', 11, NULL, '2023-03-11 14:51:36', '2023-03-11 14:52:09'),
(172, 36, 'Desam wipes soft', NULL, 30, 'Desam wipes soft', 'Bezpečnostní list - Desam wipes soft', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_desam_wipes_soft-revize-1.pdf', 'BOZP36#30', 'Schváleno', 11, NULL, '2023-03-11 14:52:57', '2023-03-11 14:52:57'),
(173, 36, 'Desderman pure', NULL, 31, 'Desderman pure', 'Bezpečnostní list - Desderman pure', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_desderman_pure-revize-1.pdf', 'BOZP36#31', 'Schváleno', 11, NULL, '2023-03-11 14:53:57', '2023-03-11 14:53:57'),
(174, 36, 'Desmanol pure', NULL, 32, 'Desmanol pure', 'Bezpečnostní list - Desmanol pure', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_desmanol_pure-revize-1.pdf', 'BOZP36#32', 'Schváleno', 11, NULL, '2023-03-11 14:54:35', '2023-03-11 14:54:35'),
(175, 36, 'Desprej', NULL, 33, 'Desprej', 'Bezpečnostní list - Desprej', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_desprej-revize-1.pdf', 'BOZP36#33', 'Schváleno', 11, NULL, '2023-03-11 14:56:21', '2023-03-11 14:56:21'),
(176, 36, 'Desprej M', NULL, 34, 'Desprej M', 'Bezpečnostní list - Desprej M', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_desprej_m-revize-1.pdf', 'BOZP36#34', 'Schváleno', 11, NULL, '2023-03-11 15:01:38', '2023-03-11 15:01:38'),
(177, 36, 'Desprej New', NULL, 35, 'Desprej New', 'Bezpečnostní list - Desprej New', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_desprej_new-revize-1.pdf', 'BOZP36#35', 'Schváleno', 11, NULL, '2023-03-11 15:02:18', '2023-03-11 15:02:18'),
(178, 36, 'Desprej sensitive', NULL, 36, 'Desprej sensitive', 'Bezpečnostní list - Desprej sensitive', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_desprej_sensitive-revize-1.pdf', 'BOZP36#36', 'Schváleno', 11, NULL, '2023-03-11 15:03:28', '2023-03-11 15:03:28'),
(179, 36, 'Disclean Extra', NULL, 37, 'Disclean Extra', 'Bezpečnostní list - Disclean Extra', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_disclean_extra-revize-1.pdf', 'BOZP36#37', 'Schváleno', 11, NULL, '2023-03-11 15:05:40', '2023-03-11 15:05:40'),
(180, 36, 'Dosagin', NULL, 38, 'Dosagin', 'Bezpečnostní list - Dosagin', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_dosagin-revize-1.pdf', 'BOZP36#38', 'Schváleno', 11, NULL, '2023-03-11 15:06:34', '2023-03-11 15:06:34'),
(181, 36, 'Fixinela', NULL, 39, 'Fixinela', 'Bezpečnostní list - Fixinela', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_fixinela-revize-1.pdf', 'BOZP36#39', 'Schváleno', 11, NULL, '2023-03-11 15:07:17', '2023-03-11 15:07:17'),
(182, 36, 'Formaldehyd 10%', NULL, 40, 'Formaldehyd 10%', 'Bezpečnostní list - Formaldehyd 10%', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_formaldehyd_10%-revize-1.pdf', 'BOZP36#40', 'Schváleno', 11, NULL, '2023-03-11 15:08:14', '2023-03-11 15:08:14'),
(183, 36, 'Gigasept AF forte', NULL, 41, 'Gigasept AF forte', 'Bezpečnostní list - Gigasept AF forte', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_gigasept_af_forte-revize-1.pdf', 'BOZP36#41', 'Schváleno', 11, NULL, '2023-03-11 15:09:16', '2023-03-11 15:09:16'),
(184, 36, 'Grilpur Total', NULL, 42, 'Grilpur Total', 'Bezpečnostní list - Grilpur total', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_grilpur_total-revize-1.pdf', 'BOZP36#42', 'Schváleno', 11, NULL, '2023-03-11 15:10:10', '2023-03-11 15:10:10'),
(185, 36, 'Kyselina chlorovodíková 37%', NULL, 43, 'Kyselina chlorovodíková 37%', 'Bezpečnostní list - Kyselina chlorovodíková 37%', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_kyselina_chlorovodikova_37%-revize-1.pdf', 'BOZP36#43', 'Schváleno', 11, NULL, '2023-03-11 15:11:09', '2023-03-11 15:11:09'),
(186, 36, 'Incides M', NULL, 44, 'Incides M', 'Bezpečnostní list - Incides M', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_incides_m-revize-1.pdf', 'BOZP36#44', 'Schváleno', 11, NULL, '2023-03-11 15:13:21', '2023-03-11 15:13:21'),
(187, 36, 'Incidin Oxydes', NULL, 45, 'Incidin Oxydes', 'Bezpečnostní list - Incidin Oxydes', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_incidin_oxydes-revize-1.pdf', 'BOZP36#45', 'Schváleno', 11, NULL, '2023-03-11 15:14:16', '2023-03-11 15:14:16'),
(188, 36, 'Kodan forte - bezbarvý', NULL, 46, 'Kodan forte - bezbarvý', 'Bezpečnostní list - Kodan forte - bezbarvý', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_kodan_forte_-_bezbarvy-revize-1.pdf', 'BOZP36#46', 'Schváleno', 11, NULL, '2023-03-11 15:15:28', '2023-03-11 15:15:28'),
(189, 36, 'Kodan wipes', NULL, 47, 'Kodan wipes', 'Bezpečnostní list - Kodan wipes', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_kodan_wipes-revize-1.pdf', 'BOZP36#47', 'Schváleno', 11, NULL, '2023-03-11 15:16:47', '2023-03-11 15:16:47'),
(190, 36, 'Kontaktol Spray', NULL, 48, 'Kontaktol Spray', 'Bezpečnostní list - Kontaktol Spray', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_kontaktol_spray-revize-1.pdf', 'BOZP36#48', 'Schváleno', 11, NULL, '2023-03-11 15:17:31', '2023-03-11 15:17:31'),
(191, 36, 'Korsolex Med AF', NULL, 49, 'Korsolex Med AF', 'Bezpečnostní list - Korsolex med AF', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_korsolex_med_af-revize-1.pdf', 'BOZP36#49', 'Schváleno', 11, NULL, '2023-03-11 15:19:35', '2023-03-11 15:19:35'),
(192, 36, 'Korsolex Plus', NULL, 50, 'Korsolex Plus', 'Bezpečnostní list - Korsolex Plus', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_korsolex_plus-revize-1.pdf', 'BOZP36#50', 'Schváleno', 11, NULL, '2023-03-11 15:20:08', '2023-03-11 15:20:08'),
(193, 36, 'Krtek', NULL, 51, 'Krtek', 'Bezpečnostní list - Krtek', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_krtek-revize-1.pdf', 'BOZP36#51', 'Schváleno', 11, NULL, '2023-03-11 15:20:46', '2023-03-11 15:20:46'),
(194, 36, 'Líh technický', NULL, 52, 'Líh technický', 'Bezpečnostní list - Líh technický', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_lih_technicky-revize-1.pdf', 'BOZP36#52', 'Schváleno', 11, NULL, '2023-03-11 15:21:20', '2023-03-11 15:21:20'),
(195, 36, 'Lihobenzín', NULL, 53, 'Lihobenzín', 'Bezpečnostní list - Lihobenzín', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_lihobenzin-revize-1.pdf', 'BOZP36#53', 'Schváleno', 11, NULL, '2023-03-11 15:21:43', '2023-03-11 15:23:24'),
(196, 36, 'Manisoft Foam', NULL, 54, 'Manisoft Foam', 'Bezpečnostní list - Manisoft Foam', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_manisoft_foam-revize-1.pdf', 'BOZP36#54', 'Schváleno', 11, NULL, '2023-03-11 15:25:09', '2023-03-11 15:25:09'),
(197, 36, 'Medicarine', NULL, 55, 'Medicarine', 'Bezpečnostní list - Manisoft Foam', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_manisoft_foam-revize-1.pdf', 'BOZP36#55', 'Schváleno', 11, NULL, '2023-03-11 15:25:51', '2023-03-11 15:25:51'),
(198, 36, 'Mikasept KP', NULL, 56, 'Mikasept KP', 'Bezpečnostní list - Mikasept KP', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_mikasept_kp-revize-1.pdf', 'BOZP36#56', 'Schváleno', 11, NULL, '2023-03-11 15:26:24', '2023-03-11 15:26:24'),
(199, 36, 'Mikaster Endo', NULL, 57, 'Mikaster Endo', 'Bezpečnostní list - Mikaster Endo', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_mikaster_endo-revize-1.pdf', 'BOZP36#57', 'Schváleno', 11, NULL, '2023-03-11 15:27:08', '2023-03-11 15:27:08'),
(200, 36, 'Mikrobac forte', NULL, 58, 'Mikrobac forte', 'Bezpečnostní list - Mikrobac forte', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_mikrobac_forte-revize-1.pdf', 'BOZP36#58', 'Schváleno', 11, NULL, '2023-03-11 15:27:47', '2023-03-11 15:27:47'),
(201, 36, 'Mikrobac Tissues', NULL, 59, 'Mikrobac Tissues', 'Bezpečnostní list - Mikrobac Tissues', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_mikrobac_tissues-revize-1.pdf', 'BOZP36#59', 'Schváleno', 11, NULL, '2023-03-11 15:28:14', '2023-03-11 15:28:14'),
(202, 36, 'Neodisher MA', NULL, 60, 'Neodisher MA', 'Bezpečnostní list - Neodisher MA', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_neodisher_ma-revize-1.pdf', 'BOZP36#60', 'Schváleno', 11, NULL, '2023-03-11 15:30:12', '2023-03-11 15:30:12'),
(203, 36, 'Neodisher MediClean Forte', NULL, 60, 'Neodisher MediClean Forte', 'Bezpečnostní list - Neodisher MediClean Forte', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_neodisher_mediclean_forte-revize-1.pdf', 'BOZP36#60', 'Schváleno', 11, NULL, '2023-03-11 15:31:26', '2023-03-11 15:31:26'),
(204, 36, 'Neodisher N', NULL, 61, 'Neodisher N', 'Bezpečnostní list - Neodisher N', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_neodisher_n-revize-1.pdf', 'BOZP36#61', 'Schváleno', 11, NULL, '2023-03-11 15:32:00', '2023-03-11 15:32:00'),
(205, 36, 'Neodisher SeptoClean', NULL, 62, 'Neodisher SeptoClean', 'Bezpečnostní list - Neodisher SeptoClean', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_neodisher_septoclean-revize-1.pdf', 'BOZP36#62', 'Schváleno', 11, NULL, '2023-03-11 15:32:36', '2023-03-11 15:32:36'),
(206, 36, 'Neodisher Septo DN', NULL, 63, 'Neodisher Septo DN', 'Bezpečnostní list - Neodisher Septo DN', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_neodisher_septo_dn-revize-1.pdf', 'BOZP36#63', 'Schváleno', 11, NULL, '2023-03-11 15:33:12', '2023-03-11 15:33:12'),
(207, 36, 'Octenisept', NULL, 64, 'Octenisept', 'Bezpečnostní list - Octenisept', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_octenisept-revize-1.pdf', 'BOZP36#64', 'Schváleno', 11, NULL, '2023-03-11 15:33:59', '2023-03-11 15:33:59'),
(208, 36, 'PH mínus tekutý', NULL, 65, 'PH mínus tekutý', 'Bezpečnostní list - PH mínus tekutý', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_ph_minus_tekuty-revize-1.pdf', 'BOZP36#65', 'Schváleno', 11, NULL, '2023-03-11 15:35:07', '2023-03-11 15:35:07'),
(209, 36, 'Pro M', NULL, 66, 'Pro M', 'Bezpečnostní list - Pro M', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_pro_m-revize-1.pdf', 'BOZP36#61', 'Schváleno', 11, NULL, '2023-03-11 15:40:52', '2023-03-11 15:40:52'),
(210, 36, 'Pro O', NULL, 67, 'Pro O', 'Bezpečnostní list - Pro 0', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_pro_0-revize-1.pdf', 'BOZP36#62', 'Schváleno', 11, NULL, '2023-03-11 15:41:18', '2023-03-11 15:41:18'),
(211, 36, 'Profloor Match', NULL, 68, 'Profloor Match', 'Bezpečnostní list - Profloor Match', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_profloor_match-revize-1.pdf', 'BOZP36#68', 'Schváleno', 11, NULL, '2023-03-11 15:43:32', '2023-03-11 15:43:32'),
(212, 36, 'Prosavon Foam', NULL, 69, 'Prosavon Foam', 'Bezpečnostní list - Prosavon Foam', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_prosavon_foam-revize-1.pdf', 'BOZP36#69', 'Schváleno', 11, NULL, '2023-03-11 15:45:26', '2023-03-11 15:45:26'),
(213, 36, 'Prosavon Scrub', NULL, 70, 'Prosavon Scrub', 'Bezpečnostní list - Prosavon Scrub', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_prosavon_scrub-revize-1.pdf', 'BOZP36#70', 'Schváleno', 11, NULL, '2023-03-11 15:45:56', '2023-03-11 15:45:56'),
(214, 36, 'ProWash Fixi', NULL, 71, 'ProWash Fixi', 'Bezpečnostní list - ProWash Fixi', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_prowash_fixi-revize-1.pdf', 'BOZP36#71', 'Schváleno', 11, NULL, '2023-03-11 15:46:46', '2023-03-11 15:46:46'),
(215, 36, 'ProWash Uni', NULL, 72, 'ProWash Uni', 'Bezpečnostní list - ProWash Uni', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_prowash_uni-revize-1.pdf', 'BOZP36#72', 'Schváleno', 11, NULL, '2023-03-11 15:47:40', '2023-03-11 15:47:40'),
(216, 36, 'Puron DA', NULL, 73, 'Puron DA', 'Bezpečnostní list - Puron DA', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_puron_da-revize-1.pdf', 'BOZP36#73', 'Schváleno', 11, NULL, '2023-03-11 15:48:08', '2023-03-11 15:48:08'),
(217, 36, 'Ředidlo S 6001', NULL, 74, 'Ředidlo S 6001', 'Bezpečnostní list - Ředidlo S 6001', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_redidlo_s_6001-revize-1.pdf', 'BOZP36#74', 'Schváleno', 11, NULL, '2023-03-11 15:49:30', '2023-03-11 15:49:30'),
(218, 36, 'Rivonit Grill', NULL, 75, 'Rivonit Grill', 'Bezpečnostní list - Rivonit Grill', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_rivonit_grill-revize-1.pdf', 'BOZP36#75', 'Schváleno', 11, NULL, '2023-03-11 15:49:52', '2023-03-11 15:49:52'),
(219, 36, 'Sani-Cloth Active', NULL, 76, 'Sani-Cloth Active', 'Bezpečnostní list - Sani-Cloth Active', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_sani-cloth_active-revize-1.pdf', 'BOZP36#76', 'Schváleno', 11, NULL, '2023-03-11 15:50:31', '2023-03-11 15:50:31'),
(220, 36, 'Savagro A+', NULL, 77, 'Savagro A+', 'Bezpečnostní list - Savagro A+', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_savagro_a_-revize-1.pdf', 'BOZP36#77', 'Schváleno', 11, NULL, '2023-03-11 15:52:31', '2023-03-11 15:52:31'),
(221, 36, 'Savagro Basic', NULL, 78, 'Savagro Basic', 'Bezpečnostní list - Savagro Basic', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_savagro_basic-revize-1.pdf', 'BOZP36#78', 'Schváleno', 11, NULL, '2023-03-11 15:53:27', '2023-03-11 15:53:27'),
(222, 36, 'Savagro K', NULL, 79, 'Savagro K', 'Bezpečnostní list - Savagro K', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_savagro_k-revize-1.pdf', 'BOZP36#79', 'Schváleno', 11, NULL, '2023-03-11 15:54:21', '2023-03-11 15:54:21'),
(223, 36, 'Savagro KD', NULL, 80, 'Savagro KD', 'Bezpečnostní list - Savagro KD', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_savagro_kd-revize-1.pdf', 'BOZP36#80', 'Schváleno', 11, NULL, '2023-03-11 15:54:45', '2023-03-11 15:54:45'),
(224, 36, 'Savo Original', NULL, 81, 'Savo Original', 'Bezpečnostní list - Savo Original', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_savo_original-revize-1.pdf', 'BOZP36#81', 'Schváleno', 11, NULL, '2023-03-11 15:55:43', '2023-03-11 15:55:43'),
(225, 36, 'Savo Prim Květinová vůně', NULL, 82, 'Savo Prim Květinová vůně', 'Bezpečnostní list - Savo Prim Květinová vůně', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_savo_prim_kvetinova_vune-revize-1.pdf', 'BOZP36#82', 'Schváleno', 11, NULL, '2023-03-11 15:56:51', '2023-03-11 15:56:51'),
(226, 36, 'Savo Prim Svěží vůně', NULL, 83, 'Savo Prim Svěží vůně', 'Bezpečnostní list - Savo Prim Svěží vůně', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_savo_prim_svezi_vune-revize-1.pdf', 'BOZP36#83', 'Schváleno', 11, NULL, '2023-03-11 15:57:20', '2023-03-11 15:57:20'),
(227, 36, 'Savo WC', NULL, 84, 'Savo WC', 'Bezpečnostní list - Savo WC', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_savo_wc-revize-1.pdf', 'BOZP36#84', 'Schváleno', 11, NULL, '2023-03-11 15:57:43', '2023-03-11 15:57:43'),
(228, 36, 'Seku zyme', NULL, 85, 'Seku zyme', 'Bezpečnostní list - Seku zyme', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_seku_zyme-revize-1.pdf', 'BOZP36#85', 'Schváleno', 11, NULL, '2023-03-11 16:11:09', '2023-03-11 16:11:09'),
(229, 36, 'Sekusept Activ', NULL, 86, 'Sekusept Activ', 'Bezpečnostní list - Sekusept Activ', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_sekusept_activ-revize-1.pdf', 'BOZP36#86', 'Schváleno', 11, NULL, '2023-03-11 16:11:58', '2023-03-11 16:11:58'),
(230, 36, 'Sekusept Easy', NULL, 87, 'Sekusept Easy', 'Bezpečnostní list - Sekusept Easy', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_sekusept_easy-revize-1.pdf', 'BOZP36#87', 'Schváleno', 11, NULL, '2023-03-11 16:12:31', '2023-03-11 16:12:31'),
(231, 36, 'Septoderm', NULL, 88, 'Septoderm', 'Bezpečnostní list - Septoderm', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_septoderm-revize-1.pdf', 'BOZP36#88', 'Schváleno', 11, NULL, '2023-03-11 16:13:01', '2023-03-11 16:13:01'),
(232, 36, 'Septoderm Gel', NULL, 89, 'Septoderm Gel', 'Bezpečnostní list - Septoderm Gel', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_septoderm_gel-revize-1.pdf', 'BOZP36#89', 'Schváleno', 11, NULL, '2023-03-11 16:13:28', '2023-03-11 16:13:28'),
(233, 36, 'Silonda', NULL, 90, 'Silonda', 'Bezpečnostní list - Silonda', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_silonda-revize-1.pdf', 'BOZP36#90', 'Schváleno', 11, NULL, '2023-03-11 16:13:58', '2023-03-11 16:13:58'),
(234, 36, 'Silonda Lipid', NULL, 91, 'Silonda Lipid', 'Bezpečnostní list - Silonda Lipid', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_silonda_lipid-revize-1.pdf', 'BOZP36#91', 'Schváleno', 11, NULL, '2023-03-11 16:14:41', '2023-03-11 16:14:41'),
(235, 36, 'Silonda Sensitive', NULL, 92, 'Silonda Sensitive', 'Bezpečnostní list - Silonda Sensitive', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_silonda_sensitive-revize-1.pdf', 'BOZP36#92', 'Schváleno', 11, NULL, '2023-03-11 16:15:17', '2023-03-11 16:15:17'),
(236, 36, 'Skinman Scrub', NULL, 93, 'Skinman Scrub', 'Bezpečnostní list - Skinman Scrub', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_skinman_scrub-revize-1.pdf', 'BOZP36#93', 'Schváleno', 11, NULL, '2023-03-11 16:16:01', '2023-03-11 16:16:01'),
(237, 36, 'Skinman Soft', NULL, 94, 'Skinman Soft', 'Bezpečnostní list - Skinman Soft', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_skinman_soft-revize-1.pdf', 'BOZP36#94', 'Schváleno', 11, NULL, '2023-03-11 16:17:05', '2023-03-11 16:17:05'),
(238, 36, 'Skinsept F', NULL, 95, 'Skinsept F', 'Bezpečnostní list - Skinsept F', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_skinsept_f-revize-1.pdf', 'BOZP36#95', 'Schváleno', 11, NULL, '2023-03-11 16:17:40', '2023-03-11 16:17:40'),
(239, 36, 'Skinsept Mucosa', NULL, 96, 'Skinsept Mucosa', 'Bezpečnostní list - Skinsept Mucosa', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_skinsept_mucosa-revize-1.pdf', 'BOZP36#96', 'Schváleno', 11, NULL, '2023-03-11 16:18:14', '2023-03-11 16:21:51'),
(240, 36, 'Sokrena', NULL, 97, 'Sokrena', 'Bezpečnostní list - Sokrena', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_sokrena-revize-1.pdf', 'BOZP36#97', 'Schváleno', 11, NULL, '2023-03-11 16:19:33', '2023-03-11 16:19:33'),
(241, 36, 'Spirigel Complete', NULL, 98, 'Spirigel Complete', 'Bezpečnostní list - Spirigel Complete', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_spirigel_complete-revize-1.pdf', 'BOZP36#98', 'Schváleno', 11, NULL, '2023-03-11 16:20:22', '2023-03-11 16:20:22'),
(242, 36, 'Stekuron', NULL, 99, 'Stekuron', 'Bezpečnostní list - Stekuron', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_stekuron-revize-1.pdf', 'BOZP36#99', 'Schváleno', 11, NULL, '2023-03-11 16:21:08', '2023-03-11 16:21:08'),
(243, 36, 'Sterillium', NULL, 100, 'Sterillium', 'Bezpečnostní list - Sterillium', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_sterillium-revize-1.pdf', 'BOZP36#100', 'Schváleno', 11, NULL, '2023-03-11 16:23:05', '2023-03-11 16:23:05'),
(244, 36, 'Sterillium classic pure', NULL, 101, 'Sterillium classic pure', 'Bezpečnostní list - Sterillium classic pure', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_sterillium_classic_pure-revize-1.pdf', 'BOZP36#101', 'Schváleno', 11, NULL, '2023-03-11 16:23:52', '2023-03-11 16:23:52'),
(245, 36, 'Sterillium Med', NULL, 102, 'Sterillium Med', 'Bezpečnostní list - Sterillium Med', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_sterillium_med-revize-1.pdf', 'BOZP36#102', 'Schváleno', 11, NULL, '2023-03-11 16:24:33', '2023-03-11 16:24:33'),
(246, 36, 'Suma Inox Classic D7', NULL, 103, 'Suma Inox Classic D7', 'Bezpečnostní list - Suma Inox Classic D7', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_suma_inox_classic_d7-revize-1.pdf', 'BOZP36#103', 'Schváleno', 11, NULL, '2023-03-11 16:25:02', '2023-03-11 16:25:02'),
(247, 36, 'Suma Rinse A5', NULL, 104, 'Suma Rinse A5', 'Bezpečnostní list - Suma Rinse A5', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_suma_rinse_a5-revize-1.pdf', 'BOZP36#104', 'Schváleno', 11, NULL, '2023-03-11 16:25:49', '2023-03-11 16:25:49'),
(248, 36, 'Suma Special L4', NULL, 105, 'Suma Special L4', 'Bezpečnostní list - Suma Special L4', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_suma_special_l4-revize-1.pdf', 'BOZP36#105', 'Schváleno', 11, NULL, '2023-03-11 16:26:19', '2023-03-11 16:26:19'),
(249, 36, 'Thermosept NKP', NULL, 106, 'Thermosept NKP', 'Bezpečnostní list - Thermosept NKP', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_thermosept_nkp-revize-1.pdf', 'BOZP36#106', 'Schváleno', 11, NULL, '2023-03-11 16:26:57', '2023-03-11 16:26:57'),
(250, 36, 'Thermosept RKF', NULL, 107, 'Thermosept RKF', 'Bezpečnostní list - Thermosept RKF', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_thermosept_rkf-revize-1.pdf', 'BOZP36#107', 'Schváleno', 11, NULL, '2023-03-11 16:28:11', '2023-03-11 16:28:11'),
(251, 36, 'Toluen', NULL, 108, 'Toluen', 'Bezpečnostní list - Toluen', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_toluen-revize-1.pdf', 'BOZP36#108', 'Schváleno', 11, NULL, '2023-03-11 16:28:37', '2023-03-11 16:28:37'),
(252, 36, 'Topmatic Universal', NULL, 109, 'Topmatic Universal', 'Bezpečnostní list - Topmatic Universal', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_topmatic_universal-revize-1.pdf', 'BOZP36#109', 'Schváleno', 11, NULL, '2023-03-11 16:29:12', '2023-03-11 16:29:12'),
(253, 36, 'WD-40', NULL, 110, 'WD-40', 'Bezpečnostní list - WD-40', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-listy-bezpecnostni_list_-_wd-40-revize-1.pdf', 'BOZP36#110', 'Schváleno', 11, NULL, '2023-03-11 16:29:39', '2023-03-11 16:29:39'),
(254, 8, 'Čtyřkomovová galvanická lázeň', NULL, 8, 'Čtyřkomovová galvanická lázeň', 'Čtyřkomovová galvanická lázeň', 'Kolektiv fyzioterapeutů', 'Rada kvality', 'Bc. Bělicová Taťána', '2004-04-01', '8', '2022-10-01', NULL, '2021-10-01', 'standardy_rehabilitacni-ctyrkomovova_galvanicka_lazen-revize-8.pdf', 'STD8#8', 'Schváleno', 11, 14, '2023-03-11 17:20:23', '2023-03-12 21:42:57'),
(255, 30, 'Značení v objektech', NULL, 1, 'Značení v objektech', 'Význam bezpečnostních zkratek a značení v KHN a.s.', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-znaceni-vyznam_bezpecnostnich_zkratek_a_znaceni_v_khn_a_s_-revize-1.pdf', 'BOZP30#1', 'Schváleno', 11, NULL, '2023-03-12 10:17:15', '2023-03-14 05:59:45'),
(256, 30, 'Barevné označení zásuvek', NULL, 2, 'Barevné označení zásuvek', 'Barevné označení zásuvkových vývodů OP a JIP', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_bezpecnostni-znaceni-barevne_oznaceni_zasuvkovych_vyvodu_op_a_jip-revize-1.pdf', 'BOZP30#2', 'Schváleno', 11, NULL, '2023-03-12 10:18:06', '2023-03-12 10:25:12'),
(257, 30, 'Barevné označení zásuvek', NULL, 3, 'Barevné označení zásuvek', 'Barevné označení zásuvkových vývodů CPM', 'Pribula Marek, Bc.', NULL, NULL, '0216-03-01', '1', '0217-03-01', NULL, '0216-03-01', 'bozp_bezpecnostni-znaceni-barevne_oznaceni_zasuvkovych_vyvodu_cpm-revize-1.pdf', 'BOZP30#3', 'Schváleno', 11, NULL, '2023-03-12 10:18:32', '2023-03-12 10:24:16'),
(262, 32, 'MPBP pro sklady ve stravovacím provozu', NULL, 1, 'MPBP pro sklady ve stravovacím provozu', 'Místní provozně bezpečnostní předpis skladů stravovacího provozu', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2019-03-01', NULL, '2016-03-01', 'bozp_provozne-bezpecnostni-predpisy-mistni_provozne_bezpecnostni_predpis_skladu_stravovaciho_provozu-revize-1.pdf', 'BOZP32#1', 'Schváleno', 11, NULL, '2023-03-13 04:10:10', '2023-03-13 04:10:10'),
(263, 32, 'MPBP pro odpojovače, odpínače, pojistky', NULL, 2, 'MPBP pro odpojovače, odpínače, pojistky', 'Místní provozně bezpečnostní předpis odpojovače a odpínače NN, výměna pojistek v rozvodnách KHN a.s.', 'Pribula Marek, Bc.', NULL, NULL, '2012-06-01', '1', '2019-03-01', NULL, '2016-03-01', 'bozp_provozne-bezpecnostni-predpisy-mistni_provozne_bezpecnostni_predpis_odpojovace_a_odpinace_nn,_vymena_pojistek_v_rozvodnach_khn_a.s.-revize-1.pdf', 'BOZP32#2', 'Schváleno', 11, NULL, '2023-03-13 04:12:01', '2023-03-13 04:12:01'),
(264, 32, 'MPBP pro používání elektrických spotřebičů', NULL, 3, 'MPBP pro používání elektrických spotřebičů', 'Místní provozně bezpečnostní předpis pro používání elektrických spotřebičů', 'Pribula Marek, Bc.', NULL, NULL, '2014-03-01', '1', '2019-03-01', NULL, '2016-03-01', 'bozp_provozne-bezpecnostni-predpisy-mistni_provozne_bezpecnostni_predpis_pro_pouzivani_elektrickych_spotrebicu-revize-1.pdf', 'BOZP32#3', 'Schváleno', 11, NULL, '2023-03-13 04:13:18', '2023-03-13 04:13:18'),
(265, 32, 'MPBP pro práce pod napětím na elektrickém zařízení NN', NULL, 4, 'MPBP pro práce pod napětím na elektrickém zařízení NN', 'Místní provozně bezpečnostní předpis: práce pod napětím na elektrickém zařízení NN', 'Pribula Marek, Bc.', NULL, NULL, '2012-06-01', '1', '2019-03-27', NULL, '2016-03-27', 'bozp_provozne-bezpecnostni-predpisy-mistni_provozne_bezpecnostni_predpis-_prace_pod_napetim_na_elektrickem_zarizeni_nn-revize-1.pdf', 'BOZP32#4', 'Schváleno', 11, NULL, '2023-03-13 04:19:00', '2023-03-13 04:19:00'),
(266, 32, 'MPBP pro tlakové nádoby', NULL, 5, 'MPBP pro tlakové nádoby', 'Místní provozně bezpečnostní předpis tlakové nádoby', 'Pribula Marek, Bc.', NULL, NULL, '2011-01-15', '1', '2019-03-27', NULL, '2016-03-27', 'bozp_provozne-bezpecnostni-predpisy-mistni_provozne_bezpecnostni_predpis_tlakove_nadoby-revize-1.pdf', 'BOZP32#5', 'Schváleno', 11, NULL, '2023-03-13 04:20:15', '2023-03-13 04:20:15'),
(267, 32, 'MPBP pro trafostanice', NULL, 6, 'MPBP pro trafostanice', 'Místní provozně bezpečnostní předpis trafostanice KA_9216 odpojovače a odpínače VN v rozvodnách KHN.a.s.', 'Pribula Marek, Bc.', NULL, NULL, '2012-03-27', '1', '2019-03-27', NULL, '2016-03-27', 'bozp_provozne-bezpecnostni-predpisy-mistni_provozne_bezpecnostni_predpis_trafostanice_ka_9216_odpojovace_a_odpinace_vn_v_rozvodnach_khn.a.s.-revize-1.pdf', 'BOZP32#6', 'Schváleno', 11, NULL, '2023-03-13 04:22:30', '2023-03-13 04:22:30'),
(268, 32, 'MPBP pro záložní zdroj', NULL, 7, 'MPBP pro záložní zdroj', 'Místní provozně bezpečnostní předpis dieselagregátu BCV 275-50EZ-energoblok BCJD 30S-CPM', 'Pribula Marek, Bc.', NULL, NULL, '2012-06-01', '1', '2019-03-27', NULL, '2016-03-27', 'bozp_provozne-bezpecnostni-predpisy-mistni_provozne_bezpecnostni_predpis_dieselagregatu_bcv_275-50ez-energoblok_bcjd_30s-cpm-revize-1.pdf', 'BOZP32#7', 'Schváleno', 11, NULL, '2023-03-13 04:24:47', '2023-03-13 04:24:47'),
(269, 32, 'MPBP mediciální rozvody', NULL, 8, 'MPBP mediciální rozvody', 'Místní provozně bezpečnostní předpis medicinálních rozvodů', 'Pribula Marek, Bc.', NULL, NULL, '2014-12-15', '1', '2019-03-27', NULL, '2016-03-27', 'bozp_provozne-bezpecnostni-predpisy-mistni_provozne_bezpecnostni_predpis_medicinalnich_rozvodu-revize-1.pdf', 'BOZP32#8', 'Schváleno', 11, NULL, '2023-03-13 04:26:17', '2023-03-13 04:26:17'),
(270, 32, 'MPBP pro provoz dopravních prostředků', NULL, 9, 'MPBP pro provoz dopravních prostředků', 'Místní provozně bezpečnostní předpis pro provozování dopravních prostředků a údržby komunikací', 'Pribula Marek, Bc.', NULL, NULL, '2016-10-24', '1', '2020-10-01', NULL, '2018-10-01', 'bozp_provozne-bezpecnostni-predpisy-mistni_provozne_bezpecnostni_predpis_pro_provozovani_dopravnich_prostredku_a_udrzby_komunikaci-revize-1.pdf', 'BOZP32#9', 'Schváleno', 11, NULL, '2023-03-13 04:28:07', '2023-03-13 04:28:07'),
(271, 32, 'MPBP pro obsluhu úpravny bazenové vody', NULL, 10, 'MPBP pro obsluhu úpravny bazenové vody', 'Místní provozně bezpečnostní předpis pro obsluhu úpravny bazénové vody', 'Pribula Marek, Bc.', NULL, NULL, '2018-05-02', '1', '2020-05-01', NULL, '2019-05-01', 'bozp_provozne-bezpecnostni-predpisy-mistni_provozne_bezpecnostni_predpis_pro_obsluhu_upravny_bazenove_vody-revize-1.pdf', 'BOZP32#10', 'Schváleno', 11, NULL, '2023-03-13 04:29:19', '2023-03-13 04:29:19'),
(272, 32, 'Používání evakuačních výtahů', NULL, 11, 'Používání evakuačních výtahů', 'Předpis pro používání evakuačních výtahů', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_provozne-bezpecnostni-predpisy-predpis_pro_pouzivani_evakuacnich_vytahu-revize-1.pdf', 'BOZP32#11', 'Schváleno', 11, NULL, '2023-03-13 04:30:54', '2023-03-13 04:30:54'),
(273, 32, 'Ruční maipulace s pacienty', NULL, 12, 'Ruční maipulace s pacienty', 'Pracovní postupy pro manipulaci s pacienty předcházející vzniku muskuloskeletárních poruch (MSD)', 'Pribula Marek, Bc.', NULL, NULL, '2018-05-01', '1', '2019-05-01', NULL, '2018-05-01', 'bozp_provozne-bezpecnostni-predpisy-pracovni_postupy_pro_manipulaci_s_pacienty_predchazejici_vzniku_muskuloskeletarnich_poruch_(msd)-revize-1.pdf', 'BOZP32#12', 'Schváleno', 11, NULL, '2023-03-13 04:32:27', '2023-03-13 04:32:27'),
(274, 33, 'Ambulance anesteziologická', NULL, 1, 'Ambulance anesteziologická', 'Soubor rizik a bezpečnostních opatření', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_rizika-ambulance_anesteziologicka-soubor_rizik_a_bezpecnostnich_opatreni-revize-1.pdf', 'BOZP33#1', 'Schváleno', 11, NULL, '2023-03-13 04:39:31', '2023-03-14 09:18:26'),
(275, 33, 'Ambulance interní', NULL, 2, 'Ambulance interní', 'Soubor rizik a bezpečnostních opatření', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_rizika-ambulance_interni-soubor_rizik_a_bezpecnostnich_opatreni-revize-1.pdf', 'BOZP33#2', 'Schváleno', 11, NULL, '2023-03-13 04:40:13', '2023-03-14 09:17:26'),
(276, 33, 'Ambulance neurologická', NULL, 3, 'Ambulance neurologická', 'Soubor rizik a bezpečnostních opatření', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_rizika-ambulance_neurologicka-soubor_rizik_a_bezpecnostnich_opatreni-revize-1.pdf', 'BOZP33#3', 'Schváleno', 11, NULL, '2023-03-13 04:41:01', '2023-03-14 09:19:08'),
(277, 33, 'Ambulance ONP a ortopedická', NULL, 4, 'Ambulance ONP a ortopedická', 'Soubor rizik a bezpečnostních opatření', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_rizika-ambulance_onp_a_ortopedicka-soubor_rizik_a_bezpecnostnich_opatreni-revize-1.pdf', 'BOZP33#4', 'Schváleno', 11, NULL, '2023-03-13 04:41:49', '2023-03-14 09:50:52'),
(278, 33, 'Ambulance rehabilitační', NULL, 5, 'Ambulance rehabilitační', 'Soubor rizik a bezpečnostních opatření', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_rizika-ambulance_rehabilitacni-soubor_rizik_a_bezpecnostnich_opatreni-revize-1.pdf', 'BOZP33#5', 'Schváleno', 11, NULL, '2023-03-13 04:42:20', '2023-03-14 09:51:44'),
(279, 33, 'Interní oddělení', NULL, 6, 'Interní oddělení', 'Soubor rizik a bezpečnostních opatření', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_rizika-interni_oddeleni-soubor_rizik_a_bezpecnostnich_opatreni-revize-1.pdf', 'BOZP33#6', 'Schváleno', 11, NULL, '2023-03-13 04:43:05', '2023-03-14 09:52:02'),
(280, 33, 'JIP mezioborová', NULL, 7, 'JIP mezioborová', 'Soubor rizik a bezpečnostních opatření', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_rizika-jip_mezioborova-soubor_rizik_a_bezpecnostnich_opatreni-revize-1.pdf', 'BOZP33#7', 'Schváleno', 11, NULL, '2023-03-13 04:43:25', '2023-03-14 09:52:18'),
(281, 33, 'JIP oddělení nemoci páteře', NULL, 8, 'JIP oddělení nemoci páteře', 'Soubor rizik a bezpečnostních opatření', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_rizika-jip_oddeleni_nemoci_patere-soubor_rizik_a_bezpecnostnich_opatreni-revize-1.pdf', 'BOZP33#8', 'Schváleno', 11, NULL, '2023-03-13 04:44:28', '2023-03-14 09:52:32'),
(282, 33, 'Lékárna', NULL, 9, 'Lékárna', 'Soubor rizik a bezpečnostních opatření', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_rizika-lekarna-soubor_rizik_a_bezpecnostnich_opatreni-revize-1.pdf', 'BOZP33#9', 'Schváleno', 11, NULL, '2023-03-13 04:45:06', '2023-03-14 09:52:55'),
(283, 33, 'Neurologické oddělení', NULL, 10, 'Neurologické oddělení', 'Soubor rizik a bezpečnostních opatření', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_rizika-neurologicke_oddeleni-soubor_rizik_a_bezpecnostnich_opatreni-revize-1.pdf', 'BOZP33#10', 'Schváleno', 11, NULL, '2023-03-13 04:45:33', '2023-03-14 09:53:40'),
(284, 33, 'Oddělení nemoci páteře', NULL, 11, 'Oddělení nemoci páteře', 'Soubor rizik a bezpečnostních opatření', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_rizika-oddeleni_nemoci_patere-soubor_rizik_a_bezpecnostnich_opatreni-revize-1.pdf', 'BOZP33#11', 'Schváleno', 11, NULL, '2023-03-13 04:46:09', '2023-03-14 09:54:08'),
(285, 33, 'OCHP', NULL, 12, 'OCHP', 'Soubor rizik a bezpečnostních opatření', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_rizika-ochp-soubor_rizik_a_bezpecnostnich_opatreni-revize-1.pdf', 'BOZP33#12', 'Schváleno', 11, NULL, '2023-03-13 04:46:56', '2023-03-14 09:55:00'),
(286, 33, 'OKB', NULL, 13, 'OKB', 'Soubor rizik a bezpečnostních opatření', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_rizika-okb-soubor_rizik_a_bezpecnostnich_opatreni-revize-1.pdf', 'BOZP33#13', 'Schváleno', 11, NULL, '2023-03-13 04:47:15', '2023-03-14 09:55:14'),
(287, 33, 'Operační sály', NULL, 14, 'Operační sály', 'Soubor rizik a bezpečnostních opatření', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_rizika-operacni_saly-soubor_rizik_a_bezpecnostnich_opatreni-revize-1.pdf', 'BOZP33#14', 'Schváleno', 11, NULL, '2023-03-13 04:47:40', '2023-03-14 10:05:09'),
(288, 33, 'OPLS', NULL, 15, 'OPLS', 'Soubor rizik a bezpečnostních opatření', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_rizika-opls-soubor_rizik_a_bezpecnostnich_opatreni-revize-1.pdf', 'BOZP33#15', 'Schváleno', 11, NULL, '2023-03-13 04:48:07', '2023-03-14 10:10:18');
INSERT INTO `documents` (`id`, `category_id`, `accordion_name`, `accordion_group`, `position`, `name`, `description`, `processed`, `authorize`, `examine`, `efficiency`, `revision`, `next_revision_date`, `tags`, `revision_date`, `file`, `unique_code`, `status`, `user_id`, `onscreen`, `created_at`, `updated_at`) VALUES
(289, 33, 'Ortopedické oddělení', NULL, 16, 'Ortopedické oddělení', 'Soubor rizik a bezpečnostních opatření', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_rizika-ortopedicke_oddeleni-soubor_rizik_a_bezpecnostnich_opatreni-revize-1.pdf', 'BOZP33#16', 'Schváleno', 11, NULL, '2023-03-13 04:48:28', '2023-03-14 10:10:58'),
(290, 33, 'Provozní úsek', NULL, 17, 'Provozní úsek', 'Soubor rizik a bezpečnostních opatření', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_rizika-provozni_usek-soubor_rizik_a_bezpecnostnich_opatreni-revize-1.pdf', 'BOZP33#17', 'Schváleno', 11, NULL, '2023-03-13 04:49:03', '2023-03-14 10:11:13'),
(291, 33, 'RDG', NULL, 18, 'RDG', 'Soubor rizik a bezpečnostních opatření', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_rizika-rdg-soubor_rizik_a_bezpecnostnich_opatreni-revize-1.pdf', 'BOZP33#18', 'Schváleno', 11, NULL, '2023-03-13 04:49:35', '2023-03-14 10:11:26'),
(292, 33, 'Rehabilitační oddělení', NULL, 19, 'Rehabilitační oddělení', 'Soubor rizik a bezpečnostních opatření', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_rizika-rehabilitacni_oddeleni-soubor_rizik_a_bezpecnostnich_opatreni-revize-1.pdf', 'BOZP33#19', 'Schváleno', 11, NULL, '2023-03-13 04:50:02', '2023-03-14 10:11:42'),
(293, 33, 'Ředitelství', NULL, 20, 'Ředitelství', 'Soubor rizik a bezpečnostních opatření', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_rizika-reditelstvi-soubor_rizik_a_bezpecnostnich_opatreni-revize-1.pdf', 'BOZP33#20', 'Schváleno', 11, NULL, '2023-03-13 04:50:26', '2023-03-14 10:11:54'),
(294, 33, 'Řidiči', NULL, 21, 'Řidiči', 'Soubor rizik a bezpečnostních opatření', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_rizika-ridici-soubor_rizik_a_bezpecnostnich_opatreni-revize-1.pdf', 'BOZP33#21', 'Schváleno', 11, NULL, '2023-03-13 04:50:56', '2023-03-14 10:12:25'),
(295, 33, 'Stravovací provoz', NULL, 22, 'Stravovací provoz', 'Soubor rizik a bezpečnostních opatření', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_rizika-stravovaci_provoz-soubor_rizik_a_bezpecnostnich_opatreni-revize-1.pdf', 'BOZP33#22', 'Schváleno', 11, NULL, '2023-03-13 04:51:24', '2023-03-14 10:14:20'),
(296, 33, 'Úklidová služba', NULL, 23, 'Úklidová služba', 'Soubor rizik a bezpečnostních opatření', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_rizika-uklidova_sluzba-soubor_rizik_a_bezpecnostnich_opatreni-revize-1.pdf', 'BOZP33#23', 'Schváleno', 11, NULL, '2023-03-13 04:51:51', '2023-03-14 10:15:41'),
(297, 34, 'Řád ohlašovny požárů', NULL, 1, 'Řád ohlašovny požárů', 'Řád ohlašovny požárů  KHN a.s.', 'Pribula Marek, Bc.', NULL, NULL, '2020-02-21', '1', '2021-02-21', NULL, '2020-02-21', 'bozp_pozarni-ochrana-rad_ohlasovny_pozaru__khn_a.s.-revize-1.pdf', 'BOZP34#1', 'Schváleno', 11, NULL, '2023-03-13 05:22:02', '2023-03-13 05:22:02'),
(298, 34, 'Požární řád - Lůžková a ambulantní část nemocnice', NULL, 2, 'Požární řád - Lůžková a ambulantní část nemocnice', 'Požární řád - Lůžková a ambulantní část nemocnice', 'Pribula Marek, Bc.', NULL, NULL, '2014-10-31', '1', '2015-10-31', NULL, '2014-10-31', 'bozp_pozarni-ochrana-pozarni_rad_-_luzkova_a_ambulantni_cast_nemocnice-revize-1.pdf', 'BOZP34#2', 'Schváleno', 11, NULL, '2023-03-13 05:25:27', '2023-03-13 05:25:27'),
(299, 34, 'Požární řád - Dieselagregát', NULL, 3, 'Požární řád - Dieselagregát', 'Požární řád - Dieselagregát', 'Pribula Marek, Bc.', NULL, NULL, '2014-10-31', '1', '2015-10-31', NULL, '2014-10-31', 'bozp_pozarni-ochrana-pozarni_rad_-_dieselagregat-revize-1.pdf', 'BOZP34#3', 'Schváleno', 11, NULL, '2023-03-13 05:26:23', '2023-03-13 05:26:23'),
(300, 35, 'Hlavní budova A', NULL, 1, 'Hlavní budova A', 'Hlavní budova A - Suterén - CO Kryt', 'Pribula Marek, Bc.', NULL, NULL, '2016-03-01', '1', '2017-03-01', NULL, '2016-03-01', 'bozp_pozarni-operativni-karty-hlavni_budova_a_-_suteren_-_co_kryt-revize-1.pdf', 'BOZP35#1', 'Schváleno', 11, NULL, '2023-03-13 06:09:26', '2023-03-13 06:09:26'),
(301, 35, 'Hlavní budova A', NULL, 2, 'Hlavní budova A', 'Hlavní budova A - Přízemí - Oddělení klinické biochemie OKB', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-hlavni_budova_a_-_prizemi_-_oddeleni_klinicke_biochemie_okb-revize-1.pdf', 'BOZP35#2', 'Schváleno', 11, NULL, '2023-03-13 06:11:32', '2023-03-13 06:11:32'),
(302, 35, 'Hlavní budova A', NULL, 3, 'Hlavní budova A', 'Hlavní budova A - 1. patro - Operační Sály č.1 a č.2', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-hlavni_budova_a_-_1._patro_-_operacni_saly_c.1_a_c.2-revize-1.pdf', 'BOZP35#3', 'Schváleno', 11, NULL, '2023-03-13 06:13:01', '2023-03-13 06:13:01'),
(303, 35, 'Hlavní budova A', NULL, 4, 'Hlavní budova A', 'Hlavní budova A - 2. patro - Strojovny VZT, inspekční pokoje, IT', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-hlavni_budova_a_-_2._patro_-_strojovny_vzt,_inspekcni_pokoje,_it-revize-1.pdf', 'BOZP35#4', 'Schváleno', 11, NULL, '2023-03-13 06:13:44', '2023-03-13 06:13:44'),
(304, 35, 'Hlavní budova A', NULL, 5, 'Hlavní budova A', 'Hlavní budova A - 3. patro - Inspekční pokoje', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-hlavni_budova_a_-_3._patro_-_inspekcni_pokoje-revize-1.pdf', 'BOZP35#5', 'Schváleno', 11, NULL, '2023-03-13 06:16:14', '2023-03-13 06:16:14'),
(305, 35, 'Hlavní budova A', NULL, 6, 'Hlavní budova A', 'Hlavní budova A - 4. patro - CN Páteře lůžkové oddělení', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-hlavni_budova_a_-_4._patro_-_cn_patere_luzkove_oddeleni-revize-1.pdf', 'BOZP35#6', 'Schváleno', 11, NULL, '2023-03-13 06:16:44', '2023-03-13 06:16:44'),
(306, 35, 'Hlavní budova B', NULL, 7, 'Hlavní budova B', 'Hlavní budova B - Suterén', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-hlavni_budova_b_-_suteren-revize-1.pdf', 'BOZP35#7', 'Schváleno', 11, NULL, '2023-03-13 06:19:49', '2023-03-13 06:19:49'),
(307, 35, 'Hlavní budova B', NULL, 8, 'Hlavní budova B', 'Hlavní budova B - Přízemí - Oddělení RDG', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-hlavni_budova_b_-_prizemi_-_oddeleni_rdg-revize-1.pdf', 'BOZP35#8', 'Schváleno', 11, NULL, '2023-03-13 06:20:34', '2023-03-13 06:20:34'),
(308, 35, 'Hlavní budova B', NULL, 9, 'Hlavní budova B', 'Hlavní budova B - 1. patro - JIP CNP', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-hlavni_budova_b_-_1._patro_-_jip_cnp-revize-1.pdf', 'BOZP35#9', 'Schváleno', 11, NULL, '2023-03-13 06:21:33', '2023-03-13 06:21:33'),
(309, 35, 'Hlavní budova B', NULL, 10, 'Hlavní budova B', 'Hlavní budova B - 2. patro - Interní ambulance', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-hlavni_budova_b_-_2._patro_-_interni_ambulance-revize-1.pdf', 'BOZP35#10', 'Schváleno', 11, NULL, '2023-03-13 06:22:20', '2023-03-13 06:22:20'),
(310, 35, 'Hlavní budova B', NULL, 11, 'Hlavní budova B', 'Hlavní budova B - 3. patro - Neurologické ambulance', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-hlavni_budova_b_-_3._patro_-_neurologicke_ambulance-revize-1.pdf', 'BOZP35#11', 'Schváleno', 11, NULL, '2023-03-13 06:23:02', '2023-03-13 06:23:02'),
(311, 35, 'Hlavní budova B', NULL, 12, 'Hlavní budova B', 'Hlavní budova B - 4. patro - Mezioborová JIP', 'Pribula Marek, Bc.', NULL, NULL, '2014-03-01', '1', '2015-03-01', NULL, '2014-03-01', 'bozp_pozarni-operativni-karty-hlavni_budova_b_-_4._patro_-_mezioborova_jip-revize-1.pdf', 'BOZP35#12', 'Schváleno', 11, NULL, '2023-03-13 06:23:36', '2023-03-13 06:23:36'),
(312, 35, 'Hlavní budova C', NULL, 13, 'Hlavní budova C', 'Hlavní budova C - Suterén - Ambulantní rehabilitace - vodoléčba', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-hlavni_budova_c_-_suteren_-_ambulantni_rehabilitace_-_vodolecba-revize-1.pdf', 'BOZP35#13', 'Schváleno', 11, NULL, '2023-03-13 06:27:36', '2023-03-13 06:27:36'),
(313, 35, 'Hlavní budova C', NULL, 14, 'Hlavní budova C', 'Hlavní budova C - Přízemí - Vestibul + CT', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-hlavni_budova_c_-_prizemi_-_vestibul___ct-revize-1.pdf', 'BOZP35#14', 'Schváleno', 11, NULL, '2023-03-13 06:28:34', '2023-03-13 06:28:34'),
(314, 35, 'Hlavní budova C', NULL, 15, 'Hlavní budova C', 'Hlavní budova C - 1. patro - Rehabilitační lůžkové oddělení', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-hlavni_budova_c_-_1._patro_-_rehabilitacni_luzkove_oddeleni-revize-1.pdf', 'BOZP35#15', 'Schváleno', 11, NULL, '2023-03-13 06:29:07', '2023-03-13 06:29:07'),
(315, 35, 'Hlavní budova C', NULL, 16, 'Hlavní budova C', 'Hlavní budova C - 2. patro - Ortopedické oddělení lůžkové', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-hlavni_budova_c_-_2._patro_-_ortopedicke_oddeleni_luzkove-revize-1.pdf', 'BOZP35#16', 'Schváleno', 11, NULL, '2023-03-13 06:30:16', '2023-03-13 06:30:16'),
(316, 35, 'Hlavní budova C', NULL, 17, 'Hlavní budova C', 'Hlavní budova C - 3. patro - Interní oddělení lůžkové', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-hlavni_budova_c_-_3._patro_-_interni_oddeleni_luzkove-revize-1.pdf', 'BOZP35#17', 'Schváleno', 11, NULL, '2023-03-13 06:30:43', '2023-03-13 06:30:43'),
(317, 35, 'Hlavní budova C', NULL, 18, 'Hlavní budova C', 'Hlavní budova C - 4. patro - Neurologické oddělení lůžkové', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-hlavni_budova_c_-_4._patro_-_neurologicke_oddeleni_luzkove-revize-1.pdf', 'BOZP35#18', 'Schváleno', 11, NULL, '2023-03-13 06:31:44', '2023-03-13 06:31:44'),
(318, 35, 'Hlavní budova C', NULL, 19, 'Hlavní budova C', 'Hlavní budova C - 5. patro - Strojovny, střechy budov A, B, C', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-hlavni_budova_c_-_5._patro_-_strojovny,_strechy_budov_a,_b,_c-revize-1.pdf', 'BOZP35#19', 'Schváleno', 11, NULL, '2023-03-13 06:32:11', '2023-03-13 06:32:11'),
(319, 35, 'Hlavní budova D', NULL, 20, 'Hlavní budova D', 'Hlavní budova D - Suterén - Strojovny VZT', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-hlavni_budova_d_-_suteren_-_strojovny_vzt-revize-1.pdf', 'BOZP35#20', 'Schváleno', 11, NULL, '2023-03-13 06:34:03', '2023-03-13 06:34:03'),
(320, 35, 'Hlavní budova D', NULL, 21, 'Hlavní budova D', 'Hlavní budova D - Přízemí - Magnetická rezonance', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-hlavni_budova_d_-_prizemi_-_magneticka_rezonance-revize-1.pdf', 'BOZP35#21', 'Schváleno', 11, NULL, '2023-03-13 06:34:36', '2023-03-13 06:34:36'),
(321, 35, 'Hlavní budova D', NULL, 22, 'Hlavní budova D', 'Hlavní budova D - 1. patro - Rehabilitace tělocvičny', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-hlavni_budova_d_-_1._patro_-_rehabilitace_telocvicny-revize-1.pdf', 'BOZP35#22', 'Schváleno', 11, NULL, '2023-03-13 06:35:13', '2023-03-13 06:35:13'),
(322, 35, 'Hlavní budova D', NULL, 23, 'Hlavní budova D', 'Hlavní budova D - 2. patro - Operační sál č. 3', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-hlavni_budova_d_-_2._patro_-_operacni_sal_c._3-revize-1.pdf', 'BOZP35#23', 'Schváleno', 11, NULL, '2023-03-13 06:35:46', '2023-03-13 06:35:46'),
(323, 35, 'Hlavní budova E', NULL, 24, 'Hlavní budova E', 'Hlavní budova E - Suterén - Dílny', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-hlavni_budova_e_-_suteren_-_dilny-revize-1.pdf', 'BOZP35#24', 'Schváleno', 11, NULL, '2023-03-13 06:38:05', '2023-03-13 06:38:05'),
(324, 35, 'Hlavní budova E', NULL, 25, 'Hlavní budova E', 'Hlavní budova E - Přízemí - Energoblok trafostanice', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-hlavni_budova_e_-_prizemi_-_energoblok_trafostanice-revize-1.pdf', 'BOZP35#25', 'Schváleno', 11, NULL, '2023-03-13 06:45:41', '2023-03-13 06:45:41'),
(325, 35, 'Hlavní budova E', NULL, 26, 'Hlavní budova E', 'Kabelový kanál - suterén - Elektrorozvody', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-kabelovy_kanal_-_suteren_-_elektrorozvody-revize-1.pdf', 'BOZP35#26', 'Schváleno', 11, NULL, '2023-03-13 06:46:45', '2023-03-13 06:46:45'),
(326, 35, 'Hlavní budova K', NULL, 27, 'Hlavní budova K', 'Hlavní budova K - Suterén - Sklady, chladící boxy', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-hlavni_budova_k_-_suteren_-_sklady,_chladici_boxy-revize-1.pdf', 'BOZP35#27', 'Schváleno', 11, NULL, '2023-03-13 06:47:56', '2023-03-13 06:47:56'),
(327, 35, 'Hlavní budova K', NULL, 28, 'Hlavní budova K', 'Hlavní budova K - Přízemí - Kuchyně', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-hlavni_budova_k_-_prizemi_-_kuchyne-revize-1.pdf', 'BOZP35#28', 'Schváleno', 11, NULL, '2023-03-13 06:48:23', '2023-03-13 06:48:23'),
(328, 35, 'Hlavní budova R', NULL, 29, 'Hlavní budova R', 'Hlavní budova R - Suterén - Sklady', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-hlavni_budova_r_-_suteren_-_sklady-revize-1.pdf', 'BOZP35#29', 'Schváleno', 11, NULL, '2023-03-13 06:49:36', '2023-03-13 06:49:36'),
(329, 35, 'Hlavní budova R', NULL, 30, 'Hlavní budova R', 'Hlavní budova R - Přízemí - Šatny', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-hlavni_budova_r_-_prizemi_-_satny-revize-1.pdf', 'BOZP35#30', 'Schváleno', 11, NULL, '2023-03-13 06:50:38', '2023-03-13 06:50:38'),
(330, 35, 'Hlavní budova R', NULL, 31, 'Hlavní budova R', 'Hlavní budova R - 1. patro - Inspekční pokoje, kanceláře', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-hlavni_budova_r_-_1._patro_-_inspekcni_pokoje,_kancelare-revize-1.pdf', 'BOZP35#31', 'Schváleno', 11, NULL, '2023-03-13 06:51:11', '2023-03-13 06:51:11'),
(331, 35, 'Hlavní budova R', NULL, 32, 'Hlavní budova R', 'Hlavní budova R - 2. patro - Inspekční pokoje', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-hlavni_budova_r_-_2._patro_-_inspekcni_pokoje-revize-1.pdf', 'BOZP35#32', 'Schváleno', 11, NULL, '2023-03-13 06:52:00', '2023-03-13 06:52:00'),
(332, 35, 'Hlavní budova R', NULL, 33, 'Hlavní budova R', 'Hlavní budova R - 3. patro - Kanceláře', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-hlavni_budova_r_-_3._patro_-_kancelare-revize-1.pdf', 'BOZP35#33', 'Schváleno', 11, NULL, '2023-03-13 06:52:33', '2023-03-13 06:52:33'),
(333, 35, 'Hlavní budova V', NULL, 34, 'Hlavní budova V', 'Hlavní budova V - Redukční stanice vzduchu a kyslíku', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-hlavni_budova_v_-_redukcni_stanice_vzduchu_a_kysliku-revize-1.pdf', 'BOZP35#34', 'Schváleno', 11, NULL, '2023-03-13 06:53:37', '2023-03-13 06:53:37'),
(334, 35, 'CPM A', NULL, 35, 'CPM A', 'CPM A - Suterén', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-cpm_a_-_suteren-revize-1.pdf', 'BOZP35#35', 'Schváleno', 11, NULL, '2023-03-13 06:55:45', '2023-03-13 06:55:45'),
(335, 35, 'CPM A', NULL, 36, 'CPM A', 'CPM A - Přízemí', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-cpm_a_-_prizemi-revize-1.pdf', 'BOZP35#36', 'Schváleno', 11, NULL, '2023-03-13 06:56:13', '2023-03-13 06:56:13'),
(336, 35, 'CPM A', NULL, 37, 'CPM A', 'CPM A - 1. patro', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-cpm_a_-_1._patro-revize-1.pdf', 'BOZP35#37', 'Schváleno', 11, NULL, '2023-03-13 06:56:49', '2023-03-13 06:56:49'),
(337, 35, 'CPM A', NULL, 38, 'CPM A', 'CPM A - 2. patro', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-cpm_a_-_2._patro-revize-1.pdf', 'BOZP35#38', 'Schváleno', 11, NULL, '2023-03-13 06:57:40', '2023-03-13 06:57:40'),
(338, 35, 'CPM A', NULL, 39, 'CPM A', 'CPM A - 3. patro', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-cpm_a_-_3._patro-revize-1.pdf', 'BOZP35#39', 'Schváleno', 11, NULL, '2023-03-13 06:58:10', '2023-03-13 06:58:10'),
(339, 35, 'CPM A', NULL, 40, 'CPM A', 'CPM A - 4. patro', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-cpm_a_-_4._patro-revize-1.pdf', 'BOZP35#40', 'Schváleno', 11, NULL, '2023-03-13 06:58:35', '2023-03-13 06:58:35'),
(340, 35, 'CPM B', NULL, 41, 'CPM B', 'CPM B - Suterén', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-cpm_b_-_suteren-revize-1.pdf', 'BOZP35#41', 'Schváleno', 11, NULL, '2023-03-13 06:59:39', '2023-03-13 06:59:39'),
(341, 35, 'CPM B', NULL, 42, 'CPM B', 'CPM B - Přízemí', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-cpm_b_-_prizemi-revize-1.pdf', 'BOZP35#42', 'Schváleno', 11, NULL, '2023-03-13 07:00:23', '2023-03-13 07:00:23'),
(342, 35, 'CPM B', NULL, 43, 'CPM B', 'CPM B - 1. patro', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-cpm_b_-_1._patro-revize-1.pdf', 'BOZP35#43', 'Schváleno', 11, NULL, '2023-03-13 07:01:22', '2023-03-13 07:01:22'),
(343, 35, 'CPM B', NULL, 44, 'CPM B', 'CPM B - 2. patro', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-cpm_b_-_2._patro-revize-1.pdf', 'BOZP35#44', 'Schváleno', 11, NULL, '2023-03-13 08:02:18', '2023-03-13 08:02:18'),
(344, 35, 'CPM B', NULL, 45, 'CPM B', 'CPM B - 3. patro', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-cpm_b_-_3._patro-revize-1.pdf', 'BOZP35#45', 'Schváleno', 11, NULL, '2023-03-13 08:03:06', '2023-03-13 08:03:06'),
(345, 35, 'CPM B', NULL, 46, 'CPM B', 'CPM B - 4. patro', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-cpm_b_-_4._patro-revize-1.pdf', 'BOZP35#46', 'Schváleno', 11, NULL, '2023-03-13 08:10:52', '2023-03-13 08:10:52'),
(346, 35, 'CPM C', NULL, 47, 'CPM C', 'CPM C - Suterén', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-cpm_c_-_suteren-revize-1.pdf', 'BOZP35#47', 'Schváleno', 11, NULL, '2023-03-13 08:12:00', '2023-03-13 08:12:00'),
(347, 35, 'CPM C', NULL, 48, 'CPM C', 'CPM C - Přízemí', 'Pribula Marek, Bc.', NULL, NULL, '2014-09-01', '1', '2015-09-01', NULL, '2014-09-01', 'bozp_pozarni-operativni-karty-cpm_c_-_prizemi-revize-1.pdf', 'BOZP35#48', 'Schváleno', 11, NULL, '2023-03-13 08:12:45', '2023-03-13 08:12:45'),
(348, 35, 'Nová budova', NULL, 49, 'Nová budova', 'Nová budova - přízemí', 'Pribula Marek, Bc.', NULL, NULL, '2022-03-01', '1', '2023-03-01', NULL, '2022-03-01', 'bozp_pozarni-operativni-karty-nova_budova_-_prizemi-revize-1.pdf', 'BOZP35#49', 'Schváleno', 11, NULL, '2023-03-13 08:13:51', '2023-03-13 08:15:42'),
(349, 35, 'Nová budova', NULL, 50, 'Nová budova', 'Nová budova - 1. patro', 'Pribula Marek, Bc.', NULL, NULL, '2022-03-01', '1', '2023-03-01', NULL, '2022-03-01', 'bozp_pozarni-operativni-karty-nova_budova_-_1._patro-revize-1.pdf', 'BOZP35#50', 'Schváleno', 11, NULL, '2023-03-13 08:14:47', '2023-03-13 08:14:47'),
(350, 35, 'Nová budova', NULL, 51, 'Nová budova', 'Nová budova - 2. patro', 'Pribula Marek, Bc.', NULL, NULL, '2022-03-01', '1', '2023-03-01', NULL, '2022-03-01', 'bozp_pozarni-operativni-karty-nova_budova_-_2._patro-revize-1.pdf', 'BOZP35#51', 'Schváleno', 11, NULL, '2023-03-13 08:15:24', '2023-03-13 08:15:24');

-- --------------------------------------------------------

--
-- Struktura tabulky `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coffee` enum('A','N') COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `employment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(11) DEFAULT NULL,
  `standard_signature` int(11) DEFAULT NULL,
  `status` enum('Aktivní','Neaktivní','Mateřská') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Neaktivní',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `employees`
--

INSERT INTO `employees` (`id`, `personal_number`, `image`, `title_preffix`, `last_name`, `middle_name`, `married_name`, `first_name`, `title_suffix`, `department_id`, `job_id`, `email`, `start_date`, `end_date`, `comment`, `phone`, `mobile`, `id_card`, `coffee`, `employment`, `position`, `standard_signature`, `status`, `created_at`, `updated_at`) VALUES
(1, '63705', '63705.jpg', NULL, 'Bajgerová', NULL, NULL, 'Jana', NULL, '23', '55', 'bajgerova@khn.cz', '1996-02-01', NULL, 'a31561', NULL, '725669166', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-09-20 08:39:17'),
(2, '64108', '64108.jpg', NULL, 'Blínová', NULL, NULL, 'Andrea', NULL, '14', '36', NULL, '1996-02-01', NULL, 'a908c9', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2023-02-16 08:44:59'),
(3, '61228', '61228.jpg', 'Bc.', 'Bojková', NULL, NULL, 'Monika', NULL, '7', '41', 'bojkova@khn.cz', '1996-02-01', NULL, '7833e8', '110', '606789967', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:51:21'),
(4, '60321', '60321.jpg', 'MUDr.', 'Brzeżański', NULL, NULL, 'Henryk', NULL, '6', '12', 'brzezanski@khn.cz', '1996-02-01', NULL, '7833e8', '244', '602584406', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-07-04 07:02:42'),
(5, '60512', '60512.jpg', 'MUDr.', 'Cibulková', NULL, NULL, 'Zdeňka', NULL, '15', '12', 'cibulkova@khn.cz', '1996-02-01', NULL, 'c90818', '271', '602526884', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 03:09:56'),
(6, '62417', '62417.jpg', NULL, 'Cyroňová', NULL, NULL, 'Irena', NULL, '6', '47', 'cyronova@khn.cz', '1996-02-01', NULL, '7833e8', '201', '725669171', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2023-01-18 17:56:50'),
(7, '61606', '61606.jpg', 'MUDr.', 'Czolková', NULL, NULL, 'Andrea', NULL, '6', '12', NULL, '1996-02-01', NULL, '7833e8', '202', '725669167', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 10:03:00'),
(9, '60611', '60611.jpg', NULL, 'Čierniková', NULL, NULL, 'Marcela', NULL, '24', '33', 'ciernikova@khn.cz', '1996-02-01', NULL, '999999', '114', '602459731', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 03:12:18'),
(10, '61021', '61021.jpg', NULL, 'Galiová', NULL, NULL, 'Marcela', NULL, '13', '55', NULL, '1996-02-01', NULL, NULL, '509', NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-10-04 08:49:44'),
(11, '64511', '64511.jpg', NULL, 'Galmusová', NULL, NULL, 'Kamila', NULL, '16', '36', NULL, '1996-02-01', NULL, '94f700', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-03-04 05:00:59'),
(12, '61018', '61018.jpg', NULL, 'Gondeková', NULL, NULL, 'Eva', NULL, '11', '36', NULL, '1996-02-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-20 03:20:04'),
(14, '61220', '61220.jpg', NULL, 'Halfarová', NULL, NULL, 'Dana', NULL, '11', '55', NULL, '1996-02-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-20 03:12:01'),
(15, '64202', '64202.jpg', NULL, 'Halouzková', NULL, NULL, 'Vladimíra', NULL, '23', '55', NULL, '1996-02-01', NULL, 'a31561', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(16, '62522', '62522.jpg', NULL, 'Hondlová', NULL, NULL, 'Milena', NULL, '9', '55', NULL, '1996-02-01', NULL, 'd9fa05', '', '725669177', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(17, '61513', '61513.jpg', 'MUDr.', 'Jonsztová', NULL, NULL, 'Kristina', NULL, '7', '12', 'jonsztova@khn.cz', '1996-02-01', NULL, '7833e8', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:16:03'),
(18, '61604', '61604.jpg', 'MUDr.', 'Kalina', NULL, NULL, 'František', NULL, '14', '12', 'kalina@khn.cz', '1996-02-01', NULL, 'a908c9', '183', '602704385', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:15:44'),
(19, '61617', '61617.jpg', NULL, 'Kašingová', NULL, NULL, 'Miroslava', NULL, '28', '47', 'kasingova@khn.cz', '1996-02-01', NULL, 'ffa600', '148', '602792242', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2023-01-18 17:56:25'),
(20, '63601', '63601.jpg', 'Mgr.', 'Kiedroňová', NULL, NULL, 'Halina', NULL, '15', '52', 'kiedronova@khn.cz', '1996-02-01', NULL, 'c90818', '424', '606774044', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:13:10'),
(21, '62022', '62022.jpg', NULL, 'Kumpánová', NULL, NULL, 'Božena', NULL, '17', '51', 'kumpanova@khn.cz', '1996-02-01', NULL, 'ffee00', '526', '602579203', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:42:36'),
(22, '62303', '62303.jpg', NULL, 'Kusová', NULL, NULL, 'Zdeňka', NULL, '13', '41', 'kusova@khn.cz', '1996-02-01', NULL, NULL, '532', '606789971', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:40:46'),
(23, '62106', '62106.jpg', NULL, 'Kuzníková', NULL, NULL, 'Jaroslava', NULL, '13', '47', 'kuznikova@khn.cz', '1996-02-01', NULL, NULL, '508', '606789972', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2023-01-25 05:33:14'),
(25, '62217', '62217.jpg', NULL, 'Lazengová', NULL, NULL, 'Iveta', NULL, '14', '65', 'lazengova@khn.cz', '1996-02-01', NULL, 'a908c9', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:40:04'),
(26, '61022', '61022.jpg', NULL, 'Matejčíková', NULL, NULL, 'Alžbeta', NULL, '5', '55', 'matejcikova@khn.cz', '1996-02-01', NULL, '4287f5', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:38:00'),
(29, '62501', '62501.jpg', NULL, 'Mistrová', NULL, NULL, 'Jiřina', NULL, '7', '55', NULL, '1996-02-01', NULL, '7833e8', NULL, '606789967', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-09-20 09:59:44'),
(30, '62718', '62718.jpg', NULL, 'Mrkvová', NULL, NULL, 'Michaela', NULL, '23', '47', 'mrkvova@khn.cz', '1996-02-01', NULL, 'a31561', NULL, '724022625', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2023-01-18 18:00:48'),
(31, '62625', '62625.jpg', 'MUDr.', 'Najder', NULL, NULL, 'Roman', NULL, '15', '30', 'najder@khn.cz', '1996-02-01', NULL, 'c90818', '417', '602459741', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:32:51'),
(32, '62603', '62603.jpg', NULL, 'Němcová', NULL, NULL, 'Anna', NULL, '22', '36', NULL, '1996-02-01', NULL, '2c612a', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(34, '62707', '62707.jpg', NULL, 'Ochodková', NULL, NULL, 'Jaroslava', NULL, '23', '55', NULL, '1996-02-01', NULL, 'a31561', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(35, '62719', '62719.jpg', NULL, 'Opolková', NULL, NULL, 'Renáta', NULL, '18', '24', NULL, '1996-02-01', NULL, 'ffa200', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-27 08:55:24'),
(37, '60527', '60527.jpg', NULL, 'Popková', NULL, NULL, 'Iveta', NULL, '9', '47', 'popkova@khn.cz', '1996-02-01', NULL, 'd9fa05', '439, 152', '724938780', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2023-01-26 11:03:48'),
(38, '63017', '63017.jpg', 'Bc.', 'Pribula', NULL, NULL, 'Marek', NULL, '15', '36', 'pribula@khn.cz', '1996-02-01', NULL, 'c90818', '334', '605721963', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:27:43'),
(40, '63518', '63518.jpg', 'Bc.', 'Sigmundová', NULL, NULL, 'Pavla', NULL, '14', '65', 'sigmundova@khn.cz', '1996-02-01', NULL, 'a908c9', '102', '730188190', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:25:18'),
(42, '63719', '63719.jpg', 'MUDr.', 'Střída', NULL, NULL, 'Josef', NULL, '4', '12', 'strida@khn.cz', '1996-02-01', NULL, '4287f5', '226', '725669160', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:23:38'),
(44, '62014', '62014.jpg', NULL, 'Ščučinská', NULL, NULL, 'Eva', NULL, '5', '55', 'scucinska@khn.cz', '1996-02-01', NULL, '4287f5', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:19:26'),
(45, '64101', '64101.jpg', NULL, 'Valičková', NULL, NULL, 'Lenka', NULL, '18', '11', NULL, '1996-02-01', NULL, 'ffa200', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-27 08:53:44'),
(46, '64327', '64327.jpg', NULL, 'Valová', NULL, NULL, 'Hana', 'DiS.', '15', '35', NULL, '1996-02-01', NULL, 'c90818', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(47, '64510', '64510_21-01-2023.jpg', NULL, 'Wojnarová', NULL, NULL, 'Marcela', NULL, '17', '1', 'canibal@khn.cz', '1996-02-01', NULL, 'ffee00', '441', '606685606', 'Vydáno', 'N', 'HPP', 2, NULL, 'Aktivní', '2020-02-09 21:00:00', '2023-01-20 23:44:37'),
(48, '64517', '64517.jpg', NULL, 'Woznica', NULL, NULL, 'Pavel', NULL, '18', '42', NULL, '1996-02-01', NULL, 'ffa200', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(49, '61926', '61926.jpg', NULL, 'Lehocká', NULL, NULL, 'Bohumila', NULL, '13', '55', NULL, '1996-02-03', NULL, NULL, '509', NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-10-04 08:49:24'),
(50, '63727', '63727.jpg', NULL, 'Vítová', NULL, NULL, 'Dana', NULL, '18', '44', 'vitova@khn.cz', '1996-02-12', NULL, 'ffa200', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:14:28'),
(51, '60303', '60303.jpg', 'Bc.', 'Bělica', NULL, NULL, 'René', NULL, '17', '33', 'belica@khn.cz', '1996-03-01', NULL, 'ffee00', '106', '606763529', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2023-01-14 20:50:53'),
(53, '61405', '61405.jpg', NULL, 'Jedrzejek', NULL, NULL, 'Urszula', NULL, '23', '55', 'jedrzejek@khn.cz', '1996-10-15', NULL, 'a31561', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:17:22'),
(54, '64806', '64806.jpg', NULL, 'Zeman', NULL, NULL, 'Petr', NULL, '12', '9', NULL, '1997-02-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(55, '60804', '60804.jpg', 'Bc.', 'Trombalová', NULL, NULL, 'Hana', 'DiS.', '15', '35', 'trombalova@khn.cz', '1997-03-01', NULL, 'c90818', '174', '604375747', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:17:50'),
(57, '62204', '62204.jpg', NULL, 'Malcharová', NULL, NULL, 'Simona', NULL, '23', '55', 'malcharova@khn.cz', '1997-05-01', NULL, 'a31561', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:38:36'),
(58, '64505', '64505.jpg', 'MUDr.', 'Polášková', NULL, NULL, 'Urszula', NULL, '7', '12', NULL, '1997-09-01', NULL, '7833e8', '', '', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', NULL),
(59, '61209', '61209.jpg', NULL, 'Hlistová', NULL, NULL, 'Monika', NULL, '14', '36', NULL, '1997-10-01', NULL, 'a908c9', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-03-04 05:11:23'),
(60, '61830', '61830.jpg', NULL, 'Kořínková', NULL, NULL, 'Renáta', NULL, '11', '55', NULL, '1998-03-30', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-20 03:17:25'),
(61, '60103', '60103.jpg', NULL, 'Albrechtová', NULL, NULL, 'Hana', NULL, '7', '55', NULL, '1998-04-01', NULL, '7833e8', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(62, '60212', '60212.jpg', NULL, 'Bělocká', NULL, NULL, 'Romana', NULL, '7', '55', 'belocka@khn.cz', '1998-07-01', NULL, '7833e8', '560', '734643007', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:07:13'),
(63, '60208', '60208.jpg', NULL, 'Walicová', NULL, NULL, 'Kateřina', NULL, '28', '55', NULL, '1999-07-01', NULL, 'ffa600', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(64, '60204', '60204.jpg', 'MUDr.', 'Böhm', NULL, NULL, 'Marek', NULL, '6', '12', 'bohm@khn.cz', '1999-08-04', NULL, '7833e8', NULL, '724787369', 'Vydáno', 'N', 'DPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-09-20 08:47:33'),
(65, '61301', '61301.jpg', NULL, 'Bojková', NULL, NULL, 'Renáta', 'DiS.', '12', '5', NULL, '1999-09-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-20 03:02:42'),
(66, '63427', '63427.jpg', 'Mgr.', 'Syrový', NULL, NULL, 'Stanislav', NULL, '12', '9', NULL, '1999-09-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(67, '62004', '62004.jpg', NULL, 'Kucejová', NULL, NULL, 'Eva', NULL, '24', '37', NULL, '2000-01-14', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(68, '63006', '63006.jpg', NULL, 'Němečková', NULL, NULL, 'Simona', NULL, '4', '55', NULL, '2000-02-01', NULL, '4287f5', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2021-09-27 05:55:12'),
(69, '61607', '61607.jpg', NULL, 'Přibylová', NULL, NULL, 'Adriana', 'DiS.', '12', '9', NULL, '2000-08-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(70, '61801', '61801.jpg', NULL, 'Kokyová', NULL, NULL, 'Marcela', NULL, '18', '57', 'kokyova@khn.cz', '2001-05-02', NULL, 'ffa200', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:11:16'),
(71, '63815', '63815.jpg', NULL, 'Šebestová', NULL, NULL, 'Andrea', NULL, '18', '31', NULL, '2001-05-02', NULL, 'ffa200', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-03-03 11:36:47'),
(72, '63615', '63615.jpg', NULL, 'Smolková', NULL, NULL, 'Romana', NULL, '6', '55', 'smolkova@khn.cz', '2001-07-02', NULL, '7833e8', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:24:54'),
(73, '64301', '64301.jpg', NULL, 'Vaculíková', NULL, NULL, 'Ivana', NULL, '24', '37', NULL, '2001-07-18', NULL, '999999', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2021-02-25 09:25:04'),
(74, '61009', '61009.jpg', NULL, 'Valošková', NULL, NULL, 'Andrea', NULL, '8', '55', 'valoskova@khn.cz', '2001-09-03', NULL, 'd9fa05', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:16:22'),
(75, '63405', '63405.jpg', 'MUDr.', 'Krajnová', NULL, 'Samiecová', 'Pavla', NULL, '13', '12', 'krajnova@khn.cz', '2001-12-01', NULL, NULL, '504', '725669175', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:09:46'),
(76, '63413', '63413.jpg', NULL, 'Seberová', NULL, NULL, 'Iveta', NULL, '13', '55', NULL, '2002-01-01', NULL, '089cc9', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(77, '60601', '60601.jpg', 'MUDr.', 'Capková', NULL, NULL, 'Halina', NULL, '13', '12', 'capkova@khn.cz', '2002-02-01', '2022-06-13', NULL, '541', '724370844', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 03:03:29'),
(78, '61805', '61805.jpg', 'Bc.', 'Křístková', NULL, 'Křístková', 'Martina', NULL, '17', '13', 'kristkova@khn.cz', '2002-03-01', NULL, '222222', NULL, '602555685', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-08-08 08:27:57'),
(80, '61217', '61217.jpg', NULL, 'Hermanová', NULL, NULL, 'Lenka', NULL, '15', '55', NULL, '2002-06-01', NULL, 'c90818', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-17 09:31:06'),
(81, '60907', '60907.jpg', NULL, 'Folwarczná', NULL, NULL, 'Monika', NULL, '9', '55', NULL, '2002-06-17', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-17 09:29:35'),
(82, '62309', '62309.jpg', NULL, 'Cuperová', NULL, NULL, 'Veronika', NULL, '9', '55', NULL, '2002-07-01', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(83, '61506', '61506.jpg', 'MUDr.', 'Janiková', NULL, NULL, 'Eva', NULL, '9', '12', NULL, '2002-08-01', NULL, 'd9fa05', '423', '724229073', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2021-01-22 11:12:40'),
(84, '63416', '63416.jpg', 'MUDr.', 'Sýkora', NULL, NULL, 'Dušan', NULL, '8', '12', 'sykora@khn.cz', '2002-09-01', NULL, 'd9fa05', '143', '724228682', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 03:13:42'),
(85, '63213', '63213.jpg', NULL, 'Reitzová', NULL, NULL, 'Martina', NULL, '16', '55', NULL, '2002-09-02', NULL, '94f700', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-27 09:50:56'),
(86, '61720', '61720.jpg', NULL, 'Kurusová', NULL, NULL, 'Alexandra', NULL, '13', '55', NULL, '2002-10-02', NULL, '089cc9', '', '', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', NULL),
(87, '63818', '63818.jpg', NULL, 'Špičková', NULL, NULL, 'Darja', NULL, '1', '3', NULL, '2002-10-07', NULL, '4287f5', '223', NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-05-30 06:10:55'),
(89, '60329', '60329.jpg', 'MUDr.', 'Buzek', NULL, NULL, 'David', NULL, '8', '30', 'buzek@khn.cz', '2003-03-03', NULL, 'd9fa05', '456', '602459774', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:53:13'),
(90, '62414', '62414.jpg', 'MUDr.', 'Miškej', NULL, NULL, 'Marek', NULL, '8', '12', 'miskej@khn.cz', '2003-03-17', NULL, 'd9fa05', '412', '602526877', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:36:57'),
(91, '61020', '61020.jpg', NULL, 'Górniaková', NULL, NULL, 'Kateřina', NULL, '16', '55', 'gorniakova@khn.cz', '2003-05-01', NULL, '94f700', NULL, '602411637', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-09-20 09:36:20'),
(92, '61224', '61224.jpg', 'MUDr.', 'Hurtová', NULL, NULL, 'Šárka', NULL, '9', '12', 'hurtova@khn.cz', '2003-05-01', NULL, 'd9fa05', '423', '606685250', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:02:15'),
(93, '62715', '62715.jpg', 'Mgr.', 'Klenková', NULL, NULL, 'Veronika', NULL, '23', '55', NULL, '2003-07-01', NULL, 'a31561', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Mateřská', '2020-02-09 21:00:00', '2022-07-12 05:00:37'),
(94, '62328', '62328.jpg', 'Mgr.', 'Stulová', NULL, 'Martanová', 'Monika', 'DiS.', '12', '9', NULL, '2003-07-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-06-19 06:26:33'),
(95, '64311', '64311.jpg', NULL, 'Raszyková Vilhanová', NULL, NULL, 'Ivana', NULL, '12', '36', NULL, '2003-07-08', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-03-04 06:16:34'),
(97, '61026', 'no_image.png', 'MUDr.', 'Guňka', NULL, NULL, 'Josef', NULL, '28', '12', NULL, '2003-08-01', NULL, 'ffa600', '145', '602562055', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-11-14 05:17:50'),
(99, '60307', '60307.jpg', 'MUDr.', 'Blažík', NULL, NULL, 'Martin', NULL, '23', '12', 'blazik@khn.cz', '2003-09-01', NULL, 'a31561', '475', '602572711', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:48:58'),
(100, '61001', '61001.jpg', NULL, 'Gálová', NULL, NULL, 'Jitka', 'DiS.', '12', '5', NULL, '2003-09-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-20 03:02:58'),
(101, '60309', '60309.jpg', NULL, 'Bernatíková', NULL, NULL, 'Zuzana', NULL, '16', '47', 'bernatikova@khn.cz', '2003-09-18', NULL, '94f700', '151', '725669178', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2023-01-18 17:57:07'),
(102, '60320', '60320.jpg', NULL, 'Doffková', NULL, NULL, 'Zuzana', NULL, '30', '41', 'doffkova@khn.cz', '2003-10-20', NULL, 'a31561', '166', '732441640', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-08-04 03:55:44'),
(103, '61027', '61027.jpg', NULL, 'Grzybková', NULL, NULL, 'Jiřina', 'DiS.', '12', '5', NULL, '2003-11-03', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-20 03:04:51'),
(104, '60211', '60211.jpg', NULL, 'Betlachová', NULL, NULL, 'Ivana', NULL, '5', '55', 'betlachova@khn.cz', '2003-12-02', NULL, '4287f5', '225', '603814627', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:47:22'),
(106, '62219', '62219.jpg', NULL, 'Lukáčová', NULL, NULL, 'Ester', NULL, '23', '20', NULL, '2004-06-01', NULL, 'a31561', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(107, '63217', '63217.jpg', NULL, 'Rácová', NULL, NULL, 'Renáta', NULL, '19', '22', NULL, '2004-06-01', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(108, '62412', '62412.jpg', 'MUDr.', 'Dianovská', NULL, NULL, 'Anna', NULL, '1', '12', NULL, '2004-06-14', NULL, '4287f5', '', '', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', NULL),
(109, '61019', '61019.jpg', 'Mgr.', 'Gracová', NULL, NULL, 'Silvie', 'DiS.', '12', '9', NULL, '2021-01-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2021-01-21 06:46:38'),
(110, '63822', '63822.jpg', NULL, 'Štromajerová', NULL, NULL, 'Lenka', NULL, '19', '22', NULL, '2004-07-01', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(111, '62426', '62426.jpg', NULL, 'Mlčůchová', NULL, NULL, 'Jana', NULL, '9', '20', NULL, '2004-08-03', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(112, '60604', '60604.jpg', NULL, 'Čeřenská', NULL, NULL, 'Lenka', NULL, '8', '63', 'cerenska@khn.cz', '2004-09-01', NULL, 'd9fa05', NULL, '733500767', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-09-20 09:32:20'),
(113, '62009', '62009.jpg', NULL, 'Kolatková', NULL, NULL, 'Kateřina', NULL, '22', '7', NULL, '2004-09-01', NULL, '2c612a', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-17 08:44:50'),
(114, '61910', '61910.jpg', 'Mgr.', 'Kunzová', NULL, NULL, 'Jana', NULL, '29', '53', 'kunzova@khn.cz', '2004-09-01', NULL, '2c612a', '595390440', '724532273', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:44:03'),
(115, '62620', '62620.jpg', 'Ing.', 'Nováková', NULL, NULL, 'Jarmila', NULL, '17', '4', 'novakova@khn.cz', '2004-12-01', NULL, 'ffee00', '436', '724370891', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:32:27'),
(116, '64015', '64015.jpg', NULL, 'Tamášová', NULL, NULL, 'Alena', NULL, '19', '22', NULL, '2005-01-01', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(117, '62621', '62621.jpg', NULL, 'Nolčová', NULL, NULL, 'Kateřina', NULL, '9', '55', NULL, '2005-01-03', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-17 09:34:50'),
(118, '62818', '62818.jpg', 'MUDr.', 'Paciorek', NULL, NULL, 'Roman', NULL, '13', '12', NULL, '2005-04-01', NULL, '089cc9', '604', '724596078', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', NULL),
(119, '63622', '63622.jpg', 'Bc.', 'Szkwarová', NULL, NULL, 'Monika', NULL, '15', '35', NULL, '2005-04-01', NULL, 'c90818', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(120, '61316', '61316.jpg', 'MUDr.', 'Holomek', NULL, NULL, 'Karel', NULL, '9', '12', 'holomek@khn.cz', '2005-04-18', NULL, 'd9fa05', '427', '724513902', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 03:19:29'),
(121, '61724', '61724.jpg', NULL, 'Kozuszniková', NULL, NULL, 'Renáta', NULL, '6', '55', NULL, '2005-05-02', NULL, '7833e8', NULL, NULL, 'Vydáno', 'N', 'DPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-10-03 02:58:01'),
(123, '64501', '64501.jpg', NULL, 'Weber', NULL, NULL, 'Martin', NULL, '18', '61', 'weber@khn.cz', '2005-08-01', NULL, 'ffa200', '365', '602555681', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:11:26'),
(124, '60213', '60213.jpg', 'MUDr.', 'Bernacká', NULL, NULL, 'Janka', NULL, '5', '12', 'bernacka@khn.cz', '2005-09-01', NULL, '4287f5', '231', '725669161', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:46:38'),
(125, '61320', '61320.jpg', 'Mgr.', 'Svozilová', NULL, 'Strzelczoková', 'Dorota', NULL, '16', '55', 'svozilova@khn.cz', '2005-09-01', NULL, '94f700', NULL, '602411637', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:22:24'),
(126, '63819', '63819.jpg', NULL, 'Štveráková', NULL, 'Čermáková Jitka', 'Jitka', NULL, '28', '55', NULL, '2005-09-16', NULL, 'ffa600', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2021-01-18 07:24:22'),
(127, '64512', '64512.jpg', NULL, 'Hanzlová', NULL, 'Waloszková', 'Petra', NULL, '15', '55', NULL, '2005-10-01', NULL, 'c90818', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-17 09:31:28'),
(128, '60901', '60901.jpg', NULL, 'Febrová', NULL, NULL, 'Andrea', NULL, '12', '55', NULL, '2005-10-03', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(129, '63513', '63513.jpg', NULL, 'Majkráková', NULL, NULL, 'Věra', NULL, '9', '55', NULL, '2006-01-02', NULL, 'd9fa05', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-01-11 10:20:31'),
(130, '63501', '63501.jpg', NULL, 'Seberová', NULL, NULL, 'Jana', NULL, '12', '9', NULL, '2006-01-02', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(131, '61810', '61810.jpg', NULL, 'Kovalčíková', NULL, NULL, 'Lucie', NULL, '9', '55', NULL, '2006-02-01', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-07-02 07:01:09'),
(132, '61622', '61622.jpg', NULL, 'Kozáková', NULL, NULL, 'Šárka', NULL, '16', '55', NULL, '2006-02-01', NULL, '94f700', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-11-20 10:37:35'),
(134, '60528', '60528.jpg', NULL, 'Andrlová', NULL, NULL, 'Lenka', NULL, '13', '55', 'andrlova@khn.cz', '2006-03-01', NULL, NULL, NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:03:55'),
(135, '60210', '60210.jpg', NULL, 'Tomášková', NULL, NULL, 'Elena', 'DiS.', '7', '55', NULL, '2006-03-01', NULL, '7833e8', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-09-21 08:58:49'),
(136, '64513', '64513.jpg', 'Bc.', 'Wrožynová', NULL, NULL, 'Romana', NULL, '15', '35', NULL, '2006-03-01', NULL, 'c90818', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-17 08:06:09'),
(137, '61806', '61806.jpg', NULL, 'Zuskinová', NULL, NULL, 'Gabriela', NULL, '9', '55', NULL, '2006-03-01', NULL, 'd9fa05', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-11-02 08:45:24'),
(138, '61721', '61721.jpg', NULL, 'Kučerová', NULL, NULL, 'Ivana', NULL, '6', '3', 'kucerova@khn.cz', '2006-04-03', NULL, '7833e8', '115', '731129318', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:07:10'),
(139, '60227', '60227.jpg', NULL, 'Matisová', NULL, NULL, 'Michaela', NULL, '16', '55', NULL, '2006-07-01', NULL, '94f700', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(141, '63713', '63713.jpg', 'MUDr.', 'Jannová', NULL, NULL, 'Zuzana', NULL, '15', '12', 'jannova@khn.cz', '2006-09-01', NULL, 'c90818', '267', '724540013', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-09-21 02:41:17'),
(143, '60203', '60203.jpg', NULL, 'Bartková', NULL, NULL, 'Ester', NULL, '15', '55', NULL, '2006-10-02', NULL, 'c90818', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-03-10 12:09:03'),
(144, '63706', '63706.jpg', 'Mgr.', 'Stašíková', NULL, NULL, 'Lucie', NULL, '29', '6', 'stasikova@khn.cz', '2006-10-02', NULL, '2c612a', NULL, '606226672', 'Vydáno', 'N', 'DPČ', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-09-21 02:17:15'),
(145, '63710', '63710.jpg', 'MUDr.', 'Strakoš', NULL, NULL, 'Peter', NULL, '6', '12', NULL, '2007-01-01', '2022-06-01', '7833e8', '244', NULL, 'Vydáno', 'N', 'DPČ', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-07-04 07:02:19'),
(146, '61630', '61630.jpg', NULL, 'Kufová', NULL, NULL, 'Renáta', NULL, '26', '55', NULL, '2007-01-02', NULL, '4287f5', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-03-02 06:36:14'),
(147, '63722', '63722.jpg', NULL, 'Szeruda', NULL, NULL, 'Tomáš', NULL, '25', '39', 'szeruda@khn.cz', '2007-01-02', NULL, '999999', '430', '605773707', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-09-23 09:15:28'),
(148, '64502', '64502.jpg', NULL, 'Waloszková', NULL, NULL, 'Jadwiga', NULL, '12', '36', NULL, '2007-01-02', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(149, '64304', '64304.jpg', NULL, 'Černá', NULL, 'Vařechová', 'Radka', NULL, '23', '55', NULL, '2007-01-15', NULL, 'a31561', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Mateřská', '2020-02-09 21:00:00', '2021-10-07 08:28:33'),
(150, '60314', '60314.jpg', NULL, 'Brhel', NULL, NULL, 'Svatopluk', NULL, '25', '28', 'brhel@khn.cz', '2007-03-01', NULL, '999999', NULL, '603568468', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:52:37'),
(151, '60619', '60619.jpg', NULL, 'Čiernik', NULL, NULL, 'Lubomír', NULL, '25', '28', 'ciernik@khn.cz', '2007-03-01', NULL, '999999', NULL, '724151283', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 03:12:01'),
(152, '60916', '60916.jpg', NULL, 'Fierlová', NULL, NULL, 'Pavlína', NULL, '12', '9', 'fierlova@khn.cz', '2007-03-01', NULL, '66c908', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 03:14:41'),
(154, '61501', '61501.jpg', NULL, 'Javorková', NULL, NULL, 'Monika', NULL, '19', '22', NULL, '2007-03-01', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(156, '63728', '63728.jpg', NULL, 'Súkeníková', NULL, NULL, 'Marta', NULL, '13', '55', NULL, '2007-03-15', NULL, '089cc9', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(157, '61502', '61502.jpg', 'MUDr.', 'Janiková', NULL, NULL, 'Andrea', NULL, '9', '50', 'janikova@khn.cz', '2007-04-01', NULL, 'd9fa05', '423', '724474799', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:19:22'),
(158, '64509', '64509.jpg', NULL, 'Walková', NULL, NULL, 'Jarmila', NULL, '11', '55', NULL, '2007-04-01', '2020-08-31', '66c908', NULL, '725669180', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-09-21 02:24:58'),
(160, '62605', '62605.jpg', NULL, 'Nevřivá', NULL, NULL, 'Iva', NULL, '19', '22', NULL, '2007-05-15', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-03-11 10:58:00'),
(161, '61814', '61814.jpg', 'MUDr.', 'Kováčová', NULL, NULL, 'Šárka', NULL, '15', '12', 'kovacova@khn.cz', '2007-06-01', NULL, 'c90818', '267', '724358596', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:10:19'),
(162, '62515', '62515.jpg', NULL, 'Mravcová', NULL, NULL, 'Anna', NULL, '17', '17', NULL, '2007-06-01', NULL, 'ffee00', '429', '724596078', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-07-15 08:34:26'),
(163, '64514', '64514.jpg', NULL, 'Wernerová', NULL, NULL, 'Darina', NULL, '23', '55', NULL, '2007-07-01', NULL, 'a31561', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Mateřská', '2020-02-09 21:00:00', '2020-03-04 06:18:46'),
(164, '64516', '64516.jpg', NULL, 'Wojkowská', NULL, NULL, 'Žaneta', NULL, '18', '31', NULL, '2007-07-01', NULL, 'ffa200', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-03-03 11:36:38'),
(165, '63620', '63620.jpg', NULL, 'Vitulová', NULL, NULL, 'Zuzana', NULL, '23', '55', NULL, '2007-07-02', NULL, '7833e8', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-10 06:46:23'),
(166, '63421', '63421.jpg', 'Bc.', 'Múčková', NULL, NULL, 'Jana', NULL, '15', '35', NULL, '2007-08-01', NULL, 'c90818', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(167, '63223', '63223.jpg', 'MUDr.', 'Vlachopulu', NULL, NULL, 'Barbara', NULL, '6', '12', 'vlachopulu@khn.cz', '2007-08-01', NULL, '7833e8', NULL, '725669169', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-09-21 02:23:54'),
(168, '62509', '62509.jpg', NULL, 'Holušová', NULL, 'Čermáková', 'Marcela', NULL, '23', '55', 'holusova@khn.cz', '2007-08-15', NULL, 'a31561', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-07-12 09:16:26'),
(170, '61230', '61230.jpg', NULL, 'Hýblová', NULL, NULL, 'Kateřina', NULL, '6', '55', NULL, '2007-09-03', NULL, '7833e8', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Mateřská', '2020-02-09 21:00:00', '2022-04-12 02:56:38'),
(171, '60225', '60225.jpg', NULL, 'Bábanová', NULL, NULL, 'Lea', NULL, '12', '9', NULL, '2007-10-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-17 08:10:59'),
(173, '63410', '63410.jpg', NULL, 'Němcová', NULL, 'Sabinioková', 'Andrea', NULL, '12', '55', NULL, '2007-11-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2020-02-17 09:36:14'),
(175, '63523', '63523.jpg', NULL, 'Sikorová', NULL, NULL, 'Lubica', NULL, '19', '22', NULL, '2007-12-12', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(176, '61626', '61626.jpg', 'MUDr.', 'Klus', NULL, NULL, 'Ivo', NULL, '8', '12', 'klus@khn.cz', '2008-01-01', NULL, 'd9fa05', '412', '725543135', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:11:37'),
(177, '64419', '64419.jpg', 'MUDr.', 'Veselský', NULL, NULL, 'Petr', NULL, '8', '12', NULL, '2008-01-01', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', NULL),
(178, '62813', '62813.jpg', 'MUDr. Ing.', 'Paloušková', NULL, NULL, 'Hana', NULL, '6', '61', 'palouskova@khn.cz', '2008-02-01', NULL, '7833e8', '214', '734695213', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-10-17 08:54:48'),
(179, '64811', '64811.jpg', 'Bc.', 'Navrátilová', NULL, NULL, 'Petra', NULL, '9', '55', NULL, '2008-03-06', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(180, '61503', '61503.jpg', NULL, 'Jaklová', NULL, NULL, 'Pavlína', NULL, '18', '11', NULL, '2008-05-02', NULL, 'ffa200', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(181, '61524', '61524.jpg', NULL, 'Jeleń', NULL, NULL, 'Zdeněk', NULL, '17', '39', 'jelen@khn.cz', '2008-06-02', NULL, 'ffee00', '371', '724022598', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:16:54'),
(182, '60523', '60523.jpg', 'Bc.', 'Žwaková', NULL, 'Benková', 'Kateřina', NULL, '9', '55', NULL, '2008-07-01', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-08-13 05:51:50'),
(183, '62305', '62305.jpg', NULL, 'Máček', NULL, NULL, 'Daniel', NULL, '25', '40', NULL, '2008-07-01', NULL, '999999', '', '602459753', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2021-01-22 11:41:26'),
(184, '61109', '61109.jpg', NULL, 'Pawerová', NULL, NULL, 'Eva', NULL, '30', '55', NULL, '2008-07-07', NULL, 'a31561', NULL, '730547122', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-09-21 02:47:13'),
(185, '61118', '61118.jpg', NULL, 'Gabzdylová', NULL, NULL, 'Zdeňka', NULL, '16', '55', NULL, '2008-08-01', NULL, '94f700', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-03-04 06:40:57'),
(186, '61030', '61030.jpg', 'MUDr.', 'Groman', NULL, NULL, 'Petr', NULL, '28', '12', 'groman@khn.cz', '2008-08-01', NULL, 'ffa600', '416', '602317326', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 03:16:12'),
(187, '61826', '61826.jpg', 'MUDr.', 'Kozák', NULL, NULL, 'Martin', NULL, '28', '12', NULL, '2008-08-01', NULL, 'ffa600', '103', '602317341', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', NULL),
(188, '61730', '61730.jpg', 'MUDr.', 'Krempaský', NULL, NULL, 'Ondrej', NULL, '28', '12', 'krempasky@khn.cz', '2008-08-01', NULL, 'ffa600', '416', '602317315', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:08:36'),
(189, '63804', '63804.jpg', NULL, 'Kroczek', NULL, NULL, 'Gabriela', NULL, '7', '29', NULL, '2008-08-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-09-07 06:38:51'),
(190, '62405', '62405.jpg', NULL, 'Pavlásková', NULL, NULL, 'Pavla', NULL, '9', '55', NULL, '2008-08-01', NULL, 'd9fa05', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2021-08-06 06:18:24'),
(191, '62526', '62526.jpg', 'MUDr.', 'Mráček', NULL, NULL, 'Dalibor', NULL, '28', '12', 'mracek@khn.cz', '2008-08-01', NULL, 'ffa600', '416', '602317319', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:35:01'),
(192, '62828', '62828.jpg', 'Bc.', 'Zuskinová', NULL, 'Pánková', 'Kateřina', NULL, '9', '55', NULL, '2008-08-01', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-09-15 07:56:35'),
(193, '62826', '62826.jpg', 'MUDr.', 'Pavličný', NULL, NULL, 'Radek', NULL, '28', '30', 'pavlicny@khn.cz', '2008-08-01', NULL, 'ffa600', '413', '602317328', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:30:38'),
(194, '62815', '62815.jpg', 'MUDr.', 'Pešek', NULL, NULL, 'Jiří', NULL, '28', '12', 'pesek@khn.cz', '2008-08-01', NULL, 'ffa600', NULL, '602317302', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:30:12'),
(195, '63813', '63813.jpg', 'Bc.', 'Široká', NULL, NULL, 'Silvie', NULL, '12', '55', 'siroka@khn.cz', '2008-08-01', NULL, '66c908', '282', '725382723', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:19:07'),
(196, '64019', '64019.jpg', NULL, 'Tomčíková', NULL, NULL, 'Bronislava', NULL, '16', '55', NULL, '2008-08-01', NULL, '94f700', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-03-04 06:14:06'),
(197, '61612', '61612.jpg', NULL, 'Kneblová', NULL, NULL, 'Šárka', 'DiS.', '22', '7', NULL, '2008-09-01', NULL, '2c612a', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(198, '62313', '62313.jpg', NULL, 'Sendrei', NULL, 'Mimová', 'Sylva', NULL, '9', '20', NULL, '2008-09-01', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(199, '63229', '63229.jpg', NULL, 'Rykalová', NULL, NULL, 'Karla', NULL, '19', '22', NULL, '2008-09-01', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(200, '63527', '63527.jpg', 'Bc.', 'Szusciková', NULL, NULL, 'Eliška', NULL, '16', '55', NULL, '2008-09-01', NULL, '94f700', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2021-05-31 04:28:40'),
(201, '64816', '64816.jpg', 'MUDr.', 'Zvárová', NULL, NULL, 'Pavlína', NULL, '11', '30', 'zvarova@khn.cz', '2008-09-01', NULL, '66c908', '241', '725669174', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:08:28'),
(202, '60324', '60324.jpg', NULL, 'Byrtus', NULL, NULL, 'Boleslav', NULL, '15', '35', NULL, '2008-10-01', NULL, 'c90818', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2021-03-08 07:57:35'),
(203, '61523', '61523.jpg', 'MUDr.', 'Janková', NULL, NULL, 'Pavlína', NULL, '5', '12', 'jankova@khn.cz', '2008-10-01', NULL, '4287f5', '231', '725669162', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:18:08'),
(204, '61710', '61710.jpg', 'MUDr.', 'Kultan', NULL, NULL, 'Peter', NULL, '1', '30', 'kultan@khn.cz', '2008-10-01', NULL, '4287f5', '221', '725669163', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-07-28 12:24:05'),
(205, '63803', '63803.jpg', NULL, 'Stařičná', NULL, NULL, 'Denisa', NULL, '16', '55', NULL, '2008-10-08', NULL, '94f700', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(206, '62428', '62428.jpg', 'Mgr.', 'Mlýnková', NULL, 'Mitrengová', 'Ruth', NULL, '6', '10', 'mlynkova@khn.cz', '2008-12-01', '2019-07-25', '7833e8', '105', '703866582', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-09-21 02:11:26'),
(207, '60110', '60110.jpg', 'MUDr.', 'Adámková', NULL, NULL, 'Renáta', NULL, '9', '12', 'adamkova@khn.cz', '2009-01-01', NULL, 'd9fa05', '423', '725848645', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:03:26'),
(208, '62230', '62230.jpg', NULL, 'Lanči', NULL, NULL, 'Petr', NULL, '23', '55', NULL, '2009-01-02', NULL, 'a31561', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(209, '64528', '64528.jpg', NULL, 'Wiechećová', NULL, NULL, 'Martina', 'DiS.', '6', '55', NULL, '2009-01-19', NULL, '7833e8', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-03-27 07:39:19'),
(210, '61824', '61824.jpg', NULL, 'Klepek', NULL, NULL, 'Tomáš', NULL, '25', '28', 'klepek@khn.cz', '2009-02-01', NULL, '999999', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:12:51'),
(211, '64002', '64002.jpg', NULL, 'Takáčová', NULL, NULL, 'Vlasta', NULL, '19', '22', NULL, '2009-02-01', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(212, '61326', '61326.jpg', NULL, 'Hejnová', NULL, NULL, 'Alena', NULL, '8', '41', 'hejnova@khn.cz', '2009-04-01', NULL, 'd9fa05', '254', '604154554', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 03:17:16'),
(213, '61530', '61530.jpg', NULL, 'Janečková', NULL, NULL, 'Gabriela', NULL, '11', '47', 'janeckova@khn.cz', '2009-05-01', NULL, '66c908', '240', '602584395', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2023-01-23 14:55:02'),
(214, '60327', '60327.jpg', 'MUDr.', 'Sukopová', NULL, NULL, 'Kateřina', NULL, '15', '12', 'sukopova@khn.cz', '2009-07-01', NULL, 'c90818', NULL, '733711627', 'Vydáno', 'N', 'DPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-09-20 08:53:38'),
(218, '62517', '62517.jpg', 'MUDr.', 'Michalik', NULL, NULL, 'Daniel', NULL, '9', '12', NULL, '2009-10-01', NULL, 'd9fa05', '427', '606685251', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2021-01-22 11:41:56'),
(220, '64114', '64114.jpg', 'Bc.', 'Tchýrová', NULL, NULL, 'Lucie', NULL, '9', '55', NULL, '2009-10-05', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(221, '64328', '64328.jpg', NULL, 'Valchař', NULL, NULL, 'Zuzana', NULL, '23', '55', NULL, '2009-10-05', NULL, 'a31561', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2021-10-06 07:16:11'),
(222, '61025', '61025.jpg', NULL, 'Przybylová', NULL, 'Gutová', 'Gabriela', NULL, '28', '55', 'przybylova@khn.cz', '2010-01-01', NULL, 'ffa600', '119', '731147824', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:27:19'),
(223, '64319', '64319.jpg', 'Mgr.', 'Vajglová', NULL, NULL, 'Pavlína', NULL, '17', '13', 'vajglova@khn.cz', '2010-01-01', NULL, 'ffee00', '471', '725189423', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2023-01-20 23:47:49'),
(224, '60730', '60730.jpg', 'Mgr.', 'Drozdzik', NULL, NULL, 'Magdalena', NULL, '14', '65', NULL, '2010-01-04', NULL, 'a908c9', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-27 08:39:06'),
(225, '63210', '63210.jpg', NULL, 'Smolíková', NULL, NULL, 'Vlasta', NULL, '16', '55', NULL, '2010-02-01', NULL, '94f700', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2021-02-15 10:09:30'),
(226, '63521', '63521.jpg', NULL, 'Synková', NULL, NULL, 'Iveta', NULL, '18', '24', NULL, '2010-02-01', NULL, 'ffa200', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2021-04-16 04:36:53'),
(227, '64830', '64830.jpg', NULL, 'Žůrková', NULL, NULL, 'Adriana', NULL, '5', '55', NULL, '2010-02-08', NULL, '4287f5', NULL, '739522435', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-09-21 02:28:15'),
(228, '61203', '61203.jpg', 'MUDr.', 'Heroková', NULL, NULL, 'Jiřina', NULL, '27', '12', NULL, '2010-03-01', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', NULL),
(229, '61327', '61327.jpg', 'Mgr.', 'Chmielová', NULL, NULL, 'Romana', NULL, '6', '55', NULL, '2010-03-15', NULL, '7833e8', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(230, '63504', '63504.jpg', 'PharmDr.', 'Syrová', NULL, NULL, 'Monika', NULL, '22', '62', NULL, '2010-04-01', NULL, '2c612a', NULL, '724370843', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-07-01 04:56:03'),
(232, '60524', '60524.jpg', 'Bc.', 'Ciliová', NULL, NULL, 'Lenka', NULL, '6', '55', NULL, '2010-07-01', NULL, '7833e8', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-11-09 07:23:40'),
(233, '61719', '61719.jpg', 'Bc.', 'Rudolová', NULL, 'Kuboszková', 'Veronika', NULL, '15', '35', NULL, '2010-07-01', NULL, 'c90818', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Mateřská', '2020-02-09 21:00:00', '2020-03-04 06:04:28'),
(234, '62514', '62514.jpg', 'MUDr.', 'Mucha', NULL, NULL, 'Aleš', NULL, '9', '12', NULL, '2010-07-01', NULL, 'd9fa05', '427', '737818723', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2021-01-22 11:39:39'),
(235, '61123', '61123.jpg', 'Bc.', 'Pavlů', NULL, NULL, 'Veronika', NULL, '15', '35', NULL, '2010-07-01', NULL, 'c90818', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2021-01-22 11:00:43'),
(237, '64530', '64530.jpg', NULL, 'Wojnar', NULL, NULL, 'Jan', NULL, '16', '36', NULL, '2010-07-01', NULL, '94f700', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-03-04 06:19:41'),
(238, '62202', '62202.jpg', 'Mgr.', 'Malíková', NULL, NULL, 'Jana', NULL, '11', '9', NULL, '2010-07-15', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Mateřská', '2020-02-09 21:00:00', '2020-03-04 05:37:18'),
(239, '62504', '62504.jpg', NULL, 'Miturová', NULL, NULL, 'Dana', NULL, '12', '9', NULL, '2010-09-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(240, '62529', '62529.jpg', 'Mgr.', 'Mrázová', NULL, NULL, 'Andrea', NULL, '14', '61', 'mrazova@khn.cz', '2010-09-01', NULL, 'a908c9', '102', NULL, 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-07-28 12:24:52'),
(241, '63013', '63013.jpg', NULL, 'Protopsalti Robenková', 'Robenková', NULL, 'Zuzana', NULL, '5', '55', NULL, '2010-09-01', NULL, '4287f5', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-03-04 06:01:38'),
(242, '62821', '62821.jpg', 'Bc.', 'Krestová', NULL, NULL, 'Darina', NULL, '6', '55', NULL, '2010-10-15', NULL, '7833e8', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2021-09-16 02:49:06'),
(243, '64416', '64416.jpg', NULL, 'Volanská', NULL, NULL, 'Lydie', NULL, '19', '63', 'vedouci.uklidu@khn.cz', '2010-10-27', NULL, '999999', '292', '724370890', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:12:50'),
(244, '60410', '60410.jpg', 'Bc.', 'Bělicová', NULL, NULL, 'Taťána', NULL, '17', '17', NULL, '2010-11-01', NULL, 'ffee00', '443', '605830848', 'Vydáno', 'N', 'HPP', 3, 1, 'Aktivní', '2020-02-09 21:00:00', '2023-01-16 20:02:52'),
(245, '64529', '64529.jpg', 'Mgr.', 'Csíková', NULL, NULL, 'Jana', NULL, '23', '55', NULL, '2020-11-13', NULL, 'a31561', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2021-01-21 06:51:20'),
(246, '61402', '61402.jpg', NULL, 'Chylová', NULL, NULL, 'Halina', NULL, '9', '20', NULL, '2010-11-01', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(247, '64109', '64109.jpg', 'MUDr.', 'Twardzik', NULL, NULL, 'Januš', NULL, '28', '12', NULL, '2011-01-01', NULL, 'ffa600', '416', '732633696', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', NULL),
(248, '64521', '64521.jpg', NULL, 'Wratná', NULL, NULL, 'Barbara', NULL, '22', '7', NULL, '2011-01-01', NULL, '2c612a', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(249, '60913', '60913.jpg', NULL, 'Furendová', NULL, NULL, 'Eva', NULL, '19', '22', NULL, '2011-02-01', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(250, '63209', '63209.jpg', 'MUDr.', 'Rybarčíková', NULL, NULL, 'Renáta', NULL, '23', '12', 'rybarcikova@khn.cz', '2011-03-21', NULL, 'a31561', '221', '734643006', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:26:47'),
(252, '62607', '62607.jpg', 'MUDr.', 'Němeček', NULL, NULL, 'Ivo', NULL, '14', '12', NULL, '2011-04-01', NULL, 'a908c9', '', '', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2020-03-04 05:56:45'),
(253, '60415', '60415.jpg', NULL, 'Brončková', NULL, NULL, 'Hana', NULL, '15', '35', NULL, '2011-05-01', '2017-04-30', 'c90818', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(254, '63618', '63618.jpg', 'MUDr.', 'Sukop', NULL, NULL, 'Roman', NULL, '6', '30', 'sukop@khn.cz', '2011-08-01', NULL, '7833e8', '214', '723923599', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:23:11');
INSERT INTO `employees` (`id`, `personal_number`, `image`, `title_preffix`, `last_name`, `middle_name`, `married_name`, `first_name`, `title_suffix`, `department_id`, `job_id`, `email`, `start_date`, `end_date`, `comment`, `phone`, `mobile`, `id_card`, `coffee`, `employment`, `position`, `standard_signature`, `status`, `created_at`, `updated_at`) VALUES
(256, '62402', '62402.jpg', NULL, 'Machálková', NULL, NULL, 'Dagmar', NULL, '19', '22', NULL, '2011-09-01', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(257, '60113', '60113.jpg', NULL, 'Ambrožová', NULL, NULL, 'Rozália', NULL, '19', '22', NULL, '2011-10-26', NULL, '999999', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2021-03-05 08:06:04'),
(258, '61623', '61623.jpg', NULL, 'Kolarzová', NULL, NULL, 'Anna', NULL, '19', '22', NULL, '2011-11-01', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(259, '61309', '61309.jpg', NULL, 'Hlaváčová', NULL, NULL, 'Anna', NULL, '19', '22', NULL, '2011-11-28', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(260, '63702', '63702.jpg', NULL, 'Schwarzová', NULL, NULL, 'Bohdana', 'DiS.', '29', '7', NULL, '2012-01-01', NULL, '2c612a', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-18 06:36:17'),
(261, '62502', '62502.jpg', NULL, 'Mlotková', NULL, NULL, 'Pavlína', NULL, '9', '55', NULL, '2012-01-02', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(263, '61117', '61117.jpg', 'PharmDr.', 'Řezníková', NULL, 'Groborzová', 'Monika', NULL, '22', '53', 'reznikova@khn.cz', '2012-01-16', NULL, '2c612a', '602', '734792882', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:26:29'),
(264, '60205', '60205.jpg', NULL, 'Babičová', NULL, NULL, 'Darina', NULL, '23', '20', NULL, '2012-02-01', NULL, 'a31561', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(265, '61121', '61121.jpg', 'Mgr.', 'Gottwaldová', NULL, NULL, 'Dita', NULL, '22', '6', NULL, '2012-02-01', NULL, '2c612a', '', '725791521', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-27 10:09:30'),
(266, '61728', '61728.jpg', 'Bc.', 'Kunzová', NULL, NULL, 'Karin', NULL, '7', '55', 'kunzovak@khn.cz', '2012-02-01', NULL, '7833e8', NULL, '734792879', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-09-20 09:57:27'),
(267, '64805', '64805.jpg', 'MUDr.', 'Závodský', NULL, NULL, 'Igor', NULL, '28', '12', 'zavodsky@khn.cz', '2012-03-13', NULL, 'ffa600', '103', '734643003', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:09:30'),
(268, '60412', '60412.jpg', NULL, 'Bohušová', NULL, NULL, 'Drahomíra', NULL, '19', '22', NULL, '2012-05-01', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(270, '63316', '63316.jpg', 'Mgr.', 'Řezník', NULL, NULL, 'Roman', NULL, '22', '6', NULL, '2012-06-01', NULL, '2c612a', '', '602792227', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-03-04 04:38:30'),
(271, '63810', '63810.jpg', NULL, 'Staníčková', NULL, NULL, 'Věra', NULL, '18', '31', NULL, '2012-06-01', NULL, 'ffa200', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-03-03 11:36:31'),
(272, '60706', '60706.jpg', NULL, 'Dawidová', NULL, NULL, 'Lada', NULL, '18', '44', NULL, '2012-07-01', NULL, 'ffa200', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-09-06 08:52:06'),
(273, '61919', '61919.jpg', 'Mgr.', 'Tichá', NULL, NULL, 'Veronika', NULL, '14', '65', NULL, '2012-07-01', NULL, 'a908c9', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-27 08:58:18'),
(274, '61212', '61212.jpg', 'Ing.', 'Dadáková', NULL, NULL, 'Jana', NULL, '15', '35', NULL, '2012-08-01', NULL, 'c90818', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-07-28 09:40:17'),
(275, '60111', '60111.jpg', 'MUDr.', 'Argalášová', NULL, NULL, 'Gabriela', NULL, '9', '12', NULL, '2012-09-01', NULL, 'd9fa05', '423', '730188192', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2021-01-22 10:54:08'),
(276, '61717', '61717.jpg', NULL, 'Kozáková', NULL, NULL, 'Dagmar', NULL, '19', '22', NULL, '2012-09-01', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(278, '62403', '62403.jpg', NULL, 'Matysová', NULL, NULL, 'Jana', NULL, '23', '20', NULL, '2012-09-01', NULL, 'a31561', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(279, '64203', '64203.jpg', NULL, 'Urbančíková', NULL, NULL, 'Jana', NULL, '9', '55', NULL, '2012-09-01', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(280, '64506', '64506.jpg', 'Bc.', 'Mišíková', NULL, 'Wzatková', 'Lenka', NULL, '23', '55', NULL, '2012-09-01', NULL, 'a31561', NULL, NULL, 'Vydáno', 'N', 'DPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-08 05:19:21'),
(282, '60105', '60105.jpg', NULL, 'Adámková', NULL, NULL, 'Gabriela', NULL, '16', '55', NULL, '2013-02-01', NULL, '94f700', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-09-22 08:20:30'),
(286, '62413', '62413.jpg', 'MUDr.', 'Materna', NULL, NULL, 'Petr', NULL, '1', '12', 'materna@khn.cz', '2013-07-01', NULL, '4287f5', '226', '739522569', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:37:34'),
(287, '62520', '62520.jpg', NULL, 'Motyková', NULL, NULL, 'Lubomíra', NULL, '19', '22', NULL, '2013-07-01', '2017-06-30', '999999', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-27 09:42:44'),
(288, '64524', '64524.jpg', NULL, 'Weberová', NULL, NULL, 'Iveta', NULL, '24', '25', 'podatelna@khn.cz', '2013-07-01', NULL, '999999', '195', NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:11:13'),
(289, '62608', '62608.jpg', 'Mgr.', 'Polášková', NULL, NULL, 'Markéta', NULL, '12', '9', NULL, '2013-08-01', NULL, '66c908', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-07-07 05:42:00'),
(290, '61715', '61715.jpg', 'Ing.', 'Krucinová', NULL, NULL, 'Barbora', NULL, '15', '35', NULL, '2013-08-28', NULL, 'c90818', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-07-28 09:39:46'),
(292, '60602', '60602.jpg', NULL, 'Čapčíková', NULL, NULL, 'Petra', NULL, '17', '8', 'capcikova@khn.cz', '2013-10-01', NULL, 'ffee00', '434', NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 03:11:19'),
(294, '61609', '61609.jpg', 'MUDr.', 'Kempná', NULL, NULL, 'Jana', NULL, '13', '12', NULL, '2013-12-01', NULL, '089cc9', '503', '734690509', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', NULL),
(295, '64415', '64415.jpg', 'Ing.', 'Vojtěchovský', NULL, NULL, 'Tomáš', NULL, '25', '28', 'vojtechovsky@khn.cz', '2013-12-02', NULL, '999999', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:13:11'),
(296, '61802', '61802.jpg', NULL, 'Krečmerová', NULL, NULL, 'Jolana', NULL, '19', '22', NULL, '2013-12-11', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(297, '63230', '63230.jpg', NULL, 'Wenglorzová', NULL, NULL, 'Veronika', 'DiS.', '9', '55', NULL, '2014-01-03', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(299, '61325', '61325.jpg', NULL, 'Holubová', NULL, 'Hudečková', 'Lucie', 'DiS.', '9', '55', NULL, '2014-03-03', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-07-02 06:56:31'),
(300, '62314', '62314.jpg', NULL, 'Michalcová', NULL, NULL, 'Petra', 'DiS.', '10', '55', NULL, '2014-04-01', NULL, 'd9fa05', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2021-03-01 06:04:09'),
(301, '62404', '62404.jpg', NULL, 'Mazurková', NULL, NULL, 'Karla', NULL, '19', '22', NULL, '2014-05-01', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(303, '60214', '60214.jpg', 'MUDr.', 'Beran', NULL, NULL, 'Daniel', NULL, '1', '12', 'beran@khn.cz', '2014-06-01', NULL, '4287f5', '226', '607054676', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:07:36'),
(304, '64417', '64417.jpg', 'MUDr.', 'Vrtal', NULL, NULL, 'Jiří', NULL, '1', '12', 'vrtal@khn.cz', '2014-06-01', NULL, '4287f5', '226', '739522620', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:12:08'),
(305, '64527', '64527.jpg', 'Mgr.', 'Witoszová', NULL, NULL, 'Renáta', NULL, '12', '9', NULL, '2014-06-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-17 08:21:38'),
(306, '60506', '60506_21-01-2023.jpg', 'MUDr.', 'Canibal', NULL, NULL, 'Tomáš', NULL, '17', '38', 'canibal@khn.cz', '2014-07-01', NULL, 'ffee00', '441', '606789969', 'Vydáno', 'N', 'HPP', 1, 1, 'Aktivní', '2020-02-09 21:00:00', '2023-01-20 23:45:45'),
(307, '61505', '61505.jpg', 'Ing. Mgr.', 'Janko', NULL, NULL, 'Přemysl', NULL, '17', '52', 'janko@khn.cz', '2014-07-01', NULL, 'ffee00', '555', '724228989', 'Vydáno', 'N', 'ČSO', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:18:24'),
(308, '60903', '60903.jpg', NULL, 'Ferfecká', NULL, NULL, 'Anna', NULL, '19', '22', NULL, '2014-07-25', NULL, '999999', '', '', 'Vydáno', 'N', 'DPČ', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(309, '64809', '64809.jpg', 'MUDr.', 'Kocurová', NULL, NULL, 'Kamila', NULL, '6', '12', NULL, '2014-08-01', NULL, '7833e8', '202', '737609109', 'Vydáno', 'N', 'HPP', 999, 1, 'Mateřská', '2020-02-09 21:00:00', '2022-10-24 02:20:31'),
(310, '60908', '60908.jpg', 'Bc.', 'Gedleková', NULL, NULL, 'Alexandra', NULL, '28', '55', NULL, '2014-09-01', NULL, 'ffa600', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(311, '61329', '61329.jpg', NULL, 'Lasotová', NULL, 'Chybidziurová', 'Romana', 'DiS.', '14', '65', NULL, '2014-09-01', NULL, 'a908c9', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-27 08:58:33'),
(312, '62418', '62418.jpg', NULL, 'Miczková', NULL, NULL, 'Denisa', NULL, '8', '20', NULL, '2014-09-01', NULL, 'd9fa05', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-05-12 05:39:33'),
(314, '60912', '60912.jpg', 'MUDr.', 'Franek', NULL, NULL, 'Jerzy', NULL, '15', '12', NULL, '2014-11-01', NULL, 'c90818', '', '', 'Vydáno', 'N', 'DPČ', 999, 1, 'Aktivní', '2020-02-09 21:00:00', NULL),
(315, '61603', '61603.jpg', 'MUDr.', 'Šimáková', NULL, 'Kalusková', 'Ivana', NULL, '15', '12', NULL, '2014-11-01', NULL, 'c90818', '', '', 'Vydáno', 'N', 'DPČ', 999, 1, 'Mateřská', '2020-02-09 21:00:00', '2020-03-04 06:24:58'),
(316, '63825', '63825.jpg', 'MUDr.', 'Švecová', NULL, NULL, 'Jana', NULL, '15', '12', NULL, '2014-11-01', NULL, 'c90818', '', '', 'Vydáno', 'N', 'DPČ', 999, 1, 'Aktivní', '2020-02-09 21:00:00', NULL),
(317, '60616', '60616.jpg', NULL, 'Čermáková', NULL, NULL, 'Ivana', NULL, '19', '22', NULL, '2014-12-01', '2016-11-30', '999999', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(318, '60902', '60902.jpg', 'Bc.', 'Feberová', NULL, NULL, 'Monika', NULL, '9', '55', NULL, '2014-12-01', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(319, '64602', '64602.jpg', 'Bc.', 'Jakubcová', NULL, NULL, 'Lucie', NULL, '6', '55', NULL, '2014-12-01', NULL, '7833e8', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-05-05 06:30:41'),
(320, '60502', '60502.jpg', NULL, 'Canibal', NULL, NULL, 'Milan', NULL, '17', '30', 'mcanibal@khn.cz', '2015-01-01', NULL, 'ffee00', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-20 09:45:51'),
(321, '11136', '11136.jpg', 'Ing.', 'Machala', NULL, NULL, 'Stanislav', NULL, '15', '2', NULL, '2015-01-01', NULL, 'c90818', '', '', 'Vydáno', 'N', 'DPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-27 08:52:20'),
(323, '62822', '62822.jpg', NULL, 'Pawlusová', NULL, NULL, 'Gabriela', NULL, '6', '29', NULL, '2015-01-07', '2016-12-31', '7833e8', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(324, '62601', '62601.jpg', 'Mgr.', 'Mrózek', NULL, NULL, 'Agnieszka', NULL, '28', '55', NULL, '2015-01-15', NULL, 'ffa600', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-10 06:10:18'),
(325, '62814', '62814.jpg', NULL, 'Pauerová', NULL, NULL, 'Lenka', 'DiS.', '23', '55', 'pauerova@khn.cz', '2015-02-02', NULL, 'a31561', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:31:30'),
(326, '63827', '63827.jpg', NULL, 'Šafránková', NULL, NULL, 'Hana', NULL, '18', '27', NULL, '2015-02-02', '2018-07-31', 'ffa200', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-03-04 06:23:16'),
(327, '60922', '60922.jpg', 'MUDr.', 'Frydová', NULL, NULL, 'Kateřina', NULL, '15', '12', NULL, '2015-03-01', NULL, 'c90818', NULL, '730547122', 'Vydáno', 'N', 'HPP', 999, 1, 'Mateřská', '2020-02-09 21:00:00', '2022-09-21 02:36:59'),
(331, '62505', '62505.jpg', 'MUDr.', 'Mokroszová', NULL, NULL, 'Jana', NULL, '6', '12', NULL, '2015-03-21', NULL, '7833e8', '', '', 'Vydáno', 'N', 'DPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', NULL),
(333, '61718', '61718.jpg', 'MUDr.', 'Kopecká', NULL, NULL, 'Sylva', NULL, '5', '12', NULL, '2015-04-01', NULL, '4287f5', '', '', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2020-02-14 09:57:04'),
(334, '61412', 'no_image.png', 'MUDr.', 'Johannová', NULL, NULL, 'Irena', NULL, '6', '12', NULL, '2015-04-18', NULL, '7833e8', '', '', 'Vydáno', 'N', 'DPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-11-14 05:18:23'),
(336, '63806', '63806.jpg', 'Bc.', 'Slaná', NULL, NULL, 'Michaela', NULL, '23', '55', NULL, '2015-07-01', NULL, 'a31561', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Mateřská', '2020-02-09 21:00:00', '2020-03-04 06:07:40'),
(338, '61928', '61928.jpg', 'Mgr.', 'Szkanderová', NULL, 'Lepíková', 'Pavla', NULL, '22', '6', NULL, '2015-08-05', NULL, '2c612a', NULL, '739545625', 'Vydáno', 'N', 'HPP', 999, NULL, 'Mateřská', '2020-02-09 21:00:00', '2021-05-13 05:21:40'),
(339, '60708', '60708.jpg', 'MUDr.', 'Pinkasová', NULL, 'Diatková', 'Jana', NULL, '9', '12', 'diatkova@khn.cz', '2015-08-10', NULL, 'd9fa05', '423', '608435606', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:28:43'),
(340, '60304', '60304.jpg', NULL, 'Berešíková', NULL, NULL, 'Marcela', 'DiS.', '11', '29', 'beresikova@khn.cz', '2015-09-01', '2016-08-31', '66c908', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Mateřská', '2020-02-09 21:00:00', '2022-08-17 08:16:47'),
(341, '61511', '61511.jpg', 'MUDr.', 'Dadoková', NULL, 'Jelínková', 'Monika', NULL, '6', '12', NULL, '2015-09-01', NULL, '7833e8', '', '', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', NULL),
(342, '60516', '60516.jpg', NULL, 'Cieślová', NULL, NULL, 'Jana', NULL, '29', '36', NULL, '2015-10-01', '2016-09-30', '2c612a', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-03-04 04:54:10'),
(343, '63829', '63829.jpg', 'MUDr.', 'Škutová', NULL, NULL, 'Monika', NULL, '6', '12', 'skutova@khn.cz', '2015-10-26', NULL, '7833e8', NULL, NULL, 'Vydáno', 'N', 'DPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:18:47'),
(345, '62419', '62419.jpg', 'Bc.', 'Miczková', NULL, NULL, 'Veronika', NULL, '8', '55', NULL, '2015-11-02', '2016-10-31', 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(346, '60330', '60330.jpg', 'Mgr.', 'Boszczyková', NULL, NULL, 'Silvie', NULL, '29', '6', NULL, '2016-01-01', NULL, '2c612a', '', '730188193', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2021-01-22 11:43:32'),
(348, '60909', '60909.jpg', NULL, 'Havlová', NULL, NULL, 'Soňa', NULL, '12', '9', NULL, '2016-02-01', '2017-01-31', '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-17 08:15:31'),
(349, '61902', '61902.jpg', NULL, 'Kramná', NULL, NULL, 'Romana', NULL, '19', '22', NULL, '2016-03-01', '2017-02-28', '999999', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(350, '62527', '62527.jpg', 'Bc.', 'Hrivňáková', NULL, 'Mucinová', 'Veronika', NULL, '17', '46', 'mucinova@khn.cz', '2016-03-01', NULL, 'ffee00', NULL, '730188195', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-09-20 09:45:02'),
(351, '64210', '64210.jpg', 'Ing.', 'Uvírová', NULL, NULL, 'Martina', NULL, '17', '59', 'uvirova@khn.cz', '2016-03-14', '2017-02-28', 'ffee00', '444', '604447645', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:17:30'),
(352, '61625', '61625.jpg', NULL, 'Klika', NULL, NULL, 'Miroslav', NULL, '17', '66', 'klika@khn.cz', '2016-04-01', NULL, 'ffee00', '371', '739545626', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2023-01-21 11:33:16'),
(353, '61708', '61708.jpg', NULL, 'Kmeťová', NULL, NULL, 'Ema', NULL, '28', '20', NULL, '2016-04-01', NULL, 'ffa600', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(354, '64006', '64006.jpg', NULL, 'Tabarová', NULL, NULL, 'Renáta', NULL, '19', '22', NULL, '2016-04-01', '2019-03-31', '999999', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(355, '64823', '64823.jpg', NULL, 'Zbožínková', NULL, NULL, 'Kateřina', NULL, '12', '55', NULL, '2016-05-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-10-27 08:07:33'),
(356, '64018', '64018.jpg', NULL, 'Tomčániová', NULL, NULL, 'Karin', NULL, '3', '20', NULL, '2016-05-16', NULL, '4287f5', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-10-17 06:32:26'),
(357, '61314', '61314.jpg', NULL, 'Hracký', NULL, NULL, 'Jaroslav', NULL, '25', '62', 'hracky@khn.cz', '2016-06-01', NULL, '999999', '403', '734681961', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-09-23 09:16:29'),
(358, '60325', '60325.jpg', 'Ing.', 'Byrtusová', NULL, NULL, 'Silvie', NULL, '17', '54', 'byrtusova@khn.cz', '2016-06-01', NULL, 'ffee00', '426', '724228815', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:54:30'),
(359, '64427', '64427.jpg', NULL, 'Waloszková', NULL, NULL, 'Jana', NULL, '11', '36', NULL, '2016-06-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-20 03:16:10'),
(360, '63910', '63910.jpg', NULL, 'Šurková', NULL, NULL, 'Denisa', NULL, '19', '22', NULL, '2016-06-13', NULL, '999999', '', '', 'Vydáno', 'N', 'DPČ', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(361, '61616', '61616.jpg', NULL, 'Kaniová', NULL, NULL, 'Tereza', NULL, '1', '29', NULL, '2016-06-15', NULL, 'ffa600', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-02 02:37:07'),
(362, '63218', '63218.jpg', NULL, 'Raszyková', NULL, NULL, 'Halina', NULL, '5', '55', NULL, '2016-06-16', NULL, '4287f5', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-17 09:27:52'),
(363, '62913', '62913.jpg', 'Bc.', 'Pospíšilová', NULL, NULL, 'Kateřina', NULL, '15', '35', NULL, '2016-07-01', NULL, 'c90818', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Mateřská', '2020-02-09 21:00:00', '2022-04-06 02:34:34'),
(364, '62925', '62925.jpg', NULL, 'Puchalová', NULL, NULL, 'Uršula', NULL, '8', '55', NULL, '2016-07-01', NULL, 'ffa600', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2021-05-03 08:20:24'),
(365, '61323', '61323.jpg', NULL, 'Hudčeková', NULL, NULL, 'Monika', NULL, '17', '26', 'hudcekova@khn.cz', '2016-07-11', NULL, 'ffee00', NULL, '703866581', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:01:39'),
(366, '63901', '63901.jpg', NULL, 'Šerá', NULL, NULL, 'Natálie', NULL, '28', '29', NULL, '2016-08-17', NULL, 'ffa600', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(369, '62001', '62001.jpg', 'Mgr.', 'Ligocká', NULL, NULL, 'Zuzana', NULL, '14', '65', NULL, '2016-09-01', NULL, 'a908c9', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-03-03 10:18:43'),
(370, '60312', '60312.jpg', NULL, 'Bilanová', NULL, NULL, 'Alena', NULL, '23', '41', 'bilanova@khn.cz', '2016-10-01', NULL, 'a31561', '121', '734160802', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:48:00'),
(372, '61012', '61012.jpg', 'MUDr.', 'Grobelná', NULL, NULL, 'Hana', NULL, '6', '12', NULL, '2016-10-01', NULL, '7833e8', '202', '605295916', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', NULL),
(374, '61006', '61006.jpg', 'Bc.', 'Gavroňová', NULL, NULL, 'Petra', NULL, '12', '9', NULL, '2016-11-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-06-09 05:42:00'),
(375, '64402', '64402.jpg', NULL, 'Viktorová', NULL, NULL, 'Andrea', NULL, '11', '20', NULL, '2016-11-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-20 03:19:03'),
(376, '62610', '62610.jpg', NULL, 'Nawratová', NULL, NULL, 'Petra', 'DiS.', '9', '55', NULL, '2016-11-14', NULL, 'd9fa05', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2021-08-06 06:18:59'),
(377, '61521', '61521.jpg', NULL, 'Ježíšková', NULL, NULL, 'Dominika', 'DiS.', '18', '18', NULL, '2016-12-01', NULL, 'ffa200', NULL, '725344865', 'Vydáno', 'N', 'HPP', 999, NULL, 'Mateřská', '2020-02-09 21:00:00', '2022-09-21 02:42:06'),
(379, '60201', '60201.jpg', NULL, 'Barczoková', NULL, NULL, 'Gabriela', NULL, '6', '20', NULL, '2016-12-20', NULL, '7833e8', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-03-01 18:49:44'),
(380, '61111', '61111.jpg', NULL, 'Gřibová', NULL, NULL, 'Markéta', 'DiS.', '18', '18', 'gribova@khn.cz', '2017-01-02', NULL, 'ffa200', '361', '725344865', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 03:16:42'),
(381, '63807', '63807.jpg', NULL, 'Sznapková', NULL, NULL, 'Taťána', NULL, '15', '3', 'sznapkova@khn.cz', '2017-01-02', NULL, 'c90818', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:19:56'),
(383, '64522', '64522.jpg', 'Mgr.', 'Wróbel', NULL, 'Wilczková', 'Jana', NULL, '9', '55', NULL, '2017-02-01', NULL, 'd9fa05', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Mateřská', '2020-02-09 21:00:00', '2022-01-25 04:44:41'),
(384, '61822', '61822.jpg', 'MUDr.', 'Krajča', NULL, NULL, 'Jan', NULL, '15', '12', NULL, '2017-02-01', NULL, 'c90818', '', '', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2020-03-06 11:58:14'),
(385, '63906', '63906.jpg', NULL, 'Šimunková', NULL, NULL, 'Alexandra', NULL, '3', '36', NULL, '2017-02-15', NULL, '4287f5', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-04-14 07:38:11'),
(386, '60328', '60328.jpg', 'Mgr.', 'Budzińska', NULL, NULL, 'Dorota', NULL, '12', '9', NULL, '2017-03-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-17 09:25:49'),
(387, '61113', '61113.jpg', 'PharmDr.', 'Karpetová', NULL, NULL, 'Olga', NULL, '22', '6', 'karpetova@khn.cz', '2022-09-27', NULL, '2c612a', NULL, '725669165', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-10-04 06:22:45'),
(388, '63219', '63219.jpg', 'Bc.', 'Rigová', NULL, NULL, 'Magdalena', NULL, '12', '9', NULL, '2017-04-03', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-20 03:18:48'),
(389, '64211', '64211.jpg', 'MUDr.', 'Rychtová', NULL, 'Víchová', 'Helena', NULL, '15', '12', NULL, '2017-04-13', NULL, 'c90818', '', '', 'Vydáno', 'N', 'DPČ', 999, 1, 'Mateřská', '2020-02-09 21:00:00', '2020-03-04 06:04:35'),
(390, '60803', '60803.jpg', NULL, 'Entnerová', NULL, NULL, 'Dagmar', 'DiS.', '23', '55', NULL, '2012-03-01', NULL, '4287f5', '', '', 'Vydáno', 'N', 'DPČ', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-09-01 02:14:23'),
(391, '61311', '61311.jpg', NULL, 'Chobotová', NULL, NULL, 'Slavka', NULL, '19', '22', NULL, '2017-05-09', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(392, '63030', '63030.jpg', NULL, 'Przybylová', NULL, NULL, 'Barbara', NULL, '16', '20', NULL, '2017-05-15', NULL, '94f700', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(393, '61807', '61807.jpg', 'Bc.', 'Koudelová', NULL, NULL, 'Kateřina', NULL, '12', '9', NULL, '2017-06-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-17 09:25:28'),
(394, '61803', '61803.jpg', 'Ing.', 'Kolatková', NULL, NULL, 'Marina', NULL, '14', '30', 'kolatkova@khn.cz', '2017-06-01', NULL, 'a908c9', '183', '724829867', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-07-28 12:12:34'),
(396, '61621', '61621.jpg', NULL, 'Kocůrková', NULL, NULL, 'Anna', 'DiS.', '6', '29', NULL, '2017-06-14', NULL, '7833e8', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Mateřská', '2020-02-09 21:00:00', '2021-11-03 04:12:57'),
(397, '61619', '61619.jpg', 'Mgr.', 'Kalčíková', NULL, NULL, 'Miroslava', NULL, '12', '9', NULL, '2017-07-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-17 09:26:37'),
(398, '64424', '64424.jpg', 'MUDr.', 'Wajdová', NULL, NULL, 'Gabriela', NULL, '5', '12', 'wajdova@khn.cz', '2017-07-01', NULL, '4287f5', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:11:52'),
(399, '62924', '62924.jpg', NULL, 'Podracká', NULL, NULL, 'Albína', NULL, '28', '29', NULL, '2017-07-01', NULL, 'ffa600', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(400, '60413', '60413.jpg', NULL, 'Ciupová', NULL, 'Buławová', 'Miroslava', 'DiS.', '18', '18', NULL, '2017-07-03', NULL, 'ffa200', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Mateřská', '2020-02-09 21:00:00', '2020-03-04 04:54:24'),
(401, '62902', '62902.jpg', NULL, 'Plodková', NULL, NULL, 'Hana', NULL, '28', '20', NULL, '2017-07-10', NULL, 'ffa600', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(403, '60121', '60121.jpg', 'MUDr.', 'Togtokhjargal', NULL, NULL, 'Ariunjargal', NULL, '6', '12', NULL, '2017-07-15', NULL, '7833e8', '', '', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', NULL),
(404, '61909', '61909.jpg', 'MUDr.', 'Kučera', NULL, NULL, 'Josef', NULL, '1', '12', 'kucera@khn.cz', '2017-07-17', NULL, '4287f5', '226', '774905020', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:07:28'),
(405, '60801', '60801.jpg', 'Bc.', 'Ebert Drozdíková', 'Drozdíková', NULL, 'Eva', NULL, '5', '41', 'drozdikova@khn.cz', '2017-07-19', NULL, '4287f5', '291', '724238749', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-08-04 03:57:20'),
(407, '61711', '61711.jpg', NULL, 'Koplová', NULL, NULL, 'Lenka', NULL, '6', '20', NULL, '2017-08-01', NULL, '7833e8', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(409, '61705', '61705.jpg', 'Bc.', 'Koloničná', NULL, NULL, 'Renata', NULL, '14', '65', NULL, '2017-09-01', NULL, 'a908c9', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-27 08:58:41'),
(410, '61808', '61808.jpg', 'MUDr.', 'Klimszová', NULL, NULL, 'Kristýna', NULL, '27', '12', NULL, '2017-09-15', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', NULL),
(411, '64525', '64525.jpg', NULL, 'Wernerová', NULL, NULL, 'Nikola', 'DiS.', '8', '55', NULL, '2017-10-01', NULL, 'd9fa05', '254', NULL, 'Vydáno', 'N', 'DPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-03-09 07:51:35'),
(412, '61413', '61413.jpg', 'Bc.', 'Janová', NULL, NULL, 'Nikola', NULL, '1', '55', NULL, '2017-10-01', NULL, '4287f5', NULL, NULL, 'Vydáno', 'N', 'DPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-09-06 08:11:57'),
(413, '64822', '64822.jpg', NULL, 'Zábržová', NULL, NULL, 'Klára', NULL, '1', '55', NULL, '2017-10-01', NULL, '4287f5', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Mateřská', '2020-02-09 21:00:00', '2020-03-04 06:21:34'),
(415, '60301', '60301.jpg', NULL, 'Benešová', NULL, NULL, 'Blanka', NULL, '8', '55', NULL, '2017-10-02', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(416, '61526', '61526.jpg', NULL, 'Johnová', NULL, NULL, 'Michaela', NULL, '1', '29', NULL, '2017-11-01', NULL, '4287f5', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-03-04 06:31:21'),
(418, '64309', '64309.jpg', NULL, 'Vranová', NULL, NULL, 'Štěpánka', NULL, '5', '55', NULL, '2017-11-27', NULL, '4287f5', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(419, '64817', '64817.jpg', 'MUDr.', 'Zvarík', NULL, NULL, 'Pavol', NULL, '15', '12', 'zvarik@khn.cz', '2017-12-01', NULL, 'c90818', '267', '776376793', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:08:57'),
(420, '63907', '63907.jpg', NULL, 'Ščípová', NULL, NULL, 'Taťána', NULL, '4', '55', NULL, '2017-12-01', NULL, '4287f5', NULL, '731129320', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-09-21 02:20:35'),
(421, '60914', '60914.jpg', NULL, 'Figurová', NULL, NULL, 'Ivana', NULL, '24', '37', NULL, '2017-12-01', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(422, '61308', '61308.jpg', NULL, 'Hlubinová', NULL, NULL, 'Dagmar', NULL, '19', '22', NULL, '2022-04-07', NULL, '999999', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-04-07 05:34:58'),
(423, '60421', '60421.jpg', NULL, 'Bořutová', NULL, NULL, 'Marcela', NULL, '15', '35', NULL, '2017-12-19', NULL, 'c90818', '', '', 'Vydáno', 'N', 'DPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-03-10 12:09:15'),
(424, '62819', '62819.jpg', NULL, 'Palašová', NULL, NULL, 'Žaneta', NULL, '3', '55', NULL, '2017-12-27', NULL, '4287f5', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-04-14 07:38:38'),
(425, '63905', '63905.jpg', NULL, 'Šubová', NULL, NULL, 'Michaela', NULL, '24', '37', NULL, '2018-01-01', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(426, '60401', '60401.jpg', 'Mgr.', 'Bogocz', NULL, NULL, 'Danuta', NULL, '6', '10', NULL, '2018-01-01', NULL, '7833e8', '301', '724370845', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2021-02-22 06:47:10'),
(427, '60921', '60921.jpg', NULL, 'Frajkovský', NULL, NULL, 'Jakub', NULL, '18', '11', NULL, '2018-01-02', NULL, 'ffa200', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-27 08:55:42'),
(428, '61229', '61229.jpg', NULL, 'Hrozová', 'Nováková', NULL, 'Marcela', NULL, '19', '22', NULL, '2018-01-02', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2021-01-21 06:53:59'),
(429, '62524', '62524.jpg', NULL, 'Wilczek', NULL, NULL, 'Kateřina', NULL, '7', '3', 'wilczek@khn.cz', '2018-01-02', NULL, '222222', '315', NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:10:34'),
(430, '63227', '63227.jpg', NULL, 'Rucká', NULL, NULL, 'Veronika', NULL, '30', '29', NULL, '2018-01-02', NULL, '4287f5', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-04-06 05:49:57'),
(431, '62613', '62613.jpg', NULL, 'Nalewajková', NULL, NULL, 'Petra', NULL, '1', '20', NULL, '2018-01-17', NULL, '4287f5', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2021-09-13 02:33:44'),
(432, '60323', '60323.jpg', 'Bc.', 'Božovská', NULL, NULL, 'Petra', NULL, '9', '55', 'bozovska@khn.cz', '2018-02-01', NULL, 'd9fa05', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:51:56'),
(433, '63425', '63425.jpg', NULL, 'Skořepová', NULL, NULL, 'Adéla', NULL, '6', '20', NULL, '2018-02-01', NULL, '7833e8', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-04-01 09:58:12'),
(434, '62908', '62908.jpg', 'Bc.', 'Paszová', NULL, NULL, 'Dominika', NULL, '28', '55', NULL, '2018-03-01', NULL, 'ffa600', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-09-01 05:20:39'),
(435, '62716', '62716.jpg', NULL, 'Kawková', NULL, NULL, 'Kateřina', NULL, '6', '20', NULL, '2018-03-01', NULL, '7833e8', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(438, '61213', '61213.jpg', NULL, 'Holomková', NULL, NULL, 'Markéta', NULL, '11', '55', NULL, '2018-05-07', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-20 03:17:59'),
(439, '62927', '62927.jpg', NULL, 'Pružinská', NULL, NULL, 'Gabriela', NULL, '15', '3', NULL, '2018-05-21', NULL, 'c90818', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-17 09:37:42'),
(440, '63912', '63912.jpg', 'MUDr.', 'Šupšáková', NULL, NULL, 'Petra', 'MBA, LL.M.', '15', '12', 'supsakova@khn.cz', '2018-06-01', NULL, 'c90818', '267', '724001217', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:18:18'),
(444, '63609', '63609.jpg', 'Bc.', 'Slobodová', NULL, NULL, 'Helena', NULL, '23', '55', NULL, '2018-07-02', NULL, 'a31561', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(445, '63913', '63913.jpg', NULL, 'Štajnerová', NULL, NULL, 'Hana', NULL, '5', '20', NULL, '2018-08-01', NULL, '4287f5', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-10 06:11:55'),
(447, '62508', '62508.jpg', NULL, 'Mlotková', NULL, NULL, 'Kateřina', NULL, '15', '55', NULL, '2018-08-01', NULL, 'c90818', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(448, '63411', '63411.jpg', 'MUDr.', 'Kubináková', NULL, 'Sembolová', 'Pavlína', NULL, '1', '12', NULL, '2018-08-01', NULL, '4287f5', '', '', 'Vydáno', 'N', 'HPP', 999, 1, 'Mateřská', '2020-02-09 21:00:00', '2020-03-04 05:30:16'),
(449, '60424', '60424.jpg', NULL, 'Brzósková', NULL, NULL, 'Romana', NULL, '15', '3', NULL, '2018-08-01', NULL, 'c90818', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-17 09:37:26'),
(450, '61330', '61330.jpg', NULL, 'Chmiel', NULL, NULL, 'Adam', 'DiS.', '1', '47', 'chmiel@khn.cz', '2018-08-01', NULL, '4287f5', '222', '734695208', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2023-01-25 06:24:51'),
(452, '61129', '61129.jpg', NULL, 'Herdová', NULL, NULL, 'Hana', NULL, '1', '55', NULL, '2018-09-01', NULL, '4287f5', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Mateřská', '2020-02-09 21:00:00', '2021-11-03 04:13:52'),
(453, '61821', '61821.jpg', 'Bc.', 'Jastrzembská', NULL, NULL, 'Barbora', NULL, '11', '55', NULL, '2018-09-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-20 03:18:17'),
(455, '63914', '63914.jpg', 'Bc.', 'Nawrat', NULL, 'Šostoková', 'Simona', NULL, '9', '55', NULL, '2018-09-03', NULL, 'd9fa05', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-07-21 09:06:48'),
(456, '64612', '64612.jpg', NULL, 'Zátopková', NULL, NULL, 'Vladislava', NULL, '1', '20', NULL, '2018-09-03', NULL, '4287f5', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(457, '64827', '64827.jpg', 'Ing.', 'Zwierzyna', NULL, NULL, 'Miriam', NULL, '15', '35', NULL, '2018-09-03', NULL, 'c90818', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(458, '61303', 'no_image.png', 'MUDr.', 'Horáková', NULL, NULL, 'Jana', NULL, '6', '12', NULL, '2018-09-03', NULL, '7833e8', '', '', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-11-14 05:18:04'),
(459, '64320', '64320.jpg', 'Ing.', 'Vajglová', NULL, NULL, 'Sára', NULL, '17', '65', 'vajglovas@khn.cz', '2018-09-10', NULL, 'ffee00', '442', '736260206', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2023-01-20 23:48:33'),
(460, '61908', '61908.jpg', 'MUDr.', 'Kusová', NULL, NULL, 'Jana', NULL, '13', '30', 'kusovaj@khn.cz', '2018-10-01', NULL, NULL, '501, 531', '724049924', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:40:57'),
(462, '62220', '62220.jpg', NULL, 'Gruszkowská', NULL, NULL, 'Marcela', NULL, '23', '55', NULL, '2018-10-01', NULL, 'a31561', '', '', 'Vydáno', 'N', 'DPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(464, '62408', '62408.jpg', NULL, 'Orságová', NULL, NULL, 'Marcela', NULL, '5', '63', NULL, '2018-11-01', NULL, '7833e8', '228, 229', NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-05-31 04:48:57'),
(465, '63409', '63409.jpg', 'Bc.', 'Smrčková', NULL, NULL, 'Sandra', NULL, '14', '65', NULL, '2018-11-01', NULL, 'a908c9', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Mateřská', '2020-02-09 21:00:00', '2023-01-14 20:45:55'),
(466, '62218', '62218.jpg', NULL, 'Linkovová', NULL, NULL, 'Šárka', NULL, '19', '22', NULL, '2018-11-23', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(467, '60123', '60123.jpg', NULL, 'Badurová', NULL, NULL, 'Lenka', NULL, '19', '22', NULL, '2018-11-28', NULL, '999999', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-10 08:29:29'),
(468, '61906', '61906.jpg', NULL, 'Klimánková', NULL, NULL, 'Jana', NULL, '28', '55', NULL, '2018-12-01', NULL, 'ffa600', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(469, '63106', '63106.jpg', NULL, 'Pukowiecová', NULL, NULL, 'Monika', NULL, '11', '36', NULL, '2018-12-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-20 03:15:41'),
(470, '61414', '61414.jpg', 'MUDr.', 'Kollerová', NULL, NULL, 'Eliška', NULL, '12', '12', 'kollerova@khn.cz', '2019-01-01', NULL, '66c908', NULL, '725669180', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-10-26 06:32:23'),
(471, '60926', '60926.jpg', NULL, 'Fúčelová', NULL, NULL, 'Dagmar', NULL, '6', '20', NULL, '2019-01-02', NULL, '7833e8', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(472, '63908', '63908.jpg', 'Bc.', 'Šilingová', NULL, NULL, 'Petra', NULL, '6', '55', NULL, '2019-01-02', NULL, '7833e8', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-07-08 02:08:33'),
(473, '63729', '63729.jpg', 'Bc.', 'Sydorová', NULL, NULL, 'Hana', NULL, '9', '55', NULL, '2019-01-02', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(475, '60612', '60612.jpg', NULL, 'Chrzaszczová', NULL, NULL, 'Adéla', 'DiS.', '28', '55', NULL, '2019-01-08', NULL, 'ffa600', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(476, '63915', '63915.jpg', NULL, 'Szkutová', NULL, NULL, 'Jana', NULL, '6', '55', NULL, '2019-01-10', NULL, '7833e8', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(477, '62911', '62911.jpg', 'Bc.', 'Mühldorfová', NULL, NULL, 'Daniela', NULL, '20', '55', NULL, '2019-01-16', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2021-03-09 09:28:02'),
(480, '61415', '61415.jpg', NULL, 'Jaworková', NULL, NULL, 'Dagmar', NULL, '19', '22', NULL, '2019-03-01', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(481, '64821', '64821.jpg', 'Bc.', 'Havlíčková', NULL, NULL, 'Krystyna', NULL, '23', '55', NULL, '2019-03-11', NULL, 'a31561', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(482, '61128', '61128.jpg', 'Mgr.', 'Hanusková', NULL, NULL, 'Zdenka', NULL, '24', '37', NULL, '2019-03-12', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-03-04 07:38:26'),
(483, '61904', '61904.jpg', NULL, 'Králová', NULL, NULL, 'Lucie', NULL, '9', '55', 'kralova@khn.cz', '2019-04-01', NULL, 'd9fa05', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:09:25'),
(485, '62728', '62728.jpg', 'Bc.', 'Kociánová', NULL, NULL, 'Eva', NULL, '1', '55', NULL, '2019-05-01', NULL, '4287f5', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(486, '62008', '62008.jpg', NULL, 'Koĺatková', NULL, NULL, 'Kateřina', NULL, '1', '55', NULL, '2019-05-01', NULL, '4287f5', '183', '724829867', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(487, '61014', '61014.jpg', NULL, 'Glatzová', NULL, NULL, 'Blanka', NULL, '1', '55', NULL, '2019-05-01', NULL, '4287f5', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(489, '61105', '61105.jpg', NULL, 'Grunzová', NULL, NULL, 'Růžena', NULL, '19', '22', NULL, '2019-05-27', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(490, '62722', '62722.jpg', NULL, 'Ondreášová', NULL, NULL, 'Jana', NULL, '24', '37', NULL, '2019-06-03', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-03-04 07:38:20'),
(492, '60223', '60223.jpg', NULL, 'Bartošová', NULL, NULL, 'Kateřina', 'DiS.', '6', '55', NULL, '2019-07-01', NULL, '7833e8', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2021-09-14 06:45:17'),
(496, '61829', '61829.jpg', 'MUDr.', 'Krejsa', NULL, NULL, 'Vojtěch', NULL, '11', '12', 'krejsa@khn.cz', '2019-08-01', NULL, '66c908', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:08:58'),
(498, '61126', '61126.jpg', NULL, 'Hnyk', NULL, NULL, 'Jaroslav', NULL, '6', '29', NULL, '2019-09-02', NULL, '7833e8', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(500, '61416', '61416.jpg', 'MUDr.', 'Holubová', NULL, NULL, 'Michaela', NULL, '6', '12', NULL, '2019-10-01', NULL, '7833e8', NULL, '725669170', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2022-09-07 05:08:02'),
(501, '60930', '60930.jpg', 'Bc.', 'Gallusová', NULL, NULL, 'Karin', NULL, '6', '55', NULL, '2019-10-01', NULL, '7833e8', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-03 04:23:25'),
(502, '60701', '60701.jpg', 'MUDr.', 'Daniel', NULL, NULL, 'Filip', NULL, '28', '12', NULL, '2019-10-01', NULL, 'ffa600', '', '', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-09 21:00:00', '2020-03-04 04:57:41'),
(504, '64323', '64323.jpg', NULL, 'Valicová', NULL, NULL, 'Lenka', NULL, '11', '36', NULL, '2019-11-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-20 03:19:43'),
(505, '60622', '60622.jpg', 'Mgr.', 'Czempielová', NULL, NULL, 'Jana', NULL, '28', '55', NULL, '2019-11-01', NULL, 'ffa600', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(506, '63919', '63919.jpg', NULL, 'Ščípa', NULL, NULL, 'Roman', NULL, '22', '41', NULL, '2019-12-02', NULL, '2c612a', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2021-01-18 08:55:52'),
(508, '61828', '61828.jpg', NULL, 'Kozáková', NULL, NULL, 'Renáta', NULL, '7', '36', NULL, '2019-12-12', NULL, '7833e8', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-18 03:54:57'),
(509, '62015', '62015.jpg', NULL, 'Kocajanidisová', NULL, NULL, 'Ladislava', NULL, '6', '29', NULL, '2019-12-16', NULL, '7833e8', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(510, '62727', '62727.jpg', NULL, 'Oslizloková', NULL, NULL, 'Lenka', NULL, '24', '37', NULL, '2020-01-02', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-19 17:42:43'),
(511, '60623', '60623.jpg', NULL, 'Czyžová', NULL, NULL, 'Pavlína', NULL, '19', '22', NULL, '2020-01-25', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', NULL),
(512, '61215', '61215.jpg', NULL, 'Horká', NULL, NULL, 'Marie', NULL, '15', '35', NULL, '2000-01-01', NULL, 'c90818', '', '', 'Vydáno', 'N', 'DPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-02-20 03:28:01'),
(516, '60219', '60219.jpg', 'Bc.', 'Bernatíková', NULL, NULL, 'Hana', NULL, '23', '55', NULL, '2020-02-01', NULL, 'a31561', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2021-01-14 04:34:45'),
(518, '61419', '61419.jpg', NULL, 'Halčáková', NULL, NULL, 'Jaroslava', NULL, '23', '55', NULL, '2018-06-13', NULL, 'a31561', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-17 08:55:23', '2020-02-18 07:07:23'),
(519, '60102', '60102.jpg', 'MUDr.', 'Adamová', NULL, NULL, 'Andrea', NULL, '9', '12', NULL, '2019-11-01', NULL, 'd9fa05', '423', '604153029', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-18 03:20:27', '2022-11-17 16:45:37'),
(521, '63613', '63613.jpg', 'MUDr.', 'Solák', NULL, NULL, 'Marek', NULL, '28', '12', 'solak@khn.cz', '2020-02-01', NULL, 'ffa600', '145', '607156597', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-18 03:42:31', '2022-08-22 09:52:02'),
(522, '62016', '62016.jpg', 'MUDr.', 'Kantor', NULL, NULL, 'Ivo', NULL, '28', '12', 'kantor@khn.cz', '2020-02-01', NULL, 'ffa600', '145', '603370305', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-18 03:43:29', '2022-06-13 05:15:00'),
(523, '60130', '60130.jpg', 'MUDr.', 'Blahut', NULL, NULL, 'Jan', NULL, '28', '12', 'blahut@khn.cz', '2020-02-01', NULL, 'ffa600', '145', '774088790', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-18 03:44:14', '2022-06-13 02:48:42'),
(524, '60128', '60128.jpg', 'MUDr.', 'Barabas', NULL, NULL, 'Peter', NULL, '28', '12', 'barabas@khn.cz', '2020-02-01', NULL, 'ffa600', '145', '703866577', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-02-18 03:45:20', '2022-06-13 02:06:15'),
(526, '62322', '62322.jpg', NULL, 'Mašlár', NULL, NULL, 'Petr', NULL, '25', '28', 'maslar@khn.cz', '2020-02-03', NULL, '999999', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-18 03:48:21', '2022-06-13 02:38:18'),
(527, '64610', '64610.jpg', NULL, 'Zagrapanová', NULL, NULL, 'Eva', NULL, '8', '55', NULL, '2020-02-03', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-18 03:52:43', '2020-02-18 03:52:43'),
(528, '63520', '63520.jpg', NULL, 'Sobociková', NULL, NULL, 'Lucie', NULL, '9', '55', NULL, '2020-02-03', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-18 03:53:57', '2020-02-18 03:53:57'),
(529, '60408', '60408.jpg', NULL, 'Billová', NULL, NULL, 'Kateřina', NULL, '16', '55', NULL, '2020-02-01', NULL, '94f700', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-18 03:59:15', '2022-04-07 05:50:53'),
(530, '60107', '60107.jpg', NULL, 'Állóová', NULL, NULL, 'Tatiana', NULL, '8', '55', NULL, '2020-02-01', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-18 04:00:31', '2020-02-18 04:00:31'),
(531, '64403', '64403.jpg', NULL, 'Vlčnovská', NULL, NULL, 'Ivana', NULL, '28', '55', NULL, '2020-02-01', NULL, 'ffa600', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-18 04:01:30', '2020-03-02 08:19:03'),
(532, '62427', '62427.jpg', NULL, 'Minarčíková', NULL, NULL, 'Alexandra', NULL, '28', '55', NULL, '2020-02-01', NULL, 'ffa600', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-18 04:03:11', '2020-02-18 04:03:11'),
(535, '61812', '61812.jpg', NULL, 'Knyblová', NULL, NULL, 'Marie', NULL, '18', '11', NULL, '2020-01-02', NULL, 'ffa200', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-18 04:12:41', '2020-02-27 08:54:09'),
(537, '63921', '63921.jpg', NULL, 'Šebestová', NULL, NULL, 'Marie', NULL, '11', '55', NULL, '2020-02-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-03-02 08:11:57'),
(541, '62710', '62710.jpg', NULL, 'Olszarová', NULL, NULL, 'Eva', NULL, '19', '22', NULL, '2020-02-03', NULL, '999999', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2021-03-17 11:02:19'),
(542, '62523', '62523.jpg', NULL, 'Musiolková', NULL, NULL, 'Dana', NULL, '1', '55', NULL, '2020-02-01', NULL, '4287f5', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Mateřská', '2020-02-09 21:00:00', '2022-11-14 05:41:44'),
(543, '62521', '62521.jpg', NULL, 'Moravcová', NULL, NULL, 'Zdeňka', NULL, '19', '22', NULL, '2020-02-01', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-03-02 07:54:25'),
(545, '62510', '62510.jpg', NULL, 'Moravčinská', NULL, NULL, 'Ivana', NULL, '18', '18', 'moravcinska@khn.cz', '2020-02-01', NULL, 'ffa200', '361', '724829875', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:36:08'),
(555, '61119', '61119.jpg', NULL, 'Grígerová', NULL, NULL, 'Lenka', NULL, '10', '3', 'grigerova@khn.cz', '2020-03-02', NULL, 'd9fa05', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-03-02 06:13:57', '2022-06-13 03:15:56'),
(562, '62107', '62107.jpg', NULL, 'Krkošková', NULL, NULL, 'Kristina', NULL, '28', '55', NULL, '2020-03-02', NULL, 'ffa600', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-03-03 08:14:32', '2020-03-05 08:00:24');
INSERT INTO `employees` (`id`, `personal_number`, `image`, `title_preffix`, `last_name`, `middle_name`, `married_name`, `first_name`, `title_suffix`, `department_id`, `job_id`, `email`, `start_date`, `end_date`, `comment`, `phone`, `mobile`, `id_card`, `coffee`, `employment`, `position`, `standard_signature`, `status`, `created_at`, `updated_at`) VALUES
(563, '60830', '60830.jpg', 'MUDr.', 'Filuś', NULL, NULL, 'Dominika', NULL, '28', '12', 'filus@khn.cz', '2020-03-02', NULL, 'ffa600', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-03-03 08:15:48', '2022-06-13 03:15:17'),
(569, '62909', '62909.jpg', NULL, 'Polačková', NULL, NULL, 'Markéta', NULL, '15', '55', NULL, '2020-05-04', NULL, 'c90818', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-04-30 03:17:51', '2021-03-08 07:56:42'),
(571, '64613', '64613.jpg', NULL, 'Zarubanová', NULL, NULL, 'Pavlína', NULL, '8', '20', NULL, '2020-06-01', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-05-12 06:23:09', '2020-06-01 04:31:37'),
(573, '60715', '60715.jpg', 'MUDr.', 'Dlabaja', NULL, NULL, 'Petr', NULL, '28', '12', 'dlabaja@khn.cz', '2020-06-01', NULL, 'ffa600', '145', '778140086', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-06-01 04:22:49', '2022-07-28 12:28:30'),
(575, '61421', '61421.jpg', 'Bc.', 'Hájková', NULL, NULL, 'Kateřina', NULL, '12', '9', NULL, '2020-07-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-06-15 08:48:42', '2020-07-03 02:17:31'),
(578, '60827', '60827.jpg', NULL, 'Buščíková', NULL, 'Gellnarová', 'Lucie', NULL, '8', '55', NULL, '2020-07-01', NULL, 'd9fa05', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-06-23 07:56:10', '2021-08-26 08:09:59'),
(579, '60716', '60716.jpg', 'Bc.', 'Dlugošová', NULL, NULL, 'Denisa', NULL, '12', '9', NULL, '2020-07-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-07-01 04:36:33', '2020-07-01 04:36:33'),
(584, '63925', '63925.jpg', NULL, 'Škorvanová', NULL, NULL, 'Jaroslava', NULL, '19', '22', NULL, '2020-08-03', NULL, '999999', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-08-05 05:41:47', '2021-07-30 02:44:08'),
(585, '63108', '63108.jpg', NULL, 'Putniorzová', NULL, NULL, 'Dana', NULL, '19', '22', NULL, '2020-08-10', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-08-13 02:23:56', '2020-08-13 02:23:56'),
(586, '63612', '63612.jpg', NULL, 'Smolková', NULL, NULL, 'Veronika', NULL, '6', '20', NULL, '2020-09-01', NULL, '7833e8', '212', '725669172', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-08-13 02:25:41', '2020-09-01 02:15:15'),
(588, '64504', '64504.jpg', NULL, 'Wardasová', NULL, NULL, 'Beata', NULL, '28', '55', NULL, '2020-09-01', NULL, 'ffa600', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-08-31 04:40:46', '2021-01-27 09:57:22'),
(589, '64715', '64715.jpg', NULL, 'Zientková', NULL, NULL, 'Barbora', NULL, '6', '20', NULL, '2020-09-01', NULL, '7833e8', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-09-01 02:48:16', '2020-10-08 07:35:18'),
(591, '61424', '61424.jpg', 'MUDr.', 'Hrabovská', NULL, NULL, 'Barbora', NULL, '1', '12', 'hrabovska@khn.cz', '2020-09-01', NULL, '4287f5', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2020-09-01 05:34:47', '2022-06-13 03:22:35'),
(593, '62808', '62808.jpg', 'Bc.', 'Pechová', NULL, NULL, 'Kristýna', NULL, '16', '55', NULL, '2020-09-08', '2021-08-06', 'a31561', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-09-08 09:35:51', '2022-02-17 06:52:29'),
(594, '63221', '63221.jpg', NULL, 'Roháčová', NULL, NULL, 'Lucie', NULL, '23', '36', NULL, '2020-09-16', NULL, 'a31561', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-09-08 09:37:37', '2020-12-17 09:26:00'),
(595, '62920', '62920.jpg', NULL, 'Piotrowská', NULL, NULL, 'Marcela', NULL, '18', '27', NULL, '2020-09-10', NULL, 'ffa200', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-09-23 03:25:39', '2021-01-26 06:03:18'),
(599, '63212', '63212.jpg', 'Bc.', 'Rojík', NULL, NULL, 'Ondřej', NULL, '15', '35', NULL, '2020-10-01', NULL, 'c90818', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-09-23 04:40:04', '2020-10-01 04:22:45'),
(600, '62622', '62622.jpg', NULL, 'Noveková', NULL, NULL, 'Alena', NULL, '19', '22', NULL, '2020-09-17', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-09-24 02:27:51', '2020-09-24 02:27:51'),
(602, '63922', '63922.jpg', NULL, 'Škorupová', NULL, NULL, 'Aneta', NULL, '18', '27', NULL, '2020-10-01', NULL, 'ffa200', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-09-29 02:33:44', '2021-01-26 06:03:09'),
(604, '63611', '63611.jpg', NULL, 'Staniszová', NULL, NULL, 'Monika', NULL, '19', '32', NULL, '2020-10-07', NULL, '999999', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-10-07 05:14:02', '2023-01-18 17:55:56'),
(609, '60426', '60426.jpg', NULL, 'Brdíčková', NULL, NULL, 'Vladislava', NULL, '1', '20', NULL, '2020-12-01', NULL, '4287f5', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-11-03 08:17:19', '2021-01-21 06:47:47'),
(610, '64307', '64307.jpg', 'Ing.', 'Vargová', NULL, NULL, 'Andrea', NULL, '17', '49', 'vargova@khn.cz', '2020-11-02', NULL, NULL, NULL, NULL, 'Vydáno', 'N', 'DPČ', 999, NULL, 'Aktivní', '2020-11-04 05:00:38', '2023-01-20 23:47:12'),
(618, '62827', '62827.jpg', NULL, 'Pastrňáková', NULL, NULL, 'Pavlína', NULL, '9', '55', NULL, '2020-12-01', NULL, 'd9fa05', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-11-30 04:27:12', '2021-01-25 10:56:11'),
(619, '64205', '64205.jpg', NULL, 'Uričková', NULL, NULL, 'Petra', NULL, '30', '36', NULL, '2020-12-01', NULL, 'ffa600', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-11-30 04:28:06', '2021-08-04 04:07:38'),
(620, '60829', '60829.jpg', NULL, 'Golasowská', NULL, NULL, 'Alena', NULL, '30', '20', NULL, '2020-12-01', NULL, 'ffa600', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-11-30 04:28:47', '2021-08-04 04:08:23'),
(621, '62624', '62624.jpg', NULL, 'Nováková', NULL, NULL, 'Jana', NULL, '30', '36', NULL, '2020-12-01', NULL, 'ffa600', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-11-30 04:29:29', '2021-08-04 04:09:02'),
(622, '62223', '62223.jpg', NULL, 'Lipková', NULL, NULL, 'Růžena', NULL, '30', '20', NULL, '2020-12-01', NULL, 'ffa600', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-11-30 04:30:04', '2021-08-04 04:07:58'),
(626, '62130', '62130.jpg', NULL, 'Lačná', NULL, NULL, 'Romana', NULL, '30', '36', NULL, '2020-12-14', NULL, 'ffa600', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-12-14 09:38:22', '2021-08-04 04:04:22'),
(627, '62025', '62025.jpg', NULL, 'Jursová', NULL, NULL, 'Jana', NULL, '8', '36', NULL, '2020-12-14', NULL, 'ffa600', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-12-14 09:41:00', '2021-09-22 08:37:55'),
(628, '62301', '62301.jpg', NULL, 'Madejová', NULL, NULL, 'Jolana', 'DiS.', '12', '9', NULL, '2021-01-01', NULL, '66c908', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-12-15 08:22:33', '2022-06-13 02:58:21'),
(632, '60427', '60427.jpg', NULL, 'Balogh', NULL, NULL, 'Nikola', NULL, '3', '20', NULL, '2021-01-04', NULL, '4287f5', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-12-28 08:02:42', '2021-09-27 05:52:50'),
(633, '64411', '64411.jpg', NULL, 'Wolná', NULL, NULL, 'Pavlína', NULL, '30', '20', NULL, '2021-01-04', NULL, 'ffa600', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-12-28 08:04:03', '2021-08-04 04:04:09'),
(635, '64215', '64215.jpg', NULL, 'Vaněk', NULL, NULL, 'Milan', NULL, '17', '48', 'vanek@khn.cz', '2021-01-04', NULL, 'ffee00', NULL, '725408873', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-01-04 04:45:33', '2023-01-20 23:46:31'),
(636, '62026', '62026.jpg', 'Mgr.', 'Jursová', NULL, 'Kukuczková', 'Eva', NULL, '23', '55', NULL, '2021-01-04', NULL, 'a31561', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-01-04 08:21:24', '2022-10-06 02:30:01'),
(637, '62726', '62726.jpg', NULL, 'Oravská', NULL, NULL, 'Jiřina', NULL, '28', '20', NULL, '2021-01-04', NULL, 'ffa600', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-01-04 09:14:49', '2021-01-25 09:54:18'),
(640, '62128', '62128.jpg', NULL, 'Loucká', NULL, NULL, 'Dagmar', NULL, '18', '27', NULL, '2021-01-05', NULL, 'ffa200', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-01-04 09:23:33', '2021-01-20 11:55:46'),
(642, '62111', '62111.jpg', 'MUDr.', 'Kryvoruchko', NULL, NULL, 'Stanislav', NULL, '11', '12', 'kryvoruchko@khn.cz', '2021-02-01', NULL, '66c908', NULL, '777909546', 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2021-01-29 04:28:45', '2022-09-20 08:15:55'),
(643, '63216', '63216.jpg', 'Bc.', 'Romaňoková', NULL, NULL, 'Monika', NULL, '9', '20', NULL, '2021-02-01', NULL, 'd9fa05', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-01-29 06:12:39', '2021-11-08 09:04:45'),
(649, '60717', '60717.jpg', NULL, 'Danyśová', NULL, NULL, 'Nikola', NULL, '5', '29', NULL, '2021-03-01', NULL, '4287f5', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-03-01 04:38:27', '2021-03-02 06:41:38'),
(651, '62028', '62028.jpg', NULL, 'Chmielová', NULL, NULL, 'Petra', NULL, '28', '36', NULL, '2021-03-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-03-02 06:43:26', '2021-03-04 05:51:28'),
(652, '60429', '60429.jpg', NULL, 'Buříková', NULL, NULL, 'Barbora', NULL, '28', '55', NULL, '2021-03-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-03-02 06:53:33', '2021-03-02 08:05:03'),
(653, '62027', '62027.jpg', NULL, 'Jadrníčková', NULL, NULL, 'Markéta', NULL, '28', '29', NULL, '2021-03-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-03-02 07:00:00', '2021-03-02 08:05:13'),
(655, '62327', '62327.jpg', NULL, 'Matoušková', NULL, NULL, 'Urszula', NULL, '3', '29', NULL, '2021-03-03', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-03-03 11:55:02', '2022-05-03 04:00:40'),
(657, '62104', '62104.jpg', NULL, 'Koždoňová', NULL, NULL, 'Kateřina', NULL, '10', '29', NULL, '2021-03-25', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-03-25 06:45:31', '2021-04-01 03:12:36'),
(662, '60505', '60505.jpg', NULL, 'Carbolová', NULL, NULL, 'Alena', NULL, '20', '55', NULL, '2021-04-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-04-01 09:41:24', '2022-01-06 05:07:29'),
(663, '62029', '62029.jpeg', NULL, 'Klimková', NULL, NULL, 'Beata', NULL, '18', '18', 'klimkova@khn.cz', '2021-04-01', NULL, '222222', NULL, '724553793', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-04-06 04:27:01', '2022-06-13 05:12:00'),
(665, '62724', '62724.jpg', NULL, 'Ondrušová', NULL, NULL, 'Lenka', NULL, '19', '22', NULL, '2021-04-06', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-04-06 07:57:23', '2021-04-06 07:57:23'),
(666, '60802', '60802.jpg', NULL, 'Dzurec', NULL, NULL, 'Petr', NULL, '18', '11', NULL, '2021-04-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-04-08 02:33:18', '2022-02-22 06:06:49'),
(672, '60120', '60120.jpg', NULL, 'Baranová', NULL, NULL, 'Monika', NULL, '30', '36', NULL, '2021-05-03', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-05-03 05:18:22', '2021-08-04 04:10:42'),
(673, '60805', '60805.jpg', 'Mgr.', 'Ely', NULL, NULL, 'Marcela', NULL, '6', '55', NULL, '2021-05-03', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-05-03 05:56:48', '2021-05-10 08:23:50'),
(674, '62531', '62531.jpg', NULL, 'Motyka', NULL, NULL, 'Roman', NULL, '25', '28', NULL, '2021-05-10', NULL, '222222', NULL, '739139409', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-05-10 03:54:11', '2022-09-21 02:12:10'),
(677, '63406', '63406.jpg', NULL, 'Slížová', NULL, NULL, 'Lenka', NULL, '28', '36', NULL, '2021-05-17', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-05-17 04:09:10', '2021-05-17 08:41:57'),
(680, '60630', '60630.jpg', NULL, 'Cieslarová', NULL, NULL, 'Kateřina', NULL, '20', '55', NULL, '2021-06-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-06-01 04:32:09', '2021-06-01 04:32:09'),
(681, '63304', '63304.jpg', NULL, 'Rosová', NULL, NULL, 'Alena', NULL, '9', '55', NULL, '2021-06-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-06-01 04:40:11', '2021-06-28 03:23:20'),
(682, '61431', '61431.jpg', NULL, 'Ihazová', NULL, NULL, 'Zuzana', NULL, '30', '36', NULL, '2021-06-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-06-01 05:19:48', '2021-08-04 04:11:19'),
(683, '61331', '61331.jpg', NULL, 'Chrysostomidu', NULL, NULL, 'Katarína', NULL, '17', '3', 'chrysostomidu@khn.cz', '2021-06-01', NULL, '222222', '315', NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-06-01 05:40:28', '2022-09-23 05:02:43'),
(684, '63201', '63201.jpg', 'MUDr.', 'Rievaj', NULL, NULL, 'Radek', NULL, '6', '12', NULL, '2022-08-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2021-06-02 05:24:32', '2022-08-01 08:08:17'),
(685, '63404', '63404.jpg', NULL, 'Semrádová', NULL, NULL, 'Jana', 'DiS.', '16', '55', NULL, '2021-06-07', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'DPP', 999, NULL, 'Aktivní', '2021-06-07 06:53:10', '2022-01-06 05:07:45'),
(686, '63926', '63926.jpg', NULL, 'Šprinclová', NULL, NULL, 'Marie', NULL, '19', '22', NULL, '2021-06-07', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-06-07 07:00:42', '2021-06-07 07:00:42'),
(687, '60629', '60629.jpg', NULL, 'Čempelová', NULL, NULL, 'Jana', NULL, '11', '55', NULL, '2021-06-14', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-06-14 04:41:32', '2021-06-14 04:41:32'),
(688, '61508', '61508.jpg', NULL, 'Zöldová', NULL, NULL, 'Marcela', NULL, '16', '20', NULL, '2021-06-14', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-06-14 09:02:17', '2022-01-06 05:11:44'),
(695, '61432', '61432.jpg', 'MUDr.', 'Jakubovičová', NULL, NULL, 'Eva', NULL, '1', '12', 'jakubovicova@khn.cz', '2021-06-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2021-06-29 08:51:20', '2022-06-24 05:24:16'),
(696, '63403', '63403.jpg', 'MUDr.', 'Samiec', NULL, NULL, 'Jan', NULL, '4', '12', 'samiec@khn.cz', '2021-06-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2021-06-29 08:53:57', '2022-06-24 05:19:16'),
(701, '64534', '64534.jpg', NULL, 'Weissgärberová', NULL, NULL, 'Jana', NULL, '30', '20', NULL, '2021-07-01', NULL, 'ffa633', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-07-02 06:14:48', '2021-11-08 09:04:00'),
(702, '62630', '62630.jpg', NULL, 'Makúchová', NULL, NULL, 'Magdaléna', NULL, '30', '36', NULL, '2021-07-01', NULL, 'ffa633', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-07-02 06:35:36', '2021-11-08 09:04:25'),
(703, '62907', '62907.jpg', NULL, 'Kučerová', NULL, NULL, 'Nela', NULL, '30', '29', NULL, '2021-07-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-07-02 07:01:53', '2022-05-16 09:51:55'),
(704, '64007', '64007.jpg', NULL, 'Tabaková', NULL, NULL, 'Jitka', NULL, '18', '27', NULL, '2021-06-21', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-07-07 03:35:37', '2021-07-07 03:36:07'),
(707, '64732', 'no_image.png', 'MUDr.', 'Znišťalová', NULL, NULL, 'Lenka', NULL, '6', '12', NULL, '2021-07-17', NULL, '7833e8', NULL, NULL, 'Vytvořit nálepku', 'N', 'HPP', 999, 1, 'Aktivní', '2021-07-15 06:55:12', '2022-11-14 05:21:56'),
(708, '61594', '61594.jpg', 'Mgr.', 'Kaczyńska', NULL, NULL, 'Katarzyna', NULL, '30', '36', NULL, '2021-07-21', NULL, 'ffa633', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-07-21 06:32:34', '2021-08-04 04:09:48'),
(709, '60331', '60331.jpg', 'MUDr.', 'Brablcová', NULL, NULL, 'Hana', NULL, '11', '12', 'brablcova@khn.cz', '2021-08-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2021-08-02 04:07:59', '2022-06-13 02:52:17'),
(712, '60698', '60698.jpg', NULL, 'Czechowská', NULL, NULL, 'Lucie', NULL, '19', '22', NULL, '2021-09-01', NULL, '999999', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-09-01 03:16:17', '2021-09-20 08:42:06'),
(714, '62091', '62091.jpg', NULL, 'Kulhánková', NULL, NULL, 'Pavlína', NULL, '9', '55', NULL, '2021-09-01', NULL, 'd9fa05', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-09-13 02:19:12', '2021-11-08 07:47:22'),
(715, '63731', '63731.jpg', NULL, 'Svrčinová', NULL, NULL, 'Zuzana', NULL, '28', '36', NULL, '2021-09-01', NULL, 'ffa600', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-09-13 02:20:27', '2021-11-08 07:48:10'),
(716, '60335', '60335.jpg', NULL, 'Byrtusová', NULL, NULL, 'Markéta', NULL, '3', '37', NULL, '2021-09-08', NULL, '4287f5', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Mateřská', '2021-09-13 02:23:30', '2023-01-18 17:56:01'),
(717, '62831', '62831.png', NULL, 'Pastrňáková', NULL, NULL, 'Beata', NULL, '10', '55', NULL, '2021-09-13', NULL, 'ffa600', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-09-13 02:28:27', '2021-10-11 08:15:57'),
(718, '60513', '60513.jpg', NULL, 'Cerulová', NULL, NULL, 'Monika', NULL, '19', '22', NULL, '2021-09-15', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-09-15 04:17:13', '2022-06-10 06:07:56'),
(720, '63903', '63903.jpg', 'Mgr.', 'Štípková', NULL, NULL, 'Blanka', NULL, '31', '31', NULL, '2021-09-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-09-16 08:54:52', '2021-09-24 08:02:13'),
(721, '60699', '60699.jpg', 'Mgr.', 'Čermáková', NULL, NULL, 'Kristýna', NULL, '31', '31', NULL, '2021-09-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-09-16 08:59:41', '2021-10-11 05:42:29'),
(722, '62116', '62116.jpg', NULL, 'Kumorková', NULL, NULL, 'Marie', NULL, '31', '31', NULL, '2021-09-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-09-16 09:03:43', '2021-09-24 08:02:50'),
(723, '63431', '63431.jpg', NULL, 'Schönwälderová', NULL, NULL, 'Kateřina', NULL, '19', '22', NULL, '2021-09-21', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-09-21 04:40:46', '2022-06-08 09:55:07'),
(724, '64803', '64803.jpg', 'Bc.', 'Závěšická', NULL, NULL, 'Lucie', NULL, '1', '55', NULL, '2021-09-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-09-22 05:33:05', '2021-09-27 05:55:50'),
(725, '61133', '61133.jpg', 'Bc.', 'Herčíková', NULL, NULL, 'Lucie', 'DiS.', '11', '55', NULL, '2021-10-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-10-01 04:39:49', '2021-10-01 04:39:49'),
(726, '62115', '62115.jpg', NULL, 'Kuklínková', NULL, NULL, 'Šárka', NULL, '28', '36', NULL, '2021-10-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-10-01 04:42:05', '2021-10-01 04:42:05'),
(727, '63116', '63116.jpg', NULL, 'Radovičová', NULL, NULL, 'Lenka', NULL, '19', '22', NULL, '2021-10-04', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-10-04 06:54:32', '2021-10-05 09:44:34'),
(728, '60831', '60831.jpg', NULL, 'Folwarczná', NULL, NULL, 'Edyta', NULL, '6', '55', NULL, '2021-10-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-10-04 08:16:05', '2021-11-08 09:03:11'),
(730, '64227', '64227.jpg', NULL, 'Veselá', NULL, NULL, 'Sabina', NULL, '31', '31', NULL, '2021-09-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-10-06 05:10:50', '2022-02-17 05:47:40'),
(732, '64834', '64834.jpg', 'MUDr.', 'Zvaríková', NULL, NULL, 'Mariola', NULL, '9', '12', NULL, '2021-10-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2021-10-07 05:22:30', '2021-10-07 05:22:30'),
(733, '63633', '63633.jpg', NULL, 'Soliková', NULL, NULL, 'Jarmila', NULL, '19', '22', NULL, '2021-10-11', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-10-11 04:52:57', '2021-10-13 08:41:42'),
(734, '63632', '63632_20221114-062147.jpg', 'MUDr.', 'Urbančíková', NULL, 'Stará', 'Kamila', NULL, '1', '12', NULL, '2021-10-11', NULL, '222222', NULL, NULL, 'Vydáno', 'A', 'HPP', 999, 1, 'Aktivní', '2021-10-11 05:07:58', '2022-11-14 05:21:47'),
(735, '63414', '63414.jpg', NULL, 'Sikorová', NULL, NULL, 'Radomíra', NULL, '31', '31', NULL, '2021-09-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-10-12 06:57:15', '2021-11-08 09:05:14'),
(739, '63220', '63220-jolana-rojickova.jpg', 'MUDr.', 'Rojíčková', NULL, NULL, 'Jolana', NULL, '6', '12', 'rojickova@khn.cz', '2021-11-01', NULL, '222222', '122', NULL, 'Aktual. nálepku', 'N', 'DPP', 999, 1, 'Aktivní', '2021-11-08 06:28:15', '2022-07-01 09:51:15'),
(740, '62120', '62120.jpg', NULL, 'Kondáš', NULL, NULL, 'Ján', NULL, '16', '20', NULL, '2021-11-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-11-08 06:36:08', '2021-11-08 06:36:08'),
(741, '62389', '62389.jpg', NULL, 'Malyszová', NULL, NULL, 'Edita', NULL, '11', '55', NULL, '2021-11-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-11-08 06:40:05', '2021-11-08 06:40:05'),
(743, '62225', '62225.jpg', NULL, 'Lipusová', NULL, NULL, 'Nikol', NULL, '11', '29', NULL, '2021-12-06', NULL, '66c908', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-12-09 04:51:41', '2021-12-23 05:03:39'),
(744, '62073', '62073.jpg', 'Bc.', 'Karasová', NULL, NULL, 'Jana', NULL, '17', '64', 'karasova@khn.cz', '2021-12-01', NULL, 'ffee00', NULL, '725669181', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-12-09 09:01:16', '2022-09-20 09:48:39'),
(745, '64004', '64004.jpg', NULL, 'Tichá', NULL, NULL, 'Iveta', NULL, '9', '36', NULL, '2021-12-01', NULL, 'd9fa05', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-12-10 07:18:26', '2022-01-05 11:09:20'),
(746, '63215', '63215.jpg', NULL, 'Rohalová', NULL, NULL, 'Lenka', NULL, '7', '55', NULL, '2021-12-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2021-12-21 07:47:41', '2022-01-28 10:29:32'),
(747, '61334', '61334.jpg', NULL, 'Huňařová', NULL, NULL, 'Lada', NULL, '17', '3', 'hunarova@khn.cz', '2022-01-03', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-01-03 06:29:22', '2022-06-13 05:01:54'),
(748, '63432', '63432.jpg', 'Bc.', 'Spurná', NULL, NULL, 'Pavlína', NULL, '13', '55', NULL, '2022-01-03', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-01-04 06:22:16', '2022-01-04 06:22:16'),
(749, '61528', '61528.jpg', NULL, 'Nesét', NULL, NULL, 'Gabriela', NULL, '23', '55', NULL, '2022-01-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-01-04 07:48:47', '2022-02-24 06:52:31'),
(750, '63122', '63122.jpg', NULL, 'Raszyková Kántorová', 'Kántorová', NULL, 'Monika', NULL, '1', '36', NULL, '2022-01-06', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-01-07 04:17:13', '2022-01-07 09:55:30'),
(751, '60474', '60474.jpg', NULL, 'Byrtus', NULL, NULL, 'Matyáš', NULL, '1', '29', NULL, '2022-01-17', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-01-17 09:04:35', '2022-01-17 09:20:12'),
(752, '60824', '60824.jpg', 'MUDr.', 'Hanzlíková', NULL, NULL, 'Katarzyna', NULL, '30', '12', 'hanzlikova@khn.cz', '2022-02-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2022-02-01 04:35:32', '2022-06-13 03:16:59'),
(753, '63931', '63931.jpg', 'PharmDr.', 'Švehlová', NULL, NULL, 'Eva', NULL, '22', '6', NULL, '2022-02-01', NULL, '222222', NULL, '739545625', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-02-01 06:12:16', '2022-09-21 02:21:58'),
(754, '64535', '64535.jpg', NULL, 'Wojnarová', NULL, NULL, 'Petra', NULL, '1', '20', NULL, '2022-02-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-02-01 09:10:19', '2022-03-16 11:39:34'),
(757, '62816', '62931.jpg', 'Bc.', 'Pečonka', NULL, NULL, 'Jan', NULL, '31', '50', NULL, '2022-09-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'DPČ', 999, NULL, 'Aktivní', '2022-02-03 05:47:00', '2022-10-25 06:54:07'),
(760, '62800', '62800.jpg', NULL, 'Pacíková', NULL, NULL, 'Urszula', NULL, '30', '55', NULL, '2022-02-14', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-02-15 08:06:48', '2022-02-15 08:06:48'),
(761, '62534', '62534.jpg', 'Bc.', 'Mrakwiová', NULL, NULL, 'Tereza', NULL, '12', '5', NULL, '2022-03-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-03-01 06:11:26', '2022-03-01 06:11:26'),
(762, '64508', '64508.jpg', NULL, 'Weberová', NULL, NULL, 'Žaneta', NULL, '17', '56', 'weberova@khn.cz', '2022-03-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-03-01 06:25:38', '2022-06-13 02:10:59'),
(763, '62231', '62231.jpg', NULL, 'Lukaštíková', NULL, NULL, 'Lenka', NULL, '6', '20', NULL, '2022-03-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-03-01 07:04:50', '2022-03-01 07:05:34'),
(765, '63402', '63402.jpg', NULL, 'Sekaninová', NULL, NULL, 'Anna', NULL, '17', '72', 'sekaninova@khn.cz', '2022-03-01', NULL, '222222', '420', NULL, 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2022-03-07 06:57:58', '2022-09-22 05:21:41'),
(767, '62932', '62932.jpg', NULL, 'Přikrylová', NULL, NULL, 'Petra', NULL, '1', '29', NULL, '2022-03-03', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'DPP', 999, NULL, 'Aktivní', '2022-03-11 10:01:27', '2022-06-13 03:07:50'),
(768, '60631', '60631.jpg', NULL, 'Čechmánková', NULL, NULL, 'Karin', NULL, '18', '11', NULL, '2022-03-07', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-03-15 09:49:17', '2022-03-15 09:49:17'),
(769, '62074', '62074.jpg', 'Mgr.', 'Kawková', NULL, NULL, 'Šárka', NULL, '13', '55', NULL, '2022-04-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-04-01 04:00:15', '2022-04-01 04:00:15'),
(770, '62228', '62228.jpg', NULL, 'Linková', NULL, NULL, 'Alena', NULL, '30', '36', NULL, '2022-04-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-04-01 08:17:44', '2022-04-01 08:17:44'),
(771, '63932', '63932.jpg', NULL, 'Štolba', NULL, NULL, 'Barbora', NULL, '23', '55', NULL, '2022-04-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-04-01 09:51:12', '2022-06-10 06:09:39'),
(772, '62632', '62632.jpg', NULL, 'Němcová', NULL, NULL, 'Jana', NULL, '30', '36', NULL, '2022-04-04', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-04-04 05:42:18', '2022-04-04 05:42:18'),
(773, '64207', '64207.jpg', NULL, 'Udod', NULL, NULL, 'Svitlana', NULL, '1', '29', NULL, '2022-04-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-04-05 08:28:16', '2022-09-05 03:33:00'),
(774, '62535', '62535.jpg', 'Bc.', 'Michalcová', NULL, NULL, 'Naděžda', NULL, '24', '37', NULL, '2022-04-06', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-04-06 06:20:59', '2022-04-19 02:55:05'),
(775, '63924', '63924.jpg', NULL, 'Šišma', NULL, NULL, 'Radim', NULL, '1', '29', NULL, '2022-04-25', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-04-25 07:40:54', '2022-06-13 03:05:51'),
(776, '60431', '60431.jpg', 'Ing.', 'Bujoková', NULL, NULL, 'Markéta', NULL, '17', '8', 'bujokova@khn.cz', '2022-05-02', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-05-02 04:29:03', '2022-07-08 04:02:19'),
(777, '63606', '63606.jpg', NULL, 'Sigmund', NULL, NULL, 'Michal', NULL, '17', '48', 'sigmund@khn.cz', '2022-05-02', NULL, '222222', '371', '724767247', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-05-02 04:33:34', '2023-01-20 23:46:55'),
(778, '63101', '62934.jpg', NULL, 'Pszczółková', NULL, NULL, 'Zuzana', NULL, '30', '20', NULL, '2022-05-02', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-05-02 07:00:44', '2022-05-13 03:07:01'),
(779, '64533', '64533.jpg', NULL, 'Weiss', NULL, NULL, 'Eva', NULL, '1', '20', NULL, '2022-05-02', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-05-02 09:51:37', '2022-05-03 02:50:27'),
(781, '60131', '60131.jpg', NULL, 'Balažovičová', NULL, NULL, 'Andrea', NULL, '18', '27', NULL, '2022-05-02', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-05-03 06:58:26', '2022-05-10 02:12:36'),
(782, '62633', '62633.jpg', NULL, 'Nelhyblová', NULL, NULL, 'Monika', NULL, '19', '22', NULL, '2022-05-05', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-05-05 05:33:06', '2022-05-05 05:33:06'),
(784, '63524', '63524.jpg', NULL, 'Sikora', NULL, NULL, 'Robert', NULL, '1', '29', NULL, '2022-05-05', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'DPP', 999, NULL, 'Aktivní', '2022-05-30 07:58:32', '2022-05-30 07:58:32'),
(785, '60315', '60315.jpg', NULL, 'Ristovská', NULL, NULL, 'Barbara', NULL, '6', '29', NULL, '2022-06-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'DPP', 999, NULL, 'Aktivní', '2022-06-01 04:05:15', '2022-10-25 06:48:20'),
(786, '61031', '61031.jpg', NULL, 'Greco', NULL, NULL, 'Alexandr', NULL, '28', '29', NULL, '2022-06-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-06-01 04:28:46', '2022-06-01 04:29:16'),
(787, '60932', '60932.jpg', NULL, 'Friedlová', NULL, NULL, 'Karolína', NULL, '1', '29', NULL, '2022-06-01', NULL, '4287f5', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-06-01 06:32:55', '2022-10-18 02:42:12'),
(788, '60432', '60432.jpg', NULL, 'Byrtus', NULL, NULL, 'Ivo', NULL, '17', '56', 'byrtus@khn.cz', '2022-06-01', NULL, NULL, '372', '725189424', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-06-02 05:19:33', '2023-01-14 20:50:05'),
(789, '62229', '62229.jpg', 'Bc.', 'Lamaczová', NULL, NULL, 'Dagmar', NULL, '3', '55', NULL, '2022-06-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-06-02 08:57:53', '2022-06-02 08:57:53'),
(791, '63732', '63732.jpg', NULL, 'Suchá', NULL, NULL, 'Marta', NULL, '19', '22', NULL, '2022-06-10', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-06-13 04:45:32', '2022-06-13 04:45:32'),
(792, '61532', '61532.jpg', NULL, 'Jeřábková', NULL, NULL, 'Markéta', NULL, '1', '32', NULL, '2022-06-13', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-06-13 08:58:21', '2023-01-18 17:56:08'),
(795, '61434', '61434_20221114-061915.jpg', NULL, 'Janišová', NULL, NULL, 'Adriana', NULL, '1', '36', NULL, '2022-06-17', NULL, '222222', NULL, NULL, 'Vytvořit nálepku', 'N', 'DPP', 999, NULL, 'Aktivní', '2022-06-17 02:48:48', '2022-11-14 05:19:15'),
(797, '62122', '62122.jpg', NULL, 'Kupčok', NULL, NULL, 'Radim', NULL, '3', '20', NULL, '2022-07-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-07-01 04:04:58', '2022-08-02 08:39:11'),
(798, '63199', '63199.jpg', 'Bc.', 'Reli', NULL, NULL, 'Kristýna', NULL, '15', '35', NULL, '2022-07-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-07-01 05:51:37', '2022-07-01 05:52:03'),
(799, '61816', '61816.jpg', NULL, 'Kostková', NULL, NULL, 'Klára', NULL, '6', '29', NULL, '2022-07-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-07-01 06:51:23', '2022-07-01 06:51:23'),
(800, '61134', '61134.jpg', NULL, 'Haklová', NULL, NULL, 'Aneta', NULL, '6', '20', NULL, '2022-07-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-07-01 07:16:48', '2022-07-01 07:16:48'),
(802, '64331', '64331.jpg', NULL, 'Velecká', NULL, NULL, 'Renáta', NULL, '23', '20', NULL, '2022-08-01', NULL, 'a31561', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-08-01 07:10:31', '2022-08-01 07:17:03'),
(803, '61932', '61932.jpg', 'MUDr.', 'Konetzná', NULL, NULL, 'Pavla', NULL, '6', '12', NULL, '2022-08-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2022-08-01 07:13:51', '2022-08-01 07:13:51'),
(804, '61140', '61140.jpg', NULL, 'Horehleďová', NULL, NULL, 'Monika', NULL, '6', '20', NULL, '2022-08-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-08-01 08:34:53', '2022-08-02 08:38:44'),
(805, '60132', '60132.jpg', NULL, 'Baloghová', NULL, NULL, 'Lucie', NULL, '18', '27', NULL, '2022-08-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-08-02 08:44:47', '2022-08-02 08:44:47'),
(806, '62833', '62833.jpg', 'Bc.', 'Palisová', NULL, NULL, 'Veronika', NULL, '15', '35', NULL, '2022-07-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'DPČ', 999, NULL, 'Aktivní', '2022-08-05 06:10:14', '2022-08-05 06:10:14'),
(807, '61336', '61336.jpg', NULL, 'Honiewiczová', NULL, NULL, 'Pavla', NULL, '18', '11', NULL, '2022-08-08', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-08-09 06:54:44', '2022-08-15 05:35:38'),
(808, '63734', 'no_image.png', NULL, 'Soltészová', NULL, NULL, 'Nikola', NULL, '30', '20', NULL, '2022-08-02', NULL, '222222', NULL, NULL, 'Nový nástup', 'N', 'DPP', 999, NULL, 'Aktivní', '2022-08-09 08:21:08', '2022-11-14 05:20:28'),
(809, '62131', '62131.jpg', NULL, 'Lasovská', NULL, NULL, 'Renáta', NULL, '1', '20', NULL, '2022-09-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-09-01 07:26:00', '2022-09-01 07:26:00'),
(810, '62536', '62536.jpg', NULL, 'Miech', NULL, NULL, 'Dalibor', NULL, '1', '29', NULL, '2022-09-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-09-01 07:53:20', '2022-09-01 07:53:47'),
(811, '64009', '64009.jpg', NULL, 'Tekenöšová', NULL, NULL, 'Šárka', NULL, '6', '29', NULL, '2022-09-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-09-01 08:16:23', '2022-09-01 08:16:23'),
(812, '61337', '61337.jpg', 'MUDr.', 'Horák', NULL, NULL, 'Vojtěch', NULL, '6', '12', NULL, '2022-09-05', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 1, 'Aktivní', '2022-09-05 04:56:29', '2022-09-05 04:56:29'),
(813, '62123', '62123.jpg', NULL, 'Kuchma', NULL, NULL, 'Nataliia', NULL, '6', '55', NULL, '2022-09-05', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-09-05 05:56:52', '2022-09-05 07:02:37'),
(815, '63130', '63130.jpg', NULL, 'Repová', NULL, NULL, 'Jana', NULL, '19', '22', NULL, '2022-09-06', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-09-06 06:18:12', '2022-09-06 06:18:12'),
(816, '60809', '60809.jpg', NULL, 'Franek', NULL, NULL, 'Stanislav', NULL, '1', '20', NULL, '2022-09-07', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-09-08 08:59:18', '2022-09-08 08:59:18'),
(817, '64217', '64217.jpg', NULL, 'Valášková', NULL, NULL, 'Kateřina', NULL, '16', '55', NULL, '2022-10-03', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-10-03 03:48:58', '2022-10-03 03:48:58'),
(818, '63831', '63831.jpg', NULL, 'Sznapková', NULL, NULL, 'Adéla', NULL, '11', '29', NULL, '2022-10-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-10-03 05:43:52', '2022-10-03 05:43:52'),
(819, '64828', '64828.jpg', NULL, 'Žažová', NULL, NULL, 'Veronika', NULL, '3', '55', NULL, '2022-10-03', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-10-03 06:34:43', '2022-11-14 07:43:13'),
(820, '60420', '60420.jpg', NULL, 'Bytčanková-Stojanova', NULL, NULL, 'Simona', NULL, '1', '29', NULL, '2022-10-03', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-10-06 07:03:28', '2022-10-06 07:03:28'),
(821, '61800', '61800.jpg', NULL, 'Kokyová', NULL, NULL, 'Tereza', NULL, '28', '29', NULL, '2022-10-10', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-10-10 04:00:18', '2022-10-10 04:00:18'),
(822, '63109', '63109.jpg', NULL, 'Pyszková', NULL, NULL, 'Karolina', NULL, '28', '20', NULL, '2022-10-17', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-10-17 07:14:14', '2022-10-17 07:14:14'),
(824, '60336', '60336.jpg', NULL, 'Beránková', NULL, NULL, 'Ivana', NULL, '19', '22', NULL, '2022-10-21', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-10-21 05:55:29', '2022-10-21 05:55:29'),
(825, '60833', 'no_image.png', 'Mgr.', 'Franková', NULL, NULL, 'Veronika', NULL, '31', '31', NULL, '2022-09-01', NULL, '222222', NULL, NULL, 'Vytvořit nálepku', 'N', 'DPP', 999, NULL, 'Aktivní', '2022-10-25 06:52:19', '2022-11-14 05:17:40'),
(826, '62233', '62233.jpg', NULL, 'Lubojacká', NULL, NULL, 'Lenka', NULL, '19', '22', NULL, '2022-11-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-11-01 07:51:08', '2022-11-01 07:51:08'),
(827, '61032', '61032.jpg', 'Bc.', 'Giemza', NULL, NULL, 'Sylwia', 'DiS.', '11', '55', NULL, '2022-11-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-11-01 08:17:20', '2022-11-01 08:17:20'),
(828, '61338', '61338.jpg', NULL, 'Hrdinová', NULL, NULL, 'Jaroslava', NULL, '19', '22', NULL, '2022-11-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-11-01 08:41:56', '2022-11-01 08:41:56'),
(829, '60434', '60434.jpg', NULL, 'Brhelová', NULL, NULL, 'Jana', NULL, '1', '20', NULL, '2022-11-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-11-01 11:43:42', '2022-11-01 11:43:42'),
(830, '60292', '60292.jpg', NULL, 'Beitelová', NULL, NULL, 'Romana', NULL, '30', '36', NULL, '2022-11-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-11-01 11:48:15', '2022-11-01 11:48:15'),
(831, '64321', '64321.jpg', NULL, 'Valošková', NULL, NULL, 'Lenka', NULL, '1', '20', NULL, '2022-11-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-11-02 04:50:46', '2022-11-02 04:50:46'),
(832, '62232', '62232.jpg', NULL, 'Levayová', NULL, NULL, 'Sára', NULL, '6', '29', NULL, '2022-11-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2022-11-03 10:23:00', '2022-11-03 10:23:00'),
(833, '11111', 'no_image.png', 'MUDr.', 'Rewendová', NULL, NULL, 'Kamila', NULL, '1', '12', NULL, '2022-11-02', NULL, '4287f5', NULL, NULL, 'Nový nástup', 'N', 'HPP', 999, 1, 'Aktivní', '2022-11-03 10:32:44', '2022-11-14 05:17:16');

-- --------------------------------------------------------

--
-- Struktura tabulky `evidence`
--

CREATE TABLE `evidence` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
-- Struktura tabulky `instructions`
--

CREATE TABLE `instructions` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
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
(133, '2022_12_14_084811_create_categories_table', 4),
(134, '2023_01_15_003551_create_calendar_table', 5),
(136, '2023_01_20_104223_create_navitems_table', 6),
(137, '2023_02_13_065610_create_paints_table', 7),
(138, '2023_03_03_102419_create_bozps_table', 7),
(140, '2023_03_12_195624_create_notifications_table', 8),
(141, '2023_03_13_103125_create_bulletins_table', 9);

-- --------------------------------------------------------

--
-- Struktura tabulky `navitems`
--

CREATE TABLE `navitems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `position` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tooltip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fa_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `svg_icon` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `navitems`
--

INSERT INTO `navitems` (`id`, `position`, `category_id`, `name`, `subname`, `alt_name`, `tooltip`, `color`, `icon_class`, `page_title`, `route`, `favicon`, `fa_icon`, `svg_icon`) VALUES
(1, 1, 1, 'Homepage', 'Intranet', 'Homepage', 'Domů', 'blue', 'text-blue', 'Homepage', 'home', 'home.png', 'fa-home', '<svg class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><polyline points=\"5 12 3 12 12 3 21 12 19 12\"></polyline><path d=\"M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7\"></path><path d=\"M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6\"></path></svg>');

-- --------------------------------------------------------

--
-- Struktura tabulky `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `title`, `content`, `type`, `created_at`, `updated_at`) VALUES
(1, 11, 'Test 1', 'Nullam justo enim, consectetuer nec, ullamcorper ac, vestibulum in, elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Nullam rhoncus aliquam metus. Donec ipsum massa, ullamcorper in, auctor et, scelerisque sed, est. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam. Etiam bibendum elit eget erat. In laoreet, magna id viverra tincidunt, sem odio bibendum justo, vel imperdiet sapien wisi sed libero. Donec vitae arcu. Integer imperdiet lectus quis justo. Fusce consectetuer risus a nunc. In sem justo, commodo ut, suscipit at, pharetra vitae, orci. Aenean vel massa quis mauris vehicula lacinia. ', 'lime', '2023-03-01 19:02:35', '2023-03-12 19:02:35'),
(2, 11, 'Test 2', 'Nullam justo enim, consectetuer nec, ullamcorper ac, vestibulum in, elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Nullam rhoncus aliquam metus. Donec ipsum massa, ullamcorper in, auctor et, scelerisque sed, est. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam. Etiam bibendum elit eget erat. In laoreet, magna id viverra tincidunt, sem odio bibendum justo, vel imperdiet sapien wisi sed libero. Donec vitae arcu. Integer imperdiet lectus quis justo. Fusce consectetuer risus a nunc. In sem justo, commodo ut, suscipit at, pharetra vitae, orci. Aenean vel massa quis mauris vehicula lacinia. ', 'purple', '2023-01-01 19:02:35', '2023-03-12 19:02:35'),
(3, 9, 'Test 3', 'Nullam justo enim, consectetuer nec, ullamcorper ac, vestibulum in, elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Nullam rhoncus aliquam metus. Donec ipsum massa, ullamcorper in, auctor et, scelerisque sed, est. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam. Etiam bibendum elit eget erat. In laoreet, magna id viverra tincidunt, sem odio bibendum justo, vel imperdiet sapien wisi sed libero. Donec vitae arcu. Integer imperdiet lectus quis justo. Fusce consectetuer risus a nunc. In sem justo, commodo ut, suscipit at, pharetra vitae, orci. Aenean vel massa quis mauris vehicula lacinia. ', 'pink', '2023-02-10 19:02:35', '2023-03-12 19:02:35'),
(4, 6, 'Test 4', 'Nullam justo enim, consectetuer nec, ullamcorper ac, vestibulum in, elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Nullam rhoncus aliquam metus. Donec ipsum massa, ullamcorper in, auctor et, scelerisque sed, est. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam. Etiam bibendum elit eget erat.', 'teal', '2022-12-08 19:02:35', '2023-03-12 19:02:35'),
(5, 11, 'Test 5', 'Nullam justo enim, consectetuer nec, ullamcorper ac, vestibulum in, elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos.', 'blue', '2022-09-14 18:02:35', '2023-03-12 19:02:35');

-- --------------------------------------------------------

--
-- Struktura tabulky `paints`
--

CREATE TABLE `paints` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `rooms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doors` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specials` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Vloženo','Schváleno') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `paints`
--

INSERT INTO `paints` (`id`, `department_id`, `user_id`, `date_start`, `date_end`, `rooms`, `doors`, `specials`, `status`, `created_at`, `updated_at`) VALUES
(1, 20, 11, '2023-03-04', '2023-03-28', 'eqeqw', NULL, NULL, 'Vloženo', '2023-03-04 14:35:09', '2023-03-04 14:35:09'),
(2, 20, 11, '2023-03-13', '2023-03-22', 'tertert', NULL, 'erterter', 'Vloženo', '2023-03-13 09:27:13', '2023-03-13 09:27:13');

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `printers`
--

CREATE TABLE `printers` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `training_id` int(11) NOT NULL,
  `slide_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `directory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `toners`
--

CREATE TABLE `toners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `toner_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `toner_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `toner_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `toner_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `trainings`
--

CREATE TABLE `trainings` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `personal_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(8, '61199', 'PhDr. Ilona Kopečný', 'jakoubek.ivana@example.com', '2023-01-11 16:48:16', '$2y$10$LHGzVLpy/G9kAezVWgAyH.w4kZJM4sDCnTWicSCsVJwhueLR/EXkC', NULL, NULL, 'SreSqc3lYKXx7cC3k9lzdP2FARjraqw5bl3EwVMUDRG2Stbz2SRg3TXSWV1n', '2023-01-11 16:48:17', '2023-01-11 16:48:17'),
(9, '64220', 'Vítězslav Studený', 'aprokop@example.net', '2023-01-11 16:48:16', '$2y$10$TXAjVT9k./.H4KjXoNAcn.ljLPiSjKS0B.vlGoGjEiJXFvNWX3CJG', NULL, NULL, 'Q84bE3b76njnJpTH1hee9690itatngELvYKuDNtYqpfuwZ72Y4EhZd2C0J3e', '2023-01-11 16:48:17', '2023-01-11 16:48:17'),
(10, '62457', 'PhDr. Jan Kuča', 'milena93@example.net', '2023-01-11 16:48:16', '$2y$10$y.1Fr4LcccsAuc2CCAp9seh5PonzrjwBcBDlKqaIaO4r0eYvvow3W', NULL, NULL, 'uKtD3jRcmQagjEDZs2oF9PpRq14SsqwMna9HjdAGFR5U2lai6N50iFFPsfDC', '2023-01-11 16:48:17', '2023-01-11 16:48:17'),
(11, '61625', 'Klika Miroslav', 'klika@khn.cz', NULL, '$2y$10$PSw5emAhbIR3u3sVNNg3iOe8t9z0Ct7dgJEKUud0jfeXFVkJzWZqK', NULL, NULL, 'yp2ezyMZ6muFl0Dw9Mdjygx4tAZdnTZ04sCChsZxN6F8of1MKFWoswlCCmJX', '2023-01-11 18:53:36', '2023-01-22 21:46:33'),
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
-- Indexy pro tabulku `bozps`
--
ALTER TABLE `bozps`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `bulletins`
--
ALTER TABLE `bulletins`
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
-- Indexy pro tabulku `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `paints`
--
ALTER TABLE `paints`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `addons`
--
ALTER TABLE `addons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT pro tabulku `bozps`
--
ALTER TABLE `bozps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `bulletins`
--
ALTER TABLE `bulletins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pro tabulku `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pro tabulku `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=352;

--
-- AUTO_INCREMENT pro tabulku `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT pro tabulku `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pro tabulku `paints`
--
ALTER TABLE `paints`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
