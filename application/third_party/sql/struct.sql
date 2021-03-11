-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 09 mars 2021 à 15:15
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `loca-auto`
--
CREATE DATABASE IF NOT EXISTS `loca-auto` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `loca-auto`;

-- --------------------------------------------------------

--
-- Structure de la table `agency`
--

DROP TABLE IF EXISTS `agency`;
CREATE TABLE IF NOT EXISTS `agency` (
  `agency_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(75) NOT NULL,
  `adress` varchar(250) DEFAULT NULL,
  `zipCode` varchar(5) DEFAULT NULL,
  `city` varchar(90) DEFAULT NULL,
  PRIMARY KEY (`agency_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `disponibility`
--

DROP TABLE IF EXISTS `disponibility`;
CREATE TABLE IF NOT EXISTS `disponibility` (
  `dispo_id` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`dispo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `location`
--

DROP TABLE IF EXISTS `location`;
CREATE TABLE IF NOT EXISTS `location` (
  `location_id` int(11) NOT NULL AUTO_INCREMENT,
  `startedDate` datetime NOT NULL,
  `mileageStart` int(11) DEFAULT NULL,
  `expectedReturnDate` datetime NOT NULL,
  `returnDate` datetime DEFAULT NULL,
  `mileageReturn` int(11) DEFAULT NULL,
  `started` tinyint(1) DEFAULT NULL,
  `ended` tinyint(1) DEFAULT NULL,
  `agency_start` int(11) NOT NULL,
  `agency_return` int(11) DEFAULT NULL,
  `plan_id` int(11) NOT NULL,
  `vehicule_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`location_id`),
  KEY `agency_start` (`agency_start`),
  KEY `agency_return` (`agency_return`),
  KEY `plan_id` (`plan_id`),
  KEY `vehicule_id` (`vehicule_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

DROP TABLE IF EXISTS `marque`;
CREATE TABLE IF NOT EXISTS `marque` (
  `marque_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`marque_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `modele`
--

DROP TABLE IF EXISTS `modele`;
CREATE TABLE IF NOT EXISTS `modele` (
  `modele_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `consumption` float DEFAULT NULL,
  `marque_id` int(11) NOT NULL,
  PRIMARY KEY (`modele_id`),
  KEY `marque_id` (`marque_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `plan`
--

DROP TABLE IF EXISTS `plan`;
CREATE TABLE IF NOT EXISTS `plan` (
  `plan_id` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(250) NOT NULL,
  `price` float NOT NULL,
  `pricePerKm` float DEFAULT NULL,
  PRIMARY KEY (`plan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `state`
--

DROP TABLE IF EXISTS `state`;
CREATE TABLE IF NOT EXISTS `state` (
  `state_id` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(200) NOT NULL,
  `vehicule_id` int(11) NOT NULL,
  PRIMARY KEY (`state_id`),
  KEY `vehicule_id` (`vehicule_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `pricePerDay` float NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `birthDate` date DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `zipCode` varchar(5) DEFAULT NULL,
  `city` varchar(90) DEFAULT NULL,
  `IdCard` varchar(50) DEFAULT NULL,
  `driverLicense` varchar(50) DEFAULT NULL,
  `avatar` varchar(50) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `password` varchar(90) DEFAULT NULL,
  `archived` tinyint(1) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

DROP TABLE IF EXISTS `vehicule`;
CREATE TABLE IF NOT EXISTS `vehicule` (
  `vehicule_id` int(11) NOT NULL AUTO_INCREMENT,
  `numberPlate` varchar(10) DEFAULT NULL,
  `doors` int(11) DEFAULT NULL,
  `fuelType` varchar(50) DEFAULT NULL,
  `mileage` int(11) DEFAULT NULL,
  `horses` int(11) DEFAULT NULL,
  `picture` varchar(50) DEFAULT NULL,
  `productedYear` int(11) DEFAULT NULL,
  `dispo_id` int(11) NOT NULL,
  `agency_id` int(11) DEFAULT NULL,
  `type_id` int(11) NOT NULL,
  `modele_id` int(11) NOT NULL,
  PRIMARY KEY (`vehicule_id`),
  KEY `dispo_id` (`dispo_id`),
  KEY `agency_id` (`agency_id`),
  KEY `type_id` (`type_id`),
  KEY `modele_id` (`modele_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `location_ibfk_1` FOREIGN KEY (`agency_start`) REFERENCES `agency` (`agency_id`),
  ADD CONSTRAINT `location_ibfk_2` FOREIGN KEY (`agency_return`) REFERENCES `agency` (`agency_id`),
  ADD CONSTRAINT `location_ibfk_3` FOREIGN KEY (`plan_id`) REFERENCES `plan` (`plan_id`),
  ADD CONSTRAINT `location_ibfk_4` FOREIGN KEY (`vehicule_id`) REFERENCES `vehicule` (`vehicule_id`),
  ADD CONSTRAINT `location_ibfk_5` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Contraintes pour la table `modele`
--
ALTER TABLE `modele`
  ADD CONSTRAINT `modele_ibfk_1` FOREIGN KEY (`marque_id`) REFERENCES `marque` (`marque_id`);

--
-- Contraintes pour la table `state`
--
ALTER TABLE `state`
  ADD CONSTRAINT `state_ibfk_1` FOREIGN KEY (`vehicule_id`) REFERENCES `vehicule` (`vehicule_id`);

--
-- Contraintes pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD CONSTRAINT `vehicule_ibfk_1` FOREIGN KEY (`dispo_id`) REFERENCES `disponibility` (`dispo_id`),
  ADD CONSTRAINT `vehicule_ibfk_2` FOREIGN KEY (`agency_id`) REFERENCES `agency` (`agency_id`),
  ADD CONSTRAINT `vehicule_ibfk_3` FOREIGN KEY (`type_id`) REFERENCES `type` (`type_id`),
  ADD CONSTRAINT `vehicule_ibfk_4` FOREIGN KEY (`modele_id`) REFERENCES `modele` (`modele_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
