-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Pát 20. led 2023, 21:49
-- Verze serveru: 10.4.24-MariaDB
-- Verze PHP: 7.4.28

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
-- Struktura tabulky `calendar`
--

CREATE TABLE `calendar` (
  `id` bigint(20) NOT NULL,
  `date` date DEFAULT NULL,
  `interni` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
