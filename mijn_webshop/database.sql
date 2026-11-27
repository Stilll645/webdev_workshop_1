-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: mysql_db
-- Gegenereerd op: 26 nov 2026 om 12:18
-- Serverversie: 26.10.0
-- PHP-versie: 8.3.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mijn_webshop`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `producten`
--

CREATE TABLE `producten` (
  `id` int NOT NULL,
  `naam` varchar(100) NOT NULL,
  `prijs` decimal(6,2) NOT NULL,
  `omschrijving` text,
  `afbeelding` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `producten`
--

INSERT INTO `producten` (`id`, `naam`, `prijs`, `omschrijving`, `afbeelding`) VALUES
(1, 'Ichigo Nendoroid', 39.99, 'A stylized chibi figure featuring Ichigo\'s iconic orange hair, Soul Reaper uniform and Zanpakutō.', 'Ichigo.png'),
(2, 'Toshiro Nendoroid', 34.99, 'The Toshiro Hitsugaya Nendoroid is a stylized chibi figure from the anime Bleach, produced by Good Smile Company, featuring his spiky white hair, turquoise eyes, and Soul Reaper captain uniform in a cute, highly detailed design.', 'Toshiro.png'),
(3, 'Sebastian Nendoroid', 89.99, 'The Sebastian Michaelis Nendoroid is a stylized chibi figure from the anime Black Butler (Kuroshitsuji), produced by Good Smile Company, featuring his sleek black hair, crimson eyes, and elegant butler attire in a cute, highly detailed design.', 'Sebastian.png'),
(4, 'Ciel Nendoroid', 69.99, 'The Ciel Phantomhive Nendoroid is a stylized chibi figure from the anime Black Butler (Kuroshitsuji), produced by Good Smile Company, featuring his blue-gray hair, eyepatch, and Victorian-inspired noble outfit in a cute, highly detailed design.', 'Ciel.png'),
(5, 'Tomoko Nendoroid', 119.99, 'The Tomoko Kuroki Nendoroid is a stylized chibi figure from the anime WataMote: No Matter How I Look at It, It\'s You Guys\' Fault I\'m Not Popular!, produced by Good Smile Company, featuring her long black hair, tired eyes, and school uniform in a cute, highly detailed design that captures her awkward personality.', 'Tomoko.png'),
(6, 'Sonico Nendoroid', 79.99, 'The Sonico Nendoroid is a stylized chibi figure of Sonico from the Super Sonico multimedia franchise, produced by Good Smile Company, featuring her long pink hair, signature headphones, and cute fashion-forward outfit in a highly detailed and adorable design.', 'Sonico.png');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `producten`
--
ALTER TABLE `producten`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `producten`
--
ALTER TABLE `producten`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
