-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 18, 2019 at 10:01 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ab_finance`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_categoryIn`
--

CREATE TABLE `t_categoryIn` (
  `id_categoryIn` int(11) NOT NULL,
  `cat_name` enum('GAJI','TEMAN','TAK TERDUGA','LEMBUR','ORANG TUA') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_categoryIn`
--

INSERT INTO `t_categoryIn` (`id_categoryIn`, `cat_name`) VALUES
(1, 'GAJI'),
(2, 'TEMAN'),
(3, 'TAK TERDUGA'),
(4, 'LEMBUR'),
(5, 'ORANG TUA');

-- --------------------------------------------------------

--
-- Table structure for table `t_categoryOut`
--

CREATE TABLE `t_categoryOut` (
  `id_categoryOut` int(11) NOT NULL,
  `cat_name` enum('LISTRIK','MAKAN','MINUM','BELANJA','UTANG','KULIAH','ORANG TUA','KOST','AIR') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_categoryOut`
--

INSERT INTO `t_categoryOut` (`id_categoryOut`, `cat_name`) VALUES
(1, 'LISTRIK'),
(2, 'MAKAN'),
(3, 'MINUM'),
(4, 'BELANJA'),
(5, 'UTANG'),
(6, 'KULIAH'),
(7, 'ORANG TUA'),
(8, 'KOST'),
(9, 'AIR');

-- --------------------------------------------------------

--
-- Table structure for table `t_feeIn`
--

CREATE TABLE `t_feeIn` (
  `num_in` int(11) NOT NULL,
  `time_in` time NOT NULL,
  `fee_in` varchar(11) NOT NULL,
  `category_in` int(11) NOT NULL,
  `information` text NOT NULL,
  `date_in` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_feeOut`
--

CREATE TABLE `t_feeOut` (
  `num_out` int(11) NOT NULL,
  `time_out` time NOT NULL,
  `fee_out` varchar(11) NOT NULL,
  `category_out` int(11) NOT NULL,
  `information` text NOT NULL,
  `date_out` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_reports`
--

CREATE TABLE `t_reports` (
  `num_reports` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_categoryIn`
--
ALTER TABLE `t_categoryIn`
  ADD PRIMARY KEY (`id_categoryIn`);

--
-- Indexes for table `t_categoryOut`
--
ALTER TABLE `t_categoryOut`
  ADD PRIMARY KEY (`id_categoryOut`);

--
-- Indexes for table `t_feeIn`
--
ALTER TABLE `t_feeIn`
  ADD PRIMARY KEY (`num_in`),
  ADD KEY `category_in` (`category_in`),
  ADD KEY `date_in` (`date_in`);

--
-- Indexes for table `t_feeOut`
--
ALTER TABLE `t_feeOut`
  ADD PRIMARY KEY (`num_out`),
  ADD KEY `category_out` (`category_out`),
  ADD KEY `date_out` (`date_out`);

--
-- Indexes for table `t_reports`
--
ALTER TABLE `t_reports`
  ADD PRIMARY KEY (`num_reports`),
  ADD KEY `date` (`date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_categoryIn`
--
ALTER TABLE `t_categoryIn`
  MODIFY `id_categoryIn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_categoryOut`
--
ALTER TABLE `t_categoryOut`
  MODIFY `id_categoryOut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `t_feeIn`
--
ALTER TABLE `t_feeIn`
  MODIFY `num_in` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_feeOut`
--
ALTER TABLE `t_feeOut`
  MODIFY `num_out` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_reports`
--
ALTER TABLE `t_reports`
  MODIFY `num_reports` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_feeIn`
--
ALTER TABLE `t_feeIn`
  ADD CONSTRAINT `t_feeIn_ibfk_1` FOREIGN KEY (`category_in`) REFERENCES `t_categoryIn` (`id_categoryIn`);

--
-- Constraints for table `t_feeOut`
--
ALTER TABLE `t_feeOut`
  ADD CONSTRAINT `t_feeOut_ibfk_1` FOREIGN KEY (`category_out`) REFERENCES `t_categoryOut` (`id_categoryOut`);

--
-- Constraints for table `t_reports`
--
ALTER TABLE `t_reports`
  ADD CONSTRAINT `t_reports_ibfk_1` FOREIGN KEY (`date`) REFERENCES `t_feeIn` (`date_in`),
  ADD CONSTRAINT `t_reports_ibfk_2` FOREIGN KEY (`date`) REFERENCES `t_feeOut` (`date_out`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;