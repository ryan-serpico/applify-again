-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 03, 2017 at 07:55 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `applify`
--

-- --------------------------------------------------------

--
-- Table structure for table `apps`
--

CREATE TABLE `apps` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `platform` text NOT NULL,
  `price` text NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apps`
--

INSERT INTO `apps` (`id`, `name`, `platform`, `price`, `category`) VALUES
(1, 'Instapaper', 'iOS', 'Free', 'News'),
(2, 'Overcast', 'iOS', 'Free, with in-app purchase', 'News'),
(3, 'Tweetbot', 'iOS', '$9.99', 'Social Media'),
(5, 'Todoist', 'iOS', 'Free, with in-app purchase', 'Productivity'),
(7, 'Reeder', 'iOS', '$4.99', 'News'),
(8, 'Weather Line', 'iOS', '$2.99', 'Weather'),
(9, 'Streaks', 'iOS', '$3.99', 'Productivity'),
(10, 'Nuzzel', 'iOS', 'Free', 'News'),
(11, 'Ulysses', 'iOS/Mac', '$44.99', 'Productivity'),
(12, 'Alfred 3', 'Mac', '$16.99', 'Productivity');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apps`
--
ALTER TABLE `apps`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apps`
--
ALTER TABLE `apps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
