/*
SQLyog Community v12.09 (64 bit)
MySQL - 5.7.16-log : Database - public
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`public` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `public`;

/*Table structure for table `kafedras` */

DROP TABLE IF EXISTS `kafedras`;

CREATE TABLE `kafedras` (
  `id_k` int(11) NOT NULL AUTO_INCREMENT,
  `name_k` varchar(100) NOT NULL,
  PRIMARY KEY (`id_k`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

/*Data for the table `kafedras` */

insert  into `kafedras`(`id_k`,`name_k`) values (1,'Кафедра машиновикористання в землеробстві'),(2,'Кафедра технічний сервіс та системи в АПК'),(3,'Кафедра мехатронні системи та транспорні технології'),(4,'Кафедра сільськогосподарські машини'),(5,'Кафедра ТКМ'),(6,'Кафедра електротехнології та теплові процеси'),(7,'Кафедра електротехники та електромеханіки імені професора В.В. Овчарова'),(8,'Кафедра електроенергетика та автоматизація'),(9,'Кафедра обладнання переробних і харчових виробництв імені професора Ф.Ю. Ялпачика'),(10,'Кафедра технічна механіка'),(11,'Кафедра інформаційні технології проектування ім. В.М. Найдиша'),(12,'Кафедра комп’ютерні науки'),(13,'Кафедра вища математика та фізика'),(14,'Кафедра підприємніцтво, торгівля та біржова діяльність'),(15,'Кафедра менеджмент'),(16,'Кафедра економіки'),(17,'Кафедра маркетинг'),(18,'Кафедра облік і оподаткування'),(19,'Кафедра фінанси, банківська справа та страхування'),(20,'Публічне управління, адміністрування та право'),(21,'Кафедра харчових технологій та готельно-ресторанної справи'),(22,'Кафедра геоекології і землеутрою'),(23,'Кафедра рослинництва імені професора Калитки В.В.'),(24,'Плодоовочівництво, виноградарство та біохімія'),(25,'Цивільна безпека'),(26,'Кафедра суспільно-гуманітарних наук'),(27,'Кафедра іноземні мови'),(28,'Кафедра фізичного виховання і спорту');

/*Table structure for table `pubs` */

DROP TABLE IF EXISTS `pubs`;

CREATE TABLE `pubs` (
  `id_pubs` int(11) NOT NULL AUTO_INCREMENT,
  `id_kaf` int(11) NOT NULL,
  `name_pub` varchar(100) NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id_pubs`),
  KEY `FK_kaf` (`id_kaf`),
  CONSTRAINT `FK_kaf` FOREIGN KEY (`id_kaf`) REFERENCES `kafedras` (`id_k`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

/*Data for the table `pubs` */

insert  into `pubs`(`id_pubs`,`id_kaf`,`name_pub`,`url`) values (5,5,'test_pub','http://childandsociety.ru/ojs/index.php/cas/pages/view/typeofpublications'),(6,1,'Нова публікація5','http://slither.io/'),(7,4,'Нова публікація','http://www.cyberforum.ru/php-database/thread549616.html'),(18,1,'Нова публікація','https://www.w3schools.com/');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `role` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id_user`,`username`,`email`,`role`,`password`) values (1,'admin','admin@gmail.com','адмін','admin'),(2,'new','ex@gmail.com','коритувач','1111'),(3,'new_user','shev@gmail.com','користувач','111'),(4,'new_admin','ddd@mail.com','адмін','2222');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
