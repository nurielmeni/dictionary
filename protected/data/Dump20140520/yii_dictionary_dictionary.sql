CREATE DATABASE  IF NOT EXISTS `yii_dictionary` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `yii_dictionary`;
-- MySQL dump 10.13  Distrib 5.5.37, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: yii_dictionary
-- ------------------------------------------------------
-- Server version	5.5.37-0ubuntu0.14.04.1

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
-- Table structure for table `dictionary`
--

DROP TABLE IF EXISTS `dictionary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dictionary` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `sort_order` int(10) unsigned DEFAULT NULL,
  `date_entered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime DEFAULT NULL,
  `by_user_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dictionary`
--

LOCK TABLES `dictionary` WRITE;
/*!40000 ALTER TABLE `dictionary` DISABLE KEYS */;
INSERT INTO `dictionary` VALUES (1,'Admin Dictionary',7,'2014-04-24 22:31:31',NULL,NULL),(2,'Glossary of Hard to Find Terms & Phrases',4,'2014-04-24 22:31:31',NULL,NULL),(3,'Staff College FSO Hard-to-Find Glossary',6,'2014-04-24 22:31:31',NULL,NULL),(4,'Tech Dictionary',8,'2014-04-24 22:31:31',NULL,NULL),(5,'Lecture Glossaries',9,'2014-04-24 22:31:31',NULL,NULL),(6,'Pilot Scientology Dictionary',1,'2014-04-24 22:31:31',NULL,NULL),(8,'R Comps HTF Glossary',30,'2014-04-24 22:31:31',NULL,NULL),(9,'Study Tapes Glossary',3,'2014-04-24 22:31:31',NULL,NULL),(10,'Drills FOs Glossary',5,'2014-04-24 22:31:31',NULL,NULL),(11,'Responsibilities of Leaders Glossary',2,'2014-04-24 22:31:31',NULL,NULL),(12,'Glossaries',7,'2014-04-27 21:11:49',NULL,NULL),(13,'Staff College Hard-to-Find Glossary',11,'2014-04-27 21:13:41',NULL,NULL),(14,'Flag Dictionary',NULL,'2014-05-19 10:21:28','2014-05-19 14:09:45',1),(15,'Flag New',50,'2014-05-19 13:27:40',NULL,2);
/*!40000 ALTER TABLE `dictionary` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-05-20  8:51:37
