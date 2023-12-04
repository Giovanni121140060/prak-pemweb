-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2023 at 02:41 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tm5`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` bigint(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `prodi` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `prodi`) VALUES
(121140060, 'Giovanni Lucy', 'Teknik Informatika'),
(121140063, 'Qaisya Dwi Aryana', 'Teknik Informatika'),
(121460057, 'Muhamad Farras Fadhilah', 'Teknik Perkeretaapian'),
(121140107, 'Nelpi Sariana Hutasoit ', 'Teknik Informatika'),
(121280132, 'Destani Sihotang', 'Teknik Kimia'),
(121380061, 'Cornelia Astita', 'Desain Komunikasi Visual'),
(121130018, 'Josevein Hutagalung', 'Teknik Elektro'),
(121140113, 'Abira Husnia', 'Teknik Informatika'),
(121380013, 'Levi Eleazar Danis Jr', 'Desain Komunikasi Visual'),
(121140082, 'Ahmad Fathur Rohman', 'Teknik Informatika');
(121240050, 'Sonya Dita Maharani', 'Arsitektur'),
(121220072, 'Berliando Wili Madeka', 'Perencanaan Wilayah dan Kota'),
(121140048, 'Hafiza Eka Ramadhini ', 'Teknik Informatika ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
