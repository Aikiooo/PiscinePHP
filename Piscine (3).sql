-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : lun. 14 mars 2022 à 08:06
-- Version du serveur :  5.7.32
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Piscine`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnement`
--

CREATE TABLE `abonnement` (
  `nbrPersonne` int(20) NOT NULL,
  `idAbonnement` int(11) NOT NULL,
  `durée` datetime NOT NULL,
  `prix` int(20) NOT NULL,
  `nomAbo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `prénom` varchar(40) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `mdp` varchar(40) NOT NULL,
  `e-mail` varchar(40) NOT NULL,
  `adresse` varchar(40) NOT NULL,
  `numTel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`idAdmin`, `prénom`, `nom`, `mdp`, `e-mail`, `adresse`, `numTel`) VALUES
(5, 'mellit', 'quinqu', 'Piscine35', 'mellitquinqu22@gmail.com', '9 rue déssiré le bonniec', '0604150016'),
(6, 'Bamaye', 'Diaby', 'e2c96a1ab3819b25040c1f812a282dd028ae8233', 'bamaye.bg@gmail.com', '8 rue fitnessparc', '0788446423');

-- --------------------------------------------------------

--
-- Structure de la table `code`
--

CREATE TABLE `code` (
  `refCode` int(11) NOT NULL,
  `idAdmin` int(20) NOT NULL,
  `actif` tinyint(1) NOT NULL DEFAULT '1',
  `utilisationR` int(20) NOT NULL,
  `dateD` datetime NOT NULL,
  `dateF` datetime NOT NULL,
  `idAbonnement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `idCours` int(11) NOT NULL,
  `dateDeb` datetime NOT NULL,
  `dateFin` datetime NOT NULL,
  `nomCours` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `lieup`
--

CREATE TABLE `lieup` (
  `idPiscine` int(11) NOT NULL,
  `nomPiscine` varchar(20) NOT NULL,
  `idPlanning` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `participation`
--

CREATE TABLE `participation` (
  `refCode` int(11) NOT NULL,
  `idCours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abonnement`
--
ALTER TABLE `abonnement`
  ADD PRIMARY KEY (`idAbonnement`);

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Index pour la table `code`
--
ALTER TABLE `code`
  ADD PRIMARY KEY (`refCode`),
  ADD KEY `abopourcode` (`idAbonnement`);

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`idCours`);

--
-- Index pour la table `lieup`
--
ALTER TABLE `lieup`
  ADD PRIMARY KEY (`idPiscine`);

--
-- Index pour la table `participation`
--
ALTER TABLE `participation`
  ADD PRIMARY KEY (`refCode`,`idCours`),
  ADD UNIQUE KEY `refCode` (`refCode`,`idCours`),
  ADD UNIQUE KEY `refCode_2` (`refCode`),
  ADD KEY `courspart` (`idCours`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `code`
--
ALTER TABLE `code`
  MODIFY `refCode` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `participation`
--
ALTER TABLE `participation`
  ADD CONSTRAINT `codepart` FOREIGN KEY (`refCode`) REFERENCES `code` (`refCode`),
  ADD CONSTRAINT `courspart` FOREIGN KEY (`idCours`) REFERENCES `cours` (`idCours`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
