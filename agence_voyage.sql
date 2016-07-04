-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 08 Mai 2016 à 11:57
-- Version du serveur :  5.6.17-log
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `agence_voyage`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin_agence`
--

CREATE TABLE IF NOT EXISTS `admin_agence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ville_depart` varchar(255) NOT NULL,
  `ville_arriver` varchar(255) NOT NULL,
  `date_depart` datetime NOT NULL,
  `date_retour` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `admin_agence`
--

INSERT INTO `admin_agence` (`id`, `ville_depart`, `ville_arriver`, `date_depart`, `date_retour`) VALUES
(1, 'Tidjikja', 'Zoueratte', '2016-04-26 07:51:30', '2016-04-30 02:11:20'),
(3, 'Nouadhibou', 'Nouakchott', '2016-04-27 05:31:29', '2016-05-25 12:51:16'),
(5, 'Nema', 'Atar', '2016-05-26 10:42:15', '2016-04-27 17:24:46'),
(7, 'Rosso', 'Tichitt', '2016-06-15 10:45:14', '2016-05-25 12:42:52'),
(9, 'Kiffa', 'Akjoujt', '2016-05-30 21:15:27', '2016-05-31 05:36:24'),
(11, 'chinguetti', 'Aioun', '2016-05-16 14:49:29', '2016-07-14 07:40:28');

-- --------------------------------------------------------

--
-- Structure de la table `reservation_client`
--

CREATE TABLE IF NOT EXISTS `reservation_client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `ville_depart` varchar(255) NOT NULL,
  `ville_arriver` varchar(255) NOT NULL,
  `date_depart` varchar(255) NOT NULL,
  `date_retour` varchar(255) NOT NULL,
  `num_voyage` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `reservation_client`
--

INSERT INTO `reservation_client` (`id`, `prenom`, `nom`, `date_naissance`, `ville_depart`, `ville_arriver`, `date_depart`, `date_retour`, `num_voyage`) VALUES
(1, 'Aminetou', 'Abdy', '1994-03-12', 'Tidjikja', 'Nouakchott', '2016-04-26 07:51:30', 'NULL', 1),
(2, 'Sidi', 'Abdi Khlifa', '1991-06-16', 'Rosso', 'Zoueratte', '2016-04-27 05:31:29', '2016-05-25 12:42:52', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
