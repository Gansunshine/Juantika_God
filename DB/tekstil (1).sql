-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2023 at 09:11 AM
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
-- Database: `tekstil`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode_brg` int(11) NOT NULL,
  `nama_brg` varchar(30) NOT NULL,
  `kd_barang` int(11) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `nama_p` varchar(40) NOT NULL,
  `waktu_p` varchar(50) NOT NULL,
  `jumlah_brg` int(30) NOT NULL,
  `tanggal_p` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode_brg`, `nama_brg`, `kd_barang`, `jurusan`, `nama_p`, `waktu_p`, `jumlah_brg`, `tanggal_p`) VALUES
(52, '2', 2, 'X - PPLG 1', 'agan', '09:41', 4, '2023-06-02');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `jurusan`) VALUES
(1, 'X - PPLG 1'),
(2, 'X - PPLG 2'),
(3, 'X - Tekstil 1'),
(4, 'X - Tekstil 2'),
(5, 'X - Otomotif 1'),
(6, 'X - Otomotif 2'),
(7, 'X - TJKT 1'),
(8, 'X - TJKT 2'),
(9, 'X - Mesin 1'),
(10, ' X - Mesin 2'),
(11, 'X - BP 1'),
(12, 'X - BP 2'),
(13, 'X - E 1'),
(14, 'X - E 2'),
(15, 'X - E 3'),
(16, 'X - E 4'),
(17, 'X - TGM 1'),
(18, 'X - TGM 2'),
(19, 'X - MEKA 1'),
(20, 'X - MEKA 2'),
(21, 'XI - RPL 1'),
(22, 'XI - RPL 2'),
(23, 'XI - Tekstil 1'),
(24, 'XI - Tekstil 2'),
(25, 'XI - TKR 1'),
(26, 'XI - TKR 2'),
(27, 'XI - TJKT 1'),
(28, 'XI - TJKT 2'),
(29, 'XI - Mesin 1'),
(30, 'XI - Mesin 2'),
(31, 'XI - BP 1'),
(32, 'XI - BP 2'),
(33, 'XI - E 1'),
(34, 'XI - E 2'),
(35, 'XI - E 3'),
(36, 'XI - E 4'),
(37, 'XI - TGM 1'),
(38, 'XI - TGM 2'),
(39, 'XI - MEKA 1'),
(40, 'XI - MEKA 2');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kate_brg` varchar(50) NOT NULL,
  `tanggal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kate_brg`, `tanggal`) VALUES
(7, 'Alat', 'Tuesday,22-Nov-2022'),
(8, 'Barang', 'Tuesday,22-Nov-2022');

-- --------------------------------------------------------

--
-- Table structure for table `kembali`
--

CREATE TABLE `kembali` (
  `id_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `kelas` varchar(11) NOT NULL,
  `nama_alat` varchar(30) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `jumlah_brg` int(11) NOT NULL,
  `tglpinjam` date NOT NULL,
  `tglkembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kembali`
--

INSERT INTO `kembali` (`id_siswa`, `nama_siswa`, `kelas`, `nama_alat`, `id_brg`, `jumlah_brg`, `tglpinjam`, `tglkembali`) VALUES
(1, 'Aya', 'X - PPLG 1', '3', 3, 10, '2023-05-12', '2023-05-30'),
(2, 'Ahmad', 'X - PPLG 1', '2', 2, 5, '2023-05-30', '2023-06-01'),
(3, 'Ahmad', 'X - PPLG 1', '2', 2, 5, '2023-05-30', '2023-05-30'),
(4, 'Agan Sunarya', 'X - PPLG 1', '2', 2, 4, '2023-05-30', '2023-05-31'),
(6, 'agan', 'X - PPLG 1', '2', 2, 4, '2023-06-02', '2023-05-30'),
(7, 'bpk', 'X - PPLG 1', '10', 10, 5, '2023-05-30', '2023-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `kod_barang` int(11) NOT NULL,
  `name_brg` varchar(100) NOT NULL,
  `stok` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stok`
--

INSERT INTO `stok` (`kod_barang`, `name_brg`, `stok`) VALUES
(65, '2', '12'),
(66, '6', '12'),
(67, '9', '20'),
(68, '4', '1000'),
(69, '13', '20'),
(70, '2', '2'),
(71, '1', '2'),
(72, '4', '12'),
(73, '', ''),
(74, '76', '5'),
(75, '10', '50');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_barang`
--

CREATE TABLE `tabel_barang` (
  `kd_brg` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `stock` int(11) NOT NULL,
  `categori` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_barang`
--

INSERT INTO `tabel_barang` (`kd_brg`, `nama_barang`, `stock`, `categori`) VALUES
(2, 'kertas hvs', 53, 7),
(3, 'Aku bang', 109, 7),
(6, 'rrygtr', 48, 8),
(7, 'lapu lapu', 4, 7),
(9, 'ayam', 21, 7),
(10, 'Kopi', 10, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_brg`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kembali`
--
ALTER TABLE `kembali`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`kod_barang`);

--
-- Indexes for table `tabel_barang`
--
ALTER TABLE `tabel_barang`
  ADD PRIMARY KEY (`kd_brg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `kode_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kembali`
--
ALTER TABLE `kembali`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `stok`
--
ALTER TABLE `stok`
  MODIFY `kod_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `tabel_barang`
--
ALTER TABLE `tabel_barang`
  MODIFY `kd_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`kd_barang`) REFERENCES `tabel_barang` (`kd_brg`) ON DELETE CASCADE;

--
-- Constraints for table `tabel_barang`
--
ALTER TABLE `tabel_barang`
  ADD CONSTRAINT `tabel_barang_ibfk_1` FOREIGN KEY (`categori`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
