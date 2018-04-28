-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 28 avr. 2018 à 13:08
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reclamation`
--

INSERT INTO `reclamation` (`id`, `nom`, `prenom`, `mail`, `telephone`, `type`, `cause`, `etat`) VALUES
(18, 'df', 'sdf', 'sfs', '54', 'FonctionnalitÃ© de site', 'sfs', 'validÃ©'),
(20, 'xsf', 'ff', 'sdv', '545', 'FonctionnalitÃ© de site', 'sfsd', 'non traité'),
(21, 'sdf', 'ffffffff', 'fsdf', '4545', 'FonctionnalitÃ© de site', 'fsfsd', 'non traité'),
(45, 'shil', 'yazid', 'yazid.shil@gmail.com', '45545874', 'FonctionnalitÃ© de site', 'urfhsj', 'non traité'),
(51, 'valll', 'ffffffffffs', 'fsdf@esprit.tn', '87596545', 'FonctionnalitÃ© de site', 'iiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii', 'non traité'),
(52, 'valll', 'ffffffffffs', 'fsdf@esprit.tn', '87596545', 'FonctionnalitÃ© de site', 'iiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii', 'non traité'),
(53, 'valll', 'ffffffffffs', 'fsdf@esprit.tn', '87596545', 'FonctionnalitÃ© de site', 'iiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii', 'non traité'),
(54, 'valll', 'ffffffffffs', 'fsdf@esprit.tn', '87596545', 'FonctionnalitÃ© de site', 'klljjjjjjjjjjjjjjjooooooooooooo', 'non traité'),
(55, 'valll', 'ffffffffffs', 'fsdf@esprit.tn', '87596545', 'FonctionnalitÃ© de site', 'klljjjjjjjjjjjjjjjooooooooooooo', 'non traité'),
(56, 'iioo', 'fsf', 'fsdf@esprit.tn', '87956254', 'FonctionnalitÃ© de site', 'oooooooooooooooooooooooooooooollll', 'non traité'),
(57, 'validationuuuu', 'ezfh', 'jb@fjhd.com', '58798562', 'Prix', 'ooooooooooooooooooooooooooooooo', 'non traité');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
