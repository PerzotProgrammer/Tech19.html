-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 15 Paź 2023, 18:05
-- Wersja serwera: 10.4.27-MariaDB
-- Wersja PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `graphp`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `danegraczy`
--

CREATE TABLE `danegraczy` (
  `id` int(11) NOT NULL,
  `nick` text NOT NULL,
  `login` text NOT NULL,
  `passwd` text NOT NULL,
  `monety` int(11) NOT NULL,
  `drewno` int(11) NOT NULL,
  `kamien` int(11) NOT NULL,
  `zelazo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `danegraczy`
--

INSERT INTO `danegraczy` (`id`, `nick`, `login`, `passwd`, `monety`, `drewno`, `kamien`, `zelazo`) VALUES
(1, 'superuser', 'sudo@graphp.pl', 'kochamkamionki', 99999999, 99999999, 99999999, 99999999),
(2, 'Warol Kojtyła', 'kojtyla@graphp.pl', 'papaj2137', 2137, 2005, 934, 204),
(3, 'KajtekBezMajtek', 'majtek@graphp.pl', 'kajtek!@#', 1234, 735, 423, 212),
(4, 'Dziki_Wilk_2005', 'ilovefurry@furryland.xxx', '69wolf69', 3423, 1255, 456, 69),
(5, 'Wujek Stalin', 'ussr@moscow.su', 'gulag', 0, -10000, -10000, -10000),
(6, 'twojwuja', 'wujek@rodzina.pl', 'wujek123', 1525, 230, 340, 50),
(7, 'egzamin', 'egzamin@zaq.com', 'zaq1@WSX', 1021, 215, 205, 123),
(8, 'NowyGraczTest', 'test@graphp.pl', 'tojesttest', 1000, 500, 250, 100);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `danegraczy`
--
ALTER TABLE `danegraczy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `danegraczy`
--
ALTER TABLE `danegraczy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
