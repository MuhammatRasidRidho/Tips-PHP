-- phpMyAdmin SQL Dump
-- version 2.11.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 24, 2011 at 08:46 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `latihan`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id` int(11) NOT NULL auto_increment,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `id_kategori`, `judul`, `keterangan`) VALUES
(1, 1, 'Teknik Cepat Membangun Aplikasi Web dengan Framework CakePHP', 'bla .. bla'),
(2, 1, '9 Langkah Menjadi Master Framework CodeIgniter', 'bla .. bla'),
(3, 1, 'Membangun Aplikasi Web Berbasis PHP dengan Framework CodeIgniter', 'bla .. bla..'),
(4, 2, '67 Trik dan Ide Brilian Menjadi Master PHP', 'bla.. bla..'),
(5, 2, 'Trik dan Solusi Jitu Pemograman Web', 'Bla.. bla..'),
(6, 3, 'Jalan Pintas Menjadi Master PHP', 'bla .. bla ..'),
(7, 3, 'Membongkar Trik Rahasia Para Master PHP', 'bla .. bla ..'),
(8, 3, 'Trik Rahasia Master PHP Terbongkar Lagi', 'bla .. bla..'),
(9, 2, 'Buku Sakti Menjadi Mater PHP Sejati', 'bla.. bla..');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(11) NOT NULL auto_increment,
  `kategori` varchar(50) NOT NULL,
  PRIMARY KEY  (`id_kategori`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Framework'),
(2, 'PHP Classic'),
(3, 'CMS Lokomedia');
