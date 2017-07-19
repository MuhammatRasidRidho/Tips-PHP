-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Jun 2016 pada 05.05
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `upb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `NPM` varchar(12) NOT NULL,
  `Nama` varchar(40) NOT NULL,
  `Alamat` text NOT NULL,
  `Hp` varchar(15) NOT NULL,
  PRIMARY KEY (`NPM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`NPM`, `Nama`, `Alamat`, `Hp`) VALUES
('1111111', 'Namanya', 'Piayu', '565656565'),
('12345678', 'Chandra Kurniawan', 'Marina Bay Sand', '+63776767676'),
('123456782', 'Chandra Kurniawan', 'Marina Bay Sand', '+63776767676'),
('123456783', 'Chandra Kurniawan', 'Marina Bay Sand', '+63776767676'),
('12345679', 'Chandra Siapa', 'Tembesi', '+637767676766'),
('123456792', 'Chandra Siapa', 'Tembesi', '+637767676766');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
