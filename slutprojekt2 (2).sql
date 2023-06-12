-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Värd: localhost:3306
-- Tid vid skapande: 12 jun 2023 kl 10:49
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
  `name` varchar(35) NOT NULL,
  `type` varchar(35) NOT NULL,
  `submitted_garments` int(11) NOT NULL,
  `number_of_garments_sold` int(11) NOT NULL,
  `total_sales_amount` int(11) NOT NULL,
  `date_add` datetime NOT NULL,
  `sold_available` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `info`
--

INSERT INTO `info` (`id`, `name`, `type`, `submitted_garments`, `number_of_garments_sold`, `total_sales_amount`, `date_add`, `sold_available`) VALUES
(1, 'Basse', 'Jeans', 1, 1, 200, '2023-06-12 10:50:49', '2023-06-12 10:50:49'),
(2, 'Sebbe', 'Jacka', 1, 1, 300, '2023-06-12 10:39:40', '2023-06-12 10:39:40'),
(3, 'As', 'Handskar', 1, 1, 150, '2023-06-12 10:50:53', '2023-06-12 10:50:53');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
