-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb17.awardspace.net
-- Generation Time: 16-Mar-2018 às 09:03
-- Versão do servidor: 5.7.20-log
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2316349_android`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `Cliente`
--

DROP TABLE IF EXISTS `Cliente`;
CREATE TABLE `Cliente` (
  `ID` int(11) NOT NULL,
  `Username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NIF` int(11) NOT NULL,
  `Morada` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `Cliente`
--

INSERT INTO `Cliente` (`ID`, `Username`, `Password`, `Nome`, `NIF`, `Morada`) VALUES
(1, 'miguel', 'miguel', 'Miguel', 1, 'Casa 1'),
(2, 'joao', 'joao', 'Joao', 2, 'Casa 2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ClienteTelemovel`
--

DROP TABLE IF EXISTS `ClienteTelemovel`;
CREATE TABLE `ClienteTelemovel` (
  `ID` int(11) NOT NULL,
  `IMEI` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TelemovelFK` int(11) NOT NULL,
  `ClienteFK` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `ClienteTelemovel`
--

INSERT INTO `ClienteTelemovel` (`ID`, `IMEI`, `TelemovelFK`, `ClienteFK`) VALUES
(1, '12345', 1, 1),
(2, '54321', 2, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `Telemovel`
--

DROP TABLE IF EXISTS `Telemovel`;
CREATE TABLE `Telemovel` (
  `ID` int(11) NOT NULL,
  `Marca` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Modelo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Preco` double NOT NULL,
  `Descricao` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Stock` int(11) NOT NULL,
  `ImagemURL` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `Telemovel`
--

INSERT INTO `Telemovel` (`ID`, `Marca`, `Modelo`, `Preco`, `Descricao`, `Stock`, `ImagemURL`) VALUES
(1, 'Samsung', 'Galaxy', 600, 'Muito bom!', 10, 'sam1.jpg'),
(2, 'Samsung', 'Galaxy 2', 500, 'Bom!', 10, 'sam2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Cliente`
--
ALTER TABLE `Cliente`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `ClienteTelemovel`
--
ALTER TABLE `ClienteTelemovel`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Telemovel`
--
ALTER TABLE `Telemovel`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Cliente`
--
ALTER TABLE `Cliente`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ClienteTelemovel`
--
ALTER TABLE `ClienteTelemovel`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `Telemovel`
--
ALTER TABLE `Telemovel`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
