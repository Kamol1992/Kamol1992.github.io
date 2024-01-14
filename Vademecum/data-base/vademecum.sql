-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 26 Sty 2022, 19:19
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `vademecum`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cms_tab`
--

CREATE TABLE `cms_tab` (
  `Id` int(10) UNSIGNED NOT NULL,
  `newCMS` varchar(200) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `cms_tab`
--

INSERT INTO `cms_tab` (`Id`, `newCMS`) VALUES
(47, 'SHOPLO'),
(48, 'Wordpress'),
(49, 'Shoper'),
(50, 'Joomla'),
(51, 'Wocommerce');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `vademecum_tab`
--

CREATE TABLE `vademecum_tab` (
  `Id` int(10) UNSIGNED NOT NULL,
  `nazwa` varchar(200) COLLATE utf8_polish_ci NOT NULL,
  `text` longtext COLLATE utf8_polish_ci NOT NULL,
  `code` longtext COLLATE utf8_polish_ci NOT NULL,
  `typeOfCMS` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `login` varchar(30) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `vademecum_tab`
--

INSERT INTO `vademecum_tab` (`Id`, `nazwa`, `text`, `code`, `typeOfCMS`, `login`) VALUES
(161, 'Test', 'Test', '', 'SHOPLO', ''),
(162, 'Nowe rozwiązanie', 'sfsdgfgdf', '', 'Wordpress', '');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `cms_tab`
--
ALTER TABLE `cms_tab`
  ADD PRIMARY KEY (`Id`,`newCMS`);

--
-- Indeksy dla tabeli `vademecum_tab`
--
ALTER TABLE `vademecum_tab`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `cms_tab`
--
ALTER TABLE `cms_tab`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT dla tabeli `vademecum_tab`
--
ALTER TABLE `vademecum_tab`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
