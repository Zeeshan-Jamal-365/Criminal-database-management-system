-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2019 at 08:12 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crimedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `criminal`
--

CREATE TABLE `criminal` (
  `id` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `date` date NOT NULL,
  `rating` int(5) NOT NULL,
  `description` varchar(50) NOT NULL,
  `release_date` date NOT NULL,
  `sentence_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `criminal`
--

INSERT INTO `criminal` (`id`, `fname`, `lname`, `age`, `gender`, `date`, `rating`, `description`, `release_date`, `sentence_type`) VALUES
(1, 'D', 'luffy', 21, 'M', '2019-08-22', 5, 'strawhat', '2030-05-23', 'piracy'),
(2, 'RORONOSA', 'Zoro', 25, 'M', '2019-08-23', 5, 'eyepatch', '2030-09-29', 'piracy'),
(3, 'chopper', 'hett', 21, 'm', '2019-08-27', 4, 'reindeer', '2021-05-30', 'theft'),
(4, 'sanji', 'noland', 22, 'm', '2019-05-27', 5, 'n/a', '2040-07-22', 'robbery'),
(5, 'nolsan', 'bedock', 30, 'm', '2018-07-06', 3, 'silver hair', '2028-12-23', 'arson'),
(6, 'piysal', 'aktar', 50, 'm', '2019-08-31', 3, 'red head', '2022-04-06', 'arson'),
(7, 'har', 'kel', 22, 'm', '2019-08-07', 5, 'short man', '2090-09-30', 'murder'),
(8, 'mahmud', 'Ahmed', 80, 'm', '2019-05-12', 5, 'brown hair', '2027-08-20', 'drug dealing'),
(9, 'labib', 'Mohammad', 56, 'm', '2018-02-22', 5, 'blue eye', '2067-09-21', 'murder'),
(10, 'sabbir', 'Hasan', 23, 'm', '2017-04-12', 3, 'brown hair', '2019-09-22', 'theft'),
(11, 'zeeshan', 'Jamal', 40, 'm', '2018-10-10', 1, 'short height', '2019-05-04', 'Picketing'),
(12, 'Homaira', 'Islam', 25, 'F', '2012-07-18', 2, 'brown hair', '2019-08-09', 'cyber crime');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `criminal`
--
ALTER TABLE `criminal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `criminal`
--
ALTER TABLE `criminal`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
