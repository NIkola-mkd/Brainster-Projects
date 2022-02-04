-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2021 at 06:44 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_01`
--

-- --------------------------------------------------------

--
-- Table structure for table `academy`
--

CREATE TABLE `academy` (
  `id` int(10) UNSIGNED NOT NULL,
  `academy_name` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academy`
--

INSERT INTO `academy` (`id`, `academy_name`) VALUES
(1, 'Студенти од маркетинг'),
(2, 'Студенти од програмирање'),
(3, 'Студенти од data science'),
(4, 'Студенти од дизајн');

-- --------------------------------------------------------

--
-- Table structure for table `client_reg`
--

CREATE TABLE `client_reg` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(64) DEFAULT NULL,
  `company_nam` varchar(64) DEFAULT NULL,
  `email` varchar(32) DEFAULT NULL,
  `number` varchar(20) DEFAULT NULL,
  `academy_student` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_reg`
--

INSERT INTO `client_reg` (`id`, `name`, `company_nam`, `email`, `number`, `academy_student`) VALUES
(11, 'John Doe', 'DELL', 'dell@gmail.com', '32432432', 'Студенти од програмирање'),
(12, 'Mark Smith', 'INTEL', 'mark123@yahoo.com', '4536546', 'Студенти од data science'),
(13, 'Maria Doe', 'IBM', 'mary54534@gmail.com', '0765343443', 'Студенти од маркетинг'),
(14, 'Anna Anderson', 'SwedenD', 'andersona@gmail.com', '453678643', 'Студенти од дизајн'),
(15, 'Jenny  Jordan ', 'INTEL', 'intel@gmail.com', '435675', 'Студенти од програмирање'),
(16, 'Bob Smith', 'IBM', 'bob@yahoo.com', '213456', 'Студенти од data science'),
(18, 'Mary Moe', 'MarketingAmerica', 'marketamerica@gmail.com', '34567', 'Студенти од маркетинг'),
(19, 'Rose Bush', 'ITech', 'itech@yahoo.com', '54353654', 'Студенти од data science'),
(20, 'John Doe', 'DELL', 'dell@gmail.com', '12332123', 'Студенти од data science'),
(21, 'Diana Smith', 'Funholding', 'funholding@yahoo.com', '324235436', 'Студенти од дизајн'),
(22, 'Allie Grater', 'Kan-code', 'kancode@gmail.com', '646456432432', 'Студенти од програмирање'),
(57, 'John Doe', 'DELL', 'dell@gmail.com', '12334343', 'Студенти од data science'),
(59, 'Sarah Johanson ', 'Kan-code', 'kancode@gmail.com', '43253456', 'Студенти од data science'),
(62, 'Felipe Maurice', 'INTEL', 'intel@gmail.com', '32143254325', 'Студенти од програмирање'),
(63, 'Olive Yew', 'Kan-code', 'kancode@gmail.com', '5435346', 'Студенти од маркетинг'),
(64, 'Ivana B. Withew', 'IBM', 'ibm@gmail.com', '34325435', 'Студенти од дизајн'),
(65, 'Anna Domino', 'INTEL', 'intel@gmail.com', '43242352', 'Студенти од data science');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academy`
--
ALTER TABLE `academy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_reg`
--
ALTER TABLE `client_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academy`
--
ALTER TABLE `academy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `client_reg`
--
ALTER TABLE `client_reg`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
