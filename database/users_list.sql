-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2025 at 03:46 AM
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
-- Database: `dki-dnhap`
--

-- --------------------------------------------------------

--
-- Table structure for table `users_list`
--

CREATE TABLE `users_list` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','client') DEFAULT 'client'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_list`
--

INSERT INTO `users_list` (`id`, `username`, `email`, `password`, `role`) VALUES
(41, 'hoang1', 'phamviethoang170704@gmail.com', '$2y$10$yvkPzbFxNa7X8d8rO4Hi1OlClYOc/5BNGQsDN6GPkXhQoW671UOwK', 'admin'),
(42, 'Admin', 'admin@gmail.com', '$2y$10$2ASSeXauntwBKJym.2GpX..z2vkUbPlElfin8rq/uoSkWBQ.07Twu', 'admin'),
(43, 'nguyễn vân anh', 'vananh080104@gmail.com', '$2y$10$VLRWkjnjy2huODn8R8r9XeFOkPnjgO4t6f8Dyhl02v/Q/v2lnhQ86', 'client'),
(44, 'pham viet hoang', 'phamviethoang@gmail.com', '$2y$10$kI.NhFkhoJRXKSqVCBX8Qen5UvSdHNTebeVlmHQLmFaLl79UMhkza', 'client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_list`
--
ALTER TABLE `users_list`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users_list`
--
ALTER TABLE `users_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
