DROP SCHEMA IF EXISTS `web-app`;
CREATE SCHEMA `web-app`;
USE `web-app`;


DROP TABLE IF EXISTS study_languages;
CREATE TABLE `study_languages`(
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `language`  VARCHAR(55) NOT NULL COMMENT '学習言語の名称',
  `graph_color` VARCHAR(20) NOT NULL COMMENT '学習言語ごとのグラフの色'
   ) COMMENT='学習言語に関連するデータ';

INSERT INTO `study_languages` (`id`,`language`,`graph_color`) VALUES
   (1, 'JavaScript', '#2A54EF'),
   (2, 'CSS', '#1B71BD'),
   (3, 'PHP', '#21BDDE'),
   (4, 'HTML', '#3DCEFD'),
   (5, 'Laravel', '#B39EF3'),
   (6, 'SQL', '#6D47EC'),
   (7, 'SHELL', '#4A18EF'),
   (8, '情報システム基礎知識（その他）', '#3107BF');

DROP TABLE IF EXISTS study_contents;
CREATE TABLE `study_contents`(
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `content`  VARCHAR(255) NOT NULL COMMENT '学習コンテンツの名称',
  `graph_color` VARCHAR(20) NOT NULL COMMENT '学習言語ごとのグラフの色'
   ) COMMENT='学習コンテンツに関連するデータ';

INSERT INTO `study_contents` (`id`,`content`,`graph_color`) VALUES
(1, 'ドットインストール', '#2A54EF'),
(2, 'N予備校', '#1B71BD'),
(3, 'POSSE課題', '#21BDDE');

DROP TABLE IF EXISTS studies;
CREATE TABLE `studies`(
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `study_hour` INT NOT NULL COMMENT 'study_dayにおける学習時間（時間のみ）',
  `study_day` DATETIME NOT NULL COMMENT '学習をした年月日',
  `language_id` INT NOT NULL COMMENT 'study_languagesのidカラムの外部キー',
  `content_id` INT NOT NULL COMMENT 'study_contentsのidカラムの外部キー',
  FOREIGN KEY(`language_id`) REFERENCES `study_languages`(`id`) ON DELETE CASCADE,
  FOREIGN KEY(`content_id`) REFERENCES `study_contents`(`id`) ON DELETE CASCADE
   ) COMMENT='学習に関連するデータ';

<<<<<<< HEAD
INSERT INTO `studies` (`id`,`study_hour`,`study_day`,`language_id`,`content_id`) VALUES
   (1, 1, '2022-01-01',1,1),
   (2, 3, '2022-02-14',1,1),
   (3, 4, '2022-02-15',1,1),
   (4, 4, '2022-03-15',1,1),
   (5, 5, '2022-04-14',1,1),
   (6, 5, '2022-04-15',1,1);



 