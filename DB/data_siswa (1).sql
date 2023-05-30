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
-- Database: `data_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `ket` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`id`, `nama`, `email`, `ket`) VALUES
(1, 'willi', 'bangwill@gmail.com', 'banggg'),
(2, 'nama', 'bang@gmail.com', 'aduhh');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `ID_siswa` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Nama_siswa` varchar(35) NOT NULL,
  `Kelas` varchar(20) NOT NULL,
  `Jenis_Kelamin` varchar(15) NOT NULL,
  `kehadiran` varchar(11) NOT NULL,
  `tang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`ID_siswa`, `Email`, `Nama_siswa`, `Kelas`, `Jenis_Kelamin`, `kehadiran`, `tang`) VALUES
(3, '111112', 'Friz Ghali Kusuma', 'XI - T1', 'Laki-Laki', 'Izin', '2023-05-29'),
(4, '21222222', 'Hikmal Fadilatul Ikhsan', 'XI - BP 1', 'Laki-Laki', 'Sakit', '2023-05-29'),
(5, '6662123', 'Sansan Faturrahman', 'XI - E1', 'Laki-Laki', 'Hadir', '2023-05-29'),
(6, '212212', 'Bayu Satrio', 'XI - TJKT 1', 'Laki-Laki', 'Izin', '2023-05-29'),
(7, '1234532', 'Dwiky Juliansyah', 'XI - E1', 'Laki-Laki', 'Sakit', '2023-05-29'),
(8, '121212', 'Aku bang', 'XI - PPLG 2', 'Laki-Laki', 'Hadir', '2023-05-30'),
(9, '21222222', 'Friz Ghali Kusuma', 'XT', 'Laki-Laki', 'Hadir', '2023-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `tb_level`
--

CREATE TABLE `tb_level` (
  `id` int(11) NOT NULL,
  `gabungan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_level`
--

INSERT INTO `tb_level` (`id`, `gabungan`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `nis` int(11) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `level` enum('User','Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `user`, `nis`, `pass`, `level`) VALUES
(1, 'Haii', 212254321, '2023', 'User'),
(2, 'Agan Sunarya', 212210434, '969680', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`ID_siswa`);

--
-- Indexes for table `tb_level`
--
ALTER TABLE `tb_level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `ID_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_level`
--
ALTER TABLE `tb_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
