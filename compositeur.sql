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
-- Table structure for table `compositeur`
--

DROP TABLE IF EXISTS `compositeur`;
CREATE TABLE IF NOT EXISTS `compositeur` (
  `IdCom` int(11) NOT NULL,
  `NomCom` varchar(20) NOT NULL,
  `Prenom` varchar(11) NOT NULL,
  `Epoque` varchar(20) NOT NULL,
  PRIMARY KEY (`IdCom`),
  KEY `Epoque` (`Epoque`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `compositeur`
--

INSERT INTO `compositeur` (`IdCom`, `NomCom`, `Prenom`, `Epoque`) VALUES
(10, 'Bach', 'Johann', 'Baroque');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `compositeur`
--
ALTER TABLE `compositeur`
  ADD CONSTRAINT `Epoque` FOREIGN KEY (`Epoque`) REFERENCES `categories` (`nomCategorie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
