# ************************************************************
# Sequel Pro SQL dump
# バージョン 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# ホスト: 127.0.0.1 (MySQL 5.7.23)
# データベース: hew
# 作成時刻: 2019-03-10 10:29:29 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# テーブルのダンプ color
# ------------------------------------------------------------

CREATE TABLE `color` (
  `color_id` int(255) NOT NULL AUTO_INCREMENT,
  `color_name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`color_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# テーブルのダンプ contents
# ------------------------------------------------------------

CREATE TABLE `contents` (
  `contents_id` int(255) NOT NULL,
  `contents_title` varchar(20) DEFAULT NULL,
  `contents` varchar(999) DEFAULT NULL,
  `up_day` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# テーブルのダンプ detail
# ------------------------------------------------------------

CREATE TABLE `detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `red` int(3) NOT NULL,
  `green` int(3) NOT NULL,
  `blue` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# テーブルのダンプ picture
# ------------------------------------------------------------

CREATE TABLE `picture` (
  `pic_id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) NOT NULL,
  `file_path` varchar(999) DEFAULT NULL,
  `save_datetime` datetime DEFAULT NULL,
  `red` int(255) NOT NULL,
  `green` int(255) NOT NULL,
  `blue` int(255) NOT NULL,
  PRIMARY KEY (`pic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# テーブルのダンプ record
# ------------------------------------------------------------

CREATE TABLE `record` (
  `pic_id` int(255) DEFAULT NULL,
  `color_id` int(255) DEFAULT NULL,
  `now_state` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# テーブルのダンプ user
# ------------------------------------------------------------

CREATE TABLE `user` (
  `user_id` int(255) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) DEFAULT NULL,
  `user_pass` varchar(10) DEFAULT NULL,
  `user_mail` varchar(50) DEFAULT NULL,
  `birth_day` datetime DEFAULT NULL,
  `height` int(3) DEFAULT NULL,
  `weight` int(3) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
