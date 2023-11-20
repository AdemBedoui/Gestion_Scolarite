-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 20 nov. 2023 à 20:46
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

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
-- Structure de la table `absensg`
--

CREATE TABLE `absensg` (
  `NumAbs` int(11) NOT NULL,
  `MatriculeProf` smallint(6) NOT NULL,
  `Session` int(11) NOT NULL,
  `DateAbs` datetime NOT NULL,
  `Seance` char(10) NOT NULL,
  `Motif` char(60) DEFAULT NULL,
  `TypeSeance` char(10) DEFAULT NULL,
  `CodeClasse` char(9) DEFAULT NULL,
  `CodeMatiere` char(10) DEFAULT NULL,
  `Justifier` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `conges`
--

CREATE TABLE `conges` (
  `NumConge` int(11) NOT NULL,
  `MatriculeProf` smallint(6) DEFAULT NULL,
  `DateDeb` datetime DEFAULT NULL,
  `DateFin` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `conges`
--

INSERT INTO `conges` (`NumConge`, `MatriculeProf`, `DateDeb`, `DateFin`) VALUES
(1, 8977, '2023-11-22 00:00:00', '2023-11-28');

-- --------------------------------------------------------

--
-- Structure de la table `grade`
--

CREATE TABLE `grade` (
  `GradeID` int(11) NOT NULL,
  `GradeName` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `prof`
--

CREATE TABLE `prof` (
  `Matricule Prof` smallint(6) NOT NULL,
  `Nom` char(50) DEFAULT NULL,
  `Prénom` char(50) DEFAULT NULL,
  `CIN ou Passeport` char(15) DEFAULT NULL,
  `Identifiant CNRPS` char(15) DEFAULT NULL,
  `Date de naissance` datetime DEFAULT NULL,
  `Nationalité` char(20) DEFAULT NULL,
  `Sexe (M/F)` char(1) DEFAULT NULL,
  `Date  Ent Adm` datetime DEFAULT NULL,
  `Date Ent Etbs` datetime DEFAULT NULL,
  `Diplôme` char(30) DEFAULT NULL,
  `Adresse` char(50) DEFAULT NULL,
  `Ville` char(50) DEFAULT NULL,
  `Code postal` smallint(6) DEFAULT NULL,
  `N° Téléphone` char(16) DEFAULT NULL,
  `Grade` char(25) DEFAULT NULL,
  `Date de nomination dans le grade` datetime DEFAULT NULL,
  `Date de titulirisation` datetime DEFAULT NULL,
  `N° Poste` char(10) DEFAULT NULL,
  `Département` char(55) DEFAULT NULL,
  `Situation` char(35) DEFAULT NULL,
  `Spécialité` char(35) DEFAULT NULL,
  `N° de Compte` char(30) DEFAULT NULL,
  `Banque` char(15) DEFAULT NULL,
  `Agence` char(35) DEFAULT NULL,
  `Adr pendant les vacances` char(50) DEFAULT NULL,
  `Tél pendant les vacances` char(16) DEFAULT NULL,
  `Lieu de naissance` char(25) DEFAULT NULL,
  `Début du Contrat` datetime DEFAULT NULL,
  `Fin du Contrat` datetime DEFAULT NULL,
  `Type de Contrat` char(5) DEFAULT NULL,
  `NB contrat ISETSOUSSE` tinyint(4) DEFAULT NULL,
  `NB contrat Autre Etb` char(10) DEFAULT NULL,
  `Bureau` char(10) DEFAULT NULL,
  `Email` char(60) DEFAULT NULL,
  `Email Interne` char(60) DEFAULT NULL,
  `NomArabe` char(35) DEFAULT NULL,
  `PrenomArabe` char(25) DEFAULT NULL,
  `LieuNaisArabe` char(20) DEFAULT NULL,
  `AdresseArabe` char(50) DEFAULT NULL,
  `VilleArabe` char(25) DEFAULT NULL,
  `Disponible` char(10) DEFAULT 'oui',
  `SousSP` char(35) DEFAULT NULL,
  `EtbOrigine` char(50) DEFAULT NULL,
  `TypeEnsg` char(30) DEFAULT NULL,
  `ControlAcces` char(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `prof`
--

INSERT INTO `prof` (`Matricule Prof`, `Nom`, `Prénom`, `CIN ou Passeport`, `Identifiant CNRPS`, `Date de naissance`, `Nationalité`, `Sexe (M/F)`, `Date  Ent Adm`, `Date Ent Etbs`, `Diplôme`, `Adresse`, `Ville`, `Code postal`, `N° Téléphone`, `Grade`, `Date de nomination dans le grade`, `Date de titulirisation`, `N° Poste`, `Département`, `Situation`, `Spécialité`, `N° de Compte`, `Banque`, `Agence`, `Adr pendant les vacances`, `Tél pendant les vacances`, `Lieu de naissance`, `Début du Contrat`, `Fin du Contrat`, `Type de Contrat`, `NB contrat ISETSOUSSE`, `NB contrat Autre Etb`, `Bureau`, `Email`, `Email Interne`, `NomArabe`, `PrenomArabe`, `LieuNaisArabe`, `AdresseArabe`, `VilleArabe`, `Disponible`, `SousSP`, `EtbOrigine`, `TypeEnsg`, `ControlAcces`) VALUES
(1, 'Bedoui', 'Mohamed', 'CIN123456', 'ID123456', '1990-01-01 00:00:00', 'Tunisian', 'M', '2010-01-01 00:00:00', '2015-01-01 00:00:00', 'PhD', '123 Main St', 'City', 12345, '123-456-7890', 'Professor', '2012-01-01 00:00:00', '2013-01-01 00:00:00', 'A101', 'Computer Science', 'Active', 'Computer Networks', '123456789', 'Bank ABC', 'Branch XYZ', 'Vacation Address', '987-654-3210', 'Birthplace', '2010-01-01 00:00:00', '2022-01-01 00:00:00', 'Full-', 1, '5', 'Office 101', 'bedoui@example.com', 'bedoui@internal.example.com', 'بدوي', 'محمد', 'مكان الولادة', 'عنوان باللغة العربية', 'مدينة', 'oui', 'Specialization XYZ', 'Original Institution', 'Teaching Type XYZ', 'Access Cont'),
(8977, 'Nabli', 'Zidane', '987654321', 'ID456', '1985-08-22 00:00:00', 'Tunisian', 'M', '2019-03-01 00:00:00', '2019-04-01 00:00:00', 'Master', '456 Oak St', 'Town', 32767, '987-654-3210', 'Associate Professor', '2017-01-01 00:00:00', '2017-02-01 00:00:00', 'B456', 'Electrical Engineering', 'Single', 'Power Systems', '987654321', 'Bank of ABC', 'Branch B', 'Holiday St', '123-456-7890', 'Sfax', '2018-01-01 00:00:00', '2021-01-01 00:00:00', 'Part-', 1, 'Contract', 'Office 201', 'znabli@example.com', 'znabli@internal.com', 'نابلي', 'زيدان', 'صفاقس', 'عنوان', 'المدينة', 'oui', 'SubSP', 'Original Etb', 'Teaching Type', 'Allowed');

-- --------------------------------------------------------

--
-- Structure de la table `session`
--

CREATE TABLE `session` (
  `Numero` int(11) NOT NULL,
  `Annee` char(5) NOT NULL,
  `Sem` char(1) NOT NULL,
  `Debut` datetime DEFAULT NULL,
  `Fin` datetime DEFAULT NULL,
  `Debsem` datetime DEFAULT NULL,
  `Finsem` datetime DEFAULT NULL,
  `Annea` char(5) DEFAULT NULL,
  `Anneab` char(5) DEFAULT NULL,
  `SemAb` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `situation`
--

CREATE TABLE `situation` (
  `SituationID` int(11) NOT NULL,
  `SituationName` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `absensg`
--
ALTER TABLE `absensg`
  ADD PRIMARY KEY (`NumAbs`,`MatriculeProf`,`Session`,`DateAbs`,`Seance`),
  ADD KEY `MatriculeProf` (`MatriculeProf`),
  ADD KEY `CodeClasse` (`CodeClasse`),
  ADD KEY `CodeMatiere` (`CodeMatiere`);

--
-- Index pour la table `conges`
--
ALTER TABLE `conges`
  ADD PRIMARY KEY (`NumConge`),
  ADD KEY `MatriculeProf_idx` (`MatriculeProf`);

--
-- Index pour la table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`GradeID`);

--
-- Index pour la table `prof`
--
ALTER TABLE `prof`
  ADD PRIMARY KEY (`Matricule Prof`),
  ADD KEY `Matricule Prof` (`Matricule Prof`);

--
-- Index pour la table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`Numero`,`Annee`,`Sem`);

--
-- Index pour la table `situation`
--
ALTER TABLE `situation`
  ADD PRIMARY KEY (`SituationID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `conges`
--
ALTER TABLE `conges`
  MODIFY `NumConge` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `grade`
--
ALTER TABLE `grade`
  MODIFY `GradeID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `situation`
--
ALTER TABLE `situation`
  MODIFY `SituationID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `conges`
--
ALTER TABLE `conges`
  ADD CONSTRAINT `MatriculeProf_fk` FOREIGN KEY (`MatriculeProf`) REFERENCES `prof` (`Matricule Prof`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
