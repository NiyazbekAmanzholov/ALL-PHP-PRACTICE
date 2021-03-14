-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 06 2019 г., 15:32
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
-- База данных: `db_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `buy_products`
--

CREATE TABLE `buy_products` (
  `buy_id` int(11) NOT NULL,
  `buy_id_order` int(11) NOT NULL,
  `buy_id_product` int(11) NOT NULL,
  `buy_count_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `buy_products`
--

INSERT INTO `buy_products` (`buy_id`, `buy_id_order`, `buy_id_product`, `buy_count_product`) VALUES
(1, 1, 8, 1),
(2, 1, 6, 1),
(3, 2, 8, 1),
(4, 2, 6, 1),
(5, 2, 11, 1),
(6, 2, 13, 1),
(7, 3, 8, 1),
(8, 3, 6, 1),
(9, 3, 11, 1),
(10, 3, 13, 1),
(11, 4, 37, 2),
(12, 4, 38, 1),
(13, 4, 36, 1),
(14, 4, 35, 1),
(15, 4, 34, 1),
(16, 4, 13, 1),
(17, 4, 11, 1),
(18, 4, 8, 1),
(19, 4, 6, 1),
(20, 4, 3, 1),
(21, 5, 37, 1),
(22, 5, 35, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `cart_id_product` int(11) NOT NULL,
  `cart_price` int(11) NOT NULL,
  `cart_count` int(11) NOT NULL DEFAULT '1',
  `cart_datetime` datetime NOT NULL,
  `cart_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cart`
--

INSERT INTO `cart` (`cart_id`, `cart_id_product`, `cart_price`, `cart_count`, `cart_datetime`, `cart_ip`) VALUES
(88, 38, 299940, 4, '2019-10-06 15:24:33', '127.0.0.1');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `brand` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `type`, `brand`) VALUES
(1, 'mobile', 'Apple'),
(2, 'mobile', 'Explay'),
(4, 'mobile', 'HTC'),
(5, 'mobile', 'LG'),
(6, 'mobile', 'Motorola'),
(7, 'mobile', 'Nokia'),
(8, 'mobile', 'Philips'),
(9, 'mobile', 'Samsung'),
(10, 'mobile', 'Sony'),
(15, 'notebook', 'HP'),
(16, 'notebook', 'Lenovo'),
(17, 'notebook', 'MSI'),
(18, 'notebook', 'Packard Bell'),
(20, 'notebook', 'Samsung'),
(21, 'notebook', 'Apple'),
(22, 'notepad', 'Samsung'),
(23, 'notepad', 'Apple'),
(24, 'notepad', 'Sony');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `date`) VALUES
(2, 'Новости о Государстве', 'Советский и казахстанский государственный и политический деятель. Член Конституционного совета Казахстана с 19 марта 2019 года.', '2019-10-08'),
(3, 'Новости мира', 'Член Конституционного совета Казахстана с 19 марта 2019 года. Президент Республики Казахстан с 24 апреля 1990 по 20 марта 2019.', '2019-10-07'),
(5, 'Новости о Назарбаеве', 'Советский и казахстанский государственный и политический деятель. Президент Республики Казахстан с 24 апреля 1990 по 20 марта 2019.', '2019-10-09'),
(8, 'Новости о Казахстане', 'Член Конституционного совета Казахстана с 19 марта 2019 года. Президент Республики Казахстан с 24 апреля 1990 по 20 марта 2019.', '2019-10-16');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_datetime` datetime NOT NULL,
  `order_confirmed` varchar(10) NOT NULL DEFAULT 'no',
  `order_dostavka` varchar(255) NOT NULL,
  `order_pay` varchar(50) NOT NULL,
  `order_type_pay` varchar(100) NOT NULL,
  `order_fio` text NOT NULL,
  `order_address` text NOT NULL,
  `order_phone` varchar(50) NOT NULL,
  `order_note` text NOT NULL,
  `order_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`order_id`, `order_datetime`, `order_confirmed`, `order_dostavka`, `order_pay`, `order_type_pay`, `order_fio`, `order_address`, `order_phone`, `order_note`, `order_email`) VALUES
(1, '2019-10-02 19:23:00', 'no', 'Самовывоз', 'accepted', '', 'Аманжолов Н Б', 'Бейбитшилик', '87761197667', 'sdgsggagaga', 'kunaev993@gmail.com'),
(2, '2019-10-03 09:19:57', 'no', 'Курьерам', '', '', 'Аманжолов Н Б', 'Бейбитшилик', '87761197667', 'cgmcgjgjc', 'kunaev993@gmail.com'),
(3, '2019-10-03 13:33:09', 'no', 'Курьерам', '', '', 'Аманжолов Н Б', 'Бейбитшилик', '87761197667', 'cgmcgjgjc', 'kunaev993@gmail.com'),
(4, '2019-10-05 09:17:10', 'no', 'Курьерам', '', '', 'Аманжолов Н Б', 'Бейбитшилик', '87761197667', 'уг6нкыреапывапа', 'kunaev993@gmail.com'),
(5, '2019-10-05 09:26:57', 'no', 'Курьерам', '', '', 'Аманжолов Н Б', 'Бейбитшилик', '87761197667', 'уг6нкыреапывапа', 'kunaev993@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `reg_admin`
--

CREATE TABLE `reg_admin` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `fio` text NOT NULL,
  `role` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `view_orders` int(11) NOT NULL DEFAULT '0',
  `accept_orders` int(11) NOT NULL DEFAULT '0',
  `delete_orders` int(11) NOT NULL DEFAULT '0',
  `add_tovar` int(11) NOT NULL DEFAULT '0',
  `edit_tovar` int(11) NOT NULL DEFAULT '0',
  `delete_tovar` int(11) NOT NULL DEFAULT '0',
  `accept_reviews` int(11) NOT NULL DEFAULT '0',
  `delete_reviews` int(11) NOT NULL DEFAULT '0',
  `view_clients` int(11) NOT NULL DEFAULT '0',
  `delete_clients` int(11) NOT NULL DEFAULT '0',
  `add_news` int(11) NOT NULL DEFAULT '0',
  `delete_news` int(11) NOT NULL DEFAULT '0',
  `add_category` int(11) NOT NULL DEFAULT '0',
  `delete_category` int(11) NOT NULL DEFAULT '0',
  `view_admin` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reg_admin`
--

INSERT INTO `reg_admin` (`id`, `login`, `pass`, `fio`, `role`, `email`, `phone`, `view_orders`, `accept_orders`, `delete_orders`, `add_tovar`, `edit_tovar`, `delete_tovar`, `accept_reviews`, `delete_reviews`, `view_clients`, `delete_clients`, `add_news`, `delete_news`, `add_category`, `delete_category`, `view_admin`) VALUES
(3, 'admin22', 'mb03foo5107b432d25170b469b57095ca269bc202qj2jjdp9', 'Аманжолов Нурс Булатович', 'Администратор', 'kunaev993@gmail.com', '87761197667', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `reg_user`
--

CREATE TABLE `reg_user` (
  `id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `patronymic` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `datetime` datetime NOT NULL,
  `ip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reg_user`
--

INSERT INTO `reg_user` (`id`, `login`, `pass`, `surname`, `name`, `patronymic`, `email`, `phone`, `address`, `datetime`, `ip`) VALUES
(20, 'niyaz', '9nm2rv8q875020bd21ba0a792da109aaff636cbb2yo6z', 'Amankul', 'niyaz', 'Rashidovich', 'kunaev993@gmail.com', '87761197643', 'niyaz', '2019-09-20 21:44:12', '127.0.0.1'),
(21, 'nursik', '9nm2rv8q875020bd21ba0a792da109aaff636cbb2yo6z', '', 'nursik', '', 'kunaev993@gmail.com', '87761197667', '', '2019-09-25 22:16:39', '127.0.0.1'),
(22, 'nurlan', '9nm2rv8q95739c8b24fc0eb7ad5b2147f029aecf2yo6z', 'Amankul', 'Nurlan', 'Bolat', 'kunaev993@gmail.com', '87761197667', 'Amantay', '2019-10-05 09:36:30', '127.0.0.1');

-- --------------------------------------------------------

--
-- Структура таблицы `table_products`
--

CREATE TABLE `table_products` (
  `products_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `seo_words` text NOT NULL,
  `seo_description` text NOT NULL,
  `mini_description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `mini_features` text NOT NULL,
  `features` text NOT NULL,
  `datetime` datetime NOT NULL,
  `new` int(11) NOT NULL DEFAULT '0',
  `leader` int(11) NOT NULL DEFAULT '0',
  `sale` int(11) NOT NULL DEFAULT '0',
  `visible` int(11) NOT NULL DEFAULT '0',
  `count` int(11) NOT NULL DEFAULT '0',
  `type_tovara` varchar(255) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `yes_like` int(11) NOT NULL DEFAULT '1',
  `color` varchar(255) NOT NULL,
  `diagonal` varchar(255) NOT NULL,
  `megapixel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `table_products`
--

INSERT INTO `table_products` (`products_id`, `title`, `price`, `brand`, `seo_words`, `seo_description`, `mini_description`, `image`, `description`, `mini_features`, `features`, `datetime`, `new`, `leader`, `sale`, `visible`, `count`, `type_tovara`, `brand_id`, `yes_like`, `color`, `diagonal`, `megapixel`) VALUES
(1, 'Samsung I9192 Galaxy S4 mini (черный)', 101940, 'Samsung', '', '', '<p>Смартфон Explay Five отличается великолепным исполнением, производительной &quot;начинкой&quot; и широкими возможностями доступа к сети Интернет. Кроме того, модель обладает системой навигации, мощной восьмимипиксельной камерой и ярким IPS-экраном.</p>\r\n', 'img1.jpg', '', '<ul>\r\n	<li>Диагональ (дюйм):&nbsp;6.1</li>\r\n	<li>Сим карт: две</li>\r\n	<li>Встроенная память (Гб):&nbsp;8</li>\r\n	<li>Фотокамера (Мп):&nbsp;12</li>\r\n</ul>\r\n', '', '2013-08-18 03:13:16', 0, 1, 0, 1, 12, 'mobile', 9, 2, 'черный', '', ''),
(2, 'Samsung I9500 Galaxy S4(черный)', 149940, 'Samsung', '', '', '<p>Смартфон Explay Five отличается великолепным исполнением, производительной &quot;начинкой&quot; и широкими возможностями доступа к сети Интернет. Кроме того, модель обладает системой навигации, мощной восьмимипиксельной камерой и ярким IPS-экраном.</p>\r\n', 'img2.jpg', '', '<ul>\r\n	<li>Диагональ (дюйм):&nbsp;6.1</li>\r\n	<li>Сим карт: две</li>\r\n	<li>Встроенная память (Гб):&nbsp;32</li>\r\n	<li>Фотокамера (Мп):&nbsp;12</li>\r\n</ul>\r\n', '', '2013-08-18 06:22:32', 1, 0, 1, 1, 5, 'mobile', 9, 3, 'белый', '', ''),
(3, 'HTC Desire 600 (черный)', 95940, 'HTC', '', '', '<p>Смартфон HTC Desire 600 dual sim &ndash; классическая модель с поддержкой двух сим-карт для экономных пользователей.</p>\r\n', 'img3.jpg', '', '<ul>\r\n	<li>Диагональ (дюйм):&nbsp;6.1</li>\r\n	<li>Сим карт: две</li>\r\n	<li>Встроенная память (Гб):&nbsp;32</li>\r\n	<li>Фотокамера (Мп):&nbsp;12</li>\r\n</ul>\r\n', '', '2013-08-22 09:21:21', 1, 0, 1, 1, 3, 'mobile', 4, 1, 'красный', '', ''),
(6, 'Nokia Lumia 625 (черный)', 71940, 'Nokia', '', '', '<p>Смартфон Nokia Lumia 625 станет оптимальным решением для активного пользователя. Легкий и стильный корпус модели скрывает в себе серьезный набор функций: здесь есть и навигатор, и медиаплеер.</p>\r\n', 'img4.jpg', '', '<ul>\r\n	<li>Диагональ (дюйм):&nbsp;6.1</li>\r\n	<li>Сим карт: одна</li>\r\n	<li>Встроенная память (Гб): 32</li>\r\n	<li>Фотокамера (Мп): 8</li>\r\n</ul>\r\n', '', '2013-08-23 00:00:00', 1, 0, 1, 1, 4, 'mobile', 7, 1, 'серый', '', ''),
(8, 'Apple iPhone 5 32Gb (белый)', 167940, 'Apple', '', '', '<ul>\r\n	<li>Размер. Для небольшой женской руки - в самый раз. Удобно пользоваться одной рукой. Скорость работы - на высоте. Ничего не тупит, не вылетает, не глючит. После моего Самсунга просто огонь. Батарею держит дня при умеренном использовании. Огромное количество аксессуаров по приемлемой цене. Камера отличная - конечно не зеркалка, не нужно от телефона ждать подобного качества фото. Но очень и очень достойная.</li>\r\n</ul>\r\n', 'img6.jpg', '<ul>\r\n	<li>\r\n	<h3>Дисплей:</h3>\r\n	</li>\r\n	<li>Дисплей Retina.</li>\r\n	<li>Широкоформатный дисплей Multi-Touch с диагональю 4 дюйма.</li>\r\n	<li>Разрешение 1136 x 640 пикселей (326 пикселей на дюйм).</li>\r\n	<li>Контрастность 800:1 (стандартная).</li>\r\n	<li>Яркость до 500 кд/м2 (стандартная).</li>\r\n	<li>Олеофобное покрытие, препятствующее появлению отпечатков пальцев на передней панели.</li>\r\n	<li>Поддержка отображения нескольких языков и наборов символов одновременно.</li>\r\n	<li>\r\n	<h3>Камера iSight</h3>\r\n	</li>\r\n	<li>8 мегапикселей, размер пикселя &mdash; 1,5&micro;.</li>\r\n	<li>Диафрагма &fnof;/2.2.</li>\r\n	<li>Объектив защищён сапфировым стеклом.</li>\r\n	<li>Вспышка True Tone.</li>\r\n	<li>Датчик освещённости на задней панели.</li>\r\n	<li>Пятилинзовый объектив.</li>\r\n	<li>Гибридный ИК-фильтр.</li>\r\n	<li>Автофокусировка.</li>\r\n	<li>Фокусировка касанием.</li>\r\n	<li>Распознавание лиц.</li>\r\n	<li>Панорамная съёмка.</li>\r\n	<li>Серийная съ&euml;мка.</li>\r\n	<li>Привязка фотографий к месту съёмки.</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Диагональ (дюйм):&nbsp;6.4</li>\r\n	<li>Сим карт: одна</li>\r\n	<li>Встроенная память (Гб):&nbsp;32</li>\r\n	<li>Фотокамера (Мп):&nbsp;12</li>\r\n</ul>\r\n', '<ul>\r\n	<li>8 мегапикселей, размер пикселя &mdash; 1,5&micro;.</li>\r\n	<li>Диафрагма &fnof;/2.2.</li>\r\n	<li>Объектив защищён сапфировым стеклом.</li>\r\n	<li>Вспышка True Tone.</li>\r\n	<li>Датчик освещённости на задней панели.</li>\r\n	<li>Пятилинзовый объектив.</li>\r\n	<li>Гибридный ИК-фильтр.</li>\r\n	<li>Автофокусировка.</li>\r\n	<li>Фокусировка касанием.</li>\r\n	<li>Распознавание лиц.</li>\r\n	<li>Панорамная съёмка.</li>\r\n	<li>Серийная съ&euml;мка.</li>\r\n	<li>Привязка фотографий к месту съёмки.</li>\r\n</ul>\r\n', '2013-08-24 00:00:00', 0, 1, 0, 1, 5, 'mobile', 1, 2, 'синий', '', ''),
(11, 'Sony Xperia miro (черный)', 41940, 'Sony', '', '', '<p>Смартфон Sony Xperia miro ориентирован на любителей общения в социальных сетях, в частности, в Facebook. Модель позволяет оставаться на связи с друзьями 24 часа в сутки и с удобством комментировать и создавать статусы</p>\r\n', 'img9.jpg', '', '<ul>\r\n	<li>Диагональ (дюйм):&nbsp;6.4</li>\r\n	<li>Сим карт: две</li>\r\n	<li>Встроенная память (Гб):&nbsp;32</li>\r\n	<li>Фотокамера (Мп): 8</li>\r\n</ul>\r\n', '', '2013-08-24 07:22:24', 1, 0, 1, 1, 6, 'mobile', 10, 1, 'черный', '', ''),
(13, 'Explay Five (черный)', 47940, 'Explay', '', '', '<p>Смартфон Explay Five отличается великолепным исполнением, производительной &quot;начинкой&quot; и широкими возможностями доступа к сети Интернет. Кроме того, модель обладает системой навигации, мощной восьмимипиксельной камерой и ярким IPS-экраном.</p>\r\n', 'img11.jpg', '<p>нияз</p>\r\n', '<ul>\r\n	<li>Диагональ (дюйм):&nbsp;6.4</li>\r\n	<li>Сим карт: две</li>\r\n	<li>Встроенная память (Гб): 32</li>\r\n	<li>Фотокамера (Мп): 8</li>\r\n</ul>\r\n', '<p>аман</p>\r\n', '2013-08-29 08:16:28', 1, 0, 0, 1, 15, 'mobile', 2, 2, 'белый', '', ''),
(34, 'Apple iPhone 8 + 64GB (серый)', 236940, 'Apple', '', '', '<p>Высочайшее качество видео на iPhone означает, что ваши истории станут ещё ярче и детальнее.Революционная система трёх камер &mdash; гораздо больше возможностей и неизменная простота в использовании. Беспрецедентное увеличение ресурса аккумулятора. И потряса&shy;ющий процессор с расши&shy;ренной поддержкой технологий машинного обучения, который открывает для iPhone большие новые перспек&shy;тивы.</p>\r\n', 'mobile-3491.jpg', '<ul>\r\n	<li>Для iPhone 8 мы разработали совершенно новый дизайн, в котором передняя и задняя панели выполнены из стекла. Самая популярная камера усовершенствована. Установлен самый умный и мощный процессор, когда-либо созданный для iPhone. Без проводов процесс зарядки становится элементарным. А дополненная реальность открывает невиданные до сих пор возможности. iPhone 8. Новое поколение iPhone.</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Диагональ (дюйм):&nbsp;6.1</li>\r\n	<li>Сим карт: одна</li>\r\n	<li>Встроенная память (Гб):&nbsp;64</li>\r\n	<li>Фотокамера (Мп):&nbsp;12</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Для iPhone 8 компания Apple разработала совершенно новый дизайн, в котором передняя и задняя панели выполнены из стекла. Самая популярная камера усовершенствована. Установлен самый умный и мощный процессор, когда-либо созданный для iPhone.Адаптер Lightning - 3.5 мм,Зарядное устройство,Проводная гарнитура,Кабель для связи с ПК, инструкция, гарантийный талон</li>\r\n</ul>\r\n', '0000-00-00 00:00:00', 1, 0, 0, 1, 6, 'mobile', 1, 3, '', '', ''),
(35, 'Samsung Galaxy S10+ (черный)', 461940, 'Apple', '', '', '<ul>\r\n	<li>Оцените полное погружение в контент на большом 6,4-дюймовом безграничном V-экране смартфона Samsung Galaxy A30s. Смотрите свои любимые видео, играйте в игры и ведите видеотрансляцию на ярком HD+ Super AMOLED экране.&nbsp;</li>\r\n</ul>\r\n', 'mobile-3512.jpg', '<ul>\r\n	<li>\r\n	<table cellpadding=\"0\" cellspacing=\"0\" style=\"width:770px\">\r\n		<tbody>\r\n			<tr>\r\n				<td style=\"width:365px\">Количество SIM-карт&nbsp;</td>\r\n				<td style=\"width:365px\"><a href=\"https://www.sulpak.kz/f/smartfoniy/almaty/13204_2\">2</a></td>\r\n			</tr>\r\n			<tr>\r\n				<td style=\"width:365px\">Версия ОС&nbsp;</td>\r\n				<td style=\"width:365px\"><a href=\"https://www.sulpak.kz/f/smartfoniy/almaty/4550_86\">Android 9.0</a></td>\r\n			</tr>\r\n			<tr>\r\n				<td style=\"width:365px\">Страна производителя</td>\r\n				<td style=\"width:365px\"><a href=\"https://www.sulpak.kz/f/smartfoniy/almaty/23013_14\">Вьетнам</a></td>\r\n			</tr>\r\n			<tr>\r\n				<td style=\"width:365px\">Особенности&nbsp;</td>\r\n				<td style=\"width:365px\">3D-сканирование лица, быстрая беспроводная зарядка, беспроводная реверсивная зарядка, защита корпуса по стандарту IP68, режим Super Slow-Mo</td>\r\n			</tr>\r\n			<tr>\r\n				<td style=\"width:365px\">Комплектация&nbsp;</td>\r\n				<td style=\"width:365px\">Смартфон, зарядное устройство, наушники, слот для сим карты, руководство пользователя</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n	</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Диагональ (дюйм):&nbsp;6.4</li>\r\n	<li>Сим карт: две</li>\r\n	<li>Встроенная память (Гб):&nbsp;64</li>\r\n	<li>Фотокамера (Мп):&nbsp;12 + 12 + 16 (тройная)</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Диагональ (дюйм):&nbsp;6.4</li>\r\n	<li>Разрешение (пикс):&nbsp;3040x1440</li>\r\n	<li>Встроенная память (Гб):&nbsp;128</li>\r\n	<li>Фотокамера (Мп):&nbsp;12 + 12 + 16 (тройная)</li>\r\n	<li>Оптический зум:&nbsp;x2</li>\r\n	<li>\r\n	<p>Великолепный дисплей, отличные динамики, новая оболочка One UI, разные фишки по типу реверсивной зарядки, аккумулятор.&nbsp;</p>\r\n	</li>\r\n</ul>\r\n', '0000-00-00 00:00:00', 1, 0, 0, 1, 2, 'mobile', 1, 1, '', '', ''),
(36, 'Samsung Galaxy A10 (черный)', 95940, 'Samsung', '', '', '<ul>\r\n	<li>Оцените полное погружение в контент на большом 6,4-дюймовом безграничном V-экране смартфона Samsung Galaxy A30s. Смотрите свои любимые видео, играйте в игры и ведите видеотрансляцию на ярком HD+ Super AMOLED экране.&nbsp;</li>\r\n</ul>\r\n', 'mobile-3699.jpg', '<p><strong>ЖИВИТЕ ЯРЧЕ ВМЕСТЕ С БЕЗГРАНИЧНЫМ ЭКРАНОМ</strong>&nbsp;<br />\r\n&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Оцените полное погружение в контент на большом 6,4-дюймовом безграничном V-экране смартфона Samsung Galaxy A30s. Смотрите свои любимые видео, играйте в игры и ведите видеотрансляцию на ярком HD+ Super AMOLED экране.&nbsp;</li>\r\n	<li><strong>ГОЛОГРАФИЧЕСКИЙ ПРИНТ И ЭРГОНОМИЧНЫЙ ДИЗАЙН</strong>&nbsp;<br />\r\n	<br />\r\n	Смартфон Samsung Galaxy A30s эффектно смотрится и отличается тонким дизайном. Благодаря эргономичной форме телефон комфортно ощущается в руке, что существенно облегчает навигацию по экрану. Телефон выделяется эффектным голографическим переливающимся рисунком корпуса. Вы можете выбрать телефон черного, белого или фиолетового цвета.</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Диагональ (дюйм):&nbsp;6.4</li>\r\n	<li>Сим карт: одна</li>\r\n	<li>Встроенная память (Гб):&nbsp;32</li>\r\n	<li>Фотокамера (Мп):&nbsp;25 + 8 + 5</li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>ТРОЙНАЯ ОСНОВНАЯ КАМЕРА НА ВСЕ СЛУЧАИ ЖИЗНИ</strong>&nbsp;<br />\r\n	<br />\r\n	Тройная камера Samsung Galaxy A30s позволит вам запечатлеть самые интересные моменты вашей жизни. Основная камера 25 Мп обеспечит четкие снимки в любое время суток, а сверхширокоугольная камера 8 Мп с углом 123˚ позволит снять незабываемые пейзажи. Кроме того, c помощью камеры 5 Мп с датчиком глубины вы сможете сфокусироваться на самом важном объекте съемки.&nbsp;</li>\r\n</ul>\r\n', '0000-00-00 00:00:00', 1, 1, 0, 1, 8, 'mobile', 9, 3, '', '', ''),
(37, 'Apple iPhone 11 Pro Max 64GB (серый)', 791940, 'Apple', '', '', '<ul>\r\n	<li>Новая система двух камер не оставит никого из ваших друзей за кадром. Самый быстрый процессор iPhone и мощный аккумулятор позволят больше делать и тратить меньше времени на подзарядку. А высочайшее качество видео на iPhone означает, что ваши истории станут ещё ярче и детальнее.Революционная система трёх камер &mdash; гораздо больше возможностей и неизменная простота в использовании. Беспрецедентное увеличение ресурса аккумулятора.</li>\r\n</ul>\r\n', 'mobile-3745.jpg', '<ul>\r\n	<li>\r\n	<h3 style=\"margin-left:0px; margin-right:0px\">Революционная система трёх камер &mdash; гораздо больше возможностей и неизменная простота в использовании. Беспрецедентное увеличение ресурса аккумулятора. И потряса&shy;ющий процессор с расши&shy;ренной поддержкой технологий машинного обучения, который открывает для iPhone большие новые перспек&shy;тивы. Представляем iPhone 11 Pro. Он достоин своего имени.</h3>\r\n	</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Диагональ (дюйм):&nbsp;6.5</li>\r\n	<li>Сим карт: одна</li>\r\n	<li>Встроенная память (Гб):&nbsp;64</li>\r\n	<li>Фотокамера (Мп):&nbsp;12 + 12 + 12 (тройная)</li>\r\n	<li>Оптический зум:&nbsp;x2</li>\r\n</ul>\r\n', '<ul>\r\n	<li>\r\n	<h3 style=\"margin-left:0px; margin-right:0px\">Революционная система трёх камер &mdash; гораздо больше возможностей и неизменная простота в использовании. Беспрецедентное увеличение ресурса аккумулятора. И потряса&shy;ющий процессор с расши&shy;ренной поддержкой технологий машинного обучения, который открывает для iPhone большие новые перспек&shy;тивы. Представляем iPhone 11 Pro. Он достоин своего имени.</h3>\r\n	</li>\r\n</ul>\r\n', '0000-00-00 00:00:00', 1, 1, 0, 1, 7, 'mobile', 1, 4, '', '', ''),
(38, 'Apple iPhone XR 64GB (черный)', 299940, 'Apple', '', '', '<ul>\r\n	<li>Новый дисплей Liquid Retina - самый продвинутый ЖК‑дисплей Apple. Еще более быстрый Face ID. Самый мощный и умный процессор iPhone. И потрясающая камера. iPhone XR - воплощение красоты и интеллекта.</li>\r\n</ul>\r\n', 'mobile-3899.jpg', '<ul>\r\n	<li>\r\n	<p><strong>ВСЕ ВНИМАНИЕ НА ДИСПЛЕЙ LIQUID RETINA</strong></p>\r\n\r\n	<p>Новый дисплей iPhone XR - самый продвинутый ЖК‑дисплей iPhone. Инновационные технологии подсветки позволили Apple создать дисплей, закругленный по углам и занимающий всю переднюю панель. Теперь реалистичные цвета заполняют ее целиком.</p>\r\n\r\n	<p><strong>ИСКЛЮЧИТЕЛЬНОЕ КАЧЕСТВО МАТЕРИАЛОВ</strong></p>\r\n\r\n	<p>Особо прочная передняя панель из стекла. Плотно подогнанная рамка из алюминия, применяющегося в аэрокосмической отрасли. Защита от воды и пыли. И шесть великолепных цветов.</p>\r\n\r\n	<p><strong>СЕМЬ СЛОЕВ ЦВЕТА</strong></p>\r\n\r\n	<p>Передовые технологии позволили добиться невероятно глубокого, насыщенного цвета задней панели из стекла.</p>\r\n	</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Диагональ (дюйм):&nbsp;6.1</li>\r\n	<li>SIM-карта: одна</li>\r\n	<li>Встроенная память (Гб):&nbsp;64</li>\r\n	<li>Фотокамера (Мп):&nbsp;12</li>\r\n</ul>\r\n', '<ul>\r\n	<li>\r\n	<p>&nbsp;</p>\r\n\r\n	<p><strong>Процессор:</strong>&nbsp;2600 Мгц (6-ядерный), граф.процессор</p>\r\n\r\n	<p><strong>Память:</strong>&nbsp;256 Гб, 3 Гб RAM</p>\r\n\r\n	<p><strong>Платформа:</strong>&nbsp;IOS 12</p>\r\n\r\n	<p><strong>Аккумулятор:</strong>&nbsp;2942 мА*ч Li-Ion, 25 ч разг.(GSM), 25 ч разг.(WCDMA)</p>\r\n\r\n	<p><strong>Экран:</strong>&nbsp;6.1&quot;, сенсорный, 1792x828, емкостный, IPS, 16 млн.цв.</p>\r\n\r\n	<p><strong>Камера:</strong>&nbsp;12 мпикс, 4619x2598, 5X цифр зум, вспышка</p>\r\n\r\n	<p><strong>Вид:</strong>&nbsp;Моноблок, 194 г, 150.9x75.7x8.3 мм</p>\r\n\r\n	<p>Особенности:</p>\r\n	</li>\r\n	<li>Беспроводная зарядка</li>\r\n	<li>Водонепроницаемый и пыленепроницаемый корпус</li>\r\n	<li>Платформа iOS 12, 256 Гб встроенной памяти</li>\r\n	<li>2600 Мгц 6-ядерный процессор + граф.процессор</li>\r\n	<li>3 Гб оперативной памяти, 7 мпикс фронтальная камера</li>\r\n</ul>\r\n', '0000-00-00 00:00:00', 1, 0, 0, 1, 10, 'mobile', 1, 3, '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `table_reviews`
--

CREATE TABLE `table_reviews` (
  `reviews_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `good_reviews` text NOT NULL,
  `bad_reviews` text NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL,
  `moderat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `table_reviews`
--

INSERT INTO `table_reviews` (`reviews_id`, `products_id`, `name`, `good_reviews`, `bad_reviews`, `comment`, `date`, `moderat`) VALUES
(1, 13, 'Артур', 'Хороший телефон', 'Плохой телефон', 'каукауапвава', '2019-08-20', 1),
(2, 14, '', '', '', '', '2019-08-23', 1),
(3, 14, 'Niyaz', 'Good phone', 'Plohoy telefon', 'Good phone for kids', '2019-08-23', 1),
(4, 8, 'Niyaz', 'Good phone', 'Bad phone', 'This phone is great', '2019-09-04', 1),
(6, 14, 'Nurs', 'good', 'bad', 'ggggggggg', '2019-09-27', 1),
(7, 6, '', '', '', '', '2019-09-27', 1),
(8, 6, 'Roza', 'Roza', 'Roza', 'Roza', '2019-09-27', 1),
(9, 1, '', '', '', '', '2019-10-03', 0),
(10, 30, 'Niyaz', 'advavasv', 'vdvdsv', 'vsdvsdvdv', '2019-10-04', 0),
(12, 33, 'Niyabek', 'Horoshiy telefon dlya povsednevnogo polzovaniya', 'Carapaetsya ecran', 'Telefon stoit svoih deneg', '2019-10-04', 1),
(13, 34, 'Nursultan Nazar', 'Pafosniy telefon dlya pantov', 'hrupkiy', 'beri ne poshaleesh', '2019-10-04', 1),
(14, 35, 'Niyazbek', 'Krasiviy dizain', 'Slaboe zaryadnoe ustroistvo', 'Horosiy telefon', '2019-10-04', 1),
(15, 36, 'Alisher', 'I love this smartphone.\n', 'Very fragile', 'Good smartphone', '2019-10-04', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `uploads_images`
--

CREATE TABLE `uploads_images` (
  `id` int(11) DEFAULT NULL,
  `products_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `uploads_images`
--

INSERT INTO `uploads_images` (`id`, `products_id`, `image`) VALUES
(NULL, 16, 'img1.jpg'),
(NULL, 16, 'img2.jpg'),
(NULL, 14, 'img1.jpg'),
(NULL, 14, 'img2.jpg'),
(NULL, 14, 'mobile-104.jpg'),
(NULL, 14, 'mobile-438.jpg'),
(NULL, 14, 'mobile-300.jpg'),
(NULL, 15, 'mobile-332.jpg'),
(NULL, 15, 'mobile-333.jpg'),
(NULL, 15, 'mobile-490.jpg'),
(NULL, 16, 'mobile-476.jpg'),
(NULL, 16, 'mobile-465.jpg'),
(NULL, 16, 'mobile-294.jpg'),
(NULL, 16, 'mobile-257.jpg'),
(NULL, 17, 'mobile-128.jpg'),
(NULL, 17, 'mobile-139.jpg'),
(NULL, 17, 'mobile-495.jpg'),
(NULL, 17, 'mobile-144.jpg'),
(NULL, 18, 'mobile-414.jpg'),
(NULL, 18, 'mobile-289.jpg'),
(NULL, 18, 'mobile-290.jpg'),
(NULL, 18, 'mobile-377.jpg'),
(NULL, 18, 'mobile-301.jpg'),
(NULL, 19, 'mobile-224.png'),
(NULL, 19, 'mobile-244.jpg'),
(NULL, 19, 'mobile-280.jpg'),
(NULL, 20, 'mobile-161.jpg'),
(NULL, 20, 'mobile-208.png'),
(NULL, 20, 'mobile-347.jpg'),
(NULL, 21, 'mobile-122.jpg'),
(NULL, 21, 'mobile-374.jpg'),
(NULL, 21, 'mobile-416.jpg'),
(NULL, 22, 'mobile-343.png'),
(NULL, 22, 'mobile-154.jpg'),
(NULL, 22, 'mobile-152.jpg'),
(NULL, 23, 'mobile-404.jpg'),
(NULL, 23, 'mobile-269.jpg'),
(NULL, 23, 'mobile-487.jpg'),
(NULL, 24, 'mobile-354.jpg'),
(NULL, 24, 'mobile-185.jpg'),
(NULL, 24, 'mobile-240.jpg'),
(NULL, 26, 'mobile-435.jpg'),
(NULL, 27, 'mobile-130.jpg'),
(NULL, 28, 'mobile-257.jpg'),
(NULL, 29, 'mobile-188.jpg'),
(NULL, 29, 'mobile-387.jpg'),
(NULL, 32, 'mobile-114.jpeg'),
(NULL, 32, 'mobile-308.jpeg'),
(NULL, 32, 'mobile-269.jpeg'),
(NULL, 33, 'mobile-264.jpeg'),
(NULL, 33, 'mobile-472.jpeg'),
(NULL, 33, 'mobile-286.jpeg'),
(NULL, 34, 'mobile-496.jpg'),
(NULL, 34, 'mobile-241.jpg'),
(NULL, 34, 'mobile-128.jpg'),
(NULL, 35, 'mobile-125.jpg'),
(NULL, 35, 'mobile-221.jpg'),
(NULL, 35, 'mobile-338.jpg'),
(NULL, 35, 'mobile-409.jpg'),
(NULL, 36, 'mobile-465.jpg'),
(NULL, 36, 'mobile-162.jpg'),
(NULL, 36, 'mobile-110.jpg'),
(NULL, 37, 'mobile-450.jpg'),
(NULL, 37, 'mobile-401.jpg'),
(NULL, 37, 'mobile-120.jpg'),
(NULL, 8, 'mobile-208.jpg'),
(NULL, 8, 'mobile-414.jpg'),
(NULL, 8, 'mobile-176.jpg'),
(NULL, 8, 'mobile-329.jpg'),
(NULL, 8, 'mobile-365.jpg'),
(NULL, 38, 'mobile-347.jpg'),
(NULL, 38, 'mobile-143.jpg'),
(NULL, 38, 'mobile-264.jpg'),
(NULL, 6, 'mobile-304.jpg'),
(NULL, 6, 'mobile-138.jpg'),
(NULL, 3, 'mobile-392.jpg'),
(NULL, 3, 'mobile-423.jpg'),
(NULL, 3, 'mobile-412.jpg'),
(NULL, 2, 'mobile-291.jpg'),
(NULL, 2, 'mobile-444.jpg'),
(NULL, 2, 'mobile-172.jpg'),
(NULL, 1, 'mobile-265.jpg'),
(NULL, 1, 'mobile-399.jpg'),
(NULL, 1, 'mobile-209.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `buy_products`
--
ALTER TABLE `buy_products`
  ADD PRIMARY KEY (`buy_id`);

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Индексы таблицы `reg_admin`
--
ALTER TABLE `reg_admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reg_user`
--
ALTER TABLE `reg_user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `table_products`
--
ALTER TABLE `table_products`
  ADD PRIMARY KEY (`products_id`);

--
-- Индексы таблицы `table_reviews`
--
ALTER TABLE `table_reviews`
  ADD PRIMARY KEY (`reviews_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `buy_products`
--
ALTER TABLE `buy_products`
  MODIFY `buy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `reg_admin`
--
ALTER TABLE `reg_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `reg_user`
--
ALTER TABLE `reg_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `table_products`
--
ALTER TABLE `table_products`
  MODIFY `products_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT для таблицы `table_reviews`
--
ALTER TABLE `table_reviews`
  MODIFY `reviews_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
