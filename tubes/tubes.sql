-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2023 at 08:00 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `artis`
--

CREATE TABLE `artis` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pekerjaan_id` int DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` varchar(5000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artis`
--

INSERT INTO `artis` (`id`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `pekerjaan_id`, `gambar`, `deskripsi`) VALUES
(39, 'Oliver Skyses', 'Man', '1986-11-20', 1, '646ced41b4b9e.jpg', 'Oliver Scott Sykes (born 20 November 1986) is a British singer and songwriter, best known as the lead vocalist and primary lyricist of the rock band Bring Me the Horizon. He also founded the apparel company Drop Dead Clothing, and created a graphic novel.'),
(40, 'Keanu Reeves', 'Man', '1964-02-09', 3, '6471c14492003.jpg', 'Keanu Charles Reeves ( lahir pada 2 September 1964 ) adalah seorang aktor asal Kanada. Lahir di Beirut dan dibesarkan di Toronto, Reeves memulai karir aktingnya di produksi teater dan film televisi sebelum membuat debut film fiturnya dalam Youngblood (1986). Ia mendapatkan peran terobosan dalam komedi fiksi ilmiah Bill &amp; Ted&#039;s Excellent Adventure (1989), dan ia kembali memerankan perannya dalam sekuelnya. Ia mendapatkan pujian karena memerankan seorang penipu dalam drama independen My Own Private Idaho (1991) dan menjelma menjadi pahlawan aksi dengan peran-peran utama dalam Point Break (1991) dan Speed (1994).'),
(41, 'post malone', 'Man', '1986-11-20', 1, '6471c1645e268.jpg', ''),
(42, 'bred pitt', 'Man', '1963-12-08', 3, '647ed1ac09e23.jpg', ''),
(43, 'Chris Hemsworth ', 'Man', '1983-07-11', 3, '647ed2134a50a.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id` int NOT NULL,
  `pekerjaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `pekerjaan`) VALUES
(1, 'Singer'),
(2, 'Model'),
(3, 'Actors');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nomor_hp` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `nomor_hp`, `password`, `role`) VALUES
(19, 'admind', 'dzikri.223040072@mail.unpas.ac.id', '123456', '$2y$10$YdJRLTV8BViE98j7itrRtOA.B3XtZ9TG5BGIHJo2WzzJuILMYR9pK', 'user'),
(23, 'admingve', 'muhamadafattt@gmail.com', '087812504813', '$2y$10$IOZKoTO8R3/kcK493toLzOs0UeXJU9HKZfEyK8.wNcLre3aB36r72', 'admin'),
(24, 'ahngentod', 'ahngentod@mail.com', '085817581892', '$2y$10$EwEUbTMlJAPxzbfLn/n48.otlFE6tYDS40TNdyzlADVCSTwlm6GDy', 'user'),
(25, 'hamm', 'ilham@gmail.com', '081244451234', '$2y$10$HL9q0WK4HIjOJYDSTCnXEuSpk272MgRzkHylTg3CLEtoCkyU0A7di', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artis`
--
ALTER TABLE `artis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PEKERJAAN_FOREIGN_KEY` (`pekerjaan_id`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artis`
--
ALTER TABLE `artis`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artis`
--
ALTER TABLE `artis`
  ADD CONSTRAINT `PEKERJAAN_FOREIGN_KEY` FOREIGN KEY (`pekerjaan_id`) REFERENCES `pekerjaan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
