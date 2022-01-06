-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2021 at 01:17 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `universty_mangement_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `dates`
--

CREATE TABLE `dates` (
  `id_date` int(11) NOT NULL,
  `examination_date` date NOT NULL,
  `num_student` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dates`
--

INSERT INTO `dates` (`id_date`, `examination_date`, `num_student`) VALUES
(1, '2022-12-03', 9),
(2, '2022-12-04', 4),
(3, '2022-12-05', 0),
(4, '2022-12-06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `examinations`
--

CREATE TABLE `examinations` (
  `id_medical` int(11) NOT NULL,
  `lowerside` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `upperside` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `backbones` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isfit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sugarrate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hearrate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `medical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `virusC` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `toxic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `summary` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `examinations`
--

INSERT INTO `examinations` (`id_medical`, `lowerside`, `upperside`, `backbones`, `isfit`, `sugarrate`, `hearrate`, `medical`, `virusC`, `toxic`, `summary`) VALUES
(1, 'سليم', 'سليم', 'سليم', 'نعم', '', 'منتظم', 'سليم', 'سلبي', 'سلبي', 'dsadsad'),
(2, 'سليم', 'سليم', 'سليم', 'نعم', '', 'منتظم', 'سليم', 'سلبي', 'سلبي', ''),
(4, 'سليم', 'سليم', 'سليم', 'نعم', '2345', 'منتظم', 'سليم', 'سلبي', 'سلبي', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `national_num` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `university` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_date` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `national_num`, `university`, `phone`, `id_date`) VALUES
(1, 'sameh', '12345678912345', 'BFCAI', '01552679220', 1),
(2, 'سامح', '12345678912346', 'حاسبات و الذكاء الاصطناعي', '+02 125255525', NULL),
(4, 'سامح عوض', '00000000000000', 'حاسبات ', '0125555555', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dates`
--
ALTER TABLE `dates`
  ADD PRIMARY KEY (`id_date`);

--
-- Indexes for table `examinations`
--
ALTER TABLE `examinations`
  ADD PRIMARY KEY (`id_medical`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dates`
--
ALTER TABLE `dates`
  MODIFY `id_date` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
