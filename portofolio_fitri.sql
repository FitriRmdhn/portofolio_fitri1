-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2022 at 09:34 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portofolio_fitri`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(10) NOT NULL,
  `column1` text NOT NULL,
  `column2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `column1`, `column2`) VALUES
(1, 'Keep halal!', 'Tetap berusaha:)');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `nama`, `email`, `pesan`) VALUES
(19, 'fitri', 'fitri@gmail.com', 'f'),
(20, 'fitri', 'fitri@gmail.com', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `myactivity`
--

CREATE TABLE `myactivity` (
  `id` int(10) NOT NULL,
  `nama` text NOT NULL,
  `ket` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `myactivity`
--

INSERT INTO `myactivity` (`id`, `nama`, `ket`, `foto`) VALUES
(1, 'HTML', 'Membuat project HTML & CSS pembuatan aplikasi web profil', 'b.jpg'),
(2, 'VUE JS', 'Project merancang aplikasi toko online ', 'd.jpg'),
(3, 'BOOTSTRAP', 'Belajar bootstrap untuk merancang situs web', 'c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `nama` text NOT NULL,
  `jabatan` text NOT NULL,
  `perusahaan` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `jabatan`, `perusahaan`, `foto`) VALUES
(1, 'Fitri Ramadhani', 'siswa', 'smkn 4 tasikmalaya', 'fitri.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id_login` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id_login`, `id`, `username`, `password`, `email`, `no_hp`) VALUES
(1, 1, 'lala', '$2y$10$2lZhzr6UbQ6/3WihUqo4M.SvhDKJygCOZu7Yj32o8g4JcFpLagg7i', 'cantik@gmail.com', '08155389476');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myactivity`
--
ALTER TABLE `myactivity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id_login`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_login`
--
ALTER TABLE `user_login`
  ADD CONSTRAINT `user_login_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
