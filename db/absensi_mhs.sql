-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2023 at 12:33 PM
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
-- Database: `absensi_mhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id_absen` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `id_status` int(11) NOT NULL,
  `id_matkul` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id_absen`, `tanggal`, `id_status`, `id_matkul`) VALUES
(1, '2023-07-10 09:47:52', 1, 1),
(2, '2023-07-10 09:47:52', 1, 2),
(3, '2023-07-10 09:48:17', 1, 3),
(4, '2023-07-10 09:48:17', 1, 4),
(5, '2023-07-10 09:48:39', 1, 5),
(6, '2023-07-10 09:48:39', 1, 6),
(7, '2023-07-10 09:48:59', 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_matkul` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nip`, `nama_dosen`, `email`, `id_matkul`) VALUES
(1, '199010082022031005', 'Panji Andhika Pratomo, S. Kom., M.T.I', 'panjiandhika@gmail.com', 3),
(4, '197311242005011001', 'Kurniawan Saputra, S.Kom., M.Kom.', 'kurniawan@gmail.com', 6),
(5, '198002062005011002', 'Imam Asrowardi, S.Kom., M.Kom.', 'imam@gmail.com', 4);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES
(1, 'Manajemen Informatika - A'),
(2, 'Manajemen Informatika - B'),
(3, 'Manajemen Informatika - C');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mhs` int(11) NOT NULL,
  `npm` int(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mhs`, `npm`, `nama`, `email`, `id_kelas`) VALUES
(1, 21753038, 'Agata Whindi Febriani', 'agatawhindi@gmail.com', 2),
(2, 21753040, 'Alifia Rahmanita', 'alifia@gmail.com', 2),
(3, 21753047, 'Dwi Elya', 'dwielya@gmail.com', 2),
(4, 21753049, 'Febriansyah Agung Tirta', 'febriansyahagungt@gmail.com', 1),
(5, 21753045, 'Dedi Surahmin', 'dediii@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `id_matkul` int(11) NOT NULL,
  `nama_matkul` varchar(50) NOT NULL,
  `kode_matkul` varchar(10) NOT NULL,
  `id_dosen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`id_matkul`, `nama_matkul`, `kode_matkul`, `id_dosen`) VALUES
(1, 'Pemrograman SQL', 'PMI 1417', 0),
(2, 'Pemrograman Web Framework', 'PMI 1416', 0),
(3, 'Kecakapan Antar Personal', 'PMI 1415', 0),
(4, 'Rancang Bangun Jaringan Komputer', 'PMI 1411', 0),
(5, 'Kesehatan dan Keselamatan Kerja', 'PKD 1311', 0),
(6, 'Pengantar Kewirausahaan', 'PKD 1131', 0),
(7, 'Teknik Penulisan Karya Ilmiah', 'PKU 1411', 0);

-- --------------------------------------------------------

--
-- Table structure for table `status_kehadiran`
--

CREATE TABLE `status_kehadiran` (
  `id_status` int(11) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `status_kehadiran`
--

INSERT INTO `status_kehadiran` (`id_status`, `keterangan`) VALUES
(1, 'Hadir'),
(2, 'Izin'),
(3, 'Sakit'),
(4, 'Alpa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absen`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_matkul` (`id_matkul`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`),
  ADD KEY `id_matkul` (`id_matkul`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mhs`),
  ADD UNIQUE KEY `npm` (`npm`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indexes for table `status_kehadiran`
--
ALTER TABLE `status_kehadiran`
  ADD PRIMARY KEY (`id_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `status_kehadiran`
--
ALTER TABLE `status_kehadiran`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `status_kehadiran` (`id_status`),
  ADD CONSTRAINT `absensi_ibfk_2` FOREIGN KEY (`id_matkul`) REFERENCES `mata_kuliah` (`id_matkul`);

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_ibfk_2` FOREIGN KEY (`id_matkul`) REFERENCES `mata_kuliah` (`id_matkul`);

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
