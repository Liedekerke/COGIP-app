-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2018 at 10:58 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cgpi`
--

-- --------------------------------------------------------

--
-- Table structure for table `devis`
--

CREATE TABLE `devis` (
  `iddevis` int(11) NOT NULL,
  `estimationtime` int(11) NOT NULL,
  `estimationprice` int(11) NOT NULL,
  `datedevis` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `factures`
--

CREATE TABLE `factures` (
  `idfactures` int(11) NOT NULL,
  `datefacture` date NOT NULL,
  `prestationmotif` varchar(45) NOT NULL,
  `idsociete` int(11) DEFAULT NULL,
  `idpersonnes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `factures`
--

INSERT INTO `factures` (`idfactures`, `datefacture`, `prestationmotif`, `idsociete`, `idpersonnes`) VALUES
(1, '2018-08-20', 'Nettoyage ', 5, 1),
(2, '2018-05-06', 'Exportation', 4, 10),
(3, '2018-05-06', 'Exportation', 4, 10),
(4, '2017-09-20', 'Gaz-electricité', 1, 4),
(5, '2018-04-16', 'Eau', 1, 8),
(6, '2018-07-11', 'Internet', 2, 3),
(7, '2018-08-11', 'Internet', 6, 6),
(8, '2018-07-21', 'Nettoyage', 1, 9),
(9, '2018-05-06', 'Exportation', 2, 3),
(10, '2017-09-20', 'Gaz-electricité', 3, 1),
(11, '2018-04-16', 'Eau', 2, 5),
(12, '2018-07-11', 'Internet', 4, 10),
(13, '2018-08-11', 'Internet', 1, 8),
(14, '2018-07-21', 'Nettoyage', 5, 11);

-- --------------------------------------------------------

--
-- Table structure for table `notecredit`
--

CREATE TABLE `notecredit` (
  `idnotecredit` int(11) NOT NULL,
  `reduction` int(11) NOT NULL,
  `datenotecredit` date NOT NULL,
  `idfactures` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `personnes`
--

CREATE TABLE `personnes` (
  `idpersonnes` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `personnesphone` int(20) NOT NULL,
  `email` varchar(45) NOT NULL,
  `idsociete` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `personnes`
--

INSERT INTO `personnes` (`idpersonnes`, `name`, `firstname`, `personnesphone`, `email`, `idsociete`) VALUES
(1, 'Gecrache', 'Jean', 487687628, 'jean.ge@gmail.com', 5),
(2, 'Youknow', 'Charlotte', 494763862, 'charlotte.youknow@gmail.com', 3),
(3, 'LeGrand', 'Guillaume', 456783921, 'guigui@gmail.com', 2),
(4, 'Api', 'Michel', 987612076, 'michel.api@outlook.com', 1),
(5, 'Rébecca', 'Armand', 489721341, 'rebeccaarmand@hotmail.com', 2),
(6, 'Hebert', 'Aimée', 456091100, 'aimee.hebert@gmail.com', 6),
(7, 'Ribeiro', 'Marielle', 455309870, 'ribeirom@hotmail.com', 5),
(8, 'Savary', 'Hilaire', 456809121, 'h.savary@gmail.com', 1),
(9, 'Beckham', 'Johnny', 456878121, 'j.beckham@gmail.com', 1),
(10, 'Bols', 'Jeanne', 476110111, 'jeanne.bols@hotmail.com', 4),
(11, 'Sauvage', 'Patrick', 489226911, 'sauvage.patrick@gmail.com', 5),
(12, 'test', 'test', 0, 'test@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `societe`
--

CREATE TABLE `societe` (
  `idsociete` int(11) NOT NULL,
  `socialname` varchar(45) NOT NULL,
  `adresse` varchar(45) NOT NULL,
  `country` varchar(45) NOT NULL,
  `tvanumber` int(3) NOT NULL,
  `telephonesociete` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `societe`
--

INSERT INTO `societe` (`idsociete`, `socialname`, `adresse`, `country`, `tvanumber`, `telephonesociete`) VALUES
(1, 'Codokies ', 'Rue des biscuits, 1. 1210 Bruxelles', 'Belgium', 128, 2228228),
(2, 'Guillaume le Grand', 'Avenue des Empereurs, 780. 100 Bruxelles', 'Belgium', 666, 6669870),
(3, 'Cluys', 'Rue Alfred Cluysenaar, 50. 1060 Saint-Gilles', 'Belgium', 214, 32287284),
(4, 'Funito', 'Rue du gras, 89. 1040 Bruxelles', 'Belgium', 8, 920875310),
(5, 'Choune', 'Rue de la chienne, 69. 1060 Bruxelles', 'Belgium', 906, 69875110),
(6, 'Streamify', 'Rue de l\'écoutille, 22. 1000 Bruxelles', 'Belgium', 867, 48763871),
(10, 'TheHundreds', 'Rue du centenaire, 100. 1000 Bruxelles', 'Belgium', 100, 22100499);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `idtype` int(11) NOT NULL,
  `type` set('ASBL','SPRL','SA') NOT NULL,
  `relation` set('fournisseur','client') NOT NULL,
  `idsociete` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`idtype`, `type`, `relation`, `idsociete`) VALUES
(1, 'ASBL', 'fournisseur', 1),
(2, 'SPRL', 'client', 2),
(3, 'SA', 'fournisseur', 3),
(4, 'ASBL', 'client', 4),
(5, 'SPRL', 'fournisseur', 5),
(6, 'SA', 'client', 6),
(22, 'SPRL', 'fournisseur', 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idusers` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `privilege` set('MODO','IDDQD','GUEST') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idusers`, `name`, `password`, `privilege`) VALUES
(1, 'Jean-Christian', 'f1ae4a0bb3bd77e6eeec82949f50b334c409d4f7', 'IDDQD'),
(3, 'guest', '35675e68f4b5af7b995d9205ad0fc43842f16450', 'GUEST'),
(4, 'Muriel', 'ce61487ebde80c774d015152f38f945e73598af9', 'MODO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `devis`
--
ALTER TABLE `devis`
  ADD PRIMARY KEY (`iddevis`);

--
-- Indexes for table `factures`
--
ALTER TABLE `factures`
  ADD PRIMARY KEY (`idfactures`),
  ADD KEY `factures_ibfk_1` (`idsociete`),
  ADD KEY `idpersonnes` (`idpersonnes`);

--
-- Indexes for table `notecredit`
--
ALTER TABLE `notecredit`
  ADD PRIMARY KEY (`idnotecredit`),
  ADD KEY `notecredit_ibfk_1` (`idfactures`);

--
-- Indexes for table `personnes`
--
ALTER TABLE `personnes`
  ADD PRIMARY KEY (`idpersonnes`),
  ADD KEY `personnes_ibfk_1` (`idsociete`);

--
-- Indexes for table `societe`
--
ALTER TABLE `societe`
  ADD PRIMARY KEY (`idsociete`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`idtype`),
  ADD KEY `idsociete` (`idsociete`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `devis`
--
ALTER TABLE `devis`
  MODIFY `iddevis` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `factures`
--
ALTER TABLE `factures`
  MODIFY `idfactures` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `notecredit`
--
ALTER TABLE `notecredit`
  MODIFY `idnotecredit` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personnes`
--
ALTER TABLE `personnes`
  MODIFY `idpersonnes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `societe`
--
ALTER TABLE `societe`
  MODIFY `idsociete` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `idtype` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `factures`
--
ALTER TABLE `factures`
  ADD CONSTRAINT `factures_ibfk_1` FOREIGN KEY (`idsociete`) REFERENCES `societe` (`idsociete`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `factures_ibfk_2` FOREIGN KEY (`idpersonnes`) REFERENCES `personnes` (`idpersonnes`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `notecredit`
--
ALTER TABLE `notecredit`
  ADD CONSTRAINT `notecredit_ibfk_1` FOREIGN KEY (`idfactures`) REFERENCES `factures` (`idfactures`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `personnes`
--
ALTER TABLE `personnes`
  ADD CONSTRAINT `personnes_ibfk_1` FOREIGN KEY (`idsociete`) REFERENCES `societe` (`idsociete`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `type`
--
ALTER TABLE `type`
  ADD CONSTRAINT `type_ibfk_1` FOREIGN KEY (`idsociete`) REFERENCES `societe` (`idsociete`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
