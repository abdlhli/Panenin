-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 07:14 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `panenin`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_user` char(255) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(60) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `id_hak_akses` int(11) NOT NULL,
  `foto_profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_user`, `firstname`, `lastname`, `email`, `password`, `alamat`, `no_telp`, `id_hak_akses`, `foto_profile`) VALUES
('ADM00001', 'Abdullah', 'Ali', 'abdullahali.and1@gmail.com', '$2y$10$x8Qv5EUgAW4/H.cgQ91a/OOk466TBtXlvL9ycmae8zWlbuGFKqae.', 'Jl. Jawa No.48 Jember', '081233326540', 1, '1682790499_WhatsApp Image 2021-08-23 at 19.35.35.jpeg'),
('ADM00002', 'Firmansyah', 'Fikriawan', 'firman@gmail.com', '$2y$10$x59JPjsJ/mLx5ZFO2oEDvu80YjD1lgBNgnKoLKs9RshJPp.5oDtAa', 'Bondowoso', '081234567890', 2, '1682790646_a.gif'),
('ADM00003', 'asdas', 'dwadwa', 'coba@coab.cob', '$2y$10$7l3axk3XyU0RZwciQZxOkOjHY2fbSkfsurzILmygVSZcq/DVpQWm2', 'asdasda', '08123456789', 2, ''),
('PLG00001', 'Alvin', 'Jentara', 'alvin@gmail.com', '$2y$10$x59JPjsJ/mLx5ZFO2oEDvu80YjD1lgBNgnKoLKs9RshJPp.5oDtAa', 'Puger', '081234567890', 3, ''),
('PLG00002', 'Moehammad', 'Tegar', 'tegey@gmail.com', '$2y$10$x59JPjsJ/mLx5ZFO2oEDvu80YjD1lgBNgnKoLKs9RshJPp.5oDtAa', 'Puger', '081234567890', 3, ''),
('PLG00003', 'Zulfianti', 'Rahmawati', 'fifi@gmail.com', '$2y$10$x59JPjsJ/mLx5ZFO2oEDvu80YjD1lgBNgnKoLKs9RshJPp.5oDtAa', 'Probolinggo', '081234567890', 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id_banner` char(255) NOT NULL,
  `nama_banner` varchar(255) NOT NULL,
  `foto_banner` varchar(255) NOT NULL,
  `tgl_banner` date NOT NULL DEFAULT current_timestamp(),
  `status` enum('Active','Inactive') DEFAULT 'Active',
  `id_user` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id_banner`, `nama_banner`, `foto_banner`, `tgl_banner`, `status`, `id_user`) VALUES
('BNR00001', 'Coba', '1682913284_ashwathama_water_gushing_through_a_large_door_way_into_a_rock_w_cef9c206-f6ad-492c-beb2-549f8561b018.png', '2023-05-01', 'Active', 'ADM00001'),
('BNR00002', 'Coba Lagi', '1682913715_GhostWind_landscape_Arizona_mesa_canyon_rays_of_shimmering_ligh_eaa78443-594e-47f5-919b-66e0d1c9bad1.png', '2023-05-01', 'Inactive', 'ADM00001');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pembelian`
--

CREATE TABLE `detail_pembelian` (
  `id_pembelian` char(255) NOT NULL,
  `id_produk` char(255) NOT NULL,
  `jumlah_produk` char(10) NOT NULL,
  `total_harga_produk` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE `hak_akses` (
  `id_hak_akses` int(11) NOT NULL,
  `hak_akses` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hak_akses`
--

INSERT INTO `hak_akses` (`id_hak_akses`, `hak_akses`) VALUES
(1, 'Admin'),
(2, 'Operator'),
(3, 'Pelanggan');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_produk`
--

CREATE TABLE `jenis_produk` (
  `id_jenis_produk` char(255) NOT NULL,
  `nama_jenis_produk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` char(255) NOT NULL,
  `tgl_pembelian` date NOT NULL,
  `total_harga_pembelian` varchar(12) NOT NULL,
  `id_user` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` char(255) NOT NULL,
  `nama_produk` varchar(30) NOT NULL,
  `harga_produk` varchar(12) NOT NULL,
  `stock_produk` char(10) NOT NULL,
  `id_jenis_produk` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_hak_akses` (`id_hak_akses`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `detail_pembelian`
--
ALTER TABLE `detail_pembelian`
  ADD KEY `id_pembelian` (`id_pembelian`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`id_hak_akses`);

--
-- Indexes for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  ADD PRIMARY KEY (`id_jenis_produk`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_jenis_produk` (`id_jenis_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hak_akses`
--
ALTER TABLE `hak_akses`
  MODIFY `id_hak_akses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `akun`
--
ALTER TABLE `akun`
  ADD CONSTRAINT `akun_ibfk_1` FOREIGN KEY (`id_hak_akses`) REFERENCES `hak_akses` (`id_hak_akses`);

--
-- Constraints for table `banner`
--
ALTER TABLE `banner`
  ADD CONSTRAINT `banner_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `akun` (`id_user`);

--
-- Constraints for table `detail_pembelian`
--
ALTER TABLE `detail_pembelian`
  ADD CONSTRAINT `detail_pembelian_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`),
  ADD CONSTRAINT `detail_pembelian_ibfk_3` FOREIGN KEY (`id_pembelian`) REFERENCES `pembelian` (`id_pembelian`);

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `akun` (`id_user`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_jenis_produk`) REFERENCES `jenis_produk` (`id_jenis_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
