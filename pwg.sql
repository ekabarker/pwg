-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2020 at 11:06 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwg`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `anggota_id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `data` longtext NOT NULL,
  `pelaksanaan` datetime NOT NULL,
  `tempat` varchar(128) NOT NULL,
  `sarana` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `anggota_id`, `judul`, `data`, `pelaksanaan`, `tempat`, `sarana`, `tanggal`) VALUES
(7, 17, 'Agenda tes', 'bD7xFQG4pk-2020-06-01', '2020-06-02 15:58:00', 'Bali', 'vQA9zufaj9-2020-06-01', '2020-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_tlp` char(13) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `tgl_buat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `email`, `tanggal_lahir`, `tempat_lahir`, `alamat`, `no_tlp`, `agama`, `jenis_kelamin`, `username`, `password`, `role`, `gambar`, `tgl_buat`) VALUES
(1, 'I Putu Eka Supartawan', '', '1997-12-23', 'Klungkung', 'Jl. Angsoka Semarapura Klod', '08123445', 'Hindu', 'Laki-laki', 'borosuka', 'd6e017cb5e50414afec94ab929676b11', 'admin', '', '0000-00-00'),
(6, 'sita123', '', '1998-12-21', 'Klungkung', 'Jln angsoka semarapura kelod, Klungkung', '0', 'Hindu', 'Perempuan', 'sita', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 'turtle7.png', '0000-00-00'),
(7, 'Putu Eka', '', '1997-12-23', 'Klungkung', 'Jln angsoka semarapura kelod, Klungkung', '0', 'Hindu', 'Laki-laki', 'barkere91', 'e012688a3e0959bed296423071085cf0', 'anggota', 'share424@gmail.com', '0000-00-00'),
(10, 'opik cahaya', '', '2005-12-21', 'Klungkung', 'Jln angsoka semarapura kelod, Klungkung', '0', 'Hindu', 'Perempuan', 'opik', '6467a14a8535654e083a05a3141be6bc', 'anggota', 'borosukajr17@gmail.com', '0000-00-00'),
(17, 'Eka Supartawan', '', '1997-12-23', 'Klungkung', 'Jln Kenyeri No. 70', '0', 'Hindu', 'Laki-laki', 'tes', '6467a14a8535654e083a05a3141be6bc', 'admin', '', '0000-00-00'),
(18, 'putu supartawan', '', '1997-12-23', 'Klungkung', 'Jln angsoka semarapura kelod, Klungkung', '2147483647', 'Hindu', 'Laki-laki', 'notelp', '6467a14a8535654e083a05a3141be6bc', 'admin', '', '0000-00-00'),
(19, 'tes no tlp', '', '2000-12-12', 'Klungkung', 'Jln Kenyeri No. 70', '081338304864', 'Hindu', 'Laki-laki', 'tlp', '6467a14a8535654e083a05a3141be6bc', 'admin', '', '0000-00-00'),
(20, 'opik', '', '2005-12-01', 'Klungkung', 'Jln angsoka semarapura kelod, Klungkung', '081387465345', 'Hindu', 'Perempuan', 'opik123', '6467a14a8535654e083a05a3141be6bc', 'admin', '', '0000-00-00'),
(21, 'komang', '', '2000-11-11', 'Klungkung', 'Jln angsoka semarapura kelod, Klungkung', '081234234234', 'Hindu', 'Laki-laki', 'komang', '6467a14a8535654e083a05a3141be6bc', 'admin', '', '0000-00-00'),
(22, 'pasek', '', '1229-02-23', 'Klungkung', 'Jln angsoka semarapura', '081234765789', 'Hindu', 'Laki-laki', 'pasek', '6467a14a8535654e083a05a3141be6bc', 'admin', '', '0000-00-00'),
(23, 'tes gambar', '', '2020-06-01', 'Klungkung', 'Jln angsoka semarapura', '081234747789', 'Hindu', 'Laki-laki', 'gambar', '6467a14a8535654e083a05a3141be6bc', 'admin', 'default.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `anggota_id` int(11) NOT NULL,
  `data` longtext NOT NULL,
  `judul` varchar(128) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `anggota_id`, `data`, `judul`, `tanggal`) VALUES
(28, 17, '8xOanx588l-2020-06-01', 'Contoh', '2020-06-01'),
(29, 6, 'KwbIH0tM8T-2020-06-09', 'dasdsad', '2020-06-09');

-- --------------------------------------------------------

--
-- Table structure for table `jam_pengobatan`
--

CREATE TABLE `jam_pengobatan` (
  `id` int(11) NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jam_pengobatan`
--

INSERT INTO `jam_pengobatan` (`id`, `jam`) VALUES
(1, '09:00:00'),
(2, '11:00:00'),
(3, '13:00:00'),
(4, '15:00:00'),
(5, '17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pengobatan`
--

CREATE TABLE `jenis_pengobatan` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_pengobatan`
--

INSERT INTO `jenis_pengobatan` (`id`, `nama`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `anggota_id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `data` longtext NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `anggota_id`, `judul`, `data`, `tanggal`) VALUES
(7, 17, 'Kegiatan tes', 'UrJIBRbeuc-2020-06-01', '2020-06-01'),
(8, 6, 'dasda', 'bZ4wUMyjti-2020-06-09', '2020-06-09');

-- --------------------------------------------------------

--
-- Table structure for table `libur`
--

CREATE TABLE `libur` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `libur`
--

INSERT INTO `libur` (`id`, `tanggal`, `catatan`) VALUES
(1, '2020-06-10', 'libur capek'),
(2, '2020-06-11', 'dasd');

-- --------------------------------------------------------

--
-- Table structure for table `pengobatan`
--

CREATE TABLE `pengobatan` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_id` int(11) NOT NULL,
  `jenis_pengobatan_id` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `anggota_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengobatan`
--

INSERT INTO `pengobatan` (`id`, `tanggal`, `jam_id`, `jenis_pengobatan_id`, `deskripsi`, `anggota_id`, `status`) VALUES
(1, '2020-06-02', 2, 2, 'jdlakfjkldsjf', 17, 2),
(5, '2020-06-04', 1, 1, 'dasd', 17, 1),
(6, '2020-06-04', 5, 2, 'dadsa', 17, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `anggota_id` (`anggota_id`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_anggota_artikel` (`anggota_id`);

--
-- Indexes for table `jam_pengobatan`
--
ALTER TABLE `jam_pengobatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_pengobatan`
--
ALTER TABLE `jenis_pengobatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `anggota_id` (`anggota_id`);

--
-- Indexes for table `libur`
--
ALTER TABLE `libur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tanggal` (`tanggal`);

--
-- Indexes for table `pengobatan`
--
ALTER TABLE `pengobatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_jam` (`jam_id`),
  ADD KEY `fk_jenis_pengobatan` (`jenis_pengobatan_id`),
  ADD KEY `fk_anggota` (`anggota_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `jam_pengobatan`
--
ALTER TABLE `jam_pengobatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jenis_pengobatan`
--
ALTER TABLE `jenis_pengobatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `libur`
--
ALTER TABLE `libur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengobatan`
--
ALTER TABLE `pengobatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `agenda_ibfk_1` FOREIGN KEY (`anggota_id`) REFERENCES `anggota` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `fk_anggota_artikel` FOREIGN KEY (`anggota_id`) REFERENCES `anggota` (`id`);

--
-- Constraints for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `kegiatan_ibfk_1` FOREIGN KEY (`anggota_id`) REFERENCES `anggota` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengobatan`
--
ALTER TABLE `pengobatan`
  ADD CONSTRAINT `fk_anggota` FOREIGN KEY (`anggota_id`) REFERENCES `anggota` (`id`),
  ADD CONSTRAINT `fk_jam` FOREIGN KEY (`jam_id`) REFERENCES `jam_pengobatan` (`id`),
  ADD CONSTRAINT `fk_jenis_pengobatan` FOREIGN KEY (`jenis_pengobatan_id`) REFERENCES `jenis_pengobatan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
