-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2017 at 10:57 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nmis-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts_tbl`
--

CREATE TABLE `user_accounts_tbl` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `age` int(2) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `role` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_accounts_tbl`
--

INSERT INTO `user_accounts_tbl` (`id`, `firstname`, `middlename`, `lastname`, `birthday`, `age`, `contact`, `street`, `city`, `email`, `password`, `status`, `role`) VALUES
(35, 'Jade', 'Malacaste', 'Jade', '08/14/1996', 20, '09499897397', 'Block 17 Lot 24 Phase 6 Camarin', 'Caloocan', 'jadebatal9614@yahoo.com', '$2y$10$cw5OJRpageyu8V7N15Y.Ju60EqXmYF44OGZSe6Ots377qHwTzYJgS', 1, 0),
(36, 'Jade', 'Malacaste', 'Jade', '08/14/1996', 20, '09499897397', 'Block 17 Lot 24 Phase 6 Camarin', 'Caloocan', 'jadebatal9614@yahoo.com', '$2y$10$9HjA6d46THYkMj2CehauFevVvWFjkUja2CZwZTPfHW5gNBeaQcbg6', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_accounts_tbl`
--
ALTER TABLE `user_accounts_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_accounts_tbl`
--
ALTER TABLE `user_accounts_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
