-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 21, 2024 at 10:11 AM
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
-- Database: `ardoise_numerique`
--

-- --------------------------------------------------------

--
-- Table structure for table `ardoise`
--

CREATE TABLE `ardoise` (
  `id_ardoise` int NOT NULL,
  `prenom` varchar(75) NOT NULL,
  `montant` decimal(15,2) NOT NULL,
  `id_user` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ardoise`
--

INSERT INTO `ardoise` (`id_ardoise`, `prenom`, `montant`, `id_user`) VALUES
(1, 'Théo', '4.15', 1),
(2, 'François', '5.05', 1),
(3, 'Damien', '3.36', 1),
(4, 'Mourad', '3.50', 1),
(5, 'Manuel', '3.25', 1),
(17, 'Thomas', '6.35', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int NOT NULL,
  `login_user` varchar(150) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `login_user`, `password`) VALUES
(1, 'legerant', '$2y$10$mvPjphMOOxJydXutWzYso.s4jxEDKyuGhqrGUW9JdhS0IPDm95Xgy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ardoise`
--
ALTER TABLE `ardoise`
  ADD PRIMARY KEY (`id_ardoise`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `login_user` (`login_user`),
  ADD UNIQUE KEY `password` (`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ardoise`
--
ALTER TABLE `ardoise`
  MODIFY `id_ardoise` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ardoise`
--
ALTER TABLE `ardoise`
  ADD CONSTRAINT `ardoise_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
