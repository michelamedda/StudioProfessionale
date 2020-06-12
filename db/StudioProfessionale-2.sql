-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Giu 08, 2020 alle 20:07
-- Versione del server: 10.4.10-MariaDB
-- Versione PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `StudioProfessionale`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `Accessi`
--

CREATE TABLE `Accessi` (
  `IdAccesso` varchar(4) NOT NULL,
  `DataAccesso` date NOT NULL,
  `OrarioAccesso` time NOT NULL,
  `DataLogout` date NOT NULL,
  `OrarioLogout` time NOT NULL,
  `IdStaffer` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `Appuntamenti`
--

CREATE TABLE `Appuntamenti` (
  `IdAppuntamenti` varchar(4) NOT NULL,
  `DataAppuntamento` date NOT NULL,
  `OrarioAppuntamento` time NOT NULL,
  `Motivazione` varchar(300) NOT NULL,
  `Nominativo` varchar(50) NOT NULL,
  `PrimoAppuntamento` bit(1) NOT NULL,
  `NumTelefono` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `CodFiscale` varchar(16) NOT NULL,
  `PartitaIVA` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `Aziende`
--

CREATE TABLE `Aziende` (
  `PartitaIVA` varchar(24) NOT NULL,
  `NomeAzienda` varchar(50) NOT NULL,
  `RagioneSociale` varchar(50) NOT NULL,
  `SedeLegale` varchar(50) NOT NULL,
  `Citta` varchar(50) NOT NULL,
  `CAP` varchar(5) NOT NULL,
  `Provincia` varchar(50) NOT NULL,
  `EmailPEC` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `Aziende`
--

INSERT INTO `Aziende` (`PartitaIVA`, `NomeAzienda`, `RagioneSociale`, `SedeLegale`, `Citta`, `CAP`, `Provincia`, `EmailPEC`) VALUES
('', '', '', '', '', '', '', ''),
(' 0000000000', 'pimpa', 'ok', 'smsmsm', 'cagliari', '0000', 'ap', 'amamam@jj'),
(' 09876543', 'es : Glamour Restaulkjhgfrant', 'lkjhgfd', 'òlkjhgf', 'kiikhgf', '09089', 'at', 'lkjhgf@kk.com'),
(' dassdsad', 'dd', 'dddd', '333', '3', '09123', 'al', 'd@g.c'),
(' dkdkd', 'pino', 'lili', 'nono', 'Cremona', '09887', 'an', 'mimi@san.it'),
(' hgfds', 'es : Glamongvbvgfrfgvgfrgur Restaurant', ' bvgfd', 'bvcx', 'bvcx', '23456', 'bl', 'cvnhgfdsdf'),
(' òlkjhgfd', 'es : Glamour Restauraàòlkkjhgkjlòàùnt', 'òlkjhg', '-lkjmnbv', 'lkjhg', '09876', 'ar', 'kjhhgguk'),
(' poiuyfghò', 'es : Glamour Restaurantòlkjhgfghjkl', 'lkjbvbjkl', ',mnnmnmn', ',jklkjhg', '09808', 'ar', 'òlkjhgfdsz'),
('51780330570', 'ReRestaurant', 'S.s', 'Cagliari', 'Cagliari', '09030', 'Cagliari', 'mmm@gmail.com');

-- --------------------------------------------------------

--
-- Struttura della tabella `Consulenze`
--

CREATE TABLE `Consulenze` (
  `IdConsulenza` varchar(4) NOT NULL,
  `DataConsulenza` date NOT NULL,
  `OrarioConsulenza` time NOT NULL,
  `TipoConsulenza` varchar(300) NOT NULL,
  `CodFiscale` varchar(16) NOT NULL,
  `PartitaIVA` varchar(24) NOT NULL,
  `IdStaffer` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `Privati`
--

CREATE TABLE `Privati` (
  `CodFiscale` varchar(16) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Cognome` varchar(50) NOT NULL,
  `DataDiNascita` date NOT NULL,
  `Via` varchar(50) NOT NULL,
  `Citta` varchar(50) NOT NULL,
  `CAP` varchar(5) NOT NULL,
  `Provincia` varchar(50) NOT NULL,
  `NumTelefono` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `Privati`
--

INSERT INTO `Privati` (`CodFiscale`, `Nome`, `Cognome`, `DataDiNascita`, `Via`, `Citta`, `CAP`, `Provincia`, `NumTelefono`, `Email`) VALUES
(' lkjhdfghjklò', ' òlkjhgfhj,', 'lkjhgc', '2009-09-27', 'òlkjhg', 'òlkjh', '09890', 'ao', '3454499089', 'òlikjhg');

-- --------------------------------------------------------

--
-- Struttura della tabella `Staff`
--

CREATE TABLE `Staff` (
  `IdStaffer` varchar(4) NOT NULL,
  `Password` varchar(128) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Cognome` varchar(50) NOT NULL,
  `DataDiNascita` date NOT NULL,
  `Dipendente` tinyint(1) NOT NULL,
  `CodiceFiscale` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `Staff`
--

INSERT INTO `Staff` (`IdStaffer`, `Password`, `Nome`, `Cognome`, `DataDiNascita`, `Dipendente`, `CodiceFiscale`) VALUES
('01', 'lala', 'Patrizia', 'Atzori', '1969-06-08', 1, 'abcdefgh12345678'),
('02', 'lilia', 'pigna', 'legno', '2000-05-01', 0, ''),
('03', 'lilia', 'lolo', 'legno', '2000-05-01', 1, '');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `Accessi`
--
ALTER TABLE `Accessi`
  ADD PRIMARY KEY (`IdAccesso`),
  ADD KEY `IdStaffer` (`IdStaffer`);

--
-- Indici per le tabelle `Appuntamenti`
--
ALTER TABLE `Appuntamenti`
  ADD PRIMARY KEY (`IdAppuntamenti`),
  ADD KEY `CodFiscale` (`CodFiscale`),
  ADD KEY `PartitaIVA` (`PartitaIVA`);

--
-- Indici per le tabelle `Aziende`
--
ALTER TABLE `Aziende`
  ADD PRIMARY KEY (`PartitaIVA`);

--
-- Indici per le tabelle `Consulenze`
--
ALTER TABLE `Consulenze`
  ADD PRIMARY KEY (`IdConsulenza`),
  ADD KEY `CodFiscale` (`CodFiscale`),
  ADD KEY `PartitaIVA` (`PartitaIVA`),
  ADD KEY `IdStaffer` (`IdStaffer`);

--
-- Indici per le tabelle `Privati`
--
ALTER TABLE `Privati`
  ADD PRIMARY KEY (`CodFiscale`);

--
-- Indici per le tabelle `Staff`
--
ALTER TABLE `Staff`
  ADD PRIMARY KEY (`IdStaffer`);

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `Accessi`
--
ALTER TABLE `Accessi`
  ADD CONSTRAINT `accessi_ibfk_1` FOREIGN KEY (`IdStaffer`) REFERENCES `Staff` (`IdStaffer`);

--
-- Limiti per la tabella `Appuntamenti`
--
ALTER TABLE `Appuntamenti`
  ADD CONSTRAINT `appuntamenti_ibfk_1` FOREIGN KEY (`CodFiscale`) REFERENCES `Privati` (`CodFiscale`),
  ADD CONSTRAINT `appuntamenti_ibfk_2` FOREIGN KEY (`PartitaIVA`) REFERENCES `Aziende` (`PartitaIVA`);

--
-- Limiti per la tabella `Consulenze`
--
ALTER TABLE `Consulenze`
  ADD CONSTRAINT `consulenze_ibfk_1` FOREIGN KEY (`CodFiscale`) REFERENCES `Privati` (`CodFiscale`),
  ADD CONSTRAINT `consulenze_ibfk_2` FOREIGN KEY (`PartitaIVA`) REFERENCES `Aziende` (`PartitaIVA`),
  ADD CONSTRAINT `consulenze_ibfk_3` FOREIGN KEY (`PartitaIVA`) REFERENCES `Aziende` (`PartitaIVA`),
  ADD CONSTRAINT `consulenze_ibfk_4` FOREIGN KEY (`PartitaIVA`) REFERENCES `Aziende` (`PartitaIVA`),
  ADD CONSTRAINT `consulenze_ibfk_5` FOREIGN KEY (`PartitaIVA`) REFERENCES `Aziende` (`PartitaIVA`),
  ADD CONSTRAINT `consulenze_ibfk_6` FOREIGN KEY (`IdStaffer`) REFERENCES `Staff` (`IdStaffer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
