-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 22 avr. 2018 à 19:50
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
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quantite` int(11) NOT NULL,
  `idpanier` int(11) NOT NULL,
  `dateCommande` datetime DEFAULT CURRENT_TIMESTAMP,
  `etat` tinyint(1) NOT NULL DEFAULT '0',
  `Code` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idpanier` (`idpanier`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `quantite`, `idpanier`, `dateCommande`, `etat`, `Code`) VALUES
(66, 6, 42, '2018-04-22 16:07:39', 1, 12037),
(67, 2, 43, '2018-04-22 16:07:39', 1, 15194),
(68, 1, 44, '2018-04-22 16:07:39', 1, 24971),
(79, 1, 44, '2018-04-22 18:40:39', 0, 23474),
(81, 10, 42, '2018-04-22 20:40:12', 0, 1752),
(82, 5, 43, '2018-04-22 20:40:12', 0, 27185),
(83, 2, 45, '2018-04-22 20:40:12', 0, 21782);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `idpanier` FOREIGN KEY (`idpanier`) REFERENCES `panier` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
