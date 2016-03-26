-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2016 at 12:00 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kost`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_kost`
--

CREATE TABLE IF NOT EXISTS `data_kost` (
  `id_data` varchar(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `nama_kost` varchar(20) NOT NULL,
  `nama_pemilik` varchar(20) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `fasilitas` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id_data`),
  KEY `fk_username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_kost`
--

INSERT INTO `data_kost` (`id_data`, `username`, `nama_kost`, `nama_pemilik`, `no_telp`, `alamat`, `kecamatan`, `kelurahan`, `fasilitas`, `status`) VALUES
('', 'kost01', 'fgdf', 'zdfd', 'zsfs', 'dsfd', 'dsfsd', 'dsfsd', 'sdffs', 'dfdzsf');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_kost`
--
ALTER TABLE `data_kost`
  ADD CONSTRAINT `data_kost_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
