-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2018 at 12:54 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pobus_tugasakhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `id_bus` int(200) NOT NULL,
  `id_driver` int(200) NOT NULL,
  `id_kondektur` int(200) NOT NULL,
  `no_polisi` varchar(200) NOT NULL,
  `waktu_berangkat` time NOT NULL,
  `waktu_tiba` time NOT NULL,
  `pendapatan` mediumint(9) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id_bus`, `id_driver`, `id_kondektur`, `no_polisi`, `waktu_berangkat`, `waktu_tiba`, `pendapatan`, `keterangan`) VALUES
(12222, 4, 2, 'N 9238 B', '09:15:00', '13:30:00', 305000, 'tiba');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id_driver` int(200) NOT NULL,
  `nama_driver` varchar(200) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `jenis_kelamin` tinyint(1) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_ktp` int(200) NOT NULL,
  `no_hp` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id_driver`, `nama_driver`, `email`, `password`, `jenis_kelamin`, `alamat`, `no_ktp`, `no_hp`) VALUES
(1, 'vsv', 'lkjhg@gmail.com', '1234', 0, 'sd', 65432, 245),
(4, 'imam', 'admin@gmail.com', '123456', 1, 'malang', 2147483647, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `kondektur`
--

CREATE TABLE `kondektur` (
  `id_kondektur` int(200) NOT NULL,
  `nama_kondektur` varchar(200) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `jenis_kelamin` tinyint(1) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_ktp` int(200) NOT NULL,
  `no_hp` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kondektur`
--

INSERT INTO `kondektur` (`id_kondektur`, `nama_kondektur`, `email`, `password`, `jenis_kelamin`, `alamat`, `no_ktp`, `no_hp`) VALUES
(1, 'gfds', 'qwer@gmail.com', '23', 1, 'jhgfd', 2345, 3456),
(2, 'hvnds', 'lkjhg@gmail.com', '23', 1, ' jckn kxc', 167187168, 218378127);

-- --------------------------------------------------------

--
-- Table structure for table `rute`
--

CREATE TABLE `rute` (
  `id_rute` int(200) NOT NULL,
  `asal` varchar(200) NOT NULL,
  `tujuan` varchar(200) NOT NULL,
  `harga` mediumint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rute`
--

INSERT INTO `rute` (`id_rute`, `asal`, `tujuan`, `harga`) VALUES
(3, 'terminal_arjosari', 'terminal_pandaan', 7000),
(4, 'terminal_kesamben', 'terminal_arjosari ', 9000),
(5, 'terminal_blitar', 'terminal_kesamben', 90000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(200) NOT NULL,
  `nama_user` varchar(200) NOT NULL,
  `no_hp` int(200) NOT NULL,
  `jenis_kelamin` tinyint(1) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `no_hp`, `jenis_kelamin`, `alamat`, `username`, `password`, `level`) VALUES
(1, 'edit data', 23987482, 1, 'mvdlk', '983i3nj', '', 'user'),
(2, 'saya', 98765, 0, 'malang', 'admin@', 'admin', 'admin'),
(3, 'nawawi', 234598765, 1, 'malang', 'admin@1', 'admin', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id_bus`),
  ADD KEY `id_driver` (`id_driver`),
  ADD KEY `id_kondektur` (`id_kondektur`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id_driver`);

--
-- Indexes for table `kondektur`
--
ALTER TABLE `kondektur`
  ADD PRIMARY KEY (`id_kondektur`),
  ADD KEY `id_akun` (`password`);

--
-- Indexes for table `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id_rute`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `id_bus` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12223;
--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id_driver` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kondektur`
--
ALTER TABLE `kondektur`
  MODIFY `id_kondektur` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `rute`
--
ALTER TABLE `rute`
  MODIFY `id_rute` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bus`
--
ALTER TABLE `bus`
  ADD CONSTRAINT `bus_ibfk_1` FOREIGN KEY (`id_driver`) REFERENCES `driver` (`id_driver`),
  ADD CONSTRAINT `bus_ibfk_2` FOREIGN KEY (`id_kondektur`) REFERENCES `kondektur` (`id_kondektur`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
