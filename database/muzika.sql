-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 11, 2020 at 10:25 PM
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
-- Database: `muzika`
--

-- --------------------------------------------------------

--
-- Table structure for table `gitare`
--

DROP TABLE IF EXISTS `gitare`;
CREATE TABLE IF NOT EXISTS `gitare` (
  `id_gitare` int(255) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `vrsta` varchar(255) NOT NULL,
  PRIMARY KEY (`id_gitare`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gitare`
--

INSERT INTO `gitare` (`id_gitare`, `naziv`, `model`, `vrsta`) VALUES
(21, 'Ibanez', 'PR300', 'Acoustic'),
(20, 'Fender', 'Stratocaster', 'Electric'),
(19, 'Fender', 'Telecaster', 'Electric'),
(18, 'Yamaha', 'RBXA6', 'Acoustic'),
(17, 'Yamaha', 'RBX', 'Electric'),
(22, 'Hufshmid', 'Seven', 'Electric'),
(23, 'Gibson', 'Les Paul', 'Electric'),
(24, 'Gibson', 'SG', 'Acoustic'),
(25, 'MusicMan', 'Bolt', 'Electric'),
(26, 'Kiesel', 'AMG100', 'Electirc');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

DROP TABLE IF EXISTS `komentar`;
CREATE TABLE IF NOT EXISTS `komentar` (
  `trkorisnik` varchar(255) NOT NULL,
  `komentar` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`trkorisnik`, `komentar`) VALUES
('stefan', 'habsfkhbanpioubvaidjovnabhdoipavd'),
('stefan', 'sdasd'),
('stefan', 'provera');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

DROP TABLE IF EXISTS `korisnik`;
CREATE TABLE IF NOT EXISTS `korisnik` (
  `sifra_korisnik` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`sifra_korisnik`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`sifra_korisnik`, `username`, `pass`, `email`) VALUES
(7, 'stefan', 'asdasd', 'stefan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `porudzbina`
--

DROP TABLE IF EXISTS `porudzbina`;
CREATE TABLE IF NOT EXISTS `porudzbina` (
  `trkorisnik` varchar(255) NOT NULL,
  `id_gitare` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `porudzbina`
--

INSERT INTO `porudzbina` (`trkorisnik`, `id_gitare`) VALUES
('predrag', 8),
('Nikola', 8),
('Marko', 14),
('Marko', 12),
('Marko', 14);

-- --------------------------------------------------------

--
-- Table structure for table `slike`
--

DROP TABLE IF EXISTS `slike`;
CREATE TABLE IF NOT EXISTS `slike` (
  `id_slike` int(255) NOT NULL AUTO_INCREMENT,
  `putanja` varchar(255) NOT NULL,
  PRIMARY KEY (`id_slike`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slike`
--

INSERT INTO `slike` (`id_slike`, `putanja`) VALUES
(10, '5d0001579c6718.76840776.jpg'),
(8, '5d00014aa6e491.32615287.jpg'),
(11, '5d00015d2e7dd8.72065959.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
