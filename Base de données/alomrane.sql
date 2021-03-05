-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2021 at 12:46 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `alomrane`
--

-- --------------------------------------------------------

--
-- Table structure for table `aide`
--

CREATE TABLE IF NOT EXISTS `aide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `photo` longblob NOT NULL,
  `adresse` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `cheque`
--

CREATE TABLE IF NOT EXISTS `cheque` (
  `numcheque` int(20) NOT NULL,
  `codecredit` int(20) NOT NULL,
  `codeeml` varchar(20) NOT NULL,
  `Prix` double NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE IF NOT EXISTS `club` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codeempl` varchar(20) NOT NULL,
  `nomclub` text NOT NULL,
  `type` text NOT NULL,
  `Date inscription` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `credit`
--

CREATE TABLE IF NOT EXISTS `credit` (
  `compte` int(20) NOT NULL,
  `codeempl` varchar(20) NOT NULL,
  `mantant` double NOT NULL,
  `type` text NOT NULL,
  `echantillion` int(2) NOT NULL,
  `Status` text NOT NULL,
  `Date` datetime NOT NULL,
  PRIMARY KEY (`compte`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credit`
--

INSERT INTO `credit` (`compte`, `codeempl`, `mantant`, `type`, `echantillion`, `Status`, `Date`) VALUES
(12125426, '123456', 10000, 'Direct', 12, 'En cours', '2016-07-21 09:33:46');

-- --------------------------------------------------------

--
-- Table structure for table `employe`
--

CREATE TABLE IF NOT EXISTS `employe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codeempl` int(15) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `Login` varchar(20) NOT NULL,
  `fonction` text NOT NULL,
  `cin` varchar(10) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `Adresse` varchar(200) NOT NULL,
  `Telephone` varchar(60) NOT NULL,
  `datenaissance` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `employe`
--

INSERT INTO `employe` (`id`, `codeempl`, `nom`, `prenom`, `Login`, `fonction`, `cin`, `email`, `password`, `Adresse`, `Telephone`, `datenaissance`) VALUES
(21, 123456, 'arfaoui', 'asmae', 'simsim', 'ingenieur', 'cd639666', 'asmae@outlook.com', '123456789', '46 lot ghita', '0645172586', '2015-01-11');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE IF NOT EXISTS `file` (
  `titre` text NOT NULL,
  `message` varchar(500) NOT NULL,
  `name` text NOT NULL,
  `mime` varchar(20) NOT NULL,
  `size` int(88) NOT NULL,
  `data` mediumblob NOT NULL,
  `created` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inscrire_club`
--

CREATE TABLE IF NOT EXISTS `inscrire_club` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom adherent` text NOT NULL,
  `prenom adherent` text NOT NULL,
  `nomclub` text NOT NULL,
  `Date inscription` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
