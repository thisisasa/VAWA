/*
SQLyog Ultimate v8.55 
MySQL - 8.0.31 : Database - storesss
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`storesss` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `storesss`;

/*Table structure for table `items` */

CREATE TABLE `items` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `items` */

insert  into `items`(`id`,`name`,`price`) values (1,'Canon EOS',36000),(2,'Nikon DSLR',40000),(3,'Sony DSLR',45000),(4,'Olympus DSLR ',50000),(5,'Titan Model #301 ',13000),(6,'Titan Model #201  ',3000),(7,'HMT Milan  ',8000),(8,'Faber Luba #111 ',18000),(9,'H&W ',800),(10,'Luis Phil ',1000),(11,'John Zok ',1500),(12,'Jhalsani ',1300);

/*Table structure for table `user_profiles` */

CREATE TABLE `user_profiles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `bio` text,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `user_profiles` */

/*Table structure for table `users` */

CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`contact`,`city`,`address`,`image`) values (1,'Venu','venu@xyz.com','123','1649611400','Bangalore','Sai Ram road','Venu674576fb6c1031.80607638.png'),(2,'nini','nini123@gmail.com','123','1649611406','Phnom Penh','Battambang','nini6743f121b4f244.71967074.jpg'),(45,'chaeyoung','parkchaeyoung@gmail.com','123456','1649611400','Phnom Penh','Battambang',''),(46,'jisoo','kimjisoo@gmail.com','123456','1649611400','Phnom Penh','Battambang','');

/*Table structure for table `users_items` */

CREATE TABLE `users_items` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `item_id` int NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `item_id` (`item_id`)
) ENGINE=MyISAM AUTO_INCREMENT=90 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `users_items` */

insert  into `users_items`(`id`,`user_id`,`item_id`,`status`) values (88,1,2,'Confirmed'),(2,11,2,'Confirmed'),(3,6,2,'Confirmed'),(4,11,2,'Confirmed'),(5,12,1,'Confirmed'),(6,12,2,'Confirmed'),(8,13,1,'Confirmed'),(9,13,2,'Confirmed'),(12,14,1,'Added to cart'),(13,14,2,'Added to cart'),(16,20,1,'Confirmed'),(17,21,1,'Added to cart'),(18,21,2,'Added to cart'),(20,22,1,'Added to cart'),(21,22,2,'Added to cart'),(87,1,3,'Confirmed'),(79,1,2,'Confirmed'),(84,0,3,'Added to cart'),(82,1,2,'Confirmed'),(89,1,1,'Confirmed'),(73,0,10,'Added to cart'),(72,0,2,'Added to cart'),(71,0,1,'Added to cart');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
