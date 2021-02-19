-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Фев 19 2021 г., 13:07
-- Версия сервера: 10.4.13-MariaDB
-- Версия PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `my_shop_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `coments`
--

CREATE TABLE `coments` (
  `id` int(255) NOT NULL,
  `text` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_article` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `coments`
--

INSERT INTO `coments` (`id`, `text`, `name`, `id_article`) VALUES
(32, 'CCCCCCCCCCCCCCCCCCCCC', 'QQQQQQQQQQQ', 1),
(33, 'CCCCCCCCCCCCCCCCCCCCC', 'QQQQQQQQQQQ', 1),
(34, 'CCCCCCCCCCCCCCCCCCCCC', 'QQQQQQQQQQQ', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `items`
--

CREATE TABLE `items` (
  `id` int(255) NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `items`
--

INSERT INTO `items` (`id`, `title`, `description`, `price`, `image`, `category`) VALUES
(1, 'Iphone 11', '<li>10 users included</li>\r\n<li>2 GB of storage</li>\r\n<li>Email support</li>\r\n<li>Help center access</li>', 200, '11.jpg', 'iphone'),
(2, 'Iphone SE', '<li>20 users included</li>\r\n<li>10 GB of storage</li>\r\n<li>Priority email support</li>\r\n<li>Help center access</li>', 160, 'se.jpg', 'iphone'),
(3, 'Iphone X', '<li>30 users included</li>\r\n<li>15 GB of storage</li>\r\n<li>Phone and email support</li>\r\n<li>Help center access</li>', 100, 'x.jpg', 'iphone'),
(4, 'Samsung Galaxy A51', 'ssssssssss', 140, 'a51.jpg', 'samsung'),
(5, 'Samsung Z flip', 'rrrrrrrrrrr', 230, 'zFlip.jpg', 'samsung'),
(6, 'Samsung galaxy S21', 'eeeeeeeee', 140, 's21.jpg', 'samsung'),
(7, 'Xiaomi Mi Note 10', 'rererer', 155, 'note10.jpg', 'xiaomi'),
(8, 'Xiaomi Mi 9t', 'efewfwefwef', 175, 'mi9t.jpg', 'xiaomi'),
(10, 'Xiaomi Mi 9t', 'efewfwefwef', 175, 'mi9t.jpg', 'xiaomi'),
(11, 'Xiaomi Mi 9t', 'efewfwefwef', 175, 'mi9t.jpg', 'xiaomi'),
(12, 'Xiaomi Mi 9t', 'efewfwefwef', 175, 'mi9t.jpg', 'xiaomi'),
(13, 'Xiaomi Mi 9t', 'efewfwefwef', 175, 'mi9t.jpg', 'xiaomi'),
(22, 'Xiaomi Mi 9t', 'efewfwefwef', 175, 'mi9t.jpg', 'xiaomi'),
(23, 'ddddddddddd', 'erererere', 33, 'r3.3r3', '3r3r3rr');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `login` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'admin', '12345'),
(2, 'admin', '222222222222222'),
(3, 'admin3', 'db8325ae5a1812c63a8a1ddc74c04ba6');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `coments`
--
ALTER TABLE `coments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `coments`
--
ALTER TABLE `coments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT для таблицы `items`
--
ALTER TABLE `items`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
