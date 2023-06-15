-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Värd: localhost:3306
-- Tid vid skapande: 15 jun 2023 kl 09:11
-- Serverversion: 5.7.24
-- PHP-version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `slutprojekt2`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `type` varchar(35) NOT NULL,
  `date_add` datetime NOT NULL,
  `sold_available` datetime DEFAULT NULL,
  `id_seller` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `info`
--

INSERT INTO `info` (`id`, `type`, `date_add`, `sold_available`, `id_seller`, `price`) VALUES
(41, 'Handskar', '2023-06-15 10:05:12', '2023-06-15 10:05:12', 1, 100),
(42, 'Jacka', '2023-06-14 11:25:59', '2023-06-14 11:25:59', 1, 300),
(43, 'T-shirt', '2023-06-14 11:26:43', '2023-06-14 11:26:43', 1, 100),
(44, 'Jeans', '2023-06-14 11:46:50', '2023-06-14 11:46:50', 1, 150),
(45, 'Hoddie', '2023-06-15 10:56:35', NULL, 1, 250);

-- --------------------------------------------------------

--
-- Tabellstruktur `seller`
--

CREATE TABLE `seller` (
  `id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `seller`
--

INSERT INTO `seller` (`id`, `name`) VALUES
(1, 'Sebastian'),
(2, 'Erik');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_seller` (`id_seller`);

--
-- Index för tabell `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT för tabell `seller`
--
ALTER TABLE `seller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restriktioner för dumpade tabeller
--

--
-- Restriktioner för tabell `info`
--
ALTER TABLE `info`
  ADD CONSTRAINT `info_ibfk_1` FOREIGN KEY (`id_seller`) REFERENCES `seller` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
