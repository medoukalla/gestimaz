-- MySQL dump 10.13  Distrib 8.0.32, for Linux (x86_64)
--
-- Host: localhost    Database: kama
-- ------------------------------------------------------
-- Server version	8.0.32

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `data_rows`
--

DROP TABLE IF EXISTS `data_rows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `data_rows` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `data_type_id` int unsigned NOT NULL,
  `field` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `order` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `data_rows_data_type_id_foreign` (`data_type_id`),
  CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=188 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_rows`
--

LOCK TABLES `data_rows` WRITE;
/*!40000 ALTER TABLE `data_rows` DISABLE KEYS */;
INSERT INTO `data_rows` VALUES (1,1,'id','number','ID',1,0,0,0,0,0,'{}',1),(2,1,'name','text','Nom',1,1,1,1,1,1,'{}',2),(3,1,'email','text','Email',1,1,1,1,1,1,'{}',3),(4,1,'password','password','Mot de passe',1,0,0,1,1,0,'{}',4),(5,1,'remember_token','text','Token de rappel',0,0,0,0,0,0,'{}',5),(6,1,'created_at','timestamp','Créé le',0,1,1,0,0,0,'{}',6),(7,1,'updated_at','timestamp','Mis à jour le',0,0,0,0,0,0,'{}',7),(8,1,'avatar','image','Avatar',0,0,1,1,1,1,'{}',8),(9,1,'user_belongsto_role_relationship','relationship','Rôle',0,0,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":\"0\",\"taggable\":\"0\"}',10),(10,1,'user_belongstomany_role_relationship','relationship','voyager::seeders.data_rows.roles',0,0,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}',11),(11,1,'settings','hidden','Settings',0,0,0,0,0,0,'{}',12),(12,2,'id','number','ID',1,0,0,0,0,0,NULL,1),(13,2,'name','text','Nom',1,1,1,1,1,1,NULL,2),(14,2,'created_at','timestamp','Créé le',0,0,0,0,0,0,NULL,3),(15,2,'updated_at','timestamp','Mis à jour le',0,0,0,0,0,0,NULL,4),(21,1,'role_id','text','Rôle',0,0,1,1,1,1,'{}',9),(22,4,'id','hidden','Id',1,0,0,0,0,0,'{}',1),(23,4,'name','text','Name',0,1,1,1,1,1,'{}',2),(24,4,'image','image','Image',0,1,1,1,1,1,'{}',3),(25,4,'created_at','timestamp','Created At',0,1,1,0,0,1,'{}',4),(26,4,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',5),(27,5,'id','hidden','Id',1,0,0,0,0,0,'{}',1),(28,5,'name','text','Name',0,1,1,1,1,1,'{\"validation\":{\"rule\":\"required|max:250\"}}',2),(29,5,'price','text','Price USD',0,1,1,1,1,1,'{\"validation\":{\"rule\":\"required|max:50\"}}',3),(30,5,'image','image','Image',0,1,1,1,1,1,'{}',7),(31,5,'active','checkbox','Active',1,1,1,1,1,1,'{\"on\":\"Activr\",\"off\":\"Inactive\",\"checked\":true}',8),(32,5,'map_id','hidden','Map Id',0,1,1,1,1,1,'{}',9),(33,5,'created_at','timestamp','Created At',0,0,0,0,0,0,'{}',10),(34,5,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',13),(35,5,'server_belongsto_map_relationship','relationship','Map',0,1,1,1,1,1,'{\"model\":\"App\\\\Models\\\\Map\",\"table\":\"maps\",\"type\":\"belongsTo\",\"column\":\"map_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"data_rows\",\"pivot\":\"0\",\"taggable\":\"0\"}',15),(36,4,'map_hasmany_server_relationship','relationship','servers',0,1,1,1,1,1,'{\"model\":\"App\\\\Models\\\\Server\",\"table\":\"servers\",\"type\":\"hasMany\",\"column\":\"map_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"data_rows\",\"pivot\":\"0\",\"taggable\":\"0\"}',6),(37,6,'id','hidden','Id',1,1,0,0,0,0,'{}',1),(38,6,'quantity','text','Quantity',0,1,1,0,1,1,'{}',6),(39,6,'price','text','Price',0,0,1,0,1,1,'{}',4),(40,6,'total','text','Total',0,1,1,0,1,1,'{}',5),(41,6,'bonus','text','Bonus',0,1,1,0,1,1,'{}',7),(42,6,'payment_method','hidden','Payment Method',0,0,0,0,0,0,'{}',11),(43,6,'game_id','text','Game Id',0,0,0,0,1,1,'{}',14),(44,6,'payed','checkbox','Payed',1,1,0,1,1,1,'{\"on\":\"YES\",\"off\":\"NO\",\"checked\":false}',9),(47,6,'order_completed','checkbox','Finished',1,0,0,0,0,0,'{\"on\":\"YES\",\"off\":\"NO\",\"checked\":false}',16),(48,6,'created_at','timestamp','Created At',0,0,0,0,0,0,'{}',17),(49,6,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',18),(50,6,'deleted_at','timestamp','Deleted At',0,0,0,0,0,0,'{}',19),(51,6,'server_id','hidden','Server Id',1,0,1,1,1,1,'{}',20),(52,6,'order_belongsto_server_relationship','relationship','server',1,1,1,0,1,1,'{\"model\":\"App\\\\Models\\\\Server\",\"table\":\"servers\",\"type\":\"belongsTo\",\"column\":\"server_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"data_rows\",\"pivot\":\"0\",\"taggable\":\"0\"}',3),(53,10,'id','hidden','Id',1,0,0,0,0,0,'{}',1),(54,10,'name','text','Name',0,1,1,1,1,1,'{\"validation\":{\"rule\":\"required|max:50\"}}',2),(55,10,'price','number','Price Paypal',0,1,1,1,1,1,'{\"validation\":{\"rule\":\"required\"}}',3),(56,10,'image','image','Image',0,0,1,1,1,1,'{}',7),(57,10,'active','checkbox','Active',1,1,1,1,1,1,'{\"on\":\"Active\",\"off\":\"Inactive\",\"checked\":true}',8),(58,10,'map_id','select_dropdown','Maps',0,1,1,1,1,1,'{\"default\":\"classique\",\"options\":{\"classique\":\"classique\",\"retro\":\"retro\",\"touch\":\"touch\"}}',9),(59,10,'created_at','timestamp','Created At',0,0,0,0,0,0,'{}',10),(60,10,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',11),(61,10,'deleted_at','timestamp','Deleted At',0,0,0,0,0,0,'{}',12),(62,11,'id','text','Id',1,0,0,0,0,0,'{}',1),(63,11,'quantity','number','Quantity',0,1,1,1,1,1,'{\"validation\":{\"rule\":\"required|numeric\"}}',3),(67,11,'created_at','timestamp','Created At',0,0,0,0,0,0,'{}',7),(68,11,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',8),(69,12,'id','text','Id',1,0,0,0,0,0,'{}',1),(70,12,'question','text','Question',0,1,1,1,1,1,'{\"validation\":{\"rule\":\"required|max:250\"}}',2),(71,12,'answer','text_area','Answer',0,0,1,1,1,1,'{\"validation\":{\"rule\":\"required\"}}',3),(72,12,'active','checkbox','Active',0,1,1,1,1,1,'{\"on\":\"Active\",\"off\":\"Inactive\",\"checked\":true}',4),(73,12,'created_at','timestamp','Created At',0,0,0,0,0,0,'{}',5),(74,12,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',6),(75,11,'pack_belongstomany_server_relationship','relationship','servers',0,1,1,1,1,1,'{\"model\":\"App\\\\Models\\\\Server\",\"table\":\"servers\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"server_pack\",\"pivot\":\"1\",\"taggable\":\"on\"}',9),(76,5,'server_belongstomany_pack_relationship','relationship','Packs',0,1,1,1,1,1,'{\"model\":\"App\\\\Models\\\\Pack\",\"table\":\"packs\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"server_pack\",\"pivot\":\"1\",\"taggable\":\"on\"}',16),(77,11,'name','text','Name',0,1,1,1,1,1,'{\"validation\":{\"rule\":\"required|required\"}}',2),(78,11,'active','checkbox','Active',0,1,1,1,1,1,'{\"on\":\"Available\",\"off\":\"Unavailable\",\"checked\":true}',5),(79,11,'bonus','select_dropdown','Bonus',0,1,1,1,1,1,'{\"default\":\"0\",\"options\":{\"0.00\":\"0.00%\",\"0.25\":\"0.25%\",\"0.50\":\"0.50%\",\"0.75\":\"0.75%\",\"1.00\":\"1.00%\",\"1.25\":\"1.25%\",\"1.50\":\"1.50%\",\"1.75\":\"1.75%\",\"2.00\":\"2.00%\",\"2.25\":\"2.25%\",\"2.50\":\"2.50%\",\"2.75\":\"2.75%\",\"3.00\":\"3.00%\",\"3.25\":\"3.25%\",\"3.50\":\"3.50%\",\"3.75\":\"3.75%\",\"4.00\":\"4.00%\",\"4.25\":\"4.25%\",\"4.50\":\"4.50%\",\"4.75\":\"4.75%\",\"5.00\":\"5.00%\"}}',5),(80,5,'price_euro','text','Price EURO',0,0,1,1,1,1,'{\"validation\":{\"rule\":\"required|max:50\"}}',4),(81,13,'id','text','Id',1,0,0,0,0,0,'{}',1),(82,13,'name','text','Name',0,1,1,1,1,1,'{}',2),(83,13,'image','image','Image',0,0,1,1,1,1,'{}',3),(84,13,'active','checkbox','Active',0,1,1,1,1,1,'{\"on\":\"Available\",\"off\":\"Unavailable\",\"checked\":true}',5),(85,13,'created_at','timestamp','Created At',0,0,0,0,0,0,'{}',6),(86,13,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',7),(87,6,'order_belongsto_payment_relationship','relationship','Payment',1,1,1,0,1,1,'{\"model\":\"App\\\\Models\\\\Payment\",\"table\":\"payments\",\"type\":\"belongsTo\",\"column\":\"payment_method\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"data_rows\",\"pivot\":\"0\",\"taggable\":\"0\"}',8),(88,6,'pack_id','hidden','Pack Id',0,0,1,1,1,1,'{}',21),(90,6,'user_id','hidden','User Id',0,1,1,1,1,1,'{}',22),(91,6,'order_belongsto_user_relationship','relationship','user',1,1,1,0,1,1,'{\"model\":\"App\\\\Models\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"data_rows\",\"pivot\":\"0\",\"taggable\":\"0\"}',2),(97,6,'facturer','checkbox','Données de facturation',1,1,0,1,1,1,'{\"on\":\"YES\",\"off\":\"NO\",\"checked\":false}',12),(98,6,'liviser','checkbox','Données de livraison',1,1,1,1,1,1,'{\"on\":\"YES\",\"off\":\"NO\",\"checked\":false}',13),(99,6,'delivered','checkbox','Terminé',1,1,0,1,0,0,'{\"on\":\"YES\",\"off\":\"NO\",\"checked\":false}',15),(100,6,'payment_verified','checkbox','Payment Verified',0,1,0,1,1,1,'{\"on\":\"YES\",\"off\":\"NO\",\"checked\":false}',10),(101,6,'facturation_name','text','Facturation Name',0,0,1,0,1,1,'{}',24),(102,6,'facturation_discrod','text','Facturation Discrod',0,0,1,0,1,1,'{}',23),(103,6,'facturation_email','text','Facturation Email',0,0,1,0,1,1,'{}',25),(104,6,'facturation_code','text','Facturation Code',0,0,1,0,1,1,'{}',26),(105,6,'facturation_city','text','Facturation City',0,0,1,0,1,1,'{}',27),(106,6,'facturation_phone','text','Facturation Phone',0,0,1,0,1,1,'{}',28),(107,6,'facturation_agree','text','Facturation Agree',0,0,1,0,1,1,'{}',29),(118,20,'id','text','Id',1,0,0,0,0,0,'{}',1),(119,20,'name','text','Name',1,1,1,1,1,1,'{}',2),(120,20,'display_name','text','Display Name',1,1,1,1,1,1,'{}',3),(121,20,'created_at','timestamp','Created At',0,0,0,0,0,0,'{}',4),(122,20,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',5),(123,5,'min_quantity','text','Min Quantity',0,1,1,1,1,1,'{}',11),(124,5,'price_buy','text','Price Buy',0,0,1,1,1,1,'{}',14),(125,5,'max_quantity','text','Max Quantity',0,1,1,1,1,1,'{}',12),(126,21,'id','text','Id',1,0,0,0,0,0,'{}',1),(127,21,'from_server','text','From Server',0,0,1,1,1,1,'{}',6),(128,21,'to_server','text','To Server',0,0,1,1,1,1,'{}',7),(129,21,'quantity','text','Quantity',0,1,1,1,1,1,'{}',3),(130,21,'from_name','text','From Name',0,0,1,1,1,1,'{}',9),(131,21,'to_name','text','To Name',0,0,1,1,1,1,'{}',10),(132,21,'status','select_dropdown','Status',0,1,1,1,1,1,'{\"default\":\"new\",\"options\":{\"new\":\"New change\",\"progress\":\"In progress\",\"completed\":\"Change done\",\"canceled\":\"Change cancelled\"}}',11),(133,21,'user_id','text','User Id',0,1,1,1,1,1,'{}',12),(134,21,'created_at','timestamp','Created At',0,1,1,0,0,0,'{}',13),(135,21,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',14),(136,21,'exchange_belongsto_server_relationship','relationship','From server',0,1,1,1,1,1,'{\"model\":\"App\\\\Models\\\\Server\",\"table\":\"servers\",\"type\":\"belongsTo\",\"column\":\"from_server\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"data_rows\",\"pivot\":\"0\",\"taggable\":\"0\"}',4),(137,21,'exchange_belongsto_server_relationship_1','relationship','To server',0,1,1,1,1,1,'{\"model\":\"App\\\\Models\\\\Server\",\"table\":\"servers\",\"type\":\"belongsTo\",\"column\":\"to_server\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"data_rows\",\"pivot\":\"0\",\"taggable\":\"0\"}',5),(138,21,'exchange_belongsto_user_relationship','relationship','User',0,1,1,1,1,1,'{\"model\":\"App\\\\Models\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"data_rows\",\"pivot\":\"0\",\"taggable\":\"0\"}',2),(139,21,'quantity_get','text','Quantity Get',0,1,1,1,1,1,'{}',8),(140,5,'price_cad','text','Price CAD',0,0,1,1,1,1,'{}',5),(141,13,'fees','text','Fees',0,1,1,1,1,1,'{\"default\":\"0\",\"options\":{\"0.00\":\"0.00%\",\"0.25\":\"0.25%\",\"0.50\":\"0.50%\",\"0.75\":\"0.75%\",\"1.00\":\"1.00%\",\"1.25\":\"1.25%\",\"1.50\":\"1.50%\",\"1.75\":\"1.75%\",\"2.00\":\"2.00%\",\"2.25\":\"2.25%\",\"2.50\":\"2.50%\",\"2.75\":\"2.75%\",\"3.00\":\"3.00%\",\"3.25\":\"3.25%\",\"3.50\":\"3.50%\",\"3.75\":\"3.75%\",\"4.00\":\"4.00%\",\"4.25\":\"4.25%\",\"4.50\":\"4.50%\",\"4.75\":\"4.75%\",\"5.00\":\"5.00%\",\"5.25\":\"5.25%\",\"5.50\":\"5.50%\",\"5.75\":\"5.75%\",\"6.00\":\"6.00%\",\"6.25\":\"6.25%\",\"6.50\":\"6.50%\",\"6.75\":\"6.75%\",\"7.00\":\"7.00%\",\"7.25\":\"7.25%\",\"7.50\":\"7.50%\",\"7.75\":\"7.75%\",\"8.00\":\"8.00%\",\"8.25\":\"8.25%\",\"8.50\":\"8.50%\",\"8.75\":\"8.75%\",\"9.00\":\"9.00%\",\"9.25\":\"9.25%\",\"9.50\":\"9.50%\",\"9.75\":\"9.75%\",\"10.00\":\"10.00%\"}}',4),(142,5,'price_mad','text','Price MAD',0,0,1,1,1,1,'{}',6),(144,4,'map_hasmany_sell_server_relationship','relationship','sell_servers',0,1,1,1,1,1,'{\"model\":\"App\\\\Models\\\\SellServer\",\"table\":\"sell_servers\",\"type\":\"hasMany\",\"column\":\"map_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"data_rows\",\"pivot\":\"0\",\"taggable\":\"0\"}',7),(145,10,'price_skrill','text','Price Skrill',0,1,1,1,1,1,'{}',4),(146,10,'price_mad','text','Price Mad',0,1,1,1,1,1,'{}',5),(147,22,'id','text','Id',1,0,0,0,0,0,'{}',1),(148,22,'name','text','Name',0,1,1,1,1,1,'{}',2),(149,22,'email','text','Email',0,1,1,1,1,1,'{}',3),(150,22,'message','text','Message',0,0,1,1,1,1,'{}',4),(151,22,'created_at','timestamp','Received At',0,1,0,0,0,0,'{}',5),(152,22,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',6),(153,22,'deleted_at','timestamp','Deleted At',0,0,0,0,0,1,'{}',7),(154,1,'email_verified_at','timestamp','Email Verified At',0,1,1,1,1,1,'{}',6),(155,1,'stripe_id','text','Stripe Id',0,0,1,1,1,1,'{}',12),(156,1,'pm_type','text','Pm Type',0,0,1,1,1,1,'{}',13),(157,1,'pm_last_four','text','Pm Last Four',0,0,1,1,1,1,'{}',14),(158,1,'trial_ends_at','timestamp','Trial Ends At',0,1,1,1,1,1,'{}',15),(159,1,'game_id','text','Game Id',0,1,0,0,0,0,'{}',16),(160,23,'id','text','Id',1,0,0,0,0,0,'{}',1),(161,23,'email','text','Email',0,1,1,1,1,1,'{}',2),(162,23,'created_at','timestamp','Created At',0,1,1,1,0,0,'{}',3),(163,23,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',4),(164,23,'deleted_at','timestamp','Deleted At',0,0,0,0,0,1,'{}',5),(165,10,'min','number','Min',0,1,1,1,1,1,'{}',13),(166,10,'max','number','Max',0,1,1,1,1,1,'{}',14),(167,24,'id','text','Id',1,0,0,0,0,0,'{}',1),(168,24,'quantity','text','Quantity',0,1,1,1,1,1,'{}',4),(169,24,'total','text','Total',0,1,1,1,1,1,'{}',6),(170,24,'game_id','text','Game Id',0,0,1,1,1,1,'{}',5),(171,24,'name','text','Name',0,1,1,1,1,1,'{}',2),(172,24,'email','text','Email',0,0,0,0,0,0,'{}',3),(173,24,'discord','text','Discord',0,0,1,1,1,1,'{}',7),(174,24,'status','select_dropdown','Status',1,1,1,1,1,1,'{\"default\":\"new\",\"options\":{\"new\":\"Nouvelle offre\",\"encourse\":\"En cours\",\"paye\":\"Pay\\u00e9\",\"annule\":\"Annul\\u00e9\"}}',10),(175,24,'user_id','text','User Id',0,0,1,0,1,1,'{}',11),(176,24,'server_id','text','Server Id',0,1,1,1,1,1,'{}',8),(178,24,'created_at','timestamp','Created At',0,1,1,0,0,0,'{}',12),(179,24,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',13),(180,24,'deleted_at','timestamp','Deleted At',0,0,0,0,0,1,'{}',14),(181,24,'offer_belongsto_user_relationship','relationship','User',0,1,1,0,0,1,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"data_rows\",\"pivot\":\"0\",\"taggable\":\"0\"}',15),(182,24,'offer_hasmany_server_relationship','relationship','Server',0,1,1,0,0,1,'{\"model\":\"App\\\\Models\\\\Server\",\"table\":\"servers\",\"type\":\"hasMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"data_rows\",\"pivot\":\"0\",\"taggable\":\"0\"}',16),(184,24,'payment','text','Payment',0,1,1,1,1,1,'{}',11),(185,24,'payment_info','text','Payment Info',0,0,1,0,1,1,'{}',15),(187,10,'price_sell','text','Price Sell',0,1,1,1,1,1,'{}',6);
/*!40000 ALTER TABLE `data_rows` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_types`
--

DROP TABLE IF EXISTS `data_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `data_types` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint NOT NULL DEFAULT '0',
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_types_name_unique` (`name`),
  UNIQUE KEY `data_types_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_types`
--

LOCK TABLES `data_types` WRITE;
/*!40000 ALTER TABLE `data_types` DISABLE KEYS */;
INSERT INTO `data_types` VALUES (1,'users','users','Utilisateur','Utilisateurs','voyager-person','TCG\\Voyager\\Models\\User','TCG\\Voyager\\Policies\\UserPolicy','TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',NULL,1,1,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}','2023-02-17 09:33:11','2023-06-23 01:00:54'),(2,'menus','menus','Menu','Menus','voyager-list','TCG\\Voyager\\Models\\Menu',NULL,'','',1,0,NULL,'2023-02-17 09:33:11','2023-02-17 09:33:11'),(4,'maps','maps','Map','Maps','voyager-location','App\\Models\\Map',NULL,NULL,NULL,1,1,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2023-02-17 10:15:52','2023-06-01 20:59:05'),(5,'servers','servers','Server','Servers','voyager-harddrive','App\\Models\\Server',NULL,NULL,NULL,1,1,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2023-02-17 10:26:06','2023-06-01 20:09:18'),(6,'orders','orders','Order','Orders','voyager-basket','App\\Models\\Order',NULL,NULL,NULL,1,1,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2023-02-17 11:27:09','2023-06-18 18:10:51'),(10,'sell_servers','sell-servers','Sell Server','Sell Servers','voyager-megaphone','App\\Models\\SellServer',NULL,NULL,NULL,1,1,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2023-02-17 19:40:11','2023-06-22 17:55:21'),(11,'packs','packs','Pack','Packs','voyager-treasure','App\\Models\\Pack',NULL,NULL,NULL,1,1,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2023-03-26 17:22:41','2023-03-27 23:52:36'),(12,'questions','questions','Question','Questions','voyager-question','App\\Models\\Question',NULL,NULL,NULL,1,1,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2023-03-27 00:50:46','2023-03-27 00:50:46'),(13,'payments','payments','Payment','Payments','voyager-dollar','App\\Models\\Payment',NULL,NULL,NULL,1,1,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2023-03-28 01:22:04','2023-04-25 14:44:51'),(20,'roles','roles','Role','Roles',NULL,'TCG\\Voyager\\Models\\Role',NULL,'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2023-04-02 14:07:20','2023-04-02 14:26:11'),(21,'exchanges','exchanges','Exchange','Exchanges','voyager-sort','App\\Models\\Exchange',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2023-04-08 00:26:03','2023-04-08 01:27:54'),(22,'messages','messages','Message','Messages','voyager-mail','App\\Models\\Message',NULL,NULL,NULL,1,1,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2023-06-02 10:46:53','2023-06-02 10:46:53'),(23,'emails','emails','Email','Emails','voyager-news','App\\Models\\Email',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2023-06-19 02:57:32','2023-06-19 02:57:32'),(24,'offers','offers','Offer','Offers',NULL,'App\\Models\\Offer',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2023-06-21 15:03:25','2023-06-21 17:12:19');
/*!40000 ALTER TABLE `data_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emails`
--

DROP TABLE IF EXISTS `emails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `emails` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emails`
--

LOCK TABLES `emails` WRITE;
/*!40000 ALTER TABLE `emails` DISABLE KEYS */;
INSERT INTO `emails` VALUES (1,'admin@admin.com','2023-06-19 03:27:45','2023-06-19 03:27:45',NULL),(2,'user@gmail.com','2023-06-19 03:49:01','2023-06-19 03:49:01',NULL);
/*!40000 ALTER TABLE `emails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exchanges`
--

DROP TABLE IF EXISTS `exchanges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `exchanges` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `from_server` int DEFAULT NULL,
  `to_server` int DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `from_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `quantity_get` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exchanges`
--

LOCK TABLES `exchanges` WRITE;
/*!40000 ALTER TABLE `exchanges` DISABLE KEYS */;
INSERT INTO `exchanges` VALUES (1,1,3,31,'name 1',NULL,'canceled',1,'2023-04-08 01:26:40','2023-05-07 12:30:35','19.579'),(2,1,3,43,'jdjd',NULL,'new',2,'2023-05-07 18:36:38','2023-05-07 18:36:38',NULL),(3,1,2,41,'usersbA',NULL,'new',2,'2023-05-07 18:52:57','2023-05-07 18:52:57',NULL),(4,1,2,42,'userA',NULL,'new',2,'2023-05-07 19:02:11','2023-05-07 19:02:11','10.286'),(5,1,2,50,'name 1',NULL,'new',2,'2023-05-07 19:19:06','2023-05-07 19:19:06','12.245'),(6,1,3,20,'aaaa',NULL,'new',1,'2023-05-07 21:42:53','2023-05-07 21:42:53','12.632'),(7,1,1,20,'ahaha',NULL,'new',1,'2023-05-07 21:44:34','2023-05-07 21:44:34','20.000'),(8,1,2,20,'jhwbjw',NULL,'new',1,'2023-05-07 23:21:07','2023-05-07 23:21:07','4.898'),(9,1,2,30,'aaaa',NULL,'new',2,'2023-06-08 13:24:03','2023-06-08 13:24:03','7.347'),(10,1,2,45,'user1',NULL,'new',13,'2023-06-18 21:37:46','2023-06-18 21:37:46','11.020'),(11,1,2,20,'aaaa',NULL,'new',2,'2023-06-19 02:53:02','2023-06-19 02:53:02','4.898'),(12,1,2,20,'aaaa',NULL,'new',2,'2023-06-19 05:57:34','2023-06-19 05:57:34','4.898'),(13,1,2,50,'aaa',NULL,'new',2,'2023-06-19 06:09:45','2023-06-19 06:09:45','12.245');
/*!40000 ALTER TABLE `exchanges` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maps`
--

DROP TABLE IF EXISTS `maps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `maps` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maps`
--

LOCK TABLES `maps` WRITE;
/*!40000 ALTER TABLE `maps` DISABLE KEYS */;
INSERT INTO `maps` VALUES (1,'Touch','maps/February2023/AzspJntOCox0MDcZ4LQP.jpg','2023-02-17 14:30:45','2023-02-17 14:30:45'),(2,'Retro','maps/February2023/fxmb0jCEAKEKfuNtkg7A.jpg','2023-02-17 14:30:59','2023-02-17 14:30:59'),(3,'Classique','maps/February2023/BoOOgk6xiMixlgOzzv7c.jpg','2023-02-17 14:31:10','2023-02-17 14:31:10');
/*!40000 ALTER TABLE `maps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_items`
--

DROP TABLE IF EXISTS `menu_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menu_items` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int unsigned DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int DEFAULT NULL,
  `order` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_id_foreign` (`menu_id`),
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_items`
--

LOCK TABLES `menu_items` WRITE;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;
INSERT INTO `menu_items` VALUES (6,1,'Créateur de menus','','_self','voyager-list',NULL,5,10,'2023-02-17 09:33:11','2023-02-17 09:33:11','voyager.menus.index',NULL),(7,1,'Base de données','','_self','voyager-data',NULL,5,11,'2023-02-17 09:33:11','2023-02-17 09:33:11','voyager.database.index',NULL),(8,1,'voyager::seeders.menu_items.compass','','_self','voyager-compass',NULL,5,12,'2023-02-17 09:33:11','2023-02-17 09:33:11','voyager.compass.index',NULL),(9,1,'BREAD','','_self','voyager-bread',NULL,5,13,'2023-02-17 09:33:11','2023-02-17 09:33:11','voyager.bread.index',NULL),(11,1,'Tableau de bord','','_self','<i class=\"fa-solid fa-chart-line fa-xl\"></i>','#000000',NULL,1,'2023-02-17 09:49:40','2023-06-18 19:45:57','voyager.dashboard','null'),(12,1,'Médias','','_self','<i class=\"fa-solid fa-photo-film\"></i>','#000000',14,3,'2023-02-17 09:49:40','2023-06-18 19:59:38','voyager.media.index','null'),(13,1,'Utilisateurs','','_self','<i class=\"fa-solid fa-users\"></i>','#000000',NULL,2,'2023-02-17 09:49:40','2023-06-18 19:46:48','voyager.users.index','null'),(14,1,'Outils','','_self','<i class=\"fa-solid fa-screwdriver-wrench\"></i>','#000000',NULL,11,'2023-02-17 09:49:40','2023-06-22 16:09:23',NULL,''),(15,1,'Constructeur de menu','','_self','<i class=\"fa-solid fa-bars\"></i>','#000000',14,2,'2023-02-17 09:49:40','2023-06-18 19:59:14','voyager.menus.index','null'),(16,1,'Base de données','','_self','<i class=\"fa-solid fa-database\"></i>','#000000',14,1,'2023-02-17 09:49:40','2023-06-18 19:59:00','voyager.database.index','null'),(18,1,'Paramètres','','_self','<i class=\"fa-solid fa-gear\"></i>','#000000',NULL,10,'2023-02-17 09:49:40','2023-06-22 16:09:23','voyager.settings.index','null'),(19,1,'Cartes','','_self','<i class=\"fa-solid fa-map-location-dot\"></i>','#000000',NULL,3,'2023-02-17 10:15:52','2023-06-18 19:52:28','voyager.maps.index','null'),(20,1,'Serveurs','','_self','<i class=\"fa-solid fa-server\"></i>','#000000',NULL,7,'2023-02-17 10:26:06','2023-06-22 16:09:23','voyager.servers.index','null'),(21,1,'Commandes','','_self','<i class=\"fa-solid fa-cart-shopping\"></i>','#000000',NULL,4,'2023-02-17 11:27:09','2023-06-18 19:54:28','voyager.orders.index','null'),(24,1,'Serveurs de vente','','_self','<i class=\"fa-solid fa-server\"></i>','#000000',NULL,8,'2023-02-17 19:40:11','2023-06-22 16:09:23','voyager.sell-servers.index','null'),(25,1,'Packs','','_self','<i class=\"fa-solid fa-box\"></i>',NULL,NULL,9,'2023-03-26 17:22:41','2023-06-22 16:09:23','voyager.packs.index',NULL),(26,1,'Questions','','_self','<i class=\"fa-solid fa-question\"></i>','#000000',NULL,12,'2023-03-27 00:50:47','2023-06-22 16:09:23','voyager.questions.index','null'),(27,1,'Paiements','','_self','<i class=\"fa-solid fa-credit-card\"></i>','#000000',NULL,13,'2023-03-28 01:22:04','2023-06-22 16:09:23','voyager.payments.index','null'),(31,1,'Rôles','','_self','<i class=\"fa-solid fa-hand-sparkles\"></i>','#000000',NULL,14,'2023-04-02 14:07:20','2023-06-22 16:09:23','voyager.roles.index','null'),(32,1,'Échanges','','_self','<i class=\"fa-solid fa-right-left\"></i>','#000000',NULL,6,'2023-04-08 00:26:03','2023-06-22 16:09:23','voyager.exchanges.index','null'),(33,1,'Messages','','_self','<i class=\"fa-solid fa-comments\"></i>','#000000',NULL,15,'2023-06-02 10:46:53','2023-06-22 16:09:19','voyager.messages.index','null'),(35,2,'Mes commandes','','_self','<i class=\"fa-solid fa-cart-shopping\"></i>','#000000',NULL,2,'2023-06-10 15:33:14','2023-06-18 20:12:30','voyager.myorders','null'),(37,3,'Tableau de bord','','_self',NULL,'#000000',NULL,18,'2023-06-14 01:10:50','2023-06-18 20:13:27','voyager.dashboard','null'),(38,3,'Page d\'accueil','','_blank',NULL,'#000000',NULL,19,'2023-06-14 01:13:20','2023-06-18 20:13:51','frontend.index','null'),(39,3,'Notre discorde','https://discord.com/','_blank',NULL,'#000000',NULL,20,'2023-06-14 01:18:21','2023-06-21 16:27:28',NULL,''),(40,3,'Facebook','https://www.facebook.com/','_blank',NULL,'#000000',NULL,21,'2023-06-14 01:19:41','2023-06-14 01:19:41',NULL,''),(43,2,'Tableau de bord','','_self','<i class=\"fa-solid fa-chart-line fa-xl\"></i>','#000000',NULL,1,'2023-06-18 20:12:23','2023-06-18 20:12:28','voyager.dashboard',NULL),(44,1,'Newsletter','','_self','<i class=\"fa-solid fa-newspaper\"></i>','#000000',NULL,16,'2023-06-19 02:57:32','2023-06-22 16:09:19','voyager.emails.index','null'),(45,2,'Mes échanges','','_self','<i class=\"fa-solid fa-right-left\"></i>','#000000',NULL,23,'2023-06-19 07:11:17','2023-06-19 07:11:17','voyager.myexchanges',NULL),(46,1,'Offers','','_self','<i class=\"fa-solid fa-basket-shopping\"></i>','#ff1a1a',NULL,5,'2023-06-21 15:03:25','2023-06-22 16:09:18','voyager.offers.index','null'),(47,2,'Mes offres','','_self','<i class=\"fa-solid fa-basket-shopping\"></i>','#000000',NULL,25,'2023-06-21 22:33:52','2023-06-21 22:33:52','voyager.myoffers',NULL);
/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menus` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'admin','2023-02-17 09:33:11','2023-02-17 09:33:11'),(2,'client','2023-06-10 15:30:16','2023-06-10 15:30:16'),(3,'top_menu','2023-06-14 01:10:16','2023-06-14 01:10:16');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `messages` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (1,'Med','med@gmail.com','message content is here','2023-06-02 11:08:30','2023-06-02 11:08:30',NULL),(2,'Med','med@gmail.com','message content is here','2023-06-02 11:09:00','2023-06-02 11:09:00',NULL),(3,'ndndj','dejnjkdne@gmail.fr','dknjwendjkjdnkwejndjkwenk','2023-06-18 20:55:35','2023-06-18 20:55:35',NULL),(4,'Admin','admin@admin.com','wewedwedwe','2023-06-19 01:16:11','2023-06-19 01:16:11',NULL),(5,'Admin','admin@admin.com','erferferf','2023-06-19 01:24:59','2023-06-19 01:24:59',NULL),(6,'Admin','admin@admin.com','erferferf','2023-06-19 01:27:48','2023-06-19 01:27:48',NULL),(7,'Admin','admin@admin.com','ererfeferfe','2023-06-19 01:28:10','2023-06-19 01:28:10',NULL),(8,'Admin','admin@admin.com','ererfeferfe','2023-06-19 01:28:28','2023-06-19 01:28:28',NULL),(9,'Admin','admin@admin.com','ererfeferfe','2023-06-19 01:28:55','2023-06-19 01:28:55',NULL),(10,'Admin','admin@admin.com','cwcewcwe','2023-06-19 01:29:21','2023-06-19 01:29:21',NULL),(11,'Admin','admin@admin.com','fwefwefwef','2023-06-19 01:30:54','2023-06-19 01:30:54',NULL),(12,'Admin','admin@admin.com','fwefwefwef','2023-06-19 01:30:58','2023-06-19 01:30:58',NULL),(13,'Admin','admin@admin.com','wefwefwefwe we fwef wefef','2023-06-19 01:35:49','2023-06-19 01:35:49',NULL),(14,'Admin','admin@admin.com','wdwedwed','2023-06-19 01:37:18','2023-06-19 01:37:18',NULL),(15,'Admin','admin@admin.com','wcwecwecwec','2023-06-19 01:38:11','2023-06-19 01:38:11',NULL),(16,'Admin','admin@admin.com','gergergergergerg','2023-06-19 01:38:33','2023-06-19 01:38:33',NULL);
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2016_01_01_000000_add_voyager_user_fields',1),(4,'2016_01_01_000000_create_data_types_table',1),(5,'2016_05_19_173453_create_menu_table',1),(6,'2016_10_21_190000_create_roles_table',1),(7,'2016_10_21_190000_create_settings_table',1),(8,'2016_11_30_135954_create_permission_table',1),(9,'2016_11_30_141208_create_permission_role_table',1),(10,'2016_12_26_201236_data_types__add__server_side',1),(11,'2017_01_13_000000_add_route_to_menu_items_table',1),(12,'2017_01_14_005015_create_translations_table',1),(13,'2017_01_15_000000_make_table_name_nullable_in_permissions_table',1),(14,'2017_03_06_000000_add_controller_to_data_types_table',1),(15,'2017_04_21_000000_add_order_to_data_rows_table',1),(16,'2017_07_05_210000_add_policyname_to_data_types_table',1),(17,'2017_08_05_000000_add_group_to_settings_table',1),(18,'2017_11_26_013050_add_user_role_relationship',1),(19,'2017_11_26_015000_create_user_roles_table',1),(20,'2018_03_11_000000_add_user_settings',1),(21,'2018_03_14_000000_add_details_to_data_types_table',1),(22,'2018_03_16_000000_make_settings_value_nullable',1),(23,'2019_08_19_000000_create_failed_jobs_table',1),(24,'2019_12_14_000001_create_personal_access_tokens_table',1),(25,'2019_05_03_000001_create_customer_columns',2),(26,'2019_05_03_000002_create_subscriptions_table',2),(27,'2019_05_03_000003_create_subscription_items_table',2),(28,'2023_03_27_155138_create_sessions_table',3),(29,'2023_06_17_164404_create_notifications_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint unsigned NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notifications`
--

LOCK TABLES `notifications` WRITE;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
INSERT INTO `notifications` VALUES ('0cab2186-f9b6-4247-9a52-c305945050a3','App\\Notifications\\newExchange','App\\Models\\User',1,'{\"status\":\"success\",\"title\":\"Nouveau exchange\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/exchanges\\/13\"}','2023-06-19 13:37:22','2023-06-19 06:09:45','2023-06-19 13:37:22'),('130bef99-94e9-4583-9ae4-6cae9ef0d1ba','App\\Notifications\\newOrder','App\\Models\\User',4,'{\"status\":\"success\",\"title\":\"Nouveau command\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/orders\\/90\"}',NULL,'2023-06-18 20:41:48','2023-06-18 20:41:48'),('18f4f453-b9c4-4d90-8aa2-439e99ea034e','App\\Notifications\\newUser','App\\Models\\User',4,'{\"status\":\"success\",\"title\":\"Nouvel utilisateur\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/users\\/15\"}',NULL,'2023-06-18 23:19:53','2023-06-18 23:19:53'),('198cfd42-77cc-4674-aa3d-8603a71b37f9','App\\Notifications\\newUser','App\\Models\\User',1,'{\"status\":\"success\",\"title\":\"Nouvel utilisateur\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/users\\/15\"}','2023-06-19 13:37:22','2023-06-18 23:19:53','2023-06-19 13:37:22'),('204c9835-16d6-4758-8d27-5a6428c09d6a','App\\Notifications\\orderReadyForShipping','App\\Models\\User',1,'{\"status\":\"success\",\"title\":\"Commande pr\\u00eate \\u00e0 \\u00eatre livr\\u00e9e\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/orders\\/91\"}','2023-06-19 13:37:22','2023-06-18 21:33:49','2023-06-19 13:37:22'),('2281c676-720b-495a-bcbf-9c1dc851798e','App\\Notifications\\orderConfirmed','App\\Models\\User',2,'{\"status\":\"success\",\"title\":\"Votre paiement est v\\u00e9rifi\\u00e9\",\"link\":\"http:\\/\\/localhost\\/order_details\\/93\"}','2023-06-19 05:53:02','2023-06-19 05:45:31','2023-06-19 05:53:02'),('249176aa-de79-4eed-b34e-6a86a87a9266','App\\Notifications\\newOrder','App\\Models\\User',4,'{\"status\":\"success\",\"title\":\"Nouvel order\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/orders?88\"}',NULL,'2023-06-18 01:37:22','2023-06-18 01:37:22'),('283a26af-353c-47a8-9db5-03328e479957','App\\Notifications\\orderReadyForShipping','App\\Models\\User',4,'{\"status\":\"success\",\"title\":\"Commande pr\\u00eate \\u00e0 \\u00eatre livr\\u00e9e\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/orders\\/91\"}',NULL,'2023-06-18 21:33:49','2023-06-18 21:33:49'),('28518d2d-537d-4ea9-b3a1-7aa3789a82b5','App\\Notifications\\newOrder','App\\Models\\User',4,'{\"status\":\"success\",\"title\":\"Nouveau command\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/orders\\/102\"}',NULL,'2023-06-23 08:31:16','2023-06-23 08:31:16'),('30c3d4b7-44e3-444a-a9d5-a8a1dfb82d92','App\\Notifications\\newOrder','App\\Models\\User',1,'{\"status\":\"success\",\"title\":\"Nouveau command\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/orders\\/101\"}',NULL,'2023-06-23 02:43:46','2023-06-23 02:43:46'),('342ea95f-0d12-4e17-ba56-fd8f208fe41a','App\\Notifications\\newUser','App\\Models\\User',1,'{\"status\":\"success\",\"title\":\"Nouvel utilisateur\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/users\\/13\"}','2023-06-19 13:37:22','2023-06-18 20:35:04','2023-06-19 13:37:22'),('368d2603-b497-4166-bc4b-2b9bc05e084e','App\\Notifications\\newOrder','App\\Models\\User',4,'{\"status\":\"success\",\"title\":\"Nouveau command\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/orders\\/92\"}',NULL,'2023-06-19 02:40:49','2023-06-19 02:40:49'),('381bcead-d3e0-4578-ab34-4a71ee658190','App\\Notifications\\newUser','App\\Models\\User',1,'{\"status\":\"success\",\"title\":\"Nouvel utilisateur\"}','2023-06-19 13:37:22','2023-06-17 17:35:18','2023-06-19 13:37:22'),('3b0be04b-d888-45f3-a8b9-2c6640cea6dd','App\\Notifications\\newUser','App\\Models\\User',4,'{\"status\":\"success\",\"title\":\"Nouvel utilisateur\"}',NULL,'2023-06-17 17:35:18','2023-06-17 17:35:18'),('3c4482a2-1397-49aa-a7f7-79c4647e52e2','App\\Notifications\\newOrder','App\\Models\\User',4,'{\"status\":\"success\",\"title\":\"Nouveau command\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/orders\\/93\"}',NULL,'2023-06-19 05:37:47','2023-06-19 05:37:47'),('4357ce7e-c14b-4f89-8a8c-b36045490e7a','App\\Notifications\\newUser','App\\Models\\User',4,'{\"status\":\"success\",\"title\":\"Nouvel utilisateur\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/users\\/16\"}',NULL,'2023-06-18 23:47:30','2023-06-18 23:47:30'),('441cf508-2bde-4b1b-b681-385a42114d36','App\\Notifications\\orderReadyForShipping','App\\Models\\User',4,'{\"status\":\"success\",\"title\":\"Commande pr\\u00eate \\u00e0 \\u00eatre livr\\u00e9e\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/orders\\/89\"}',NULL,'2023-06-18 15:41:52','2023-06-18 15:41:52'),('4a4e7098-de45-4fab-af8f-46a7eb6a9c47','App\\Notifications\\newOrder','App\\Models\\User',4,'{\"status\":\"success\",\"title\":\"Nouveau command\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/orders\\/97\"}',NULL,'2023-06-21 22:08:53','2023-06-21 22:08:53'),('55a079ba-548f-4e54-974b-446b1ef65325','App\\Notifications\\newExchange','App\\Models\\User',4,'{\"status\":\"success\",\"title\":\"Nouveau exchange\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/exchanges\\/13\"}',NULL,'2023-06-19 06:09:45','2023-06-19 06:09:45'),('5762753c-73e2-458a-b3fb-37cac79346de','App\\Notifications\\newOrder','App\\Models\\User',4,'{\"status\":\"success\",\"title\":\"Nouveau command\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/orders\\/95\"}',NULL,'2023-06-19 20:28:59','2023-06-19 20:28:59'),('59975ad2-c1cd-469f-905f-07ce0f78e08f','App\\Notifications\\newOrder','App\\Models\\User',1,'{\"status\":\"success\",\"title\":\"Nouveau command\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/orders\\/98\"}',NULL,'2023-06-21 22:13:54','2023-06-21 22:13:54'),('5a2c6cf4-956b-4679-9959-74323d5e1e91','App\\Notifications\\newOrder','App\\Models\\User',1,'{\"status\":\"success\",\"title\":\"Nouveau command\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/orders\\/89\"}','2023-06-19 13:37:22','2023-06-18 14:15:29','2023-06-19 13:37:22'),('5cc4e0e0-1944-43e4-8fb9-8fd6f457a227','App\\Notifications\\newOrder','App\\Models\\User',4,'{\"status\":\"success\",\"title\":\"Nouveau command\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/orders\\/89\"}',NULL,'2023-06-18 14:15:29','2023-06-18 14:15:29'),('5fcd36ca-d4b8-469c-9489-5cbce5111a36','App\\Notifications\\newOrder','App\\Models\\User',1,'{\"status\":\"success\",\"title\":\"Nouveau command\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/orders\\/102\"}',NULL,'2023-06-23 08:31:16','2023-06-23 08:31:16'),('63022588-80f3-488d-bc1f-295bb450b81e','App\\Notifications\\newUser','App\\Models\\User',4,'{\"status\":\"success\",\"title\":\"Nouvel utilisateur\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/users\\/13\"}',NULL,'2023-06-18 20:35:04','2023-06-18 20:35:04'),('63b61233-2d44-4bd8-b290-a9bc1ed4aa1c','App\\Notifications\\orderCanceled','App\\Models\\User',2,'{\"status\":\"danger\",\"title\":\"Commande annul\\u00e9e\",\"link\":\"http:\\/\\/localhost\\/servers\"}','2023-06-19 02:35:15','2023-06-18 19:22:06','2023-06-19 02:35:15'),('66554b14-9162-45df-be66-eedcd41db428','App\\Notifications\\newUser','App\\Models\\User',1,'{\"status\":\"success\",\"title\":\"Nouvel utilisateur\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/users\\/14\"}','2023-06-19 13:37:22','2023-06-18 23:16:54','2023-06-19 13:37:22'),('6970badf-8766-4d75-8d51-950201ec68f9','App\\Notifications\\newOrder','App\\Models\\User',1,'{\"status\":\"success\",\"title\":\"Nouveau command\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/orders\\/91\"}','2023-06-19 13:37:22','2023-06-18 21:03:08','2023-06-19 13:37:22'),('6acc6e14-101c-469b-9752-53e8c1ee3499','App\\Notifications\\newOrder','App\\Models\\User',1,'{\"status\":\"success\",\"title\":\"Nouveau command\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/orders\\/92\"}','2023-06-19 13:37:22','2023-06-19 02:40:49','2023-06-19 13:37:22'),('6b9b345e-94f7-4917-a5ae-6cdab6019dea','App\\Notifications\\newOrder','App\\Models\\User',4,'{\"status\":\"success\",\"title\":\"Nouveau command\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/orders\\/96\"}',NULL,'2023-06-19 20:31:47','2023-06-19 20:31:47'),('6cfe107f-c35b-4456-ac44-478f3f6c4209','App\\Notifications\\newOrder','App\\Models\\User',1,'{\"status\":\"success\",\"title\":\"Nouveau command\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/orders\\/96\"}',NULL,'2023-06-19 20:31:47','2023-06-19 20:31:47'),('6df71493-c5c7-41a7-9d84-879589b09aaa','App\\Notifications\\newOrder','App\\Models\\User',1,'{\"status\":\"success\",\"title\":\"Nouveau command\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/orders\\/99\"}',NULL,'2023-06-22 01:17:16','2023-06-22 01:17:16'),('7383ce3b-de18-4f9e-b70b-e2110ecfe557','App\\Notifications\\newOrder','App\\Models\\User',4,'{\"status\":\"success\",\"title\":\"Nouveau command\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/orders\\/101\"}',NULL,'2023-06-23 02:43:46','2023-06-23 02:43:46'),('7bda2e41-1df5-4e6c-9191-011960326e54','App\\Notifications\\newOrder','App\\Models\\User',1,'{\"status\":\"success\",\"title\":\"Nouveau command\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/orders\\/100\"}',NULL,'2023-06-22 12:05:47','2023-06-22 12:05:47'),('81681b23-a28d-47b1-8862-c9ecca6df3ee','App\\Notifications\\orderConfirmed','App\\Models\\User',2,'{\"status\":\"success\",\"title\":\"Votre paiement est v\\u00e9rifi\\u00e9\",\"link\":\"http:\\/\\/localhost\\/order_details\\/92\"}','2023-06-19 02:43:31','2023-06-19 02:41:17','2023-06-19 02:43:31'),('9e877fd4-a348-40f5-8390-3bfe5d7d5cbc','App\\Notifications\\newOrder','App\\Models\\User',1,'{\"status\":\"success\",\"title\":\"Nouveau command\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/orders\\/103\"}',NULL,'2023-06-23 08:36:37','2023-06-23 08:36:37'),('af01af1b-4d5c-4e5f-a2d9-c2ccd0b8dc76','App\\Notifications\\newOrder','App\\Models\\User',4,'{\"status\":\"success\",\"title\":\"Nouveau command\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/orders\\/94\"}',NULL,'2023-06-19 16:41:10','2023-06-19 16:41:10'),('b08c39ba-a8bb-4c95-aa80-a153a74d4561','App\\Notifications\\newUser','App\\Models\\User',1,'{\"status\":\"success\",\"title\":\"Nouvel utilisateur\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/users\\/12\"}','2023-06-19 13:37:22','2023-06-18 14:13:08','2023-06-19 13:37:22'),('b18e0385-b52e-4bef-80e7-658c2e550f88','App\\Notifications\\orderConfirmed','App\\Models\\User',13,'{\"status\":\"success\",\"title\":\"Votre paiement est v\\u00e9rifi\\u00e9\",\"link\":\"http:\\/\\/localhost\\/order_details\\/91\"}',NULL,'2023-06-18 21:11:38','2023-06-18 21:11:38'),('b2f725b5-ff74-46ab-adc7-f282afe1d058','App\\Notifications\\newUser','App\\Models\\User',4,'{\"status\":\"success\",\"title\":\"Nouvel utilisateur\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/users\\/14\"}',NULL,'2023-06-18 23:16:54','2023-06-18 23:16:54'),('b41d3149-b27e-47da-ab9f-23ddb79f94c0','App\\Notifications\\OrderReadyForShipping','App\\Models\\User',1,'{\"status\":\"success\",\"title\":\"Commande pr\\u00eate \\u00e0 \\u00eatre livr\\u00e9e\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/orders\\/88\"}','2023-06-19 13:37:22','2023-06-18 12:01:33','2023-06-19 13:37:22'),('bb029caf-b8a3-4502-a64c-9b28e2a56244','App\\Notifications\\newOrder','App\\Models\\User',1,'{\"status\":\"success\",\"title\":\"Nouveau command\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/orders\\/93\"}','2023-06-19 13:37:22','2023-06-19 05:37:47','2023-06-19 13:37:22'),('bb755135-a2c5-4b3e-8594-f2f4d3e62d47','App\\Notifications\\orderReadyForShipping','App\\Models\\User',1,'{\"status\":\"success\",\"title\":\"Commande pr\\u00eate \\u00e0 \\u00eatre livr\\u00e9e\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/orders\\/89\"}','2023-06-19 13:37:22','2023-06-18 15:41:52','2023-06-19 13:37:22'),('bc077926-0494-4da8-989a-3ef3b9bd9473','App\\Notifications\\newOrder','App\\Models\\User',4,'{\"status\":\"success\",\"title\":\"Nouveau command\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/orders\\/99\"}',NULL,'2023-06-22 01:17:16','2023-06-22 01:17:16'),('c5df47ed-e5b2-4517-9901-fc62b4a01afe','App\\Notifications\\orderConfirmed','App\\Models\\User',12,'{\"status\":\"success\",\"title\":\"Votre paiement est v\\u00e9rifi\\u00e9\",\"link\":\"http:\\/\\/localhost\\/order_details\\/89\"}',NULL,'2023-06-18 15:39:57','2023-06-18 15:39:57'),('c73f5f57-e694-4719-b60a-fae2b726207a','App\\Notifications\\orderCanceled','App\\Models\\User',2,'{\"status\":\"danger\",\"title\":\"Commande annul\\u00e9e\",\"link\":\"http:\\/\\/localhost\\/servers\"}','2023-06-19 02:35:15','2023-06-18 19:38:55','2023-06-19 02:35:15'),('d3f8d7e0-889f-478e-9913-922882177e91','App\\Notifications\\orderFinished','App\\Models\\User',12,'{\"status\":\"success\",\"title\":\"Commande termin\\u00e9e\",\"link\":\"http:\\/\\/localhost\\/order_details\\/89\"}',NULL,'2023-06-18 15:42:18','2023-06-18 15:42:18'),('d692f429-738e-40e3-a6c4-99607c963a76','App\\Notifications\\orderFinished','App\\Models\\User',13,'{\"status\":\"success\",\"title\":\"Commande termin\\u00e9e\",\"link\":\"http:\\/\\/localhost\\/order_details\\/91\"}',NULL,'2023-06-18 21:36:19','2023-06-18 21:36:19'),('d70c13ad-f920-4783-aa6c-0c0c4ac459b4','App\\Notifications\\newOrder','App\\Models\\User',1,'{\"status\":\"success\",\"title\":\"Nouveau command\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/orders\\/97\"}',NULL,'2023-06-21 22:08:53','2023-06-21 22:08:53'),('d78b201c-b1f7-4bc6-80a3-eee42495efdf','App\\Notifications\\newOrder','App\\Models\\User',1,'{\"status\":\"success\",\"title\":\"Nouveau command\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/orders\\/95\"}',NULL,'2023-06-19 20:28:59','2023-06-19 20:28:59'),('db0a3b25-f60a-4b84-beee-7db34d81d820','App\\Notifications\\newOrder','App\\Models\\User',1,'{\"status\":\"success\",\"title\":\"Nouveau command\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/orders\\/104\"}',NULL,'2023-06-23 08:37:17','2023-06-23 08:37:17'),('e44e6cfd-9cb4-4f47-9072-866b31288117','App\\Notifications\\newUser','App\\Models\\User',1,'{\"status\":\"success\",\"title\":\"Nouvel utilisateur\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/users\\/16\"}','2023-06-19 13:37:22','2023-06-18 23:47:30','2023-06-19 13:37:22'),('e4f4c761-c614-41fc-afdd-8df5193fdf8d','App\\Notifications\\newUser','App\\Models\\User',4,'{\"status\":\"success\",\"title\":\"Nouvel utilisateur\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/users\\/12\"}',NULL,'2023-06-18 14:13:08','2023-06-18 14:13:08'),('e6ef6a70-90b9-4ef0-a67f-7088da3b652c','App\\Notifications\\newOrder','App\\Models\\User',1,'{\"status\":\"success\",\"title\":\"Nouvel order\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/orders?88\"}','2023-06-19 13:37:22','2023-06-18 01:37:22','2023-06-19 13:37:22'),('eab756a0-0bcd-4f13-ab27-55650558011b','App\\Notifications\\newOrder','App\\Models\\User',4,'{\"status\":\"success\",\"title\":\"Nouveau command\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/orders\\/100\"}',NULL,'2023-06-22 12:05:47','2023-06-22 12:05:47'),('eed2e2c1-6d22-42b0-a9db-76f1d0689e32','App\\Notifications\\newOrder','App\\Models\\User',4,'{\"status\":\"success\",\"title\":\"Nouveau command\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/orders\\/98\"}',NULL,'2023-06-21 22:13:54','2023-06-21 22:13:54'),('efc06c89-2194-4532-b5a7-1658bb936121','App\\Notifications\\newOrder','App\\Models\\User',4,'{\"status\":\"success\",\"title\":\"Nouveau command\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/orders\\/104\"}',NULL,'2023-06-23 08:37:17','2023-06-23 08:37:17'),('f17a367d-e774-4db2-936d-6a5318c9a4d9','App\\Notifications\\newOrder','App\\Models\\User',1,'{\"status\":\"success\",\"title\":\"Nouveau command\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/orders\\/90\"}','2023-06-19 13:37:22','2023-06-18 20:41:48','2023-06-19 13:37:22'),('f52f3c96-5b0b-4643-8a71-4ee4df66b4dd','App\\Notifications\\newOrder','App\\Models\\User',1,'{\"status\":\"success\",\"title\":\"Nouveau command\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/orders\\/94\"}',NULL,'2023-06-19 16:41:10','2023-06-19 16:41:10'),('fbb25425-58c2-405b-9676-727ab4ee2361','App\\Notifications\\newOrder','App\\Models\\User',4,'{\"status\":\"success\",\"title\":\"Nouveau command\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/orders\\/91\"}',NULL,'2023-06-18 21:03:08','2023-06-18 21:03:08'),('fd756f7a-36f9-4138-bdca-f7151f5176b6','App\\Notifications\\newOrder','App\\Models\\User',4,'{\"status\":\"success\",\"title\":\"Nouveau command\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/orders\\/103\"}',NULL,'2023-06-23 08:36:37','2023-06-23 08:36:37'),('fdbb1653-956c-4198-b290-9f2202bfd3a0','App\\Notifications\\OrderReadyForShipping','App\\Models\\User',4,'{\"status\":\"success\",\"title\":\"Commande pr\\u00eate \\u00e0 \\u00eatre livr\\u00e9e\",\"link\":\"http:\\/\\/localhost\\/dashboard\\/orders\\/88\"}',NULL,'2023-06-18 12:01:33','2023-06-18 12:01:33');
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `offers`
--

DROP TABLE IF EXISTS `offers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `offers` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `quantity` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `game_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discord` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'new',
  `user_id` int unsigned DEFAULT NULL,
  `server_id` int unsigned DEFAULT NULL,
  `payment` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `payment_info` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `offers`
--

LOCK TABLES `offers` WRITE;
/*!40000 ALTER TABLE `offers` DISABLE KEYS */;
INSERT INTO `offers` VALUES (1,'45','499.5','ceewcwc','Adminecce','admin@admin.com','wedwewedw','new',1,1,'cih','2023-06-21 17:21:09','2023-06-21 17:21:09',NULL,'2323323323'),(2,'1000','11100','ceewcwc','Adminecce','admin@admin.com','wedwewedw','new',1,1,'cih','2023-06-21 17:21:22','2023-06-21 17:21:22',NULL,'2323323323'),(3,'1000','11100','ceewcwc','Adminecce','admin@admin.com','wedwewedw','new',1,1,'cih','2023-06-21 17:25:27','2023-06-21 17:25:27',NULL,'2323323323'),(4,'3','3','aaaaaa','Adminaaa','admin@admin.com','222222','new',1,1,'paypal','2023-06-21 17:36:44','2023-06-21 17:36:44',NULL,'medoukalla@gmail.com'),(8,'3','33.3','aaaaaa','Adminaaa','admin@admin.com','222222','new',1,1,'cih','2023-06-21 17:39:21','2023-06-21 17:39:21',NULL,NULL),(9,'3','33.3','aaaaaa','Adminaaa','admin@admin.com','222222','new',1,1,'cih','2023-06-21 20:29:01','2023-06-21 20:29:01',NULL,NULL),(10,'46','184','xwexwe','Client','client@gmail.com','discrd333','paye',2,4,'cih','2023-06-21 20:35:24','2023-06-21 20:35:24',NULL,'342342342342');
/*!40000 ALTER TABLE `offers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `quantity` int DEFAULT NULL,
  `price` double DEFAULT NULL,
  `total` double DEFAULT NULL,
  `bonus` int DEFAULT NULL,
  `payment_verified` int DEFAULT NULL,
  `game_id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payed` int unsigned NOT NULL,
  `facturer` int unsigned NOT NULL,
  `liviser` int unsigned NOT NULL,
  `delivered` int unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `server_id` int NOT NULL,
  `pack_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `order_completed` int unsigned NOT NULL,
  `payment_method` int DEFAULT NULL,
  `facturation_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facturation_discrod` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facturation_email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facturation_code` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facturation_city` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facturation_phone` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facturation_agree` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (76,500,4.9,2450,3750000,1,'HST132',1,0,0,0,'2023-06-03 20:46:35','2023-06-03 20:46:41',NULL,2,4,2,0,5,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(77,500,1.2,600,3750000,1,'marwan',1,0,0,0,'2023-06-03 22:08:07','2023-06-03 22:08:29',NULL,1,4,2,0,11,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(78,500,1.2,600,3750000,1,'dkjwnkwj',1,1,1,1,'2023-06-05 15:41:05','2023-06-08 09:42:59',NULL,1,4,2,0,1,'Med','med#1234','client@gmail.com','360669','Casablanca','0616782839','1'),(79,500,4.9,2450,3750000,1,'akmakm',1,0,0,0,'2023-06-08 09:46:35','2023-06-08 09:46:40',NULL,2,4,2,0,12,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(80,5,4.9,24.5,37500,1,'akjanjka',1,0,0,0,'2023-06-08 09:47:30','2023-06-08 09:47:34',NULL,2,2,2,0,11,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(81,500,4.9,2450,3750000,1,'aaaaa',1,1,1,1,'2023-06-08 09:48:17','2023-06-08 10:16:40',NULL,2,4,2,0,1,'amamam','amamam#1223','medoukalla@gmail.com','976199','Casablanca','0616782839','1'),(82,5,4.9,24.5,37500,1,'aaah',1,1,1,0,'2023-06-08 10:50:26','2023-06-10 19:35:14',NULL,2,2,2,0,8,'Mohamed Oukalla','ajaj#3828','medoukalla@gmail.com','944242','Casablanca','0616782839','1'),(83,500,4.9,2450,3750000,1,'USER',1,1,1,1,'2023-06-09 12:19:47','2023-06-10 13:58:38',NULL,2,4,2,0,10,'User name','user#1111','client@gmail.com','715394','Kech','555555','1'),(84,5,4.9,24.5,37500,1,'hwbh',1,1,1,1,'2023-06-10 12:07:48','2023-06-10 13:04:39',NULL,2,2,2,0,11,'Med','disc#2122','client@gmail.com','609008','Casablanca','0616782839','1'),(85,5,4.9,24.5,37500,1,'user',1,0,0,0,'2023-06-18 00:49:02','2023-06-18 00:51:07',NULL,2,2,2,0,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(88,500,4.9,2450,3750000,1,'hgjhg',1,1,1,1,'2023-06-18 01:37:22','2023-06-18 12:26:50',NULL,2,4,2,0,1,'Mohamed Oukalla','ads#1212','medoukalla@gmail.com','685483','Casablanca','0616782839','1'),(89,500,4.9,2450,3750000,1,'sjkwn',1,1,1,1,'2023-06-18 14:15:29','2023-06-18 15:42:15',NULL,2,4,12,0,1,'Mohamed Oukalla','aaa#1111','medoukalla@gmail.com','459531','Casablanca','0616782839','1'),(90,500,1.2,600,3750000,0,'jndjen',0,0,0,0,'2023-06-18 20:41:48','2023-06-18 20:41:48',NULL,4,4,13,0,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(91,500,1.9,950,3750000,1,'hshhs',1,1,1,1,'2023-06-18 21:03:08','2023-06-18 21:36:17',NULL,3,4,13,0,1,'Mohamed Oukalla','sgsg#1234','medoukalla@gmail.com','255412','Casablanca','0616782839','1'),(92,100,1.9,190,5000000,1,'dwed',1,0,0,0,'2023-06-19 02:40:49','2023-06-19 02:41:14',NULL,3,3,2,0,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(93,500,1.2,600,3750000,1,'wedw',1,0,0,0,'2023-06-19 05:37:47','2023-06-19 05:45:28',NULL,4,4,2,0,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(94,500,1.9,950,3750000,1,'game12',1,0,0,0,'2023-06-19 16:41:10','2023-06-19 16:41:14',NULL,3,4,2,0,12,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(95,500,1.9,950,3750000,0,'HST132',1,0,0,0,'2023-06-19 20:28:59','2023-06-19 20:29:09',NULL,3,4,2,0,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(96,100,1.9,190,5000000,0,'aaaa',1,0,0,0,'2023-06-19 20:31:47','2023-06-19 20:31:58',NULL,3,3,2,0,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(97,500,1.2,600,3750000,0,'swsq',0,0,0,0,'2023-06-21 22:08:53','2023-06-21 22:08:53',NULL,1,4,2,0,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(98,500,4.9,2450,3750000,0,'erere',0,0,0,0,'2023-06-21 22:13:54','2023-06-21 22:13:54',NULL,2,4,2,0,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(99,500,1.2,600,3750000,0,'xwqx',1,0,0,0,'2023-06-22 01:17:15','2023-06-22 01:17:28',NULL,1,4,2,0,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(100,500,1.2,600,3750000,0,'HST132',1,0,0,0,'2023-06-22 12:05:47','2023-06-22 12:06:05',NULL,1,4,2,0,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(101,100,1.2,120,5000000,0,'fddfgdf',0,0,0,0,'2023-06-23 02:43:46','2023-06-23 02:43:46',NULL,4,3,2,0,13,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(102,100,1.2,120,5000000,0,'swd',0,0,0,0,'2023-06-23 08:31:16','2023-06-23 08:31:16',NULL,4,3,2,0,10,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(103,100,1.2,120,5000000,1,'wfewfe',1,0,0,0,'2023-06-23 08:36:37','2023-06-23 08:36:42',NULL,4,3,2,0,12,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(104,2,1.9,3.8,50000,0,'asxsx',1,0,0,0,'2023-06-23 08:37:17','2023-06-23 08:37:22',NULL,3,1,2,0,9,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `packs`
--

DROP TABLE IF EXISTS `packs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `packs` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `quantity` int unsigned DEFAULT NULL,
  `active` int unsigned DEFAULT '1',
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bonus` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `packs`
--

LOCK TABLES `packs` WRITE;
/*!40000 ALTER TABLE `packs` DISABLE KEYS */;
INSERT INTO `packs` VALUES (1,2,1,'2 M','2.50',NULL,'2023-03-27 23:57:56'),(2,5,1,'5 M','0.75',NULL,'2023-03-27 23:58:04'),(3,100,1,'100 M','5.00','2023-03-28 00:53:47','2023-04-02 01:00:23'),(4,500,1,'500M','0.75','2023-05-07 12:39:29','2023-05-07 12:39:29');
/*!40000 ALTER TABLE `packs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('client@gmail.com','$2y$10$WXmZ.zIhKWCB1CmwEhwn/OdOwG7fd57UUxR5sDSzZGneguyiED8GS','2023-06-21 00:47:25'),('user@gmail.com','$2y$10$m1Fsa/xJ0WpAlNu9hrPz7OE/tKyRBQ2ZJVBgFZ4HGWtCRSKG971zm','2023-06-21 10:15:56');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `payments` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fees` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payments`
--

LOCK TABLES `payments` WRITE;
/*!40000 ALTER TABLE `payments` DISABLE KEYS */;
INSERT INTO `payments` VALUES (1,'cih','payments/March2023/CJJJonobnO5jn2c2UiPw.png',1,'2023-03-28 01:28:24','2023-04-25 14:54:46','0'),(4,'skrill','payments/June2023/qOtYq9rnRzEN3m8dm4qv.png',1,'2023-06-02 15:36:49','2023-06-02 15:36:49','2.7'),(5,'mastercard','payments/June2023/WPKLy7GQVW6LujR0Sr6g.png',1,'2023-06-02 15:37:36','2023-06-02 15:37:36','2.8'),(6,'visa','payments/June2023/bnPWMKTlPTWHk0UW7YDY.png',1,'2023-06-02 15:38:10','2023-06-02 15:38:10','2.8'),(7,'lydia','payments/June2023/Z6abT6gSFZ9k5loij6W4.png',1,'2023-06-02 15:38:43','2023-06-02 15:38:43','0'),(8,'usdt','payments/June2023/aNf5xknXkj5xOTeIFeFs.png',1,'2023-06-02 15:39:24','2023-06-02 15:39:24','1'),(9,'bitcoin','payments/June2023/yzZ451TdVnpATzKfCxVj.png',1,'2023-06-02 15:40:09','2023-06-23 08:22:45','1'),(10,'giropay','payments/June2023/7JOLIzDxbXZdW0UqnhaQ.png',1,'2023-06-02 15:41:06','2023-06-02 15:41:06','2.8'),(11,'ideal','payments/June2023/tFjG0WJGXgiM6PSfUYN4.png',1,'2023-06-02 15:41:42','2023-06-02 15:41:42','2.8'),(12,'bancontact','payments/June2023/9fYSlZeqJpkfzGhWppXQ.png',1,'2023-06-02 15:42:23','2023-06-02 15:42:23','2.8'),(13,'paypal',NULL,0,'2023-06-23 02:40:09','2023-06-23 03:42:45','1'),(14,'stripe',NULL,1,'2023-06-23 03:41:16','2023-06-23 03:41:16','2');
/*!40000 ALTER TABLE `payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permission_role` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` VALUES (1,1),(1,2),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(30,1),(31,1),(32,1),(33,1),(34,1),(35,1),(36,1),(37,1),(40,1),(51,1),(52,1),(53,1),(54,1),(55,1),(56,1),(57,1),(58,1),(59,1),(60,1),(61,1),(62,1),(63,1),(64,1),(65,1),(66,1),(67,1),(68,1),(69,1),(70,1),(86,1),(87,1),(88,1),(89,1),(90,1),(91,1),(92,1),(93,1),(94,1),(95,1),(96,1),(97,1),(98,1),(99,1),(100,1),(101,1),(102,1),(103,1),(104,1),(105,1),(106,1),(107,1),(108,1),(109,1),(110,1);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_key_index` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'browse_admin',NULL,'2023-02-17 09:33:11','2023-02-17 09:33:11'),(2,'browse_bread',NULL,'2023-02-17 09:33:12','2023-02-17 09:33:12'),(3,'browse_database',NULL,'2023-02-17 09:33:12','2023-02-17 09:33:12'),(4,'browse_media',NULL,'2023-02-17 09:33:12','2023-02-17 09:33:12'),(5,'browse_compass',NULL,'2023-02-17 09:33:12','2023-02-17 09:33:12'),(6,'browse_menus','menus','2023-02-17 09:33:12','2023-02-17 09:33:12'),(7,'read_menus','menus','2023-02-17 09:33:12','2023-02-17 09:33:12'),(8,'edit_menus','menus','2023-02-17 09:33:12','2023-02-17 09:33:12'),(9,'add_menus','menus','2023-02-17 09:33:12','2023-02-17 09:33:12'),(10,'delete_menus','menus','2023-02-17 09:33:12','2023-02-17 09:33:12'),(16,'browse_users','users','2023-02-17 09:33:12','2023-02-17 09:33:12'),(17,'read_users','users','2023-02-17 09:33:12','2023-02-17 09:33:12'),(18,'edit_users','users','2023-02-17 09:33:12','2023-02-17 09:33:12'),(19,'add_users','users','2023-02-17 09:33:12','2023-02-17 09:33:12'),(20,'delete_users','users','2023-02-17 09:33:12','2023-02-17 09:33:12'),(21,'browse_settings','settings','2023-02-17 09:33:12','2023-02-17 09:33:12'),(22,'read_settings','settings','2023-02-17 09:33:12','2023-02-17 09:33:12'),(23,'edit_settings','settings','2023-02-17 09:33:12','2023-02-17 09:33:12'),(24,'add_settings','settings','2023-02-17 09:33:12','2023-02-17 09:33:12'),(25,'delete_settings','settings','2023-02-17 09:33:12','2023-02-17 09:33:12'),(26,'browse_maps','maps','2023-02-17 10:15:52','2023-02-17 10:15:52'),(27,'read_maps','maps','2023-02-17 10:15:52','2023-02-17 10:15:52'),(28,'edit_maps','maps','2023-02-17 10:15:52','2023-02-17 10:15:52'),(29,'add_maps','maps','2023-02-17 10:15:52','2023-02-17 10:15:52'),(30,'delete_maps','maps','2023-02-17 10:15:52','2023-02-17 10:15:52'),(31,'browse_servers','servers','2023-02-17 10:26:06','2023-02-17 10:26:06'),(32,'read_servers','servers','2023-02-17 10:26:06','2023-02-17 10:26:06'),(33,'edit_servers','servers','2023-02-17 10:26:06','2023-02-17 10:26:06'),(34,'add_servers','servers','2023-02-17 10:26:06','2023-02-17 10:26:06'),(35,'delete_servers','servers','2023-02-17 10:26:06','2023-02-17 10:26:06'),(36,'browse_orders','orders','2023-02-17 11:27:09','2023-02-17 11:27:09'),(37,'read_orders','orders','2023-02-17 11:27:09','2023-02-17 11:27:09'),(38,'edit_orders','orders','2023-02-17 11:27:09','2023-02-17 11:27:09'),(39,'add_orders','orders','2023-02-17 11:27:09','2023-02-17 11:27:09'),(40,'delete_orders','orders','2023-02-17 11:27:09','2023-02-17 11:27:09'),(51,'browse_sell_servers','sell_servers','2023-02-17 19:40:11','2023-02-17 19:40:11'),(52,'read_sell_servers','sell_servers','2023-02-17 19:40:11','2023-02-17 19:40:11'),(53,'edit_sell_servers','sell_servers','2023-02-17 19:40:11','2023-02-17 19:40:11'),(54,'add_sell_servers','sell_servers','2023-02-17 19:40:11','2023-02-17 19:40:11'),(55,'delete_sell_servers','sell_servers','2023-02-17 19:40:11','2023-02-17 19:40:11'),(56,'browse_packs','packs','2023-03-26 17:22:41','2023-03-26 17:22:41'),(57,'read_packs','packs','2023-03-26 17:22:41','2023-03-26 17:22:41'),(58,'edit_packs','packs','2023-03-26 17:22:41','2023-03-26 17:22:41'),(59,'add_packs','packs','2023-03-26 17:22:41','2023-03-26 17:22:41'),(60,'delete_packs','packs','2023-03-26 17:22:41','2023-03-26 17:22:41'),(61,'browse_questions','questions','2023-03-27 00:50:46','2023-03-27 00:50:46'),(62,'read_questions','questions','2023-03-27 00:50:46','2023-03-27 00:50:46'),(63,'edit_questions','questions','2023-03-27 00:50:46','2023-03-27 00:50:46'),(64,'add_questions','questions','2023-03-27 00:50:46','2023-03-27 00:50:46'),(65,'delete_questions','questions','2023-03-27 00:50:46','2023-03-27 00:50:46'),(66,'browse_payments','payments','2023-03-28 01:22:04','2023-03-28 01:22:04'),(67,'read_payments','payments','2023-03-28 01:22:04','2023-03-28 01:22:04'),(68,'edit_payments','payments','2023-03-28 01:22:04','2023-03-28 01:22:04'),(69,'add_payments','payments','2023-03-28 01:22:04','2023-03-28 01:22:04'),(70,'delete_payments','payments','2023-03-28 01:22:04','2023-03-28 01:22:04'),(86,'browse_roles','roles','2023-04-02 14:07:20','2023-04-02 14:07:20'),(87,'read_roles','roles','2023-04-02 14:07:20','2023-04-02 14:07:20'),(88,'edit_roles','roles','2023-04-02 14:07:20','2023-04-02 14:07:20'),(89,'add_roles','roles','2023-04-02 14:07:20','2023-04-02 14:07:20'),(90,'delete_roles','roles','2023-04-02 14:07:20','2023-04-02 14:07:20'),(91,'browse_exchanges','exchanges','2023-04-08 00:26:03','2023-04-08 00:26:03'),(92,'read_exchanges','exchanges','2023-04-08 00:26:03','2023-04-08 00:26:03'),(93,'edit_exchanges','exchanges','2023-04-08 00:26:03','2023-04-08 00:26:03'),(94,'add_exchanges','exchanges','2023-04-08 00:26:03','2023-04-08 00:26:03'),(95,'delete_exchanges','exchanges','2023-04-08 00:26:03','2023-04-08 00:26:03'),(96,'browse_messages','messages','2023-06-02 10:46:53','2023-06-02 10:46:53'),(97,'read_messages','messages','2023-06-02 10:46:53','2023-06-02 10:46:53'),(98,'edit_messages','messages','2023-06-02 10:46:53','2023-06-02 10:46:53'),(99,'add_messages','messages','2023-06-02 10:46:53','2023-06-02 10:46:53'),(100,'delete_messages','messages','2023-06-02 10:46:53','2023-06-02 10:46:53'),(101,'browse_emails','emails','2023-06-19 02:57:32','2023-06-19 02:57:32'),(102,'read_emails','emails','2023-06-19 02:57:32','2023-06-19 02:57:32'),(103,'edit_emails','emails','2023-06-19 02:57:32','2023-06-19 02:57:32'),(104,'add_emails','emails','2023-06-19 02:57:32','2023-06-19 02:57:32'),(105,'delete_emails','emails','2023-06-19 02:57:32','2023-06-19 02:57:32'),(106,'browse_offers','offers','2023-06-21 15:03:25','2023-06-21 15:03:25'),(107,'read_offers','offers','2023-06-21 15:03:25','2023-06-21 15:03:25'),(108,'edit_offers','offers','2023-06-21 15:03:25','2023-06-21 15:03:25'),(109,'add_offers','offers','2023-06-21 15:03:25','2023-06-21 15:03:25'),(110,'delete_offers','offers','2023-06-21 15:03:25','2023-06-21 15:03:25');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `questions` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `active` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (1,'global question?','Lorem Ipsum is simply dummy text of the printing and typesetting ind ustry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s',1,'2023-03-27 00:51:55','2023-03-27 00:51:55'),(2,'global question 2 ?','Lorem Ipsum is simply dummy text of the printing and typesetting ind ustry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s',1,'2023-03-27 00:52:07','2023-03-27 00:52:07'),(3,'global question 3 ?','Lorem Ipsum is simply dummy text of the printing and typesetting ind ustry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s',1,'2023-03-27 00:52:14','2023-03-27 00:52:14'),(4,'global question 4 ?','Lorem Ipsum is simply dummy text of the printing and typesetting ind ustry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s',1,'2023-03-27 00:52:22','2023-03-27 00:52:22'),(5,'global question 5 ?','Lorem Ipsum is simply dummy text of the printing and typesetting ind ustry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s',1,'2023-03-27 00:52:29','2023-03-27 00:52:29'),(6,'global question 6 ?','Lorem Ipsum is simply dummy text of the printing and typesetting ind ustry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s',1,'2023-03-27 00:52:38','2023-03-27 00:52:38');
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','Administrator','2023-02-13 13:49:29','2023-02-13 13:49:29'),(2,'Client','Client','2023-02-17 09:33:11','2023-04-08 13:24:48');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sell_servers`
--

DROP TABLE IF EXISTS `sell_servers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sell_servers` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint unsigned NOT NULL DEFAULT '1',
  `map_id` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_skrill` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_mad` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `min` int unsigned DEFAULT NULL,
  `max` int unsigned DEFAULT NULL,
  `price_sell` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sell_servers`
--

LOCK TABLES `sell_servers` WRITE;
/*!40000 ALTER TABLE `sell_servers` DISABLE KEYS */;
INSERT INTO `sell_servers` VALUES (1,'Server A sell','1','sell-servers/March2023/zI6hoSWKzBYgbWDTiwe1.png',1,'classique','1.1','11.1',NULL,'2023-06-22 17:55:47',NULL,10,100,'1.25'),(2,'Server B sell','2','sell-servers/March2023/uKqdCwEK3Y7f6itzwSoV.png',1,'touch','2.2','22.2',NULL,'2023-06-22 17:56:02',NULL,20,200,'2.3'),(3,'Server B sell','3','sell-servers/March2023/bkw794UkfhrXlv5aqSIT.png',1,'retro','3.3','33.3',NULL,'2023-06-22 17:56:17',NULL,30,300,'3.5'),(4,'Sell b1','4',NULL,1,'retro','4.4','44.4',NULL,'2023-06-22 17:56:25',NULL,40,400,'5');
/*!40000 ALTER TABLE `sell_servers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `server_pack`
--

DROP TABLE IF EXISTS `server_pack`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `server_pack` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `server_id` int DEFAULT NULL,
  `pack_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `server_pack`
--

LOCK TABLES `server_pack` WRITE;
/*!40000 ALTER TABLE `server_pack` DISABLE KEYS */;
INSERT INTO `server_pack` VALUES (1,1,1,NULL,NULL),(2,2,1,NULL,NULL),(3,3,1,NULL,NULL),(4,2,2,NULL,NULL),(5,1,3,NULL,NULL),(6,3,3,NULL,NULL),(7,4,2,NULL,NULL),(8,4,3,NULL,NULL),(9,2,4,NULL,NULL),(10,4,4,NULL,NULL),(11,1,4,NULL,NULL),(12,3,4,NULL,NULL);
/*!40000 ALTER TABLE `server_pack` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servers`
--

DROP TABLE IF EXISTS `servers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `servers` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint unsigned NOT NULL DEFAULT '1',
  `map_id` int DEFAULT NULL,
  `price_euro` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `min_quantity` int unsigned DEFAULT NULL,
  `price_buy` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `max_quantity` int DEFAULT NULL,
  `price_cad` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_mad` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servers`
--

LOCK TABLES `servers` WRITE;
/*!40000 ALTER TABLE `servers` DISABLE KEYS */;
INSERT INTO `servers` VALUES (1,'Draconiros','1.2','servers/February2023/UvSNRRBXVqJ2kIqf9SMs.jpg',1,1,'1.3',20,'1.2',NULL,'2023-06-08 10:42:06',50,'2','14'),(2,'HellMina','4.9','servers/February2023/8ygUPF2HOOm9YwowLb7v.jpeg',1,3,'5.3',100,'3',NULL,'2023-06-08 10:42:20',999,'8','55'),(3,'Imagiro','1.9','servers/February2023/8pEsneuqKZOHqFJrbzYp.jpeg',1,3,'2',52,'1',NULL,'2023-06-08 10:42:31',300,'3','23'),(4,'test','1.2','servers/May2023/wu5AtVkFeWzyOmnqSyUN.png',1,2,'1.3',50,'0.9','2023-05-07 12:38:23','2023-06-08 10:41:57',900,'2','14');
/*!40000 ALTER TABLE `servers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('CfeLCD8LJX5wjkgSjqTpMQTu3dAH9buRnHX2zt5W',2,'172.23.0.1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiejl1aVJoeUV6dmRYb1huNE05aHpmbWY0eHJxalIzaTY3THNWTDVCViI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHA6Ly9sb2NhbGhvc3Qvc2VydmVycyI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==',1687509531),('l99ET0fSOj0Rsmydc0BEzKp5lzuiLswvFCoovMEe',NULL,'172.23.0.1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','YToyOntzOjY6Il90b2tlbiI7czo0MDoiY3FDQUxqNTRERWRDS1BGb2tycXBaVVY4R29YSDBENlE2QlF4QUJvVyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1687508234),('sYNxZIkmBaMYqJZg3rf16Dd8orUrKVSBlHpCsA9o',1,'172.23.0.1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','YTo1OntzOjY6Il90b2tlbiI7czo0MDoiY3hVQTF2N3VPNmdJSElSVTZpQkc1aHlSc2x2VkIyY2pMVkxaZW5hSCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNjoiaHR0cDovL2xvY2FsaG9zdC9kYXNoYm9hcmQiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozNToiaHR0cDovL2xvY2FsaG9zdC9kYXNoYm9hcmQvcGF5bWVudHMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=',1687509531);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `settings` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int NOT NULL DEFAULT '1',
  `group` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'site.title','Site Title','KAMAAAA','','text',1,'Site'),(2,'site.description','Site Description','Welcome to KAMA website','','text',2,'Site'),(3,'site.logo','Site Logo','settings/February2023/C7qLmfoLxvArHv3xka6G.png','','image',3,'Site'),(4,'site.google_analytics_tracking_id','Google Analytics Tracking ID',NULL,'','text',26,'Site'),(5,'admin.bg_image','Admin Background Image','settings/June2023/p5AH3wNtfxcZGj1Bi3CZ.png','','image',5,'Admin'),(6,'admin.title','Admin Title','Kama','','text',1,'Admin'),(7,'admin.description','Admin Description','Welcome to KAMA.com','','text',2,'Admin'),(8,'admin.loader','Admin Loader','settings/February2023/EDQwpAGx1SRj91KfX6Qx.png','','image',4,'Admin'),(9,'admin.icon_image','Admin Icon Image','settings/February2023/b7XLjj7q4XyIFQ9EAS12.png','','image',3,'Admin'),(10,'admin.google_analytics_client_id','Google Analytics Client ID (used for admin dashboard)',NULL,'','text',1,'Admin'),(15,'titles.about','About page title','About us',NULL,'text',7,'titles'),(18,'titles.sell','Sell page title','Sell your kama',NULL,'text',9,'titles'),(19,'titles.buy','Buy page title','Buy to kama',NULL,'text',10,'titles'),(20,'titles.homepage','Home page title','Welcome to KAMA',NULL,'text',11,'titles'),(21,'titles.maps','Maps page title','Choose map',NULL,'text',12,'titles'),(22,'titles.servers','Servers page title','Choose server',NULL,'text',13,'titles'),(23,'titles.faq','FAQ page titles','FAQ',NULL,'text',14,'titles'),(24,'titles.terms','Terms page title','Terms of service',NULL,'text',15,'titles'),(25,'titles.policy','Policy page title','Private policy',NULL,'text',16,'titles'),(26,'titles.exchange','Exchange page title','Exchange your kama between games',NULL,'text',17,'titles'),(27,'social.facebook','Facebook url','facebook.com',NULL,'text',18,'social'),(28,'social.instagram','Instagram url','instagram.com',NULL,'text',19,'social'),(29,'social.twitter','Twitter url','twitter.com',NULL,'text',20,'social'),(30,'social.discord','Discord url','discord.com/invite=dwklkwej',NULL,'text',21,'social'),(31,'social.youtube','Youtube url','youtube.com',NULL,'text',22,'social'),(32,'payments.paypal','Paypal','1','{\r\n    \"default\" : \"1\",\r\n    \"options\" : {\r\n        \"1\": \"Active\",\r\n        \"0\": \"Inactive\"\r\n    }\r\n}','select_dropdown',23,'payments'),(33,'payments.stripe','Stripe','1','{\r\n    \"default\" : \"1\",\r\n    \"options\" : {\r\n        \"1\": \"Active\",\r\n        \"0\": \"Inactive\"\r\n    }\r\n}','select_dropdown',24,'payments'),(34,'payments.cih','CIH','1','{\r\n    \"default\" : \"1\",\r\n    \"options\" : {\r\n        \"1\": \"Active\",\r\n        \"0\": \"Inactive\"\r\n    }\r\n}','select_dropdown',25,'payments'),(35,'site.terms','Terms of service','<h1>CONDITIONS G&Eacute;N&Eacute;RAL D\'UTILISATION &amp; POLITIQUE DE CONFIDENTIALIT&Eacute;</h1>\r\n<p>A Terms of Service, or TOS, is a set of rules that a user must agree to before they can engage in services or use a product. It can also serve as a disclaimer under certain conditions, such as for website use. A properly executed Terms of Service may be legally binding for both parties.</p>\r\n<p>A Terms of Service agreement usually has many different sections, such as definitions, user rights and responsibilities, and disclaimers. Terms of Service can change often, and they will need to be re-accepted as changes are made to the agreement.</p>\r\n<p>It is important to any company or business to include as much information as possible in their Terms of Service to avoid problems in the future. Getting legal counsel for the Terms of Service can ensure no major points have been missed and that the Terms of Service is legally binding to users.</p>\r\n<hr>\r\n<div class=\"row\">\r\n<div class=\"head-term-state-what-is-section col-12 col-md-offset-1\">\r\n<div class=\"document-contents editable\">\r\n<h1 id=\"What-Are-Terms-of-Service\"><strong><u>What Are Terms of Service?</u></strong></h1>\r\n<p><img src=\"https://formswift.com/seo-pages-assets/images/couch/picture47.png\" alt=\"what are terms of service\" loading=\"lazy\"></p>\r\n<p>Terms of service perform two essential functions. The first is to educate your customers on the rules of using your products and services. The second is to&nbsp;<a href=\"https://formswift.com/release-of-liability\">protect your company from lawsuits&nbsp;</a>. The TOS is a simple enough document to draw up, whether you&rsquo;re using a free terms of service generator or working from a sample. Terms of service should be one of the first documents issued to your clients, and you should be sure to get it read and signed by each client before proceeding with their business.</p>\r\n<p><strong>Part One - Language</strong></p>\r\n<p>A TOS starts off by familiarizing the reader with the terms that will be used throughout the document. Generally these terms are fairly, well, general ones, such as &ldquo;Terms,&rdquo; &ldquo;Services,&rdquo; &ldquo;The Company,&rdquo; etc.</p>\r\n<p><strong>Part Two &ndash; Rules of the Road.</strong></p>\r\n<p>The TOS then goes on to outline the rights and responsibilities of the user. The key to this section is to keep it short and sweet while including all relevant detail. The best approach is to tell your client what they can&rsquo;t do rather than what they can do. Omission is more illustrative than inclusion. Plus, it&rsquo;s a good idea to keep the TOS as short as possible so people actually them.</p>\r\n<p><strong>Part Three &ndash; What Is and Is Not Your Company&rsquo;s Fault</strong></p>\r\n<p>Limit your liabilities. Limit them as much as you can, and make their limits clear. For example:</p>\r\n<p><em>TO THE MAXIMUM EXTENT PERMITTED BY LAW, ARTHUR MACARTHUR, INC. SHALL NOT BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, CONSEQUENTIAL, OR SPECIAL DAMAGES OR LOSSES, WHETHER TANGIBLE OR INTANGIBLE, RESULTING FROM AUTHORIZED OR UNAUTHORIZED USE OF OR ACCESS TO OUR PRODUCTS</em></p>\r\n<p>You also might want to include a disclaimer or return policy, particularly if you&rsquo;re in the retail business. This protects you from customers blaming you for damaged goods:</p>\r\n<p><em>SUPERDUPER, INC. IS NOT RESPONSIBLE FOR THE CONDITIONS OF ITS MERCHANDISE. THE COMPANY SELLS ALL ITS MERCHANDISE ON AN &ldquo;AS IS&rdquo; BASIS AND ASSUMES NO LIABILITY OR RESPONSIBILITY FOR ANY DAMAGES INCURRED IN THE TRANSFER OR USE OF OUR PRODUCTS BY YOU OR ANY THIRD PARTY.</em></p>\r\n<p><strong>Part Four &ndash; Verification</strong></p>\r\n<p>Put a statement at the end like, &ldquo;I have read and agreed to abide by PenDragonPencil&rsquo;s Terms of Service.&rdquo; If you&rsquo;re issuing a paper TOS, follow this with a place for the user to print his or her name and sign and date the form provide instructions as to how the document should be returned to the company. If your TOS is online, you can just have the user insert his or her initials and hit the &ldquo;I Agree&rdquo; button.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"row\">\r\n<div class=\"head-term-state-what-is-section col-12 col-md-offset-1\">\r\n<div class=\"legal-considerations editable\">\r\n<h1 id=\"Legal-Considerations-of-Terms-of-Service--\"><strong><u>Legal Considerations of Terms of Service&nbsp;</u></strong>&nbsp; &nbsp;</h1>\r\n<p><img src=\"https://formswift.com/seo-pages-assets/images/couch/picture48.gif\" alt=\"legal considerations of terms of service\" loading=\"lazy\">Terms of service. Also known as TOS. Who needs them? Who reads them? The answer is: everybody and nobody. It&rsquo;s a pity, too, that the answer to the second question there is &ldquo;nobody,&rdquo; because the TOS is one document every user should read. It is, after all, a legal document to which they are signing their name.</p>\r\n<p>So what do you do if you need to create a TOS? Since it is, after all, the official rules clients must follow when using your products and services, it is the stuff of lawsuits. You don&rsquo;t want to be too vague, too specific, too confusing or too brief.</p>\r\n<p>To help you navigate that pile of contradictions, here are a few tips for drawing up a TOS without coming to any legal harm.</p>\r\n<p><strong>Don&rsquo;t just copy and paste</strong></p>\r\n<p>Terms of service may seem pretty much the same across the board, but don&rsquo;t let the legalese&rsquo; samey-ness fool you. There are important distinctions hidden in each monolith of text. That said, it is generally okay to use a free terms of service template, also known as a terms and conditions template. These tools, often available for free on the web, let you put together your TOS part by. This means that your legalese is written for you, and allows you to cover all the bases.</p>\r\n<p><strong>Be thorough when defining protected content</strong></p>\r\n<p>A customer might understand that copying and pasting an article from your magazine goes against copyright, but he or she might not realize the logo is off limits. Be sure to define how every type of product and service may or may not be used.</p>\r\n<p><strong>Don&rsquo;t forget about user rights.</strong></p>\r\n<p>If you run a website, for example, to which users submit content, you&rsquo;ll need to include a clause explaining what you intend to do with that content. If, as is often the case, the&nbsp;<a href=\"https://formswift.com/privacy-policy\">user is relinquishing all rights&nbsp;</a>to the content he or she submits, you need to put tis in writing. &nbsp; &nbsp;&nbsp;</p>\r\n<p><strong>Don&rsquo;t have too much fun with the language</strong></p>\r\n<p>Writing for today&rsquo;s market, you need to strike that delicate balance between overly stiff, inscrutable language and language that is too casual for its own good. You want your customers to understand your terms of service. Moreover, you want them to get through the whole document! However, it&rsquo;s important not to shirk the necessary legalese. After all, your TOS is a binding contract.</p>\r\n<p>The key here is to use formal language but keep it short and sweet. Some companies even offer a plain-speech version &ndash; a sort of a launch pad into the document itself. These rewrites translate the terms of service into human English, but the signature part lies at the end of the actual document. Check out Google&rsquo;s approach to this problem, for example, or Pinterest&rsquo;s.</p>\r\n</div>\r\n</div>\r\n</div>',NULL,'rich_text_box',28,'Site'),(36,'site.policy','Private policy','<div class=\"row\">\r\n<div class=\"head-term-state-what-is-section col-12 col-md-offset-1\">\r\n<div class=\"legal-considerations editable\">\r\n<h1>CONDITIONS G&Eacute;N&Eacute;RALES DE VENTE</h1>\r\n<p><img src=\"https://formswift.com/seo-pages-assets/images/couch/picture48.gif\" alt=\"legal considerations of terms of service\" loading=\"lazy\">Terms of service. Also known as TOS. Who needs them? Who reads them? The answer is: everybody and nobody. It&rsquo;s a pity, too, that the answer to the second question there is &ldquo;nobody,&rdquo; because the TOS is one document every user should read. It is, after all, a legal document to which they are signing their name.</p>\r\n<p>So what do you do if you need to create a TOS? Since it is, after all, the official rules clients must follow when using your products and services, it is the stuff of lawsuits. You don&rsquo;t want to be too vague, too specific, too confusing or too brief.</p>\r\n<p>To help you navigate that pile of contradictions, here are a few tips for drawing up a TOS without coming to any legal harm.</p>\r\n<p><strong>Don&rsquo;t just copy and paste</strong></p>\r\n<p>Terms of service may seem pretty much the same across the board, but don&rsquo;t let the legalese&rsquo; samey-ness fool you. There are important distinctions hidden in each monolith of text. That said, it is generally okay to use a free terms of service template, also known as a terms and conditions template. These tools, often available for free on the web, let you put together your TOS part by. This means that your legalese is written for you, and allows you to cover all the bases.</p>\r\n<p><strong>Be thorough when defining protected content</strong></p>\r\n<p>A customer might understand that copying and pasting an article from your magazine goes against copyright, but he or she might not realize the logo is off limits. Be sure to define how every type of product and service may or may not be used.</p>\r\n<p><strong>Don&rsquo;t forget about user rights.</strong></p>\r\n<p>If you run a website, for example, to which users submit content, you&rsquo;ll need to include a clause explaining what you intend to do with that content. If, as is often the case, the&nbsp;<a href=\"https://formswift.com/privacy-policy\">user is relinquishing all rights&nbsp;</a>to the content he or she submits, you need to put tis in writing. &nbsp; &nbsp;&nbsp;</p>\r\n<p><strong>Don&rsquo;t have too much fun with the language</strong></p>\r\n<p>Writing for today&rsquo;s market, you need to strike that delicate balance between overly stiff, inscrutable language and language that is too casual for its own good. You want your customers to understand your terms of service. Moreover, you want them to get through the whole document! However, it&rsquo;s important not to shirk the necessary legalese. After all, your TOS is a binding contract.</p>\r\n<p>The key here is to use formal language but keep it short and sweet. Some companies even offer a plain-speech version &ndash; a sort of a launch pad into the document itself. These rewrites translate the terms of service into human English, but the signature part lies at the end of the actual document. Check out Google&rsquo;s approach to this problem, for example, or Pinterest&rsquo;s.</p>\r\n</div>\r\n</div>\r\n</div>',NULL,'rich_text_box',29,'Site'),(38,'site.currency','Website currency par default :','euro','{\n    \"default\" : \"euro\",\n    \"options\" : {\n        \"euro\": \"euro\",\n        \"usd\": \"usd\",\n        \"cad\": \"cad\",\n        \"mad\": \"mad\"\n    }\n}','select_dropdown',27,'Site'),(39,'site.procedure','Contenu de la procédure','<div class=\"row\">\r\n<div class=\"head-term-state-what-is-section col-md-7 col-md-offset-1\">\r\n<div class=\"legal-considerations editable\">\r\n<h1 id=\"Legal-Considerations-of-Terms-of-Service--\"><span style=\"color: rgb(224, 62, 45);\">Prosedure page content&nbsp;</span></h1>\r\ncontent is here</div>\r\n</div>\r\n</div>',NULL,'rich_text_box',30,'Site');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscription_items`
--

DROP TABLE IF EXISTS `subscription_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subscription_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `subscription_id` bigint unsigned NOT NULL,
  `stripe_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subscription_items_subscription_id_stripe_price_unique` (`subscription_id`,`stripe_price`),
  UNIQUE KEY `subscription_items_stripe_id_unique` (`stripe_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscription_items`
--

LOCK TABLES `subscription_items` WRITE;
/*!40000 ALTER TABLE `subscription_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscription_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscriptions`
--

DROP TABLE IF EXISTS `subscriptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subscriptions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `ends_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subscriptions_stripe_id_unique` (`stripe_id`),
  KEY `subscriptions_user_id_stripe_status_index` (`user_id`,`stripe_status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscriptions`
--

LOCK TABLES `subscriptions` WRITE;
/*!40000 ALTER TABLE `subscriptions` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscriptions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `translations`
--

DROP TABLE IF EXISTS `translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `translations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int unsigned NOT NULL,
  `locale` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `translations`
--

LOCK TABLES `translations` WRITE;
/*!40000 ALTER TABLE `translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_roles`
--

DROP TABLE IF EXISTS `user_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_roles` (
  `user_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `user_roles_user_id_index` (`user_id`),
  KEY `user_roles_role_id_index` (`role_id`),
  CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_roles`
--

LOCK TABLES `user_roles` WRITE;
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint unsigned DEFAULT '2',
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `stripe_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pm_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pm_last_four` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `game_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  KEY `users_stripe_id_index` (`stripe_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'Admin','admin@admin.com','users/default.png',NULL,'$2y$10$H9la1J4vKZrN6st9GoEQcuXc3tnHOP/c9WK4uJEsCe6EZxtmvxAHC',NULL,NULL,'2023-02-13 13:49:29','2023-06-21 12:18:52',NULL,NULL,NULL,NULL,NULL),(2,2,'Client','client@gmail.com','users/default.png',NULL,'$2y$10$IPyxSkElkbmTexQgzY0BX.A6qEw/AtkR.DrLFbWn5ENmnJrSsLiuq',NULL,'{\"locale\":\"en\"}','2023-04-01 13:24:42','2023-04-02 04:05:03',NULL,NULL,NULL,NULL,NULL),(4,1,'Oukalla Mohamed','medoukalla@gmail.com','users/default.png',NULL,'$2y$10$KZECpa.OCRUVij3SpuRK.OXbEl4PUpZ7cbyhXIQFX4EbEcZlbJG1i',NULL,NULL,'2023-06-17 14:38:46','2023-06-17 14:38:46',NULL,NULL,NULL,NULL,NULL),(5,2,'Oukalla Mohamed','medoukalla@gmail.fr','users/default.png',NULL,'$2y$10$HZ/F7F95A9XZix9TuIedouQ6zOgjlxJjNCvTkXp7JwpqUxJp.asO2',NULL,NULL,'2023-06-17 16:40:53','2023-06-17 16:40:53',NULL,NULL,NULL,NULL,NULL),(6,2,'Oukalla Mohamed','medoukalla@gmail.net','users/default.png',NULL,'$2y$10$4jNgsKa0UIoTzi3H.h1IxOWd857UxIvzc8G/XYP67KsuefAKROvDG',NULL,NULL,'2023-06-17 16:47:19','2023-06-17 16:47:19',NULL,NULL,NULL,NULL,NULL),(7,2,'User New','newuser@gmail.com','users/default.png',NULL,'$2y$10$EDpejFXx7PCeUQMrqBRVd.rUy.gpC60IsvxGaWZr/XniHsvhRqLLy',NULL,NULL,'2023-06-17 17:07:03','2023-06-17 17:07:03',NULL,NULL,NULL,NULL,NULL),(8,2,'User New','newuser2@gmail.fr','users/default.png',NULL,'$2y$10$AdAXev7uGLh2ANLhHZFcPuc9kvYDWaOXDUumMihJYs/O76B0v25E.',NULL,NULL,'2023-06-17 17:26:41','2023-06-17 17:26:41',NULL,NULL,NULL,NULL,NULL),(9,2,'User New','newuser3@gmail.fr','users/default.png',NULL,'$2y$10$PeBvLIvapQYQFTI9w4vTK.ox7mVetWbzriXfuzSTRJo4XKLf0MFmO',NULL,NULL,'2023-06-17 17:35:18','2023-06-17 17:35:18',NULL,NULL,NULL,NULL,NULL),(10,2,'User New','user@gmail.com','users/default.png',NULL,'$2y$10$gVgDh9phU47T905g1NyrmuEnmvpGECAcPP92lHX9ibax0V5gRWO26',NULL,NULL,'2023-06-18 14:08:54','2023-06-18 14:08:54',NULL,NULL,NULL,NULL,NULL),(12,2,'User New','user2@gmail.com','users/default.png',NULL,'$2y$10$DmR4R9QuoH0I37GzeWRj9.BMwc7ulytZXpdgt1nwadG9rKiNDYbYO',NULL,NULL,'2023-06-18 14:13:08','2023-06-18 14:13:08',NULL,NULL,NULL,NULL,NULL),(13,2,'user med','user55@gmail.com','users/default.png',NULL,'$2y$10$WiK05IidOzEfXumwIPasxu7Klcml5GViB24ISFfTYePUmRMciq4xC',NULL,NULL,'2023-06-18 20:35:04','2023-06-18 20:35:04',NULL,NULL,NULL,NULL,NULL),(14,2,'Oukalla Mohamed','edwedwe@gmail.com','users/default.png',NULL,'$2y$10$FdG1uiXgmDYh4oXCw8Ow9uS5m15S57bWnmBu751lMyOaYUKDv4Rhm',NULL,NULL,'2023-06-18 23:16:53','2023-06-18 23:16:53',NULL,NULL,NULL,NULL,NULL),(15,2,'Oukalla Mohamed','dwdwed@gmail.com','users/default.png',NULL,'$2y$10$TW8JwtosGuq8SE/4MmCZ6emMZTU9os3WlIIm7dAgaur.FAQe38gUi',NULL,NULL,'2023-06-18 23:19:53','2023-06-18 23:19:53',NULL,NULL,NULL,NULL,'aaaaaqqqq'),(16,2,'Oukalla Mohamed','dwde@gmail.com','users/default.png',NULL,'$2y$10$W2r1ViNz4XrtS88qiopZfObSIYGtwRRJayVHlEtsMDXCh7V8UggF2',NULL,NULL,'2023-06-18 23:47:30','2023-06-18 23:47:30',NULL,NULL,NULL,NULL,'dfdfdf');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-23  9:38:52
