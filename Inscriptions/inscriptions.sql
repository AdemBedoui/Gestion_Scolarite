-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 18 nov. 2023 à 17:53
-- Version du serveur : 8.0.33
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `scolarite`
--

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions`
--

DROP TABLE IF EXISTS `inscriptions`;
CREATE TABLE IF NOT EXISTS `inscriptions` (
  `NumIns` int NOT NULL AUTO_INCREMENT,
  `CodeClasse` char(9) NOT NULL,
  `MatEtud` char(10) NOT NULL,
  `Session` int NOT NULL,
  `DateInscription` datetime DEFAULT NULL,
  `DecisionConseil` char(12) DEFAULT NULL,
  `Rachat` varchar(1) NOT NULL,
  `MoyGen` double DEFAULT NULL,
  `Dispense` varchar(1) NOT NULL,
  `TauxAbsences` float DEFAULT NULL,
  `Redouble` varchar(1) NOT NULL,
  `StOuv` varchar(20) DEFAULT NULL,
  `StTech` char(20) DEFAULT NULL,
  `TypeInscrip` char(7) DEFAULT 'NR',
  `MontantIns` char(13) DEFAULT NULL,
  `Remarque` char(20) DEFAULT NULL,
  `Sitfin` char(20) DEFAULT NULL,
  `Montant` int DEFAULT NULL,
  `NoteSO` double DEFAULT NULL,
  `NoteST` double DEFAULT NULL,
  PRIMARY KEY (`NumIns`)
) ENGINE=InnoDB AUTO_INCREMENT=12329 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `inscriptions`
--

INSERT INTO `inscriptions` (`NumIns`, `CodeClasse`, `MatEtud`, `Session`, `DateInscription`, `DecisionConseil`, `Rachat`, `MoyGen`, `Dispense`, `TauxAbsences`, `Redouble`, `StOuv`, `StTech`, `TypeInscrip`, `MontantIns`, `Remarque`, `Sitfin`, `Montant`, `NoteSO`, `NoteST`) VALUES
(12323, 'dsi3.2', 'marche', 2, '2023-10-01 22:51:09', '', '0', 12.2, '0', 2, '0', 'kjh', 'uyzt', 'NR', '50', 'bien', 'passe', 20, 15, 14),
(12326, '55', '544', 1, '2023-10-21 04:35:00', 'reussi', '0', 11, '0', 0, '0', '12', '13', 'online', '300', 'good', 'g', 250, 13, 14),
(12327, '55', '544', 1, '2023-10-07 14:31:00', 'reussi', '0', 11, '0', 0, '0', '12', '13', 'online', '300', 'good', 'g', 250, 13, 14),
(12328, '55', '544', 1, '2023-10-07 14:31:00', 'reussi', '0', 11, '0', 0, '0', '12', '13', 'online', '300', 'good', 'g', 250, 13, 14);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
