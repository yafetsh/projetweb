-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 28 avr. 2018 à 13:38
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `chemin` varchar(1000) NOT NULL,
  `reference_produit` int(11) NOT NULL,
  `couleur` varchar(255) NOT NULL,
  `quantite` int(11) NOT NULL,
  PRIMARY KEY (`chemin`),
  KEY `reference_produit` (`reference_produit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`chemin`, `reference_produit`, `couleur`, `quantite`) VALUES
('FMU1100101 NÂ°01 - A.jpg', 110001, '#808080', 80),
('FMU1100102 NÂ°02 - A.jpg', 110001, '#c0c0c0', 80),
('FMU1100103 NÂ°03 - A.jpg', 110001, '#bb77ff', 80),
('FMU1100104 NÂ°04 - A.jpg', 110001, '#9b9b9b', 80),
('FMU1100301 NÂ°01 - A.jpg', 110002, '#400080', 100),
('FMU1120101 NÂ°1 - Black - A.jpg', 112001, '#000000', 20),
('FMU1120301 NÂ°1 - Black - A.jpg', 112002, '#000000', 40),
('FMU1120501 NÂ°1 - Black - C.JPG', 112003, '#000000', 40),
('FMU1200101 NÂ°01 - B.jpg', 120001, '#623131', 50),
('FMU1200102 NÂ°02 - B.jpg', 120001, '#c400c4', 50),
('FMU1200103 NÂ°03 - B.jpg', 120001, '#ae00ae', 50),
('FMU1200104 NÂ°04 - B.jpg', 120001, '#ff5555', 50),
('FMU1200105 NÂ°05 - B.jpg', 120001, '#c126c1', 50),
('FMU1200106 NÂ°06 - B.jpg', 120001, '#ff2828', 50),
('FMU1200107 NÂ°07 - B.jpg', 120001, '#804000', 50),
('FMU1200108 NÂ°08 - B.jpg', 120001, '#800000', 50),
('FMU1200109 NÂ°09 - B.jpg', 120001, '#800040', 50),
('FMU1200110 NÂ°10 - B.jpg', 120001, '#880000', 50),
('FMU1200113 NÂ°13 - B.jpg', 120001, '#5e0000', 50),
('FMU1200114 NÂ°14 - B.jpg', 120001, '#510000', 50),
('FMU1200115 NÂ°15 - B.jpg', 120001, '#6f3700', 50),
('FMU1200116 NÂ°16 - B.jpg', 120001, '#550000', 50),
('FMU1200117 NÂ°17 - B.jpg', 120001, '#753a00', 50),
('FMU1200118 NÂ°18 - B.jpg', 120001, '#550000', 50),
('FMU1200119 NÂ°19 - B.jpg', 120001, '#512828', 50),
('FMU1200120 NÂ°20 - B.jpg', 120001, '#422100', 50),
('FMU1200121 NÂ°21 - B.jpg', 120001, '#660000', 50),
('FMU1200122 NÂ°22 - B.jpg', 120001, '#9b0000', 50),
('FMU1200201 NÂ°01 - B.JPG', 120002, '#cc0066', 100),
('FMU1200202 NÂ°02 - B.JPG', 120002, '#930000', 100),
('FMU1200205 NÂ°05 - B.JPG', 120002, '#ff3333', 100),
('FMU1200214 NÂ°14 - B.JPG', 120002, '#800080', 100),
('FMU1200215 NÂ°15 - B.JPG', 120002, '#592d00', 100),
('FMU1200218 NÂ°18 - B.JPG', 120002, '#1b1b1b', 100),
('FMU1200223 NÂ°23 - B.JPG', 120002, '#313131', 100),
('FMU1200224 NÂ°24 - B.JPG', 120002, '#804000', 100),
('FMU1320101 NÂ°01 - A.jpg', 132001, '#ca6500', 50),
('FMU1320102 NÂ°02 - A.jpg', 132001, '#6f3700', 50),
('FMU1320103 NÂ°03 - A.jpg', 132001, '#9d4f00', 75),
('prod-5.jpg', 500001, '#ff0000', 5);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`reference_produit`) REFERENCES `produit` (`reference`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
