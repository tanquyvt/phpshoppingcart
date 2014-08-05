-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.16 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for phpdb
CREATE DATABASE IF NOT EXISTS `phpdb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `phpdb`;


-- Dumping structure for table phpdb.shoppingcart_products
CREATE TABLE IF NOT EXISTS `shoppingcart_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `price` double DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table phpdb.shoppingcart_products: ~4 rows (approximately)
/*!40000 ALTER TABLE `shoppingcart_products` DISABLE KEYS */;
INSERT INTO `shoppingcart_products` (`id`, `name`, `price`) VALUES
	(1, 'Nokia Lumia 520', 2.567),
	(2, 'Samsung Galaxy S5', 10.12),
	(3, 'HTC M8', 8.2),
	(4, 'LG G3', 14.9);
/*!40000 ALTER TABLE `shoppingcart_products` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
