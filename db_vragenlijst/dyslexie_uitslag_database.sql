-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 27 mrt 2024 om 14:53
-- Serverversie: 8.2.0
-- PHP-versie: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dyslexie_uitslag`
--
CREATE DATABASE IF NOT EXISTS `dyslexie_uitslag` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `dyslexie_uitslag`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `vragenlijst_antwoorden`
--

DROP TABLE IF EXISTS `vragenlijst_antwoorden`;
CREATE TABLE IF NOT EXISTS `vragenlijst_antwoorden` (
  `id` int NOT NULL AUTO_INCREMENT,
  `vraag1` enum('slecht','goed') DEFAULT NULL,
  `vraag2` enum('slecht','goed') DEFAULT NULL,
  `vraag3` enum('slecht','goed','weet_ik_niet') DEFAULT NULL,
  `vraag4` enum('slecht','goed') DEFAULT NULL,
  `vraag5` enum('slecht','goed') DEFAULT NULL,
  `vraag6` enum('slecht','goed') DEFAULT NULL,
  `vraag7` enum('slecht','goed') DEFAULT NULL,
  `vraag8` enum('slecht','goed') DEFAULT NULL,
  `vraag9` enum('slecht','goed') DEFAULT NULL,
  `vraag10` enum('slecht','goed') DEFAULT NULL,
  `dyslexia_result` enum('yes','no') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
