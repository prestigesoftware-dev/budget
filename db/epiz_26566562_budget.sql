-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2020 at 03:23 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `budget`
--

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE `budget` (
  `id` text NOT NULL,
  `orgname` text NOT NULL,
  `description` text NOT NULL,
  `cost` text NOT NULL,
  `yrs` text NOT NULL,
  `datee` text NOT NULL,
  `sta` text NOT NULL,
  `fsta` text NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `budget`
--

INSERT INTO `budget` (`id`, `orgname`, `description`, `cost`, `yrs`, `datee`, `sta`, `fsta`, `sn`) VALUES
('181807', 'MINISTRY OF WORKS', 'NECO', '31000', '2020', '20/Sep/05', '0', '0', 1),
('181807', 'MINISTRY OF WORKS', 'WAEC', '44000', '2020', '20/Sep/05', '0', '0', 2),
('370773', 'MINISTRY OF WORKS', 'SECONDARY SCHOOLS', '1200000', '2021', '20/Sep/05', '1', '1', 3),
('370773', 'MINISTRY OF WORKS', 'PRIMARY SCHOOLS', '600000', '2021', '20/Sep/05', '1', '1', 4),
('370773', 'MINISTRY OF WORKS', 'TERTIARY INSTITUTIONS', '10000000', '2021', '20/Sep/05', '1', '1', 5),
('370773', 'MINISTRY OF WORKS', 'TERTIARY INSTITUTIONS', '10000000', '2021', '20/Sep/05', '1', '1', 7),
('370773', 'MINISTRY OF WORKS', 'WAEC', '2000', '2021', '20/Sep/05', '1', '1', 9),
('370773', 'MINISTRY OF WORKS', 'WAEC', '2000', '2021', '20/Sep/05', '1', '1', 10),
('370773', 'MINISTRY OF WORKS', 'NECO', '2000', '2021', '20/Sep/05', '1', '1', 11),
('370773', 'MINISTRY OF WORKS', 'NABTEB', '4000', '2021', '20/Sep/05', '1', '1', 12),
('265768', 'MINISTRY  OF SPORT', 'AFCON', '2000000', '2021', '20/Sep/06', '1', '1', 13),
('265768', 'MINISTRY  OF SPORT', 'WORD CUP', '4000000', '2021', '20/Sep/06', '1', '1', 14);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(225) NOT NULL,
  `category` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(4, 'MINISTRY OF WORKS'),
(5, 'MINISTRY  OF SPORT');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(255) NOT NULL,
  `fnam` varchar(255) NOT NULL,
  `lnam` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `pno` varchar(255) NOT NULL,
  `haddress` varchar(255) NOT NULL,
  `datee` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `fnam`, `lnam`, `email`, `pass`, `pno`, `haddress`, `datee`, `gender`, `img`, `dept`) VALUES
(1, 'ademola', 'Adewale', 'admin', 'admin', '123465', 'offa', '2020-08-18', 'male', 'img/54641.jpg', 'Admin'),
(3, 'Sheriff', 'Mustapha', 'Sheriffmayowa0293@gmail.com', '1234567', '08069484771', 'Soladoye street', '2020-08-07', 'male', 'img/45371.jpg', 'MINISTRY OF WORKS'),
(4, 'Sheriff', 'Mustapha', 'maymus2010@gmail.com', '1234567', '08069484771', 'Soladoye street', '2020-09-10', 'male', 'img/34296.jpg', 'MINISTRY  OF SPORT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `budget`
--
ALTER TABLE `budget`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `budget`
--
ALTER TABLE `budget`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
