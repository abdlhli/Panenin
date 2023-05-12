-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Bulan Mei 2023 pada 10.22
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
('PLG00001', 'Alvin', 'Jentara', 'alvin@gmail.com', '$2y$10$x59JPjsJ/mLx5ZFO2oEDvu80YjD1lgBNgnKoLKs9RshJPp.5oDtAa', 'Puger', '081234567890', 3, 'defaultprofile.png');

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
('BNR00002', 'Coba Lagi', '1682913715_GhostWind_landscape_Arizona_mesa_canyon_rays_of_shimmering_ligh_eaa78443-594e-47f5-919b-66e0d1c9bad1.png', '2023-05-01', 'Aktif', 'ADM00001'),
('BNR00003', 'Coba Lagi Lagi', '1683363733_commanderInfinity_In_the_Land_of_Dragons_sits_a_towering_fortre_f7281d19-a9c2-4cc3-8b83-16e604005c87.png', '2023-05-06', 'Aktif', 'ADM00002'),
('BNR00004', 'Coba Lagi Lagi Lagi', '1683364442_grendeldog_alien_landscape_veduta_899c2ea8-5f67-4df4-bd9a-b91092c556a7.png', '2023-05-06', 'Aktif', 'ADM00002');

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
('PRD00001', 'Apel', '10000', 'Kg', '100', '1683877036.apel.jpg', 'IDJP001');

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
(8, 'Pesanan Dibatalkan');

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
  ADD KEY `id_pembelian` (`id_pemesanan`),
  ADD KEY `id_produk` (`id_produk`);

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
  ADD CONSTRAINT `detail_pemesanan_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`),
  ADD CONSTRAINT `detail_pemesanan_ibfk_3` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`);

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
