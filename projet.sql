-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 27 mars 2018 à 11:51
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
-- Structure de la table `catalogue`
--

DROP TABLE IF EXISTS `catalogue`;
CREATE TABLE IF NOT EXISTS `catalogue` (
  `nomCatalogue` varchar(255) NOT NULL,
  `nomCategorie` varchar(255) NOT NULL,
  PRIMARY KEY (`nomCatalogue`),
  KEY `nomCategorie` (`nomCategorie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `nomCategorie` varchar(255) NOT NULL,
  PRIMARY KEY (`nomCategorie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `IdPanier` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IdPanier` (`IdPanier`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `Chemin` varchar(255) NOT NULL,
  `reference` int(11) NOT NULL,
  PRIMARY KEY (`Chemin`),
  UNIQUE KEY `Chemin` (`Chemin`),
  KEY `reference` (`reference`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

DROP TABLE IF EXISTS `livraison`;
CREATE TABLE IF NOT EXISTS `livraison` (
  `id` int(11) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `rue` varchar(255) NOT NULL,
  `code postal` int(11) NOT NULL,
  `pseudoLivreur` varchar(255) NOT NULL,
  `idUtilisateur` int(11) NOT NULL,
  KEY `pseudoLivreur` (`pseudoLivreur`),
  KEY `idUtilisateur` (`idUtilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livraison`
--

INSERT INTO `livraison` (`id`, `numero`, `type`, `ville`, `rue`, `code postal`, `pseudoLivreur`, `idUtilisateur`) VALUES
(5, '54', 'sfs', 'svsdf', 'eg', 24, 'zef', 454);

-- --------------------------------------------------------

--
-- Structure de la table `livreur`
--

DROP TABLE IF EXISTS `livreur`;
CREATE TABLE IF NOT EXISTS `livreur` (
  `pseudo` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  PRIMARY KEY (`pseudo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livreur`
--

INSERT INTO `livreur` (`pseudo`, `nom`, `prenom`, `tel`, `email`, `mdp`) VALUES
('zef', 'fds', 'llk', '454', 'dssdf', 'sfdf');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `id` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `prix` double NOT NULL,
  `idUtilisateur` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idUtilisateur` (`idUtilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `reference` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `quantite` int(11) NOT NULL,
  `prix` double NOT NULL,
  `couleur` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `nomCatalogue` varchar(255) NOT NULL,
  `idPromotion` int(11) NOT NULL,
  KEY `nomCatalogue` (`nomCatalogue`),
  KEY `idPromotion` (`idPromotion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

DROP TABLE IF EXISTS `promotion`;
CREATE TABLE IF NOT EXISTS `promotion` (
  `Id` int(11) NOT NULL,
  `promotion` float NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

DROP TABLE IF EXISTS `reclamation`;
CREATE TABLE IF NOT EXISTS `reclamation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `telephone` int(20) NOT NULL,
  `type` varchar(100) NOT NULL,
  `cause` varchar(100) NOT NULL,
  `etat` varchar(20) NOT NULL DEFAULT 'non traité',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reclamation`
--

INSERT INTO `reclamation` (`id`, `nom`, `prenom`, `mail`, `telephone`, `type`, `cause`, `etat`) VALUES
(1, 'vqsf', 'fsd', 'sdf', 544, 'FonctionnalitÃ© de site', 'zfsdf', 'non traité'),
(2, 'sfs', 'lk', 'kj', 5454, 'FonctionnalitÃ© de site', 'sdfsdf', 'non traité'),
(3, 'qf', 'sdf', 'sf', 87, 'FonctionnalitÃ© de site', 'sdf', 'non traité'),
(4, 'qf', 'sdf', 'sf', 87, 'FonctionnalitÃ© de site', 'sdf', 'non traité'),
(5, 'shil', 'yafet', 'fsdf', 5454, 'FonctionnalitÃ© de site', 'fsdf', 'non traité'),
(6, 'sdf', 'sdf:s', 'qf', 454, 'FonctionnalitÃ© de site', 'fsdfs', 'non traité'),
(7, 'sdf', 'sdf:s', 'qf', 454, 'FonctionnalitÃ© de site', 'fsdfs', 'non traité'),
(8, 'sdf', 'sdf:s', 'qf', 454, 'FonctionnalitÃ© de site', 'fsdfs', 'non traité');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `pseudoUtilisateur` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pseudoUtilisateur` (`pseudoUtilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `nom`, `prenom`, `telephone`, `type`, `date`, `pseudoUtilisateur`) VALUES
(1, 'qsf', 'qef', '845', 'Maquillage de jour', '2018-02-18 14:24:00', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `age`, `email`, `mdp`, `role`, `tel`) VALUES
(1, 'Yafet', 'Shil', 22, 'yafet.shil@esprit.tn', 'yafetsh1995', 'admin', '53254533');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `catalogue`
--
ALTER TABLE `catalogue`
  ADD CONSTRAINT `nomCategorie` FOREIGN KEY (`nomCategorie`) REFERENCES `categorie` (`nomCategorie`);

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `IdPanier	` FOREIGN KEY (`IdPanier`) REFERENCES `panier` (`id`);

--
-- Contraintes pour la table `livraison`
--
ALTER TABLE `livraison`
  ADD CONSTRAINT `pseudoLivreur` FOREIGN KEY (`pseudoLivreur`) REFERENCES `livreur` (`pseudo`);

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `idUtilisateur` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `	idPromotion` FOREIGN KEY (`idPromotion`) REFERENCES `promotion` (`Id`),
  ADD CONSTRAINT `nomCatalogue` FOREIGN KEY (`nomCatalogue`) REFERENCES `catalogue` (`nomCatalogue`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `pseudoUtilisateur` FOREIGN KEY (`pseudoUtilisateur`) REFERENCES `utilisateur` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
