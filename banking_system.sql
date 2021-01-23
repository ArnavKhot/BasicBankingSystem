-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2021 at 08:37 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `mini_statement`
--

CREATE TABLE `mini_statement` (
  `sno` int(4) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mini_statement`
--

INSERT INTO `mini_statement` (`sno`, `sender`, `receiver`, `amount`) VALUES
(1, 'Arnav', 'Radjabov', 100),
(2, 'Anish', 'Shubham', 50),
(3, 'Nathan', 'Utkarsh', 200),
(4, 'Radjabov', 'Magnus', 100),
(5, 'Magnus', 'Levon', 110),
(6, 'Levon', 'Arnav', 110),
(16, 'Magnus', 'Arnav', 100),
(17, 'Magnus', 'Shubham', 100);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(4) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(22) NOT NULL,
  `amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `name`, `email`, `amount`) VALUES
(1, 'Arnav', 'arnav@gmail.com', 1160),
(2, 'Magnus', 'magnus@gmail.com', 483),
(3, 'Radjabov', 'radjabov@gmail.com', 900),
(4, 'Anish', 'anish@gmail.com', 805),
(5, 'Anand', 'anand@gmail.com', 1100),
(6, 'Vidit', 'vidit@gmail.com', 1002),
(7, 'Levon', 'levon@gmail.com', 1100),
(8, 'Shubham', 'shubham@gmail.com', 1150),
(9, 'Nathan', 'nathan@gmail.com', 800),
(10, 'Utkarsh', 'utkarsh@gmail.com', 1500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mini_statement`
--
ALTER TABLE `mini_statement`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mini_statement`
--
ALTER TABLE `mini_statement`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
