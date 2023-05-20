-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Bulan Mei 2023 pada 18.56
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
-- Database: `panenin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
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
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id_user`, `firstname`, `lastname`, `email`, `password`, `alamat`, `no_telp`, `id_hak_akses`, `foto_profile`) VALUES
('ADM00001', 'Abdullah', 'Ali', 'abdullahali.and1@gmail.com', '$2y$10$x8Qv5EUgAW4/H.cgQ91a/OOk466TBtXlvL9ycmae8zWlbuGFKqae.', 'Jl. Jawa No.48 Jember', '081233326540', 1, '1682790499_WhatsApp Image 2021-08-23 at 19.35.35.jpeg'),
('ADM00002', 'Firmansyah', 'Fikriawan', 'firman@gmail.com', '$2y$10$i3r3bM3liBUWGCwDhQwVXukaQMLyjg/0e6PaWPik/d.d3gdBlZDQK', 'Bondowoso', '081234567890', 2, '1682790646_a.gif'),
('PLG00001', 'Alvin', 'Jentar', 'alvin@gmail.com', '$2y$10$fh3ujvAv7YWNpf70tjC1/O8WmfV2fub0qH0D5fzCobnHiCopOv8RS', 'Jember', '0812345678901', 3, '1684042269_eye.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner`
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
-- Dumping data untuk tabel `banner`
--

INSERT INTO `banner` (`id_banner`, `nama_banner`, `foto_banner`, `tgl_banner`, `status`, `id_user`) VALUES
('BNR00003', 'Coba Lagi Lagi', '1683363733_commanderInfinity_In_the_Land_of_Dragons_sits_a_towering_fortre_f7281d19-a9c2-4cc3-8b83-16e604005c87.png', '2023-05-06', 'Aktif', 'ADM00002'),
('BNR00004', 'Coba Lagi', '1684052263_7715D141-C1FD-4305-A8A6-8A0BA73C516D.jpg', '2023-05-14', 'Aktif', 'ADM00001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pemesanan`
--

CREATE TABLE `detail_pemesanan` (
  `id_pemesanan` char(255) NOT NULL,
  `id_produk` char(255) NOT NULL,
  `jumlah_produk` char(10) NOT NULL,
  `total_harga_produk` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_pemesanan`
--

INSERT INTO `detail_pemesanan` (`id_pemesanan`, `id_produk`, `jumlah_produk`, `total_harga_produk`) VALUES
('PSN20230514121807hvBzrCb2', 'PRD00001', '5', '50000'),
('PSN20230514121807hvBzrCb2', 'PRD00002', '1', '15000'),
('PSN20230514121807hvBzrCb2', 'PRD00003', '4', '32000'),
('PSN20230517092822lMnU4aij', 'PRD00001', '1', '10000'),
('PSN20230517092822lMnU4aij', 'PRD00002', '4', '60000'),
('PSN20230517092822lMnU4aij', 'PRD00003', '3', '24000'),
('PSN20230517093422ofTpdRNt', 'PRD00001', '2', '20000'),
('PSN20230517093422ofTpdRNt', 'PRD00002', '2', '30000'),
('PSN20230517093422ofTpdRNt', 'PRD00003', '3', '24000'),
('PSN20230520160812IjSk1Bmz', 'PRD00001', '2', '20000'),
('PSN20230520160812IjSk1Bmz', 'PRD00002', '2', '30000'),
('PSN20230520160812IjSk1Bmz', 'PRD00003', '3', '24000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hak_akses`
--

CREATE TABLE `hak_akses` (
  `id_hak_akses` int(11) NOT NULL,
  `hak_akses` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hak_akses`
--

INSERT INTO `hak_akses` (`id_hak_akses`, `hak_akses`) VALUES
(1, 'Admin'),
(2, 'Operator'),
(3, 'Pelanggan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_produk`
--

CREATE TABLE `jenis_produk` (
  `id_jenis_produk` char(255) NOT NULL,
  `nama_jenis_produk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_produk`
--

INSERT INTO `jenis_produk` (`id_jenis_produk`, `nama_jenis_produk`) VALUES
('IDJP001', 'Buah Buahan'),
('IDJP002', 'Produk Olahan'),
('IDJP003', 'Sayuran'),
('IDJP004', 'Tanaman Hias'),
('IDJP005', 'Tanaman Pangan'),
('IDJP006', 'Tanaman Perkebunan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_06_132310_create_cache_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` char(255) NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `total_harga_pemesanan` varchar(12) NOT NULL,
  `id_user` char(255) NOT NULL,
  `id_status_pemesanan` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `tgl_pemesanan`, `total_harga_pemesanan`, `id_user`, `id_status_pemesanan`) VALUES
('PSN20230514121807hvBzrCb2', '2023-05-13', '97000', 'PLG00001', 5),
('PSN20230517092822lMnU4aij', '2023-05-17', '94000', 'PLG00001', 3),
('PSN20230517093422ofTpdRNt', '2023-05-17', '74000', 'PLG00001', 9),
('PSN20230520160812IjSk1Bmz', '2023-05-20', '74000', 'PLG00001', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
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
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `satuan_produk`, `stock_produk`, `foto_produk`, `id_jenis_produk`) VALUES
('PRD00001', 'Apel', '10000', 'Kg', '64', '1683877036.apel.jpg', 'IDJP001'),
('PRD00002', 'Sayur Bayam', '15000', 'Kg', '11', '1684056096.bayam.jpg', 'IDJP003'),
('PRD00003', 'Kacang Panjang', '8000', 'Kg', '15', '1684056185.kacangpanjang.jpg', 'IDJP003');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_pemesanan`
--

CREATE TABLE `status_pemesanan` (
  `id_status_pemesanan` int(2) NOT NULL,
  `nama_status_pemesanan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `status_pemesanan`
--

INSERT INTO `status_pemesanan` (`id_status_pemesanan`, `nama_status_pemesanan`) VALUES
(1, 'Pembayaran Diverifikasi'),
(2, 'Barang Sedang Diproses'),
(3, 'Barang Dikirim'),
(4, 'Pesanan Telah Diterima'),
(5, 'Pesanan Selesai'),
(6, 'Barang Habis'),
(7, 'Pembayaran Ditolak'),
(8, 'Pesanan Dibatalkan'),
(9, 'Menunggu Verifikasi Penjual');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_hak_akses` (`id_hak_akses`);

--
-- Indeks untuk tabel `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_pemesanan` (`id_pemesanan`);

--
-- Indeks untuk tabel `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`id_hak_akses`);

--
-- Indeks untuk tabel `jenis_produk`
--
ALTER TABLE `jenis_produk`
  ADD PRIMARY KEY (`id_jenis_produk`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_status_pemesanan` (`id_status_pemesanan`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_jenis_produk` (`id_jenis_produk`);

--
-- Indeks untuk tabel `status_pemesanan`
--
ALTER TABLE `status_pemesanan`
  ADD PRIMARY KEY (`id_status_pemesanan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hak_akses`
--
ALTER TABLE `hak_akses`
  MODIFY `id_hak_akses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD CONSTRAINT `akun_ibfk_1` FOREIGN KEY (`id_hak_akses`) REFERENCES `hak_akses` (`id_hak_akses`);

--
-- Ketidakleluasaan untuk tabel `banner`
--
ALTER TABLE `banner`
  ADD CONSTRAINT `banner_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `akun` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD CONSTRAINT `detail_pemesanan_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_pemesanan_ibfk_3` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `akun` (`id_user`),
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`id_status_pemesanan`) REFERENCES `status_pemesanan` (`id_status_pemesanan`);

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_jenis_produk`) REFERENCES `jenis_produk` (`id_jenis_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
