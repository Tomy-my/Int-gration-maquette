-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 15 jan. 2021 à 15:09
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tst`
--

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `img`) VALUES
(1, 'images/aboutme.png'),
(2, 'images/img1.PNG'),
(3, 'images/img2.PNG'),
(4, 'images/img3.PNG');

-- --------------------------------------------------------

--
-- Structure de la table `nom`
--

DROP TABLE IF EXISTS `nom`;
CREATE TABLE IF NOT EXISTS `nom` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `nom`
--

INSERT INTO `nom` (`id`, `nom`) VALUES
(1, 'Test'),
(2, 'Cassandra & Andreas'),
(3, 'Aleksandra & Max'),
(4, 'Angela & Jack');

-- --------------------------------------------------------

--
-- Structure de la table `paragraphe`
--

DROP TABLE IF EXISTS `paragraphe`;
CREATE TABLE IF NOT EXISTS `paragraphe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `para` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `paragraphe`
--

INSERT INTO `paragraphe` (`id`, `para`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed drem ipsum dolor sit amet, consectetur adectetur adipisicing elit, sed drem ipsum dolor sit amet, consectetur adectetur adipisicing elit, sed drem ipsum dolor sit amet, consectetur adipisicing elit, sed drem ipsum dolor sit amet, consectetur adipisicing elit, sed d '),
(2, 'test Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed drem ipsum dolor sit amet, consectetur adectetur adipisicing elit, sed drem ipsum dolor sit amet, consectetur adectetur adipisicing elit, sed drem ipsum dolor sit amet, consectetur adipisicing elit, sed drem ipsum dolor sit amet, consectetur adipisicing elit, sed d '),
(3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed drem ipsum dolor sit amet, consectetur adectetur adipisicing elit, sed drem ipsum dolor sit amet, consectetur  ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
