-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2021 at 06:03 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contactform`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact-data`
--

CREATE TABLE `contact-data` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(55) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact-data`
--

INSERT INTO `contact-data` (`id`, `firstname`, `lastname`, `phone`, `email`, `message`) VALUES
(1, 'Rutuja', 'Deshmukh', '9827880880', 'rutujajd.2001@gmail.com', 'hey there');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact-data`
--
ALTER TABLE `contact-data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact-data`
--
ALTER TABLE `contact-data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
