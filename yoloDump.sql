-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: laravel
-- ------------------------------------------------------
-- Server version	5.7.21-log

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
-- Table structure for table `classes`
--

DROP TABLE IF EXISTS `classes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `classes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  `type` mediumtext,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classes`
--

LOCK TABLES `classes` WRITE;
/*!40000 ALTER TABLE `classes` DISABLE KEYS */;
INSERT INTO `classes` VALUES (0,'Guerrier','Le guerrier est la première ligne au combat. Il manie l\'épée et le bouclier, porte un armure et sert un ordre, souvent un roi, sinon une faction.','Physique mêlée.'),(1,'Test 1 v2','parce que on aime tester 1. Surtout les modfis','indef ini'),(3,'Test 2','Parcequ\'on teste en permanence, toute sa vie 2.','nondef');
/*!40000 ALTER TABLE `classes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compétences`
--

DROP TABLE IF EXISTS `compétences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `compétences` (
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
-- Dumping data for table `compétences`
--

LOCK TABLES `compétences` WRITE;
/*!40000 ALTER TABLE `compétences` DISABLE KEYS */;
/*!40000 ALTER TABLE `compétences` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customs`
--

DROP TABLE IF EXISTS `customs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customs`
--

LOCK TABLES `customs` WRITE;
/*!40000 ALTER TABLE `customs` DISABLE KEYS */;
/*!40000 ALTER TABLE `customs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dons`
--

DROP TABLE IF EXISTS `dons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  `effet` mediumtext,
  `cout` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dons`
--

LOCK TABLES `dons` WRITE;
/*!40000 ALTER TABLE `dons` DISABLE KEYS */;
INSERT INTO `dons` VALUES (0,'Parler','Vous pouvez utiliser votre bouche pour dire quelque chose.','Vous dîtes des mots.',''),(1,'Crier','Vous pouvez utiliser votre bouche pour parler plus fort.','Vous parlez plus fort','2 de voix'),(2,'Marcher','Vous pouvez vous déplacer normalement, d\'une allure normale.','Vous vous déplacez dans une direction.',NULL);
/*!40000 ALTER TABLE `dons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personnages`
--

DROP TABLE IF EXISTS `personnages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personnages` (
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
-- Dumping data for table `personnages`
--

LOCK TABLES `personnages` WRITE;
/*!40000 ALTER TABLE `personnages` DISABLE KEYS */;
/*!40000 ALTER TABLE `personnages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `races`
--

DROP TABLE IF EXISTS `races`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `races` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  `habitat` mediumtext,
  `dons` mediumtext,
  `faiblesses` mediumtext,
  `custom` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `races`
--

LOCK TABLES `races` WRITE;
/*!40000 ALTER TABLE `races` DISABLE KEYS */;
INSERT INTO `races` VALUES (0,'Loyd','Lapins humanoides. Douce fourrure et grandes oreilles.','Les forêts, les terriers.',NULL,'Les Loyds n\'aiment pas trop le feu. -50% de résistance au feu.','Ils sont fins connaisseurs de la nature. +1 dés 6 sur toute compétence naturelle.'),(1,'Elfes','Êtres beaux et forts intelligents.','Les forêts.','[\"Parler\"]','Les elfes détestent les nains.','Ils sont très hautains, et sous estiment les autres races.'),(2,'Diakhite','Hommes très puissants, gouvernés par le grand Bassirre.','La Street.','[\"Parler\",\"Crier\"]','Les Diakhites n\'ont aucune faiblesse, ils surpassent tout le monde.','Ils peuvent dunker n\'importe qui.'),(3,'Magickiens','Sorti d\'un portail dimensionnel, les Magickiens sont des humains pratiquant la magie. Vêtus de robes à capuche de couleurs diverses, ce sont des magiciens plus ou moins doués. Seul l\'élu pourra sauver le monde des Magickiens.','Midgard','[\"Parler\"]','En fonction de leur affinité magique, les magickiens craignent certains éléments.','N\'étant pas très futés, les Magickiens, bien que compréhensibles, parlent un langage totalement inconnu.'),(4,'Les zombies','Des humains, vivants contrairement aux idées reçues, mais qui sont tellement malades qu\'on les dirait presque morts. Ils sont communs, attention à ne pas attraper leur maladie, sinon vous finirez comme eux.','Les villes, les cimetières, les grottes.','[\"Parler\",\"Marcher\"]','Ils craignent l\'effort physique et le froid.','Ils ont les yeux rouges, possèdent une voix graves et sont constamment fatigués. Cependant, ils ne subissent pas la douleur physique et sont insensibles à toute autre maladie.'),(5,'Géants','Sont des grands humains.','Les montagnes.',NULL,'Eau.','Peau rocailleuse.');
/*!40000 ALTER TABLE `races` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'laravel'
--

--
-- Dumping routines for database 'laravel'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-01  9:39:20
