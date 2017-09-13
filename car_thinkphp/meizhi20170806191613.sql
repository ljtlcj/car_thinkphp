-- MySQL dump 10.13  Distrib 5.5.53, for Win32 (AMD64)
--
-- Host: localhost    Database: meizhi
-- ------------------------------------------------------
-- Server version	5.5.53

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
-- Table structure for table `add_goods`
--

DROP TABLE IF EXISTS `add_goods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `add_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `specific_time` varchar(80) NOT NULL,
  `receipt_number` varchar(40) DEFAULT NULL,
  `supplier` varchar(40) DEFAULT NULL,
  `person_handing` varchar(40) DEFAULT NULL,
  `entering_date` varchar(40) DEFAULT NULL,
  `contact_way` varchar(40) DEFAULT NULL,
  `goods_name` varchar(40) DEFAULT NULL,
  `equipment_style` varchar(40) DEFAULT NULL,
  `equipment_number` varchar(40) DEFAULT NULL,
  `unit` varchar(40) DEFAULT NULL,
  `to_remark` varchar(1000) DEFAULT NULL,
  `sign` varchar(40) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `total_money` double DEFAULT NULL,
  `month` varchar(40) NOT NULL,
  `year` varchar(40) NOT NULL,
  `str_to_time` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=630 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `add_goods`
--

LOCK TABLES `add_goods` WRITE;
/*!40000 ALTER TABLE `add_goods` DISABLE KEYS */;
INSERT INTO `add_goods` VALUES (88,'2017-07-15 16:45:35','B02','广州','长空','2017-07-15','17875305987','鼠标','RAPOO','8888','个','测试','以用',1,30,60,'01','2017','1500108335'),(87,'2017-07-15 16:45:35','B02','广州','长空','2017-07-15','17875305987','鼠标','RAPOO','8888','个','测试','以用',1,30,70,'02','2017','1500108335'),(86,'2017-07-15 16:45:35','B02','广州','长空','2017-07-15','17875305987','鼠标','RAPOO','8888','个','测试','以用',1,30,80,'03','2017','1500108335'),(85,'2017-07-15 16:45:35','B02','广州','长空','2017-07-15','17875305987','轮胎','G5','7777','个','测试','以用',1,200,90,'04','2017','1500108335'),(84,'2017-07-15 16:45:35','B02','广州','长空','2017-07-15','17875305987','轮胎','G5','7777','个','测试','以用',1,200,100,'05','2017','1500108335'),(83,'2017-07-15 16:43:12','A01','深圳','林枫','2017-07-15','17875355748','笔记本 ','I5','6666','本','测试','以用',1,4000,110,'06','2017','1500108192'),(80,'2017-07-15 16:43:12','A01','深圳','林枫','2017-07-15','17875355748','导航仪','GPS','5555','个','测试','以用',1,15,120,'07','2017','1500108192'),(81,'2017-07-15 16:43:12','A01','深圳','林枫','2017-07-15','17875355748','导航仪','GPS','5555','个','测试','以用',1,15,130,'08','2017','1500108192'),(82,'2017-07-15 16:43:12','A01','深圳','林枫','2017-07-15','17875355748','笔记本 ','I5','6666','本','测试','以用',1,4000,140,'09','2017','1500108192'),(599,'2017-07-15 22:02:05',NULL,NULL,'秦问天','2017-07-15','17875305747','导航仪','GPS','45',NULL,'测试','未用',1,200,NULL,'12','2017','1500127325'),(598,'2017-07-15 22:02:05',NULL,NULL,'秦问天','2017-07-15','17875305747','导航仪','GPS','45',NULL,'测试','未用',1,200,NULL,'12','2017','1500127325'),(628,'2017-08-01 10:55:01','666','666','666','2017-08-01','666','666','666','666','666','666','以用',1,666,666,'08','2017',''),(618,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','',''),(615,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','',''),(616,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','',''),(609,'',NULL,NULL,NULL,NULL,NULL,'123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','',''),(610,'',NULL,NULL,NULL,NULL,NULL,'123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','',''),(604,'2017-07-18 12:20:51',NULL,NULL,'','2017-07-15','111','鼠标','RAPOO','555',NULL,'555','未用',1,30,NULL,'07','2017',''),(605,'2017-07-18 12:20:51',NULL,NULL,'','2017-07-15','111','鼠标','RAPOO','555',NULL,'555','未用',1,30,NULL,'07','2017',''),(608,'2017-07-18 12:20:51',NULL,NULL,'','2017-07-15','111','鼠标','RAPOO','555',NULL,'555','未用',1,30,NULL,'07','2017','');
/*!40000 ALTER TABLE `add_goods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `power` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (1,'老板','e10adc3949ba59abbe56e057f20f883e',2),(39,'00','b4b147bc522828731f1a016bfa72c073',4),(32,'业务员1','123',4),(33,'123','4',4),(34,'123','4',4),(35,'123','4',3),(36,'123','4',3),(38,'3','eccbc87e4b5ce2fe28308fd9f2a7baf3',3),(31,'123','4',3),(30,'123','4',4),(29,'123','4',4),(37,'1','c4ca4238a0b923820dcc509a6f75849b',4),(27,'业务员1','123',4),(40,'好','2510c39011c5be704182423e3a695e91',4);
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `renew`
--

DROP TABLE IF EXISTS `renew`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `renew` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_handing` varchar(40) DEFAULT NULL,
  `renew_date` varchar(40) DEFAULT NULL,
  `money` varchar(40) DEFAULT NULL,
  `goods_name` varchar(40) DEFAULT NULL,
  `time` varchar(40) DEFAULT NULL,
  `special_time` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `renew`
--

LOCK TABLES `renew` WRITE;
/*!40000 ALTER TABLE `renew` DISABLE KEYS */;
/*!40000 ALTER TABLE `renew` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sale`
--

DROP TABLE IF EXISTS `sale`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sale` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entering_date` varchar(40) DEFAULT NULL,
  `receipts_number` varchar(40) DEFAULT NULL,
  `buyer` varchar(40) DEFAULT NULL,
  `person_handing` varchar(40) DEFAULT NULL,
  `to_explain` varchar(40) DEFAULT NULL,
  `car_number` varchar(40) DEFAULT NULL,
  `linkman` varchar(40) DEFAULT NULL,
  `contact_way` varchar(40) DEFAULT NULL,
  `goods_name` varchar(40) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `total_price` int(11) DEFAULT NULL,
  `equipment_style` varchar(40) DEFAULT NULL,
  `equipment_number` varchar(40) DEFAULT NULL,
  `install_date` varchar(40) DEFAULT NULL,
  `get_money_people` varchar(40) DEFAULT NULL,
  `get_money_date` varchar(40) DEFAULT NULL,
  `vaild_date` varchar(40) DEFAULT NULL,
  `to_remark` varchar(10000) DEFAULT NULL,
  `receivable_amount` double DEFAULT NULL,
  `sign` varchar(40) DEFAULT NULL,
  `specific_time` varchar(80) NOT NULL,
  `month` varchar(40) NOT NULL,
  `year` varchar(40) NOT NULL,
  `str_to_time` varchar(80) NOT NULL,
  `temp_vaild_date` int(80) NOT NULL,
  `renew` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=578 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sale`
--

LOCK TABLES `sale` WRITE;
/*!40000 ALTER TABLE `sale` DISABLE KEYS */;
INSERT INTO `sale` VALUES (574,'2017-08-01','456','456','456','456','456','456','456','456',3,456,1368,'456','456','2017-08-01','456','2017-08-01','2017-08-24','456',1368,'以用','2017-08-01 09:39:07','08','2017','1501551547',0,''),(573,'2017-08-01','123','123','123','123','123','123','123','123',3,123,369,'123','123','2017-08-01','123','2017-08-01','2017-08-03','测试',369,'以用','2017-08-01 09:35:46','08','2017','',0,''),(572,'测试','测试','测试','测试','测试','测试','测试','测试','测试',1,1,1,'测试','测试','测试','测试','测试','2017-04-03','测试',0,'以用','测试8','12','2017','测试',0,''),(571,'测试','测试','测试','测试','测试','测试','测试','测试','测试',1,1,1,'测试','测试','测试','测试','测试','2017-04-03','测试',0,'以用','测试8','11','2017','测试',0,''),(570,'测试','测试','测试','测试','测试','测试','测试','测试','测试',1,1,1,'测试','测试','测试','测试','测试','2017-04-03','测试',0,'以用','测试8','10','2017','测试',0,''),(569,'测试','测试','测试','测试','测试','测试','测试','测试','测试',1,1,1,'测试','测试','测试','测试','测试','2017-04-03','测试',0,'以用','测试8','09','2017','测试',0,''),(576,'2017-08-01','555','555','555','555','555','555','555','555',1,555,555,'555','555','2017-08-01','555','2017-08-01','2017-08-16','555',555,'以用','2017-08-01 10:53:48','08','2017','1501556028',0,''),(567,'测试','测试','测试','测试','测试','测试','测试','测试','测试',1,1,1,'测试','测试','测试','测试','测试','2017-04-03','测试',0,'以用','测试7','07','2017','测试',0,''),(568,'测试','测试','测试','测试','测试','测试','测试','测试','测试',1,1,1,'测试','测试','测试','测试','测试','2017-04-03','测试',0,'以用','测试8','08','2017','测试',0,''),(575,'2017-08-01','222','222','222','22','222','222','222','222',2,2,4,'222','2','2017-08-01','222','2017-08-01','2017-07-04','2',4,'以用','2017-08-01 10:12:13','08','2017','1501553533',0,''),(577,'2017-08-01','666','666','666','666','666','66','666','666',1,666,666,'666','666','2017-08-01','666','2017-08-01','2017-08-23','666',666,'以用','2017-08-01 10:55:26','08','2017','1501556126',1503417600,'');
/*!40000 ALTER TABLE `sale` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-08-06 19:16:15
