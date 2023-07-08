-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jul 2023 pada 10.48
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

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
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id_absen` int(11) NOT NULL,
  `id_mhs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `catatan`
--

CREATE TABLE `catatan` (
  `id_catatan` int(20) NOT NULL,
  `id_absen` int(20) NOT NULL,
  `catatan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(20) NOT NULL,
  `nama_dosen` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hari_kuliah`
--

CREATE TABLE `hari_kuliah` (
  `id_hari` int(20) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam_mulai` datetime NOT NULL,
  `jam_selesai` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(5) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `npm` int(8) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_tlp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `id_matkul` int(5) NOT NULL,
  `nama_matkul` varchar(20) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indeks untuk tabel `catatan`
--
ALTER TABLE `catatan`
  ADD PRIMARY KEY (`id_catatan`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indeks untuk tabel `hari_kuliah`
--
ALTER TABLE `hari_kuliah`
  ADD PRIMARY KEY (`id_hari`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`npm`,`nama_mahasiswa`,`alamat`,`no_tlp`);

--
-- Indeks untuk tabel `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`id_matkul`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `catatan`
--
ALTER TABLE `catatan`
  MODIFY `id_catatan` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `hari_kuliah`
--
ALTER TABLE `hari_kuliah`
  MODIFY `id_hari` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `npm` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  MODIFY `id_matkul` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
