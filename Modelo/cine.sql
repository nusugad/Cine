-- MySQL dump 10.12
--
-- Host: localhost    Database: cine
-- ------------------------------------------------------
-- Server version	6.0.0-alpha-community-nt-debug

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `cine`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `cine` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `cine`;

--
-- Table structure for table `actor`
--

DROP TABLE IF EXISTS `actor`;
CREATE TABLE `actor` (
  `codigoActor` char(5) NOT NULL,
  `nombreActor` char(40) NOT NULL,
  `estado` char(10) NOT NULL,
  PRIMARY KEY (`codigoActor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `actor`
--

LOCK TABLES `actor` WRITE;
/*!40000 ALTER TABLE `actor` DISABLE KEYS */;
INSERT INTO `actor` VALUES ('01234','Mark Ruffalo','Activo'),('12345','Samuel L Jackson','Activo'),('23456',' Chris Evans','Activo'),('34567','Scarlett Johansson','Activo'),('45678','Elizabeth Olsen','Activo'),('56789','Paul Bettany','Activo'),('63584','Michael B Jordan','Activo'),('67890','Anthony Mackie','Activo'),('74563','Don Cheadle','Activo'),('74569','Sterling K Brown','Activo'),('75321',' Evangeline Lilly','Activo'),('85214','Chadwick Boseman','Activo'),('87456','Zoe Saldana','Activo'),('96325',' Michael Douglas','Activo'),('98745','Tom Holland','Activo');
/*!40000 ALTER TABLE `actor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `actorpelicula`
--

DROP TABLE IF EXISTS `actorpelicula`;
CREATE TABLE `actorpelicula` (
  `codigoActor` char(5) NOT NULL,
  `idPelicula` int(5) unsigned zerofill NOT NULL,
  KEY `fk_actor_has_pelicula_pelicula1_idx` (`idPelicula`),
  KEY `fk_actor_has_pelicula_actor_idx` (`codigoActor`),
  CONSTRAINT `fk_actor_has_pelicula_actor` FOREIGN KEY (`codigoActor`) REFERENCES `actor` (`codigoActor`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_actor_has_pelicula_pelicula1` FOREIGN KEY (`idPelicula`) REFERENCES `pelicula` (`idPelicula`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `actorpelicula`
--

LOCK TABLES `actorpelicula` WRITE;
/*!40000 ALTER TABLE `actorpelicula` DISABLE KEYS */;
INSERT INTO `actorpelicula` VALUES ('75321',00002),('45678',00005),('74563',00004),('23456',00005);
/*!40000 ALTER TABLE `actorpelicula` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `director`
--

DROP TABLE IF EXISTS `director`;
CREATE TABLE `director` (
  `codigoDirector` char(5) NOT NULL,
  `nombreDirector` char(40) NOT NULL,
  `estado` char(10) NOT NULL,
  PRIMARY KEY (`codigoDirector`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `director`
--

LOCK TABLES `director` WRITE;
/*!40000 ALTER TABLE `director` DISABLE KEYS */;
INSERT INTO `director` VALUES ('12345','ang lee lopez','Activo');
/*!40000 ALTER TABLE `director` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directorpelicula`
--

DROP TABLE IF EXISTS `directorpelicula`;
CREATE TABLE `directorpelicula` (
  `codigoDirector` char(5) NOT NULL,
  `idPelicula` int(5) unsigned zerofill NOT NULL,
  KEY `fk_director_has_pelicula_pelicula1_idx` (`idPelicula`),
  KEY `fk_director_has_pelicula_director1_idx` (`codigoDirector`),
  CONSTRAINT `fk_director_has_pelicula_director1` FOREIGN KEY (`codigoDirector`) REFERENCES `director` (`codigoDirector`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_director_has_pelicula_pelicula1` FOREIGN KEY (`idPelicula`) REFERENCES `pelicula` (`idPelicula`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `directorpelicula`
--

LOCK TABLES `directorpelicula` WRITE;
/*!40000 ALTER TABLE `directorpelicula` DISABLE KEYS */;
INSERT INTO `directorpelicula` VALUES ('12345',00004);
/*!40000 ALTER TABLE `directorpelicula` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genero`
--

DROP TABLE IF EXISTS `genero`;
CREATE TABLE `genero` (
  `codigoGenero` char(5) NOT NULL,
  `nombreGenero` char(10) NOT NULL,
  `estado` char(10) NOT NULL,
  PRIMARY KEY (`codigoGenero`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `genero`
--

LOCK TABLES `genero` WRITE;
/*!40000 ALTER TABLE `genero` DISABLE KEYS */;
INSERT INTO `genero` VALUES ('12345','terror','Activo'),('12346','accion','inactivo'),('12347','infantil','Activo');
/*!40000 ALTER TABLE `genero` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `generopelicula`
--

DROP TABLE IF EXISTS `generopelicula`;
CREATE TABLE `generopelicula` (
  `codigoGenero` char(5) NOT NULL,
  `idPelicula` int(5) unsigned zerofill NOT NULL,
  KEY `fk_genero_has_pelicula_pelicula1_idx` (`idPelicula`),
  KEY `fk_genero_has_pelicula_genero1_idx` (`codigoGenero`),
  CONSTRAINT `fk_genero_has_pelicula_genero1` FOREIGN KEY (`codigoGenero`) REFERENCES `genero` (`codigoGenero`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_genero_has_pelicula_pelicula1` FOREIGN KEY (`idPelicula`) REFERENCES `pelicula` (`idPelicula`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `generopelicula`
--

LOCK TABLES `generopelicula` WRITE;
/*!40000 ALTER TABLE `generopelicula` DISABLE KEYS */;
/*!40000 ALTER TABLE `generopelicula` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `idMenu` char(4) NOT NULL,
  `nombreMenu` char(50) NOT NULL,
  PRIMARY KEY (`idMenu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` VALUES ('1','Actor'),('2','Director'),('3','Genero'),('4','pelicula'),('5','Actor pelicula'),('6','Director pelicula'),('7','Genero pelicula');
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pelicula`
--

DROP TABLE IF EXISTS `pelicula`;
CREATE TABLE `pelicula` (
  `idPelicula` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `tituloOriginal` char(50) NOT NULL,
  `tituloLatino` char(50) NOT NULL,
  `resena` char(250) NOT NULL,
  `imagen` char(100) NOT NULL,
  `tipo` char(10) NOT NULL,
  `tamano` int(11) NOT NULL,
  `publicacion` year(4) NOT NULL,
  `estado` char(10) NOT NULL,
  PRIMARY KEY (`idPelicula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pelicula`
--

LOCK TABLES `pelicula` WRITE;
/*!40000 ALTER TABLE `pelicula` DISABLE KEYS */;
INSERT INTO `pelicula` VALUES (00001,'Avengers: Infinity War','Infinity War','Los Vengadores y sus aliados deben estar dispuestos a sacrificar todo en el intento de derrotar al poderoso Thanos antes de que su plan de devastaciÃ³n y ruina ponga fin al universo.','../pelicula/avengers-infinity-war.jpg','image/jpeg',94328,2018,'Activo'),(00002,' Ant-Man','El Hombre Hormiga','Armado con un s?per traje que tiene la incre?ble habilidad de encoger en escala pero aumentar la fuerza, el ladr?n Scott Lang debe aceptar a su h?roe interior y ayudar a su mentor, el Dr. Hank Pym, a planear y concretar un golpe que salvar? al mundo.','../pelicula/destruccion.jpg','image/jpeg',74492,2015,'Activo'),(00003,'Avengers: Age of Ultron','Vengadores: La era de Ultr¢n','Cuando Tony Stark intenta iniciar un programa pacificador durmiente, las cosas salen mal y los h‚roes m s poderosos del planeta, Iron Man, Capit n Am‚rica, Thor, Hulk, Black Widow y Hawkeye, son puestos a prueba. Cuando el villano Ultron emerge, depe','../pelicula/avengers-era-de-ultron.jpg','image/jpeg',138906,2015,'Activo'),(00004,'Black Panther','Pantera Negra','TChalla, el rey de Wakanda, sube al trono en la aislada y tecnolÃ³gicamente avanzada naciÃ³n africana, pero es desafiado por un forastero con sed de venganza debido a un error cometido por el padre de TChalla.','../pelicula/black-panther.jpg','image/jpeg',90346,2018,'Activo'),(00005,'The Avengers','The Avengers: Los Vengadores','La reuni¢n m s espectacular de superh‚roes de Marvel. Un enemigo inesperado amenaza con poner en peligro la seguridad mundial, as¡ que Nick Fury, director de la agencia internacional SHIELD, necesita armar un equipo que salve al mundo del mayor de lo','../pelicula/los-vengadores.jpg','image/jpeg',108219,2012,'Activo'),(00006,'Avengers: Age of Ultron','Vengadores: La era de Ultr¢n','Cuando Tony Stark intenta iniciar un programa pacificador durmiente, las cosas salen mal y los h‚roes m s poderosos del planeta, Iron Man, Capit n Am‚rica, Thor, Hulk, Black Widow y Hawkeye, son puestos a prueba. Cuando el villano Ultron emerge, depe','../pelicula/avengers-era-de-ultron.jpg','image/jpeg',138906,2015,'Actdesrivo');
/*!40000 ALTER TABLE `pelicula` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `submenu`
--

DROP TABLE IF EXISTS `submenu`;
CREATE TABLE `submenu` (
  `idSubMenu` char(4) NOT NULL,
  `nombreSubMenu` char(50) NOT NULL,
  `idMenu` char(4) NOT NULL,
  `url` char(100) NOT NULL,
  PRIMARY KEY (`idSubMenu`),
  KEY `idMenu` (`idMenu`),
  CONSTRAINT `submenu_ibfk_1` FOREIGN KEY (`idMenu`) REFERENCES `menu` (`idMenu`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `submenu`
--

LOCK TABLES `submenu` WRITE;
/*!40000 ALTER TABLE `submenu` DISABLE KEYS */;
INSERT INTO `submenu` VALUES ('1','agregar Actor','1','../vista/actoringreso.php'),('10','Director pelicula','6','../control/facade.php?opc=53'),('11','Genero pelicula','7','../control/facade.php?opc=63'),('2','listar Actor','1','../control/facade.php?opc=3'),('3','Agregar Director','2','../vista/directoringreso.php'),('4','Listar Director','2','../control/facade.php?opc=13'),('5','Agregar Genero','3','../vista/generoingreso.php'),('6','Listar Genero','3','../control/facade.php?opc=23'),('7','Agregar Pelicula','4','../vista/peliculaingreso.php'),('8','Listar Pelicula','4','../control/facade.php?opc=33'),('9','Actor Pelicula','5','../control/facade.php?opc=43');
/*!40000 ALTER TABLE `submenu` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-04-27 23:39:13
