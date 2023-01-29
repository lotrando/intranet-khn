-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Počítač: localhost
-- Vytvořeno: Ned 29. led 2023, 21:55
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
  `addon_number` int NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `revision` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Rozpracováno','Schváleno') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `onscreen` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `addons`
--

INSERT INTO `addons` (`id`, `document_id`, `addon_number`, `description`, `revision`, `file`, `status`, `onscreen`, `created_at`, `updated_at`) VALUES
(1, 23, 2, 'Riziková léčiva s podobným názvem, balením (léčiva v injekční formě)', 'únor 2022', 'rizikova_leciva_s_podobnym_nazvem_balenim_(leciva_v_injekcni_forme)-revize-unor_2022.pdf', 'Schváleno', NULL, '2022-02-01 16:35:57', '2022-02-01 16:35:57'),
(2, 24, 1, 'Verifikační protokol', 'únor 2022', 'verifikacni_protokol-revize-unor_2022.pdf', 'Schváleno', NULL, '2022-03-01 16:35:57', '2022-03-01 16:35:57'),
(3, 24, 2, 'Perioperační bezpečnosní proces', 'únor 2022', 'perioperacni_bezpecnosni_proces-revize-unor_2022.pdf', 'Schváleno', NULL, '2022-03-01 16:35:57', '2022-03-01 16:35:57'),
(4, 24, 3, 'Stranový protokol a bezpečnostní proces\r\npro ambulantní výkony v lokální anestezii', 'srpen 2022', 'stranovy_protokol_a_bezpecnostni_proces_pro_ambulantni vykony_v_lokalni_anestezii-revize-unor_2022.pdf', 'Schváleno', NULL, '2022-03-01 16:35:57', '2022-03-01 16:35:57'),
(5, 30, 1, 'Záznamový list logopedické intervence u klientů s NKS', 'listopad 2021', 'zaznamovy_list_logopedicke_intervence_u_klientu_s_nks-revize-listopad_2021.pdf', 'Schváleno', NULL, '2022-03-01 16:35:57', '2022-03-01 16:35:57'),
(6, 0, 1, 'Skladová položka', '0', 'none', 'Schváleno', 14, '2023-01-29 11:07:29', '2023-01-29 11:07:29'),
(7, 0, 2, 'Skladová položka 2', '0', 'none', 'Schváleno', 13, '2023-01-29 11:07:29', '2023-01-29 11:07:29');

-- --------------------------------------------------------

--
-- Struktura tabulky `adversevents`
--

CREATE TABLE `adversevents` (
  `id` bigint UNSIGNED NOT NULL,
  `department_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `misto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `datum_cas` date NOT NULL,
  `cas` time NOT NULL,
  `spec_druh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jinydoplnek` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pracovnik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `svedek` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pacient` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datumnaroz` date DEFAULT NULL,
  `chorobopis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `udalost` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `reseni` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `opatreni` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `informovan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pricina` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jina_pricina` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stav_pacienta` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lokalizace` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `druh_zraneni` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preventivni_opatreni` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zhodnoceni_stavu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datum` date DEFAULT NULL,
  `jmeno_lekare` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vyvoj` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upresneni` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Rozpracováno','Odesláno','Dokončeno') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `resitel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vyjadreni` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resitel1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vyjadreni1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resitel2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vyjadreni2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `id` bigint UNSIGNED NOT NULL,
  `training_id` int NOT NULL,
  `personal_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `calendar`
--

CREATE TABLE `calendar` (
  `id` bigint NOT NULL,
  `date` date DEFAULT NULL,
  `interni` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
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
  `id` bigint UNSIGNED NOT NULL,
  `category_file` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `folder_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_icon` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `svg_icon` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fas_icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `button` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `categories`
--

INSERT INTO `categories` (`id`, `category_file`, `category_type`, `category_name`, `folder_name`, `category_icon`, `svg_icon`, `fas_icon`, `button`, `color`) VALUES
(1, 'standardy', 'standard', 'Akreditační', 'akreditacni', 'akreditacni.png', '<svg class=\"icon text-indigo\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M14 3v4a1 1 0 0 0 1 1h4\"></path><path d=\"M5 8v-3a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-5\"></path><circle cx=\"6\" cy=\"14\" r=\"3\"></circle><path d=\"M4.5 17l-1.5 5l3 -1.5l3 1.5l-1.5 -5\"></path></svg>', 'certificate', 'akreditační', 'blue'),
(2, 'standardy', 'standard', 'Ošetřovatelské', 'osetrovatelske', 'osetrovatelske.png', '<svg class=\"icon text-pink\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M6 4h-1a2 2 0 0 0 -2 2v3.5h0a5.5 5.5 0 0 0 11 0v-3.5a2 2 0 0 0 -2 -2h-1\"></path><path d=\"M8 15a6 6 0 1 0 12 0v-3\"></path><path d=\"M11 3v2\"></path><path d=\"M6 3v2\"></path><circle cx=\"20\" cy=\"10\" r=\"2\"></circle></svg>', 'stethoscope', 'ošetřovatelský', 'pink'),
(3, 'standardy', 'standard', 'Léčebné', 'lecebne', 'lecebne.png', '<svg class=\"icon text-red\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M14.017 18.001l-2.017 1.999l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 0 1 8.153 5.784\"></path><path d=\"M15.99 20l4.197 -4.223a2.81 2.81 0 0 0 .006 -3.948a2.747 2.747 0 0 0 -3.91 -.007l-.28 .282l-.279 -.283a2.747 2.747 0 0 0 -3.91 -.007a2.81 2.81 0 0 0 -.007 3.948l4.182 4.238z\"></path></svg>', 'heart', 'léčebný', 'red'),
(4, 'standardy', 'standard', 'Speciální', 'specialni', 'specialni.png', '<svg class=\"icon text-indigo\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2\"></path><rect x=\"9\" y=\"3\" width=\"6\" height=\"4\" rx=\"2\"></rect><line x1=\"10\" y1=\"14\" x2=\"14\" y2=\"14\"></line><line x1=\"12\" y1=\"12\" x2=\"12\" y2=\"16\"></line></svg>', 'notes-medical', 'speciální', 'indigo'),
(5, 'standardy', 'standard', 'Operační', 'operacni', 'operacni.png', '<svg class=\"icon text-lime\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\" stroke-width=\"1\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M3 19l15 -15l3 3l-6 6l2 2a14 14 0 0 1 -14 4\"></path></svg>', 'notes-medical', 'operační', 'lime'),
(6, 'standardy', 'standard', 'Anesteziologické', 'anesteziologicke', 'anesteziologicke.png', '<svg class=\"icon text-green\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><rect x=\"3\" y=\"4\" width=\"18\" height=\"12\" rx=\"1\"></rect><path d=\"M7 20h10\"></path><path d=\"M9 16v4\"></path><path d=\"M15 16v4\"></path><path d=\"M7 10h2l2 3l2 -6l1 3h3\"></path></svg>', 'heartbeat', 'anesteziologický', 'green'),
(7, 'standardy', 'standard', 'Radiologické', 'rdg', 'rdg.png', '<svg class=\"icon text-yellow\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M13.5 14.6l3 5.19a9 9 0 0 0 4.5 -7.79h-6a3 3 0 0 1 -1.5 2.6\"></path><path d=\"M13.5 9.4l3 -5.19a9 9 0 0 0 -9 0l3 5.19a3 3 0 0 1 3 0\"></path><path d=\"M10.5 14.6l-3 5.19a9 9 0 0 1 -4.5 -7.79h6a3 3 0 0 0 1.5 2.6\"></path></svg>', 'radiation-alt', 'radiologický', 'yellow'),
(8, 'standardy', 'standard', 'Rehabilitační', 'rehabilitacni', 'rehabilitacni.png', '<svg class=\"icon text-reha\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M9 15l-1 -3l4 -2l4 1h3.5\"></path><circle cx=\"4\" cy=\"19\" r=\"1\"></circle><circle cx=\"12\" cy=\"6\" r=\"1\"></circle><path d=\"M12 17v-7\"></path><path d=\"M8 20h7l1 -4l4 -2\"></path><path d=\"M18 20h3\"></path></svg>', 'crutch', 'rehabilitační', 'reha'),
(9, 'standardy', 'standard', 'Pracovní', 'opl', 'opl.png', '<svg class=\"icon text-cyan\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><line x1=\"14\" y1=\"12\" x2=\"14\" y2=\"12.01\"></line><line x1=\"10\" y1=\"12\" x2=\"10\" y2=\"12.01\"></line><line x1=\"12\" y1=\"10\" x2=\"12\" y2=\"10.01\"></line><line x1=\"12\" y1=\"14\" x2=\"12\" y2=\"14.01\"></line><path d=\"M4.5 12.5l8 -8a4.94 4.94 0 0 1 7 7l-8 8a4.94 4.94 0 0 1 -7 -7\"></path></svg>', 'briefcase-medical', 'pracovní', 'cyan'),
(10, 'standardy', 'standard', 'Laboratorní', 'okb', 'okb.png', '<svg class=\"icon text-purple\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M20 8.04l-12.122 12.124a2.857 2.857 0 1 1 -4.041 -4.04l12.122 -12.124\"></path><path d=\"M7 13h8\"></path><path d=\"M19 15l1.5 1.6a2 2 0 1 1 -3 0l1.5 -1.6z\"></path><path d=\"M15 3l6 6\"></path></svg>', 'flask', 'laboratorní', 'purple'),
(11, 'standardy', 'standard', 'Logopedické', 'logopedicke', 'logopedicke.png', '<svg class=\"icon text-teal\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M21 14l-3 -3h-7a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1h9a1 1 0 0 1 1 1v10\"></path><path d=\"M14 15v2a1 1 0 0 1 -1 1h-7l-3 3v-10a1 1 0 0 1 1 -1h2\"></path></svg>', 'comments', 'logopedický', 'teal'),
(12, 'standardy', 'standard', 'Legislativní', 'legislativni', 'legislativni.png', '<svg class=\"icon text-orange\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M21 17.85h-18c0 -4.05 1.421 -4.05 3.79 -4.05c5.21 0 1.21 -4.59 1.21 -6.8a4 4 0 1 1 8 0c0 2.21 -4 6.8 1.21 6.8c2.369 0 3.79 0 3.79 4.05z\"></path><path d=\"M5 21h14\"></path></svg>', 'stamp', 'legislativní', 'orange'),
(13, 'dokumenty', 'dokument', 'Personální', 'personalni', 'personalni.png', '<svg class=\"icon text-green\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M12 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0\"></path><path d=\"M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2\"></path></svg>', 'users', 'personální', 'green'),
(14, 'dokumenty', 'dokument', 'Sesterská', 'sesterska', 'sesterska.png', '<svg class=\"icon text-red\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M12 6c2.941 0 5.685 .847 8 2.31l-2 9.69h-12l-2 -9.691a14.93 14.93 0 0 1 8 -2.309z\"></path><path d=\"M10 12h4\"></path><path d=\"M12 10v4\"></path></svg>', 'nurse', 'sesterský', 'red'),
(15, 'dokumenty', 'dokument', 'Hygienická', 'hygiena', 'hygiena.png', '<svg class=\"icon text-azure\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M7 21h10v-10a3 3 0 0 0 -3 -3h-4a3 3 0 0 0 -3 3v10z\"></path><path d=\"M15 3h-6a2 2 0 0 0 -2 2\"></path><path d=\"M12 3v5\"></path><path d=\"M12 11v4\"></path><path d=\"M10 13h4\"></path></svg>', '', 'hygienický', 'azure'),
(16, 'dokumenty', 'dokument', 'Pacientská', 'pacient', 'pacient.png', '<svg class=\"icon text-yellow\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\" stroke-width=\"21\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M11 21l-1 -4l-2 -3v-6\"></path><path d=\"M5 14l-1 -3l4 -3l3 2l3 .5\"></path><circle cx=\"8\" cy=\"4\" r=\"1\"></circle><path d=\"M7 17l-2 4\"></path><path d=\"M16 21v-8.5a1.5 1.5 0 0 1 3 0v.5\"></path></svg>', '', 'pacientský', 'yellow'),
(17, 'dokumenty', 'dokument', 'Laboratorní', 'okb', 'okb.png', '<svg class=\"icon text-purple\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M20 8.04l-12.122 12.124a2.857 2.857 0 1 1 -4.041 -4.04l12.122 -12.124\"></path><path d=\"M7 13h8\"></path><path d=\"M19 15l1.5 1.6a2 2 0 1 1 -3 0l1.5 -1.6z\"></path><path d=\"M15 3l6 6\"></path></svg>', '', 'laboratorní', 'purple'),
(18, 'dokumenty', 'dokument', 'Radiologická', 'rdg', 'rdg.png', '<svg class=\"icon text-orange\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M13.5 14.6l3 5.19a9 9 0 0 0 4.5 -7.79h-6a3 3 0 0 1 -1.5 2.6\"></path><path d=\"M13.5 9.4l3 -5.19a9 9 0 0 0 -9 0l3 5.19a3 3 0 0 1 3 0\"></path><path d=\"M10.5 14.6l-3 5.19a9 9 0 0 1 -4.5 -7.79h6a3 3 0 0 0 1.5 2.6\"></path></svg>', '', 'radiologický', 'orange'),
(19, 'dokumenty', 'dokument', 'IT', 'it', 'it.png', '<svg class=\"icon text-blue\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M10 15h-6a1 1 0 0 1 -1 -1v-8a1 1 0 0 1 1 -1h6\"></path><rect x=\"13\" y=\"4\" width=\"8\" height=\"16\" rx=\"1\"></rect><line x1=\"7\" y1=\"19\" x2=\"10\" y2=\"19\"></line><line x1=\"17\" y1=\"8\" x2=\"17\" y2=\"8.01\"></line><circle cx=\"17\" cy=\"16\" r=\"1\"></circle><line x1=\"9\" y1=\"15\" x2=\"9\" y2=\"19\"></line></svg>', '', 'IT', 'blue'),
(20, 'dokumenty', 'dokument', 'KPR', 'kpr', 'kpr.png', '<svg class=\"icon text-pink\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M19.5 13.572l-7.5 7.428l-2.896 -2.868m-6.117 -8.104a5 5 0 0 1 9.013 -3.022a5 5 0 1 1 7.5 6.572\"></path><path d=\"M3 13h2l2 3l2 -6l1 3h3\"></path></svg>', '', 'KPR', 'pink'),
(21, 'dokumenty', 'dokument', 'Komunikační', 'komunikacni-karty', 'komunikacni-karty.png', '<svg class=\"icon text-purple\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M3.604 7.197l7.138 -3.109a0.96 .96 0 0 1 1.27 .527l4.924 11.902a1.004 1.004 0 0 1 -.514 1.304l-7.137 3.109a0.96 .96 0 0 1 -1.271 -.527l-4.924 -11.903a1.005 1.005 0 0 1 .514 -1.304z\"></path><path d=\"M15 4h1a1 1 0 0 1 1 1v3.5\"></path><path d=\"M20 6c.264 .112 .52 .217 .768 .315a1 1 0 0 1 .53 1.311l-2.298 5.374\"></path></svg>', '', 'komunikační', 'purple'),
(22, 'dokumenty', 'dokument', 'Vyhodnocovací', 'vyhodnoceni-dotazniku', 'vyhodnoceni-dotazniku.png', '<svg class=\"icon text-lime\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\" stroke-width=\"21\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2\"></path><rect x=\"9\" y=\"3\" width=\"6\" height=\"4\" rx=\"2\"></rect><path d=\"M9 14h.01\"></path><path d=\"M9 17h.01\"></path><path d=\"M12 16l1 1l3 -3\"></path></svg>', '', 'vyhodnocovací', 'lime'),
(23, 'dokumenty', 'dokument', 'Postupová', 'navody', 'navody.png', '<svg class=\"icon text-teal\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><circle cx=\"12\" cy=\"12\" r=\"9\"></circle><line x1=\"12\" y1=\"17\" x2=\"12\" y2=\"17.01\"></line><path d=\"M12 13.5a1.5 1.5 0 0 1 1 -1.5a2.6 2.6 0 1 0 -3 -4\"></path></svg>', '', 'postupový', 'teal'),
(24, 'dokumenty', 'dokument', 'Ukrajinská', 'ukrajinske-dokumenty', 'ukrajinske-dokumenty.png', '<svg class=\"icon text-yellow\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0\"></path><path d=\"M3.6 9l16.8 0\"></path><path d=\"M3.6 15l16.8 0\"></path><path d=\"M11.5 3a17 17 0 0 0 0 18\"></path><path d=\"M12.5 3a17 17 0 0 1 0 18\"></path>\n</svg>', '', 'ukrajinský', 'yellow');

-- --------------------------------------------------------

--
-- Struktura tabulky `departments`
--

CREATE TABLE `departments` (
  `id` bigint UNSIGNED NOT NULL,
  `department_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `center_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
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
  `accordion_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `accordion_group` int DEFAULT NULL,
  `position` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `processed` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authorize` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `examine` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `efficiency` date DEFAULT NULL,
  `revision` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `next_revision_date` date DEFAULT NULL,
  `tags` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revision_date` date DEFAULT NULL,
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `unique_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Rozpracováno','Schváleno') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int NOT NULL,
  `onscreen` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `documents`
--

INSERT INTO `documents` (`id`, `category_id`, `accordion_name`, `accordion_group`, `position`, `name`, `description`, `processed`, `authorize`, `examine`, `efficiency`, `revision`, `next_revision_date`, `tags`, `revision_date`, `file`, `unique_code`, `status`, `user_id`, `onscreen`, `created_at`, `updated_at`) VALUES
(1, 3, 'Akutní koronární syndromy', NULL, 1, 'Akutní koronární syndromy', 'Soubor minimálních diagnostických a terapeutických standardů u pacientů s akutními koronárními syndromy', 'MUDr. Janková Pavlína', 'MUDr. Canibal Tomáš', 'MUDr. Kultan Peter', '2007-01-01', '5', '2023-12-01', 'MEZ-JIP, NEU-JIP, INT-ODD, NEU-ODD', '2022-12-01', 'standardy_lecebne-akutni_koronarni_syndromy-revize-5.pdf', 'STD3#1', 'Schváleno', 11, 14, '2023-01-17 21:02:48', '2023-01-27 09:46:52'),
(2, 3, 'ATB profylaxe', NULL, 2, 'ATB profylaxe', 'Antibiotiková profylaxe u operovaných pacientů', 'MUDr. Hurtová Šárka', 'MUDr. Canibal Tomáš', 'MUDr. Adamová Andrea', '2014-01-01', '3', '2023-12-01', 'ONP, ORT', '2022-12-01', 'standardy_lecebne-antibiotikova_profylaxe_u_operovanych_pacientu-revize-3.pdf', 'STD3#2', 'Schváleno', 11, 14, '2023-01-13 21:16:31', '2023-01-29 18:25:26'),
(3, 3, 'Crohnova choroba', NULL, 3, 'Crohnova choroba', 'Soubor minimálních diagnostických a terapeutických standardů u pacientů s crohnovou chorobou', 'MUDr. Střída Josef', 'MUDr. Canibal Tomáš', 'MUDr. Kultan Peter', '2007-01-01', '5', '2023-12-01', 'MEZ-JIP, INT-ODD', '2022-12-01', 'standardy_lecebne-crohnova_choroba-revize-5.pdf', 'STD3#3', 'Schváleno', 11, NULL, '2023-01-13 21:17:50', '2023-01-21 18:42:01'),
(4, 3, 'Demence', NULL, 4, 'Demence', 'Soubor minimálních diagnostických a terapeutických standardů u pacientů s demencí', 'MUDr. Böhm Marek', 'MUDr. Canibal Tomáš', 'MUDr. Vlachopulu Barbara', '2005-07-01', '6', '2023-12-01', 'NEU-ODD', '2022-12-01', 'standardy_lecebne-demence-revize-6.pdf', 'STD3#4', 'Schváleno', 11, NULL, '2023-01-13 21:28:06', '2023-01-26 20:46:24'),
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
(30, 11, 'Standard logopedické péče', NULL, 3, 'Standard logopedické péče', 'Logopedická intervence u osob s narušenou komunikační schopností', NULL, 'Rada kvality', NULL, '2011-08-01', '3', '2022-11-01', 'LOG', '2021-11-01', 'standardy_logopedicke-logopedicka_intervence_u_osob_s_narusenou_komunikacni_schopnosti-revize-3.pdf', 'STD11#3', 'Schváleno', 11, 20, '2023-01-24 13:37:10', '2023-01-26 21:08:44'),
(31, 9, 'Standard ošetřovatelské péče - OCHP', NULL, 1, 'Standard ošetřovatelské péče - OCHP', 'Spirometr', 'Kuzníková Jaroslava,', 'Rada kvality', 'Kurusová Alexandra,', '2008-04-01', '6', '2022-10-01', 'OPL', '2021-10-01', 'standardy_opl-spirometr-revize-6.pdf', 'STD9#1', 'Schváleno', 11, NULL, '2023-01-25 06:53:18', '2023-01-25 07:01:06'),
(32, 9, 'Standard ošetřovatelské péče - OCHP', NULL, 2, 'Standard ošetřovatelské péče - OCHP', 'Pletyzmigrafie', 'Kuzníková Jaroslava', 'Rada kvality', 'Kusová Zdeňka', '2008-04-01', '6', '2022-10-01', 'OPL', '2021-10-01', 'standardy_opl-pletyzmigrafie-revize-6.pdf', 'STD9#2', 'Schváleno', 11, NULL, '2023-01-25 07:06:22', '2023-01-25 07:06:46'),
(33, 9, 'Standard ošetřovatelské péče - OCHP', NULL, 3, 'Standard ošetřovatelské péče - OCHP', 'Chladový test', 'Kuzníková Jaroslava', 'Rada kvality', 'Kusová Zdeňka', '2008-04-01', '6', '2023-10-01', 'OPL', '2021-10-01', 'standardy_opl-chladovy_test-revize-6.pdf', 'STD9#3', 'Schváleno', 11, NULL, '2023-01-25 07:08:30', '2023-01-25 07:08:30'),
(34, 9, 'Standard ošetřovatelské péče - OCHP', NULL, 4, 'Standard ošetřovatelské péče - OCHP', 'Dvoustupňová dezinfekce spirometru', 'Kuzníková Jaroslava', 'Rada kvality', 'Kusová Zdeňka', '2021-10-01', '2', '2023-10-01', 'OPL', '2021-10-01', 'standardy_opl-dvoustupnova_dezinfekce_spirometru-revize-2.pdf', 'STD9#4', 'Schváleno', 11, NULL, '2023-01-25 07:09:26', '2023-01-25 07:09:26'),
(35, 8, 'Pracovní standard pro rehabilitační oddělení', NULL, 1, 'Pracovní standard pro rehabilitační oddělení', 'Příjem pacienta na rehabilitační ambulanci', 'Kolektiv fyzioterapeutů', 'Rada kvality', NULL, '2004-04-01', '8', '2022-10-01', 'REH-AMB', '2021-10-01', 'standardy_rehabilitacni-prijem_pacienta_na_rehabilitacni_ambulanci-revize-8.pdf', 'STD8#1', 'Schváleno', 11, NULL, '2023-01-25 07:19:32', '2023-01-27 08:37:51'),
(36, 8, 'Pracovní standard pro rehabilitační oddělení', NULL, 2, 'Pracovní standard pro rehabilitační oddělení', 'Individální kinezioterapie', 'Kolektiv fyzioterapeutů', 'Rada kvality', NULL, '2004-04-01', '8', '2022-10-01', 'REH-AMB, REH-ODD', '2021-10-01', 'standardy_rehabilitacni-individalni_kinezioterapie-revize-8.pdf', 'STD8#2', 'Schváleno', 11, NULL, '2023-01-25 07:32:31', '2023-01-27 08:37:57'),
(37, 8, 'Pracovní standard pro rehabilitační oddělení', NULL, 3, 'Pracovní standard pro rehabilitační oddělení', 'Vodoléčba - cvičení v bazénu', 'Kolektiv fyzioterapeutů', 'Rada kvality', 'Bc. Bělicová Taťána', '2004-04-01', '8', '2022-10-01', 'REH-AMB, REH-ODD', '2021-10-01', 'standardy_rehabilitacni-vodolecba_-_cviceni_v_bazenu-revize-8.pdf', 'STD8#3', 'Schváleno', 11, NULL, '2023-01-25 07:34:58', '2023-01-27 08:38:03'),
(38, 8, 'Pracovní standard pro rehabilitační oddělení', NULL, 4, 'Pracovní standard pro rehabilitační oddělení', 'Aplikace vířivé koupele', 'Kolektiv fyzioterapeutů', 'Rada kvality', 'Bc. Bělicová Taťána', '2004-04-01', '8', '2022-10-01', 'REH-AMB, REH-ODD', '2021-10-01', 'standardy_rehabilitacni-aplikace_virive_koupele-revize-8.pdf', 'STD8#4', 'Schváleno', 11, NULL, '2023-01-25 07:37:08', '2023-01-26 19:00:25'),
(39, 8, 'Pracovní standard pro rehabilitační oddělení', NULL, 5, 'Pracovní standard pro rehabilitační oddělení', 'Aplikace podvodní masaže', 'Kolektiv fyzioterapeutů', 'Rada kvality', 'Bc. Bělicová Taťána', '2004-04-01', '8', '2022-10-01', 'REH-AMB, REH-ODD', '2021-10-01', 'standardy_rehabilitacni-aplikace_podvodni_masaze-revize-8.pdf', 'STD8#5', 'Schváleno', 11, NULL, '2023-01-25 07:43:30', '2023-01-26 19:00:32'),
(40, 8, 'Pracovní standard pro rehabilitační oddělení', NULL, 6, 'Pracovní standard pro rehabilitační oddělení', 'Thermo terapie', 'Kolektiv fyzioterapeutů', 'Rada kvality', 'Bc. Bělicová Taťána', '2004-04-01', '8', '2023-10-01', 'REH-AMB, REH-ODD', '2021-10-01', 'standardy_rehabilitacni-thermo_terapie-revize-8.pdf', 'STD8#6', 'Schváleno', 11, NULL, '2023-01-25 07:45:21', '2023-01-25 07:45:21'),
(41, 8, 'Pracovní standard pro rehabilitační oddělení', NULL, 7, 'Pracovní standard pro rehabilitační oddělení', 'Aplikace fototerapie', 'Kolektiv fyzioterapeutů', 'Rada kvality', 'Bc. Bělicová Taťána', '2004-04-01', '8', '2023-10-01', 'REH-AMB, REH-ODD', '2021-10-01', 'sesterska_dokumentace.pdf', 'STD8#7', 'Schváleno', 11, NULL, '2023-01-25 07:47:12', '2023-01-25 07:47:12'),
(42, 14, 'Zápis o zneškodnění návykové látky', NULL, 2, 'Zápis o zneškodnění návykové látky', 'Zápis o zneškodnění návykové látky', NULL, NULL, NULL, '2014-06-01', 'červen 2022', '2023-06-01', NULL, '2022-06-01', 'dokumenty_sesterska-zapis_o_zneskodneni_navykove_latky-revize-cerven_2022.pdf', 'STD8#7', 'Schváleno', 11, NULL, '2023-01-25 07:47:12', '2023-01-29 21:52:56'),
(43, 14, 'Zápis o předání návykové látky', NULL, 1, 'Zápis o předání návykové látky', 'Zápis o předání návykové látky', NULL, NULL, NULL, '2014-06-01', 'červen 2022', '2023-06-01', NULL, '2022-06-01', 'dokumenty_sesterska-zapis_o_predani_navykove_latky-revize-cerven_2022.pdf', 'STD8#7', 'Schváleno', 11, NULL, '2023-01-25 07:47:12', '2023-01-29 21:46:46'),
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
(71, 10, 'Standardní operační postup – OKB úsek krevní banka', NULL, 28, 'Standardní operační postup – OKB úsek krevní banka', 'STANDARD - Zrušen', NULL, NULL, NULL, '2021-12-01', '0', '2022-12-01', 'OKB', '2021-12-01', 'standardy_okb-standard_-_zrusen-revize-0.pdf', 'STD10#28', 'Schváleno', 11, 1, '2023-01-26 10:41:36', '2023-01-26 17:42:08'),
(72, 10, 'Standardní operační postup – OKB úsek krevní banka', NULL, 29, 'Standardní operační postup – OKB úsek krevní banka', 'Revize dokumentů (sop) na krevní bance', NULL, NULL, NULL, '2011-11-01', '4', '2023-12-01', 'OKB', '2021-12-01', 'standardy_okb-revize_dokumentu_(sop)_na_krevni_bance-revize-4.pdf', 'STD10#29', 'Schváleno', 11, NULL, '2023-01-26 10:43:14', '2023-01-26 10:43:14'),
(73, 10, 'Standardní operační postup – OKB úsek krevní banka', NULL, 30, 'Standardní operační postup – OKB úsek krevní banka', 'Rozmrazování skmp a ohřev erytrocytárních transfuzních přípravků', NULL, NULL, NULL, '2018-01-01', '2', '2023-12-01', NULL, '2021-12-01', 'standardy_okb-rozmrazovani_skmp_a_ohrev_erytrocytarnich_transfuznich_pripravku-revize-2.pdf', 'STD10#30', 'Schváleno', 11, 1, '2023-01-26 10:44:36', '2023-01-26 10:44:36'),
(74, 6, 'Standard ošetřovatelské péče - anesteziologický', NULL, 1, 'Standard ošetřovatelské péče - anesteziologický', 'Příprava a asistence u celkové anestezie u TEP kyčle', NULL, NULL, NULL, '2004-04-01', '7', '2022-10-01', 'ANEST', '2021-10-01', 'standardy_anesteziologicke-priprava_a_asistence_u_celkove_anestezie_u_tep_kycle-revize-7.pdf', 'STD6#1', 'Schváleno', 11, 13, '2023-01-26 11:04:19', '2023-01-29 11:19:23'),
(75, 6, 'Standard ošetřovatelské péče - anesteziologický', NULL, 2, 'Standard ošetřovatelské péče - anesteziologický', 'Příprava a asistence u celkové anestezie u operace páteře', NULL, NULL, NULL, '2004-04-01', '7', '2022-10-01', NULL, '2021-10-01', 'standardy_anesteziologicke-priprava_a_asistence_u_celkove_anestezie_u_operace_patere-revize-7.pdf', 'STD6#2', 'Schváleno', 11, NULL, '2023-01-26 11:06:58', '2023-01-26 11:23:54'),
(76, 6, 'Standard ošetřovatelské péče - anesteziologický', NULL, 3, 'Standard ošetřovatelské péče - anesteziologický', 'Příprava a asistence u celkové anestezie u periferní nervové blokád', NULL, NULL, NULL, '2005-09-20', '7', '2022-10-01', 'ANEST', '2021-10-01', 'standardy_anesteziologicke-priprava_a_asistence_u_celkove_anestezie_u_periferni_nervove_blokad-revize-7.pdf', 'STD6#3', 'Schváleno', 11, NULL, '2023-01-26 11:09:12', '2023-01-26 11:24:07'),
(77, 6, 'Standard ošetřovatelské péče - anesteziologický', NULL, 4, 'Standard ošetřovatelské péče - anesteziologický', 'Příprava a asistence u epidurální a subarachnoidální anestezie', NULL, NULL, NULL, '2005-09-22', '7', '2022-10-01', 'ANEST', '2021-10-01', 'standardy_anesteziologicke-priprava_a_asistence_u_epiduralni_a_subarachnoidalni_anestezie-revize-7.pdf', 'STD6#4', 'Schváleno', 11, NULL, '2023-01-26 11:10:19', '2023-01-26 11:24:17'),
(79, 13, 'Shannon Hubbard', NULL, 1, 'Shannon Hubbard', 'Ea illum harum sequ', 'MUDr. Šupšáková Petra', 'MUDr. Janková Pavlína', 'MUDr. Krajnová Pavla', '1979-11-02', '2', '2004-07-15', 'Vero qui molestiae r', '2003-07-15', 'standardy_personalni-ea_illum_harum_sequ-revize-222.pdf', 'STD13#2', 'Schváleno', 11, NULL, '2023-01-26 20:29:15', '2023-01-29 18:17:37'),
(81, 14, 'Identifikační údaje k opiátové knize', NULL, 3, 'Identifikační údaje k opiátové knize', 'Identifikační údaje k opiátové knize', NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, 'dokumenty-sesterska-identifikacni_udaje_k_opiatove_knize-revize-1.pdf', 'DOC14#2', 'Schváleno', 11, NULL, '2023-01-27 07:31:00', '2023-01-27 08:19:10'),
(82, 14, 'Akutní karta pro standardní oddělení', NULL, 4, 'Akutní karta pro standardní oddělení', 'Akutní karta pro standardní oddělení', NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, 'dokumenty-sesterska-akutni_karta_pro_standardni_oddeleni-revize-1.pdf', 'DOC14#4', 'Schváleno', 11, NULL, '2023-01-27 07:31:37', '2023-01-27 08:19:28'),
(83, 14, 'Protokol analytické kontroly glykémie', NULL, 5, 'Protokol analytické kontroly glykémie', 'Protokol analytické kontroly glykémie', NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, 'dokumenty-sesterska-protokol_analyticke_kontroly_glykemie-revize-1.pdf', 'DOC14#5', 'Schváleno', 11, NULL, '2023-01-27 07:32:08', '2023-01-27 08:19:45'),
(84, 14, 'Transfuzní záznam', NULL, 6, 'Transfuzní záznam', 'Transfuzní záznam', NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, 'dokumenty-sesterska-transfuzni_zaznam-revize-1.pdf', 'DOC14#6', 'Schváleno', 11, NULL, '2023-01-27 07:32:33', '2023-01-27 08:19:59'),
(85, 14, 'Hlášení o nepodaných transfuzních přípravcích', NULL, 7, 'Hlášení o nepodaných transfuzních přípravcích', 'Hlášení o nepodaných transfuzních přípravcích', NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, 'dokumenty-sesterska-hlaseni_o_nepodanych_transfuznich_pripravcich-revize-1.pdf', 'DOC14#7', 'Schváleno', 11, NULL, '2023-01-27 07:33:50', '2023-01-27 08:20:18'),
(86, 14, 'Protokol o likvidaci transfuzního přípravku', NULL, 8, 'Protokol o likvidaci transfuzního přípravku', 'Protokol o likvidaci transfuzního přípravku', NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, 'dokumenty-sesterska-protokol_o_likvidaci_transfuzniho_pripravku-revize-1.pdf', 'DOC14#8', 'Schváleno', 11, NULL, '2023-01-27 07:34:16', '2023-01-27 08:20:34'),
(87, 14, 'Hlášení reakcí po transfuzích', NULL, 9, 'Hlášení reakcí po transfuzích', 'Hlášení reakcí po transfuzích', NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, 'dokumenty-sesterska-hlaseni_reakci_po_transfuzich-revize-1.pdf', 'DOC14#9', 'Schváleno', 11, NULL, '2023-01-27 07:34:46', '2023-01-27 08:21:26'),
(88, 14, 'Proškolení obsluhy zdravotnického prostředku', NULL, 10, 'Proškolení obsluhy zdravotnického prostředku', 'Proškolení obsluhy zdravotnického prostředku', NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, 'dokumenty-sesterska-proskoleni_obsluhy_zdravotnickeho_prostredku-revize-1.pdf', 'DOC14#10', 'Schváleno', 11, NULL, '2023-01-27 07:35:05', '2023-01-27 08:21:42'),
(89, 2, 'Standard ošetřovatelské péče', NULL, 1, 'Standard ošetřovatelské péče', 'Příjem nemocného na standardní oddělení', 'Sekaninová Anna', 'Rada kvality', 'Bc. Bělicová Taťána', '2022-03-01', '13', '2023-06-01', NULL, '2022-03-01', 'standardy_osetrovatelske-prijem_nemocneho_na_standardni_oddeleni-revize-13.pdf', 'STD2#1', 'Schváleno', 11, NULL, '2023-01-27 08:45:43', '2023-01-27 08:45:43'),
(90, 2, 'Standard ošetřovatelské péče', NULL, 2, 'Standard ošetřovatelské péče', 'Propuštění nebo překlad nemocného', 'Sekaninová Anna', 'Rada kvality', 'Bc. Bělicová Taťána', '2002-09-01', '13', '2023-06-01', NULL, '2021-06-01', 'standardy_osetrovatelske-propusteni_nebo_preklad_nemocneho-revize-13.pdf', 'STD2#2', 'Schváleno', 11, NULL, '2023-01-27 08:51:19', '2023-01-27 08:51:19'),
(91, 2, 'Hygienická péče o nemocné', NULL, 3, 'Hygienická péče o nemocné', 'Hygienická péče o nemocné', 'Rada kvality', 'Rada kvality', 'Bc. Bělicová Taťána', '2002-09-01', '9', '2022-06-01', NULL, '2021-06-01', 'standardy_osetrovatelske-hygienicka_pece_o_nemocne-revize-9.pdf', 'STD2#3', 'Schváleno', 11, NULL, '2023-01-27 08:56:21', '2023-01-27 09:37:38'),
(92, 2, 'Standard ošetřovatelské péče', NULL, 4, 'Standard ošetřovatelské péče', 'Měření vitálních funkcí', 'Sekaninová Anna', 'Rada kvality', 'MUDr. Kalina František', '2002-09-01', '8', '2023-06-01', NULL, '2021-06-01', 'standardy_osetrovatelske-mereni_vitalnich_funkci-revize-8.pdf', 'STD2#4', 'Schváleno', 11, NULL, '2023-01-27 08:58:23', '2023-01-27 08:58:23'),
(93, 2, 'Standard ošetřovatelské péče', NULL, 5, 'Standard ošetřovatelské péče', 'Bezpečný odběr biologického materiálu', 'Sekaninová Anna', 'Rada kvality', NULL, '2002-09-01', '9', '2022-06-01', NULL, '2021-06-01', 'standardy_osetrovatelske-bezpecny_odber_biologickeho_materialu-revize-9.pdf', 'STD2#5', 'Schváleno', 11, NULL, '2023-01-27 09:01:50', '2023-01-29 20:08:17'),
(94, 2, 'Standard ošetřovatelské péče', NULL, 7, 'Standard ošetřovatelské péče', 'Příprava a podávání léků injekční formou aplikace infuzí', NULL, NULL, NULL, '2002-09-01', '9', '2022-06-01', NULL, '2021-06-01', 'standardy_osetrovatelske-priprava_a_podavani_leku_injekcni_formou_aplikace_infuzi-revize-9.pdf', 'STD2#6', 'Schváleno', 11, NULL, '2023-01-27 09:08:58', '2023-01-29 20:13:02'),
(95, 13, 'Claire Fitzpatrick', NULL, 2, 'Claire Fitzpatrick', 'Ut iure esse dicta o', 'MUDr. Bernacká Janka', 'MUDr. Hurtová Šárka', 'MUDr. Dadoková Monika', '1979-08-07', '1', '1978-06-05', 'Sed ut qui aut volup', '1977-06-05', 'standardy_personalni-ut_iure_esse_dicta_o-revize-1.pdf', 'DOC13#2', 'Schváleno', 11, NULL, '2023-01-29 18:13:47', '2023-01-29 18:13:56');

-- --------------------------------------------------------

--
-- Struktura tabulky `employees`
--

CREATE TABLE `employees` (
  `id` bigint UNSIGNED NOT NULL,
  `personal_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_preffix` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `married_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_suffix` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_card` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `coffee` enum('A','N') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `employment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int DEFAULT NULL,
  `standard_signature` int DEFAULT NULL,
  `status` enum('Aktivní','Neaktivní','Mateřská') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Neaktivní',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `employees`
--

INSERT INTO `employees` (`id`, `personal_number`, `image`, `title_preffix`, `last_name`, `middle_name`, `married_name`, `first_name`, `title_suffix`, `department_id`, `job_id`, `email`, `start_date`, `end_date`, `comment`, `phone`, `mobile`, `id_card`, `coffee`, `employment`, `position`, `standard_signature`, `status`, `created_at`, `updated_at`) VALUES
(1, '63705', '63705.jpg', NULL, 'Bajgerová', NULL, NULL, 'Jana', NULL, '23', '55', 'bajgerova@khn.cz', '1996-02-01', NULL, 'a31561', NULL, '725669166', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-09-20 08:39:17'),
(2, '64108', '64108.jpg', NULL, 'Blínová', NULL, NULL, 'Andrea', NULL, '14', '36', 'x', '1996-02-01', NULL, 'a908c9', '', '', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2020-03-03 07:44:55'),
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
(222, '61025', '61025.jpg', NULL, 'Przybylová', NULL, 'Gutová', 'Gabriela', NULL, '28', '55', 'przybylova@khn.cz', '2010-01-01', NULL, 'ffa600', '119', '731147824', 'Vydáno', 'N', 'HPP', 999, NULL, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:27:19'),
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
  `id` bigint UNSIGNED NOT NULL,
  `evidence_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `evidence_pieces` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `instructions`
--

CREATE TABLE `instructions` (
  `id` bigint UNSIGNED NOT NULL,
  `standard_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `standard_category_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `revision` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Rozpracováno','Schváleno') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `job_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
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
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
(133, '2022_12_14_084811_create_categories_table', 4),
(134, '2023_01_15_003551_create_calendar_table', 5),
(136, '2023_01_20_104223_create_navitems_table', 6);

-- --------------------------------------------------------

--
-- Struktura tabulky `navitems`
--

CREATE TABLE `navitems` (
  `id` bigint UNSIGNED NOT NULL,
  `position` int NOT NULL,
  `category_id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tooltip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_class` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fa_icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `svg_icon` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `navitems`
--

INSERT INTO `navitems` (`id`, `position`, `category_id`, `name`, `subname`, `alt_name`, `tooltip`, `color`, `icon_class`, `page_title`, `route`, `favicon`, `fa_icon`, `svg_icon`) VALUES
(1, 1, 1, 'Homepage', 'Intranet', 'Homepage', 'Domů', 'blue', 'text-blue', 'Homepage', 'home', 'home.png', 'fa-home', '<svg class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><polyline points=\"5 12 3 12 12 3 21 12 19 12\"></polyline><path d=\"M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7\"></path><path d=\"M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6\"></path></svg>');

-- --------------------------------------------------------

--
-- Struktura tabulky `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
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
  `printer_vendor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `printer_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `printer_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `toner_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `slides`
--

CREATE TABLE `slides` (
  `id` bigint UNSIGNED NOT NULL,
  `training_id` int NOT NULL,
  `slide_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `directory` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `toner_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `toner_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `toner_size` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `toner_price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `trainings`
--

CREATE TABLE `trainings` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `personal_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(11, '61625', 'Klika Miroslav', 'klika@khn.cz', NULL, '$2y$10$PSw5emAhbIR3u3sVNNg3iOe8t9z0Ct7dgJEKUud0jfeXFVkJzWZqK', NULL, NULL, 'zxn1aZCtuw2XezZRmBuaPzd99DCgvTTUECt0vo0nF9Rs0jlIMXUF2aoyVUDL', '2023-01-11 18:53:36', '2023-01-22 21:46:33'),
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
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `addons`
--
ALTER TABLE `addons`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pro tabulku `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
