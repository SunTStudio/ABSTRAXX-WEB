-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2023 at 09:45 AM
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
-- Database: `abbstraxx`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `password_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `password_admin`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id_appointment` int(11) NOT NULL,
  `nama_fotografer` varchar(255) DEFAULT NULL,
  `tanggal_appointment` date DEFAULT NULL,
  `nama_users` varchar(255) DEFAULT NULL,
  `notelp_koor` varchar(255) DEFAULT NULL,
  `keterangan_appointment` varchar(255) DEFAULT NULL,
  `tempat_appointment` varchar(255) DEFAULT NULL,
  `status_appointment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id_appointment`, `nama_fotografer`, `tanggal_appointment`, `nama_users`, `notelp_koor`, `keterangan_appointment`, `tempat_appointment`, `status_appointment`) VALUES
(1, 'Latip Dwi', '2023-12-26', 'Yanuar Aji', '0384384384', 'Survei', 'Sleman,Yk', 'Sudah'),
(2, 'Thori Muh', '2023-12-22', '2023-12-22', '0627372823', 'Survei', ' Sleman  ', 'Sudah'),
(3, 'Thori Muh', '2023-12-01', 'Mahsun', '08236262738', ' Survei Lokasi', 'Pundung,Sleman ', ''),
(4, 'Thori Muh', '2023-12-04', 'Yusuf', '02637277', ' Makanan Makan', 'Sleman ', ''),
(5, 'Thori Muh', '2023-12-12', '2023-12-12', '08637438882', ' Turu', ' Pundung  ', 'Sudah'),
(6, 'Thori Muh', '2023-12-12', 'Ilhan', '08637438882', 'Survei Tempat Wedding', 'Pundung ', ''),
(8, 'Latip Dwi', '2023-11-08', 'Mahsun', '032834838', 'Survei dan Izin Kepolisian', 'Sleman ', 'Sudah');

-- --------------------------------------------------------

--
-- Table structure for table `fotografer`
--

CREATE TABLE `fotografer` (
  `id_fotografer` int(11) NOT NULL,
  `nama_fotografer` varchar(255) NOT NULL,
  `spesialis_fotografer` varchar(255) NOT NULL,
  `notelp_fotografer` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fotografer`
--

INSERT INTO `fotografer` (`id_fotografer`, `nama_fotografer`, `spesialis_fotografer`, `notelp_fotografer`) VALUES
(1, 'Thori Muh', 'Fotografer', '085867543212'),
(2, 'Latip Dwi', 'Editor', '088283761623');

-- --------------------------------------------------------

--
-- Table structure for table `monitoring`
--

CREATE TABLE `monitoring` (
  `id_monitoring` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `nama_users` varchar(255) NOT NULL,
  `detail_users` varchar(255) NOT NULL,
  `notelp_users` varchar(30) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `lokasi_users` varchar(255) NOT NULL,
  `update_monitoring` int(11) NOT NULL,
  `progress_monitoring` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `monitoring`
--

INSERT INTO `monitoring` (`id_monitoring`, `id_users`, `nama_users`, `detail_users`, `notelp_users`, `tanggal_pesan`, `lokasi_users`, `update_monitoring`, `progress_monitoring`) VALUES
(4, 54, 'kafka', ' Rabi ambek Kafka ', '085868144268', '2024-01-20', ' Astrall Express', 1, 'Proses Input Data'),
(6, 44, 'mahsun', ' PhotoStreet', '085868144268', '2024-11-01', ' Sleman', 1, 'Proses Input Data'),
(9, 55, 'Pelanggan', 'Makan enak ', '085868144268', '2024-11-01', ' Sleman', 4, 'Proses Input Data'),
(15, 56, 'inami', ' Wedding Shoot', '085868144268', '2024-11-01', 'Sleman', 3, 'Pembayaran DP');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `nama_users` varchar(255) NOT NULL,
  `password_users` varchar(255) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `detail_users` varchar(30) NOT NULL,
  `kontrak_users` varchar(255) NOT NULL,
  `notelp_users` varchar(20) NOT NULL,
  `email_users` varchar(255) NOT NULL,
  `alamat_users` varchar(20) NOT NULL,
  `upload_users` varchar(255) NOT NULL,
  `dp_users` int(30) NOT NULL,
  `fp_users` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `nama_users`, `password_users`, `tanggal_pesan`, `detail_users`, `kontrak_users`, `notelp_users`, `email_users`, `alamat_users`, `upload_users`, `dp_users`, `fp_users`) VALUES
(1, 'Yanuar Aji', 'yanuar', '2023-12-23', 'Paket Satu', '', '085343434834', 'yanuar@gmail.com', 'Karangrejo', '', 0, 0),
(5, 'Iqbal', '', '2023-12-20', 'Paket Tiga', '', '085343434834', '', ' Prambanan', '', 0, 0),
(42, 'Ilhan Maulana', '', '2023-12-20', 'Paket Satu', '', '085868144268', '', 'Pundung,Nogotirto,Ga', '', 0, 0),
(43, 'Thori', '', '0000-00-00', 'Paket Satu', '', '086348432832', '', 'Indonesia Raya', '', 0, 0),
(44, 'mahsun', 'mahsun', '2024-11-01', ' PhotoStreet', '', '085868144268', '', ' Sleman', '', 0, 0),
(45, 'Ilhan', '', '2023-12-19', 'Paket Satu', '', '085868144268', '', 'Pundung,Nogotirto,Ga', '', 0, 0),
(46, 'Mahsun', '', '0000-00-00', 'Paket Satu', '', '085868144268', '', 'Yogyakarta,Indonesia', '', 0, 0),
(47, 'Yanuar', '', '0000-00-00', 'Paket Satu', '', '086348432832', 'yanuar@gmail.com', ' COncat', '', 0, 0),
(51, 'Yusuf', '', '2024-03-07', ' Paket dua', '', '0842428353', '', ' Sleman YK', '', 0, 0),
(53, 'nanda', 'nanda', '0000-00-00', '', '', '086348432832', '', '', '', 0, 0),
(54, 'kafka', 'kafka', '2024-01-20', ' Rabi ambek Kafka ', '', '085868144268', '', ' Astrall Express', '', 0, 0),
(55, 'Pelanggan', '1234', '2024-11-01', 'paket tiga', '', '085868144268', 'pelanggan@gmail.com', ' Sleman', '', 2802000, 0),
(56, 'inami', 'inami', '2024-11-01', 'paket dua', 'sudah', '085868144268', 'inami@gmail.com', 'Sleman', '', 1202000, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id_appointment`);

--
-- Indexes for table `fotografer`
--
ALTER TABLE `fotografer`
  ADD PRIMARY KEY (`id_fotografer`);

--
-- Indexes for table `monitoring`
--
ALTER TABLE `monitoring`
  ADD PRIMARY KEY (`id_monitoring`),
  ADD KEY `id_user` (`id_users`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id_appointment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `fotografer`
--
ALTER TABLE `fotografer`
  MODIFY `id_fotografer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `monitoring`
--
ALTER TABLE `monitoring`
  MODIFY `id_monitoring` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `monitoring`
--
ALTER TABLE `monitoring`
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
