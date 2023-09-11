-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2023 at 09:59 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pernikahan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_user`
--

CREATE TABLE `tbl_data_user` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `telepon_user` varchar(15) NOT NULL,
  `alamat_user` varchar(100) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_form`
--

CREATE TABLE `tbl_form` (
  `id_undangan` int(11) NOT NULL,
  `nama_pria` varchar(100) NOT NULL,
  `deskripsi_pria` varchar(255) NOT NULL,
  `nama_perempuan` varchar(100) NOT NULL,
  `deskripsi_perempuan` varchar(255) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `background` varchar(255) NOT NULL,
  `kepada_yth` varchar(100) NOT NULL,
  `hari` varchar(100) NOT NULL,
  `resepsi` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `akad_nikah` varchar(100) NOT NULL,
  `syukuran` varchar(100) NOT NULL,
  `nama_ayah_pria` varchar(100) NOT NULL,
  `nama_ibu_pria` varchar(100) NOT NULL,
  `nama_ayah_perempuan` varchar(100) NOT NULL,
  `nama_ibu_perempuan` varchar(100) NOT NULL,
  `peta_lokasi` varchar(500) NOT NULL,
  `gedung` varchar(100) NOT NULL,
  `negara` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `mengundang1` varchar(100) NOT NULL,
  `mengundang2` varchar(100) NOT NULL,
  `mengundang3` varchar(100) NOT NULL,
  `mengundang4` varchar(100) NOT NULL,
  `mengundang5` varchar(100) NOT NULL,
  `mengundang6` varchar(100) NOT NULL,
  `mengundang7` varchar(100) NOT NULL,
  `mengundang8` varchar(100) NOT NULL,
  `gambar1` varchar(100) NOT NULL,
  `gambar2` varchar(100) NOT NULL,
  `gambar3` varchar(100) NOT NULL,
  `deskripsi1` varchar(255) NOT NULL,
  `deskripsi2` varchar(255) NOT NULL,
  `deskripsi3` varchar(255) NOT NULL,
  `photo_pria` varchar(255) DEFAULT NULL,
  `photo_perempuan` varchar(255) DEFAULT NULL,
  `galery1` varchar(100) NOT NULL,
  `galery2` varchar(100) NOT NULL,
  `galery3` varchar(100) NOT NULL,
  `galery4` varchar(100) NOT NULL,
  `galery5` varchar(100) NOT NULL,
  `galery6` varchar(100) NOT NULL,
  `foto_wishes1` varchar(100) NOT NULL,
  `foto_wishes2` varchar(100) NOT NULL,
  `foto_wishes3` varchar(100) NOT NULL,
  `harapan1` varchar(255) NOT NULL,
  `harapan2` varchar(255) NOT NULL,
  `harapan3` varchar(255) NOT NULL,
  `services1` varchar(255) NOT NULL,
  `services2` varchar(255) NOT NULL,
  `services3` varchar(255) NOT NULL,
  `foto_background` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_form`
--

INSERT INTO `tbl_form` (`id_undangan`, `nama_pria`, `deskripsi_pria`, `nama_perempuan`, `deskripsi_perempuan`, `logo`, `background`, `kepada_yth`, `hari`, `resepsi`, `tanggal`, `waktu`, `akad_nikah`, `syukuran`, `nama_ayah_pria`, `nama_ibu_pria`, `nama_ayah_perempuan`, `nama_ibu_perempuan`, `peta_lokasi`, `gedung`, `negara`, `kota`, `mengundang1`, `mengundang2`, `mengundang3`, `mengundang4`, `mengundang5`, `mengundang6`, `mengundang7`, `mengundang8`, `gambar1`, `gambar2`, `gambar3`, `deskripsi1`, `deskripsi2`, `deskripsi3`, `photo_pria`, `photo_perempuan`, `galery1`, `galery2`, `galery3`, `galery4`, `galery5`, `galery6`, `foto_wishes1`, `foto_wishes2`, `foto_wishes3`, `harapan1`, `harapan2`, `harapan3`, `services1`, `services2`, `services3`, `foto_background`) VALUES
(1, 'Ronaldo', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'Karina', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'loc.png', 'wallpaperflare.jpg', 'Keluarga Manchester', 'Jum\'at', '17.00 - 18.00', '2024-01-01', '08:00:00', '09.00 - 10.00', 'بِسْمِ اللهِ الرَّحْمٰنِ الرَّحِيْم', 'Ayah Argya', 'Ibu Argya', 'Ayah Karina', 'Ibu Karina', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7427879410197!2d107.6039093741929!3d-6.9213211677425015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e79327c17a59%3A0xd337a459a94dccff!2sMasjid%20Agung%20Bandung!5e0!3m2!1sid!2sid!4v1693882971432!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Masjid', 'Indonesia', 'Bandung', 'Orang 1', 'Orang 2', 'Orang 3', 'Orang 4', 'Orang 5', 'Orang 6', 'Orang 7', 'Orang 8', 'couple-1.jpg', 'couple-2.jpg', 'couple-3.jpg', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'groom.jpg', 'bride.jpg', 'gallery-1.jpg', 'gallery-2.jpg', 'gallery-3.jpg', 'gallery-4.jpg', 'gallery-5.jpg', 'gallery-6.jpg', 'couple-1.jpg', 'couple-2.jpg', 'couple-3.jpg', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'wallpaperflare.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` varchar(4) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`) VALUES
('US01', 'Admin - 01', 'Admin', 'admin'),
('US02', 'User - 02', 'User', 'user'),
('US03', 'Haru-01', 'Haru', 'haru'),
('US04', 'Bellzebub-01', 'Bellzebub', 'Bellzebub'),
('US05', 'Contoh', 'Contoh', 'contoh'),
('US06', 'Contoh', 'admin', 'contoh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_data_user`
--
ALTER TABLE `tbl_data_user`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tbl_form`
--
ALTER TABLE `tbl_form`
  ADD PRIMARY KEY (`id_undangan`) USING BTREE;

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_data_user`
--
ALTER TABLE `tbl_data_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_form`
--
ALTER TABLE `tbl_form`
  MODIFY `id_undangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
