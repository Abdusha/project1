-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2018 at 08:29 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gd_fri`
--

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

CREATE TABLE `booked` (
  `id_pinjam` int(11) NOT NULL,
  `kode_ruangan` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `lama_pinjam` int(11) NOT NULL,
  `atas_nama` varchar(50) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `jurusan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booked`
--

INSERT INTO `booked` (`id_pinjam`, `kode_ruangan`, `tanggal`, `jam`, `lama_pinjam`, `atas_nama`, `nim`, `jurusan`) VALUES
(3, 'B101A', '2018-04-24', '10:00:00', 2, 'Abdurrahman Shaleh', '1301150053', 'Informatika'),
(4, 'B101A', '2018-04-24', '13:00:00', 1, 'Ilham Arun Faisal', '1302154321', 'Ilmu Komputasi');

-- --------------------------------------------------------

--
-- Table structure for table `gedung`
--

CREATE TABLE `gedung` (
  `kode_ruangan` varchar(10) NOT NULL,
  `kode_gedung` varchar(5) NOT NULL,
  `nama_ruangan` varchar(50) NOT NULL,
  `lantai` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gedung`
--

INSERT INTO `gedung` (`kode_ruangan`, `kode_gedung`, `nama_ruangan`, `lantai`) VALUES
('B101A', 'KU2', 'KU2.1.01', 1),
('B101B', 'KU2', 'KU2.1.02', 1),
('B102A', 'KU2', 'KU2.1.03', 1),
('B102B', 'KU2', 'KU2.1.04', 1),
('B201A', 'KU2', 'KU2.2.01', 2),
('B201B', 'KU2', 'KU2.2.02', 2),
('B301A', 'KU2', 'KU2.3.01', 3),
('B301B', 'KU2', 'KU2.3.02', 3),
('C101', '21', 'FRI.1.01', 1),
('C102', '21', 'FRI.1.02', 1),
('C201', '21', 'FRI.2.01', 2),
('C202', '21', 'FRI.2.02', 2),
('C301', '21', 'FRI.3.01', 3),
('C302', '21', 'FRI.3.02', 3);

-- --------------------------------------------------------

--
-- Table structure for table `konfirm`
--

CREATE TABLE `konfirm` (
  `id` int(11) NOT NULL,
  `konfirmasi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfirm`
--

INSERT INTO `konfirm` (`id`, `konfirmasi`) VALUES
(14, 'DISETUJUI'),
(15, 'DISETUJUI');

-- --------------------------------------------------------

--
-- Table structure for table `pinjam`
--

CREATE TABLE `pinjam` (
  `id` int(11) NOT NULL,
  `kode_ruangan` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `lama_pinjam` int(11) NOT NULL,
  `atas_nama` varchar(50) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `waktu_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pinjam`
--

INSERT INTO `pinjam` (`id`, `kode_ruangan`, `tanggal`, `jam`, `lama_pinjam`, `atas_nama`, `nim`, `jurusan`, `keterangan`, `waktu_input`) VALUES
(14, 'B101A', '2018-04-24', '10:00:00', 2, 'Abdurrahman Shaleh', '1301150053', 'Informatika', 'Kuliah pengganti tata tulis ilmiah', '2018-04-23 18:10:03'),
(15, 'B101A', '2018-04-24', '13:00:00', 1, 'Ilham Arun Faisal', '1302154321', 'Ilmu Komputasi', 'Untuk aktivitas UKM', '2018-04-23 18:17:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booked`
--
ALTER TABLE `booked`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indexes for table `gedung`
--
ALTER TABLE `gedung`
  ADD PRIMARY KEY (`kode_ruangan`);

--
-- Indexes for table `konfirm`
--
ALTER TABLE `konfirm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booked`
--
ALTER TABLE `booked`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `konfirm`
--
ALTER TABLE `konfirm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
