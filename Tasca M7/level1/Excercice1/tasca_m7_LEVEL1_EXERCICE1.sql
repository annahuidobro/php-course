# ************************************************************
# Sequel Ace SQL dump
# Versión 3030
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Equipo: localhost (MySQL 5.5.5-10.4.18-MariaDB)
# Base de datos: tasca_m7
# Generation Time: 2021-06-02 15:43:48 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Volcado de tabla opics_costumers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `opics_costumers`;

CREATE TABLE `opics_costumers` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL DEFAULT '',
  `direcction` varchar(60) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `mail` varchar(40) DEFAULT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `reference` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='This table contains information about optics clients.';

LOCK TABLES `opics_costumers` WRITE;
/*!40000 ALTER TABLE `opics_costumers` DISABLE KEYS */;

INSERT INTO `opics_costumers` (`id`, `name`, `direcction`, `phone`, `mail`, `register_date`, `reference`)
VALUES
	(1,'Aina Red',NULL,NULL,NULL,'2021-05-29 15:22:34',2),
	(2,'Elisenda Summer',NULL,NULL,NULL,'2021-05-29 15:22:54',NULL),
	(3,'Oscar World',NULL,NULL,NULL,'2021-05-29 15:23:22',1),
	(4,'Jordi Salvatore',NULL,NULL,NULL,'2021-05-29 15:23:46',NULL),
	(5,'April Housen',NULL,NULL,NULL,'2021-05-29 15:24:37',4),
	(6,'Mikel Seta',NULL,NULL,NULL,'2021-05-29 15:24:49',NULL),
	(7,'John BonJohn',NULL,NULL,NULL,'2021-05-29 15:25:38',NULL),
	(8,'Sarai Montero','av. Barcelona 57, 08340 Granollers',669550440,'saraimo@hotmail.com','2021-05-31 15:43:58',2);

/*!40000 ALTER TABLE `opics_costumers` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla optics_glasses
# ------------------------------------------------------------

DROP TABLE IF EXISTS `optics_glasses`;

CREATE TABLE `optics_glasses` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `provider_id` int(11) DEFAULT NULL,
  `brand` varchar(20) DEFAULT NULL,
  `left_grad` float(5,2) DEFAULT NULL,
  `right_grad` float(5,2) DEFAULT NULL,
  `frame` tinyint(1) DEFAULT NULL,
  `color_frame` varchar(11) DEFAULT NULL,
  `color_left` varchar(11) DEFAULT NULL,
  `color_right` varchar(11) DEFAULT NULL,
  `price` float(9,2) DEFAULT NULL,
  `employee` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `glasses_providers` (`provider_id`),
  CONSTRAINT `glasses_providers` FOREIGN KEY (`provider_id`) REFERENCES `optics_providers` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='This table contain information of the optics glasses sales';

LOCK TABLES `optics_glasses` WRITE;
/*!40000 ALTER TABLE `optics_glasses` DISABLE KEYS */;

INSERT INTO `optics_glasses` (`id`, `provider_id`, `brand`, `left_grad`, `right_grad`, `frame`, `color_frame`, `color_left`, `color_right`, `price`, `employee`)
VALUES
	(1,1,'AnnBan',NULL,NULL,1,NULL,NULL,NULL,95.00,NULL),
	(2,1,'GerBan',0.50,1.25,2,NULL,'black','black',58.00,NULL),
	(3,2,'Polroid',0.25,0.25,3,'grey','blue','black',150.00,NULL),
	(4,2,'Visionglass',1.50,1.50,1,'black','yellow','yellow',45.00,NULL),
	(5,3,'lemonade',3.00,2.75,1,'black',NULL,NULL,65.00,'Eric'),
	(6,3,'cooleyes',0.00,0.00,3,'purple','black','blue',30.00,'Jaume');

/*!40000 ALTER TABLE `optics_glasses` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla optics_providers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `optics_providers`;

CREATE TABLE `optics_providers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `street` varchar(45) DEFAULT NULL,
  `number` int(3) DEFAULT NULL,
  `flor` int(2) DEFAULT NULL,
  `door` int(2) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `postalcode` int(6) DEFAULT NULL,
  `country` varchar(15) DEFAULT NULL,
  `phonenumber` int(15) DEFAULT NULL,
  `fax` int(15) DEFAULT NULL,
  `NIF` varchar(9) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='This table contains the information of optics glasses suppliers';

LOCK TABLES `optics_providers` WRITE;
/*!40000 ALTER TABLE `optics_providers` DISABLE KEYS */;

INSERT INTO `optics_providers` (`id`, `name`, `street`, `number`, `flor`, `door`, `city`, `postalcode`, `country`, `phonenumber`, `fax`, `NIF`)
VALUES
	(1,'first provaider','street',110,NULL,NULL,'citytest',NULL,NULL,NULL,NULL,'12345678A'),
	(2,'second provaider',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),
	(3,'third provaider','av. icsria',3,2,1,'Barcelona',8002,'Spain',600000001,NULL,'');

/*!40000 ALTER TABLE `optics_providers` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
