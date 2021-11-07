DROP SCHEMA IF EXISTS web_app;
CREATE SCHEMA web_app;
USE web_app;

-- questionsテーブル
DROP TABLE IF EXISTS `scedules`;
CREATE TABLE `scedules`(
  `id` INT NOT NULL PRIMARY KEY,
  `info` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
);

INSERT INTO scedules (`id`,`info`) VALUES
(1,'あ'),
(2,'い');