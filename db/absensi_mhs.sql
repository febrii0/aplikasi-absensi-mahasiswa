-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2023 at 01:10 PM
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
  `id_kelas` int(10) NOT NULL,
  `id_mhs` int(10) NOT NULL,
  `tanggal` datetime NOT NULL,
  `id_status` int(11) NOT NULL,
  `id_matkul` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(2, '197311242005011001', 'Kurniawan Saputra, S.Kom., M.Kom.', 'kurniawan@gmail.com', 6),
(3, '198002062005011002', 'Asrowardi, S.Kom., M.Kom.', 'imam@gmail.com', 4),
(4, '197206242005012002', 'Dewi Kania Widyawati., S.Kom., M.Kom.', 'dewikania@gmail.com', 5),
(5, '198910232019031011', 'Oki Arifin, S.Kom., M.Cs.', 'okiarifin@gmail.com', 2),
(6, '197609192005011002', 'Eko Win Kenali, S.Kom., M.Cs.', 'ekowin@gmail.com', 1),
(7, '198408162009121004', 'Halim Fathoni, S.T., M.Sc.', 'halim@gmail.com', 7);

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
(1, 21753002, 'Adinda Eli Dahlia', 'adindaelidahlia@gmail.com', 1),
(2, 21753004, 'Aissyah Salsabila', 'aisyah@gmail.com', 1),
(3, 21753005, 'Andri Febriyadi Putra', 'andrifebriyadi@gmail.com', 1),
(4, 21753006, 'Antika Susmita', 'antika@gmail.com', 1),
(5, 21753007, 'Asya Ayati', 'asya@gmail.com', 1),
(6, 21753008, 'Cindy Febriatika', 'cindy@gmail.com', 1),
(7, 21753012, 'Ema Yudiana Cahyani', 'emayudiana@gmail.com', 1),
(8, 21753013, 'Eri Kurniawan', 'erik@gmail.com', 1),
(9, 21753014, 'Feni Marlina', 'fenimarlina@gmail.com', 1),
(10, 21753015, 'Garnis Waningsiun', 'anis@gmail.com', 1),
(11, 21753016, 'Ivan Setiawan', 'ivans@gmail.com', 1),
(12, 21753017, 'Jevi Adriansyah', 'jevi@gmail.com', 1),
(13, 21753018, 'Ketut Putri', 'ketutputri@gmail.com', 1),
(14, 21753019, 'Laelatul Hodijah', 'laelatulh@gmail.com', 1),
(15, 21753020, 'Lulu Hidayah', 'luluuhidayah@gmail.com', 1),
(16, 21753021, 'Martin Gedeon Nababan', 'martin@gmail.com', 1),
(17, 21753025, 'Neyla Sapta Utami', 'naylasapta@gmail.com', 1),
(18, 21753026, 'Nur Aini', 'nuraini@gmail.com', 1),
(19, 21753027, 'Pramesti Cahya Ninggrum', 'pramesti@gmail.com', 1),
(20, 21753028, 'Putri Kartika Yuandari', 'putikartika@gmail.com', 1),
(21, 21753030, 'Rifka Sisiliana', 'rifka@gmail.com', 1),
(22, 21753031, 'Rizky Pratama', 'rizky@gmail.com', 1),
(23, 21753034, 'Sutan Ambia', 'sutanambia@gmail.com', 1),
(24, 21753035, 'Weni Agustin', 'wenii@gmail.com', 1),
(25, 21753036, 'Yolanda Agatha', 'yoland@gmail.com', 1),
(26, 21753037, 'Ade Fatria Indah Fajari', 'adefatria@gmail.com', 2),
(27, 21753038, 'Agata Whindi Febriani', 'agatawhindi@gmail.com', 2),
(28, 21753039, 'Agung Triwijaya', 'agungtri@gmail.com', 2),
(29, 21753040, 'Alifia Rahmanita', 'alifia@gmail.com', 2),
(30, 21753041, 'Anggun Putri Lestari', 'anggunpl@gmail.com', 2),
(31, 21753045, ' Dedi Surahmin', 'dedi@gmail.com', 2),
(32, 21753046, ' Dian Afni Oktavia', 'dian@gmail.com', 2),
(33, 21753047, 'Dwi Ellya', 'dwiellya@gmail.com', 2),
(34, 21753048, 'Emiya Sumanty br Sembiring', 'emiya@gmail.com', 2),
(35, 21753049, 'Febriansyah Agung Tirta', 'febriansyah@gmail.com', 2),
(36, 21753051, 'Hamzah Alfariansyah', 'hamzah@gmail.com', 2),
(37, 21753052, 'Janriswan Rieldi Saragih', 'riswan@gmail.com', 2),
(38, 21753053, 'Kadek Indri Wedayani', 'kadekindri@gmail.com', 2),
(39, 21753054, 'Khaafidhzon Al Furqon', 'khafidhz@gmail.com', 2),
(40, 21753055, 'Latifa Nur Hidayati', 'latifanur@gmail.com', 2),
(41, 21753056, 'M.Dhuha', 'dhuha@gmail.com', 2),
(42, 21753057, 'Meli Dwi Saputri', 'meli@gmail.com', 2),
(43, 21753058, 'Muhamad Apriyansyah', 'apri@gmail.com', 2),
(44, 21753059, 'Mukaromah', 'muka@gmail.com', 2),
(45, 21753061, 'Niken Salendri Wicaksono', 'niken@gmail.com', 2),
(46, 21753062, 'Pandu Riski Rahmadi', 'pandu@gmail.com', 2),
(47, 21753063, 'Putri Anggraini ', 'putriaa@gmail.com', 2),
(48, 21753064, 'Rahma Agustin', 'rahmaagustin@gmail.com', 2),
(49, 21753065, 'Rangga Cahyadi', 'cahyadi@gmail.com', 2),
(50, 21753066, 'Riska Agustina Rahayu', 'riskaa@gmail.com', 2),
(51, 21753067, 'Roziah Rizqi Azzahra', 'zahra@gmail.com', 2),
(52, 21753068, 'Septia Anggraini', 'septi@gmail.com', 2),
(53, 21753069, 'Sifani Amira', 'sipani@gmail.com', 2),
(54, 21753070, 'Syukma Ira Fadhilah', 'syumaira@gmail.com', 2),
(55, 21753071, 'Yoga Fradana', 'yogafrada@gmail.com', 2),
(56, 20753042, 'Akhila Philia Agape', 'akhilaa@gmail.com', 2),
(57, 20753058, 'M. Akmal Farras', 'mfarras@gmail.com', 2),
(58, 21753050, 'Fillyana Tri Purwa Hastuti', 'filiyana@gmail.com', 3),
(59, 21753073, 'Ameliya Rahayu', 'amelia@gmail.com', 3),
(60, 21753075, 'Anggi Alisya Feronika Sormin', 'anggisormin@gmail.com', 3),
(61, 21753076, 'Daffa Surya Septa', 'daffa@gmail.com', 3),
(62, 21753077, 'Eti Nurkholifah', 'etinur@gmail.com', 3),
(63, 21753081, 'Thumberly Raja Siagian', 'thumberlyrs@gmail.com', 3),
(64, 21753082, 'Yunita', 'yunita@gmail.com', 3);

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
  ADD KEY `id_matkul` (`id_matkul`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_mhs` (`id_mhs`);

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
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `status_kehadiran`
--
ALTER TABLE `status_kehadiran`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `status_kehadiran` (`id_status`),
  ADD CONSTRAINT `absensi_ibfk_2` FOREIGN KEY (`id_matkul`) REFERENCES `mata_kuliah` (`id_matkul`),
  ADD CONSTRAINT `absensi_ibfk_3` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `absensi_ibfk_4` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id_mhs`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
