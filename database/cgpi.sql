-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2018 at 10:26 AM
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
CREATE DATABASE IF NOT EXISTS `cgpi` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cgpi`;

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
  `prestationdates` varchar(45) NOT NULL,
  `prix` int(11) NOT NULL,
  `ht` int(11) NOT NULL,
  `tauxtva` int(11) NOT NULL,
  `ttc` int(11) NOT NULL,
  `idsociete` int(11) NOT NULL,
  `idpersonnes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `idsociete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `societe`
--

CREATE TABLE `societe` (
  `idsociete` int(11) NOT NULL,
  `socialstatus` varchar(45) NOT NULL,
  `adresse` varchar(45) NOT NULL,
  `country` varchar(45) NOT NULL,
  `tvanumber` int(3) NOT NULL,
  `account` int(20) NOT NULL,
  `telephonesociete` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `idtype` int(11) NOT NULL,
  `type` set('ASBL','SPRL','SA') NOT NULL,
  `relation` set('fournisseur','client') NOT NULL,
  `idsociete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  MODIFY `idfactures` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notecredit`
--
ALTER TABLE `notecredit`
  MODIFY `idnotecredit` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personnes`
--
ALTER TABLE `personnes`
  MODIFY `idpersonnes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `societe`
--
ALTER TABLE `societe`
  MODIFY `idsociete` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `idtype` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `factures`
--
ALTER TABLE `factures`
  ADD CONSTRAINT `factures_ibfk_1` FOREIGN KEY (`idsociete`) REFERENCES `societe` (`idsociete`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `factures_ibfk_2` FOREIGN KEY (`idpersonnes`) REFERENCES `personnes` (`idpersonnes`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `notecredit`
--
ALTER TABLE `notecredit`
  ADD CONSTRAINT `notecredit_ibfk_1` FOREIGN KEY (`idfactures`) REFERENCES `factures` (`idfactures`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `personnes`
--
ALTER TABLE `personnes`
  ADD CONSTRAINT `personnes_ibfk_1` FOREIGN KEY (`idsociete`) REFERENCES `societe` (`idsociete`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `type`
--
ALTER TABLE `type`
  ADD CONSTRAINT `type_ibfk_1` FOREIGN KEY (`idsociete`) REFERENCES `societe` (`idsociete`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
