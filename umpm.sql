-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2025 at 01:05 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `crudapp_parashikimetemotit`
--

CREATE TABLE `crudapp_parashikimetemotit` (
  `id` bigint(20) NOT NULL,
  `qytetiparashikuar_umpm` varchar(255) DEFAULT NULL,
  `temperatura_umpm` varchar(255) DEFAULT NULL,
  `lageshtia_umpm` varchar(255) DEFAULT NULL,
  `DataRegjistrimit` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crudapp_parashikimetemotit`
--

INSERT INTO `crudapp_parashikimetemotit` (`id`, `qytetiparashikuar_umpm`, `temperatura_umpm`, `lageshtia_umpm`, `DataRegjistrimit`) VALUES
(11, 'Gjilan', '23 grade', '6 perqind', '2024-12-18 22:38:23.773242'),
(13, 'Prishtine', '-9 grade', '30 perqind', '2024-12-29 15:29:37.216043'),
(14, 'Gjakove', '30 grade', '2 perqind', '2024-12-29 15:30:31.350946');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crudapp_parashikimetemotit`
--
ALTER TABLE `crudapp_parashikimetemotit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crudapp_parashikimetemotit`
--
ALTER TABLE `crudapp_parashikimetemotit`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
