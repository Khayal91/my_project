-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 18 2023 г., 07:39
-- Версия сервера: 8.0.30
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `flash_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

CREATE TABLE `about` (
  `a_uid` int NOT NULL,
  `a_desc` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `a_slogan` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `a_img` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `about`
--

INSERT INTO `about` (`a_uid`, `a_desc`, `a_slogan`, `a_img`) VALUES
(3, 'Flash company is a reliable and cost-effective choice for any business in need of storageand transportationservices in the United States. Our \"A\" grade warehouse operates in Delaware to store variousvolumes of shipments(including e-commerce). Additionally, we have our own fleet of vehicles to transport all typesof loads, includinglarge and heavy ones, within the USA. We ensure the safety of shipments and compliance withtransportationrequirements through our extensive network of partners and customized services. To avoid anyconfusion during theacceptance of shipments, we register, group, and store them on shelves according to their typeand size (weight).The stored shipments are insured against possible risks. The warehouse and the surrounding areaare under constantvideo surveillance and control.', 'We Offer The Best Way For Your Business', '1466d639964e65f51af020deca961b68.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `a_uid` int NOT NULL,
  `a_username` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `a_password` varchar(256) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`a_uid`, `a_username`, `a_password`) VALUES
(1, 'khayal', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Структура таблицы `footer`
--

CREATE TABLE `footer` (
  `f_uid` int NOT NULL,
  `f_about` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `f_about_copyright` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `f_instagram_link` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `f_number` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `f_mail` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `footer`
--

INSERT INTO `footer` (`f_uid`, `f_about`, `f_about_copyright`, `f_instagram_link`, `f_number`, `f_mail`) VALUES
(2, 'The Flash company is the best choice for business owners in the United States who want to safely and affordably store and transport their products with warehouse and delivery services.', 'Flash.az', 'https://www.instagram.com/flash.wh.az', '+994702203237', 'info@flash.az');

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `g_uid` int NOT NULL,
  `g_category` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `g_img` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`g_uid`, `g_category`, `g_img`) VALUES
(7, 'delivery', '69985987f226816f90f79efc243d3576.jpg'),
(8, 'delivery', '8c6dbac43b336ae07f66e7cb90c53f61.jpg'),
(9, 'delivery', 'c6abdeb0b1627157aa4d91c49bae6c84.jpg'),
(10, 'delivery', '2926b21902ab7daa7932dbdd737195b3.jpg'),
(11, 'partners', 'a0574c16e1a40b411d8fff4f3c147d4f.jpg'),
(12, 'warehouse', '399f57b389a7715d45f9a25c992ee1b0.jpg'),
(13, 'warehouse', '207ab77c30d9db0dde5a266ae30849d6.jpg'),
(14, 'warehouse', 'af186bd503d784a66c743728cd7605d3.jpg'),
(15, 'warehouse', 'dcfe9e6c7bb5ff0d29e6569b0684dab9.jpg'),
(16, 'warehouse', 'b7ec0bce70fc4d7030a937f5475b9076.jpg'),
(17, 'warehouse', 'afd95b8c444c9982eacce853de710526.jpg'),
(18, 'warehouse', 'add6082157f965865e03ee0221575674.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `lending`
--

CREATE TABLE `lending` (
  `l_uid` int NOT NULL,
  `l_icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `l_title` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `l_desc` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `l_img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `lending`
--

INSERT INTO `lending` (`l_uid`, `l_icon`, `l_title`, `l_desc`, `l_img`) VALUES
(6, 'fa-solid fa-warehouse', 'Warehouse service', 'We offer affordable storage services and competitive prices for all kinds of parcels. For detailed information, please contact us.', '4a9c09f2377eb3380c625f91cb2c0ed7.jpg'),
(7, 'fa-solid fa-truck-fast', 'Delivery service', 'Safe and fast delivery of goods to every corner of America. For detailed information, please contact us.', 'be11b0cb3ffddc28013f31d51ecc7e0a.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `logo`
--

CREATE TABLE `logo` (
  `l_uid` int NOT NULL,
  `l_img` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `logo`
--

INSERT INTO `logo` (`l_uid`, `l_img`) VALUES
(8, 'e8eca6ccc36347b17af1631ef3632c76.png');

-- --------------------------------------------------------

--
-- Структура таблицы `service`
--

CREATE TABLE `service` (
  `s_uid` int NOT NULL,
  `s_employees` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `s_miles` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `s_customers` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `service`
--

INSERT INTO `service` (`s_uid`, `s_employees`, `s_miles`, `s_customers`) VALUES
(3, '8', '524000', '11');

-- --------------------------------------------------------

--
-- Структура таблицы `slider`
--

CREATE TABLE `slider` (
  `s_uid` int NOT NULL,
  `s_name` varchar(1024) COLLATE utf8mb4_general_ci NOT NULL,
  `s_img` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `slider`
--

INSERT INTO `slider` (`s_uid`, `s_name`, `s_img`) VALUES
(4, 'WAREHOUSE', 'ae6dc9050ed9e17731ec3efe2c668753.jpg'),
(5, 'DELIVERY', '226b98aa4b355af223a30baa53ef1c96.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `support`
--

CREATE TABLE `support` (
  `s_uid` int NOT NULL,
  `s_time` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `s_current` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `s_number` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `s_email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `support`
--

INSERT INTO `support` (`s_uid`, `s_time`, `s_current`, `s_number`, `s_email`) VALUES
(3, 'Online 24/7', 'Currently online', '+994702203237', 'info@flash.az');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`a_uid`);

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_uid`);

--
-- Индексы таблицы `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`f_uid`);

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`g_uid`);

--
-- Индексы таблицы `lending`
--
ALTER TABLE `lending`
  ADD PRIMARY KEY (`l_uid`);

--
-- Индексы таблицы `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`l_uid`);

--
-- Индексы таблицы `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`s_uid`);

--
-- Индексы таблицы `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`s_uid`);

--
-- Индексы таблицы `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`s_uid`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `about`
--
ALTER TABLE `about`
  MODIFY `a_uid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `a_uid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `footer`
--
ALTER TABLE `footer`
  MODIFY `f_uid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `g_uid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `lending`
--
ALTER TABLE `lending`
  MODIFY `l_uid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `logo`
--
ALTER TABLE `logo`
  MODIFY `l_uid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `service`
--
ALTER TABLE `service`
  MODIFY `s_uid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `slider`
--
ALTER TABLE `slider`
  MODIFY `s_uid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `support`
--
ALTER TABLE `support`
  MODIFY `s_uid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
