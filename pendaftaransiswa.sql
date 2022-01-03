-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2022 at 08:46 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaransiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(5) NOT NULL,
  `nisn` int(20) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat_lengkap` text NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `nama_sekolah` varchar(30) NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `pendidikan_ayah` varchar(15) NOT NULL,
  `pekerjaan_ayah` varchar(40) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `pendidikan_ibu` varchar(15) NOT NULL,
  `pekerjaan_ibu` varchar(40) NOT NULL,
  `jurusan` varchar(15) NOT NULL,
  `foto` text NOT NULL,
  `tahun_ajaran` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `status_ppdb` int(1) NOT NULL,
  `pengumuman` text NOT NULL,
  `nilai_minimum` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`status_ppdb`, `pengumuman`, `nilai_minimum`) VALUES
(1, 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX', 50);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(5) NOT NULL,
  `nama` text NOT NULL,
  `nisn` int(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `hak_akses` varchar(10) NOT NULL DEFAULT 'siswa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `nama`, `nisn`, `password`, `hak_akses`) VALUES
(1, 'Administrator', 1, '202cb962ac59075b964b07152d234b70', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `upload_berkas`
--

CREATE TABLE `upload_berkas` (
  `id` int(5) NOT NULL,
  `nisn` int(20) NOT NULL,
  `kartu_keluarga` text NOT NULL,
  `akte_kelahiran` text NOT NULL,
  `ktp_ayah` text NOT NULL,
  `ktp_ibu` text NOT NULL,
  `kip` text NOT NULL,
  `ijazah_depan` text NOT NULL,
  `ijazah_belakang` text NOT NULL,
  `status_berkas` int(1) NOT NULL DEFAULT 1,
  `pesan_berkas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `upload_nilai`
--

CREATE TABLE `upload_nilai` (
  `id` int(5) NOT NULL,
  `nisn` int(20) NOT NULL,
  `pai` int(3) NOT NULL,
  `ppkn` int(3) NOT NULL,
  `bahasa_indonesia` int(3) NOT NULL,
  `matematika` int(3) NOT NULL,
  `ipa` int(3) NOT NULL,
  `ips` int(3) NOT NULL,
  `bahasa_inggris` int(3) NOT NULL,
  `seni_budaya` int(3) NOT NULL,
  `pjok` int(3) NOT NULL,
  `prakarya` int(3) NOT NULL,
  `mulok` int(3) NOT NULL,
  `pesan_nilai` text NOT NULL,
  `jumlah_nilai` int(4) NOT NULL,
  `keputusan` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_berkas`
--
ALTER TABLE `upload_berkas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_nilai`
--
ALTER TABLE `upload_nilai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `upload_berkas`
--
ALTER TABLE `upload_berkas`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `upload_nilai`
--
ALTER TABLE `upload_nilai`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
