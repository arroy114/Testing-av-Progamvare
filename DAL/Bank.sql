

--
-- Database: `Bank` DENNE MÅ VÆRE OPPRETTET FØR SCRIPTET KJØRES !!!
--

-- --------------------------------------------------------
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- ---------------------------------------------------------

DROP TABLE IF EXISTS `Konto`;
DROP TABLE IF EXISTS `Kunde`;
DROP TABLE IF EXISTS `Poststed`;
DROP TABLE IF EXISTS `Transaksjon`;

--
-- Tabellstruktur for tabell `Konto`
--

CREATE TABLE IF NOT EXISTS `Konto` (
  `Kontonummer` varchar(20) NOT NULL,
  `Personnummer` varchar(11) NOT NULL,
  `Saldo` float NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Valuta` varchar(3) NOT NULL,
  PRIMARY KEY (`Kontonummer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `Konto`
--

INSERT INTO `Konto` (`Kontonummer`, `Personnummer`, `Saldo`, `Type`, `Valuta`) VALUES
('1050101234560', '01010110523', 720, 'Lonnskonto', 'NOK'),
('105020123456', '01010110523', 100500, 'Sparekonto', 'NOK'),
('22334412345', '01010110523', 10234.5, 'Brukskonto', 'NOK'),
('10502012300', '12345678901', 100500, 'Sparekonto', 'NOK'),

('22334412555', '55566777893', 10234.5, 'Brukskonto', 'NOK'),
('55540202300', '55566777893', 100500, 'Sparekonto', 'NOK'),
('66634412345', '66698967434', 10234.5, 'Brukskonto', 'NOK'),
('10502012666', '66698967434', 100500, 'Sparekonto', 'NOK'),
('2233441200', '12345678901', 10234.5, 'Brukskonto', 'NOK');
-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `Kunde`
--

CREATE TABLE IF NOT EXISTS `Kunde` (
  `Personnummer` varchar(11) NOT NULL,
  `Fornavn` varchar(30) NOT NULL,
  `Etternavn` varchar(30) NOT NULL,
  `Adresse` varchar(50) NOT NULL,
  `Postnr` varchar(4) NOT NULL,
  `Telefonnr` varchar(8) NOT NULL,
  `Passord` varchar(500) NOT NULL,
  PRIMARY KEY (`Personnummer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `Kunde`
--

INSERT INTO `Kunde` (`Personnummer`, `Fornavn`, `Etternavn`, `Adresse`, `Postnr`, `Telefonnr`, `Passord`) VALUES
('12345678901', 'Per', 'Hansen', 'Osloveien 82', '2389', '12345678', 'HeiHei'),
('01010110523', 'Lene', 'Jensen', 'Askerveien 22', '3270', '22224444', 'HeiHei'),
('55566777893', 'Odde', 'Hansen', 'Trimvein 22', '2389', '2342342', 'HeiHei'),
('66698967434', 'Katrine', 'Harin', 'Maria gate 22', '2389', '23423234', 'HeiHei'),
('98765432109', 'David', 'Odde', 'Asasvei 2', '3270', '765432198', 'HeiHei');
-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `Poststed`
--

CREATE TABLE IF NOT EXISTS `Poststed` (
  `Postnr` varchar(4) NOT NULL,
  `Poststed` varchar(30) NOT NULL,
  PRIMARY KEY (`Postnr`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `Poststed`
--

INSERT INTO `Poststed` (`Postnr`, `Poststed`) VALUES
('', 'Asker'),
('3270', 'Asker'),
('2389', 'Oslo');
-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `Transaksjon`
--

CREATE TABLE IF NOT EXISTS `Transaksjon` (
  `TxID` int(11) NOT NULL AUTO_INCREMENT,
  `FraTilKontonummer` varchar(20) NOT NULL,
  `Belop` float NOT NULL,
  `Dato` date NOT NULL,
  `Melding` varchar(100) NOT NULL,
  `Kontonummer` varchar(20) NOT NULL,
  `Avventer` tinyint(1) NOT NULL,
  PRIMARY KEY (`TxID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dataark for tabell `Transaksjon`
--

INSERT INTO `Transaksjon` (`TxID`, `FraTilKontonummer`, `Belop`, `Dato`, `Melding`, `Kontonummer`, `Avventer`) VALUES
(1, '20102012345', -100.5, '2015-03-15', 'Meny Storo', '105010123456', 1),
(2, '20102012345', 400.4, '2015-03-20', 'Innebtaling', '105010123456', 0),
(3, '20102012345', -1400.7, '2015-03-13', 'Husleie', '55551166677', 1),
(4, '20102012347', -5000.5, '2015-03-30', 'Skatt', '105020123456', 0),
(5, '20102012345', 345.56, '2015-03-13', 'Test', '55551166677', 0),
(6, '12312345', 1234, '2012-12-12', 'Melding', '234567', 1),
(7, '345678908', 3000, '2012-12-12', '', '105020123456', 1),
(8, '234534678', 15, '2012-12-12', 'Hei', '1050201234560', 1),
(9, '1234254365', 125, '2012-12-12', 'Hopp', '105020123456', 0),

(10, '12312345', 1234, '2019-12-12', 'Melding', '22334412555', 0),
(11, '345678908', 3000, '2018-1-12', '', '22334412555', 1),
(12, '234534678', 15, '2018-2-12', 'Hei', '66634412345', 1),
(13, '1234254365', 125, '2019-4-12', 'Hopp', '66634412345', 0);
