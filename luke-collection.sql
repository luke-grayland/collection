# ************************************************************
# Sequel Ace SQL dump
# Version 20029
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 5.7.37)
# Database: luke-collection
# Generation Time: 2022-03-23 14:36:38 +0000
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
  `spotify_link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `luke-albums` WRITE;
/*!40000 ALTER TABLE `luke-albums` DISABLE KEYS */;

INSERT INTO `luke-albums` (`id`, `album_name`, `artist_name`, `year`, `rating`, `cover`, `spotify_link`)
VALUES
	(7,'Plastic Beach','Gorillaz',2010,10,'https://m.media-amazon.com/images/I/81EP2fxHLRL._AC_SX425_.jpg','https://open.spotify.com/album/2dIGnmEIy1WZIcZCFSj6i8?si=qq_n4dukROeMUhVwecGrmg'),
	(8,'In Rainbows','Radiohead',2007,9,'https://m.media-amazon.com/images/I/A1MwaIeBpwL._AC_SL1500_.jpg','https://open.spotify.com/album/5vkqYmiPBYLaalcmjujWxK?si=5HL5h-ksR4OC7WQzepKwLw'),
	(9,'Rumours','Fleetwood Mac',1977,9,'https://upload.wikimedia.org/wikipedia/en/f/fb/FMacRumours.PNG','https://open.spotify.com/album/1bt6q2SruMsBtcerNVtpZB?si=K0bM0_u2S-aswNpH5gF4fA'),
	(10,'The Low End Theory','A Tribe Called Quest',1992,9,'https://upload.wikimedia.org/wikipedia/en/4/42/ATribeCalledQuestTheLowEndtheory.jpg','https://open.spotify.com/album/1p12OAWwudgMqfMzjMvl2a?si=apFmNOJgS5amSxHswDAL6g'),
	(11,'Enter the Wu-Tang (36 Chambers)','Wu-Tang Clan',1993,9,'https://m.media-amazon.com/images/I/614UiJzoxPL._AC_SL1000_.jpg','https://open.spotify.com/album/3tQd5mwBtVyxCoEo4htGAV?si=7faD6dVjTmyReph2l9VcDA'),
	(12,'Screamadelica','Primal Scream',1991,8,'https://upload.wikimedia.org/wikipedia/en/1/1d/Primal_Scream_-_Screamadelica.png','https://open.spotify.com/album/5PORx6PL7CdOywSJuGVrnc?si=gExDY2YaQvusiiSpAiepDQ'),
	(13,'Blood Sugar Sex Magik','Red Hot Chili Peppers',1992,9,'https://m.media-amazon.com/images/I/81hS2wgxbhL._AC_SL1425_.jpg','https://open.spotify.com/album/30Perjew8HyGkdSmqguYyg?si=jpajHqvUTQmU_ETJfKTvRw'),
	(14,'Madvillainy','Madvillain',2004,8,'https://media.pitchfork.com/photos/5929c458ea9e61561daa811a/1:1/w_600/0bc6101d.jpg','https://open.spotify.com/album/19bQiwEKhXUBJWY6oV3KZk?si=s-DQff7WQ4CL9XLc9q-uGw'),
	(15,'You\'re Dead!','Flying Lotus',2014,9,'https://upload.wikimedia.org/wikipedia/en/d/df/You%27re_Dead%21.jpg','https://open.spotify.com/album/29luvT98TnqHjVDYSRbbrj?si=DVJ_92HdTLK1TqB2ogYBUA'),
	(16,'Graceland','Paul Simon',1986,9,'https://upload.wikimedia.org/wikipedia/commons/c/c3/Graceland_cover_-_Paul_Simon.jpg','https://open.spotify.com/album/4WoQ94qzwQj28n3nlSOVLB?si=nXu4o1z_SfaFbNQ6wAOWtg'),
	(17,'Dark Side of the Moon','Pink Floyd',1973,9,'https://m.media-amazon.com/images/I/51UtWpxbNYL._AC_SL1500_.jpg','https://open.spotify.com/album/2WT1pbYjLJciAR26yMebkH?si=kGqOrGVtSGmqJyrB7ViJbA'),
	(18,'Rio','Wun Two',2014,9,'https://f4.bcbits.com/img/0002192356_10.jpg','https://open.spotify.com/album/1sDUK1NkzRGYnvrskdWcMe?si=yFipgQkdTLG8FuxC1pSWXg'),
	(19,'Channel Orange','Frank Ocean',2012,8,'https://media.pitchfork.com/photos/5929be57c0084474cd0c2e8c/1:1/w_600/45e3c196.jpeg','https://open.spotify.com/album/392p3shh2jkxUxY2VHvlH8?si=pqVZkiT5Rk-IS9L7UUQ8TQ'),
	(20,'Fleet Foxes','Fleet Foxes',2008,8,'https://upload.wikimedia.org/wikipedia/en/thumb/0/01/Fleet_foxes.jpg/220px-Fleet_foxes.jpg','https://open.spotify.com/album/1rfgmU0AYNwWfS88pCOlX7?si=HVFbdAHvQ3iHc6rF2UZMAg'),
	(21,'Friends','Will and the People',2012,9,'https://img.discogs.com/XqW50FvsZsBc-8cVMh1jYilYttM=/fit-in/600x598/filters:strip_icc():format(webp):mode_rgb():quality(90)/discogs-images/R-10067358-1491046675-1327.jpeg.jpg','https://open.spotify.com/album/3eGaMkmKQL9Rm2BoSUFMxO?si=sBg1IAmaROiyrpLWsT0_UQ'),
	(22,'Amy Winehouse','Frank',2003,9,'https://m.media-amazon.com/images/I/81VL-8chziL._AC_SL1400_.jpg','https://open.spotify.com/album/3kGbxqlVl3LqjifxlubtcT?si=bB2VMnD-S9-VIEtSkO6RuQ'),
	(23,'Buena Vista Social Club','Buena Vista Social Club',1997,9,'https://m.media-amazon.com/images/I/81tgFNHw2PL._AC_SY355_.jpg','https://open.spotify.com/album/6DPdEaZ0KDBCCgXyy4q8bi?si=Fk8j4BmGTDqEp1NK2ObZOQ'),
	(24,'Don\'t Say That','Superfood',2014,8,'https://img.discogs.com/cL5BGICA7QOkX9wXa5YiLUNNqp4=/fit-in/600x600/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-6302214-1415983060-4918.jpeg.jpg','https://open.spotify.com/album/4IUrhmO5RGibpq2d4Vyh4e?si=7LgrA3Z9SaCZbqQa1G02yg'),
	(25,'Untrue','Burial',2007,9,'https://upload.wikimedia.org/wikipedia/en/6/64/BurialUntrue.jpg','https://open.spotify.com/album/1C30LhZB9I48LdpVCRRYvq?si=zBYb_hSeThucV1LXzB-8Rw'),
	(26,'Mezzanine','Massive Attack',1998,8,'https://upload.wikimedia.org/wikipedia/en/e/e9/Massive_Attack_-_Mezzanine.png','https://open.spotify.com/album/49MNmJhZQewjt06rpwp6QR?si=Fidr84b0TKOvcOVwyiYPvQ'),
	(27,'No Better Time Than Now','Shigeto',2013,8,'https://media.pitchfork.com/photos/5929a2e813d1975652138988/1:1/w_600/ca20023d.jpg','https://open.spotify.com/album/62tmAcovHK4IMrHxNO3h0s?si=vCuXMDyNTRW7U826VJZinQ'),
	(28,'Ninja Tuna','Mr Scruff',2008,8,'https://upload.wikimedia.org/wikipedia/en/c/cc/MrScruff_NinjaTuna.JPG','https://open.spotify.com/album/0m1RgvoI6QyGACkazXV5Th?si=mfuFdB_URWGtRN7vMs01Qg'),
	(29,'Breathing Exercises','Frankie Stew and Harvey Gunn',2020,9,'https://f4.bcbits.com/img/a0235454779_10.jpg','https://open.spotify.com/album/2fz0Euo0JCmgJhNxiDuAeu?si=CBzPRKjrQlqGK412BusEEw'),
	(30,'Forever Changes','Love',1967,8,'https://upload.wikimedia.org/wikipedia/en/c/c8/Love_-_forever_changes.jpg','https://open.spotify.com/album/2amHBpP8C0EUy6yBNy6nN6?si=C0F38ZnKS1a3oto8NWHVww');

/*!40000 ALTER TABLE `luke-albums` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
