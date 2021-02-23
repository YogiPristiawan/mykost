-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Feb 2021 pada 11.33
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mykost`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `booking_at` date NOT NULL,
  `produk_id` int(11) NOT NULL,
  `pay_invoice` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `booking`
--

INSERT INTO `booking` (`booking_id`, `booking_at`, `produk_id`, `pay_invoice`) VALUES
(98, '2021-02-19', 9, '2102199'),
(99, '2021-02-19', 10, '21021910');

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment`
--

CREATE TABLE `payment` (
  `invoice` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `nama_pemesan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `jumlah` decimal(9,0) NOT NULL,
  `bukti_tf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `payment`
--

INSERT INTO `payment` (`invoice`, `tanggal`, `nama_produk`, `nama_pemesan`, `alamat`, `no_telp`, `jumlah`, `bukti_tf`) VALUES
('21021910', '2021-02-19', 'KAMAR 2', 'Yogi', 'Jogja', '08813896779', '400000', 'payment_21021910.jpg'),
('2102199', '2021-02-19', 'KAMAR 1', 'Yogi Pristiawan', 'Yogyakarta', '085290444021', '500000', 'payment_2102199.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `produk_id` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `tipe` char(1) NOT NULL,
  `harga` decimal(9,0) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`produk_id`, `nama_produk`, `tipe`, `harga`, `deskripsi`, `gambar`, `status`) VALUES
(9, 'KAMAR 1', 'A', '500000', 'Bersih, tersedia lemari', 'KAMAR_1.jpg', '1'),
(10, 'KAMAR 2', 'B', '400000', 'Dekat parkiran', 'KAMAR_2.jpg', '1'),
(11, 'KAMAR 3', 'A', '600000', 'Ada meja belajar', 'KAMAR_3.jpg', '0'),
(12, 'KAMAR 4', 'B', '750000', 'Kamar ukuran 4x4 meter.', 'KAMAR_4.jpg', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe`
--

CREATE TABLE `tipe` (
  `tipe_id` char(1) NOT NULL,
  `fasilitas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tipe`
--

INSERT INTO `tipe` (`tipe_id`, `fasilitas`) VALUES
('A', 'AC, Kamar mandi dalam, Dapur umum, Ruang tamu umum, Tempat jemur pakaian'),
('B', 'Kipas angin, Kamar mandi luar, Dapur umum, Ruang tamu umum, Tempat jemur pakaian');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', '0');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD UNIQUE KEY `produk_id` (`produk_id`) USING BTREE,
  ADD UNIQUE KEY `pay_invoice` (`pay_invoice`);

--
-- Indeks untuk tabel `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`invoice`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`produk_id`),
  ADD UNIQUE KEY `nama_produk` (`nama_produk`),
  ADD KEY `tipe` (`tipe`);

--
-- Indeks untuk tabel `tipe`
--
ALTER TABLE `tipe`
  ADD PRIMARY KEY (`tipe_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `produk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `fk_booking_invoice` FOREIGN KEY (`pay_invoice`) REFERENCES `payment` (`invoice`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_booking_produk` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`produk_id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `fk_produk_tipe` FOREIGN KEY (`tipe`) REFERENCES `tipe` (`tipe_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
