-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 26 2024 г., 21:09
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Volunteer Link`
--

-- --------------------------------------------------------

--
-- Структура таблицы `claim`
--

CREATE TABLE `claim` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `name` varchar(60) NOT NULL,
  `lastname` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `login` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `event` int NOT NULL,
  `description` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `claim`
--

INSERT INTO `claim` (`id`, `id_user`, `name`, `lastname`, `email`, `login`, `event`, `description`) VALUES
(2, 1, 'Александра', 'Вахотская', 'vahotskayasasha@gmail.com', '@sasvahhuilo', 1, 'Отсутствует'),
(3, 2, 'Алина', 'Тихонова', 'a.tikhonova94@yandex.ru', 'admin', 2, '-');

-- --------------------------------------------------------

--
-- Структура таблицы `event`
--

CREATE TABLE `event` (
  `id` int NOT NULL,
  `photo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `name` varchar(60) NOT NULL,
  `description` varchar(500) NOT NULL,
  `adress` varchar(60) NOT NULL,
  `number` varchar(60) NOT NULL,
  `date` varchar(60) NOT NULL,
  `time` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `event`
--

INSERT INTO `event` (`id`, `photo`, `name`, `description`, `adress`, `number`, `date`, `time`) VALUES
(1, 'images/Rectangle_4.png', 'Весенний Убор: <br>Чистота нашего города', 'Присоединяйтесь к нам в мероприятии \"Весенний Убор: Чистота нашего города\", организованном Центром Экологии и Охраны Природы. Мы соберемся вместе для уборки парков и скверов, очистки от мусора и приведения нашего города в порядок. Давайте вместе создадим чище и красивее окружающую среду!', 'Парк им. Пушкина, ул. Ленина, 25, г. <br>Волгоград', '+7 (495) 123-45-67', '15 апреля 2024 года', 'с 10:00 до 14:00'),
(2, 'images/Rectangle_5.png', 'День Доброты: <br>Подарим улыбку', 'Присоединяйтесь к благотворительному мероприятию \"День Доброты: Подарим улыбку\", организованному Фондом \"Добрые Сердца\". Мы соберем подарки и поздравления для детей из детских домов и приютов, чтобы сделать их день ярким и запоминающимся. Давайте вместе принесем радость и поддержку этим детям!', 'Детский дом \"Радость\", ул. Солнечная, 10, г. <br>Казань', '+7 (812) 987-65-43', '20 мая 2024 года', 'с 11:00 до 15:00'),
(3, 'images/Rectangle_6.png', 'Тепло и Забота: <br>Помощь бездомным', 'Присоединяйтесь к нам в благотворительном мероприятии \"Тепло и Забота: Помощь бездомным\", организованном Волонтерским Центром \"Добрые Руки\". Мы раздадим горячие обеды, одежду и теплые одеяла людям, оказавшимся на улице. Присоединяйтесь к нашему доброму делу и помогите тем, кто нуждается в нашей помощи!', 'Улица Строителей, 5 (под мостом), <br>г. Новосибирск', '+7 (863) 555-55-55', '10 июня 2024 года', 'с 12:00 до 15:00');

-- --------------------------------------------------------

--
-- Структура таблицы `recall`
--

CREATE TABLE `recall` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `name` varchar(60) NOT NULL,
  `login` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `recall`
--

INSERT INTO `recall` (`id`, `id_user`, `name`, `login`, `description`) VALUES
(1, 2, 'Алексей Д.', 'alexeii26', 'Volunteer Link - это место, где я нашла свое призвание. Волонтерство стало неотъемлемой частью моей жизни благодаря этому центру. Здесь я чувствую, что моя помощь делает мир лучше. Благодарю за возможность быть полезной!'),
(2, 2, 'Ирина Н.', 'irinaa066', 'Присоединился к Volunteer Link несколько недель назад и не нарадуюсь! Организация мероприятий четкая, атмосфера дружелюбная, и самое главное - чувствуешь, что твоя помощь имеет значение. Всем советую присоединиться!'),
(3, 2, 'Мария Е.', 'marrina347', 'Я уже несколько месяцев волонтерю в Volunteer Link, и это просто потрясающее переживание! Здесь я нашла не только возможность помогать нуждающимся, но и настоящих друзей. Спасибо организаторам за такое прекрасное сообщество!');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(60) NOT NULL,
  `lastname` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date` varchar(60) NOT NULL,
  `city` varchar(60) NOT NULL,
  `number` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `country` varchar(60) NOT NULL,
  `education` varchar(500) NOT NULL,
  `email` varchar(60) NOT NULL,
  `login` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `date`, `city`, `number`, `country`, `education`, `email`, `login`, `password`) VALUES
(1, 'Александра', 'Вахотская', '02.02.2006', 'Нижнее Хорошово', '+79774558175', 'Россия', 'Колледж Коломна', 'vahotskayasasha@gmail.com', '@sasvahhuilo', 'tilox20002000'),
(2, 'admin', 'admin', '', '', '777', '', '', '6am8gwonnu@email.edu.pl', 'admin', '111'),
(4, 'Александр', 'Ярцев', '', '', '+79459368427', '', '', 'yarcevalexander735@gmail.com', 'yarcevalex', '123');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `claim`
--
ALTER TABLE `claim`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `event` (`event`);

--
-- Индексы таблицы `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `recall`
--
ALTER TABLE `recall`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`id_user`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `claim`
--
ALTER TABLE `claim`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `event`
--
ALTER TABLE `event`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `recall`
--
ALTER TABLE `recall`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `claim`
--
ALTER TABLE `claim`
  ADD CONSTRAINT `claim_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `claim_ibfk_2` FOREIGN KEY (`event`) REFERENCES `event` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `recall`
--
ALTER TABLE `recall`
  ADD CONSTRAINT `recall_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
