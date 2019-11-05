-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2019 at 04:08 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_insurance`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(25) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `Name`, `Email`, `Password`) VALUES
(1, 'check', 'a@gamil.com', '123'),
(2, 'admin', 'admin@gami.com', '555'),
(6, 'abc', 'a@gamil.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `First_Name` varchar(25) NOT NULL,
  `Middle_Name` varchar(25) NOT NULL,
  `Last_Name` varchar(25) NOT NULL,
  `Gender` varchar(25) NOT NULL,
  `Age` varchar(25) NOT NULL,
  `DOB` varchar(25) NOT NULL,
  `City` varchar(25) NOT NULL,
  `Religion` varchar(25) NOT NULL,
  `Address` varchar(25) NOT NULL,
  `CNIC` varchar(25) NOT NULL,
  `Contact` varchar(25) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Marital_Status` varchar(25) NOT NULL,
  `client_no` varchar(25) NOT NULL,
  `Policy_type` varchar(25) NOT NULL,
  `Installment_Amount` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `First_Name`, `Middle_Name`, `Last_Name`, `Gender`, `Age`, `DOB`, `City`, `Religion`, `Address`, `CNIC`, `Contact`, `Email`, `Marital_Status`, `client_no`, `Policy_type`, `Installment_Amount`) VALUES
(3, 'Bilal', 'Ali', 'Ahmad', 'M', '21', '1998-12-31', 'ISl', 'islam', 'isl', '756432', '4532', 'w@gmail.com', 'Male', '42643', 'Life Insurance', ''),
(4, 'Ali', 'Ali', 'Ahmad', 'M', '21', '1998-12-31', 'ISl', 'islam', 'isl', '756432', '4532', 'w@gmail.com', 'Single', '43812', 'Life Insurance', '5000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
