-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2020 at 07:37 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectprodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `ProjectID` int(10) NOT NULL,
  `ProjectName` varchar(50) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Manager` varchar(50) NOT NULL,
  `ProDesigner` varchar(50) NOT NULL,
  `ProProg` varchar(50) NOT NULL,
  `ProQAM` varchar(50) NOT NULL,
  `ApprovalManager` varchar(50) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`ProjectID`, `ProjectName`, `Description`, `Manager`, `ProDesigner`, `ProProg`, `ProQAM`, `ApprovalManager`, `Status`) VALUES
(1, 'School Management', 'Management system.', 'Ishmam', 'a', 'a', 'a', 'a', 'Running'),
(2, 'Hospital Management', 'Web app', 'Prince', 'a', 'a', 'a', 'a', 'Running'),
(3, 'River IT', 'Website', 'Iftekhar', 'a', 'a', 'a', 'a', 'Running'),
(4, 'DB', '4 database\'s', 'Khalid', 'a', 'a', 'a', 'a', 'Running');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`ProjectID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `ProjectID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
