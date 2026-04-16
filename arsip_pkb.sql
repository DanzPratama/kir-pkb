-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 08, 2026 at 04:55 AM
-- Server version: 8.4.7
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsip-kir`
--

-- --------------------------------------------------------

--
-- Table structure for table `arsip_pkb`
--

DROP TABLE IF EXISTS `arsip_pkb`;
CREATE TABLE IF NOT EXISTS `arsip_pkb` (
  `id` int NOT NULL AUTO_INCREMENT,
  `no_pkb` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_polisi` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_pemilik` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kendaraan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori_kendaraan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_uji` date DEFAULT NULL,
  `hasil_uji` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catatan` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `arsip_pkb`
--

INSERT INTO `arsip_pkb` (`id`, `no_pkb`, `no_polisi`, `nama_pemilik`, `jenis_kendaraan`, `kategori_kendaraan`, `tanggal_uji`, `hasil_uji`, `catatan`, `created_at`) VALUES
(1, 'PKB-2025-0001', 'Z 1234 AA', 'Dedi Hadiat', 'Truk', 'perusahaan', '2025-01-12', 'LULUS', 'Kondisi baik', '2026-04-08 03:19:00'),
(2, 'PKB-2025-0002', 'Z 5678 BB', 'Muksin', 'Pick Up', 'pribadi', '2025-02-05', 'TIDAK LULUS', 'Rem kurang pakem', '2026-04-08 03:19:00'),
(3, 'PKB-2025-0003', 'Z 9090 CC', 'Asep Nurdin', 'Bus', 'perusahaan', '2024-12-20', 'LULUS', 'Layak jalan', '2026-04-08 03:19:00'),
(4, 'PKB-2025-0004', 'Z 1122 DD', 'Yani S.', 'Truk', 'perusahaan', '2025-03-01', 'TIDAK LULUS', 'Lampu mati', '2026-04-08 03:19:00'),
(5, 'PKB-2025-0005', 'Z 3344 EE', 'Rudi Hartonoaa', 'Mobil Penumpang', 'pribadi', '2025-03-10', 'LULUS', 'Normal', '2026-04-08 03:19:00'),
(6, 'PKB-2025-0006', 'Z 7788 FF', 'Siti Aminah', 'Pick Up', 'pribadi', '2025-03-15', 'LULUS', 'Siap operasional', '2026-04-08 03:19:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
