-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2020 at 06:30 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `st_code` varchar(10) NOT NULL,
  `st_name` varchar(50) NOT NULL,
  `st_huis` varchar(10) NOT NULL,
  `st_nas` int(10) NOT NULL,
  `st_phone_number` int(10) NOT NULL,
  `st_address` text NOT NULL,
  `st_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `st_code`, `st_name`, `st_huis`, `st_nas`, `st_phone_number`, `st_address`, `st_password`) VALUES
(1, 'B170910001', 'Ууганбаатар', 'эр', 22, 99374200, 'uchka@gmail.com', 'uchka2200'),
(2, 'B170910002', 'Gantogtoh', 'эр', 21, 99113230, 'sahriin_gol', 'gnagna'),
(3, 'B170910003', 'Tsengelmaa', 'эм', 21, 91528620, 'darhan-Uul', 'ts'),
(4, 'B170910004', 'Uyngaa', 'эм', 21, 99909878, 'erdenet', '123456789'),
(5, 'B170910006', 'Temuujin', 'эр', 21, 95987620, 'orhon', 'temuujin09'),
(7, 'B170910007', 'Olziisaikhan', 'эр', 21, 88212110, 'selenge', 'olziolzi'),
(10, 'B170910008', 'Nasanbat', 'эр', 23, 89766712, 'darhan-Uul', 'hihihi'),
(11, 'B170910009', 'Badamtsetseg', 'эм', 21, 99966442, 'darhan-Uul', 'badmaa11'),
(12, 'B170910010', 'Telmen', 'эр', 23, 99976543, 'darhan-Uul', 'telmen'),
(13, 'B170910011', 'Lhagwadorj', 'эр', 23, 88538959, 'darhan-Uul', 'lhagwa'),
(14, 'B170910012', 'Bilguun', 'эр', 23, 99112231, 'darhan-Uul', 'bekbek');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
