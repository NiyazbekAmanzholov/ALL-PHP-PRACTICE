-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 04 2019 г., 16:54
-- Версия сервера: 5.6.41
-- Версия PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `crud_chat`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comment_table`
--

CREATE TABLE `comment_table` (
  `com_auto_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date` timestamp NOT NULL,
  `like_com` int(11) NOT NULL DEFAULT '0',
  `visible` int(11) NOT NULL DEFAULT '1',
  `views` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comment_table`
--

INSERT INTO `comment_table` (`com_auto_id`, `comment_id`, `comment`, `date`, `like_com`, `visible`, `views`) VALUES
(26, 9, '11111111111111111111111111111111111', '2019-11-04 06:34:26', 0, 1, 0),
(27, 9, '2222222222222222222222222222222222', '2019-11-04 06:34:31', 0, 1, 0),
(28, 9, '33333333333333333333333333333333333333', '2019-11-04 06:34:36', 0, 1, 0),
(35, 11, '4444444444444444444444444444', '2019-11-04 10:53:39', 0, 1, 0),
(36, 11, '55555555555555555555555555', '2019-11-04 10:53:44', 0, 0, 0),
(39, 11, '77777777777777777777777777', '2019-11-04 10:54:09', 0, 0, 0),
(41, 9, '999999999999999999999999999999999999999999', '2019-11-04 11:25:22', 0, 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `img`) VALUES
(9, 'niyaz', 'niyazz@mail.com', '$2y$10$Y/gUVW0ihrJDe.RCqcY1c.JtcuL72znkvBoie9kXRnXfK4SKn27QO', '2015-03-13 20.54.48.jpg'),
(10, 'hose', 'hose@mail.com', '$2y$10$6OrE5namV8Yupvy7ZkQIKeAYcXw5EqBVZXGMJi5p6Oug2IyLQcmQG', ''),
(11, 'test', 'test@mail.com', '$2y$10$VkvrtTfTm0hZ6zJiKBdszOFxKdiDgOrKKdHMMiTNsy5SPQ8ZAWSHG', ''),
(12, 'sosed', 'sosed@mail.com', '$2y$10$yi2MWRJwaXrDHKSaXROBDepFhrAzCXLHaY/ZDPX.yPeewA6b.I6ey', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comment_table`
--
ALTER TABLE `comment_table`
  ADD PRIMARY KEY (`com_auto_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comment_table`
--
ALTER TABLE `comment_table`
  MODIFY `com_auto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
