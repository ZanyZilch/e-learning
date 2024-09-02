-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 31 okt 2023 om 09:35
-- Serverversie: 10.4.27-MariaDB
-- PHP-versie: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearning`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `account`
--

CREATE TABLE `account` (
  `ID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `IsTeacher` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `account`
--

INSERT INTO `account` (`ID`, `username`, `password`, `IsTeacher`) VALUES
(1, 'test', '$2y$10$4mTtljXJw/9/IpZMtaFMWuAw9eTMI4T4zZ9wbIO8q4GlLP1ferl8O', 0),
(2, 'Admin', '$2y$10$wdXH1ShnORSqk/ylJK26CukCzHbQbqHgCjjDBbi3pFQ8LTZnxDtH.', 1),
(3, 'MyUser', '$2y$10$RAIYnSB7gRuFaBhSUqQ1GucGcWSGxJKwtwTZ6OXSIfWGKMgYsmtN2', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `question`
--

CREATE TABLE `question` (
  `ID` int(11) NOT NULL,
  `question_text` text NOT NULL,
  `answer` varchar(255) NOT NULL,
  `difficulty` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `question`
--

INSERT INTO `question` (`ID`, `question_text`, `answer`, `difficulty`) VALUES
(1, 'What is car in dutch?', 'auto', 'easy'),
(2, 'What is bike in dutch?', 'fiets', 'easy'),
(3, 'Translate &quot;Waarom lach je?&quot; to english.', 'Why do you laugh?', 'medium'),
(4, 'What is duck in dutch?', 'eend', 'easy'),
(5, 'What is train in dutch?', 'trein', 'easy'),
(6, 'What is tree in dutch?', 'boom', 'easy'),
(7, 'What is basket in dutch?', 'mand', 'easy'),
(8, 'How would you say &quot;good morning&quot; in Dutch?', 'goedemorgen', 'hard'),
(9, 'What is the Dutch word for &quot;book&quot;?', 'boek', 'medium'),
(10, 'Provide the Dutch translation for &quot;friend.&quot;', 'vriend', 'medium'),
(11, 'What is the Dutch word for &quot;computer&quot;?', 'computer', 'hard'),
(12, 'Translate &quot;I love you&quot; to Dutch.', 'Ik hou van je', 'hard'),
(13, 'Translate &quot;mountain&quot; to Dutch.', 'berg', 'medium'),
(14, 'What is the Dutch word for &quot;city&quot;?', 'stad', 'medium'),
(15, 'Provide the Dutch translation for &quot;rainbow.&quot;', 'regenboog', 'medium'),
(16, 'How do you say &quot;to read&quot; in Dutch?', 'lezen', 'medium'),
(17, 'What is the Dutch word for &quot;butterfly&quot;?', 'vlinder', 'hard'),
(18, 'How would you say &quot;to understand&quot; in Dutch?', 'begrijpen', 'hard'),
(19, 'Provide the Dutch translation for &quot;telephone.&quot;', 'telefoon', 'medium');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `account`
--
ALTER TABLE `account`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `question`
--
ALTER TABLE `question`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
