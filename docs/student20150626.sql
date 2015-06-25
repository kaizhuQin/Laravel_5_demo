/*
SQLyog Ultimate v8.32 
MySQL - 5.1.73 : Database - lava_student
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`lava_student` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `lava_student`;

/*Table structure for table `student` */

DROP TABLE IF EXISTS `student`;

CREATE TABLE `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(25) NOT NULL COMMENT '学号',
  `student_name` varchar(25) NOT NULL COMMENT '姓名',
  `sex` tinyint(2) NOT NULL DEFAULT '1' COMMENT '性别 1：男 0：女',
  `department` varchar(50) NOT NULL COMMENT '学院',
  `marjor` varchar(50) NOT NULL COMMENT '专业',
  `ctime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='学生基本信息';

/*Data for the table `student` */

insert  into `student`(`id`,`student_id`,`student_name`,`sex`,`department`,`marjor`,`ctime`) values (1,'20106433','张三',0,'计算机学院','计算机科学',1435248597),(2,'20106434','张三分',0,'计算机学院','计算机科学',1435248952),(3,'20106436','李达',1,'体育学院','田径',1435251274);

/*Table structure for table `student_grade` */

DROP TABLE IF EXISTS `student_grade`;

CREATE TABLE `student_grade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(25) NOT NULL COMMENT '学号',
  `subject` varchar(25) NOT NULL COMMENT '科目',
  `grade` varchar(10) NOT NULL COMMENT '成绩',
  `ctime` int(11) DEFAULT NULL,
  `mtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='学生成绩';

/*Data for the table `student_grade` */

insert  into `student_grade`(`id`,`student_id`,`subject`,`grade`,`ctime`,`mtime`) values (1,'20106433','计算机基础','80',1435249753,NULL),(2,'20106433','C/C++','90',1435249808,NULL),(3,'20106435','大学物理','70',1435251118,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
