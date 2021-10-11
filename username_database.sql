DROP DATABASE IF EXISTS `username_database`;
CREATE DATABASE `username_database`; 
USE `username_database`;

SET NAMES utf8 ;
SET character_set_client = utf8mb4 ;

CREATE TABLE `login` (
  `username` varchar(15) NOT NULL AUTO_INCREMENT,
  `pass` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
INSERT INTO `login` VALUES ('poremade','straishistem');
INSERT INTO `login` VALUES ('uteriatu','UTERIATU');
INSERT INTO `login` VALUES ('ishoryce','ISHORYCE');
INSERT INTO `login` VALUES ('tiontrab','TIONTRAB');
INSERT INTO `login` VALUES ('iblegodu','IBLEGODU');
INSERT INTO `login` VALUES ('utlesten','UTLESTEN');
INSERT INTO `login` VALUES ('ranegran','RANEGRAN');
INSERT INTO `login` VALUES ('outegmac','OUTEGMAC');
INSERT INTO `login` VALUES ('atercent','ATERCENT');
INSERT INTO `login` VALUES ('nightlea','NIGHTLEA');
INSERT INTO `login` VALUES ('tiodydri','TIODYDRI');
INSERT INTO `login` VALUES ('rythorig','RYTHORIG');
INSERT INTO `login` VALUES ('lagonexp','LAGONEXP');
INSERT INTO `login` VALUES ('oulagous','OULAGOUS');
INSERT INTO `login` VALUES ('ctoperim','CTOPERIM');
