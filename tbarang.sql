-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2024 at 01:24 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbarang`
--

CREATE TABLE `tbarang` (
  `id_barang` int(10) NOT NULL,
  `kode_barang` varchar(15) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `jumlah` int(4) NOT NULL,
  `satuan` varchar(15) NOT NULL,
  `tanggal_diterima` date NOT NULL,
  `tanggal_simpan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbarang`
--

INSERT INTO `tbarang` (`id_barang`, `kode_barang`, `nama_barang`, `jumlah`, `satuan`, `tanggal_diterima`, `tanggal_simpan`) VALUES
(5, 'VPC-2024-003', 'Mouse', 4, 'Unit', '2024-04-30', '2024-05-24 14:46:09'),
(6, 'VPC-2024-001', 'Komputer', 5, 'Unit', '2024-04-19', '2024-05-24 15:01:02'),
(7, '', '', 0, '--Pilih--', '0000-00-00', '2024-05-24 15:14:28'),
(8, 'INV-221', 'Laptop', 1, 'Unit', '2024-05-25', '2024-05-24 15:15:17'),
(9, 'infj-vv1', 'Laptop', 100, 'Unit', '2024-05-01', '2024-05-27 07:01:04'),
(10, 'INV-221', 'KULKAS', 100, 'Unit', '2024-05-27', '2024-05-27 07:01:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbarang`
--
ALTER TABLE `tbarang`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbarang`
--
ALTER TABLE `tbarang`
  MODIFY `id_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
