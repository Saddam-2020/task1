/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.6-MariaDB : Database - yesdoct
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`yesdoct` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `yesdoct`;

/*Table structure for table `diseases` */

DROP TABLE IF EXISTS `diseases`;

CREATE TABLE `diseases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dname` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `diseases` */

insert  into `diseases`(`id`,`dname`,`description`) values 
(1,'dhyrea','this is demo data this is demo data this is demo data. '),
(2,'nausea','this is demo data this is demo data this is demo data'),
(3,'diabetes','this is demo data this is demo data this is demo data this is demo data this is demo data this is demo data');

/*Table structure for table `payments` */

DROP TABLE IF EXISTS `payments`;

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_number` varchar(50) NOT NULL,
  `txn_id` varchar(50) NOT NULL,
  `payment_gross` float(10,2) NOT NULL,
  `currency_code` varchar(5) NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `payments` */

insert  into `payments`(`payment_id`,`item_number`,`txn_id`,`payment_gross`,`currency_code`,`payment_status`) values 
(1,'3','04419090WL0169404',15.00,'USD','Pending'),
(2,'3','3WC118995X3065139',15.00,'USD','Pending'),
(3,'3','7EE45366PP366023M',15.00,'USD','Pending'),
(4,'3','25497036MT564352H',15.00,'USD','Pending');

/*Table structure for table `queries` */

DROP TABLE IF EXISTS `queries`;

CREATE TABLE `queries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `age` varchar(20) NOT NULL,
  `diabetes` varchar(20) NOT NULL,
  `medication` varchar(20) NOT NULL,
  `allergy` varchar(20) NOT NULL,
  `bp` varchar(20) NOT NULL,
  `message` longtext NOT NULL,
  `image` blob NOT NULL,
  `paid` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

/*Data for the table `queries` */

insert  into `queries`(`id`,`name`,`email`,`phone`,`age`,`diabetes`,`medication`,`allergy`,`bp`,`message`,`image`,`paid`) values 
(1,'waleed bhatti','waleed.akbarbhatti@gmail.com','4567788','21','','','on','on','demo','',''),
(2,'waleed bhatti','waleed.akbarbhatti@gmail.com','4567788','21','','','on','on','demo','',''),
(3,'Waleed Akbar Bhatti','waleed.akbarbhatti@gmail.com','+923238878877','21','','','yes','no','jiocjdio','',''),
(4,'Waleed Akbar Bhattiabc','abc@xyz.com','090078601','70','','','yes','yes','scdasscmkwcmweokx','logo.png',''),
(5,'Waleed Akbar Bhatti','waleed.akbarbhatti@gmail.com','+923238878877','21','','','no','yes','nsdjk ncjksd csdkc jks','','no'),
(6,'alex','alex@123.com','12345678901','123','','','no','yes','ndsjkcnksdlmxas,','','no'),
(7,'Sign Master','waleed.akbarbhatti@gmail.com','03238878877','21','','','yes','yes','hsdncs','','no'),
(8,'Waleed Akbar Bhatti','waleed.akbarbhatti@gmail.com','+923238878877','70','','','no','no','xcnkjksd','','no'),
(9,'skdjncsj','sdn@ksdcn.com','1123213342234','12','','','no','no','smc  njknd','','no'),
(10,'Sign Master','acv@aw.com','03238878877','21','','','no','no','ghvghxfh','','no'),
(11,'','','','','','','no','no','','','no'),
(12,'sdkmc','mxcm@r.com','sdcnjsdk','','','','no','no','sjkdc njkwnwjk','','no'),
(13,'john doe','johndoe@xyz.com','12344321333','25','yes','no','no','yes','demo text demo text demo text demo text demo text demo textdemo text demo text demo text demo text demo text demo text demo text demo text demo text demo text demo text demo text demo text','cafe-tracker (1) (1).jpg','no');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
