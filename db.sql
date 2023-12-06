/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 5.7.9 : Database - animal_resource_kmm
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`animal_resource_kmm` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `animal_resource_kmm`;

/*Table structure for table `tbl_allocationrequest` */

DROP TABLE IF EXISTS `tbl_allocationrequest`;

CREATE TABLE `tbl_allocationrequest` (
  `request_id` int(11) NOT NULL AUTO_INCREMENT,
  `kennel_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`request_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_allocationrequest` */

insert  into `tbl_allocationrequest`(`request_id`,`kennel_id`,`user_id`,`amount`,`date`,`status`) values 
(1,1,1,'900','2023-09-13','paid'),
(2,1,1,'800','2023-09-14','ammount-allocated'),
(3,2,1,'1000','2023-09-14','paid'),
(4,1,1,'700','2023-09-14','ammount-allocated'),
(6,4,4,'1000','2023-09-14','ammount-allocated'),
(5,3,1,'1200','2023-09-14','ammount-allocated');

/*Table structure for table `tbl_complaints` */

DROP TABLE IF EXISTS `tbl_complaints`;

CREATE TABLE `tbl_complaints` (
  `complaint_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `complaint` varchar(100) DEFAULT NULL,
  `reply` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`complaint_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_complaints` */

insert  into `tbl_complaints`(`complaint_id`,`user_id`,`complaint`,`reply`,`date`) values 
(1,1,'no complaints now','jk','2023-09-13'),
(2,1,'super website','you are also super','2023-09-13'),
(3,4,'','pending','2023-09-14'),
(4,4,'hu','pending','2023-09-14');

/*Table structure for table `tbl_kennels` */

DROP TABLE IF EXISTS `tbl_kennels`;

CREATE TABLE `tbl_kennels` (
  `kennel_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `kennelname` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`kennel_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_kennels` */

insert  into `tbl_kennels`(`kennel_id`,`login_id`,`kennelname`,`phone`,`place`,`email`) values 
(1,4,'Comfort Pup Suites','21234567890','idduki','comfort@gmail.com'),
(2,5,'Rovers Rest ','8527894562','kollam','rest@gmail.com'),
(3,6,'Puppy Paradise','9638527415','alapuzha','paradise@gmail.com'),
(4,13,'leaves','8330856787','mg road','leaves@gmail.com');

/*Table structure for table `tbl_login` */

DROP TABLE IF EXISTS `tbl_login`;

CREATE TABLE `tbl_login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `usertype` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_login` */

insert  into `tbl_login`(`login_id`,`username`,`password`,`usertype`) values 
(1,'palace','Palace@123','shop'),
(2,'petshop','Petshop@123','shop'),
(3,'happy','Happy@123','shop'),
(4,'comfort','Comfort@123','kennel'),
(5,'rest','Rest@123','kennel'),
(6,'paradise','Paradise@123','kennel'),
(7,'mammoty','Mammoty@123','user'),
(8,'mohanlal','Mohanlal@123','user'),
(9,'suresh','Suresh@123','user'),
(10,'admin','admin','admin'),
(11,'kuttappan','Kuttappan@123','user'),
(12,'dhl','Dhldhl@123','shop'),
(13,'leaves','Leaves@123','kennel');

/*Table structure for table `tbl_orderdetails` */

DROP TABLE IF EXISTS `tbl_orderdetails`;

CREATE TABLE `tbl_orderdetails` (
  `detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `quantity` varchar(100) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`detail_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_orderdetails` */

insert  into `tbl_orderdetails`(`detail_id`,`product_id`,`order_id`,`quantity`,`amount`) values 
(1,5,1,'3','630'),
(2,8,1,'1','200'),
(3,11,1,'100','50'),
(4,15,2,'1','1000');

/*Table structure for table `tbl_orders` */

DROP TABLE IF EXISTS `tbl_orders`;

CREATE TABLE `tbl_orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `total` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `orderstatus` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_orders` */

insert  into `tbl_orders`(`order_id`,`user_id`,`total`,`date`,`orderstatus`) values 
(1,1,'7090','2023-09-13','dispatched'),
(2,4,'1000','2023-09-14','dispatched');

/*Table structure for table `tbl_payment` */

DROP TABLE IF EXISTS `tbl_payment`;

CREATE TABLE `tbl_payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `paymentfor_id` int(11) DEFAULT NULL,
  `paymentfor` varchar(100) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_payment` */

insert  into `tbl_payment`(`payment_id`,`paymentfor_id`,`paymentfor`,`amount`,`date`) values 
(1,1,'petproduct','7090','2023-09-13'),
(2,1,'kennel','900','2023-09-14'),
(3,2,'kennel','1000','2023-09-14'),
(4,2,'petproduct','1000','2023-09-14');

/*Table structure for table `tbl_pet` */

DROP TABLE IF EXISTS `tbl_pet`;

CREATE TABLE `tbl_pet` (
  `pet_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `petname` varchar(100) DEFAULT NULL,
  `pettype` varchar(100) DEFAULT NULL,
  `petcolour` varchar(100) DEFAULT NULL,
  `details` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`pet_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_pet` */

insert  into `tbl_pet`(`pet_id`,`user_id`,`petname`,`pettype`,`petcolour`,`details`) values 
(1,1,'lola','doberman','white','good dog'),
(2,1,'luttapi','cross','black','good dog'),
(3,4,'blackys','crosss','black and white','strong dog');

/*Table structure for table `tbl_petproduct` */

DROP TABLE IF EXISTS `tbl_petproduct`;

CREATE TABLE `tbl_petproduct` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `shop_id` int(11) DEFAULT NULL,
  `productname` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `quantity` varchar(100) DEFAULT NULL,
  `image` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_petproduct` */

insert  into `tbl_petproduct`(`product_id`,`shop_id`,`productname`,`price`,`quantity`,`image`) values 
(6,1,'biriyani','90','1','images/image_65018d772e801.png'),
(5,1,'Purrify Grooming Kit','630','1','images/image_65018bfccec59.webp'),
(4,1,'mouth cap','460','1','images/image_65018bdda4967.jpg'),
(7,2,'iphone','15603','1','images/image_65018f1a09e07.jpg'),
(8,2,'orange','200','1','images/image_65018efae5782.png'),
(10,3,'gum','40','3','images/image_65018ff40927e.jpg'),
(11,3,'mittayi','50','1','images/image_650190da32fc3.jpg'),
(13,3,'stick','40','1','images/image_650190b1c9fd8.jpg'),
(15,4,'cows','2000','50','images/image_6502b4915aea4.png'),
(17,0,'$productname','$price','$quantity','$target');

/*Table structure for table `tbl_shop` */

DROP TABLE IF EXISTS `tbl_shop`;

CREATE TABLE `tbl_shop` (
  `shop_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `shopname` varchar(100) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`shop_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_shop` */

insert  into `tbl_shop`(`shop_id`,`login_id`,`shopname`,`place`,`phone`,`email`) values 
(1,1,'The Pet Palace','ekm','9876543218','petpalace@gmail.com'),
(2,2,'The pet shop','tvm','5463728190','petshop@gmail.com'),
(3,3,'Happy tails','thr','3456709821','happy@gmail.com'),
(4,12,'dhl','south','9876543210','dhl@gmail.com');

/*Table structure for table `tbl_users` */

DROP TABLE IF EXISTS `tbl_users`;

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_users` */

insert  into `tbl_users`(`user_id`,`login_id`,`firstname`,`lastname`,`phone`,`place`,`email`,`address`) values 
(1,7,'mammoty','rashid','7539514562','vytila','mammoty@gmail.com','mammoty house'),
(2,8,'mohanlal','pp','6789012345','perumbavoor','mohanlal@gmail.com','mohanlal house'),
(3,9,'suresh','gobi','8743120542','tvm','suresh@gmail.com','suresh house'),
(4,11,'kuttappan','pk','1234567890','kuttikad','kuttappan@gmail.com','kuttappan House');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
