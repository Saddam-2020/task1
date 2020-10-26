/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.6-MariaDB : Database - syednoufil_yesdoct
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`syednoufil_yesdoct` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `syednoufil_yesdoct`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `updationDate` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`id`,`username`,`pass`,`updationDate`) values 
(1,'admin','admin','28-12-2016 11:42:05 AM');

/*Table structure for table `appointment` */

DROP TABLE IF EXISTS `appointment`;

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doctorSpecialization` varchar(255) DEFAULT NULL,
  `doctorId` int(11) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `consultancyFees` int(11) DEFAULT NULL,
  `appointmentDate` varchar(255) DEFAULT NULL,
  `appointmentTime` varchar(255) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `userStatus` int(11) DEFAULT NULL,
  `doctorStatus` int(11) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `appointment` */

insert  into `appointment`(`id`,`doctorSpecialization`,`doctorId`,`userId`,`consultancyFees`,`appointmentDate`,`appointmentTime`,`postingDate`,`userStatus`,`doctorStatus`,`updationDate`) values 
(6,'Dentist',10,8,1000,'2020-07-31','5:30 PM','2020-07-31 17:22:09',1,1,NULL);

/*Table structure for table `diseasedetails` */

DROP TABLE IF EXISTS `diseasedetails`;

CREATE TABLE `diseasedetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `d_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `diseasedetails` */

insert  into `diseasedetails`(`id`,`title`,`description`,`d_id`) values 
(1,'b','<p>paragraph2</p>',10),
(2,'A cough is a reflex action to clear your airways of mucus and irritants such as dust or smoke.','<p>Lorem ipsum or lipsum as it is sometimes known is dummy text used in laying out print graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Ciceros De Finibus Bonorum et Malorum for use in a type specimen book.</p>',12),
(3,'A fever is a body temperature that is higher than normal','<p>This is some sample cAbsence seizure define as sudden loss of consciousness. Children are more affected to this seizure than adults. It occurs for few second patient experienced that he or she is gazing blankly into environment for a few seconds. Then after a few seconds seizure become completely disappeared. In this seizure, there is no risk of physical injuryontent.</p>',13),
(4,'A cough is a reflex action to clear your airways of mucus and irritants such as dust or smoke.','<p>Lorem ipsum or lipsum as it is sometimes known is dummy text used in laying out print graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Ciceros De Finibus Bonorum et Malorum for use in a type specimen book.</p>',14);

/*Table structure for table `diseasename` */

DROP TABLE IF EXISTS `diseasename`;

CREATE TABLE `diseasename` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `d_name` varchar(100) NOT NULL,
  `intro` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `diseasename` */

insert  into `diseasename`(`id`,`d_name`,`intro`) values 
(2,'Absence seizure','Absence seizure define as sudden loss of consciousness. Children are more affected to this seizure than adults. It occurs for few second patient experienced that he or she is gazing blankly into environment for a few seconds. Then after a few seconds seizure become completely disappeared. In this seizure, there is no risk of physical injury.'),
(3,'Acanthosis Nigricans ',' It is defining as dark and pigmented discoloration of the skin folds and creases. Mostly it affected the\r\narmpit, groin and neck area. Pigmented area become hard and thickened.\r\nIt typically affects the people who are obese and have diabetic mellitus. It is an alarming sign as it is the\r\nsign of internal organ cancer like liver and stomach. If it occurs in childhood then these children are\r\nmore prone to developed diabetic mellitus type 2 in future life.'),
(4,'',''),
(5,'',''),
(6,'',''),
(7,'Sugar','<p>s</p>\r\n<p>s</p>\r\n<p>s</p>\r\n<p>s</p>\r\n<p>s</p>\r\n<p>s</p>\r\n<p>s</p>'),
(8,'demo','<ol><li>a</li><li>a</li><li>a</li><li>a</li><li>a</li><li>a</li><li>a</li><li>a</li><li>a</li><li>aa</li></ol>'),
(9,'demo123','<ol><li>abcs</li><li>a</li><li>a</li><li>a</li><li>a</li><li>a</li><li>a</li><li>a</li><li>a</li><li>a</li><li>a</li><li>a</li><li>a</li><li>a</li></ol>'),
(10,'a','<p>paragraph1</p>'),
(11,'Fever','<p>A <strong>fever</strong> is a body temperature that is higher than normal. A normal temperature can vary from person to person, but it is usually around 98.6 F. A <strong>fever</strong> is not a disease. It is usually a sign that your body is trying to fight an illness or infection. Infections cause most <strong>fevers</strong></p>'),
(12,'Cough','<p>A cough is a reflex action to clear your airways of mucus and irritants such as dust or smoke. Its rarely a sign of anything serious. A dry cough means its tickly and doesnt produce any phlegm thick mucus. A chesty cough means phlegm is produced to help clear your airways.</p>'),
(13,'Cough_1','<p>Absence seizure define as sudden loss of consciousness. Children are more affected to this seizure than adults. It occurs for few second patient experienced that he or she is gazing blankly into environment for a few seconds. Then after a few seconds seizure become completely disappeared. In this seizure, there is no risk of physical injury.</p>'),
(14,'Fever','<p>Lorem ipsum or lipsum as it is sometimes known is dummy text used in laying out print graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Ciceros De Finibus Bonorum et Malorum for use in a type specimen book.</p>');

/*Table structure for table `diseases` */

DROP TABLE IF EXISTS `diseases`;

CREATE TABLE `diseases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dname` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `long_desc` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `diseases` */

insert  into `diseases`(`id`,`dname`,`description`,`long_desc`) values 
(5,'Abdominal aortic aneurysm','It is a condition in which there is present a dilated lower part of aorta. Aorta arises from heart and its anatomic position is in the middle of chest and abdomen to keep it in check is extremely important because rupture of aorta is life-threatening and require emergency surgery.','Symptoms\r\nThere is variation in the growth pattern. Some never ruptures, some stay small, some\r\nenlarge quickly over time. It&#39;s difficult to detect thatâ€™s why it remains silent and without\r\nany clinical manifestation for a very long time.\r\na. A pulsation near the umbilicus\r\nb. Back ache\r\nc. Deep and continual pain in or side of abdomen.\r\n\r\nCauses\r\n\r\nï‚· Arteriosclerosis = when fats/lipids are deposited and hardened in the inner\r\nlining of aorta and other major vessels\r\nï‚· A bacterial and fungal infection can sometime precipitate as abdominal\r\naortic aneurysm.\r\nï‚· Hypertension\r\nï‚· Traumatic incident like car accidents may cause abdominal aortic\r\naneurysm\r\nï‚· Inflammation in the blood vessels.\r\n\r\nComplications\r\nMany complications occur when there is aortic dissection in one or more layers of aorta.\r\nFaster growing aneurysm which are more likely to rupture causes life threatening\r\ncomplication.\r\n\r\na. Acute and deep abdominal or back ache feels like tearing sensation\r\nb. Hypotens'),
(6,'Symptoms','',' There is variation in the growth pattern. Some never ruptures, some stay small, some\r\nenlarge quickly over time. It&#39;s difficult to detect thatâ€™s why it remains silent and without\r\nany clinical manifestation for a very long time.\r\na. A pulsation near the umbilicus\r\nb. Back ache\r\nc. Deep and continual pain in or side of abdomen.');

/*Table structure for table `doctors` */

DROP TABLE IF EXISTS `doctors`;

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `specilization` varchar(255) DEFAULT NULL,
  `doctorName` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `docFees` varchar(255) DEFAULT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `docEmail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `doctors` */

insert  into `doctors`(`id`,`specilization`,`doctorName`,`address`,`docFees`,`contactno`,`docEmail`,`password`,`creationDate`,`updationDate`) values 
(10,'Dentist','Dr Ejaz','Karachi','1000',333,'drejaz@gmail.com','5f4dcc3b5aa765d61d8327deb882cf99','2020-07-31 16:52:03',NULL);

/*Table structure for table `doctorslog` */

DROP TABLE IF EXISTS `doctorslog`;

CREATE TABLE `doctorslog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT current_timestamp(),
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `doctorslog` */

insert  into `doctorslog`(`id`,`uid`,`username`,`userip`,`loginTime`,`logout`,`status`) values 
(20,10,'drejaz@gmail.com','::1\0\0\0\0\0\0\0\0\0\0\0\0\0','2020-07-31 17:17:19','31-07-2020 05:49:49 PM',1),
(21,NULL,'saleem@gmail.com','::1\0\0\0\0\0\0\0\0\0\0\0\0\0','2020-08-04 10:01:07',NULL,0),
(22,NULL,'saleem@gmail.com','::1\0\0\0\0\0\0\0\0\0\0\0\0\0','2020-08-04 10:01:12',NULL,0),
(23,NULL,'saleem@gmail.com','::1\0\0\0\0\0\0\0\0\0\0\0\0\0','2020-08-04 10:01:45',NULL,0),
(24,NULL,'saleem@gmail.com','::1\0\0\0\0\0\0\0\0\0\0\0\0\0','2020-08-04 10:01:51',NULL,0);

/*Table structure for table `doctorspecilization` */

DROP TABLE IF EXISTS `doctorspecilization`;

CREATE TABLE `doctorspecilization` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `specilization` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `doctorspecilization` */

insert  into `doctorspecilization`(`id`,`specilization`,`creationDate`,`updationDate`) values 
(2,'General Physician','2016-12-28 11:38:12','0000-00-00 00:00:00'),
(3,'Dermatologist','2016-12-28 11:38:48','0000-00-00 00:00:00'),
(4,'Homeopath','2016-12-28 11:39:26','0000-00-00 00:00:00'),
(6,'Dentist','2016-12-28 11:40:08','0000-00-00 00:00:00'),
(7,'Ear-Nose-Throat (Ent) Specialist','2016-12-28 11:41:18','0000-00-00 00:00:00'),
(10,'Bones Specialist demo','2017-01-07 13:07:53','0000-00-00 00:00:00'),
(13,'Gastroenterologist','2020-07-31 16:49:28','2020-07-31 16:49:41');

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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

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
(13,'john doe','johndoe@xyz.com','12344321333','25','yes','no','no','yes','demo text demo text demo text demo text demo text demo textdemo text demo text demo text demo text demo text demo text demo text demo text demo text demo text demo text demo text demo text','cafe-tracker (1) (1).jpg','no'),
(14,'Arif Qammar','ranger559@live.com','+96871502737','28','no','no','no','no','headache','','no'),
(15,'Arif Qammar','ranger559@live.com','71502737','28','yes','yes','yes','yes','ersgsdf sg','','no'),
(16,'Arif Qammar','ranger559@live.com','71502737','28','no','no','no','no','jj','','no'),
(17,'zxc','zxc@zxc.cvb','112233445556','24','no','no','no','no','djncsdjkcnweanca','','no'),
(18,'sdjhcbjs','zxjhcbh@jhbcdh.cnm','283921998','45','no','no','no','no','hellocn hjnx ncjkns sxnsh asjkhui jkdn jhdhx','','no'),
(19,'f','ranger559@live.com','f','f','no','no','no','no','cvbvbb','','no'),
(20,'Sameer chun','sameershk819@gmail.com','03303908092','26','no','yes','no','no','da dada dada asdasd asdadasd ad','','no'),
(21,'Zeeshan Soori','zeeshansoori@yahoo.com','03132615588','26','no','no','no','no','dsad sadadas da','','no');

/*Table structure for table `tblcontactus` */

DROP TABLE IF EXISTS `tblcontactus`;

CREATE TABLE `tblcontactus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` bigint(12) DEFAULT NULL,
  `message` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `AdminRemark` mediumtext DEFAULT NULL,
  `LastupdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `IsRead` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tblcontactus` */

/*Table structure for table `tblmedicalhistory` */

DROP TABLE IF EXISTS `tblmedicalhistory`;

CREATE TABLE `tblmedicalhistory` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `PatientID` int(10) DEFAULT NULL,
  `BloodPressure` varchar(200) DEFAULT NULL,
  `BloodSugar` varchar(200) NOT NULL,
  `Weight` varchar(100) DEFAULT NULL,
  `Temperature` varchar(200) DEFAULT NULL,
  `MedicalPres` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tblmedicalhistory` */

/*Table structure for table `tblpatient` */

DROP TABLE IF EXISTS `tblpatient`;

CREATE TABLE `tblpatient` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Docid` int(10) DEFAULT NULL,
  `PatientName` varchar(200) DEFAULT NULL,
  `PatientContno` bigint(10) DEFAULT NULL,
  `PatientEmail` varchar(200) DEFAULT NULL,
  `PatientGender` varchar(50) DEFAULT NULL,
  `PatientAdd` mediumtext DEFAULT NULL,
  `PatientAge` int(10) DEFAULT NULL,
  `PatientMedhis` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tblpatient` */

insert  into `tblpatient`(`ID`,`Docid`,`PatientName`,`PatientContno`,`PatientEmail`,`PatientGender`,`PatientAdd`,`PatientAge`,`PatientMedhis`,`CreationDate`,`UpdationDate`) values 
(6,10,'Saleem Habib',30022224,'saleem@gmail.com','male','Karachi',25,'Nothing to write','2020-07-31 17:19:25',NULL);

/*Table structure for table `userlog` */

DROP TABLE IF EXISTS `userlog`;

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT current_timestamp(),
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

/*Data for the table `userlog` */

insert  into `userlog`(`id`,`uid`,`username`,`userip`,`loginTime`,`logout`,`status`) values 
(24,NULL,'saleem@gmail.com','::1\0\0\0\0\0\0\0\0\0\0\0\0\0','2020-07-31 17:20:08',NULL,0),
(25,8,'saleem@gmail.com','::1\0\0\0\0\0\0\0\0\0\0\0\0\0','2020-07-31 17:21:34','31-07-2020 05:52:45 PM',1),
(26,NULL,'admin','::1\0\0\0\0\0\0\0\0\0\0\0\0\0','2020-09-27 05:01:45',NULL,0),
(27,NULL,'admin','::1\0\0\0\0\0\0\0\0\0\0\0\0\0','2020-09-27 05:03:39',NULL,0),
(28,NULL,'admin','::1\0\0\0\0\0\0\0\0\0\0\0\0\0','2020-09-27 05:03:54',NULL,0),
(29,NULL,'admin','::1\0\0\0\0\0\0\0\0\0\0\0\0\0','2020-09-27 05:04:16',NULL,0),
(30,NULL,'admin','::1\0\0\0\0\0\0\0\0\0\0\0\0\0','2020-09-27 05:06:26',NULL,0),
(31,NULL,'admin','::1\0\0\0\0\0\0\0\0\0\0\0\0\0','2020-09-27 05:08:53',NULL,0),
(32,NULL,'admin','::1\0\0\0\0\0\0\0\0\0\0\0\0\0','2020-09-27 05:10:31',NULL,0),
(33,NULL,'admin','::1\0\0\0\0\0\0\0\0\0\0\0\0\0','2020-09-27 05:10:39',NULL,0),
(34,NULL,'admin','::1\0\0\0\0\0\0\0\0\0\0\0\0\0','2020-09-27 05:11:09',NULL,0),
(35,NULL,'admin','::1\0\0\0\0\0\0\0\0\0\0\0\0\0','2020-09-27 05:11:44',NULL,0),
(36,NULL,'admin','::1\0\0\0\0\0\0\0\0\0\0\0\0\0','2020-09-27 05:12:23',NULL,0),
(37,1,'admin','::1\0\0\0\0\0\0\0\0\0\0\0\0\0','2020-09-27 05:13:11',NULL,1),
(38,NULL,'admin','::1\0\0\0\0\0\0\0\0\0\0\0\0\0','2020-09-28 15:10:09',NULL,0),
(39,NULL,'admin','::1\0\0\0\0\0\0\0\0\0\0\0\0\0','2020-09-28 15:12:20',NULL,0),
(40,NULL,'admin','::1\0\0\0\0\0\0\0\0\0\0\0\0\0','2020-09-28 15:12:30',NULL,0),
(41,NULL,'admin','::1\0\0\0\0\0\0\0\0\0\0\0\0\0','2020-10-02 17:20:17',NULL,0),
(42,NULL,'admin','::1\0\0\0\0\0\0\0\0\0\0\0\0\0','2020-10-02 17:21:04',NULL,0),
(43,NULL,'admin','::1\0\0\0\0\0\0\0\0\0\0\0\0\0','2020-10-02 17:22:30',NULL,0),
(44,1,'admin','::1\0\0\0\0\0\0\0\0\0\0\0\0\0','2020-10-02 17:26:24',NULL,1),
(45,NULL,'admin','::1\0\0\0\0\0\0\0\0\0\0\0\0\0','2020-10-26 10:07:09',NULL,0),
(46,1,'admin','::1\0\0\0\0\0\0\0\0\0\0\0\0\0','2020-10-26 10:07:35','26-10-2020 10:40:13 AM',1),
(47,NULL,'admin','::1\0\0\0\0\0\0\0\0\0\0\0\0\0','2020-10-26 10:13:52',NULL,0),
(48,NULL,'admin','::1\0\0\0\0\0\0\0\0\0\0\0\0\0','2020-10-26 10:14:01',NULL,0),
(49,1,'admin','::1\0\0\0\0\0\0\0\0\0\0\0\0\0','2020-10-26 10:14:15','26-10-2020 10:45:29 AM',1),
(50,1,'admin','::1\0\0\0\0\0\0\0\0\0\0\0\0\0','2020-10-26 10:41:52','26-10-2020 11:15:21 AM',1),
(51,1,'admin','::1\0\0\0\0\0\0\0\0\0\0\0\0\0','2020-10-26 10:47:37','26-10-2020 11:28:12 AM',1),
(52,1,'admin','::1\0\0\0\0\0\0\0\0\0\0\0\0\0','2020-10-26 11:02:18','26-10-2020 11:56:38 AM',1),
(53,1,'admin','::1\0\0\0\0\0\0\0\0\0\0\0\0\0','2020-10-26 12:35:22','26-10-2020 01:11:04 PM',1),
(54,1,'admin','::1\0\0\0\0\0\0\0\0\0\0\0\0\0','2020-10-26 12:45:49','26-10-2020 01:21:11 PM',1),
(55,1,'admin','::1\0\0\0\0\0\0\0\0\0\0\0\0\0','2020-10-26 13:02:51','26-10-2020 02:04:38 PM',1),
(56,1,'admin','::1\0\0\0\0\0\0\0\0\0\0\0\0\0','2020-10-26 13:42:17','26-10-2020 02:12:43 PM',1),
(57,1,'admin','::1\0\0\0\0\0\0\0\0\0\0\0\0\0','2020-10-26 13:43:36',NULL,1);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullName` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `regDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`fullName`,`address`,`city`,`gender`,`email`,`password`,`regDate`,`updationDate`) values 
(8,'saleem','karachi','Karachi','male','saleem@gmail.com','5f4dcc3b5aa765d61d8327deb882cf99','2020-07-31 17:21:14',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
