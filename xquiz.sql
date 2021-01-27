-- Adminer 4.7.7 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `quiz`;
CREATE TABLE `quiz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` int(11) NOT NULL,
  `title` tinytext NOT NULL,
  `description` text NOT NULL,
  `published` int(11) NOT NULL,
  `questions` longtext NOT NULL,
  `answers` tinytext NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `quiz` (`id`, `code`, `title`, `description`, `published`, `questions`, `answers`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1,	202012,	'December Camp',	'A mini quiz set for the coming virtual camp',	0,	'hgjhgj',	'jkhkjhk,',	'2019-12-02 09:15:17',	'2019-12-02 09:15:17',	'0000-00-00 00:00:00'),
(2,	202010,	'',	'',	1,	'[[{\"id\":\"1\",\"0\":\"Feather and ink was used during which technology age\",\"5\":\"\",\"1\":\"Middle\",\"2\":\"Bronze\",\"3\":\"Iron\",\"4\":\"Industrial\"}],[{\"id\":\"2\",\"0\":\"Industrial age is also referred to as __ age\",\"5\":\"\",\"1\":\"Electronic\",\"2\":\"Machine\",\"3\":\"Iron\",\"4\":\"Stone\"}],[{\"id\":\"3\",\"0\":\"Gottfried mechanical calculator was called\",\"5\":\"\",\"1\":\"Leibniz wheel\",\"2\":\"Pascaline\",\"3\":\"Analytical machine\",\"4\":\"Abacus\"}],[{\"id\":\"4\",\"0\":\"__ is used to represent items in the Stone age\",\"5\":\"\",\"1\":\"Cowries\",\"2\":\"Stones\",\"3\":\"Calculator\",\"4\":\"Pen\"}]]',	'[[{\"id\":\"1\",\"ans\":\"a\"}],[{\"id\":\"2\",\"ans\":\"b\"}],[{\"id\":\"3\",\"ans\":\"a\"}],[{\"id\":\"4\",\"ans\":\"b\"}]]',	'2019-12-02 11:23:28',	'2019-12-02 11:23:28',	'0000-00-00 00:00:00'),
(3,	20210101,	'2021 Week 1',	'',	0,	'[[{\"id\":\"1\",\"0\":\"Which prayer does Allah mention in the Holy Quran to especially guard?\",\"5\":\"\",\"1\":\"Fajr Salah\",\"2\":\"Asr Salah\",\"3\":\"Zuhr Salah\",\"4\":\"Maghrib Salah\"}],[{\"id\":\"2\",\"0\":\"Are women allowed to go to mosques to offer prayers?\",\"5\":\"\",\"1\":\"No, women are not allowed in the mosque\",\"2\":\"Women can only listen to prayers\",\"3\":\"Yes, women can offer prayers in mosques, provided there are separate facilities and provision\",\"4\":\"Women can pray in the mosque, standing right beside the men\"}],[{\"id\":\"3\",\"0\":\"What is the call for prayer called?\",\"5\":\"\",\"1\":\"Adhan\",\"2\":\"Takbeer\",\"3\":\"Kalimah\",\"4\":\"Iqamah\"}],[{\"id\":\"4\",\"0\":\"Which part of the body is compulsory to wash in wudu?\",\"5\":\"\",\"1\":\"Face\",\"2\":\"Hand\",\"3\":\"Feet\",\"4\":\"All of the above\"}]]',	'[[{\"id\":\"1\",\"ans\":\"b\"}],[{\"id\":\"2\",\"ans\":\"c\"}],[{\"id\":\"3\",\"ans\":\"a\"}],[{\"id\":\"4\",\"ans\":\"d\"}]]',	'2021-01-14 16:09:13',	'2021-01-14 16:09:13',	'0000-00-00 00:00:00'),
(4,	20211,	'2021 Week 1 published',	'',	1,	'[[{\"id\":\"1\",\"0\":\"Which prayer does Allah mention in the Holy Quran to especially guard?\",\"5\":\"\",\"1\":\"Fajr Salah\",\"2\":\"Asr Salah\",\"3\":\"Zuhr Salah\",\"4\":\"Maghrib Salah\"}],[{\"id\":\"2\",\"0\":\"Are women allowed to go to mosques to offer prayers?\",\"5\":\"\",\"1\":\"No, women are not allowed in the mosque\",\"2\":\"Women can only listen to prayers\",\"3\":\"Yes, women can offer prayers in mosques, provided there are separate facilities and provision\",\"4\":\"Women can pray in the mosque, standing right beside the men\"}],[{\"id\":\"3\",\"0\":\"What is the call for prayer called?\",\"5\":\"\",\"1\":\"Adhan\",\"2\":\"Takbeer\",\"3\":\"Kalimah\",\"4\":\"Iqamah\"}],[{\"id\":\"4\",\"0\":\"Which part of the body is compulsory to wash in wudu?\",\"5\":\"\",\"1\":\"Face\",\"2\":\"Hand\",\"3\":\"Feet\",\"4\":\"All of the above\"}]]',	'[[{\"id\":\"1\",\"ans\":\"b\"}],[{\"id\":\"2\",\"ans\":\"c\"}],[{\"id\":\"3\",\"ans\":\"a\"}],[{\"id\":\"4\",\"ans\":\"d\"}]]',	'2021-01-14 16:09:13',	'2021-01-14 16:09:13',	'0000-00-00 00:00:00');

DROP TABLE IF EXISTS `scoresheet`;
CREATE TABLE `scoresheet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  `quiz` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `sent` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`user`),
  KEY `quiz` (`quiz`),
  CONSTRAINT `scoresheet_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`id`),
  CONSTRAINT `scoresheet_ibfk_2` FOREIGN KEY (`quiz`) REFERENCES `quiz` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` tinytext NOT NULL,
  `password` tinytext NOT NULL,
  `clearance` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`) USING HASH
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- 2021-01-15 00:10:32
