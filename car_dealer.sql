-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2023 at 06:11 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_dealer`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_pemesanan`
--

CREATE TABLE `form_pemesanan` (
  `id_pemesanan` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `merk_mobil` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` int(12) NOT NULL,
  `catatan` varchar(1000) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(11) NOT NULL,
  `merk` varchar(120) NOT NULL,
  `kategori` varchar(120) NOT NULL,
  `harga` int(11) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `gambar` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `merk`, `kategori`, `harga`, `warna`, `gambar`) VALUES
(1, 'Creta Active 6-Speed MT', 'Hyundai Creta', 288500000, 'Merah', 'Hyundai-Creta.jpg'),
(2, 'All New HR-V S CVT', 'Honda HR-V', 365000000, 'Putih', 'HR-V.jpg'),
(3, ' Kijang Innova 2.0 G MT', 'Toyota Kijang Innova', 396500000, 'Abu-Abu', 'kijang-Innova.jpg'),
(5, 'New Xpander GLS MT', 'Hyundai Creta', 254000000, 'Silver', 'New-Xpander.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `pesan_bantuan` text NOT NULL,
  `pesan_balasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama`, `email`, `no_hp`, `pesan_bantuan`, `pesan_balasan`) VALUES
(1, 'Nesa', 'Nesa@gmail.com', '081223554361', 'Tidak dapat mengklik tombol pesan', 'baik akan saya perbaiki'),
(3, 'Nesa', 'Nesa@gmail.com', '081223554361', 'Kenapa pesanan tidak bisa disimpan dikeranjang', '');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_mobil`, `nama`, `alamat`, `no_hp`, `merk`, `harga`) VALUES
(1, 1, 'Nesa', 'Majalengka', '089273763197', 'All New HR-V S CVT', 365000000),
(4, 2, 'Nesa', 'Majalengka', '0881223554261', 'All New HR-V S CVT', 365000000);

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `id_promo` int(11) NOT NULL,
  `gambar` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`id_promo`, `gambar`) VALUES
(1, 'slider1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `email`, `no_hp`, `role_id`) VALUES
(1, 'admin', 'admin', '$2y$10$kv5tTX4zMF7Bw0bmGNoWKesbRwP1mPgaQ4aWYAsrDD2twYH/8NPIS', 'admin@gmail.com', '081231213214', 1),
(5, 'cs', 'cs', '$2y$10$yDOgE54DaV8E1E3oM7Ff6.rDZGVzf8iqavgGGuJ2nIv0DXD/dCIi2', 'cs@gmail.com', '089625122131', 3),
(6, 'marketing', 'marketing', '$2y$10$vG6BnGRZM/zuclz7ceeSM.Zy6sPNsEFQP3E4nlA4HrWId0qUDigC6', 'marketing@gmail.com', '081231210231', 5),
(7, 'manajer', 'manajer', '$2y$10$J5xSbRENhGUMbbZTQZlHkuaWN3oK7aac.nrZzbhl2C/mO8KCtK7j2', 'manajer@gmail.com', '081312321312', 4),
(8, 'customer', 'customer', '$2y$10$EUkIrtMYtSJVDCh8ZH.yeel7XYU1yO3pZBAJ/qIba1MsZYH9ibclK', 'customer@gmail.com', '0812139426298', 2),
(9, 'Nesa', 'Nesa', '$2y$10$YtSvA/smJ3OcuWzmosW9J.kWSkdgwoGqT/IVJ9UO5bVAxeOYfkGgi', 'Nesa@gmail.com', '081223554361', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_pemesanan`
--
ALTER TABLE `form_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id_promo`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `id_promo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
