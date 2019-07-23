-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 22, 2019 at 10:20 PM
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
  `num_in` varchar(255) NOT NULL,
  `time_in` time NOT NULL,
  `fee_in` varchar(11) NOT NULL,
  `id_categoryIn` int(11) NOT NULL,
  `information` text NOT NULL,
  `date_in` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_feeIn`
--

INSERT INTO `t_feeIn` (`num_in`, `time_in`, `fee_in`, `id_categoryIn`, `information`, `date_in`) VALUES
('5d3612370f3ab', '02:44:38', '500000', 1, 'Alhamdulillah', '2019-07-23'),
('5d3617873a96b', '03:07:15', '700000', 1, 'Bayar Utang', '2019-07-23');

-- --------------------------------------------------------

--
-- Table structure for table `t_feeOut`
--

CREATE TABLE `t_feeOut` (
  `num_out` varchar(255) NOT NULL,
  `time_out` time NOT NULL,
  `fee_out` varchar(11) NOT NULL,
  `id_categoryOut` int(11) NOT NULL,
  `information` text NOT NULL,
  `date_out` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_feeOut`
--

INSERT INTO `t_feeOut` (`num_out`, `time_out`, `fee_out`, `id_categoryOut`, `information`, `date_out`) VALUES
('5d3612db1ca4a', '02:47:13', '15000', 2, 'Ayam Geprek', '2019-07-23');

-- --------------------------------------------------------

--
-- Table structure for table `t_reports`
--

CREATE TABLE `t_reports` (
  `num_report` varchar(11) NOT NULL,
  `date` date NOT NULL,
  `saldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_reports`
--

INSERT INTO `t_reports` (`num_report`, `date`, `saldo`) VALUES
('5d3617931e4', '2019-07-23', 1185000);

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
  ADD KEY `date_in` (`date_in`),
  ADD KEY `category_in` (`id_categoryIn`);

--
-- Indexes for table `t_feeOut`
--
ALTER TABLE `t_feeOut`
  ADD PRIMARY KEY (`num_out`),
  ADD KEY `category_out` (`id_categoryOut`),
  ADD KEY `date_out` (`date_out`);

--
-- Indexes for table `t_reports`
--
ALTER TABLE `t_reports`
  ADD PRIMARY KEY (`num_report`);

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
-- Constraints for dumped tables
--

--
-- Constraints for table `t_feeIn`
--
ALTER TABLE `t_feeIn`
  ADD CONSTRAINT `t_feeIn_ibfk_1` FOREIGN KEY (`id_categoryIn`) REFERENCES `t_categoryIn` (`id_categoryIn`);

--
-- Constraints for table `t_feeOut`
--
ALTER TABLE `t_feeOut`
  ADD CONSTRAINT `t_feeOut_ibfk_1` FOREIGN KEY (`id_categoryOut`) REFERENCES `t_categoryOut` (`id_categoryOut`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
