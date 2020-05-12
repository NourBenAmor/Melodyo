-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 12, 2020 at 08:44 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `melodyo`
--

-- --------------------------------------------------------

--
-- Table structure for table `fournisseur`
--

DROP TABLE IF EXISTS `fournisseur`;
CREATE TABLE IF NOT EXISTS `fournisseur` (
  `CIN` int(20) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `nomCategorie` varchar(20) NOT NULL,
  `Telephone` int(20) NOT NULL,
  `Mdp` int(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  PRIMARY KEY (`CIN`),
  KEY `nomCategorie` (`nomCategorie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fournisseur`
--

INSERT INTO `fournisseur` (`CIN`, `Nom`, `nomCategorie`, `Telephone`, `Mdp`, `Email`) VALUES
(55555555, 'A', 'Baroque', 88888888, 2, 'Eya@gmail.com'),
(77777777, 'ESSAIE', 'Romantique', 88888888, 4, 'Eya@gmail.com'),
(88888888, 'A', 'Classique', 88888888, 2, 'Eya@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
