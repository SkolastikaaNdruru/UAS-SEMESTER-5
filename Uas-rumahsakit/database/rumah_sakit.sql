-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2024 at 07:23 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumah_sakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `dokter_id` int(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `spesialisasi` varchar(50) NOT NULL,
  `jadwal_praktek` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`dokter_id`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `spesialisasi`, `jadwal_praktek`, `alamat`, `telepon`, `email`) VALUES
(4, 'greo', 'Laki-laki', '2004-02-05', 'dokter jantung', '09:00-14:00', 'brayan jl mayor\r\n', '085261862789', 'geo@gmail.com'),
(5, 'jesika', 'Perempuan', '1998-04-07', 'dokter gigi', '06:00-12:00', 'helvetia', '089988556677', 'jesika@gmail.com'),
(6, 'Alexnduru', 'Laki-laki', '1999-07-08', 'dokter hati', '10:00-13:00', 'sei batang hari', '089977556688', 'Alex@gmail.com'),
(7, 'susii', 'Perempuan', '2007-12-05', 'dokter ginjal', '08:00-14:00', 'jl sei batang hari', '085261862789', 'susi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `komentar_id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`komentar_id`, `nama`, `email`, `pesan`, `date`) VALUES
(0, 'skolastika', '', 'hallo saya susi ingin konsultasi mengenai penyakit yg saya alami dok?', '2024-01-22 04:46:35'),
(0, 'dewi', '', 'saya mau konsultasi bu dokter, mengenai sakit kepala saya kira-kira obatnya apa ya? ', '2024-01-25 12:40:35');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `pasien_id` int(5) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `telepon` text NOT NULL,
  `tanggal_berobat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`pasien_id`, `nik`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `telepon`, `tanggal_berobat`) VALUES
(2, '13215465', 'intan', 'Perempuan', '2003-12-05', '081226463655', '2024-05-18'),
(4, '140077889900', 'aldo', 'Laki-laki', '2002-04-05', '085277889973', '2024-07-02'),
(5, '124455667788', 'Ahmad', 'Laki-laki', '1997-06-09', '081226463655', '2024-02-05'),
(6, 'mitha', '', 'Perempuan', '2003-03-04', '089977556688', '2024-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(254) NOT NULL,
  `email` varchar(50) NOT NULL,
  `token` char(128) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `last_login` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `token`, `status`, `last_login`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'skolastikandruru@gmail.com', 'c0e024d9200b5705bc4804722636378a', '1', '2024-01-29 13:17:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`dokter_id`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`pasien_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `dokter_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `pasien_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
