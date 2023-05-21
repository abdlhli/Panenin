-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2023 at 02:30 PM
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
('ADM00002', 'Firmansyah', 'Fikriawan', 'firman@gmail.com', '$2y$10$i3r3bM3liBUWGCwDhQwVXukaQMLyjg/0e6PaWPik/d.d3gdBlZDQK', 'Bondowoso', '081234567890', 2, '1682790646_a.gif'),
('PLG00001', 'Alvin', 'Jentar', 'alvin@gmail.com', '$2y$10$fh3ujvAv7YWNpf70tjC1/O8WmfV2fub0qH0D5fzCobnHiCopOv8RS', 'Jember', '0812345678901', 3, '1684042269_eye.png');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id_banner` char(255) NOT NULL,
  `nama_banner` varchar(255) NOT NULL,
  `foto_banner` varchar(255) NOT NULL,
  `tgl_banner` date NOT NULL DEFAULT current_timestamp(),
  `status` enum('Aktif','Tidak Aktif') DEFAULT 'Aktif',
  `id_user` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id_banner`, `nama_banner`, `foto_banner`, `tgl_banner`, `status`, `id_user`) VALUES
('BNR00003', 'Coba Lagi Lagi', '1683363733_commanderInfinity_In_the_Land_of_Dragons_sits_a_towering_fortre_f7281d19-a9c2-4cc3-8b83-16e604005c87.png', '2023-05-06', 'Aktif', 'ADM00002'),
('BNR00004', 'Coba Lagi', '1684052263_7715D141-C1FD-4305-A8A6-8A0BA73C516D.jpg', '2023-05-14', 'Aktif', 'ADM00001');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pemesanan`
--

CREATE TABLE `detail_pemesanan` (
  `id_pemesanan` char(255) NOT NULL,
  `id_produk` char(255) NOT NULL,
  `jumlah_produk` char(10) NOT NULL,
  `total_harga_produk` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_pemesanan`
--

INSERT INTO `detail_pemesanan` (`id_pemesanan`, `id_produk`, `jumlah_produk`, `total_harga_produk`) VALUES
('PSN20230514121807hvBzrCb2', 'PRD00001', '5', '50000'),
('PSN20230514121807hvBzrCb2', 'PRD00002', '1', '15000'),
('PSN20230514121807hvBzrCb2', 'PRD00003', '4', '32000'),
('PSN20230521071432ewr6FZa8', 'PRD00001', '1', '10000'),
('PSN20230521071432ewr6FZa8', 'PRD00002', '7', '105000'),
('PSN20230521071432ewr6FZa8', 'PRD00003', '2', '16000'),
('PSN20230521073317Tqeyt6qq', 'PRD00001', '3', '30000'),
('PSN20230521073317Tqeyt6qq', 'PRD00002', '2', '30000'),
('PSN20230521090304NCKHWa4U', 'PRD00001', '3', '30000');

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
  `nama_jenis_produk` varchar(20) NOT NULL,
  `foto_jenis_produk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_produk`
--

INSERT INTO `jenis_produk` (`id_jenis_produk`, `nama_jenis_produk`, `foto_jenis_produk`) VALUES
('IDJP001', 'Buah Buahan', 'fruit.png'),
('IDJP002', 'Produk Olahan', 'healthy-eating.png'),
('IDJP003', 'Sayuran', 'vegetables.png'),
('IDJP004', 'Tanaman Hias', 'shelf.png'),
('IDJP005', 'Tanaman Pangan', 'crop.png'),
('IDJP006', 'Tanaman Perkebunan', 'trees.png');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_06_132310_create_cache_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` char(255) NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `total_harga_pemesanan` varchar(12) NOT NULL,
  `id_user` char(255) NOT NULL,
  `id_status_pemesanan` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `tgl_pemesanan`, `total_harga_pemesanan`, `id_user`, `id_status_pemesanan`) VALUES
('PSN20230514121807hvBzrCb2', '2023-05-13', '97000', 'PLG00001', 5),
('PSN20230521071432ewr6FZa8', '2023-05-21', '131000', 'PLG00001', 2),
('PSN20230521073317Tqeyt6qq', '2023-05-21', '60000', 'PLG00001', 6),
('PSN20230521090304NCKHWa4U', '2023-05-21', '30000', 'PLG00001', 9);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` char(255) NOT NULL,
  `nama_produk` varchar(30) NOT NULL,
  `harga_produk` varchar(12) NOT NULL,
  `satuan_produk` varchar(255) NOT NULL,
  `stock_produk` char(10) NOT NULL,
  `foto_produk` varchar(255) NOT NULL,
  `id_jenis_produk` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `satuan_produk`, `stock_produk`, `foto_produk`, `id_jenis_produk`) VALUES
('PRD00001', 'Apel', '10000', 'Kg', '62', '1683877036.apel.jpg', 'IDJP001'),
('PRD00002', 'Sayur Bayam', '15000', 'Kg', '10', '1684056096.bayam.jpg', 'IDJP003'),
('PRD00003', 'Kacang Panjang', '8000', 'Kg', '22', '1684056185.kacangpanjang.jpg', 'IDJP003'),
('PRD00004', 'Mangga Harum Manis', '15000', 'Kg', '40', '1684670833.5370-550x550.jpg', 'IDJP001'),
('PRD00005', 'Jeruk Nipis', '5000', 'Kg', '1000', '1684670897.jeruknipis.jpg', 'IDJP001'),
('PRD00006', 'Pisang Cavendish', '8000', 'Kg', '100', '1684670935.pisang.jpg', 'IDJP001'),
('PRD00007', 'Semangka Madu', '12000', 'Kg', '60', '1684670960.semangka_kuning.jpg', 'IDJP001'),
('PRD00008', 'Selai Stroberi', '20000', 'Jar', '60', '1684672042.selaistrowberi.jpg', 'IDJP002'),
('PRD00009', 'Keripik Pisang', '10000', 'Pack', '60', '1684672134.keripik pisang.jpeg', 'IDJP002'),
('PRD00010', 'Manisan Mangga Kering', '25000', 'Pack', '60', '1684672162.manisan mangga kering.jpg', 'IDJP002');

-- --------------------------------------------------------

--
-- Table structure for table `status_pemesanan`
--

CREATE TABLE `status_pemesanan` (
  `id_status_pemesanan` int(2) NOT NULL,
  `nama_status_pemesanan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_pemesanan`
--

INSERT INTO `status_pemesanan` (`id_status_pemesanan`, `nama_status_pemesanan`) VALUES
(1, 'Pembayaran Diverifikasi'),
(2, 'Barang Sedang Diproses'),
(3, 'Barang Dikirim'),
(5, 'Pesanan Selesai'),
(6, 'Barang Habis'),
(7, 'Pembayaran Ditolak'),
(8, 'Pesanan Dibatalkan'),
(9, 'Menunggu Verifikasi Penjual');

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
-- Indexes for table `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_pemesanan` (`id_pemesanan`);

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
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_status_pemesanan` (`id_status_pemesanan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_jenis_produk` (`id_jenis_produk`);

--
-- Indexes for table `status_pemesanan`
--
ALTER TABLE `status_pemesanan`
  ADD PRIMARY KEY (`id_status_pemesanan`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
-- Constraints for table `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD CONSTRAINT `detail_pemesanan_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_pemesanan_ibfk_3` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `akun` (`id_user`),
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`id_status_pemesanan`) REFERENCES `status_pemesanan` (`id_status_pemesanan`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_jenis_produk`) REFERENCES `jenis_produk` (`id_jenis_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
