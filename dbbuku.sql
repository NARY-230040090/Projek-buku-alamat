-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2025 at 05:37 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbbuku`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pengguna`
--

CREATE TABLE `data_pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_pengguna`
--

INSERT INTO `data_pengguna` (`id`, `nama`, `alamat`, `email`, `no_hp`, `kategori`, `tanggal`) VALUES
(1, 'Agus Galon', 'Jl. Merdeka No.4', 'Agus@example.com', '081234777555', 'Kebutuhan', '2025-01-01'),
(2, 'Budi Tanaman Hias', 'Jl. Apel No.3AX', 'Budi@example.com', '087789666111', 'Kebutuhan', '2025-01-01'),
(3, 'Sinta Ponakan', 'Jl. Gunung Agung Gang.Merpati No.5c', 'Sinta@example.com', '087750231000', 'Keluarga', '2025-01-01'),
(4, 'Adik Dodi', 'Jl. Melati No. 11', 'dodi@example.com', '08122334455', 'Keluarga', '2025-01-02'),
(5, 'Bos Pabrik', 'Jl. Industri No. 22', 'bos@example.com', '08133445566', 'Kerja', '2025-01-02'),
(6, 'Reno Packing', 'Jl. Gudang No. 33', 'reno@example.com', '08144556677', 'Kerja', '2025-01-02'),
(7, 'Bambang Sayur', 'Jl. Kembang No. 12', 'bambang@example.com', '08223344556', 'Kebutuhan', '2025-01-03'),
(8, 'Gita Salon', 'Jl. Rias No. 18', 'gita@example.com', '08234455667', 'Kebutuhan', '2025-01-04'),
(9, 'Angga Suami', 'Jl. Raya No. 25', 'angga@example.com', '08245566778', 'Keluarga', '2025-01-05'),
(10, 'Kakak Joko', 'Jl. Cendana No. 30', 'joko@example.com', '08256677889', 'Keluarga', '2025-01-06'),
(11, 'Suster Novi', 'Jl. Sehat No. 35', 'novi@example.com', '08267788990', 'Kerja', '2025-01-07'),
(12, 'Satpam Gunawan', 'Jl. Keamanan No. 40', 'gunawan@example.com', '08278899001', 'Kerja', '2025-01-07'),
(13, '2025-01-07', 'Nary Paramitha', '', '', '98766890767', '0000-00-00'),
(14, 'Nary Paramitha', 'Gianyar', 'naryparamitha4@gmail.com', '98766890767', 'keluarga', '2025-01-07'),
(15, 'Indira Prabandari', 'klungkung', 'Pmita6121@gmail.com', '9899889000', 'kerja', '2025-01-07'),
(20, 'rinda', 'jl.hangtuah', 'indira@gamail.com', '12356780756', 'keluarga', '2025-01-08'),
(21, 'mitha', 'Gianyar', 'sevaca@gmail.com', '093876780', 'kerja', '2025-01-08'),
(22, 'Pras', 'Br Kawan Bonbiyu Blahbatuh', 'pras@gmail.com', '09876543211', 'keluarga', '2025-01-08'),
(25, 'paramitha', 'gianyar , bali', 'paramitha@gmail.com', '098634566', 'kerja', '2025-01-09');

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `id_user` int(12) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname_pengguna` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`id_user`, `username`, `password`, `fullname_pengguna`, `status`) VALUES
(1, 'Indira', '$2y$10$6Gh6P8vm7W5qrSPwIAE0f.F6MhSyM1FrFfJrqzskhfsqcT0BxVq5i', 'Adiministrator', 'aktif'),
(7, 'nary', '$2a$12$ZkodLB9C8Xr83k0LqcqeTO/w/MK3c9tG.UUsQlQklgzCuVJaTaqJC\r\n', 'pengguna', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pengguna`
--
ALTER TABLE `data_pengguna`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pengguna`
--
ALTER TABLE `data_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id_user` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
