-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.3.22-MariaDB - mariadb.org binary distribution
-- Операционная система:         Win64
-- HeidiSQL Версия:              11.0.0.5958
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры для таблица tsk.local.params
CREATE TABLE IF NOT EXISTS `params` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `team` varchar(10) NOT NULL DEFAULT 'all',
  `param_name` varchar(50) NOT NULL DEFAULT '',
  `param_value` varchar(255) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы tsk.local.params: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `params` DISABLE KEYS */;
/*!40000 ALTER TABLE `params` ENABLE KEYS */;

-- Дамп структуры для таблица tsk.local.post
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_type` enum('BLOG','PAGE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'BLOG',
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `alias` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы tsk.local.post: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` (`id`, `post_type`, `title`, `description`, `alias`, `content`, `create_at`, `update_at`, `user_id`) VALUES
	(1, 'BLOG', 'Первый пост', '', 'first_post', '<p>Простой текст</p><p>Вторая строка простого текста</p>', '2020-06-23 12:11:12', '2020-06-23 12:11:20', 1),
	(2, 'PAGE', 'О нас', 'Описание страницы о нас', 'about', 'О нас', '2020-06-25 10:34:08', '2020-06-25 10:34:08', 1);
/*!40000 ALTER TABLE `post` ENABLE KEYS */;

-- Дамп структуры для таблица tsk.local.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `fio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `uid` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `hash` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('ROOT','CLIENT','ABONENT') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ABONENT',
  `state` enum('ACTIVE','DISABLED','NOT_CONFIRMED') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NOT_CONFIRMED',
  `confirm_code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы tsk.local.user: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `parent_id`, `fio`, `uid`, `phone`, `login`, `email`, `hash`, `role`, `state`, `confirm_code`, `created_at`) VALUES
	(1, 0, '', '123', '', 'nimpweb', 'nimpweb@yandex.ru', '123', 'ROOT', 'ACTIVE', '123', '2020-06-19 12:37:20');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
