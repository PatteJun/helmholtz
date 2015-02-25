-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 25. Feb 2015 um 21:02
-- Server Version: 5.5.41-0ubuntu0.14.04.1
-- PHP-Version: 5.5.9-1ubuntu4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `einser`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `activities`
--

CREATE TABLE IF NOT EXISTS `activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  `art` int(11) NOT NULL,
  `date` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Daten für Tabelle `activities`
--

INSERT INTO `activities` (`id`, `user`, `art`, `date`) VALUES
(1, 2, 1, '1417343429'),
(2, 3, 1, '1417345110'),
(3, 4, 1, '1417345291'),
(4, 4, 2, '1417345406'),
(5, 5, 1, '1417376726'),
(6, 1, 1, '1417379390'),
(7, 1, 2, '1417376726'),
(8, 1, 3, '1417376726'),
(9, 1, 4, '1417376726'),
(10, 1, 5, '1417376726'),
(11, 1, 6, '1417376726'),
(12, 1, 7, '1417376726'),
(13, 1, 8, '1417376726'),
(14, 1, 9, '1417376726'),
(15, 1, 10, '1417376726'),
(17, 1, 11, '1417392820'),
(18, 6, 1, '1417532060'),
(19, 7, 1, '1417858729'),
(20, 8, 1, '1417859141');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `activity_categories`
--

CREATE TABLE IF NOT EXISTS `activity_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `icon` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Daten für Tabelle `activity_categories`
--

INSERT INTO `activity_categories` (`id`, `icon`, `text`) VALUES
(1, '<i class="fa fa-user fa-fw activity-item"></i>', 'Hat sich angemeldet'),
(2, '<i class="fa fa-picture-o fa-fw activity-item"></i>', 'Hat neue Bild(er) hochgeladen'),
(3, '<i class="fa fa-tags fa-fw activity-item"></i>', 'Hat ein neues Teil markiert'),
(4, '<i class="fa fa-file-text fa-fw activity-item"></i>', 'Hat eine Frage eingestellt'),
(5, '<i class="fa fa-thumbs-up fa-fw activity-item"></i>\r\n', 'Gefällt ein Bild'),
(6, '<i class="fa fa-thumbs-o-up fa-fw activity-item"></i>', 'Gefällt ein Tuningteil'),
(7, '<i class="fa fa-trophy text-bronze fa-fw activity-item"></i>\r\n', 'Hat die Stufe Bronze erreicht\r\n'),
(8, '<i class="fa fa-trophy text-silver fa-fw activity-item"></i>\r\n', 'Hat die Stufe Silber erreicht\r\n'),
(9, '<i class="fa fa-trophy text-gold fa-fw activity-item"></i>\r\n', 'Hat die Stufe Gold erreicht\r\n'),
(10, '<i class="fa fa-trophy text-diamond fa-fw activity-item"></i>\r\n', 'Hat die Stufe Diamant erreicht\r\n'),
(11, '<i class="fa fa-car fa-fw activity-item"></i>', 'Hat ein Fahrzeug eingestellt');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cars`
--

CREATE TABLE IF NOT EXISTS `cars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  `model` int(11) NOT NULL,
  `motor` varchar(10) NOT NULL,
  `performance` varchar(10) NOT NULL,
  `fabyear` varchar(10) NOT NULL,
  `tires` varchar(255) NOT NULL,
  `brakes` varchar(255) NOT NULL,
  `suspension` varchar(255) NOT NULL,
  `exhaust` varchar(255) NOT NULL,
  `chassis` varchar(255) NOT NULL,
  `engine` varchar(255) NOT NULL,
  `paint` varchar(255) NOT NULL,
  `interieur` varchar(255) NOT NULL,
  `sound` varchar(255) NOT NULL,
  `lights` varchar(255) NOT NULL,
  `misc` varchar(255) NOT NULL,
  `date` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Daten für Tabelle `cars`
--

INSERT INTO `cars` (`id`, `user`, `model`, `motor`, `performance`, `fabyear`, `tires`, `brakes`, `suspension`, `exhaust`, `chassis`, `engine`, `paint`, `interieur`, `sound`, `lights`, `misc`, `date`) VALUES
(3, 1, 4, '120d', '163', '2006', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', '1417392820');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `city` varchar(150) NOT NULL,
  `birthday` varchar(100) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `user` int(11) NOT NULL,
  `date` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Daten für Tabelle `members`
--

INSERT INTO `members` (`id`, `email`, `city`, `birthday`, `picture`, `user`, `date`) VALUES
(1, 'paterok@gmail.com', 'Mittenwald, Deutschland', '03.11.1987', 'images/profile/profile_1.png', 1, '1417342084'),
(2, 'dominik.fingerle@googlemail.com', 'München, Deutschland', '20.04.1989', 'images/profile/profile_2.png', 2, '1417343429'),
(3, 'derlange@web.de', 'Mittenwald, Deutschland', '01.11.1988', 'images/profile/profile_3.png', 3, '1417345110'),
(4, 'pictest@test.de', 'Tutzing, Deutschland', '03.11.1987', 'images/profile/profile_4.png', 4, '1417345291'),
(5, 'patte@web.de', 'Mittenwald, Deutschland', '03.11.1987', 'images/profile/profile_5.png', 5, '1417376726'),
(6, 'christoph@paterok.de', 'Stuttgart, Deutschland', '03.11.1987', 'images/profile/profile_6.png', 6, '1417532060'),
(7, '', '', '', 'images/profile/profile_7.png', 7, '1417858729'),
(8, '', '', '', 'images/profile/profile_8.png', 8, '1417859141');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `models`
--

CREATE TABLE IF NOT EXISTS `models` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `short` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Daten für Tabelle `models`
--

INSERT INTO `models` (`id`, `short`, `name`) VALUES
(1, 'e81', 'E81 (3 Türer)'),
(2, 'e82', 'E82 (Coupé)'),
(3, 'e82', 'E82 (M Coupé)'),
(4, 'e87', 'E87 (5 Türer)'),
(5, 'e88', 'E88 (Cabrio)'),
(6, 'f20', 'F20 (5 Türer)'),
(7, 'f21', 'F21 (3 Türer)');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` char(32) NOT NULL,
  `member` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `member`) VALUES
(1, 'Patte87', 'cbab2b0ff9a8a5f7b39084060eef2eda', 1),
(2, 'DominikF', 'cbab2b0ff9a8a5f7b39084060eef2eda', 2),
(3, 'DerLange', 'cbab2b0ff9a8a5f7b39084060eef2eda', 3),
(4, 'PictureText', 'cbab2b0ff9a8a5f7b39084060eef2eda', 4),
(5, 'Patte', 'cbab2b0ff9a8a5f7b39084060eef2eda', 5),
(6, 'Christoph', 'cbab2b0ff9a8a5f7b39084060eef2eda', 6),
(7, '', 'd41d8cd98f00b204e9800998ecf8427e', 7),
(8, '', 'd41d8cd98f00b204e9800998ecf8427e', 8);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
