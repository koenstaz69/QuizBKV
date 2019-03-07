-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 07 mrt 2019 om 13:40
-- Serverversie: 10.1.37-MariaDB
-- PHP-versie: 7.3.1

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
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `email` varchar(11) NOT NULL,
  `wachtwoord` varchar(255) NOT NULL,
  `rol` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`user_id`, `naam`, `email`, `wachtwoord`, `rol`) VALUES
(3, 'gebruiker', 'test@gmail.', '$2y$10$VNoWtg4v8bQ.oOSZpl0yvuCIBwoL3HxbtBqeC33ygDpkT7IP83IC6', 0),
(4, 'test1', 'test1@gmail', '$2y$10$F.tRjkNiEqXd467fuouwbeHk7ZBYB7dMP6hO.GTXcQjyU9BPmOBLO', 0),
(5, 'tetk', 'tekt@gmail.', '$2y$10$QZTmogR.N7/wqdEEzKxXM.0drYyqa93.3Z1TcGu.jBVXx1QTl56qa', 0),
(6, 'koentje', 'koenstaz@gm', '$2y$10$9iWDpjhR5m.bv29Okmbi3uc0KuG8Uo6IpdR/u4bIPUNnWprSMzQ3.', 0);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
