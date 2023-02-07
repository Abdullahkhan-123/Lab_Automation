-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2022 at 10:52 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `cpritable`
--

CREATE TABLE `cpritable` (
  `ID` int(11) NOT NULL,
  `Reason` varchar(50) NOT NULL,
  `Need` varchar(20) NOT NULL,
  `Desc` text NOT NULL,
  `ProductID` int(11) NOT NULL,
  `UniqueC` varchar(12) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 0,
  `Date` timestamp NOT NULL DEFAULT current_timestamp(),
  `Checking` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cpritable`
--

INSERT INTO `cpritable` (`ID`, `Reason`, `Need`, `Desc`, `ProductID`, `UniqueC`, `Status`, `Date`, `Checking`) VALUES
(5, 'Third class', 'All thing need to ch', 'please set this product', 1, '2147483647', 1, '2022-11-14 21:24:07', 2),
(14, 'Good Product', 'this product is very', 'very good product owner weldone', 7, 'c693152e2cee', 1, '2022-11-14 23:26:45', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `PName` varchar(20) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Spec` varchar(255) NOT NULL,
  `image` varchar(50) NOT NULL,
  `Desc` text NOT NULL,
  `UniqueC` varchar(12) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 1,
  `Date` timestamp NOT NULL DEFAULT current_timestamp(),
  `Checking` int(11) NOT NULL DEFAULT 0,
  `SrsToCpri` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `PName`, `Title`, `Spec`, `image`, `Desc`, `UniqueC`, `UserID`, `Status`, `Date`, `Checking`, `SrsToCpri`) VALUES
(1, 'Capacitor ', 'New Capacitor ', '2200', '1668210663Capacitor.jfif', 'Best Capacitor 2200, Volt', '2147483647', 4, 1, '2022-11-12 23:56:40', 2, 1),
(7, 'Capacitor', 'New 2 Capacitor', '2222', '1668465745Capacitor2.jpg', 'Best Capacitor 2222 volt', 'abd43302d3', 4, 1, '2022-11-14 22:42:25', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `srstocpri`
--

CREATE TABLE `srstocpri` (
  `ID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `DateAndTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `UniqueC` varchar(15) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 1,
  `Checking` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `srstocpri`
--

INSERT INTO `srstocpri` (`ID`, `ProductID`, `DateAndTime`, `UniqueC`, `Status`, `Checking`) VALUES
(1, 1, '2022-11-14 20:39:29', '308990385', 1, 2),
(2, 7, '2022-11-14 22:48:39', 'e94552f3ce', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `UniqueC` int(11) NOT NULL,
  `Type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `UserName`, `Email`, `Password`, `UniqueC`, `Type`) VALUES
(4, 'Abdullah', 'abdullahkhan@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 588615, 'User'),
(5, 'SRS', 'srs@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 528669, 'Srs'),
(6, 'Cpri', 'cpri@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 939088, 'Cpri');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cpritable`
--
ALTER TABLE `cpritable`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `srstocpri`
--
ALTER TABLE `srstocpri`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cpritable`
--
ALTER TABLE `cpritable`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `srstocpri`
--
ALTER TABLE `srstocpri`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
