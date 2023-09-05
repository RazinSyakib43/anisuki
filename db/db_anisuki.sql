-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2022 at 11:21 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_anisuki`
--

-- --------------------------------------------------------

--
-- Table structure for table `anime_list`
--

CREATE TABLE `anime_list` (
  `id_anime` varchar(7) NOT NULL,
  `anime_title` varchar(255) NOT NULL,
  `score` int(2) NOT NULL,
  `episode_progress` int(4) NOT NULL,
  `start_date` date NOT NULL,
  `finish_date` date NOT NULL,
  `notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anime_list`
--

INSERT INTO `anime_list` (`id_anime`, `anime_title`, `score`, `episode_progress`, `start_date`, `finish_date`, `notes`) VALUES
('Ani0005', 'Hataraku Maou-sama!!', 1, 1, '2022-08-29', '2022-08-29', ''),
('Ani0006', 'Overload IV', 1, 1, '2022-09-01', '2022-08-12', ''),
('Ani0007', 'Kimi no Na wa.', 10, 1, '2018-10-12', '2018-10-12', ''),
('Ani0009', 'Kimetsu no Yaiba', 10, 12, '2022-08-29', '2022-08-29', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama_depan` varchar(100) NOT NULL,
  `nama_belakang` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(254) NOT NULL,
  `no_telepon` varchar(14) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama_depan`, `nama_belakang`, `username`, `email`, `no_telepon`, `password`) VALUES
(1, 'Muhammad', 'Razin Syakib', 'Zeen43', 'muhammadrazin14@gmail.com', '089630915828', '111'),
(2, 'Muhammad', 'Syakib', 'dsfsdf', 'muhammadrazin14@gmail.com', '32432534', 'ewfwefwef');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anime_list`
--
ALTER TABLE `anime_list`
  ADD PRIMARY KEY (`id_anime`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
