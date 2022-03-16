-- Adminer 4.7.6 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `heroes`;
CREATE TABLE `heroes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `color` varchar(30) NOT NULL,
  `lives` tinyint(3) unsigned NOT NULL DEFAULT 3,
  `big` tinyint(1) unsigned NOT NULL DEFAULT 0,
  `star` tinyint(1) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `heroes` (`id`, `name`, `color`, `lives`, `big`, `star`) VALUES
(1,	'Mario',	'red',	3,	0,	0),
(2,	'Luigi',	'green',	3,	0,	0),
(3,	'Yoshi',	'green',	3,	1,	0),
(4,	'Toad',	'white',	3,	0,	1);

-- 2021-02-18 15:35:37