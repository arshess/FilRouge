-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 09 mars 2021 à 11:14
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données : `loca-auto`
--
CREATE DATABASE IF NOT EXISTS `loca-auto` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `loca-auto`;

-- --------------------------------------------------------

--
-- Structure de la table `agency`
--

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

CREATE TABLE IF NOT EXISTS `disponibility` (
  `dispo_id` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`dispo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `location_id` int(11) NOT NULL AUTO_INCREMENT,
  `startedDate` datetime NOT NULL,
  `mileageStart` int(11) DEFAULT NULL,
  `expectedReturnDate` datetime NOT NULL,
  `returnDate` datetime DEFAULT NULL,
  `mileageReturn` int(11) DEFAULT NULL,
  `started` tinyint(1) DEFAULT NULL,
  `ended` tinyint(1) DEFAULT NULL,
  `agency_id` int(11) NOT NULL,
  `agency_id_1` int(11) DEFAULT NULL,
  `plan_id` int(11) NOT NULL,
  `vehicule_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`location_id`),
  KEY `agency_id` (`agency_id`),
  KEY `agency_id_1` (`agency_id_1`),
  KEY `plan_id` (`plan_id`),
  KEY `vehicule_id` (`vehicule_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

CREATE TABLE IF NOT EXISTS `marque` (
  `marque_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`marque_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `modele`
--

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

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
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
  ADD CONSTRAINT `location_ibfk_1` FOREIGN KEY (`agency_id`) REFERENCES `agency` (`agency_id`),
  ADD CONSTRAINT `location_ibfk_2` FOREIGN KEY (`agency_id_1`) REFERENCES `agency` (`agency_id`),
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
