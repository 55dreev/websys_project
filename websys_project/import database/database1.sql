-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2024 at 06:42 PM
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
-- Database: `database1`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--
-- Error reading structure for table database1.login: #1932 - Table &#039;database1.login&#039; doesn&#039;t exist in engine
-- Error reading data for table database1.login: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `database1`.`login`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `firstName`, `lastName`, `email`, `username`, `password`) VALUES
(3, 'andreev', 'toh', 'x33d@gmail', 'dreevghad', 'fcaaf05f'),
(4, 'qweqwe', 'qweqwewq', '11xd@gmail', 'LOL99', '123'),
(5, 'andreev', 'ataiza', 'guythatrocks24@gmail.com', 'smg1', 'a4124b88');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(10) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `firstName`, `lastName`, `email`, `password`) VALUES
(1, 'karl', 'de vera', 'karl@gmail.com', 'ee6445d1bcce11bbb1b00098c6e660ed'),
(2, 'karl', 'de', 'karldevera740@gmail.com', 'ee6445d1bcce11bbb1b00098c6e660ed'),
(3, 'karl', 'karl', 'a@a', 'ee6445d1bcce11bbb1b00098c6e660ed'),
(4, 'k', 'd', 'kd@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 'a', 'a', 'a@gmail.com', '202cb962ac59075b964b07152d234b70'),
(6, 'andreev', 'ataiza', 'xd@gmail', '202cb962ac59075b964b07152d234b70'),
(7, 'andreev', 'ataiza', 'niralo8992@cmheia.com', '76d80224611fc919a5d54f0ff9fba446'),
(8, 'aq', 'toh', 'lolol@gmail.corn', 'c548ea990e910339a122aa466ee7f971'),
(9, 'andreev', 'loks', 'smgsmgsmg@gmail.com', '202cb962ac59075b964b07152d234b70A'),
(10, 'andreev', 'toh', 'xd333@gmail', '827ccb0eea8a706c4c34a16891f84e7b'),
(11, '123', '123', '1xd@gmail', '202cb962ac59075b964b07152d234b70'),
(12, 'karlos', 'gay', 'gay@gmail', 'd1c905c5a54496dc7489145ef1976fd2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
