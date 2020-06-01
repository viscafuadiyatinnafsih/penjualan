-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01 Jun 2020 pada 17.06
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `penjualan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `baju`
--

CREATE TABLE IF NOT EXISTS `baju` (
  `id_baju` int(15) NOT NULL,
  `nama_baju` varchar(50) NOT NULL,
  `harga` int(15) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `gambar` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `baju`
--

INSERT INTO `baju` (`id_baju`, `nama_baju`, `harga`, `deskripsi`, `gambar`) VALUES
(1, 'baju polos wanita', 75000, 'baju polos pendek tangan untuk wanita', 'baju3.jpg'),
(2, 'jaket musim dingin', 300000, 'jaket tebal untuk musim dingin tersedia berbagai varian warna', 'baju2.jpg'),
(3, 'kaus abu-abu wanita', 90000, 'baju kaus warna abu-abu untuk wanita', 'baju.jpg'),
(4, 'sweater', 150000, 'sweater berbagai varian warna untuk wanita', 'baju5.jpg'),
(5, 'kemeja putih pria', 200000, 'kemeja putih untuk pria', 'baju1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id_category` int(15) NOT NULL,
  `nama_category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `celana`
--

CREATE TABLE IF NOT EXISTS `celana` (
  `id_celana` int(15) NOT NULL,
  `gambar` text,
  `nama_celana` varchar(50) NOT NULL,
  `harga` int(15) NOT NULL,
  `deskripsi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `celana`
--

INSERT INTO `celana` (`id_celana`, `gambar`, `nama_celana`, `harga`, `deskripsi`) VALUES
(1, 'celana.jpg', 'celana boxer', 50000, 'celana boxer pria'),
(2, 'celana1.jpg', 'celana pendek', 85000, 'celana pendek untuk pria'),
(3, 'celana2.jpg', 'celana pria', 100000, 'celana hitam untuk pria'),
(4, 'celana4.jpg', 'celana wanita', 120000, 'celana coklat panjang wanita');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
`id_customer` int(15) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` int(13) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_lengkap`, `alamat`, `no_telp`, `email`) VALUES
(1, 'yuioo', 'Jl haji mading 58', 56789, 'fyuioo@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(15) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=679 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `alamat`, `username`, `password`) VALUES
(678, 'Visca Fuadiyatin Nafsih', 'Sumatera Barat', 'visca', 'nafsih');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baju`
--
ALTER TABLE `baju`
 ADD PRIMARY KEY (`id_baju`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `celana`
--
ALTER TABLE `celana`
 ADD PRIMARY KEY (`id_celana`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `id_customer` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=679;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
