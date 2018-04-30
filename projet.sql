-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 28 avr. 2018 à 21:14
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
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `reference` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`reference`),
  UNIQUE KEY `nom_categorie` (`nom`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`reference`, `nom`) VALUES
(12, 'LEVRES'),
(14, 'ONGLES'),
(13, 'TEINT'),
(11, 'YEUX');

-- --------------------------------------------------------

--
-- Structure de la table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chat`
--

INSERT INTO `chat` (`id`, `pseudo`, `message`) VALUES
(76, 'oussema', 'wouh yaatikom asba'),
(56, 'yasine', 'okkk'),
(75, 'yasine', 'ya feki ya mnayek'),
(74, 'yasine', 'ya feki  ya 9atous'),
(70, 'update', 'hsfhf'),
(71, 'yasine', 'shdhsf'),
(72, 'yasine', 'shdhsf'),
(73, 'oussema', 'salut louled ena 9atous manoula'),
(52, 'achref', 'oui'),
(77, 'achraf', 'hahad');

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

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `id_commentaire` int(11) NOT NULL AUTO_INCREMENT,
  `id_membre` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `commentaire` varchar(1000) NOT NULL,
  `date_ajout` date NOT NULL,
  PRIMARY KEY (`id_commentaire`)
) ENGINE=InnoDB AUTO_INCREMENT=107164 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id_commentaire`, `id_membre`, `id_produit`, `commentaire`, `date_ajout`) VALUES
(107158, 11, 112001, 'magnifique ', '2018-04-26'),
(107160, 11, 112001, 'ech mda5lek inty ', '2018-04-26');

-- --------------------------------------------------------

--
-- Structure de la table `fidelite`
--

DROP TABLE IF EXISTS `fidelite`;
CREATE TABLE IF NOT EXISTS `fidelite` (
  `id` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fidelite`
--

INSERT INTO `fidelite` (`id`, `points`) VALUES
(1, 78),
(235, 88),
(7236, 11),
(7375, 28382),
(193814, 10000);

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
('FMU1320101 NÂ°01 - A.jpg', 132001, '#ca6500', 50),
('FMU1320102 NÂ°02 - A.jpg', 132001, '#6f3700', 50),
('FMU1320103 NÂ°03 - A.jpg', 132001, '#9d4f00', 75);

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

DROP TABLE IF EXISTS `livraison`;
CREATE TABLE IF NOT EXISTS `livraison` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rue` varchar(255) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `etat` varchar(255) NOT NULL DEFAULT 'Non traitee',
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `datelivraison` date DEFAULT NULL,
  `pseudoLivreur` int(10) DEFAULT NULL,
  `id_utilisateur` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pseudoLivreur` (`pseudoLivreur`),
  KEY `id_utilisateur` (`id_utilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livraison`
--

INSERT INTO `livraison` (`id`, `rue`, `numero`, `region`, `ville`, `etat`, `date`, `datelivraison`, `pseudoLivreur`, `id_utilisateur`) VALUES
(59, 'edfd', '98888888', 'Monastir', 'Ksar Hellal', 'DonnÃ©e au livreur', '2018-04-28 16:44:27', '2018-04-30', 34, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `livreur`
--

DROP TABLE IF EXISTS `livreur`;
CREATE TABLE IF NOT EXISTS `livreur` (
  `pseudo` int(10) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) DEFAULT NULL,
  `etat` varchar(255) NOT NULL DEFAULT 'disponible',
  PRIMARY KEY (`pseudo`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livreur`
--

INSERT INTO `livreur` (`pseudo`, `nom`, `prenom`, `tel`, `email`, `mdp`, `etat`) VALUES
(31, 'bo3bassaa', 'Shil', '54789001', 'yafet.shil@esprit.tn', NULL, 'non disponible'),
(32, 'Arbi', 'Fourat', '55124051', 'fourat.arbi@esprit.tn', NULL, 'disponible'),
(34, 'validation', 'validation', '98631230', 'validation.technique@esprit.tn', NULL, 'disponible');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `motdepasse` text NOT NULL,
  `confirmkey` varchar(255) NOT NULL,
  `confirme` int(1) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id`, `pseudo`, `mail`, `motdepasse`, `confirmkey`, `confirme`, `avatar`, `role`) VALUES
(17, 'Dyler', 'dyler@mail.com', '9a511001c3eacd7e3164d92812cd3bf24bcb336f', '0', 0, NULL, NULL),
(19, 'nivo', 'nivo@mail.com', '1a874ef770a6ce0c71eb46f6dd19073d28f529f3', '60061841151', 0, NULL, NULL),
(33, 'yasine', 'yasine@mail.com', '6e38556ef2398b2dd5e21932f55f269bf24d78a9', '40485711552', 0, NULL, NULL),
(34, 'yacen', 'yacen@gmail.com', '9ce66db59ffb8bcaaa3c8a0af22b34d83ee5457d', '43111051700', 0, NULL, NULL),
(35, 'tajem', 'yass.curvasud@gmail.com', '612c5e1cfefe8e8874ebe5918b43c5293373e39d', '65581330236', 1, NULL, NULL),
(36, 'dali', 'Dali@gmail.com', '1fd14baee2c633acca2c1ef16756249ce81fc5cf', '13795446128', 0, NULL, NULL),
(42, 'tesr', 'dhgshf@mail.com', '6e38556ef2398b2dd5e21932f55f269bf24d78a9', '1', 1, NULL, NULL),
(43, 'toppz', 'toppz@gmail.com', '0ff9772b7f0a7ad09b83f1377b41e3fd64d571c5', '12388081390', 0, NULL, NULL),
(44, 'yasin', 'yassinne.bengharsallah@esprit.tn', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '1', 1, NULL, NULL),
(47, 'manel', 'fashionmakeup113@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', '53385477808', 1, NULL, NULL),
(48, 'tesst', 'testt2@gmail.com', 'a4688a64fba8dba17940c3ab7d7368b86b7383ec', '96317812508', 0, NULL, NULL),
(50, 'oussema', 'feki@gmail.com', 'ee16b699b85a09ac2c76376edcc228fff76baaf9', '56631533676', 1, NULL, NULL),
(52, 'fourat', 'fourat@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '63313035621', 1, NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `mail` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `newsletter`
--

INSERT INTO `newsletter` (`mail`) VALUES
('yass.curvasud@gmail.com'),
('yassine.bengharsallah@esprit.tn'),
('fashionmakeup113@gmail.com'),
('yassinne.bengharsallah@esprit.tn');

-- --------------------------------------------------------

--
-- Structure de la table `online`
--

DROP TABLE IF EXISTS `online`;
CREATE TABLE IF NOT EXISTS `online` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` int(11) NOT NULL,
  `ip_user` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `online`
--

INSERT INTO `online` (`id`, `time`, `ip_user`) VALUES
(8, 1524746572, '::1');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quantite` int(11) NOT NULL,
  `prix` double NOT NULL,
  `idUtilisateur` int(11) NOT NULL,
  `idProduit` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idUtilisateur` (`idUtilisateur`),
  KEY `idProduit` (`idProduit`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

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
(112001, 'EYE LINER', 4045, 7.5, 'blablabla', '2022-04-18', NULL, 112),
(112002, 'EYE LINER LIQUIDE', 40, 9, 'blabla', '2022-04-18', NULL, 112),
(112003, 'EYE LINER FEUTRE LONGUE TENUE', 40, 15, 'blabla', '2022-04-18', NULL, 112),
(120001, 'ROUGES A LEVRES', 1100, 16.9, 'blablabla', '2018-04-17', 3, 120),
(120002, 'ROUGES A LEVRES CLASSIC', 800, 15, 'blablabla', '2018-04-18', 3, 120),
(132001, 'POUDRE BRONZANTE', 300, 22.5, 'blabla', '2018-04-02', NULL, 132);

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

--
-- Déchargement des données de la table `promotion`
--

INSERT INTO `promotion` (`Id`, `promotion`) VALUES
(1, 20),
(2, 15),
(3, 5),
(4, 17.5);

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
  `telephone` varchar(20) NOT NULL,
  `type` varchar(100) NOT NULL,
  `cause` varchar(100) NOT NULL,
  `etat` varchar(20) NOT NULL DEFAULT 'non traité',
  `id_utilisateur` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_utilisateur` (`id_utilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `recuperation`
--

DROP TABLE IF EXISTS `recuperation`;
CREATE TABLE IF NOT EXISTS `recuperation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(255) NOT NULL,
  `code` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `recuperation`
--

INSERT INTO `recuperation` (`id`, `mail`, `code`) VALUES
(1, 'dylera@mail.com', 29063144),
(13, 'fashionmakeup113@gmail.com', 3978072),
(3, 'nivo@mail.com', 22211345),
(12, 'yass.curvasud@gmail.com', 88073745),
(14, 'yassine.bengharsallah@esprit.tn', 79225417),
(15, 'yassinne.bengharsallah@esprit.tn', 25796416);

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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `nom`, `prenom`, `telephone`, `type`, `date`, `pseudoUtilisateur`) VALUES
(14, 'Hamza', 'Med Amine', '58741254', 'Maquillage de jour', '2018-04-22 16:00:00', NULL),
(15, 'Gharsallah', 'Yassine', '58749254', 'Maquillage de jour', '2018-04-15 17:30:00', NULL),
(16, 'Shil', 'Yafet', '47852147', 'Maquillage de soirÃ©e', '2018-04-29 10:00:00', NULL),
(17, 'Chetoui', 'Achraf', '89754214', 'Maquillage de soirÃ©e', '2018-04-21 08:00:00', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `sous_categorie`
--

DROP TABLE IF EXISTS `sous_categorie`;
CREATE TABLE IF NOT EXISTS `sous_categorie` (
  `reference` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `reference_categorie` int(11) NOT NULL,
  PRIMARY KEY (`reference`),
  KEY `reference_categorie` (`reference_categorie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sous_categorie`
--

INSERT INTO `sous_categorie` (`reference`, `nom`, `reference_categorie`) VALUES
(110, 'OMBRE A PAUPIERE ', 11),
(112, 'EYE LINER', 11),
(120, 'ROUGES A LEVRES', 12),
(132, 'POUDRE BRONZANTE', 13),
(134, 'ANTI-CERNES', 13);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`idpanier`) REFERENCES `panier` (`id`);

--
-- Contraintes pour la table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`reference_produit`) REFERENCES `produit` (`reference`);

--
-- Contraintes pour la table `livraison`
--
ALTER TABLE `livraison`
  ADD CONSTRAINT `livraison_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `membre` (`id`),
  ADD CONSTRAINT `pseudoLivreur` FOREIGN KEY (`pseudoLivreur`) REFERENCES `livreur` (`pseudo`);

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `panier_ibfk_1` FOREIGN KEY (`idUtilisateur`) REFERENCES `membre` (`id`),
  ADD CONSTRAINT `panier_ibfk_2` FOREIGN KEY (`idProduit`) REFERENCES `produit` (`reference`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`id_promotion`) REFERENCES `promotion` (`Id`);

--
-- Contraintes pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD CONSTRAINT `reclamation_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `membre` (`id`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`pseudoUtilisateur`) REFERENCES `membre` (`id`);

--
-- Contraintes pour la table `sous_categorie`
--
ALTER TABLE `sous_categorie`
  ADD CONSTRAINT `sous_categorie_ibfk_1` FOREIGN KEY (`reference_categorie`) REFERENCES `categorie` (`reference`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
