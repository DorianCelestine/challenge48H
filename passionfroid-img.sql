-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 23 fév. 2021 à 14:27
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `passionfroid-img`
--

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(254) NOT NULL,
  `type` varchar(254) DEFAULT NULL,
  `with_product` tinyint(1) DEFAULT NULL,
  `with_human` tinyint(1) DEFAULT NULL,
  `institutional` tinyint(1) DEFAULT NULL,
  `format` varchar(254) DEFAULT NULL,
  `credits` text,
  `limited` tinyint(1) NOT NULL DEFAULT '1',
  `copyright` varchar(254) DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `tags` text,
  `img_url` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `name`, `type`, `with_product`, `with_human`, `institutional`, `format`, `credits`, `limited`, `copyright`, `end_date`, `tags`, `img_url`) VALUES
(1, 'esgfisdg', 'Photo Passionfroid', 1, 1, 0, 'vertical', 'sdg', 0, NULL, '2021-02-05 23:00:00', 'poulet,bonjour', 'img/produits/14451.jpg'),
(2, 'choco', 'Logo', 1, 0, 0, 'vertical', 'Sammy', 0, NULL, NULL, 'bonjour', 'img/produits/68875.jpg'),
(4, 'Des bonnes glaces', 'Logo', 1, 0, 0, 'vertical', 'La vanille et le chocolat', 0, NULL, NULL, 'pates au beurre,poulet', 'img/produits/31493_Eclair parfum vanille 45 g Pasquier.jpg'),
(18, 'chat', NULL, NULL, NULL, NULL, NULL, 'chien', 1, NULL, '2021-02-05 23:00:00', 'bojou', 'img/Screenshot_240.jpg'),
(32, 'Elepohan', 'Photo Passionfroid', NULL, 1, 1, NULL, 'miaoyu', 1, NULL, '2021-01-31 23:00:00', 'asd, sa, dasd, dasdasd dasd ,das', 'img/elephants-wallpaper-3.jpg'),
(35, 'Des bonnes glaces', 'Photo Passionfroid', 1, 1, NULL, NULL, 'Jean-Pierre', 1, NULL, '2021-02-19 23:00:00', 'poulet,bonjour', 'img/'),
(34, 'Des bonnes glaces', 'Photo Passionfroid', 1, 1, NULL, NULL, 'Jean-Pierre', 1, NULL, '2021-02-19 23:00:00', 'poulet,bonjour', 'img/');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

DROP TABLE IF EXISTS `membres`;
CREATE TABLE IF NOT EXISTS `membres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(254) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tags`
--

INSERT INTO `tags` (`id`, `name`) VALUES
(1, 'bonjour'),
(2, 'pates au beurre'),
(5, 'poulet');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
