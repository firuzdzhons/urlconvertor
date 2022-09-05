-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 05 2022 г., 09:24
-- Версия сервера: 5.7.29
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `testdb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `urls`
--

CREATE TABLE `urls` (
  `full_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `urls`
--

INSERT INTO `urls` (`full_url`, `code`) VALUES
('https://www.php.net/parse_url', 'arGRTh'),
('https://duschanbe.diplo.de/tj-ru/service/05-VisaEinreise/-/1893064', 'DHxxrv'),
('https://www.php.net/parse_url', 'DPmzKv'),
('https://www.php.net/parse_url', 'GGuSfb'),
('https://www.php.net/parse_url', 'igqZnQ'),
('https://duschanbe.diplo.de/tj-ru/service/05-VisaEinreise/-/1893064', 'LtNCuK'),
('https://www.php.net/parse_url', 'NUCSBQ'),
('https://www.php.net/parse_url', 'WAvTrZ'),
('https://www.php.net/parse_url', 'xuKQbG'),
('https://www.php.net/parse_url', 'YMToUG');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `urls`
--
ALTER TABLE `urls`
  ADD UNIQUE KEY `code` (`code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
