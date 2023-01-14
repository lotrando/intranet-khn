-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Počítač: localhost
-- Vytvořeno: Sob 14. led 2023, 13:09
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
-- Struktura tabulky `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `category_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `folder_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_icon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `svg_icon` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `button` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fa_icon` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `categories`
--

INSERT INTO `categories` (`id`, `category_type`, `category_name`, `folder_name`, `category_icon`, `svg_icon`, `button`, `color`, `fa_icon`) VALUES
(1, 'Standard', 'Akreditační', 'akreditacni', 'akreditacni.png', '<svg class=\"icon icon-tabler icon-tabler-file-certificate text-indigo\" xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\"\n                       stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">\n                    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>\n                    <path d=\"M14 3v4a1 1 0 0 0 1 1h4\"></path>\n                    <path d=\"M5 8v-3a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-5\"></path>\n                    <circle cx=\"6\" cy=\"14\" r=\"3\"></circle>\n                    <path d=\"M4.5 17l-1.5 5l3 -1.5l3 1.5l-1.5 -5\"></path>\n                  </svg>', 'akreditační', 'blue', 'certificate'),
(2, 'Standard', 'Ošetřovatelské', 'osetrovatelske', 'osetrovatelske.png', '<svg class=\"icon icon-tabler icon-tabler-stethoscope text-pink\" xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\"\n                       stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">\n                    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>\n                    <path d=\"M6 4h-1a2 2 0 0 0 -2 2v3.5h0a5.5 5.5 0 0 0 11 0v-3.5a2 2 0 0 0 -2 -2h-1\"></path>\n                    <path d=\"M8 15a6 6 0 1 0 12 0v-3\"></path>\n                    <path d=\"M11 3v2\"></path>\n                    <path d=\"M6 3v2\"></path>\n                    <circle cx=\"20\" cy=\"10\" r=\"2\"></circle>\n                  </svg>', 'ošetřovatelský', 'pink', 'stethoscope'),
(3, 'Standard', 'Léčebné', 'lecebne', 'lecebne.png', '<svg class=\"icon icon-tabler icon-tabler-hearts text-red\" xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\" stroke-width=\"1\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">\n                    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>\n                    <path d=\"M14.017 18.001l-2.017 1.999l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 0 1 8.153 5.784\"></path>\n                    <path d=\"M15.99 20l4.197 -4.223a2.81 2.81 0 0 0 .006 -3.948a2.747 2.747 0 0 0 -3.91 -.007l-.28 .282l-.279 -.283a2.747 2.747 0 0 0 -3.91 -.007a2.81 2.81 0 0 0 -.007 3.948l4.182 4.238z\">\n                    </path>\n                  </svg>', 'léčebný', 'red', 'heart'),
(4, 'Standard', 'Speciální', 'specialni', 'specialni.png', '<svg class=\"icon icon-tabler icon-tabler-hearts text-red\" xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\" stroke-width=\"1\"\n                       stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">\n                    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>\n                    <path d=\"M14.017 18.001l-2.017 1.999l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 0 1 8.153 5.784\"></path>\n                    <path\n                          d=\"M15.99 20l4.197 -4.223a2.81 2.81 0 0 0 .006 -3.948a2.747 2.747 0 0 0 -3.91 -.007l-.28 .282l-.279 -.283a2.747 2.747 0 0 0 -3.91 -.007a2.81 2.81 0 0 0 -.007 3.948l4.182 4.238z\">\n                    </path>\n                  </svg>', 'speciální', 'muted', 'notes-medical'),
(5, 'Standard', 'Operační', 'operacni', 'operacni.png', '<svg class=\"icon icon-tabler icon-tabler-slice text-lime\" xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\" stroke-width=\"1\"\n                       stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">\n                    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>\n                    <path d=\"M3 19l15 -15l3 3l-6 6l2 2a14 14 0 0 1 -14 4\"></path>\n                  </svg>', 'operační', 'lime', 'notes-medical'),
(6, 'Standard', 'Anesteziologické', 'anesteziologicke', 'anesteziologicke.png', '<svg class=\"icon icon-tabler icon-tabler-heart-rate-monitor text-purple\" xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\"\n                       stroke-width=\"1\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">\n                    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>\n                    <rect x=\"3\" y=\"4\" width=\"18\" height=\"12\" rx=\"1\"></rect>\n                    <path d=\"M7 20h10\"></path>\n                    <path d=\"M9 16v4\"></path>\n                    <path d=\"M15 16v4\"></path>\n                    <path d=\"M7 10h2l2 3l2 -6l1 3h3\"></path>\n                  </svg>', 'anesteziologický', 'purple', 'heartbeat'),
(7, 'Standard', 'RDG', 'rdg', 'rdg.png', '<svg class=\"icon icon-tabler icon-tabler-radioactive text-yellow\" xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\"\n                       stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">\n                    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>\n                    <path d=\"M13.5 14.6l3 5.19a9 9 0 0 0 4.5 -7.79h-6a3 3 0 0 1 -1.5 2.6\"></path>\n                    <path d=\"M13.5 9.4l3 -5.19a9 9 0 0 0 -9 0l3 5.19a3 3 0 0 1 3 0\"></path>\n                    <path d=\"M10.5 14.6l-3 5.19a9 9 0 0 1 -4.5 -7.79h6a3 3 0 0 0 1.5 2.6\"></path>\n                  </svg>', 'radiologický', 'yellow', 'radiation'),
(8, 'Standard', 'Rehabilitační', 'rehabilitacni', 'anesteziologicke.png', '<svg class=\"icon icon-tabler icon-tabler-physotherapist text-green\" xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\"\n                       stroke-width=\"1\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">\n                    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>\n                    <path d=\"M9 15l-1 -3l4 -2l4 1h3.5\"></path>\n                    <circle cx=\"4\" cy=\"19\" r=\"1\"></circle>\n                    <circle cx=\"12\" cy=\"6\" r=\"1\"></circle>\n                    <path d=\"M12 17v-7\"></path>\n                    <path d=\"M8 20h7l1 -4l4 -2\"></path>\n                    <path d=\"M18 20h3\"></path>\n                  </svg>', 'rehabilitační', 'green', 'crutch'),
(9, 'Standard', 'OPL', 'opl', 'opl.png', '<svg class=\"icon icon-tabler icon-tabler-bandage text-cyan\" xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\" stroke-width=\"1\"\n                       stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">\n                    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>\n                    <line x1=\"14\" y1=\"12\" x2=\"14\" y2=\"12.01\"></line>\n                    <line x1=\"10\" y1=\"12\" x2=\"10\" y2=\"12.01\"></line>\n                    <line x1=\"12\" y1=\"10\" x2=\"12\" y2=\"10.01\"></line>\n                    <line x1=\"12\" y1=\"14\" x2=\"12\" y2=\"14.01\"></line>\n                    <path d=\"M4.5 12.5l8 -8a4.94 4.94 0 0 1 7 7l-8 8a4.94 4.94 0 0 1 -7 -7\"></path>\n                  </svg>', 'pracovní', 'teal', 'hard-hat'),
(10, 'Standard', 'OKB', 'okb', 'okb.png', '<svg class=\"icon icon-tabler icon-tabler-flask text-purple\" xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\" stroke-width=\"1\"\n                       stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">\n                    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>\n                    <line x1=\"9\" y1=\"3\" x2=\"15\" y2=\"3\"></line>\n                    <line x1=\"10\" y1=\"9\" x2=\"14\" y2=\"9\"></line>\n                    <path d=\"M10 3v6l-4 11a0.7 .7 0 0 0 .5 1h11a0.7 .7 0 0 0 .5 -1l-4 -11v-6\"></path>\n                  </svg>', 'laboratorní', 'puple', 'flask'),
(11, 'Standard', 'Logopedické', 'logopedicke', 'logopedicke.png', '<svg class=\"icon icon-tabler icon-tabler-messages text-teal\" xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\" stroke-width=\"2\"\n                       stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">\n                    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>\n                    <path d=\"M21 14l-3 -3h-7a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1h9a1 1 0 0 1 1 1v10\"></path>\n                    <path d=\"M14 15v2a1 1 0 0 1 -1 1h-7l-3 3v-10a1 1 0 0 1 1 -1h2\"></path>\n                  </svg>', 'anesteziologický', 'cyan', 'comments'),
(12, 'Standard', 'Legislativní', 'legislativni', 'legislativni.png', '<svg class=\"icon icon-tabler icon-tabler-certificate text-orange\" xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\"\n                       stroke-width=\"1\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">\n                    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>\n                    <circle cx=\"15\" cy=\"15\" r=\"3\"></circle>\n                    <path d=\"M13 17.5v4.5l2 -1.5l2 1.5v-4.5\"></path>\n                    <path d=\"M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73\"></path>\n                    <line x1=\"6\" y1=\"9\" x2=\"18\" y2=\"9\"></line>\n                    <line x1=\"6\" y1=\"12\" x2=\"9\" y2=\"12\"></line>\n                    <line x1=\"6\" y1=\"15\" x2=\"8\" y2=\"15\"></line>\n                  </svg>', 'legislativní', 'orange', 'stamp');

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
