-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2020 at 07:38 AM
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
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `UserID` varchar(15) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `DoB` varchar(15) NOT NULL,
  `Gender` varchar(8) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `Education` varchar(40) NOT NULL,
  `BloodGroup` varchar(10) NOT NULL,
  `UserType` varchar(20) NOT NULL,
  `serial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`UserID`, `Name`, `Password`, `DoB`, `Gender`, `Email`, `Phone`, `Address`, `Education`, `BloodGroup`, `UserType`, `serial`) VALUES
('Ishmam', 'Syed Ishmam Shahir', '$2y$10$Sy1ao1tCSxmBwRUpRRt6VO7wuXOxNPSonHW1iW14L38.TgI.sVDVC', '1995-11-26', 'male', 'surdmor@gmail.com', '1843774927', 'Nikunja-2.', 'Bsc in SE.', 'o+', 'Admin', 1),
('Iftekhar', 'Iftekhar Ahmed', '$2y$10$Uaeic3FhS/kcoqqNgh69cOJ2Pe0STCS.1ewx1/CxOz3V0zzo7oLUy', '1997-07-16', 'male', 'admin@riverside.com', '13695417989', 'Khilkhet.', 'BSc in SE', 'a+', 'Project Manager', 2),
('Khalid', 'Khalid Hasan', '$2y$10$Yp9jHa62FEgXNSfK0HeIwOfIeQ3aztVEItq1NVL1S8A7Bb0Iei/yO', '1994-06-14', 'male', 'asd@ga.com', '1232354654', 'Chittagong.', 'BSc in SE', 'b+', 'Chief Programmer', 3),
('Prince', 'Tanjirul Islam Prince', '$2y$10$yWRv2okU5I/PgkynwGkhu..EwZJDrCJ9fASJP16PlYqhNm357ZxJK', '1990-06-05', 'male', '3425@ywstga.com', '213325345567', 'Nikunja-2.', 'BSc in SE', 'a+', 'Chief Programmer', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`serial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
