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
-- Table structure for table `partition`
--

DROP TABLE IF EXISTS `partition`;
CREATE TABLE IF NOT EXISTS `partition` (
  `RefPart` int(20) NOT NULL,
  `NomPart` varchar(20) NOT NULL,
  `Niveau` int(20) NOT NULL,
  `DispoPart` int(20) DEFAULT NULL,
  `Prix` float NOT NULL,
  `IdCom` int(20) NOT NULL,
  PRIMARY KEY (`RefPart`),
  KEY `IdCom` (`IdCom`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partition`
--

INSERT INTO `partition` (`RefPart`, `NomPart`, `Niveau`, `DispoPart`, `Prix`, `IdCom`) VALUES
(1212, 'Partita', 5, 1, 20, 10);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `partition`
--
ALTER TABLE `partition`
  ADD CONSTRAINT `IdCom` FOREIGN KEY (`IdCom`) REFERENCES `compositeur` (`IdCom`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
