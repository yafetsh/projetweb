-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 28 avr. 2018 à 13:37
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
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `reference` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `quantite_total` int(11) NOT NULL,
  `prix` float NOT NULL,
  `description` varchar(2000) NOT NULL,
  `date_ajout` date NOT NULL,
  `id_promotion` int(11) DEFAULT NULL,
  `reference_sous_categorie` int(11) NOT NULL,
  PRIMARY KEY (`reference`),
  KEY `produit_ibfk_1` (`reference_sous_categorie`),
  KEY `id_promotion` (`id_promotion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`reference`, `nom`, `quantite_total`, `prix`, `description`, `date_ajout`, `id_promotion`, `reference_sous_categorie`) VALUES
(110001, 'OMBRE A PAUPIERE SOLO', 450, 23, 'blabla', '2022-04-18', NULL, 110),
(110002, 'OMBRE A PAUPIERE TRIO', 500, 40, 'bla bla blaa', '2022-04-18', NULL, 110),
(112001, 'EYE LINER', 404, 7.5, 'blablabla', '2022-04-18', NULL, 112),
(112002, 'EYE LINER LIQUIDE', 40, 9, 'blabla', '2022-04-18', NULL, 112),
(112003, 'EYE LINER FEUTRE LONGUE TENUE', 40, 15, 'blabla', '2022-04-18', NULL, 112),
(120001, 'ROUGES A LEVRES', 1100, 16.9, 'blablabla', '2018-04-17', 3, 120),
(120002, 'ROUGES A LEVRES CLASSIC', 800, 15, 'blablabla', '2018-04-18', 3, 120),
(132001, 'POUDRE BRONZANTE', 300, 22.5, 'blabla', '2018-04-02', NULL, 132),
(500001, 'validation', 10, 10, 'aaa', '2026-04-18', NULL, 500);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`id_promotion`) REFERENCES `promotion` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
