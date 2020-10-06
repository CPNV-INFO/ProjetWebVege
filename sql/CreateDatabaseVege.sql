-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           8.0.21 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour vege
CREATE DATABASE IF NOT EXISTS `vege` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `vege`;

-- Listage de la structure de la table vege. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `userEmailAddress` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `userHashPsw` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `userEmailAddress` (`userEmailAddress`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table vege.users : ~2 rows (environ)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `userEmailAddress`, `userHashPsw`) VALUES
	(3, 'test@gmail.com', '$2y$10$HdOvIaM25jwbjCPMrcDqBOyoPvSBvIY3dI3OlPFfwQ7Rjwn3GF1/e'),
	(4, 'gg@gmail.com', '$2y$10$ooBzk9SBdnSDOH7DMw.NauU3qWJz08vlLi5L1aKZ7WkdbATbU45ly');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Listage de la structure de la table vege. vege
CREATE TABLE IF NOT EXISTS `vege` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `origin` varchar(20) NOT NULL,
  `variety` varchar(20) DEFAULT NULL,
  `color` varchar(20) NOT NULL,
  `description` varchar(200) NOT NULL DEFAULT '0',
  `photo` varchar(50) DEFAULT NULL,
  `price` decimal(5,2) NOT NULL,
  `category` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Listage des données de la table vege.vege : ~10 rows (environ)
/*!40000 ALTER TABLE `vege` DISABLE KEYS */;
INSERT INTO `vege` (`id`, `name`, `origin`, `variety`, `color`, `description`, `photo`, `price`, `category`) VALUES
	(1, 'Banane', 'Brésil', NULL, 'Jaune', 'Banane exotique venant du Brésil cultivé avec pesticide.', 'view/content/images/banane_small.jpeg', 2.95, 'Fruit'),
	(2, 'Fraise', 'Espagne', NULL, 'Rouge', 'Fraises provenant d\' espagne cultivé en pleine airs avec pesticide. ', 'view/content/images/fraises_small.jpg', 4.75, 'Fruit'),
	(3, 'Pomme', 'Suisse', 'Golden', 'Jaune', 'Pommes Golden Bio cultivé en Suisse avec le respect des normes écologique.', 'view/content/images/pomme-golden_small.jpg', 7.90, 'Fruit'),
	(4, 'Pomme', 'France', 'La Gala', 'Rouge', 'Pommes Gala juteuse et sucrée.', 'view/content/images/pomme-lagala_small.jpg', 4.15, 'Fruit'),
	(5, 'Orange', 'Tunisie', NULL, 'Orange', 'Oranges bio . ', 'view/content/images/orange_small.jpg', 6.00, 'Fruit'),
	(6, 'Salade', 'Suisse', 'Batavia', 'Vert', 'Avec ses superbes feuilles soyeuses, la laitue Boston est délicieuse.', 'view/content/images/salade-batavia_small.jpg', 11.50, 'Vegeta'),
	(7, 'Carotte', 'Portugal', NULL, 'Orange', 'Belle carottes provenant du Portugal, Culture Bio.', 'view/content/images/carotte_small.jpg', 9.10, 'Verdure'),
	(8, 'Pomme de terre', 'Suisse', NULL, 'Jaune', 'Pomme de terre Suisse, avec toute la qualité que cela implique.', 'view/content/images/pomme-de-terre_small.jpg', 8.40, 'Vegeta'),
	(9, 'Champignons', 'France', NULL, 'Brun', 'Champignons des bois.', 'view/content/images/champignon_de_paris_small.jpg', 6.70, 'Other'),
	(10, 'Brocoli', 'Canada', NULL, 'Vert', 'Brocoli canadien, et tout le monde sait que le canada c est cool.', 'view/content/images/brocoli_small.jpg', 2.40, 'Vegetal');
/*!40000 ALTER TABLE `vege` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
