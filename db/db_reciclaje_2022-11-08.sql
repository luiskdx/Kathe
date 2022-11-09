# ************************************************************
# Sequel Ace SQL dump
# Versión 20039
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Equipo: 127.0.0.1 (MySQL 5.7.34)
# Base de datos: db_reciclaje
# Tiempo de generación: 2022-11-09 02:41:15 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Volcado de tabla cajeros
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cajeros`;

CREATE TABLE `cajeros` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `tipo_documento` varchar(30) NOT NULL,
  `documento` varchar(30) NOT NULL,
  `telefono` int(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `facturas` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

LOCK TABLES `cajeros` WRITE;
/*!40000 ALTER TABLE `cajeros` DISABLE KEYS */;

INSERT INTO `cajeros` (`id`, `nombre`, `tipo_documento`, `documento`, `telefono`, `email`, `password`, `facturas`)
VALUES
	(11,'sfsd','Cédula de ciudadania','23',343434,'luiskdxee@gmail.com','$2y$10$9VDiZA347VPJQz62tQOvpOCKyp4yrJ2zSMQXTsA2dDouXQbvyYWT6',''),
	(12,'sfsd','Tarjeta de identidad','23',343434,'55sd@gmail.com','$2y$10$a1Gw1DBScijboC9PKjYppOMMJv/i5S5bwsBHvTqxV1VmI3IcAxlfu',''),
	(13,'Luis','Cédula de ciudadania','0987',6543,'luiskdx@gmail.com','$2y$10$sjyoGUbxbpjCUoqbtMoW6uVjiE5qv08M.NQrT0azEArfRwY2EYiWK',''),
	(14,'Kathe Correa','Cédula de ciudadania','111111',22222,'kathe@kathe.com','$2y$10$e19sVyfQPkk6recSm16Co.jed4.q6Wsg3ClqAY4phvTuCVeGzgN/6','');

/*!40000 ALTER TABLE `cajeros` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla clientes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `clientes`;

CREATE TABLE `clientes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Volcado de tabla facturas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `facturas`;

CREATE TABLE `facturas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Volcado de tabla productos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `productos`;

CREATE TABLE `productos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
