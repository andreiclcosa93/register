-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2022 at 08:53 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magazin`
--

-- --------------------------------------------------------

--
-- Table structure for table `produs`
--

CREATE TABLE `produs` (
  `id` smallint(6) NOT NULL,
  `denumire` varchar(100) NOT NULL,
  `pret` decimal(10,0) NOT NULL,
  `imagine` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produs`
--

INSERT INTO `produs` (`id`, `denumire`, `pret`, `imagine`) VALUES
(6, '2', '2', '6217bcdd3a3d3tF9KP0V-assassins-creed-hd-wallpaper.jpg'),
(7, '3', '3', '6217c5bf13f1epexels-designecologist-1779487.jpg'),
(8, '2', '2', '6217c6d6e2fcf24.02.2022.jpg'),
(9, 'poza3', '24022022', '6217c9cbc609b24.02.2022.jpg'),
(10, '2', '2', '6217cbd74918023.02.2022.jpg'),
(11, '2', '2', '24.02.2022.jpg'),
(12, '2', '2', '24.02.2022.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `utilizator`
--

CREATE TABLE `utilizator` (
  `id` tinyint(4) NOT NULL,
  `email` varchar(100) NOT NULL,
  `parola` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `utilizator`
--

INSERT INTO `utilizator` (`id`, `email`, `parola`) VALUES
(4, 'admin@test.ro', 'c8ffe9a587b126f152ed3d89a146b445'),
(5, 'admin2@test.ro', '202cb962ac59075b964b07152d234b70'),
(6, 'cosa@yahoo.com', '3fb58715a0243c25ffb09ab1e769c05b'),
(7, '', 'd41d8cd98f00b204e9800998ecf8427e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produs`
--
ALTER TABLE `produs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilizator`
--
ALTER TABLE `utilizator`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produs`
--
ALTER TABLE `produs`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `utilizator`
--
ALTER TABLE `utilizator`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
