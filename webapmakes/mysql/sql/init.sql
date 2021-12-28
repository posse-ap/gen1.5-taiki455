DROP SCHEMA IF EXISTS web_app;
CREATE SCHEMA web_app;
USE web_app;

-- questionsテーブル
DROP TABLE IF EXISTS scedules;
CREATE TABLE `scedules`(
  `id` INT NOT NULL PRIMARY KEY,
  `info` INT NOT NULL 
   );

DROP TABLE IF EXISTS language_chart;

CREATE TABLE `language_chart`(
  `id` INT NOT NULL PRIMARY KEY,
  `lang` VARCHAR(20) NOT NULL,
  `color` VARCHAR(20) NOT NULL,
   );

INSERT INTO language_chart (`id`,`lang`,`color`) VALUES
(1, 'JavaScript', '#2A54EF'),
(2, 'CSS', '#1B71BD'),
(3, 'PHP', '#21BDDE'),
(4, 'HTML', '#3DCEFD'),
(5, 'Laravel', '#B39EF3'),
(6, 'SQL', '#6D47EC'),
(7, 'SHELL', '#4A18EF'),
(8, '情報システム基礎知識（その他）', '#3107BF');


CREATE TABLE `contents_chart`(
  `id` INT NOT NULL PRIMARY KEY,
  `data` VARCHAR(20) NOT NULL,
  `color` VARCHAR(20) NOT NULL,
   );

INSERT INTO contents_chart (`id`,`data`,`color`) VALUES
(1, 'ドットインストール', '#2A54EF'),
(2, 'N予備校', '#1B71BD'),
(3, 'POSSE課題', '#21BDDE'),


CREATE TABLE `bar_chart`(
  `id` INT NOT NULL PRIMARY KEY,
  `data` VARCHAR(20) NOT NULL,
  `color` VARCHAR(20) NOT NULL,
   );