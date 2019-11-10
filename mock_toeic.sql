-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 10 nov. 2019 à 18:18
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
  `idPart` int(10) NOT NULL AUTO_INCREMENT,
  `FK_idTest` int(10) NOT NULL,
  `libPart` varchar(11) NOT NULL,
  PRIMARY KEY (`idPart`,`FK_idTest`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `part`
--

INSERT INTO `part` (`idPart`, `FK_idTest`, `libPart`) VALUES
(1, 1, 'partie 1'),
(2, 27, 'partie 1'),
(3, 27, 'partie 2'),
(4, 28, 'partie 1'),
(5, 28, 'partie 2'),
(6, 29, 'partie 1'),
(7, 29, 'partie 2'),
(8, 30, 'partie 1'),
(9, 30, 'partie 2'),
(10, 31, 'partie 1'),
(11, 31, 'partie 2'),
(12, 32, 'partie 1'),
(13, 32, 'partie 2'),
(14, 33, 'partie 1'),
(15, 33, 'partie 2'),
(16, 34, 'partie 1'),
(17, 34, 'partie 2'),
(18, 35, 'partie 1'),
(19, 35, 'partie 2');

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `FK_idTest` int(11) NOT NULL,
  `FK_idPart` int(1) NOT NULL,
  `idQuestion` int(30) NOT NULL AUTO_INCREMENT,
  `correctAnswer` varchar(1) NOT NULL,
  PRIMARY KEY (`idQuestion`,`FK_idTest`,`FK_idPart`),
  KEY `FK_idPart` (`FK_idPart`),
  KEY `FK_idTest` (`FK_idTest`)
) ENGINE=InnoDB AUTO_INCREMENT=1998 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`FK_idTest`, `FK_idPart`, `idQuestion`, `correctAnswer`) VALUES
(33, 14, 1401, 'a'),
(33, 14, 1402, 'c'),
(33, 14, 1403, 'b'),
(33, 14, 1404, 'b'),
(33, 14, 1405, 'a'),
(33, 14, 1406, 'a'),
(33, 14, 1407, 'a'),
(33, 14, 1408, 'a'),
(33, 14, 1409, 'a'),
(33, 14, 1410, 'a'),
(33, 14, 1411, 'a'),
(33, 14, 1412, 'a'),
(33, 14, 1413, 'a'),
(33, 14, 1414, 'a'),
(33, 14, 1415, 'a'),
(33, 14, 1416, 'a'),
(33, 14, 1417, 'a'),
(33, 14, 1418, 'a'),
(33, 14, 1419, 'a'),
(33, 14, 1420, 'a'),
(33, 14, 1421, 'a'),
(33, 14, 1422, 'a'),
(33, 14, 1423, 'a'),
(33, 14, 1424, 'a'),
(33, 14, 1425, 'a'),
(33, 14, 1426, 'a'),
(33, 14, 1427, 'a'),
(33, 14, 1428, 'a'),
(33, 14, 1429, 'a'),
(33, 14, 1430, 'a'),
(33, 14, 1431, 'a'),
(33, 14, 1432, 'a'),
(33, 14, 1433, 'a'),
(33, 14, 1434, 'a'),
(33, 14, 1435, 'a'),
(33, 14, 1436, 'a'),
(33, 14, 1437, 'a'),
(33, 14, 1438, 'a'),
(33, 14, 1439, 'a'),
(33, 14, 1440, 'a'),
(33, 14, 1441, 'a'),
(33, 14, 1442, 'a'),
(33, 14, 1443, 'a'),
(33, 14, 1444, 'a'),
(33, 14, 1445, 'a'),
(33, 14, 1446, 'a'),
(33, 14, 1447, 'a'),
(33, 14, 1448, 'a'),
(33, 14, 1449, 'a'),
(33, 14, 1450, 'a'),
(33, 14, 1451, 'a'),
(33, 14, 1452, 'a'),
(33, 14, 1453, 'a'),
(33, 14, 1454, 'a'),
(33, 14, 1455, 'a'),
(33, 14, 1456, 'a'),
(33, 14, 1457, 'a'),
(33, 14, 1458, 'a'),
(33, 14, 1459, 'a'),
(33, 14, 1460, 'a'),
(33, 14, 1461, 'a'),
(33, 14, 1462, 'a'),
(33, 14, 1463, 'a'),
(33, 14, 1464, 'a'),
(33, 14, 1465, 'a'),
(33, 14, 1466, 'a'),
(33, 14, 1467, 'a'),
(33, 14, 1468, 'a'),
(33, 14, 1469, 'a'),
(33, 14, 1470, 'a'),
(33, 14, 1471, 'a'),
(33, 14, 1472, 'a'),
(33, 14, 1473, 'a'),
(33, 14, 1474, 'a'),
(33, 14, 1475, 'a'),
(33, 14, 1476, 'a'),
(33, 14, 1477, 'a'),
(33, 14, 1478, 'a'),
(33, 14, 1479, 'a'),
(33, 14, 1480, 'a'),
(33, 14, 1481, 'a'),
(33, 14, 1482, 'a'),
(33, 14, 1483, 'a'),
(33, 14, 1484, 'a'),
(33, 14, 1485, 'a'),
(33, 14, 1486, 'a'),
(33, 14, 1487, 'a'),
(33, 14, 1488, 'a'),
(33, 14, 1489, 'a'),
(33, 14, 1490, 'a'),
(33, 14, 1491, 'a'),
(33, 14, 1492, 'a'),
(33, 14, 1493, 'a'),
(33, 14, 1494, 'a'),
(33, 14, 1495, 'a'),
(33, 14, 1496, 'a'),
(33, 14, 1497, 'a'),
(33, 14, 1498, 'a'),
(33, 14, 1499, 'a'),
(33, 15, 1500, 'a'),
(33, 15, 1501, 'a'),
(33, 15, 1502, 'a'),
(33, 15, 1503, 'a'),
(33, 15, 1504, 'a'),
(33, 15, 1505, 'a'),
(33, 15, 1506, 'a'),
(33, 15, 1507, 'a'),
(33, 15, 1508, 'a'),
(33, 15, 1509, 'a'),
(33, 15, 1510, 'a'),
(33, 15, 1511, 'a'),
(33, 15, 1512, 'a'),
(33, 15, 1513, 'a'),
(33, 15, 1514, 'a'),
(33, 15, 1515, 'a'),
(33, 15, 1516, 'a'),
(33, 15, 1517, 'a'),
(33, 15, 1518, 'a'),
(33, 15, 1519, 'a'),
(33, 15, 1520, 'a'),
(33, 15, 1521, 'a'),
(33, 15, 1522, 'a'),
(33, 15, 1523, 'a'),
(33, 15, 1524, 'a'),
(33, 15, 1525, 'a'),
(33, 15, 1526, 'a'),
(33, 15, 1527, 'a'),
(33, 15, 1528, 'a'),
(33, 15, 1529, 'a'),
(33, 15, 1530, 'a'),
(33, 15, 1531, 'a'),
(33, 15, 1532, 'a'),
(33, 15, 1533, 'a'),
(33, 15, 1534, 'a'),
(33, 15, 1535, 'a'),
(33, 15, 1536, 'a'),
(33, 15, 1537, 'a'),
(33, 15, 1538, 'a'),
(33, 15, 1539, 'a'),
(33, 15, 1540, 'a'),
(33, 15, 1541, 'a'),
(33, 15, 1542, 'a'),
(33, 15, 1543, 'a'),
(33, 15, 1544, 'a'),
(33, 15, 1545, 'a'),
(33, 15, 1546, 'a'),
(33, 15, 1547, 'a'),
(33, 15, 1548, 'a'),
(33, 15, 1549, 'a'),
(33, 15, 1550, 'a'),
(33, 15, 1551, 'a'),
(33, 15, 1552, 'a'),
(33, 15, 1553, 'a'),
(33, 15, 1554, 'a'),
(33, 15, 1555, 'a'),
(33, 15, 1556, 'a'),
(33, 15, 1557, 'a'),
(33, 15, 1558, 'a'),
(33, 15, 1559, 'a'),
(33, 15, 1560, 'a'),
(33, 15, 1561, 'a'),
(33, 15, 1562, 'a'),
(33, 15, 1563, 'a'),
(33, 15, 1564, 'a'),
(33, 15, 1565, 'a'),
(33, 15, 1566, 'a'),
(33, 15, 1567, 'a'),
(33, 15, 1568, 'a'),
(33, 15, 1569, 'a'),
(33, 15, 1570, 'a'),
(33, 15, 1571, 'a'),
(33, 15, 1572, 'a'),
(33, 15, 1573, 'a'),
(33, 15, 1574, 'a'),
(33, 15, 1575, 'a'),
(33, 15, 1576, 'a'),
(33, 15, 1577, 'a'),
(33, 15, 1578, 'a'),
(33, 15, 1579, 'a'),
(33, 15, 1580, 'a'),
(33, 15, 1581, 'a'),
(33, 15, 1582, 'a'),
(33, 15, 1583, 'a'),
(33, 15, 1584, 'a'),
(33, 15, 1585, 'a'),
(33, 15, 1586, 'a'),
(33, 15, 1587, 'a'),
(33, 15, 1588, 'a'),
(33, 15, 1589, 'a'),
(33, 15, 1590, 'a'),
(33, 15, 1591, 'a'),
(33, 15, 1592, 'a'),
(33, 15, 1593, 'a'),
(33, 15, 1594, 'a'),
(33, 15, 1595, 'a'),
(33, 15, 1596, 'a'),
(33, 15, 1597, 'a'),
(33, 15, 1598, 'a'),
(33, 15, 1599, 'a'),
(34, 16, 1600, 'b'),
(34, 16, 1601, 'b'),
(34, 16, 1602, 'a'),
(34, 16, 1603, 'a'),
(34, 16, 1604, 'a'),
(34, 16, 1605, 'a'),
(34, 16, 1606, 'a'),
(34, 16, 1607, 'a'),
(34, 16, 1608, 'a'),
(34, 16, 1609, 'a'),
(34, 16, 1610, 'a'),
(34, 16, 1611, 'a'),
(34, 16, 1612, 'a'),
(34, 16, 1613, 'a'),
(34, 16, 1614, 'a'),
(34, 16, 1615, 'a'),
(34, 16, 1616, 'a'),
(34, 16, 1617, 'a'),
(34, 16, 1618, 'a'),
(34, 16, 1619, 'a'),
(34, 16, 1620, 'a'),
(34, 16, 1621, 'a'),
(34, 16, 1622, 'a'),
(34, 16, 1623, 'a'),
(34, 16, 1624, 'a'),
(34, 16, 1625, 'a'),
(34, 16, 1626, 'a'),
(34, 16, 1627, 'a'),
(34, 16, 1628, 'a'),
(34, 16, 1629, 'a'),
(34, 16, 1630, 'a'),
(34, 16, 1631, 'a'),
(34, 16, 1632, 'a'),
(34, 16, 1633, 'a'),
(34, 16, 1634, 'a'),
(34, 16, 1635, 'a'),
(34, 16, 1636, 'a'),
(34, 16, 1637, 'a'),
(34, 16, 1638, 'a'),
(34, 16, 1639, 'a'),
(34, 16, 1640, 'a'),
(34, 16, 1641, 'a'),
(34, 16, 1642, 'a'),
(34, 16, 1643, 'a'),
(34, 16, 1644, 'a'),
(34, 16, 1645, 'a'),
(34, 16, 1646, 'a'),
(34, 16, 1647, 'a'),
(34, 16, 1648, 'a'),
(34, 16, 1649, 'a'),
(34, 16, 1650, 'a'),
(34, 16, 1651, 'a'),
(34, 16, 1652, 'a'),
(34, 16, 1653, 'a'),
(34, 16, 1654, 'a'),
(34, 16, 1655, 'a'),
(34, 16, 1656, 'a'),
(34, 16, 1657, 'a'),
(34, 16, 1658, 'a'),
(34, 16, 1659, 'a'),
(34, 16, 1660, 'a'),
(34, 16, 1661, 'a'),
(34, 16, 1662, 'a'),
(34, 16, 1663, 'a'),
(34, 16, 1664, 'a'),
(34, 16, 1665, 'a'),
(34, 16, 1666, 'a'),
(34, 16, 1667, 'a'),
(34, 16, 1668, 'a'),
(34, 16, 1669, 'a'),
(34, 16, 1670, 'a'),
(34, 16, 1671, 'a'),
(34, 16, 1672, 'a'),
(34, 16, 1673, 'a'),
(34, 16, 1674, 'a'),
(34, 16, 1675, 'a'),
(34, 16, 1676, 'a'),
(34, 16, 1677, 'a'),
(34, 16, 1678, 'a'),
(34, 16, 1679, 'a'),
(34, 16, 1680, 'a'),
(34, 16, 1681, 'a'),
(34, 16, 1682, 'a'),
(34, 16, 1683, 'a'),
(34, 16, 1684, 'a'),
(34, 16, 1685, 'a'),
(34, 16, 1686, 'a'),
(34, 16, 1687, 'a'),
(34, 16, 1688, 'a'),
(34, 16, 1689, 'a'),
(34, 16, 1690, 'a'),
(34, 16, 1691, 'a'),
(34, 16, 1692, 'a'),
(34, 16, 1693, 'a'),
(34, 16, 1694, 'a'),
(34, 16, 1695, 'a'),
(34, 16, 1696, 'a'),
(34, 16, 1697, 'a'),
(34, 16, 1698, 'a'),
(34, 17, 1699, 'a'),
(34, 17, 1700, 'a'),
(34, 17, 1701, 'a'),
(34, 17, 1702, 'a'),
(34, 17, 1703, 'a'),
(34, 17, 1704, 'a'),
(34, 17, 1705, 'a'),
(34, 17, 1706, 'a'),
(34, 17, 1707, 'a'),
(34, 17, 1708, 'a'),
(34, 17, 1709, 'a'),
(34, 17, 1710, 'a'),
(34, 17, 1711, 'a'),
(34, 17, 1712, 'a'),
(34, 17, 1713, 'a'),
(34, 17, 1714, 'a'),
(34, 17, 1715, 'a'),
(34, 17, 1716, 'a'),
(34, 17, 1717, 'a'),
(34, 17, 1718, 'a'),
(34, 17, 1719, 'a'),
(34, 17, 1720, 'a'),
(34, 17, 1721, 'a'),
(34, 17, 1722, 'a'),
(34, 17, 1723, 'a'),
(34, 17, 1724, 'a'),
(34, 17, 1725, 'a'),
(34, 17, 1726, 'a'),
(34, 17, 1727, 'a'),
(34, 17, 1728, 'a'),
(34, 17, 1729, 'a'),
(34, 17, 1730, 'a'),
(34, 17, 1731, 'a'),
(34, 17, 1732, 'a'),
(34, 17, 1733, 'a'),
(34, 17, 1734, 'a'),
(34, 17, 1735, 'a'),
(34, 17, 1736, 'a'),
(34, 17, 1737, 'a'),
(34, 17, 1738, 'a'),
(34, 17, 1739, 'a'),
(34, 17, 1740, 'a'),
(34, 17, 1741, 'a'),
(34, 17, 1742, 'a'),
(34, 17, 1743, 'a'),
(34, 17, 1744, 'a'),
(34, 17, 1745, 'a'),
(34, 17, 1746, 'a'),
(34, 17, 1747, 'a'),
(34, 17, 1748, 'a'),
(34, 17, 1749, 'a'),
(34, 17, 1750, 'a'),
(34, 17, 1751, 'a'),
(34, 17, 1752, 'a'),
(34, 17, 1753, 'a'),
(34, 17, 1754, 'a'),
(34, 17, 1755, 'a'),
(34, 17, 1756, 'a'),
(34, 17, 1757, 'a'),
(34, 17, 1758, 'a'),
(34, 17, 1759, 'a'),
(34, 17, 1760, 'a'),
(34, 17, 1761, 'a'),
(34, 17, 1762, 'a'),
(34, 17, 1763, 'a'),
(34, 17, 1764, 'a'),
(34, 17, 1765, 'a'),
(34, 17, 1766, 'a'),
(34, 17, 1767, 'a'),
(34, 17, 1768, 'a'),
(34, 17, 1769, 'a'),
(34, 17, 1770, 'a'),
(34, 17, 1771, 'a'),
(34, 17, 1772, 'a'),
(34, 17, 1773, 'a'),
(34, 17, 1774, 'a'),
(34, 17, 1775, 'a'),
(34, 17, 1776, 'a'),
(34, 17, 1777, 'a'),
(34, 17, 1778, 'a'),
(34, 17, 1779, 'a'),
(34, 17, 1780, 'a'),
(34, 17, 1781, 'a'),
(34, 17, 1782, 'a'),
(34, 17, 1783, 'a'),
(34, 17, 1784, 'a'),
(34, 17, 1785, 'a'),
(34, 17, 1786, 'a'),
(34, 17, 1787, 'a'),
(34, 17, 1788, 'a'),
(34, 17, 1789, 'a'),
(34, 17, 1790, 'a'),
(34, 17, 1791, 'a'),
(34, 17, 1792, 'a'),
(34, 17, 1793, 'a'),
(34, 17, 1794, 'a'),
(34, 17, 1795, 'a'),
(34, 17, 1796, 'a'),
(34, 17, 1797, 'a'),
(34, 17, 1798, 'a'),
(35, 18, 1799, 'c'),
(35, 18, 1800, 'b'),
(35, 18, 1801, 'a'),
(35, 18, 1802, 'a'),
(35, 18, 1803, 'a'),
(35, 18, 1804, 'a'),
(35, 18, 1805, 'a'),
(35, 18, 1806, 'a'),
(35, 18, 1807, 'a'),
(35, 18, 1808, 'a'),
(35, 18, 1809, 'a'),
(35, 18, 1810, 'a'),
(35, 18, 1811, 'a'),
(35, 18, 1812, 'a'),
(35, 18, 1813, 'a'),
(35, 18, 1814, 'a'),
(35, 18, 1815, 'a'),
(35, 18, 1816, 'a'),
(35, 18, 1817, 'a'),
(35, 18, 1818, 'a'),
(35, 18, 1819, 'a'),
(35, 18, 1820, 'a'),
(35, 18, 1821, 'a'),
(35, 18, 1822, 'a'),
(35, 18, 1823, 'a'),
(35, 18, 1824, 'a'),
(35, 18, 1825, 'a'),
(35, 18, 1826, 'a'),
(35, 18, 1827, 'a'),
(35, 18, 1828, 'a'),
(35, 18, 1829, 'a'),
(35, 18, 1830, 'a'),
(35, 18, 1831, 'a'),
(35, 18, 1832, 'a'),
(35, 18, 1833, 'a'),
(35, 18, 1834, 'a'),
(35, 18, 1835, 'a'),
(35, 18, 1836, 'a'),
(35, 18, 1837, 'a'),
(35, 18, 1838, 'a'),
(35, 18, 1839, 'a'),
(35, 18, 1840, 'a'),
(35, 18, 1841, 'a'),
(35, 18, 1842, 'a'),
(35, 18, 1843, 'a'),
(35, 18, 1844, 'a'),
(35, 18, 1845, 'a'),
(35, 18, 1846, 'a'),
(35, 18, 1847, 'a'),
(35, 18, 1848, 'a'),
(35, 18, 1849, 'a'),
(35, 18, 1850, 'a'),
(35, 18, 1851, 'a'),
(35, 18, 1852, 'a'),
(35, 18, 1853, 'a'),
(35, 18, 1854, 'a'),
(35, 18, 1855, 'a'),
(35, 18, 1856, 'a'),
(35, 18, 1857, 'a'),
(35, 18, 1858, 'a'),
(35, 18, 1859, 'a'),
(35, 18, 1860, 'a'),
(35, 18, 1861, 'a'),
(35, 18, 1862, 'a'),
(35, 18, 1863, 'a'),
(35, 18, 1864, 'a'),
(35, 18, 1865, 'a'),
(35, 18, 1866, 'a'),
(35, 18, 1867, 'a'),
(35, 18, 1868, 'a'),
(35, 18, 1869, 'a'),
(35, 18, 1870, 'a'),
(35, 18, 1871, 'a'),
(35, 18, 1872, 'a'),
(35, 18, 1873, 'a'),
(35, 18, 1874, 'a'),
(35, 18, 1875, 'a'),
(35, 18, 1876, 'a'),
(35, 18, 1877, 'a'),
(35, 18, 1878, 'a'),
(35, 18, 1879, 'a'),
(35, 18, 1880, 'a'),
(35, 18, 1881, 'a'),
(35, 18, 1882, 'a'),
(35, 18, 1883, 'a'),
(35, 18, 1884, 'a'),
(35, 18, 1885, 'a'),
(35, 18, 1886, 'a'),
(35, 18, 1887, 'a'),
(35, 18, 1888, 'a'),
(35, 18, 1889, 'a'),
(35, 18, 1890, 'a'),
(35, 18, 1891, 'a'),
(35, 18, 1892, 'a'),
(35, 18, 1893, 'a'),
(35, 18, 1894, 'a'),
(35, 18, 1895, 'a'),
(35, 18, 1896, 'a'),
(35, 18, 1897, 'a'),
(35, 19, 1898, 'a'),
(35, 19, 1899, 'a'),
(35, 19, 1900, 'a'),
(35, 19, 1901, 'a'),
(35, 19, 1902, 'a'),
(35, 19, 1903, 'a'),
(35, 19, 1904, 'a'),
(35, 19, 1905, 'a'),
(35, 19, 1906, 'a'),
(35, 19, 1907, 'a'),
(35, 19, 1908, 'a'),
(35, 19, 1909, 'a'),
(35, 19, 1910, 'a'),
(35, 19, 1911, 'a'),
(35, 19, 1912, 'a'),
(35, 19, 1913, 'a'),
(35, 19, 1914, 'a'),
(35, 19, 1915, 'a'),
(35, 19, 1916, 'a'),
(35, 19, 1917, 'a'),
(35, 19, 1918, 'a'),
(35, 19, 1919, 'a'),
(35, 19, 1920, 'a'),
(35, 19, 1921, 'a'),
(35, 19, 1922, 'a'),
(35, 19, 1923, 'a'),
(35, 19, 1924, 'a'),
(35, 19, 1925, 'a'),
(35, 19, 1926, 'a'),
(35, 19, 1927, 'a'),
(35, 19, 1928, 'a'),
(35, 19, 1929, 'a'),
(35, 19, 1930, 'a'),
(35, 19, 1931, 'a'),
(35, 19, 1932, 'a'),
(35, 19, 1933, 'a'),
(35, 19, 1934, 'a'),
(35, 19, 1935, 'a'),
(35, 19, 1936, 'a'),
(35, 19, 1937, 'a'),
(35, 19, 1938, 'a'),
(35, 19, 1939, 'a'),
(35, 19, 1940, 'a'),
(35, 19, 1941, 'a'),
(35, 19, 1942, 'a'),
(35, 19, 1943, 'a'),
(35, 19, 1944, 'a'),
(35, 19, 1945, 'a'),
(35, 19, 1946, 'a'),
(35, 19, 1947, 'a'),
(35, 19, 1948, 'a'),
(35, 19, 1949, 'a'),
(35, 19, 1950, 'a'),
(35, 19, 1951, 'a'),
(35, 19, 1952, 'a'),
(35, 19, 1953, 'a'),
(35, 19, 1954, 'a'),
(35, 19, 1955, 'a'),
(35, 19, 1956, 'a'),
(35, 19, 1957, 'a'),
(35, 19, 1958, 'a'),
(35, 19, 1959, 'a'),
(35, 19, 1960, 'a'),
(35, 19, 1961, 'a'),
(35, 19, 1962, 'a'),
(35, 19, 1963, 'a'),
(35, 19, 1964, 'a'),
(35, 19, 1965, 'a'),
(35, 19, 1966, 'a'),
(35, 19, 1967, 'a'),
(35, 19, 1968, 'a'),
(35, 19, 1969, 'a'),
(35, 19, 1970, 'a'),
(35, 19, 1971, 'a'),
(35, 19, 1972, 'a'),
(35, 19, 1973, 'a'),
(35, 19, 1974, 'a'),
(35, 19, 1975, 'a'),
(35, 19, 1976, 'a'),
(35, 19, 1977, 'a'),
(35, 19, 1978, 'a'),
(35, 19, 1979, 'a'),
(35, 19, 1980, 'a'),
(35, 19, 1981, 'a'),
(35, 19, 1982, 'a'),
(35, 19, 1983, 'a'),
(35, 19, 1984, 'a'),
(35, 19, 1985, 'a'),
(35, 19, 1986, 'a'),
(35, 19, 1987, 'a'),
(35, 19, 1988, 'a'),
(35, 19, 1989, 'a'),
(35, 19, 1990, 'a'),
(35, 19, 1991, 'a'),
(35, 19, 1992, 'a'),
(35, 19, 1993, 'a'),
(35, 19, 1994, 'a'),
(35, 19, 1995, 'a'),
(35, 19, 1996, 'a'),
(35, 19, 1997, 'a');

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
  KEY `FK_idGroup` (`FK_idGrp`),
  KEY `FK_idSpeciality` (`FK_idSpeciality`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `student`
--

INSERT INTO `student` (`FK_idUser`, `FK_idSpeciality`, `FK_idGrp`, `numStu`, `yearStu`) VALUES
(2, 1, 1, 123, 3),
(3, 1, 1, 123, 3);

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
(4, 1),
(5, 0),
(6, 0);

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `idTest` int(11) NOT NULL AUTO_INCREMENT,
  `nameTest` varchar(25) NOT NULL,
  PRIMARY KEY (`idTest`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `test`
--

INSERT INTO `test` (`idTest`, `nameTest`) VALUES
(28, 'test1'),
(29, 'test2'),
(30, 'test3'),
(31, 'test3'),
(32, 'test3'),
(33, 'test1'),
(34, 'test1'),
(35, 'test');

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
(3, 'Mollard', 'LÃ©o', 'test@gmail.com', '123'),
(4, 'leo', 'mollard', 'test2@gmail.com', '123'),
(5, 'Mollard', 'LÃ©o', 'test2@gmail.com', '1'),
(6, 'test', 'test', 'tes@g.c', '123');

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
