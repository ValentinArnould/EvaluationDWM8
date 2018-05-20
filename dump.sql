-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: localhost    Database: laravel
-- ------------------------------------------------------
-- Server version	5.7.20-0ubuntu0.16.04.1

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
-- Table structure for table `Classes`
--

DROP TABLE IF EXISTS `Classes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Classes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  `type` mediumtext,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Classes`
--

LOCK TABLES `Classes` WRITE;
/*!40000 ALTER TABLE `Classes` DISABLE KEYS */;
/*!40000 ALTER TABLE `Classes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Compétences`
--

DROP TABLE IF EXISTS `Compétences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Compétences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  `effet` mediumtext NOT NULL,
  `cout` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Compétences`
--

LOCK TABLES `Compétences` WRITE;
/*!40000 ALTER TABLE `Compétences` DISABLE KEYS */;
/*!40000 ALTER TABLE `Compétences` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Custom`
--

DROP TABLE IF EXISTS `Custom`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Custom` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Custom`
--

LOCK TABLES `Custom` WRITE;
/*!40000 ALTER TABLE `Custom` DISABLE KEYS */;
/*!40000 ALTER TABLE `Custom` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Dons`
--

DROP TABLE IF EXISTS `Dons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Dons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  `effet` mediumtext,
  `cout` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Dons`
--

LOCK TABLES `Dons` WRITE;
/*!40000 ALTER TABLE `Dons` DISABLE KEYS */;
INSERT INTO `Dons` VALUES (1,'Parler','Grâce à votre bouche, vous pouvez parler.','Parle oralement.',NULL),(2,'Crier','Grâce à votre bouche, vous pouvez aussi crier très fort.','Hurle fort.','2 de voix.');
/*!40000 ALTER TABLE `Dons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Personnages`
--

DROP TABLE IF EXISTS `Personnages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Personnages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `race` varchar(100) NOT NULL,
  `classe` varchar(100) NOT NULL,
  `histoire` longtext NOT NULL,
  `caratéristiques` mediumtext NOT NULL,
  `compétences` mediumtext NOT NULL,
  `dons` varchar(45) NOT NULL,
  `monnaie` mediumtext,
  `customs` mediumtext,
  `inventaire` mediumtext,
  `custom` mediumtext,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Personnages`
--

LOCK TABLES `Personnages` WRITE;
/*!40000 ALTER TABLE `Personnages` DISABLE KEYS */;
/*!40000 ALTER TABLE `Personnages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Races`
--

DROP TABLE IF EXISTS `Races`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Races` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  `habitat` mediumtext,
  `dons` mediumtext,
  `faiblesses` mediumtext,
  `custom` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Races`
--

LOCK TABLES `Races` WRITE;
/*!40000 ALTER TABLE `Races` DISABLE KEYS */;
INSERT INTO `Races` VALUES (1,'Loyd','Lapins humanoides. Douce fourrure et grandes oreilles.','Les forêts, les terriers.','[\"Parler\"]','Les Loyds n\'aiment pas trop le feu. -50% de résistance au feu.','Ils sont fins connaisseurs de la nature. +1 dés 6 sur toute compétence naturelle.'),(2,'Elfes','Êtres beaux et forts intelligents.','Les forêts.','[\"Parler\"]','Les elfes détestent les nains.','Ils sont très hautains, et sous estiment les autres races.'),(3,'Diakhite','Hommes très puissants, gouvernés par le grand Bassirre.','La Street.','[\"Parler\",\"Crier\"]','Les Diakhites n\'ont aucune faiblesse, ils surpassent tout le monde.','Ils peuvent dunker n\'importe qui.');
/*!40000 ALTER TABLE `Races` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-16 19:22:07
