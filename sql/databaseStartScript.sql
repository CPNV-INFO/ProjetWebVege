-- --------------------------------------------------------
-- Host: ProjetWebVege                        127.0.0.1
-- Server version:               10.4.11-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for snows
DROP DATABASE IF EXISTS `vege`;
CREATE DATABASE IF NOT EXISTS `vege` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `vege`;

-- Dumping structure for table snows.snows
DROP TABLE IF EXISTS `vege`;
CREATE TABLE IF NOT EXISTS `vege` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(20) NOT NULL,
  `origin` varchar(20) NOT NULL,
  `variety` VARCHAR(20) NULL,
  `color` VARCHAR(20) NOT NULL,
  `description` varchar(200) NOT NULL DEFAULT '0',
  `photo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Dumping data for table snows.snows: ~9 rows (approximately)
DELETE FROM `vege`;
/*!40000 ALTER TABLE `snows` DISABLE KEYS */;
INSERT INTO `vege` (`id`, `name`, `origin`, `variety`, `color`, `description`, `photo`) VALUES
	(1, 'Banane','Brésil', NULL, 'Jaune', 'Banane exotique venant du Brésil cultivé avec pesticide.', '' ),
	(2, 'Fraise','Espagne', NULL, 'Rouge', 'Fraises provenant d'' espagne cultivé en pleine airs avec pesticide. ', '' ),
	(3, 'Pomme','Suisse', 'Golden', 'Jaune', 'Pommes Golden Bio cultivé en Suisse avec le respect des normes écologique.', '' ),
	(4, 'Pomme','France', 'La Gala', 'Rouge', 'Pommes Gala juteuse et sucrée.', '' ),
	(5, 'Orange','Tunisie', NULL, 'Orange', 'Oranges bio . ', '' ),
	(6, 'Salade','Suisse', 'Boston', 'Vert', 'Avec ses superbes feuilles soyeuses, la laitue Boston est délicieuse.', '' ),
	(7, 'Carotte','Portugal', NULL, 'Orange', 'Belle carottes provenant du Portugal, Culture Bio.', '' ),
	(8, 'Pomme de terre','Suisse', NULL, 'Jaune', 'Pomme de terre Suisse, avec toute la qualité que cela implique.', '' ),
	(9, 'Champignons','Nouvelle-Zélande ', NULL, 'Brun', 'Champignons des bois.', '' ),
	(10, 'Brocoli','Canada', NULL, 'Vert', 'Brocoli canadien, et tout le monde sait que le canada c est cool.', '' );
	
/*!40000 ALTER TABLE `snows` ENABLE KEYS */;

-- Dumping structure for table snows.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userEmailAddress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userHashPsw` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `userEmailAddress` (`userEmailAddress`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table snows.users: ~0 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
