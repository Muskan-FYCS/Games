-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2025 at 12:23 PM
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
-- Database: `games`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `participants` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `email`, `date`, `participants`, `created_at`) VALUES
(1, 'Muskan Kulkarni', 'muskankulkarni18@gmail.com', '2025-06-01', 4, '2025-05-31 12:55:10'),
(2, 'Muskan Kulkarni', 'muskankulkarni18@gmail.com', '2025-06-01', 4, '2025-05-31 12:56:45'),
(3, 'Muskan Kulkarni', 'muskankulkarni18@gmail.com', '2025-06-01', 4, '2025-05-31 12:56:47'),
(4, 'Muskan Kulkarni', 'muskankulkarni18@gmail.com', '2025-06-01', 4, '2025-05-31 12:56:50'),
(5, 'Muskan Kulkarni', 'muskankulkarni18@gmail.com', '2025-06-01', 4, '2025-05-31 12:57:22'),
(6, 'Muskan Kulkarni', 'muskankulkarni18@gmail.com', '2025-06-01', 4, '2025-05-31 12:57:30'),
(7, 'Muskan Kulkarni', 'muskankulkarni18@gmail.com', '2025-06-08', 6, '2025-05-31 12:58:11');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `message`, `submitted_at`) VALUES
(1, 'Muskan Kulkarni', 'muskankulkarni18@gmail.com', 'muku', '2025-05-27 08:58:41'),
(3, 'Muskan Kulkarni', 'muskankulkarni18@gmail.com', 'nhvjhv', '2025-05-27 09:00:24'),
(4, 'pallavi', 'pallavi@gmail.com', 'efgrwegv', '2025-05-31 10:21:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
