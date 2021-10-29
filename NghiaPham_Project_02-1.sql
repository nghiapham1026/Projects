DROP DATABASE IF EXISTS `library_database`;
CREATE DATABASE `library_database`; 
USE `library_database`;

SET NAMES utf8 ;
SET character_set_client = utf8mb4 ;

CREATE TABLE `payment_methods` (
  `payment_method_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`payment_method_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
INSERT INTO `payment_methods` VALUES (1,'Visa');
INSERT INTO `payment_methods` VALUES (2,'Mastercard');
INSERT INTO `payment_methods` VALUES (3,'Discover');
INSERT INTO `payment_methods` VALUES (4,'American Express');

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` char(2) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
INSERT INTO `clients` VALUES (1,'Andrew P. Hill High School','3200 Senter Road','San Jose','CA','315-252-7305');
INSERT INTO `clients` VALUES (2,'PHD School of Law','34267 Glendale Parkway','Huntington','WV','304-659-1170');
INSERT INTO `clients` VALUES (3,'Harry Potter Appreciation Forum','096 Pawling Parkway','San Francisco','CA','415-144-6037');
INSERT INTO `clients` VALUES (4,'Cosby Theater','81674 Westerfield Circle','Waco','TX','254-750-0784');
INSERT INTO `clients` VALUES (5,'Amogus Homicide Research Center','0863 Farmco Road','Portland','OR','971-888-9129');

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `amount` decimal(9,2) NOT NULL,
  `payment_method` tinyint(4) NOT NULL,
  PRIMARY KEY (`payment_id`),
  KEY `fk_client_id_idx` (`client_id`),
  KEY `fk_invoice_id_idx` (`invoice_id`),
  KEY `fk_payment_payment_method_idx` (`payment_method`),
  CONSTRAINT `fk_payment_client` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_payment_payment_method` FOREIGN KEY (`payment_method`) REFERENCES `payment_methods` (`payment_method_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
INSERT INTO `payments` VALUES (1,5,2,'2019-02-12',2551.63,1);
INSERT INTO `payments` VALUES (2,1,6,'2019-01-03',1552.20,1);
INSERT INTO `payments` VALUES (3,3,11,'2019-01-11',522.21,1);
INSERT INTO `payments` VALUES (4,5,13,'2019-01-26',2632.36,1);
INSERT INTO `payments` VALUES (5,3,15,'2019-01-15',6969.32,1);

DROP DATABASE IF EXISTS `sql_store`;
CREATE DATABASE `sql_store`;
USE `sql_store`;

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `quantity_in_stock` int(11) NOT NULL,
  `unit_price` decimal(4,2) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
INSERT INTO `products` VALUES (1,'Quantum Computing: An Applied Approach',70,34.00);
INSERT INTO `products` VALUES (2,'Organic Chemistry',49,52.50);
INSERT INTO `products` VALUES (3,'Spanish for Beginners',38,3.35);
INSERT INTO `products` VALUES (4,'Programming in PHP and MySQL',90,54.53);
INSERT INTO `products` VALUES (5,'How to make sauce',94,1.63);
INSERT INTO `products` VALUES (6,'Cooking',14,2.39);
INSERT INTO `products` VALUES (7,'Mathematics',98,3.29);
INSERT INTO `products` VALUES (8,'Movies',26,0.74);
INSERT INTO `products` VALUES (9,'Longan',67,2.26);
INSERT INTO `products` VALUES (10,'LOL',6,1.09);