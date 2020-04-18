-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2020 at 10:59 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `ID_Medicine` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`ID_Medicine`, `Name`, `Qty`) VALUES
(1, 'Amoxicillian', 32),
(2, 'Cetirizine', 95),
(3, 'Clindamycin', 64),
(4, 'Clopidogrel', 96),
(5, 'Diclofenac', 99),
(6, 'Domperidone', 117),
(7, 'Dulcolax', 102),
(8, 'Fluoxetine', 46),
(9, 'Gabapentin', 70),
(10, 'Lisinopril', 86);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `ID_Patient` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Middlename` varchar(25) NOT NULL,
  `Surname` varchar(25) NOT NULL,
  `Status` enum('Prescription in progress','Prescription ready','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`ID_Patient`, `Name`, `Middlename`, `Surname`, `Status`) VALUES
(1, 'John', '', 'Smith', 'Prescription ready'),
(2, 'Simon', 'James', 'Wright', 'Prescription ready'),
(5, 'Liam', '', 'Johnstone', 'Prescription ready'),
(7, 'Keith', '', 'Richards', 'Prescription ready'),
(8, 'Fiona', 'Rose', 'Parker', 'Prescription ready'),
(11, 'Laura', '', 'Stevenson', 'Prescription ready'),
(12, 'Michael', '', 'Osborne', 'Prescription ready'),
(15, 'Katie', '', 'White', 'Prescription ready'),
(16, 'James', 'Andrew', 'Murray', 'Prescription ready');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `ID` int(11) NOT NULL,
  `ID_Patient` int(11) NOT NULL,
  `ID_Medicine` int(11) NOT NULL,
  `Status` enum('Prescription in Progress','Prescription Ready','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`ID`, `ID_Patient`, `ID_Medicine`, `Status`) VALUES
(1, 1, 1, 'Prescription Ready'),
(2, 2, 1, 'Prescription Ready'),
(3, 1, 1, 'Prescription Ready'),
(4, 2, 1, 'Prescription Ready');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `ID` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`ID`, `username`, `password`) VALUES
(1, 'JSmith', 'jsmithpass'),
(2, '', 'testpass');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD UNIQUE KEY `ID_Medicine` (`ID_Medicine`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD UNIQUE KEY `ID_Patient` (`ID_Patient`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
