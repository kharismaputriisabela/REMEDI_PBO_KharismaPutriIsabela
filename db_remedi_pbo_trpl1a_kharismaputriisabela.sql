-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 14, 2026 at 02:08 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_remedi_pbo_trpl1a_kharismaputriisabela`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_reservasi`
--

CREATE TABLE `tabel_reservasi` (
  `id_reservasi` int NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `tanggal_booking` date NOT NULL,
  `durasi_jam` int NOT NULL,
  `tarif_dasar_per_jam` decimal(10,2) NOT NULL,
  `jenis_paket` enum('Regular','Premium','Event') NOT NULL,
  `tipe_background` varchar(100) DEFAULT NULL,
  `cetak_foto_lembar` int DEFAULT NULL,
  `kuota_talent_orang` int DEFAULT NULL,
  `layanan_makeup` tinyint(1) DEFAULT NULL,
  `nama_lokasi_luar` varchar(100) DEFAULT NULL,
  `biaya_transportasi_tim` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_reservasi`
--

INSERT INTO `tabel_reservasi` (`id_reservasi`, `nama_pelanggan`, `tanggal_booking`, `durasi_jam`, `tarif_dasar_per_jam`, `jenis_paket`, `tipe_background`, `cetak_foto_lembar`, `kuota_talent_orang`, `layanan_makeup`, `nama_lokasi_luar`, `biaya_transportasi_tim`) VALUES
(1, 'Andi', '2026-07-01', 2, 50000.00, 'Regular', 'Studio Putih', 5, NULL, NULL, NULL, NULL),
(2, 'Budi', '2026-07-02', 3, 50000.00, 'Regular', 'Studio Hitam', 10, NULL, NULL, NULL, NULL),
(3, 'Citra', '2026-07-03', 1, 50000.00, 'Regular', 'Outdoor', 3, NULL, NULL, NULL, NULL),
(4, 'Dewi', '2026-07-04', 2, 50000.00, 'Regular', 'Minimalist', 4, NULL, NULL, NULL, NULL),
(5, 'Eko', '2026-07-05', 2, 50000.00, 'Regular', 'Vintage', 6, NULL, NULL, NULL, NULL),
(6, 'Fajar', '2026-07-06', 1, 50000.00, 'Regular', 'Colorful', 2, NULL, NULL, NULL, NULL),
(7, 'Gina', '2026-07-07', 3, 50000.00, 'Regular', 'Studio Natural', 8, NULL, NULL, NULL, NULL),
(8, 'Hadi', '2026-07-01', 2, 100000.00, 'Premium', NULL, NULL, 2, 1, NULL, NULL),
(9, 'Indah', '2026-07-02', 3, 100000.00, 'Premium', NULL, NULL, 3, 1, NULL, NULL),
(10, 'Joko', '2026-07-03', 2, 100000.00, 'Premium', NULL, NULL, 1, 0, NULL, NULL),
(11, 'Kiki', '2026-07-04', 4, 100000.00, 'Premium', NULL, NULL, 4, 1, NULL, NULL),
(12, 'Lina', '2026-07-05', 3, 100000.00, 'Premium', NULL, NULL, 2, 1, NULL, NULL),
(13, 'Maman', '2026-07-06', 2, 100000.00, 'Premium', NULL, NULL, 3, 0, NULL, NULL),
(14, 'Nina', '2026-07-07', 1, 100000.00, 'Premium', NULL, NULL, 1, 1, NULL, NULL),
(15, 'Oki', '2026-07-01', 5, 150000.00, 'Event', NULL, NULL, NULL, NULL, 'Gedung A', 300000.00),
(16, 'Putra', '2026-07-02', 6, 150000.00, 'Event', NULL, NULL, NULL, NULL, 'Pantai', 500000.00),
(17, 'Qori', '2026-07-03', 4, 150000.00, 'Event', NULL, NULL, NULL, NULL, 'Hotel B', 250000.00),
(18, 'Rina', '2026-07-04', 5, 150000.00, 'Event', NULL, NULL, NULL, NULL, 'Taman Kota', 200000.00),
(19, 'Sari', '2026-07-05', 3, 150000.00, 'Event', NULL, NULL, NULL, NULL, 'Kampus', 150000.00),
(20, 'Tono', '2026-07-06', 6, 150000.00, 'Event', NULL, NULL, NULL, NULL, 'Gedung Serbaguna', 400000.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_reservasi`
--
ALTER TABLE `tabel_reservasi`
  ADD PRIMARY KEY (`id_reservasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_reservasi`
--
ALTER TABLE `tabel_reservasi`
  MODIFY `id_reservasi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
