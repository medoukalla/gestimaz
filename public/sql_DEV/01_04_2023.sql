-- MySQL dump 10.13  Distrib 8.0.29, for Linux (x86_64)
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
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `data_rows_data_type_id_foreign` (`data_type_id`),
  CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_rows`
--

LOCK TABLES `data_rows` WRITE;
/*!40000 ALTER TABLE `data_rows` DISABLE KEYS */;
INSERT INTO `data_rows` VALUES (1,1,'id','number','ID',1,0,0,0,0,0,NULL,1),(2,1,'name','text','Nom',1,1,1,1,1,1,NULL,2),(3,1,'email','text','Email',1,1,1,1,1,1,NULL,3),(4,1,'password','password','Mot de passe',1,0,0,1,1,0,NULL,4),(5,1,'remember_token','text','Token de rappel',0,0,0,0,0,0,NULL,5),(6,1,'created_at','timestamp','Créé le',0,1,1,0,0,0,NULL,6),(7,1,'updated_at','timestamp','Mis à jour le',0,0,0,0,0,0,NULL,7),(8,1,'avatar','image','Avatar',0,1,1,1,1,1,NULL,8),(9,1,'user_belongsto_role_relationship','relationship','Rôle',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}',10),(10,1,'user_belongstomany_role_relationship','relationship','voyager::seeders.data_rows.roles',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}',11),(11,1,'settings','hidden','Settings',0,0,0,0,0,0,NULL,12),(12,2,'id','number','ID',1,0,0,0,0,0,NULL,1),(13,2,'name','text','Nom',1,1,1,1,1,1,NULL,2),(14,2,'created_at','timestamp','Créé le',0,0,0,0,0,0,NULL,3),(15,2,'updated_at','timestamp','Mis à jour le',0,0,0,0,0,0,NULL,4),(21,1,'role_id','text','Rôle',1,1,1,1,1,1,NULL,9),(22,4,'id','hidden','Id',1,0,0,0,0,0,'{}',1),(23,4,'name','text','Name',0,1,1,1,1,1,'{}',2),(24,4,'image','image','Image',0,1,1,1,1,1,'{}',3),(25,4,'created_at','timestamp','Created At',0,1,1,0,0,1,'{}',4),(26,4,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',5),(27,5,'id','hidden','Id',1,0,0,0,0,0,'{}',1),(28,5,'name','text','Name',0,1,1,1,1,1,'{\"validation\":{\"rule\":\"required|max:250\"}}',2),(29,5,'price','text','Price',0,1,1,1,1,1,'{\"validation\":{\"rule\":\"required|max:50\"}}',3),(30,5,'image','image','Image',0,1,1,1,1,1,'null',5),(31,5,'active','checkbox','Active',1,1,1,1,1,1,'{\"on\":\"Activr\",\"off\":\"Inactive\",\"checked\":true}',6),(32,5,'map_id','hidden','Map Id',0,1,1,1,1,1,'{}',7),(33,5,'created_at','timestamp','Created At',0,0,0,0,0,0,'{}',8),(34,5,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',9),(35,5,'server_belongsto_map_relationship','relationship','maps',0,1,1,1,1,1,'{\"model\":\"App\\\\Models\\\\Map\",\"table\":\"maps\",\"type\":\"belongsTo\",\"column\":\"map_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"data_rows\",\"pivot\":\"0\",\"taggable\":\"0\"}',10),(36,4,'map_hasmany_server_relationship','relationship','servers',0,1,1,1,1,1,'{\"model\":\"App\\\\Models\\\\Server\",\"table\":\"servers\",\"type\":\"hasMany\",\"column\":\"map_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"data_rows\",\"pivot\":\"0\",\"taggable\":\"0\"}',6),(37,6,'id','hidden','Id',1,1,0,0,0,0,'{}',1),(38,6,'quantity','text','Quantity',0,1,1,1,1,1,'{}',6),(39,6,'price','text','Price',0,0,1,1,1,1,'{}',4),(40,6,'total','text','Total',0,1,1,1,1,1,'{}',5),(41,6,'bonus','text','Bonus',0,1,1,1,1,1,'{}',7),(42,6,'payment_method','hidden','Payment Method',0,0,0,0,0,0,'{}',11),(43,6,'game_id','text','Game Id',0,0,1,0,1,1,'{}',14),(44,6,'payed','checkbox','Payed',1,1,1,1,1,1,'{\"on\":\"YES\",\"off\":\"NO\",\"checked\":false}',9),(47,6,'order_completed','checkbox','Finished',1,1,1,1,1,1,'{\"on\":\"YES\",\"off\":\"NO\",\"checked\":false}',16),(48,6,'created_at','timestamp','Created At',0,0,0,0,0,0,'{}',17),(49,6,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',18),(50,6,'deleted_at','timestamp','Deleted At',0,0,0,0,0,0,'{}',19),(51,6,'server_id','hidden','Server Id',1,0,1,1,1,1,'{}',20),(52,6,'order_belongsto_server_relationship','relationship','server',1,1,1,1,1,1,'{\"model\":\"App\\\\Models\\\\Server\",\"table\":\"servers\",\"type\":\"belongsTo\",\"column\":\"server_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"data_rows\",\"pivot\":\"0\",\"taggable\":\"0\"}',3),(53,10,'id','hidden','Id',1,0,0,0,0,0,'{}',1),(54,10,'name','text','Name',0,1,1,1,1,1,'{\"validation\":{\"rule\":\"required|max:50\"}}',2),(55,10,'price','number','Price',0,1,1,1,1,1,'{\"validation\":{\"rule\":\"required\"}}',3),(56,10,'image','image','Image',0,0,1,1,1,1,'{\"validation\":{\"rule\":\"required|image\"}}',4),(57,10,'active','checkbox','Active',1,1,1,1,1,1,'{\"on\":\"Active\",\"off\":\"Inactive\",\"checked\":true}',5),(58,10,'map_id','hidden','Map Id',0,0,0,0,0,0,'{}',6),(59,10,'created_at','timestamp','Created At',0,0,0,0,0,0,'{}',7),(60,10,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',8),(61,10,'deleted_at','timestamp','Deleted At',0,0,0,0,0,0,'{}',9),(62,11,'id','text','Id',1,0,0,0,0,0,'{}',1),(63,11,'quantity','number','Quantity',0,1,1,1,1,1,'{\"validation\":{\"rule\":\"required|numeric\"}}',3),(67,11,'created_at','timestamp','Created At',0,0,0,0,0,0,'{}',7),(68,11,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',8),(69,12,'id','text','Id',1,0,0,0,0,0,'{}',1),(70,12,'question','text','Question',0,1,1,1,1,1,'{\"validation\":{\"rule\":\"required|max:250\"}}',2),(71,12,'answer','text_area','Answer',0,0,1,1,1,1,'{\"validation\":{\"rule\":\"required\"}}',3),(72,12,'active','checkbox','Active',0,1,1,1,1,1,'{\"on\":\"Active\",\"off\":\"Inactive\",\"checked\":true}',4),(73,12,'created_at','timestamp','Created At',0,0,0,0,0,0,'{}',5),(74,12,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',6),(75,11,'pack_belongstomany_server_relationship','relationship','servers',0,1,1,1,1,1,'{\"model\":\"App\\\\Models\\\\Server\",\"table\":\"servers\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"server_pack\",\"pivot\":\"1\",\"taggable\":\"on\"}',9),(76,5,'server_belongstomany_pack_relationship','relationship','packs',0,1,1,1,1,1,'{\"model\":\"App\\\\Models\\\\Pack\",\"table\":\"packs\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"server_pack\",\"pivot\":\"1\",\"taggable\":\"on\"}',11),(77,11,'name','text','Name',0,1,1,1,1,1,'{\"validation\":{\"rule\":\"required|required\"}}',2),(78,11,'active','checkbox','Active',0,1,1,1,1,1,'{\"on\":\"Available\",\"off\":\"Unavailable\",\"checked\":true}',5),(79,11,'bonus','select_dropdown','Bonus',0,1,1,1,1,1,'{\"default\":\"0\",\"options\":{\"0.00\":\"0.00%\",\"0.25\":\"0.25%\",\"0.50\":\"0.50%\",\"0.75\":\"0.75%\",\"1.00\":\"1.00%\",\"1.25\":\"1.25%\",\"1.50\":\"1.50%\",\"1.75\":\"1.75%\",\"2.00\":\"2.00%\",\"2.25\":\"2.25%\",\"2.50\":\"2.50%\",\"2.75\":\"2.75%\",\"3.00\":\"3.00%\",\"3.25\":\"3.25%\",\"3.50\":\"3.50%\",\"3.75\":\"3.75%\",\"4.00\":\"4.00%\",\"4.25\":\"4.25%\",\"4.50\":\"4.50%\",\"4.75\":\"4.75%\",\"5.00\":\"5.00%\"}}',5),(80,5,'price_euro','text','Price Euro',0,0,1,1,1,1,'{\"validation\":{\"rule\":\"required|max:50\"}}',4),(81,13,'id','text','Id',1,0,0,0,0,0,'{}',1),(82,13,'name','text','Name',0,1,1,1,1,1,'{}',2),(83,13,'image','image','Image',0,0,1,1,1,1,'{}',3),(84,13,'active','checkbox','Active',0,1,1,1,1,1,'{\"on\":\"Available\",\"off\":\"Unavailable\",\"checked\":true}',4),(85,13,'created_at','timestamp','Created At',0,0,0,0,0,0,'{}',5),(86,13,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',6),(87,6,'order_belongsto_payment_relationship','relationship','Payment',1,1,1,1,1,1,'{\"model\":\"App\\\\Models\\\\Payment\",\"table\":\"payments\",\"type\":\"belongsTo\",\"column\":\"payment_method\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"data_rows\",\"pivot\":\"0\",\"taggable\":\"0\"}',8),(88,6,'pack_id','hidden','Pack Id',0,0,1,1,1,1,'{}',21),(90,6,'user_id','hidden','User Id',0,1,1,1,1,1,'{}',22),(91,6,'order_belongsto_user_relationship','relationship','user',1,1,1,1,1,1,'{\"model\":\"App\\\\Models\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"data_rows\",\"pivot\":\"0\",\"taggable\":\"0\"}',2),(97,6,'facturer','checkbox','Données de facturation',1,1,1,1,1,1,'{\"on\":\"YES\",\"off\":\"NO\",\"checked\":false}',12),(98,6,'liviser','checkbox','Données de livraison',1,1,1,1,1,1,'{\"on\":\"YES\",\"off\":\"NO\",\"checked\":false}',13),(99,6,'delivered','checkbox','Delivered',1,0,1,1,1,1,'{\"on\":\"YES\",\"off\":\"NO\",\"checked\":false}',15),(100,6,'payment_verified','checkbox','Payment Verified',0,1,1,1,1,1,'{\"on\":\"YES\",\"off\":\"NO\",\"checked\":false}',10),(101,6,'facturation_name','text','Facturation Name',0,0,1,0,1,1,'{}',24),(102,6,'facturation_discrod','text','Facturation Discrod',0,0,1,0,1,1,'{}',23),(103,6,'facturation_email','text','Facturation Email',0,0,1,0,1,1,'{}',25),(104,6,'facturation_code','text','Facturation Code',0,0,1,0,1,1,'{}',26),(105,6,'facturation_city','text','Facturation City',0,0,1,0,1,1,'{}',27),(106,6,'facturation_phone','text','Facturation Phone',0,0,1,0,1,1,'{}',28),(107,6,'facturation_agree','text','Facturation Agree',0,0,1,0,1,1,'{}',29);
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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_types_name_unique` (`name`),
  UNIQUE KEY `data_types_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_types`
--

LOCK TABLES `data_types` WRITE;
/*!40000 ALTER TABLE `data_types` DISABLE KEYS */;
INSERT INTO `data_types` VALUES (1,'users','users','Utilisateur','Utilisateurs','voyager-person','TCG\\Voyager\\Models\\User','TCG\\Voyager\\Policies\\UserPolicy','TCG\\Voyager\\Http\\Controllers\\VoyagerUserController','',1,0,NULL,'2023-02-17 09:33:11','2023-02-17 09:33:11'),(2,'menus','menus','Menu','Menus','voyager-list','TCG\\Voyager\\Models\\Menu',NULL,'','',1,0,NULL,'2023-02-17 09:33:11','2023-02-17 09:33:11'),(4,'maps','maps','Map','Maps','voyager-location','App\\Models\\Map',NULL,NULL,NULL,1,1,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2023-02-17 10:15:52','2023-02-17 14:35:08'),(5,'servers','servers','Server','Servers','voyager-harddrive','App\\Models\\Server',NULL,NULL,NULL,1,1,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2023-02-17 10:26:06','2023-03-28 01:10:29'),(6,'orders','orders','Order','Orders','voyager-basket','App\\Models\\Order',NULL,NULL,NULL,1,1,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2023-02-17 11:27:09','2023-04-01 13:40:11'),(10,'sell_servers','sell-servers','Sell Server','Sell Servers','voyager-megaphone','App\\Models\\SellServer',NULL,NULL,NULL,1,1,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2023-02-17 19:40:11','2023-03-27 01:43:18'),(11,'packs','packs','Pack','Packs','voyager-treasure','App\\Models\\Pack',NULL,NULL,NULL,1,1,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2023-03-26 17:22:41','2023-03-27 23:52:36'),(12,'questions','questions','Question','Questions','voyager-question','App\\Models\\Question',NULL,NULL,NULL,1,1,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2023-03-27 00:50:46','2023-03-27 00:50:46'),(13,'payments','payments','Payment','Payments','voyager-dollar','App\\Models\\Payment',NULL,NULL,NULL,1,1,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2023-03-28 01:22:04','2023-03-28 01:22:04');
/*!40000 ALTER TABLE `data_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int DEFAULT NULL,
  `order` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_id_foreign` (`menu_id`),
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_items`
--

LOCK TABLES `menu_items` WRITE;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;
INSERT INTO `menu_items` VALUES (6,1,'Créateur de menus','','_self','voyager-list',NULL,5,10,'2023-02-17 09:33:11','2023-02-17 09:33:11','voyager.menus.index',NULL),(7,1,'Base de données','','_self','voyager-data',NULL,5,11,'2023-02-17 09:33:11','2023-02-17 09:33:11','voyager.database.index',NULL),(8,1,'voyager::seeders.menu_items.compass','','_self','voyager-compass',NULL,5,12,'2023-02-17 09:33:11','2023-02-17 09:33:11','voyager.compass.index',NULL),(9,1,'BREAD','','_self','voyager-bread',NULL,5,13,'2023-02-17 09:33:11','2023-02-17 09:33:11','voyager.bread.index',NULL),(11,1,'Dashboard','','_self','voyager-boat',NULL,NULL,1,'2023-02-17 09:49:40','2023-02-17 09:49:40','voyager.dashboard',NULL),(12,1,'Media','','_self','voyager-images',NULL,14,3,'2023-02-17 09:49:40','2023-02-17 12:22:37','voyager.media.index',NULL),(13,1,'Users','','_self','voyager-person',NULL,NULL,2,'2023-02-17 09:49:40','2023-02-17 12:22:32','voyager.users.index',NULL),(14,1,'Tools','','_self','voyager-tools',NULL,NULL,8,'2023-02-17 09:49:40','2023-02-17 19:40:38',NULL,NULL),(15,1,'Menu Builder','','_self','voyager-list',NULL,14,2,'2023-02-17 09:49:40','2023-02-17 12:22:34','voyager.menus.index',NULL),(16,1,'Database','','_self','voyager-data',NULL,14,1,'2023-02-17 09:49:40','2023-02-17 12:22:34','voyager.database.index',NULL),(17,1,'Compass','','_self','voyager-compass',NULL,14,4,'2023-02-17 09:49:40','2023-02-17 19:36:07','voyager.compass.index',NULL),(18,1,'Settings','','_self','voyager-settings',NULL,NULL,7,'2023-02-17 09:49:40','2023-02-17 19:40:38','voyager.settings.index',NULL),(19,1,'Maps','','_self','voyager-location',NULL,NULL,3,'2023-02-17 10:15:52','2023-02-17 12:22:46','voyager.maps.index',NULL),(20,1,'Servers','','_self','voyager-harddrive',NULL,NULL,4,'2023-02-17 10:26:06','2023-02-17 12:22:46','voyager.servers.index',NULL),(21,1,'Orders','','_self','voyager-basket',NULL,NULL,6,'2023-02-17 11:27:09','2023-02-17 19:40:47','voyager.orders.index',NULL),(24,1,'Sell Servers','','_self','voyager-megaphone',NULL,NULL,5,'2023-02-17 19:40:11','2023-02-17 19:40:47','voyager.sell-servers.index',NULL),(25,1,'Packs','','_self','voyager-treasure',NULL,NULL,9,'2023-03-26 17:22:41','2023-03-26 17:22:41','voyager.packs.index',NULL),(26,1,'Questions','','_self','voyager-question',NULL,NULL,10,'2023-03-27 00:50:47','2023-03-27 00:50:47','voyager.questions.index',NULL),(27,1,'Payments','','_self','voyager-dollar',NULL,NULL,11,'2023-03-28 01:22:04','2023-03-28 01:22:04','voyager.payments.index',NULL);
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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'admin','2023-02-17 09:33:11','2023-02-17 09:33:11');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2016_01_01_000000_add_voyager_user_fields',1),(4,'2016_01_01_000000_create_data_types_table',1),(5,'2016_05_19_173453_create_menu_table',1),(6,'2016_10_21_190000_create_roles_table',1),(7,'2016_10_21_190000_create_settings_table',1),(8,'2016_11_30_135954_create_permission_table',1),(9,'2016_11_30_141208_create_permission_role_table',1),(10,'2016_12_26_201236_data_types__add__server_side',1),(11,'2017_01_13_000000_add_route_to_menu_items_table',1),(12,'2017_01_14_005015_create_translations_table',1),(13,'2017_01_15_000000_make_table_name_nullable_in_permissions_table',1),(14,'2017_03_06_000000_add_controller_to_data_types_table',1),(15,'2017_04_21_000000_add_order_to_data_rows_table',1),(16,'2017_07_05_210000_add_policyname_to_data_types_table',1),(17,'2017_08_05_000000_add_group_to_settings_table',1),(18,'2017_11_26_013050_add_user_role_relationship',1),(19,'2017_11_26_015000_create_user_roles_table',1),(20,'2018_03_11_000000_add_user_settings',1),(21,'2018_03_14_000000_add_details_to_data_types_table',1),(22,'2018_03_16_000000_make_settings_value_nullable',1),(23,'2019_08_19_000000_create_failed_jobs_table',1),(24,'2019_12_14_000001_create_personal_access_tokens_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
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
  `game_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `facturation_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facturation_discrod` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facturation_email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facturation_code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facturation_city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facturation_phone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facturation_agree` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,100,1.9,190,5000000,1,'cwec33',1,0,0,0,'2023-03-28 06:39:17','2023-03-28 07:24:44',NULL,3,3,1,0,NULL,'','','','','','',NULL),(2,5,1.3,6.5,37500,1,'jgjhgjhg',1,0,0,0,'2023-03-28 15:06:47','2023-03-28 15:06:47',NULL,2,2,NULL,0,NULL,'','','','','','',NULL),(3,5,1.3,6.5,37500,NULL,'client_1',1,0,0,0,'2023-04-01 02:24:27','2023-04-01 02:24:27',NULL,2,2,NULL,0,NULL,'','','','','','',NULL),(4,100,1.9,190,5000000,1,'medo',1,1,1,1,'2023-04-01 02:28:01','2023-04-01 05:27:55',NULL,3,3,1,1,1,'Mohamed Oukalla','khkj7273','medoukalla@gmail.com','507603','Casablanca','0616782839','1'),(5,100,1.9,190,5000000,0,'3333',1,0,0,0,'2023-04-01 13:32:36','2023-04-01 13:32:36',NULL,3,3,NULL,0,2,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(6,100,1.9,190,5000000,0,'kkjj',1,0,0,0,'2023-04-01 13:34:21','2023-04-01 13:34:21',NULL,3,3,NULL,0,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
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
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bonus` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `packs`
--

LOCK TABLES `packs` WRITE;
/*!40000 ALTER TABLE `packs` DISABLE KEYS */;
INSERT INTO `packs` VALUES (1,2,1,'2 M','2.50',NULL,'2023-03-27 23:57:56'),(2,5,1,'5 M','0.75',NULL,'2023-03-27 23:58:04'),(3,100,1,'100\'','5.00','2023-03-28 00:53:47','2023-03-28 00:53:47');
/*!40000 ALTER TABLE `packs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
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
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payments`
--

LOCK TABLES `payments` WRITE;
/*!40000 ALTER TABLE `payments` DISABLE KEYS */;
INSERT INTO `payments` VALUES (1,'CIH','payments/March2023/CJJJonobnO5jn2c2UiPw.png',1,'2023-03-28 01:28:24','2023-03-28 01:28:24'),(2,'Paypal','payments/March2023/gJNpyVTspTolMGPNhVH5.png',1,'2023-03-28 01:29:27','2023-03-28 01:29:27'),(3,'Stripe','payments/March2023/rOdUS2mZIYcM5hAQ5NBx.png',1,'2023-03-28 01:30:47','2023-03-28 01:30:47');
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
INSERT INTO `permission_role` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(30,1),(31,1),(32,1),(33,1),(34,1),(35,1),(36,1),(37,1),(38,1),(39,1),(40,1),(51,1),(52,1),(53,1),(54,1),(55,1),(56,1),(57,1),(58,1),(59,1),(60,1),(61,1),(62,1),(63,1),(64,1),(65,1),(66,1),(67,1),(68,1),(69,1),(70,1);
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
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_key_index` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'browse_admin',NULL,'2023-02-17 09:33:11','2023-02-17 09:33:11'),(2,'browse_bread',NULL,'2023-02-17 09:33:12','2023-02-17 09:33:12'),(3,'browse_database',NULL,'2023-02-17 09:33:12','2023-02-17 09:33:12'),(4,'browse_media',NULL,'2023-02-17 09:33:12','2023-02-17 09:33:12'),(5,'browse_compass',NULL,'2023-02-17 09:33:12','2023-02-17 09:33:12'),(6,'browse_menus','menus','2023-02-17 09:33:12','2023-02-17 09:33:12'),(7,'read_menus','menus','2023-02-17 09:33:12','2023-02-17 09:33:12'),(8,'edit_menus','menus','2023-02-17 09:33:12','2023-02-17 09:33:12'),(9,'add_menus','menus','2023-02-17 09:33:12','2023-02-17 09:33:12'),(10,'delete_menus','menus','2023-02-17 09:33:12','2023-02-17 09:33:12'),(16,'browse_users','users','2023-02-17 09:33:12','2023-02-17 09:33:12'),(17,'read_users','users','2023-02-17 09:33:12','2023-02-17 09:33:12'),(18,'edit_users','users','2023-02-17 09:33:12','2023-02-17 09:33:12'),(19,'add_users','users','2023-02-17 09:33:12','2023-02-17 09:33:12'),(20,'delete_users','users','2023-02-17 09:33:12','2023-02-17 09:33:12'),(21,'browse_settings','settings','2023-02-17 09:33:12','2023-02-17 09:33:12'),(22,'read_settings','settings','2023-02-17 09:33:12','2023-02-17 09:33:12'),(23,'edit_settings','settings','2023-02-17 09:33:12','2023-02-17 09:33:12'),(24,'add_settings','settings','2023-02-17 09:33:12','2023-02-17 09:33:12'),(25,'delete_settings','settings','2023-02-17 09:33:12','2023-02-17 09:33:12'),(26,'browse_maps','maps','2023-02-17 10:15:52','2023-02-17 10:15:52'),(27,'read_maps','maps','2023-02-17 10:15:52','2023-02-17 10:15:52'),(28,'edit_maps','maps','2023-02-17 10:15:52','2023-02-17 10:15:52'),(29,'add_maps','maps','2023-02-17 10:15:52','2023-02-17 10:15:52'),(30,'delete_maps','maps','2023-02-17 10:15:52','2023-02-17 10:15:52'),(31,'browse_servers','servers','2023-02-17 10:26:06','2023-02-17 10:26:06'),(32,'read_servers','servers','2023-02-17 10:26:06','2023-02-17 10:26:06'),(33,'edit_servers','servers','2023-02-17 10:26:06','2023-02-17 10:26:06'),(34,'add_servers','servers','2023-02-17 10:26:06','2023-02-17 10:26:06'),(35,'delete_servers','servers','2023-02-17 10:26:06','2023-02-17 10:26:06'),(36,'browse_orders','orders','2023-02-17 11:27:09','2023-02-17 11:27:09'),(37,'read_orders','orders','2023-02-17 11:27:09','2023-02-17 11:27:09'),(38,'edit_orders','orders','2023-02-17 11:27:09','2023-02-17 11:27:09'),(39,'add_orders','orders','2023-02-17 11:27:09','2023-02-17 11:27:09'),(40,'delete_orders','orders','2023-02-17 11:27:09','2023-02-17 11:27:09'),(51,'browse_sell_servers','sell_servers','2023-02-17 19:40:11','2023-02-17 19:40:11'),(52,'read_sell_servers','sell_servers','2023-02-17 19:40:11','2023-02-17 19:40:11'),(53,'edit_sell_servers','sell_servers','2023-02-17 19:40:11','2023-02-17 19:40:11'),(54,'add_sell_servers','sell_servers','2023-02-17 19:40:11','2023-02-17 19:40:11'),(55,'delete_sell_servers','sell_servers','2023-02-17 19:40:11','2023-02-17 19:40:11'),(56,'browse_packs','packs','2023-03-26 17:22:41','2023-03-26 17:22:41'),(57,'read_packs','packs','2023-03-26 17:22:41','2023-03-26 17:22:41'),(58,'edit_packs','packs','2023-03-26 17:22:41','2023-03-26 17:22:41'),(59,'add_packs','packs','2023-03-26 17:22:41','2023-03-26 17:22:41'),(60,'delete_packs','packs','2023-03-26 17:22:41','2023-03-26 17:22:41'),(61,'browse_questions','questions','2023-03-27 00:50:46','2023-03-27 00:50:46'),(62,'read_questions','questions','2023-03-27 00:50:46','2023-03-27 00:50:46'),(63,'edit_questions','questions','2023-03-27 00:50:46','2023-03-27 00:50:46'),(64,'add_questions','questions','2023-03-27 00:50:46','2023-03-27 00:50:46'),(65,'delete_questions','questions','2023-03-27 00:50:46','2023-03-27 00:50:46'),(66,'browse_payments','payments','2023-03-28 01:22:04','2023-03-28 01:22:04'),(67,'read_payments','payments','2023-03-28 01:22:04','2023-03-28 01:22:04'),(68,'edit_payments','payments','2023-03-28 01:22:04','2023-03-28 01:22:04'),(69,'add_payments','payments','2023-03-28 01:22:04','2023-03-28 01:22:04'),(70,'delete_payments','payments','2023-03-28 01:22:04','2023-03-28 01:22:04');
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
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
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
  `question` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` tinytext COLLATE utf8mb4_unicode_ci,
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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `roles` VALUES (1,'admin','Administrator','2023-02-13 13:49:29','2023-02-13 13:49:29'),(2,'user','Utilisateur standard','2023-02-17 09:33:11','2023-02-17 09:33:11');
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
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `image` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint unsigned NOT NULL DEFAULT '1',
  `map_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sell_servers`
--

LOCK TABLES `sell_servers` WRITE;
/*!40000 ALTER TABLE `sell_servers` DISABLE KEYS */;
INSERT INTO `sell_servers` VALUES (1,'Server A sell',1,'sell-servers/March2023/zI6hoSWKzBYgbWDTiwe1.png',1,NULL,'2023-03-27 01:36:26','2023-03-27 01:36:26',NULL),(2,'Server B sell',2,'sell-servers/March2023/uKqdCwEK3Y7f6itzwSoV.png',1,NULL,'2023-03-27 01:36:45','2023-03-27 01:37:12',NULL),(3,'Server B sell',2,'sell-servers/March2023/bkw794UkfhrXlv5aqSIT.png',1,NULL,'2023-03-27 01:37:03','2023-03-27 01:37:03',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `server_pack`
--

LOCK TABLES `server_pack` WRITE;
/*!40000 ALTER TABLE `server_pack` DISABLE KEYS */;
INSERT INTO `server_pack` VALUES (1,1,1,NULL,NULL),(2,2,1,NULL,NULL),(3,3,1,NULL,NULL),(4,2,2,NULL,NULL),(5,1,3,NULL,NULL),(6,3,3,NULL,NULL);
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
  `name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint unsigned NOT NULL DEFAULT '1',
  `map_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price_euro` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servers`
--

LOCK TABLES `servers` WRITE;
/*!40000 ALTER TABLE `servers` DISABLE KEYS */;
INSERT INTO `servers` VALUES (1,'Touch server 1','1.2','servers/February2023/UvSNRRBXVqJ2kIqf9SMs.jpg',1,1,'2023-02-17 14:33:04','2023-03-28 01:11:07','1.3'),(2,'Classique server 1','1.3','servers/February2023/8ygUPF2HOOm9YwowLb7v.jpeg',1,3,'2023-02-17 14:33:39','2023-03-28 01:10:57','1.4'),(3,'Classique server 2','1.9','servers/February2023/8pEsneuqKZOHqFJrbzYp.jpeg',1,3,'2023-02-17 14:34:06','2023-03-28 01:10:46','2');
/*!40000 ALTER TABLE `servers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci,
  `last_activity` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
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
INSERT INTO `sessions` VALUES ('EWh90QVxyyY2xzx37RGl3MrqJAfjD5184tefPhXT',2,'172.26.0.1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','YTo1OntzOjY6Il90b2tlbiI7czo0MDoidzllNXNMcFFtV0JnMloyR3RSa0ZDemdOMXRJcW9DTkl4ZzZnSmhFdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9sb2NhbGhvc3Qvb3JkZXJfZGV0YWlscy82Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==',1680356215,NULL,NULL),('rWUnir2SDNpZZXX7ZO2LfBcHZwKr1O7WQiB4e0p9',1,'172.26.0.1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36','YTo1OntzOjY6Il90b2tlbiI7czo0MDoibGQ0d3I4Wkkxd1loTXZ6c2JDN1hORWpVakFtMWR2T0FVRVdHUnpJVSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM1OiJodHRwOi8vbG9jYWxob3N0L2Rhc2hib2FyZC9vcmRlcnMvNiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==',1680357942,NULL,NULL);
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
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int NOT NULL DEFAULT '1',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'site.title','Site Title','KAMAAAA','','text',1,'Site'),(2,'site.description','Site Description','Welcome to KAMA website','','text',2,'Site'),(3,'site.logo','Site Logo','settings/February2023/C7qLmfoLxvArHv3xka6G.png','','image',3,'Site'),(4,'site.google_analytics_tracking_id','Google Analytics Tracking ID',NULL,'','text',26,'Site'),(5,'admin.bg_image','Admin Background Image','settings/February2023/58cqYCGB3wP50qGHYO5y.png','','image',5,'Admin'),(6,'admin.title','Admin Title','Kama','','text',1,'Admin'),(7,'admin.description','Admin Description','Welcome to KAMA.com','','text',2,'Admin'),(8,'admin.loader','Admin Loader','settings/February2023/EDQwpAGx1SRj91KfX6Qx.png','','image',4,'Admin'),(9,'admin.icon_image','Admin Icon Image','settings/February2023/b7XLjj7q4XyIFQ9EAS12.png','','image',3,'Admin'),(10,'admin.google_analytics_client_id','Google Analytics Client ID (used for admin dashboard)',NULL,'','text',1,'Admin'),(15,'titles.about','About page title','About us',NULL,'text',7,'titles'),(18,'titles.sell','Sell page title','Sell your kama',NULL,'text',9,'titles'),(19,'titles.buy','Buy page title','Buy to kama',NULL,'text',10,'titles'),(20,'titles.homepage','Home page title','Welcome to KAMA',NULL,'text',11,'titles'),(21,'titles.maps','Maps page title','Choose map',NULL,'text',12,'titles'),(22,'titles.servers','Servers page title','Choose server',NULL,'text',13,'titles'),(23,'titles.faq','FAQ page titles','FAQ',NULL,'text',14,'titles'),(24,'titles.terms','Terms page title','Terms of service',NULL,'text',15,'titles'),(25,'titles.policy','Policy page title','Private policy',NULL,'text',16,'titles'),(26,'titles.exchange','Exchange page title','Exchange your kama between games',NULL,'text',17,'titles'),(27,'social.facebook','Facebook url','facebook.com',NULL,'text',18,'social'),(28,'social.instagram','Instagram url','instagram.com',NULL,'text',19,'social'),(29,'social.twitter','Twitter url','twitter.com',NULL,'text',20,'social'),(30,'social.discord','Discord url','discord.com/invite=dwklkwej',NULL,'text',21,'social'),(31,'social.youtube','Youtube url','youtube.com',NULL,'text',22,'social'),(32,'payments.paypal','Paypal','1','{\r\n    \"default\" : \"1\",\r\n    \"options\" : {\r\n        \"1\": \"Active\",\r\n        \"0\": \"Inactive\"\r\n    }\r\n}','select_dropdown',23,'payments'),(33,'payments.stripe','Stripe','1','{\r\n    \"default\" : \"1\",\r\n    \"options\" : {\r\n        \"1\": \"Active\",\r\n        \"0\": \"Inactive\"\r\n    }\r\n}','select_dropdown',24,'payments'),(34,'payments.cih','CIH','1','{\r\n    \"default\" : \"1\",\r\n    \"options\" : {\r\n        \"1\": \"Active\",\r\n        \"0\": \"Inactive\"\r\n    }\r\n}','select_dropdown',25,'payments'),(35,'site.terms','Terms of service','<h1 id=\"Terms-Of-Service-What-Is-It\">Terms Of Service: What Is It?</h1>\r\n<p>A Terms of Service, or TOS, is a set of rules that a user must agree to before they can engage in services or use a product. It can also serve as a disclaimer under certain conditions, such as for website use. A properly executed Terms of Service may be legally binding for both parties.</p>\r\n<p>A Terms of Service agreement usually has many different sections, such as definitions, user rights and responsibilities, and disclaimers. Terms of Service can change often, and they will need to be re-accepted as changes are made to the agreement.</p>\r\n<p>It is important to any company or business to include as much information as possible in their Terms of Service to avoid problems in the future. Getting legal counsel for the Terms of Service can ensure no major points have been missed and that the Terms of Service is legally binding to users.</p>\r\n<hr>\r\n<div class=\"row\">\r\n<div class=\"head-term-state-what-is-section col-md-7 col-md-offset-1\">\r\n<div class=\"document-contents editable\">\r\n<h1 id=\"What-Are-Terms-of-Service\"><strong><u>What Are Terms of Service?</u></strong></h1>\r\n<p><img src=\"https://formswift.com/seo-pages-assets/images/couch/picture47.png\" alt=\"what are terms of service\" loading=\"lazy\"></p>\r\n<p>Terms of service perform two essential functions. The first is to educate your customers on the rules of using your products and services. The second is to&nbsp;<a href=\"https://formswift.com/release-of-liability\">protect your company from lawsuits&nbsp;</a>. The TOS is a simple enough document to draw up, whether you&rsquo;re using a free terms of service generator or working from a sample. Terms of service should be one of the first documents issued to your clients, and you should be sure to get it read and signed by each client before proceeding with their business.</p>\r\n<p><strong>Part One - Language</strong></p>\r\n<p>A TOS starts off by familiarizing the reader with the terms that will be used throughout the document. Generally these terms are fairly, well, general ones, such as &ldquo;Terms,&rdquo; &ldquo;Services,&rdquo; &ldquo;The Company,&rdquo; etc.</p>\r\n<p><strong>Part Two &ndash; Rules of the Road.</strong></p>\r\n<p>The TOS then goes on to outline the rights and responsibilities of the user. The key to this section is to keep it short and sweet while including all relevant detail. The best approach is to tell your client what they can&rsquo;t do rather than what they can do. Omission is more illustrative than inclusion. Plus, it&rsquo;s a good idea to keep the TOS as short as possible so people actually them.</p>\r\n<p><strong>Part Three &ndash; What Is and Is Not Your Company&rsquo;s Fault</strong></p>\r\n<p>Limit your liabilities. Limit them as much as you can, and make their limits clear. For example:</p>\r\n<p><em>TO THE MAXIMUM EXTENT PERMITTED BY LAW, ARTHUR MACARTHUR, INC. SHALL NOT BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, CONSEQUENTIAL, OR SPECIAL DAMAGES OR LOSSES, WHETHER TANGIBLE OR INTANGIBLE, RESULTING FROM AUTHORIZED OR UNAUTHORIZED USE OF OR ACCESS TO OUR PRODUCTS</em></p>\r\n<p>You also might want to include a disclaimer or return policy, particularly if you&rsquo;re in the retail business. This protects you from customers blaming you for damaged goods:</p>\r\n<p><em>SUPERDUPER, INC. IS NOT RESPONSIBLE FOR THE CONDITIONS OF ITS MERCHANDISE. THE COMPANY SELLS ALL ITS MERCHANDISE ON AN &ldquo;AS IS&rdquo; BASIS AND ASSUMES NO LIABILITY OR RESPONSIBILITY FOR ANY DAMAGES INCURRED IN THE TRANSFER OR USE OF OUR PRODUCTS BY YOU OR ANY THIRD PARTY.</em></p>\r\n<p><strong>Part Four &ndash; Verification</strong></p>\r\n<p>Put a statement at the end like, &ldquo;I have read and agreed to abide by PenDragonPencil&rsquo;s Terms of Service.&rdquo; If you&rsquo;re issuing a paper TOS, follow this with a place for the user to print his or her name and sign and date the form provide instructions as to how the document should be returned to the company. If your TOS is online, you can just have the user insert his or her initials and hit the &ldquo;I Agree&rdquo; button.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"row\">\r\n<div class=\"head-term-state-what-is-section col-md-7 col-md-offset-1\">\r\n<div class=\"legal-considerations editable\">\r\n<h1 id=\"Legal-Considerations-of-Terms-of-Service--\"><strong><u>Legal Considerations of Terms of Service&nbsp;</u></strong>&nbsp; &nbsp;</h1>\r\n<p><img src=\"https://formswift.com/seo-pages-assets/images/couch/picture48.gif\" alt=\"legal considerations of terms of service\" loading=\"lazy\">Terms of service. Also known as TOS. Who needs them? Who reads them? The answer is: everybody and nobody. It&rsquo;s a pity, too, that the answer to the second question there is &ldquo;nobody,&rdquo; because the TOS is one document every user should read. It is, after all, a legal document to which they are signing their name.</p>\r\n<p>So what do you do if you need to create a TOS? Since it is, after all, the official rules clients must follow when using your products and services, it is the stuff of lawsuits. You don&rsquo;t want to be too vague, too specific, too confusing or too brief.</p>\r\n<p>To help you navigate that pile of contradictions, here are a few tips for drawing up a TOS without coming to any legal harm.</p>\r\n<p><strong>Don&rsquo;t just copy and paste</strong></p>\r\n<p>Terms of service may seem pretty much the same across the board, but don&rsquo;t let the legalese&rsquo; samey-ness fool you. There are important distinctions hidden in each monolith of text. That said, it is generally okay to use a free terms of service template, also known as a terms and conditions template. These tools, often available for free on the web, let you put together your TOS part by. This means that your legalese is written for you, and allows you to cover all the bases.</p>\r\n<p><strong>Be thorough when defining protected content</strong></p>\r\n<p>A customer might understand that copying and pasting an article from your magazine goes against copyright, but he or she might not realize the logo is off limits. Be sure to define how every type of product and service may or may not be used.</p>\r\n<p><strong>Don&rsquo;t forget about user rights.</strong></p>\r\n<p>If you run a website, for example, to which users submit content, you&rsquo;ll need to include a clause explaining what you intend to do with that content. If, as is often the case, the&nbsp;<a href=\"https://formswift.com/privacy-policy\">user is relinquishing all rights&nbsp;</a>to the content he or she submits, you need to put tis in writing. &nbsp; &nbsp;&nbsp;</p>\r\n<p><strong>Don&rsquo;t have too much fun with the language</strong></p>\r\n<p>Writing for today&rsquo;s market, you need to strike that delicate balance between overly stiff, inscrutable language and language that is too casual for its own good. You want your customers to understand your terms of service. Moreover, you want them to get through the whole document! However, it&rsquo;s important not to shirk the necessary legalese. After all, your TOS is a binding contract.</p>\r\n<p>The key here is to use formal language but keep it short and sweet. Some companies even offer a plain-speech version &ndash; a sort of a launch pad into the document itself. These rewrites translate the terms of service into human English, but the signature part lies at the end of the actual document. Check out Google&rsquo;s approach to this problem, for example, or Pinterest&rsquo;s.</p>\r\n</div>\r\n</div>\r\n</div>',NULL,'rich_text_box',27,'Site'),(36,'site.policy','Private policy','<div class=\"row\">\r\n<div class=\"head-term-state-what-is-section col-md-7 col-md-offset-1\">\r\n<div class=\"legal-considerations editable\">\r\n<h1 id=\"Legal-Considerations-of-Terms-of-Service--\"><strong><u>Legal Considerations of Private policy</u></strong></h1>\r\n<p><img src=\"https://formswift.com/seo-pages-assets/images/couch/picture48.gif\" alt=\"legal considerations of terms of service\" loading=\"lazy\">Terms of service. Also known as TOS. Who needs them? Who reads them? The answer is: everybody and nobody. It&rsquo;s a pity, too, that the answer to the second question there is &ldquo;nobody,&rdquo; because the TOS is one document every user should read. It is, after all, a legal document to which they are signing their name.</p>\r\n<p>So what do you do if you need to create a TOS? Since it is, after all, the official rules clients must follow when using your products and services, it is the stuff of lawsuits. You don&rsquo;t want to be too vague, too specific, too confusing or too brief.</p>\r\n<p>To help you navigate that pile of contradictions, here are a few tips for drawing up a TOS without coming to any legal harm.</p>\r\n<p><strong>Don&rsquo;t just copy and paste</strong></p>\r\n<p>Terms of service may seem pretty much the same across the board, but don&rsquo;t let the legalese&rsquo; samey-ness fool you. There are important distinctions hidden in each monolith of text. That said, it is generally okay to use a free terms of service template, also known as a terms and conditions template. These tools, often available for free on the web, let you put together your TOS part by. This means that your legalese is written for you, and allows you to cover all the bases.</p>\r\n<p><strong>Be thorough when defining protected content</strong></p>\r\n<p>A customer might understand that copying and pasting an article from your magazine goes against copyright, but he or she might not realize the logo is off limits. Be sure to define how every type of product and service may or may not be used.</p>\r\n<p><strong>Don&rsquo;t forget about user rights.</strong></p>\r\n<p>If you run a website, for example, to which users submit content, you&rsquo;ll need to include a clause explaining what you intend to do with that content. If, as is often the case, the&nbsp;<a href=\"https://formswift.com/privacy-policy\">user is relinquishing all rights&nbsp;</a>to the content he or she submits, you need to put tis in writing. &nbsp; &nbsp;&nbsp;</p>\r\n<p><strong>Don&rsquo;t have too much fun with the language</strong></p>\r\n<p>Writing for today&rsquo;s market, you need to strike that delicate balance between overly stiff, inscrutable language and language that is too casual for its own good. You want your customers to understand your terms of service. Moreover, you want them to get through the whole document! However, it&rsquo;s important not to shirk the necessary legalese. After all, your TOS is a binding contract.</p>\r\n<p>The key here is to use formal language but keep it short and sweet. Some companies even offer a plain-speech version &ndash; a sort of a launch pad into the document itself. These rewrites translate the terms of service into human English, but the signature part lies at the end of the actual document. Check out Google&rsquo;s approach to this problem, for example, or Pinterest&rsquo;s.</p>\r\n</div>\r\n</div>\r\n</div>',NULL,'rich_text_box',28,'Site'),(37,'site.currency','Website currency ( dollar or euro )','dollar','{\r\n    \"default\" : \"dollar1\",\r\n    \"options\" : {\r\n        \"dollar\": \"Dollar ($)\",\r\n        \"euro\": \"Euro (€)\"\r\n    }\r\n}','select_dropdown',4,'Site');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `translations`
--

DROP TABLE IF EXISTS `translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `translations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `role_id` bigint unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'Admin','admin@admin.com','users/default.png',NULL,'$2y$10$1avJoud0Z/Q3EF.DUJjXS.MjaVh3EAO0eUQhs4qz8hCUZ/0NRee8e',NULL,NULL,'2023-02-13 13:49:29','2023-02-13 13:49:29'),(2,2,'Clientt','client@gmail.com','users/default.png',NULL,'$2y$10$IPyxSkElkbmTexQgzY0BX.A6qEw/AtkR.DrLFbWn5ENmnJrSsLiuq',NULL,'{\"locale\":\"en\"}','2023-04-01 13:24:42','2023-04-01 13:24:42');
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

-- Dump completed on 2023-04-01 15:09:53
