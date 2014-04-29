CREATE DATABASE  IF NOT EXISTS `yii_dictionary` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `yii_dictionary`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: yii_dictionary
-- ------------------------------------------------------
-- Server version	5.6.16

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
-- Table structure for table `dictionary_mdb_partial`
--

DROP TABLE IF EXISTS `dictionary_mdb_partial`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dictionary_mdb_partial` (
  `ID` int(11) NOT NULL DEFAULT '0',
  `source` varchar(50) DEFAULT NULL,
  `word` varchar(50) DEFAULT NULL,
  `definitions` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dictionary_mdb_partial`
--

LOCK TABLES `dictionary_mdb_partial` WRITE;
/*!40000 ALTER TABLE `dictionary_mdb_partial` DISABLE KEYS */;
INSERT INTO `dictionary_mdb_partial` VALUES (16619,'Staff College FSO Hard-to-Find Glossary','_____','_____'),(16620,'Staff College FSO Hard-to-Find Glossary','CENTRAL ORGANIZATION','\"A Scientology Service Organization\" from Dianetics 55! Glossary'),(16621,'Staff College FSO Hard-to-Find Glossary','CHIPS ARE DOWN, ALL','Under \"When the Chips are down\" - In an Crucial situation. \r\n\r\nRef: Randon House College dictionary_mdb'),(16622,'Staff College FSO Hard-to-Find Glossary','CIC','see Control Information Center in the Admin dictionary_mdb. You can find this in \"FLO Bureaux Pattern of Operation Course\" page 1004, CBO page 9 for a picture.'),(16623,'Staff College FSO Hard-to-Find Glossary','CESO','Cedars Complex Estates Service Organization in Los Angeles. \r\n\r\nRef: What is Scientology pg# 144'),(16624,'Staff College FSO Hard-to-Find Glossary','COLORS','Strictly speaking, a vessel\'s colors are the Flag or Flags that she flies to indacte her nationality, but the term is often expanded to include all Flags flown. -- Ref: Chapman Piloting'),(16625,'Staff College FSO Hard-to-Find Glossary','CONFIDENCE CHECK','A check known by the person accepting it as NOT valid and cover funds at time of acceptance, but accepted nevertheless on basis of promise by the drawer to make it good at a later date. --Ref: HCO PL \"Offenses and Penalties\"'),(16626,'Staff College FSO Hard-to-Find Glossary','CEDARS','Cedars Complex - formerly Cedars of Lebanon Hospital in Los Angeles'),(16627,'Staff College FSO Hard-to-Find Glossary','CHICKEN IN EVERY POT','This was an American political party slogan used in 1932. Was a promise made by the politicians. If the public would vote for them, then the politicians would bring prosperity to the people so everyone could afford a chicken in their pot. -- Ref: Book of Quotations from Clearwater Library'),(16628,'Staff College FSO Hard-to-Find Glossary','CS-E','Commodore\'s Staff responsible for all Estates internationally.');
/*!40000 ALTER TABLE `dictionary_mdb_partial` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-04-29 13:15:52
