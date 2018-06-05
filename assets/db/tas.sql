-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2018 at 03:34 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tas`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id_absensi` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id_absensi`, `tanggal`, `id_user`) VALUES
(1, '2018-05-27', 2),
(2, '2018-05-27', 10),
(3, '2018-05-26', 9);

-- --------------------------------------------------------

--
-- Table structure for table `bahan`
--

CREATE TABLE `bahan` (
  `id_bahan` int(11) NOT NULL,
  `nama_bahan` varchar(45) DEFAULT NULL,
  `jenis` varchar(20) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `warna` varchar(45) DEFAULT NULL,
  `satuan` varchar(45) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bahan`
--

INSERT INTO `bahan` (`id_bahan`, `nama_bahan`, `jenis`, `jumlah`, `warna`, `satuan`, `harga`) VALUES
(1, 'levis', 'kain', 50, 'merah', 'gulung', 200000),
(2, 'levis A', 'kain', 20, 'biru', 'gulung', 210000),
(3, 'levis B', 'kain', 15, 'hitam', 'gulung', 195000),
(4, 'lapis tipe A', 'kain', 10, 'hitam', 'gulung', 100000),
(5, 'resleting', 'bahan B', 100, 'N', 'bundle', 5000),
(6, 'Canvas BB', 'kain kanvas bagus', 20, 'hijau', 'meter', 25000),
(9, NULL, NULL, 5, NULL, NULL, 150000);

-- --------------------------------------------------------

--
-- Table structure for table `inventaris`
--

CREATE TABLE `inventaris` (
  `id_inventaris` int(11) NOT NULL,
  `nama_inventaris` varchar(45) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `usia_bulan` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inventaris`
--

INSERT INTO `inventaris` (`id_inventaris`, `nama_inventaris`, `jumlah`, `usia_bulan`, `harga`) VALUES
(1, 'mesin jahit', 2, 60, 1750000),
(2, 'Alat Sablon', 2, 12, 400000),
(3, 'jarum', 2, 1, 25000),
(4, 'gunting', 3, 3, 5000),
(5, 'meteran', 2, 24, 5000),
(6, 'laptop', 1, 60, 6000000),
(7, 'smartphone', 1, 60, 2500000),
(8, 'Meja Jahit', 5, 10, 150000);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama_karyawan` varchar(45) DEFAULT NULL,
  `bagian` varchar(45) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `bagian`, `telp`) VALUES
(1, 'edi', 'Gudang', '1029384756'),
(2, 'paijo', 'Gudang', '08239876t2'),
(3, 'seinse', 'produksi', '01238734'),
(4, 'maina', 'produksi', '0987349823'),
(5, 'hengki', 'produksi', '9283764'),
(7, 'Samuel', 'produksi', '085730269939');

-- --------------------------------------------------------

--
-- Table structure for table `modal`
--

CREATE TABLE `modal` (
  `id_modal` int(11) NOT NULL,
  `modal` varchar(45) DEFAULT NULL,
  `ket` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `modal`
--

INSERT INTO `modal` (`id_modal`, `modal`, `ket`) VALUES
(1, '12635000', 'modal kas'),
(2, '27646000', 'modal utang');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` int(11) NOT NULL,
  `nama_pembeli` varchar(45) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama_pembeli`, `alamat`, `telp`) VALUES
(1, 'nisa', 'malang', '98765'),
(2, 'syarif', 'malang', '09876543');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_bahan_baku`
--

CREATE TABLE `pembelian_bahan_baku` (
  `id_pembelian_bahan` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `total_pengeluaran` int(11) DEFAULT NULL,
  `bahan_id_bahan` int(11) NOT NULL,
  `supplier_id_supplier` int(11) NOT NULL,
  `ket` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pembelian_bahan_baku`
--

INSERT INTO `pembelian_bahan_baku` (`id_pembelian_bahan`, `tanggal`, `total_pengeluaran`, `bahan_id_bahan`, `supplier_id_supplier`, `ket`) VALUES
(1, '2018-03-13', 1200000, 1, 2, NULL),
(2, '2018-02-13', 850000, 2, 1, NULL),
(3, '2018-04-13', 570000, 3, 2, 'hutang'),
(4, '2018-04-12', 76000, 3, 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id_pengeluaran` int(11) NOT NULL,
  `jenis_pengeluaran` varchar(45) DEFAULT NULL,
  `tangaal` date DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `ket` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`id_pengeluaran`, `jenis_pengeluaran`, `tangaal`, `jumlah`, `ket`) VALUES
(1, 'Bahan baku', NULL, 3220000, 'lunas'),
(2, 'Pegawai', NULL, 1350000, 'lunas'),
(3, 'Operasional', NULL, 300000, 'lunas'),
(4, 'Sewa', NULL, 1220000, 'hutang');

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id_pengiriman` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengiriman`
--

INSERT INTO `pengiriman` (`id_pengiriman`, `tanggal`, `status`) VALUES
(1, '2018-04-14', 'proses'),
(2, '2018-04-14', 'proses');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `jumlah_pembayaran` int(11) DEFAULT NULL,
  `produk_id_produk` int(11) NOT NULL,
  `transaksi_id_transaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id_penjualan`, `jumlah`, `jumlah_pembayaran`, `produk_id_produk`, `transaksi_id_transaksi`) VALUES
(1, 2, 350000, 1, 1),
(2, 1, 150000, 1, 1),
(3, 3, 230000, 4, 2),
(4, 2, 170000, 3, 3),
(5, 10, 500000, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) DEFAULT NULL,
  `warna` varchar(45) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `satuan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `warna`, `harga`, `stok`, `satuan`) VALUES
(1, 'TS001', 'merah', 150000, 25, 'biji'),
(2, 'TS002', 'biru', 165000, 15, 'biji'),
(3, 'TS003', 'merah biru', 185000, 10, 'biji'),
(4, 'TS004', 'merah hitam', 170000, 5, 'biji');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(45) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `alamat`, `telp`) VALUES
(1, 'CV sinar k', 'malang', '29837465678'),
(2, 'CV sinar HK', 'Batu', '0928763478'),
(3, 'CV Bina Kar', 'Singosari', '19283746738'),
(4, 'CV sinar maju', 'Malang', '9283764563');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `karyawan_id_karyawan` int(11) NOT NULL,
  `pengiriman_id_pengiriman` int(11) NOT NULL,
  `total_transaksi` int(11) DEFAULT NULL,
  `pembeli_id_pembeli` int(11) NOT NULL,
  `ket` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tanggal`, `karyawan_id_karyawan`, `pengiriman_id_pengiriman`, `total_transaksi`, `pembeli_id_pembeli`, `ket`) VALUES
(1, '2018-01-13', 1, 1, 450000, 1, NULL),
(2, '2018-04-13', 1, 2, 570000, 2, 'hutang'),
(3, '2018-03-09', 2, 2, 230000, 2, NULL),
(4, '2018-02-06', 2, 1, 160000, 1, 'hutang');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(55) DEFAULT NULL,
  `no_hp` int(11) DEFAULT NULL,
  `jenis_kelamin` tinyint(1) DEFAULT NULL,
  `alamat` text,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `level` varchar(15) DEFAULT NULL,
  `code` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `no_hp`, `jenis_kelamin`, `alamat`, `email`, `password`, `level`, `code`) VALUES
(1, 'satria B', 23987482, 1, 'mvdlk', 'satriab@gmail.com', '', 'user', 'SA'),
(2, 'saya', 98765, 0, 'malang', 'admin@gmail.com', 'admin', 'admin', 'AD'),
(3, 'nawawi', 234598765, 1, 'malang', 'nawawi@gmail.com', 'admin', 'user', 'NA'),
(5, 'user', 98765, 1, 'user', 'user@gmail.com', 'user', 'user', 'US'),
(6, 'Satria Bagus', 9876, 1, 'malang', 'satria@gmail.com', '', 'logistik', 'SA'),
(7, 'nisa', 2147483647, 0, 'malang', 'nisa@gmail.com', 'admin', 'akuntansi', 'NI'),
(9, 'imam', 2147483647, 1, 'malang', 'imam@gmail.com', 'admin', 'hrd', 'IM'),
(10, 'syarif', 2147483647, 1, 'sukodono', 'syarif@gmail.com', 'admin', 'logistik', 'SY');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absensi`,`id_user`),
  ADD KEY `fk_absensi_user1_idx` (`id_user`);

--
-- Indexes for table `bahan`
--
ALTER TABLE `bahan`
  ADD PRIMARY KEY (`id_bahan`);

--
-- Indexes for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id_inventaris`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `modal`
--
ALTER TABLE `modal`
  ADD PRIMARY KEY (`id_modal`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indexes for table `pembelian_bahan_baku`
--
ALTER TABLE `pembelian_bahan_baku`
  ADD PRIMARY KEY (`id_pembelian_bahan`),
  ADD KEY `fk_pembelian_bahan_baku_bahan1_idx` (`bahan_id_bahan`),
  ADD KEY `fk_pembelian_bahan_baku_supplier1_idx` (`supplier_id_supplier`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD KEY `fk_penjualan_produk1_idx` (`produk_id_produk`),
  ADD KEY `fk_penjualan_transaksi1_idx` (`transaksi_id_transaksi`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `fk_transaksi_karyawan1_idx` (`karyawan_id_karyawan`),
  ADD KEY `fk_transaksi_pengiriman1_idx` (`pengiriman_id_pengiriman`),
  ADD KEY `fk_transaksi_pembeli1_idx` (`pembeli_id_pembeli`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `bahan`
--
ALTER TABLE `bahan`
  MODIFY `id_bahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `id_inventaris` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `modal`
--
ALTER TABLE `modal`
  MODIFY `id_modal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id_pembeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pembelian_bahan_baku`
--
ALTER TABLE `pembelian_bahan_baku`
  MODIFY `id_pembelian_bahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id_pengeluaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id_pengiriman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `fk_absensi_user1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pembelian_bahan_baku`
--
ALTER TABLE `pembelian_bahan_baku`
  ADD CONSTRAINT `fk_pembelian_bahan_baku_bahan1` FOREIGN KEY (`bahan_id_bahan`) REFERENCES `bahan` (`id_bahan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pembelian_bahan_baku_supplier1` FOREIGN KEY (`supplier_id_supplier`) REFERENCES `supplier` (`id_supplier`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `fk_penjualan_produk1` FOREIGN KEY (`produk_id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_penjualan_transaksi1` FOREIGN KEY (`transaksi_id_transaksi`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_transaksi_karyawan1` FOREIGN KEY (`karyawan_id_karyawan`) REFERENCES `karyawan` (`id_karyawan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_transaksi_pembeli1` FOREIGN KEY (`pembeli_id_pembeli`) REFERENCES `pembeli` (`id_pembeli`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_transaksi_pengiriman1` FOREIGN KEY (`pengiriman_id_pengiriman`) REFERENCES `pengiriman` (`id_pengiriman`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
