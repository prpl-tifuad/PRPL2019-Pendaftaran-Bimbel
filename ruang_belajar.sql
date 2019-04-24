-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2019 at 03:59 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ruang_belajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `matapelajaran`
--

CREATE TABLE `matapelajaran` (
  `Id` char(2) NOT NULL,
  `NamaMapel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matapelajaran`
--

INSERT INTO `matapelajaran` (`Id`, `NamaMapel`) VALUES
('01', 'Matematika'),
('02', 'Bahasa Inggris'),
('03', 'Fisika'),
('04', 'Biologi'),
('05', 'Kimia');

-- --------------------------------------------------------

--
-- Table structure for table `pilihmapel`
--

CREATE TABLE `pilihmapel` (
  `id` char(2) NOT NULL,
  `email` varchar(300) NOT NULL,
  `kelas` enum('Kelas 4','Kelas 5','Kelas 6','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pilihmapel`
--

INSERT INTO `pilihmapel` (`id`, `email`, `kelas`) VALUES
('02', 'abdul@gmail.com', 'Kelas 4'),
('03', 'musafitriyadi@gmail.com', 'Kelas 5'),
('02', 'musafitriyadi@gmail.com', 'Kelas 5'),
('05', 'musafitriyadi@gmail.com', 'Kelas 5'),
('04', 'musafitriyadi@gmail.com', 'Kelas 6'),
('05', 'musafitriyadi@gmail.com', 'Kelas 6');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `status` enum('Kelas 4','Kelas 5','Kelas 6','') NOT NULL,
  `fotoprofile` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nama`, `email`, `password`, `no_hp`, `status`, `fotoprofile`) VALUES
('Abdullah', 'abdul@gmail.com', '202cb962ac59075b964b07152d234b70', '081299992222', 'Kelas 4', '../assets/image/userdefault.png'),
('Arfi Maulana', 'arfimaulana@gmail.com', '6531401f9a6807306651b87e44c05751', '081237492742', 'Kelas 6', '../assets/image/userdefault.png'),
('Musa Fitriyadi', 'musafitriyadi@gmail.com', '202cb962ac59075b964b07152d234b70', '2123123123', 'Kelas 4', '../assets/image/userdefault.png'),
('Saepol', 'saepol@gmail.com', '202cb962ac59075b964b07152d234b70', '081123419876', 'Kelas 4', '../assets/image/userdefault.png'),
('Lalu Tata Fitriyadi', 'tpangestu.official@gmail', '202cb962ac59075b964b07152d234b70', '081213448189', 'Kelas 6', '../assets/image/userdefault.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `matapelajaran`
--
ALTER TABLE `matapelajaran`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `pilihmapel`
--
ALTER TABLE `pilihmapel`
  ADD KEY `id` (`id`,`email`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pilihmapel`
--
ALTER TABLE `pilihmapel`
  ADD CONSTRAINT `pilihmapel_ibfk_1` FOREIGN KEY (`id`) REFERENCES `matapelajaran` (`Id`),
  ADD CONSTRAINT `pilihmapel_ibfk_2` FOREIGN KEY (`email`) REFERENCES `siswa` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
