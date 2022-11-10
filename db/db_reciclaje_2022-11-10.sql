# ************************************************************
# Sequel Ace SQL dump
# Version 20039
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 5.7.34)
# Database: db_reciclaje
# Generation Time: 2022-11-10 19:30:23 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table cajeros
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cajeros`;

CREATE TABLE `cajeros` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `tipo_documento` varchar(30) NOT NULL,
  `documento` varchar(30) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `facturas` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

LOCK TABLES `cajeros` WRITE;
/*!40000 ALTER TABLE `cajeros` DISABLE KEYS */;

INSERT INTO `cajeros` (`id`, `nombre`, `tipo_documento`, `documento`, `telefono`, `email`, `password`, `facturas`)
VALUES
	(18,'Luis','Tarjeta de identidad','12','12','luiskdx@gmail.com','$2y$10$VzZchG2NEVaFij/Rij9U1.yyW6TCvYIwA/kSTZN4N8L7NBHxz/Avy','');

/*!40000 ALTER TABLE `cajeros` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table clientes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `clientes`;

CREATE TABLE `clientes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `tipo_documento` varchar(30) NOT NULL,
  `documento` varchar(30) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `facturas` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Email` (`email`),
  UNIQUE KEY `Documento` (`documento`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;

INSERT INTO `clientes` (`id`, `nombre`, `tipo_documento`, `documento`, `telefono`, `email`, `facturas`)
VALUES
	(1,'Luis','Tarjeta de identidad','12','12','luiskdx99@gmail.com',''),
	(3,'Luis','Cédula de ciudadania','13','13','luiskdx1212@gmail.com','');

/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table facturas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `facturas`;

CREATE TABLE `facturas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table productos
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
