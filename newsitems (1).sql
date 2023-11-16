-- phpMyAdmin SQL Dump
-- version 5.2.1-1.el8.remi
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 16, 2023 at 11:34 AM
-- Server version: 10.5.22-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sql2303314`
--

-- --------------------------------------------------------

--
-- Table structure for table `newsitems`
--

CREATE TABLE `newsitems` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `newsitems`
--

INSERT INTO `newsitems` (`id`, `title`, `description`) VALUES
(1, 'Glasglow 2023', 'Annual Glasgow firework show Novemeber 3rd Gardens'),
(2, 'GlasScare', 'Halloween in Glasgow 2023 '),
(3, 'GlasXmas', 'Christmas in Glasgow 2023'),
(4, 'GlasFools', 'April fools in Glasgow 2023'),
(5, 'GlasEaster', 'Easter in Glasgow 2023'),
(6, 'New years Glasgow', 'New years in Glasgow 2023');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newsitems`
--
ALTER TABLE `newsitems`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newsitems`
--
ALTER TABLE `newsitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
