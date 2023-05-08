-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2023 at 06:38 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama_barang` text NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `kategori` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `harga`, `gambar`, `kategori`, `tanggal`) VALUES
(1, 'Indomie Doyeng', 10000, 'Noodllee.png', 1, '2023-01-08 03:50:22'),
(2, 'Nashi Pechel', 15000, 'pechel.png', 1, '2023-01-08 03:51:25'),
(3, 'Nashi Doyeng', 20000, 'Nasdor.png', 2, '2023-01-08 03:52:01'),
(4, 'Ayam Dakar', 15000, 'Ahyam.png', 3, '2023-01-08 03:53:06'),
(5, 'Sotho Sokaraja', 20000, 'soto.png', 3, '2023-01-08 03:53:36'),
(6, 'Nasi Gile', 13000, 'nasigila1.jpg', 4, '2023-01-09 12:47:48'),
(13, 'Mie Indotel', 8000, 'indotel4.jpg', 1, '2023-01-09 12:36:45');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `keterangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `meja`
--

CREATE TABLE `meja` (
  `id` int(11) NOT NULL,
  `nama_pemesan` text NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `no` text NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meja`
--

INSERT INTO `meja` (`id`, `nama_pemesan`, `username`, `email`, `no`, `tanggal`, `waktu`, `pesan`) VALUES
(10, 'ADNAN EGA MAULANA', '', 'adnanega82@gmail.com', '12334', '2023-01-09', '22:23:00', 'lorem ipsum'),
(10, 'Adnan Ega Maulana ', '', 'adnanega82@gmail.com', '083156437871', '2023-01-09', '22:15:00', 'warak'),
(9, 'ADNAN EGA ', 'adnanega', 'adnan@ittelkom-pwt.ac.id', '08000000000', '2023-01-09', '03:19:00', 'booking meja untuk 2 orang');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `username` text NOT NULL,
  `nama_barang` text NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `kategori_barang` int(11) NOT NULL,
  `sistem` text NOT NULL,
  `nama_pemesan` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `metode_bayar` text NOT NULL,
  `bukti_tf` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `meja` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `username`, `nama_barang`, `harga`, `gambar`, `kategori_barang`, `sistem`, `nama_pemesan`, `jumlah`, `metode_bayar`, `bukti_tf`, `status`, `meja`, `waktu`) VALUES
(4, 'gandulers', 'Indomie Doyeng', 10000, 'Noodllee.png', 1, 'Diantar', 'adnan', 2, 'QRIS', '', 0, 0, '2023-01-09 12:11:58'),
(5, 'gandulers', 'Ayam Dakar', 15000, 'Ahyam.png', 3, 'Makan Ditempat', 'lutpi', 2, 'QRIS', '', 0, 1, '2023-01-09 08:09:04'),
(6, 'gandulers', 'Sotho Sokaraja', 20000, 'soto.png', 3, 'Diantar', 'karel', 1, 'COD', '', 0, 0, '2023-01-09 07:54:47');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 1,
  `cavet_id` int(11) NOT NULL DEFAULT 0,
  `timestamps` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `username`, `password`, `role_id`, `cavet_id`, `timestamps`) VALUES
(6, 'cavet1', 'cavet1@ittelkom-pwt.ac.id', 'cavet1', '$2y$10$xl5GJEAp25I5VDhXhSulpOVhY381oR2zA3jgJ8AuopT3U5XfJlrHK', 0, 1, '2023-01-08 11:48:15'),
(7, 'cavet2', 'cavet2@ittelkom-pwt.ac.id', 'cavet2', '$2y$10$hlt5.KpX0Rjt.TJfsvRgiO.a2KqTrkQ5b4Y6LXLeg.MHItsFgk2Lm', 0, 2, '2023-01-08 12:15:01'),
(8, 'cavet3', 'cavet3@ittelkom-pwt.ac.id', 'cavet3', '$2y$10$iAlI0wzzlqaymraHKunUruRF0r8Ilqs4uljibMXF4uCi.qq8O7526', 0, 3, '2023-01-08 12:16:50'),
(9, 'cavet4', 'cavet4@ittelkom-pwt.ac.id', 'cavet4', '$2y$10$6RHwErc4yDassr3IfiNA1eW5sw2qNc55yHwKPc2RO6y/mz8j2JwU6', 0, 4, '2023-01-08 12:17:04'),
(11, 'gandulers', 'gandul@ittelkom-pwt.ac.id', 'gandulers', '$2y$10$mSHEqZnrv15SjIRZNZp8he3i.rxPKwym1Gq7KZjad12dlyKmrB27G', 1, 0, '2023-01-08 12:54:38'),
(12, 'adnanega', 'adnan@ittelkom-pwt.ac.id', 'adnanega', '$2y$10$X.aPY5EfdVSkekYv2cteyuVX2cGgedusCUIJgHZ5.O8FygwWvJ6dG', 1, 0, '2023-01-09 14:06:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori` (`kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
