-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 29 oct. 2019 à 11:03
-- Version du serveur :  10.3.9-MariaDB
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mock_toeic`
--

-- --------------------------------------------------------

--
-- Structure de la table `date`
--

DROP TABLE IF EXISTS `date`;
CREATE TABLE IF NOT EXISTS `date` (
  `idDate` int(11) NOT NULL AUTO_INCREMENT,
  `dateTest` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`idDate`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `fill`
--

DROP TABLE IF EXISTS `fill`;
CREATE TABLE IF NOT EXISTS `fill` (
  `FK_idTest` int(11) NOT NULL,
  `FK_idUser` int(11) NOT NULL,
  `FK_idPart` int(1) NOT NULL,
  `FK_idDate` int(11) NOT NULL,
  `score` int(3) NOT NULL,
  PRIMARY KEY (`FK_idTest`,`FK_idUser`,`FK_idPart`,`FK_idDate`),
  KEY `FK_idPart` (`FK_idPart`),
  KEY `FK_idUser` (`FK_idUser`),
  KEY `FK_idDate` (`FK_idDate`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `grp`
--

DROP TABLE IF EXISTS `grp`;
CREATE TABLE IF NOT EXISTS `grp` (
  `idGrp` int(11) NOT NULL AUTO_INCREMENT,
  `libGrp` varchar(3) NOT NULL,
  PRIMARY KEY (`idGrp`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `grp`
--

INSERT INTO `grp` (`idGrp`, `libGrp`) VALUES
(1, 'G1'),
(2, 'G2');

-- --------------------------------------------------------

--
-- Structure de la table `part`
--

DROP TABLE IF EXISTS `part`;
CREATE TABLE IF NOT EXISTS `part` (
  `idPart` int(1) NOT NULL AUTO_INCREMENT,
  `FK_idTest` int(11) NOT NULL,
  `libPart` int(11) NOT NULL,
  PRIMARY KEY (`idPart`,`FK_idTest`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `FK_idTest` int(11) NOT NULL,
  `FK_idPart` int(1) NOT NULL,
  `idQuestion` int(3) NOT NULL AUTO_INCREMENT,
  `correctAnswer` varchar(1) NOT NULL,
  PRIMARY KEY (`idQuestion`,`FK_idTest`,`FK_idPart`),
  KEY `FK_idPart` (`FK_idPart`),
  KEY `FK_idTest` (`FK_idTest`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `speciality`
--

DROP TABLE IF EXISTS `speciality`;
CREATE TABLE IF NOT EXISTS `speciality` (
  `idSpeciality` int(11) NOT NULL AUTO_INCREMENT,
  `libSpeciality` varchar(10) NOT NULL,
  PRIMARY KEY (`idSpeciality`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `speciality`
--

INSERT INTO `speciality` (`idSpeciality`, `libSpeciality`) VALUES
(1, 'IG'),
(2, 'STE'),
(3, 'GBA'),
(4, 'MI'),
(5, 'MSI'),
(6, 'MEA'),
(7, 'SE'),
(8, 'MAT');

-- --------------------------------------------------------

--
-- Structure de la table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `FK_idUser` int(11) NOT NULL,
  `FK_idSpeciality` int(11) NOT NULL,
  `FK_idGrp` int(11) NOT NULL,
  `numStu` int(8) NOT NULL,
  `yearStu` int(1) NOT NULL,
  PRIMARY KEY (`FK_idUser`),
  UNIQUE KEY `numStu` (`numStu`),
  KEY `FK_idGroup` (`FK_idGrp`),
  KEY `FK_idSpeciality` (`FK_idSpeciality`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `student`
--

INSERT INTO `student` (`FK_idUser`, `FK_idSpeciality`, `FK_idGrp`, `numStu`, `yearStu`) VALUES
(2, 1, 1, 123, 3),
(6, 1, 2, 456, 3);

-- --------------------------------------------------------

--
-- Structure de la table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `FK_idUser` int(11) NOT NULL,
  `isConfirm` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`FK_idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `teacher`
--

INSERT INTO `teacher` (`FK_idUser`, `isConfirm`) VALUES
(4, 0),
(5, 1);

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `idTest` int(11) NOT NULL AUTO_INCREMENT,
  `nameTest` int(11) NOT NULL,
  PRIMARY KEY (`idTest`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `nameUser` varchar(25) NOT NULL,
  `firstNameUser` varchar(25) NOT NULL,
  `mailUser` varchar(50) NOT NULL,
  `pwdUser` varchar(10) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`idUser`, `nameUser`, `firstNameUser`, `mailUser`, `pwdUser`) VALUES
(2, 'Azharhoussen', 'Salim', 'salim.azharhoussen@etu.umontpellier.fr', 'abon'),
(4, 'Prof', 'Prof', 'prof.prof@umontpellier.fr', 'prof'),
(5, 'prof2', 'prof2', 'prof2.prof2@umontpellier.fr', 'prof2'),
(6, 'Azharhoussen', 'Maria', 'maria.azharhoussen@etu.umontpellier.fr', 'heouais');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `fill`
--
ALTER TABLE `fill`
  ADD CONSTRAINT `fill_ibfk_1` FOREIGN KEY (`FK_idPart`) REFERENCES `part` (`idPart`),
  ADD CONSTRAINT `fill_ibfk_2` FOREIGN KEY (`FK_idTest`) REFERENCES `test` (`idTest`),
  ADD CONSTRAINT `fill_ibfk_3` FOREIGN KEY (`FK_idUser`) REFERENCES `student` (`FK_idUser`),
  ADD CONSTRAINT `fill_ibfk_4` FOREIGN KEY (`FK_idDate`) REFERENCES `date` (`idDate`);

--
-- Contraintes pour la table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`FK_idPart`) REFERENCES `part` (`idPart`),
  ADD CONSTRAINT `question_ibfk_2` FOREIGN KEY (`FK_idTest`) REFERENCES `test` (`idTest`);

--
-- Contraintes pour la table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`FK_idUser`) REFERENCES `user` (`idUser`),
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`FK_idGrp`) REFERENCES `grp` (`idGrp`),
  ADD CONSTRAINT `student_ibfk_3` FOREIGN KEY (`FK_idSpeciality`) REFERENCES `speciality` (`idSpeciality`);

--
-- Contraintes pour la table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`FK_idUser`) REFERENCES `user` (`idUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
