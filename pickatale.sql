-- MySQL dump 10.13  Distrib 5.7.16, for Linux (x86_64)
--
-- Host: localhost    Database: homestead
-- ------------------------------------------------------
-- Server version	5.7.16-0ubuntu0.16.04.1

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mainpages`
--

LOCK TABLES `mainpages` WRITE;
/*!40000 ALTER TABLE `mainpages` DISABLE KEYS */;
INSERT INTO `mainpages` VALUES (1,'Educators','educators','educators.jpg','educators.jpg','educators.jpg','<p>If you can make it engaging, you can encourage learning</p>\r\n','<p>Children learn through play. Join us at our learning playground filled with amazing interactive storybooks, created with fun in mind. We bring creativity, entertainment and technology together to deliver an exciting experience that enables children all over the world to learn by interacting and connecting with the stories. Discover how learning can be really fun!</p>\r\n','Create the most captivating  classroom experience ','How it works','<p>Educators, welcome to your own custom classroom. Get access to all the tools for interactive, improved and personalized education and unlock tons of fun in your classroom. Soon we are releasing our Adaptive Learning System. Equipped with useful data, you could monitor the learning process of every student in your classroom. Stay tuned and see how you can easily compare the knowledge levels between different children and offer personalized lessons.</p>\r\n','How it works','https://player.vimeo.com/video/62329521','<p>By subscribing to Pickatale you will unlock our remarkable library with over 1000 carefully selected storybooks. Children 12 and under might enjoy the popular classics as well as plenty of original stories. Pickatale app is available for a monthly subscription on any iOS or Android device, smartphones and tablets. You can read our stories on 5 languages (English, Norwegian, Danish, Swedish and Chinese), online and offline. </p>\r\n','Why will you love Pickatale','997951483544658.png','Learn a new language easily','      Just follow the narration or tap each word and object in the storybook to get it pronounced.','523151483544658.png','Harness the power of storytelling','Many exciting tales are just a tap away. Explore the world of animals, adventures, princesses and more.','870321483544658.png','Make reading an exciting experience','Thanks to Pickatale thousands of kids enjoy reading more and read for longer periods of time.','392221483544658.png','Discover new storybooks every month','The fun never ends with Pickatale. We release new storybooks every month.\r\n','957801483544658.png','Enjoy kidSAFE environment','All books are appropriate for kids 12 and under. We don’t display ads or in-app purchases to children.','741351483544658.png','Inspire a lasti love of reading','Kids love interactive storybooks and they are the best way to keep them engaged.',1,1,'2017-01-04 15:17:40','2017-01-04 19:42:27'),(2,'Parents','parents','parents.jpg','parents.jpg','parents.jpg','<p>Learning a new language has never been easier and more enjoyable for children</p>\r\n','<p>Children learn through play. Join us at our learning playground filled with amazing interactive storybooks, created with fun in mind. We bring creativity, entertainment and technology together to deliver an exciting experience that enables children all over the world to learn by interacting and connecting with the stories. Discover how learning can be really fun!</p>\r\n','Family time is the best time! ','','<p>That’s why we developed an app that enables the whole family to join the fun. With Pickatale the fastest growing digital book library is at your child’s fingertips. You can spend quality time with your children and watch them learn English and other languages with ease. With our Learning Management System coming soon, you will be able to monitor your children’s knowledge progress and get personalized recommendations based on their reading achievements. You could use this data to reward your children and motivate them to accomplish more. </p>\r\n','How it works','https://player.vimeo.com/video/62329521','<p>Create an account and subscribe on Pickatale and you will instantly get access to many popular classics as well as original stories. Once you have have installed and subscribed for the Pickatale app on your mobile device, you can download an unlimited number of books into your library and read stories online or offline anytime! Choose one or more of the 5 languages available (English, Norwegian, Danish, Swedish and Chinese), add your students and start evaluating their individual success immediately.</p>\r\n','Why will you love Pickatale','710171483546310.png','Learn a new language easily','   Just follow the narration or tap each word and object in the storybook to get it pronounced.','812091483546310.png','Harness the power of storytelling','Many exciting tales are just a tap away. Explore the world of animals, adventures, princesses and more.','583731483546310.png','Make reading an exciting experience','Thanks to Pickatale thousands of kids enjoy reading more and read for longer periods of time.','328761483546310.png','Discover new storybooks every month','The fun never ends with Pickatale. We release new storybooks every month.','973011483546310.png','Enjoy kidSAFE environment','All books are appropriate for kids 12 and under. We don’t display ads or in-app purchases to children.','268861483546310.png','Inspire a lasti love of reading','Kids love interactive storybooks and they are the best way to keep them engaged.',1,1,'2017-01-04 16:11:50','2017-01-04 19:46:00');
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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(6,'2014_10_12_100000_create_password_resets_table',2),(7,'2016_12_27_181755_users_table_update',2),(8,'2016_12_28_080153_create_static_page_table',2),(9,'2016_12_28_082106_create_workflow_table',2),(10,'2016_12_28_214932_create_slider_table',3),(11,'2016_12_29_193833_create_scripts_table',4),(15,'2016_12_29_212917_create_table_educators',5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
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
INSERT INTO `slider` VALUES (1,'Slide test','slide-test.png','slide-test.png','slide-test.png','http://pickatale.com','<p>Test description</p>\r\n',1,1,'2016-12-28 21:08:04','2017-01-04 20:15:02');
/*!40000 ALTER TABLE `slider` ENABLE KEYS */;
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

-- Dump completed on 2017-01-04 22:25:43
