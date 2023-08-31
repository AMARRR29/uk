-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2023 at 08:25 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uk`
--

-- --------------------------------------------------------

--
-- Table structure for table `databuku`
--

CREATE TABLE `databuku` (
  `tanggal` date NOT NULL,
  `nama` varchar(25) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `kode_buku` varchar(6) NOT NULL,
  `waktu_peminjaman` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `datadenda`
--

CREATE TABLE `datadenda` (
  `tanggal` date NOT NULL,
  `kode_buku` varchar(6) NOT NULL,
  `waktu_pinjam` date NOT NULL,
  `pengembalian` date NOT NULL,
  `denda` varchar(13) NOT NULL,
  `pembayaran` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `NISN` int(12) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `namaLengkap` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `NISN`, `username`, `password`, `namaLengkap`) VALUES
(11, 2147483647, 'hamba allah ', '$2y$10$lr9ipUPkPQWK2', 'muhammad syam'),
(12, 123456, 'iki ', '$2y$10$/KnFwGI1vkN.4', 'mrf'),
(13, 971273, 'ojan', '$2y$10$lNlSbN469fIme', 'Muhammad Fauzan'),
(16, 8317372, '123', '$2y$10$VBNUe0Z5GSdAO', 'amar'),
(17, 123415, 'Amar', '$2y$10$pB1KJwUt9X4Op', 'Amar Opiex'),
(18, 853472, 'bmz', '$2y$10$AqBbDYr.sFq5r', 'bmz');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `NISN` varchar(25) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `databuku`
--
ALTER TABLE `databuku`
  ADD PRIMARY KEY (`kode_buku`);

--
-- Indexes for table `datadenda`
--
ALTER TABLE `datadenda`
  ADD UNIQUE KEY `kode_buku` (`kode_buku`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `NISN` (`NISN`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `datadenda`
--
ALTER TABLE `datadenda`
  ADD CONSTRAINT `datadenda_ibfk_1` FOREIGN KEY (`kode_buku`) REFERENCES `databuku` (`kode_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
