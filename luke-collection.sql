# ************************************************************
# Sequel Ace SQL dump
# Version 20025
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 5.7.37)
# Database: luke-collection
# Generation Time: 2022-02-08 15:15:51 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table luke-albums
# ------------------------------------------------------------

DROP TABLE IF EXISTS `luke-albums`;

CREATE TABLE `luke-albums` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `album_name` varchar(255) NOT NULL DEFAULT '',
  `artist_name` varchar(255) NOT NULL DEFAULT '',
  `year` int(11) unsigned NOT NULL,
  `rating` int(11) unsigned DEFAULT NULL,
  `cover` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `luke-albums` WRITE;
/*!40000 ALTER TABLE `luke-albums` DISABLE KEYS */;

INSERT INTO `luke-albums` (`id`, `album_name`, `artist_name`, `year`, `rating`, `cover`)
VALUES
	(7,'Plastic Beach','Gorillaz',2010,10,'https://m.media-amazon.com/images/I/81EP2fxHLRL._AC_SX425_.jpg'),
	(8,'In Rainbows','Radiohead',2007,9,'https://m.media-amazon.com/images/I/A1MwaIeBpwL._AC_SL1500_.jpg'),
	(9,'Rumours','Fleetwood Mac',1977,9,'https://upload.wikimedia.org/wikipedia/en/f/fb/FMacRumours.PNG'),
	(10,'The Low End Theory','A Tribe Called Quest',1992,9,'https://upload.wikimedia.org/wikipedia/en/4/42/ATribeCalledQuestTheLowEndtheory.jpg'),
	(11,'Enter the Wu-Tang (36 Chambers)','Wu-Tang Clan',1993,9,'https://m.media-amazon.com/images/I/614UiJzoxPL._AC_SL1000_.jpg'),
	(12,'Screamadelica','Primal Scream',1991,8,'https://upload.wikimedia.org/wikipedia/en/1/1d/Primal_Scream_-_Screamadelica.png'),
	(13,'Blood Sugar Sex Magik','Red Hot Chili Peppers',1992,9,'https://m.media-amazon.com/images/I/81hS2wgxbhL._AC_SL1425_.jpg'),
	(14,'Madvillainy','Madvillain',2004,8,'https://media.pitchfork.com/photos/5929c458ea9e61561daa811a/1:1/w_600/0bc6101d.jpg'),
	(15,'You\'re Dead!','Flying Lotus',2014,9,'https://upload.wikimedia.org/wikipedia/en/d/df/You%27re_Dead%21.jpg'),
	(16,'Graceland','Paul Simon',1986,9,'https://upload.wikimedia.org/wikipedia/commons/c/c3/Graceland_cover_-_Paul_Simon.jpg'),
	(17,'Dark Side of the Moon','Pink Floyd',1973,9,'https://m.media-amazon.com/images/I/51UtWpxbNYL._AC_SL1500_.jpg'),
	(18,'Rio','Wun Two',2014,9,'https://f4.bcbits.com/img/0002192356_10.jpg'),
	(19,'Channel Orange','Frank Ocean',2012,8,'https://media.pitchfork.com/photos/5929be57c0084474cd0c2e8c/1:1/w_600/45e3c196.jpeg'),
	(20,'Fleet Foxes','Fleet Foxes',2008,8,'https://upload.wikimedia.org/wikipedia/en/thumb/0/01/Fleet_foxes.jpg/220px-Fleet_foxes.jpg'),
	(21,'Friends','Will and the People',2012,9,'https://img.discogs.com/XqW50FvsZsBc-8cVMh1jYilYttM=/fit-in/600x598/filters:strip_icc():format(webp):mode_rgb():quality(90)/discogs-images/R-10067358-1491046675-1327.jpeg.jpg'),
	(22,'Amy Winehouse','Frank',2003,9,'https://m.media-amazon.com/images/I/81VL-8chziL._AC_SL1400_.jpg'),
	(23,'Buena Vista Social Club','Buena Vista Social Club',1997,9,'https://m.media-amazon.com/images/I/81tgFNHw2PL._AC_SY355_.jpg'),
	(24,'Don\'t Say That','Superfood',2014,8,'https://img.discogs.com/cL5BGICA7QOkX9wXa5YiLUNNqp4=/fit-in/600x600/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-6302214-1415983060-4918.jpeg.jpg'),
	(25,'Untrue','Burial',2007,9,'https://upload.wikimedia.org/wikipedia/en/6/64/BurialUntrue.jpg'),
	(26,'Mezzanine','Massive Attack',1998,8,'https://upload.wikimedia.org/wikipedia/en/e/e9/Massive_Attack_-_Mezzanine.png'),
	(27,'No Better Time Than Now','Shigeto',2013,8,'https://media.pitchfork.com/photos/5929a2e813d1975652138988/1:1/w_600/ca20023d.jpg'),
	(28,'Ninja Tuna','Mr Scruff',2008,8,'https://upload.wikimedia.org/wikipedia/en/c/cc/MrScruff_NinjaTuna.JPG'),
	(29,'Breathing Exercises','Frankie Stew and Harvey Gunn',2020,9,'https://f4.bcbits.com/img/a0235454779_10.jpg'),
	(30,'Forever Changes','Love',1967,8,'https://upload.wikimedia.org/wikipedia/en/c/c8/Love_-_forever_changes.jpg');

/*!40000 ALTER TABLE `luke-albums` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
