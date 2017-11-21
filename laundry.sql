-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 21, 2017 at 06:13 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id3684741_laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `antar`
--

CREATE TABLE `antar` (
  `id_antar` int(30) NOT NULL,
  `id_kurir` int(30) NOT NULL,
  `id_customer` int(30) NOT NULL,
  `id_barang` int(30) NOT NULL,
  `tgl_antar` date NOT NULL,
  `wkt_antar` int(30) NOT NULL,
  `total_bayar` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `antar`
--

INSERT INTO `antar` (`id_antar`, `id_kurir`, `id_customer`, `id_barang`, `tgl_antar`, `wkt_antar`, `total_bayar`) VALUES
(601, 501, 106, 202, '2017-11-01', 1200, 50000),
(604, 505, 111, 206, '2017-10-10', 16, 70);

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(15) NOT NULL,
  `nama_barang` varchar(40) NOT NULL,
  `merek_barang` varchar(40) NOT NULL,
  `ukuran` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `merek_barang`, `ukuran`) VALUES
(201, 'Sepatu', 'Vans', '39'),
(202, 'Sepatu', 'Converse', '40'),
(203, 'tas', 'converse', 'besar'),
(206, 'Sneakers', 'Adidas', '38');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(10) NOT NULL,
  `nama_customer` varchar(40) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `alamat`, `no_telp`) VALUES
(101, 'Febrionaldy', 'Jalan Sekolah No 16 Rumbai', '081365615580'),
(102, 'Saarah Shofianing Tyas', 'Jalan Kurnia No 39 B', '081365615590'),
(104, 'Sigit Prasetyo', 'Jalan Harapan Rumbai', '09753214789'),
(106, 'Annisa Harlina', 'Jalan Limbungan', '0813243754854'),
(107, 'Rahma Ardelia', 'Umban Sari Atas Kompleks Perumahan Dosen PCR B14', '09762372381912'),
(108, 'Muhammad Satria', 'Jalan Berdikari No 10', '09715361832734'),
(111, 'Defri Gustianda', 'Jalan Cut Nyak Dien', '089912345670');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_pegawai` int(30) NOT NULL,
  `nama_pegawai` varchar(40) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_pegawai`, `nama_pegawai`, `jenis_kelamin`, `tgl_lahir`, `alamat`, `username`, `password`) VALUES
(1, 'Rio', 'Laki-laki', '1997-02-26', 'Jalan Sekolah No 16 Rumbai', 'rio', '123'),
(4, 'Saarah', 'Perempuan', '1997-08-25', 'Jalan Harapan Rumbai', 'sarah', '123'),
(6, 'Devina Windira', 'Perempuan', '2017-11-20', 'Jalan Berdikari', 'devinawindira', '123'),
(9, 'Priska Yuni Saputri', 'Perempuan', '1997-03-08', 'Jalan Belanak 6', 'priska', '123'),
(11, 'Alfajri', 'laki-laki', '1997-10-23', 'Panam Pekanbaru', 'al', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `kurir`
--

CREATE TABLE `kurir` (
  `id_kurir` int(50) NOT NULL,
  `nama_kurir` varchar(50) NOT NULL,
  `no_telp` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kurir`
--

INSERT INTO `kurir` (`id_kurir`, `nama_kurir`, `no_telp`) VALUES
(501, 'Nurhediyati', '081324567834'),
(502, 'Nadya Ceyaaa', '081365612345'),
(505, 'Adly Gatra', '09871234567');

-- --------------------------------------------------------

--
-- Table structure for table `melaundry`
--

CREATE TABLE `melaundry` (
  `id_laundry` int(20) NOT NULL,
  `id_pegawai` int(20) NOT NULL,
  `id_customer` int(20) NOT NULL,
  `id_barang` int(20) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `waktu` varchar(10) NOT NULL,
  `jenis_laundry` varchar(30) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `melaundry`
--

INSERT INTO `melaundry` (`id_laundry`, `id_pegawai`, `id_customer`, `id_barang`, `tgl_masuk`, `waktu`, `jenis_laundry`, `jumlah`, `harga`) VALUES
(2, 1, 108, 202, '2017-11-02', '12:00', 'Repaint Canvas', 1, 65000),
(3, 4, 107, 202, '2017-11-02', '10:00', 'Unyellowing', 1, 30000),
(4, 1, 108, 203, '2017-11-01', '7:00', 'Repaint Bag leather', 1, 150000),
(8, 9, 107, 206, '2017-10-11', '20:00', 'Repaint Bag leather', 2, 70000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antar`
--
ALTER TABLE `antar`
  ADD PRIMARY KEY (`id_antar`),
  ADD KEY `id_kurir` (`id_kurir`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_barang` (`id_barang`);

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
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `kurir`
--
ALTER TABLE `kurir`
  ADD PRIMARY KEY (`id_kurir`);

--
-- Indexes for table `melaundry`
--
ALTER TABLE `melaundry`
  ADD PRIMARY KEY (`id_laundry`),
  ADD KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_barang` (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antar`
--
ALTER TABLE `antar`
  MODIFY `id_antar` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=605;
--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_pegawai` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `kurir`
--
ALTER TABLE `kurir`
  MODIFY `id_kurir` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=506;
--
-- AUTO_INCREMENT for table `melaundry`
--
ALTER TABLE `melaundry`
  MODIFY `id_laundry` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `antar`
--
ALTER TABLE `antar`
  ADD CONSTRAINT `antar_ibfk_1` FOREIGN KEY (`id_kurir`) REFERENCES `kurir` (`id_kurir`),
  ADD CONSTRAINT `antar_ibfk_2` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `antar_ibfk_3` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`);

--
-- Constraints for table `melaundry`
--
ALTER TABLE `melaundry`
  ADD CONSTRAINT `melaundry_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `melaundry_ibfk_2` FOREIGN KEY (`id_pegawai`) REFERENCES `karyawan` (`id_pegawai`),
  ADD CONSTRAINT `melaundry_ibfk_3` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
