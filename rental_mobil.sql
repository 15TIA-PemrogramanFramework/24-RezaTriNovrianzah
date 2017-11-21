-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 21, 2017 at 08:57 AM
-- Server version: 5.7.15-log
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `nama_karyawan` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`nama_karyawan`, `username`, `password`, `jabatan`, `alamat`, `jenis_kelamin`) VALUES
('Reza Tri Novrianzah', 'reza', '123', 'Admin', 'Pekanbaru', 'Laki-laki'),
('Ricky Dwin Darman', 'ricky', '123', 'Karyawan', 'Pekanbaru', 'Laki-laki'),
('Rika Indriarni Rahayu', 'rika', '123', 'Karyawan', 'Pekanbaru', 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(11) NOT NULL,
  `nomor_polisi` varchar(255) NOT NULL,
  `merk_mobil` varchar(255) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `warna` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `nomor_polisi`, `merk_mobil`, `nama_mobil`, `warna`, `harga`) VALUES
(6, 'BM 123 JA', 'Toyota', 'Avanza', 'Hitam', 250000);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_tlp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `jenis_kelamin`, `alamat`, `no_tlp`) VALUES
(3, 'Satria', 'Laki-laki', 'Pekanbaru', '089673153061'),
(4, 'Ryan', 'Laki-laki', 'Pekanbaru', '081365494554');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_kembali` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`id_kembali`, `username`, `id_mobil`, `id_pelanggan`, `tanggal_kembali`, `status`) VALUES
(3, 'reza', 6, 3, '2017-11-23', 'Kembali'),
(4, 'reza', 6, 3, '2017-12-08', 'Kembali');

-- --------------------------------------------------------

--
-- Table structure for table `penyewaan`
--

CREATE TABLE `penyewaan` (
  `id_sewa` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tanggal_sewa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `penyewaan`
--

INSERT INTO `penyewaan` (`id_sewa`, `username`, `id_mobil`, `id_pelanggan`, `tanggal_sewa`) VALUES
(3, 'reza', 6, 3, '2017-11-16'),
(4, 'reza', 6, 3, '2017-11-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_kembali`),
  ADD KEY `username` (`username`),
  ADD KEY `id_mobil` (`id_mobil`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indexes for table `penyewaan`
--
ALTER TABLE `penyewaan`
  ADD PRIMARY KEY (`id_sewa`),
  ADD KEY `username` (`username`),
  ADD KEY `id_mobil` (`id_mobil`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `username_2` (`username`),
  ADD KEY `id_pelanggan_2` (`id_pelanggan`),
  ADD KEY `username_3` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id_kembali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `penyewaan`
--
ALTER TABLE `penyewaan`
  MODIFY `id_sewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD CONSTRAINT `pengembalian_ibfk_1` FOREIGN KEY (`username`) REFERENCES `karyawan` (`username`),
  ADD CONSTRAINT `pengembalian_ibfk_2` FOREIGN KEY (`id_mobil`) REFERENCES `mobil` (`id_mobil`),
  ADD CONSTRAINT `pengembalian_ibfk_3` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`);

--
-- Constraints for table `penyewaan`
--
ALTER TABLE `penyewaan`
  ADD CONSTRAINT `penyewaan_ibfk_1` FOREIGN KEY (`username`) REFERENCES `karyawan` (`username`),
  ADD CONSTRAINT `penyewaan_ibfk_2` FOREIGN KEY (`id_mobil`) REFERENCES `mobil` (`id_mobil`),
  ADD CONSTRAINT `penyewaan_ibfk_3` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
