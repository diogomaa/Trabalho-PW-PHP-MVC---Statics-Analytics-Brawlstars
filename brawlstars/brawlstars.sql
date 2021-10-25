-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2020 at 02:58 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brawlstars`
--

-- --------------------------------------------------------

--
-- Table structure for table `brawlers`
--

CREATE TABLE `brawlers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `rarity` varchar(255) DEFAULT '',
  `style` varchar(20) NOT NULL,
  `health` varchar(20) NOT NULL,
  `damage` varchar(20) NOT NULL,
  `img` varchar(100) NOT NULL,
  `super` varchar(100) NOT NULL,
  `length` varchar(100) NOT NULL,
  `rld_spd` varchar(100) NOT NULL,
  `atk_spd` varchar(100) NOT NULL,
  `spd` varchar(100) NOT NULL,
  `atk_rg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brawlers`
--

INSERT INTO `brawlers` (`id`, `name`, `rarity`, `style`, `health`, `damage`, `img`, `super`, `length`, `rld_spd`, `atk_spd`, `spd`, `atk_rg`) VALUES
(0, 'Shelly', 'Common', 'Fighter', '5040', '420', '../IMG/brawlers/Shelly.png', '448', '150', '1500', '500', '2.4', '7.67'),
(1, 'Nita', 'Common', 'Fighter', '5600', '1120', '../IMG/brawlers/Nita.png', '560', '-', '1250', '500', '2.4', '6'),
(2, 'Colt', 'Common', 'Sharpshooter', '3920', '420', '../IMG/brawlers/Colt.png', '420', '1250', '1600', '800', '2.4', '9'),
(3, 'Bull', 'Common', 'Heavyweight', '6860', '560', '../IMG/brawlers/Bull.png', '1120', '-', '1600', '500', '2.57', '5.33'),
(4, 'Jessie', 'Common', 'Fighter', '4480', '4480', '../IMG/brawlers/Jessie.png', '336', '-', '1800', '500', '2.4', '9'),
(5, 'Brock', 'Common', 'Thrower', '3980', '1064', '../IMG/brawlers/Brock.png', '3080', '150', '1700', '500', '2.4', '7.33'),
(6, 'Dynamike', 'Common', 'Thrower', '3920', '1064', '../IMG/brawlers/Dynamike.png', '3080', '150', '1700', '500', '2.4', '7.33'),
(7, 'Bo', 'Common', 'Fighter', '5040', '728', '../IMG/brawlers/Bo.png', '2016', '250', '1700', '900', '2.4', '8.67'),
(8, 'Tick', 'Common', 'Thrower', '3080', '896', '../IMG/brawlers/Tick.png', '2800', '-', '2200', '500', '2.4', '8.67'),
(9, '8-Bit', 'Common', 'Sharpshooter', '6020', '448', '../IMG/brawlers/8-BIT.png', '-', '-', '1500', '800', '1.93', '10'),
(10, 'Emz', 'Common', 'Sharpshooter', '5040', '700', '../IMG/brawlers/Emz.png', '-', '5000', '2100', '500', '2.4', '6.67'),
(11, 'El Primo', 'Rare', 'Heavyweight', '8120', '504', '../IMG/brawlers/El_Primo.png', '1120', '-', '800', '850', '2.57', '3'),
(12, 'Barley', 'Rare', 'Thrower', '3360', '952', '../IMG/brawlers/Barley.png', '952', '1050', '2000', '500', '2.4', '7.33'),
(13, 'Poco', 'Rare', 'Healer', '5320', '924', '../IMG/brawlers/Poco.png', '2940', '150', '1600', '500', '2.4', '7'),
(14, 'Rosa', 'Rare', 'Heavyweight', '7560', '644', '../IMG/brawlers/Rosa.png', 'SHIELD', '-', '1000', '1100', '2.57', '3.67'),
(15, 'Rico', 'Super Rare', 'Sharpshooter', '3640', '448', '../IMG/brawlers/Rico.png', '420', '1250', '1200', '1000', '2.4', '9.67'),
(16, 'Darryl', 'Super Rare', 'Heavyweight', '6720', '420', '../IMG/brawlers/Darryl.png', '560', '-', '1800', '850', '2.57', '6'),
(17, 'Penny', 'Super Rare', 'Sharpshooter', '4480', '1260', '../IMG/brawlers/Penny.png', '1680', '-', '2000', '500', '2.4', '9'),
(18, 'Carl', 'Super Rare', 'Fighter', '6160', '840', '../IMG/brawlers/Carl.png', '560', '3000', '0', '750', '2.4', '7.67'),
(19, 'Piper', 'Epic', 'Sharpshooter', '3360', '2128', '../IMG/brawlers/Piper.png', '1260', '-', '2300', '750', '2.4', '10'),
(20, 'Pam', 'Epic', 'Healer', '6020', '364', '../IMG/brawlers/Pam.png', '-', '-', '1300', '1100', '2.4', '9'),
(21, 'Frank', 'Epic', 'Heavyweight', '8540', '1680', '../IMG/brawlers/Frank.png', '1680', '1200', '800', '1350', '2.57', '6'),
(22, 'Bibi', 'Epic', 'Batter', '5880', '1820', '../IMG/brawlers/Bibi.png', '1400', '150', '800', '1350', '2.57', '6'),
(23, 'Mortis', 'Mythic', 'Dashing Assassin', '5320', '1260', '../IMG/brawlers/Mortis.png', '1260', '200', '2400', '0', '2.73', '2.67'),
(24, 'Tara', 'Mythic', 'Skirmisher', '4480', '588', '../IMG/brawlers/Tara.png', '1120', '150', '2000', '500', '2.4', '8'),
(25, 'Gene', 'Mythic', 'Support', '5040', '1400', '../IMG/brawlers/Gene.png', 'MAGIC HAND', '-', '2000', '500', '2.4', '5.67'),
(26, 'Spike', 'Legendary', 'Sharpshooter', '3360', '672', '../IMG/brawlers/Spike.png', '560', '150', '2000', '500', '2.4', '7.67'),
(27, 'Crow', 'Legendary', 'Toxic Assassin', '3360', '448', '../IMG/brawlers/Crow.png', '420', '-', '1400', '500', '2.73', '8.67'),
(28, 'Leon', 'Legendary', 'Stealthy Assassin', '4480', '616', '../IMG/brawlers/Leon.png', 'SMOKE BOMB', '-', '1900', '600', '2.73', '9.67'),
(31, 'Max', 'Mythic', 'Fighter', '4900', '420', '../IMG/brawlers/Max.png', '', '', '1300', '600', '600', '2.64'),
(29, 'Sandy', 'Legendary', 'Fighter', '5320', '1260', '../IMG/brawlers/Sandy.png', 'SANDSTORM', '-', '1800', '500', '2.57', '6');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `password` varchar(400) COLLATE utf8_bin NOT NULL,
  `user` varchar(400) COLLATE utf8_bin NOT NULL,
  `ativo` bit(1) NOT NULL,
  `email` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `password`, `user`, `ativo`, `email`) VALUES
(0, '$2y$10$HT79Jvx.gpqcoBy9sLOxUuv18nP3GEKzMbg4Lm7QKgCTQyyrOKI..', 'admin', b'0', 'admin@admin.pt'),
(0, '$2y$10$uZR6CsgQiRejTiPFDNTg.OCtVto6doKbZwaQUKYHK72J8aXzp..32', '123', b'0', 'admin@adm444in.com'),
(0, '$2y$10$XOpUCPCkjI5xh/QnHKkL7eKSUkcRFYp5H6/nGq0HC34cj0uX/sXPC', 'Diogo Amorim', b'0', 'admin@admin.com'),
(0, '$2y$10$loDfTcYhq2WqU3MC4BPHe.9tRtC6Kxq89fRcSn6iQ8MBaUjQwhS9S', '123', b'0', 'admin@admin.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
