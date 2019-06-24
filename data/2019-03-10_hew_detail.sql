# ************************************************************
# Sequel Pro SQL dump
# バージョン 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# ホスト: 127.0.0.1 (MySQL 5.7.23)
# データベース: hew
# 作成時刻: 2019-03-10 10:26:52 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


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

LOCK TABLES `detail` WRITE;
/*!40000 ALTER TABLE `detail` DISABLE KEYS */;

INSERT INTO `detail` (`id`, `name`, `detail`, `red`, `green`, `blue`)
VALUES
	(1,'胆道閉鎖症','肝臓から腸へ胆汁を出せない難治性の病気です。\r\n病院での診察をお勧めします。',255,255,224),
	(2,'胆道ガン','胆管の上皮から発生する悪性腫瘍の可能性あり。\r\n病院での早急な診察をお勧めします。',224,224,224),
	(3,'胆石症','胆嚢や胆管に結石ができる病気です。\r\n激痛を伴うため、病院での診察をお勧めします。',220,220,220),
	(4,'膵臓ガン','治療が難しい膵臓ガンの可能性があります。\r\n進行が早いため、至急病院での診察を提案します。',245,222,179),
	(5,'慢性膵炎','膵臓に繰り返し炎症が起こった事で、膵臓の細胞が壊れてしまう慢性膵炎でも白い便が出る事があります。',210,180,140),
	(6,'コレラ','コレラ菌に感染することで発症する病気です。\r\n多くは激しい下痢となり、白い米のとぎ汁のような下痢が出る事もあります。',255,255,255),
	(7,'バリウム検査','バリウム検査の際に飲むバリウムは、消化や吸収がされずそのまま便として排泄されます。\r\nそのためバリウム検査後は、検査当日から翌日にかけて白いバリウム便が排泄されます。',255,255,255),
	(8,'胃・十二指腸潰瘍','ヘリコバクター・ピロリ菌の感染や消炎鎮痛剤などによって胃粘膜の強度が落ち、それぞれの部位が胃酸によって損傷した症状です。\r\n早急な診察を提案します。',128,128,128),
	(9,'胃がん','がんが血管を傷つけ出血すると、胃酸と血が反応し、黒い弁が出ることがあります。\r\n至急、病院での診察をお勧めします。',120,120,120),
	(10,'大腸がん','大腸がんは赤い血便がみられたり、便が細くなったり、便秘などがみられますが、小腸に近い盲腸や上行結腸にできると黒い便が出ることがあります。',125,125,125),
	(11,'便秘','腸内で便の腐敗や酸化が起こる、水分が抜けることなどによって便の色が濃褐色となることがあります。',123,85,68),
	(12,'鉄剤を内服','鉄剤を内服した場合、吸収されない鉄分の色によって便が黒くなるケースがあります。',98,45,24),
	(13,'黒を基調とした食事','イカスミやチョコ、ココアといった黒を基調とした食事をした場合、便にその色が出る可能性があります。',20,20,20);

/*!40000 ALTER TABLE `detail` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
