/*
SQLyog Community v12.16 (64 bit)
MySQL - 5.6.25 : Database - bighouseweb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `anexo` */

DROP TABLE IF EXISTS `anexo`;

CREATE TABLE `anexo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(160) DEFAULT NULL,
  `anexo` varchar(50) DEFAULT NULL,
  `criado_em` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `anexo` */

insert  into `anexo`(`id`,`nome`,`anexo`,`criado_em`) values 
(2,'Blindspot','1460047475_8033.txt','2016-04-07 13:44:35'),
(3,'Testando arquivo ZIP','1460047597_8397.zip','2016-04-07 13:46:37');

/*Table structure for table `artigo` */

DROP TABLE IF EXISTS `artigo`;

CREATE TABLE `artigo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(160) DEFAULT NULL,
  `texto` text,
  `criado_em` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `artigo` */

insert  into `artigo`(`id`,`titulo`,`texto`,`criado_em`) values 
(1,'Fernanda Gentil termina casamento com empresário','Coloque o texto do artigo aqui.','2016-04-07 00:37:17'),
(3,'Grêmio agora pede para adiar jogo do Gaúcho','Texto aqui... Asdf...','2016-04-07 00:38:15'),
(9,'Mais um artigo','Texto do artigo aqui...','2016-04-07 13:47:38');

/*Table structure for table `imagem` */

DROP TABLE IF EXISTS `imagem`;

CREATE TABLE `imagem` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(160) DEFAULT NULL,
  `imagem` varchar(50) DEFAULT NULL,
  `criado_em` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `imagem` */

insert  into `imagem`(`id`,`nome`,`imagem`,`criado_em`) values 
(3,'Bandeira','1460044915_7885.jpg','2016-04-07 13:01:55'),
(5,'Foo Fighters','1460045765_7764.jpg','2016-04-07 13:16:05');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
