-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2023 at 07:19 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final2021`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_hash` varchar(255) NOT NULL,
  `user_role` int(11) NOT NULL DEFAULT 2,
  `gender` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `user_name`, `user_email`, `user_hash`, `user_role`, `gender`, `date_created`) VALUES
(1, 'admin', 'sam@gmail.com', '$2y$10$QCPxeIfCuUYa4KtRjQeFA.owcdCSXuqiVu/GKgDM2N.xkHEjwcCVu', 1, 'male', '2021-06-25 13:44:32'),
(3, 'jasson', 'a@mail.com', '$2y$10$YX/b0hgWtK4O3NesIV/0TOG4LVsfQPK1vANnZTAh0Ca9sey6i91NO', 2, '', '2023-02-21 10:50:54'),
(4, 'Jassson', 'jassson@mail.com', '$2y$10$48c3TozXKAe3KBM12Sz2f.XScoFP.h.9HCSwwiX7Q.oDBU34gSNIW', 2, '', '2023-03-04 12:13:15'),
(5, 'userpass123456', 'up@mail.com', '$2y$10$GpV21Qo4SjJbhh1TR5Q/YuqhinV.jB/fOXRKiiGp4Ewhd8dh8ZcS.', 2, '', '2023-07-08 23:00:36'),
(6, 'user123', 'mail@mailnot.com', '$2y$10$16/eppl1IfCOi8SkdsODZuGIFXTMHRyr/jOuuGoUt//LX52fdXOUO', 2, '', '2023-07-12 14:54:52'),
(7, 'user1234', 'mail@mail.com', '$2y$10$99zLTRlppQVDD0TuLOwEC.PnKUdFWy8SoVUuYC8pC/jpFaRwMgwpS', 2, '', '2023-07-15 21:55:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
