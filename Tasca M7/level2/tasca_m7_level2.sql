# ************************************************************
# Sequel Ace SQL dump
# Versión 3030
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Equipo: localhost (MySQL 5.5.5-10.4.18-MariaDB)
# Base de datos: tasca_m7
# Generation Time: 2021-06-09 16:06:36 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Volcado de tabla yt_chaneel_subsc
# ------------------------------------------------------------

DROP TABLE IF EXISTS `yt_chaneel_subsc`;

CREATE TABLE `yt_chaneel_subsc` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `channel_id` int(11) unsigned DEFAULT NULL,
  `user_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `chanel_user` (`user_id`),
  KEY `channel_id` (`channel_id`),
  CONSTRAINT `chanel_user` FOREIGN KEY (`user_id`) REFERENCES `yt_users` (`id`),
  CONSTRAINT `channel_id` FOREIGN KEY (`channel_id`) REFERENCES `yt_channels` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `yt_chaneel_subsc` WRITE;
/*!40000 ALTER TABLE `yt_chaneel_subsc` DISABLE KEYS */;

INSERT INTO `yt_chaneel_subsc` (`id`, `channel_id`, `user_id`)
VALUES
	(1,1,3),
	(2,2,1),
	(3,3,2);

/*!40000 ALTER TABLE `yt_chaneel_subsc` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla yt_channels
# ------------------------------------------------------------

DROP TABLE IF EXISTS `yt_channels`;

CREATE TABLE `yt_channels` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `creatinon_date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `chaneel_created` (`user_id`),
  CONSTRAINT `chaneel_created` FOREIGN KEY (`user_id`) REFERENCES `yt_users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `yt_channels` WRITE;
/*!40000 ALTER TABLE `yt_channels` DISABLE KEYS */;

INSERT INTO `yt_channels` (`id`, `user_id`, `name`, `description`, `creatinon_date`)
VALUES
	(1,1,'kids\'n\'dogs','Loving dogs and kids','2021-06-08'),
	(2,2,'Minyons Videos','Minyons de Terrassa videos','2021-06-08'),
	(3,2,'Rafting','Videos of Raffting','2021-06-08');

/*!40000 ALTER TABLE `yt_channels` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla yt_comments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `yt_comments`;

CREATE TABLE `yt_comments` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `video_id` int(11) unsigned DEFAULT NULL,
  `comment_text` varchar(255) DEFAULT NULL,
  `user_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cooment_user` (`user_id`),
  CONSTRAINT `comment_video` FOREIGN KEY (`id`) REFERENCES `yt_videos` (`id`),
  CONSTRAINT `cooment_user` FOREIGN KEY (`user_id`) REFERENCES `yt_users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `yt_comments` WRITE;
/*!40000 ALTER TABLE `yt_comments` DISABLE KEYS */;

INSERT INTO `yt_comments` (`id`, `video_id`, `comment_text`, `user_id`)
VALUES
	(1,1,'I like this videp',1),
	(2,1,'Awsome!',3),
	(3,2,'borring..',3);

/*!40000 ALTER TABLE `yt_comments` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla yt_comments_lk_dslk
# ------------------------------------------------------------

DROP TABLE IF EXISTS `yt_comments_lk_dslk`;

CREATE TABLE `yt_comments_lk_dslk` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned DEFAULT NULL,
  `comment_id` int(11) unsigned DEFAULT NULL,
  `type` tinyint(1) NOT NULL,
  `video_id` int(11) unsigned DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `video_id` (`video_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `coments_lk_dslk` FOREIGN KEY (`id`) REFERENCES `yt_comments` (`id`),
  CONSTRAINT `yt_comments_lk_dslk_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `yt_users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `yt_comments_lk_dslk` WRITE;
/*!40000 ALTER TABLE `yt_comments_lk_dslk` DISABLE KEYS */;

INSERT INTO `yt_comments_lk_dslk` (`id`, `user_id`, `comment_id`, `type`, `video_id`, `timestamp`)
VALUES
	(1,3,1,1,1,'2021-06-08 15:23:55'),
	(2,1,2,0,2,'2021-06-08 15:24:16'),
	(3,2,3,1,3,'2021-06-08 15:24:36');

/*!40000 ALTER TABLE `yt_comments_lk_dslk` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla yt_hastags
# ------------------------------------------------------------

DROP TABLE IF EXISTS `yt_hastags`;

CREATE TABLE `yt_hastags` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `hastag` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `yt_hastags` WRITE;
/*!40000 ALTER TABLE `yt_hastags` DISABLE KEYS */;

INSERT INTO `yt_hastags` (`id`, `hastag`)
VALUES
	(1,'love'),
	(2,'dogs'),
	(3,'kids');

/*!40000 ALTER TABLE `yt_hastags` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla yt_hastags_rel
# ------------------------------------------------------------

DROP TABLE IF EXISTS `yt_hastags_rel`;

CREATE TABLE `yt_hastags_rel` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `hastag_id` int(11) unsigned DEFAULT NULL,
  `video_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `hagstags_rel` (`video_id`),
  KEY `hastags_rel_has` (`hastag_id`),
  CONSTRAINT `hagstags_rel` FOREIGN KEY (`video_id`) REFERENCES `yt_videos` (`id`),
  CONSTRAINT `hastags_rel_has` FOREIGN KEY (`hastag_id`) REFERENCES `yt_hastags` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `yt_hastags_rel` WRITE;
/*!40000 ALTER TABLE `yt_hastags_rel` DISABLE KEYS */;

INSERT INTO `yt_hastags_rel` (`id`, `hastag_id`, `video_id`)
VALUES
	(1,1,1),
	(2,1,2),
	(3,2,1),
	(4,2,3);

/*!40000 ALTER TABLE `yt_hastags_rel` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla yt_playlist_rel
# ------------------------------------------------------------

DROP TABLE IF EXISTS `yt_playlist_rel`;

CREATE TABLE `yt_playlist_rel` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `playlist_id` int(11) unsigned DEFAULT NULL,
  `video_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `yt_playlist_video` (`video_id`),
  CONSTRAINT `yt_playlist_id` FOREIGN KEY (`id`) REFERENCES `yt_playlists` (`id`),
  CONSTRAINT `yt_playlist_video` FOREIGN KEY (`video_id`) REFERENCES `yt_videos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `yt_playlist_rel` WRITE;
/*!40000 ALTER TABLE `yt_playlist_rel` DISABLE KEYS */;

INSERT INTO `yt_playlist_rel` (`id`, `playlist_id`, `video_id`)
VALUES
	(1,1,2),
	(2,2,1),
	(3,2,2);

/*!40000 ALTER TABLE `yt_playlist_rel` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla yt_playlists
# ------------------------------------------------------------

DROP TABLE IF EXISTS `yt_playlists`;

CREATE TABLE `yt_playlists` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `creation date` date DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `user_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `playlist_user` (`user_id`),
  CONSTRAINT `playlist_user` FOREIGN KEY (`user_id`) REFERENCES `yt_users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `yt_playlists` WRITE;
/*!40000 ALTER TABLE `yt_playlists` DISABLE KEYS */;

INSERT INTO `yt_playlists` (`id`, `name`, `creation date`, `status`, `user_id`)
VALUES
	(1,'playlist1','2021-07-07',0,1),
	(2,'playlist2','1999-03-04',1,2),
	(3,'playlist3','2005-04-03',0,3),
	(4,'playlist4','2021-07-08',1,3);

/*!40000 ALTER TABLE `yt_playlists` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla yt_users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `yt_users`;

CREATE TABLE `yt_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `sex` tinyint(1) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `postal_code` int(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `yt_users` WRITE;
/*!40000 ALTER TABLE `yt_users` DISABLE KEYS */;

INSERT INTO `yt_users` (`id`, `email`, `password`, `user_name`, `birth_date`, `sex`, `country`, `postal_code`)
VALUES
	(1,'user1@gmail.com','pass1','user1','1980-01-01',1,'Mexico',NULL),
	(2,'user2@gmil.com','pass2','user2','1981-01-01',2,'Germay',NULL),
	(3,'user3@gmail.com','pass3','user3','1982-01-01',2,'Australia',NULL);

/*!40000 ALTER TABLE `yt_users` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla yt_videos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `yt_videos`;

CREATE TABLE `yt_videos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `file_name` int(11) DEFAULT NULL,
  `duration_video` time DEFAULT NULL,
  `thumbnail` int(11) DEFAULT NULL,
  `reprod_numb` int(12) DEFAULT NULL,
  `status_video` tinyint(1) DEFAULT NULL,
  `user_id` int(11) unsigned DEFAULT NULL,
  `publication_timestamp` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `video_user` (`user_id`),
  CONSTRAINT `video_user` FOREIGN KEY (`user_id`) REFERENCES `yt_users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `yt_videos` WRITE;
/*!40000 ALTER TABLE `yt_videos` DISABLE KEYS */;

INSERT INTO `yt_videos` (`id`, `title`, `description`, `size`, `file_name`, `duration_video`, `thumbnail`, `reprod_numb`, `status_video`, `user_id`, `publication_timestamp`)
VALUES
	(1,'Video1','This is the video1',NULL,NULL,'00:15:35',NULL,30,1,1,'2021-06-07 18:44:47'),
	(2,'Video2','This is the video2',NULL,NULL,'00:05:00',NULL,1500000,0,1,'2021-06-07 18:44:53'),
	(3,'Video3','This is the video3',NULL,NULL,'00:02:35',NULL,100,0,2,'2021-06-07 18:45:06');

/*!40000 ALTER TABLE `yt_videos` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla yt_videos_lk_dslk
# ------------------------------------------------------------

DROP TABLE IF EXISTS `yt_videos_lk_dslk`;

CREATE TABLE `yt_videos_lk_dslk` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned DEFAULT NULL,
  `video_id` int(11) unsigned DEFAULT NULL,
  `type` tinyint(1) NOT NULL,
  `timestamp` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `video_id` (`video_id`),
  CONSTRAINT `yt_videos_lk_dslk_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `yt_users` (`id`),
  CONSTRAINT `yt_videos_lk_dslk_ibfk_2` FOREIGN KEY (`video_id`) REFERENCES `yt_videos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `yt_videos_lk_dslk` WRITE;
/*!40000 ALTER TABLE `yt_videos_lk_dslk` DISABLE KEYS */;

INSERT INTO `yt_videos_lk_dslk` (`id`, `user_id`, `video_id`, `type`, `timestamp`)
VALUES
	(1,1,3,0,'2021-06-07 18:40:13'),
	(2,2,1,1,'2005-03-06 23:34:45'),
	(3,1,3,0,'2021-06-08 15:24:47');

/*!40000 ALTER TABLE `yt_videos_lk_dslk` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
