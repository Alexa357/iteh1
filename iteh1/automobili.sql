-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: July 13, 2021 at 08:58 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `automobili`
--

-- --------------------------------------------------------

--
-- Table structure for table `kupci`
--

CREATE TABLE `kupci` (
  `id` int(10) NOT NULL,
  `imePrezime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `korisnickoIme` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sifra` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kupci`
--

INSERT INTO `kupci` (`id`, `imePrezime`, `korisnickoIme`, `sifra`) VALUES
(1, 'MajaPeric', 'maja98', 'majamaja'),
(2, 'MarkoLazic', 'mare01', 'maremare');

-- --------------------------------------------------------

--
-- Table structure for table `automobili`
--

CREATE TABLE `automobili` (
  `id` int(10) NOT NULL,
  `naziv` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `zemlja` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `opis` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cena` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `automobili`
--

INSERT INTO `automobili` (`id`, `naziv`, `zemlja`, `opis`, `cena`) VALUES
(1, 'Petit Rose', 'Srbija', 'Sumadijski rejon', 630),
(2, 'Tri Bele Koze', 'Srbija', 'Fruskogorsko vinogorje', 660),
(3, 'Rose Dusica', 'Srbija', 'Negotinska Krajina rejon', 700);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kupci`
--
ALTER TABLE `kupci`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vina`
--
ALTER TABLE `automobili`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kupci`
--
ALTER TABLE `kupci`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `automobili`
--
ALTER TABLE `automobili`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
