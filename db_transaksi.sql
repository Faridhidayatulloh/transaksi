-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2024 at 12:05 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_transaksi`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga`, `stock`) VALUES
(1, 'kulkas', 1500000, 15),
(2, 'sepeda listrik', 3000000, 10),
(3, 'AC', 1500000, 5),
(4, 'mobil', 10000, 5),
(5, 'TV', 2000000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama_customer` varchar(13) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `no_telp`, `email`) VALUES
(1, 'jaka', '0865777', 'jaya@gmail.com'),
(5, 'farid', '0888', 'jahav'),
(6, 'ramzie', '08877665', 'ramziecintadamai');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail`
--

CREATE TABLE `transaksi_detail` (
  `id_transaksi_detail` int(30) NOT NULL,
  `id_transaksi_header` int(30) NOT NULL,
  `id_barang` int(20) NOT NULL,
  `qty` int(20) NOT NULL,
  `harga` int(20) NOT NULL,
  `jumlah` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi_detail`
--

INSERT INTO `transaksi_detail` (`id_transaksi_detail`, `id_transaksi_header`, `id_barang`, `qty`, `harga`, `jumlah`) VALUES
(1, 1, 2, 1, 3000000, 3000000),
(2, 1, 1, 1, 1500000, 1500000),
(3, 2, 2, 1, 3000000, 3000000),
(4, 2, 1, 1, 1500000, 1500000),
(5, 3, 2, 1, 3000000, 3000000),
(6, 3, 1, 1, 1500000, 1500000),
(7, 4, 4, 1, 10000, 10000),
(8, 4, 1, 1, 1500000, 1500000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_header`
--

CREATE TABLE `transaksi_header` (
  `id_transaksi_header` int(30) NOT NULL,
  `id_customer` int(30) NOT NULL,
  `nomor_transaksi` varchar(15) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `total` int(20) NOT NULL,
  `diskon` int(20) NOT NULL,
  `ppn` int(20) NOT NULL,
  `grand_total` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi_header`
--

INSERT INTO `transaksi_header` (`id_transaksi_header`, `id_customer`, `nomor_transaksi`, `tanggal_transaksi`, `total`, `diskon`, `ppn`, `grand_total`) VALUES
(1, 1, 'TRX503307051020', '2024-05-10', 4500000, 5, 11, 4770000),
(2, 1, 'TRX464907051020', '2024-05-10', 4500000, 0, 11, 4995000),
(3, 1, 'TRX055007051020', '2024-05-06', 4500000, 10, 11, 4545000),
(4, 6, 'TRX415809051020', '2024-05-15', 1510000, 5, 11, 1600600);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD PRIMARY KEY (`id_transaksi_detail`),
  ADD KEY `id_transaksi_header` (`id_transaksi_header`);

--
-- Indexes for table `transaksi_header`
--
ALTER TABLE `transaksi_header`
  ADD PRIMARY KEY (`id_transaksi_header`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  MODIFY `id_transaksi_detail` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transaksi_header`
--
ALTER TABLE `transaksi_header`
  MODIFY `id_transaksi_header` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD CONSTRAINT `transaksi_detail_ibfk_1` FOREIGN KEY (`id_transaksi_header`) REFERENCES `transaksi_header` (`id_transaksi_header`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
