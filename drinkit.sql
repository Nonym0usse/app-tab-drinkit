-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 04, 2018 at 09:28 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drinkit`
--

-- --------------------------------------------------------

--
-- Table structure for table `boisson`
--

DROP TABLE IF EXISTS `boisson`;
CREATE TABLE IF NOT EXISTS `boisson` (
  `idBoisson` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(16) NOT NULL,
  `prix` int(11) DEFAULT '0',
  `photo` varchar(256) NOT NULL,
  `type` varchar(16) NOT NULL DEFAULT '0',
  `contenance` int(11) NOT NULL DEFAULT '0',
  `litrage` int(11) NOT NULL DEFAULT '0',
  `pompe` int(11) NOT NULL DEFAULT '1',
  `nbBoisson` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idBoisson`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `boisson`
--

INSERT INTO `boisson` (`idBoisson`, `nom`, `prix`, `photo`, `type`, `contenance`, `litrage`, `pompe`, `nbBoisson`) VALUES
(1, 'Coca', 9, 'e', 'alcool', 9, 9, 8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `etablissement`
--

DROP TABLE IF EXISTS `etablissement`;
CREATE TABLE IF NOT EXISTS `etablissement` (
  `idEtablissement` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(16) NOT NULL,
  `adresse` varchar(32) NOT NULL,
  `codePostal` int(11) NOT NULL,
  `ville` varchar(16) NOT NULL,
  `pays` varchar(16) NOT NULL,
  `raisonSocial` varchar(16) NOT NULL,
  `nomGerant` varchar(16) NOT NULL,
  `telephoneResp` varchar(16) NOT NULL,
  `telephone2` varchar(16) DEFAULT NULL,
  `nbMachineDrinkit` int(11) DEFAULT NULL,
  `iban` varchar(32) DEFAULT NULL,
  `chiffreAffaire` int(11) DEFAULT NULL,
  `email` varchar(32) NOT NULL,
  `motDePasse` varchar(1024) NOT NULL,
  `photo` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`idEtablissement`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `etablissement`
--

INSERT INTO `etablissement` (`idEtablissement`, `nom`, `adresse`, `codePostal`, `ville`, `pays`, `raisonSocial`, `nomGerant`, `telephoneResp`, `telephone2`, `nbMachineDrinkit`, `iban`, `chiffreAffaire`, `email`, `motDePasse`, `photo`) VALUES
(1, 'cyril VELLA', '16 ALLEE DES SERRES', 13180, 'GIGNAC-LA-NERTHE', 'France', 'SARL', 'DUPONT', '0652415145', '0454524224', 2, '03166161111151511', 3000, 'cyril.vella@yahoo.com', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', 'tamere');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(16) NOT NULL,
  `prenom` varchar(16) NOT NULL,
  `dateNaissance` date NOT NULL,
  `ville` varchar(16) NOT NULL,
  `email` varchar(32) NOT NULL,
  `motDePasse` varchar(1024) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT '0',
  `dernierEtablissementVisite` varchar(32) NOT NULL,
  `themeSoiree` varchar(16) NOT NULL,
  `boissonsFavorites` varchar(32) NOT NULL,
  `photo` varchar(256) NOT NULL,
  `porteMonnaie` int(11) NOT NULL,
  `qrCode` varchar(1024) NOT NULL,
  `telephone` varchar(16) NOT NULL,
  PRIMARY KEY (`idUtilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
