-- MySQL dump 10.13  Distrib 5.5.53, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: pickatale
-- ------------------------------------------------------
-- Server version	5.5.53-0+deb8u1

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
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagemedium` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagethumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `categories_id` int(10) unsigned NOT NULL,
  `level_id` int(10) unsigned NOT NULL,
  `country_id` int(10) unsigned NOT NULL,
  `partner_id` int(10) unsigned NOT NULL,
  `bundle_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `workflow_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `country_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_commun_file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_language_file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `book_language` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description_short` text COLLATE utf8_unicode_ci NOT NULL,
  `backend_version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `atos` double(8,2) NOT NULL,
  `lexile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isFree` tinyint(1) NOT NULL,
  `isPreview` tinyint(1) NOT NULL,
  `coverCorrect` tinyint(1) NOT NULL,
  `isChoose` tinyint(1) NOT NULL,
  `priority` int(11) NOT NULL,
  `freebook` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `book_level_id_foreign` (`level_id`),
  KEY `book_partner_id_foreign` (`partner_id`),
  KEY `book_bundle_id_foreign` (`bundle_id`),
  KEY `book_user_id_foreign` (`user_id`),
  CONSTRAINT `book_bundle_id_foreign` FOREIGN KEY (`bundle_id`) REFERENCES `bundle` (`id`),
  CONSTRAINT `book_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`),
  CONSTRAINT `book_partner_id_foreign` FOREIGN KEY (`partner_id`) REFERENCES `partners` (`id`),
  CONSTRAINT `book_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book`
--

LOCK TABLES `book` WRITE;
/*!40000 ALTER TABLE `book` DISABLE KEYS */;
INSERT INTO `book` VALUES (5,'A Day in the Life of a Dinosaur','a-day-in-the-life-of-a-dinosaur.jpg','a-day-in-the-life-of-a-dinosaur.jpg','a-day-in-the-life-of-a-dinosaur.jpg','a-day-in-the-life-of-a-dinosaur','',1,'','A day for a young dinosaur is just like one for your child. This little dino doesn\'t want to get out of bed or go to school; he even loses his homework-in a most unusual way. He likes to eat and play and get dirty. He has to be reminded to brush his teeth. He loves his mommy and looks so cute when she tucks him in his bed at night, finally ready to settle down to sleep after a long and busy day.',3,3,840,1,1,1,1,'2013-01-29 06:34:30','2016-10-14 11:52:38','EN','http://dev-books.pickatale.com/1_1.0/IMAGES.zip','http://dev-books.pickatale.com/1_1.0/1_EN_1.0.zip','English','A little dinosaur spends his day much like that of any human boy or girl, but totally dinosaur-style.','1.0',0.00,'',0,0,1,0,50,0),(6,'My Dog','my-dog.jpg','my-dog.jpg','my-dog.jpg','my-dog','',3,'','My Dog is a small child\'s view and thoughts about his best friend, a dog named Woof. Woof is a steadfast companion in the shape of a giant dog who eats all the food in the house. Woof likes to hide socks and bark to songs. The storyteller shares his love for his pet. My Dog encourages the imagination of the reader with engaging illustrations.',5,4,840,1,1,1,1,'2013-01-29 08:17:12','2016-10-13 19:07:21','EN','http://dev-books.pickatale.com/3_1.0/IMAGES.zip','http://dev-books.pickatale.com/3_1.0/3_EN_1.0.zip','English','My Dog is a story about Woof the dog and Woof\'s relationship with his best friend.','1.0',2.10,'750L',0,0,1,0,50,0),(7,'The Little Engine That Could','the-little-engine-that-could.jpg','the-little-engine-that-could.jpg','the-little-engine-that-could.jpg','the-little-engine-that-could','',5,'','Cornelius is a train engine excited to pull a load of toys and food over a mountain to children on the other side. But he can\'t do it. He asks for help from other big engines who all say no. Finally, one tiny blue engine agrees to help. It\'s hard! She pulls and pulls, the whole time saying \"I think I can!\" She\'s finally successful. The story reinforces teamwork, persistence, and positive thinking.\n',5,5,840,1,1,1,1,'2013-04-15 02:31:51','2016-10-13 19:07:21','EN','http://dev-books.pickatale.com/206_1.0/IMAGES.zip','http://dev-books.pickatale.com/206_1.0/206_EN_1.0.zip','English','A tiny engine climbs up a mountain by pulling with all her might and thinking that she can do it.\n','1.0',3.50,'730L',1,1,1,0,50,1),(8,'Wolfgang Amadeus Mozart','wolfgang-amadeus-mozart.jpg','wolfgang-amadeus-mozart.jpg','wolfgang-amadeus-mozart.jpg','wolfgang-amadeus-mozart','',7,'','Wolfgang Amadeus Mozart is one of the most influential composers of all time, with works ranging from the nursery song \"Twinkle, Twinkle Little Star\" to great sonnets, symphonies, and operas. He started working as a composer from the age of five and traveled across Europe, playing and composing for royalty. Sadly, he died at the young age of thirty-five, but his many impressive works live on.',6,6,840,1,1,1,1,'2013-06-20 06:40:01','2016-10-13 19:07:21','EN','http://dev-books.pickatale.com/212_1.0/IMAGES.zip','http://dev-books.pickatale.com/212_1.0/212_EN_1.0.zip','English','This is the story of one of the greatest composers ever, Mozart, who started his career at age five.','1.0',4.50,'790L',1,1,1,0,50,1),(9,'I\'m Going to Be a Big Brother!','im-going-to-be-a-big-brother.jpg','im-going-to-be-a-big-brother.jpg','im-going-to-be-a-big-brother.jpg','im-going-to-be-a-big-brother','',3,'','A new baby brother is on the way in six months and a child worries that the things he loves to do with his family will not be the same anymore. His family reassures him that everything he enjoys now will continue and get even better. The boy imagines all the fun things he will do and adventures he will take with his new brother. He can\'t wait until the day arrives for his new best friend\'s birth.',5,4,840,1,1,1,1,'2013-07-22 04:40:48','2016-11-09 11:26:02','EN','http://dev-books.pickatale.com/233_1.0/IMAGES.zip','http://dev-books.pickatale.com/233_1.0/233_EN_1.0.zip','English','A little boy looks forward, with excitement, to having a new baby brother, who will be his best friend','1.0',2.90,'660L',1,1,1,0,50,1),(10,'My Puppy','my-puppy.jpg','my-puppy.jpg','my-puppy.jpg','my-puppy','',1,'','What child doesn\'t dream of having a puppy? Beautiful illustrations accompany this story of a high-spirited young child and his energetic puppy. The boy and his best friend (the puppy) play together and enjoy simple activities. From rolling on the floor to fetching sticks and chasing ducks, the two friends have a great time all day long. Laugh at their antics and enjoy the happy ending.\n',5,3,840,1,1,1,1,'2014-01-20 03:47:32','2016-10-13 19:07:21','EN','http://dev-books.pickatale.com/325_1.0/IMAGES.zip','http://dev-books.pickatale.com/325_1.0/325_EN_1.0.zip','English','A young child\'s best friend is his puppy. They play together and love each other dearly.  \n','1.0',0.80,'270L',1,1,1,0,50,1);
/*!40000 ALTER TABLE `book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bundle`
--

DROP TABLE IF EXISTS `bundle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bundle` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagemedium` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagethumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `workflow_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `bundle_user_id_foreign` (`user_id`),
  CONSTRAINT `bundle_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bundle`
--

LOCK TABLES `bundle` WRITE;
/*!40000 ALTER TABLE `bundle` DISABLE KEYS */;
INSERT INTO `bundle` VALUES (1,'Bundle 1','bundle-1.png','bundle-1.png','bundle-1.png','http://pickatale.com','<p>Description Info</p>\r\n',5,1,1,'2017-01-07 17:06:15','2017-01-07 17:06:15');
/*!40000 ALTER TABLE `bundle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rgt` int(11) DEFAULT NULL,
  `depth` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`),
  KEY `categories_parent_id_index` (`parent_id`),
  KEY `categories_lft_index` (`lft`),
  KEY `categories_rgt_index` (`rgt`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (3,'animals','Animals',NULL,1,2,0,NULL,NULL),(4,'family','Family',NULL,3,4,0,NULL,NULL),(5,'friendship','Friendship',NULL,5,6,0,NULL,NULL),(6,'history','History',NULL,7,8,0,NULL,NULL),(7,'education','Education',NULL,9,10,0,NULL,NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `capital` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `citizenship` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country_code` char(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `currency` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency_sub_unit` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency_symbol` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `iso_3166_2` char(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `iso_3166_3` char(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `region_code` char(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `sub_region_code` char(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `eea` tinyint(1) NOT NULL DEFAULT '0',
  `calling_code` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `flag` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `countries_id_index` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` VALUES (4,'Kabul','Afghan','004','afghani','AFN','pul','؋','Islamic Republic of Afghanistan','AF','AFG','Afghanistan','142','034',0,'93','AF.png'),(8,'Tirana','Albanian','008','lek','ALL','(qindar (pl. qindarka))','Lek','Republic of Albania','AL','ALB','Albania','150','039',0,'355','AL.png'),(10,'Antartica','of Antartica','010','','','','','Antarctica','AQ','ATA','Antarctica','','',0,'672','AQ.png'),(12,'Algiers','Algerian','012','Algerian dinar','DZD','centime','DZD','People’s Democratic Republic of Algeria','DZ','DZA','Algeria','002','015',0,'213','DZ.png'),(16,'Pago Pago','American Samoan','016','US dollar','USD','cent','$','Territory of American','AS','ASM','American Samoa','009','061',0,'1','AS.png'),(20,'Andorra la Vella','Andorran','020','euro','EUR','cent','€','Principality of Andorra','AD','AND','Andorra','150','039',0,'376','AD.png'),(24,'Luanda','Angolan','024','kwanza','AOA','cêntimo','Kz','Republic of Angola','AO','AGO','Angola','002','017',0,'244','AO.png'),(28,'St John’s','of Antigua and Barbuda','028','East Caribbean dollar','XCD','cent','$','Antigua and Barbuda','AG','ATG','Antigua and Barbuda','019','029',0,'1','AG.png'),(31,'Baku','Azerbaijani','031','Azerbaijani manat','AZN','kepik (inv.)','ман','Republic of Azerbaijan','AZ','AZE','Azerbaijan','142','145',0,'994','AZ.png'),(32,'Buenos Aires','Argentinian','032','Argentine peso','ARS','centavo','$','Argentine Republic','AR','ARG','Argentina','019','005',0,'54','AR.png'),(36,'Canberra','Australian','036','Australian dollar','AUD','cent','$','Commonwealth of Australia','AU','AUS','Australia','009','053',0,'61','AU.png'),(40,'Vienna','Austrian','040','euro','EUR','cent','€','Republic of Austria','AT','AUT','Austria','150','155',1,'43','AT.png'),(44,'Nassau','Bahamian','044','Bahamian dollar','BSD','cent','$','Commonwealth of the Bahamas','BS','BHS','Bahamas','019','029',0,'1','BS.png'),(48,'Manama','Bahraini','048','Bahraini dinar','BHD','fils (inv.)','BHD','Kingdom of Bahrain','BH','BHR','Bahrain','142','145',0,'973','BH.png'),(50,'Dhaka','Bangladeshi','050','taka (inv.)','BDT','poisha (inv.)','BDT','People’s Republic of Bangladesh','BD','BGD','Bangladesh','142','034',0,'880','BD.png'),(51,'Yerevan','Armenian','051','dram (inv.)','AMD','luma','AMD','Republic of Armenia','AM','ARM','Armenia','142','145',0,'374','AM.png'),(52,'Bridgetown','Barbadian','052','Barbados dollar','BBD','cent','$','Barbados','BB','BRB','Barbados','019','029',0,'1','BB.png'),(56,'Brussels','Belgian','056','euro','EUR','cent','€','Kingdom of Belgium','BE','BEL','Belgium','150','155',1,'32','BE.png'),(60,'Hamilton','Bermudian','060','Bermuda dollar','BMD','cent','$','Bermuda','BM','BMU','Bermuda','019','021',0,'1','BM.png'),(64,'Thimphu','Bhutanese','064','ngultrum (inv.)','BTN','chhetrum (inv.)','BTN','Kingdom of Bhutan','BT','BTN','Bhutan','142','034',0,'975','BT.png'),(68,'Sucre (BO1)','Bolivian','068','boliviano','BOB','centavo','$b','Plurinational State of Bolivia','BO','BOL','Bolivia, Plurinational State of','019','005',0,'591','BO.png'),(70,'Sarajevo','of Bosnia and Herzegovina','070','convertible mark','BAM','fening','KM','Bosnia and Herzegovina','BA','BIH','Bosnia and Herzegovina','150','039',0,'387','BA.png'),(72,'Gaborone','Botswanan','072','pula (inv.)','BWP','thebe (inv.)','P','Republic of Botswana','BW','BWA','Botswana','002','018',0,'267','BW.png'),(74,'Bouvet island','of Bouvet island','074','','','','kr','Bouvet Island','BV','BVT','Bouvet Island','','',0,'47','BV.png'),(76,'Brasilia','Brazilian','076','real (pl. reais)','BRL','centavo','R$','Federative Republic of Brazil','BR','BRA','Brazil','019','005',0,'55','BR.png'),(84,'Belmopan','Belizean','084','Belize dollar','BZD','cent','BZ$','Belize','BZ','BLZ','Belize','019','013',0,'501','BZ.png'),(86,'Diego Garcia','Changosian','086','US dollar','USD','cent','$','British Indian Ocean Territory','IO','IOT','British Indian Ocean Territory','','',0,'246','IO.png'),(90,'Honiara','Solomon Islander','090','Solomon Islands dollar','SBD','cent','$','Solomon Islands','SB','SLB','Solomon Islands','009','054',0,'677','SB.png'),(92,'Road Town','British Virgin Islander;','092','US dollar','USD','cent','$','British Virgin Islands','VG','VGB','Virgin Islands, British','019','029',0,'1','VG.png'),(96,'Bandar Seri Begawan','Bruneian','096','Brunei dollar','BND','sen (inv.)','$','Brunei Darussalam','BN','BRN','Brunei Darussalam','142','035',0,'673','BN.png'),(100,'Sofia','Bulgarian','100','lev (pl. leva)','BGN','stotinka','лв','Republic of Bulgaria','BG','BGR','Bulgaria','150','151',1,'359','BG.png'),(104,'Yangon','Burmese','104','kyat','MMK','pya','K','Union of Myanmar/','MM','MMR','Myanmar','142','035',0,'95','MM.png'),(108,'Bujumbura','Burundian','108','Burundi franc','BIF','centime','BIF','Republic of Burundi','BI','BDI','Burundi','002','014',0,'257','BI.png'),(112,'Minsk','Belarusian','112','Belarusian rouble','BYR','kopek','p.','Republic of Belarus','BY','BLR','Belarus','150','151',0,'375','BY.png'),(116,'Phnom Penh','Cambodian','116','riel','KHR','sen (inv.)','៛','Kingdom of Cambodia','KH','KHM','Cambodia','142','035',0,'855','KH.png'),(120,'Yaoundé','Cameroonian','120','CFA franc (BEAC)','XAF','centime','FCF','Republic of Cameroon','CM','CMR','Cameroon','002','017',0,'237','CM.png'),(124,'Ottawa','Canadian','124','Canadian dollar','CAD','cent','$','Canada','CA','CAN','Canada','019','021',0,'1','CA.png'),(132,'Praia','Cape Verdean','132','Cape Verde escudo','CVE','centavo','CVE','Republic of Cape Verde','CV','CPV','Cape Verde','002','011',0,'238','CV.png'),(136,'George Town','Caymanian','136','Cayman Islands dollar','KYD','cent','$','Cayman Islands','KY','CYM','Cayman Islands','019','029',0,'1','KY.png'),(140,'Bangui','Central African','140','CFA franc (BEAC)','XAF','centime','FCF','Central African Republic','CF','CAF','Central African Republic','002','017',0,'236','CF.png'),(144,'Colombo','Sri Lankan','144','Sri Lankan rupee','LKR','cent','₨','Democratic Socialist Republic of Sri Lanka','LK','LKA','Sri Lanka','142','034',0,'94','LK.png'),(148,'N’Djamena','Chadian','148','CFA franc (BEAC)','XAF','centime','XAF','Republic of Chad','TD','TCD','Chad','002','017',0,'235','TD.png'),(152,'Santiago','Chilean','152','Chilean peso','CLP','centavo','CLP','Republic of Chile','CL','CHL','Chile','019','005',0,'56','CL.png'),(156,'Beijing','Chinese','156','renminbi-yuan (inv.)','CNY','jiao (10)','¥','People’s Republic of China','CN','CHN','China','142','030',0,'86','CN.png'),(158,'Taipei','Taiwanese','158','new Taiwan dollar','TWD','fen (inv.)','NT$','Republic of China, Taiwan (TW1)','TW','TWN','Taiwan, Province of China','142','030',0,'886','TW.png'),(162,'Flying Fish Cove','Christmas Islander','162','Australian dollar','AUD','cent','$','Christmas Island Territory','CX','CXR','Christmas Island','','',0,'61','CX.png'),(166,'Bantam','Cocos Islander','166','Australian dollar','AUD','cent','$','Territory of Cocos (Keeling) Islands','CC','CCK','Cocos (Keeling) Islands','','',0,'61','CC.png'),(170,'Santa Fe de Bogotá','Colombian','170','Colombian peso','COP','centavo','$','Republic of Colombia','CO','COL','Colombia','019','005',0,'57','CO.png'),(174,'Moroni','Comorian','174','Comorian franc','KMF','','KMF','Union of the Comoros','KM','COM','Comoros','002','014',0,'269','KM.png'),(175,'Mamoudzou','Mahorais','175','euro','EUR','cent','€','Departmental Collectivity of Mayotte','YT','MYT','Mayotte','002','014',0,'262','YT.png'),(178,'Brazzaville','Congolese','178','CFA franc (BEAC)','XAF','centime','FCF','Republic of the Congo','CG','COG','Congo','002','017',0,'242','CG.png'),(180,'Kinshasa','Congolese','180','Congolese franc','CDF','centime','CDF','Democratic Republic of the Congo','CD','COD','Congo, the Democratic Republic of the','002','017',0,'243','CD.png'),(184,'Avarua','Cook Islander','184','New Zealand dollar','NZD','cent','$','Cook Islands','CK','COK','Cook Islands','009','061',0,'682','CK.png'),(188,'San José','Costa Rican','188','Costa Rican colón (pl. colones)','CRC','céntimo','₡','Republic of Costa Rica','CR','CRI','Costa Rica','019','013',0,'506','CR.png'),(191,'Zagreb','Croatian','191','kuna (inv.)','HRK','lipa (inv.)','kn','Republic of Croatia','HR','HRV','Croatia','150','039',1,'385','HR.png'),(192,'Havana','Cuban','192','Cuban peso','CUP','centavo','₱','Republic of Cuba','CU','CUB','Cuba','019','029',0,'53','CU.png'),(196,'Nicosia','Cypriot','196','euro','EUR','cent','CYP','Republic of Cyprus','CY','CYP','Cyprus','142','145',1,'357','CY.png'),(203,'Prague','Czech','203','Czech koruna (pl. koruny)','CZK','halér','Kč','Czech Republic','CZ','CZE','Czech Republic','150','151',1,'420','CZ.png'),(204,'Porto Novo (BJ1)','Beninese','204','CFA franc (BCEAO)','XOF','centime','XOF','Republic of Benin','BJ','BEN','Benin','002','011',0,'229','BJ.png'),(208,'Copenhagen','Danish','208','Danish krone','DKK','øre (inv.)','kr','Kingdom of Denmark','DK','DNK','Denmark','150','154',1,'45','DK.png'),(212,'Roseau','Dominican','212','East Caribbean dollar','XCD','cent','$','Commonwealth of Dominica','DM','DMA','Dominica','019','029',0,'1','DM.png'),(214,'Santo Domingo','Dominican','214','Dominican peso','DOP','centavo','RD$','Dominican Republic','DO','DOM','Dominican Republic','019','029',0,'1','DO.png'),(218,'Quito','Ecuadorian','218','US dollar','USD','cent','$','Republic of Ecuador','EC','ECU','Ecuador','019','005',0,'593','EC.png'),(222,'San Salvador','Salvadoran','222','Salvadorian colón (pl. colones)','SVC','centavo','$','Republic of El Salvador','SV','SLV','El Salvador','019','013',0,'503','SV.png'),(226,'Malabo','Equatorial Guinean','226','CFA franc (BEAC)','XAF','centime','FCF','Republic of Equatorial Guinea','GQ','GNQ','Equatorial Guinea','002','017',0,'240','GQ.png'),(231,'Addis Ababa','Ethiopian','231','birr (inv.)','ETB','cent','ETB','Federal Democratic Republic of Ethiopia','ET','ETH','Ethiopia','002','014',0,'251','ET.png'),(232,'Asmara','Eritrean','232','nakfa','ERN','cent','Nfk','State of Eritrea','ER','ERI','Eritrea','002','014',0,'291','ER.png'),(233,'Tallinn','Estonian','233','euro','EUR','cent','kr','Republic of Estonia','EE','EST','Estonia','150','154',1,'372','EE.png'),(234,'Tórshavn','Faeroese','234','Danish krone','DKK','øre (inv.)','kr','Faeroe Islands','FO','FRO','Faroe Islands','150','154',0,'298','FO.png'),(238,'Stanley','Falkland Islander','238','Falkland Islands pound','FKP','new penny','£','Falkland Islands','FK','FLK','Falkland Islands (Malvinas)','019','005',0,'500','FK.png'),(239,'King Edward Point (Grytviken)','of South Georgia and the South Sandwich Islands','239','','','','£','South Georgia and the South Sandwich Islands','GS','SGS','South Georgia and the South Sandwich Islands','','',0,'44','GS.png'),(242,'Suva','Fijian','242','Fiji dollar','FJD','cent','$','Republic of Fiji','FJ','FJI','Fiji','009','054',0,'679','FJ.png'),(246,'Helsinki','Finnish','246','euro','EUR','cent','€','Republic of Finland','FI','FIN','Finland','150','154',1,'358','FI.png'),(248,'Mariehamn','Åland Islander','248','euro','EUR','cent',NULL,'Åland Islands','AX','ALA','Åland Islands','150','154',0,'358',NULL),(250,'Paris','French','250','euro','EUR','cent','€','French Republic','FR','FRA','France','150','155',1,'33','FR.png'),(254,'Cayenne','Guianese','254','euro','EUR','cent','€','French Guiana','GF','GUF','French Guiana','019','005',0,'594','GF.png'),(258,'Papeete','Polynesian','258','CFP franc','XPF','centime','XPF','French Polynesia','PF','PYF','French Polynesia','009','061',0,'689','PF.png'),(260,'Port-aux-Francais','of French Southern and Antarctic Lands','260','euro','EUR','cent','€','French Southern and Antarctic Lands','TF','ATF','French Southern Territories','','',0,'33','TF.png'),(262,'Djibouti','Djiboutian','262','Djibouti franc','DJF','','DJF','Republic of Djibouti','DJ','DJI','Djibouti','002','014',0,'253','DJ.png'),(266,'Libreville','Gabonese','266','CFA franc (BEAC)','XAF','centime','FCF','Gabonese Republic','GA','GAB','Gabon','002','017',0,'241','GA.png'),(268,'Tbilisi','Georgian','268','lari','GEL','tetri (inv.)','GEL','Georgia','GE','GEO','Georgia','142','145',0,'995','GE.png'),(270,'Banjul','Gambian','270','dalasi (inv.)','GMD','butut','D','Republic of the Gambia','GM','GMB','Gambia','002','011',0,'220','GM.png'),(275,NULL,'Palestinian','275',NULL,NULL,NULL,'₪',NULL,'PS','PSE','Palestinian Territory, Occupied','142','145',0,'970','PS.png'),(276,'Berlin','German','276','euro','EUR','cent','€','Federal Republic of Germany','DE','DEU','Germany','150','155',1,'49','DE.png'),(288,'Accra','Ghanaian','288','Ghana cedi','GHS','pesewa','¢','Republic of Ghana','GH','GHA','Ghana','002','011',0,'233','GH.png'),(292,'Gibraltar','Gibraltarian','292','Gibraltar pound','GIP','penny','£','Gibraltar','GI','GIB','Gibraltar','150','039',0,'350','GI.png'),(296,'Tarawa','Kiribatian','296','Australian dollar','AUD','cent','$','Republic of Kiribati','KI','KIR','Kiribati','009','057',0,'686','KI.png'),(300,'Athens','Greek','300','euro','EUR','cent','€','Hellenic Republic','GR','GRC','Greece','150','039',1,'30','GR.png'),(304,'Nuuk','Greenlander','304','Danish krone','DKK','øre (inv.)','kr','Greenland','GL','GRL','Greenland','019','021',0,'299','GL.png'),(308,'St George’s','Grenadian','308','East Caribbean dollar','XCD','cent','$','Grenada','GD','GRD','Grenada','019','029',0,'1','GD.png'),(312,'Basse Terre','Guadeloupean','312','euro','EUR ','cent','€','Guadeloupe','GP','GLP','Guadeloupe','019','029',0,'590','GP.png'),(316,'Agaña (Hagåtña)','Guamanian','316','US dollar','USD','cent','$','Territory of Guam','GU','GUM','Guam','009','057',0,'1','GU.png'),(320,'Guatemala City','Guatemalan','320','quetzal (pl. quetzales)','GTQ','centavo','Q','Republic of Guatemala','GT','GTM','Guatemala','019','013',0,'502','GT.png'),(324,'Conakry','Guinean','324','Guinean franc','GNF','','GNF','Republic of Guinea','GN','GIN','Guinea','002','011',0,'224','GN.png'),(328,'Georgetown','Guyanese','328','Guyana dollar','GYD','cent','$','Cooperative Republic of Guyana','GY','GUY','Guyana','019','005',0,'592','GY.png'),(332,'Port-au-Prince','Haitian','332','gourde','HTG','centime','G','Republic of Haiti','HT','HTI','Haiti','019','029',0,'509','HT.png'),(334,'Territory of Heard Island and McDonald Islands','of Territory of Heard Island and McDonald Islands','334','','','','$','Territory of Heard Island and McDonald Islands','HM','HMD','Heard Island and McDonald Islands','','',0,'61','HM.png'),(336,'Vatican City','of the Holy See/of the Vatican','336','euro','EUR','cent','€','the Holy See/ Vatican City State','VA','VAT','Holy See (Vatican City State)','150','039',0,'39','VA.png'),(340,'Tegucigalpa','Honduran','340','lempira','HNL','centavo','L','Republic of Honduras','HN','HND','Honduras','019','013',0,'504','HN.png'),(344,'(HK3)','Hong Kong Chinese','344','Hong Kong dollar','HKD','cent','$','Hong Kong Special Administrative Region of the People’s Republic of China (HK2)','HK','HKG','Hong Kong','142','030',0,'852','HK.png'),(348,'Budapest','Hungarian','348','forint (inv.)','HUF','(fillér (inv.))','Ft','Republic of Hungary','HU','HUN','Hungary','150','151',1,'36','HU.png'),(352,'Reykjavik','Icelander','352','króna (pl. krónur)','ISK','','kr','Republic of Iceland','IS','ISL','Iceland','150','154',1,'354','IS.png'),(356,'New Delhi','Indian','356','Indian rupee','INR','paisa','₹','Republic of India','IN','IND','India','142','034',0,'91','IN.png'),(360,'Jakarta','Indonesian','360','Indonesian rupiah (inv.)','IDR','sen (inv.)','Rp','Republic of Indonesia','ID','IDN','Indonesia','142','035',0,'62','ID.png'),(364,'Tehran','Iranian','364','Iranian rial','IRR','(dinar) (IR1)','﷼','Islamic Republic of Iran','IR','IRN','Iran, Islamic Republic of','142','034',0,'98','IR.png'),(368,'Baghdad','Iraqi','368','Iraqi dinar','IQD','fils (inv.)','IQD','Republic of Iraq','IQ','IRQ','Iraq','142','145',0,'964','IQ.png'),(372,'Dublin','Irish','372','euro','EUR','cent','€','Ireland (IE1)','IE','IRL','Ireland','150','154',1,'353','IE.png'),(376,'(IL1)','Israeli','376','shekel','ILS','agora','₪','State of Israel','IL','ISR','Israel','142','145',0,'972','IL.png'),(380,'Rome','Italian','380','euro','EUR','cent','€','Italian Republic','IT','ITA','Italy','150','039',1,'39','IT.png'),(384,'Yamoussoukro (CI1)','Ivorian','384','CFA franc (BCEAO)','XOF','centime','XOF','Republic of Côte d’Ivoire','CI','CIV','Côte d\'Ivoire','002','011',0,'225','CI.png'),(388,'Kingston','Jamaican','388','Jamaica dollar','JMD','cent','$','Jamaica','JM','JAM','Jamaica','019','029',0,'1','JM.png'),(392,'Tokyo','Japanese','392','yen (inv.)','JPY','(sen (inv.)) (JP1)','¥','Japan','JP','JPN','Japan','142','030',0,'81','JP.png'),(398,'Astana','Kazakh','398','tenge (inv.)','KZT','tiyn','лв','Republic of Kazakhstan','KZ','KAZ','Kazakhstan','142','143',0,'7','KZ.png'),(400,'Amman','Jordanian','400','Jordanian dinar','JOD','100 qirsh','JOD','Hashemite Kingdom of Jordan','JO','JOR','Jordan','142','145',0,'962','JO.png'),(404,'Nairobi','Kenyan','404','Kenyan shilling','KES','cent','KES','Republic of Kenya','KE','KEN','Kenya','002','014',0,'254','KE.png'),(408,'Pyongyang','North Korean','408','North Korean won (inv.)','KPW','chun (inv.)','₩','Democratic People’s Republic of Korea','KP','PRK','Korea, Democratic People\'s Republic of','142','030',0,'850','KP.png'),(410,'Seoul','South Korean','410','South Korean won (inv.)','KRW','(chun (inv.))','₩','Republic of Korea','KR','KOR','Korea, Republic of','142','030',0,'82','KR.png'),(414,'Kuwait City','Kuwaiti','414','Kuwaiti dinar','KWD','fils (inv.)','KWD','State of Kuwait','KW','KWT','Kuwait','142','145',0,'965','KW.png'),(417,'Bishkek','Kyrgyz','417','som','KGS','tyiyn','лв','Kyrgyz Republic','KG','KGZ','Kyrgyzstan','142','143',0,'996','KG.png'),(418,'Vientiane','Lao','418','kip (inv.)','LAK','(at (inv.))','₭','Lao People’s Democratic Republic','LA','LAO','Lao People\'s Democratic Republic','142','035',0,'856','LA.png'),(422,'Beirut','Lebanese','422','Lebanese pound','LBP','(piastre)','£','Lebanese Republic','LB','LBN','Lebanon','142','145',0,'961','LB.png'),(426,'Maseru','Basotho','426','loti (pl. maloti)','LSL','sente','L','Kingdom of Lesotho','LS','LSO','Lesotho','002','018',0,'266','LS.png'),(428,'Riga','Latvian','428','lats (pl. lati)','LVL','santims','Ls','Republic of Latvia','LV','LVA','Latvia','150','154',1,'371','LV.png'),(430,'Monrovia','Liberian','430','Liberian dollar','LRD','cent','$','Republic of Liberia','LR','LBR','Liberia','002','011',0,'231','LR.png'),(434,'Tripoli','Libyan','434','Libyan dinar','LYD','dirham','LYD','Socialist People’s Libyan Arab Jamahiriya','LY','LBY','Libya','002','015',0,'218','LY.png'),(438,'Vaduz','Liechtensteiner','438','Swiss franc','CHF','centime','CHF','Principality of Liechtenstein','LI','LIE','Liechtenstein','150','155',1,'423','LI.png'),(440,'Vilnius','Lithuanian','440','litas (pl. litai)','LTL','centas','Lt','Republic of Lithuania','LT','LTU','Lithuania','150','154',1,'370','LT.png'),(442,'Luxembourg','Luxembourger','442','euro','EUR','cent','€','Grand Duchy of Luxembourg','LU','LUX','Luxembourg','150','155',1,'352','LU.png'),(446,'Macao (MO3)','Macanese','446','pataca','MOP','avo','MOP','Macao Special Administrative Region of the People’s Republic of China (MO2)','MO','MAC','Macao','142','030',0,'853','MO.png'),(450,'Antananarivo','Malagasy','450','ariary','MGA','iraimbilanja (inv.)','MGA','Republic of Madagascar','MG','MDG','Madagascar','002','014',0,'261','MG.png'),(454,'Lilongwe','Malawian','454','Malawian kwacha (inv.)','MWK','tambala (inv.)','MK','Republic of Malawi','MW','MWI','Malawi','002','014',0,'265','MW.png'),(458,'Kuala Lumpur (MY1)','Malaysian','458','ringgit (inv.)','MYR','sen (inv.)','RM','Malaysia','MY','MYS','Malaysia','142','035',0,'60','MY.png'),(462,'Malé','Maldivian','462','rufiyaa','MVR','laari (inv.)','Rf','Republic of Maldives','MV','MDV','Maldives','142','034',0,'960','MV.png'),(466,'Bamako','Malian','466','CFA franc (BCEAO)','XOF','centime','XOF','Republic of Mali','ML','MLI','Mali','002','011',0,'223','ML.png'),(470,'Valletta','Maltese','470','euro','EUR','cent','MTL','Republic of Malta','MT','MLT','Malta','150','039',1,'356','MT.png'),(474,'Fort-de-France','Martinican','474','euro','EUR','cent','€','Martinique','MQ','MTQ','Martinique','019','029',0,'596','MQ.png'),(478,'Nouakchott','Mauritanian','478','ouguiya','MRO','khoum','UM','Islamic Republic of Mauritania','MR','MRT','Mauritania','002','011',0,'222','MR.png'),(480,'Port Louis','Mauritian','480','Mauritian rupee','MUR','cent','₨','Republic of Mauritius','MU','MUS','Mauritius','002','014',0,'230','MU.png'),(484,'Mexico City','Mexican','484','Mexican peso','MXN','centavo','$','United Mexican States','MX','MEX','Mexico','019','013',0,'52','MX.png'),(492,'Monaco','Monegasque','492','euro','EUR','cent','€','Principality of Monaco','MC','MCO','Monaco','150','155',0,'377','MC.png'),(496,'Ulan Bator','Mongolian','496','tugrik','MNT','möngö (inv.)','₮','Mongolia','MN','MNG','Mongolia','142','030',0,'976','MN.png'),(498,'Chisinau','Moldovan','498','Moldovan leu (pl. lei)','MDL','ban','MDL','Republic of Moldova','MD','MDA','Moldova, Republic of','150','151',0,'373','MD.png'),(499,'Podgorica','Montenegrin','499','euro','EUR','cent',NULL,'Montenegro','ME','MNE','Montenegro','150','039',0,'382',NULL),(500,'Plymouth (MS2)','Montserratian','500','East Caribbean dollar','XCD','cent','$','Montserrat','MS','MSR','Montserrat','019','029',0,'1','MS.png'),(504,'Rabat','Moroccan','504','Moroccan dirham','MAD','centime','MAD','Kingdom of Morocco','MA','MAR','Morocco','002','015',0,'212','MA.png'),(508,'Maputo','Mozambican','508','metical','MZN','centavo','MT','Republic of Mozambique','MZ','MOZ','Mozambique','002','014',0,'258','MZ.png'),(512,'Muscat','Omani','512','Omani rial','OMR','baiza','﷼','Sultanate of Oman','OM','OMN','Oman','142','145',0,'968','OM.png'),(516,'Windhoek','Namibian','516','Namibian dollar','NAD','cent','$','Republic of Namibia','NA','NAM','Namibia','002','018',0,'264','NA.png'),(520,'Yaren','Nauruan','520','Australian dollar','AUD','cent','$','Republic of Nauru','NR','NRU','Nauru','009','057',0,'674','NR.png'),(524,'Kathmandu','Nepalese','524','Nepalese rupee','NPR','paisa (inv.)','₨','Nepal','NP','NPL','Nepal','142','034',0,'977','NP.png'),(528,'Amsterdam (NL2)','Dutch','528','euro','EUR','cent','€','Kingdom of the Netherlands','NL','NLD','Netherlands','150','155',1,'31','NL.png'),(531,'Willemstad','Curaçaoan','531','Netherlands Antillean guilder (CW1)','ANG','cent',NULL,'Curaçao','CW','CUW','Curaçao','019','029',0,'599',NULL),(533,'Oranjestad','Aruban','533','Aruban guilder','AWG','cent','ƒ','Aruba','AW','ABW','Aruba','019','029',0,'297','AW.png'),(534,'Philipsburg','Sint Maartener','534','Netherlands Antillean guilder (SX1)','ANG','cent',NULL,'Sint Maarten','SX','SXM','Sint Maarten (Dutch part)','019','029',0,'721',NULL),(535,NULL,'of Bonaire, Sint Eustatius and Saba','535','US dollar','USD','cent',NULL,NULL,'BQ','BES','Bonaire, Sint Eustatius and Saba','019','029',0,'599',NULL),(540,'Nouméa','New Caledonian','540','CFP franc','XPF','centime','XPF','New Caledonia','NC','NCL','New Caledonia','009','054',0,'687','NC.png'),(548,'Port Vila','Vanuatuan','548','vatu (inv.)','VUV','','Vt','Republic of Vanuatu','VU','VUT','Vanuatu','009','054',0,'678','VU.png'),(554,'Wellington','New Zealander','554','New Zealand dollar','NZD','cent','$','New Zealand','NZ','NZL','New Zealand','009','053',0,'64','NZ.png'),(558,'Managua','Nicaraguan','558','córdoba oro','NIO','centavo','C$','Republic of Nicaragua','NI','NIC','Nicaragua','019','013',0,'505','NI.png'),(562,'Niamey','Nigerien','562','CFA franc (BCEAO)','XOF','centime','XOF','Republic of Niger','NE','NER','Niger','002','011',0,'227','NE.png'),(566,'Abuja','Nigerian','566','naira (inv.)','NGN','kobo (inv.)','₦','Federal Republic of Nigeria','NG','NGA','Nigeria','002','011',0,'234','NG.png'),(570,'Alofi','Niuean','570','New Zealand dollar','NZD','cent','$','Niue','NU','NIU','Niue','009','061',0,'683','NU.png'),(574,'Kingston','Norfolk Islander','574','Australian dollar','AUD','cent','$','Territory of Norfolk Island','NF','NFK','Norfolk Island','009','053',0,'672','NF.png'),(578,'Oslo','Norwegian','578','Norwegian krone (pl. kroner)','NOK','øre (inv.)','kr','Kingdom of Norway','NO','NOR','Norway','150','154',1,'47','NO.png'),(580,'Saipan','Northern Mariana Islander','580','US dollar','USD','cent','$','Commonwealth of the Northern Mariana Islands','MP','MNP','Northern Mariana Islands','009','057',0,'1','MP.png'),(581,'United States Minor Outlying Islands','of United States Minor Outlying Islands','581','US dollar','USD','cent','$','United States Minor Outlying Islands','UM','UMI','United States Minor Outlying Islands','','',0,'1','UM.png'),(583,'Palikir','Micronesian','583','US dollar','USD','cent','$','Federated States of Micronesia','FM','FSM','Micronesia, Federated States of','009','057',0,'691','FM.png'),(584,'Majuro','Marshallese','584','US dollar','USD','cent','$','Republic of the Marshall Islands','MH','MHL','Marshall Islands','009','057',0,'692','MH.png'),(585,'Melekeok','Palauan','585','US dollar','USD','cent','$','Republic of Palau','PW','PLW','Palau','009','057',0,'680','PW.png'),(586,'Islamabad','Pakistani','586','Pakistani rupee','PKR','paisa','₨','Islamic Republic of Pakistan','PK','PAK','Pakistan','142','034',0,'92','PK.png'),(591,'Panama City','Panamanian','591','balboa','PAB','centésimo','B/.','Republic of Panama','PA','PAN','Panama','019','013',0,'507','PA.png'),(598,'Port Moresby','Papua New Guinean','598','kina (inv.)','PGK','toea (inv.)','PGK','Independent State of Papua New Guinea','PG','PNG','Papua New Guinea','009','054',0,'675','PG.png'),(600,'Asunción','Paraguayan','600','guaraní','PYG','céntimo','Gs','Republic of Paraguay','PY','PRY','Paraguay','019','005',0,'595','PY.png'),(604,'Lima','Peruvian','604','new sol','PEN','céntimo','S/.','Republic of Peru','PE','PER','Peru','019','005',0,'51','PE.png'),(608,'Manila','Filipino','608','Philippine peso','PHP','centavo','Php','Republic of the Philippines','PH','PHL','Philippines','142','035',0,'63','PH.png'),(612,'Adamstown','Pitcairner','612','New Zealand dollar','NZD','cent','$','Pitcairn Islands','PN','PCN','Pitcairn','009','061',0,'649','PN.png'),(616,'Warsaw','Polish','616','zloty','PLN','grosz (pl. groszy)','zł','Republic of Poland','PL','POL','Poland','150','151',1,'48','PL.png'),(620,'Lisbon','Portuguese','620','euro','EUR','cent','€','Portuguese Republic','PT','PRT','Portugal','150','039',1,'351','PT.png'),(624,'Bissau','Guinea-Bissau national','624','CFA franc (BCEAO)','XOF','centime','XOF','Republic of Guinea-Bissau','GW','GNB','Guinea-Bissau','002','011',0,'245','GW.png'),(626,'Dili','East Timorese','626','US dollar','USD','cent','$','Democratic Republic of East Timor','TL','TLS','Timor-Leste','142','035',0,'670','TL.png'),(630,'San Juan','Puerto Rican','630','US dollar','USD','cent','$','Commonwealth of Puerto Rico','PR','PRI','Puerto Rico','019','029',0,'1','PR.png'),(634,'Doha','Qatari','634','Qatari riyal','QAR','dirham','﷼','State of Qatar','QA','QAT','Qatar','142','145',0,'974','QA.png'),(638,'Saint-Denis','Reunionese','638','euro','EUR','cent','€','Réunion','RE','REU','Réunion','002','014',0,'262','RE.png'),(642,'Bucharest','Romanian','642','Romanian leu (pl. lei)','RON','ban (pl. bani)','lei','Romania','RO','ROU','Romania','150','151',1,'40','RO.png'),(643,'Moscow','Russian','643','Russian rouble','RUB','kopek','руб','Russian Federation','RU','RUS','Russian Federation','150','151',0,'7','RU.png'),(646,'Kigali','Rwandan; Rwandese','646','Rwandese franc','RWF','centime','RWF','Republic of Rwanda','RW','RWA','Rwanda','002','014',0,'250','RW.png'),(652,'Gustavia','of Saint Barthélemy','652','euro','EUR','cent',NULL,'Collectivity of Saint Barthélemy','BL','BLM','Saint Barthélemy','019','029',0,'590',NULL),(654,'Jamestown','Saint Helenian','654','Saint Helena pound','SHP','penny','£','Saint Helena, Ascension and Tristan da Cunha','SH','SHN','Saint Helena, Ascension and Tristan da Cunha','002','011',0,'290','SH.png'),(659,'Basseterre','Kittsian; Nevisian','659','East Caribbean dollar','XCD','cent','$','Federation of Saint Kitts and Nevis','KN','KNA','Saint Kitts and Nevis','019','029',0,'1','KN.png'),(660,'The Valley','Anguillan','660','East Caribbean dollar','XCD','cent','$','Anguilla','AI','AIA','Anguilla','019','029',0,'1','AI.png'),(662,'Castries','Saint Lucian','662','East Caribbean dollar','XCD','cent','$','Saint Lucia','LC','LCA','Saint Lucia','019','029',0,'1','LC.png'),(663,'Marigot','of Saint Martin','663','euro','EUR','cent',NULL,'Collectivity of Saint Martin','MF','MAF','Saint Martin (French part)','019','029',0,'590',NULL),(666,'Saint-Pierre','St-Pierrais; Miquelonnais','666','euro','EUR','cent','€','Territorial Collectivity of Saint Pierre and Miquelon','PM','SPM','Saint Pierre and Miquelon','019','021',0,'508','PM.png'),(670,'Kingstown','Vincentian','670','East Caribbean dollar','XCD','cent','$','Saint Vincent and the Grenadines','VC','VCT','Saint Vincent and the Grenadines','019','029',0,'1','VC.png'),(674,'San Marino','San Marinese','674','euro','EUR ','cent','€','Republic of San Marino','SM','SMR','San Marino','150','039',0,'378','SM.png'),(678,'São Tomé','São Toméan','678','dobra','STD','centavo','Db','Democratic Republic of São Tomé and Príncipe','ST','STP','Sao Tome and Principe','002','017',0,'239','ST.png'),(682,'Riyadh','Saudi Arabian','682','riyal','SAR','halala','﷼','Kingdom of Saudi Arabia','SA','SAU','Saudi Arabia','142','145',0,'966','SA.png'),(686,'Dakar','Senegalese','686','CFA franc (BCEAO)','XOF','centime','XOF','Republic of Senegal','SN','SEN','Senegal','002','011',0,'221','SN.png'),(688,'Belgrade','Serb','688','Serbian dinar','RSD','para (inv.)',NULL,'Republic of Serbia','RS','SRB','Serbia','150','039',0,'381',NULL),(690,'Victoria','Seychellois','690','Seychelles rupee','SCR','cent','₨','Republic of Seychelles','SC','SYC','Seychelles','002','014',0,'248','SC.png'),(694,'Freetown','Sierra Leonean','694','leone','SLL','cent','Le','Republic of Sierra Leone','SL','SLE','Sierra Leone','002','011',0,'232','SL.png'),(702,'Singapore','Singaporean','702','Singapore dollar','SGD','cent','$','Republic of Singapore','SG','SGP','Singapore','142','035',0,'65','SG.png'),(703,'Bratislava','Slovak','703','euro','EUR','cent','Sk','Slovak Republic','SK','SVK','Slovakia','150','151',1,'421','SK.png'),(704,'Hanoi','Vietnamese','704','dong','VND','(10 hào','₫','Socialist Republic of Vietnam','VN','VNM','Viet Nam','142','035',0,'84','VN.png'),(705,'Ljubljana','Slovene','705','euro','EUR','cent','€','Republic of Slovenia','SI','SVN','Slovenia','150','039',1,'386','SI.png'),(706,'Mogadishu','Somali','706','Somali shilling','SOS','cent','S','Somali Republic','SO','SOM','Somalia','002','014',0,'252','SO.png'),(710,'Pretoria (ZA1)','South African','710','rand','ZAR','cent','R','Republic of South Africa','ZA','ZAF','South Africa','002','018',0,'27','ZA.png'),(716,'Harare','Zimbabwean','716','Zimbabwe dollar (ZW1)','ZWL','cent','Z$','Republic of Zimbabwe','ZW','ZWE','Zimbabwe','002','014',0,'263','ZW.png'),(724,'Madrid','Spaniard','724','euro','EUR','cent','€','Kingdom of Spain','ES','ESP','Spain','150','039',1,'34','ES.png'),(728,'Juba','South Sudanese','728','South Sudanese pound','SSP','piaster',NULL,'Republic of South Sudan','SS','SSD','South Sudan','002','015',0,'211',NULL),(729,'Khartoum','Sudanese','729','Sudanese pound','SDG','piastre',NULL,'Republic of the Sudan','SD','SDN','Sudan','002','015',0,'249',NULL),(732,'Al aaiun','Sahrawi','732','Moroccan dirham','MAD','centime','MAD','Western Sahara','EH','ESH','Western Sahara','002','015',0,'212','EH.png'),(740,'Paramaribo','Surinamese','740','Surinamese dollar','SRD','cent','$','Republic of Suriname','SR','SUR','Suriname','019','005',0,'597','SR.png'),(744,'Longyearbyen','of Svalbard','744','Norwegian krone (pl. kroner)','NOK','øre (inv.)','kr','Svalbard and Jan Mayen','SJ','SJM','Svalbard and Jan Mayen','150','154',0,'47','SJ.png'),(748,'Mbabane','Swazi','748','lilangeni','SZL','cent','SZL','Kingdom of Swaziland','SZ','SWZ','Swaziland','002','018',0,'268','SZ.png'),(752,'Stockholm','Swedish','752','krona (pl. kronor)','SEK','öre (inv.)','kr','Kingdom of Sweden','SE','SWE','Sweden','150','154',1,'46','SE.png'),(756,'Berne','Swiss','756','Swiss franc','CHF','centime','CHF','Swiss Confederation','CH','CHE','Switzerland','150','155',1,'41','CH.png'),(760,'Damascus','Syrian','760','Syrian pound','SYP','piastre','£','Syrian Arab Republic','SY','SYR','Syrian Arab Republic','142','145',0,'963','SY.png'),(762,'Dushanbe','Tajik','762','somoni','TJS','diram','TJS','Republic of Tajikistan','TJ','TJK','Tajikistan','142','143',0,'992','TJ.png'),(764,'Bangkok','Thai','764','baht (inv.)','THB','satang (inv.)','฿','Kingdom of Thailand','TH','THA','Thailand','142','035',0,'66','TH.png'),(768,'Lomé','Togolese','768','CFA franc (BCEAO)','XOF','centime','XOF','Togolese Republic','TG','TGO','Togo','002','011',0,'228','TG.png'),(772,'(TK2)','Tokelauan','772','New Zealand dollar','NZD','cent','$','Tokelau','TK','TKL','Tokelau','009','061',0,'690','TK.png'),(776,'Nuku’alofa','Tongan','776','pa’anga (inv.)','TOP','seniti (inv.)','T$','Kingdom of Tonga','TO','TON','Tonga','009','061',0,'676','TO.png'),(780,'Port of Spain','Trinidadian; Tobagonian','780','Trinidad and Tobago dollar','TTD','cent','TT$','Republic of Trinidad and Tobago','TT','TTO','Trinidad and Tobago','019','029',0,'1','TT.png'),(784,'Abu Dhabi','Emirian','784','UAE dirham','AED','fils (inv.)','AED','United Arab Emirates','AE','ARE','United Arab Emirates','142','145',0,'971','AE.png'),(788,'Tunis','Tunisian','788','Tunisian dinar','TND','millime','TND','Republic of Tunisia','TN','TUN','Tunisia','002','015',0,'216','TN.png'),(792,'Ankara','Turk','792','Turkish lira (inv.)','TRY','kurus (inv.)','YTL','Republic of Turkey','TR','TUR','Turkey','142','145',0,'90','TR.png'),(795,'Ashgabat','Turkmen','795','Turkmen manat (inv.)','TMT','tenge (inv.)','m','Turkmenistan','TM','TKM','Turkmenistan','142','143',0,'993','TM.png'),(796,'Cockburn Town','Turks and Caicos Islander','796','US dollar','USD','cent','$','Turks and Caicos Islands','TC','TCA','Turks and Caicos Islands','019','029',0,'1','TC.png'),(798,'Funafuti','Tuvaluan','798','Australian dollar','AUD','cent','$','Tuvalu','TV','TUV','Tuvalu','009','061',0,'688','TV.png'),(800,'Kampala','Ugandan','800','Uganda shilling','UGX','cent','UGX','Republic of Uganda','UG','UGA','Uganda','002','014',0,'256','UG.png'),(804,'Kiev','Ukrainian','804','hryvnia','UAH','kopiyka','₴','Ukraine','UA','UKR','Ukraine','150','151',0,'380','UA.png'),(807,'Skopje','of the former Yugoslav Republic of Macedonia','807','denar (pl. denars)','MKD','deni (inv.)','ден','the former Yugoslav Republic of Macedonia','MK','MKD','Macedonia, the former Yugoslav Republic of','150','039',0,'389','MK.png'),(818,'Cairo','Egyptian','818','Egyptian pound','EGP','piastre','£','Arab Republic of Egypt','EG','EGY','Egypt','002','015',0,'20','EG.png'),(826,'London','British','826','pound sterling','GBP','penny (pl. pence)','£','United Kingdom of Great Britain and Northern Ireland','GB','GBR','United Kingdom','150','154',1,'44','GB.png'),(831,'St Peter Port','of Guernsey','831','Guernsey pound (GG2)','GGP (GG2)','penny (pl. pence)',NULL,'Bailiwick of Guernsey','GG','GGY','Guernsey','150','154',0,'44',NULL),(832,'St Helier','of Jersey','832','Jersey pound (JE2)','JEP (JE2)','penny (pl. pence)',NULL,'Bailiwick of Jersey','JE','JEY','Jersey','150','154',0,'44',NULL),(833,'Douglas','Manxman; Manxwoman','833','Manx pound (IM2)','IMP (IM2)','penny (pl. pence)',NULL,'Isle of Man','IM','IMN','Isle of Man','150','154',0,'44',NULL),(834,'Dodoma (TZ1)','Tanzanian','834','Tanzanian shilling','TZS','cent','TZS','United Republic of Tanzania','TZ','TZA','Tanzania, United Republic of','002','014',0,'255','TZ.png'),(840,'Washington DC','American','840','US dollar','USD','cent','$','United States of America','US','USA','United States','019','021',0,'1','US.png'),(850,'Charlotte Amalie','US Virgin Islander','850','US dollar','USD','cent','$','United States Virgin Islands','VI','VIR','Virgin Islands, U.S.','019','029',0,'1','VI.png'),(854,'Ouagadougou','Burkinabe','854','CFA franc (BCEAO)','XOF','centime','XOF','Burkina Faso','BF','BFA','Burkina Faso','002','011',0,'226','BF.png'),(858,'Montevideo','Uruguayan','858','Uruguayan peso','UYU','centésimo','$U','Eastern Republic of Uruguay','UY','URY','Uruguay','019','005',0,'598','UY.png'),(860,'Tashkent','Uzbek','860','sum (inv.)','UZS','tiyin (inv.)','лв','Republic of Uzbekistan','UZ','UZB','Uzbekistan','142','143',0,'998','UZ.png'),(862,'Caracas','Venezuelan','862','bolívar fuerte (pl. bolívares fuertes)','VEF','céntimo','Bs','Bolivarian Republic of Venezuela','VE','VEN','Venezuela, Bolivarian Republic of','019','005',0,'58','VE.png'),(876,'Mata-Utu','Wallisian; Futunan; Wallis and Futuna Islander','876','CFP franc','XPF','centime','XPF','Wallis and Futuna','WF','WLF','Wallis and Futuna','009','061',0,'681','WF.png'),(882,'Apia','Samoan','882','tala (inv.)','WST','sene (inv.)','WS$','Independent State of Samoa','WS','WSM','Samoa','009','061',0,'685','WS.png'),(887,'San’a','Yemenite','887','Yemeni rial','YER','fils (inv.)','﷼','Republic of Yemen','YE','YEM','Yemen','142','145',0,'967','YE.png'),(894,'Lusaka','Zambian','894','Zambian kwacha (inv.)','ZMW','ngwee (inv.)','ZK','Republic of Zambia','ZM','ZMB','Zambia','002','014',0,'260','ZM.png');
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faq`
--

DROP TABLE IF EXISTS `faq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faq` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `answer` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faq`
--

LOCK TABLES `faq` WRITE;
/*!40000 ALTER TABLE `faq` DISABLE KEYS */;
INSERT INTO `faq` VALUES (1,'How can I download the App on iPad?','You can download the App from the AppStore https://itunes.apple.com/us/app/pickatale-200+-interactive/id669433655?mt=8',1,'2017-01-08 17:48:33','2017-01-12 07:25:40'),(2,'How can I download the Pickatale app on my mobile device?','You can download the App from the AppStore https://itunes.apple.com/us/app/pickatale-200+-interactive/id669433655?mt=8 of or Google Play https://play.google.com/store/apps/details?id=com.WisdomEdition.Pickatale.Bookshelf&hl=en.',0,'2017-01-08 17:49:00','2017-01-12 07:27:46'),(3,'How can I cancel my subscription? ','Cancellation from a subscription on App is very simple and it is done directly through Apple (you can cancel at any time).\r\n\r\nBelow the instructions:\r\n1.      From your device\'s Home screen, tap App Store.\r\n2.      Tap Featured at the bottom of the screen.\r\n3.      Scroll to the bottom of the page.\r\n4.      Tap the Apple ID button in the lower-left corner. (If you are not signed in, tap the Sign In button, and sign in with your Apple ID. Then, scroll back to the bottom of the page, and tap the Apple ID button.)\r\n5.      Tap the View Apple ID button.\r\n6.      Enter your password and tap OK.\r\n7.      From the main account page, scroll down and tap Manage App Subscriptions. If you don\'t have app subscriptions this button will not be displayed.\r\n8.      You\'ll then be taken to your App Subscriptions page.\r\n\r\nTo turn off auto-renewal:\r\n1.      From your Manage App Subscription page, choose an app subscription. \r\n2.      Tap the subscription category for which you want to disable auto-renewal.\r\n3.      Tap On to toggle the switch to Off.\r\n\r\nSubscription on Website\r\nLogin at club.pickatale.com, press the “X” on the language you want to cancel the subscription and follow the steps.',0,'2017-01-08 17:49:22','2017-01-12 07:29:31'),(4,'Could you please add the French language in your apps?','Some of our titles are translated in French such as \"Tex and Patches\", \"Brian’s great adventure\", and we are working on making our books in as many languages available, so stay tuned.',0,'2017-01-08 17:49:35','2017-01-12 07:30:48'),(5,'I can\'t enter in Pickatale App (or My Pickatale App doesn\'t work)','We need some information in order to solve the problem.\r\nPlease answer the following questions:\r\n1. What kind of device are you using (I Pad, I Phone, Android) and which model?\r\n2. Are you using the last app version?\r\n3. Which username are you using to log in?\r\n4. Which payment option did you use for subscription (on App Store, Play Store, by payment card on club.pickatale.com)?\r\n5. Did you use a prepaid card or coupon?\r\n6. In which country are you using the App?\r\nAs soon as we get the answers, we’ll send you a feedback with possible solution.',0,'2017-01-08 17:49:52','2017-01-12 07:31:33'),(6,'I can\'t log in, because I can\'t remember my password','For new password you can use the \" forgot password\" link in the login screen of the App or site. If you do not receive an e-mail with information how to reset the password, please let us know. If you need more assistance please email us through contact@pickatale.com, our support team can guid you through the process.',0,'2017-01-08 17:50:07','2017-01-12 07:32:49'),(7,'I have to switch the music off each time I turn a page. Can you do something about it? ','Please send us information about which book, reading style and device/platform you are using. \r\nWe\'ll take a look into it and see if we can fix it.',0,'2017-01-12 07:33:21','2017-01-12 07:33:21');
/*!40000 ALTER TABLE `faq` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `levels`
--

DROP TABLE IF EXISTS `levels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `levels` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rgt` int(11) DEFAULT NULL,
  `depth` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `levels_slug_unique` (`slug`),
  KEY `levels_parent_id_index` (`parent_id`),
  KEY `levels_lft_index` (`lft`),
  KEY `levels_rgt_index` (`rgt`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `levels`
--

LOCK TABLES `levels` WRITE;
/*!40000 ALTER TABLE `levels` DISABLE KEYS */;
INSERT INTO `levels` VALUES (1,'level-1-0','Level 1',NULL,1,2,0,NULL,NULL),(2,'level-2-0','Level 2',NULL,1,2,0,NULL,NULL),(3,'0-2','0-2',NULL,1,2,0,NULL,NULL),(4,'2-4','2-4',NULL,1,2,0,NULL,NULL),(5,'4-6','4-6',NULL,1,2,0,NULL,NULL),(6,'6-8','6-8',NULL,1,2,0,NULL,NULL);
/*!40000 ALTER TABLE `levels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mainpages`
--

DROP TABLE IF EXISTS `mainpages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mainpages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagemedium` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagethumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sliderdescription` text COLLATE utf8_unicode_ci NOT NULL,
  `paragraph` text COLLATE utf8_unicode_ci NOT NULL,
  `headertitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `secondtitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seconddescription` text COLLATE utf8_unicode_ci NOT NULL,
  `secondheadertitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thirddescription` text COLLATE utf8_unicode_ci NOT NULL,
  `sectiontitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `itemimage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `itemtitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `itemdescription` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item2image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item2title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item2description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item3image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item3title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item3description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item4image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item4title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item4description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item5image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item5title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item5description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item6image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item6title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item6description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `workflow_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mainpages_user_id_foreign` (`user_id`),
  CONSTRAINT `mainpages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mainpages`
--

LOCK TABLES `mainpages` WRITE;
/*!40000 ALTER TABLE `mainpages` DISABLE KEYS */;
INSERT INTO `mainpages` VALUES (1,'Educators','educators','educators.jpg','educators.jpg','educators.jpg','<p>If you can make it engaging, you can encourage learning</p>\r\n','<p>Children learn through play. Join us at our learning playground filled with amazing interactive storybooks, created with fun in mind. We bring creativity, entertainment and technology together to deliver an exciting experience that enables children all over the world to learn by interacting and connecting with stories. Discover how learning can be really fun!</p>\r\n','Create the most captivating classroom experience ','How it works','<p>Educators, welcome to your own custom classroom. Get access to all the tools for interactive, improved and personalized education and unlock tons of fun in your classroom. Soon we are releasing our Learning Management Platform. Equipped with useful data, you could monitor the learning process of every student in your classroom. Stay tuned and see how you can easily compare the knowledge levels between children and offer personalized lessons.</p>\r\n','How it works','https://player.vimeo.com/video/65544938','<p>Create an account and subscribe on Pickatale and you will instantly get access to many popular classics as well as original stories.<br />\r\n<br />\r\nOnce you have installed and subscribed for the Pickatale app on your mobile device, you can download an unlimited number of books into your library and read stories online or offline anytime!<br />\r\n<br />\r\nChoose one or more of the 5 languages available (English, Norwegian, Danish, Swedish and Chinese), add your students and start evaluating their individual success immediately.</p>\r\n\r\n<p></p>\r\n\r\n<p></p>\r\n','Why you will love Pickatale','756171484150021.png','Create unique student profiles','                  Get personalized recommendations based on children\'s reading level and interests.','197261484150157.png','Get unlimited access to 1000+ titles','We have selected the best, most helpful and most interesting storybooks that bring children’s imagination to life.','926861484150157.png','Make reading an exciting experience','Thanks to Pickatale thousands of kids enjoy reading more and read for longer periods of time.','392221483544658.png','Track students reading progress with ease','You’ll have all the tools that makes tracking progress of your students a piece of cake.\r\n','296121484150189.png','Read anytime and anywhere on mobile','Currently you can use Pickatale on your favorite Android and iOS devices, smartphones and tablets.','741351483544658.png','Enjoy kidSAFE environment','All books are age-appropriate for kids 12 and under. We don’t display ads or in-app purchases\r\nto children.',12,1,'2017-01-04 15:17:40','2017-01-15 11:15:20'),(2,'Parents','parents','parents.jpg','parents.jpg','parents.jpg','<p>Learning a new language has never been easier and more enjoyable for children</p>\r\n','<p>Children learn through play. Join us at our learning playground filled with amazing interactive storybooks, created with fun in mind. We bring creativity, entertainment and technology together to deliver an exciting experience that enables children all over the world to learn by interacting and connecting with the stories. Discover how learning can be really fun!</p>\r\n','Family time is the best time!','','<p>That’s why we developed an app that enables the whole family to join the fun. With Pickatale, the fastest growing digital library is at your child’s fingertips. You can spend quality time with your children and watch them learn English and other languages with ease. With our Learning Management System coming soon, you will be able to monitor your children’s progress and get personalized recommendations based on their reading achievements. You could use this data to reward your children, motivate them to accomplish more and entice them into reading.</p>\r\n','How Pickatale works','https://player.vimeo.com/video/65544938','<p></p>\r\n\r\n<p>By subscribing to Pickatale you will unlock our remarkable library with over 1000 carefully selected storybooks. Children 12 and under might enjoy the popular classics as well as plenty of original stories.<br />\r\n </p>\r\n\r\n<p></p>\r\n\r\n<p>Pickatale app is available for a monthly subscription on any iOS or Android device, smartphones and tablets. You can read our stories on 5 languages (English, Norwegian, Danish, Swedish and Chinese), online and offline.</p>\r\n\r\n<p></p>\r\n\r\n<p></p>\r\n\r\n<p></p>\r\n\r\n<p></p>\r\n\r\n<p></p>\r\n','Why you will love Pickatale','710171483546310.png','Learn a new language easily','                        Just follow the narration or tap each word and object in the storybook to get it pronounced.','812091483546310.png','Harness the power of storytelling','Many exciting tales are just a tap away. Explore the world of animals, adventures, princesses and more.','583731483546310.png','Make reading an exciting experience','Thanks to Pickatale thousands of kids enjoy reading more and read for longer periods of time.','328761483546310.png','Discover new storybooks every month','The fun never ends with Pickatale. We release new storybooks every month.','973011483546310.png','Enjoy kidSAFE environment','All books are appropriate for kids 12 and under. We don’t display ads or in-app purchases to children.','268861483546310.png','Inspire a lasting love of reading','Kids love interactive storybooks and they are the best way to keep them engaged.',12,1,'2017-01-04 16:11:50','2017-01-15 11:13:18'),(3,'Partners','partners','partners.png','partners.png','partners.png','','<p>If you are visiting this page, chances are you are in children&#39;s learning industry.<br />\r\nAre you looking for ways to increase profits, reach new audiences or strategic partners in the children&#39;s education market? If the answer is yes, you are in the right place. Pickatale is already working closely with some of the biggest names to deliver best experiences and improve learning for children worldwide.<br />\r\nDiscover some common partnership types below and use the contact form at the end of the page to reach out to us.</p>\r\n','','','','','','','Win new customers and increase  revenue with Pickatale','789061484150299.png','Content owners','        Pickatale students not only read more than the average children, but they also tend to enjoy reading more.','186851484150567.png','Distribution partners ','Preload Pickatale on your device (tablet) or distribute our content to your network - schools or learning platforms. ','696121484150361.png','Publishers','Promote us and earn commissions. We are partnering with relevant app owners, media, app stores and print publishers.','633541484150361.png','Co-development','Get your own branded digital book library, license some of our books or co-develop product together with us.','537581484150361.png','Market experts','Become our strategic partner for your market if you have know-how, connections and team to build our brand in your market.','731741484150361.png','China partners','Use our network of 20000+ schools and kindergartens to bring your education product or learning platform to China.',12,1,'2017-01-08 16:26:16','2017-01-14 17:09:00');
/*!40000 ALTER TABLE `mainpages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(6,'2014_10_12_100000_create_password_resets_table',2),(7,'2016_12_27_181755_users_table_update',2),(8,'2016_12_28_080153_create_static_page_table',2),(9,'2016_12_28_082106_create_workflow_table',2),(10,'2016_12_28_214932_create_slider_table',3),(11,'2016_12_29_193833_create_scripts_table',4),(15,'2016_12_29_212917_create_table_educators',5),(18,'2017_01_07_144926_setup_countries_table',6),(19,'2017_01_07_144927_charify_countries_table',6),(20,'2017_01_07_145828_create_categories_table',6),(21,'2017_01_07_170203_create_bundle_table',7),(22,'2017_01_07_173321_create_partners_table',7),(23,'2017_01_07_174611_create_leveles_table',7),(24,'2017_01_07_180933_create_settings_table',8),(27,'2017_01_07_205432_create_books_table',9),(28,'2017_01_07_223338_create_sliders_table',9),(30,'2017_01_08_174100_create_faq_table',10),(31,'2017_01_11_203926_update_table_book',11);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partners`
--

DROP TABLE IF EXISTS `partners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `partners` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagemedium` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagethumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `workflow_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `partners_user_id_foreign` (`user_id`),
  CONSTRAINT `partners_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partners`
--

LOCK TABLES `partners` WRITE;
/*!40000 ALTER TABLE `partners` DISABLE KEYS */;
INSERT INTO `partners` VALUES (1,'Disney','disney.png','disney.png','disney.png','http://disney.com','<p>Disney</p>\r\n',1,1,'2017-01-07 17:07:00','2017-01-07 17:07:00'),(2,'Baby First','baby-first.png','baby-first.png','baby-first.png','http://babyfirst.com','<p>Baby First Description</p>\r\n',1,1,'2017-01-07 17:07:27','2017-01-07 17:07:27');
/*!40000 ALTER TABLE `partners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `scripts`
--

DROP TABLE IF EXISTS `scripts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `scripts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `scripts`
--

LOCK TABLES `scripts` WRITE;
/*!40000 ALTER TABLE `scripts` DISABLE KEYS */;
/*!40000 ALTER TABLE `scripts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mainurl` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logomedium` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logothumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `skype` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gplus` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `flickr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pinterest` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `workflow_id` int(11) NOT NULL,
  `lat` double(20,10) NOT NULL,
  `lng` double(20,10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `settings_user_id_foreign` (`user_id`),
  CONSTRAINT `settings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'Pickatale - 1000+ beautiful storybooks for children','http://pickatale.com','contact@pickatale.com','<p>Meta description goes here</p>\r\n','logo.png','logo.png','logo.png','Skopje City Tower, Ljubljanska 6-1/1, Skopje','+389 70 000 000','https://twitter.com/PickataleApp','https://www.facebook.com/Pickatale','#','https://www.linkedin.com/company/pickatale','#','#','#','https://www.pinterest.com/pickatale/',1,1,42.0045510000,21.3917185000,'2017-01-07 17:36:53','2017-01-17 21:53:21');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slider` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagemedium` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagethumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `workflow_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `slider_user_id_foreign` (`user_id`),
  CONSTRAINT `slider_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slider`
--

LOCK TABLES `slider` WRITE;
/*!40000 ALTER TABLE `slider` DISABLE KEYS */;
INSERT INTO `slider` VALUES (2,'1st slider','1st-slider.png','1st-slider.png','1st-slider.png','','<p>Play. Educate. Inspire.​​<br />\r\nWith Pickatale children learn through play. 1000+ beautiful and engaging storybooks are just a tap away.</p>\r\n',12,1,'2017-01-14 14:43:00','2017-01-14 14:43:00');
/*!40000 ALTER TABLE `slider` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sliders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagemedium` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagethumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `book_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `workflow_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sliders_book_id_foreign` (`book_id`),
  KEY `sliders_user_id_foreign` (`user_id`),
  CONSTRAINT `sliders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `sliders_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `book` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sliders`
--

LOCK TABLES `sliders` WRITE;
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staticpage`
--

DROP TABLE IF EXISTS `staticpage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `staticpage` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imagemedium` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imagethumb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `metadescription` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `workflow_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `staticpage_user_id_foreign` (`user_id`),
  CONSTRAINT `staticpage_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staticpage`
--

LOCK TABLES `staticpage` WRITE;
/*!40000 ALTER TABLE `staticpage` DISABLE KEYS */;
INSERT INTO `staticpage` VALUES (1,'Parents','parents','parents.png','parents.png','parents.png','<p>What is Pickatale</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</p>\r\n\r\n<p></p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</p>\r\n\r\n<p></p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</p>\r\n\r\n<p><img id=\"u616_img\" src=\"http://dev.pickatale.com:8088/images/parents/u616.png\" /></p>\r\n\r\n<p>Video</p>\r\n\r\n<p>How  it works</p>\r\n\r\n<p>Lore Ipsum</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</p>\r\n\r\n<p>Benefits</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</p>\r\n','<p>What is Pickatale</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</p>\r\n\r\n<p></p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</p>\r\n\r\n<p></p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</p>\r\n\r\n<p><img id=\"u616_img\" src=\"http://dev.pickatale.com:8088/images/parents/u616.png\" /></p>\r\n\r\n<p>Video</p>\r\n\r\n<p>How  it works</p>\r\n\r\n<p>Lore Ipsum</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</p>\r\n\r\n<p>Benefits</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</p>\r\n',1,1,'2016-12-28 20:23:06','2016-12-28 20:23:06'),(3,'Partners','partners',NULL,NULL,NULL,'<h1>Lorem Ipsum</h1>\r\n\r\n<h4>\"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\"</h4>\r\n\r\n<h5>\"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...\"</h5>\r\n\r\n<hr />\r\n<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n','<h1>Lorem Ipsum</h1>\r\n\r\n<h4>\"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\"</h4>\r\n\r\n<h5>\"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...\"</h5>\r\n\r\n<hr />\r\n<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n',1,1,'2016-12-28 20:25:34','2016-12-28 20:25:34');
/*!40000 ALTER TABLE `staticpage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','manager','editor') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'editor',
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagethumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Martin Karadzinov','martin@myhost.mk','$2y$10$nlSI405Vq087m9y457T93OUc2UV34Hzc.4JlACHoFTZnxA0ZaPr/C','YXGlzpkcGdLZFKXuak1K6SQUETh1PJMYA5DPhTrLh07kozCph6imo6h8eypk','2016-12-21 17:13:47','2017-01-02 17:58:48','editor','457171483379928.jpg','457171483379928.jpg'),(12,'Test user','test@pickatale.com','$2y$10$ia6A87jileHn0kYrgxIr2u9XG6X87srV58TnSGA12xfWyWQRd/3y.','rSvjSTDzjZrI3oWnJpEG7WJFwHQc4geglDnmBfcgUVjkAkj7NgPVu9vxBWB4','2016-12-27 18:20:35','2016-12-29 13:46:43','admin','133511483001625.png','133511483001625.png'),(13,'Miki Dimitrov','mikidimitrov.izzy@gmail.com','$2y$10$hAzG69p4MqPEheSru/ieLe3rD.jw2QAwwJ5J1RSyXCrY96ZeEQ.Iy',NULL,'2016-12-28 21:29:50','2016-12-28 21:29:50','admin','753761482964189.jpg','753761482964189.jpg');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `workflow`
--

DROP TABLE IF EXISTS `workflow`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `workflow` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `workflow`
--

LOCK TABLES `workflow` WRITE;
/*!40000 ALTER TABLE `workflow` DISABLE KEYS */;
INSERT INTO `workflow` VALUES (1,'Published','colored-palegreen'),(2,'Waiting','colored-orange');
/*!40000 ALTER TABLE `workflow` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-01-18  0:48:38
