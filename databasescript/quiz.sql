-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 29 mrt 2019 om 12:21
-- Serverversie: 10.1.30-MariaDB
-- PHP-versie: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `quiz`
--

CREATE TABLE `quiz` (
  `quiz_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `onderwerp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `quizronde`
--

CREATE TABLE `quizronde` (
  `quizronde_id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `wachtwoord` varchar(255) NOT NULL,
  `admin` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`user_id`, `naam`, `email`, `wachtwoord`, `admin`) VALUES
(5, 'janberd', 'janberd.a@gmail.com', '$2y$10$uDCaQLcWNsjsbQ.prKjQIuF77rNJKe/2EsFPDRzADu4qMo0Er7NXS', 0),
(6, 'koen', 'koen@gmail.com', '$2y$10$k9inFIsRf9U5ihSXYTZ/VuL50hf0QvIAiAOrg/BvftMT1MCb3hdEO', 0),
(7, 'rico', 'rico@gmail.com', '$2y$10$2Du/hveATmJ3.SsLesjkMObf1oZRftpzLNrmA1YgZkAvWm81VcKhi', 0),
(8, 'spa', 'spa@gmail.com', '$2y$10$WVyFPXfYyFFfqdXL2g4Q.e5QIJPGgWF.V0YIkWhi1G2UT.xLY1P5G', 0),
(9, 'dell', 'dell@gmail.com', '$2y$10$uUhwQUGr8daizEwhWf5J8uljpLYNoACnb6S/j/l3TybL.QmOIHPmO', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `vragen`
--

CREATE TABLE `vragen` (
  `vraag_id` int(7) NOT NULL,
  `quiz_id` int(7) NOT NULL,
  `vraag` varchar(255) NOT NULL,
  `antwoord1` varchar(255) NOT NULL,
  `antwoord2` varchar(255) NOT NULL,
  `antwoord3` varchar(255) NOT NULL,
  `antwoord4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`quiz_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `quiz_id` (`quiz_id`);

--
-- Indexen voor tabel `quizronde`
--
ALTER TABLE `quizronde`
  ADD PRIMARY KEY (`quizronde_id`),
  ADD KEY `quiz_id` (`quiz_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexen voor tabel `vragen`
--
ALTER TABLE `vragen`
  ADD PRIMARY KEY (`vraag_id`),
  ADD KEY `vragen_ibfk_1` (`quiz_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `quiz_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Beperkingen voor tabel `quizronde`
--
ALTER TABLE `quizronde`
  ADD CONSTRAINT `quizronde_ibfk_1` FOREIGN KEY (`quiz_id`) REFERENCES `quiz` (`quiz_id`),
  ADD CONSTRAINT `quizronde_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Beperkingen voor tabel `vragen`
--
ALTER TABLE `vragen`
  ADD CONSTRAINT `vragen_ibfk_1` FOREIGN KEY (`quiz_id`) REFERENCES `quiz` (`quiz_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
