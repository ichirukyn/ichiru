-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 15 2020 г., 21:37
-- Версия сервера: 5.6.43
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `viid`
--

-- --------------------------------------------------------

--
-- Структура таблицы `exp`
--

CREATE TABLE `exp` (
  `user_id` int(11) NOT NULL,
  `user_exp` int(11) NOT NULL DEFAULT '1',
  `user_lvl` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `exp`
--

INSERT INTO `exp` (`user_id`, `user_exp`, `user_lvl`) VALUES
(8, 1, 1),
(13, 1, 1),
(14, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `levels`
--

CREATE TABLE `levels` (
  `lvl` int(11) DEFAULT NULL,
  `exp_to_lvl` int(11) DEFAULT NULL,
  `exp_total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `levels`
--

INSERT INTO `levels` (`lvl`, `exp_to_lvl`, `exp_total`) VALUES
(2, 25, 25),
(3, 66, 91),
(4, 117, 208),
(5, 175, 383),
(6, 239, 622),
(7, 309, 931),
(8, 383, 1314),
(9, 462, 1776),
(10, 544, 2320),
(11, 631, 2951),
(12, 721, 3672),
(13, 814, 4486),
(14, 911, 5397),
(15, 1011, 6408),
(16, 1113, 7521),
(17, 1218, 8739),
(18, 1326, 10065),
(19, 1437, 11502),
(20, 1550, 13052),
(21, 1665, 14717),
(22, 1783, 16500),
(23, 1903, 18403),
(24, 2025, 20428),
(25, 2149, 22577),
(26, 2276, 24853),
(27, 2404, 27257),
(28, 2535, 29792),
(29, 2667, 32459),
(30, 2801, 35260),
(31, 2937, 38197),
(32, 3075, 41272),
(33, 3215, 44487),
(34, 3357, 47844),
(35, 3500, 51344),
(36, 3645, 54989),
(37, 3792, 58781),
(38, 3940, 62721),
(39, 4090, 66811),
(40, 4241, 71052),
(41, 4394, 75446),
(42, 4549, 79995),
(43, 4705, 84700),
(44, 4862, 89562),
(45, 5022, 94584),
(46, 5182, 99766),
(47, 5344, 105110),
(48, 5507, 110617),
(49, 5672, 116289),
(50, 5838, 122127),
(51, 6006, 128133),
(52, 6174, 134307),
(53, 6345, 140652),
(54, 6516, 147168),
(55, 6689, 153857),
(56, 6863, 160720),
(57, 7038, 167758),
(58, 7215, 174973),
(59, 7393, 182366),
(60, 7572, 189938),
(61, 7752, 197690),
(62, 7933, 205623),
(63, 8116, 213739),
(64, 8300, 222039),
(65, 8485, 230524),
(66, 8671, 239195),
(67, 8859, 248054),
(68, 9047, 257101),
(69, 9237, 266338),
(70, 9427, 275765),
(71, 9619, 285384),
(72, 9812, 295196),
(73, 10006, 305202),
(74, 10201, 315403),
(75, 10397, 325800),
(76, 10595, 336395),
(77, 10793, 347188),
(78, 10992, 358180),
(79, 11193, 369373),
(80, 11394, 380767),
(81, 11596, 392363),
(82, 11800, 404163),
(83, 12004, 416167),
(84, 12210, 428377),
(85, 12416, 440793),
(86, 12624, 453417),
(87, 12832, 466249),
(88, 13041, 479290),
(89, 13252, 492542),
(90, 13463, 506005),
(91, 13675, 519680),
(92, 13889, 533569),
(93, 14103, 547672),
(94, 14318, 561990),
(95, 14534, 576524),
(96, 14751, 591275),
(97, 14969, 606244),
(98, 15187, 621431),
(99, 15407, 636838),
(100, 15627, 652465),
(1, 25, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `quest`
--

CREATE TABLE `quest` (
  `quest_id` int(11) NOT NULL,
  `quest_title` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quest_desc` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quest_lvl` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quest_progress` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quest_rang` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `quest`
--

INSERT INTO `quest` (`quest_id`, `quest_title`, `quest_desc`, `quest_lvl`, `quest_progress`, `quest_rang`) VALUES
(1, 'Кролики', '5', '1', 'Убить 5 кроликов', 'D'),
(2, 'Стать МС', '', '1', 'Стать МС', 'S+');

-- --------------------------------------------------------

--
-- Структура таблицы `skills`
--

CREATE TABLE `skills` (
  `skill_id` int(11) NOT NULL,
  `skill_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skill_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skill_avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `str` int(11) DEFAULT NULL,
  `speed` int(11) DEFAULT NULL,
  `dexterity` int(11) DEFAULT NULL,
  `stamina` int(11) DEFAULT NULL,
  `durability` int(11) DEFAULT NULL,
  `reflexes` int(11) DEFAULT NULL,
  `accuracy` int(11) DEFAULT NULL,
  `intelligence` int(11) DEFAULT NULL,
  `wisdom` int(11) DEFAULT NULL,
  `intuition` int(11) DEFAULT NULL,
  `memory` int(11) DEFAULT NULL,
  `charisma` int(11) DEFAULT NULL,
  `mind` int(11) DEFAULT NULL,
  `lucky` int(11) DEFAULT NULL,
  `skill_lvl` int(11) DEFAULT '20'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `skills`
--

INSERT INTO `skills` (`skill_id`, `skill_title`, `skill_desc`, `skill_avatar`, `str`, `speed`, `dexterity`, `stamina`, `durability`, `reflexes`, `accuracy`, `intelligence`, `wisdom`, `intuition`, `memory`, `charisma`, `mind`, `lucky`, `skill_lvl`) VALUES
(1, 'Двуручное клинковое оружие', 'Двуручное клинковое оружие', NULL, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 20),
(2, 'Двуручное рубящее оружие', 'Двуручное рубящее оружие', NULL, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 20),
(3, 'Одноручное рубящее оружие', 'Одноручное рубящее оружие', NULL, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 20),
(4, 'Одноручное клинковое оружие', 'Одноручное клинковое оружие', NULL, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 20),
(5, 'Одноручное дробящее оружие', 'Одноручное дробящее оружие', NULL, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 20),
(6, 'Двуручное дробящее оружие', 'Двуручное дробящее оружие', NULL, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 20),
(7, 'Одноручное колющее оружие', 'Одноручное колющее оружие', NULL, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 20),
(8, 'Двуручное колющее оружие', 'Двуручное колющее оружие', NULL, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 20),
(9, 'Древковое оружие', 'Древковое оружие', NULL, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 20),
(10, 'Кулачное оружие', 'Кулачное оружие', NULL, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 20),
(11, 'Метательное оружие', 'Метательное оружие', NULL, 1, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 20),
(12, 'Гибкое оружие', 'Гибкое оружие', NULL, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 20),
(13, 'Стрелковое оружие', 'Стрелковое оружие', NULL, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 20),
(14, 'Скрытое оружие', 'Скрытое оружие', NULL, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 20),
(15, 'Парное оружие', 'Парное оружие', NULL, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 20),
(16, 'Парирование', 'Парирование', NULL, 0, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 20),
(17, 'Уклонение', 'Уклонение', NULL, 0, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 20),
(18, 'Блокирование', 'Блокирование', NULL, 0, 1, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 20),
(19, 'Оглушение', 'Оглушение', NULL, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 20),
(20, 'Лёгкая броня', 'Лёгкая броня', NULL, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 20),
(21, 'Средняя броня', 'Средняя броня', NULL, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 20),
(22, 'Тяжёлая броня', 'Тяжёлая броня', NULL, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 20),
(23, 'Лёгкий щит', 'Лёгкий щит', NULL, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 20),
(24, 'Средний щит', 'Средний щит', NULL, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 20),
(25, 'Тяжёлый щит', 'Тяжёлый щит', NULL, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 20),
(26, 'Магическое мастерство', 'Магическое мастерство', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 1, 1, 20),
(27, 'Магическая мощь', 'Магическая мощь', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 20),
(28, 'Магическая защита', 'Магическая защита', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 20),
(29, 'Чувство магии', 'Чувство магии', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 1, 20),
(30, 'Чтение заклинаний', 'Чтение заклинаний', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 20);

-- --------------------------------------------------------

--
-- Структура таблицы `skill_lvl`
--

CREATE TABLE `skill_lvl` (
  `lvl` int(11) NOT NULL,
  `exp_to_lvl` int(11) NOT NULL,
  `total_exp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `skill_lvl`
--

INSERT INTO `skill_lvl` (`lvl`, `exp_to_lvl`, `total_exp`) VALUES
(1, 50, 50),
(2, 50, 100),
(3, 50, 150),
(4, 50, 200),
(5, 50, 250),
(6, 100, 350),
(7, 100, 450),
(8, 100, 550),
(9, 100, 650),
(10, 100, 750),
(11, 150, 900),
(12, 150, 1050),
(13, 150, 1200),
(14, 150, 1350),
(15, 150, 1500),
(16, 200, 1700),
(17, 200, 1900),
(18, 200, 2100),
(19, 200, 2300),
(20, 200, 2500),
(21, 250, 2750),
(22, 250, 3000),
(23, 250, 3250),
(24, 250, 3500),
(25, 250, 3750),
(26, 300, 4050),
(27, 300, 4350),
(28, 300, 4650),
(29, 300, 4950),
(30, 300, 5250),
(31, 350, 5600),
(32, 350, 5950),
(33, 350, 6300),
(34, 350, 6650),
(35, 350, 7000),
(36, 400, 7400),
(37, 400, 7800),
(38, 400, 8200),
(39, 400, 8600),
(40, 400, 9000),
(41, 450, 9450),
(42, 450, 9900),
(43, 450, 10350),
(44, 450, 10800),
(45, 450, 11250),
(46, 500, 11750),
(47, 500, 12250),
(48, 500, 12750),
(49, 500, 13250),
(50, 500, 13750),
(51, 550, 14300),
(52, 550, 14850),
(53, 550, 15400),
(54, 550, 15950),
(55, 550, 16500),
(56, 600, 17100),
(57, 600, 17700),
(58, 600, 18300),
(59, 600, 18900),
(60, 600, 19500),
(61, 650, 20150),
(62, 650, 20800),
(63, 650, 21450),
(64, 650, 22100),
(65, 650, 22750),
(66, 700, 23450),
(67, 700, 24150),
(68, 700, 24850),
(69, 700, 25550),
(70, 700, 26250),
(71, 750, 27000),
(72, 750, 27750),
(73, 750, 28500),
(74, 750, 29250),
(75, 750, 30000),
(76, 800, 30800),
(77, 800, 31600),
(78, 800, 32400),
(79, 800, 33200),
(80, 800, 34000),
(81, 850, 34850),
(82, 850, 35700),
(83, 850, 36550),
(84, 850, 37400),
(85, 850, 38250),
(86, 900, 39150),
(87, 900, 40050),
(88, 900, 40950),
(89, 900, 41850),
(90, 900, 42750),
(91, 950, 43700),
(92, 950, 44650),
(93, 950, 45600),
(94, 950, 46550),
(95, 950, 47500),
(96, 1000, 48500),
(97, 1000, 49500),
(98, 1000, 50500),
(99, 1000, 51500),
(100, 1000, 52500);

-- --------------------------------------------------------

--
-- Структура таблицы `spells`
--

CREATE TABLE `spells` (
  `spells_id` int(11) NOT NULL,
  `skill_lvl` int(11) DEFAULT NULL,
  `beginner` int(11) DEFAULT NULL,
  `student` int(11) DEFAULT NULL,
  `adept` int(11) DEFAULT NULL,
  `specialist` int(11) DEFAULT NULL,
  `professional` int(11) DEFAULT NULL,
  `master` int(11) DEFAULT NULL,
  `great` int(11) DEFAULT NULL,
  `epic` int(11) DEFAULT NULL,
  `legendary` int(11) DEFAULT NULL,
  `divine` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `spells`
--

INSERT INTO `spells` (`spells_id`, `skill_lvl`, `beginner`, `student`, `adept`, `specialist`, `professional`, `master`, `great`, `epic`, `legendary`, `divine`) VALUES
(1, 10, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24),
(2, 20, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23),
(3, 30, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22),
(4, 40, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21),
(5, 50, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20),
(6, 60, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19),
(7, 70, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18),
(8, 80, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17),
(9, 90, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16),
(10, 100, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15);

-- --------------------------------------------------------

--
-- Структура таблицы `spells_stats`
--

CREATE TABLE `spells_stats` (
  `spells_id` int(11) NOT NULL,
  `spells_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spells_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spells_avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spells_mp` int(11) DEFAULT NULL,
  `spells_lvl` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `spells_stats`
--

INSERT INTO `spells_stats` (`spells_id`, `spells_title`, `spells_desc`, `spells_avatar`, `spells_mp`, `spells_lvl`) VALUES
(1, 'Огненная стрела', 'Огненная стрела', NULL, 15, 'beginner'),
(2, 'Огненный шар', 'Огненный шар', NULL, 20, 'student'),
(3, 'Огненное копьё', 'Огненное копьё', NULL, 30, 'adept'),
(4, 'Огненная бомба', 'Огненная бомба', NULL, 40, 'specialist'),
(5, 'Огненный вихрь', 'Огненный вихрь', NULL, 50, 'professional'),
(6, 'Аура Огня', 'Аура Огня', NULL, 100, 'master'),
(7, 'Огненный дождь', 'Огненный дождь', NULL, 200, 'great'),
(8, 'Столп Огня', 'Столп Огня', NULL, 300, 'epic'),
(9, 'Большой Огненный Феникс', 'Большой Огненный Феникс', NULL, 400, 'legendary'),
(10, 'Форма бога огня', 'Форма бога огня', NULL, 500, 'divine');

-- --------------------------------------------------------

--
-- Структура таблицы `stats`
--

CREATE TABLE `stats` (
  `user_id` int(11) NOT NULL,
  `str` int(11) NOT NULL DEFAULT '1',
  `speed` int(11) NOT NULL DEFAULT '1',
  `dexterity` int(11) NOT NULL DEFAULT '1',
  `stamina` int(11) NOT NULL DEFAULT '1',
  `durability` int(11) NOT NULL DEFAULT '1',
  `reflexes` int(11) NOT NULL DEFAULT '1',
  `accuracy` int(11) NOT NULL DEFAULT '1',
  `intelligence` int(11) NOT NULL DEFAULT '1',
  `wisdom` int(11) NOT NULL DEFAULT '1',
  `intuition` int(11) NOT NULL DEFAULT '1',
  `memory` int(11) NOT NULL DEFAULT '1',
  `charisma` int(11) NOT NULL DEFAULT '1',
  `mind` int(11) NOT NULL DEFAULT '1',
  `lucky` int(11) NOT NULL DEFAULT '1',
  `hp` int(11) DEFAULT NULL,
  `mp` int(11) DEFAULT NULL,
  `st` int(11) DEFAULT NULL,
  `stats_point` int(11) NOT NULL DEFAULT '28'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `stats`
--

INSERT INTO `stats` (`user_id`, `str`, `speed`, `dexterity`, `stamina`, `durability`, `reflexes`, `accuracy`, `intelligence`, `wisdom`, `intuition`, `memory`, `charisma`, `mind`, `lucky`, `hp`, `mp`, `st`, `stats_point`) VALUES
(8, 5, 3, 5, 5, 3, 4, 4, 2, 2, 4, 1, 1, 3, 5, 90, 120, 90, 0),
(13, 3, 3, 2, 2, 2, 1, 1, 1, 1, 1, 1, 2, 1, 2, 120, 80, 100, 24),
(14, 1, 1, 1, 1, 1, 1, 1, 2, 2, 1, 1, 2, 3, 1, 90, 120, 90, 28);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `login` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_avatar` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_race` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lvl` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`user_id`, `login`, `password`, `mail`, `user_avatar`, `name`, `user_race`, `lvl`) VALUES
(8, 'Viidnim', 'vet030610', 'viid.nim@bk.ru', 'uploads/avatars/_356-3566579_nico-nii-anonymous-nico-kiznaiver.png', 'Viidnim', 'Солнечный эльф', 1),
(13, 'Goblin', '123321', 'viid.nim@bk.ru', 'uploads/avatar/356-3566579_nico-nii-anonymous-nico-kiznaiver', 'Goblin', 'Полурослик', 1),
(14, 'ichiru', '123321', 'kolos.vitalik2@bk.ru', '', '', '', 1),
(15, 'Ichiru', '123321', 'Ichiru.kyn@bk.ru', NULL, NULL, NULL, 1),
(16, 'Ichiru', '123321', 'Ichiru.kyn@bk.ru', NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users_status`
--

CREATE TABLE `users_status` (
  `user_inviter` int(8) NOT NULL,
  `user_invited` int(8) NOT NULL,
  `stat_val_id` int(8) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `user_skill`
--

CREATE TABLE `user_skill` (
  `user_id` int(11) DEFAULT NULL,
  `skill_id` int(11) DEFAULT NULL,
  `skill_exp` int(11) DEFAULT NULL,
  `skill_lvl` int(100) DEFAULT NULL,
  `skill_check` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user_skill`
--

INSERT INTO `user_skill` (`user_id`, `skill_id`, `skill_exp`, `skill_lvl`, `skill_check`) VALUES
(8, 1, 252, 5, 1),
(8, 2, 56, 1, 2),
(8, 3, 14, 1, 3),
(8, 4, 1, 1, 4),
(8, 5, 0, 1, 5),
(8, 6, 50, 1, 6),
(8, 7, 0, 1, 7),
(8, 8, 0, 1, 8),
(8, 9, 0, 1, 9),
(8, 10, 1, 1, 10),
(8, 11, 0, 1, 11),
(8, 12, 0, 1, 12),
(8, 13, 0, 1, 13),
(8, 14, 0, 1, 14),
(8, 15, 0, 1, 15),
(8, 16, 0, 1, 16),
(8, 17, 0, 1, 17),
(8, 18, 0, 1, 18),
(8, 19, 0, 1, 19),
(8, 20, 0, 1, 20),
(8, 21, 0, 1, 21),
(8, 22, 0, 1, 22),
(8, 23, 0, 1, 23),
(8, 24, 0, 1, 24),
(8, 25, 0, 1, 25),
(8, 26, 0, 1, 26),
(8, 27, 0, 1, 27),
(8, 28, 0, 1, 28),
(8, 29, 0, 1, 29),
(8, 30, 1, 1, 30),
(13, 5, 0, 1, 31);

-- --------------------------------------------------------

--
-- Структура таблицы `user_spells`
--

CREATE TABLE `user_spells` (
  `user_id` int(11) DEFAULT NULL,
  `spell_id` int(11) DEFAULT NULL,
  `spell_mp` int(11) DEFAULT NULL,
  `spell_check` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user_spells`
--

INSERT INTO `user_spells` (`user_id`, `spell_id`, `spell_mp`, `spell_check`) VALUES
(8, 1, 15, 1),
(8, 2, 20, 2),
(8, 3, 30, 3),
(8, 4, 40, 4),
(8, 5, 50, 5),
(8, 6, 100, 6),
(8, 7, 200, 7),
(8, 8, 300, 8),
(8, 9, 400, 9),
(8, 10, 500, 10);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `exp`
--
ALTER TABLE `exp`
  ADD PRIMARY KEY (`user_id`);

--
-- Индексы таблицы `levels`
--
ALTER TABLE `levels`
  ADD UNIQUE KEY `lvl` (`lvl`);

--
-- Индексы таблицы `quest`
--
ALTER TABLE `quest`
  ADD PRIMARY KEY (`quest_id`);

--
-- Индексы таблицы `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skill_id`);

--
-- Индексы таблицы `skill_lvl`
--
ALTER TABLE `skill_lvl`
  ADD UNIQUE KEY `lvl` (`lvl`);

--
-- Индексы таблицы `spells`
--
ALTER TABLE `spells`
  ADD PRIMARY KEY (`spells_id`);

--
-- Индексы таблицы `spells_stats`
--
ALTER TABLE `spells_stats`
  ADD PRIMARY KEY (`spells_id`);

--
-- Индексы таблицы `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`user_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Индексы таблицы `users_status`
--
ALTER TABLE `users_status`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user_skill`
--
ALTER TABLE `user_skill`
  ADD PRIMARY KEY (`skill_check`);

--
-- Индексы таблицы `user_spells`
--
ALTER TABLE `user_spells`
  ADD PRIMARY KEY (`spell_check`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `quest`
--
ALTER TABLE `quest`
  MODIFY `quest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `skills`
--
ALTER TABLE `skills`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `spells`
--
ALTER TABLE `spells`
  MODIFY `spells_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `spells_stats`
--
ALTER TABLE `spells_stats`
  MODIFY `spells_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `users_status`
--
ALTER TABLE `users_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `user_skill`
--
ALTER TABLE `user_skill`
  MODIFY `skill_check` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT для таблицы `user_spells`
--
ALTER TABLE `user_spells`
  MODIFY `spell_check` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
