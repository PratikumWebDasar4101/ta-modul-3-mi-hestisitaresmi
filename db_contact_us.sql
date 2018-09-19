-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2018 at 11:22 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_contact_us`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact_us`
--

CREATE TABLE `tb_contact_us` (
  `nim` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `fakultas` varchar(30) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  `file` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_contact_us`
--

INSERT INTO `tb_contact_us` (`nim`, `nama`, `fakultas`, `jeniskelamin`, `file`) VALUES
(670112345, 'Yasa Suryo Atmojo', 'Fakultas Teknik Elektro', 'Laki-Laki', 'S_7928798610271.jpg'),
(670983453, 'Sunarti', 'Fakultas Teknik Elektro', 'Perempuan', 'Menyukai dan mengikuti Jawahir Utama.png'),
(2147483647, 'Deksa Titah Prasojo', 'Fakultas Industri Kreatif', 'Laki-Laki', 'jadwal.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_contact_us`
--
ALTER TABLE `tb_contact_us`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
