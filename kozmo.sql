-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2021 at 10:12 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kozmo`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentari`
--

CREATE TABLE `komentari` (
  `id` int(11) NOT NULL,
  `komentar` varchar(3000) NOT NULL,
  `ime_prezime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentari`
--

INSERT INTO `komentari` (`id`, `komentar`, `ime_prezime`) VALUES
(3, 'Brza isporuka i kvalitetan proizvod.', 'Haris Begic'),
(4, 'OdliÄan izbor proizvoda.', 'Anida Begic');

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `id` int(11) NOT NULL,
  `korisnicko_ime` varchar(255) NOT NULL,
  `sifra` varchar(255) NOT NULL,
  `ime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `korisnicko_ime`, `sifra`, `ime`) VALUES
(2, 'anida', 'begic', 'Anida Begic'),
(3, 'amina', 'zekan', 'Amina Zekan');

-- --------------------------------------------------------

--
-- Table structure for table `narudzbe`
--

CREATE TABLE `narudzbe` (
  `id` int(11) NOT NULL,
  `ime_proizvoda` varchar(255) NOT NULL,
  `ime_prezime` varchar(255) NOT NULL,
  `adresa` varchar(255) NOT NULL,
  `broj_kartice` varchar(255) NOT NULL,
  `broj_telefona` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `narudzbe`
--

INSERT INTO `narudzbe` (`id`, `ime_proizvoda`, `ime_prezime`, `adresa`, `broj_kartice`, `broj_telefona`) VALUES
(2, 'False Lash Superstar', 'Kemal HaliloviÄ‡', 'Ulica Bratstva i Jedinstva 191, Kakanj', '5352 5900 1233 4510', '062 684 846');

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi` (
  `id` int(255) NOT NULL,
  `ime` varchar(255) NOT NULL,
  `vrsta` varchar(255) NOT NULL,
  `brend` varchar(255) NOT NULL,
  `poslovnica` varchar(255) NOT NULL,
  `stanje` int(11) NOT NULL,
  `cijena` varchar(255) NOT NULL,
  `slika` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`id`, `ime`, `vrsta`, `brend`, `poslovnica`, `stanje`, `cijena`, `slika`) VALUES
(8, 'Crema Idrante', 'Krema', 'CeraVe', 'Zenica', 10, '12KM', 'krema1.jpg'),
(9, 'Hydro Boost', 'Krema', 'Neutrogena', 'Kakanj', 8, '22KM', 'krema2.jpg'),
(10, 'Clinique surge', 'Krema', 'Clinique', 'Zenica', 21, '17KM', 'krema3.jpg'),
(11, 'Cetaphil body', 'Krema', 'Cetaphil', 'Sarajevo', 7, '9KM', 'krema4.jpg'),
(12, 'Laura Mercier', 'Puder', 'Laura Mercier', 'Kakanj', 38, '14KM', 'puder1.jpg'),
(13, 'Nars', 'Puder', 'Nars', 'Zenica', 5, '28KM', 'puder2.jpg'),
(14, 'Les Beiges', 'Puder', 'Chanel', 'Sarajevo', 80, '22KM', 'puder3.jpg'),
(15, 'Chanel', 'Maskara', 'Chanel', 'Zenica', 3, '39KM', 'maskara1.jpg'),
(16, 'False L. Superstar', 'Maskara', 'Loreal', 'Kakanj', 5, '50KM', 'maskara2.jpg'),
(17, 'False L. Effect', 'Maskara', 'Max Factor', 'Sarajevo', 7, '17KM', 'maskara3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komentari`
--
ALTER TABLE `komentari`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `narudzbe`
--
ALTER TABLE `narudzbe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komentari`
--
ALTER TABLE `komentari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `narudzbe`
--
ALTER TABLE `narudzbe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `proizvodi`
--
ALTER TABLE `proizvodi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
