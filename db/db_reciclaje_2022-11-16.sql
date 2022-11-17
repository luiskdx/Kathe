# ************************************************************
# Sequel Ace SQL dump
# Versión 20042
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Equipo: 127.0.0.1 (MySQL 5.7.34)
# Base de datos: db_reciclaje
# Tiempo de generación: 2022-11-17 00:06:11 +0000
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
  `telefono` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `facturas` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `cajeros` WRITE;
/*!40000 ALTER TABLE `cajeros` DISABLE KEYS */;

INSERT INTO `cajeros` (`id`, `nombre`, `tipo_documento`, `documento`, `telefono`, `email`, `password`, `facturas`)
VALUES
	(1,'Daniel Ramirez','Cédula de ciudadania','1013567456','3112357641','danielramirez@gmail.com','$2y$10$RoHsfIqNBtFi6vKkx3VKQOVFfRMTuCda6l5tkD68lLR1hWXnNmYAa','');

/*!40000 ALTER TABLE `cajeros` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla clientes
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;

INSERT INTO `clientes` (`id`, `nombre`, `tipo_documento`, `documento`, `telefono`, `email`, `facturas`)
VALUES
	(1,'Alexander Briceño','Cédula de ciudadania','1233567865','3145678907','alexb1@hotmaill.com','');

/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla facturas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `facturas`;

CREATE TABLE `facturas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_cliente` varchar(10) DEFAULT NULL,
  `id_cajero` varchar(10) DEFAULT NULL,
  `numero_caja` varchar(10) DEFAULT NULL,
  `id_productos` varchar(10) DEFAULT NULL,
  `cantidades` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `facturas` WRITE;
/*!40000 ALTER TABLE `facturas` DISABLE KEYS */;

INSERT INTO `facturas` (`id`, `id_cliente`, `id_cajero`, `numero_caja`, `id_productos`, `cantidades`)
VALUES
	(1,'1','1','005','1,3,5','1,1,1');

/*!40000 ALTER TABLE `facturas` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla productos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `productos`;

CREATE TABLE `productos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `precio` varchar(5) NOT NULL,
  `stock` varchar(5) NOT NULL,
  `empaque` varchar(30) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `reciclaje` varchar(30) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Nombre` (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;

INSERT INTO `productos` (`id`, `nombre`, `precio`, `stock`, `empaque`, `tipo`, `reciclaje`, `imagen`)
VALUES
	(1,'Coca Cola','2500','50','Vidrio','Despensa','Blanco','img-productos/coca-cola.jpg'),
	(3,'Huevos','15000','10','Carton','Despensa','Blanco','img-productos/huevos.jpg'),
	(5,'Whisky','85000','2','Vidrio','Licores','Blanco','img-productos/Whisky.jpg');

/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
