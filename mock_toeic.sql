-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 12 jan. 2020 à 18:48
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

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
  `dateTest` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idDate`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `date`
--

INSERT INTO `date` (`idDate`, `dateTest`) VALUES
(1, '2019-12-01 17:25:37'),
(2, '2019-12-24 00:49:50'),
(3, '2019-12-24 00:51:22'),
(4, '2019-12-24 00:57:51'),
(5, '2019-12-24 10:25:38'),
(6, '2019-12-27 13:46:28'),
(7, '2019-12-27 14:01:07'),
(8, '2020-01-12 17:55:22'),
(9, '2020-01-12 19:34:08');

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
  KEY `FK_idUser` (`FK_idUser`),
  KEY `FK_idDate` (`FK_idDate`),
  KEY `FK_idPart` (`FK_idPart`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fill`
--

INSERT INTO `fill` (`FK_idTest`, `FK_idUser`, `FK_idPart`, `FK_idDate`, `score`) VALUES
(15, 17, 1, 9, 6),
(15, 17, 2, 9, 25),
(15, 17, 3, 9, 39),
(15, 17, 4, 9, 30),
(15, 17, 5, 9, 30),
(15, 17, 6, 9, 16),
(15, 17, 7, 9, 54);

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
  `idPart` int(1) NOT NULL,
  `libPart` varchar(20) NOT NULL,
  PRIMARY KEY (`idPart`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `part`
--

INSERT INTO `part` (`idPart`, `libPart`) VALUES
(1, 'Partie 1'),
(2, 'Partie 2'),
(3, 'Partie 3'),
(4, 'Partie 4'),
(5, 'Partie 5'),
(6, 'Partie 6'),
(7, 'Partie 7');

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `FK_idTest` int(11) NOT NULL,
  `FK_idPart` int(1) NOT NULL,
  `idQuestion` int(3) NOT NULL,
  `correctAnswer` varchar(1) NOT NULL,
  PRIMARY KEY (`idQuestion`,`FK_idTest`,`FK_idPart`),
  KEY `FK_idPart` (`FK_idPart`),
  KEY `FK_idTest` (`FK_idTest`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`FK_idTest`, `FK_idPart`, `idQuestion`, `correctAnswer`) VALUES
(15, 1, 1, 'a'),
(15, 1, 2, 'a'),
(15, 1, 3, 'a'),
(15, 1, 4, 'a'),
(15, 1, 5, 'a'),
(15, 1, 6, 'a'),
(15, 2, 7, 'a'),
(15, 2, 8, 'a'),
(15, 2, 9, 'a'),
(15, 2, 10, 'a'),
(15, 2, 11, 'a'),
(15, 2, 12, 'a'),
(15, 2, 13, 'a'),
(15, 2, 14, 'a'),
(15, 2, 15, 'a'),
(15, 2, 16, 'a'),
(15, 2, 17, 'a'),
(15, 2, 18, 'a'),
(15, 2, 19, 'a'),
(15, 2, 20, 'a'),
(15, 2, 21, 'a'),
(15, 2, 22, 'a'),
(15, 2, 23, 'a'),
(15, 2, 24, 'a'),
(15, 2, 25, 'a'),
(15, 2, 26, 'a'),
(15, 2, 27, 'a'),
(15, 2, 28, 'a'),
(15, 2, 29, 'a'),
(15, 2, 30, 'a'),
(15, 2, 31, 'a'),
(15, 3, 32, 'a'),
(15, 3, 33, 'a'),
(15, 3, 34, 'a'),
(15, 3, 35, 'a'),
(15, 3, 36, 'a'),
(15, 3, 37, 'a'),
(15, 3, 38, 'a'),
(15, 3, 39, 'a'),
(15, 3, 40, 'a'),
(15, 3, 41, 'a'),
(15, 3, 42, 'a'),
(15, 3, 43, 'a'),
(15, 3, 44, 'a'),
(15, 3, 45, 'a'),
(15, 3, 46, 'a'),
(15, 3, 47, 'a'),
(15, 3, 48, 'a'),
(15, 3, 49, 'a'),
(15, 3, 50, 'a'),
(15, 3, 51, 'a'),
(15, 3, 52, 'a'),
(15, 3, 53, 'a'),
(15, 3, 54, 'a'),
(15, 3, 55, 'a'),
(15, 3, 56, 'a'),
(15, 3, 57, 'a'),
(15, 3, 58, 'a'),
(15, 3, 59, 'a'),
(15, 3, 60, 'a'),
(15, 3, 61, 'a'),
(15, 3, 62, 'a'),
(15, 3, 63, 'a'),
(15, 3, 64, 'a'),
(15, 3, 65, 'a'),
(15, 3, 66, 'a'),
(15, 3, 67, 'a'),
(15, 3, 68, 'a'),
(15, 3, 69, 'a'),
(15, 3, 70, 'a'),
(15, 4, 71, 'a'),
(15, 4, 72, 'a'),
(15, 4, 73, 'a'),
(15, 4, 74, 'a'),
(15, 4, 75, 'a'),
(15, 4, 76, 'a'),
(15, 4, 77, 'a'),
(15, 4, 78, 'a'),
(15, 4, 79, 'a'),
(15, 4, 80, 'a'),
(15, 4, 81, 'a'),
(15, 4, 82, 'a'),
(15, 4, 83, 'a'),
(15, 4, 84, 'a'),
(15, 4, 85, 'a'),
(15, 4, 86, 'a'),
(15, 4, 87, 'a'),
(15, 4, 88, 'a'),
(15, 4, 89, 'a'),
(15, 4, 90, 'a'),
(15, 4, 91, 'a'),
(15, 4, 92, 'a'),
(15, 4, 93, 'a'),
(15, 4, 94, 'a'),
(15, 4, 95, 'a'),
(15, 4, 96, 'a'),
(15, 4, 97, 'a'),
(15, 4, 98, 'a'),
(15, 4, 99, 'a'),
(15, 4, 100, 'a'),
(15, 5, 101, 'a'),
(15, 5, 102, 'a'),
(15, 5, 103, 'a'),
(15, 5, 104, 'a'),
(15, 5, 105, 'a'),
(15, 5, 106, 'a'),
(15, 5, 107, 'a'),
(15, 5, 108, 'a'),
(15, 5, 109, 'a'),
(15, 5, 110, 'a'),
(15, 5, 111, 'a'),
(15, 5, 112, 'a'),
(15, 5, 113, 'a'),
(15, 5, 114, 'a'),
(15, 5, 115, 'a'),
(15, 5, 116, 'a'),
(15, 5, 117, 'a'),
(15, 5, 118, 'a'),
(15, 5, 119, 'a'),
(15, 5, 120, 'a'),
(15, 5, 121, 'a'),
(15, 5, 122, 'a'),
(15, 5, 123, 'a'),
(15, 5, 124, 'a'),
(15, 5, 125, 'a'),
(15, 5, 126, 'a'),
(15, 5, 127, 'a'),
(15, 5, 128, 'a'),
(15, 5, 129, 'a'),
(15, 5, 130, 'a'),
(15, 6, 131, 'a'),
(15, 6, 132, 'a'),
(15, 6, 133, 'a'),
(15, 6, 134, 'a'),
(15, 6, 135, 'a'),
(15, 6, 136, 'a'),
(15, 6, 137, 'a'),
(15, 6, 138, 'a'),
(15, 6, 139, 'a'),
(15, 6, 140, 'a'),
(15, 6, 141, 'a'),
(15, 6, 142, 'a'),
(15, 6, 143, 'a'),
(15, 6, 144, 'a'),
(15, 6, 145, 'a'),
(15, 6, 146, 'a'),
(15, 7, 147, 'a'),
(15, 7, 148, 'a'),
(15, 7, 149, 'a'),
(15, 7, 150, 'a'),
(15, 7, 151, 'a'),
(15, 7, 152, 'a'),
(15, 7, 153, 'a'),
(15, 7, 154, 'a'),
(15, 7, 155, 'a'),
(15, 7, 156, 'a'),
(15, 7, 157, 'a'),
(15, 7, 158, 'a'),
(15, 7, 159, 'a'),
(15, 7, 160, 'a'),
(15, 7, 161, 'a'),
(15, 7, 162, 'a'),
(15, 7, 163, 'a'),
(15, 7, 164, 'a'),
(15, 7, 165, 'a'),
(15, 7, 166, 'a'),
(15, 7, 167, 'a'),
(15, 7, 168, 'a'),
(15, 7, 169, 'a'),
(15, 7, 170, 'a'),
(15, 7, 171, 'a'),
(15, 7, 172, 'a'),
(15, 7, 173, 'a'),
(15, 7, 174, 'a'),
(15, 7, 175, 'a'),
(15, 7, 176, 'a'),
(15, 7, 177, 'a'),
(15, 7, 178, 'a'),
(15, 7, 179, 'a'),
(15, 7, 180, 'a'),
(15, 7, 181, 'a'),
(15, 7, 182, 'a'),
(15, 7, 183, 'a'),
(15, 7, 184, 'a'),
(15, 7, 185, 'a'),
(15, 7, 186, 'a'),
(15, 7, 187, 'a'),
(15, 7, 188, 'a'),
(15, 7, 189, 'a'),
(15, 7, 190, 'a'),
(15, 7, 191, 'a'),
(15, 7, 192, 'a'),
(15, 7, 193, 'a'),
(15, 7, 194, 'a'),
(15, 7, 195, 'a'),
(15, 7, 196, 'a'),
(15, 7, 197, 'a'),
(15, 7, 198, 'a'),
(15, 7, 199, 'a'),
(15, 7, 200, 'a');

-- --------------------------------------------------------

--
-- Structure de la table `speciality`
--

DROP TABLE IF EXISTS `speciality`;
CREATE TABLE IF NOT EXISTS `speciality` (
  `idSpeciality` int(11) NOT NULL AUTO_INCREMENT,
  `libSpeciality` varchar(10) NOT NULL,
  PRIMARY KEY (`idSpeciality`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

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
(17, 1, 1, 123, 3),
(18, 1, 1, 123567, 3),
(19, 3, 1, 1235673, 4),
(20, 8, 1, 12355, 5),
(21, 1, 1, 1232222, 3);

-- --------------------------------------------------------

--
-- Structure de la table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `FK_idUser` int(11) NOT NULL,
  `isConfirm` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`FK_idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `teacher`
--

INSERT INTO `teacher` (`FK_idUser`, `isConfirm`) VALUES
(16, 1),
(24, 1);

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `idTest` int(11) NOT NULL AUTO_INCREMENT,
  `nameTest` varchar(20) NOT NULL,
  `Code` varchar(10) NOT NULL,
  PRIMARY KEY (`idTest`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `test`
--

INSERT INTO `test` (`idTest`, `nameTest`, `Code`) VALUES
(15, '123', 'TCCCCYE');

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
  `pwdUser` varchar(45) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`idUser`, `nameUser`, `firstNameUser`, `mailUser`, `pwdUser`) VALUES
(16, 'Mollard', 'LÃ©o', 'lele.mollard@gmail.com', 'de271790913ea81742b7d31a70d85f50a3d3e5ae'),
(17, 'Salim', 'salim', 'lelee.mollard@gmail.com', 'de271790913ea81742b7d31a70d85f50a3d3e5ae'),
(18, 'Mollard', 'LÃ©o', 'lele.mollarazed@gmail.com', 'de271790913ea81742b7d31a70d85f50a3d3e5ae'),
(19, 'jacky', 'chan', 'aaze@aze.com', 'de271790913ea81742b7d31a70d85f50a3d3e5ae'),
(20, 'donald', 'trump', 'azeazeaze@e.c', 'de271790913ea81742b7d31a70d85f50a3d3e5ae'),
(21, 'test', 'test', 'a@a.n', 'de271790913ea81742b7d31a70d85f50a3d3e5ae'),
(24, 'sqdsqd', 'qsdsqd', 's@s', 'de271790913ea81742b7d31a70d85f50a3d3e5ae');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `fill`
--
ALTER TABLE `fill`
  ADD CONSTRAINT `fill_ibfk_3` FOREIGN KEY (`FK_idUser`) REFERENCES `student` (`FK_idUser`),
  ADD CONSTRAINT `fill_ibfk_4` FOREIGN KEY (`FK_idDate`) REFERENCES `date` (`idDate`),
  ADD CONSTRAINT `fill_ibfk_5` FOREIGN KEY (`FK_idPart`) REFERENCES `part` (`idPart`),
  ADD CONSTRAINT `fill_ibfk_6` FOREIGN KEY (`FK_idTest`) REFERENCES `test` (`idTest`) ON DELETE CASCADE;

--
-- Contraintes pour la table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_3` FOREIGN KEY (`FK_idPart`) REFERENCES `part` (`idPart`),
  ADD CONSTRAINT `question_ibfk_4` FOREIGN KEY (`FK_idTest`) REFERENCES `test` (`idTest`) ON DELETE CASCADE;

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
